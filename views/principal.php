<?php
include_once './sliderAndGrid.php';
include_once './coverModal.php';

?>
<!-- *************************************************** -->
<!-- SLIDER -> Imagen y titulo -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>ALONE</h5>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>STARRY SKY</h5>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>SUNSET AT THE BEACH</h5>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->


<!-- *************************************************** -->
<!-- GRID 3 COL  -->
<div class="container center">
    <div class="row center MT">
        <div class="col-md">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="./public/images/1.jpeg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5>BEAUTIFUL PAINTING</h5>
                    <p class="card-text">
                        A beautiful painting that expresses the lives of many people who live in such a place.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="./public/images/2.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5>FIELD OF FLOWERS</h5>
                    <p class="card-text">
                        Field of many smells and colors, where you feel that you can be born many more times.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="./public/images/3.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5>UNMATCHED VEGETATION</h5>
                    <p class="card-text">
                        It seems that someone took it out of a movie, if it is real I would live my whole life there.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- *************************************************** -->
<!-- COVER - Modal -->
<hr>
<div id="coverModal" class="container-fluid" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
    <div class="row center MT">
        <div class="col-md-12">
            <div class="cover">
                <div class="cover-text">
                    <h1>Cover</h1>
                    <p>
                        Click aqui para abrir un modal
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal right fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
    <div class="modal-dialog modal-side modal-bottom-right ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>ESTE ES UN MODAL</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>



<!-- *********************************** -->
<!-- FORM -->
<hr>
<div class="center MT">
    <h1>Formulario</h1>
    <div class="d-flex justify-content-center align-items-center container MT">
        <form class="center" method="POST" action="./controllers/registroUsuarios.php">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>

                <div class="form-group col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" name="edad">
                </div>

                <div class="form-group col-md-8">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>

            <div>
                <label for="habilidades">Habilidades</label>
                <div class="dropdown ">
                    <select class="btn btn-light" data-mdb-ripple-color="dark" name="seleccionarHabilidad" id="seleccionarHabilidad">
                        <option value="0" disabled selected>Seleccione una opcion</option>
                        <option value="PHP">PHP</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="Laravel">Laravel</option>
                        <option value="Java">Java</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="Angular">Angular</option>
                        <option value="NodeJS">NodeJS</option>
                        <option value="Linux Servidores">Linux Servidores</option>
                    </select>
                    <button type="button" class="btn btn-primary btn-rounded" onclick="agregarHabilidad()">Agregar</button>
                </div>

                <div class="form-row MT">
                    <div class="form-group col-md-12">
                        <input name="habilidadesDeUsuario" id="habilidadesDeUsuario" type="text" class="form-control" value=" " disable>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-success btn-rounded">Enviar</button>
        </form>
    </div>
</div>


<!-- ************************************** -->
<!-- REALIZAR MIGRACION -->
<script>
    $(document).ready(function() {
        $(".exportar-tabla").click(function(event) {
            $("#data-sql").load("respaldo/exportar.php");
            event.preventDefault();
        });
    });
</script>
<hr class="MT">
<h3>Realizar migración de tabla usuario</h3>
<div style="margin-top: 20px;">
    <form action="./controllers/csv_usuarios.php" method="POST">
        <button class="btn btn-success btn-rounded">Exportar</button>
    </form>
</div>