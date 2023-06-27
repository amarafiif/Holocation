<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Holocation - Login</title>
</head>

<body>
    <div class="flex min-h-screen bg-[url('/assets/loginbg.png')] min-h-screen bg-center bg-cover flex-col justify-center px-6 py-12 lg:px-8 bg-slate-600">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto  w-48 md:w-32 sm:w-12" src="/assets/logokita.png" alt="logo_holocation">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-blue-200 py-5 px-5 bg-opacity-75 rounded-xl">
            <form class="space-y-6" action="/config/Authenticator.php" method="POST">
                <div>
                    <div class="mt-2">
                        <input type="text" id="username" name="username" class="py-5 text-sm opacity-90 border rounded-md pl-12 leading- focus:text-gray-900 w-full" placeholder="Username" autocomplete="off">
                    </div>
                </div>

                <div>
                    <div class="mt-2">
                        <input type="password" name="password" class="py-5 text-sm opacity-90 rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Password" autocomplete="off">
                    </div>
                </div>
                <div class="text-sm">
                    <a href="#" class="mb-3 font-semibold float-right text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
                <div>
                    <button type="submit" class="flex font-bold w-full justify-center rounded-md bg-indigo-600 px-3 py-4 text-sm leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Belum mempunyai akun?
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Daftar</a>
            </p>
        </div>
    </div>


</body>

</html>