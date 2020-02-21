<!-- ***************** ventana modal ************************************-->
<div class="modal fade" id="modalInicio" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
                                               
          <div class="modal-header">
             <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" style="color:#D71414;font-size:28px;font-family:gilroy;">
                   <span style="color:#3E4095;">MEGA</span><span style="color:#D71414;">MARKET</span> - PREMIA TU PREFERENCIA!!
                </h4>
            </div>

            <div class="modal-body">

                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentacion"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">CANASTAS NAVIDEÑAS</a></li>

                        <li role="presentacion" class=""><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">RIFAS, SORTEOS Y PROMOCIONES</a></li>

                        <li role="presentacion" class="active"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">OFERTAS</a></li>

                        <li role="presentacion"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab" role="tab">EVENTOS ESPECIALES</a></li>
                   </ul>   

                  <div class="tab-content">
                    <!--PANEL 1-->
                    <div role="tabpanel" class="tab-pane" id="seccion1">
                        <div class="panel1"><br>
                          <div class="row"> 
                               <?php include('campanas.php') ?>       
                          </div>
                        </div>
                    </div>

                    <!--PANEL 2-->
                    <div role="tabpanel" class="tab-pane" id="seccion2">
                        <div class="panel1"><br>
                            <div class="row"> 
                                <?php include('promociones.php') ?>
                            </div>
                        </div>
                    </div>

                    <!--PANEL 3-->
                    <div role="tabpanel" class="tab-pane  active" id="seccion3">
                        <div class="panel2"> <br><br> 
                                <div class="row"> 
                                    <?php include('ofertas.php') ?>
                                </div>
                        </div>
                    </div>

                      <!--PANEL 4-->
                    <div role="tabpanel" class="tab-pane" id="seccion4">
                        <div class="panel2"> <br><br> 
                                <div class="row"> 
                                    <?php include('eventos.php') ?>
                                </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span  style="color:#red" class="glyphicon glyphicon-remove"></span> Cerrar</button>
                    </div>

                </div>          
            </div>      
        </div>

         </div>          
    </div>      
</div>       