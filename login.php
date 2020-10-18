<?php
    include 'header.php';
?>
<div class="card bg-light mb-3" style="max-width: 30rem; margin:0 auto;">
        <div class="card-header" style="text-align: center;"><h5>Вход<h5></div>
        <form style="margin: 10% auto; width: 85%;" action="executereg.php" method="GET">
            <div class="form-group"><label for="Login">Логин для входа</label>
                <input type="text" class="form-control" name="Login" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="Pass">Пароль</label>
                <input type="password" class="form-control" name="Pass" required>
            </div>            
            <br>
            <button type="submit" class="btn btn-light" name="submit">Войти</button>
        </form>
        </div>
    </div>
</body>
</html>