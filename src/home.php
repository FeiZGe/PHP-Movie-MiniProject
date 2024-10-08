<!DOCTYPE html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Home | Pandora</title>

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

    <!-- Start Main Content -->
    <main class="container mx-auto px-3 mt-3">

        <!-- Hero -->
        <div class="h-44"><!-- Space --></div>

        <section class="flex flex-col items-center justify-center h-min gap-3 sm:gap-5">
            <article class="text-center">
                <h1 class="text-4xl sm:text-6xl font-bold mb-3 text-pretty">Free <span class="bg-gradient-to-br from-primary to-secondary bg-clip-text text-transparent">Streaming</span> movies</h1>
                <h2 class="text-3xl sm:text-5xl font-semibold">Everywhere, Anytime.</h2>
            </article>
            <article class="w-3/5 text-center text-pretty opacity-85">
                Dive into our collection of the latest and most popular movies, 
                available to <span class="bg-gradient-to-br from-primary to-secondary bg-clip-text text-transparent">watch for free!</span> Whether you're into action, 
                film noir, or romantic comedies, simply log in to 
                <span class="bg-gradient-to-br from-primary to-secondary bg-clip-text text-transparent">unlock</span> the full experience.
            </article>
        </section>

        <div class="h-20"><!-- Space --></div>

        <!-- video window -->
        <section class="flex justify-center">
            <!-- Background -->
            <div class="absolute inset-x-0 m-auto h-80 max-w-lg bg-gradient-to-tr from-sky-400 via-blue-700 to-primary blur-[190px] -z-10 opacity-70"></div>
            <!-- End -->
            <div class="mockup-window bg-base-200 w-3/4">
                <div class="bg-base-200 flex justify-center">
                    <iframe width="" height="460" class="w-full"
                        src="https://www.youtube.com/embed/J5vviuYdMoE?autoplay=1&mute=1&oop=1&controls=0&color=white&modestbranding=0&rel=0&playsinline=1&enablejsapi=1&playlist=J5vviuYdMoE">
                    </iframe>
                </div>
            </div>
        </section>

        <!-- Feature -->
        <section class="mb-14">
            <!-- Feature Head -->
            <article class="flex flex-col justify-center items-center text-center mt-14">

                <p class="my-3 text-neutral-300 text-xs py-1 px-2 bg-base-100 rounded-full outline outline-1 outline-neutral-600 shadow-lg shadow-blue-500/50">
                    Our Feature
                </p>

                <h2 class="w-1/2 text-3xl sm:text-4xl font-medium text-pretty py-2 mb-14 bg-gradient-to-r from-neutral-400 via-neutral-200 to-neutral-400 bg-clip-text text-transparent">
                    Why Choose Us for Your Streaming Needs?
                </h2>
            </article>

            <!-- Feature Card -->
            <article class="h-80 flex flex-row justify-center items-center gap-5">

                <!-- card 1 -->
                <div class="card bg-base-300 w-72 h-full shadow-xl text-center">
                    <!-- card icon -->
                    <div class="m-4 h-3/5 bg-blue-300 rounded-lg"></div>

                    <!-- card content -->
                    <div class="flex flex-col mb-2 mx-4">
                        <h3 class="text-lg font-semibold mb-1">HD Quality</h3>
                        <p class="text-pretty text-sm opacity-75">
                            Enjoy every movie in stunning high-definition.
                        </p>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="card bg-base-300 w-72 h-full shadow-xl text-center">
                    <!-- card icon -->
                    <div class="m-4 h-3/5 bg-blue-300 rounded-lg"></div>

                    <!-- card content -->
                    <div class="flex flex-col mb-2 mx-4">
                        <h3 class="text-lg font-semibold mb-1">Forever Free</h3>
                        <p class="text-pretty text-sm opacity-75">
                            Stream without ads or hidden fees for an uninterrupted experience!
                        </p>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="card bg-base-300 w-72 h-full shadow-xl text-center">
                    <!-- card icon -->
                    <div class="m-4 h-3/5 bg-blue-300 rounded-lg"></div>

                    <!-- card content -->
                    <div class="flex flex-col mb-2 mx-4">
                        <h3 class="text-lg font-semibold mb-1">Latest Releases</h3>
                        <p class="text-pretty text-sm opacity-75">
                            Updated weekly with trending movies.
                        </p>
                    </div>
                </div>
            </article>
        </section>

        <!-- Gerne -->
        <section></section>

        <!-- Support devices -->
        <section class="w-full flex justify-center">

            <div class="flex flex-col sm:flex-row gap-2 w-4/5 pb-5">
                <!-- content -->
                <article class="flex-1">
                    <h2 class="text-4xl md:text-6xl font-bold text-wrap py-2 bg-gradient-to-r from-neutral-400 via-neutral-200 to-neutral-400 bg-clip-text text-transparent">Compatible Devices</h2>
                    <p class="text-neutral-500">
                        Laptop,<br>Tablet,<br>Mobile.
                    </p>
                </article>

                <!-- icon -->
                <article class="flex-1 flex justify-center relative">
                    <!-- spotlight -->
                    <div class="absolute top-1/3 h-40 w-40 bg-gradient-to-tr from-sky-400 via-blue-700 to-primary blur-[95px] -z-10 opacity-70"></div>

                    <!-- pic -->
                    <img class="w-full" src="./assets/devices.png" alt="Support Devices">
                </article>
            </div>
        </section>

        <!-- Journey -->
        <section class="pt-8">
            <div class="bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-base-100 via-blue-800 to-sky-600 h-96 flex items-center justify-center rounded-t-[60px] relative">
                <div class="text-center z-[1] w-3/4">
                    <p class="badge badge-neutral text-xs mb-4">Journey</p>
                    <h2 class="text-2xl sm:text-5xl font-bold text-pretty mb-2 bg-gradient-to-r from-neutral-400 via-neutral-100 to-neutral-400 bg-clip-text text-transparent">
                        Your Movie-Watching Journey Starts Here
                    </h2>
                    <p class="text-neutral-300 mt-4 text-pretty">
                        No matter what kind of movie you’re in the mood for, Pandora is your go-to destination for quality content at no cost. 
                        <span class="text-info">Log in now</span> and unlock endless entertainment – for free!
                    </p>
                    <div class="mt-6 flex justify-center">
                        <a class="py-2 px-5 bg-neutral-200 text-neutral-600 font-semibold shadow rounded-xl hover:bg-primary hover:text-primary-content hover:scale-110 transition duration-300 ease-in-out" href="#">Sign In</a>
                    </div>
                </div>

                <div class="absolute z-0 bottom-0 w-full h-2/5 bg-gradient-to-t from-base-100"></div>
            </div>

            <div class="divider"></div>
        </section>

    </main>
    <!-- End Main Content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>