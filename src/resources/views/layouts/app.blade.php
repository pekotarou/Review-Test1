<!-- 共通画面 html-->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    FashionablyLate
                </a>
<!--条件分岐でヘッダーの右側ボタン表示/非表示設定-->
                <?php
                // 現在のページのパスを取得
                $current_page = $_SERVER['REQUEST_URI'];
                    if ($current_page === '/login') {
                        // ログインページのレジスターボタン表示
                         $current_page_title = "Login";
                        echo '<button class="header-button">
                        <a class="header-button__register" href="register">register</a> </button>';
                    }elseif($current_page === '/register'){
                        // 会員登録ページのログインボタン表示
                        echo '<button class="header-button">
                        <a class="header-button__register" href="/login">login</a>  </button>';
                    }elseif($current_page === '/admin'){
                        // 管理画面ページのログアウトボタン表示
                        echo '<button class="header-button">
                        <a class="header-button__logout" href="/login">logout</a>  </button>';
                    }
                ?>
            </div>
        </div>
        <div class="header__under">
            <!--条件分岐でヘッダーの下部ページタイトル設定-->
                <?php
                // 現在のページのパスを取得
                $current_page = $_SERVER['REQUEST_URI'];
                    if ($current_page === '/login') {
                        // ログインページ
                        echo '<h2 class="header__under__title__login">login</h2>';
                    }elseif($current_page === '/register'){
                        // 会員登録ページ
                        echo '<h2 class="header__under__title__register">register</h2>';
                    }elseif($current_page === '/admin'){
                        // 管理画面ページ
                        echo '<a class="header__under__title__admin">admin</a>';
                    }elseif($current_page === '/confirm'){
                        // お問い合わせ確認ページ
                        echo '<a class="header__under__title__confirm">confirm</a>';
                    }elseif($current_page === '/'){
                        // 問い合わせフォームページ
                        echo '<h2 class="header__under__title__contact">Contact</h2>';
                    }
                ?>
        </div>
    </header>
  <main>
    @yield('content')
  </main>
</body>

</html>
