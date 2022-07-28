
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=Open+Sans:wght@600;700;800&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title></title>
</head>
<body>

    <div class="container">
       <form class="form" method="post" action="login.php" id="form" >
           <a href="mainhtml.php" id="title"><h1 class="form__title">Dairy NRC</h1></a>
           <div class="form__input-group">
               <input type="text" id="userName" name="userName" class="form__input" autofocus placeholder="Kullanıcı adınız"  >
           </div>
           <div class="form__input-group">
               <input  type="password" id="password" name="password" class="form__input" autofocus placeholder="Şifreniz" min="8">
           </div>
           <button disabled class="form__button" type="submit" id="enterPage">Giriş yap</button>
           <p class="form__text">
               <a class="form__link" href="signuphtml.php" id="linkCreateAccount">Hesabın yok mu? Hemen kaydol.</a>
           </p>
       </form>
   </div>
  <!-- <script src="js\control.js" charset="utf-8"></script>-->
</body>
</html>
