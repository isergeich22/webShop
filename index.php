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
<div id="carouselExampleCaptions" style="color: black;" class="carousel slide" data-ride="carousel" style="margin-top: 15px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/fSlide.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Бюджетный класс</h5>
        <p style="color: red;">Класс недорогих компьютеров предназначенных преимущественно для офисной
      работы. Рекомендуется для интернет-магазинов и управления торговлей и бухгалтерией.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/sSlide.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Средний класс</h5>
        <p style="color: red;">Класс компьютеров до 80 000 руб. Подойдет как для тех, кто решил начать
        проводить прямые трансляции (стримить) или завести Youtube канал, пригоден для проведения
        трансляций в 1080p, монтажа роликов и базовой 3D - графики.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/tSlide.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Топовый класс</h5>
        <p style="color: red;">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<section class="products">
    <div class="container">
      <h2>НОВИНКИ НАШЕГО МАГАЗИНА</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card" >
                <?php
                          require_once 'connection.php'; // подключаем скрипт
                          
                          // подключаемся к серверу
                          $link = mysqli_connect($host, $user, $password, $database) 
                              or die("Ошибка " . mysqli_error($link));
                          
                          // выполняем операции с базой данных
                          $query ="SELECT image FROM products";
                          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                          $row = mysqli_fetch_array($result);

                          if($row)
                          {
                              printf("<img src='" .$row['image'] ."' class='card-img-top' alt='300x200'" );
                              
                          }
                          
                          // закрываем подключение
                          mysqli_close($link);
                          ?>
                <img src="http://via.placeholder.com/300x200" class="card-img-top" alt="300x200">
                    <div class="card-body">
                        <?php
                          require_once 'connection.php'; // подключаем скрипт
                          
                          // подключаемся к серверу
                          $link = mysqli_connect($host, $user, $password, $database) 
                              or die("Ошибка " . mysqli_error($link));
                          
                          // выполняем операции с базой данных
                          $query ="SELECT Title, Description FROM products";
                          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                          $row = mysqli_fetch_array($result);

                          if($row)
                          {
                              printf("<h5 class='card-title'>" .$row['Title'] ."</h5>");
                              printf("<p class='card-text'>" .$row['Description'] ."</p>");
                              
                          }
                          
                          // закрываем подключение
                          mysqli_close($link);
                          ?>
                              <p class="price text-danger">
                              <?php

                                require_once 'connection.php'; // подключаем скрипт
                                                          
                                // подключаемся к серверу
                                $link = mysqli_connect($host, $user, $password, $database) 
                                    or die("Ошибка " . mysqli_error($link));

                                // выполняем операции с базой данных
                                $query ="SELECT Price FROM products";
                                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                $row = mysqli_fetch_array($result);

                                if($row)
                                {
                                    
                                  echo $row['Price'];
                                    
                                }

                                // закрываем подключение
                                mysqli_close($link);

                              ?>
                              ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" >
                <img src="img/DeepcoolESHIELD.jpg" class="card-img-top" alt="300x200">
                    <div class="card-body">
                        <h5 class="card-title">Deepcool E-SHIELD Ryzen 5 2600/1060 6G</h5>
                            <p class="card-text">Компьютер, который подойдет как для стриминга и ведения Youtube-канала, 
                            так и для начального освоения 3D-моделирования и моушн-дизайна.</p>
                            <p class="price text-danger">65000 ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" >
                <img src="img/DeepcoolESHIELD.jpg" class="card-img-top" alt="300x200">
                    <div class="card-body">
                        <h5 class="card-title">Deepcool E-SHIELD Ryzen 5 2600/1060 6G</h5>
                            <p class="card-text">Компьютер, который подойдет как для стриминга и ведения Youtube-канала, 
                            так и для начального освоения 3D-моделирования и моушн-дизайна.</p>
                            <p class="price text-danger">65000 ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" >
                <img src="img/DeepcoolESHIELD.jpg" class="card-img-top" alt="300x200">
                    <div class="card-body">
                        <h5 class="card-title">Deepcool E-SHIELD Ryzen 5 2600/1060 6G</h5>
                            <p class="card-text">Компьютер, который подойдет как для стриминга и ведения Youtube-канала, 
                            так и для начального освоения 3D-моделирования и моушн-дизайна.</p>
                            <p class="price text-danger">65000 ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" >
                <img src="img/DeepcoolESHIELD.jpg" class="card-img-top" alt="300x200">
                    <div class="card-body">
                        <h5 class="card-title">Deepcool E-SHIELD Ryzen 5 2600/1060 6G</h5>
                            <p class="card-text">Компьютер, который подойдет как для стриминга и ведения Youtube-канала, 
                            так и для начального освоения 3D-моделирования и моушн-дизайна.</p>
                            <p class="price text-danger">65000 ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" >
                <img src="img/DeepcoolESHIELD.jpg" class="card-img-top" alt="300x200">
                    <div class="card-body">
                        <h5 class="card-title">Deepcool E-SHIELD Ryzen 5 2600/1060 6G</h5>
                            <p class="card-text">Компьютер, который подойдет как для стриминга и ведения Youtube-канала, 
                            так и для начального освоения 3D-моделирования и моушн-дизайна.</p>
                            <p class="price text-danger">65000 ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<hr>
<section class="products">
<div class="container">
  <div class="card mb-3" style="max-width: 500px; float: left; margin-right: 10%;">
    <div class="row no-gutters">
      <div class="col-md-4">        
        <img src="img/cleaning.png" class="card-img" alt="Чистка компьютера">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Чистка компьютера</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>      
    </div>
  </div>
  <div class="card mb-3" style="max-width: 500px;">
    <div class="row no-gutters">
      <div class="col-md-4">        
        <img src="img/motherboard.png" class="card-img" alt="Подбор комплектующих">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Подбор комплектующих</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>      
    </div>
  </div>
  <div class="card mb-3" style="max-width: 500px; float: left; margin-right: 10%;">
    <div class="row no-gutters">
      <div class="col-md-4">        
        <img src="img/desktop.png" class="card-img" alt="Сборка компьютера">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Сборка компьютера</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>      
    </div>
  </div>
  <div class="card mb-3" style="max-width: 500px;">
    <div class="row no-gutters">
      <div class="col-md-4">        
        <img src="img/products.png" class="card-img" alt="Установка программных продуктов">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Установка программных продуктов</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>      
    </div>
  </div>
</div>
</section>
<hr>
<footer>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        
      </div>
      <div class="col-lg-offset-1 col-lg-8 col-md-9">
        
      </div>
    </div>
  </div>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
crossorigin="anonymous"></script>

</body>
</html>