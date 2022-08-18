var hamburger = document.querySelector(".hamburger");
if(hamburger){
    hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
    })
}

var features = $('.feed_features').length;

$('.feeds').on('dblclick click',function (e) {
    var control = $("#" + "x" + this.id).length > 0;

    if (e.type === "dblclick"){
        if (!control){
            $(this).clone().prop("id", "x" + this.id).appendTo($('.selected-feed.block')).after("<hr>");
        }else{
            $('#x' + this.id).remove();
        }
    }else {
        $('.rightTextarea > textarea').hide();
        $('.ffeatures_'+this.id).show();
    }
})
var sayac = true;

$('#addButton').click( function(){
    if(sayac){
        // $('.rightTextarea').empty();
        $('.rightTextarea > textarea').hide();
        for (var i = 0; i < features; i++){
            $('#rightTextarea').append("<textarea cols='15' rows='2'> Yeni Yem Özelliği </textarea>").show();
        }
        sayac = false;
    }else{
        alert("Veri işleme prosedürü tamamlandı. Buton aktif.");
        $('.rightTextarea > textarea').hide();

        sayac = true;
    }
});

window.onload = function (){

}


// https://www.w3schools.com/jquery/trysel.asp


