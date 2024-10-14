<?php 

    session_start();
    require '../database/dbconnect.php';

    // ตรวจสอบว่าผู้ใช้ล็อกอินหรือยัง
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: login.php');
    }
    
    if (isset($_GET['movieID'])) {
        $movieID = $_GET['movieID'];
    
        $stmt = $conn->prepare("SELECT * FROM movies WHERE movieID = :movieID");
        $stmt->bindParam(':movieID', $movieID);
        $stmt->execute();
        $movie = $stmt->fetch(PDO::FETCH_ASSOC);
    }

?>
<!DOCTYPE html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">
    <title>Movie Detail</title>

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
     <main class="relative w-screen h-screen">
        <!-- YouTube iframe -->
        <iframe class="absolute inset-0 w-full h-full -z-10"
            src="https://www.youtube.com/embed/<?= htmlspecialchars($movie['trailer']); ?>?autoplay=1&mute=1&oop=1&controls=0&color=white&modestbranding=0&rel=0&playsinline=1&enablejsapi=1&playlist=<?= htmlspecialchars($movie['trailer']); ?>">
        </iframe>

        <!-- Movie details -->
        <div class="absolute inset-y-0 left-0 flex items-center px-8 w-1/2 translate-y-16">
            <!-- movie name -->
            <div class="text-base-content">
                <h3 class="text-5xl font-bold"><?= htmlspecialchars($movie['movieName']); ?></h3>
                <p class="text-md mt-2">
                    <?= htmlspecialchars($movie['detail']); ?>
                </p>
            </div>
        </div>

        <div class="absolute z-0 bottom-0 w-full h-3/5 bg-gradient-to-t from-base-100"></div>
    </main>

    <!-- End Main Content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1 mt-16">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>
