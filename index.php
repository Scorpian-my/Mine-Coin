<?php
session_start();

include("config.php");

if (isset($_GET["chat_id"]) and isset($_GET["username"])) {
    $chat_id = htmlspecialchars($_GET["chat_id"]);
    $username = htmlspecialchars($_GET["username"]);
    if (users($chat_id) == 1) {
        $_SESSION["chat_id"] = $chat_id;
        $info = info($_SESSION["chat_id"]);
    } else {
        header('Location: index.php?chat_id=' . $chat_id);
    }
} else {
    echo "<script>alert('Welcome')</script>";
    header('Location: https://t.me/' . $data->Account->chanell_link);
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/coin.css">

    <style>
        .score-display {
            font-size: 50px;
        }
    </style>
</head>

<body>

    <div class="min-h-screen bg-black flex justify-center items-center p-4">
        <div class="bg-zinc-800 rounded-2xl shadow-lg p-4 w-full max-w-md text-white">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <img src="./photos/logo.jpg" width="40px" height="40px" alt="User Avatar" class="rounded-full mr-2">
                    <span><?php if ($username == "") {
                                echo $chat_id;
                            } else {
                                echo $username;
                            } ?> (SCP)</span>
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
                    <img src="./photos/logo.jpg" width="40px" height="40px" alt="Coin" class="inline-block mr-2" id="coin-image">
                    <span id="score" class="score"><?php echo $info["balanse"]; ?></span>
                </div>
            </div>
            <div class="flex justify-center mb-4" id="coin">
                <img src="./photos/bomb.png" width="80%" height="80%" alt="Character" class="rounded-full clickable" onclick="startVibration()">
            </div>
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <img src="./photos/charge.png" id="charge" alt="Energy" class="mr-2">
                    <div class="flex justify-between items-center">
                        <span id="inventory"><?php echo $info["charge"]; ?></span>
                        <span> / 5000</span>
                    </div>
                </div>

            </div>
            <div class="bg-zinc-600 rounded-full h-2 w-full mx-2">
                <div class="bg-yellow-500 h-2 rounded-full" style="width: 10%;" id="inventory-fill"></div>
            </div><br>

            <div class="flex justify-between items-center bg-zinc-700 p-2 rounded-lg">
                <button class="flex-1 flex flex-col items-center ">
                    <img src="./photos/binance.webp" alt="Exchange" class="mb-1" width="40px" height="40px">
                    <span>Exchange</span>
                </button>
                <button class="flex-1 flex flex-col items-center ">
                    <a href="boost.php">
                        <img src="./photos/kolang.png" alt="Mine" class="mb-1" width="70px" height="70px">
                        <span>Mine</span>
                    </a>
                </button>
                <button class="flex-1 flex flex-col items-center ">
                    <img src="photos/Friend.png" alt="Airdrop" class="mb-1" width="40px" height="40px">
                    <span>Friends</span>
                </button>
                <button class="flex-1 flex flex-col items-center ">
                    <img src="photos/Earn.png" alt="Friends" class="mb-1" width="50px" height="50px">
                    <span>Earn</span>
                </button>
                <button class="flex-1 flex  flex-col items-center ">
                    <img src="photos/Airdrop.png" alt="Airdrop" class="mb-1" width="50px" height="50px">
                    <span>Airdrop</span>
                </button>
            </div>
        </div>
    </div>
    <div id="sticker" style="display: none; position: absolute;">
        <img src="./photos/kolang.png" alt="Sticker" style="width: 250px; height: 100px;">
    </div>
    <script>
        function startVibration() {
            // Check if the device supports vibration
            if ("vibrate" in navigator) {
                // Vibrate for 200ms
                window.navigator.vibrate(20);
            } else {
                console.log("Vibration not supported on this device");
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const image = document.querySelector('.clickable');
            const scoreElement = document.getElementById('score');
            const inventoryElement = document.getElementById('inventory');
            const inventoryFill = document.getElementById('inventory-fill');
            var currentSearch = window.location.search;
            var index = currentSearch.indexOf("&");
            var number = currentSearch.substring(1, index);

            let inventory = parseInt(inventoryElement.textContent, 10);
            const maxInventory = 5000;

            function updateInventory() {
                inventoryElement.textContent = `${inventory}`;
                inventoryFill.style.width = `${(inventory / maxInventory) * 100}%`;

                var formData = new FormData();
                formData.append('username', number.replace("chat_id=", ""));
                formData.append('charge', inventory);

                fetch('update.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.success) {
                            console.error('Error:', data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            function recharge() {
                if (inventory < maxInventory) {
                    inventory += 1;
                    if (inventory > maxInventory) {
                        inventory = maxInventory;
                    }
                    updateInventory();
                }
            }

            setInterval(recharge, 2000);

            image.addEventListener('click', function(event) {
                if (inventory > 0) {
                    inventory -= 1;
                    updateInventory();

                    image.classList.add('shake');
                    setTimeout(() => {
                        image.classList.remove('shake');
                    }, 500);

                    const scoreDisplay = document.createElement('div');
                    scoreDisplay.textContent = "+1";
                    scoreDisplay.classList.add('score-display');
                    const rect = image.getBoundingClientRect();

                    scoreDisplay.style.top = `${event.clientY - rect.top}px`;
                    scoreDisplay.style.left = `${event.clientX - rect.left}px`;
                    image.parentElement.style.position = 'relative';
                    image.parentElement.appendChild(scoreDisplay);

                    setTimeout(() => {
                        scoreDisplay.remove();
                    }, 2000);

                    var formData = new FormData();
                    formData.append('number', 1);
                    formData.append('username', number.replace("chat_id=", ""));

                    fetch('update.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                scoreElement.textContent = data.balanse;
                                inventoryElement.textContent = `${data.charge}`;
                            } else {
                                console.error('Error:', data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            });

            updateInventory();
        });
    </script>
</body>

</html>
