var hamburger = document.querySelector(".hamburger");
if(hamburger){
    hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
    })
}

$('.feeds').on('dblclick click',function (e) {
    if (e.type === "dblclick"){
        console.log("double c")
    }else {
        $("[id^=c]").hide();   // $("[id^=c]") --> id si c ile başlayanlar
        $('.ffeatures_'+this.id).show();
    }
})

function convertToSlug(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'');
}
