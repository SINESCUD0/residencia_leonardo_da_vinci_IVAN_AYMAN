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
            });
            // console.log(xhr.responseText);
            // console.log(document.getElementById('habitaciones'));
            // console.log(xhr);
            




            console.log("llegue");
            $('button[name="boton-constantes"]').each(function(index, element){
                // console.log("AYYY")
                $(element).click(function(){
                    idResidente = $(element.parentNode).find(".boton_residente").attr("id");
                    // agregarConstante_idResidente(idResidente)
                    cargarTablaConstanteVital_idResidente(idResidente)
                });
            });
        
            $('button[name="boton-agregar-constante-guardarSiguiente"]').each(function(index){
                console.log("OYYY");
                $(this).click(function(){
                    if ( agregarConstante() ){
                        console.log("paso")
                        $("div#ver-tabla-constante").hide()
                        $("div#ver-tabla-eliminacion").toggle()
                    }
                });
            });







        } else {
            console.error('Error en la solicitud. Estado:', xhr.status);
        }
    };
    xhr.send('select=' + encodeURIComponent(piso));
}