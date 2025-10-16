<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Inicio</title>
</head>
<body class="flex flex-col flex-wrap justify-space-between h-full w-full">
        <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="inicio" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/aseisLogo.png" class="h-8" alt="SDS2025">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SDS 2025</span>
            </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="registro"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar mi visita</button></a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="sds" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">SDS</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ASEIS</a>
                    </li>
                    <li>
                        <a href="visitantes" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Visitantes</a>
                    </li>
                    <li>
                        <a href="patrocinadores" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Patrocinadores</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>


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

<footer class="bg-white dark:bg-gray-900">
    <div class="w-full mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="images/aseisLogo.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SDS 2025 - ASEIS</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">ASEIS</a>
                </li>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contacto</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="" class="hover:underline">ASEIS</a>. [inserte algo que diria Karla]</span>
    </div>
</footer>

</body>
</html>