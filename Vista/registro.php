   <section>
			<form  method="post" class="needs-validation" novalidate>
				<div class="form-group row">
                    <div class="col-4">
                        <label for="telefono" class="col-2 col-form-label">Telefono</label>
                        <input class="form-control" name="registroTxtTelefono" type="tel" id="telefono" required>
                        <div class="invalid-feedback">
                            Ingresa el telefono.
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="nombre" class="col-2 col-form-label">Nombre</label>
                        <input class="form-control" name="registroTxtNombre" type="text" id="nombre" required>
                        <div class="invalid-feedback">
                            Ingresa el nombre.
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="cargo" class="col-2 col-form-label">Cargo</label>
                        <select name="registroTxtCargo" id="cargo" class="custom-select" required required>
                            <option value="Mayorista">Mayorista</option>
                            <option value="Detallista">Detallista</option>
                            <option value="Distribuidor">Distribuidor</option>
                        </select>
                        <div class="invalid-feedback">Selecciona un cargo</div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4">
                        <label for="pais" class="col-2 col-form-label">País</label>
                        <input class="form-control" name="registroTxtPais" type="text" id="pais" required>
                        <div class="invalid-feedback">Ingresa el país</div>
                    </div>
                    <div class="col-4">
                        <label for="ciudad" class="col-2 col-form-label">Ciudad</label>
                        <input class="form-control" name="registroTxtCiudad" type="text" id="ciudad" required>
                        <div class="invalid-feedback">Ingresa la ciudad</div>
                    </div>
                    <div class="col-4">
                        <label for="calle" class="col-2 col-form-label">Calle</label>
                        <input class="form-control" name="registroTxtCalle" type="text" id="calle" required>
                        <div class="invalid-feedback">Ingresa la calle</div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4">
                        <label for="validationServer05">Código Postal</label>
                        <input class="form-control" type="text" name="registroTxtCP"  class="form-control is-invalid" id="cp" required>
                        <div class="invalid-feedback">Ingresa el código postal</div>
                    </div>
                    <div class="col-8">
                        <label for="localidad" class="col-2 col-form-label">Localidad</label>
                        <input class="form-control" name="registroTxtLocalidad" type="text"  id="localidad" required>
                        <div class="invalid-feedback">Ingresa la localidad</div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="provincia" class="col-2 col-form-label">Provincia</label>
                        <input class="form-control" name="registroTxtProvincia" type="text" id="provincia" required>
                        <div class="invalid-feedback">Ingresa la provincia</div>
                    </div>
                    <div class="col-6">
                        <label for="password" class="col-2 col-form-label">Password</label>
                        <input class="form-control" name="registroTxtPassword" type="password"  id="password" required>
                        <div class="invalid-feedback">Ingresa el password</div>
                    </div>
                </div>
				<input type ="submit" value="Aceptar" class="btn btn-primary"/>
				<input type="submit" name="Submit" value="Cancelar" class="btn btn-danger">
            </form>

            <?php
              $registro = ControladorCliente::ctrRegistro();
              if($registro=="ok"){
                echo '<div class="d-flex justify-content-center text-center">
                 <div class="alert alert-success">¡Registro exitoso!<br>
								 Ahora puedes iniciar sesion.</div></div>
                 <script>
                 setTimeout( function(){
                 window.location = "Modelo/descarga.modelo.php";
							 } ,2000)
                 </script>';
							 }?>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                    });
                }, false);
                })();
            </script>
</section>						
