<?php
    session_start();
    require '../../database/dbconnect.php';

    // ตรวจสอบว่าผู้ใช้เป็น admin หรือไม่
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: ../login.php');
    }

    if (isset($_GET['movieID'])) {
        $movieID = $_GET['movieID'];
    
        $stmt = $conn->prepare("SELECT * FROM movies WHERE movieID = :movieID");
        $stmt->bindParam(':movieID', $movieID);
        $stmt->execute();
        $movie = $stmt->fetch(PDO::FETCH_ASSOC);

        // ดึงข้อมูลจากตาราง genre
        $stmt = $conn->prepare("SELECT genreID, genreName FROM genre");
        $stmt->execute();
        $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if (isset($_POST['submit'])) {
        $movieID = $_POST['movieID'];
        $moviename = $_POST['moviename'];
        $trailer = $_POST['trailer'];
        $poster = $_POST['poster'];
        $detail = $_POST['detail'];
        $genre = $_POST['genre'];

        // Update ข้อมูลหนังในฐานข้อมูล
        $stmt = $conn->prepare("UPDATE movies SET movieName = :moviename, trailer = :trailer, poster = :poster, detail = :detail, genreID = :genre WHERE movieID = :movieID");
        $stmt->bindParam(':moviename', $moviename);
        $stmt->bindParam(':trailer', $trailer);
        $stmt->bindParam(':poster', $poster);
        $stmt->bindParam(':detail', $detail);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':movieID', $movieID);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Movie updated successfully";
        } else {
            $_SESSION['error'] = "Failed to update movie";
        }

        header("location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en" data-theme="winter">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Edit | Pandora</title>

    <!-- Tailwind + DaisyUI -->
    <link rel="stylesheet" href="../style/output.css">

    <!-- LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <header>
        <?php include('adminnav.php'); ?>
    </header>
    
    <!-- Start Main Content -->
    <main class="container mx-auto px-3 mt-3">
    <div class="grid grid-cols-1 h-screen items-center">
            <div class="card bg-base-100 shadow-xl w-full md:w-2/5 mx-auto">
                <div class="card-body">
                    <h1 class="text-3xl font-bold">Edit movie</h1>
                    <form action="editmovie.php" method="post">
                        <div class="w-4/5 justify-center mx-auto">
                            <input type="hidden" name="movieID" value="<?= $movie['movieID']; ?>">

                            
                            <div class="flex flex-col justify-center gap-2 mb-4 mt-6">
                                <!-- movie name -->
                                <label for="moviename" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                                    Movie : 
                                    <input type="text" name="moviename" id="moviename" class="grow" value="<?= htmlspecialchars($movie['movieName']); ?>" />
                                </label>

                                <!-- trailer -->
                                <label for="trailer" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                                    Trailer : 
                                    <input type="text" name="trailer" id="trailer" class="grow" value="<?= htmlspecialchars($movie['trailer']); ?>" />
                                </label>

                                <!-- Poster -->
                                <label for="poster" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                                    Poster : 
                                    <input type="text" name="poster" id="poster" class="grow" value="<?= htmlspecialchars($movie['poster']); ?>" />
                                </label>

                                <!-- Genre -->
                                <select id="genre" name="genre" class="select select-bordered w-full max-w-xs hover:input-primary invalid:input-error" >
                                    <option disabled selected>Choose genre</option>
                                    <?php foreach ($genres as $genre): ?>
                                        <option value="<?php echo htmlspecialchars($genre['genreID']); ?>" <?= $movie['genreID'] == $genre['genreID'] ? 'selected' : '' ?> >
                                            <?php echo htmlspecialchars($genre['genreName']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>

                                <!-- Movie detail -->
                                <textarea id="detail" name="detail" class="textarea textarea-bordered hover:input-primary" >
                                    <?= htmlspecialchars($movie['detail']); ?>
                                </textarea>

                                
                            </div>

                            <section class="flex flex-row justify-center">
                                <input type="submit" name="submit" value="Confirm" class="btn btn-wide btn-primary transition ease-in-out duration-300 hover:scale-110">
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Content -->

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('../components/footer.php'); ?>
    </footer>

</body>
</html>