<?php
//
//
include("config.php");

if ($_GET["user"]) {
    $username = $_GET["user"];
    if (users($username) == 1) {
        $_SESSION["user"] = $username;
        $info = info($_SESSION["user"]);
        echo "<script>alert('Hello User @$username  Coin Gived ".random_int(100,500)."')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            user-select: none;
        }

        #coin-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        #charge {
            width: 30px;
            height: 30px;
        }

        .shake {
            animation: shake 0.5s;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        #test {
            border: 2px solid gold;
            border-radius: 1em;
            border-left: 1em;
            border-right: 1em;
            box-shadow: 0 0 10px rgb(107, 100, 57), 0 0 2px gold, 0 0 3px gold, 0 0 4px gold;
        }
    </style>
</head>

<body>
    <div class="min-h-screen bg-black flex justify-center items-center p-4">
        <div class="bg-zinc-800 rounded-2xl shadow-lg p-4 w-full max-w-md text-white" id="test">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <img src="./photos/logo.jpg" width="40px" height="40px" alt="User Avatar" class="rounded-full mr-2">
                    <span>Iran (CEO)</span>
                </div>
                <button class="bg-600 p-2 rounded-full">
                    <img src="./photos/binance.webp" alt="Settings" width="30px" height="30px">
                </button>
            </div>
            <div class="flex justify-between items-center bg-zinc-700 p-2 rounded-lg mb-4">
                <div class="text-center">
                    <span class="block text-sm">Earn per tap</span>
                    <span class="block text-lg">+10</span>
                </div>
                <div class="text-center">
                    <span class="block text-sm">Coins to level up</span>
                    <span class="block text-lg">50M</span>
                </div>
                <div class="text-center">
                    <span class="block text-sm">Profit per hour</span>
                    <span class="block text-lg">+1k</span>
                </div>
            </div>
            <div class="text-center mb-4">
                <div class="text-4xl mb-2">
                    <img src="./photos/logo.jpg" width="40px" height="40px" alt="Coin" class="inline-block mr-2"
                        id="coin-image">
                    <span id="number"><?php echo $info["balanse"] ?></span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Charge</span>
                    <div class="bg-zinc-600 rounded-full h-2 w-full mx-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 50%;" id="inventory-fill"></div>
                    </div>
                    <span>Level 7/10</span>
                </div>
            </div>
            <div class="flex justify-center mb-4" id="coin">
                <img src="./photos/logo.jpg" alt="Character" class="rounded-full border-4 border-green-500">
            </div>
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <img src="./photos/charge.png" id="charge" alt="Energy" class="mr-2">
                    <span id="inventory">107 / 5000</span>
                </div>
                <div class="flex items-center">
                    <img src="data:image/png;base64,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"
                        width="40px" height="40px" alt="Boost" class="mr-2">
                    <span>Boost</span>
                </div>
            </div>
            <div class="flex justify-between items-center bg-zinc-700 p-2 rounded-lg">
                <button class="flex-1 flex flex-col items-center alert-button">
                    <img src="./photos/binance.webp" alt="Exchange" class="mb-1" width="40px" height="40px">
                    <span>Exchange</span>
                </button>
                <button class="flex-1 flex flex-col items-center alert-button">
                    <img src="./photos/kolang.png" alt="Mine" class="mb-1" width="70px" height="70px">
                    <span>Mine</span>
                </button>
                <button class="flex-1 flex flex-col items-center alert-button">
                    <img src="photos/Friend.png" alt="Airdrop" class="mb-1" width="40px" height="40px">
                    <span>Friends</span>
                </button>
                <button class="flex-1 flex flex-col items-center alert-button">
                    <img src="photos/Earn.png" alt="Friends" class="mb-1" width="50px" height="50px">
                    <span>Earn</span>
                </button>
                
                <button class="flex-1 flex flex-col items-center alert-button">
                    <img src="photos/Airdrop.png" alt="Airdrop" class="mb-1" width="50px" height="50px">
                    <span>Airdrop</span>
                </button>
            </div>
        </div>
    </div>
    <div id="sticker" style="display: none; position: absolute;">

        <img src="./photos/kolang.png" alt="Sticker" style="width: 250px; height: 100px;">
    </div>
    <audio id="audio" src="1.mp3"></audio>
    <script>
        var currentSearch = window.location.search;
        let count = 0;
        let inventory = 1000;
        const maxInventory = 1000;
        let intervalId;
        const sticker = document.getElementById('sticker');
        const audio = document.getElementById('audio');

        function incrementNumber(event) {
            if (inventory > 0) {
                count++;
                inventory--;
                updateInventory();
                if (inventory === 0) {
                    startReplenishing();
                }

                document.getElementById('coin').classList.add('shake');
                setTimeout(() => {
                    document.getElementById('coin').classList.remove('shake');
                }, 500);
                audio.currentTime = 0;
                audio.play();
                setTimeout(() => {
                    audio.pause();
                }, 1000);

                const x = event.clientX;
                const y = event.clientY;
                sticker.style.left = `${x - sticker.offsetWidth / 10}px`;
                sticker.style.top = `${y - sticker.offsetHeight / 10}px`;
                sticker.style.display = 'block';

                setTimeout(() => {
                    sticker.style.display = 'none';
                }, 1000);

                var formData = new FormData();
                formData.append('number', count);
                formData.append('username', currentSearch);

                fetch('get.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(data => console.log(data))
                    .catch(error => console.error('Error:', error));
            }
        }

        function updateInventory() {
            document.getElementById('number').textContent = count;
            document.getElementById('inventory').textContent = inventory;
            document.getElementById('inventory-fill').style.width = (inventory / maxInventory * 100) + '%';
        }

        function startReplenishing() {
            intervalId = setInterval(() => {
                if (inventory < maxInventory) {
                    inventory += 3;
                    if (inventory > maxInventory) {
                        inventory = maxInventory;
                    }
                    updateInventory();
                } else {
                    clearInterval(intervalId);
                }
            }, 1000);
        }

        document.getElementById('inventory').textContent = inventory;
        document.getElementById('inventory-fill').style.width = (inventory / maxInventory * 100) + '%';

        document.getElementById('coin').addEventListener('click', incrementNumber);
        document.querySelectorAll('.alert-button').forEach(button => {
            button.addEventListener('click', () => {
                alert('Coming Soon');
            });
        });
    </script>
</body>

</html>