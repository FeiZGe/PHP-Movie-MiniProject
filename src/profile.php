

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | Pandora</title>
    <link rel="stylesheet" href="style/output.css">
</head>
<body>

    <main class="container mx-auto px-3 mt-3">
        <div class="grid grid-cols-1 h-screen items-center">
            <div class="card bg-base-100 shadow-xl w-full md:w-2/5 mx-auto">
                <div class="card-body">
                    <h1 class="text-3xl font-bold">Edit Profile</h1>
                    
                    <!-- รูปโปรไฟล์ -->
                    <div class="form-control mb-4">
                        <div class="flex items-center space-x-4">
                            <img src="uploads/profile_pictures/<?php echo htmlspecialchars($profile_image); ?>" alt="Profile Picture" class="w-16 h-16 rounded-full">
                        </div>
                    </div>

                    <!-- Form อัปเดตโปรไฟล์ -->
                    <form action="" method="post">
                        <div class="flex flex-col space-y-4">

                            <!-- อีเมล -->
                            <div class="form-control">
                                <label class="label">Email</label>
                                <input type="email" name="email" class="input input-bordered w-full" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                            </div>

                            <!-- ชื่อผู้ใช้ -->
                            <div class="form-control">
                                <label class="label">Username</label>
                                <input type="text" name="username" class="input input-bordered w-full" value="<?php echo htmlspecialchars($user['username']); ?>" required>
                            </div>

                            <!-- รหัสผ่าน -->
                            <div class="form-control">
                                <label class="label">Password</label>
                                <input type="password" name="password" class="input input-bordered w-full" value="" placeholder="Enter new password" required>
                            </div>

                            <!-- ปุ่มบันทึก -->
                            <div class="form-control">
                                <input type="submit" name="submit" value="Save" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
