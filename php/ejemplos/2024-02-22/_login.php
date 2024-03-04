<div class="container">
    <h2 class="text-center text-dark mt-5">Logueo</h2>

    <div class="text-center mb-5 text-dark">
        Logueate para poder leer o escribir mensajes
    </div>

    <div class="card my-5">
        <form class="card-body cardbody-color p-lg-5 needs-validation" novalidate method="POST">
            <div class="text-center">
                <img src="https://www.maxipapeloficial.com/intranet/Views/image/logIn.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="Username" name="usuario" placeholder="Usuario" required>
                <div class="valid-feedback">Usuario introducido correctamente</div>
                <div class="invalid-feedback">Por favor introduzca un usuario</div>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="password" required>
                <div class="valid-feedback">Contraseña introducido correctamente</div>
                <div class="invalid-feedback">Por favor introduzca una contraseña</div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>

<script>
    (() => {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
