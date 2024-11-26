<h3 class="text-center text-teal-500 font-bold text-lg mb-4">
    Horario de atención del consultorio de {{ $consultorio->nombre }}
</h3>
<hr class="border-t border-teal-500 mb-4">

<table class="w-full text-sm border-collapse border border-teal-500">
	<thead>
        <tr class="bg-teal-100 text-teal-700">
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Hora</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Lunes</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Martes</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Miércoles</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Jueves</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Viernes</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Sábado</th>
            <th class="border border-teal-500 px-4 py-2 text-center font-bold">Domingo</th>
        </tr>
    </thead>
    <tbody>
        @php
            $horas = ['08:00:00 - 09:00:00','09:00:00 - 10:00:00','10:00:00 - 11:00:00',
                      '11:00:00 - 12:00:00','12:00:00 - 13:00:00','13:00:00 - 14:00:00',
                      '14:00:00 - 15:00:00','15:00:00 - 16:00:00','16:00:00 - 17:00:00',
                      '17:00:00 - 18:00:00','18:00:00 - 19:00:00','19:00:00 - 20:00:00'];
            $diasSemana = ['LUNES','MARTES','MIÉRCOLES','JUEVES','VIERNES','SÁBADO','DOMINGO'];
        @endphp    
        @foreach ($horas as $hora)
            @php
                list($hora_inicio, $hora_fin) = explode(' - ', $hora);
            @endphp
            <tr class="{{ $loop->even ? 'bg-teal-50' : 'bg-white' }} hover:bg-teal-100">
                <td class="border border-teal-500 px-4 py-2 text-center font-medium">
                    <div>
                        <div>{{ $hora_inicio }}</div>
                        <div class="text-gray-500">-</div>
                        <div>{{ $hora_fin }}</div>
                    </div>
                </td>
                @foreach ($diasSemana as $dia)
                    @php
                        $nombre_doctor = '';
                        foreach ($horarios as $horario) {
                            if (strtoupper($horario->dia) == $dia &&
                                $hora_inicio >= $horario->hora_inicio &&
                                $hora_fin <= $horario->hora_final) {
                                $nombre_doctor = $horario->doctor->nombres . " " . $horario->doctor->apellidos;
                                break;
                            }
                        }
                    @endphp
                    <td class="border border-teal-500 px-4 py-2 text-center whitespace-nowrap">
                        {{ $nombre_doctor ?: '—' }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
