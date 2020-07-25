<div id="content" class="fondo">
    <!-- START MAIN TABLE -->
    <div class="row mb-5 mx-1">
        <div class="col-xl-7 col-lg-12 my-4">
            <div class="card p-1 px-2 carta-modo-osc">
                <h3 class="card-header fondo-titulo text-uppercase text-dark p-3 text-center mb-2 mt-1">
                    <i class="fas fa-calendar-check fa-lg"></i>
                    Citaciones del servicio <i class="fas fa-ruler"></i> N°
                    <?php echo isset($data[0]->id_servicio_PK) ? $data[0]->id_servicio_PK : "<p></p>No has incluido citaciones para el servicio"; ?>
                </h3>
                <div class="row justify-content-center">
                    <?php foreach($data as $dat): 
                    if ($dat->id_citacion_PK == $dat->id_citacion_FK && $dat->estado_citacion == 1){?>
                    <div class="div-cartas col-3 ">
                        <div class="card h-100 fondo-titulo border border-dark">
                            <div class="card-body">
                                <h5 class="card-title text-warning">
                                    <?php echo $dat->direccion_lugar;?>
                                </h5>
                                <p class="card-text">
                                    <?php 
                                        $date = $dat->fecha_encuentro;
                                        echo strftime('%A %d de %B del %Y',strtotime($date)); 
                                    ?>
                                </p>
                                <p class="card-text">
                                    <?php 
                                        $time = new DateTime($dat->hora_encuentro);
                                        echo $time->format('g:ia');
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>