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
                <button class="btn btn-primary btn-sm flex flex-row justify-center items-center gap-1 transition duration-300 ease-in-out hover:scale-110">
                    <i class="fa-solid fa-plus"></i>
                    <p>movie</p>
                </button>
            </article>

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
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="w-20 h-28 rounded-lg bg-cover bg-no-repeat bg-center" style="background-image: url(adminbg.jpg)">
                                            
                                        </div>
                                        <div>
                                            <!-- Movie name -->
                                            <div class="font-bold">
                                                Avatar
                                            </div>

                                            <!-- Movie genre -->
                                            <div class="badge badge-primary badge-sm badge-outline">
                                                Fantasy
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-pretty">
                                        Jake Sully ทหารหนุ่มที่พิการ ถูกส่งไปยังดาว Pandora ในภารกิจสำรวจและค้นหาทรัพยากรที่สำคัญ แต่เขากลับพบว่าความเชื่อมโยงระหว่างเผ่า Na'vi และธรรมชาติทำให้เขาต้องเลือกระหว่างการปกป้อง Pandora กับการรับใช้อาณานิคมของมนุษย์
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-row justify-center items-center gap-1.5">

                                        <!-- edit btn -->
                                        <a href="#" class="btn btn-warning btn-square btn-sm tooltip tooltip-top tooltip-warning flex items-center justify-center transition duration-300 ease-in-out hover:scale-125" data-tip="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-error btn-square btn-sm tooltip tooltip-top tooltip-error flex items-center justify-center transition duration-300 ease-in-out hover:scale-125" data-tip="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            
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