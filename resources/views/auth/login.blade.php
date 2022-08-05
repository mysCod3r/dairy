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

  <x-auth-session-status class="mb-4" :status="session('status')" />
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
  <h2>Dairy NRC</h2>
  <form method="POST" action="{{ route('login') }}">
      @csrf
    <div class="user-box">
      <input type="text" id="email" type="email" name="email" :value="old('email')" autocomplete="off">
      <label for="email" :value="__('Email')">E-Mail</label>
    </div>
    <div class="user-box">
      <input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="current-password"  autocomplete="off">
      <label for="password" :value="__('Password')">Password</label>
    </div>
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
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
    <script src="{{URL::asset('/js/myjs.js')}}" charset="utf-8"></script>
  </body>
</html>
