<?php
  $exibirModal = false;
  # Verificando si existe o no la cookie
  if(!isset($_COOKIE["mostrarModal"]))
  {
   
    $expirar =10; 
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas
    $exibirModal = true;
  }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta property="fb:app_id" content="{YOUR_APP_ID}" />

        <title>Mabycorp.com</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="menu_responsivo/css/style.css">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/slider.css">
        <link rel="stylesheet" href="public/css/slider_modal.css">
        <link rel="stylesheet" href="public/css/social.css">
        <link rel="stylesheet" href="public/css/zoom.css">
        <link rel="stylesheet" href="public/css/lightbox.min.css">
        <link rel="stylesheet" href="public/css/footer.css">
        <link rel="stylesheet" href="public/css/bottom.css">

        <link rel="stylesheet" type="text/css" media="all" href="public/css/autocomplete.css">
        <link rel="stylesheet" type="text/css" media="all" href="menu_responsivo/css/autocomplete.css">

      
        <link rel="stylesheet" href="menu_responsivo/css/font-awesome.css">
        <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">

        <style type="text/css">
           /* ol li::before { 
              content: "«";
              color: blue;
            }*/
            ol li::after { 
              content: " »";
              color: red;
            }
        </style>
 
</head>

<body>

<div class="arriba  fa fa-sort-asc">
    
</div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=355707265184341&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<header id="navx" style="z-index: 1">
                <span id="button-menu" class="fa fa-bars"></span>
        <div style="margin-top: -28px!important;text-align: center;"><span >
            <span style="color: #3E4095;font-size: 23px;font-weight: 200;font-family:gilroy-bold;"><strong>Mega</strong></span>
            <span style="color:#ED3237;font-size: 23px;font-weight: 200;font-family:gilroy-bold;"><strong>Market</strong> <span style="color:red;" class="fa fa-shopping-cart"></span></span></span></div>

            
                <!--=============== menú responsivo=========================-->
               
                <div class="circuloheader" style="display: none;margin-top: 7px;">
                            <div class="form-group" >
                                <div class="input-group" style="">
                                    <input type="text"id="autocomplete2" placeholder="Que producto estas buscando?" class="form-control" onkeyup="mayus(this);" style="padding: 18px;border-radius: 20px 0px 0px 20px;z-index: 0">

                                    <span style="background:#D43F3A;border-radius:0px 20px 20px 0px;padding: 5px 20px;" class="input-group-addon btn-primary">
                                        <span style="color:#FFF" class="glyphicon glyphicon-search"></span>
                                    </span>
                                    

                                </div>       
                            </div>
                        </div>


               <nav class="navegacion">
                                <ul class="menu" >
                                        <!-- TITULO -->           
                                       <span id="cerrar">x</span>

                                        <li class="title-menu"><em>Supermercado</em></li>
                                        <!-- TITULO -->

                                        <li class="item-submenu" menu="1" >


                                            <a href="#" class="menu_principal"><span class="fa fa-tasks icon-menu"></span> Categorias de productos</a>
                                            
                                            <ul class="submenu">
                                                 <li class="title-menu"><span class="fa fa-tasks icon-menu"></span>Categorias de productos</li>
                                                 <li class="regresar">Atrás</li>
                                                 <li class="item-submenu_2 " menu="2">
                                                    <a href="#" id="programada" class="submenu_1"><span class="glyphicon glyphicon-road"></span> Útiles de limpieza</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Útiles de limpieza</li>
                                                                 <li class="regresar">Atrás</li>
                                                                <li><a onclick="lavavajillas()" style="cursor:pointer" class="submenu_1">Lava vajillas</a></li>
                                                                <li><a onclick="desinfectantes()" style="cursor:pointer" class="submenu_1">Desinfectantes</a></li>
                                                                <li><a onclick="ceras()" style="cursor:pointer" class="submenu_1">Ceras</a></li>
                                                                <li><a onclick="ambientadores()" style="cursor:pointer" class="submenu_1">Ambientadores</a></li>
                                                                <li><a onclick="insecticidas()" style="cursor:pointer" class="submenu_1">Insecticidas</a></li>
                                                                <li><a onclick="detergente()" style="cursor:pointer" class="submenu_1">Detergente</a></li>
                                                                <!--li><a onclick="legias()" style="cursor:pointer" class="submenu_1">Legías</a></li-->
                                                                <li><a onclick="suavizantes()" style="cursor:pointer" class="submenu_1">Suavizantes</a></li>
                                                              
                                                                <li><a onclick="shampoo()" style="cursor:pointer" class="submenu_1">Shampoo</a></li>
                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="3">
                                                    <a href="#" class="submenu_1"><span class="fa fa-trash-o"></span> Útiles de aseo</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Útiles de aseo</li>
                                                                 <li class="regresar">Atrás</li>
                                                                <li><a onclick="cremasD();" class="submenu_1">Crema dental</a></li>
                                                                <li><a onclick="desodorantes();" class="submenu_1">Desodorante</a></li>
                                                                <li><a onclick="tintes();" class="submenu_1">Tintes</a></li>
                                                                <li><a onclick="cuidadoM();" class="submenu_1">Cuidado de piel mujer</a></li>
                                                                <li><a onclick="shampoo();" class="submenu_1">Shampoo</a></li>
                                                                <li><a onclick="cremaP();" class="submenu_1">Crema de peinar</a></li>
                                                                <li><a onclick="acondicionador();" class="submenu_1">Acondicionador</a></li>
                                                                <li><a onclick="utilesbebe();" class="submenu_1">Útilies de aseo para bebé</a></li>
                                                        </ul>
                                                </li>

                                                 <li class="item-submenu_2 " menu="4">
                                                    <a href="#" id="programada" class="submenu_1"><span class="fa fa-toggle-off"></span> Bocaditos</a>

                                                        <ul class="submenu_2" >
                                                        <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Bocaditos</li>
                                                        <li class="regresar">Atrás</li>
                                                        <li><a onclick="chifles()" class="submenu_1">Chifles</a></li>
                                                        <li><a onclick="papitas()" class="submenu_1">Papitas</a></li>
                                                        <li><a onclick="chocolates()" class="submenu_1">Chocolates</a></li>
                                                        <li><a onclick="camotitos()" class="submenu_1">Camotitos</a></li>
                                                                
                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="5">
                                                    <a href="#" class="submenu_1"><span class="fa fa-street-view"></span> Aseo personal</a>

                                                        <ul class="submenu_2">
                    <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Aseo personal</li>
                                                <li class="regresar">Atrás</li>
                                        <li><a onclick="phigienico();" class="submenu_1">Papel higiénico</a></li>
                                        <li><a onclick="protectores();" class="submenu_1">Protectores</a></li>
                                <li><a onclick="thigienicas();" class="submenu_1">Toallas higiénicas</a></li>
                            <li><a onclick="phumedos();" class="submenu_1">Pañitos húmedos desechable</a></li>
                                
                                                              
                                                        </ul>
                                                </li>

                                                 <li class="item-submenu_2 " menu="6">
                                                    <a href="#" class="submenu_1"><span class="fa fa-window-restore"></span> Repostería</a>

                                                        <ul class="submenu_2" >
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Repostería</li>
                                                                 <li class="regresar">Atrás</li>

                                            <li><a onclick="lechecondensada()" class="submenu_1">Leche condensada</a></li>
                                            <li><a onclick="gelatinas()" class="submenu_1">Gelatinas</a></li>
                                            <li><a onclick="mermeladas()" class="submenu_1">Mermeladas</a></li>
                                                        </ul>
                                                </li>

                                                 <li class="item-submenu_2 " menu="7">
                                                    <a href="#" class="submenu_1"><span class="fa fa-snowflake-o"></span> Golosinas</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Golosinas</li>
                                                            <li class="regresar">Atrás</li>

                                           <li><a onclick="galletas();" class="submenu_1">Galletas</a></li>
                                        <li><a onclick="caramelos();" class="submenu_1">Caramelos</a></li>
                                        <li><a onclick="wafer();" class="submenu_1">Wafer</a></li>
                                        <!--li><a href="#">Mashmellows</a></li-->
                                        <!--li><a href="#">Frunas</a></li-->
                                        <li><a onclick="galletasIn();" class="submenu_1">Galletas Integrales</a></li>
                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="8">
                                                    <a href="#" class="submenu_1"><span class="fa fa-credit-card-alt"></span> Lácteos y cereales</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Lácteos y cereales</li>
                                                                 <li class="regresar">Atrás</li>
                                                               
                                        <li><a onclick="yogurt();" class="submenu_1" >Yogurt</a></li>
                                        <li><a onclick="cereales();" class="submenu_1" >Cereales</a></li>
                                        <li><a onclick="jugos()" class="submenu_1" >Jugos</a></li>
                                        <li><a onclick="rehidratantes();" class="submenu_1" >Rehidratantes</a></li>
                                   
                                                                                           
                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="9">
                                                    <a href="#" class="submenu_1"><span class="fa fa-cutlery"></span> Productos para cocina</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Productos para cocina</li>
                                                                 <li class="regresar">Atrás</li>
                                        <li><a onclick="mayonesa();"  class="submenu_1" >Mayonesa</a></li>
                                        <li><a onclick="mostaza();"  class="submenu_1" >Mostaza</a></li>
                                        <li><a onclick="fideos();"  class="submenu_1" >Fideos</a></li>
                                        <li><a onclick="atun();"  class="submenu_1" >Atún</a></li>
                                        <li><a onclick="salsas();"  class="submenu_1" >Salsasa</a></li>
                                        <li><a onclick="aceite();"  class="submenu_1" >Aceite</a></li>
                                                    </ul>
                                                </li>

                                                <!--li class="item-submenu_2 " menu="10" >
                                                    <a href="#" class="submenu_1"><span class="fa fa-tint"></span> Productos lácteos</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Productos lácteos</li>
                                                                 <li class="regresar">Atrás</li>
                                                                <li><a href="#" class="submenu_1">Leche entera</a></li>
                                                                <li><a href="#" class="submenu_1">Leche sin lactosa</a></li>
                                                                 <li><a href="#" class="submenu_1">Leche descremada</a></li>
                                                                <li><a href="#" class="submenu_1">Leche chocolatada</a></li>
                                                                 <li><a href="#" class="submenu_1">Chocolate para taza</a></li>
                                                               
                                                        </ul>
                                                </li-->

                                                <li class="item-submenu_2 " menu="11">
                                                    <a href="#" class="submenu_1"><span class="fa fa-toggle-on"></span> Panaderia</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Panadería</li>
                                                                 <li class="regresar">Atrás</li>
                                        <li><a onclick="pan();"  class="submenu_1">Panadería</a></li>
                                        <li><a onclick="mantequilla();"  class="submenu_1">Mantequilla</a></li>
                                        <li><a onclick="queso();"  class="submenu_1">Queso</a></li>
                                        <li><a onclick="lacteos();"  class="submenu_1">Lácteos</a></li>
                                                        </ul>

                                                </li>

                                                 <li class="item-submenu_2 " menu="12">
                                                    <a href="#" class="submenu_1"><span class="fa fa-window-restore"></span> Material de aseo</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Material de aseo</li>
                                                            <li class="regresar">Atrás</li>
                                     <li><a onclick="escobasrecogedores();"  class="submenu_1" >Escobas y Recogedores</a></li>
                                        <li><a onclick="paños();"   class="submenu_1" >Paños</a></li>
                                        <li><a onclick="esponjas();"   class="submenu_1" >Esponjas</a></li>
                                        <li><a onclick="servilletas();"   class="submenu_1" >Servilletas</a></li>
                                        <li><a onclick="papeltoalla();"   class="submenu_1" >Papel toalla</a></li>
                                                               
                                                            
                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="13">
                                                    <a href="#" class="submenu_1"><span class="fa fa-paw"></span> Animales</a>

                                                        <ul class="submenu_2" >
                                                        <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Animales</li>
                                                        <li class="regresar">Atrás</li>
                                                        <li><a onclick="alimientosgp();" class="submenu_1">Alimentos para perros y gatos</a></li>
                                                    <!--li><a href="#" class="submenu_1">Alpiste</a></li>
                                                    <li><a href="#" class="submenu_1">Shampoo para perros y gatos</a></li-->
                                                                
                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="14">
                                                    <a href="#" class="submenu_1"><span class="fa fa-flask"></span> Bebidas</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span> Bebidas</li>
                                                                 <li class="regresar">Atrás</li>
                                                                <li><a onclick="gaseosas()" style="cursor: pointer;" >Gaseosas</a></li>
                                        <li><a onclick="aguas()" class="submenu_1" >Aguas</a></li>
                                        <li><a onclick="rehidratantes()" class="submenu_1" >Rehidratantes</a></li>
                                        <li><a onclick="energizantes()" class="submenu_1" >Energizantes</a></li>

                                                        </ul>
                                                </li>

                                                <li class="item-submenu_2 " menu="15">
                                                    <a href="#" class="submenu_1"><span class="fa fa-shopping-basket"></span> Abarrotes</a>

                                                        <ul class="submenu_2">
                                                            <li class="title-menu_2"><span class="fa fa-suitcase icon-menu"></span>Abarrotes</li>
                                                                 <li class="regresar">Atrás</li>
                                        <li><a onclick="arroz();" class="submenu_1" >Arroz</a></li>
                                        <li><a onclick="menestra();" class="submenu_1" >Menestras</a></li>
                                        <li><a onclick="azucar();" class="submenu_1" >Azúcar</a></li>
                                        <li><a onclick="arrozintegral();" class="submenu_1" >Arroz Integral</a></li>
                                                                
                                                        </ul>
                                                </li>
                                               
                                            </ul>

                                        </li>

                                         <li><a class="menu_principal" href="index.php"><span class="fa fa-home icon-menu"></span>Home</a></li>

                                         <li>
                                            <a id="menu2" class="menu_principal" onclick="c5()" style="cursor: pointer;"><span class="fa fa-shopping-cart icon-menu"></span>Campaña Navideña</a>
                                        </li>


                                        <li>
                                            <a id="menu2" class="menu_principal" onclick="c1()" style="cursor: pointer;"><span class="fa fa-shopping-cart icon-menu"></span>Ofertas del Día</a>
                                        </li>

                                         <li>
                                             <a class="menu_principal" onclick="c4()"  href="#"><span class="fa fa-money icon-menu"></span>Snack MegaMarket</a>
                                        </li>



                                        <li><a class="menu_principal" onclick="c3()"><span class="fa fa-handshake-o icon-menu"></span>Eventos Especiales</a></li>

                                         <li>
                                            <a id="menu3" class="menu_principal" onclick="c2()" style="cursor: pointer;"><span class="fa fa-shopping-basket icon-menu"></span>Conoce Nuestras Tiendas</a>
                                        </li>

                                         <li><a class="menu_principal" href="http://mabycorp.com/consultarticketonline/" target="_blank"><span class="fa fa-search icon-menu"></span>Consulte su Comprobante Electronico</a></li>



                                    </ul>
                                </nav>

 </header>
  


     

 <!--SUPERIOR,DERECHA,INFERIOR,INZQUIERDA
    padding: 0.9em 0.5em 5em 0.5em !important;-->
        <!--div class="" style="margin:0em 0px 0em 2em;"-->

    <div class="container sup">
                       
        <div class="circulo1">
            <a href="index.php"><img  src="public/img/logotipos/logo.png" alt="logo"></a>
        </div>

        <div class="circulo2">
            <div class="form-group" >
                <div class="input-group" style="">
                  
    <input type="text" id="autocomplete" placeholder="Que producto estas buscando?" class="form-control" onkeyup="mayus(this);" style="padding: 18px;border-radius: 20px 0px 0px 20px;z-index: 0">

    <span onclick="buscarProducto();" style="background:#D61411;border-radius:0px 20px 20px 0px;padding: 5px 17px;" class="input-group-addon btn-primary"><span style="color:#FFF" class="glyphicon glyphicon-search"></span></span>

  


		        </div>       
            </div>                  
		</div>                      

        <div class="circulo3">
            <img  src="public/img/icono.jpg" alt="logo" >
            <a href="#"><span style="color: blue">   <span class="glyphicon glyphicon-phone-alt">  </span>   073-509101</span></a>
        </div> 

        <div class="circulo4">
            <a href="#"><span style="margin-top: 30px;color:#E5322D;font-size: 16px;cursor: pointer;" class="fa fa-shopping-cart"><a onclick="c2()" style="color:red;cursor: pointer;color:#E5322D"> AutoServicio MegaMarket</a></span></a>&nbsp;&nbsp;&nbsp;

            <a onclick="c2()"><span style="margin-top: 30px;color:#E5322D;font-size: 20px;cursor: pointer;" class="fa fa-map-marker"> </span></a>

            <!--a href="index.php"><img  src="public/img/logotipos/logo_25A.png" alt="logo" title="Logo 25 Años" style=""></a>
            <img  src="public/img/tcredito.png" alt="logo" title="Logo 25 Años" style="margin-top:0px;"-->
        </div>

        <!--div class="circulo5">

            <span style="color: blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1000</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Visitas</b></span>
        </div-->
    </div>                  

         <!--=============== menu principal ==============-->

      <nav class="menuprincipal" id="navegacionz">
        <ul style="border-radius:7px;">          
                <li >
                    <a href="#" style="background-color: #d61411;border-radius:7px 0px 0px 7px;cursor: default;"><span class="glyphicon glyphicon-align-justify"> </span> Categorias de Productos <span class="caret"></span></a>

                    <ul class="children">
       
    
                        <li>
                             <a href="#" style="cursor: pointer;">Útiles de limpieza<span class="glyphicon glyphicon-menu-right"></span></a>

                            <ul>
                                        <li>
                                        <a onclick="lavavajillas()" style="cursor: pointer;">Lava vajillas</a>
                                        </li>
                                        <li><a onclick="desinfectantes()" style="cursor: pointer;">Desinfectantes</a></li>
                                        <li><a onclick="ceras()" style="cursor: pointer;">Ceras</a></li>
                                        <li><a onclick="ambientadores()" style="cursor: pointer;">Ambientadores</a></li>
                                        <li><a onclick="insecticidas()" style="cursor: pointer;">Insecticidas</a></li>
                                        <li><a onclick="detergente()" style="cursor: pointer;">Detergente</a></li>
                                        <!--li><a onclick="legias()" style="cursor: pointer;">Legías</a></li-->
                                        <li><a onclick="suavizantes()" style="cursor: pointer;">Suavizantes</a></li>
                                     
                                        <li><a onclick="shampoo()" style="cursor: pointer;">Shampoo</a></li>
                                       
                            </ul>
                        </li>

                          <li><a href="#">Utiles de aseo<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="cremasD();" style="cursor: pointer;">Crema dental</a></li>
                                        <li><a onclick="desodorantes();" style="cursor: pointer;">Desodorante</a></li>
                                        <li><a onclick="tintes();" style="cursor: pointer;">Tintes</a></li>
                                        <li><a onclick="cuidadoM();" style="cursor: pointer;">Cuidado de piel mujer</a></li>
                                        <li><a onclick="shampoo();" style="cursor: pointer;">Shampoo</a></li>
                                        <li><a onclick="cremaP();" style="cursor: pointer;">Crema de peinar</a></li>
                                        <li><a onclick="acondicionador();" style="cursor: pointer;">Acondicionador</a></li>
                                        <li><a onclick="utilesbebe();" style="cursor: pointer;">Utiles de aseo bebé</a></li>
                                      
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#">Bocaditos<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="chifles()" style="cursor: pointer;">Chifles</a></li>
                                        <li><a onclick="papitas()" style="cursor: pointer;">Papitas</a></li>
                                        <li><a onclick="chocolates()" style="cursor: pointer;">Chocolates</a></li>
                                        <li><a onclick="camotitos()" style="cursor: pointer;">Camotitos</a></li>
                                    
                                        
                                    </ul>
                                </li>

                                <li><a href="#">Aseo personal<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="phigienico()" style="cursor: pointer;">Papel higiénico</a></li>
                                        <li><a onclick="protectores()" style="cursor: pointer;">Protectores</a></li>
                                        <li><a onclick="thigienicas()" style="cursor: pointer;">Toallas higiénicas</a></li>
                                        <li><a onclick="phumedos()" style="cursor: pointer;">Pañitos húmedos desechable</a>
                                
                                       
                                    </ul>
                                </li>

                                <li><a href="#">Repostería<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="lechecondensada()" style="cursor: pointer;">Leche condensada</a></li>
                                        <li><a onclick="gelatinas()" style="cursor: pointer;">Gelatinas</a></li>
                                        <li><a onclick="mermeladas()" style="cursor: pointer;">Mermeladas</a></li>
                                    
                                     </ul>
                                </li>

                                <li><a href="#">Golosinas<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="galletas();" style="cursor: pointer;">Galletas</a></li>
                                        <li><a onclick="caramelos();" style="cursor: pointer;">Caramelos</a></li>
                                        <li><a onclick="wafer();" style="cursor: pointer;">Wafer</a></li>
                                        <!--li><a href="#">Mashmellows</a></li-->
                                        <!--li><a href="#">Frunas</a></li-->
                                        <li><a onclick="galletasIn();" style="cursor: pointer;">Galletas Integrales</a></li>
                              
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#">Lácteos y cereales<span class="glyphicon glyphicon-menu-right"></span></a>

                                    <ul class="children2">
                                        <li><a onclick="yogurt();" style="cursor: pointer;" >Yogurt</a></li>
                                        <li><a onclick="cereales();" style="cursor: pointer;" >Cereales</a></li>
                                        <li><a onclick="jugos()" style="cursor: pointer;" >Jugos</a></li>
                                        <li><a onclick="rehidratantes();" style="cursor: pointer;" >Rehidratantes</a></li>
                                   
                                    
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Productos para cocina<span class="glyphicon glyphicon-menu-right"></span></a>

                                    <ul class="children2">
                                        <li><a onclick="mayonesa();"    style="cursor: pointer;">Mayonesa</a></li>
                                        <li><a onclick="mostaza();"    style="cursor: pointer;">Mostaza</a></li>
                                        <li><a onclick="fideos();"    style="cursor: pointer;">Fideos</a></li>
                                        <li><a onclick="atun();"    style="cursor: pointer;">Atún</a></li>
                                        <li><a onclick="salsas();"    style="cursor: pointer;">Salsasa</a></li>
                                        <li><a onclick="aceite();"    style="cursor: pointer;">Aceite</a></li>
                                    </ul>
                                </li>

                                <!--li>
                                    <a href="#">Productos lácteos<span class="glyphicon glyphicon-menu-right"></span></a>

                                    <ul class="children2">
                                        <li><a href="#">Leche entera</a></li>
                                        <li><a href="#">Leche sin lactosa</a></li>
                                        <li><a href="#">Leche descremada</a></li>
                                        <li><a href="#">Leche chocolatada</a></li>
                                        <li><a href="#">Chocolate para taza</a></li>
                                      
                                    </ul>
                                </li-->

                                <li>
                                    <a href="#">Panadería<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="pan()" style="cursor:pointer">Panadería</a></li>
                                        <li><a onclick="mantequilla()" style="cursor:pointer">Mantequilla</a></li>
                                        <li><a onclick="queso()" style="cursor:pointer">Queso</a></li>
                                        <li><a onclick="lacteos()" style="cursor:pointer">Lácteos</a></li>
                                   
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Material de aseo<span class="glyphicon glyphicon-menu-right"></span></a>

                                    <ul class="children2">
                            <li><a onclick="escobasrecogedores();"  style="cursor:pointer">Escobas y Recogedores</a></li>
                                        <li><a onclick="paños();"   style="cursor:pointer">Paños</a></li>
                                        <li><a onclick="esponjas();"   style="cursor:pointer">Esponjas</a></li>
                                        <li><a onclick="servilletas();"   style="cursor:pointer">Servilletas</a></li>
                                        <li><a onclick="papeltoalla();"   style="cursor:pointer">Papel toalla</a></li>
                                                               
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Animales<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <!--li><a href="#">Alpiste</a></li-->
                                        <li><a onclick="alimientosgp();" style="cursor: pointer;">Alimentos para perros y gatos</a></li>
                                        <!--li><a href="#">Shampoo para perros y gatos</a></li-->
                                     
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Bebidas<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2">
                                        <li><a onclick="gaseosas()" style="cursor: pointer;" >Gaseosas</a></li>
                                        <li><a onclick="aguas()" style="cursor: pointer;" >Aguas</a></li>
                                        <li><a onclick="rehidratantes()" style="cursor: pointer;" >Rehidratantes</a></li>
                                        <li><a onclick="energizantes()" style="cursor: pointer;" >Energizantes</a></li>
                          
                                      
                                     
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Abarrotes<span class="glyphicon glyphicon-menu-right"></span></a>
                                    <ul class="children2 altura">
                                        <li><a onclick="arroz();" style="cursor: pointer;" >Arroz</a></li>
                                        <li><a onclick="menestra();" style="cursor: pointer;" >Menestras</a></li>
                                        <li><a onclick="azucar();" style="cursor: pointer;" >Azúcar</a></li>
                                        <li><a onclick="arrozintegral();" style="cursor: pointer;" >Arroz Integral</a></li>
                                
                                      
                                    </ul>
                                </li>

                    </ul>

                </li>
               
                <li><a href="index.php" class="line" style="cursor: pointer;"><span></span>Home</a></li>
                <li><a onclick="c5()" class="line" style="cursor: pointer;"><span></span>Campaña Navideña</a></li>
                 <li><a onclick="c1()" class="line" style="cursor: pointer;"><span></span>Ofertas del Día</a></li>
                <li><a onclick="c4()" class="line"style="cursor: pointer;"><span></span>Snack MegaMarket</a></li>
                <li><a onclick="c3()" class="line" style="cursor: pointer;"><span></span>Eventos Especiales</a>
                </li>
                <li><a onclick="c2()" class="line" style="cursor: pointer;"><span></span>Conoce Nuestras Tiendas</a></li>
        </ul>
    </nav>


   <!--=============== Contenedor de paginas ==============-
<div class="con" style="position: fixed;right:25px;top:152px;z-index:2000;">
     <img class="img-responsive" src="public/img/publicida1.jpg" alt="thumb">
</div>

<div class="con2" style="position: fixed;right:25px;top:190px;z-index:2000;display:none;">
     <img class="img-responsive" src="public/img/publicida2.jpg" alt="thumb">
</div-->



<div id="contenedor_principal">
        
 	<div class="" >
   
      <div class="contenedor_slider" style=";z-index:0!important; position: relative;">
        <div id="carousel1" class="carousel slide" data-ride="carousel">
            
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active" style="background:red; " > </li>
            <li data-target="#carousel1" data-slide-to="1" class="" style="background:red; "> </li>
            <li data-target="#carousel1" data-slide-to="2" class="" style="background:red; "> </li>         
          </ol>
      
      <div class="carousel-inner" >    

           
		          

		            <div class="item active"> <img class="img-responsive" src="public/img/slider/VERDURAS1.jpg" alt="thumb">
		                 <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN EMBUTIDOS</center> </strong></span>
		            </div>
		            
		            
		            <div class="item"> <img class="img-responsive" src="public/img/slider/CARNES2.jpg" alt="thumb">
		                <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN FRUTAS</center> </strong></span>
		            </div>

		            <div class="item"> <img class="img-responsive" src="public/img/slider/FRUTAS3.jpg" alt="thumb">
		                 <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN LÁCTEOS</center> </strong></span>
		            </div>
		            
		            <div class="item"> <img class="img-responsive" src="public/img/slider/PANADERIA4.jpg" alt="thumb">
		                 <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN MENESTRAS</center> </strong></span>
		            </div>

		            <div class="item"> <img class="img-responsive" src="public/img/slider/EMBUTIDOS.jpg" alt="thumb">
		            <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>NUESTRAS OFERTAS</center> </strong></span>
		            </div>

		            <div class="item"> <img class="img-responsive" src="public/img/slider/LICORES5.jpg" alt="thumb">
		               <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN PANADERÍA</center> </strong></span>
		            </div>

		            <div class="item"> <img class="img-responsive" src="public/img/slider/SNACK7.jpg" alt="thumb">
		                <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN CAJA</center> </strong></span>
		            </div>
		            
		            <div class="item"> <img class="img-responsive" src="public/img/slider/MENESTRAS8.jpg" alt="thumb">
		               <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN RECEPCIÓN</center> </strong></span>
		            </div>

                     <div class="item"> <img class="img-responsive" src="public/img/slider/carsnack10.png" alt="thumb">
                       <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN RECEPCIÓN</center> </strong></span>
                    </div>


		              <!--div class="item"> <img class="img-responsive" src="public/img/slider/OFERTAS9.jpg" alt="thumb">
		              <span class="carousel-caption"><strong style="color:#0F3FAD;"><center>SECCIÓN CARNES</center> </strong></span>
		            </div-->

		           
            
      </div>
	          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span>
	          </a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a>
      </div>

      </div>
    </div>

        

  <!--====================  productos mega=========================-->
	<div class="container" style="margin-top: -13px;"><hr>
    	<div class="row">
                <div class="col-lg-7"-->
                     <h2 class="" style="color:#cd201f;font-size:32px;font-family:gilroy-bold;">PRODUCTOS<span style="color: #3E4095;">
    <strong>MEGA</strong></span><span style="color:#ED3237;"><strong>MARKET </strong> </span><span style="color:red;font-size:30px;" class="fa fa-shopping-cart"> </span>
                        <img id="npm" src="public/img/icono.jpg" alt="logo">
                </div>

                <div class="col-lg-5 hidden-md hidden-ms hidden-xs " style="border:1px solid #4285F4;box-shadow: 3px 3px 3px #0372B2;border-radius: 5px;background: #4285F4;">
                        <h4 style="margin-left: -5px;"><a href="http://mabycorp.com/consultarticketonline/" target="blank" style="color:#fff;font-family: Segoe UI Light;text-decoration: none;font-size: 17px;">Consulte su Comprobante Electronico!</a> <span class="glyphicon glyphicon-print"></span></h4>
                </div>
            
        </div>
    


	</div>


 <div id="contenedorM">

            <a href="#" class="izquierda_flechaM"><img src="public/img/70.png" /></a>
            <a href="#" class="derecha_flechaM"><img src="public/img/80.png" /></a>

            <div class="carruselM">

                <div class="imagen" id="imagen_0">
                    <a onclick="c5();"><img class="img_carrusel" id="img0" src="public/img/campaña_nav/paneton_lata.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_1">
                    <a onclick="c5();"><img class="img_carrusel" id="img1" src="public/img/campaña_nav/paneton_caja.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_2">
                    <a onclick="c5();"><img class="img_carrusel" id="img2" src="public/img/campaña_nav/paneton_maby.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_3">
                    <a onclick="c5();"><img class="img_carrusel" id="img3" src="public/img/campaña_nav/pan_blanco.png" width="284px" height="255px" /></a>
                </div>

                 <div class="imagen" id="imagen_4">
                    <a onclick="c5();"><img class="img_carrusel" id="img4" src="public/img/campaña_nav/pan_integral.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_5">
                    <a onclick="c5();"><img class="img_carrusel" id="img5" src="public/img/campaña_nav/biscocho_maby.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_6">
                    <a onclick="c5();"><img class="img_carrusel" id="img6" src="public/img/campaña_nav/tostadas_maby2.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_7">
                    <a onclick="c5();"><img class="img_carrusel" id="img7" src="public/img/campaña_nav/tostadas_maby.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_8">
                    <a onclick="c5();"><img class="img_carrusel" id="img8" src="public/img/campaña_nav/keke_maby.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_9">
                    <a onclick="c5();"><img class="img_carrusel" id="img9" src="public/img/campaña_nav/keke_maby2.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_10">
                    <a onclick="c5();"><img class="img_carrusel" id="img10" src="public/img/prodMega/11.jpg" width="284px" height="255px" /></a>
                </div>

                <div class="imagen" id="imagen_12">
                    <a onclick="c5();"><img class="img_carrusel" id="img12" src="public/img/prodMega/12.jpg" width="284px" height="255px" /></a>
                </div>    

             

            </div>
    </div>

    <!--==================== los mejores productos =========================-->
   <div class="container" style="margin-top:-60px;"><hr>
        <h2 class="" style="color:#cd201f;font-size:32px;font-family:gilroy-bold;">NUESTROS MEJORES PRODUCTOS <img  src="public/img/icono.jpg" alt="logo" ></h2>
    </div>

 
  

 <div id="contenedor">

            <a href="#" class="izquierda_flecha"><img src="public/img/50.png" /></a>
            <a href="#" class="derecha_flecha"><img src="public/img/60.png" /></a>

            <div class="carrusel2">

                <div class="imagen" id="imagen_0">
                    <img class="img_carrusel" id="img0" src="public/img/productos/1.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_1">
                    <img class="img_carrusel" id="img1" src="public/img/productos/2.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_2">
                    <img class="img_carrusel" id="img2" src="public/img/productos/3.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_3">
                    <img class="img_carrusel" id="img3" src="public/img/productos/4.jpg" width="284px" height="255px" />
                </div>

                 

                <div class="imagen" id="imagen_5">
                    <img class="img_carrusel" id="img5" src="public/img/productos/6.png" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_4">
                    <img class="img_carrusel" id="img4" src="public/img/productos/5.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_6">
                    <img class="img_carrusel" id="img6" src="public/img/productos/7.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_7">
                    <img class="img_carrusel" id="img7" src="public/img/productos/8.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_8">
                    <img class="img_carrusel" id="img8" src="public/img/productos/9.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_9">
                    <img class="img_carrusel" id="img9" src="public/img/productos/10.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_10">
                    <img class="img_carrusel" id="img10" src="public/img/productos/11.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen" id="imagen_12">
                    <img class="img_carrusel" id="img12" src="public/img/productos/12.jpg" width="284px" height="255px" />
                </div>             
            </div>
    </div>


  <!--==================== snack =========================-->

		<div class="container" style="margin-top:-60px;"><hr>
		<h2 class="" style="color:#cd201f;font-size:32px;font-family:gilroy-bold;">RICO Y VARIEDAD TODOS LOS DÍAS <img  src="public/img/icono.jpg" alt="logo" ></h2>
		</div>

 		<div id="contenedor1">

            <a href="#" class="izquierda_flecha1"><img src="public/img/espalda1.png" /></a>
            <a href="#" class="derecha_flecha1"><img src="public/img/proximo1.png" /></a>

            <div class="carrusel21">

                <div class="imagen3" id="imagen_0">
                    <img class="img_carrusel1" id="img0" src="public/img/snack/1.jpg" width="284px" height="255px" />

                </div>

                <div class="imagen3" id="imagen_1">
                    <img class="img_carrusel1" id="img1" src="public/img/snack/2.jpg" width="284px" height="255px" />

                </div>

                <div class="imagen3" id="imagen_21">
                    <img class="img_carrusel1" id="img2" src="public/img/snack/3.jpg" width="284px" height="255px" />

                </div>

                <div class="imagen3" id="imagen_3">
                    <img class="img_carrusel1" id="img3" src="public/img/snack/4.jpg" width="284px" height="255px" />

                </div>

                 <div class="imagen3" id="imagen_4">
                    <img class="img_carrusel1" id="img4" src="public/img/snack/5.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_5">
                    <img class="img_carrusel1" id="img5" src="public/img/snack/6.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_6">
                    <img class="img_carrusel1" id="img6" src="public/img/snack/7.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_7">
                    <img class="img_carrusel1" id="img7" src="public/img/snack/8.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_8">
                    <img class="img_carrusel1" id="img8" src="public/img/snack/9.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_9">
                    <img class="img_carrusel1" id="img9" src="public/img/snack/10.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_10">
                    <img class="img_carrusel1" id="img10" src="public/img/snack/11.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_12">
                    <img class="img_carrusel1" id="img12" src="public/img/snack/12.jpg" width="284px" height="255px" />
                </div>
       
            </div>
        </div>

<!--==============================================-->
		<div class="container"><hr>
			<h2 class="" style="color:#cd201f;font-size:32px;font-family:gilroy-bold;">CALIDAD EN BRINDAR EL MEJOR SERVICIO AL CLIENTE <img  src="public/img/icono.jpg" alt="logo" ></h2>
		</div>

 		<div id="contenedor3">

            <a href="#" class="izquierda_flecha3"><img src="public/img/espalda3.png" /></a>
            <a href="#" class="derecha_flecha3"><img src="public/img/proximo3.png" /></a>

            <div class="carrusel3">

                <div class="imagen3" id="imagen_0">
                    <img class="img_carrusel3" id="img0" src="public/img/servicio/1.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_1">
                    <img class="img_carrusel3" id="img1" src="public/img/servicio/2.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_2">
                    <img class="img_carrusel3" id="img2" src="public/img/servicio/3.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_3">
                    <img class="img_carrusel3" id="img3" src="public/img/servicio/4.jpg" width="284px" height="255px" />
                </div>

                 <div class="imagen3" id="imagen_4">
                    <img class="img_carrusel3" id="img4" src="public/img/servicio/12.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_5">
                    <img class="img_carrusel3" id="img5" src="public/img/servicio/11.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_6">
                    <img class="img_carrusel3" id="img6" src="public/img/servicio/4.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_7">
                    <img class="img_carrusel3" id="img7" src="public/img/servicio/3.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_8">
                    <img class="img_carrusel3" id="img8" src="public/img/servicio/1.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_9">
                    <img class="img_carrusel3" id="img9" src="public/img/servicio/10.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_10">
                    <img class="img_carrusel3" id="img10" src="public/img/servicio/11.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen3" id="imagen_12">
                    <img class="img_carrusel3" id="img12" src="public/img/servicio/12.jpg" width="284px" height="255px" />
                </div>
 
            </div>
        </div>

        <!--==============================================-->
		<div class="container" style="margin-top: -50px"><hr>
		<h2 class="" style="color:#cd201f;font-size:32px;font-family:gilroy-bold;">CONOCE NUESTRAS TIENDAS EN LA PROVINCIA DE SULLANA <img  src="public/img/icono.jpg" alt="logo" ></h2>
		</div>

 		<div id="contenedor4">

            <a href="#" class="izquierda_flecha4"><img src="public/img/espalda4.png" /></a>
            <a href="#" class="derecha_flecha4"><img src="public/img/proximo4.png" /></a>

            <div class="carrusel4">

                <div class="imagen4" id="imagen_0">
                    <img class="img_carrusel4" id="img0" src="public/img/tiendas/1.png" width="284px" height="255px" />

                </div>

                <div class="imagen4" id="imagen_1">
                    <img class="img_carrusel4" id="img1" src="public/img/tiendas/2.jpg" width="284px" height="255px" />

                </div>

                <div class="imagen4" id="imagen_2">
                    <img class="img_carrusel4" id="img2" src="public/img/tiendas/6.jpg" width="284px" height="255px" />

                </div>

                <div class="imagen4" id="imagen_3">
                    <img class="img_carrusel4" id="img3" src="public/img/tiendas/4.jpg" width="284px" height="255px" />

                </div>

                 <div class="imagen4" id="imagen_4">
                    <img class="img_carrusel4" id="img4" src="public/img/tiendas/5.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen4" id="imagen_5">
                    <img class="img_carrusel4" id="img5" src="public/img/tiendas/6.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen4" id="imagen_6">
                    <img class="img_carrusel4" id="img6" src="public/img/tiendas/7.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen4" id="imagen_7">
                    <img class="img_carrusel4" id="img7" src="public/img/tiendas/8.jpg" width="284px" height="255px" />
                </div>

                <div class="imagen4" id="imagen_8">
                    <img class="img_carrusel4" id="img8" src="public/img/tiendas/7.jpg" width="284px" height="255px" />
                </div>

             
 
            </div>
        </div>
</div>

<!--========== redes sociales fijo ====================================-->
<div class="social">
            <ul>
                <li >
                    <a id="a1" href="https://web.facebook.com/SupermercadoMegaMarket/?modal=admin_todo_tour" target="_blank1" class="icon-facebook">
                        <img src="public/img/iconos/facebook.png"/>
                     </a>
                </li>

                 <li><a id="a3" href="https://www.youtube.com/channel/UCY1-sCFBG5Ue1OjB1y0LFxw?view_as=subscriber" target="_blank3" class="icon-youtube"><img src="public/img/iconos/youtube.png"/></a></li>

                <li><a id="a2" href="https://twitter.com/?lang=es" target="_blank2" class="icon-twitter"><img src="public/img/iconos/twitter.png"/></a></li> 
            </ul>
</div>

  


<!--===================-->



    
<!--============================ comienso del foorter ======================================-->

<div class="info-container" >
        <div class="info-main">
              <h3 style="text-align: center;font-size:32px;font-family:gilroy-bold;">
                <span style="color: #3E4095;">MEGA</span><span style="color:#ED3237;">MARKET </span>
                <span style="color:red;font-size:30px;" class="fa fa-shopping-cart"> </span>
                <br>
            </h3>

             <span style="font-size: 20px; text-align: center;font-family: Segoe UI Light, Segoe UI, Segoe, Tahoma, Helvetica, Arial, sans-serif;"><b>SOMOS UNA FAMILIA A TU SERVICIO</b></span>

    </div>
            

</div>

<footer>
<div class="footer-container">
    <div class="footer-main">
        <div class="footer-columna">
                    <h3><span class="fa fa-street-view"> <b>Misión</b></span></h3>
                    <p >Líderes comprometidos con nuestra gente,<br> apasionados con nuestros clientes.</p>
                    <h3><span class="fa fa-space-shuttle"> <b>Visión</b></span></h3>
                    <p >Ofrecer productos y servicios de calidad que aporten valor y beneficios a nuestros clientes y que superen sus expectativas, capacitando y motivando a nuestros colaboradores en el compromiso del mejoramiento continuo.</p>

        </div>

        <div class="footer-columna">
                    <h3><span class="fa fa-flag-checkered"> <b>Metas y Objetivos</b></span></h3>
                    <span class=""><p>Estar entre los primeros en nuestra provincia y</p></span>

                    <span class=""><p>Aumentar el Nivel de Servicio.</p></span>
                    <h3><span class="fa fa-handshake-o"> <b>Promoción</b></span></h3>
                    <p>Aproveche los días de Superpromoción en Carnes - Pollos  Frutas y Verduras.</p>



        </div>

        
    </div>
    </div>

    <div class="footer-copy-redes">
        <div class="main-copy-redes">
            <div class="footer-copy">
                &copy; 2018 Copyright - <b>MegaMarketSullana.com </b><span style="color:red;font-size:23px;" class="fa fa-shopping-cart"> </span>  Todos los derechos reservados
                
            </div>

            <div class="footer-redes">
                <a href="https://web.facebook.com/SupermercadoMegaMarket/?modal=admin_todo_tour" id="f" class="fa fa-facebook" target="_blank4"></a>
                <a href="https://www.youtube.com/channel/UCY1-sCFBG5Ue1OjB1y0LFxw?view_as=subscriber" id="t" class="fa fa-twitter" target="_blank5"></a>
                <a href="https://twitter.com/MegaMarket3?lang=es" id="y" class="fa fa-youtube-play" target="_blank6"></a>
            </div>
            
        </div>
    </div>
</footer>


 <!-- comentarios -->
<div class="boton_coment">
   <ul>
     <li>
     <a href="#ventana5"  data-toggle="modal" id="coment"><img src="public/img/iconos/message.png"></a></li>
   </ul>
</div>

 <!-- ***************** comentarios modal ************************************-->
 <div class="modal fade" id="ventana5" role="dialog">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
             <!--header de la ventana-->
            <!--Contenido de la ventana-->
 <div class="modal-body">
               
            <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        <center> <img  src="public/img/logotipos/logo.png" alt="logo" title="Logo 25 Años" style="">
                 <h3>
                    <span style="color: #3E4095;font-family:gilroy-bold;"><strong>Mega</strong></span>
                    <span style="color:#ED3237;font-family:gilroy-bold;"><strong>Market</strong> <span style="color:red;" class="fa fa-shopping-cart"></span></span>
                </h3>
        </center>

                 <?php
                    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
                    $fecha = date("d-m-Y");
                    $fechaActual = strftime("%d de %B de %Y", strtotime($fecha));
                ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3"><h4 style="color: #D61411;font-family:gilroy-bold;"><?php echo $fechaActual?></h4></div>
                <div class="col-md-6"><h4 style="color: #2951B2;font-family:gilroy-bold;">Tu Comentario es Importante para Nosotros</h4></div>
            </div>
        </div><br>

        <div class="fb-comments" data-href="http://localhost/MABYCORP/index.php" data-width="100%" data-numposts="5"></div>
              
                                         
</div>
                                            
            </div>          
        </div>      
    </div>
<!--========================================================-->

<?php include('view/modal/modal.php')?>


        <script type="text/javascript" src="menu_responsivo/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="menu_responsivo/js/js.js"></script>

        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

        <!--script type="text/javascript" src="public/js/jquery-1.12.4.js"></script-->

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 

        <script type="text/javascript" src="public/js/main.js"></script>


  		<script type="text/javascript" src="public/js/jquery.autocomplete.min.js"></script>
  	    <script type="text/javascript" src="public/js/currency-autocomplete.js"></script>

        <script type="text/javascript" src="menu_responsivo/js/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="menu_responsivo/js/currency-autocomplete.js"></script>

        <script type="text/javascript" src="public/js/urls_category.js"></script>




             <?php if($exibirModal === true) :  ?>
                  <script>
                  $(document).ready(function()
                  {
                    
                    $("#modalInicio").modal("show");
                  });
                  </script>
            <?php endif; ?>
      
   
    </body>
</html>

