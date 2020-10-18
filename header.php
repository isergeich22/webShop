<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YOUR-PC - Интернет-магазин готовых компьютеров</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css?<?echo time()?>" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="load.css">
    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="padding-top:1.8%;">
  <img src="img/logo.png" style="margin: 0 15px; margin-left: 5%;">
  <a class="navbar-brand" href="index.php">YOUR-PC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="margin-left: 35%;">
        <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="margin-left: 35%;">
        <a class="nav-link" href="#">Услуги</a>
      </li>
      <li class="nav-item dropdown" style="margin-left: 35%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Каталог
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="subcatalog-1.php">Бюджетный класс</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="subcatalog-2.php">Средний класс</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="subcatalog-3.php">Топовый класс</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="catalog.php">Просмотреть весь каталог...</a>
        </div>
      </li>
      <li class="nav-item" style="margin-left: 35%;">
        <a class="nav-link" href="#">Контакты</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="margin-right: 5%;">
      <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
      <button class="btn btn-outline-secondary rounded-circle" type="submit"><i class="fa fa-search"></i></button>
    </form>
    <form class="form-inline my-2 my-lg-0" style="margin-right: 5%;">
      <a href="login.php"><button type="button" class="btn btn-link">Войти</button></a>      
      <a href="registration.php"><button type="button" class="btn btn-link">Регистрация</button></a>
    </form>
  </div>
</nav>
<hr>