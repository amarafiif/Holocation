<!doctype html>
<html>
<?php

require('../../config/databaseConnection.php');

if (isset($_POST['tekan'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($name) || empty($email) || empty($username) || empty($password)) {
        header("Location: ./register.php");
    } else {
        try {
            //code...
            $query = "insert into users(name,email,username,password) values ('$name','$email','$username','$password')";
            $res = mysqli_query($connect, $query);
            header("Location: ./login.php");
        } catch (\Throwable $th) {
            //throw $th;
            header("Location: ./register.php");
        }
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Holocation - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Inter';
    }
</style>

<body>
    <div class="flex bg-[url('/assets/loginbg.png')] min-h-screen bg-center bg-cover flex-col justify-center px-6 py-12 lg:px-8 bg-slate-600">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto  w-48 md:w-32 sm:w-12" src="/assets/logokita.png" alt="logo_holocation">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm py-5 px-5">
            <form class="space-y-6" action="" method="POST">
                <!-- name -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                        </svg>

                    </div>
                    <input type="text" name="name" class="py-5 text-sm rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Name" autocomplete="off">
                </div>
                <!-- email -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>

                    </div>
                    <input type="email" name="email" class="py-5 text-sm rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Email address" autocomplete="off">
                </div>
                <!-- username -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg>
                    </div>
                    <input type="text" name="username" class="py-5 text-sm rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Username" autocomplete="off">
                </div>
                <!-- password -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.5 8V4.5a3.5 3.5 0 1 0-7 0V8M8 12v3M2 8h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z" />
                        </svg>
                    </div>
                    <input type="password" name="password" class="py-5 text-sm rounded-md border pl-11 leading-3 focus:text-gray-900 w-full" placeholder="Password" autocomplete="off">
                </div>
                <div>
                    <button type="submit" name="tekan" class="flex font-bold w-full justify-center rounded-md bg-indigo-600 px-3 py-4 text-sm leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Sudah mempunyai akun?
                <a href="/views/auth/login.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
            </p>
        </div>
    </div>


</body>

</html>