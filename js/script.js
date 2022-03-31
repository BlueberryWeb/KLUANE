var $dipper = $('.dipper'); 
$dipper.waypoint(function(){
    console.log('Hola');
    setTimeout(function() {
        $(".content").fadeOut(0);
    },3700);
 
    setTimeout(function() {
        $(".content2").fadeIn(0);
    },3700);
});
function menu(){
    document.getElementById('menu').style.display = 'block';
    document.getElementById('showcase').style.display = 'none';
}
function cerrar(){
    document.getElementById('showcase').style.display = 'flex';
    document.getElementById('menu').style.display = 'none';
}