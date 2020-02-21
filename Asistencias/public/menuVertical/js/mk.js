$(document).ready(function () {

    /*------------- Mostrando y ocultando menú ---------------*/
    $('#button-menu').click(function () {
        if ($('#button-menu').attr('class') === 'fa fa-bars') {

            $('.navegacion').css({'width': '100%'}); /*mostrar el fondo transparente*/
            $('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close'); /*Agregar el icono x*/
            $('.navegacion .menu').css({'left': '0px'}); /*mostrar el menú*/

        } else {

            $('.navegacion').css({'width': '0%', 'background': 'rgba(0,0,0,.0)'}); /*mostrar el fondo transparente*/
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); /*Agregar el icono menú*/
            $('.navegacion .submenu').css({'left': '-320px'}); /*Ocultar submenus*/
            $('.navegacion .menu').css({'left': '-320px'}); /*Ocultar el menú*/

        }
    });

    /*-------------- Mostrar el submenu --------------------*/
    $('.navegacion .menu > .item-submenu a').click(function () {

        var positionMenu = $(this).parent().attr('menu'); /*buscamos el valordel atributo menu y lo guardamos en una variable*/
        console.log(positionMenu);

        $('.item-submenu[menu=' + positionMenu + '] .submenu').css({'left': '0px'}); /*mostramos el submenu correspondiente*/

    });

    /*Ocultar el submenu*/
    $('.navegacion .submenu li.regresar').click(function () {

        $(this).parent().css({'left': '-320px'}); /*ocultamos el submenu*/
    });
});


/* redireccionar vinculo  */
$(document).ready(function () {

    $('#menu1').click(function () {
        $('#contenedor').attr('src', 'bandejaEntrada.jsp');
    });

    $('#menu2').click(function () {
        $('#contenedor').attr('src', 'bandejaSalida.jsp');
    });

    $('#menu3').click(function () {
        $('#contenedor').attr('src', 'bandejaArchivos.jsp');
    });

    $('#menu4').click(function () {
        $('#contenedor').attr('src', 'actualizarDatos.jsp');
    });

    $('#actualizarDatos').click(function () {
        $('#contenedor').attr('src', 'actualizarDatos.jsp');
    });
    $('#externo').click(function(){
        $('#contenedor').attr('src', 'tipoExpediente/Externo.jsp');
    });
     $('#interno').click(function(){
        $('#contenedor').attr('src', 'tipoExpediente/Interno.jsp');
    });
     $('#kpi').click(function(){
        $('#contenedor').attr('src', 'tipoExpediente/Kpi.jsp');
    });
     $('#programada').click(function(){
        $('#contenedor').attr('src', 'tipoExpediente/Programada.jsp');
    });
});