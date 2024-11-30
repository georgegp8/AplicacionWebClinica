@extends('reservas.reservas')

@section('content')
<div class="w-[1200px]  bg-white p-6 rounded-lg shadow-md flex flex-col justify-center items-center ">
    <h2 class="text-center text-2xl font-semibold text-teal-600">Consulta de Cita</h2>
    <p class="text-center text-gray-600 mt-2">
        Ingresa tu código de pago para consultar los detalles de tu cita.
    </p>

    <!-- Campo para código de pago -->
    <div class="mt-4 space-y-2  ">
        <label class="block text-gray-700 font-medium">Código de Pago</label>
        <input type="text" id="codigoInput" placeholder="Ingresa tu código de pago"
               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-200">
        <button id="cargarDatosBtn" 
                class="w-full mt-2 py-3 bg-teal-500 text-white rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-blue-200">
            Cargar Datos
        </button>
    </div>

    <!-- Tabla para mostrar datos -->
    <div class="mt-6">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border border-gray-300 p-2">Nombres</th>
                    <th class="border border-gray-300 p-2">Apellidos</th>
                    <th class="border border-gray-300 p-2">DNI</th>
                    <th class="border border-gray-300 p-2">Procedimiento</th>
                    <th class="border border-gray-300 p-2">Costo</th>
                    <th class="border border-gray-300 p-2">Estado</th>
                </tr>
            </thead>
            <tbody id="datosTabla">
                <tr>
                    <td colspan="6" class="text-center text-gray-500 p-4">No hay datos disponibles.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Método de pago -->
    <div class="flex flex-col items-center mt-6">
    <label class="mb-2 text-lg font-semibold " for="payment-method">Método de pago</label>
    <div class="flex items-center mb-4">
        <input type="radio" id="paypal" name="payment-method" value="paypal" class="mr-2 text-teal-600">
        <label for="paypal" class="mr-4">PayPal</label>
        <input type="radio" id="visa" name="payment-method" value="visa" class="mr-2 text-teal-600">
        <label for="visa" class="">Tarjeta de crédito</label>
    </div>
    <button id="pagarBtn" class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400">Mostrar</button>
</div>

    <!-- Contenedor para los métodos de pago -->
    <div class="flex flex-col justify-center items-center w-full mt-3">
        <div id="paypal-container" class="w-[500px] hidden"></div> <!-- Botones PayPal -->
        <form method="POST" action="" class="mt-4 space-y-4" id="citaForm">
            @csrf
            <div id="pago" class="w-full hidden"> <!-- Contenido para Visa --> </div>
        </form>
    </div>
</div>

@vite('resources/js/app.js')

<script>
    document.getElementById('citaForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Evitar el envío predeterminado del formulario

        // Obtener el código de pago ingresado en el input
        const codigoPago = document.getElementById('codigoInput').value.trim();
        const cardName = document.getElementById('cardName');

        if (!codigoPago) {
            alert('Por favor, ingresa un código de pago válido.');
            return;
        }

        if (codigoPago) {
            const cardNameValue = document.getElementById('cardName').value;

            Swal.fire('¡Pago exitoso!', `El pago fue realizado por ${cardNameValue}`, 'success')
                .then(() => {
                    // Después de que el usuario cierre la alerta, refrescar la página
                    fetch(`/citas/${codigoPago}/pagar`, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                        body: JSON.stringify({ estado: 'pagado' })
                    }).then(res => {
                        if (res.ok) {
                            // Actualizar el estado en la página sin recargar
                            document.querySelector(`#estado-${codigoPago}`).textContent = 'pagado';
                        }
                    });
                    // Recargar la página
                    window.location.reload();
                });
        }
    });
    const citas = @json($citas);
    const codigoInput = document.getElementById('codigoInput');
    const cargarDatosBtn = document.getElementById('cargarDatosBtn');
    const datosTabla = document.getElementById('datosTabla');
    const pagarBtn = document.getElementById('pagarBtn');
    const paypalContainer = document.getElementById('paypal-container');
    const pago = document.getElementById('pago');
    let cita = null;

    // Cargar datos de cita
    cargarDatosBtn.addEventListener('click', () => {
        datosTabla.innerHTML = '';
        const codigoPago = codigoInput.value.trim();
        cita = citas.find(c => c.codigo_pago === codigoPago);

        if (cita) {
            datosTabla.innerHTML = `
                <tr>
                    <td class="border border-gray-300 p-2">${cita.nombres}</td>
                    <td class="border border-gray-300 p-2">${cita.apellidos}</td>
                    <td class="border border-gray-300 p-2">${cita.dni}</td>
                    <td class="border border-gray-300 p-2">${cita.procedimiento}</td>
                    <td class="border border-gray-300 p-2">$${cita.costo}</td>
                    <td class="border border-gray-300 p-2">${cita.estado}</td>
                </tr>
            `;
        } else {
            datosTabla.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center text-gray-500 p-4">No se encontraron datos para el código ingresado.</td>
                </tr>
            `;
        }
    });

    // Pagar
    pagarBtn.addEventListener('click', () => {
        if (!cita) {
            Swal.fire('¡Error!', 'No se ha cargado ninguna cita.', 'error');
            return;
        }
        if (cita.estado === 'Pagado') {
            paypalContainer.classList.add('hidden');
            pago.classList.add('hidden');
            Swal.fire('¡Ya está pagado!', 'Esta cita ya ha sido pagada.', 'info');
            return;
        }

        const paymentMethod = document.querySelector('input[name="payment-method"]:checked');
        if (paymentMethod) {
            paypalContainer.classList.add('hidden');
            pago.classList.add('hidden');

            if (paymentMethod.value === 'paypal') {
                paypalContainer.classList.remove('hidden');
                paypalContainer.innerHTML = '';
                paypal.Buttons({
                    style: {
                        layout: 'vertical',
                        color: 'gold',
                        shape: 'rect',
                        label: 'pay'
                    },
                    fundingSource: paypal.FUNDING.PAYPAL, // Solo botón amarillo
                    createOrder: (data, actions) => actions.order.create({
                        purchase_units: [{
                            amount: { value: cita.costo },
                            description: cita.procedimiento
                        }]
                    }),
                    onApprove: (data, actions) => actions.order.capture().then(details => {
                        // Mostrar la alerta de pago exitoso
                        Swal.fire('¡Pago exitoso!', `El pago fue realizado por ${details.payer.name.given_name}`, 'success')
                            .then(() => {
                                // Enviar la solicitud para actualizar el estado del pago
                                fetch(`/citas/${cita.codigo_pago}/pagar`, {
                                    method: 'POST',
                                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                                    body: JSON.stringify({ estado: 'pagado' })
                                }).then(res => {
                                    if (res.ok) {
                                        // Actualizar el estado en la página sin recargar
                                        document.querySelector(`#estado-${cita.codigo_pago}`).textContent = 'pagado';
                                    }
                                });
                                // Recargar la página
                                window.location.reload();
                            });
                    }),
                    onError: () => Swal.fire('¡Error!', 'Hubo un problema al procesar tu pago.', 'error')
                }).render('#paypal-container');
            } else if (paymentMethod.value === 'visa') {
                pago.classList.remove('hidden');
            }
        } else {
            Swal.fire('¡Error!', 'Por favor, selecciona un método de pago.', 'error');
        }
    });
</script>
@endsection
