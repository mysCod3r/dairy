var hamburger = document.querySelector(".hamburger");
if(hamburger){
    hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
    })
}

$('.feeds').on('dblclick click',function (e) {
    var control = $("#" + "x" + this.id).length > 0;

    if (e.type === "dblclick"){
        if (!control){
            $(this).clone().prop("id", "x" + this.id).appendTo($('.selected-feed.block')).after("<hr>");
        }else{
            //body > div > div > div.index-container > div > div.selected-container.container > div > hr
            //body > div > div > div.index-container > div > div.feed-container.container > div > hr:nth-child(2)
            // $(".selected-feed > hr:nth-child(1)").remove();

            $('#x' + this.id).remove();
        }
    }else {
        $("[id^=c]").hide();   // $("[id^=c]") --> id si c ile başlayanlar             ######
        $('.ffeatures_'+this.id).show();
    }
})



// https://www.w3schools.com/jquery/trysel.asp
