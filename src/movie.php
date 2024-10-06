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

<body class="font-poppins">
    <header>
        <?php include('./components/nav.php'); ?>
    </header>

    <!-- Start Main Content -->
    <main class="container mx-auto px-4 mt-10">
        <!-- ภาพหนัง -->
        <div class="relative">
            <div class="bg-cover bg-center w-full h-64 mb-4" style="background-image: url('บลาๆๆ.jpg');">
                <!-- ปุ่มเล่น -->
                <div class="absolute bottom-16 right-1 rounded-full p-3 shadow-lg btn btn-primary text-white"> Play </div>
            </div>

            <!-- ชื่อ แนะนำ-->
            <section class="mt-20">
                <h2 class="max-w-5xl text-4xl font-bold mr-4">Movie Name</h2>
                <h3 class="max-w-5xl text-xl font-normal mt-4">Description</h3>
            </section>
        </div>
    </main>
    <!-- End Main Content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>
ื