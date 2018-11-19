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
    </style>
</head>
<body>

<div class="site-wrap">
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
            <div class="container">
                <div class="row align-items-center">


                    <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                        <form action="/" method="GET">
                            <span class="icon icon-search2"></span>
                            <input type="text" class="form-control border-0" placeholder="Search">
                            <input type="submit" value="検索">
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
<div class="text-center">
    商品名：<?=$item->name?><br>
        <img src="<?=$item->img?>"/><br>
    価格：<?=$item->price?>円<br>
    説明：<?=$item->description?><br>
        <form action="/cart/add" method="post">
            <?= csrf_field()?>
            <input type="hidden" name="item_id" value="<?=$item->id?>">
            <input type="submit" value="カートに追加" class="btn btn-info" ><br>
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