<!--<div class="col-md-4 col-sm-6">
                <div class="card" >
                //<?php
                          /*require_once 'connection.php'; // подключаем скрипт
                          
                          // подключаемся к серверу
                          //$link = mysqli_connect($host, $user, $password, $database) 
                              //or die("Ошибка " . mysqli_error($link));
                          
                          // выполняем операции с базой данных
                          //$query ="SELECT image FROM products";
                          //$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                          //$row = mysqli_fetch_array($result);

                          //if($row)
                          //{
                              printf("<img src='" .$row['image'] ."' class='card-img-top' alt='300x200'" );
                              
                          //}
                          
                          // закрываем подключение
                          //mysqli_close($link);
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

                              ?>*/
                              ₽ RUB</p>
                                <a href="#" class="btn btn-primary" data-price="65000" data-product="Deepcool E-SHIELD Ryzen 5 2600/1060 6G">
                                Подробнее о сборке</a>
                    </div>
                </div>                
            </div>