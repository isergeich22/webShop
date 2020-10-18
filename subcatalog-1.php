<?php

    include 'header.php';

    echo('<h1 style="text-align: center;">Компьютеры бюджетного класса</h1>
    <hr>');

    echo('<section class="products">
    <div class="container">
        <div class="row">');

    require_once 'connection.php';

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

    // выполняем операции с базой данных
    $query ="SELECT * FROM products";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        do {

            echo ('<div class="col-md-4 col-sm-6">');
            echo ('<div class="card">');

            printf("<img src='" .$row['image'] ."' class='card-img-top' alt='300x200'>" );

            echo('<div class="card-body">');

            printf('<h5 class="card-title">' .$row['Title'] .'</h5>');
            printf('<p class="card-text">' .$row['Description'] .'</p>');

            echo("<p class='price text-danger'>");

            echo $row['Price'];

            echo(" ₽ RUB </p>");
            echo("<a href='#' class='btn btn-primary' data-price='65000' data-product='Deepcool E-SHIELD Ryzen 5 2600/1060 6G'>
            Подробнее о сборке</a>");
            echo("</div></div></div>"); 
            
            

        }

        while($row = mysqli_fetch_array($result));

    }

    mysqli_close($link);

    echo("        </div>
    </div>
</section>");

include 'scripts.php';

?>