<?php 

    session_start();
    require '../database/dbconnect.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: login.php');
    }

    try {
        // ดึงข้อมูลจากตาราง movies ที่เป็น Animation เท่านั้น
        $stmt = $conn->prepare("SELECT movies.*, genre.genreName 
        FROM movies 
        JOIN genre ON movies.genreID = genre.genreID
        WHERE genre.genreName = 'Animation'");
        $stmt->execute();
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }

?>
<!DOCTYPE html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Animations | Pandora</title>

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
    <main class="container mx-auto px-3 mt-3">
        <div class="h-10"></div>

        <!-- Show Movie -->
        <section class="mt-6">
            <h3 class="text-md sm:text-lg font-semibold mt-5">Animation</h3>

            <!-- movie card -->
            <article class="flex flex-wrap w-full gap-4 mt-3">
                <?php foreach ($movies as $movie): ?>
                    <a 
                        class="flex-none w-40 h-52 bg-base-300 rounded-xl flex flex-col justify-end items-center text-center bg-no-repeat bg-center bg-cover snap-start relative group text-wrap p-1" 
                        style="background-image: url(<?php echo htmlspecialchars($movie['poster']); ?>);"
                        href="moviedetail.php?movieID=<?php echo htmlspecialchars($movie['movieID']); ?>">
                        <div class="opacity-0 group-hover:opacity-100 duration-300 absolute inset-x-0 bottom-0 text-sm bg-base-200">
                            <?php echo htmlspecialchars($movie['movieName']); ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </article>

        </section>
    </main>
    <!-- End main content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>
</body>
</html>