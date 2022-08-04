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
  <form method="POST" action="{{ route('signup') }}">
      @csrf
    <div class="user-box">
      <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="off" >
      <label for="email" :value="__('Email')" >E-mail</label>
    </div>
    <div class="user-box">
      <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="off">
      <label for="name" :value="__('Name')">Kullanıcı adı</label>
    </div>
    <div class="user-box">
      <input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="new-password" autocomplete="off">
      <label for="password" :value="__('Password')">Şifre</label>
    </div>
    <div class="user-box">
      <input id="password_confirmation" class="block mt-1 w-full"
                      type="password"
                      name="password_confirmation" required>
      <label for="password_confirmation" :value="__('Confirm Password')">Şifre</label>
    </div>
      <button href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Kaydol
    </button>
  </form>
</div>
     </div>
    </div>
      @include("pages\main-parts\sidebar")
    </div>
    <script src="{{URL::asset('/js/myjs.js')}}" charset="utf-8"></script>
  </body>
</html>
