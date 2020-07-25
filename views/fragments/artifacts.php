<div id="content" class="fondo">
    <!-- START MAIN TABLE -->
    <div class="row mb-5 mx-1">
        <div class="col-xl-7 col-lg-12 my-4">
            <div class="card p-1 px-2 carta-modo-osc">
                <h3 class="card-header fondo-titulo text-uppercase text-dark p-3 text-center mb-2 mt-1">
                    <i class="fas fa-mobile-alt fa-lg"></i>
                    Artefactos del servicio <i class="fas fa-ruler"></i> N°
                    <?php echo isset($data[0]->id_servicio_PK) ? $data[0]->id_servicio_PK : "<p></p>No hay artefactos de reparación en el servicio"; ?>
                </h3>
                <input id="hab" type="button" class="btn btn-info" value="Mostrar / Ocultar todas las descripciones">
                <div class="row justify-content-center">
                    <?php foreach($data as $dat): 
                    if ($dat->id_artefacto_PK == $dat->id_artefacto_FK && $dat->estado_artefacto == 1 && 
                    $dat->id_marca_artefacto_PK == $dat->id_marca_artefacto_FK && 
                    $dat->id_categoria_artefacto_PK == $dat->id_categoria_artefacto_FK) {?>
                    <div class="div-cartas col-3">
                        <div class="card fondo-titulo border border-dark">
                            <div class="card-body">
                                <h5 class="card-title text-warning">
                                    <?php echo $dat->modelo; 
    
                            if($dat->estado_ca == 1){
    
                            ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $dat->nombre_categoria_artefacto.' ';} echo ($dat->estado_ma == 1) ? $dat->nombre_marca : '' ?>
                                </p>
                                <div class="mostrarOcultar elemento">
                                    <p class="text-muted mt-1">
                                        <?php echo $dat->caracteristicas; ?>
                                    </p>
                                </div>
                                <input type="button" class="btn btn-outline-success opcion" value="Mostrar">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>