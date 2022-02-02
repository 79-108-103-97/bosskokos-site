<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/logo2.png" type="image/png">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'];?>/template/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'];?>/root/template/style.css">
    
    <title>Авторизация</title>
</head>
<body>
<div class="auth_admin-div">

<form class="auth_admin-form" action="#" method="post">
    <div class="container auth_admin-div_inner">
        <span>Вход в систему управления</span>
        <input type="email" placeholder="Имя" name="name" value="<?php echo $name;?>" >
        <input type="password" placeholder="Пароль" name="password" value="" >
        <?php if (isset($errors) && is_array($errors)):?>
            <ul>
                <?php foreach ($errors as $error):?>
                    <li class="auth_error-li"><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <button type="submit" name="submit">Войти</button>
    </div>
</form>
</div>
</body>
</html>