<?php

/* https://api.telegram.org/bot981386145:AAEFDXvOD4DEj83YrK3n1f2VmgUyzCyiTJI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
/*$email = $_POST['user_email'];*/
$token = "981386145:AAEFDXvOD4DEj83YrK3n1f2VmgUyzCyiTJI";
$chat_id = "-452103033";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  /*'Email' => $email*/
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
