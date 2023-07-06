<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Holocation - Dashboard</title>
</head>
<style>
    body {
        font-family: 'Inter';
    }
</style>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username']));
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];


    $current_page = $_SERVER['REQUEST_URI'];

    if ($_SESSION['role'] != "admin") {
        header("location:index.php?pesan=gagal");
    }
    ?>


    <div class="antialiased bg-indigo-100">
        <!-- Navbar -->
        <nav class="bg-slate-100 shadow-md border-gray-200 px-4 py-5 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <a href="index.php" class="flex ml-12">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">HolocatioN</span>
                    </a>
                </div>

                <div class="flex items-center lg:order-2">
                    <!-- Dropdown menu -->
                    <button type="button" class="flex mx-3 text-sm bg-gray-100 rounded-full md:mr-0 focus:ring-4 focus:ring-indigo-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png" alt="user photo" />
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
            </div>
        </nav>

        <!-- Sidebar -->
        <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0" aria-label="Sidenav" id="drawer-navigation">
            <div class="overflow-y-auto py-10 px-3 h-full bg-indigo-50">
                <ul class="space-y-4">
                    <li class="">
                        <a href="../index.php" class="flex items-center px-4 py-3 text-base font-medium text-indigo-500 rounded-lg hover:bg-indigo-100 hover:text-indigo-800 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>
                            <span class="ml-3">Overview</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="flex items-center px-4 py-3 text-base font-medium text-indigo-500 rounded-lg hover:bg-indigo-100 hover:text-indigo-800 group">
                            <svg class="w-6 h-6 text-indigo-500 transition duration-75 group-hover:text-indigo-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <span class="ml-3">Category</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="./Destinations.php" class="flex items-center px-4 py-3 text-base font-medium text-indigo-500 rounded-lg hover:bg-indigo-100 hover:text-indigo-800 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-indigo-500 transition duration-75 group-hover:text-indigo-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <span class="ml-3">Destination</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="./useManagement.php" class="flex items-center px-4 py-3 text-base font-medium text-indigo-500 rounded-lg hover:bg-indigo-100 hover:text-indigo-800 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <span class="ml-3">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-base font-medium  text-indigo-500 rounded-lg hover:bg-indigo-100 hover:text-indigo-800 group">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-indigo-500 transition duration-75 group-hover:text-indigo-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Order</span>
                            <span class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">
                                4
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="p-4 md:ml-64 min-h-screen pt-24">
            <h1 class="text-2xl font-bold mb-4 mt-3">
                Users Management
            </h1>
            <div class="pt-5 bg-indigo-50 h-96 mb-4">
                <div class="overflow-x-auto px-4">
                    <table class="w-full text-sm text-left text-gray-800">
                        <thead class="border-b-2 border-slate-500">
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Email Address</th>
                            <th scope="col" class="px-6 py-3">Username</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </thead>
                        <tbody>
                            <?php
                            include('../../../config/databaseConnection.php');
                            $sql = mysqli_query($connect, "SELECT * FROM users ORDER BY id ASC");
                            $no = 1;
                            while ($row = mysqli_fetch_array($sql)) {
                                $name = $row['name'];
                                $email = $row['email'];
                                $username = $row['username'];
                            ?>
                                <tr class="border-b">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap"><?php echo $no++; ?></td>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap"><?php echo $row['name'] ?></td>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap"><?php echo $row['email'] ?></td>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap"><?php echo $row['username'] ?></td>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap">
                                        <button type="button" class="flex mx-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-indigo-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdownAction<?= $row['id'] ?>">
                                            <span class="sr-only">Open user action</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow rounded-xl" id="dropdownAction<?= $row['id'] ?>">
                                            <ul class="py-1 text-gray-700" aria-labelledby="dropdown">
                                                <li>
                                                    <a href="detailUser.php?id=<?php echo $row['id']; ?>" class="flex py-3 px-4 content-center text-sm hover:text-indigo-600">Detail & Edit</a>
                                                </li>

                                                <li class="">
                                                    <a href="hapusUser.php?id=<?php echo $row['id']; ?>" class="flex py-3 px-4 content-center text-sm hover:text-red-600">Hapus</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>