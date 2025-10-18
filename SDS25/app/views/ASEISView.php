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
        <h1 class="text-3xl">ASEIS</h1>
        <div class="min-w-80 h-full max-w-5xl">
            <figure class="relative h-96 w-full">
                <img src="images/aseis.png"  alt="inicio" class="h-full w-full rounded-xl object-cover object-center" />
            </figure>
            <br>
            <p>La ASEIS (ASociación de Estudiantes de ingenieria en Sistemas) es el trabajo duro de estudiantes que llevados por su amor por la carrra se dan a la tarea de llevar la carrera a nuestros en el campo y recordarles a quienes ya estamos aquí el porque debemos luchar por esta carrera qe tnto nos dio y nos dara.</p>
        </div>
    </div>

   <?php include 'footer.html';?>
    
</body>
</html>