<?php
require "lib/dbconfig.php";

$domain = "http://localhost/Web_Projects/MaxAuto/"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxAuto</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-poppins text-db">

    <header>
        <div class="container py-4">
            <div class="flex justify-between items-center">
                <a href="<?php echo $domain ?>" class="text-db font-bold text-3xl"> <span class="text-dy">Max</span>Auto </a>
                <ul class="flex items-center capitalize font-medium gap-6">
                    <li><a href="" class="text-lg hover:text-dy transition-all duration-300 ease-in-out">home</a></li>
                    <li><a href="" class="text-lg hover:text-dy transition-all duration-300 ease-in-out">about</a></li>
                    <li><a href="" class="text-lg hover:text-dy transition-all duration-300 ease-in-out">services</a></li>
                    <li><a href="" class="text-lg hover:text-dy transition-all duration-300 ease-in-out">contact</a></li>
                </ul>
                <a href="#" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium  hover:bg-dy transition-all duration-300 ease-in-out">
                    <i class="far fa-user"></i>
                    Sign in
                </a>
            </div>
        </div>

    </header>