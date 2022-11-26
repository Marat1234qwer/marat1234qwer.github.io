<?php

   // получение данных с элементов формы
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];


// обработаем полученные данные

    $login = htmlspecialchars($login);  //преобразование в сущности (мнемоники)
    $pass = htmlspecialchars($pass);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login);  //декодирование URL
    $pass = urldecode($pass);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login);  // удаление пробельных символов с обеих сторон
    $pass = trim($pass);
    $email = trim($email);
    $tel = trim($tel);

// отправляем данные на почту

if (mail("shamsytdinovmarat@gmail.com",
        "Новое письмо с сайта",
        "Логин: ".$login."\n".
        "Пароль: ".$pass."\n".
        "Email: ".$email."\n".
        "Телефон: ".$tel,
        "From: no-reply@mydomain.ru \r\n")
){
    echo ('Письмо успешно отправлено!');
}

else {
    echo ('Есть ошибки! Проверьте данные...');
}

?/
    