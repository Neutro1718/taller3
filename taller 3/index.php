<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">
    <link 
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white/80">
    <main class="w-[380px] h-[550px] bg-black/70 rounded">
        <section class="max-h-[550px] overflow-y-auto m-4 py-20">
            <form action="./db/functions.php" method="post" class="flex flex-col gap-2 items-center">
                <b><h1 class="text-3xl text-white">Login Form</h1></b>
                <input type="email" name="usr" id="user" required  placeholder="Email o telefono" class="w-[280px] h-[50px] text-black">
                <input type="password" name="pss" id="pass" required placeholder="contraseña" class="w-[280px] h-[50px] text-black">
                <b><input type="submit" value="LOGUEAR" name="submit" class="w-[280px] bg-blue-400 h-[50px]"></b>
                <p><a href="">O inicia sesión con</p></a>
                <div class="grid grid-cols-2 justify-center gap-4">
                    <b><button class="bg-blue-300 w-[130px] h-[50px]">facebook</button></b>
                    <b><button class="bg-red-300 w-[130px] h-[50px]">instagram</button></b>
                </div>
            </form>  
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>