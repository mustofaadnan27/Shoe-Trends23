<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/grid-styles.css">
</head>
<body>
<div class="promo-page">
        <nav class="navbar">
        <div class="logo">LOGO</div>
            <ul class="menu">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../pages/product.php">Product</a></li>
                <li><a href="../pages/newarrival.php">Promo</a></li>
                <li><a href="../pages/contact.php">Contact</a></li>
                <li><a href="../pages/about.php">About</a></li>
            </ul>
            <div class="icons material-symbols-outlined colors" onclick="toggleMenu()">menu</div>
        </nav>
    <div class="header">
        <h1>PROMO HOT</h1>
    </div>
    <div class="promoLeft">
        <h1>Promo Product</h1>
        <div class="promoImage">
       <img src="../img/product-image.jpg" alt="" srcset="">
        </div>
       <h3>Vanz <span style="color:red;">$75</span></h3>
       <div class="discount-number">
            <span>50%</span>
        </div>
        <div class="discount-text">
            <span>Off</span>
        </div>
    </div>
    <div class="promoRight">
       <div class="content">
        <div class="content-title">
            <h1>FootGlide</h1>
            <h2>$75</h2>
        </div>
        <div class="content-image">
            <img src="../img/product-image.jpg" alt="">
        </div>
       </div>
       <div class="content">
       <div class="content-image">
            <img src="../img/product-image.jpg" alt="">
        </div>
       <div class="content-title">
            <h1>Odidas</h1>
            <h2>$75</h2>
        </div>
       </div>
    </div>
   <div class="footer">
   @Copyright 2023 | Developed by Adnan
   </div>
        
    </div>
    <script src="../js/scripts.js"></script>
</body>
</html>
