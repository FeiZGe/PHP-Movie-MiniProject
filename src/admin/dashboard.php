<?php
    session_start();
    require '../../database/dbconnect.php';

    try {
        // ดึงข้อมูลจากตาราง genre
        $stmt = $conn->prepare("SELECT genreID, genreName FROM genre");
        $stmt->execute();
        $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // ดึงข้อมูลจากตาราง movies ทั้งหมด
        $stmt = $conn->prepare("SELECT movies.*, genre.genreName 
            FROM movies 
            JOIN genre ON movies.genreID = genre.genreID");
        $stmt->execute();
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en" data-theme="winter">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Admin | Pandora</title>

    <!-- Tailwind + DaisyUI -->
    <link rel="stylesheet" href="../style/output.css">

    <!-- LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body class="font-poppins">
    <header>
        <?php include('adminnav.php'); ?>
    </header>
    
    <!-- Start Main Content -->
    <main class="container mx-auto px-3 mt-3">

        <!-- hero -->
        <section class="w-full h-56 bg-cover bg-no-repeat bg-center mt-5 rounded-xl drop-shadow-[0_5px_8px_rgba(52,145,252,0.25)]" style="background-image: url(adminbg.jpg)">

        </section>

        <!-- table -->
        <section class="mt-4">

            <!-- titile -->
            <article class="flex flex-row items-center justify-between">
                <h2 class="text-3xl font-bold bg-gradient-to-br from-base-content to-primary bg-clip-text text-transparent">Movie lists</h2>
                <button class="btn btn-primary btn-sm flex flex-row justify-center items-center gap-1 transition duration-300 ease-in-out hover:scale-110" onclick="my_modal_insert.showModal()">
                    <i class="fa-solid fa-plus"></i>
                    <p>movie</p>
                </button>
            </article>

            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-error my-1" role="alert">
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success my-1" role="alert">
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>

            <article class="card bg-base-100 shadow-xl mt-5">
                <div class="card-body">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Story</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($movies as $movie): ?>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="w-20 h-28 rounded-lg bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo htmlspecialchars($movie['poster']); ?>)">
                                            
                                        </div>
                                        <div>
                                            <!-- Movie name -->
                                            <div class="font-bold">
                                                <?php echo htmlspecialchars($movie['movieName']); ?>
                                            </div>

                                            <!-- Movie genre -->
                                            <div class="badge badge-primary badge-sm badge-outline">
                                                <?php echo htmlspecialchars($movie['genreName']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <!-- detail -->
                                    <div class="text-pretty">
                                        <?php echo htmlspecialchars($movie['detail']); ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-row justify-center items-center gap-1.5">

                                        <!-- edit btn -->
                                        <a href="editmovie.php?movieID=<?php echo $movie['movieID']; ?>" class="btn btn-warning btn-square btn-sm tooltip tooltip-top tooltip-warning flex items-center justify-center transition duration-300 ease-in-out hover:scale-125" data-tip="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-error btn-square btn-sm tooltip tooltip-top tooltip-error flex items-center justify-center transition duration-300 ease-in-out hover:scale-125" data-tip="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- End Main Content -->

    <!-- modal -->
    <dialog id="my_modal_insert" class="modal">
        <div class="modal-box">
            <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h1 class="text-3xl font-bold">Add movie</h1>
            <form action="addmovie.php" method="post">
                <div class="w-4/5 justify-center mx-auto">
                    
                    <div class="flex flex-col justify-center gap-2 mb-4 mt-6">
                        <!-- movie name -->
                        <label for="moviename" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                            Movie : 
                            <input type="text" name="moviename" id="moviename" class="grow" placeholder="name" required />
                        </label>

                        <!-- trailer -->
                        <label for="trailer" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                            Trailer : 
                            <input type="text" name="trailer" id="trailer" class="grow" placeholder="url" required />
                        </label>

                        <!-- Poster -->
                        <label for="poster" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                            Poster : 
                            <input type="text" name="poster" id="poster" class="grow" placeholder="url" required />
                        </label>

                        <!-- Genre -->
                        <select id="genre" name="genre" class="select select-bordered w-full max-w-xs hover:input-primary invalid:input-error" required>
                            <option disabled selected>Choose genre</option>
                            <?php foreach ($genres as $genre): ?>
                                <option value="<?php echo htmlspecialchars($genre['genreID']); ?>">
                                    <?php echo htmlspecialchars($genre['genreName']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <!-- Movie detail -->
                        <textarea id="detail" name="detail" class="textarea textarea-bordered hover:input-primary" placeholder="Detail" required></textarea>

                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="text-error text-xs mt-1" role="alert">
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['success'])) { ?>
                            <div class="text-success text-xs mt-1" role="alert">
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </div>
                        <?php } ?>
                    </div>

                    <section class="flex flex-row justify-center">
                        <input type="submit" name="submit" value="Confirm" class="btn btn-wide btn-primary transition ease-in-out duration-300 hover:scale-110">
                    </section>
                </div>
            </form>
        </div>

    </dialog>
    
    <!-- edit modal -->
    <?php

        if (isset($_GET['movieID'])) {
            $movieID = $_GET['movieID'];

            $stmt = $conn->prepare("SELECT * FROM movies WHERE movieID = :movieID");
            $stmt->bindParam(':movieID', $movieID);
            $stmt->execute();
            $movie = $stmt->fetch(PDO::FETCH_ASSOC);
        }

    ?>
    <dialog id="my_modal_edit" class="modal">
        <div class="modal-box">
            <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h1 class="text-3xl font-bold">Edit movie</h1>
            <form action="editmovie.php" method="post">
                <div class="w-4/5 justify-center mx-auto">
                    
                    <div class="flex flex-col justify-center gap-2 mb-4 mt-6">
                        <!-- movie name -->
                        <label for="moviename" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                            Movie : 
                            <input type="text" name="moviename" id="moviename" class="grow" placeholder="name" />
                        </label>

                        <!-- trailer -->
                        <label for="trailer" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                            Trailer : 
                            <input type="text" name="trailer" id="trailer" class="grow" placeholder="url" />
                        </label>

                        <!-- Poster -->
                        <label for="poster" class="input input-md input-bordered flex items-center gap-2 hover:input-primary invalid:input-error">
                            Poster : 
                            <input type="text" name="poster" id="poster" class="grow" placeholder="url" />
                        </label>

                        <!-- Genre -->
                        <select id="genre" name="genre" class="select select-bordered w-full max-w-xs hover:input-primary invalid:input-error" >
                            <option disabled selected>Choose genre</option>
                            <?php foreach ($genres as $genre): ?>
                                <option value="<?php echo htmlspecialchars($genre['genreID']); ?>">
                                    <?php echo htmlspecialchars($genre['genreName']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <!-- Movie detail -->
                        <textarea id="detail" name="detail" class="textarea textarea-bordered hover:input-primary" placeholder="Detail" ></textarea>

                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="text-error text-xs mt-1" role="alert">
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['success'])) { ?>
                            <div class="text-success text-xs mt-1" role="alert">
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </div>
                        <?php } ?>
                    </div>

                    <section class="flex flex-row justify-center">
                        <input type="submit" name="submit" value="Confirm" class="btn btn-wide btn-primary transition ease-in-out duration-300 hover:scale-110">
                    </section>
                </div>
            </form>
        </div>

    </dialog>

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('../components/footer.php'); ?>
    </footer>

</body>
</html>