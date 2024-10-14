<?php
    session_start();
    require '../../database/dbconnect.php';

    // ตรวจสอบว่าผู้ใช้เป็น admin หรือไม่
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: ../login.php');
    }

    // ดึงข้อมูลผู้ใช้ที่มี role = 1 (admin)
    $stmt = $conn->prepare("SELECT * FROM users WHERE role = 1");
    $stmt->execute();
    $admins = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ดึงข้อมูลผู้ใช้ที่มี role = 1 (users)
    $stmt = $conn->prepare("SELECT * FROM users WHERE role = 0");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" data-theme="winter">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Role | Pandora</title>

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
        <section class="mt-5">

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

            <!-- Admin -->
            <article class="card bg-base-100 shadow-xl mt-5">
                <div class="card-body">
                    <div class="card-title text-3xl">Admin</div>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($admins as $admin): ?>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-lg bg-cover bg-no-repeat bg-center" style="background-image: url(../assets/avatar/<?php echo htmlspecialchars($admin['avatar']); ?>)">
                                            
                                        </div>
                                        <div>
                                            <!-- Username -->
                                            <div class="font-bold">
                                                <?php echo htmlspecialchars($admin['username']); ?>
                                            </div>

                                            <!-- Password -->
                                            <div class="badge badge-primary badge-sm badge-outline">
                                                <?php echo htmlspecialchars($admin['password']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-pretty">
                                        <?php echo htmlspecialchars($admin['email']); ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-row justify-center items-center gap-1.5">

                                        <!-- role btn -->
                                        <a href="changerole.php?id=<?php echo $admin['userID']; ?>" class="btn btn-error btn-sm btn-square tooltip tooltip-top tooltip-error flex items-center justify-center transition duration-300 ease-in-out hover:scale-110" data-tip="Delete admin">
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

            <div class="divider"></div>

            <!-- Normal user -->
            <article class="card bg-base-100 shadow-xl mt-5">
                <div class="card-body">
                    <div class="card-title text-3xl">Normal User</div>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-lg bg-cover bg-no-repeat bg-center" style="background-image: url(../assets/avatar/<?php echo htmlspecialchars($user['avatar']); ?>)">
                                            
                                        </div>
                                        <div>
                                            <!-- Username -->
                                            <div class="font-bold">
                                                <?php echo htmlspecialchars($user['username']); ?>
                                            </div>

                                            <!-- Password -->
                                            <div class="badge badge-primary badge-sm badge-outline">
                                                <?php echo htmlspecialchars($user['password']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-pretty">
                                        <?php echo htmlspecialchars($user['email']); ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-row justify-center items-center gap-1.5">

                                        <!-- role btn -->
                                        <a href="changeroletoadmin.php?id=<?php echo $user['userID']; ?>" class="btn btn-success btn-sm btn-square tooltip tooltip-top tooltip-success flex items-center justify-center transition duration-300 ease-in-out hover:scale-110" data-tip="Add admin">
                                            <i class="fa-solid fa-crown"></i>
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

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('../components/footer.php'); ?>
    </footer>

</body>
</html>