<!doctype html>
<html lang="ja">
<head>
    <title>wagashi shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <style>

        .fon{
            font-family: 'Amatic SC', cursive;
        }
        .cl{
            color: black;
        }
    </style>
</head>
<body>

<div class="site-wrap ">
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
            <div class="container">
                <div class="row align-items-center">


                    <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                        <form action="/" method="GET">
                            <span class="icon icon-search2"></span>
                            <input type="text" class="form-control border-0" placeholder="Search" name="searchkey" value="">
                        </form>
                    </div>

                    <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                        <div class="site-logo">
                            <a href="/" class="js-logo-clone">Wagashi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <div class="container">
                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li><a href="/">home</a></li>
                    <li><a href="/cart/list">Cart</a></li>

                    <li class="has-children">
                        <a>list</a><ul class="dropdown">
                            <li><a href="/item/1">カステラ</a></li>
                            <li><a href="/item/2">ようかん</a></li>
                            <li><a href="/item/3">まんじゅう</a></li>
                            <li><a href="/item/4">どら焼き</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
</body>
<main>
<div class="container cl">
    <div class=" p-3 ">
        <h2>注文情報入力画面</h2>
    </div>
    <form action="/order" method="POST">
        <?=csrf_field()?>
        名前<br><input type="text" name="name" value="<?=$inputs["name"]??''?>" placeholder="name" required><br>
        住所<br><input type="text" name="address" value="<?=$inputs["address"]??''?>"  placeholder="adress" required><br>
        電話番号<br><input type="text" name="tel" value="<?=$inputs["tel"]??''?>" placeholder="tel" required><br>
        Email<br><input type="text" name="email" value="<?=$inputs["email"]??''?>"  placeholder="email" required><br>
        <input type="submit" value="注文" class="btn btn-outline-info my-3">
    </form>
        </div>
    </form>
</div>
</main>
<footer>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>