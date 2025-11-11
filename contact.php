<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
//titleはお問い合わせフォーム
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div id="wrapper">
//お問い合わせフォームはheaderとする、h2タグ
        <header>
            <h2>お問い合わせフォーム</h2>
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
        <div id="error-message" style="color: red;"></div>

            <form action="confirm.php" method="POST" id="contactForm" >
//テーブル枠線の太さ=3px
                <table border="3">
//お名前、会社名、メールアドレス、年齢→テキストボックス横幅半角40字
//お問い合わせ内容→テキストエリア
                    <tr>
                        <th>お名前</th>
                        <td><input type="text" name="name" id="name" size="40"></td>
                    </tr>
                    <tr>
                        <th>会社名</th>
                        <td><input type="text" name="companyName" id="companyName" size="40"></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><input type="text" name="email" id="email" size="40"></td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><input type="text" name="age" id="age" size="40"></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><textarea name="message" id ="message"></textarea></td>
                    </tr>
                </table>
//送信ボタン→inputタグ、属性値をつける、「送信」
                <br>
                <input type="submit" value="送信">
            </form>
        </main>


//footer内にボタン→「押してみてね！」
        <footer>
            <button>押してみてね！</button>
        </footer>
    
    </div>
</body>
</html>
