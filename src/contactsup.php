<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Contact Support | Pandora</title>

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

    <!-- Start main content -->
    <main class="container mx-auto px-3 mt-3 flex flex-col items-center justify-center h-screen">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold mb-2">Contact Support</h1>
            <p class="text-gray-500 mb-8">We’re here to help! Please fill out the form below.</p>
        </div>
        
        <form class="w-full max-w-lg shadow-md rounded-xl px-8 pt-6 pb-8 mb-4 bg-slate-950">
            <div class="mb-4">
                <label for="name" class="block  text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none rounded-xl w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline bg-slate-800" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block  text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="shadow appearance-none rounded-xl w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline bg-slate-800" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block text-sm font-bold mb-2">Message</label>
                <textarea id="message" name="message" rows="5" class="shadow appearance-none rounded-xl w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline bg-slate-800    " required></textarea>
            </div>
            <div class="flex items-center justify-center">
            <a href="support.php" class="btn btn-primary py-2 px-4 rounded-xl text-black  hover:scale-110 transition duration-300 ease-in-out">Send Message</a>
            </div>
        </form>
    </main>
    <!-- End main content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>
    
</body>
</html>