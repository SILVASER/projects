  $(document).ready(function() {    
           
              $('#buscarProducto2').keypress(function(e){   
               if(e.which == 13){      
                 buscarProducto2();      
               }  
              });    
              
              
  });

 function buscarProducto2(){
             var producto = document.getElementById("buscarProducto2").value;

              categoriaProductos(producto);   
              document.getElementById("buscarProducto2").value=""; 
        }
 /*************************************************************/
 $(document).ready(function() {    
           
              $('#buscarProducto').keypress(function(e){   
               if(e.which == 13){      
                 buscarProducto();      
               }  
              });    
              
              
  });

 function buscarProducto(){
            // var producto = document.getElementById("buscarProducto").value;
            alert("eeeeeeeeeeeeeeeeee");
             /*categoriaProductos(producto);   
              document.getElementById("buscarProducto").value=""; */
        }

/*======================== evaluar si el producto existe ====================================*/

      function categoriaProductos(producto) {

          if (lavavajilla.indexOf(producto) === -1) {
            /*if(desinfectante.indexOf(producto) === -1){
                if(ceras.indexOf(producto) === -1){
                      if(ambientadores.indexOf(producto) === -1){*/
                  
                   var url = "menu/default.php";
                          $.ajax({
                              type: "POST",
                              url: url,
                              data: {producto},
                              success: function (datos) {
                                  $('#contenedor_principal').html(datos);
                              }
                          });
          
                   
            }else{
                  var url = "categorias/utiles_limpieza/ambientadores/ambientadores.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });

            }
                           
           /* }else{
                  var url = "categorias/utiles_limpieza/ceras/ceras.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });

            }
                   
            }else{
                  var url = "categorias/utiles_limpieza/desinfectantes/desinfectantes.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });

            }
               

          } else if (array.indexOf(producto) > -1) {
             var url = "categorias/utiles_limpieza/lava_vajillas/lava_vajillas.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (datos) {
                        $('#contenedor_principal').html(datos);
                    }
                });
          }*/
      }

/*=================== arrays de productos ===================*/


var lavavajilla = ['AYUDIN','LAVAVAJILLA','LAVA','CIF','AYUDIN LIQUIDO','SAPOLIO','LIMPIAR PLATOS','LAVA PLATOS'];
var desinfectante = ['DESINFECTANTE SAPOLIO PINO','DESINFECTANTE SAPOLIO','DESINFECTANTE POETT','DESINFECTANTE PINESOL','DESINFECTANTE PATO','DESINFECTANTE','HARPIC','POET','LEGIAS',,'DESINFECTANTE HARPIC','DESINFECTANTE PATO TANQUE','PINESOL','DESINFECTANTE POET','PRIDE'];
var ceras = ['PASTA','PATO DESINFECTANTE','CERAS','TEKNO','EMPRATRIZ','CERA PARA CARRO','LUSTRA MUEBEBLES','CERA SAPOLIO'´,'CERA  PARA AUTO','CERA ROJA','CERA AMARILLA','CERA VERDDE','CERA LIQUIDA','CERA DE AGUA','CERA AUTOBRILLANTE','CERA EN VALDE'];
var ambientadores = ['AMBIENTADORES','POET','AROMATIZANTES','AMBIENTADOR SAPOLIO','SAPOLIO AMBIENTADOR','AMBIENTADOR POETT','AMBIENTADOR GLADE','LAVANDA','AMBIENTADOR SALPOLIO','SHAMPOO ANTI CASPA',];
var insecticidas=['INSECTICIDAS','RAID','VAIGON','MATA PULGAS','MATA MOSCAS','INSECTICIDAS VAPE','DICLOTRIN','MATA TODO'];
var detergente=['DETERGENTES','DETERGENTE','ACE','ACE MAGIA','ACE OPAL','ACE PATITO','ARIEL','MARSELLA','MAGIA BLANCA','ACE BOLIVAR','ACE PATITO'];
var suavizantes=['SUAVIZANTE','DAUVITEL','SUAVIZANTE AMOR','ACE EN POLVO','SUAVIZANTE PARA LA ROPA'];
var shampoo=['SHAMPOO','SHAMPOO ELVIVE','SHAMPOO PANTENE','PANTENE','CLEAR CONTROL','H&S','HYS','SHAMPOO EGO','SHAMPOO PERPLUS','SHAMPOO SAVITAL','SHAMPOO PANTENE'];

var cremadental=['CREMA DENTAL KOLINOS','KOLINOS','DENTO','TOTAL12','TOTAL 12','AQUAFRESH','DENTITO','KORLINOS MAS CEPILLO'];
var desodorante=['DESODORANTES','REXONA','OLD SPICE','AXE','ETIQUET','DESODORANTE EN BARRA','DESODORANTE ROLLON','DESODORANTE SPICE','DESODORANTE SPRAY','DESODORANTE EN CREMA','FA'];
var tintes=['TINTES','TINTE LOREAL'];
var cuidadomujer=['CUIDADO MUJER','CREMA NIVEA'];
var creapeinar=['CREMA PARA PEINAR','CREMA PARA PEINAR PANTENE','CREMA H&S'];
var acondicionador=['ACONDICIONADORES','ACONDICIONADOR','ACONDICIONADOR PANTENE','ACONDICIONADOR H&S'];
var utilesbebe=['JHONSON','PAÑALES','PAMPERT','JABON PARA BEBE'];

var chifles=['CHIFLES','TIPICO'];
var papitas=['PAPITAS'];
var chocolates=['CHOCOLATES','CHOCOLATE VICIO'];
var camotitos=[];

var papelh=[];
var protectores=[];
var toallash=[];
var pañitoshd=[];

var lechecondensada=[];
var gelatina=[];
var mermelada=[];

var galletas=[];
var caramelos=[];
var wafer=[];
var galletasin=[];

var yogurt=[];
var cereales=[];
var jugos=[];
var rehidratantes=[];
var mayonesa=[];
var mostaza=[];
var fideos=[];
var atun=[];
var salsa=[];
var aceite=[];

var panaderia=[];
var mantequilla=[];
var queso=[];
var lacteos=[];

var escobasrec=[];
var paños=[];
var esponjas=[];
var servilletas=[];
var papeltoalla=[];

var alimentoa=[];
var gaseosas=[];
var rehidratantes=[];
var energizantes=[];

var arroz=[];
var menestras[];
var azucar=[];
var arrozintegral=[];




