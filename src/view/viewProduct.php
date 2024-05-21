<?php
    // header.php page add link up
    require "../header.php";

    // database canantcon + vewprodut page produt show
    require_once "../db_connection.php";
    
?>
    <section id="addProduct">
        <div class="text-center text-2xl bg-amber-200 font-bold py-2">
            View Product
        </div>
        <div class="w-full lg:w-3/4 mx-auto py-10">
            <table class="w-full ">
                <tr>
                    <th class="border py-2">sl.</th>
                    <th class="border py-2">Image</th>
                    <th class="border py-2">Product Name</th>
                    <th class="border py-2">Product Price</th>
                    <th class="border py-2">Action</th>
                </tr>


                <!-- database cannet resut show for view product page -->
                <?php
                // database link to viewprodut page --code copy to database select
                $sqlQuery = "SELECT * FROM `productsnifo` WHERE 1";
                // resut show perpus connet for db_connection + sqlQuery add
                $result = mysqli_query($conn, $sqlQuery);
                // oto sl number add
                $counter = 0;
                // database data show for view produt page show code
                while ($row = mysqli_fetch_assoc($result)) {
                    // oto sl number add ++
                    $counter++;
                    
                    // show result perpus only
                    // echo $row["name"];


                    ?>

                        <!-- table show for viewprodut page  -->
                        <tr>
                            <td class="border text-center px-2 py-2">
                                <!-- lode a sl number -->
                                <?php echo $counter; ?></td>
                            <td class="border text-center px-2 py-2" style="display: flex; justify-content:center;">
                                <!-- lode a image -->
                                <img src="../path/<?php echo $row["image"]; ?>" style="width:100px; height:50px margin:0 auto; "class="w-8"/>
                            </td>
                            <td class="border px-2 py-2">
                                <!-- lode a product name -->
                                <?php echo $row["name"]; ?></td>
                            <td class="border text-center px-2 py-2">
                                <!-- lode a product price -->
                                <?php echo $row["price"]; ?></td>
                            <td class="border text-center px-2 py-2">
                            <a href="./editProduct.php?sl=<?php echo $row['sl']; ?>">Edit</a>
                            /
                            <!-- delat button and page php add -->
                            <a href="./deleteProduct.php?sl=<?php echo $row["sl"]; ?>">Delete</a>
                            </td>
                        </tr>
                    
                    <?php
                }
                ?>

                <!-- <tr>
                    <td class="border text-center px-2 py-2">1</td>
                    <td class="border text-center px-2 py-2">Image</td>
                    <td class="border px-2 py-2">Product Name</td>
                    <td class="border text-center px-2 py-2">$100</td>
                    <td class="border text-center px-2 py-2">
                        <a href="">Edit</a>
                        /
                        <a href="">Delete</a>
                    </td>
                </tr> -->
            </table>
        </div>

    </section>
    <script src="/PHPProjectPOS/src/assets/js/main.js"></script>
</body>

</html>