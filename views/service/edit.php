<section class="">
    <div id="content" class="container-fluid">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 col-sm-5 col-lg-10 my-3 w-100">
                <div class="card cartas-edit p-1 px-2">
                    <h5 class="card-header text-uppercase p-3 text-center my-1">
                        <i class="fas fa-clipboard-list"></i>
                        Renovación del Servicio
                    </h5>

                    <!-- <form action="?controller=service&method=update" method="post"> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-12 col-md-12">
                                <div class="form-group row justify-content-center">
                                    <input type="hidden" class="d-none" 
                                    id="id_servicio_PK" value="<?php echo $data[0]->id_servicio_PK ?>">
                                    <input type="hidden" class="d-none" 
                                    id="id_revision_servicio_PK" value="<?php echo $details[0]->id_revision_servicio_PK ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-10 col-md-10 text-center">
                                <label class="col-form-label">
                                    <u><strong>Cliente:</strong></u>
                                </label>
                                <div class="form-group">
                                    <select id="id_cliente_FK" class="form-control selector2 controlBuscador" required="">
                                        <option value="">Buscar Cliente</option>

                                        <?php
                                        foreach ($clients as $client) {
                                            if ($client->id_cliente_PK == $data[0]->id_cliente_FK) {
                                        ?>

                                                <option selected value="<?php echo $client->id_cliente_PK ?>">
                                                    <?php echo $client->id_cliente_PK . ' -' ?>

                                                    <?php echo $client->nombre_cliente ?>

                                                </option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?php echo $client->id_cliente_PK ?>">
                                                    <?php echo $client->id_cliente_PK . ' -' ?>
                                                    <?php echo $client->nombre_cliente ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center d-flex border-secondary border-top">
                        <div class="row">
                            <div class="col-sm-8 col-12 col-md-8">
                                <label class="col-form-label">
                                    <u>
                                        <strong title="Este es el dispositivo o artefacto a reparar">Añadir
                                            artefacto:</strong>
                                    </u>
                                </label>
                                <div class="form-group">
                                    <select id="artifact" class="form-control col-12 selector2 controlBuscador" required="">
                                        <option value="" aria-readonly="">Buscar artefacto</option>
                                        <?php foreach ($artifacts as $artifact) { ?>

                                            <option selected value="<?php echo $artifact->id_artefacto_PK ?>">
                                                <?php echo '#' . $artifact->id_artefacto_PK . ' -' ?>
                                                <?php echo $artifact->modelo ?>
                                            </option>

                                        <?php } ?>
                                    </select>
                                    <div class="col-md-2 mt-2">
                                        <a href="#" id="addArtifact" class="btn btn-info rounded-circle border p-2"><i class="fas fa-plus fa-sm p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (count($detailsArt) > 0) {
                        $arrArtifactService = [];
                        foreach ($detailsArt as $detArt) {
                            array_push(
                                $arrArtifactService,
                                [
                                    'id_artefacto_PK'  => $detArt->id_artefacto_FK,
                                    'modelo'           => $detArt->modelo
                                ]
                            );
                        }
                    ?>

                        <script>
                            var arrArtifacts = <?php echo json_encode($arrArtifactService); ?>
                        </script>

                    <?php } else { ?>

                        <script>
                            var arrArtifacts = [];
                        </script>

                    <?php } ?>

                    <div class="form-group border-success border-bottom" id="list-artifacts"></div>

                    <!-- ----------------------start cita----------------------- -->

                    <div class="form-group justify-content-center d-flex row border-secondary border-top">
                        <div class="row">
                            <div class="col-sm-8 col-12 col-md-8">
                                <label class="col-form-label">
                                    <u>
                                        <strong title="Información del encuentro">
                                            Incluir citación</strong>
                                    </u>
                                </label>
                                <div class="form-group">
                                    <select id="citation" class="form-control col-12 selector2 controlBuscador" required="">
                                        <option value="" aria-readonly="">Buscar citación</option>
                                        <?php
                                        foreach ($citations as $citation) {

                                        ?>
                                            <option selected value="<?php echo $citation->id_citacion_PK  ?>">
                                                <?php echo '#' . $citation->id_citacion_PK . ' -' ?>
                                                <?php echo $citation->direccion_lugar . ' * ' ?>
                                                <?php echo $citation->fecha_encuentro ?>
                                            </option>
                                        <?php

                                        }
                                        ?>
                                    </select>
                                    <div class="col-md-2 mt-2">
                                        <a href="#" id="addCitation" class="btn btn-info rounded-circle border p-2"><i class="fas fa-plus fa-sm p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (count($detailsCit) > 0) {
                        $arrCitationService = [];
                        foreach ($detailsCit as $detCit) {
                            array_push(
                                $arrCitationService,
                                [
                                    'id_citacion_PK'     => $detCit->id_citacion_FK,
                                    'direccion_lugar'  => $detCit->direccion_lugar
                                ]
                            );
                        }
                    ?>

                        <script>
                            var arrCitations = <?php echo json_encode($arrCitationService); ?>
                        </script>

                    <?php } else { ?>

                        <script>
                            var arrCitations = [];
                        </script>

                    <?php } ?>

                    <div class="form-group border-success border-bottom" id="list-citations"></div>

                    <!-- ---------------------end cita------------------------------- -->

                    <!-- ----------------------start scategories----------------------- -->

                    <div class="form-group row justify-content-center d-flex  border-secondary border-top">
                        <div class="row ">
                            <div class="col-sm-8 col-12 col-md-8">
                                <label class="col-form-label">
                                    <u>
                                        <strong title="Información de las categorías del servicio">
                                            Categorizar Servicio</strong>
                                    </u>
                                </label>
                                <div class="form-group">
                                    <select id="scategory" class="form-control col-12 selector2 controlBuscador" required="">
                                        <option value="" aria-readonly="">Buscar categoría</option>
                                        <?php
                                        foreach ($scategories as $scategory) {

                                        ?>
                                            <option selected value="<?php echo $scategory->id_categoria_servicio_PK  ?>">
                                                <?php echo '#' . $scategory->id_categoria_servicio_PK . ' -' ?>
                                                <?php echo $scategory->nombre_cs ?>
                                            </option>
                                        <?php

                                        }
                                        ?>
                                    </select>
                                    <div class="col-md-2 mt-2">
                                        <a href="#" id="addScategory" class="btn btn-info rounded-circle border p-2"><i class="fas fa-plus fa-sm p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (count($detailsCat) > 0) {
                        $arrCategoryService = [];
                        foreach ($detailsCat as $detCat) {
                            array_push(
                                $arrCategoryService,
                                [
                                    'id_categoria_servicio_PK'     => $detCat->id_categoria_servicio_FK,
                                    'nombre_cs'  => $detCat->nombre_cs
                                ]
                            );
                        }
                    ?>

                        <script>
                            var arrScategories = <?php echo json_encode($arrCategoryService); ?>
                        </script>

                    <?php } else { ?>

                        <script>
                            var arrScategories = [];
                        </script>

                    <?php } ?>

                    <div class="form-group border-success border-bottom" id="list-scategories"></div>

                    <!-- ---------------------end scategories------------------------------- -->
                    <!-- ----------------------start technical----------------------- -->

                    <div class="form-group justify-content-center d-flex">
                        <div class="row">
                            <div class="col-sm-8 col-12 col-md-8">
                                <label class="col-form-label">
                                    <u>
                                        <strong title="Técnicos asociados al servicio">
                                            Asignar técnico</strong>
                                    </u>
                                </label>
                                <div class="form-group">
                                    <select id="technical" class="form-control selector2 col-12 controlBuscador" required="">
                                        <option value="" aria-readonly="">Buscar técnico disponible
                                        </option>
                                        <?php
                                        foreach ($technicians as $technical) {

                                        ?>
                                            <option selected value="<?php echo $technical->id_tecnico_PK  ?>">
                                                <?php echo '#' . $technical->id_tecnico_PK . ' -' ?>
                                                <?php echo $technical->nombre_tecnico . ' * ' ?>
                                                <?php echo $technical->telefono . ' * ' ?>
                                                <?php echo $technical->numero_documento ?>
                                            </option>
                                        <?php

                                        }
                                        ?>
                                    </select>
                                    <div class="col-md-2 mt-2">
                                        <a href="#" id="addTechnical" class="btn btn-info rounded-circle border p-2"><i class="fas fa-plus fa-sm p-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (count($detailsTech) > 0) {
                        $arrTechnicalService = [];
                        foreach ($detailsTech as $detTech) {
                            array_push(
                                $arrTechnicalService,
                                [
                                    'id_tecnico_PK'     => $detTech->id_tecnico_asignado_FK,
                                    'numero_documento'  => $detTech->numero_documento
                                ]
                            );
                        }
                    ?>

                        <script>
                            var arrTechnicians = <?php echo json_encode($arrTechnicalService); ?>
                        </script>

                    <?php } else { ?>

                        <script>
                            var arrTechnicians = [];
                        </script>

                    <?php } ?>

                    <div class="form-group border-success border-bottom" id="list-technicians"></div>

                    <!-- ---------------------end technical------------------------------- -->
                    <div class="form-group justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-6 col-md-6 text-center">
                                <label class="col-form-label">
                                    <u><strong>Estado:</strong></u>
                                </label>
                                <div class="form-group row justify-content-center">
                                    <select id="id_estado_servicio_FK" class="form-control col-9 selector2 controlBuscador" required="">
                                        <option value="">Buscar Estado</option>
                                        <?php
                                        foreach ($statuses as $status) {
                                            if ($status->id_estado_PK == $data[0]->id_estado_servicio_FK) {
                                        ?>

                                                <option selected value="<?php echo $status->id_estado_PK ?>">

                                                    <?php echo $status->nombre_estado ?>

                                                </option>

                                            <?php
                                            } else {
                                            ?>

                                                <option value="<?php echo $status->id_estado_PK ?>">
                                                    <?php echo $status->nombre_estado ?>

                                                </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                                <div class="col-sm-6 col-6 col-md-6">
                                    <label class="col-form-label">
                                        <u><strong>Categorías de arreglo:</strong></u>
                                    </label>
                                    <div class="form-group">
                                        <li>
                                            <?php if ($details[0]->is_software == false) { ?>
                                                <input type="checkbox" id="is_software">
                                            <?php } else { ?>
                                                <input type="checkbox" checked id="is_software">
                                            <?php } ?>
                                            <label for="is_software">Software</label>
                                        </li>

                                        <li>
                                            <?php if ($details[0]->is_hardware == false) { ?>
                                                <input type="checkbox" id="is_hardware">
                                            <?php } else { ?>
                                                <input type="checkbox" checked id="is_hardware">
                                            <?php } ?>
                                            <label for="is_hardware">Hardware</label>
                                        </li>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row border-bottom border-top justify-content-center text-center">
                            <div class="col-sm-6 col-6 col-md-6">
                                <label class="col-form-label">
                                    <u>
                                        <strong title="Reconocimiento, evaluación
									 y solución del problema">Diagnóstico:

                                        </strong>
                                    </u>
                                </label>

                                <div class="form-group">
                                    <div class="form-group row justify-content-center">
                                        <textarea id="diagnostico" cols="25" rows="4" 
                                        placeholder=" Diagnóstico del servicio" 
                                        required><?php echo $details[0]->diagnostico ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6 col-md-6">
                                <label class="col-form-label">
                                    <u>
                                        <strong title="Problema descritó por el cliente">Descripción
                                            Cliente:</strong>
                                    </u>
                                </label>
                                <div class="form-group">
                                    <div class="form-group row justify-content-center">
                                        <textarea id="descripcion_cliente" cols="25" rows="4" 
                                        placeholder=" Descripción del cliente"
                                        ><?php echo $details[0]->descripcion_cliente; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row border-top justify-content-center text-center">
                            <div class="col-sm-6 col-6 col-md-6">
                                <label class="col-form-label">
                                    <u><strong title="Costo revisión">Costo de revisión:</strong></u>
                                </label>
                                <div class="form-group">
                                    <div class="form-group row justify-content-center">
                                        <input value="<?php echo $details[0]->costo_revision ?>"
                                         type="number" class="form-control col-8" 
                                         placeholder="Precio revisión" id="costo_revision" 
                                         required="" autosave="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6 col-md-6">
                                <label class="col-form-label">
                                    <u><strong>Costo total:</strong></u>
                                </label>
                                <div class="form-group">
                                    <div class="form-group row justify-content-center">
                                        <input value="<?php echo $data[0]->costo_servicio ?>" type="number" class="form-control col-8" placeholder="Precio total" id="costo_servicio" required="" autocomplete="" autosave="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group border-top">
                        <div class="row justify-content-center text-center">
                            <button id="update" type="submit" class="btn btn-outline-success p-3 mt-3">
                                <i class="fas fa-save fa-2x"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>

<script src="assets/js/detalles/citationService.js"></script>
<script src="assets/js/detalles/categoryService.js"></script>
<script src="assets/js/detalles/technicalService.js"></script>
<script src="assets/js/detalles/detailService.js"></script>
<script src="assets/js/detalles/artifactService.js"></script>