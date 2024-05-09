


<!--PETICIÓN DE MATERIAL -->

<script src="../js/peticion_material.js"></script>



<div id="ver-peticion-material" class="seccion-menu residenteView" style="display: none;">

    <div class=" align-items-center justify-content-between text-center mb-5">

        <h1 class="h3 mb-0 text-gray-800">Petición de material</h1>

    </div>

    <?php 

       include('busqueda_provecat.php');

	?>







    <div class="container">

        <div class="container" id="visualCarnitas" style="display: none;">

            <div class="row">

                <!-- Elementos generados a partir del JSON -->

                <main id="items" class="col-sm-12 row"></main>

            </div>

        </div>







        <div class="container" id="visualFrutas" style="display: none;">

            <div class="row">

                <!-- Elementos generados a partir del JSON -->

                <main id="items2" class="col-sm-12 row"></main>

            </div>

        </div>



        <div class="container" id="visualVerduras" style="display: none;">

            <div class="row">

                <!-- Elementos generados a partir del JSON -->

                <main id="items3" class="col-sm-12 row"></main>

            </div>

        </div>



        <div class="container" id="visualPescado" style="display: none;">

            <div class="row">

                <!-- Elementos generados a partir del JSON -->

                <main id="items4" class="col-sm-12 row"></main>

            </div>

        </div>



        <div class="container" id="visualPastarroz" style="display: none;">

            <div class="row">

                <!-- Elementos generados a partir del JSON -->

                <main id="items5" class="col-sm-12 row"></main>

            </div>

        </div>



        <div class="container" id="visualMercadona" style="display: none;">

            <div class="row">

                <!-- Elementos generados a partir del JSON -->

                <main id="items6" class="col-sm-12 row"></main>

            </div>

        </div>

    </div>



    <div class="container" id="visualHigiene" style="display: none;">

        <div class="row">

            <!-- Elementos generados a partir del JSON -->

            <main id="items7" class="col-sm-12 row"></main>

        </div>

    </div>



    <div class="container" id="visualLimpieza" style="display: none;">

        <div class="row">

            <!-- Elementos generados a partir del JSON -->

            <main id="items8" class="col-sm-12 row"></main>

        </div>

    </div>

    <div class="container">

        <div class="mt-1" id="ocultarCarrito" style="margin-left:1.4rem; display:none;">

            <aside class="col-sm-4" style="display: contents;">

                <!--CARRITO-->

                <h2>Carrito</h2>

                <!-- Elementos del carrito -->

                <ul id="carrito" class="list-group"></ul>

                <hr>

                <!-- Precio total -->

                <p class="text-right">Total: <span id="total"></span>&euro;</p>

                <div class="row">

                    <button id="boton-vaciar" class="btn btn-danger my-3 col-xl-2 col-lg-2 col-md-2 col-sm-5">Vaciar</button>

                    <button id="boton-pedir" class="btn btn-success my-3 col-xl-2 col-lg-2 col-md-2 col-sm-5 ml-5">Hacer pedido</button>

                </div>

            </aside>

        </div>

    </div>

</div>