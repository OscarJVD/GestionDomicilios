
  <!-- START CONTENT DASHBOARD -->
  	<!-- START INITIAL STATISTICS -->
       <div id="content" class="container-fluid">
        <!-- <section class="py-3 list-espacio">
           Estadisticas de Solicitudes de Servicios 
        <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card mb-5 shadow-sm border-0 shadow-hover">
                <div class="card-body d-flex">
                  <div>
                    <div class="circle rounded-circle bg-primary align-self-center d-flex mr-3">
                      <i class="icon ion-md-trending-up text-primary align-self-center mx-auto lead"></i>
                    </div>
                  </div> -->
            <!-- <?php //foreach ($clients as $client) : ?> -->
                  <!-- <div class="align-self-center"> -->
                    <!-- <h5 class="mb-0"><?php //echo $client->num_venta_total; ?></h5> -->
                    <!-- <small class="text-muted">Ventas totales</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card mb-5 shadow-sm border-0 shadow-hover">
                <div class="card-body d-flex">
                  <div>
                    <div class="circle rounded-circle bg-primary align-self-center d-flex mr-3">
                      <i class="icon ion-md-stats text-primary align-self-center mx-auto lead"></i>
                    </div>
                  </div>
                  <div class="align-self-center"> -->
                    <!-- <h5 class="mb-0"><?php //echo $client->num_random; ?></h5> --><!-- 
                    <small class="text-muted">Visitas al sitio</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card mb-5 shadow-sm border-0 shadow-hover">
                <div class="card-body d-flex">
                  <div>
                    <div class="circle rounded-circle bg-primary align-self-center d-flex mr-3">
                      <i class="icon ion-md-people text-primary align-self-center mx-auto lead"></i>
                    </div>
                  </div>
                  <div class="align-self-center"> -->
                    <!-- <h5 class="mb-0"><?php //echo $client->num_usuarios; ?></h5> -->
                    <!-- <small class="text-muted">Usuarios nuevos</small>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-xl-3 col-lg-6">
              <div class="card mb-5 shadow-sm border-0 shadow-hover">
                <div class="card-body d-flex">
                  <div>
                    <div class="circle rounded-circle bg-primary align-self-center d-flex mr-3">
                      <i class="icon ion-md-cash text-primary align-self-center mx-auto lead"></i>
                    </div>
                  </div>
                  <div class="align-self-center">
                   <h5 class="mb-0"><?php //echo $client->ingresos; ?></h5> -->
                    <!-- <small class="text-muted">Ingresos</small> -->
                 <!--  </div>
                </div>
              </div>
            </div>
          </div>  -->
          <!-- <?php //endforeach ?> -->

  	<!-- END INITIAL STATISTICS -->

          

	<!-- START MAIN TABLE -->
    <div class="row mb-5">
        <div class="col-xl-7 col-lg-12 my-3">
            <div class="card cartas p-1 px-2">
            	<h5 class="card-header text-uppercase text-light p-4 text-center mb-2 mt-1">Listado de Clientes</h5>
              <a href="?controller=client&method=add" class="btn btn-success button mb-3 text-center mt-1 align-self-center" data-toggle="modal" data-target="#myModalLeft">
                <i class="fas fa-folder-plus fa-2x"></i> Nuevo
              </a>
	                <table class="table listado table-bordered table-active table-responsive table-hover table-light" id="datatable">
	                  <thead class="title-medium text-white cabeza-table">
	                    <tr>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">#<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Acciones<small>
	                      </th>
                        <th scope="col" class="head-hover">
                          <small class="font-weight-bold cabeza-table">Foto<small>
                        </th>          
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Correo<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Barrio<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Tipo ID<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">N° ID<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Nombre<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Teléfono<small>
	                      </th>
	                      <th scope="col" class="head-hover">
	                      	<small class="font-weight-bold cabeza-table">Dirección<small>
	                      </th>
	                    </tr>                    
	                  </thead>
	                  <tbody class="cuerpo-table">
	                  	<?php foreach ($clients as $client) : ?>
	                    <tr class="shadow-sm">
	                      <td>
	                      	<span class="d-block">
	                      		<?php echo $client->id_cliente_PK; ?>
							</span>
	                      </td>
	                      <td class="align-middle">
							
              <?php if ($client->id_estado_FK==6) {

              ?>
              <a href="?controller=rental&method=edit&id=<?php echo $rental->id ?>" class="btn btn-warning buttonEditar">
                <i class="fas fa-pen-alt"></i> Editar
              </a>
              <div class="dropdown-divider"></div>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-toggle-off"></i> Inactivar
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Finalizar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Cancelar</a>
                </div>
                </div>
                <p></p>

              <?php }else if($client->id_estado_FK==7){                
              ?> 
              <a href="?controller=rental&method=updateRentalStatus&id=<?php echo $rental->id ?>" class="btn btn-success" class="btn btn-danger">
                <i class="fas fa-toggle-on"></i> Activar     
              </a>
              <?php }else{ echo " "; } ?>
							
	                        </span>
	                      </td>

	                      <td>
                          <span class="d-block">
                            <h6 class="card-title text">
                              <?php if($client->foto_cliente == null){ ?>
                              <img src="assets/img/clients/sinfoto.png" class="rounded-circle img-perfil" alt="foto del cliente :)"/>
                              <?php }elseif ($client->foto_cliente != null) { ?> 
                              <img src="<?php echo $client->foto_cliente; ?> " class="rounded-circle img-perfil" alt="foto del cliente :)"/>
                              <?php } ?> 
                            </h6>
                          </span>
                        </td>
	                      <td>
	                      <span class="d-block">
	                      	<h6 class="card-title text">
                              <?php echo $client->correo_electronico ?>                                     
                    		</h6>	
	                      </span>
	                      </td>
	                      <td>
	                      	<span class="d-block">
		                      	<h6 class="card-title text">
                              
	                              <?php echo $client->n_barrio; ?>                                
	                            </h6>
	                      	</span>
	                      </td>
	                      <td>
	                      	<span class="d-block">
		                      	<h6 class="card-title text">
                              
	                              <?php echo $client->t_documento; ?>
	                            </h6>
	                      	</span>
	                      </td>
	                      <td>
	                      	<span class="d-block">
	                      		<h6 class="card-title text">
                              
                              <?php echo $client->numero_documento; ?>
                                
                            </h6>	                      		
	                      	</span>
	                      </td>
	                      <td>
	                      	<span class="d-block">
	                      		<h6 class="card-title text">
                              
                              <?php echo $client->nombre_cliente; ?>
                                
                            </h6>
	                      	</span>
	                      </td>
	                      <td>
	                      	<span class="d-block">
	                      		<h6 class="card-title text">
                              
                              <?php echo $client->telefono; ?>
                                
                            </h6>
	                      	</span>
	                      </td>
	                      <td>
	                      	<span class="d-block">
	                      		<h6 class="card-title text">
                              
                              <?php echo $client->direccion_residencia; ?>
                                
                            </h6>
	                      	</span>
	                      </td>
	                    </tr>
	                <?php endforeach ?>
	                  </tbody>	                 
	                </table>
	              </div>
              </div>
            </div>
	<!-- END MAIN TABLE -->




           

    <!-- START TABLE COMPLMENTS -->
            <!-- <div class="col-xl-5 col-lg-12">
              <div class="card mb-5 shadow-sm border-0 shadow-hover">
                <div class="card-header bg-light border-0 pt-3 pb-0">
                  <h6 class="mb-0">Mensajes</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex border-bottom py-3">
                    <div class="mr-3">
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div>
                      <div class="d-flex">
                        <p class="mb-0">Cristian Palacios</p>
                        <small class="text-muted ml-auto">Hace 2 horas</small>
                      </div>
                      <small class="text-muted">Me podrías enviar la cotización de la aplicación.</small>
                    </div>
                  </div>

                  <div class="d-flex border-bottom py-3">
                    <div class="mr-3">
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div>
                      <div class="d-flex">
                        <p class="mb-0">Adriana Arenas</p>
                        <small class="text-muted ml-auto">Hace 2 horas</small>
                      </div>
                      <small class="text-muted">Hola, la junto de hoy es a las 10 en la oficina 2.</small>
                    </div>
                  </div>

                  <div class="text-center pt-3">
                    <a href=""><small>Ver todos los mensajes</small></a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
    <!-- END TABLE COMPLEMENTS -->


    <!-- START COMPLEMENTS -->
          <!-- <div class="row">
            <div class="col-lg-4">
              <div class="card d-inline-block border-0 shadow-sm shadow-hover w-100 mr-3 mb-5">
                <div class="card-body">
                  <h5 class="mb-0">Presentación de producto</h5>
                  <small class="d-inline-block text-muted mb-2">12:30 - 15:45</small>
                  <div class="mb-4">
                    <span class="badge badge-primary text-primary mr-1">Mercadotecnia</span> <span
                      class="badge badge-primary text-primary">Directivos</span>
                  </div>
                  <div class="d-flex">
                    <div>
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div class="d-flex ml-auto">
                      <span class="badge badge-secondary align-self-center">Asistir <i
                          class="icon ion-md-checkmark-circle ml-2"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
    <!-- END 1/3 COMPLEMENTS -->

            <!-- <div class="col-lg-4">
              <div class="card d-inline-block border-0 shadow-sm shadow-hover w-100 mr-3 mb-5">
                <div class="card-body">
                  <h5 class="mb-0">Junta de resultados</h5>
                  <small class="d-inline-block text-muted mb-2">12:30 - 15:45</small>
                  <div class="mb-4">
                    <span class="badge badge-primary text-primary mr-1">Ventas</span> <span
                      class="badge badge-primary text-primary">Mercadotecnia</span>
                  </div>
                  <div class="d-flex">
                    <div>
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div class="d-flex ml-auto">
                      <span class="badge badge-secondary align-self-center">Asistir <i
                          class="icon ion-md-checkmark-circle ml-2"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
        <!-- END 2/3 COMPLEMENTS -->


            <!-- <div class="col-lg-4">
              <div class="card d-inline-block border-0 shadow-sm shadow-hover w-100 mr-3 mb-5">
                <div class="card-body">
                  <h5 class="mb-0">Reunión con mercadotecnia</h5>
                  <small class="d-inline-block text-muted mb-2">12:30 - 15:45</small>
                  <div class="mb-4">
                    <span class="badge badge-primary text-primary mr-1">Mercadotecnia</span> <span
                      class="badge badge-primary text-primary">Creativo</span>
                  </div>
                  <div class="d-flex">
                    <div>
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div class="d-flex ml-auto">
                      <span class="badge badge-secondary align-self-center">Asistir <i
                          class="icon ion-md-checkmark-circle ml-2"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
  <!-- END 3/3 COMPLEMENTS -->

        </section>  

  <!-- END CONTENT DASHBOARD -->


