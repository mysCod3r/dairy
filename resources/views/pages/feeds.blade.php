<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include("pages\main-parts\head")
    <title>Dairy NRC - Yemler </title>
  </head>
  <body>
    <div class="wrapper">
        <div class="section">
          @include("pages\main-parts\upbar")
     <div class="index-container">
       <!--İçerik kısmı-->
       <div class="main-container">
         <header class="block">
           <ul class="header-menu horizontal-list">
               <li><a href="#" class="header-menu-tab">Kategoriler</a></li>
               <li><a href="#" class="header-menu-tab">Gösterilen yemler</a></li>
           </ul>
       </header>
       <!-- FeedName-CONTAINER -->
       <div class="feed-container container">
         <div class="feed-name block">
            <p>dsas</p><hr>
         </div>
       </div>
       <!-- Features-CONTAINER -->
       <div class="features-container container">
            <div class="feature block">
              <div class="leftTextarea">
                <textarea name="name" rows="2" cols="15"></textarea>
               </div>
              <div class="rightTextarea">
                <textarea name="name" rows="2" cols="15"></textarea>
              </div>
            </div>
        </div>
        <!--Selected-CONTAINER -->
        <div class="selected-container container">
          <div class="selected-feed block">
          </div>
      </div>
     <button class="feed_add" style="vertical-align:middle"><span>Ekle</span></button>
     </div>
   </div>
      @include("pages\main-parts\sidebar")
   </div>
    <script src="{{URL::asset('/js/main.js')}}" charset="utf-8"></script>
  </body>
</html>
