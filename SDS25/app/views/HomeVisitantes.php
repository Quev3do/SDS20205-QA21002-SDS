<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?=$title?></title>
</head>
<body class="flex flex-col flex-wrap justify-space-between h-full w-full">
       <?php include 'navbar.html'; ?>
    <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap my-18">
        <h1 class="text-3xl">Visitantes</h1>
        <table class="w-5xl text-sm text-left rtl:text-right text-black-500 dark:text-black-900 table-auto border-separate">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Carnet</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataVisitantes as $itemPersona): ?>
                    <tr>
                        <td class="text-center"><?= $itemPersona['idVisitante'] ?></td>
                        <td class="text-center"><?= $itemPersona['name'] ?></td>
                        <td class="text-center"><?= $itemPersona['apellido'] ?></td>
                        <td class="text-center"><?= $itemPersona['correo'] ?></td>
                        <td class="text-center"><?= $itemPersona['carnet'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

   <?php include 'footer.html';?>
    
</body>
</html>