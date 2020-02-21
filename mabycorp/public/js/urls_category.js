
        /* $(document).ready(function(){
                setTimeout(function(){
                    $(".con").fadeOut(1500);
                },3000);
            });

            $(document).ready(function() {   
    setTimeout(function() {
        $(".con2").fadeIn(1500);
    },3000);
});

            $(document).ready(function(){
                setTimeout(function(){
                    $(".con2").fadeOut(1500);
                },6000);
            });
*/

function escondermenu(){
     $('.navegacion').css({'width': '0%', 'background': 'rgba(0,0,0,.0)'}); /*mostrar el fondo transparente*/
                   $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); /*Agregar el icono menú*/
                   $('.navegacion .submenu').css({'left': '-320px'}); /*Ocultar submenus*/
                   $('.navegacion .submenu_2').css({'left': '-320px'}); /*Ocultar submenus*/
                   $('.navegacion .menu').css({'left': '-320px'});
}
            
            function mayus(e) {
                    e.value = e.value.toUpperCase();
                }


                /***********************************************************/


           function c1() {
              var url = "menu/nuestras_ofertas/ofertas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();
            }



            function c2() {
              var url = "menu/conoce_nuestras_tiendas/conocenuestrastiendas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                escondermenu();

            }

        function c3() {
              var url = "menu/eventos/caritaspintadas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
             escondermenu();

            }
           

            function c4() {
              var url = "menu/snack/snack.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
              escondermenu();

            }

             function c0() {
              var url = "/";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $().html(datos);
                    }
                });
               escondermenu();

            }

            function c5(){
              var url = "menu/c/canastas_nav.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
              escondermenu();

            }

            function message(){
              var url ="menu/eventos/coment_2.php";
              $.ajax({
                type: "POST",
                url: url,
                data: {},
                success:function (datos){
                  $('#contenedor_principal').html(datos);
                }

              });

            }

          function canasta_nav(){
            var pag="menu/campaña_nav/canastas_nav.php";

            $.ajax({
                type: "POST",
                url: pag,
                data:{},
                success: function(datos){
                  $('#contenedor_principal').html(datos);
                }

            });
          }

/************************** utiles de limpieza**********************************/
             function lavavajillas() {
              var url = "categorias/utiles_limpieza/lava_vajillas/lava_vajillas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
              escondermenu();

            }

              function desinfectantes() {
              var url = "categorias/utiles_limpieza/desinfectantes/desinfectantes.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
              escondermenu();

            }

              function ceras() {
              var url = "categorias/utiles_limpieza/ceras/ceras.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                escondermenu();

            }

              function ambientadores() {
              var url = "categorias/utiles_limpieza/ambientadores/ambientadores.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
               escondermenu();

            }

              function insecticidas() {
              var url = "categorias/utiles_limpieza/insecticidas/insecticidas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                      escondermenu();

            }

              function detergente() {
              var url = "categorias/utiles_limpieza/detergente/detergente.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

         /*   function legias() {
              var url = "categorias/utiles_limpieza/legias/legias.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
            }*/

            function suavizantes() {
              var url = "categorias/utiles_limpieza/suavizantes/suavizantes.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function sacamanchas() {
              var url = "categorias/utiles_limpieza/sacamanchas/sacamanchas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function shampoo() {
              var url = "categorias/utiles_limpieza/shampoo/shampoo.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }
/********************utiles de aseo***************************/
         
            function cremasD(){
              var url = "categorias/utiles_aseo/crema_dental/crema_dental.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function desodorantes() {
              var url = "categorias/utiles_aseo/desodorante/desodorante.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function tintes() {
              var url = "categorias/utiles_aseo/tintes/tintes.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function cuidadoM() {
              var url = "categorias/utiles_aseo/cuidado_piel_mujer/cuidado_piel_mujer.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function shampoo() {
              var url = "categorias/utiles_limpieza/shampoo/shampoo.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function cremaP() {
              var url = "categorias/utiles_aseo/crema_peinar/crema_peinar.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function acondicionador() {
              var url = "categorias/utiles_aseo/acondicionador/acondicionador.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function utilesbebe() {
              var url = "categorias/utiles_aseo/utiles_aseo_bebe/utiles_aseo_bebe.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }
        /********************bocaditos***************************/
         
            function camotitos(){
              var url = "categorias/bocaditos/camotitos/camotitos.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function chifles(){
              var url = "categorias/bocaditos/chifles/chifles.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

        function chocolates(){
              var url = "categorias/bocaditos/chocolates/chocolates.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function papitas(){
              var url = "categorias/bocaditos/papitas/papitas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

              /********************pañitos humedos***************************/
         
            function phigienico(){
              var url = "categorias/aseo_personal/papel_higienico/papel_higienico.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function protectores(){
              var url = "categorias/aseo_personal/protectores/protectores.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function thigienicas(){
              var url = "categorias/aseo_personal/toallas_higienicas/toallas_higienicas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }
/*seccion */
           function phumedos(){
              var url = "categorias/aseo_personal/pañitos_humedos_desechable/pañitos_humedos_desechable.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

  /********************reposteria***************************/
         
            function gelatinas(){
              var url = "categorias/reposteria/gelatinas/gelatinas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function mermeladas(){
              var url = "categorias/reposteria/mermeladas/mermeladas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function lechecondensada(){
              var url = "categorias/reposteria/leche_condensada/leche_condensada.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

              /******************** golosinas ***************************/
         
            function caramelos(){
              var url = "categorias/golosinas/caramelos/caramelos.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function galletas(){
              var url = "categorias/golosinas/galletas/galletas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function galletasIn(){
              var url = "categorias/golosinas/galletas_integrales/galletas_integrales.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function wafer(){
              var url = "categorias/golosinas/wafer/wafer.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }


              /******************** lacteos y cereales ***************************/
         
            function yogurt(){
              var url = "categorias/lacteos_cereales/yogurt/yogurt.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                      escondermenu();

            }
/**************seguir*******************/
  function cereales(){
              var url = "categorias/lacteos_cereales/cereales/cereales.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function jugos(){
              var url = "categorias/lacteos_cereales/jugos/jugos.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function rehidratantes(){
              var url = "categorias/bebidas/rehidratantes/rehidratantes.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

              /******************** productos cocina***************************/
      
            function aceite(){
              var url = "categorias/productos_cocina/aceite/aceite.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function salsas(){
              var url = "categorias/productos_cocina/salsas/salsas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function atun(){
              var url = "categorias/productos_cocina/atun/atun.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                      escondermenu();

            }

        function mayonesa(){
              var url = "categorias/productos_cocina/mayonesa/mayonesa.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function fideos(){
              var url = "categorias/productos_cocina/fideos/fideos.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function mostaza(){
              var url = "categorias/productos_cocina/mostaza/mostaza.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }
             /******************** productos cocina***************************/
      
            function menestra(){
              var url = "categorias/abarrotes/menestras/menestras.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function azucar(){
              var url = "categorias/abarrotes/azucar/azucar.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function arroz(){
              var url = "categorias/abarrotes/arroz/arroz.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function arrozintegral(){
              var url = "categorias/abarrotes/arroz_integral/arroz_integral.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             /******************** productos cocina***************************/
      
            function gaseosas(){
              var url = "categorias/bebidas/gaseosas/gaseosas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function aguas(){
              var url = "categorias/bebidas/aguas/aguas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function rehidratantes(){
              var url = "categorias/bebidas/rehidratantes/rehidratantes.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function energizantes(){
              var url = "categorias/bebidas/energizantes/energizantes.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

                 /******************** animales***************************/
      
            function alimientosgp(){
              var url = "categorias/animales/alimentos_gatos_perros/alimentos_gatos_perros.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                 escondermenu();

            }

 /******************** material de limpieza***************************/
      
            function paños(){
               var url = "categorias/material_aseo/paños/paños.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

               function escobasrecogedores(){
              var url = "categorias/material_aseo/escobas/escobas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function esponjas(){
              var url = "categorias/material_aseo/esponjas/esponjas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            function servilletas(){
              var url = "categorias/material_aseo/servilletas/servilletas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

             function papeltoalla(){
              var url = "categorias/material_aseo/papel_toalla/papel_toalla.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

            /******************** material de limpieza***************************/
      
            function pan(){
               var url = "categorias/panaderia/pan/pan.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            
            }


            function mantequilla(){
               var url = "categorias/panaderia/mantequilla/mantequilla.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }

              function queso(){
               var url = "categorias/panaderia/queso/queso.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }
                    function lacteos(){
               var url = "categorias/panaderia/leche/leche_bolsa.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }                               
/*productos maby*/
             function productosmaby(){
               var url = "categorias/productos_maby/productosmaby.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
                  escondermenu();

            }          

      /*=============================== canastas navideñas ===============================================*/

      function ir_casnastas_nav(){

        var pag="menu/campaña_nav/canastas_nav.php";

            $.ajax({
                type: "POST",
                url: pag,
                data:{},
                success: function(datos){
                  $('#contenedor_principal').html(datos);
                }

            });
        
      }