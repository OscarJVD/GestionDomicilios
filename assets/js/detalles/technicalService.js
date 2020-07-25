// DECLARAR ARRAY GLOBAL QUE CONTENGA LA LISTA DE REVISIONES O DETALLES
// var arrTechnicians = []
showTechnical()

$("#addTechnical").click(function(e) {
    e.preventDefault()
        // console.log("Evitar recargo de la pagina al pulsar el botón con una función anonima")

    let idTechnical = $("#technical").val()
    let nameTechnical = $("#technical option:selected").text()

    // console.log(idTechnical,nameTechnical)

    if (idTechnical != '') {
        if (typeof existTechnical(idTechnical) === 'undefined') {
            arrTechnicians.push({
                'id_tecnico_PK': idTechnical,
                'numero_documento': nameTechnical
            })
        } else {
            let timerInterval
            Swal.fire({
                title: '¡El técnico ya se encuentra seleccionado!',
                html: 'Vuelva a intentarlo con otro técnico',
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

        showTechnical()
    } else {
        Swal.fire({
            title: 'Debe seleccionar un técnico',
            text: '',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
    }

    console.log(arrTechnicians)
});

// Validar la no repetición
function existTechnical(idTechnical) {
    let existTechnical = arrTechnicians.find(function(technical) {
        return technical.id_tecnico_PK == idTechnical
    })
    return existTechnical
}

// mostrar elementos
function showTechnical() {
    $("#list-technicians").empty()

    arrTechnicians.forEach(function(technical) {
        $("#list-technicians").append('<div class="form-group"><button onclick="removeTechnical(' + technical.id_tecnico_PK + ')" class="btn btn-danger p-2 border-dark"><i class="fas fa-trash-alt fa-lg"></i></button> <span>  ' + technical.numero_documento + '</span></div>')
    })
}

// Quitar elementos
function removeTechnical(idTechnical) {
    let index = arrTechnicians.indexOf(existTechnical(idTechnical))
    arrTechnicians.splice(index, 1)
    showTechnical()
}