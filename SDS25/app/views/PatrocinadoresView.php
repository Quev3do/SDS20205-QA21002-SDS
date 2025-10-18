<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?=$title?></title>
</head>
<body class="flex flex-col flex-wrap justify-center h-full w-full pt-22 pb-52 relative bg-gradient-to-b from-blue-300 via-blue-100 to-white">  
        <?php include 'navbar.html'; ?>
        <div class="w-full h-full flex flex-col items-center justify-center gap-8 flex-wrap mt-10 mb-14">
            <div class="min-w-80 h-full max-w-5xl">
                <figure class="relative h-96 w-full">
                    <img src="images/sarita.jpg"  alt="inicio" class="h-full rounded-xl object-cover object-center w-96" />
                </figure>
                <br>
                <figure class="relative h-96 w-full">
                    <img src="images/aseisLogo.png"  alt="inicio" class="h-full rounded-xl object-cover object-center w-96" />
                </figure>
                <br>
                <figure class="relative h-96 w-full">
                    <img src="images/tecno.jpg"  alt="inicio" class="h-full rounded-xl object-cover object-center w-96" />
                </figure>
                <br>
                <figure class="relative h-96 w-full">
                    <img src="images/villamotos.jpg"  alt="inicio" class="h-full rounded-xl object-cover object-center w-96" />
                </figure>
                <br>
                <figure class="relative h-96 w-full">
                    <img src="images/optica.jpg"  alt="inicio" class="h-full rounded-xl object-cover object-center w-200" />
                </figure>
                <br>
                <figure class="relative h-96 w-full">
                    <img src="images/clinica.jpg"  alt="inicio" class="h-full rounded-xl object-cover object-center w-200" />
                </figure>
            </div>
        </div>

   <?php include 'footer.html';?>

</body>
</html>