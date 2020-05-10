function evalua(oNombre, oApePat, rbSexo, oFecha){
var sErr="";
var bRet = false;

	if (oNombre.disabled==false && oNombre.value=="")
		sErr= sErr + "\n Falta nombre";

	if (oApePat.disabled==false && oApePat.value=="")
		sErr= sErr + "\n Falta apellido paterno";

	if (rbSexo[0].checked==false && rbSexo[1].checked==false)
		sErr= sErr + "\n Falta indicar sexo";

	if (oFecha.disabled==false && oFecha.value=="")
		sErr= sErr + "\n Falta fecha de nacimiento";
	
	if (sErr == "")
		bRet = true;
	else
		alert(sErr);
	
	return bRet;
}


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