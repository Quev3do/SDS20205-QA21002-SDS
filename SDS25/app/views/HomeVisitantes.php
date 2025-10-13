<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?=$title?></title>
</head>
<body>
    <H1 class="text-3xl font-bold underline text-clifford">VISITANTES</H1>
    <br>
    <table class="w-5xl text-sm text-left rtl:text-right text-black-500 dark:text-black-900">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Carnet</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dataVisitantes as $itemPersona): ?>
                <tr>
                    <td><?= $itemPersona['idVisitante'] ?></td>
                    <td><?= $itemPersona['name'] ?></td>
                    <td><?= $itemPersona['apellido'] ?></td>
                    <td><?= $itemPersona['correo'] ?></td>
                    <td><?= $itemPersona['carnet'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>