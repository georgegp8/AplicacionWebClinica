@extends('reservas.reservas')
@section('content')
    <div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-semibold text-teal-600">Solicitar una cita</h2>
        <p class="text-center text-gray-600 mt-2">
            Para poder registrar tus datos y solicitar una cita online necesitas llenar el siguiente formulario. Te enviaremos el costo e información necesaria para completar el proceso a tu email.
        </p>
        
        <!-- Formulario -->
        <form method="POST" action="" class="mt-4 space-y-4">
            @csrf

            <div class="flex space-x-4">
                <input type="text" name="nombres" placeholder="Nombres" class="w-1/2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                <input type="text" name="apellidos" placeholder="Apellidos" class="w-1/2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>

            <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">

            <input type="text" name="telefono" placeholder="Número de celular (Whatsapp)" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">

            <input type="text" name="dni" placeholder="DNI" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">

            <select name="procedimiento" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                <option disabled selected>Procedimiento a consultar</option>
                <option value="cirugia1">Cirugía 1</option>
                <option value="tratamiento1">Tratamiento 1</option>
                <!-- Agrega más opciones aquí -->
            </select>

            <div class="flex items-center">
                <input type="checkbox" name="terminos" class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
                <label class="ml-2 text-sm text-gray-600">
                    Acepto <a href="#" class="text-teal-500 underline">términos y condiciones</a>
                </label>
            </div>

            <button type="submit" class="w-full py-3 mt-4 bg-teal-500 text-white rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-blue-200">
                Solicitar cita
            </button>
        </form>
    </div>
@endsection