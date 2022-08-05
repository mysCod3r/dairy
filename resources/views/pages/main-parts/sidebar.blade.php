<!--Top menu -->
<div class="sidebar">
   <!--profile image & text-->
   <div class="profile">
        <h3>Hoş geldiniz</h3>
        <p>
            @if(Route::has('login'))
                @auth
                {{ Auth::user()->name }}

            @else
            Giriş Yap
            @endauth
            @endif
        </p>
   </div>
    <!--menu item-->
    <ul>

      <li>
          <a href="{{route("anasayfa")}}" >
              <span class="icon"><i class="fas fa-home"></i></span>
              <span class="item">Anasayfa</span>
          </a>
      </li>
      <li>
          <a href="{{route("goFeeds")}}">
              <span class="icon"><i class="fa-solid fa-reel"></i></span>
              <span class="item">Yemler</span>
          </a>
      </li>
      <li>
          <a href="{{route("goAbout")}}">
              <span class="icon"></span>
              <span class="item">Hakkımızda</span>
          </a>
      </li>
  @if (Route::has('login'))
      <li>
        @auth
        <a href="{{route("logout")}}">
            <span class="icon"></span>
            <span class="item">Çıkış yap</span>
        </a>
        @else
          <a href="{{route("login")}}">
              <span class="icon"></span>
              <span class="item">Giriş yap</span>
          </a>
      </li>
      @if (Route::has('login'))
      <li>
          <a href="{{route("signup")}}">
              <span class="icon"></span>
              <span class="item">Kaydol</span>
          </a>
      </li>
      @endif
  @endauth
  </ul>
    @endif
</div>
