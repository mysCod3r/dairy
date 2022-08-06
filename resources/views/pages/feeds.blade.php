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
               <li><a href="#" class="header-menu-tab" id="show">Kategoriler</a></li>
               <li><a href="#" class="header-menu-tab" id="hide">Gösterilen yemler</a></li>
           </ul>
       </header>
       <!-- FeedName-CONTAINER -->
       <div class="feed-container container">
         <div class="feed-name block">
             @foreach($feeds as $feed)
                     <a class="feeds" id="f{{$feed['id']}}">{{$feed['name']}}</a><hr>
             @endforeach
         </div>
       </div>
           <!-- Features-CONTAINER -->

           <div class="features-container container">
               <div class="feature block">
                   <div class="leftTextarea">
                       @foreach($feeds[0] as $key => $value)
                           <textarea cols="12" id="feature_{{$key}}"> {{preg_replace('/[^A-Za-z0-9\-]/',' ',strtoupper($key))}} </textarea>
                       @endforeach
                   </div>
                   <div id="rightTextarea" class="rightTextarea">
                   @foreach($feeds as $feed)
                           @foreach($feed as $key => $value)
                               <textarea cols="12" hidden id="content_{{$key}}" class="ffeatures_f{{$feed['id']}}">{{strtoupper($value)}} </textarea>
                           @endforeach
                   @endforeach
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
    <script src="{{URL::asset('/js/myjs.js')}}" charset="utf-8"></script>
    </div>
  </body>
</html>
