<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body>
    <div class="bg-[url('/assets/loginbg.png')] min-h-screen bg-center bg-cover ">
        <div class="container mx-auto">
            <div class="place-content-center items-center pt-28 ">
                <img class="mx-auto  w-16 md:w-32 lg:w-48" src="./asset/logokita.png" alt="logo_holocation">
            </div>
            <div class=" py-8 px-5 mx-auto max-w-2xl  bg-slate-400 w-1/2 mt-20">

                <form action="/config/Authenticator.php" class=" md:px-28 lg:px-32 sm:px-12" method="GET">
                    <div class="relative text-gray-600 focus-within:text-gray-400 ">
                        <span class="absolute inset-y-0 left-0 ">
                            <button class="focus:outline-none focus:shadow-outline">
                                <img src="./asset/Mail.svg" class="p-3.5 mt-1" alt="Username">
                            </button>
                        </span>
                        <input type="text" name="username" class="py-5 text-sm opacity-90 rounded-md pl-12 leading-3 focus:outline-none focus:text-gray-900 w-full" placeholder="Username" autocomplete="off">
                    </div>
                </form>
                <form class="md:px-28 lg:px-32 sm:px-12 py-3" method="GET">
                    <div class="relative text-gray-600 focus-within:text-gray-400 ">
                        <span class="absolute inset-y-0 left-0 ">
                            <button class=" focus:outline-none focus:shadow-outline">
                                <img src="./asset/Lock.png" class="p-3.5 mt-1" alt="Password">
                            </button>
                        </span>
                        <input type="password" name="password" class="py-5 text-sm opacity-90 rounded-md pl-11 leading-3 focus:outline-none  focus:text-gray-900 w-full" placeholder="Password" autocomplete="off">
                    </div>
                </form>

                <div class="w-full md:px-28 lg:px-32 mt-3 mb-2  sm:px-12 flex items-center justify-between">
                    <span class="ms-auto">
                        <button class="text-white ">Belum memiliki akun? <a href="">Daftar</a></button>
                    </span>
                </div>
                <div class="md:px-28 lg:px-32 sm:px-12">
                    <button type="submit" class="bg-blue-400 rounded-md font-bold text-slate-50 hover:shadow-blue-300 hover:shadow-md focus:ring-2 focus:ring-blue-200 w-full py-4 mx-auto">Login</button>
                </div>
            </div>
        </div>
    </div>
    </h1>
</body>

</html>