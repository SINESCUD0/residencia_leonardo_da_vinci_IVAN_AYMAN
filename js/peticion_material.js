window.onload = function() {



    /*$.ajax({

        type: "POST",

        url: "../controllers/residente.php?task=nMedicacion",

        data: {},

        async: false,

        dataType: "html",

        success: function (response) {

            let respuesta =  $.parseJSON(response);

            respuesta.forEach(arrayalimento => {

                console.log(arrayalimento);

            });

        }

    });*/

    

    // Variables

    const baseDeDatos = [{

            id: 1,

            nombre: 'Filete de ternera',

            precio: 3.45,

            imagen: '../ficheros-index/images/filetito.jpg'

        },

        {

            id: 2,

            nombre: 'Pechuga de pollo',

            precio: 2.34,

            imagen: '../ficheros-index/images/filete-pollo.jpeg'

        },

        {

            id: 3,

            nombre: 'Muslo de pollo',

            precio: 2.55,

            imagen: '../ficheros-index/images/muslo-pollo.jpg'

        },

        {

            id: 4,

            nombre: 'Conejo',

            precio: 3.98,

            imagen: '../ficheros-index/images/conejo.jpg'

        },

        {

            id: 5,

            nombre: 'Pechuga de pavo',

            precio: 2.56,

            imagen: '../ficheros-index/images/pechuga-pavo.jpg'

        },





    ];

    //Frutas

    const baseDeDatosFrutas = [{

            id: 6,

            nombre: 'Naranja',

            precio: 1.33,

            imagen: '../ficheros-index/images/naranja.jpg'

        },

        {

            id: 7,

            nombre: 'Manzana',

            precio: 1.55,

            imagen: '../ficheros-index/images/manzana.jpg'

        },

        {

            id: 8,

            nombre: 'Plátanao',

            precio: 1.34,

            imagen: '../ficheros-index/images/platano.jpg'

        },

        {

            id: 9,

            nombre: 'Pera',

            precio: 1.13,

            imagen: '../ficheros-index/images/pera.jpg'

        },

        {

            id: 10,

            nombre: 'Uvas',

            precio: 1.1,

            imagen: '../ficheros-index/images/uvas.jpg'

        },

        {

            id: 11,

            nombre: 'Mandarina',

            precio: 1.13,

            imagen: '../ficheros-index/images/mandarina.jpg'

        },

        {

            id: 12,

            nombre: 'Fresas',

            precio: 1.43,

            imagen: '../ficheros-index/images/fresas.jpg'

        },

        {

            id: 13,

            nombre: 'Sandía',

            precio: 2.45,

            imagen: '../ficheros-index/images/sandia.jpg'

        },

        {

            id: 14,

            nombre: 'Melón',

            precio: 1.95,

            imagen: '../ficheros-index/images/melon.png'

        },

        {

            id: 15,

            nombre: 'Kiwi',

            precio: 1.57,

            imagen: '../ficheros-index/images/kiwi.jpg'

        },





    ];



    //Verduras

    const baseDeDatosVerduras = [{

            id: 16,

            nombre: 'Lechuga',

            precio: 0.40,

            imagen: '../ficheros-index/images/lechuga.jpg'

        },

        {

            id: 17,

            nombre: 'Calabacín',

            precio: 0.80,

            imagen: '../ficheros-index/images/calabacin.jpg'

        },

        {

            id: 18,

            nombre: 'Pimiento Rojo',

            precio: 0.50,

            imagen: '../ficheros-index/images/pimiento-rojo.jpg'

        },

        {

            id: 19,

            nombre: 'Zanahoria',

            precio: 0.60,

            imagen: '../ficheros-index/images/zanahoria.jpg'

        },

        {

            id: 20,

            nombre: 'Cebolla',

            precio: 0.34,

            imagen: '../ficheros-index/images/cebolla.jpg'

        },

        {

            id: 21,

            nombre: 'Acelga',

            precio: 0.64,

            imagen: '../ficheros-index/images/acelga.jpg'

        },

        {

            id: 22,

            nombre: 'Puerro',

            precio: 0.49,

            imagen: '../ficheros-index/images/puerro.jpg'

        },

        {

            id: 23,

            nombre: 'Espinaca',

            precio: 0.94,

            imagen: '../ficheros-index/images/espinaca.jpg'

        },

        {

            id: 24,

            nombre: 'Alcachofas',

            precio: 0.53,

            imagen: '../ficheros-index/images/alcachofas.jpg'

        },

        {

            id: 25,

            nombre: 'Guisantes',

            precio: 0.89,

            imagen: '../ficheros-index/images/guisantes.jpg'

        },

        {

            id: 26,

            nombre: 'Maíz',

            precio: 0.94,

            imagen: '../ficheros-index/images/maiz.jpg'

        },

        {

            id: 27,

            nombre: 'Tomáte',

            precio: 1.55,

            imagen: '../ficheros-index/images/tomate.jpg'

        },

        {

            id: 28,

            nombre: 'Patata',

            precio: 1.43,

            imagen: '../ficheros-index/images/patata.jpg'

        },





    ];



    //Pescado

    const baseDeDatosPescado = [{

            id: 29,

            nombre: 'Gallo',

            precio: 2.11,

            imagen: '../ficheros-index/images/gallo.jpg'

        },

        {

            id: 30,

            nombre: 'Pescadilla',

            precio: 1.56,

            imagen: '../ficheros-index/images/pescadilla.jpg'

        },

        {

            id: 31,

            nombre: 'Merluza',

            precio: 2.54,

            imagen: '../ficheros-index/images/merluza.jpg'

        },

        {

            id: 32,

            nombre: 'Bacalao',

            precio: 2.34,

            imagen: '../ficheros-index/images/bacalao.jpg'

        },

        {

            id: 33,

            nombre: 'Boquerón',

            precio: 1.99,

            imagen: '../ficheros-index/images/boqueron.jpeg'

        },

        {

            id: 34,

            nombre: 'Salmón',

            precio: 3.99,

            imagen: '../ficheros-index/images/salmon.jpg'

        },





    ];



    //Pasta y arroz

    const baseDeDatosPastarroz = [{

            id: 35,

            nombre: 'Arroz',

            precio: 0.23,

            imagen: '../ficheros-index/images/arroz.jpg'

        },

        {

            id: 36,

            nombre: 'Garbanzos',

            precio: 0.34,

            imagen: '../ficheros-index/images/garbanzos.jpg'

        },

        {

            id: 37,

            nombre: 'Lentejas',

            precio: 0.33,

            imagen: '../ficheros-index/images/lentejas.jpg'

        },

        {

            id: 38,

            nombre: 'Alubias',

            precio: 0.22,

            imagen: '../ficheros-index/images/alubias.jpg'

        },

        {

            id: 39,

            nombre: 'Espaguetis',

            precio: 0.43,

            imagen: '../ficheros-index/images/espaguetis.jpg'

        },

        {

            id: 40,

            nombre: 'Macarrones',

            precio: 0.21,

            imagen: '../ficheros-index/images/macarron.jpg'

        },

        {

            id: 41,

            nombre: 'Fideos',

            precio: 0.32,

            imagen: '../ficheros-index/images/fideos.jpg'

        },





    ];





    // Mercadona

    const baseDeDatosMercadona = [{

            id: 42,

            nombre: 'Yogures Sabores - Pack',

            precio: 0.99,

            imagen: '../ficheros-index/images/yogur.jpg'

        },

        {

            id: 43,

            nombre: 'Leche Desnatada - L',

            precio: 0.66,

            imagen: '../ficheros-index/images/leche-desnatada.jpg'

        },

        {

            id: 44,

            nombre: 'Leche Semidesnatada - L',

            precio: 0.88,

            imagen: '../ficheros-index/images/leche-semi.jpg'

        },

        {

            id: 45,

            nombre: 'Queso Fresco - Kg',

            precio: 1.12,

            imagen: '../ficheros-index/images/queso-fresh.jpg'

        },

        {

            id: 46,

            nombre: 'Queso Tierno - Kg',

            precio: 1.23,

            imagen: '../ficheros-index/images/espaguetis.jpg'

        },

        {

            id: 47,

            nombre: 'Queso Semicurado - Kg',

            precio: 1.33,

            imagen: '../ficheros-index/images/queso-semi.jpg'

        },

        {

            id: 48,

            nombre: 'Huevos - Docena',

            precio: 0.12,

            imagen: '../ficheros-index/images/huevos.jpg'

        },

        {

            id: 49,

            nombre: 'Galletas - Pack',

            precio: 0.98,

            imagen: '../ficheros-index/images/galletas.jpg'

        },

        {

            id: 50,

            nombre: 'Pan Tostado - Pack',

            precio: 0.55,

            imagen: '../ficheros-index/images/pan-tostado.jpeg'

        },

        {

            id: 51,

            nombre: 'Mermelada - Unidad',

            precio: 0.98,

            imagen: '../ficheros-index/images/mermelada.jpg'

        },

        {

            id: 52,

            nombre: 'Mantequilla - Pack',

            precio: 0.77,

            imagen: '../ficheros-index/images/mantequilla.jpg'

        },

        {

            id: 53,

            nombre: 'Magdalenas - Pack',

            precio: 0.99,

            imagen: '../ficheros-index/images/magdalenas.jpg'

        },

        {

            id: 54,

            nombre: 'Bizcocho - Unidad',

            precio: 1.11,

            imagen: '../ficheros-index/images/bizcocho.jpeg'

        },

        {

            id: 55,

            nombre: 'Zumo de Melocotón - L',

            precio: 1.23,

            imagen: '../ficheros-index/images/zumo-melocoton.jpg'

        },

        {

            id: 56,

            nombre: 'Zumo de Piña - L',

            precio: 1.33,

            imagen: '../ficheros-index/images/zumo-pina.jpg'

        },





    ];



    // Higiene

    const baseDeDatosHigiene = [{

            id: 57,

            nombre: 'Champú',

            precio: 0.98,

            imagen: '../ficheros-index/images/champu.jpg'

        },

        {

            id: 58,

            nombre: 'Gel',

            precio: 0.66,

            imagen: '../ficheros-index/images/gel.jpg'

        },

        {

            id: 59,

            nombre: 'Colonia',

            precio: 2.33,

            imagen: '../ficheros-index/images/colonia.jpg'

        },

        {

            id: 60,

            nombre: 'Crema Hidratante',

            precio: 2.11,

            imagen: '../ficheros-index/images/crema.jpg'

        },

        {

            id: 61,

            nombre: 'Empapador',

            precio: 1.19,

            imagen: '../ficheros-index/images/empapador.jpg'

        },

        {

            id: 62,

            nombre: 'Pañales',

            precio: 1.11,

            imagen: '../ficheros-index/images/panal.jpg'

        },



    ];



    // Limpieza

    const baseDeDatosLimpieza = [{

        id: 63,

        nombre: 'Desinfectante',

        precio: 0.98,

        imagen: '../ficheros-index/images/desinfectante.jpg'

    },

    {

        id: 64,

        nombre: 'Limpieza de suelos',

        precio: 0.88,

        imagen: '../ficheros-index/images/limpia-suelos.jpg'

    },

    {

        id: 65,

        nombre: 'Limpieza de cristales',

        precio: 1.23,

        imagen: '../ficheros-index/images/limpia-cristal.jpg'

    },

    {

        id: 66,

        nombre: 'Limpieza de muebles',

        precio: 1.39,

        imagen: '../ficheros-index/images/limpia-mueble.jpg'

    },

    {

        id: 67,

        nombre: 'Limpieza de cocina',

        precio: 1.19,

        imagen: '../ficheros-index/images/limpia-cocina.jpg'

    },

    {

        id: 68,

        nombre: 'Limpieza de baño',

        precio: 1.12,

        imagen: '../ficheros-index/images/limpia-bano.jpg'

    },

    {

        id: 69,

        nombre: 'Lavado de ropa',

        precio: 1.56,

        imagen: '../ficheros-index/images/limpia-ropa.jpg'

    },

    {

        id: 70,

        nombre: 'Gel hidroalcohólico',

        precio: 0.88,

        imagen: '../ficheros-index/images/gel-hidro.jpg'

    },

    {

        id: 71,

        nombre: 'Mascarillas',

        precio: 1.1,

        imagen: '../ficheros-index/images/mascarilla.jpg'

    },



];



    let carrito = [];

    let total = 0;

    const DOMitems = document.querySelector('#items');

    const DOMitems2 = document.querySelector('#items2');

    const DOMitems3 = document.querySelector('#items3');

    const DOMitems4 = document.querySelector('#items4'); //Pescado

    const DOMitems5 = document.querySelector('#items5'); //Pasta y arroz

    const DOMitems6 = document.querySelector('#items6'); //Mercadona

    const DOMitems7 = document.querySelector('#items7'); // Higiene

    const DOMitems8 = document.querySelector('#items8'); // Limpieza

    const DOMcarrito = document.querySelector('#carrito');

    const DOMtotal = document.querySelector('#total');

    const DOMbotonVaciar = document.querySelector('#boton-vaciar');



    // Funciones



    /**

     * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito

     */

    function renderizarProductos() {

        baseDeDatos.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Kg';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems.appendChild(miNodo);

        });



        //Frutas

        baseDeDatosFrutas.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Kg';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems2.appendChild(miNodo);

        });



        //Verduras

        baseDeDatosVerduras.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Kg';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems3.appendChild(miNodo);

        });



        //Pescados

        baseDeDatosPescado.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Kg';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems4.appendChild(miNodo);

        });



        //Pasta y arroz

        baseDeDatosPastarroz.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Kg';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems5.appendChild(miNodo);

        });



        //Mercadona

        baseDeDatosMercadona.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            // miNodoPrecio.textContent = info.preciounidad + '€';

            miNodoPrecio.textContent = info.precio + '€';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems6.appendChild(miNodo);

        });



        // Higiene

        baseDeDatosHigiene.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Unidad';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems7.appendChild(miNodo);

        });



        // Limpieza

        baseDeDatosLimpieza.forEach((info) => {

            // Estructura

            const miNodo = document.createElement('div');

            miNodo.classList.add('card', 'col-sm-4');

            // Body

            const miNodoCardBody = document.createElement('div');

            miNodoCardBody.classList.add('card-body');

            // Titulo

            const miNodoTitle = document.createElement('h5');

            miNodoTitle.classList.add('card-title');

            miNodoTitle.textContent = info.nombre;

            // Imagen

            const miNodoImagen = document.createElement('img');

            miNodoImagen.classList.add('img-fluid');

            miNodoImagen.setAttribute('src', info.imagen);

            miNodoImagen.setAttribute('style', 'object-fit:cover; width:171px; height:113px');

            // Precio

            const miNodoPrecio = document.createElement('p');

            miNodoPrecio.classList.add('card-text');

            miNodoPrecio.textContent = info.precio + '€ Unidad';

            // Boton 

            const miNodoBoton = document.createElement('button');

            miNodoBoton.classList.add('btn', 'btn-primary');

            miNodoBoton.textContent = '+';

            miNodoBoton.setAttribute('marcador', info.id);

            miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);

            // Insertamos

            miNodoCardBody.appendChild(miNodoImagen);

            miNodoCardBody.appendChild(miNodoTitle);

            miNodoCardBody.appendChild(miNodoPrecio);

            miNodoCardBody.appendChild(miNodoBoton);

            miNodo.appendChild(miNodoCardBody);

            DOMitems8.appendChild(miNodo);

        });



    }



    /**

     * Evento para añadir un producto al carrito de la compra

     */

    function anyadirProductoAlCarrito(evento) {

        // Anyadimos el Nodo a nuestro carrito

        carrito.push(evento.target.getAttribute('marcador'))

            // Calculo el total

        calcularTotal();

        // Actualizamos el carrito 

        renderizarCarrito();



    }



    /**

     * Dibuja todos los productos guardados en el carrito

     */

    function renderizarCarrito() {

        // Vaciamos todo el html

        DOMcarrito.textContent = '';

        // Quitamos los duplicados

        const carritoSinDuplicados = [...new Set(carrito)];

        // Generamos los Nodos a partir de carrito

        carritoSinDuplicados.forEach((item) => {

            // Obtenemos el item que necesitamos de la variable base de datos

            var miItem = baseDeDatos.filter((itemBaseDatos) => {

                // ¿Coincide las id? Solo puede existir un caso

                return itemBaseDatos.id === parseInt(item);

            });



            //Filtrar después de cada búsqueda si ya tiene un item



            if (miItem.length == 0) {

                miItem = baseDeDatosFrutas.filter((itemBaseDatos) => {

                    // ¿Coincide las id? Solo puede existir un caso

                    return itemBaseDatos.id === parseInt(item);

                });

                if (miItem.length == 0) {

                    miItem = baseDeDatosVerduras.filter((itemBaseDatos) => {

                        // ¿Coincide las id? Solo puede existir un caso

                        return itemBaseDatos.id === parseInt(item);

                    });

                    if (miItem.length == 0) {

                        miItem = baseDeDatosPescado.filter((itemBaseDatos) => {

                            // ¿Coincide las id? Solo puede existir un caso

                            return itemBaseDatos.id === parseInt(item);

                        });



                        if (miItem.length == 0) {

                            miItem = baseDeDatosPastarroz.filter((itemBaseDatos) => {

                                // ¿Coincide las id? Solo puede existir un caso

                                return itemBaseDatos.id === parseInt(item);

                            });

                            if (miItem.length == 0) {

                                miItem = baseDeDatosMercadona.filter((itemBaseDatos) => {

                                    // ¿Coincide las id? Solo puede existir un caso

                                    return itemBaseDatos.id === parseInt(item);

                                });

                            }

                            if (miItem.length == 0) {

                                miItem = baseDeDatosHigiene.filter((itemBaseDatos) => {

                                    // ¿Coincide las id? Solo puede existir un caso

                                    return itemBaseDatos.id === parseInt(item);

                                });

                            }

                            if (miItem.length == 0) {

                                miItem = baseDeDatosLimpieza.filter((itemBaseDatos) => {

                                    // ¿Coincide las id? Solo puede existir un caso

                                    return itemBaseDatos.id === parseInt(item);

                                });

                            }

                        }

                    }

                }

            }

            // Cuenta el número de veces que se repite el producto

            const numeroUnidadesItem = carrito.reduce((total, itemId) => {

                // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo

                return itemId === item ? total += 1 : total;

            }, 0);

            // Creamos el nodo del item del carrito

            const miNodo = document.createElement('li');

            miNodo.classList.add('list-group-item', 'text-right', 'mx-2');

            miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}€`;

            // Boton de borrar

            const miBoton = document.createElement('button');

            miBoton.classList.add('btn', 'btn-danger', 'mx-5');

            miBoton.textContent = 'X';

            miBoton.style.marginLeft = '1rem';

            miBoton.dataset.item = item;

            miBoton.addEventListener('click', borrarItemCarrito);

            // Mezclamos nodos

            miNodo.appendChild(miBoton);

            DOMcarrito.appendChild(miNodo);

        });

    }



    /**

     * Evento para borrar un elemento del carrito

     */

    function borrarItemCarrito(evento) {

        // Obtenemos el producto ID que hay en el boton pulsado

        const id = evento.target.dataset.item;

        // Borramos todos los productos

        carrito = carrito.filter((carritoId) => {

            return carritoId !== id;

        });

        // volvemos a renderizar

        renderizarCarrito();

        // Calculamos de nuevo el precio

        calcularTotal();

    }



    /**

     * Calcula el precio total teniendo en cuenta los productos repetidos

     */

    function calcularTotal() {

        // Limpiamos precio anterior

        total = 0;

        // Recorremos el array del carrito

        carrito.forEach((item) => {

            // De cada elemento obtenemos su precio

            var miItem = baseDeDatos.filter((itemBaseDatos) => {

                return itemBaseDatos.id === parseInt(item);

            });



            if (miItem.length == 0) {

                miItem = baseDeDatosFrutas.filter((itemBaseDatos) => {

                    return itemBaseDatos.id === parseInt(item);

                });

                if (miItem.length == 0) {

                    miItem = baseDeDatosVerduras.filter((itemBaseDatos) => {

                        return itemBaseDatos.id === parseInt(item);

                    });

                    if (miItem.length == 0) {

                        miItem = baseDeDatosPescado.filter((itemBaseDatos) => {

                            return itemBaseDatos.id === parseInt(item);

                        });

                        if (miItem.length == 0) {

                            miItem = baseDeDatosPastarroz.filter((itemBaseDatos) => {

                                return itemBaseDatos.id === parseInt(item);

                            });

                            if (miItem.length == 0) {

                                miItem = baseDeDatosMercadona.filter((itemBaseDatos) => {

                                    return itemBaseDatos.id === parseInt(item);

                                });

                            }

                            if (miItem.length == 0) {

                                miItem = baseDeDatosHigiene.filter((itemBaseDatos) => {

                                    return itemBaseDatos.id === parseInt(item);

                                });

                            }

                            if (miItem.length == 0) {

                                miItem = baseDeDatosLimpieza.filter((itemBaseDatos) => {

                                    return itemBaseDatos.id === parseInt(item);

                                });

                            }

                        }

                    }

                }

            }



            total = total + miItem[0].precio;

        });

        // Renderizamos el precio en el HTML

        DOMtotal.textContent = total.toFixed(2);

    }



    /**

     * Varia el carrito y vuelve a dibujarlo

     */

    function vaciarCarrito() {

        // Limpiamos los productos guardados

        carrito = [];

        // Renderizamos los cambios

        renderizarCarrito();

        calcularTotal();

    }



    function itemsEnCarrito(){

        return $("#carrito li").length;

    }



    function hacerPedido(){

        var carritocondatos = Array();

        const carritoSinDuplicados = [...new Set(carrito)];

        // Generamos los Nodos a partir de carrito

        carritoSinDuplicados.forEach((item) => {

            // Obtenemos el item que necesitamos de la variable base de datos

            var miItem = baseDeDatos.filter((itemBaseDatos) => {

                // ¿Coincide las id? Solo puede existir un caso

                return itemBaseDatos.id === parseInt(item);

            });



            //Filtrar después de cada búsqueda si ya tiene un item



            if (miItem.length == 0) {

                miItem = baseDeDatosFrutas.filter((itemBaseDatos) => {

                    // ¿Coincide las id? Solo puede existir un caso

                    return itemBaseDatos.id === parseInt(item);

                });

                if (miItem.length == 0) {

                    miItem = baseDeDatosVerduras.filter((itemBaseDatos) => {

                        // ¿Coincide las id? Solo puede existir un caso

                        return itemBaseDatos.id === parseInt(item);

                    });

                    if (miItem.length == 0) {

                        miItem = baseDeDatosPescado.filter((itemBaseDatos) => {

                            // ¿Coincide las id? Solo puede existir un caso

                            return itemBaseDatos.id === parseInt(item);

                        });

                        if (miItem.length == 0) {

                            miItem = baseDeDatosPastarroz.filter((itemBaseDatos) => {

                                // ¿Coincide las id? Solo puede existir un caso

                                return itemBaseDatos.id === parseInt(item);

                            });

                            if (miItem.length == 0) {

                                miItem = baseDeDatosMercadona.filter((itemBaseDatos) => {

                                    // ¿Coincide las id? Solo puede existir un caso

                                    return itemBaseDatos.id === parseInt(item);

                                });

                                if (miItem.length == 0) {

                                    miItem = baseDeDatosHigiene.filter((itemBaseDatos) => {

                                        // ¿Coincide las id? Solo puede existir un caso

                                        return itemBaseDatos.id === parseInt(item);

                                    });

                                    if (miItem.length == 0) {

                                        miItem = baseDeDatosLimpieza.filter((itemBaseDatos) => {

                                            // ¿Coincide las id? Solo puede existir un caso

                                            return itemBaseDatos.id === parseInt(item);

                                        });

                                    }

                                }

                            }

                        }

                    }

                }

            }

            // Cuenta el número de veces que se repite el producto

            const numeroUnidadesItem = carrito.reduce((total, itemId) => {

                // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo

                return itemId === item ? total += 1 : total;

            }, 0);



            carritocondatos.push({'id': item, 'stock':numeroUnidadesItem});

            // Creamos el nodo del item del carrito

            

        });

        //Aquí ya tenemos el array entero


        swal({
            title: "PEDIDO REALIZADO",
            text:  "Pedido realizado correctamente",
            buttons: false,
            icon:  "success",
            timer: 2500,
        });

        vaciarCarrito();

    }



    // Eventos

    DOMbotonVaciar.addEventListener('click', vaciarCarrito);



    $("#boton-pedir").click(function (e) { 

        e.preventDefault();

        if(itemsEnCarrito() >= 1){

            hacerPedido();

        }

        

    });



    // Inicio

    renderizarProductos();





}