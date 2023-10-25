<?php
//セキュリティー対策
header('X-Frame-Options: SAMEORIGIN');
session_start();
session_regenerate_id();

//トークンの生成
$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);
$_SESSION['csrf_token'] = $csrf_token;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="CSS/gcontactform.css">
</head>
<body>
    <header>
        <!--タイトル-->
        <h1 class="title"><a href="">&nbsp;Travel Japan !</a></h1>
    </header> 
    
    <h2 class="subtitle">＊お問い合わせ＊</h2>
    <!--入力フォーム-->
    <div class="box">
        <form action="gcontactcheck.php" method="post">
            
            <!--トークンの送信-->
            <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
            <div class="box_first">    
                <div class="require">
                    <h3>氏名</h3><p class="red">(*必須)</p>
                </div>
                <input type="text" name="name" value="" required size="30" placeholder="東洋　太郎" style="height:25px;">
                <div class="box_first"> 
                <div class="require">
                    <h3>メールアドレス</h3><p class="red">(*必須)</p>
                </div>
                <input type="text" name="email" value="" required size="30" placeholder="example@example.jp" size="50" style="height:25px;">
                <div class="require">
                    <h3>題名</h3><p class="red">(*必須)</p>
                </div>
                <input type="text" name="title" value="" required size="30" placeholder="題名を記入" style="height:25px;">
                <div class="require">
                    <h3>お問い合わせ内容</h3><p class="red">(*必須)</p>
                </div>
                <textarea name="contact_body" value="" required rows="7"  cols="30" placeholder="具体的な内容を記入"></textarea>
            </div>
            <p><input class="submit" type="submit" name="submit" value="確認画面へ"></p>
        </form>
    </div>     
            
    <!--ボトムメニュー-->
    <footer>
        <ul class="under_menu">
            <li><a href="guest.php">ホーム</a></li>
            <li><a href="form.php">ログイン</a></li>
            <li><a href="gcontactform.php">お問い合わせ</a></li>
        </ul>
    </footer>
</body>
</html>