//Ejecutar función en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);
document.getElementById("menu_t").addEventListener("click", open_close_menu);

//Declaramos variable
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");
var icon_menu_t = document.getElementById("menu_t");

//Evento para mostrar y ocultar menú
    function open_close_menu(){
        body.classList.toggle("btn_open");
        side_menu.classList.toggle("menu__side_move");
        icon_menu_t.classList.toggle("menu_t");
    }

//Si el ancho de la página es menor a 760px, oculars el menú al recargar la página

if (window.innerWidth < 760){
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}
//Haciendo el menú

window.addEventListener("resize", function(){

    if (window.innerWidth > 760){

        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if (window.innerWidth < 760){

        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

});
