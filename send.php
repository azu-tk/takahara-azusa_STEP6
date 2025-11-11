<?php

     $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
     $companyName = htmlspecialchars($_POST['companyName'],ENT_QUOTES);
     $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
     $age = htmlspecialchars($_POST['age'],ENT_QUOTES);
     $message = htmlspecialchars($_POST['message'],ENT_QUOTES);

     if($_SERVER['REQUEST_METHOD']!=='POST'||
     empty($_POST['name'])||
     empty($_POST['companyName'])||
     empty($_POST['email'])||
     empty($_POST['age'])||
     empty($_POST['message'])){

//フォーム以外からのアクセス→contact.phpにリダイレクト
    header ('Location:contact.php');
    exit;
     }

     $to = "test@example.com";
     $subject = "お問い合わせフォーム内容:" . $name;
     $headers = "From:" . $email;

     $body = <<<EOD
     
     以下の内容でお問い合わせを受け付けました。

     お名前：{$name}
     会社名：{$companyName}
     メールアドレス：{$email}
     年齢：{$age}
     --------------------
     お問い合わせ内容：{$message}

     EOD;

     $is_succes = mail($to,$subject,$body,$headers);

     if($is_succes){
        $result_message = "お問い合わせが送信されました。ありがとうございます！";
     }else{
        $result_message = "大変申し訳ございません。メールの送信に失敗しました。";
     }

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>お問い合わせフォーム-送信完了画面</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8"> 
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h1>お問い合わせフォーム-送信完了画面</h1>
                <?php echo $result_message; ?>
            </header>
            <br>
            <a href="contact.php">お問い合わせフォームに戻る</a>
        </div>

    </body>
</html>
