<?php include_once 'Views/template/header-principal.php'; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel" style="height: 650px; width: 100%;">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/carrusel/zapatilla.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h3 class="h2">Excelente calidad al mejor precio</h3>
                            <p>
                                Bienvenido a nuestro exclusivo portal de compras, tu destino ideal para descubrir lo último en tecnología, elegantes muebles y una amplia variedad de productos únicos. En nuestra tienda en línea, ofrecemos una cuidadosa selección de artículos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/carrusel/sofa.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h3 class="h2">Explora nuestra selección</h3>
                            <p>
                                Explora nuestra colección de productos tecnológicos de última generación, encuentra piezas de mobiliario que transformarán tu espacio y descubre una variedad de productos únicos que complementarán tu estilo de vida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/carrusel/camara.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h3 class="h2">Sumérgete en la excelencia</h3>
                            <p>
                                En Tienda ISP6, te ofrecemos una experiencia única al explorar
                                nuestra exclusiva selección de productos.
                                Nuestro compromiso es brindarte calidad y estilo.
                                Si disfrutas de tu visita, ¡comparte nuestra tienda con tus amigos! Tu apoyo nos impulsa a seguir ofreciendo lo mejor. ¡Gracias!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Categorias -->
<section class="container py-5 text-center">
    <div class="row align-items-center">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categorías</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($data['categorias'] as $categoria) { ?>
            <div class="col-12 col-md-2 mt-3">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border categoria-img"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Fin categorias -->


<!-- Productos recomendados aleatoriamente -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Productos sugeridos</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['nuevoProductos'] as $producto) {
                // Agregar una validación para mostrar solo productos con estado = 1
                if ($producto['estado'] == 1) {
            ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                                <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right"><?php echo  MONEDA . ' ' . $producto['precio']; ?></li>
                                </ul>
                                <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                                <p class="card-text">
                                    <?php echo $producto['descripcion']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>
</section>
<!-- Fin de recomendados -->
<?php include_once 'Views/template/footer-principal.php'; ?>



</body>

</html>