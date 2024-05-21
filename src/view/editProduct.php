<?php
require "../header.php";
require_once "../db_connection.php";

// Get the product ID from the URL
$productsl = $_REQUEST['sl'];

// Fetch product details from the database
$sqlQuery = "SELECT * FROM `productsnifo` WHERE `sl` = $productsl";
$result = mysqli_query($conn, $sqlQuery);
// database data show for view produt page show code
$product = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get updated product details from the form
    $productName = $_POST['prodName'];
    $productPrice = $_POST['prodPrice'];
    
    if (!empty($_FILES["prodImage"]["name"])) {
        $imageDir = "../path/";
        $imageFileType = date("d-m-Y-h-i-s") . "." . pathinfo($_FILES["prodImage"]["name"], PATHINFO_EXTENSION);
        $imageFullPath = $imageDir . $imageFileType;
        move_uploaded_file($_FILES["prodImage"]["tmp_name"], $imageFullPath);
    } else {
        $imageFileType = $product['image'];
    }

    // Update product details in the database
    $updateQuery = "UPDATE `productsnifo` SET `name`='$productName', `price`='$productPrice', `image`='$imageFileType' WHERE `sl`=$productsl";
    if (mysqli_query($conn, $updateQuery)) {
        echo "Product updated successfully";
        header("Location: ../view/viewProduct.php"); 
        // Redirect to the view products page
        exit();
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
    header("Location: ../view/viewProduct.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <section id="editProduct">
        <div class="text-center text-2xl bg-amber-200 font-bold py-2">
            Edit Product
        </div>
        <div class="w-full lg:w-3/4 mx-auto py-10">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodImage" class="w-1/3 text-right pr-10">Product Image</label>
                    <input type="file" name="prodImage" id="prodImage" class="w-2/3 px-3 py-1 text-md border" />
                    <img src="../path/<?php echo $product['image']; ?>" style="width: 100px; height: 50px;"/>
                </div>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodName" class="w-1/3 text-right pr-10">Product Name</label>
                    <input type="text" name="prodName" id="prodName" value="<?php echo $product['name']; ?>" class="w-2/3 px-3 py-1 text-md border" required />
                </div>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodPrice" class="w-1/3 text-right pr-10">Product Price</label>
                    <input type="text" name="prodPrice" id="prodPrice" value="<?php echo $product['price']; ?>" class="w-2/3 px-3 py-1 text-md border" required />
                </div>
                <div class="text-center my-4">
                    <button type="submit" name="submit" class="border-2 bg-green-400 hover:bg-green-700 text-gray-800 hover:text-red-100 duration-300 font-semibold rounded-2xl px-3 py-2">Update Product</button>
                </div>
            </form>
        </div>
    </section>
    <script src="/PHPProjectPOS/src/assets/js/main.js"></script>
</body>
</html>
