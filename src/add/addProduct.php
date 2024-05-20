<?php
    require "../header.php";
    require_once "../db_connection.php";

?>
    <section id="addProduct">
        <div class="text-center text-2xl bg-amber-200 font-bold py-2">
            Add Product
        </div>
        <div class="w-full lg:w-3/4 mx-auto py-10">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodImage" class="w-1/3 text-right pr-10"> Product Image</label>
                    <input type="file" name="prodImage" id="prodImage" placeholder="Image" class="w-2/3 px-3 py-1 text-md border" />
                </div>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodName" class="w-1/3 text-right pr-10"> Product Name</label>
                    <input type="text" name="prodName" id="prodName" placeholder="Enter Product Name" class="w-2/3 px-3 py-1 text-md border" />
                </div>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodPrice" class="w-1/3 text-right pr-10"> Product Price</label>
                    <input type="text" name="prodPrice" id="prodPrice" placeholder="Product Price" class="w-2/3 px-3 py-1 text-md border" />
                </div>
                <div class="text-center my-4">
                    <button type="submit" name="submit" class="border-2 bg-green-400 hover:bg-green-700 text-gray-800 hover:text-red-100 duration-300 font-semibold rounded-2xl px-3 py-2">Add Product</button>
                </div>
            </form>
        </div>

    </section>
    <script src="/PHPProjectPOS/src/assets/js/main.js"></script>


    <?php
      if (isset($_REQUEST["submit"])){
        $productName = $_REQUEST["prodName"];
        $productPrice = $_REQUEST["prodPrice"];
        

        $imageDir="../path/";

        // Image Uploding Part
        $imageFileType = date("d-m-Y-h-i-s").".". pathinfo($_FILES["prodImage"]["name"],PATHINFO_EXTENSION);  
        // echo "$imageFileType >> $productName >> $productPrice"; 
        
        
        $imageFullPath=$imageDir . $imageFileType;
        move_uploaded_file($_FILES["prodImage"]["tmp_name"], $imageFullPath);
        // echo "$imageFileType";

        // database add $query+db_connection add
        $query="INSERT INTO productsnifo(name, image, price) VALUES ('$productName','$imageFileType','$productPrice')";

        // add to db_connection $conn + addProduct $query
        mysqli_query($conn, $query);

        // header add to viewProduct.php add page
        header("loctaion: ../view/viewProduct.php");
        exit();
    }

    ?>
</body>

</html>