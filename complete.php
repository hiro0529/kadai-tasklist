<?php

$company = "";
    if (array_key_exists('company', $_POST)) {
        $company = $_POST['company'];
    }
$name = "名無し";
    if (array_key_exists('name', $_POST)) {
        $name = $_POST['name'];
    }
$mail = "";
    if (array_key_exists('mail', $_POST)) {
        $mail = $_POST['mail'];
    }
$tel = "";
    if (array_key_exists('tel', $_POST)) {
        $tel = $_POST['tel'];
    }
$content = "";
    if (array_key_exists('content', $_POST)) {
        $content = $_POST['content'];
    }
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <title>送信完了 | サンプル株式会社</title>
</head>

<body>
    <header>

    </header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
        <a href="#" class="navbar-brand">サンプル株式会社</a>
        <!--ハンバーガーボタン -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
            </button>
        <!-- メニュー項目 -->
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">会社情報</a></li>
                <li class="nav-item"><a href="#" class="nav-link">ニュース</a></li>
                <li class="nav-item"><a href="#" class="nav-link">採用情報</a></li>
                <li class="nav-item"><a href="#" class="nav-link">お問い合わせ</a></li>
        </div>
        </ul>
    </nav>
    <div class="container">
        <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
        <p>ありがとうございました。送信を受け付けました。</p>
        <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
       
                <h2 class="mt-4 pb-4 border-bottom">送信内容</h2>
                 <table>
                <tr>
                    <th>会社名</th><td><?php print htmlspecialchars($company, ENT_QUOTES, "UTF-8"); ?></td>
                </tr>
                <tr>
                    <th>氏名</th><td><?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td>
                </tr>
                <tr>
                    <th>メール</th><td><?php print htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?></td>
                </tr>
                <tr>
                    <th>電話番号</th><td><?php print htmlspecialchars($tel, ENT_QUOTES, "UTF-8"); ?></td>
                </tr>
                <tr>
                    <th>内容</th><td> <?php print nl2br(htmlspecialchars($content, ENT_QUOTES, "UTF-8")); ?></td>
                </tr>
                </table>
                 <div class="text-center mb-4">
                <div class="offset-sm-5 col-sm-2 offset-sm-5">
                    <a href="https://6e88d8d52d0c4c04a849661cae0c25da.vfs.cloud9.us-east-1.amazonaws.com/_static/contact.html?_c9_id=livepreview31&_c9_host=https://console.aws.amazon.com">
                    <button type="submit" class="btn btn-block btn-success">戻る</button></a>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2018 SAMPLE Inc.
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>

</html>
