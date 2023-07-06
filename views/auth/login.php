<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Holocation - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: 'Inter';
    }
</style>
<body>
    <div class="flex min-h-screen bg-[url('/assets/loginbg.png')] min-h-screen bg-center bg-cover flex-col justify-center px-6 py-12 lg:px-8 bg-slate-600">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto  w-48 md:w-32 sm:w-12" src="/assets/logokita.png" alt="logo_holocation">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm py-5 px-5">
            <form class="space-y-6" action="/config/Authenticator.php" method="POST">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg>
                    </div>
                    <input type="username" name="username" class="py-5 text-sm rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Username" autocomplete="off">
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.5 8V4.5a3.5 3.5 0 1 0-7 0V8M8 12v3M2 8h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z" />
                        </svg>
                    </div>
                    <input type="password" name="password" class="py-5 text-sm rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Password" autocomplete="off">
                </div>
                <div>
                    <button type="submit" class="flex font-bold w-full justify-center rounded-md bg-indigo-600 px-3 py-4 text-sm leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Belum mempunyai akun?
                <a href="/views/auth/register.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Daftar</a>
            </p>
        </div>
    </div>


</body>

</html>