<?php
include("connection.php");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Main</title>
</head>
<body>
    <div class="content">
    <div class="header">
        <div class="nav">
            <span>HOME</span>
            <span>NEW PRODUCTS</span>
            <span>GALLERY</span>
        </div>
        <div class="center-text">
            <span class="banner-text">
                PUT THE WORLD ON MUTE
            </span>
        </div>
    </div>
            <div class="products">
            <span>NEW PRODUCTS</span>
        </div>
    <div class="catalog">
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='product'>
                    <div class='background'>
                        <img src='{$row['image']}' alt='{$row['name']}'>
                    </div>
                    <div class='first'>
                        <span class='name'>{$row['name']}</span>
                        <div class='colors'>
                            <div class='red'></div>
                            <div class='blue'></div>
                            <div class='green'></div>
                            <div class='white'></div>
                        </div>
                    </div>
                    <span class='price'>\${$row['price']}</span>
                </div>
                ";
            }
        } else {
            echo "<p>No products found.</p>";
        }
    ?>
    </div>
    <div class="gallery">
        <h2>GALLERY</h2>
        <div class="img-container">
        <div class="image first"><img src="img/1.png" alt=""></div>
        <div class="image second"><img src="img/2.png" alt=""></div>
        <div class="image third"><img src="img/3.png" alt=""></div>
        <div class="image fourth"><img src="img/4.png" alt=""></div>
        <div class="image five"><img src="img/5.png" alt=""></div>
    </div>
    <div class="slider-controls">
  <div class="arrow">&#8592;</div>
  <div class="dots">
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  <div class="arrow">&#8594;</div>
</div>
    </div>
    </div>
</body>
</html>