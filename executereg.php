<?php 

include 'header.php';

require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database)    
or die("Ошибка " . mysqli_error($link));


try{

        $fName = htmlentities(mysqli_real_escape_string($link, $_GET['fName']));
        $pNumber = htmlentities(mysqli_real_escape_string($link, $_GET['pNumber']));
        $Login = htmlentities(mysqli_real_escape_string($link, $_GET['Login']));
        $Passw = htmlentities(mysqli_real_escape_string($link, $_GET['Pass']));
        $E_mail = htmlentities(mysqli_real_escape_string($link, $_GET['Email']));
        

        $query = "INSERT INTO users (fName, pNumber, Nickname, Keyword, Email) VALUES ('$fName', '$pNumber', '$Login', '$Passw', '$E_mail')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result){
            echo ('<div class="col-sm-6" style="margin: 0 auto;">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Регистрация</h5>
                <p class="text-success">Регистрация прошла успешно!</p>
                <a href="index.php" class="btn btn-light">На главную</a>
                <a href="catalog.php" class="btn btn-light">В каталог</a>
              </div>
            </div>
          </div>');
        }else{
            echo('<div class="col-sm-6" style="margin: 0 auto;">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Регистрация</h5>
                <p class="price text-danger">Регистрация не состоялась!</p>
                <a href="index.php" class="btn btn-light">На главную</a>
                <a href="registration.php" class="btn btn-light">Повторить регистрацию</a>
              </div>
            </div>
          </div>');
        };    
}
    catch(Exception $e){
        echo('<div class="card mb-3" style="max-width: 540px; margin: 0 auto;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/gear.png" class="card-img" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Упс...</h5>
              <p class="card-text">Что-то пошло не так. Попробуйте повторить регистрацию позже. Наши специалисты уже решают данную проблему</p>
              <p class="card-text">' . $e . '</p>
            </div>
          </div>
        </div>
      </div>');
    }

?>