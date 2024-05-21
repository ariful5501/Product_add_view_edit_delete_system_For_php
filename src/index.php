    <?php
        require "./header.php";
    ?>

    <!-- <div class="container mx-auto py-6">
        <section id="productList" class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4 text-center">Product List</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                Product 1
                <li class="bg-slate-200 rounded-lg p-3">
                    <img src="path/Screenshot_1.png" alt="Product 1" class="w-full h-32 object-cover rounded-lg mb-3">
                    <h3 class="text-xl font-semibold mb-2">Lasko 20" Classic Box Fan with Weather-Resistant Motor, 3 Speeds, 22.5" H, White, B20200, New</h3>
                    <p class="text-gray-700 mb-2">
                        Product details:
                        Easy-to-use manual controls
                        3 quiet fan speeds
                        Weather-resistant fan motor for worry-free window use
                        No tools are required for set-up or maintenance,
                        Built-in carry handle
                        Can be used on tables, floors or in windows
                        Perfect for bedrooms, living rooms, home offices and more
                        Use in conjunction with an air conditioner to boost cooling airflow
                        Equipped with Lasko's trusted, fused safety plug
                        1-Year limited warranty
                    </p>
                    <div class="flex items-center mb-2">
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded" onclick="decreaseQuantity('product1')">-</button>
                        <span id="quantity-product1" class="mx-2">1</span>
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded" onclick="increaseQuantity('product1')">+</button>
                    </div>
                    <div class="text-right mb-2">
                        <p class="text-lg font-bold line-through">$15.00</p>
                        <p class="text-lg font-bold text-red-500">$10.00</p>
                    </div>
                    <div class="flex flex-col items-center space-y-2">
                        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Add to Cart</button>
                        <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Buy Now</button>
                    </div>
                </li>
                Product 2
                <li class="bg-slate-200 rounded-lg p-3">
                    <img src="path/to/product2.jpg" alt="Product 2" class="w-full h-32 object-cover rounded-lg mb-3">
                    <h3 class="text-xl font-semibold mb-2">Product 2</h3>
                    <p class="text-gray-700 mb-2">Description for product 2</p>
                    <div class="flex items-center mb-2">
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded" onclick="decreaseQuantity('product2')">-</button>
                        <span id="quantity-product2" class="mx-2">1</span>
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded" onclick="increaseQuantity('product2')">+</button>
                    </div>
                    <div class="text-right mb-2">
                        <p class="text-lg font-bold line-through">$25.00</p>
                        <p class="text-lg font-bold text-red-500">$20.00</p>
                    </div>
                    <div class="flex flex-col items-center space-y-2">
                        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Add to Cart</button>
                        <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Buy Now</button>
                    </div>
                </li>
                Product 3
                <li class="bg-slate-200 rounded-lg p-3">
                    <img src="path/to/product3.jpg" alt="Product 3" class="w-full h-32 object-cover rounded-lg mb-3">
                    <h3 class="text-xl font-semibold mb-2">Product 3</h3>
                    <p class="text-gray-700 mb-2">Description for product 3</p>
                    <div class="flex items-center mb-2">
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded" onclick="decreaseQuantity('product3')">-</button>
                        <span id="quantity-product3" class="mx-2">1</span>
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded" onclick="increaseQuantity('product3')">+</button>
                    </div>
                    <div class="text-right mb-2">
                        <p class="text-lg font-bold line-through">$35.00</p>
                        <p class="text-lg font-bold text-red-500">$30.00</p>
                    </div>
                    <div class="flex flex-col items-center space-y-2">
                        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Add to Cart</button>
                        <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Buy Now</button>
                    </div>
                </li>
            </ul>
        </section>
    </div> -->
  
    <section class="bg-cover bg-center h-64 text-white flex items-center justify-center bg-slate-500" >
        <h1 class="text-4xl font-bold text-black">Welcome to Our Store</h1>
    </section>
    <section class="container mx-auto py-8">
        <h2 class="text-3xl font-bold mb-6">Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Example Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="../aaaaa.jpg" alt="Product Name" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Product Name</h3>
                    <p class="text-gray-700 mb-2">$20.00</p>
                    <a href="/PHPProjectPOS/src/view/viewProduct.php?id=1" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">View Details</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="../22-05-2024-03-48-41.png" alt="Product Name" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Product Name</h3>
                    <p class="text-gray-700 mb-2">$20.00</p>
                    <a href="/PHPProjectPOS/src/view/viewProduct.php?id=1" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">View Details</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="/path/to/22-05-2024-03-29-14.png" alt="Product Name" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Product Name</h3>
                    <p class="text-gray-700 mb-2">$20.00</p>
                    <a href="/PHPProjectPOS/src/view/viewProduct.php?id=1" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">View Details</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="/path/to/22-05-2024-03-29-14.png" alt="Product Name" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Product Name</h3>
                    <p class="text-gray-700 mb-2">$20.00</p>
                    <a href="/PHPProjectPOS/src/view/viewProduct.php?id=1" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">View Details</a>
                </div>
            </div>
            <!-- Repeat for more products -->
        </div>
    </section>
    <!-- Example structure for viewProduct.php -->
    <section class="container mx-auto py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-1/2">
                <img src="/path/to/22-05-2024-03-29-14.png" alt="Product Name" class="w-full h-96 object-cover">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Product Name</h2>
                <p class="text-gray-700 mb-4">$20.00</p>
                <p class="text-gray-700 mb-4">Product description goes here...</p>
                <button class="px-4 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">Add to Cart</button>
            </div>
        </div>
    </section>
    <footer class="bg-slate-300 py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-700">&copy; 2024 Your Store. All rights reserved.</p>
        </div>
    </footer>


    <script src="/PHPProjectPOS/src/assets/js/main.js"></script>
    <!-- <script>
        function increaseQuantity(productId) {
            const quantityElement = document.getElementById('quantity-' + productId);
            let quantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = quantity + 1;
        }

        function decreaseQuantity(productId) {
            const quantityElement = document.getElementById('quantity-' + productId);
            let quantity = parseInt(quantityElement.textContent);
            if (quantity > 1) {
                quantityElement.textContent = quantity - 1;
            }
        }
    </script> -->
</body>

</html>
