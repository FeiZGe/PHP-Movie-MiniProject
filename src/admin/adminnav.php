<?php 

    if (isset($_SESSION['admin_login'])) {
        $user_id = $_SESSION['admin_login'];
        $stmt = $conn->query("SELECT * FROM users WHERE userID = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>
<nav class="fixed z-30 top-1 left-1/2 transform -translate-x-1/2">
    <div class="flex flex-row items-center gap-4 rounded-full bg-neutral text-neutral-content w-56 px-2 py-1.5 mt-6 drop-shadow-[0_5px_8px_rgba(52,145,252,0.25)]">
        <!-- home -->
        <div class="flex-1 justify-start">
            <a href="dashboard.php" class="px-3 py-1 rounded-full hover:bg-primary hover:text-primary-content transition duration-300 ease-in-out">Home</a>
        </div>
        
        <!-- rank -->
        <div class="flex flex-1 justify-end">
            <a href="rank.php" class="flex flex-row items-center gap-2 px-3 py-1 rounded-full bg-primary text-primary-content hover:bg-info hover:text-info-content transition duration-300 ease-in-out">
                <!-- icon -->
                <i class="fa-solid fa-id-card"></i>

                <!-- btn -->
                <p>Role</p>
            </a>
        </div>
    </div>
</nav>

<!-- bar -->
<section class="flex flex-row items-center mx-4 py-1 mt-6">

    <!-- web name -->
    <article class="flex-1 flex justify-start items-center font-raleway font-bold text-2xl px-3">
        Pandora
    </article>

    <!-- user -->
    <article class="flex-1 flex justify-end items-center">
        <!-- avatar -->
        <section class="col-span-1 flex items-center justify-end gap-2">
            <article class="avatar">
                <div class="w-10 rounded-full">
                    <img src="../assets/avatar/<?php echo $row['avatar']?>" />
                </div>
            </article>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-sm">
                    <!-- Name -->
                    <article class="flex flex-row gap-1">
                        <h3><?php echo $row['username']?></h3>
                        <i class="fa-solid fa-angle-down"></i>
                    </article>
                </div>
                <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-300 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="../logout.php" class="bg-error text-error-content hover:bg-red-600 my-1">Logout</a></li>
                </ul>
            </div>
        </section>
    </article>
</section>