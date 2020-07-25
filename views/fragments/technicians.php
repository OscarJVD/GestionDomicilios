<div id="content" class="fondo">
    <!-- START MAIN TABLE -->
    <div class="row mb-5 mx-1">
        <div class="col-xl-7 col-lg-12 my-4">
            <div class="card p-1 px-2 carta-modo-osc">
                <h3 class="card-header fondo-titulo text-uppercase text-dark p-3 text-center mb-2 mt-1">
                    <i class="fas fa-laugh-beam fa-lg"></i>
                    Técnicos asignados al servicio <i class="fas fa-ruler"></i> N°
                    <?php echo isset($data[0]->id_servicio_PK) ? $data[0]->id_servicio_PK : "<p></p>No se han definido técnicos en el servicio" ?>
                </h3>
                <div class="row justify-content-center">
                    <?php foreach($data as $dat): 
                    if ($dat->id_tecnico_PK == $dat->id_tecnico_asignado_FK &&
                        $dat->id_rol_PK == $dat->id_rol_FK &&  
                        $dat->id_tipo_documento_PK == $dat->id_tipo_documento_FK && 
                        $dat->id_usuario_PK == $dat->id_usuario_FK &&
                        $dat->estado_usuario == 1) {?>
                    <div class="div-cartas col-3">
                        <div class="card h-100 fondo-titulo border border-info">
                            <div class="card-body d-flex border border-info">
                                <div class="card text-white text-center border border-danger">
                                    <div class="p-2">
                                        <?php if($dat->foto_tecnico == null){ ?>
                                            <img src="assets/img/technicians/sinfoto.png" width="20" height="180" class="card-img-top m-1 rounded-circle border border-info"
                                                alt="Foto Técnico" />
                                        <?php }elseif($dat->foto_tecnico != null){ ?>
                                            <img src="<?php echo $dat->foto_tecnico; ?>" width="20" height="180" class="card-img-top m-1 rounded-circle border border-info" alt="Foto Técnico">
                                        <?php } ?>
                                        <h5 class="card-title bg-warning text-light p-2 m-1 rounded-bottom"><?php echo $dat->nombre_tecnico; ?></h5>
                                        <p class="card-subtitle mb-2 text-dark m-1"><?php echo ($dat->td_estado) ? $dat->nombre_td : '' ?></p>
                                        <p class="card-subtitle mb-2 text-dark m-1"><?php echo $dat->numero_documento ?></p>
                                        <p class="card-text m-1 text-dark"><?php echo ($dat->estado_rol) ? $dat->nombre_rol : '' ?></p>
                                        <div class="col-12 m-1 p-1 bg-danger rounded-bottom">
                                            <a href="mailto:
                                                <?php echo ($dat->estado_usuario) ? $dat->correo : '' ?>" 
                                                class="card-link text-light"><?php echo ($dat->estado_usuario) ? $dat->correo : '' ?>
                                            </a>
                                        </div>
                                        <a href="tel:<?php echo $dat->telefono; ?>" 
                                            class="btn btn-outline-success p-1 btn-sm m-1">
                                            <i class="fas fa-phone-alt"></i> <?php echo $dat->telefono; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>