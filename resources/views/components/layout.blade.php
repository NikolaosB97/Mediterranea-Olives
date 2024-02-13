<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mediterranea Olives</title>
    <script src="https://kit.fontawesome.com/e562f4e6cf.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="/img/02_Logo.png" alt="" width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Prodotti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{$slot}}

    
</body>
</html>
