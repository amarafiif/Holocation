<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogyakarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="bg-[url('../../../assets/navbarimg2.png')] bg-cover border-gray-200 px-4 lg:px-6 py-4">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="./index.php" class="flex items-center">
                    <img src="../../../assets/logokita.png" class="mr-3 w-16" alt="Logo Holocation" />
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="../../../views/auth/logout.php" class="text-gray-50 bg-blue-400 hover:bg-yellow-600 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xl px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Logout</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-50 rounded-lg lg:hidden hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="./destinations/index.php" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Destination</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Order Ticket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="bg-yellow-500">
        <div class="container mx-auto py-12">
            <p class="text-center text-4xl font-bold text-white">Yogyakarta</p>
        </div>
    </div>

    <div class="flex flex-wrap justify-center px-4 md:px-10 py-3">
        <div class="md:flex grid grid-cols-3 gap-4">

            <?php

            include '../../../config/databaseConnection.php';
            $sql = mysqli_query($connect, "SELECT * FROM destination WHERE location = 'Yogyakarta'");

            while ($row = mysqli_fetch_array($sql)) {
                $name = $row['name'];
                $location = $row['location'];
                $price = $row['price'];
                $image = $row['image'];
            ?>
                <div class="max-w-sm rounded overflow-hidden shadow-lg m-5">
                    <img class="w-full" src="../../admin/destinations/image/<?= $row['image']?>" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"><?= $row['name']?></div>
                        <div class="flex justify-between items-end">
                            <div></div>
                            <div class="font-bold mr-28 mb-3 text-orange-400">IDR <?= $row['price']?></div>
                            <button class="font-bold text-xl mb-2 bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded">
                                <a href="tiketing.html">Lihat Detail</a>
                            </button>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>



</body>

</html>