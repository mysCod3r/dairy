let hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function () {
    document.querySelector("body").classList.toggle("active");
})


function itemDoubleClick(feed) {
    // feed den sonra nokta koyarak istediğiniz değeri çekin
    let li = document.createElement('li');
    li.textContent = "#" + feed.feed_name;
    selectedFeed.appendChild(li);

}


