<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
</head>
  <?php
        $products = [
            [
                "name" => "Iphone 13 Pro Max",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-gold-1-600x600.jpg",
                "price" => 400,
            ],
            [
                "name" => "Xiaomi Mi 11 Lite",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/233241/xiaomi-mi-11-lite-4g-black-1-200x200.jpg",
                "price" => 300,
            ],
            [
                "name" => "Samsung Galaxy S21",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/226316/samsung-galaxy-s21-ultra-bac-600x600-1-200x200.jpg",
                "price" => 300,
            ]
        ];
        $menuList = [
            [
                "menu"=>"HomePage",
                "link"=>"./index.php",
            ],
            [
                "menu"=>"Products",
                "link"=>"./index.php",
            ],
            [
                "menu"=>"Services",
                "link"=>"service/index.php",
            ],
            [
                "menu"=>"About Us",
                "link"=>"./index.php",
            ],
            [
                "menu"=>"Contact",
                "link"=>"./index.php",
            ],
        ]

    ?>

<body>
    <div class="header">
        <?php foreach($menuList as $key=>$value):?>
            <ul>
                <li><a href="<?php echo $value["link"]?>"><?php echo $value["menu"]?></a></li>
            </ul>
        <?php endforeach?>
    </div>
    <div class="banner">
        <img src="./images/banner.png" alt="">
    </div>
    <h1>Products</h1>
    <div class="product">
        <?php foreach($products as $value):?>
            <div class="item">
                <img src="<?php echo $value["image"]?>" alt="">
                <p class="name"><?php echo $value["name"]?></p>
                <p class="price"><?php echo $value["price"]?></p>
                <button>Add To Cart</button>
            </div>
        <?php endforeach?>
    </div>
    <div class="footer">
        Design by Khánh Nguyên
    </div>
      
</body>
</html>

