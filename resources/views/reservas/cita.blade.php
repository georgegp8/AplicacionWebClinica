@extends('reservas.reservas')
@section('content')

<div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-center text-2xl font-semibold text-teal-600 max-md:text-xl">Solicitar una cita</h2>
    <p class="text-center text-gray-600 mt-2 max-md:text-[13px]">
        Para poder registrar tus datos y solicitar una cita online necesitas llenar el siguiente formulario. Te enviaremos el costo e información necesaria para completar el proceso a tu email.
    </p>

    <!-- Formulario -->
    <form method="POST" action="{{ route('reserva.cita') }}" class="mt-4 space-y-4" id="citaForm">

        @csrf

        <input type="text" id="nombres" name="nombres" placeholder="Nombres" 
            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200 max-md:w-full max-md:py-3 max-md:border" required>
        
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" 
            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200 max-md:w-full" required>
        
        <input type="email" id="email" name="email" placeholder="Email" 
            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        
        <input type="text" id="telefono" name="telefono" placeholder="Número de celular (Whatsapp)" 
            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        
        <!-- Advertencia de teléfono -->
        <div id="telefonoWarning" class="text-red-500 text-sm hidden">
            El número de teléfono debe tener 9 dígitos.
        </div>

        <input type="text" id="dni" name="dni" placeholder="DNI" 
            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200" required>
        
        <!-- Advertencia de DNI -->
        <div id="dniWarning" class="text-red-500 text-sm hidden">
            El DNI debe tener 8 dígitos.
        </div>
        
        <select name="procedimiento" id="procedimiento" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200">
            <option value="" disabled selected>Procedimiento a consultar</option>
            <option value="cirugia1">Cirugía 1</option>
            <option value="tratamiento1">Tratamiento 1</option>
        </select>
        <div id="procedimientoWarning" class="text-red-500 text-sm hidden">
            Debes seleccionar un procedimiento.
        </div>

        <!-- Área de texto para más detalles -->
        <!-- Área de texto para más detalles -->
        <textarea name="comentarios" id="comentarios" placeholder="Comentarios adicionales" 
            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200"
            style="height: 200px; resize: none;"></textarea>

        <div class="flex items-center">
            <input type="checkbox" name="terminos" id="terminos" 
                class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded" required>
            <label class="ml-2 text-sm text-gray-600">
                Acepto <a href="#" class="text-teal-500 underline">términos y condiciones</a>
            </label>
        </div>

        <!-- Mensaje de advertencia -->
        <p id="mensajeAdvertencia" class="text-red-500 text-sm hidden">Debes aceptar los términos y condiciones para continuar.</p>

        <button type="submit" class="w-full py-3 mt-4 bg-teal-500 text-white rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-blue-200">
            Solicitar cita
        </button>
    </form>
</div>

<!-- Agregar el script -->
<script src="https://unpkg.com/imask"></script>
<script>
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
