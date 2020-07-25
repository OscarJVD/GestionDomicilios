<div id="content" class="fondo">
    <!-- START MAIN TABLE -->
    <div class="row mb-5 mx-1">
        <div class="col-xl-7 col-lg-12 my-4">
            <div class="card p-1 px-2 carta-modo-osc">
                <h3 class="card-header fondo-titulo text-uppercase text-dark p-3 text-center mb-2 mt-1">
                    <i class="fas fa-info-circle fa-lg"></i> Detalles del servicio N°
                    <?php echo isset($id_servicio_PK) ? $id_servicio_PK : '' ?>
                </h3>
                <div class="row form-group col-md-12">
                    <div
                        class="border-dark border-right col-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <label class="border-right border-light col-7 mt-2 align-middle p-1 rounded-left text-light bg-dark pl-3">Artefactos:
                        </label>
                        <a href="?controller=service&method=listArtifacts&id_servicio_PK=<?php echo $id_servicio_PK ?>"
                            class="border border-light border-left-0 btn btn-success btn-sm col-5 hidden-xs">
                            <div class="pt-2">
                                <i class="fas fa-eye"></i> Ver
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <label class="border-right border-light col-7 mt-2 align-middle p-1 rounded-left text-light bg-dark pl-3">Citaciones:
                        </label>
                        <a href="?controller=service&method=listCitations&id_servicio_PK=<?php echo $id_servicio_PK ?>"
                            class="border border-light border-left-0 btn btn-warning btn-sm col-5 hidden-xs">
                            <div class="pt-2">
                                <i class="fas fa-eye"></i> Ver
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row form-group col-md-12 ">
                    <div
                        class="border-dark border-right col-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <label class="border-right border-light col-7 mt-2 align-middle p-1 rounded-left text-light bg-dark pl-3">Reparaciones:
                        </label>
                        <a href="?controller=service&method=listScategories&id_servicio_PK=<?php echo $id_servicio_PK ?>"
                            class="border border-light border-left-0 btn btn-danger btn-sm col-5 hidden-xs">
                            <div class="pt-2">
                                <i class="fas fa-eye"></i> Ver
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <label class="border-right border-light col-7 mt-2 align-middle p-1 rounded-left text-light bg-dark pl-3">Técnicos:
                        </label>
                        <a href="?controller=service&method=listTechnicians&id_servicio_PK=<?php echo $id_servicio_PK ?>"
                            class="border border-light border-left-0 btn btn-info btn-sm col-5 hidden-xs">
                            <div class="pt-2">
                                <i class="fas fa-eye"></i> Ver
                            </div>
                        </a>
                    </div>
                </div>

                <?php foreach ($data as $detail) : ?>
                <?php if($detail->id_servicio_FK == $id_servicio_PK){ ?>

                <div class="row form-group col-12 col-md-12 justify-content-center">
                    <div class="shadow-sm border col-5 col-lg-5 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <strong class="col-7 align-middle rounded-left text-dark  border-warning border-right">Diagnóstico:
                        </strong>
                        <p class="col-5">
                            <?php if($detail->diagnostico != null || $detail->diagnostico != ''){ 
                                
                                echo $detail->diagnostico;
                            }else{
                                echo "<span 
                                    class='text-danger'>No se encontro diagnóstico</span>";
                            }
                                ?>

                        </p>
                    </div>
                    <div class="shadow-sm border ml-3 col-5 col-lg-5 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <strong class="col-7 align-middle rounded-left text-dark border-warning border-right">Descripción del cliente:
                        </strong>
                        <p class="col-5" title="Testimonio del cliente">
                            <?php 
                            if($detail->descripcion_cliente != null || $detail->descripcion_cliente != ''){ 
                                
                                echo $detail->descripcion_cliente;
                            }else{
                                echo "<span 
                                    class='text-danger'>
                                    No se encontro descripción del cliente</span>";
                            }

                            ?>
                        </p>
                    </div>

                </div>
                <div class="row form-group col-md-12 justify-content-center col-12">
                    <div class="shadow-sm border col-5 col-lg-5 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <strong class="col-7 align-middle rounded-left text-dark  border-warning border-right">Fecha de inicio:
                        </strong>
                        <p class="col-5">
                            <?php if($detail->fecha_inicio != null || $detail->fecha_inicio != ''){

                                $fecha = $detail->fecha_inicio;
                                echo strftime('%A %d de %B del %Y',strtotime($fecha))."\n";

                                echo '<span class="h6">';
                                $time = new DateTime($detail->fecha_inicio);
                              	echo $time->format('g:ia').'</span>';

                            }else{
                                echo "<span 
                                    class='text-danger'>No se encontró fecha de inicio</span>";
                            }
                                ?>

                        </p>
                    </div>
                    <div class="shadow-sm border col-5 ml-3 col-lg-5 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <strong class="col-7 align-middle rounded-left text-dark  border-warning border-right">Costo por revisión:
                        </strong>
                        <p class="col-5">
                            <?php if($detail->costo_revision != null || $detail->costo_revision != ''){

                                echo $detail->costo_revision;

                            }else{
                                echo "<span 
                                    class='text-danger'>No se encontro costo por revisión</span>";
                            }
                                ?>

                        </p>
                    </div>
                </div>
                <div class="row form-group col-md-12 justify-content-center">
                    
                    <div class="shadow-sm border col-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center align-middle">
                        <strong class="col-7 align-middle rounded-left border-warning border-right">Categorías de arreglo:
                        </strong>
                        <p class="col-5">
                            <?php if($detail->is_software != false){

                                echo '<span class="textR">S</span>';

                            }else{
                                echo "<span 
                                    class='text-danger'></span>";
                            }

                            if($detail->is_hardware != false){
                                echo '<span class="textR2 ">H</span>';
                            }else{
                                echo "<span 
                                    class='text-danger'></span>";
                            }
                                ?>

                        </p>
                    </div>
                </div>
                <?php } endforeach ?>
            </div>
        </div>
    </div>
</div>