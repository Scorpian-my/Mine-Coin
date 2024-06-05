<?php
session_start();
include("config.php");

$information = info($_SESSION["chat_id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScopCoin - Boosters</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="icon" type="image/x-icon" href="./assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/favicon/apple-touch-icon.png">
    <link rel="android-chrome-192x192" href="./assets/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="android-chrome-512x512" href="./assets/favicon/android-chrome-512x512.png" sizes="512x512">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="boost">

    <div class="haeder">
        <a href="./index.php?user=<?php echo $_SESSION["chat_id"] ?>">
            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11.9299H2" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.00009 19L2.84009 14C2.5677 13.7429 2.35071 13.433 2.20239 13.0891C2.05407 12.7452 1.97754 12.3745 1.97754 12C1.97754 11.6255 2.05407 11.2548 2.20239 10.9109C2.35071 10.567 2.5677 10.2571 2.84009 10L8.00009 5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <!-- <h1>Notcoin</h1> -->
    </div>

    <div class="user-balance">
        <div class="balance-title">
            <span class="select-none">Your balance</span>
        </div>
        <div class="balance-coins">
            <img src="./photos/scorpian.png" width="50px" alt="">
            <span><?php echo $information["balanse"]; ?></span>
        </div>

    </div>


    <div class="free-boosts">
        <div class="free-boosts-title">
            <h2>Free daily boosters</h2>
        </div>
        <div class="free-boosts-buttons">

            <div class="free-boost-button m-r" id="turbo">
                <div class="free-boosts-detail">
                    <span class="select-none">Turbo</span>
                    <span class="available select-none">3/3 available</span>
                </div>
                <div>
                    <img src="./assets/images/rocket.png" width="30px" alt="">
                </div>
            </div>

            <div class="free-boost-button m-l" id="charge">
                <div class="free-boosts-detail">
                    <span class="select-none">Full Energy</span>
                    <span class="available select-none">3/3 available</span>
                </div>
                <div>
                    <img src="./assets/images/thunder.png" width="30px" alt="">
                </div>
            </div>


        </div>

    </div>

    <div class="boosters">
        <div class="boosters-title">
            <h2 class="select-none">Boosters</h2>
        </div>

        <div class="boosters-buttons">
            <div class="boosters-button m-b-1">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/point_up.png" width="50px">
                    </div>
                    <div>
                        <div>
                            <h4>Multitap</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">250,000</h5>
                            <span class="m-r-25">•</span>
                            <p>8 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>

            <div class="boosters-button m-b-1">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/battery.png" width="45px">
                    </div>
                    <div>
                        <div>
                            <h4>Energy Limit</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">250,000</h5>
                            <span class="m-r-25">•</span>
                            <p>8 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>

            <div class="boosters-button m-b-1">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/thunder.png" width="50px">
                    </div>
                    <div>
                        <div>
                            <h4>Multitap</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">250,000</h5>
                            <span class="m-r-25">•</span>
                            <p>8 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>

            <div class="boosters-button">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/robot_face.png" width="45px">
                    </div>
                    <div>
                        <div>
                            <h4>Multitap</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">250,000</h5>
                            <span class="m-r-25">•</span>
                            <p>8 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>
        </div>
    </div>


    <div class="buy-skins">
        <div class="boosters-title" style="padding: 0 1.25rem;">
            <h2 class="select-none">Buy Skins</h2>
        </div>

        <div class="swiper skinSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/scorpian.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Basic</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <h5>You own it</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/silver.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Silver</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/cookie.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Cookie</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="skin-button">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/soccer-ball.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Soccer Ball</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/diamond.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Diamond</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="skin-button">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/diamond (1).png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Diamond 2</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/scorpian.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"></div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".skinSwiper", {
            slidesPerView: 2,
            spaceBetween: 10

        });
    </script>

    <script src="./assets/js/charge.js"></script>
    <script src="./assets/js/boost.js"></script>
</body>

</html>
