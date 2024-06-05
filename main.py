from pyrogram import Client, filters
from pyrogram.types import InlineKeyboardMarkup, InlineKeyboardButton,ReplyKeyboardMarkup,WebAppInfo
import pymysql
import json


with open('config/config.json', 'r') as file:
    data = json.load(file)

database_name = data["DataBase"]['database_name']

database_username = data["DataBase"]['database_username']

database_password = data["DataBase"]['database_password']


app = Client(data['Account']["chanell_link"], api_id=data['Account']["api_id"], api_hash=data['Account']["api_hash"], bot_token=data['Account']["token"])
def balance(user):
    connection = pymysql.connect(host='localhost',
                             user=database_username,
                             password=database_password,
                             database=database_name)
    with connection.cursor() as cursor:
        cursor.execute('SELECT * FROM users WHERE username=%s', (user,))
        results = cursor.fetchall()

        for row in results:
            return row
    connection.close()
def intvi(username):
    connection = pymysql.connect(host='localhost',user=database_username,password=database_password,database=database_name)
    with connection.cursor() as cursor:
        sql = "UPDATE users SET invites = invites + 1 WHERE username =%s"
        cursor.execute(sql, (username,))
        connection.commit()
    connection.close()

async def check_member(client, message):

    try:
        user_id = message.from_user.id
        user = await client.get_chat_member(data['Account']["chanell_link"], user_id)
        if user.status in ['member', 'creator', 'administrator']:
            return True
    except:
        mark = ReplyKeyboardMarkup(
        keyboard=[
            ["Balnsce 📦", "Withdraw 👜","Invite 🔊 "]
        ],
        resize_keyboard=True
    )
        join = InlineKeyboardMarkup(
            [[InlineKeyboardButton("Subscribe Channel 🤏", url="https://t.me/{}".format(data['Account']["chanell_link"]))]]
        )
        await message.reply("Welcome to Scorpian-Coin [SCOP-COIN] bot",user_id,reply_markup=mark)
        await message.reply_text("""
        To use the bot, you must first join the channel 🦂🪙
        """, reply_markup=join)
        return False
async def join(user,message):
    inline_keyboard = InlineKeyboardMarkup(
        [
            [
                InlineKeyboardButton(
                    text="Play 🫵",
                    web_app=WebAppInfo(url=f"{data['URL']}/index.php?chat_id={user.id}&username={user.first_name}")

                )
            ],
            [
                InlineKeyboardButton(
                    text="Join Community 🧸",
                    url="https://t.me/{}".format(data['Account']["chanell_link"])
                )
            ],
            [
                InlineKeyboardButton(
                    text="Support 🔊",
                    url="https://t.me/{}".format(data["Account"]["admin_username"])
                )
            ]
        ]
    )
    await message.reply_photo(
            "photos/scorpian.png",
            caption=f"Hey @{user.username}! Welcome to SCOPN-Coin👩🏽‍🚀\n\n🫵🏻 Tap the SCOPN-Coin to see your balance grow.\n"
                    "SCOPN-Coin is the first Decentralized Application based on a unique model where the community decides "
                    "on which blockchain the token will be listed - 💎 Ton, 🧬 Solana, or 🔹 Ethereum\nMaybe all of them? \n"
                    "The choice is yours!\nGot friends, relatives, co-workers?\nBring them all into the game.\nMore Mates - more coins",
            reply_markup=inline_keyboard
        )
@app.on_message(filters.command("start"))
async def start(client, message):
    user = message.from_user
    text = message.text
    check_member_filter = await check_member(client, message)

    if text.startswith("/start "):
        text = text.replace("/start ","")
        intvi(user.username)
        await client.send_message(text,f"Good news!!\nSomeone [@{user.username}] has been invited to the bot by you 🚀")
        if check_member_filter == None:
            await join(user,message)
            
    if check_member_filter == None:
        await join(user,message)
        
        

@app.on_message(filters.text)
async def Intvite(client, message):
    user = message.from_user
    
    
    if message.text == "Invite 🔊":
        await message.reply("🌟 Make mining a team effort! Invite your friends to ScopCoin and earn 1/8 of their total mining amount as a bonus. Let's grow our community and wealth together! 🚀\n\n"f"Your exclusive referral link: https://t.me/{data['Account']['bot_link']}?start={user.id}\n\n""Start sharing and watch your earnings multiply! 🌱",reply_markup=InlineKeyboardMarkup(
            [[InlineKeyboardButton("Share With Your Freinds 🫂", url="https://t.me/share/url?url=https://t.me/{}?start={}&text=Join%20me%20in%20ScopCoin%20and%20start%20mining%20today!%20Let's%20earn%20together!".format(data['Account']["bot_link"],user.id))]]
        ))
    if message.text == "Withdraw 👜":
        await message.reply("Coming Soon Listed Coin 🪙",user.id)
    if message.text == "Balnsce 📦":
        reply_markup=InlineKeyboardMarkup(
            [
                [
                    InlineKeyboardButton(
                    "Withdraw 👜", callback_data="Withdraw")
                ]
            ]
        )
        if(balance(user.id)):
            await message.reply(f"Every 500 Scorpian-Coins equal = $10\nYour balance: {balance(user.id)[1]} 🪙\n"
f"Number of invitations: {balance(user.id)[2]} 🫂\n"
f"Your exclusive referral link: https://t.me/{data['Account']['bot_link']}?start={user.id}\n\n"f"?start={user.id} 🎈\n",user.id,reply_markup=reply_markup)
        else:
            await message.reply("To receive inventory, first collect coins, then request inventory 🦂🪙")

@ app.on_callback_query()
async def buttons(bot, update):
    if update.data == "Withdraw":
        await update.message.edit_text("Pick up date \n 30/06/2024")




app.run()

