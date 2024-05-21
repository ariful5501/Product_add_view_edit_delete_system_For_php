<?php
    // header.php page add link up
    require "../header.php";

    // database canantcon + vewprodut page produt show
    require_once "../db_connection.php";
    // deta not found convut to indexpage 
    if (!isset($_REQUEST["sl"]) || $_REQUEST["sl"] == ""){
        header("location: ../");
        // exit();
    }
    // datbase sl number show 
    $deletesl = $_REQUEST['sl'];
    
?>


<section id="deleteProduct">
    <div class="text-center text-2xl">
        Delete Product
    </div>
    <div>
        <?php
        // $sqlQuery = "SELECT * FROM `productsnifo` WHERE `sl`=\'deletesl\"";

        // delete button addet
        $sqlQuery = "DELETE  FROM `productsnifo` WHERE `sl`=\"$deletesl\"";
        
        // connet for db_connection + sqlQuery add
        mysqli_query($conn, $sqlQuery);

        // delete alarte show 
        echo "<script> alert('Product sl: $deletesl Deleted.') </script>";
        // header("location: ./viewProduct.php");
        // exit();
        
        ?>

    </div>

</section>









<script src="/PHPProjectPOS/src/assets/js/main.js"></script>   
</body>
</html>