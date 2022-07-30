<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=Open+Sans:wght@600;700;800&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title></title>
</head>
<body>

<div class="container">
                    POST YAPMAYI UNUTMA
    <form class="form" method="get" action= {{route("anasayfa")}} >
        @csrf
        <a id="title"><h1 class="form__title">Ask2Mosvie</h1></a>
        <div class="form__input-group">
            <input id="email" name="email" class="form__input" autofocus placeholder="E-posta adresinizi giriniz">
        </div>
        <div class="form__input-group">
            <input type="text" id="nick" name="nick" class="form__input" autofocus placeholder="Kullanıcı adınız">
        </div>
        <div class="form__input-group">
            <input type="password" id="password" name="password" class="form__input" autofocus placeholder="Şifreniz" minlength="8">
            <span id="errorSpan"></span>
        </div>
        <div class="form__input-group">
            <input type="date" id="date" name="date" class="form__input" autofocus>
        </div>
        <!-- <button disabled class="form__button" type="submit" id="enterPage">Giriş yap</button> -->
        <button  class="form__button" type="submit" id="signbutton">Kaydol </button>

    </form>
</div>

<!--<script src="controlsign.js" charset="utf-8"></script>-->

</body>

</html>
