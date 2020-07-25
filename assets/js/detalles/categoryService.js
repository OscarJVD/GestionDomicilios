// DECLARAR ARRAY GLOBAL QUE CONTENGA LA LISTA DE REVISIONES O DETALLES
// var arrScategories = []
showScategories()

$("#addScategory").click(function(e) {
    e.preventDefault()
        // console.log("Evitar recargo de la pagina al pulsar el botón con una función anonima")

    let idScategory = $("#scategory").val()
    let nameScategory = $("#scategory option:selected").text()

    // console.log(idScategory,nameScategory)

    if (idScategory != '') {
        if (typeof existScategory(idScategory) === 'undefined') {
            arrScategories.push({
                'id_categoria_servicio_PK': idScategory,
                'nombre_cs': nameScategory
            })
        } else {
            let timerInterval
            Swal.fire({
                title: '¡La categoría ya se encuentra seleccionada!',
                html: 'Vuelva a intentarlo con otra categoría',
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
        showScategories()
    } else {
        Swal.fire({
            title: 'Debe seleccionar una categoría',
            text: '',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
    }

    console.log(arrScategories)
});

// Validar la no repetición
function existScategory(idScategory) {
    let existScategory = arrScategories.find(function(scategory) {
        return scategory.id_categoria_servicio_PK == idScategory
    })
    return existScategory
}

// mostrar elementos
function showScategories() {
    $("#list-scategories").empty()

    arrScategories.forEach(function(scategory) {
        $("#list-scategories").append('<div class="form-group"><button onclick="removeScategories(' + scategory.id_categoria_servicio_PK + ')" class="btn btn-danger p-2 border-dark"><i class="fas fa-trash-alt fa-lg"></i></button> <span>  ' + scategory.nombre_cs + '</span></div>')
    })
}

// Quitar elementos
function removeScategories(idScategory) {
    let index = arrScategories.indexOf(existScategory(idScategory))
    arrScategories.splice(index, 1)
    showScategories()
}