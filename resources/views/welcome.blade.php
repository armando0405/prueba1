<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<!-- class="navbar bg-body-tertiary" la clase del navbar 00288E -->
<nav  class="navbar mb-5"  style="background-color: #00288E;">
  <div class="container-fluid">
    <a class="navbar-brand col-2" href="/" style="font-size: 2.5rem; color: #ffffff;  font-family: 'Calistoga';  font-weight: bold;  ">
      <img src="img/comp1.svg" alt="Logo" width="75" height="75" class="d-inline-block align-text-end" >
      GameStore
    </a>
    <!-- la busqueda -->
    <form class="d-flex col-4 d-none d-md-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
<!-- el Login y register  -->
  <ul class="nav justify-content-end ">
    <li class="nav-item ">
      <a class="btn btn-dark" aria-current="page" href="/register">registrarse</a>
    </li>
    <li class="nav-item ps-4">
      <a class="btn btn-dark" href="/login">ingresar</a>
    </li>
  </ul>

<!-- enlaces a las paginas -->
  <div class="container">
  <ul class="nav justify-content-center py-3">
    <li class="nav-item ps-4">
      <a class="btn btn-primary" aria-current="page" href="/">inicio</a>
    </li>
    <li class="nav-item ps-4">
      <a class="btn btn-primary" href="/nosotros">Portatiles</a>
    </li>
    <li class="nav-item ps-4">
      <a class="btn btn-primary" href="/productos">Torres</a>
    </li>
    <li class="nav-item ps-4">
      <a class="btn btn-primary" aria-disabled="true" href="/servicios">Perifericos</a>
    </li>
  </ul>
</div>

</nav>
</body>
</html>