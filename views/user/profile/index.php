<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (isset($_SESSION['name']));
$current_page = $_SERVER['REQUEST_URI'];

if ($_SESSION['role'] != "user") {
    header("location:index.php?pesan=gagal");
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<?php

include('../../../config/databaseConnection.php');

if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];
    $sql = mysqli_query($connect, "SELECT * FROM users WHERE id=$id_user");
    $row = mysqli_fetch_array($sql);
}


?>
<style>
    body {
        font-family: 'Inter';
    }
</style>

<body>
    <div class="bg-[url('../../../assets/navbarimg2.png')] bg-no-repeat bg-cover">
        <div class="container mx-auto py-4">
            <!-- navbar -->
            <nav class="flex justify-between items-center">
                <a href="landingpage.html">
                    <div>
                        <ul class="font-bold text-3xl opacity-100">
                            <li><img class="w-16" src="../../../assets/logokita.png" alt="" /></li>
                        </ul>
                    </div>
                </a>

                <ul class="font-semibold text-2xl lg:flex gap-6 hidden text-blue-400">
                    <li>
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-blue-400 hover:text-blue-500 font-medium rounded-lg text-2xl  text-center inline-flex items-center" type="button">
                            Liburan
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownHover" class="z-10 hidden bg-white rounded-lg shadow w-44 dark:bg-blue-400">
                            <ul class="py-2 text-lg text-white" aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="./destinations.php" class="block px-4 py-2 dark:hover:bg-blue-500 dark:hover:text-white">Destination</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 dark:hover:bg-blue-500 dark:hover:text-white">Souvenir</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 dark:hover:bg-blue-500 dark:hover:text-white">Hotel</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <a href="./profile/index.php">
                        <li class="cursor-pointer hover:text-blue-600 bg-opacity-70 ease-in duration-300">My Profile</li>
                    </a>
                    <li class="cursor-pointer hover:text-blue-600 bg-opacity-70 ease-in duration-300">my E-tiket</li>
                </ul>
                <div class="text-2xl font-bold gap-6 lg:flex hidden">
                    <div class="flex items-center lg:order-2">
                        <!-- Dropdown menu -->
                        <button type="button" class="flex mx-3 text-sm bg-gray-100 rounded-full md:mr-0 focus:ring-4 focus:ring-indigo-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <span href="./views/auth/login.php" class="text-white bg-blue-400 px-5 py-2.5 rounded-lg text-2xl hover:bg-blue-600"><?= $_SESSION['name'] ?></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow rounded-xl" id="dropdown">
                            <ul class="py-1 text-gray-700" aria-labelledby="dropdown">
                                <li>
                                    <a href="/views/auth/logout.php" class="block py-3 px-4 text-sm">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a href="./views/auth/login.php" class="text-white bg-blue-400 px-5 py-2.5 rounded-lg text-2xl hover:bg-blue-600"><?= $_SESSION['name'] ?></a> -->
                </div>
                <button class="lg:hidden block buttonToogle">
                    <img src="./assets/humburger.png" alt="hamburger" />
                </button>
            </nav>
            <!-- mobileMenu(responsive mobile) -->
            <div class="mobilemenu hidden">
                <ul class="font-semibold gap-6">
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">Liburan</li>
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">My Profile</li>
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">My Etiket</li>
                </ul>
                <div class="text-2xl font-bold gap-2 flex">
                    <button class="w-full text-white bg-blue-400 px-6 py-3 text-2xl">LOGIN</button>
                    <button class="w-full text-blue-400 outline px-6 py-2.5">SIGN IN</button>
                </div>
            </div>
        </div>
    </div>

    <!-- akhri fungsi navbar mobile -->
    <div class="bg-blue-400 h-72 bg-no-repeat bg-cover">
        <div class="container mx-auto pt-8">
            <section id="home">
                <div class="mx-auto px-5 gap-2">
                    <div class="flex flex-col gap-3 md:flex-row">
                        <div class="border-2 border-gray-200 md:w-1/4 py-10 px-4 relative overflow-hidden bg-cover bg-no-repeat rounded-lg justify-center bg-white">
                            <span class="mb-2 block text-center font-medium text-gray-500">My Account</span>
                            <hr class="mt-7 border mb-4">
                            <a href="#" class="block w-full px-4 py-4 cursor-pointer text-gray-700 hover:bg-gray-100 hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:text-blue-300">
                                Profile
                            </a>
                            <a href="#" class="block w-full px-4 py-4 cursor-pointer text-gray-700 hover:bg-gray-100 hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:text-blue-300">
                                My Tickets
                            </a>
                            <a href="#" class="block w-full px-4 py-4 cursor-pointer text-gray-700 hover:bg-gray-100 hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:text-blue-300">
                                Transactions
                            </a>
                        </div>
                        <div class="md:w-full relative flex flex-col">
                            <div class="bg-white bg-cover rounded-lg py-10 px-6 border-gray-200 border-2">
                                <h1 class="block font-medium text-gray-700 text-2xl mb-5">Account Setting</h1>
                                <hr class="border">
                                <form action="">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2 my-10">
                                        <div>
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $row['name'] ?>" required>
                                        </div>
                                        <div>
                                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                                            <input type="text" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $row['username'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                                        <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $row['email'] ?>" required>
                                    </div>
                                    <div class="mb-6">
                                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">No. Handphone</label>
                                        <input type="text" name="handphone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $row['handphone'] ?>" required>
                                    </div>
                                    <div class="  py-3 pt-2 my-auto flex flex-col md:flex-row gap-3 text-white justify-between">
                                        <div>
                                            <button class="bg-red-400 py-1.5 px-5 rounded-3xl font-normal text-lg hover:bg-red-500">Delete Account</button>
                                            <button class="bg-blue-400 py-1.5 px-6 rounded-3xl font-normal text-lg hover:bg-blue-500">Log Out</button>
                                        </div>
                                        <div>
                                            <button class="bg-blue-400 py-1.5 px-5 rounded-3xl font-normal text-lg hover:bg-blue-500">Cancel</button>
                                            <button class="bg-blue-400 py-1.5 px-6 rounded-3xl font-normal text-lg hover:bg-blue-500">Confirm/Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--awal fungsi Navbar Mobile -->
    <script>
        const buttonToogle = document.querySelector(".buttonToogle");
        const mobilemenu = document.querySelector(".mobilemenu");

        buttonToogle.addEventListener("click", function() {
            mobilemenu.classList.toggle("hidden");
        });
    </script>
</body>

</html>