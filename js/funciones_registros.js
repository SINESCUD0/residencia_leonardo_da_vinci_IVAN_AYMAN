// -------------------------**|1|CONSTANTES VITALES**-----------------------
function cargarTablaConstanteVital(){
 
    let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));
    
    if(idResidente != undefined && idResidente != ""){

        console.log("WI")

        $('#ver-tabla-constante').toggle(); //tabla descanso/sueño se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-incidencia').hide();
        $('#ver-tabla-medicacion').hide();

    }else{

        $('#ver-tabla-constante').hide();
        
    }
}


// PRUEBAS
function cargarTablaConstanteVital_id(idResidente){

    
    if(idResidente != undefined && idResidente != ""){

        console.log("WI")

        $('#ver-tabla-constante').toggle(); //tabla descanso/sueño se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-incidencia').hide();
        $('#ver-tabla-medicacion').hide();

    }else{

        $('#ver-tabla-constante').hide();
        
    }
}
// FIN PRUEBAS

function agregarConstante(idResidente){
    let resp_func = false
    // let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();

    // let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));

     let fecha= convertirFechaEspIngles(($('#fechaRegistroconstante').val()).substr(0,10))+($('#fechaRegistroconstante').val().substr(10,6))+":00";

     
     let turno_var=$("#turnos_constante").val();

     let fc_var=$("#fc").val();
     let ta_var=$("#ta").val();
     let t_a_var=$("#t_a").val();
     let glucemia_var=$("#glucemia").val();
     let bh_entradas_var=$("#hidrico_select_entrada").val();
     let entradas_var= bh_entradas_var.toString();

     let bh_salidas_var=$("#hidrico_select_salida").val();
     let salidas_var= bh_salidas_var.toString();

     let sumaEntradas=$('#sumEntradas').val();//Suma de todas la entradas hídricas
     let sumaSalidas=$('#sumSalidas').val();//Suma de todas la salidas hídricas
     // let resultado_v=parseInt(sumaEntradas,10) - parseInt(sumaSalidas,10); 
     let resultado_v=$('#balanceResultado').val(); //La resta calculada(resultado = sumaEntradas - sumaSalidas)
 
         var postObj = {

            id_residente : idResidente,

            id_personal : idUsuario,

            fecha : fecha,

            fc : fc_var,

            ta : ta_var,

            t : t_a_var,

            glucemia: glucemia_var,

            id_entradas: entradas_var,

            id_salidas: salidas_var,

            turno: turno_var,

            suma_entradas: sumaEntradas,

            suma_salidas: sumaSalidas,

            bh_resultado: resultado_v

        }

      


        $.ajax({

            url: '../controllers/registro.php?task=altaRegistroConstante',

            type: "POST",

            async: false,

            data: postObj,

            dataType: "html",

            success: function(data) {

                let respuesta =  $.parseJSON(data);

                swal({

                    title: "CREADA",

                    text:  "Consulta creada correctamente",

                    buttons: false,

                    icon:  "success",

                    timer: 1500,

                });
                
                resp_func = true;



           // setTimeout('location.reload()',2000); 

            },

            error: function(data) {

                let respuesta =  $.parseJSON(data.responseText);

                swal({

                    title: "ERROR",

                    text:  respuesta.message,

                    buttons: false,

                    icon:  "error",

                    timer: 2500,

                });
                
                resp_func = false;

            }

        });
        
        
        return resp_func;
}
 //------------****INICIO|1| HISTORIAL CONSTANTES****--------------------
//---***|INICIO|Funciones para cargar una tabla con el historial según una fecha***---
 function cargarRegistroConstantes_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

   

     //let fecha ="2023-05-25";

     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));

  

    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoConstantes').show(); //Mostrar la tabla historicoConstantes

        tablaRegistroConstantes_1(idResidente,fecha); //Rellenar la tabla con sus respectivos datos     

    }else{
        $('#ver-tabla-historicoConstantes').hide();    
    }
        
}

//Función que acepta una fecha y el id de residente como parámetros. Pinta los datos obtenidos de una consulta en id="tabla-historicoConstantes" en la vista historial_registro.php
function tablaRegistroConstantes_1(id,fecha){
    // //let nuevaFecha=parse(fecha, 'YY-MM-DD', new Date());
    // let fechaFormat= format((parseISO(fecha), 'DD-MM-YYYY'));

    let miTitulo="HISTORIAL CONSTÁNTES VITALES Y OTROS PARÁMETROS ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoConstantes').DataTable({

        dom: 'Bfrtip',

        buttons:[


            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',

                download: 'open',

                title: miTitulo
            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }
        ],

        "language": {

         "emptyTable":     "No hay registros para este residente"

     },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoconstante&idResidente="+id+""+"&mifecha="+fecha+""

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

            }

        },

        {"data":"dni_residente"},

        {"data":"nombre_residente"},

        {"data":"fc"},

        {"data":"ta"},

        {"data":"t"},

        {"data":"glucemia"},

        {"data":"suma_entradas"},

        {"data":"suma_salidas"},

        {"data":"bh_resultado"},

        {"data":"nombre_personal"},

        {"data":"turno"}


        ]

    });
}
//---***|FIN|Funciones para cargar una tabla con el historial según una fecha***---
//INTERVALO:
function cargarRegistroConstantes_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));


    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));


      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){

        if(date1<date2){

          $('#ver-tabla-historicoConstantes').show(); //tabla-constantes

          tablaRegistroConstantes_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoConstantes').hide();    
    }
        
}

//Función que recibe un string fecha en formato YYYY-MM-DD y lo devuelve en el formato DD/MM/YYYY
//Por ejemplo si recibe "2023-05-29", devuelve "29/05/2023"
function cambiarFormatoFecha(stringFecha)
{
  let arrFecha = stringFecha.split("-");                  // Recibe: "2023-05-29"
  return arrFecha[2]+ "/" +arrFecha[1]+ "/" +arrFecha[0];//Devuelve: "29/05/2023"
}
//Función que acepta 2 fechas y el id de residente como parámetros.Y pinta los datos en una tabla
function tablaRegistroConstantes_2(id,fechaDesde, fechaHasta){

    let miTitulo="HISTORIAL CONSTÁNTES VITALES Y OTROS PARÁMETROS (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoConstantes').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',

                download: 'open',

                title: miTitulo
            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=pintarintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"fc"},

            {"data":"ta"},

            {"data":"t"},

            {"data":"glucemia"},

            {"data":"suma_entradas"},

            {"data":"suma_salidas"},
    
            {"data":"bh_resultado"},

            {"data":"nombre_personal"},

            {"data":"turno"},

        ]

    });



}


 //------------****FIN|1| HISTORIAL CONSTANTES****--------------------



// -------------------------**|2|ELIMINACION**-----------------------
function cargarTablaEliminacion(idResidente){
    
    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-eliminacion').toggle(); //tabla descanso/sueño se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-incidencia').hide();
        $('#ver-tabla-medicacion').hide();

    }else{

        $('#ver-tabla-eliminacion').hide();

    }
}

function agregarEliminacion(idResidente){
    let resp_func = false
   
     let fecha= convertirFechaEspIngles(($('#fechaRegistroeliminacion').val()).substr(0,10))+($('#fechaRegistroeliminacion').val().substr(10,6))+":00";
  
   
     let turno=$("#turnos_eliminacion").val();  //Turno("M","T","N")
     let diuresis_v=$("#diuresis").val();

     var panalMojado_checked=$(".pan_mojado:checkbox").filter(":checked");
     let panalMojado_v=panalMojado_checked.length;
    

     var deposicion_checked=$(".deposicion:checkbox").filter(":checked");
     let deposicion_v=deposicion_checked.length;

     var cambioBolsa_checked=$(".cambioBolsa:checkbox").filter(":checked");
     let cambioBolsa_v=cambioBolsa_checked.length;

     var enema_checked=$(".enema:checkbox").filter(":checked");
     let enema_v=enema_checked.length;
    
     let vomitos_v=$("#vomitos").val();

     let otrosEliminacion_v=$("#otros_eliminacion").val();

          var postObj = {
   
            id_residente : idResidente,
   
            id_personal : idUsuario,
   
            fecha : fecha,
   
            diuresis : diuresis_v,

            panal_mojado : panalMojado_v,

            deposicion : deposicion_v,

            bolsa_clostomia : cambioBolsa_v,

            enema : enema_v,

            vomitos : vomitos_v,

            otros : otrosEliminacion_v,

            turno : turno
        }
   
      
   
   
        $.ajax({
   
            url: '../controllers/registro.php?task=altaRegistroEliminacion',
   
            type: "POST",
   
            async: false,
   
            data: postObj,
   
            dataType: "html",
   
            success: function(data) {
   
                let respuesta =  $.parseJSON(data);
   
                swal({
   
                    title: "CREADA",
   
                    text:  "Consulta creada correctamente",
   
                    buttons: false,
   
                    icon:  "success",
   
                    timer: 1500,
   
                });
                    
                resp_func = true
   
   
   
          // setTimeout('location.reload()',2000); 
   
            },
   
            error: function(data) {
   
                let respuesta =  $.parseJSON(data.responseText);
   
                swal({
                        
   
                    title: "ERROR",
   
                    text:  respuesta.message,
   
                    buttons: false,
   
                    icon:  "error",
   
                    timer: 2500,
   
                });
                    
                    resp_func = false
   
            }
                
                
   
        });
        
        return resp_func
}
//*****HISTORIAL ELIMINACION*****/
function cargarRegistroEliminacion_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

   

    // let fecha ="2023-05-25";

     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));

 

    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoEliminacion').show(); //tabla-Eliminacion

        tablaRegistroEliminacion_1(idResidente,fecha);       
        

    }else{
        $('#ver-tabla-historicoEliminacion').hide();    
    }
        
}



//,fecha
function tablaRegistroEliminacion_1(id,fecha){

    let miTitulo="HISTORIAL ELIMINACIÓN ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoEliminacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoeliminacion&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"diuresis"},

            {"data":"panal_mojado"},

            {"data":"deposicion"},

            {"data":"bolsa_clostomia"},

            {"data":"enema"},

            {"data":"vomitos"},

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}

//--------------INTERVALO:------------
function cargarRegistroEliminacion_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

  

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));
  

      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoEliminacion').show(); //tabla-Eliminacion

          tablaRegistroEliminacion_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoEliminacion').hide();    
    }
        
}
function tablaRegistroEliminacion_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL ELIMINACIÓN (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoEliminacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoeliminacionintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"diuresis"},

            {"data":"panal_mojado"},

            {"data":"deposicion"},

            {"data":"bolsa_clostomia"},

            {"data":"enema"},

            {"data":"vomitos"},

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}

//*****HISTORIAL ELIMINACION****/


// -------------------------**|3|ALIMENTACION**-----------------------
function cargarTablaAlimentacion(idResidente){
    
    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-alimentacion').toggle(); //tabla se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-incidencia').hide();
        $('#ver-tabla-medicacion').hide();
    }else{

        $('#ver-tabla-alimentacion').hide();

    }
}

function agregarAlimentacion(idResidente){
        let resp_func = false
     let fecha= convertirFechaEspIngles(($('#fechaRegistroalimentacion').val()).substr(0,10))+($('#fechaRegistroalimentacion').val().substr(10,6))+":00";
  
   
     let turno=$("#turnos_alimentacion").val();  //Turno("M","T","N")
     let adecuada_v=$("#adecuada").prop('checked');
     if(adecuada_v==true){
         adecuada_v="si";
     }else{
          adecuada_v="";
     }
     let inadecuada_v=$("#inadecuada").prop('checked');
     if(inadecuada_v==true){
         inadecuada_v="si";
     }else{
          inadecuada_v="";
     }

     let otrosAlimentacion_v=$("#observacion_alimentacion").val();

          var postObj = {
   
            id_residente : idResidente,
   
            id_personal : idUsuario,
   
            fecha : fecha,
   
            adecuada : adecuada_v,

            inadecuada : inadecuada_v,

            observaciones : otrosAlimentacion_v,

            turno : turno
        }
   
      
   
   
        $.ajax({
   
            url: '../controllers/registro.php?task=altaRegistroAlimentacion',
   
            type: "POST",
   
            async: false,
   
            data: postObj,
   
            dataType: "html",
   
            success: function(data) {
   
                let respuesta =  $.parseJSON(data);
   
                swal({
   
                    title: "CREADA",
   
                    text:  "Consulta creada correctamente",
   
                    buttons: false,
   
                    icon:  "success",
   
                    timer: 1500,
   
                });
                    
                    resp_func = true
   
   
   
          // setTimeout('location.reload()',2000); 
   
            },
   
            error: function(data) {
   
                let respuesta =  $.parseJSON(data.responseText);
   
                swal({
   
                    title: "ERROR",
   
                    text:  respuesta.message,
   
                    buttons: false,
   
                    icon:  "error",
   
                    timer: 2500,
   
                });
                    
                    resp_func = false
   
            }
   
        });
        
        return resp_func
}
//ºº--HISTORIAL ALIMENTACION--
function cargarRegistroAlimentacion_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));


     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));


    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoAlimentacion').show(); //tabla-Alimentacion

        tablaRegistroAlimentacion_1(idResidente,fecha);       
        

    }else{
        $('#ver-tabla-historicoAlimentacion').hide();    
    }
        
}




function tablaRegistroAlimentacion_1(id,fecha){

    let miTitulo="HISTORIAL ALIMENTACIÓN ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoAlimentacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoalimentacion&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"adecuada"},

            {"data":"inadecuada"},

            {"data":"observaciones"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}

//--------------INTERVALO:------------
function cargarRegistroAlimentacion_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

  

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));
  

      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoAlimentacion').show(); //tabla-Alimentacion

          tablaRegistroAlimentacion_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoAlimentacion').hide();    
    }
        
}
function tablaRegistroAlimentacion_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL ALIMENTACIÓN (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoAlimentacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoalimentacionintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
            // +"&mifecha="+fecha

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"adecuada"},

            {"data":"inadecuada"},

            {"data":"observaciones"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}
//ºº--HISTORIAL ALIMENTACION--
//---------------------------------------------------------------------------------------------------------
// -------------------------**|4|MOVILIZACION**-----------------------
function cargarTablaMovilizacion(idResidente){
 
    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-movilizacion').toggle(); //tabla se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-incidencia').hide();
        $('#ver-tabla-medicacion').hide();
    }else{

        $('#ver-tabla-movilizacion').hide();

    }
}

function agregarMovilizacion(idResidente){
      let resp_func = false
   
     let fecha= convertirFechaEspIngles(($('#fechaRegistromovilizacion').val()).substr(0,10))+($('#fechaRegistromovilizacion').val().substr(10,6))+":00";
  
   
     let turno=$("#turnos_movilizacion").val();  //Turno("M","T","N")
     let rh_fisica_v=$("#rh_fisica").prop('checked');
     if(rh_fisica_v==true){
         rh_fisica_v="si";
     }else{
          rh_fisica_v="no";
     }
     let ejer_cama_v=$("#ejer_cama").prop('checked');
     if(ejer_cama_v==true){
         ejer_cama_v="si";
     }else{
          ejer_cama_v="no";
     }
 
     var camPost_checked=$(".camPost:checkbox").filter(":checked");
     let camPost_v=camPost_checked.length;

     let lev_sillon_v=$("#lev_sillon").prop('checked');
     if(lev_sillon_v==true){
         lev_sillon_v="si";
     }else{
          lev_sillon_v="no";
     }

     let encamado_v=$("#encamado").prop('checked');
     if(encamado_v==true){
         encamado_v="si";
     }else{
          encamado_v="no";
     }

     let otrosMovilizacion_v=$("#otros_movilizacion").val();

          var postObj = {
   
            id_residente : idResidente,
   
            id_personal : idUsuario,
   
            fecha : fecha,
   
            rh_fisica : rh_fisica_v,

            ejercicios_cama : ejer_cama_v,

            cambio_postural : camPost_v,

            levantar_alsillon : lev_sillon_v,

            encamado : encamado_v,

            otros : otrosMovilizacion_v,

            turno : turno
        }
   
      
      
   
        $.ajax({
   
            url: '../controllers/registro.php?task=altaRegistroMovilizacion',
   
            type: "POST",
   
            async: false,
   
            data: postObj,
   
            dataType: "html",
   
            success: function(data) {
   
                let respuesta =  $.parseJSON(data);
   
                swal({
   
                    title: "CREADA",
   
                    text:  "Consulta creada correctamente",
   
                    buttons: false,
   
                    icon:  "success",
   
                    timer: 1500,
   
                });
                    
                    
                    resp_func = true
   
   
          // setTimeout('location.reload()',2000); 
   
            },
   
            error: function(data) {
   
                let respuesta =  $.parseJSON(data.responseText);
   
                swal({
   
                    title: "ERROR",
   
                    text:  respuesta.message,
   
                    buttons: false,
   
                    icon:  "error",
   
                    timer: 2500,
   
                });
                    
                    
                    resp_func = false
   
            }
   
        });
        
        return resp_func
}

//ºº--HISTORIAL MOVILIZACION--
function cargarRegistroMovilizacion_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

     
    // let fecha ="2023-05-25";

     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));

     

    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoMovilizacion').show(); //tabla-Movilizacion

        tablaRegistroMovilizacion_1(idResidente,fecha);       
        // ,fecha

    }else{
        $('#ver-tabla-historicoMovilizacion').hide();    
    }
        
}


function tablaRegistroMovilizacion_1(id,fecha){

    let miTitulo="HISTORIAL MOVILIZACIÓN ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoMovilizacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicomovilizacion&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"rh_fisica"},

            {"data":"ejercicios_cama"},

            {"data":"cambio_postural"},
            {"data":"levantar_alsillon"},
            {"data":"encamado"},

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });


}

//--------------INTERVALO:------------
function cargarRegistroMovilizacion_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

 

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));


      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoMovilizacion').show(); //tabla-Movilizacion

          tablaRegistroMovilizacion_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoMovilizacion').hide();    
    }
        
}
function tablaRegistroMovilizacion_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL MOVILIZACIÓN (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoMovilizacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicomovilizacionintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
            // +"&mifecha="+fecha

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"rh_fisica"},

            {"data":"ejercicios_cama"},

            {"data":"cambio_postural"},
            {"data":"levantar_alsillon"},
            {"data":"encamado"},

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}
        ]

    });



}
//ºº--HISTORIAL MOVILIZACION--







// -------------------------**|5|HIGIENE**-----------------------
function cargarTablaHigiene(idResidente){
    
    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-higiene').toggle(); //tabla se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-incidencia').hide();
        $('#ver-tabla-medicacion').hide();
    }else{

        $('#ver-tabla-higiene').hide();

    }
}

function agregarHigiene(idResidente){
        let resp_func = false
  
     let fecha= convertirFechaEspIngles(($('#fechaRegistrohigiene').val()).substr(0,10))+($('#fechaRegistrohigiene').val().substr(10,6))+":00";
    
   
     let turno=$("#turnos_higiene").val();  //Turno("M","T","N")
     let bano_ducha_v=$("#bano_ducha").prop('checked');
     if(bano_ducha_v==true){
         bano_ducha_v="si";
     }else{
          bano_ducha_v="no";
     }
     let aseo_v=$("#aseo").prop('checked');
     if(aseo_v==true){
         aseo_v="si";
     }else{
          aseo_v="no";
     }
     let h_bucal_v=$("#h_bucal").prop('checked');
     if(h_bucal_v==true){
         h_bucal_v="si";
     }else{
          h_bucal_v="no";
     }

     let u_manos_v=$("#u_manos").prop('checked');
     if(u_manos_v==true){
         u_manos_v="si";
     }else{
          u_manos_v="no";
     }

     let u_pies_v=$("#u_pies").prop('checked');
     if(u_pies_v==true){
         u_pies_v="si";
     }else{
          u_pies_v="no";
     }

     let afeitado_v=$("#afeitado").prop('checked');
     if(afeitado_v==true){
         afeitado_v="si";
     }else{
          afeitado_v="no";
     }

     let h_genital_v=$("#h_genital").prop('checked');
     if(h_genital_v==true){
         h_genital_v="si";
     }else{
          h_genital_v="no";
     }

     let vestido_v=$("#vestido").prop('checked');
     if(vestido_v==true){
         vestido_v="si";
     }else{
          vestido_v="no";
     }

     let otrosHigiene_v=$("#otros_higiene").val();

          var postObj = {
   
            id_residente : idResidente,
   
            id_personal : idUsuario,
   
            fecha : fecha,
   
            bano_ducha : bano_ducha_v,

            aseo : aseo_v,

            higiene_bucal : h_bucal_v,

            unas_manos : u_manos_v,

            unas_pies : u_pies_v,

            afeitado : afeitado_v,

            higiene_genital : h_genital_v,

            vestido : vestido_v,

            otros : otrosHigiene_v,

            turno : turno
        }
   
      
   
   
        $.ajax({
   
            url: '../controllers/registro.php?task=altaRegistroHigiene',
   
            type: "POST",
   
            async: false,
   
            data: postObj,
   
            dataType: "html",
   
            success: function(data) {
   
                let respuesta =  $.parseJSON(data);
   
                swal({
   
                    title: "CREADA",
   
                    text:  "Consulta creada correctamente",
   
                    buttons: false,
   
                    icon:  "success",
   
                    timer: 1500,
   
                });
   
   
   			resp_func = true
          // setTimeout('location.reload()',2000); 
   
            },
   
            error: function(data) {
   
                let respuesta =  $.parseJSON(data.responseText);
   
                swal({
   
                    title: "ERROR",
   
                    text:  respuesta.message,
   
                    buttons: false,
   
                    icon:  "error",
   
                    timer: 2500,
   
                });
                    
                    resp_func = false
   
            }
   
        });
        
        return resp_func
   }

//ºº--HISTORIAL HIGIENE--
function cargarRegistroHigiene_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

  

    // let fecha ="2023-05-25";

     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));

   

    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoHigiene').show(); //tabla-Higiene

        tablaRegistroHigiene_1(idResidente,fecha);       
        

    }else{
        $('#ver-tabla-historicoHigiene').hide();    
    }
        
}


function tablaRegistroHigiene_1(id,fecha){

    let miTitulo="HISTORIAL HIGIENE ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoHigiene').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicohigiene&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"bano_ducha"},

            {"data":"aseo"},

            {"data":"higiene_bucal"},
            {"data":"unas_manos"},
            {"data":"unas_pies"},
            {"data":"afeitado"},
            {"data":"higiene_genital"},
            {"data":"vestido"},

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });


}

//--------------INTERVALO:------------
function cargarRegistroHigiene_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

   

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));
  

      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoHigiene').show(); //tabla-Higiene

          tablaRegistroHigiene_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoHigiene').hide();    
    }
        
}
function tablaRegistroHigiene_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL HIGIENE (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoHigiene').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicohigieneintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
            // +"&mifecha="+fecha

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"bano_ducha"},

            {"data":"aseo"},

            {"data":"higiene_bucal"},
            {"data":"unas_manos"},
            {"data":"unas_pies"},
            {"data":"afeitado"},
            {"data":"higiene_genital"},
            {"data":"vestido"},

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}
//ºº--HISTORIAL HIGIENE--


// -------------------------**|6|MEDICACION**-----------------------
function cargarTablaMedicacion(idResidente){
    
    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-medicacion').toggle(); //tabla se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-incidencia').hide();

    }else{
        $('#ver-tabla-medicacion').hide();
    }
}

function agregarMedicacion(idResidente){
        let resp_func = false
   
   
     let fecha= convertirFechaEspIngles(($('#fechaRegistromedicacion').val()).substr(0,10))+($('#fechaRegistromedicacion').val().substr(10,6))+":00";
  
   
     let turno=$("#turnos_medicacion").val();  //Turno("M","T","N")
     let oral_v=$("#oral").prop('checked');
     if(oral_v==true){
         oral_v="si";
     }else{
          oral_v="no";
     }
     let topica_v=$("#topica").prop('checked');
     if(topica_v==true){
         topica_v="si";
     }else{
          topica_v="no";
     }
     let rectal_v=$("#rectal").prop('checked');
     if(rectal_v==true){
         rectal_v="si";
     }else{
          rectal_v="no";
     }

     let inhalador_v=$("#inhalador").prop('checked');
     if(inhalador_v==true){
         inhalador_v="si";
     }else{
          inhalador_v="no";
     }

     let g_otica_v=$("#g_otica").prop('checked');
     if(g_otica_v==true){
         g_otica_v="si";
     }else{
          g_otica_v="no";
     }

     let g_oftalmica_v=$("#g_oftalmica").prop('checked');
     if(g_oftalmica_v==true){
         g_oftalmica_v="si";
     }else{
          g_oftalmica_v="no";
     }

     let g_nasal_v=$("#g_nasal").prop('checked');
     if(g_nasal_v==true){
         g_nasal_v="si";
     }else{
          g_nasal_v="no";
     }

     let otrosMedicacion_v=$("#otrosMedicacion").val();

          var postObj = {
   
            id_residente : idResidente,
   
            id_personal : idUsuario,
   
            fecha : fecha,
   
            oral : oral_v,

            topica : topica_v,

            rectal : rectal_v,

            inhaladores : inhalador_v,

            gotas_oticas : g_otica_v,

            gotas_oftalmicas : g_oftalmica_v,

            gotas_nasales : g_nasal_v,

            otros : otrosMedicacion_v,

            turno : turno
        }
   
       
      
   
   
        $.ajax({
   
            url: '../controllers/registro.php?task=altaRegistroMedicacion',
   
            type: "POST",
   
            async: false,
   
            data: postObj,
   
            dataType: "html",
   
            success: function(data) {
   
                let respuesta =  $.parseJSON(data);
   
                swal({
   
                    title: "CREADA",
   
                    text:  "Consulta creada correctamente",
   
                    buttons: false,
   
                    icon:  "success",
   
                    timer: 1500,
   
                });
   
   
   			resp_func = true
          // setTimeout('location.reload()',2000); 
   
            },
   
            error: function(data) {
   
                let respuesta =  $.parseJSON(data.responseText);
   
                swal({
   
                    title: "ERROR",
   
                    text:  respuesta.message,
   
                    buttons: false,
   
                    icon:  "error",
   
                    timer: 2500,
   
                });
                    
                    resp_func = false
   
            }
   
        });
        
        return resp_func
   }


//ºº--HISTORIAL MEDICACION--
function cargarRegistroMedicacion_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));



    // let fecha ="2023-05-25";

     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));


    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoMedicacion').show();

        tablaRegistroMedicacion_1(idResidente,fecha);       
        

    }else{
        $('#ver-tabla-historicoMedicacion').hide();    
    }
        
}


function tablaRegistroMedicacion_1(id,fecha){

    let miTitulo="HISTORIAL MEDICACIÓN ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoMedicacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicomedicacion&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"oral"},

            {"data":"topica"},

            {"data":"rectal"},
            {"data":"inhaladores"},
            {"data":"gotas_oticas"},
            {"data":"gotas_oftalmicas"},
            {"data":"gotas_nasales"},
    

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });


}

//--------------INTERVALO:------------
function cargarRegistroMedicacion_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

    

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));
   

      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoMedicacion').show(); //tabla-Medicacion

          tablaRegistroMedicacion_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoMedicacion').hide();    
    }
        
}
function tablaRegistroMedicacion_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL MEDICACIÓN (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoMedicacion').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicomedicacionintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
           

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"oral"},

            {"data":"topica"},

            {"data":"rectal"},
            {"data":"inhaladores"},
            {"data":"gotas_oticas"},
            {"data":"gotas_oftalmicas"},
            {"data":"gotas_nasales"},
    

            {"data":"otros"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}
//ºº--HISTORIAL MEDICACION--

// -------------------------**|7|SUEÑO/DESCANSO**-----------------------
function cargarTablaDescanso(idResidente){
 
	// let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();

	// let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));

	
     
    // let fecha= convertirFechaEspIngles(($('#fechaRegistroDescanso').val()).substr(0,10))+($('#fechaRegistroDescanso').val().substr(10,6))+":00";
    
    
	if(idResidente != undefined && idResidente != ""){

		$('#ver-tabla-descanso').toggle(); //tabla descanso/sueño se muestra
         //Voy a ir ocultando las demás tablas:
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-medicacion').hide();
        $('#ver-tabla-incidencia').hide();
	}else{

		$('#ver-tabla-descanso').hide();

	}
}

function agregarDescanso(idResidente){
        let resp_func = false
        
   	// let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();

	// let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));



     let fecha= convertirFechaEspIngles(($('#fechaRegistroDescanso').val()).substr(0,10))+($('#fechaRegistroDescanso').val().substr(10,6))+":00";


     let nocturno_v; //Nocturno
     let siesta_v;  //siesta
     let turno;  //Turno("M","T","N")

     let nada;
     nocturno_v=$("#nocturnoHoras").val();
     siesta_v=$("#siestaHoras").val();
     turno=$("#turnos_descanso").val();
 
     	 var postObj = {

			id_residente : idResidente,

			id_personal : idUsuario,

			fecha : fecha,

			nocturno : nocturno_v,

			siesta : siesta_v,

        	turno : turno
		}

      


		$.ajax({

			url: '../controllers/registro.php?task=altaRegistroDescanso',

			type: "POST",

			async: false,

			data: postObj,

			dataType: "html",

			success: function(data) {

				let respuesta =  $.parseJSON(data);

				swal({

					title: "CREADA",

					text:  "Consulta creada correctamente",

					buttons: false,

					icon:  "success",

					timer: 1500,

				});

			resp_func = true

		  // setTimeout('location.reload()',2000); 

			},

			error: function(data) {

				let respuesta =  $.parseJSON(data.responseText);

				swal({

					title: "ERROR",

					text:  respuesta.message,

					buttons: false,

					icon:  "error",

					timer: 2500,

				});
                    
                    resp_func = false

			}

		});
        
        return resp_func
}


//ºº--HISTORIAL DESCANSO--
function cargarRegistroDescanso_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

    

    // let fecha ="2023-05-25";

     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));

      

    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoDescanso').show();

        tablaRegistroDescanso_1(idResidente,fecha);       
        

    }else{
        $('#ver-tabla-historicoDescanso').hide();    
    }
        
}


function tablaRegistroDescanso_1(id,fecha){

    let miTitulo="HISTORIAL SUEÑO/DESCANSO ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoDescanso').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicodescanso&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"nocturno"},

            {"data":"siesta"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });


}

//--------------INTERVALO:------------
function cargarRegistroDescanso_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

    

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));
     

      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoDescanso').show(); //tabla-Descanso

          tablaRegistroDescanso_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoDescanso').hide();    
    }
        
}
function tablaRegistroDescanso_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL SUEÑO/DESCANSO (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoDescanso').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicodescansointervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
           

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"nocturno"},

            {"data":"siesta"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}
//ºº--HISTORIAL DESCANSO--

// -------------------------**|8|INCIDENCIA**-----------------------
function cargarTablaIncidencia(idResidente){
 
    // let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();

    // let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));
    
    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-incidencia').toggle(); //tabla se muestra
        $('#ver-tabla-descanso').hide();
        $('#ver-tabla-constante').hide();
        $('#ver-tabla-eliminacion').hide();
        $('#ver-tabla-alimentacion').hide();
        $('#ver-tabla-movilizacion').hide();
        $('#ver-tabla-higiene').hide();
        $('#ver-tabla-medicacion').hide();

    }else{

        $('#ver-tabla-incidencia').hide();

    }
}

function agregarIncidencia(idResidente){
        let resp_func = false
//  let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();
//  let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));
 

  let fecha= convertirFechaEspIngles(($('#fechaRegistroincidencia').val()).substr(0,10))+($('#fechaRegistroincidencia').val().substr(10,6))+":00";
  

  let incidencia_v=$("#incidencia_text").val(); //incidencia
  let turno=$("#turnos_incidencia").val(); //Turno("M","T","N")

       var postObj = {

         id_residente : idResidente,

         id_personal : idUsuario,

         fecha : fecha,

         incidencias : incidencia_v,

         turno : turno
     }
       

		
     $.ajax({

         url: '../controllers/registro.php?task=altaRegistroIncidencia',

         type: "POST",

         async: false,

         data: postObj,

         dataType: "html",

         success: function(data) {
			
             let respuesta =  $.parseJSON(data);

             swal({

                 title: "CREADA",

                 text:  "Consulta creada correctamente",

                 buttons: false,

                 icon:  "success",

                 timer: 1500,

             });


		resp_func = true
       // setTimeout('location.reload()',2000); 

         },

         error: function(data) {

             let respuesta =  $.parseJSON(data.responseText);

             swal({

                 title: "ERROR",

                 text:  respuesta.message,

                 buttons: false,

                 icon:  "error",

                 timer: 2500,

             });
                 
                 resp_func = false

         }

     });
        
        return resp_func
}


//ºº--HISTORIAL INCIDENCIA--
function cargarRegistroIncidencia_1(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

     
     let fecha = convertirFechaEspIngles(($('#diaFechaId').val()).substr(0,10))+($('#diaFechaId').val().substr(10,6));

      

    if(idResidente != undefined && idResidente != ""){

        $('#ver-tabla-historicoIncidencia').show();

        tablaRegistroIncidencia_1(idResidente,fecha);       
        

    }else{
        $('#ver-tabla-historicoIncidencia').hide();    
    }
        
}


function tablaRegistroIncidencia_1(id,fecha){

    let miTitulo="HISTORIAL INCIDENCIA ("+cambiarFormatoFecha(fecha)+")";

    var table = $('#tabla-historicoIncidencia').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoincidencia&idResidente="+id+""+"&mifecha="+fecha+""
            

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"incidencias"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });


}

//--------------INTERVALO:------------
function cargarRegistroIncidencia_2(){

    let modoBusqueda = $('#ver-historial-registro').find('.modoBusquedaResidente').val();

    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-registro'));

   

    // let fecha ="2023-05-25";

     let fechaDesde = convertirFechaEspIngles(($('#fechaDesdeId').val()).substr(0,10))+($('#fechaDesdeId').val().substr(10,6));
     let fechaHasta = convertirFechaEspIngles(($('#fechaHastaId').val()).substr(0,10))+($('#fechaHastaId').val().substr(10,6));
    

      var date1 = new Date(fechaDesde);
		var date2 = new Date(fechaHasta);

    if(idResidente != undefined && idResidente != ""){
        if(date1<date2){
          $('#ver-tabla-historicoIncidencia').show(); //tabla-Incidencia

          tablaRegistroIncidencia_2(idResidente,fechaDesde, fechaHasta);       
        }

    }else{
        $('#ver-tabla-historicoIncidencia').hide();    
    }
        
}
function tablaRegistroIncidencia_2(id,fechaDesde, fechaHasta){
    
    let miTitulo="HISTORIAL INCIDENCIA (Del "+cambiarFormatoFecha(fechaDesde)+" al "+cambiarFormatoFecha(fechaHasta)+")";

    var table = $('#tabla-historicoIncidencia').DataTable({

        dom: 'Bfrtip',

        buttons:[

            {

                extend:    'excelHtml5',

                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a Excel',

                className: 'btn btn-success'

            },

            {

                extend:    'pdfHtml5',

                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Exportar a PDF',

                className: 'btn btn-danger',

                orientation: 'landscape',

                pageSize: 'A3',
    
                download: 'open',
    
                title: miTitulo

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "language": {

           "emptyTable":     "No hay registros para este residente"

        },

        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

        "ajax":{

            "method":"POST",

            "url":"../controllers/tablas.php?funcion=historicoincidenciaintervalo&idResidente="+id+"&mifecha1="+fechaDesde+"&mifecha2="+fechaHasta+""
           

        },

        "order": [ 0, 'desc' ],

        "columns":[

            {"data":"fecha","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY hh:mm')

                }

            },

            {"data":"dni_residente"},

            {"data":"nombre_residente"},

            {"data":"incidencias"},

            {"data":"nombre_personal"},

            {"data":"turno"}

        ]

    });



}
//ºº--HISTORIAL INCIDENCIA--
// ************************SUMAS ENTRADAS Y SALIDAS DE BALANCE HIDRICO******************************

//ENTRADAS
$("#hidrico_select_entrada").on("change", function()
    {             
        let id_hidrico_e = $(this).val();

        let otrosEntradaBox = $('#otrosEntrada_true').val("");
        otrosEntradaBox = $('#otrosEntrada_true').val();

        // let idResidente="";
        let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();
        let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));

        $.ajax({
            url: '../controllers/registro.php?insertTMP=true',
            dataType:'json',
            type: 'post',
            async: false,
            data: {id_hidrico_e: id_hidrico_e,
                   otrosEntradaBox: otrosEntradaBox,
                   id_residente: idResidente},
            })
        .done(function(e) {
            
            let suma= parseInt(e.sumaEntradas,10);
           

            $("#sumEntradas").val(suma);
            //--------------------------------
            // let sum_entrada= $('#sumEntradas').val();
            let sum_salida= $('#sumSalidas').val();
            let resta;
             if(sum_salida!=""){
                resta=suma -parseInt(sum_salida,10);
             }else{
                resta=suma;
             }
            
            $("#balanceResultado").val(resta);
        });
        

    })


//------------------------------------------------------------------------------
//SALIDAS
$("#hidrico_select_salida").on("change", function()
    {    

        let id_hidrico_s = $(this).val();

        let diuresisSalidaBox = $('#diuresisEntrada_true').val("");
         diuresisSalidaBox = $('#diuresisEntrada_true').val();   

        let otrosSalidaBox = $('#otrosSalida_true').val("");
         otrosSalidaBox = $('#otrosSalida_true').val();    

        let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();
        let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));
        
        $.ajax({
            url: '../controllers/registro.php?insertTMP=true',
            dataType:'json',
            type: 'post',
            async: false,
            data: {id_hidrico_s: id_hidrico_s,
                   diuresis_box: diuresisSalidaBox,
                   otros_box: otrosSalidaBox,
                   id_residente: idResidente
                 },
        })
        .done(function(e) {

            let suma= parseInt(e.sumaSalidas,10);

            $("#sumSalidas").val(suma);

            //--------------
            let sum_entrada= $('#sumEntradas').val();
 
            let resta;

            if(sum_entrada!=""){
                resta=parseInt(sum_entrada,10) -suma;
             }else{
                resta=suma*(-1);
             }
            
            $("#balanceResultado").val(resta);
            
        });
        

    })


//------------------------------------***Input otros de Entradas***------------------------------------------
//entradas otros -> se abre una caja de texto donde se introduce un numero y se suma a SUMA DE ENTRADAS
$("#otrosEntrada_true").on("change", function()
{    
    let otrosEntradaBox = $(this).val();
    let id_hidrico_e = $("#hidrico_select_entrada").val();

    let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();
    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));


    $.ajax({
            url: '../controllers/registro.php?insertTMP=true',
            dataType:'json',
            type: 'post',
            async: false,
            data: {id_hidrico_e: id_hidrico_e,
                  otrosEntradaBox:otrosEntradaBox,
                  id_residente: idResidente},
            })
        .done(function(e) {

            let suma= parseInt(e.sumaEntradas,10);

            $("#sumEntradas").val(suma);
            //------------------------------------- 
            let sum_salida= $('#sumSalidas').val();
            let resta;
             if(sum_salida!=""){
                resta=suma -parseInt(sum_salida,10);
                 $("#balanceResultado").val(resta);
             }else{
                $("#balanceResultado").val(suma);
             }           

        });
})

//------------------------------------***Input diuresis de Salidas***------------------------------------------
//Salidas diuresis -> se abre una caja de texto donde se introduce un numero y se suma a SUMA DE SALIDAS
$("#diuresisEntrada_true").on("change", function()
{    
    let diuresisSalidaBox =$(this).val();
    let otrosSalidaBox = $('#otrosSalida_true').val();
    
    
    let id_hidrico_s = $("#hidrico_select_salida").val();

    let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();
    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));

    $.ajax({
            url: '../controllers/registro.php?insertTMP=true',
            dataType:'json',
            type: 'post',
            async: false,
            data: {id_hidrico_s: id_hidrico_s,
                   diuresis_box:diuresisSalidaBox,
                   otros_box:otrosSalidaBox,
                   id_residente: idResidente},
            })
        .done(function(e) {

            let suma= parseInt(e.sumaSalidas,10);

            $("#sumSalidas").val(suma);
            //------------------------------------- 
            let sum_entrada= $('#sumEntradas').val();
            let resta;
             if(sum_entrada!=""){
                resta=parseInt(sum_entrada,10) -suma;
                $("#balanceResultado").val(resta);    
             }else{
                resta=suma*(-1);
                $("#balanceResultado").val(resta);         

             }  
            
        });
})



//------------------------------------***Input otros de Salidas***------------------------------------------
//Salidas otros -> se abre una caja de texto donde se introduce un numero y se suma a SUMA DE SALIDAS
$("#otrosSalida_true").on("change", function()
{    
    let otrosSalidaBox =$(this).val();
    let diuresisSalidaBox = $('#diuresisEntrada_true').val();
    

    let id_hidrico_s = $("#hidrico_select_salida").val();

    let modoBusqueda = $('#ver-menu-registro').find('.modoBusquedaResidente').val();
    let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-menu-registro'));

    $.ajax({
            url: '../controllers/registro.php?insertTMP=true',
            dataType:'json',
            type: 'post',
            async: false,
            data: {id_hidrico_s: id_hidrico_s,
                   diuresis_box:diuresisSalidaBox,
                   otros_box:otrosSalidaBox,
                   id_residente: idResidente},
            })
        .done(function(e) {

            let suma= parseInt(e.sumaSalidas,10);

            $("#sumSalidas").val(suma);
            //------------------------------------- 
            let sum_entrada= $('#sumEntradas').val();
            let resta;
             if(sum_entrada!=""){
                resta=parseInt(sum_entrada,10) -suma;
                $("#balanceResultado").val(resta);    
             }else{
                resta=suma*(-1);
                $("#balanceResultado").val(resta);         
             }  
            
        });
})

$(document).ready(function() {
    $('.mySelect2').select2();
});