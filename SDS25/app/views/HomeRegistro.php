<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Registro</title>
</head>
<body class="flex flex-col flex-wrap justify-space-between h-full w-full pt-22 pb-52 relative">
    <?php include 'navbar.html'; ?>
    <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap my-6">
    <H1 class="text-3xl">Registro de visitantes</H1>
    <form action="registrar" method="POST" class="bg-white shadow-sm rounded px-8 pt-6 pb-8 mb-4">
        <label class="block text-black text-sm mb-2 font-semibold" for="name">
            Nombre:
        </label>
        <input type="text" name="name" id="name" require class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br>
        <label class="block text-black text-sm mb-2 font-semibold" for="apellido">
            Apellido: 
        </label>
        <input type="text" name="apellido" id="apellido" require class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br>
        <label class="block text-black text-sm mb-2 font-semibold" for="correo">
            Correo:
        </label>
        <input type="text" name="correo" id="correo" require class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br>
        <label class="block text-black text-sm mb-2 font-semibold" for="carnet">
            Carnet:
        </label>
        <input type="text" name="carnet" id="carnet" require class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br>
        <div class="flex items-center justify-between mt-[20px]">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Registrarme</button>
        </div>
    </form>
    </div>

   <?php include 'footer.html';?>
</body>
</html>