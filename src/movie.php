<?php 

    session_start();
    require '../database/dbconnect.php';

    // ตรวจสอบว่าผู้ใช้ล็อกอินหรือยัง
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: login.php');
    }

    // สมมติว่า $userID ถูกกำหนดไว้ใน session เมื่อผู้ใช้ล็อกอิน
    $userID = $_SESSION['user_login'];

    // ดึง genre ที่ผู้ใช้เลือกจากฐานข้อมูล
    $stmt = $conn->prepare("SELECT genre.genreID, genre.genreName FROM userGenre INNER JOIN genre ON userGenre.genreID = genre.genreID WHERE userGenre.userID = :userID");
    $stmt->bindParam(':userID', $userID);
    $stmt->execute();
    $userGenres = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ถ้าต้องการดึง movies ทั้งหมด (หรือ genre เฉพาะที่ผู้ใช้เลือก) ตามที่คุณต้องการ
    $stmtMovies = $conn->prepare("SELECT * FROM movies");
    $stmtMovies->execute();
    $movies = $stmtMovies->fetchAll(PDO::FETCH_ASSOC);

?>
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
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style/hidescroll.css">

</head>
<body class="font-poppins">
    <header>
        <?php include('./components/nav.php'); ?>
    </header>

    <!-- Start main content -->
    <main class="container mx-auto px-3 mt-3">

        <!-- Hero -->
        <section id="default-carousel" class="relative w-full mt-16" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/hero/hero1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/hero/hero2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/hero/hero3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/hero/hero4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/hero/hero5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </section>

        <!-- Show Movie -->
        <section class="mt-6">
            <!-- วนลูปแสดง genre -->
            <?php foreach ($userGenres as $genre): ?>
                <h3 class="text-md sm:text-lg font-semibold mt-5"><?= htmlspecialchars($genre['genreName']); ?></h3>

                <!-- movie card -->
                <article class="flex flex-nowrap w-full gap-4 mt-3 overflow-x-auto snap-x snap-mandatory no-scrollbar">
                    <?php foreach ($movies as $movie): ?>
                        <?php if ($movie['genreID'] == $genre['genreID']): ?>
                            <a 
                                class="flex-none w-40 h-52 bg-base-300 rounded-xl flex flex-col justify-end items-center text-center bg-no-repeat bg-center bg-cover snap-start relative group text-wrap p-1" 
                                style="background-image: url(<?php echo htmlspecialchars($movie['poster']); ?>);"
                                href="moviedetail.php?movieID=<?php echo htmlspecialchars($movie['movieID']); ?>">
                                <div class="opacity-0 group-hover:opacity-100 duration-300 absolute inset-x-0 bottom-0 text-sm bg-base-200">
                                    <?php echo htmlspecialchars($movie['movieName']); ?>
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </article>
            <?php endforeach; ?>

        </section>


        <!-- Flowbite CDN -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </main>
    <!-- End main content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>