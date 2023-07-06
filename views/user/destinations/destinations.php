<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <div class="bg-[url('../../assets/tour/bg-nav.png')] bg-no-repeat">
            <div class="container py-6 mx-auto">
                <!-- navbar -->
                <nav class="flex justify-between items-center">
                    <a href="landingpage.html">
                        <div>
                            <ul class="font-bold text-3xl opacity-100">
                                <li><img class="w-16" src="../../assets/logokita.png" alt="" /></li>
                            </ul>
                        </div>
                    </a>
                    <ul class="font-bold text-4xl lg:flex gap-6 hidden text-white">
                        <h1>Popular Destinations Tour</h1>
                    </ul>
                    <div class="text-2xl font-bold gap-6 lg:flex hidden">
                        <button class="text-white bg-blue-400 px-6 py-3 rounded-lg text-2xl">LOGIN</button>
                        <button class="text-blue-400 outline px-6 py-2.5 rounded-lg text-2xl">SIGN IN</button>
                    </div>
                    <button class="lg:hidden block buttonToogle">
                        <img src="../../assets/humburger.png" alt="hamburger" />
                    </button>
                </nav>
            </div>
        </div>
        <div class="mobilemenu hidden">
            <ul class="font-semibold gap-6">
                <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">Trends</li>
                <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">Product</li>
                <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">LookYou</li>
                <li class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300">About</li>
                <img class="py-6 px-4 cursor-pointer hover:bg-thirdty bg-blue-400 bg-opacity-70 ease-in duration-300" src=".../../assets/cart.png" alt="" />
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

    </header>

    <main class=" bg-no-repeat">
        <section id="home">
            <div class="mx-auto px-5 gap-2">
                <a href="tiketing.html">
                    <div class="flex flex-col items-center z-20 md:flex-row">
                        <div class="md:w-1/2 relative overflow-hidden bg-cover bg-no-repeat">
                            <button class=" hover:scale-105  transition duration-300 ease-in-out">
                                <a href="yk.html">
                                    <img class="mx-auto" src="../../assets/tour/yogya1.png" alt="" />
                                </a>
                                <h1 class="absolute font-bold text-4xl text-white bottom-4 left-1/2 -translate-x-1/2 p-4">JOGJA</h1>
                            </button>
                        </div>
                        <div class="md:w-1/2 relative overflow-hidden bg-cover bg-no-repeat">
                            <button class="hover:scale-105 transition duration-300 ease-in-out">
                                <img class="mx-auto" src="../../assets/tour/bali.png" alt="" />
                                <h1 class="absolute font-bold text-4xl text-white bottom-4 left-1/2 -translate-x-1/2 p-4">BALI</h1>
                            </button>
                        </div>
                    </div>
                </a>
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="md:w-1/3 max-w-full relative overflow-hidden bg-cover bg-no-repeat ">
                        <button class="hover:scale-105 transition duration-300 ease-in-out">
                            <img class="mx-auto" src="../../assets/tour/lombok2.png" alt="" />
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-end justify-center">
                                <p class="text-white text-4xl font-bold p-4">LOMBOK</p>
                            </div>
                        </button>
                    </div>
                    <div class="md:w-1/3 max-w-full relative overflow-hidden bg-cover bg-no-repeat">
                        <button class="hover:scale-105 transition duration-300 ease-in-out">
                            <img src="../../assets/tour/NTT1.png" alt="" />
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-end justify-center">
                                <p class="text-white text-4xl font-bold p-4">NTT</p>
                            </div>
                        </button>
                    </div>
                    <div class="md:w-1/3 max-w-full relative overflow-hidden bg-cover bg-no-repeat">
                        <button class="hover:scale-105 transition duration-300 ease-in-out">
                            <img src="../../assets/tour/papua3.png" alt="" />
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-end justify-center">
                                <p class="text-white text-4xl font-bold p-4">PAPUA</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>