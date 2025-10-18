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
    <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap mt-10 mb-14">
        <div class="min-w-80 h-full max-w-5xl">
            <h1 class="text-3xl text-center mb-6">Dia 4</h1>
            <h1 class="text-3xl text-center mb-6">Feria de logros</h1>
            <figure class="relative h-96 w-full">
                <img src="images/dia4/feria1.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Preparativos feria logros.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">14 octubre 2025</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">Edificio Minerva</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>Gran inicio de la feria de logros de la carrera de sistemas informaticos 2025, lo mejor de lo mejor del año.</p>
            <br>
            <figure class="relative h-96 w-full">
                <img src="images/dia4/feria5.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Premiación feri de logros.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">14 octubre 2025</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">Edificio Minerva</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>Gran premiación de los proyectos presentados por los diferentes grupos de los diferentes año de la carrera de sistemas.</p>
            <br>
            <h1 class="text-3xl text-center mb-6">Comilona de pupusas</h1>
            <br>
            <figure class="relative h-96 w-full">
                <img src="images/dia4/comilonaEvento.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Comilona de pupusas.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">14 octubre 2025</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">Edificio Minerva</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>Gran concurso de comer pupusas, nunca nos hubieramos imaginado que un ing se llevaria el dichoso honor de ganar el magno evento.</p>
            <br>
        </div>
    </div>

   <?php include 'footer.html';?>
    
</body>
</html>