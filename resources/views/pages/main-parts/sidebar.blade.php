<!--Top menu -->
<div class="sidebar">
   <!--profile image & text-->
   <div class="profile">
        <h3>Hoş geldiniz</h3>
        <p>Kullanıcı adı</p>
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
      <li>
          <a href="{{route("login")}}">
              <span class="icon"></span>
              <span class="item">Giriş yap</span>
          </a>
      </li>
      <li>
          <a href="{{route("register")}}">
              <span class="icon"></span>
              <span class="item">Kaydol</span>
          </a>
      </li>
  </ul>
</div>
