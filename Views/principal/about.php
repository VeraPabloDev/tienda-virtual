<?php include_once 'Views/template/header-principal.php'; ?>


<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>Sobre nosotros</h1>
                <p>
                Desde nuestros humildes comienzos, hemos crecido para convertirnos en un destino confiable para clientes que buscan muebles elegantes, tecnología innovadora, electrodomésticos eficientes y moda actual. Fundada con la visión de crear un espacio donde la variedad y la calidad se fusionan, Tienda ISP6 se esfuerza por superar tus expectativas.
                </p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo BASE_URL; ?>assets/images/about-hero.svg" alt="About Hero">
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Nuestros servicios incluyen</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5">
                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Delivery</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5">
                <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Envío y devolución</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5">
                <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Precios cuidados</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5">
                <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                <h2 class="h5 mt-4 text-center">Servicio las 24 horas</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

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
                        <a href="https://www.levi.com.ar/"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_01.png" alt="Brand Logo"></a>
                    </div>
                    <div class="col-3 p-md-5">
                        <a href="https://www.adidas.com.ar/"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_02.png" alt="Brand Logo"></a>
                    </div>
                    <div class="col-3 p-md-5">
                        <a href="https://www.nike.com.ar/"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_03.png" alt="Brand Logo"></a>
                    </div>
                    <div class="col-3 p-md-5">
                        <a href="https://www.hm.com/"><img class="brand-img" src="<?php echo BASE_URL; ?>assets/images/brand_04.png" alt="Brand Logo"></a>
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