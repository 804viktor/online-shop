<?php



$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['psw'];
$passwordRep = $_GET['psw-repeat'];

//function isValid($name, $email, $password, $passwordRep)
//{
//    $flag = true;

if (strlen($name) < 3) {
    echo "имя слишком короткое (минимум 3 символа)";
}

if (strlen($email) < 3 && (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
    echo "Ошибка неверный формат email адреса";
}

if (strlen($password) < 6) {
    echo "пароль должен иметь не менее 6 символов";
}

if ($password != $passwordRep) {
    echo "пароли должны совпадать";
}
else {


        $pdo = new PDO ('pgsql:host=postgresql;port=5432;dbname=mydb', 'user', 'pwd');

        $pdo->exec("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    }
        $result = $pdo->query('SELECT * FROM users order by id desc limit 1');

        $data = $result->fetch();

        print_r($data);
//
//}


