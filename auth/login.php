<?php 
    include "../components/index.php";
    include "../components/icon.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Made Subudi Bali Tour</title>
</head>
<body>
    <?php navbar(); ?>
        <div class="px-24 mt-36 mb-36">
            <div class="flex flex-row justify-between gap-20">
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <p class="font-poppins text-[36px] font-semibold leading-[1em] traking-[0.01em] text-[#0C1421]">
                            Welcome Back 👋
                        </p>
                        <p class="font-poppins text-[20px] leading-[1em] tracking-[0.01em]">
                            Today is a new day. It's your day. You shape it. 
                            Sign in to start managing your projects.
                        </p>
                    </div>


                </div>
                <div class="w-[]">
                    <img src="../assets/img-auth/login-image.png" alt="" class="w-max h-auto">
                </div>
            </div>
        </div>
    <?php footer(); ?>
</body>
</html>