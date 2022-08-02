let hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function () {
    document.querySelector("body").classList.toggle("active");
})


function itemDoubleClick(feed) {
  let li = document.createElement('li');
  li.setAttribute("id", feed.id);
  li.textContent = "" + feed.feed_name;
  var x =  document.getElementById(feed.id);
   if (x === null ) {
     selectedFeed.appendChild(li);

   }else {
     x.remove();
   }

}



function itemSingleClick(feed) {
  var a =  document.getElementById(feed.id);
   if (a === null ) {
     feedname.innerHTML = feed.feed_name;
     price.innerHTML = feed.price

   }else {
     a.remove();
   }

}
