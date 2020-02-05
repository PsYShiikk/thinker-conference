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

function changementMenuPhone(){ //fonction pour le changement du soulignement du menu.
    let previousAnchor = 'accueil';
    setInterval(function () {
        let anchor = window.location.hash.replace('#', '');
        if (previousAnchor != anchor) {
            if (previousAnchor.length > 0) {
                $("#b_" + previousAnchor).removeClass('active');
            }
            if (anchor.length > 0) {
                $("#b_" + anchor).addClass('active');
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
        $('b_accueil').addClass('active');
    }
    else{
        changementMenu();
        changementMenuPhone();
    }

    $('.lien_menu').click( ()=>{
        changementMenu();
        changementMenuPhone();
    });
}

else{
    $('.lien_menu').click( ()=>{
        changementMenu();
        changementMenuPhone();
    });
}



$(window).scroll(function() { // au scroll le header devient plus petit ainsi que le logo
    var height = $(window).scrollTop();

    if(height  > 50) {
    $("header").css("height","60px");
    $(".logo_header").css("width","130px");
    }

    if(height < 50) {
        $("header").css("height","90px");
        $(".logo_header").css("width","150px");

        };

    
});

var launch = new Date("Mar 19, 2020 18:30:00").getTime();
var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = launch - now;

 
 
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

   
    $('#jours').html(days);
    $('#heures').html(hours);
    $('#minutes').html(minutes);
    $('#secondes').html(seconds);

if(distance < 0){
    clearInterval(x);
    $('.compteur').hide();
    $('.live').css('display', 'flex');
}
}, 1000);





let state = false;


function toggleButton(){
    if(state == false){
        console.log('Coucou ca souvre');
        state = true;
        $('.toggleMenuButton').attr('src', 'assets/img/menu/close.svg' );


        $('.phone_menu').css('display', 'flex');


    }
    else{
        console.log('Coucou ca se ferme');
        state = false;
        $('.toggleMenuButton').attr('src', 'assets/img/menu/open.svg' );
        $('.phone_menu').css('display', 'none');


    }
}

function closeMenu() {

    console.log('je dois me fermer pardis');

    $('.toggleMenuButton').attr('src', 'assets/img/menu/open.svg' );
    $('.phone_menu').css('display', 'none');

    state = false;
}
