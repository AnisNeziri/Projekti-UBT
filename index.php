<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EA10 - Tech Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/707ec381ad.js" crossorigin="anonymous"></script>
</head>
<body>

    <!----Menu e Webit--->
    <header>
        <a href="#" class="logo">EA10</a>
        <button class="mob-menu"><i class="fa-solid fa-bars"></i></button>
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="#featured">Featured</a></li>
            <li><a href="#new-arrivals">New</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="login.php">LogIn</a></li>
        </ul>
    </header>

    <!----home-ballina--->
    <section class="home" id="home">
        <div class="home-text">
            <h1>New Products<br><span>Arrivals</span></h1>
            <p>Best tech for the best prices!</p>
            <a href="#new-arrivals" class="btn">View Products</a>
        </div>
    </section>

    <!-- Shfaqja e Produkteve -->
    <section class="featured" id="featured">
        <div class="center-text">
            <h2>Categories</h2>
        </div>

        <div class="featured-content">
            <?php
            $sql = "SELECT * FROM products LIMIT 4"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $price = $row['price'];
                    $discount = $row['discount'];
                    $image = $row['image'];
                    $final_price = $price - ($price * ($discount / 100));
                    ?>
                    <div class="product-card" onclick="openProductPage('product.php?id=<?php echo $row['id']; ?>')">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                        <div class="product-details">
                            <h5><?php echo $name; ?></h5>
                            <p><?php echo $row['quantity']; ?> items</p>
                            <div class="price-container">
                                <span class="original-price">$<?php echo $price; ?></span>
                                <span class="discount">-<?php echo $discount; ?>%</span>
                                <span class="final-price">$<?php echo $final_price; ?></span>
                            </div>
                            <div class="button-container">
                                <button class="add-to-cart">Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
                                <button class="buy-now">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No products found.";
            }
            ?>
        </div>
        <div class="featured-content">
            <?php
            $sql = "SELECT * FROM products LIMIT 4"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $price = $row['price'];
                    $discount = $row['discount'];
                    $image = $row['image'];
                    $final_price = $price - ($price * ($discount / 100));
                    ?>
                    <div class="product-card" onclick="openProductPage('product.php?id=<?php echo $row['id']; ?>')">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                        <div class="product-details">
                            <h5><?php echo $name; ?></h5>
                            <p><?php echo $row['quantity']; ?> items</p>
                            <div class="price-container">
                                <span class="original-price">$<?php echo $price; ?></span>
                                <span class="discount">-<?php echo $discount; ?>%</span>
                                <span class="final-price">$<?php echo $final_price; ?></span>
                            </div>
                            <div class="button-container">
                                <button class="add-to-cart">Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
                                <button class="buy-now">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No products found.";
            }
            ?>
        </div>
    </section>

    <div class="ad-container">
        <img src="img/ad1.png" alt="Ad 1" class="ad-image">
        <img src="img/ad2.png" alt="Ad 2" class="ad-image">
    </div>

    <section class="na" id="new-arrivals">
        <div class="ct">
            <h2>New Arrivals</h2>
        </div>

        <div class="na-c">
            <?php
            $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 5";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $price = $row['price'];
                    $discount = $row['discount'];
                    $image = $row['image'];
                    $final_price = $price - ($price * ($discount / 100));
                    ?>
                    <div class="p-card">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                        <div class="product-details">
                            <h5><?php echo $name; ?></h5>
                            <p><?php echo $row['quantity']; ?> items</p>
                            <div class="price-container">
                                <span class="original-price">$<?php echo $price; ?></span>
                                <span class="discount">-<?php echo $discount; ?>%</span>
                                <span class="final-price">$<?php echo $final_price; ?></span>
                            </div>
                            <div class="button-container">
                                <button class="add-to-cart">Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
                                <button class="buy-now">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No new arrivals found.";
            }
            ?>
        </div>
    </section>

    <section class="image-slider">
        <div class="slider-container">
            <div class="slider-images">
                <img src="img/brand1.png" alt="Brand 1">
                <img src="img/brand2.png" alt="Brand 2">
                <img src="img/brand3.png" alt="Brand 3">
                <img src="img/brand4.png" alt="Brand 4">
                <img src="img/brand5.png" alt="Brand 5">
                <img src="img/brand6.png" alt="Brand 6">
                <img src="img/brand8.png" alt="Brand 8">
            </div>
            <button class="slider-btn prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slider-btn next-btn"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <!-- Pjesa e Informatave -->
            <div class="footer-about">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsam illo, adipisci praesentium aperiam et.</p>
            </div>

            <!-- Pjesa E linqeve -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#featured">Featured</a></li>
                    <li><a href="#new-arrivals">New Arrivals</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Pjesa e kontaktit -->
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p><strong>Email:</strong> ubt@uni-ubt.net</p>
                <p><strong>Phone:</strong> +383 12 345 678</p>
            </div>

            <!-- Pjesa e rrjeteve sociale -->
            <div class="footer-social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/ubthighereducationinstitution/" target="_blank" class="facebook"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    <a href="https://www.instagram.com/ubt_official/?hl=en" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>

        <!-- Pjesa e copyright -->
        <div class="footer-bottom">
            <p>Copyright © 2024 All rights reserved | This Website is made by Two Students of "UBT College" E.SH & A.N</p>
        </div>
    </footer>

    <script src="script/main.js"></script>
</body>
</html>