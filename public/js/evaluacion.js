$(document).ready(function() {
    validarFormulario();
    function validarFormulario() {
        alert("Exitoso");

        ("use strict");

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener(
                "summit",
                function(event) {
                    if (form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
            console.log(form.checkValidity());
        });
    }
    // $("#crearEvaluacion").click(function() {
    //     // alert("Exitoso");
    //     validarFormulario();
    //     if ($("#formCompromisoEvaluado").hasClass("was-validated")) {
    //         $("#compromisoEvaluado").slideUp();
    //         $("#componentesEvaluacion").removeAttr("hidden");
    //         $("#componentesEvaluacion").slideDown();
    //     }
    //     // $("#atrasProgProgBasiES").show();
    //     // $(this).attr("id", "siguienteProgBasiES2");
    // });
});
