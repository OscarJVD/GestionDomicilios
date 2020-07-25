// DECLARAR ARRAY GLOBAL QUE CONTENGA LA LISTA DE REVISIONES O DETALLES
// var arrArtifacts = []
showArtifacts()

$("#addArtifact").click(function (e) {
    e.preventDefault()
    // console.log("Evitar recargo de la pagina al pulsar el botón con una función anonima")

    let idArtifact = $("#artifact").val()
    let nameArtifact = $("#artifact option:selected").text()

    // console.log(idArtifact,nameArtifact)

    if (idArtifact != '') {
        if (typeof existArtifact(idArtifact) === 'undefined') {
            arrArtifacts.push({
                'id_artefacto_PK': idArtifact,
                'modelo': nameArtifact
            })
        } else {
            let timerInterval
            Swal.fire({
                title: '¡El artefacto ya se encuentra seleccionado!',
                html: 'Vuelva a intentarlo con otro artefacto',
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

        showArtifacts()
    } else {
        Swal.fire({
            title: 'Debe seleccionar un artefacto',
            text: '',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
    }

    console.log(arrArtifacts)
});

// Validar la no repetición
function existArtifact(idArtifact) {
    let existArtifact = arrArtifacts.find(function (artifact) {
        return artifact.id_artefacto_PK == idArtifact
    })
    return existArtifact
}

// mostrar elementos
function showArtifacts() {
    $("#list-artifacts").empty()

    arrArtifacts.forEach(function (artifact) {
        $("#list-artifacts").append('<div class="form-group"><button onclick="removeArtifact(' + artifact.id_artefacto_PK + ')" class="btn btn-danger p-2 border-dark"><i class="fas fa-trash-alt fa-lg"></i></button> <span>  ' + artifact.modelo + '</span></div>')
    })
}

// Quitar elementos
function removeArtifact(idArtifact) {
    let index = arrArtifacts.indexOf(existArtifact(idArtifact))
    arrArtifacts.splice(index, 1)
    showArtifacts()
}

// enviar elementos al back
$("#submit").click(function (e) {
    e.preventDefault()
    // console.log(); 

    let url = "?controller=service&method=save"
    let params = {
        id_cliente_FK: $("#id_cliente_FK").val(),
        costo_servicio: $("#costo_servicio").val(),
        artifacts: arrArtifacts,
        citations: arrCitations,
        scategories: arrScategories,
        technicians: arrTechnicians,
        details: getDetail()
    }
    console.log(params);

    // keypress (e) e.keycode
    // metodo POST USANDO AJAX PARA ENVIAR LA INFO AL BACKEND
    $.post(url, params, function (response) {
        if (typeof response.error !== 'undefined') {

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal!',
                footer: '<a href="mailto:oscarjaviervargas@hotmail.com">Reportar problema</a>'
            })
            console.log(response.message)
        } else {
            
            Swal.fire({
                position: 'center-middle',
                icon: 'success',
                title: 'Guardado',
                showConfirmButton: false,
                timer: 2000
            });
            
            // redireccion
            setTimeout(function(){location.href = "?controller=service"} , 2000);   
            

        }
    }, 'json').fail(function (error) {

        Swal.fire({
            icon: 'error',
            title: '<i class="fas fa-flushed"></i>  Caramba...',
            text: '¡Algo salio mal!',
            footer: '<a href="mailto:oscarjaviervargas@hotmail.com">Reportar problema</a>'
        })
        console.log("Inserción fallida ("+error.responseText+")")
        // document.style.backgroundColor = "#fff"
        // document.style.color = "#000"
        // document.body.innerHTML = error.responseText;
        // console.log(error)
    });
});


$("#update").click(function(e){
	//deshabilitar el envio por HTTP
	e.preventDefault()

	let url = "?controller=service&method=update"
	let params = {
        id_servicio_PK         : $("#id_servicio_PK").val(),
        id_cliente_FK          : $("#id_cliente_FK").val(),
		id_estado_servicio_FK  : $("#id_estado_servicio_FK").val(),
        costo_servicio         : $("#costo_servicio").val(),
        artifacts              : arrArtifacts,
        citations              : arrCitations,
        scategories            : arrScategories,
        technicians            : arrTechnicians,
        details                : getDetail()
	}

	$.post(url,params, function(response){
		if (typeof response.error !== 'undefined') {
			alert(response.message)
		}else{
			alert("Actualización Satisfactoria")
			location.href = "?controller=service"
		}
	},'json').fail(function (error){
		alert("Actualización Fallida("+error.responseText+")")
	});
});



