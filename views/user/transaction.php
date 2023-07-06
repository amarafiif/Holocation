<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yokyakarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
</head>

<body>

    <!-- awal navbar -->
    <div class="bg-[url('./asset/navbarimg1.png')] bg-no-repeat bg-cover">
        <div class="container mx-auto py-4">
            <!-- navbar -->
            <nav class="flex justify-between items-center">
                <a href="landingpage.html">
                    <div>
                        <ul class="font-bold text-3xl opacity-100">
                            <li><img class="w-16" src="./asset/logokita.png" alt="" /></li>
                        </ul>
                    </div>
                </a>
                <ul class="font-semibold text-2xl lg:flex gap-6 hidden">
                    <!-- <li>Trends</li>
                <li>Product</li>
                <li>LookYou</li>
                <li>About</li>
                <img src="" alt=""> -->
                </ul>
                <div class="text-2xl font-bold gap-6 lg:flex hidden">
                    <button class="text-white bg-blue-400 px-6 py-3 rounded-lg text-2xl">LOGIN</button>
                    <button class="text-blue-400 outline px-6 py-2.5 rounded-lg text-2xl">SIGN IN</button>
                </div>
                <button class="lg:hidden block buttonToogle">
                    <img src="./asset/humburger.png" alt="hamburger" />
                </button>
            </nav>
            <!-- mobileMenu(responsifmobile) -->
            <div class="mobilemenu hidden">
                <ul class="font-semibold gap-6">
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">Trends</li>
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">Product</li>
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">LookYou</li>
                    <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">About</li>
                    <img class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300" src="../asset/cart.png" alt="" />
                </ul>
                <div class="text-2xl font-bold gap-2 flex">
                    <button class="w-full text-white bg-blue-400 px-6 py-3 text-2xl">LOGIN</button>
                    <button class="w-full text-blue-400 outline px-6 py-2.5">SIGN IN</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir navbar -->
    <!-- fungsi Navbar Mobile -->

    <script>
        const buttonToogle = document.querySelector(".buttonToogle");
        const mobilemenu = document.querySelector(".mobilemenu");

        buttonToogle.addEventListener("click", function() {
            mobilemenu.classList.toggle("hidden");
        });
    </script>
    <!-- akhri navbar mobile -->

    <div>
        <div class="container mx-auto pt-8">
            <section id="home">
                <div class="mx-auto px-5 gap-2">
                    <div class="flex flex-col items-center gap-3 z-20 md:flex-row">
                        <div class="md:w-1/2 relative overflow-hidden bg-cover bg-no-repeat">
                            <button class="hover:scale-105 transition duration-300 ease-in-out">
                                <img class="mx-auto" src="./asset/tiketing/candiboko.png" alt="" />
                                <h1 class="absolute font-bold text-4xl text-white bottom-4 left-1/2 -translate-x-1/2 p-4"></h1>
                            </button>
                            <div class="">
                                <span>
                                    <h1 class="font-bold text-3xl">Lorem ipsum dolor, sit amet consectetur </h1>
                                    <div class="py-4 flex gap-2">
                                        <img src="./asset/tiketing/icon/locatiton.png" alt="">
                                        <span>
                                            <p>Jl. Raya Piyungan - Kec. Prambanan, Daerah Istimewa Yogyakarta</p>
                                        </span>
                                    </div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolor quibusdam rem</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolor quibusdam rem</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolor quibusdam rem</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolor quibusdam rem</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolor quibusdam rem</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolor quibusdam rem</p>
                                </span>
                            </div>
                        </div>
                        <div class="items-center">
                            <img class="hidden md:block" src="./asset/tiketing/icon/line.png" alt="">
                        </div>
                        <div class="md:w-1/2  relative flex flex-col">
                            <div class=" bg-blue-400 bg-cover rounded-lg py-4 px-4">
                                <div class="my-5  py-2 text-white">
                                    <label class="block font-medium text-gray-900 dark:text-white text-2xl" for="kapasitas">Nama Pemesan</label>
                                    <div class="py-2.5">
                                        <input class="h-9 rounded-lg text-black p-2.5 w-full " type="text">
                                    </div>
                                    <p class="font-semibold text-2xl">Pilih Tanggal Tour</p>
                                    <div class="relative max-w-sm py-2.5">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-buttons type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  white marker: dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>

                                    <div class="py-2.5">
                                        <label class="block font-medium text-gray-900 dark:text-white text-xl" for="kapasitas">Jumlah Peserta</label>
                                        <div class="flex gap-4 text-black">
                                            <div>
                                                <p class="text-sm text-white font-medium">Dewasa</p>
                                                <input class="h-9 rounded-lg text-center" placeholder="Dewasa" type="number" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-white">Anak Anak</p>
                                                <input class="h-9 rounded-lg text-center" placeholder="Anak anak" type="number" />
                                            </div>
                                        </div>
                                    </div>

                                    <label for="time" class="block mb-2 font-medium text-gray-900 dark:text-white text-xl">Pilih jam</label>
                                    <select id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Jam</option>
                                        <option value="US">8:30 (pagi)</option>
                                        <option value="CA">11:00 (siang)</option>
                                        <option value="FR">13:30 (sore)</option>
                                        <option value="DE">15:00 (sore2)</option>
                                    </select>

                                    <div class=" py-5 ">
                                        <p class="text-xl font-semibold bg-blue-500  text-white ">harga tour</p>
                                        <p class="text-3xl font-semibold bg-blue-500 text-white">IDR xxx.xxx.xxx <span>/pcs</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" py-10">
                        <button class=" bg-blue-400 h-14 w-full rounded-full font-medium text-xl  hover:bg-blue-500">PESAN</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>