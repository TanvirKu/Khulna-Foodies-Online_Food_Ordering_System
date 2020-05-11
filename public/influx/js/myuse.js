$(document).ready(function(){

$('div.dropdown').hover(function(){
$('.dropdown',this).fadeIn();	
}, function(){
$('.dropdown',this).fadeOut('fast');
});

}); 