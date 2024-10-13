<!DOCTYPE html>
<html lang="en" data-theme="winter">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Sign In | Pandora</title>

    <!-- Tailwind + DaisyUI -->
    <link rel="stylesheet" href="./style/output.css">

    <!-- LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body class="font-poppins">
    <header>
        <?php include('./components/authnav.php'); ?>
    </header>

    <!-- Start main content -->
    <main class="container mx-auto px-3 mt-3">
        <div class="grid grid-cols-1 h-screen items-center">
            <div class="card bg-base-100 shadow-xl w-full md:w-2/5 mx-auto">
                <div class="card-body">
                    <h1 class="font-raleway text-lg font-bold">Pandora</h1>
                    <div class="flex flex-col items-center">

                        <div>
                            <!-- titile -->
                            <div class="mt-3">
                                <h2 class="card-title text-3xl">Sign In</h2>
                                <p class="text-sm">to your account below.</p>
                            </div>

                            <form action="logindb.php" method="post" class="mt-5">

                                <!-- input -->
                                <div class="flex flex-col gap-3">
                                    <!-- Username -->
                                    <label for="username" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16"
                                            fill="currentColor"
                                            class="h-4 w-4 opacity-70">
                                            <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                                        </svg>
                                        <input type="text" name="username" id="username" class="grow" placeholder="Username" />
                                    </label>

                                    <!-- Password -->
                                    <label for="password" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16"
                                            fill="currentColor"
                                            class="h-4 w-4 opacity-70">
                                            <path
                                            fill-rule="evenodd"
                                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                            clip-rule="evenodd" />
                                        </svg>
                                        <input type="password" name="password" id="password" class="grow" placeholder="Password" />
                                    </label>
                                </div>

                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="text-error text-xs mt-1" role="alert">
                                        <?php
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['success'])) { ?>
                                    <div class="text-success text-xs mt-1" role="alert">
                                        <?php
                                            echo $_SESSION['success'];
                                            unset($_SESSION['success']);
                                        ?>
                                    </div>
                                <?php } ?>

                                <!-- Submit -->
                                <input type="submit" name="signin" value="Sign In" class="btn btn-primary btn-wide mt-7 hover:scale-110 transition duration-300 ease-in-out">

                                <!-- more detail -->
                                <p class="text-xs opacity-75 mt-2 flex justify-center gap-1">
                                    Don't have any account? <a href="register.php" class="link link-secondary">Register</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End main content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>