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
<div class="contact-page">
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
        <h1>Contact</h1>
    </div>
    <div class="contactLeft">
        <div class="card">
            <h2>Send Feedback</h2>
            <form action="" method="post">
                <label for="name">Your Name :</label>
                <input id="name" name="name" type="text" required>
                <label for="phone">Your Phone :</label>
                <input id="phone" name="phone" type="number" required>
                <label for="message">Message :</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>

                <button onclick="myButton()" type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="contactRight">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem mollitia, dolorum officia earum, eaque consectetur ullam necessitatibus in quos saepe nemo ipsum nobis nesciunt dicta placeat, perspiciatis vel a?</p>
        <p>mustofaadnan98@gmail.com</p>
        <div class="social-media">
            <a href="https://www.instagram.com/mustofaadnan_03" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.threads.net/@mustofaadnan_03" target="_blank"><i class="fa-brands fa-threads"></i></a>
            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
        <div></div>

    </div>
   <div class="footer">
   @Copyright 2023 | Developed by Adnan

   </div>
        
    </div>
    <script src="../js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/601e75221f.js" crossorigin="anonymous"></script>

</body>
</html>
