<?php 

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM users WHERE userID = $user_id");
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>
<nav class="w-full fixed top-0 z-50 px-4 sm:px-8 py-2 bg-base-100 backdrop-filter backdrop-blur-sm bg-opacity-20">
    <div class="grid grid-cols-3 gap-2">
        <!-- Logo -->
        <section class="col-span-1 flex items-center">
            <h1 class="text-2xl font-raleway font-extrabold">Pandora</h1>
        </section>

        <!-- menu -->
        <section class="col-span-1 flex justify-center items-center">
            <ul class="flex flex-row gap-3">
                <li><a href="movie.php" class="text-md px-4 py-2 rounded-md hover:bg-neutral transition-all duration-100 delay-75">Movie</a></li>
                <li><a href="genre.php" class="text-md px-4 py-2 rounded-md hover:bg-neutral transition-all duration-100 delay-75">Genre</a></li>
                <li><a href="animation.php" class="text-md px-4 py-2 rounded-md hover:bg-neutral transition-all duration-100 delay-75">Animation</a></li>
            </ul>
        </section>

        <!-- avatar -->
        <section class="col-span-1 flex items-center justify-end gap-2">
            <article class="avatar">
                <div class="w-10 rounded-full">
                    <img src="assets/avatar/<?php echo $user['avatar']?>" />
                </div>
            </article>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-sm">
                    <!-- Name -->
                    <article>
                        <h3><?php echo $user['username']?></h3>
                    </article>
                </div>
                <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-300 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <a href="profile.php" class="justify-between my-1">
                        Profile
                        <span class="badge badge-info">New</span>
                        </a>
                    </li>
                    <li><a class="my-1">Settings</a></li>
                    <li><a href="logout.php" class="bg-error hover:bg-red-600 my-1">Logout</a></li>
                </ul>
            </div>
        </section>
    </div>
</nav>