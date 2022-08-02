<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include("pages\main-parts\head")
      <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
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
                <a id="{{$feed->id}}" ondblclick="itemDoubleClick({{$feed}})" >{{$feed->feed_name}}</a><hr>
             @endforeach

         </div>
       </div>
       <!-- Features-CONTAINER -->
       <div class="features-container container">
            <div class="feature block">
              <div class="leftTextarea">
                <textarea name="name" rows="2" cols="15">Feed Name</textarea>
               </div>
              <div class="rightTextarea">
                <textarea name="name" rows="2" cols="15" id="feedname"></textarea>
              </div>
            </div>
        </div>
        <!--Selected-CONTAINER -->
        <div class="selected-container container">
          <div class="selected-feed block">
            <p  id="selectedFeed"></p><hr>
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
