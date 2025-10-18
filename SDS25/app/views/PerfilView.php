<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?=$title?></title>
</head>
<body class="flex flex-col flex-wrap justify-space-between h-full w-full pt-22 pb-52 relative bg-gradient-to-b from-blue-300 via-blue-100 to-white">
       <?php include 'navbar.html'; ?>
    <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap mt-10 mb-14">
        <h1 class="text-3xl">Mi Perfil</h1>
        
        <img src="images/yo.png" alt="quevedo-qa21002" class="h-full w-auto rounded-xl object-cover object-center">
        <h1 class="text-3xl">Mi nombre: Quevedo Argueta, Adán Omar</h1>
        <h1 class="text-3xl">Carrera: Ing Sistemas informaticos (1998)</h1>
        <br>
        <h1 class="text-3xl text-blue-950 font-bold">¿Que aprendi durante este actividad de recuperación?</h1>
        <br>
        <div class="text-r w-3xl">
            <p class="text-2xl">Aprendi a realizar la conexion a BD mysql desde su clase conexion.</p><br>
            <p class="text-2xl">Aprendi a crear modelos y a manejaros con controlladores.</p><br>
            <p class="text-2xl">Aprendi a usar las clases de tailwind para el manejo del diseño de bg, form, y demás implementos en las vistas.</p><br>
        </div>
        
    </div>

   <?php include 'footer.html';?>
</body>
</html>