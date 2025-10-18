<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?=$title?></title>
</head>
<body class="flex flex-col flex-wrap justify-space-between h-full w-full pt-22 pb-52 relative">

        <?php include 'navbar.html'; ?>

        <div class="grid grid-cols-1 grid-rows-3 sm:grid-cols-2 md:grid-cols-2 gap-4 px-20 w-full">
            <a href="dia1" class="flex flex-col items-center  bg-white rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-fill max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/dia1/principioEdit.jpg" alt="presentacion">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 1: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Grandes oportunidades sobre el aprendizaje de Bitcoin, uso de IA para el dia a dia y una emocionante prueba en HACKATON.</p>
                </div>
            </a>
            <a href="dia2" class="flex flex-col items-center  bg-white border  border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-fill max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/dia2/meetEdit.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 2: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Las lluvias no detienen la sed de conocimiento, unete a las conferencias en linea y descubre un nuevo mundo.</p>
                </div>
            </a>
            <a href="dia3" class="flex flex-col items-center  bg-white border  border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object- max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/dia3/torneoCEdit.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 3: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Gran torneo de futbol.</p>
                </div>
            </a>
            <a href="dia4" class="flex flex-col items-center  bg-white border  border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/dia4/itiE.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 4: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Feria de logros y gran comilona de pupusas, no te la puedes perder.</p>
                </div>
            </a>
            <a href="dia5" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100  dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/dia5/crEdit.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 5: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Gran mañana de BINGO, torneo de clash royale y una sorpresa nocturna.</p>
                </div>
            </a>
        </div>

   <?php include 'footer.html';?>

</body>
</html>