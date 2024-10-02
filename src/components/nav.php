<nav class="w-full px-4 sm:px-8 py-4">
    <div class="grid grid-cols-3 gap-2">
        <!-- Logo -->
        <section class="col-span-1 flex items-center">
            <h1 class="text-2xl font-raleway">Pandora</h1>
        </section>

        <!-- menu -->
        <section class="col-span-1 flex justify-center items-center">
            <ul class="flex flex-row gap-3">
                <li><a href="#" class="text-md px-4 py-3 rounded-md hover:bg-neutral transition-all duration-100 delay-75">Movie</a></li>
                <li><a href="#" class="text-md px-4 py-3 rounded-md hover:bg-neutral transition-all duration-100 delay-75">Gerne</a></li>
                <li><a href="#" class="text-md px-4 py-3 rounded-md hover:bg-neutral transition-all duration-100 delay-75">Animation</a></li>
            </ul>
        </section>

        <!-- avatar -->
        <section class="col-span-1 flex items-center justify-end gap-2">
            <div class="avatar">
                <div class="w-10 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-sm">
                    <!-- Name -->
                    <article>
                        <h3>Pooh</h3>
                    </article>
                </div>
                <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-300 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between my-1">
                        Profile
                        <span class="badge badge-info">New</span>
                        </a>
                    </li>
                    <li><a class="my-1">Settings</a></li>
                    <li><a class="bg-error hover:bg-red-600 my-1">Logout</a></li>
                </ul>
            </div>
        </section>
    </div>
</nav>