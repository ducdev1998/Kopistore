<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">

    <title>Kopi Store</title>

    <style>
        @font-face {
        font-family: 'Free 3 of 9';
        src: url('font/free3of9.ttf');
        }

        .code{
            font-family: 'Free 3 of 9';
        }
    </style>

</head>
<body>

    <div class="main">
        <div class="form form1">
            <span class="storename"><?php echo $_POST["ProductName"]; ?></span>
            <div class="code">
                <span class="code">*<?php echo $_POST["QRCode"]; ?>*</span>
            </div>
            <span class="pricename"><?php echo $_POST["QRCode"]; ?></span>
            <span class="price"><?php echo number_format($_POST["Price"],0,".",".") . " VNĐ"; ?></span>
        </div>

        <div class="form form2">
        <span class="storename"><?php echo $_POST["ProductName"]; ?></span>
            <div class="code">
                <span class="code">*<?php echo $_POST["QRCode"]; ?>*</span>
            </div>
            <span class="pricename"><?php echo $_POST["QRCode"]; ?></span>
            <span class="price"><?php echo number_format($_POST["Price"],0,".",".") . " VNĐ";?></span>
        </div>
        
    </div>

</body>
</html>