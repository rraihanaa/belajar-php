<?php

session_start();

if (!$_SESSION['success']) {
    header("Location: login.php");
    die();
}

require_once('products_data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/products_styles.css">
    <title>Bunnies Shop</title>
</head>

<body>
<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="#" class="logo">bunnies<span>.</span></a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#products">Products</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-user"></a>
    </div>
</header>

<section class="home" id="home">
    <div class="content">
        <h3>Hello, Bunnies!</h3>
        <span>Welcome to NewJeans Exclusive Shop</span>
        <p>As a membership-only platform, we offer a curated selection of official goods and merchandise designed specifically for our discerning community. Explore a range of products, from signed albums to exclusive concert merchandise, designed to support our NewJeans!</p>
        <a href="#products" class="btn">Shop Now</a>
    </div>

</section>

<section class="products" id="products">
    <h1 class="heading">Exclusive <span>Products</span></h1>
    <div class="box-container">
        <?php foreach ($products as $product) : ?>
            <div class="box">
                <span class="label"><?= $product['label'] ?></span>
                <div class="image">
                    <img src="<?= $product['image'] ?>" alt="">
                    <div class="desc"><?= $product['desc'] ?></div>
                </div>
                <div class="content">
                    <h3><?= $product['title'] ?></h3>
                    <div class="price"><?= $product['price'] ?> <span><?= $product['details'] ?></span></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script src="js/animation.js"></script>

</body>
</html>