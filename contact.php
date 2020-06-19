<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <title>お問い合わせ | サンプル株式会社</title>
</head>

<body>
    <header>
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

    </header>
    <div class="container">
        <h1 class="mt-4 pb-4 border-bottom">お問い合わせ</h1>
        <div class="mt-4 row">
            <div class="col-sm-3">
                <i class="fas fa-phone"></i>
                <strong>お電話：</strong>
            </div>
            <div class="col-sm-9">
                <p>該当する内容の電話番号におかけください。</p>
                <div class="mt-4">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>内容</th>
                                <th>電話番号</th>
                                <th>担当</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0000</td>
                                <td>煌木</td>
                            </tr>
                            <tr>
                                <td>採用に関するお問い合わせ</td>
                                <td>03-0000-0001</td>
                                <td>煌田</td>
                            </tr>
                            <tr>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0002</td>
                                <td>煌山</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-exclamation-circle"></i> 営業時間
                        </div>
                        <div class="card-body">
                            平日10時〜19時(土日・祝日は対応しておりません）
                        </div>
                    </div>
            </div>
        </div>
        <div class="mt-4 row">
            <div class="col-sm-3">
                <i class="far fa-envelope"></i>
                <strong>メール：</strong>
            </div>
            <div class="col-sm-9">
                <p>
                    プライバシーポリシーをご確認いただき、ご同意の上で、送信ボタンをクリックしてください。<br /> お問い合わせの内容は、受付日から3営業日以内をめどにご返信いたします。
                </p>
                <form action="complete.php" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            会社名：
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="company" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                           氏名：
                        </label>
                        <div class="col-sm-10">
                             <input type="text" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                           メール：
                        </label>
                        <div class="col-sm-10">
                             <input type="text" name="mail" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            電話番号：
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="tel" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            内容：
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="content" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10 ">
                            <button type="submit" class="btn btn-block btn-success">お問い合わせ内容を送信する</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center pt-3 pb-3 border-top">
        &copy; 2018 SAMPLE Inc.
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>

</html>
