var hamburger = document.querySelector(".hamburger");
if(hamburger){
    hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
    })
}

$('.feeds').on('dblclick click',function (e) {
    const control = $("#" + this.id + "i").length > 0;

    if (e.type === "dblclick" && !control){
        $(this).clone(true,true).prop("id",this.id + "i").appendTo($('.selected-feed.block')).after("<hr>");

    }else {
        $("[id^=c]").hide();   // $("[id^=c]") --> id si c ile başlayanlar             ######
        $('.ffeatures_'+this.id).show();
    }
})



// https://www.w3schools.com/jquery/trysel.asp
