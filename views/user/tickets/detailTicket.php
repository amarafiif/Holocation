<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- component -->
    <style>
        .barcode {
            left: 50%;
            box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
            display: inline-block;
            transform: translateX(-90px);
        }

        body {
            font-family: 'Inter';
        }
    </style>
    <div class="flex flex-col items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url(../../../assets/aruka.jpg);">
        <div class="absolute bg-blue-600 opacity-30 inset-0 z-0"></div>
        <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-300 rounded-3xl">
            <div class="flex flex-col">
                <div class="bg-white relative  rounded-3xl p-4 m-4">
                    <div class="flex-none sm:flex">
                        <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                            <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                            <a href="#" class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <?php
                        include('../../../config/databaseConnection.php');
                        include('../../../config/phpqrcode/qrlib.php');


                        $id = $_GET['id'];
                        $sql = mysqli_query($connect, "SELECT * FROM ticket WHERE id = $id");
                        $row = mysqli_fetch_array($sql);

                        $code_ticket = $row['ticket_code'];
                        function generateCode($code_ticket)
                        {
                            $imagePath = './qrCode/' . $code_ticket . '.png';
                            QRcode::png($code_ticket, $imagePath, QR_ECLEVEL_L, 5);
                            return $imagePath;
                        }

                        $imagePath = generateCode($code_ticket);

                        ?>

                        <div class="flex-auto justify-evenly">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center  my-1">
                                    <span class="mr-3 rounded-full bg-white w-8 h-8">
                                        <img src="../../../assets/logokita.png" class="h-8 p-1">
                                    </span>
                                    <h2 class="font-medium">HOLOCATION</h2>
                                </div>
                                <div class="ml-auto text-sm uppercase text-blue-400"><?= $row['ticket_code'] ?></div>
                            </div>
                            <div class="border-b2 border-dashed border-b-2"></div>
                            <div class="flex items-center">
                                <div class="flex flex-col mx-auto">
                                    <div class="w-0 inline-block mt-4 relative left-auto">
                                    </div>
                                    <img src="<?php echo $imagePath ?>" alt="">
                                </div>
                            </div>
                            <div class="border-b2 border-dashed border-b-2 my-5 pt-5">
                                <div class="absolute rounded-full w-5 h-5 bg-blue-300 -mt-2 -left-2"></div>
                                <div class="absolute rounded-full w-5 h-5 bg-blue-300 -mt-2 -right-2"></div>
                            </div>
                            <div class="flex items-center mb-5 p-5 text-sm">
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-400">Customer Name</span>
                                    <div class="font-semibold text-lg text-gray-800"><?= $row['visitor_name'] ?></div>
                                </div>
                                <div class="flex flex-col ml-auto">
                                    <span class="text-gray-400">No. Order</span>
                                    <div class="font-semibold text-lg text-right text-gray-800">0000<?= $row['id'] ?></div>
                                </div>
                            </div>
                            <div class="flex w-full justify-between mb-4 px-5">
                                <div class=" text-sm">
                                    <span class="text-sm text-gray-400">Arrival Date</span>
                                    <div class="font-semibold text-lg text-gray-800"><?= $row['arrival_date'] ?></div>
                                </div>
                                <div class="flex flex-col  text-sm text-gray-400">
                                    <span class="">Jumlah Peserta</span>
                                    <span class="font-semibold text-right text-lg text-gray-800"><?= $row['ticket_total'] ?> Orang</span>
                                </div>
                            </div>
                            <div class="flex float-right px-5 pt-3 text-sm">
                                <div class="flex flex-col text-right">
                                    <span class="text-gray-400">Harga</span>
                                    <span class="font-extrabold text-2xl text-gray-800">Rp. <?= $row['price_total'] ?></span>
                                </div>
                            </div>
                            <div class="flex w-full">
                                <button onclick="window.print()" class="block text-sm mx-auto text-gray-400 mt-5">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

</html>