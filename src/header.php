<?php
date_default_timezone_set("Asia/Dhaka");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Pos</title>
    <link rel="stylesheet" href="/PHPProjectPOS/src/output.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <div class="bg-slate-300">
        <section id="navBar" class="container mx-auto py-3 px-2">
            <div class="flex flex-wrap flex-row items-center justify-between relative">
                <a href="/PHPProjectPOS/src/" class="text-2xl font-bold">Logo</a>
                <div class="flex lg:hidden items-center justify-center" onclick="showMenu()">
                    <span class="" id="navMenuButtonOn">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </span>
                    <span class="hidden" id="navMenuButtonOff">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </span>
                </div>

                <nav class="hidden flex lg:flex flex-wrap flex-col lg:flex-row gap-1 lg:gap-2 justify-end font-bold items-center absolute lg:static -bottom-[145px] right-0" id="navContent">
                    <a href="/PHPProjectPOS/src/add/addProduct.php" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">Add Product</a>
                    <a href="/PHPProjectPOS/src/view/viewProduct.php" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">View Product</a>
                    <!-- <a href="" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">Update Product</a> -->
                </nav>
            </div>
        </section>
    </div>