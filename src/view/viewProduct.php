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
                <tr>
                    <td class="border text-center px-2 py-2">1</td>
                    <td class="border text-center px-2 py-2">Image</td>
                    <td class="border px-2 py-2">Product Name</td>
                    <td class="border text-center px-2 py-2">$100</td>
                    <td class="border text-center px-2 py-2">
                        <a href="">Edit</a>
                        /
                        <a href="">Delete</a>
                    </td>
                </tr>
            </table>
        </div>

    </section>
    <script src="/PHPProjectPOS/src/assets/js/main.js"></script>
</body>

</html>