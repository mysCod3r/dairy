<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include("pages\main-parts\head")
    <title>Dairy NRC - Giriş</title>
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
      <input type="text" name="" required="" autocomplete="off">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="" autocomplete="off">
      <label>Password</label>
    </div>
    <button >
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Giriş
    </button>
  </form>
</div>
     </div>
    </div>
      @include("pages\main-parts\sidebar")
    </div>

    <script src="{{URL::asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
