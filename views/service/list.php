<?php 
	date_default_timezone_set("America/Bogota");
	setlocale(LC_TIME, 'spanish.UTF-8');
// setlocale(LC_TIME, "es_CO");
// // Unix
// setlocale(LC_TIME, 'es_ES.UTF-8');
// // En windows
// setlocale(LC_TIME, 'spanish');
//Agrego esp_esp ya que es la nomenclatura que usan los servidores basados en Windows.
// setlocale(LC_TIME, 'es_ES', 'esp_esp');
?>
<!-- START CONTENT DASHBOARD -->
<div id="content" class="fondo">
    <!-- START MAIN TABLE -->
    <div class="row mb-5 mx-1">
        <div class="col-xl-7 col-lg-12 my-3">
            <div class="card p-1 px-2 carta-modo-osc">
                <h5 class="shadow card-header fondo-titulo text-uppercase text-dark pt-4 text-center mb-2 mt-1">
                    <i class="fas fa-clipboard-list"></i>
                    Servicios <p></p>
                </h5>
                <a href="?controller=service&method=add"
                    class="btn btn-success buttonAdd mb-3 text-center mt-1 align-self-center" data-toggle="modal"
                    data-target="#myModalLeft">
                    <i class="fas fa-folder-plus fa-2x"></i>
                </a>
                <table class="shadow table listado border-dark border-left 
                                table-bordered table-active 
                                 table-hover table-sm table-dark 
                                 datatable">
                    <thead class="title-medium text-white cabeza-table">
                        <tr>
                            <th scope="col" class="head-hover">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-ruler fa-xs"></i>
                                    <small>
                            </th>
                            <th scope="col" class="head-hover tcliente">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-user-circle"></i> Cliente
                                    <small>
                            </th>
                            <th scope="col" class="head-hover testado">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-shield-alt fa-xs"></i> Estado
                                    <small>
                            </th>
                            <th scope="col" class="head-hover tpeticion">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-calendar-alt fa-xs"></i> Petición
                                    <small>
                            </th>
                            <th scope="col" class="head-hover ttotal">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-dollar-sign fa-xs"></i>
                                    Total<small>
                            </th>
                            <th scope="col" class="head-hover ttotal">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-info-circle fa-xs"></i>
                                    Detalles
                                    <small>
                            </th>
                            <th scope="col" class="head-hover">
                                <small class="font-weight-bold cabeza-table">
                                    <i class="fas fa-file-signature fa-xs"></i> Acciones<small>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="cuerpo-table ">
                        <?php $cont = 0; //echo count($services);?>
                        <?php foreach ($services as $service) : ?>
                        <?php $cont++;?>
                        <tr class="shadow-sm">
                            <td class="align-middle text-wrap texto-negro text-center"
                                <?= (!count($services) == $cont) ? "style='background:#D4F500 !important'": "style='background:#D4F500'"?>>
                                <span class="d-block h4">
                                    <?php echo $service->id_servicio_PK; ?>
                                </span>
                            </td>
                            <td class="align-middle text-wrap text-center texto-negro tcliente">
                                <span class="d-block">
                                    <h6 class="card-title text h6">
                                        <?php if($client->foto_cliente == null){ ?>

                                        <img src="assets/img/clients/sinfoto.png" class="rounded-circle img-perfil"
                                            alt="foto del cliente :)" />

                                        <?php }elseif ($client->foto_cliente != null) { ?>

                                        <img src="<?php echo $client->foto_cliente; ?>"
                                            class="rounded-circle img-perfil" alt="foto del cliente :)" />

                                        <?php } ?>

                                        <?php echo $service->nombre_cliente; ?>
                                    </h6>
                                    <p class="card-text text-muted text-capitalize">
                                        <?php echo $service->numero_documento ?>
                                    </p>
                                </span>
                            </td>
                            <td class="align-middle text-wrap text-center texto-negro testado">
                                <span class="d-block">
                                    <h6 class="card-title text-uppercase h5">
                                        <?php 

                                echo $service->nombre_estado

                               ?>
                                    </h6>
                                </span>
                            </td>
                            <td class="align-middle text-wrap text-center texto-negro tpeticion">
                                <span class="d-block">
                                    <h6 class="card-title text h6">
                                        <?php 
                                // FORMATEAR FECHA
                              	// $date = new DateTime($service->fecha_peticion);

                              	// setlocale(LC_TIME, "es_CO");
                              	// echo $date->format('l-j-F-Y');
								// 2.                              	
                              	// $fecha = $service->fecha_peticion;

                              	// $fecha_pe = str_replace('-', '/', strftime('%l/%j/%F/%Y',strtotime($fecha)));

                              	// echo $fecha_pe;
                              	// 3.intento
                              	// $fecha = $_REQUEST['fecha_peticion'];
                              	// $fecha = $_REQUEST[$service->fecha_peticion];
                              	// $fecha = strtoupper(strftime("%B", mktime(0, 0, 0, $fecha)));
                              	// 


                                  //METODO DEFINITIVO
                                //   FECHA
                              	$fecha = $service->fecha_peticion;
                                echo strftime('%A %d de %B del %Y',strtotime($fecha));
                               ?>
                                        <h6 class="card-title text h5">
                                            <!-- HORA -->
                                            <?php 
                                            
                              	$time = new DateTime($service->hora_peticion);
                              	echo $time->format('g:ia');

                                ?>
                                        </h6>
                                    </h6>
                                </span>
                            </td>
                            <td class="align-middle text-wrap text-center texto-negro ttotal">
                                <span class="d-block">
                                    <h6 class="card-title text h6">
                                        <?php echo number_format($service->costo_servicio); ?>
                                    </h6>
                                </span>
                            </td>
                            <td class="align-middle text-wrap text-center p-2 texto-negro">
                                <a href="?controller=service&method=listDetails&id_servicio_PK=
                                <?php echo $service->id_servicio_PK ?>" class="btnDetail btn btn-info btn-sm"
                                    title="Mas info del servicio"><i class="fas fa-info-circle fa-2x"></i>
                                </a>
                            </td>

                            <!-- Artefactos -->
                            <!-- <td class="align-middle text-wrap text-center p-2 texto-negro">
                                <a href="?controller=service&method=listArtifacts&id_servicio_PK=
                                <?php echo $service->id_servicio_PK ?>" class="btn btn-outline-success btn-sm"
                                    title="Artefactos" id="btnArtifacts">Artefactos
                                </a>
                            </td> -->

                            <!-- Citaciones -->
                            <!-- <td class="align-middle text-wrap text-center p-2 texto-negro">
                                <a href="?controller=service&method=listCitations&id_servicio_PK=
                                <?php echo $service->id_servicio_PK ?>" class="btn btn-outline-warning btn-sm"
                                    title="Citaciones" id="btnCitations">Citaciones
                                </a>
                            </td> -->

                            <!-- Categorías -->
                            <!-- <td class="align-middle text-wrap text-center p-2 texto-negro">
                                <a href="?controller=service&method=listScategories&id_servicio_PK=
                                <?php echo $service->id_servicio_PK ?>" class="btn btn-outline-danger btn-sm"
                                    title="Categorías del servicio" id="btnScategories">Categorías
                                </a>
                            </td> -->

                            <!-- Técnicos -->
                            <!-- <td class="align-middle text-wrap text-center p-2 texto-negro">
                                <a href="?controller=service&method=listTechnicians&id_servicio_PK=
                                <?php echo $service->id_servicio_PK ?>" class="btn btn-outline-info btn-sm"
                                    title="Técnicos asignados" id="btnTechnicians">Técnicos
                                </a>
                            </td> -->
                            <!-- ----------------acciones------------------------- -->
                            <td class="align-middle text-wrap text-center p-2 texto-negro">
                                <?php
								if ($service->id_estado_servicio_FK<=3) {
							 ?>
                                <a href="?controller=service&method=edit&id_servicio_PK=
							<?php echo $service->id_servicio_PK ?>" class="btn btn-sm btn-warning buttonEditar">
                                    <i class="fas fa-pen-alt fa-lg p-2"></i>
                                </a>
                                <div class="dropdown-divider"></div>

                                <div class="dropdown">
                                    <button class="btn btn-sm btn-dark dropdown-toggle button-inactive" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fas fa-power-off fa-lg p-2"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item btnFinalizar" href="?controller=service&method=updateserviceStatus&id_servicio_PK=<?php echo $service->id_servicio_PK ?>&id_estado_servicio_FK=4">
                                            <i class="fas fa-eject fa-xs"></i>
                                            Finalizar
                                        </a>
                                        <a class="dropdown-item btnCancelar" href="?controller=service&method=updateserviceStatus&id_servicio_PK=<?php echo $service->id_servicio_PK ?>&id_estado_servicio_FK=5">
                                            <i class="fas fa-window-close fa-xs"></i> Cancelar
                                        </a>
                                    </div>
                                </div>
                                <p></p>
                                <?php } ?>
                                <?php if ($service->id_estado_servicio_FK <=5 && $service->id_estado_servicio_FK >3 ) { ?>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm dropdown-toggle button-list-active"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-plug fa-lg p-2"></i> Activar
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                            href="?controller=service&method=updateserviceStatus&id_servicio_PK=<?php echo $service->id_servicio_PK ?>&id_estado_servicio_FK=2">
                                            <i class="fas fa-screwdriver fa-xs"></i> En proceso
                                        </a>
                                        <a class="dropdown-item"
                                            href="?controller=service&method=updateserviceStatus&id_servicio_PK=<?php echo $service->id_servicio_PK ?>&id_estado_servicio_FK=1">
                                            <i class="fas fa-toolbox fa-xs"></i> Por recoger
                                        </a>
                                        <a class="dropdown-item"
                                            href="?controller=service&method=updateserviceStatus&id_servicio_PK=<?php echo $service->id_servicio_PK ?>&id_estado_servicio_FK=3">
                                            <i class="fas fa-pause-circle fa-xs"></i> En espera
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                <p></p>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <h6 class="border-bottom p-2 text-warning d-none">
                    <?php echo "Fecha de última modificación del fichero fuente: '" . strftime('%A %d de %B del %Y',strtotime(date ("F d Y H:i:s.", getlastmod()))) . "'"; ?>
                </h6>
            </div>
        </div>
    </div>

    <script src="assets/js/mejoras/listJs.js"></script>
    <!-- <script src="assets/js/mejoras/activejs.js"></script> -->
