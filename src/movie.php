<!DOCTYPE html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">
    <title>Movie | Pandora</title>

    <!-- Tailwind + DaisyUI -->
    <link rel="stylesheet" href="./style/output.css">

    <!-- LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body class="font-poppins overflow-x-hidden">
    <header>
        <?php include('./components/nav.php'); ?>


    </header>

     <!-- Start Main Content -->
     <main class="container mx-auto mt-16 ">
        <!-- ภาพหนัง -->
        <div class="relative z-0" style="width: 100vw; margin-left: calc(-50vw + 50%);">

            <!-- Container สำหรับชื่อและปุ่มเล่น -->
            <section class=" left-0 flex justify-between w-full mt-60 px-40">
            <!-- ชื่อและคำอธิบายหนัง -->
            <div>
                <h2 class=" uppercase text-6xl font-bold ">Movie Name</h2>
                <h3 class="max-w-2xl text-l font-normal mt-4 whitespace-normal opacity-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas natus maxime qui voluptatem magni inventore, molestiae est dolor illum eligendi repellendus pariatur dicta nulla delectus dolorum aliquam, maiores omnis quidem?</h3>
            </div>

            <!-- ปุ่มเล่น -->
                <div class=" btn btn-primary hover:scale-110 ease-in-out rounded-full shadow-lg transform transition-transform duration-300 hover:z-50">
                <i class="fas fa-play"></i>
                </div>
                </section>
         
        </div>  

            <section class="left-0 right-0 z-20 mt-24 px-0 flex gap-6">
                <!-- 1st Card - Wider -->
                <div class="card bg-base-300 w-full h-80 shadow-xl flex flex-col justify-center items-center p-8 ml-4"> <!-- ปรับค่าที่นี่ -->
                    <h3 class="text-lg font-normal mb-2 text-left">Actors</h3>
                </div>

                <!-- 2nd Card - Narrower -->
                <div class="card bg-base-300 w-96 h-80 shadow-xl flex flex-col justify-center items-center p-8">
                    <h3 class="text-lg font-normal mb-2 text-center">Rating</h3>
                </div>
            </section>

        <section class="left-0 right-0 z-20 mt-20 px-0">
            <div>
                <h3 class="text-xl font-normal mb-2">Also Be Like</h3>
            </div> 
            <!-- Movie rec -->
            <article class=" h-52 flex flex-row justify-center items-center gap-3 z-10 ">

                <!-- 1 -->
                <div class="card bg-base-300 w-60 h-48 shadow-xl text-center relative transform transition-transform duration-300 hover:scale-125 hover:z-50">
                    <!-- pic movie -->
                    <div class="m-4 h-3/5 rounded-lg"></div>
                    </div>

                <!-- 2 -->
                <div class="card bg-base-300 w-60 h-48 shadow-xl text-center relative transform transition-transform duration-300 hover:scale-125 hover:z-50">
                    <!-- pic movie -->
                    <div class="m-4 h-3/5 rounded-lg"></div>
                    </div>

                 <!-- 3 -->
                <div class="card bg-base-300 w-60 h-48 shadow-xl text-center relative transform transition-transform duration-300 hover:scale-125 hover:z-50">
                    <!-- pic movie -->
                    <div class="m-4 h-3/5 rounded-lg"></div>
                    </div>

                <!-- 4 -->
                <div class="card bg-base-300 w-60 h-48 shadow-xl text-center relative transform transition-transform duration-300 hover:scale-125 hover:z-50">
                    <!-- pic movie -->
                    <div class="m-4 h-3/5 rounded-lg"></div>
                    </div>

                <!-- 5 -->
                <div class="card bg-base-300 w-60 h-48 shadow-xl text-center relative transform transition-transform duration-300 hover:scale-125 hover:z-50">
                    <!-- pic movie -->
                    <div class="m-4 h-3/5 rounded-lg"></div>
                    </div>

                <!-- 6 -->
                <div class="card bg-base-300 w-60 h-48 shadow-xl text-center relative transform transition-transform duration-300 hover:scale-125 hover:z-50">
                    <!-- pic movie -->
                    <div class="m-4 h-3/5 rounded-lg"></div>
                    </div>

            </article>
        </section>

        

    </main>
    <!-- End Main Content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1 mt-16">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>
