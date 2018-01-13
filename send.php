<?
if (isset($_POST["submit"])) {
    if((isset($_POST['fname'])&&$_POST['fname']!="")&&(isset($_POST['lname'])&&$_POST['lname']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
            echo "Ошибка: Не верный формат Email адреса";
        } else {
            $to = 'xortica87@gmail.com';
            $name = $_POST['fname'];
            $surname = $_POST['lname'];
            $message = $_POST['message'];
            $headers .= 'From:'.$email."\r\n";
            mail($to, $name, $surname, $message, $headers);
            if(mail($to, $subject, $message, $headers))
                echo "Ваше письмо отправлено! Спасибо, что обратились!";
            else   
                echo "Ошибка при отправке письма!";
        }
    }
}
?>