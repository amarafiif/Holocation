<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (isset($_SESSION['id']));

if ($_SESSION['role'] != "user") {
    header("location:index.php?pesan=gagal");
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Ticket</title>

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
                            <a href="../../article/index.php" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-blue-400 font-extrabold text-xl hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-600 leading-snug lg:p-0">Order Ticket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="bg-blue-300">
        <div class="container mx-auto py-12">
            <p class="text-center text-4xl font-bold text-white">Get Ticket</p>
        </div>
    </div>

    <div class="flex flex-wrap justify-center px-4 md:px-10 py-3">
        <div class="md:flex grid grid-cols-3 gap-4">
            <?php
            $id = $_GET['id'];
            include '../../../config/databaseConnection.php';
            $sql = mysqli_query($connect, "SELECT * FROM destination WHERE id = '$id'");
            while ($row = mysqli_fetch_array($sql)) {
                $name = $row['name'];
                $location = $row['location'];
                $price = $row['price'];
                $image = $row['image'];
            ?>
                <div class="container mx-auto pt-8">
                    <div class="mx-auto px-5">
                        <div class="flex grid-cols-2 justify-between gap-2">
                            <div class="bg-white w-full mb-4">
                                <div class="preview p-6">
                                    <div class="">
                                        <h1 class="text-4xl text-gray-800 font-extrabold"><?php echo $row['name'] ?></h1>
                                        <small class="flex gap-3 py-2 text-sm text-gray-400 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                            <?php echo $row['complete_address'] ?></small>
                                    </div>
                                    <img class="flex my-5 min-w-full" src="../../admin/destinations/image/<?php echo $row['image'] ?>" alt="thumbnail" />
                                    <span class="mt-4 text-gray-800">
                                        <?php echo $row['description']; ?>
                                    </span>


                                    <div class="review mt-10">
                                        <h3 class="font-extrabold text-2xl text-gray-800 ">Review</h3>
                                        <span class="text-md font-normal text-gray-700">Apa kata mereka tentang destinasi ini?</span>
                                        <?php
                                        include '../../../config/databaseConnection.php';
                                        $id_destination = $_GET['id'];

                                        $sql_ulasan = "SELECT * FROM review WHERE id_destination = $id_destination";
                                        $result_ulasan = $connect->query($sql_ulasan);

                                        if ($result_ulasan->num_rows > 0) {
                                            while ($row_ulasan = $result_ulasan->fetch_assoc()) {
                                        ?>
                                                <div class="show-comment space-y-3 rounded-lg my-3 bg-slate-300 py-3 px-5">
                                                    <label for="visitor_name"><?php echo $row_ulasan['visitor_name'] ?></label>
                                                    <p><?= $row_ulasan['review'] ?></p>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo "Belum ada ulasan untuk destinasi ini.";
                                        }
                                        ?>
                                        <form method="POST" action="../reviews/createActionReview.php" class="w-full bg-white rounded-lg px-4 pt-2">
                                            <div class="flex bg-gray-200 rounded-lg py-4 px-5 flex-wrap -mx-3 mb-6">
                                                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                                                <div class="w-full md:w-full px-3 mb-2 mt-2">
                                                    <input name="id" type="hidden" value="<?= $_GET['id'] ?>" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                                    <div class="space-y-2 mb-6">
                                                        <label class="font-medium text-sm text-gray-600">Your Name</label>
                                                        <input name="visitor_name" type="text" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                                    </div>
                                                    <textarea class="bg-gray-100 border-2 rounded border-gray-300 resize-none w-full h-28 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="review" placeholder='Type Your Comment' required>

                                                    </textarea>
                                                    <div class="float-right my-2">
                                                        <input type='submit' class="bg-blue-400 text-gray-50 font-medium py-2 px-4 border border-gray-300 rounded-lg tracking-wide mr-1 hover:bg-blue-500" value='Post Comment'>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                        ?>
                        </div>
                        <div class="w-5/12 mt-28">
                            <form action="./orderAction.php" method="POST">
                                <div class=" bg-blue-100 rounded-2xl  py-4 px-5">
                                    <h2 class="text-2xl font-extrabold text-gray-700 py-5 border-b-2 border-gray-300 text-center">Order now</h2>
                                    <div class="py-5 text-gray-50">
                                        <div class="space-y-2 mb-6">
                                            <input name="id" type="hidden" value="<?= $_GET['id'] ?>" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                            <input name="id_users" type="hidden" value="<?= $_SESSION['id'] ?>" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                            <label class="font-medium text-sm text-gray-600">Customer Name</label>
                                            <input name="visitor_name" type="text" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                        </div>
                                        <div class="space-y-2 mb-6">
                                            <label class="font-medium text-sm text-gray-600">Total Ticket</label>
                                            <input name="ticket_total" type="number" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                        </div>
                                        <div class="space-y-2 mb-6">
                                            <label class="font-medium text-sm text-gray-600">Arrival Date</label>
                                            <input name="arrival_date" type="date" class="py-3 px-4 border-2 border-gray-300 text-sm rounded-lg text-gray-700 p-2.5 w-full">
                                        </div>
                                        <div class="space-y-2 mb-6">
                                            <button type="submit" class="py-3 px-4 border-2 bg-blue-400 border-gray-300 text-sm font-bold rounded-lg text-gray-50 p-2.5 w-full">
                                                Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>




</body>

</html>