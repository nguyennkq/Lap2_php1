<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../service/style.css">
</head>
<body>
<?php
       $service =[
            [   
                "id"=>1,
                "name"=>"web development",
                "desc"=>"Give your business a leg up over
                the competition with a beautifully
                designed and fully functional site
                created by a team of expert outsourced
                web development specialists.",
                "image"=>"https://picsum.photos/300/200"
            ],
            [
                "id"=>2,
                "name"=>"mobile development",
                "desc"=>"IOS, Android, and cross-platform apps 
                    with React Native and Flutter are just
                    one click away.",
                "image"=>"https://picsum.photos/300/200"
            ],
            [
                "id"=>3,
                "name"=>"legacy migration",
                "desc"=>" Constant technology evolutions often
                lead to outdated systems and low
                performance, but these reasons should
                not stop you from gaining an edge over
                the competition. With SETA International's
                legacy application migration services,
                you are constantly modernized to adapt to
                the changing business needs of lower costs
                and fewer risks.",
                "image"=>"https://picsum.photos/300/200"
            ],
            [
                "id"=>4,
                "name"=>"testing",
                "desc"=>" SETA International's testing services aim
                to help you avoid any potential damages
                that can result in a fallout costing you
                both hard-won users and profits.",
                "image"=>"https://picsum.photos/300/200"
            ],

       ];

       $menuList = [
        [
            "menu"=>"HomePage",
            "link"=>"../index.php",
        ],
        [
            "menu"=>"Products",
            "link"=>"../index.php",
        ],
        [
            "menu"=>"Services",
            "link"=>"./index.php",
        ],
        [
            "menu"=>"About Us",
            "link"=>"../index.php",
        ],
        [
            "menu"=>"Contact",
            "link"=>"../index.php",
        ],
    ];

    ?>

    <div class="header">
        <?php foreach($menuList as $key=>$value):?>
            <ul>
                <li><a href="<?php echo $value["link"]?>"><?php echo $value["menu"]?></a></li>
            </ul>
        <?php endforeach?>
    </div>
    <div class="banner">
        <img src="../images/banner.png" alt="">
    </div>
    <h1 class="service">our services</h1>
    <table>
        <tbody>
            <tr>
                <th>Image</th>
                <th style="width:200px">Name of service</th>
                <th>Description</th>
            </tr>
            <?php foreach($service as $key=>$value):?>
            <tr>
                <td>
                    <img src="<?php echo $value["image"]?>" alt="">
                </td>
                <td>
                    <?php echo $value["name"]?>
                </td>
                <td>
                    <?php echo $value["desc"]?>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <div class="footer">
        Design by nguyennk
    </div>
</body>
</html>