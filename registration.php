<?php
    include 'header.php';
?>
    <div class="card bg-light mb-3" style="max-width: 30rem; margin:0 auto;">
        <div class="card-header" style="text-align: center;"><h5>Регистрация<h5></div>
        <form style="margin: 10% auto; width: 85%;" action="executereg.php" method="GET">
            <div class="form-group"><label for="fName">Ф.И.О.</label>
                <input type="text" class="form-control" name="fName" aria-describedby="emailHelp" placeholder="Ф.И.О." required>
                <small id="emailHelp" class="form-text text-muted">Ваше полное имя</small>
            </div>
            <div class="form-group"><label for="pNumber">Номер телефона</label>
                <input type="text" class="form-control" name="pNumber" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Ваш номер телефона</small>
            </div>
            <div class="form-group"><label for="Login">Логин для входа</label>
                <input type="text" class="form-control" name="Login" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Придумайте ваш логин</small>
            </div>
            <div class="form-group">
                <label for="Pass">Пароль</label>
                <input type="password" class="form-control" name="Pass" required>
                <small id="emailHelp" class="form-text text-muted">Придумайте пароль</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" name="Email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Введите ваш e-mail</small>
            </div>
            <br>
            <button type="submit" class="btn btn-light" name="submit">Зарегистрироваться</button>
        </form>
        </div>
    </div>
</body>
</html>

