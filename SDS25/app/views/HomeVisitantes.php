<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?=$title?></title>
</head>
<body class="flex flex-col flex-wrap justify-space-between h-full w-full pt-22 pb-52 relative bg-[url('../public/images/dia1/principio.jpg')] bg-cover bg-center backdrop-blur-sm">
       <?php include 'navbar.html'; ?>
    <div class="h-full flex flex-col items-center justify-center gap-8 flex-wrap mb-8 mt-6 relative overflow-x-auto ">
        <h1 class="text-3xl">Visitantes</h1>
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-white max-w-5xl">
            <thead class="text-xs text-white uppercase bg-gradient-to-r from-slate-950 via-blue-800 to-blue-500 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Apellido</th>
                    <th scope="col" class="px-6 py-3">Correo</th>
                    <th scope="col" class="px-6 py-3">Carnet</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataVisitantes as $itemPersona): ?>
                    <tr class="bg-white border-b dark:bg-slate-950 dark:border-slate-500 border-gray-100">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $itemPersona['idVisitante'] ?></td>
                        <td class="px-6 py-4"><?= $itemPersona['name'] ?></td>
                        <td class="px-6 py-4"><?= $itemPersona['apellido'] ?></td>
                        <td class="px-6 py-4"><?= $itemPersona['correo'] ?></td>
                        <td class="px-6 py-4"><?= $itemPersona['carnet'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

   <?php include 'footer.html';?>
    
</body>
</html>