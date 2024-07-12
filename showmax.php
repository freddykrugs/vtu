<?php
echo'
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/showmax.css">
    <title>TV subscription</title>
</head>
<body>';

echo'
    <div class="container">
        <div class="gotv_sheet"></div>
        <div class="main">
            <div class="col1">
                <div class="info">
                    <span class="img_sheet">
                        <img src="assets/images/Showmax-text-removebg-preview.png" alt="">
                    </span>
                    <p>Choose from a range of GOtv bouquets for your entertainment. Easy payment, quick value delivery.</p>
                </div>
                <form action="" class="form">
                    <span class="list">
                        <p>Input smartcard number</p>
                        <input type="text" class="li-inp" placeholder="XXXX-XXXX-XXXX" required>
                    </span>
                    <span class="list">
                        <p>Select bouquet</p>
                        <input type="text" class="li-inp"  required>
                    </span>
                    <span class="list">
                        <p>Price</p>
                        <input type="text" class="li-inp on"  readonly>
                    </span>
                    <button class="btn">Make Payment</button>
                </form>
        </div>
        </div>
    </div>';

echo'
</body>';
?>