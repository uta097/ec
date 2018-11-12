<!doctype html>
<html lang="ja">
<head>
    <title>wagashi shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <style>
        .cover{
            background:url(../img/st.PNG);
            background-size: cover;
            text-shadow: 2px 2px 0 #000,
            -2px 2px 0 #000,
            2px -2px 0 #000,
            -2px -2px 0 #000;
        }
        .aa{
            font-size: 30px;
        }
    </style>
</head>
<body >
<header>
    <div class="cover text-center text-white  py-5">
        <h1 class="display-4 mb-4 font-weight-bold" >wagashi shop</h1>
    </div>
    <div class="container py-5 h2">
        <nav>
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/cart/list">CART</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">LIST</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/item/1">カステラ</a>
                        <a class="dropdown-item" href="/item/2">ようかん</a>
                        <a class="dropdown-item" href="/item/3">まんじゅう</a>
                        <a class="dropdown-item" href="/item/4">どら焼き</a>
                    </div>
                </li>
            </ul>
    </div>
    </nav>
    </div>
</header>
<main>
    <div class="text-center h2 py-5">カート一覧</div>
<?php
foreach($cartItems as $item): ?>
    <div class="text-center">
        <?=$item->name?>
        価格：<?=$item->price?>円
        <br>
        <br>
    </div>
<?php endforeach; ?>
    <form action="/cart/clear" method="post">
        <?= csrf_field()?>
        <input type="hidden" name="item_id" value="<?=$item->id?>">
        <br>
        <div class="text-center">
        <input type="submit" value="カートを全削除" class="btn btn-danger" ><br><br>
            <a class="btn btn-info px-5" href="/order">購入画面に進む</a>
        </div>
    </form>
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