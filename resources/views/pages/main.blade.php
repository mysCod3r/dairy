<!DOCTYPE html>
<html lang="en">
<head>
    @include("pages\main-parts\head")
    <title>Dairy NRC</title>
</head>
<body>
  <div class="wrapper">
      <div class="section">
        @include("pages\main-parts\upbar")
   <div class="container">
     <!--İçerik kısmı-->
   </div>
 </div>
    @include("pages\main-parts\sidebar")
 </div>

  <script src="{{URL::asset('/js/main.js')}}" charset="utf-8"></script>
</body>
</html>
