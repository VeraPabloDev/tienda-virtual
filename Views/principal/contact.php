<?php include_once 'Views/template/header-principal.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<style>
    #mi_mapa {
        height: 600px;
        width: 800px;
    }
</style>

<!-- Start Content Page -->
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Pongase en contacto con nosotros</h1>
        <p>
            Su mensaje será leido por un moderador y se le enviará la respuesta por correo electrónico.
        </p>
    </div>


<!-- Start Contact -->
<div class="container py-5">
    <div class="row py-5">
        <form class="col-md-9 m-auto" role="form" id="frmContactos">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control mt-1" id="nombre" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputmessage">Mensaje</label>
                <textarea class="form-control mt-1" id="message" placeholder="Message" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3" id="btnContactos">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    </div>
<br></br>
<h2 class= "m-0 row justify-content-center mb-2"><i class="fa-solid fa-map-location-dot text-center"></i>Encuéntranos</h2>
<div class= "m-0 row justify-content-center">
    <div class= "col-auto bg-light p-5 text-center" id="mi_mapa">
    </div>
</div>

</div>
<!-- End Contact -->


<?php include_once 'Views/template/footer-principal.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/ckeditor.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/modulos/contactos.js'; ?>"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    let map = L.map('mi_mapa').setView([-31.97380, -60.91838], 15)

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-31.97380, -60.91838]).addTo(map).bindPopup("ISP6")

    map.on('click', onMapClick)

    function onMapClick(e) {
        alert("Posición: " + e.latlng)
    }
</script>


</body>

</html>