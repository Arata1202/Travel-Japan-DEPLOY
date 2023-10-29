<?php
//セキュリティー対策・セッション　＊
header('X-Frame-Options: SAMEORIGIN');
session_start();
session_regenerate_id();

//直接アクセスの禁止
if (!isset ($_SESSION['user'] )){
    header('Location:home.php');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="CSS/about.css">
    <script src="JS/about.js" async></script>
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="apple-touch-icon" sizes="180x180" href="icon-192x192.png">
    <script>
        window.addEventListener('load', function () {
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register("/sw.js")
                    .then(function (registration) {
                        console.log("serviceWorker registed.");
                    }).catch(function (error) {
                        console.warn("serviceWorker error.", error);
                    });
            }
        });
    </script>
</head>
<body>
    <header>
        <!--ハンバーガーメニュー-->
        <div class="humberger">
            <div class="btn">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <div class="block">
                <div class="list">
                    <ul>
                        <li style="color:deepskyblue;"><h5>＊<?php echo $_SESSION['user'] ?>様,ようこそ＊</h5></li>
                        <br>
                        <li><h5><a href="about.php">＊Travel Japan ! とは</a></h5></li>
                        <li><h5><a href="mypage.php">＊マイページ</a></h5></li>
                        <li><h5><a href="ranking.php">＊ランキング</a></h5></li>
                        <li><h5><a href="privacy.php">＊プライバシーポリシー</a></h5></li>
                        <li><h5><a href="contactform.php">＊お問い合わせ</a></h5></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--タイトル-->
        <h1 class="title">&nbsp;Travel Japan !</h1>
    </header> 

    <div class="box">
        <h2 class="subtitle">＊ Travel Japan ! ＊</h2>
        <h3>GitHub はこちら : <a href="https://github.com/Arata1202/Travel-Japan-" target="_blank">Arata1202</a></h3>
        <hr>
        
        <h2 class="subtitle">＊ 開発のきっかけ ＊</h2>
        <p>私は旅行をすることが好きなので、普段旅行先を考えたりする際にはInstagramを活用します。</p>
        <p>しかし、Instagramには少し不満がありました。</p>
        <p>私は旅行先の魅力などについて知りたいのですが、Instagramでは自撮り写真や普通の料理の写真が多く存在し、目的の写真を見つけるには少々時間がかかります。</p>
        <p>そこで私は旅行先の風景やグルメのみを共有するアプリケーションがあれば、簡単かつ素早く情報収集が出来るのではないかと考えました。</p>
        <p>このような、簡単に旅行先に関する情報収集がしたい , 旅行先に関する写真のみを見たい。という目的を達成するために Travel Japan ! の開発に至りました。</p>
        <hr>

        <h2 class="subtitle">＊ 使用言語 / ツール ＊</h2>
        <ul>
            <li>HTML / CSS</li>
            <li>PHP</li>
            <li>JavaScript</li>
            <li>MySQL</li>
            <li>Git / GitHub</li>
            <li>VSCode</li>
            <li>Xserver ( レンタルサーバー  )</li>
        </ul>
        <p>・Xserverに何度もファイル転送しながら、アプリ開発しました。</p>
        <hr>
        
        <h2 class="subtitle">＊ アプリの動作 ＊</h2>
        <h3>ゲストページ</h3>
        <p>ログインしていない場合、ゲストユーザーとしてアプリケーションを使用することが出来ます。</p>
        <p>ゲストユーザーは利用できる機能に制限があり、最新の投稿機能 , お問い合わせ機能 , ログイン / 新規会員登録機能 のみとなっています。</p>
        
        <h3>新規会員登録機能</h3>
        <p>初めに氏名 , メールアドレス , 会員ID(ユーザーが決定) , パスワード , 電話番号(任意)を入力します。</p>
        <p>確認画面で入力内容を確認し、登録するボタンを押すことで会員登録が完了します。</p>
        <img src="images/IMG_111.jpg" alt="">
        
        <h3>ログイン機能</h3>
        <p>新規会員登録で登録した会員IDとパスワードを正しく入力し、ログインボタンを押すことで会員専用ページへ遷移します。</p>
        <p>会員IDまたはパスワードを誤入力した場合、ログインページへ遷移させられます。</p>
        <p>会員専用ページではゲストページとは異なり、新たな機能が利用可能になります。(後述)</p>
        <img src="images/IMG_112.JPEG" alt="">
        
        <h3>最新の投稿ページ</h3>
        <p>ログインすると最初に遷移するページ(ホームページ)です。</p>
        <p>ここでは全会員ユーザーが投稿した内容が、最新順に表示されます。</p>
        <p>また、それぞれの投稿にいいね , コメントをすることが可能です。(後述)</p>
        <img src="images/IMG_113.jpg" alt="">
        
        <h3>いいね機能</h3>
        <p>それぞれの投稿に、いいねボタンが設置されています。</p>
        <p>ユーザーがいいねボタンを押すことで、ボタン左のいいねカウントが1増えます。</p>
        
        <h3>コメント機能</h3>
        <p>それぞれの投稿にはコメントボタンが設置されています。</p>
        <p>コメントボタンを押すことで、その投稿のコメント欄へ遷移します。</p>
        <p>コメント欄では、他ユーザーの投稿したコメントを確認したり、自身がコメントを残すことも出来ます。</p>
        <p>※拘った点として、自身のコメントのみ削除できる機能を開発しました。</p>
        <img src="images/IMG_114.jpg" alt="">
        
        <h3>マイページ ( CRUD )</h3>
        <p>ここではログインしているユーザー自身の投稿が一覧表示されます。</p>
        <p>詳細ボタンを押すことで、それぞれの投稿の詳細ページへ遷移し、投稿の削除や投稿内容の編集(写真以外)をすることが出来ます。</p>
        <img src="images/IMG_115.jpg" alt="">
        
        <h3>個人情報変更機能 ( CRUD )</h3>
        <p>マイページから、個人情報の登録内容の確認や、変更(ID以外)をすることが出来ます。</p>
        <img src="images/IMG_116.jpg" alt="">
        
        <h3>ログアウト機能</h3>
        <p>マイページでログアウトボタンを押し、警告を承認することでログアウトします。</p>
        <p>ログアウトすると、ゲストユーザーとしてゲストページへ遷移します。</p>
        
        <h3>ランキングページ</h3>
        <p>ここでは全ユーザーの投稿が、いいねの多い順に一覧表示されます。</p>
        <p>いいね機能 , コメント機能　も利用することが出来ます。</p>
        <img src="images/IMG_117.jpg" alt="">
        
        <h3>検索機能</h3>
        <p>ここでは都道府県か観光地名称、またはユーザー名で検索をすることが出来ます。</p>
        <p>例えば都道府県に「岐阜県」と入力し、検索ボタンを押すことで全ユーザーの「岐阜県」の投稿のみが一覧表示されます。</p>
        <img src="images/IMG_118.jpg" alt="">
        
        <h3>お問い合わせ機能</h3>
        <p>ここでは、ユーザーがアプリ管理者へお問い合わせをすることが出来ます。</p>
        <p>入力フォームで氏名 , メールアドレス , 題名 , お問い合わせ内容を入力し、確認画面で確認後、送信ボタンを押すことでお問い合わせが完了します。</p>
        <p>お問い合わせが完了すると、管理者とユーザーそれぞれにお問い合わせ内容が記載されたメールが届きます。</p>
        <img src="images/IMG_120.jpg" alt="">
        
        <h3>プライバシーポリシー</h3>
        <p>プライバシーポリシーを記載しているページです。</p>
        
        <h2 class="subtitle">＊ 開発期間 ＊</h2>
        <p>約10日かかりました。</p>
        <p>大学の夏休み期間だったので、毎日暇さえあれば開発に取り組んでいました。</p>
        <p>Travel Japan !の開発を始めたのは9月ですが、7・8月に簡単なアプリケーションを練習として開発していたこともあり、慣れていたせいか、効率よく開発することが出来ました。</p>
        <hr>

        <h2 class="subtitle">＊ 最後に ＊</h2>
        <p>Travel Japan ! ですが、まだまだ問題点があります。</p>
        <p>例にあげると、いいねボタンを押した際にページのトップへ戻ってしまうことや、いいねボタンが何度も押せてしまうという問題点です。</p>
        <p>MySQLについて更に学習を進め、1つずつ問題に対処していきたいと考えています。</p>
        <p>またお気に入り機能など、新しい機能も今後実装していきたいと考えています。</p>
        
        <p>ご覧いただきありがとうございました。</p>
    </div>

    <!--ボトムメニュー-->
    <footer>
        <ul class="under_menu">
            <li><a href="index.php">ホーム</a></li>
            <li><a href="add.php">投稿する</a></li>
            <li><a href="search.php">検索</a></li>
        </ul>
    </footer>
</body>
</html>