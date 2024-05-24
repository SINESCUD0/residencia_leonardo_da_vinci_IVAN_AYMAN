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
            console.log(xhr.responseText);
            console.log(document.getElementById('habitaciones'));
            console.log(xhr);
            
        } else {
            console.error('Error en la solicitud. Estado:', xhr.status);
        }
    };
    xhr.send('select=' + encodeURIComponent(piso));
}