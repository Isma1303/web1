document.addEventListener('DOMContentLoaded', function () {
    const alertaForm = document.querySelector("#alerta-form");

    if (alertaForm) {
        alertaForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const nombre = document.querySelector("#nombre").value;
            const correo = document.querySelector("#correo").value;
            const carnet = document.querySelector("#carnet").value;


            console.log("Nombre: " + nombre);
            console.log("Correo: " + correo);
            console.log("Carnet: " + carnet);

            M.toast({
                html: 'Datos enviados correctamente ✅', 
                classes: 'rounded' 
            });

            // Reiniciar el formulario
            alertaForm.reset();
        });
    } else {
        console.error("El formulario #alerta-form no fue encontrado en el DOM.");
    }
});