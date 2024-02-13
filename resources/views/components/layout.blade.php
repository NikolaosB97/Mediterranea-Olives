<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mediterranea Olives</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e562f4e6cf.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
  <x-navbar></x-navbar>  
    
      {{$slot}}

  <x-footer></x-footer>  
</body>
</html>
