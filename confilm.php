<?php
//POSTメソッドでデータの受け取り
    $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    $companyName = htmlspecialchars($_POST['companyName'],ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
    $age = htmlspecialchars($_POST['age'],ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'],ENT_QUOTES);
//入力されてない項目→エラー表示
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
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!--titleはお問い合わせフォーム-確認画面-->
    <title>お問い合わせフォーム-確認画面</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div id="wrapper">
<!--お問い合わせフォーム-確認画面はheaderとする、h2タグ-->
        <header>
            <h2>お問い合わせフォーム-確認画面</h2>
        </header>

        //sidebarはリンク、・トップページ・人気投稿・エンジニアのおすすめ商品・記事投稿ページ
        <aside>
            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">人気投稿</a></li>
                <li><a href="#">エンジニアおすすめ商品</a></li>
                <li><a href="#">エンジニアおすすめ記事</a></li>
                <li><a href="#">投稿ページ</a></li>
            </ul>

        </aside>

        <main>
            <form action="send.php" method="POST">
<!--テーブル枠線の太さ=3px-->
                <table border="3">
<!--お名前、会社名、メールアドレス、年齢、お問い合わせ内容→contact.phpから取得
バックエンド 受け取ったデータをテーブル形式で表示、特殊文字エスケープ処理-->
                    <tr>
                        <th>お名前</th>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <th>会社名</th>
                        <td><?php echo $companyName; ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><?php echo $age; ?></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><?php echo $message; ?></td>
                    </tr>
                </table>
<!--送信ボタン→inputタグ、属性値をつける、「送信」戻るボタン→history.back
バックエンド 特殊文字エスケープ処理、hiddenフィールド-->
                <br>
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <input type="hidden" name="age" value="<?php echo htmlspecialchars($age); ?>">
                <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
            
                <input type="submit" value="送信">
                <button type="button"
                onclick="history.back()">戻る</button>

            </form>
        </main>
<!--footerボタンなし-->
        <footer>

        </footer>
    
    </div>
</body>
</html>
