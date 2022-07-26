@extends('layouts.admin')

@section('title')
    Anaysayfa
@endsection

@section('styles')
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            /*pl-4*/
            /*pl-4*/
            /*pl-2*/
            padding: .5rem 1rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>
@endsection

@section('content')

    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Rezervasyonlar
                        </h6>
                        <button
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Settings
                        </button>
                    </div>
                </div>

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                    <form id="search_form">
                        <div class="flex flex-col xl:flex-row">

                            <div class="w-full xl:w-2/5 px-5 mt-8">
                                <label for="date" class="block mb-2 text-sm font-medium text-gray-700 font-bold">Tarih
                                    Aralığı:</label>
                                <div id="date" date-rangepicker class="flex flex-col sm:flex-row items-center">
                                    <div class="relative grow w-full">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input name="start" type="text"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                               placeholder="Başlangıç Tarihi" autocomplete="off">
                                    </div>
                                    <span class="mx-4 text-gray-500">-</span>
                                    <div class="relative grow w-full">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input name="end" type="text"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                               placeholder="Bitiş Tarihi" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="w-full xl:w-1/5 px-5 mt-8">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-700 font-bold">Rezervasyon
                                    Adı</label>
                                <input id="name" name="name" type="text"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="İsim">
                            </div>

                            <div class="w-full xl:w-1/5 px-5 mt-8">
                                <label for="res_no" class="block mb-2 text-sm font-medium text-gray-700 font-bold">Rezervasyon
                                    No:</label>
                                <input id="res_no" name="res_no" type="text"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="RESXXXX">
                            </div>

                            <div class="w-full xl:w-1/5 px-5 mt-8">
                                <label for="tel_no" class="block mb-2 text-sm font-medium text-gray-700 font-bold">Telefon
                                    Numarası:</label>
                                <input id="tel_no" name="tel_no" type="text"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="0 (555) 555 55 55">
                            </div>
                        </div>

                        <div class="flex justify-end mt-5 px-5">
                            <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                Ara
                            </button>
                        </div>
                    </form>

                        <div class="mt-10">
                            <hr>
                            <div class="mt-5 relative">

                                <div class="filter-loader bg-gray-600 bg-opacity-50 absolute w-full h-full z-50 rounded-lg flex justify-center items-center" style="display: none;">
                                    <i class="fas fa-circle-notch fa-spin text-5xl text-white"></i>
                                </div>

                                <div id="tableSec" style="min-height: 100px;">

                                    <p class="text-center text-gray-600 italic">Sonuçları görüntülemek için arama yapınız.</p>

                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="/js/flowbite-datepicker.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#search_form').submit(function(e){
            e.preventDefault();
            const inputData = $(this).find('input,textarea,select').serialize();
            $('.filter-loader').fadeIn();

            $.ajax({
                type: "POST",
                url: "/admin/getReservations",
                data: inputData,
                dataType: "json",
                success: function(data){
                    // showModal('Rezervasyon', data.content, 'Kapat');
                    $('#tableSec').html(data.result);
                    $('.filter-loader').fadeOut();
                },
                error: function(errMsg) {
                    // showModal('HATA!', '<p><b style="color: red">Rezervasyonunuz kaydedilirken bir hata oluştu!</b></p><br><p>Sorunun devam etmesi halinde bizimle iletişime geçebilirsiniz.</p>', 'Kapat');
                    $('.filter-loader').fadeOut();
                }
            });

        });

    </script>

@endsection
