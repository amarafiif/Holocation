<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article</title>

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
        <nav class="bg-[url('../../assets/navbarimg2.png')] bg-cover border-gray-200 px-4 lg:px-6 py-4">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="../user/index.php" class="flex items-center">
                    <img src="../../assets/logokita.png" class="mr-3 w-16" alt="Logo Holocation" />
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <a href="./views/auth/login.php" class="text-gray-50 bg-blue-400 hover:bg-yellow-600 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xl px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">logout</a> -->
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
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
                            <a href="../user/destinations/index.php" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Destination</a>
                        </li>
                        <li>
                            <a href="../../views/article/index.php" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Article</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="bg-blue-300">
        <div class="container mx-auto py-2">
            <hr class="border-blue-300 border-4">
        </div>
    </div>

    <?php
    include('../../config/databaseConnection.php');
    $sql = mysqli_query($connect, "SELECT * FROM article");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $created_at = $row['created_at'];
    ?>

        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="my-7 space-y-2">
                <h1 class="font-black leading-tight text-gray-800 text-4xl">Artikel tips & trik liburan bersama Holocation</h1>
                <p class="leading-tight text-md text-gray-600">Berikut ini kami telah menyiapkan beberapa artikel tips dan trik untuk anda agar menambah referensi liburan anda supaya lebih menyenangkan.</p>
            </div>
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg border-gray-100 border-4">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="../admin/article/image/<?php echo $row['image'] ?>" />
                        </a>

                        <header class=" space-y-2 items-center justify-between leading-tight p-2 md:p-4">
                            <p class="text-gray-500 text-sm"><?= $row['created_at'] ?></p>
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#"> <?= $row['title'] ?> </a>
                            </h1>
                        </header>

                        <footer class="flex justify-center p-2 md:p-4">
                            <a class="flex" href="./showArticle.php?id=<?= $row['id'] ?>">
                                <button class="bg-blue-400 text-white py-2.5 px-5 w-40 text-lg hover:bg-yellow-400 rounded-xl">More</button>
                            </a>
                        </footer>
                    </article>
                </div>

            <?php
        }
            ?>






</body>

</html>