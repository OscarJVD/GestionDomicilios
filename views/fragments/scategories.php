<div id="content" class="fondo">
    <!-- START MAIN TABLE -->
    <div class="row mb-5 mx-1">
        <div class="col-xl-7 col-lg-12 my-4">
            <div class="card p-1 px-2 carta-modo-osc">
                <h3 class="card-header fondo-titulo text-uppercase text-dark p-3 text-center mb-2 mt-1">
                    <i class="fas fa-wrench fa-lg"></i>
                    Reparaciones del servicio <i class="fas fa-ruler"></i> N°
                        <?php echo isset($data[0]->id_servicio_PK) ? $data[0]->id_servicio_PK : "<p></p>No has categorizado el servicio"; ?>
                </h3>
                <div class="row justify-content-center">
                    <?php foreach($data as $dat): 
                        if ($dat->id_categoria_servicio_PK == $dat->id_categoria_servicio_FK && $dat->estado_cs == 1) {?>
                    <div class="div-cartas col-3">
                        <div class="card h-100 fondo-titulo border border-dark">
                            <div class="card-body">
                                <h5 class="card-title text-warning">
                                    <?php echo $dat->nombre_cs;?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>