
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=Open+Sans:wght@600;700;800&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title></title>
</head>
<body>

<div class="container">
    <form class="form" method="post" action={{route("veriEkle")}} id="form" >
        @csrf
        <a id="title"><h1 class="form__title">Dairy NRC</h1></a>
        <div class="form__input-group">
            <input type="text" name="feed_name" class="form__input" autofocus placeholder="Feed name"  >
        </div>
        <button class="form__button" type="submit" id="enterPage">Veri Ekle</button>
    </form>
</div>

<div class="container">
    <form class="form" method="get" action="{{route("tekliGetir")}}" id="form" >
        @csrf
        <a id="title"><h1 class="form__title">Dairy NRC</h1></a>
        <div class="form__input-group">
            <input type="text" name="id" class="form__input" placeholder="ID numarasını gir"  >
        </div>
        <p class="form__text">
            <a class="form__link" href={{route('listele')}} id="linkCreateAccount">Tümünü Listele.</a>
            <br>
            <button class="form__button" type="submit" id="enterPage">Tekli Getir</button>
        </p>
    </form>
</div>
  <!-- <script src="js\control.js" charset="utf-8"></script>-->
</body>
</html>
