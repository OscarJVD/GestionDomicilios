<div id="myModalLeft" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center col-11">
                    <h5 class="modal-title text-dark">SOLICITUD DE SERVICIO TÉCNICO</h5>
                    <h6 class="m-auto text-dark">Genere la información del servicio</h6>
                </div>
                <div class="col-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <!-- <form action="?controller=service&method=save" method="post"> -->
                <div class="form-group border-bottom border-top">
                    <div class="row justify-content-center text-left">
                        <div class="col-sm-6 col-6 col-md-6">
                            <label class="col-form-label">
                                <u><strong>Elegir Cliente:</strong></u>
                            </label>
                            <div class="form-group">
                                <select id="id_cliente_FK" class="form-control selector2 controlBuscador"
                                required="" onKeypress=buscar_op(this,text2) onblur=borrar_buffer() onclick=borrar_buffer()
                                 >
                                    <option value="" selected aria-readonly="" >Buscar Cliente</option>
                                    <?php
                                    foreach ($clients as $client) {

                                    ?>
                                        <option value="<?php echo $client->id_cliente_PK ?>">
                                            <?php echo $client->id_cliente_PK . '. ' ?>
                                            <?php echo $client->nombre_cliente ?>
                                        </option>
                                    <?php

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
                                    <input type="checkbox" id="is_software" value="" class="">
                                    <label for="is_software">Software</label>
                                </li>

                                <li>
                                    <input type="checkbox" id="is_hardware" value="">
                                    <label for="is_hardware">Hardware</label>
                                </li>
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
                                <select id="artifact" class="form-control col-12 selector2 controlBuscador" required=""
                                onKeypress=buscar_op(this,text2) onblur=borrar_buffer() onclick=borrar_buffer()>
                                    <option selected value="" aria-readonly="">Buscar artefacto</option>
                                    <?php foreach ($artifacts as $artifact) { ?>

                                        <option value="<?php echo $artifact->id_artefacto_PK ?>">
                                            <?php echo $artifact->id_artefacto_PK . '. ' ?>
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

                <?php if (isset($detailsArt) > 0) {
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
                        var arrArtifacts = <?php json_encode($arrArtifactService); ?>
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
                                <select id="citation" class="form-control col-12 selector2 controlBuscador" required=""
                                onKeypress=buscar_op(this,text2) onblur=borrar_buffer() onclick=borrar_buffer()>
                                    <option selected value="" aria-readonly="">Buscar citación</option>
                                    <!-- <option value="">Agregar nueva</option> -->
                                    <?php
                                    foreach ($citations as $citation) {

                                    ?>
                                        <option value="<?php echo $citation->id_citacion_PK  ?>">
                                            <?php echo $citation->id_citacion_PK . '. ' ?>
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

                <?php if (isset($detailsCit) > 0) {
                    $arrCitationService = [];
                    foreach ($detailsCit as $detCit) {
                        array_push(
                            $arrTechnicalService,
                            [
                                'id_citacion_PK'     => $detCit->id_citacion_FK,
                                'direccion_lugar'  => $detCit->direccion_lugar
                            ]
                        );
                    }
                ?>

                    <script>
                        var arrCitations = <?php json_encode($arrCitationService); ?>
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
                                <select id="scategory" class="form-control col-12 selector2 controlBuscador" required=""
                                onKeypress=buscar_op(this,text2) onblur=borrar_buffer() onclick=borrar_buffer()>
                                    <option selected value="" aria-readonly="">Buscar categoría</option>
                                    <?php
                                    foreach ($scategories as $scategory) {

                                    ?>
                                        <option value="<?php echo $scategory->id_categoria_servicio_PK  ?>">
                                            <?php echo $scategory->id_categoria_servicio_PK . '. ' ?>
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

                <?php if (isset($detailsCatDet) > 0) {
                    $arrCategoryService = [];
                    foreach ($detailsCatDet as $detCatDet) {
                        array_push(
                            $arrCategoryService,
                            [
                                'id_categoria_servicio_PK'     => $detCatDet->id_categoria_servicio_FK,
                                'nombre_cs'  => $detCatDet->nombre_cs
                            ]
                        );
                    }
                ?>

                    <script>
                        var arrScategories = <?php json_encode($arrCategoryService); ?>
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
                                <select id="technical" class="form-control selector2 col-12 controlBuscador" required=""
                                onKeypress=buscar_op(this,text2) onblur=borrar_buffer() onclick=borrar_buffer()>
                                    <option selected value="" aria-readonly="">Buscar técnico disponible
                                    </option>
                                    <?php
                                    foreach ($technicians as $technical) {

                                    ?>
                                        <option value="<?php echo $technical->id_tecnico_PK  ?>">
                                            <?php echo $technical->id_tecnico_PK . '. ' ?>
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

                <?php if (isset($detailsTech) > 0) {
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
                        var arrTechnicians = <?php json_encode($arrTechnicalService); ?>
                    </script>

                <?php } else { ?>

                    <script>
                        var arrTechnicians = [];
                    </script>

                <?php } ?>

                <div class="form-group border-success border-bottom" id="list-technicians"></div>

                <!-- ---------------------end technical------------------------------- -->
                <!-- START DETAILS -->

                <div class="form-group">
                    <div class="row border-bottom border-top justify-content-center text-center">
                        <div class="col-sm-6 col-6 col-md-6">
                            <label class="col-form-label">
                                <u><strong title="Reconocimiento, evaluación
                                     y solución del problema">Diagnóstico:</strong></u>
                            </label>
                            <div class="form-group">
                                <div class="form-group row justify-content-center">
                                    <textarea id="diagnostico" cols="20" rows="3" placeholder="Diagnóstico del servicio" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6 col-md-6">
                            <label class="col-form-label">
                                <u><strong title="Problema descritó por el cliente">Descripción Cliente:</strong></u>
                            </label>
                            <div class="form-group">
                                <div class="form-group row justify-content-center">
                                    <textarea id="descripcion_cliente" cols="20" rows="3" placeholder="Descripción del cliente"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END DETAILS -->

                <div class="form-group">
                    <div class="row border-top justify-content-center text-center">
                        <div class="col-sm-6 col-6 col-md-6">
                            <label class="col-form-label">
                                <u><strong title="Costo revisión">Costo de revisión:</strong></u>
                            </label>
                            <div class="form-group">
                                <div class="form-group row justify-content-center">
                                    <input type="number" class="form-control col-7" placeholder="Precio revisión" id="costo_revision" required="" autocomplete="" autosave="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6 col-md-6">
                            <label class="col-form-label">
                                <u><strong>Costo total:</strong></u>
                            </label>
                            <div class="form-group">
                                <div class="form-group row justify-content-center">
                                    <input type="number" class="form-control col-7" placeholder="Precio Total" id="costo_servicio" required="" autocomplete="" autosave="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <div class="form-group">
                    <button type="submit" id="submit" class="btn buttonGenerar">Generar</button>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>

<script src="assets/js/detalles/citationService.js"></script>
<script src="assets/js/detalles/categoryService.js"></script>
<script src="assets/js/detalles/technicalService.js"></script>
<script src="assets/js/detalles/detailService.js"></script>
<script src="assets/js/detalles/artifactService.js"></script>