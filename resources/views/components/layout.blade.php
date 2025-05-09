<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yanai Japanese Restaurant | Sushi Restaurant</title>


    {{-- cdn google fonts --}}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-nav/>

    <div class="min-vh-100">{{$slot}}</div>

    <x-footer/>
    
</body>
</html>