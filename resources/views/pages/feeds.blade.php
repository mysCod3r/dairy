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

         @foreach($feeds as $feed)
                <a id="{{$feed->id}}a" onclick="itemSingleClick({{$feed}})" ondblclick="itemDoubleClick({{$feed}})">{{$feed->name}}</a><hr>
             @endforeach
         </div>
       </div>
       <!-- Features-CONTAINER -->
       <div class="features-container container">
            <div class="feature block">
              <div id="leftTextarea" class="leftTextarea"></div>
                <div id="rightTextarea" class="rightTextarea">
              </div>
            </div>
        </div>
        <!--Selected-CONTAINER -->
        <div class="selected-container container">
          <div class="selected-feed block">
            <div id="selectedFeed"></div><hr>
          </div>
      </div>
     <button class="feed_add" style="vertical-align:middle"><span>Ekle</span></button>
     </div>
   </div>
      @include("pages\main-parts\sidebar")
   </div>
    <script src="{{URL::asset('/js/app.js')}}" charset="utf-8"></script>
    </div>

  </body>
</html>
