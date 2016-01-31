//pour la class active des urls de la barre de navigation
var url = window.location.pathname.split('/');
var params = url[url.length - 1];
if(params == '')
    params = './';
$('ul.nav li').each(function(index, el) {
    if($(this).find('a').attr('href') === params){
        $(this).addClass('active');
    }
});

//apres un ajout de commentaire pour ouvrir la collapse du commentaire
$('#collapse'+window.location.hash.replace('#', '')).addClass('in');