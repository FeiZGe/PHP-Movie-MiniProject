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
                    <video class="w-full aspect-video" autoplay muted loop controls
                        src="./assets/intro.mp4">
                        Your browser does not support the video tag.
                        <!-- Cr.https://www.tiktok.com/@kido.aep/video/7420182885908401441?_r=1&_t=8qJwo7WggKt -->
                    </video>
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
            <article class="flex flex-col sm:flex-row justify-center items-center gap-5">

                <!-- card 1 -->
                <div class="card bg-base-300 w-72 h-full shadow-xl text-center justify-center">
                    <!-- card icon -->
                    <div class="m-4 rounded-lg mx-auto">
                        <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f5f5f5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 21L17 21" stroke="#e3e3e3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13.5 7L13.5 11M13.5 13L13.5 11M13.5 11L14.8706 9.43363M17 7L14.8706 9.43363M14.8706 9.43363L17 13" stroke="#e3e3e3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9.5 7L6.5 11.5L10 11.5L10 13" stroke="#e3e3e3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M2 16.4V3.6C2 3.26863 2.26863 3 2.6 3H21.4C21.7314 3 22 3.26863 22 3.6V16.4C22 16.7314 21.7314 17 21.4 17H2.6C2.26863 17 2 16.7314 2 16.4Z" stroke="#e3e3e3" stroke-width="1.5"></path> </g></svg>
                    </div>

                    <!-- card content -->
                    <div class="flex flex-col mb-2 mx-4">
                        <h3 class="text-lg font-semibold mb-1">HD Quality</h3>
                        <p class="text-pretty text-sm opacity-75">
                            Enjoy every movie in stunning high-definition.
                        </p>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="card bg-base-300 w-72 h-full shadow-xl text-center justify-center">
                    <!-- card icon -->
                    <div class="m-4 rounded-lg mx-auto">
                        <svg height="120px" width="120px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#e3e3e3;} </style> <g> <path class="st0" d="M512,255.993l-63.304-51.63l28.999-76.354l-80.635-13.07l-13.063-80.635L307.63,63.311L256,0.013l-7.862,9.64 l-43.78,53.658L128.01,34.305l-13.076,80.635l-80.622,13.07l28.993,76.354L0,255.993l63.305,51.636l-28.993,76.361l80.622,13.076 l13.07,80.629l76.354-29L256,511.987l51.63-63.292l76.367,29l13.063-80.629l80.642-13.076l-29.006-76.361L512,255.993z M449.885,367.935l-70.52,11.437l-11.424,70.514l-66.786-25.366L256,479.882l-45.168-55.363l-66.773,25.366l-11.431-70.514 l-70.513-11.43l25.358-66.793L32.118,256l55.356-45.155l-25.358-66.78l70.513-11.43l11.431-70.514l66.773,25.359L256,32.125 l45.155,55.356l66.786-25.366l11.424,70.52l70.52,11.43l-25.359,66.78L479.882,256l-55.356,45.148L449.885,367.935z"></path> <path class="st0" d="M165.87,268.515l-30.677,6.858c-0.509,0.118-0.813-0.08-0.926-0.582l-4.024-17.985 c-0.112-0.502,0.079-0.806,0.588-0.918l36.842-8.246c0.747-0.165,1.136-0.786,0.972-1.539l-3.013-13.453 c-0.165-0.753-0.786-1.143-1.526-0.978l-54.828,12.263c-0.754,0.172-1.149,0.793-0.978,1.546l18.567,82.988 c0.172,0.753,0.786,1.137,1.546,0.965l15.963-3.568c0.753-0.171,1.143-0.779,0.971-1.532l-7.202-32.191 c-0.112-0.502,0.086-0.813,0.594-0.926l30.677-6.864c0.754-0.165,1.144-0.786,0.972-1.539l-2.98-13.328 C167.238,268.732,166.624,268.343,165.87,268.515z"></path> <path class="st0" d="M238.464,267.853c8.497-6.264,12.336-16.234,9.891-27.169c-3.488-15.594-17.502-23.945-34.986-20.033 l-34.067,7.624c-0.753,0.165-1.15,0.78-0.978,1.54l18.566,82.981c0.172,0.753,0.786,1.143,1.546,0.978l15.964-3.574 c0.753-0.172,1.143-0.786,0.971-1.539l-6.838-30.553c-0.106-0.502,0.086-0.812,0.595-0.925l11.437-2.557l21.718,28.015 c0.568,0.8,1.037,1.091,2.167,0.839l17.859-4.003c0.879-0.192,1.077-1.031,0.542-1.705L238.464,267.853z M220.697,258.094 l-15.084,3.377c-0.509,0.112-0.819-0.086-0.932-0.589l-4.414-19.742c-0.112-0.502,0.079-0.807,0.588-0.919l15.084-3.376 c7.043-1.579,12.501,1.553,13.935,7.975C231.335,251.355,227.741,256.515,220.697,258.094z"></path> <path class="st0" d="M328.126,267.986l-36.842,8.246c-0.503,0.112-0.807-0.079-0.926-0.588l-3.964-17.727 c-0.112-0.502,0.079-0.807,0.581-0.925l30.685-6.858c0.753-0.172,1.15-0.793,0.978-1.546l-2.98-13.321 c-0.172-0.76-0.793-1.15-1.546-0.978l-30.678,6.859c-0.502,0.118-0.806-0.08-0.925-0.582l-3.793-16.974 c-0.112-0.502,0.08-0.812,0.582-0.918l36.842-8.246c0.746-0.172,1.137-0.786,0.971-1.539l-3.013-13.452 c-0.165-0.76-0.786-1.143-1.526-0.978l-54.828,12.263c-0.753,0.172-1.15,0.786-0.978,1.539l18.566,82.988 c0.172,0.753,0.787,1.143,1.547,0.971l54.82-12.263c0.747-0.165,1.137-0.786,0.965-1.54l-3.007-13.452 C329.487,268.211,328.872,267.82,328.126,267.986z"></path> <path class="st0" d="M399.141,252.102l-36.836,8.24c-0.502,0.112-0.812-0.086-0.925-0.588l-3.964-17.728 c-0.112-0.502,0.086-0.812,0.588-0.918l30.671-6.872c0.767-0.165,1.15-0.78,0.984-1.533l-2.98-13.334 c-0.172-0.753-0.786-1.142-1.546-0.978l-30.678,6.872c-0.502,0.106-0.807-0.086-0.919-0.588l-3.799-16.974 c-0.112-0.502,0.079-0.806,0.582-0.925l36.835-8.24c0.767-0.172,1.156-0.786,0.991-1.539l-3.013-13.452 c-0.172-0.76-0.78-1.15-1.546-0.978l-54.814,12.263c-0.753,0.171-1.15,0.786-0.978,1.539l18.566,82.988 c0.172,0.753,0.786,1.143,1.54,0.972l54.814-12.263c0.766-0.172,1.156-0.786,0.984-1.54l-3.013-13.452 C400.522,252.32,399.908,251.93,399.141,252.102z"></path> </g> </g></svg>
                    </div>

                    <!-- card content -->
                    <div class="flex flex-col mb-2 mx-4">
                        <h3 class="text-lg font-semibold mb-1">Forever Free</h3>
                        <p class="text-pretty text-sm opacity-75">
                            Stream without ads or hidden fees for an uninterrupted experience!
                        </p>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="card bg-base-300 w-72 h-full shadow-xl text-center justify-center">
                    <!-- card icon -->
                    <div class="m-4 rounded-lg mx-auto">
                        <svg width="120px" height="120px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#e3e3e3" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect x="8.5" y="12.5" width="47" height="39" rx="2"></rect><line x1="8.5" y1="20.88" x2="55.5" y2="20.88"></line><path d="M28.06,30.42V41.7a.5.5,0,0,0,.8.4l9.29-5.7a.49.49,0,0,0-.07-.85L28.79,30A.51.51,0,0,0,28.06,30.42Z"></path><line x1="10.5" y1="12.5" x2="17.33" y2="20.88"></line><line x1="17.41" y1="12.5" x2="24.24" y2="20.88"></line><line x1="24.38" y1="12.5" x2="31.21" y2="20.88"></line><line x1="31.77" y1="12.5" x2="38.6" y2="20.88"></line><line x1="39.15" y1="12.5" x2="45.98" y2="20.88"></line><line x1="46.67" y1="12.5" x2="53.5" y2="20.88"></line></g></svg>
                    </div>

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
        <section class="">
            <article class="w-3/4 flex justify-center items-center mx-auto">
                <img src="./assets/genre.png" alt="Movie Genre">
            </article>
        </section>

        <!-- Support devices -->
        <section class="w-full flex justify-center pt-8">

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
                        <span class="text-info">Sign in now</span> and unlock endless entertainment – for free!
                    </p>
                    <div class="mt-6 flex justify-center">
                        <a class="py-2 px-5 bg-neutral-200 text-neutral-600 font-semibold shadow rounded-xl hover:bg-primary hover:text-primary-content hover:scale-110 transition duration-300 ease-in-out" href="login.php">Sign In</a>
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