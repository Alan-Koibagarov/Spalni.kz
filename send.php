<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['lab'])) {$lab = $_POST['lab'];}
    if (isset($_POST['mail'])) {$mail = $_POST['mail'];}
    if (isset($_POST['textar'])) {$textar = $_POST['textar'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
 
    $to = "akoibagaroff@gmail.com"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom   = "info@incomfort.kz"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "$formData";
    $message = "$formData
    <h3>Spalni</h3><br>
 <b>Имя:</b> $name<br>
<b>Телефон:</b> $phone <br>
<b>Продукт:</b> $mail<br>
$lab <br> $textar";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo '<center class="post_send">
 
<h5> Спасибо! Ваша заявка принята<br>
<br>
<br>
<span class="message_font_cor">Вы можете вернуться на сайт или посмотреть наш инстаграм по ссылкам внизу</span><br>
<br>
<br>

</h5>
<br>

<br>

<a class="send_php_return" href="http://spalni.kz">Вернуться на сайт</a>
<br>
<br>

 
<style>
post_send {
margin-top: 40vh;
}

.post_send h5 {
    font-size: 5vh;
    font-weight: 500;
}

.send_php_icon {
	width: 5vw;
}

.send_php_instagram {
width: 10vw;
}
.send_php_return {
	width: 10vw;
	height: 5vw;
	font-size: 5vw;
	background-color: #00b546;
	color: #fff;
}
</style>

</center>';
    }
    else
    {
    echo '<center>
 
<b>Ошибка. Сообщение не отправлено!</b>
 
</center>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>
