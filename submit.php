<?php
// подключение
$host = 'localhost';
$db = 'employment_assistance';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// получение данных из формы
$org_name = $_POST['org_name'];
$org_name_short = $_POST['org_name_short'];
$participant_type = $_POST['participant_type'];
$director_position = $_POST['director_position'];
$director_name = $_POST['director_name'];
$responsible_position = $_POST['responsible_position'];
$responsible_name = $_POST['responsible_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// скл запрос на запись данных
$sql = "INSERT INTO registrations (org_name, org_name_short, participant_type, director_position, director_name, responsible_position, responsible_name, phone, email)
        VALUES ('$org_name', '$org_name_short', '$participant_type', '$director_position', '$director_name', '$responsible_position', '$responsible_name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
