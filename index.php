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

        @font-face {
        font-family: 'SF UI Text Regular';
        font-style: normal;
        font-weight: normal;
        src: local('SF UI Text Regular'), url('font/SFUIText-Regular.woff') format('woff');
        }

        .code{
            font-family: 'Free 3 of 9';
        }

    </style>

</head>
<body>

    <div class="wrapper">

        <h2>IN MÃ SẢN PHẨM</h2>

        <form action="print.php" method="post">

        <label for="ProductName">Nhập Tên sản phẩm: </label>
        <input type="text" name="ProductName"/>

        <label for="QRCode">Nhập Mã sản phẩm: </label>
        <input type="text" name="QRCode"/>

        <label for="Price">Giá: </label>
        <input type="number" name="Price" value="150000"/>
        <br>
        <input type="submit" value="Xem form in">
        </form>
    </div>

    <script>

        document.getElementById("userinput").onblur =function (){    

        //number-format the user input
        this.value = parseFloat(this.value.replace(/,/g, ""))
                        .toFixed(2)
                        .toString()
                        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        //set the numeric value to a number input
        document.getElementById("number").value = this.value.replace(/,/g, "")

        }

    </script>
</body>
</html>