<?php include_once 'Views/template/header-principal.php'; ?>
<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex h3 text-decoration-none" href="#">
                        <span>Categorías</span>
                        <i class="px-3 fa fa-fw fa-chevron-circle-down mt-1 mb-3"></i>
                    </a>
                    <ul class="list-unstyled">
                        <?php foreach ($data['categoriaNombres'] as $categoria) { ?>
                            <li class="pb-3">
                                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>" class="d-flex justify-content-between h3 text-decoration-none">
                                    <?php echo $categoria['categoria']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3">Productos</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <?php foreach ($data['productos'] as $producto) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL . $producto['imagen']; ?>">
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white btnAddDeseo" href="#" prod="<?php echo $producto['id']; ?>"><i class="fas fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"><i class="fas fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2 btnAddCarrito" href="#" prod="<?php echo $producto['id']; ?>"><i class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body text-center mb-0">
                                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h3 text-decoration-none d-block overflow-hidden" style="white-space: nowrap; text-overflow: ellipsis;"><?php echo $producto['nombre']; ?></a>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center mb-0"><?php echo MONEDA . ' ' . $producto['precio']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <?php
                        $anterior = $data['pagina'] - 1;
                        $siguiente = $data['pagina'] + 1;
                        $url = BASE_URL . 'principal/shop/';
                        $total = intval($data['total']);
                        if ($data['pagina'] > 1) {
                            echo '<li class="page-item">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="' . $url . $anterior . '" tabindex="-1">Anterior</a>
                        </li>';
                        }
                        if ($data['total'] >= $siguiente) {
                            echo '<li class="page-item">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-white" href="' . $url . $siguiente . '">Siguiente</a>
                        </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Content -->

<!-- Start Brands -->
<section class="bg-light py-5">
    <div class="container my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestras marcas</h1>
                <p>
                    Conoce las marcas y empresas con las que trabajamos
                </p>

                <div class="row">
                    <div class="col-3 p-md-5">
                        <a href="#"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_01.png" alt="Brand Logo"></a>
                    </div>
                    <div class="col-3 p-md-5">
                        <a href="#"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_02.png" alt="Brand Logo"></a>
                    </div>
                    <div class="col-3 p-md-5">
                        <a href="#"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_03.png" alt="Brand Logo"></a>
                    </div>
                    <div class="col-3 p-md-5">
                        <a href="#"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_04.png" alt="Brand Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brands -->

<?php include_once 'Views/template/footer-principal.php'; ?>
</body>

</html>