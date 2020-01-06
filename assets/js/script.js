function changementMenu(){ //fonction pour le changement du soulignement du menu.
    let previousAnchor = 'accueil';
setInterval(function () {
    let anchor = window.location.hash.replace('#', '');
    if (previousAnchor != anchor) {
        if (previousAnchor.length > 0) {
            $("#a_" + previousAnchor).removeClass('active');
        }
        if (anchor.length > 0) {
            $("#a_" + anchor).addClass('active');
        }
        previousAnchor = anchor;
    }
}, 50);

}

let nom = window.location.pathname;
nom = nom.split("/");
nom = nom[nom.length - 1];
nom = nom.substr(0, nom.lastIndexOf("."));
nom = nom.replace(new RegExp("(%20|_|-)", "g"), "");

let anchor = window.location.hash.replace('#', '');



if(anchor != ""){
   
    if(anchor == "" && nom == "index"){
        $('a_accueil').addClass('active');
    }
    else{
        changementMenu();
    }

    $('.lien_menu').click( ()=>{
        changementMenu();
    });
}

else{
    $('.lien_menu').click( ()=>{
        changementMenu();
    });
}



$(window).scroll(function() { // au scroll le header devient plus petit ainsi que le logo
    var height = $(window).scrollTop();

    if(height  > 50) {
    $("header").css("height","80px");
    $(".logo_header").css("width","150px");
    }

    if(height < 50) {
        $("header").css("height","115px");
        $(".logo_header").css("width","200px");

        }
});