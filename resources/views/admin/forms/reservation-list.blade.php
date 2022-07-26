{{-- Ajax ile çekilen sorgu için döndürülecek tablo içeriği --}}

@php
    $durum = [
        '-1' => ['text-red-500', 'İptal'],
        '0' => ['text-orange-500', 'Bekliyor'],
        '1' => ['text-green-600', 'Onaylandı']
        ];
@endphp


<table id="resTable" class="stripe hover"
       style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
    <thead>
    <tr>
        <th data-priority="0" style="max-width: max-content;">#</th>
        <th data-priority="1" style="max-width: max-content;">Rezervasyon No.</th>
        <th data-priority="2">Durum</th>
        <th data-priority="3">İsim</th>
        <th data-priority="4">Tarih - Saat</th>
        <th data-priority="5">Masa</th>
        <th data-priority="6">Notlar</th>
    </tr>
    </thead>
    <tbody>


    @foreach($reservations as $reservation)
        <tr>
            <td class="text-center"><span class="text-gray-500">{{ $loop->index }}</span></td>
            <td class="text-center"><span
                    class="text-xs bg-green-500 text-white px-2 font-bold rounded-lg cursor-pointer"
                    title="Rezervasyon Detayları">{{ $reservation->unique_id }}</span></td>
            <td class="text-center"><i
                    class="fas fa-circle {{ $durum[$reservation->status][0] }} mr-2"></i> {{ $durum[$reservation->status][1] }}
            </td>
            <td class="text-center">{{ $reservation->name }}</td>
            <td class="text-center">{{ \Carbon\Carbon::parse($reservation->date.' '.$reservation->time)->translatedFormat('d M Y, l H:i') }}</td>
            <td class="text-center">{!! $reservation->table ?? '<span class="text-gray-600 italic">Yok</span>' !!}</td>
            <td class="text-center">123</td>
        </tr>
    @endforeach
    </tbody>

</table>

<script>
    var table = $('#resTable').DataTable({
        responsive: true
    })
        .columns.adjust()
        .responsive.recalc();
</script>
