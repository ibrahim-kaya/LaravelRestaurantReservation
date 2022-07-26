<div>
    <div class="w-full mb-12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
            <div class="rounded-lg mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-lg text-blueGray-700">
                            Bugünün Rezervasyonları
                        </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <button
                            class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button">
                            See all
                        </button>
                    </div>
                </div>
            </div>


            <div class="overflow-x-auto relative shadow-md sm:rounded-lg overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6 w-[10px]">
                            Durum
                        </th>
                        <th scope="col" class="py-3 px-6">
                            İsim
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Saat
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Kişi Sayısı
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Masa
                        </th>
                        <th scope="col" class="py-3 px-6">
                            İşlemler
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($reservations as $reservation)
                        <tr class="bg-white border-b">
                            <td class="py-4 px-6 font-medium text-gray-900 text-center">
                                <i class="fas fa-hourglass text-orange-500 mr-2"></i>
                            </td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                {{ $reservation->name }}
                            </th>
                            <td class="py-4 px-6 whitespace-nowrap">
                                @php
                                $diff = (\Carbon\Carbon::now()->diffInMinutes(\Carbon\Carbon::now()->startOfDay()) / \Carbon\Carbon::parse($reservation->date.' '.$reservation->time)->diffInMinutes(\Carbon\Carbon::parse($reservation->date.' '.$reservation->time)->startOfDay())) * 100;
                                @endphp
                                {{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}
                                <div class="relative max-w-[100px]">
                                    <div class="overflow-hidden h-2 text-xs flex rounded-lg bg-emerald-200">
                                        <div style="width: {{ $diff }}%"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                {{ $reservation->person }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $tables->find($reservation->table)->name }}
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Düzenle</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">Hiç rezervasyon yok.</td>
                        </tr>
                    @endforelse

                    @foreach($ex_reservations as $reservation)
                        <tr class="bg-white border-b disable" style="pointer-events: all;">
                            <td class="py-4 px-6 font-medium text-gray-900 text-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                            </td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                {{ $reservation->name }}
                            </th>
                            <td class="py-4 px-6 whitespace-nowrap">

                                {{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}
                                <div class="relative max-w-[100px]">
                                    <div class="overflow-hidden h-2 text-xs flex rounded-lg bg-emerald-200">
                                        <div style="width: 100%"
                                             class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                {{ $reservation->person }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $tables->find($reservation->table)->name }}
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Düzenle</a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
