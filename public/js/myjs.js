let hamburger = document.querySelector(".hamburger");

console.log(hamburger)
hamburger.addEventListener("click", function () {
    document.querySelector("body").classList.toggle("active");
})


function itemDoubleClick(feed) {
    let li = document.createElement('p');
    li.setAttribute("id", feed.id);
    li.textContent = "" + feed.name;
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
        feedname.innerHTML = feed.name;
        feedprice.innerHTML = feed.price
    }else {
        a.remove();
    }
}

function qwerty(feed){
    Object.keys(feed).map(keys => {
        let key = document.createElement('textarea');
        key.setAttribute("id", keys);
        key.setAttribute("cols", 12);
        key.textContent = "" + keys;
        var x =  document.getElementById(keys);
        if (x === null ) {
            leftTextarea.appendChild(key);
        }
        console.log(keys);
    });

    Object.values(feed).map(value => {
        let val = document.createElement('textarea');
        val.setAttribute("id", value);
        val.setAttribute("cols", 12);
        val.textContent = "" + value;
        var x =  document.getElementById(value);
        if (x === null ) {
            rightTextarea.appendChild(val);
        }
    });
}
