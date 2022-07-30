<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include("pages\main-parts\head")
    <title>Dairy NRC - Kaydol</title>
  </head>
  <body>
    <div class="wrapper">
        <div class="section">
          @include("pages\main-parts\upbar")
     <div class="container">
       <!--İçerik kısmı-->
       <div class="login-box">
  <h2>Dairy NRC</h2>
  <form>
    <div class="user-box">
      <input type="email" name="" required="">
      <label>E-mail</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Kullanıcı adı</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Şifre</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Şifre</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Kaydol
    </a>
  </form>
</div>
     </div>
    </div>
      @include("pages\main-parts\sidebar")
    </div>

    <script src="{{URL::asset('/js/main.js')}}" charset="utf-8"></script>
  </body>
</html>
