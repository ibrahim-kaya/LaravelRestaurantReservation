<div>
    <div class="w-full mb-12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
            <div class="rounded-lg mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-lg text-blueGray-700">
                            Bekleyen Rezervasyonlar
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
            <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table
                    class="items-center w-full bg-transparent border-collapse">
                    <thead>
                    <tr>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            İsim
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Tarih
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Onay Durumu
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            İşlemler
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">

                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($reservations as $reservation)

                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                <img src="../../assets/img/bootstrap.jpg" class="h-12 w-12 bg-white rounded-full border"
                                     alt="..."/>
                                <span class="ml-3 font-bold text-blueGray-600">{{ $reservation->name }}</span>
                            </th>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                {{ \Carbon\Carbon::parse($reservation->date)->translatedFormat('d M Y, l') }} {{ $reservation->time }}
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                @php
                                    $durum = [
                                        '-1' => ['text-red-500', 'İptal'],
                                        '0' => ['text-orange-500', 'Bekliyor'],
                                        '1' => ['text-green-600', 'Onaylandı']
                                        ];
                                @endphp
                                <i class="fas fa-circle {{ $durum[$reservation->status][0] }} mr-2"></i>

                                {{ $durum[$reservation->status][1] }}
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="inline-flex rounded-md shadow-sm">
                                    @if($reservation->status != 1)
                                        <button wire:target="ChangeState, ResConfirmForm" wire:loading.class="disable"
                                                wire:click="ResConfirmForm({{ $reservation->id }})"
                                                class="bg-green-600 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                type="button">
                                            Onayla
                                        </button>
                                    @endif

                                    @if($reservation->status != 0)
                                        <button wire:target="ChangeState, ResConfirmForm" wire:loading.class="disable"
                                                wire:click="ChangeState({{ $reservation->id }}, 'pending')"
                                                class="bg-yellow-600 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                type="button">
                                            Bekliyor
                                        </button>
                                    @endif
                                    @if($reservation->status != -1)
                                        <button wire:target="ChangeState, ResConfirmForm" wire:loading.class="disable"
                                                wire:click="ChangeState({{ $reservation->id }}, 'cancel')"
                                                class="bg-red-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                type="button">
                                            Reddet
                                        </button>
                                    @endif
                                </div>
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                   onclick="openDropdown(event,'table-light-1-dropdown')">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div
                                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg min-w-48"
                                    id="table-light-1-dropdown">
                                    <a href="#pablo"
                                       class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a>
                                    <a href="#pablo"
                                       class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                        action</a>
                                    <a href="#pablo"
                                       class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                        else here</a>
                                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                    <a href="#pablo"
                                       class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                        link</a>
                                </div>
                            </td>

                        </tr>

                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">Hiç rezervasyon yok.</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Main modal -->
    <div tabindex="-1" aria-hidden="true"
         class="@if(!$showModal) hidden @else slide-in-blurred-top @endif bg-gray-600 bg-opacity-50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div
            class="relative p-4 w-full max-w-2xl h-full md:h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-lg border-b">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Rezervasyonu Onayla
                    </h3>
                    <button wire:click="hideModal" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Kapat</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                    <p><b>Rezervasyon Bilgileri:</b></p>
                    <div class="rounded-lg bg-blue-50 border-blue-100 border p-4">
                        <p>İsim: <b>{{ $confirm_res->name ?? '' }}</b><br>
                            Tarih-Saat:
                            <b>{{ \Carbon\Carbon::parse($confirm_res->date ?? '')->translatedFormat('d M Y, l') }}, {{ $confirm_res->time ?? '' }}</b><br>
                            Kişi Sayısı: <b>{{ $confirm_res->person ?? '' }}</b><br>
                            Telefon No: <b>{{ $confirm_res->phone ?? '' }}</b></p>
                        <p>Müşteri Notu: <b>{{ $confirm_res->customer_note ?? '' }}</b></p>
                    </div>


                    <div>
                        <label for="table" class="block mb-2 text-sm font-medium text-gray-900">Masa numarası:</label>

                        <select wire:model="confirm_table" name="table" id="table" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Masa Seçiniz...</option>
                            @foreach($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="note" class="block mb-2 text-sm font-medium text-gray-900">Restoran Notu:</label>
                        <textarea wire:model="confirm_note" name="note" id="note" cols="30" rows="5"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                    </div>

                    <button type="submit" wire:target="ResConfirm" wire:click="ResConfirm" wire:loading.class="disable"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Rezervasyonu Onayla
                    </button>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 justify-end">
                    {{--                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I accept</button>--}}
                    <button wire:click="hideModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                        Kapat
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
