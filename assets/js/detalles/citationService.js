// DECLARAR ARRAY GLOBAL QUE CONTENGA LA LISTA DE REVISIONES O DETALLES
// var arrCitations = []
showCitations()

$("#addCitation").click(function (e){
    e.preventDefault()
    // console.log("Evitar recargo de la pagina al pulsar el botón con una función anonima")

    let idCitation = $("#citation").val()
    let nameCitation = $("#citation option:selected").text()

    // console.log(idCitation,nameCitation)

    if(idCitation != ''){
        if (typeof existCitation(idCitation) === 'undefined') {
            arrCitations.push({
                'id_citacion_PK' : idCitation,
                'direccion_lugar': nameCitation 
            })
        } else{
            let timerInterval
            Swal.fire({
                title: '¡La citación ya se encuentra seleccionada!',
                html: 'Vuelva a intentarlo con otra citación',
                timer: 2000,
                timerProgressBar: true,
                onBeforeOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                        const content = Swal.getContent()
                        if (content) {
                            const b = content.querySelector('b')
                            if (b) {
                                b.textContent = Swal.getTimerLeft()
                            }
                        }
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        }

        showCitations()
    }else{
        Swal.fire({
            title: 'Debe seleccionar una citación',
            text: '',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
    }

    console.log(arrCitations)
});

// Validar la no repetición
function existCitation(idCitation){
    let existCitation = arrCitations.find(function (citation){
        return citation.id_citacion_PK == idCitation
    })
    return existCitation
}

// mostrar elementos
function showCitations(){
    $("#list-citations").empty()

    arrCitations.forEach(function(citation){
        $("#list-citations").append('<div class="form-group"><button onclick="removeCitation('+citation.id_citacion_PK+')" class="btn btn-danger p-2 border-dark"><i class="fas fa-trash-alt fa-lg"></i></button> <span>  ' +  citation.direccion_lugar+'</span></div>')
    })
}

// Quitar elementos
function removeCitation(idCitation){
    let index = arrCitations.indexOf(existCitation(idCitation))
    arrCitations.splice(index, 1)
    showCitations()
}

// // enviar elementos al back
// $("#submit").click(function(e){
//     e.preventDefault()

//     let url = "?controller=service&method=save"
//     let params ={
//         id_cliente_FK:  $("#id_cliente_FK").val(),
//         citations:      arrCitations,
//         costo_servicio: $("#costo_servicio").val()
//     }

//     // metodo POST USANDO AJAX PARA ENVIAR LA INFO AL BACKEND
//     $.post(url, params, function(){
//         if (typeof response.error !== 'undefined') {
//             alert(response.error)
//         }else{
//             alert("Inserción satisfactoria")
//             // redireccion
//             location.href = "?controller=service"
//         }
//     },'json').fail(function(error){
//         alert("Inserción fallida ("+error+")")
//     });
// });



