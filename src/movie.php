<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">
    <title>Movie | Pandora</title>

    <!-- Tailwind -->
    <link rel="stylesheet" href="./style/twoutput.css">

    <!-- LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="font-poppins text-neutral-200">
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

    <footer> </footer>
</body>
</html>
ื