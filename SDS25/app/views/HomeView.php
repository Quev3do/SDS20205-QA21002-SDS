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

        <div class="grid grid-cols-1 grid-rows-3 sm:grid-cols-2 md:grid-cols-2 gap-4 px-20 my-3 w-full">
            <a href="dia1" class="flex flex-col items-center  bg-white rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/dia1/principioEdit.jpg" alt="presentacion">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 1: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Grandes oportunidades sobre el aprendizaje de Bitcoin, uso de IA para el dia a dia y una emocionante prueba en HACKATON.</p>
                </div>
            </a>
            <a href="dia2" class="flex flex-col items-center  bg-white border  border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"" src="/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 2: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
            <a href="dia3" class="flex flex-col items-center  bg-white border  border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"" src="/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 3: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
            <a href="dia4" class="flex flex-col items-center  bg-white border  border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100 dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"" src="/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 4: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
            <a href="dia5" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-blue-100  dark:border-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
                <img class="object-cover max-w-300 max-h-60 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"" src="/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dia 5: </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
        </div>
        
   <?php include 'footer.html';?>

</body>
</html>