<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
    }

    public function reservations()
    {

        return view('admin.reservations');
    }

    public function getReservations(Request $request)
    {
        // Sorgu için filtreleri hazırlıyoruz. Kolaylık olması açısından array key'i olarak tablodaki sütun adını yazdım. (Tarihler hariç. Onlara özel sorgu yazacağım aşağıda)
        $filters = array(
            'start' => $request->start,
            'end' => $request->end,
            'name' => $request->name,
            'unique_id' => $request->res_no,
            'phone' => $request->tel_no,
        );

        $filter = '';

        // Yukarıda doldurduğumuz array içeriğini MySQL sorgusu haline getirmek için tek tek kontrol edeceğiz dolu mu yoksa boş mu gelmiş diye.
        foreach ($filters as $key => $val) {
            if ($key == 'end') continue; // Bitiş tarihini kontrole gerek yok. Zaten tarih aralığı geleceği için.

            if ($val) {
                if ($filter) $filter .= ' AND '; // Eğer filtre sorgumuza daha önceden bir filtre eklenmişse AND diye devam ettiriyoruz.
                else $filter .= ' WHERE '; // Eğer filtre sorgumuza gelen ilk değerse başına WHERE atarak filtrelemeyi başlatıyoruz.

                switch ($key) {
                    case 'start' :
                        $filter .= "`date` BETWEEN '" . Carbon::parse($val)->format('Y-m-d') . "' AND '" . Carbon::parse($filters['end'])->format('Y-m-d') . "'";
                        // Tarih için BETWEEN sorgusu çekmemiz gerektiği için ona özel sorgu ekliyoruz burda.
                        break;
                    default :
                        $filter .= "`" . $key . "` = '" . $val . "'";
                        // Geri kalan tüm değerlerin eşit olmasını istediğimiz için tek tek yazmaya gerek yok. Loop'a alıp yukarda array key'inde belirttiğimiz sütun adı ve değer kontrolü yapıyoruz.
                }
            }
        }

        $result = DB::select('SELECT * FROM `reservations`' . $filter);

        // Sonuçları JSON olarak döndürüyoruz. Hazırladığımız blade dosyasını HTML olarak gönderip sayfaya jQuery ile basacağız.
        return response()->json([
            'status' => 1,
            'result' => view('admin.forms.reservation-list', ['reservations' => $result])->render()
        ], 200);

    }
}
