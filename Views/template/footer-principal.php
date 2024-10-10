<!-- Bootstrap Font Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal-body text-white border-0">
                <h1 class="modal-title fs-5"><i class="fas fa-cart-arrow-down"></i> Carrito</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-around mb-3">
                <h3 id="totalGeneral"></h3>
                <?php if (!empty($_SESSION['correoCliente'])) { ?>
                    <a class="btn custom-modal-button btn-lg" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar pedido</a>
                <?php } else { ?>
                    <a class="btn custom-modal-button btn-lg" href="#" onclick="abrirModalLogin();">Login</a>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

<!-- Login directo -->
<div id="modalLogin" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal-body text-white border-0">
                <h1 class="modal-title fs-5" id="titleLogin">Iniciar sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form method="get" action="">
                    <div class="text-center">
                        <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/images/logo.jpg'; ?>" alt="" width="100">
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="frmLogin">
                            <div class="form-group mb-3">
                                <label for="correoLogin"><i class="fas fa-envelope"></i> Correo</label>
                                <input id="correoLogin" class="form-control" type="text" name="correoLogin" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group mb-3" id="show_hide_password">
                                <label for="claveLogin"><i class="fas fa-key"></i> Contraseña</label>
                                <input id="claveLogin" class="form-control" type="password" name="claveLogin" placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnRegister">¿Todavía no tienes cuenta?</a>
                            <div class="float-end">
                                <button class="btn custom-modal-button btn-lg" type="button" id="login">Login</button>
                            </div>
                        </div>
                        <!-- formulario de registro -->
                        <div class="col-md-12 d-none" id="frmRegister">
                            <div class="form-group mb-3">
                                <label for="nombreRegistro"><i class="fas fa-list"></i> Nombre</label>
                                <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro" placeholder="Nombre completo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
                                <input id="correoRegistro" class="form-control" type="text" name="correoRegistro" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveRegistro"><i class="fas fa-key"></i> Contraseña</label>
                                <input id="claveRegistro" class="form-control" type="password" name="claveRegistro" placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnLogin">Ya tienes una cuenta?</a>
                            <div class="float-end">
                                <button class="btn custom-modal-button btn-lg" type="button" id="registrarse">Registrarse</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Tienda ISP6</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        San Martin 1280
                    </li>
                    <li>
                        <i class="bi bi-whatsapp p-1"></i>
                        <a class="text-decoration-none" href="https://wa.me/+54342123456"> +54342123456</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:correo_de_prueba@company.com">correo_de_prueba@company.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Luxury</a></li>
                    <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                    <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                    <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                    <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                    <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                    <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Volver a:</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL; ?>">Inicio</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL . 'principal/about' ?>">Sobre nosotros</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL . 'principal/shop' ?>">Tienda</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL . 'principal/contactos' ?>">Contacto</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2023 Diseñado por Pablo Vera, Pedro Tabisi
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="<?php echo BASE_URL . 'assets/js/jquery-1.11.0.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/jquery-migrate-1.2.1.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/templatemo.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/custom.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/sweetalert2.all.min.js'; ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    const base_url = '<?php echo BASE_URL; ?>';

    $(document).ready(function() {
        // Verificar si hay un parámetro 'verificacion' en la URL
        var urlParams = new URLSearchParams(window.location.search);
        var verificacion = urlParams.get('verificacion');

        // Mostrar alerta personalizada solo si el parámetro está presente
        if (verificacion === 'exitosa') {
            alertaPersonalizada("Verificación exitosa, por favor inicie sesión.", "success", "Éxito");

            // Redirigir al usuario después de 5 segundos (5000 milisegundos)
            setTimeout(function() {
                window.location.href = '<?php echo BASE_URL; ?>';
            }, 2000);
        }
    });

    function alertaPersonalizada(mensaje, type, titulo = '') {
        toastr[type](mensaje, titulo);

        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        };
    }
</script>

<script src="<?php echo BASE_URL . 'assets/js/carrito.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/login.js'; ?>"></script>
<!-- End Script -->