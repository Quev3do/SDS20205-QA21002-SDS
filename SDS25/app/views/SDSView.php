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
        <h1 class="text-3xl">SDS</h1>
        <div class="min-w-80 h-full max-w-5xl">
            <figure class="relative h-96 w-full">
                <img src="images/sds1.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Semana de sistemas.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">hoy ayer y siempre</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">En nuestro corazón</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>La semana de sistemas es el evento magno que todo estudiante de la ing en sistemas informaticos e ingenieros de dicha area esperan con ancias en la UES-FMO cada año</p>
            <p>En esta semana se comparten ideas, experiencias y se paso un gran momento entro todos al aprticipar en juesgos y conferencias donde el conocimineto y la diversion son centro del evento.</p>
            <br>
            <figure class="relative h-96 w-full">
                <img src="images/sds2.jpg"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
                <figcaption style="background-color: rgba(0,0,0, 0.15);" class="absolute bottom-4 left-1/2 w-[calc(100%-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-blue-600 shadow-lg shadow-slate-950/5 backdrop-blur-md">
                    <div class="flex h-max w-full justify-between rounded px-4 py-2">
                        <div>
                            <h6 class="font-sans text-base font-bold antialiased md:text-lg lg:text-xl text-blue-100">Futuros ing´s en sistemas.</h6>
                            <p class="mt-1 font-sans text-base text-white antialiased">hoy ayer y siempre</p>
                        </div>
                        <p class="font-sans text-base font-bold text-blue-400 antialiased">En nuestro corazón</p>
                    </div>
                </figcaption>
            </figure>
            <br>
            <p>Cuendo pensamos en esta seamana, siempre recordaremos lo bien que compartimos en comunidad, compitiendo sanamiento y demostrando la cultura de nuestro departamento, manteniendo el legado que los hermanos fundadores de la carrera en la FMO tanto lucharon por conseguir hace años, su libertad de culminar su suelo aqui en oriente.</p>
        </div>
    </div>

   <?php include 'footer.html';?>
    
</body>
</html>