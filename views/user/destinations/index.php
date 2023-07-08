<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HoliCation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Inter';
    }
</style>

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

        <div class="bg-[url('../../../assets/tour/bg-nav.png')] bg-no-repeat">
            <div class="container py-10 mx-auto">
                <ul class="font-bold text-4xl lg:flex justify-center hidden text-gray-50">
                    <h1>Popular Destinations Tour</h1>
                </ul>
            </div>
        </div>
    </header>

    <?php

    include '../../../config/databaseConnection.php';
    $sql = mysqli_query($connect, "SELECT * FROM destination");

    while ($row = mysqli_fetch_array($sql)) {
        $name = $row['name'];
        $location = $row['location'];
    ?>
        <main class=" bg-no-repeat">
            <section id="home">
                <div class="mx-auto">
                    <div class="flex flex-col items-center z-20 md:flex-row">
                        <div class="md:w-1/2 relative overflow-hidden bg-cover bg-no-repeat">
                            <button class=" hover:scale-105  transition duration-300 ease-in-out">
                                <a href="./listDestinations.php">
                                    <img class="mx-auto" src="../../../assets/tour/yogya1.png" alt="" />
                                    <h1 class="absolute font-bold text-2xl px-5 py-2.5 rounded-md hover:bg-yellow-400 text-white bg-blue-400 bottom-4 left-1/2 -translate-x-1/2 p-4"><?= $row['location'] ?></h1>
                                </a>
                            </button>
                        </div>
                    </div>
                    <!-- </a>
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="md:w-1/3 max-w-full relative overflow-hidden bg-cover bg-no-repeat ">
                        <button class="hover:scale-105 transition duration-300 ease-in-out">
                            <img class="mx-auto" src="../../../assets/tour/lombok2.png" alt="" />
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-end justify-center">
                            <h1 class="absolute font-bold text-2xl px-7 py-2.5 rounded-md hover:bg-yellow-400 text-white bg-blue-400 bottom-4 left-1/2 -translate-x-1/2 p-4">Lombok</h1>
                            </div>
                        </button>
                    </div>
                    <div class="md:w-1/3 max-w-full relative overflow-hidden bg-cover bg-no-repeat">
                        <button class="hover:scale-105 transition duration-300 ease-in-out">
                            <img src="../../../assets/tour/NTT1.png" alt="" />
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-end justify-center">
                            <h1 class="absolute font-bold text-2xl px-7 py-2.5 rounded-md hover:bg-yellow-400 text-white bg-blue-400 bottom-4 left-1/2 -translate-x-1/2 p-4">Nusa Tenggara Timur</h1>
                            </div>
                        </button>
                    </div>
                    <div class="md:w-1/3 max-w-full relative overflow-hidden bg-cover bg-no-repeat">
                        <button class="hover:scale-105 transition duration-300 ease-in-out">
                            <img src="../../../assets/tour/papua3.png" alt="" />
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-end justify-center">
                            <h1 class="absolute font-bold text-2xl px-7 py-2.5 rounded-md hover:bg-yellow-400 text-white bg-blue-400 bottom-4 left-1/2 -translate-x-1/2 p-4">Papua</h1>
                            </div>
                        </button>
                    </div> -->
                </div>
            </section>
        </main>
    <?php
    }
    ?>
</body>

</html>