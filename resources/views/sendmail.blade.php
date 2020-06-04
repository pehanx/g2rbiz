<?php
//$to = "admin@g2r.biz";
$to = "nikitos.0@list.ru";
$site = "G2R.biz";
$subject = "";

$typeMessage = 'Заявка с сайта';
if ($_POST['type'] == 'invest') {
    $typeMessage = 'Заявка на инвестирование';
}

unset($_POST['type']);

$mes= "<table style='width: 100%; background-color: #f8f8f8;'>";

foreach ( $_POST as $key => $value ) {
    if (strpos($key, '???') !== false) exit();
    if ($value != "" && $key != "utm_source" && $key != "utm_medium" && $key != "utm_campaign" && $key != "utm_term" && $key != "utm_content" && $key != "cm_title" && $key != "usr_file") {
        $mes.= "
            <tr>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'>".preg_replace("/_/", " ", $key)."</td>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
            </tr>";
    }
}

$mes.= "</table>";

$subject .= "{$typeMessage} {$site}";
$subject = "=?utf-8?b?" . base64_encode($subject) . "?=";

$boundary = "--".md5(uniqid(time()));

$mailheaders .= "Content-Type: text/html; charset=\"utf-8\"\r\n";

$multipart = $mes;

if (mail($to, $subject, $multipart, $mailheaders)) {
    echo "отправлено";
}else{
    echo "не отправлено";
}


?>
