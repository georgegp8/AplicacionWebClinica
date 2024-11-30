@extends('reservas.reservas')

    @section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-center text-2xl font-semibold text-teal-600 max-md:text-xl">Solicitar una cita</h2>
    <p class="text-center text-gray-600 mt-2 max-md:text-[13px]">
        Para poder registrar tus datos y solicitar una cita online necesitas llenar el siguiente formulario. Te enviaremos el costo e información necesaria para completar el proceso a tu email.
    </p>

    <!-- Formulario -->
    <form method="POST" action="{{ route('reserva.cita') }}" class="mt-4 space-y-4" id="citaForm">
    @csrf

    <!-- Campos básicos en grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" id="nombres" name="nombres" placeholder="Nombres" 
               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" 
               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        <input type="email" id="email" name="email" placeholder="Email" 
               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        <input type="text" id="telefono" name="telefono" placeholder="Número de celular (Whatsapp)" 
               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        <input type="text" id="dni" name="dni" placeholder="DNI" 
               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
    </div>

    <!-- Selección de servicio -->
    <div>
        <label class="block text-gray-700 font-medium">Servicio</label>
        <select id="servicio" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
            <option value="" disabled selected>Selecciona un servicio</option>
            <option value="Cirugías">Cirugías</option>
            <option value="Tratamientos">Tratamientos</option>
        </select>
    </div>

    <!-- Procedimientos dinámicos en grid -->
    <div id="procedimientos" class="mt-4">
        <label class="block text-gray-700 font-medium">Procedimiento</label>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4" id="proceduresList">
            <!-- Los procedimientos se cargarán aquí mediante JavaScript -->
            <h2 class="text-teal-400">Aún no has seleccionado nada</h2>
        </div>
    </div>

    <!-- Mostrar costo seleccionado -->
    <div id="costoSection" class="mt-4 hidden">
        <label class="block text-gray-700 font-medium">Costo en dólares</label>
        <input type="number" id="costo" name="costo" readonly 
               class="w-full p-3 border border-gray-300 rounded-md bg-gray-100 focus:outline-none">
    </div>

    <div>
        <label for="codigo_pago" class="block text-sm font-medium text-gray-700">Código de Pago</label>
        <input type="text" id="codigo_pago" name="codigo_pago" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" readonly>
    </div>

    <!-- Área de texto para más detalles -->
    <textarea name="comentarios" id="comentarios" placeholder="Comentarios adicionales" 
              class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200"
              style="height: 200px; resize: none;"></textarea>

    <!-- Términos y condiciones en grid -->
    <div class="flex items-center">
        <!-- Campo oculto para enviar '0' si no se marca el checkbox -->
        <input type="hidden" name="terminos" value="0">
        <!-- Checkbox que envía '1' si está marcado -->
        <input type="checkbox" name="terminos" id="terminos" value="1" 
            class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded" required>
        <label class="ml-2 text-sm text-gray-600">  
            Acepto <a href="#" class="text-teal-500 underline">términos y condiciones</a>
        </label>
    </div>

    <!-- Botón de envío -->
    <button type="submit" class="w-full py-3 mt-4 bg-teal-500 text-white rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-blue-200">
        Solicitar cita
    </button>
</form>

</div>

<!-- Agregar el script -->
<script src="https://unpkg.com/imask"></script>
<script>
    // Función para generar un código aleatorio
    function generarCodigoPago() {
        const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        let codigo = "";
        for (let i = 0; i < 9; i++) {
            const randomIndex = Math.floor(Math.random() * caracteres.length);
            codigo += caracteres[randomIndex];
        }
        return codigo;
    }

    // Asignar el código al campo de texto
    document.addEventListener("DOMContentLoaded", () => {
        const inputCodigoPago = document.getElementById("codigo_pago");
        inputCodigoPago.value = generarCodigoPago();
    });
 document.addEventListener("DOMContentLoaded", () => {
        const servicioSelect = document.getElementById("servicio");
        const proceduresList = document.getElementById("proceduresList");
        const costoSection = document.getElementById("costoSection");
        const costoInput = document.getElementById("costo");

        // Convertir datos de PHP a JavaScript
        const procedimientos = {
            "Cirugías": @json($cirugias),
            "Tratamientos": @json($tratamientos)
        };

        servicioSelect.addEventListener("change", () => {
    const servicio = servicioSelect.value;
    proceduresList.innerHTML = ""; // Limpiar procedimientos anteriores

    if (procedimientos[servicio]) {
        procedimientos[servicio].forEach(({ nombre, costo }) => {
            const procedureDiv = document.createElement("div");
            procedureDiv.classList.add(
                "p-2",
                "cursor-pointer",
                "border",
                "border-gray-300",
                "rounded-md",
                "hover:bg-teal-500",
                "hover:text-white",
                "procedure-unselected"
            );

            procedureDiv.innerHTML = `
                <label>
                    <input type="radio" name="procedimiento" value="${nombre}" data-costo="${costo}" class="hidden">
                    <span>${nombre}</span>
                </label>
            `;

            procedureDiv.addEventListener("click", () => {
                // Desmarcar cualquier procedimiento previamente seleccionado
                const allProcedures = document.querySelectorAll(".procedure-selected");
                allProcedures.forEach((procedure) => {
                    procedure.classList.remove("procedure-selected");
                    procedure.classList.add("procedure-unselected");
                });

                // Marcar el procedimiento actual
                procedureDiv.classList.remove("procedure-unselected");
                procedureDiv.classList.add("procedure-selected");

                // Seleccionar el input radio
                const input = procedureDiv.querySelector("input");
                input.checked = true;

                // Actualizar el costo y mostrar la sección de costo
                costoInput.value = costo;
                costoSection.classList.remove("hidden");
            });

            proceduresList.appendChild(procedureDiv);
        });
    }
});

    });
    // Aplicar máscaras con iMask
    const telefonoMask = IMask(
        document.getElementById('telefono'), {
            mask: '900 000 000' // Patrón para número de celular de Perú
        }
    );

    const dniMask = IMask(
        document.getElementById('dni'), {
            mask: '00000000' // Patrón para DNI
        }
    );

    // Validar si los términos están aceptados antes de enviar el formulario
    document.getElementById('citaForm').addEventListener('submit', function(e) {
        var terminosCheckbox = document.getElementById('terminos');
        var mensajeAdvertencia = document.getElementById('mensajeAdvertencia');
        var telefono = document.getElementById('telefono').value.replace(/\s/g, ''); // eliminar espacios
        var dni = document.getElementById('dni').value;
        var procedimiento = document.getElementById('procedimiento').value;

        // Ocultar advertencias al principio
        document.getElementById('telefonoWarning').classList.add('hidden');
        document.getElementById('dniWarning').classList.add('hidden');
        document.getElementById('procedimientoWarning').classList.add('hidden');

        // Si los términos no están marcados, mostrar el mensaje y evitar el envío
        if (!terminosCheckbox.checked) {
            e.preventDefault();  // Evita que se envíe el formulario
            mensajeAdvertencia.classList.remove('hidden');
        }

        // Validar que el teléfono tenga 9 números
        if (telefono.length !== 9) {
            e.preventDefault();
            document.getElementById('telefonoWarning').classList.remove('hidden');
        }

        // Validar que el DNI tenga 8 dígitos
        if (dni.length !== 8) {
            e.preventDefault();
            document.getElementById('dniWarning').classList.remove('hidden');
        }

        // Validar que se haya seleccionado un procedimiento
        if (procedimiento === '') {
            e.preventDefault();
            document.getElementById('procedimientoWarning').classList.remove('hidden');
        }
    });
</script>


@endsection
