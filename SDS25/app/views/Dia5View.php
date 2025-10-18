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
    <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap mb-14 mt-10">
        <div class="min-w-80 h-full max-w-5xl">
            <h1 class="text-3xl text-center">Dia 5</h1>
            <h1 class="text-3xl text-center mb-6">Mañanas de bingo</h1>
            <figure class="relative h-96 w-full">
                <img src="images/dia5/bingo.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Gran Bingoneada.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">15 octubre 2025</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">Auditorio 1</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>Los estudiantes e ingenieros pasan un buen rato de comvivencia disfrutando el bingo.</p>
            <br>
            <h1 class="text-3xl text-center mb-6">Torneo de Clash Royale</h1>
            <figure class="relative h-96 w-full">
                <img src="images/dia5/cr1.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Grandes maestros.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">15 octubre 2025</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">Computo A</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>Los estudiantes e ingenieros pasan un buen rato de comvivencia disfrutando el bingo.</p>
            <br>
            <figure class="relative h-auto w-full flex flex-col justify-center items-center">
                <img src="images/dia5/cr2.jpg"  alt="inicio" class="h-full rounded-xl object-cover object-center w-96" />
            </figure>
            <br>
            <p>Ing Diego (roj0) atacando con montapuertos.</p>
        </div>
    </div>

   <?php include 'footer.html';?>
</body>
</html>