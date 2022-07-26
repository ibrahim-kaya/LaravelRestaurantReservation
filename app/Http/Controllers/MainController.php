<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\MenuItem;
use App\Repository\Functions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {

        $configs = Functions::getConfigs();
        $menuitems = [
            'yemek' => MenuItem::where('category', 'yemek')->orderBy('order')->get(),
            'icecek' => MenuItem::where('category', 'icecek')->orderBy('order')->get(),
            'anayemek' => MenuItem::where('category', 'anayemek')->orderBy('order')->get(),
            'tatli' => MenuItem::where('category', 'tatli')->orderBy('order')->get(),
        ];


        return view('anasayfa', ['config' => $configs, 'menuitems' => $menuitems]);
    }

    public function makeReservation(Request $request)
    {

        $rules = [
            'name' => 'required|string',
            'phone' => 'required|string',
            'date' => 'required|string',
            'email' => 'required|string',
            'person' => 'required|integer',
            'time' => 'required|string'
        ];

        $field_names = [
            'name' => 'İsim',
            'phone' => 'Telefon Numarası',
            'date' => 'Tarih',
            'email' => 'E-Posta',
            'person' => 'Kişi Sayısı',
            'time' => 'Saat'
        ];

        $validator = Validator::make($request->all(), $rules, [], $field_names);

        if ($validator->fails()) {

            return response()->json([
                'status' => 0,
                'content' => view('forms.modal-error', ['errors' => $validator->messages()->all()])->render()
            ], 200);
        }


        return response()->json([
            'status' => 1,
            'content' => view('forms.reservation-form', ['data' => $request->all()])->render()
        ], 200);

    }
}
