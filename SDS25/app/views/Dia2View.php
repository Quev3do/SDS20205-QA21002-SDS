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
    <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap mb-14 mt-10">
        <h1 class="text-3xl">Dia 2</h1>
        <h1 class="text-1xl">Debido a la alerta climatica, las conferencias del autitorio pasarian a modalidad virtual.</h1>
        <figure class="relative h-96 w-auto flex flex-col justify-center">
                <img src="images/dia2/ponen1.jpg"  alt="ponencia" class="h-full w-auto rounded-xl object-cover object-center" />
        </figure>
        <figure class="relative h-96 w-auto flex flex-col justify-center">
                <img src="images/dia2/ponen2.jpg"  alt="ponencia" class="h-full w-auto rounded-xl object-cover object-center" />
        </figure>
        <figure class="relative h-96 w-auto flex flex-col justify-center">
                <img src="images/dia2/ponen3.jpg"  alt="ponencia" class="h-full w-auto rounded-xl object-cover object-center" />
        </figure>
        <figure class="relative h-96 w-auto flex flex-col justify-center">
                <img src="images/dia2/ponen4.jpg"  alt="ponencia" class="h-full w-auto rounded-xl object-cover object-center" />
        </figure>
    </div>

   <?php include 'footer.html';?>
    
</body>
</html>