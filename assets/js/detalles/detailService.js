
function getDetail(){ 

    var arrDetails = []

    let idDetSer      = $("#id_revision_servicio_PK").val();
    let isSoft        = document.getElementById("is_software").checked;
    let isHard        = document.getElementById("is_hardware").checked;
    let dCliente      = $("#descripcion_cliente").val();
    let diagnostico   = $("#diagnostico").val();
    let costoRevision = $("#costo_revision").val();

    if(diagnostico != '')
        {
            arrDetails.push({

                'id_revision_servicio_PK'   :  idDetSer,
                'is_software'               :  isSoft,
                'is_hardware'               :  isHard,
                'descripcion_cliente'       :  dCliente,
                'diagnostico'               :  diagnostico,
                'costo_revision'            :  costoRevision
            }) 
        }else{
            Swal.fire({
                title: 'Diligencie el diagnóstico',
                width: 600,
                padding: '3em',
                background: '#fff url(assets/img/us/t5-min-jpg)',
                backdrop: `
                  rgba(85,275,223,0.4)
                  url("assets/img/1.ico")
                  left top
                  no-repeat
                `
              })
        }

    return arrDetails
}

