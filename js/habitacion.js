console.log("HOLA");
// document.addEventListener('DOMContentLoaded', function() {
//     var select = document.getElementById('selectPiso');
//     select.addEventListener('change', function() {
//         var piso = select.value;
//         var xhr = new XMLHttpRequest();
//         xhr.open('POST', '/residencialeonardo.atwebpages.com/controllers/controlador_select.php', true);
//         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//         xhr.onload = function() {
//             if (xhr.status === 200) {
//                 var texto = xhr.responseText;
// 				document.getElementById('habitaciones').innerHTML = texto;
//                 console.log("madre mia");
//                 console.log(xhr.responseText);
//                 console.log(document.getElementById('habitaciones'));
                
//             } else {
//                 console.error('Error en la solicitud. Estado:', xhr.status);
//             }
//         };
//         xhr.send('select=' + encodeURIComponent(piso));
//     });
// });



function change_select(event) {

    var tablas_registro = $("div[id='seccionRegistros']")
    $(tablas_registro).show()

    var piso = event.target.value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/residencialeonardo.atwebpages.com/controllers/controlador_select.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var texto = xhr.responseText;
            // document.getElementById('habitaciones').innerHTML = texto;
            document.getElementsByName('habitaciones').forEach(element => {
                element.innerHTML = texto;

                // PRUEBAS
                    // Recorro cada cajita de las tablas y les doy un onClick
                    let coleccion_cajitas = element.firstChild.childNodes;
                    coleccion_cajitas.forEach( cajita => {
                        let dentro_cajita = $(cajita.firstChild.childNodes);
                        
                        let dni = $(cajita).find("input[id='dni']").val()
                        let id_resi = $(cajita).find("input[id='id_residente']").val()


                        let botones_altaResidente = $(cajita).find("div > div")
                        console.log(botones_altaResidente)

                        // PRIMERA PARTE

                        let botones_constante = $(cajita).find("div[id]").find("#boton-constantes")
                        
                        $(botones_constante).each(function(index, element){
                            
                            $(element).click(function(){
                                
                                $('#hidrico_select_entrada').val("");
                                $('#otrosEntrada_true').val("");
                        
                                $('#hidrico_select_salida').val("");
                                $('#diuresisEntrada_true').val("");
                                $('#otrosSalida_true').val("");
                        
                                $('#sumEntradas').val("")
                                $('#sumSalidas').val("")
                                $("#balanceResultado").val("");
                        
                                $('#cajaTextOtros').hide(); 
                                $('#cajaTextDiuresis').hide(); 
                                $('#cajaTextSalidaOtros').hide(); 
                        
                                cargarTablaConstanteVital_id(id_resi);

                                $('#boton-agregar-constante').click(function(){

                                    agregarConstante(id_resi)
                            
                                });
                                
                                $('#boton-agregar-constante-guardarSiguiente').click(function(){
                            
                                    
                                    if ( agregarConstante(id_resi) ){
                                        $("div#ver-tabla-constante").hide()
                                        $("div#ver-tabla-eliminacion").toggle()
                                    }
                            
                                });
                        
                            });
                        })

                        // SEGUNDA PARTE
                        let botones_eliminacion = $(cajita).find("div[id]").find("#boton-eliminacion")
                        $(botones_eliminacion).each(function(index, element){
                            
                            $(element).click(function(){
                        
                                cargarTablaEliminacion(id_resi);

                                $('#boton-agregar-eliminacion').click(function(){

                                    agregarEliminacion(id_resi)
                            
                                });
                                
                                $('#boton-agregar-eliminacion-guardarSiguiente').click(function(){
                            
                                    
                                    if ( agregarEliminacion(id_resi) ){
                                        $("div#ver-tabla-eliminacion").hide()
                                        $("div#ver-tabla-alimentacion").toggle()
                                    }
                            
                                });
                        
                            });
                        })


                        // TERCERA PARTE
                        let botones_alimentacion = $(cajita).find("div[id]").find("#boton-alimentacion")
                        $(botones_alimentacion).click(function(){

                            cargarTablaAlimentacion(id_resi);

                            $('#boton-agregar-alimentacion').click(function(){
                    
                                agregarAlimentacion(id_resi);
                            });
                        
                            $('#boton-agregar-alimentacion-guardarSiguiente').click(function(){
                        
                                if ( agregarAlimentacion(id_resi) ) {
                                    $("div#ver-tabla-alimentacion").hide()
                                    $("div#ver-tabla-movilizacion").toggle()
                                }
                        
                            });
                    
                        });


                        // CUARTA PARTE
                        let botones_movilizacion = $(cajita).find("div[id]").find("#boton-movilizacion")
                        $(botones_movilizacion).click(function(){

                            cargarTablaMovilizacion(id_resi);
                    
                            $('#boton-agregar-movilizacion').click(function(){
                    
                                agregarMovilizacion(id_resi);
                        
                            });
                        
                            $('#boton-agregar-movilizacion-guardarSiguiente').click(function(){
                        
                                if ( agregarMovilizacion(id_resi) ) {
                                    $("div#ver-tabla-movilizacion").hide()
                                    $("div#ver-tabla-higiene").toggle()
                                }
                        
                        
                            });
                        });


                        // QUINTA PERTE
                        let botones_higiene = $(cajita).find("div[id]").find("#boton-higiene")
                        $(botones_higiene).click(function(){

                            cargarTablaHigiene(id_resi);
                    
                            $('#boton-agregar-higiene').click(function(){
                    
                                agregarHigiene(id_resi);
                        
                            });
                        
                            $('#boton-agregar-higiene-guardarSiguiente').click(function(){
                        
                                if (agregarHigiene(id_resi)) {
                                    $("div#ver-tabla-higiene").hide()
                                    $("div#ver-tabla-medicacion").toggle()
                                }
                        
                            });
                        });



                    // SEXTA PARTE
                    let botones_medicacion = $(cajita).find("div[id]").find("#boton-medicacion")
                    $(botones_medicacion).click(function(){

                        cargarTablaMedicacion(id_resi);
                
                        $('#boton-agregar-medicacion').click(function(){
                
                            agregarMedicacion(id_resi);
                    
                        });
                    
                        $('#boton-agregar-medicacion-guardarSiguiente').click(function(){
                    
                            if (agregarMedicacion(id_resi)) {
                                $("div#ver-tabla-medicacion").hide()
                                $("div#ver-tabla-descanso").toggle()
                            }
                    
                        });
                    });


                    // SEPTIMA PARTE
                    let botones_descanso = $(cajita).find("div[id]").find("#boton-descanso")
                    $(botones_descanso).click(function(){

                        cargarTablaDescanso(id_resi);

                        $('#boton-agregar-descanso').click(function(){
                
                            agregarDescanso(id_resi);
                    
                        });
                    
                        $('#boton-agregar-descanso-guardarSiguiente').click(function(){
                    
                            if (agregarDescanso(id_resi)) {
                                $("div#ver-tabla-descanso").hide()
                                $("div#ver-tabla-incidencia").toggle()
                            }
                    
                        });
                    });
                
                

                    // OCTAVA PARTE
                    let botones_incidencia = $(cajita).find("div[id]").find("#boton-incidencia")
                    $(botones_incidencia).click(function(){
		
                        cargarTablaIncidencia(id_resi);

                        $('#boton-agregar-incidencia').click(function(){
                
                            agregarIncidencia(id_resi);
                    
                        });
                    
                        $('#boton-agregar-incidencia-guardarSalir').click(function(){
                    
                            agregarIncidencia(id_resi);
                    
                        });
                    });
                
                        


                    })

                    // eventos_click()

                // FIN PRUEBAS
            });
            
        } else {
            console.error('Error en la solicitud. Estado:', xhr.status);
        }
    };
    xhr.send('select=' + encodeURIComponent(piso));
}