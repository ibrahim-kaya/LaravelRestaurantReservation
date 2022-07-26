<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
            ['name' => 'site_logo', 'value' => '/images/logo.png', 'description' => 'Website logosu.'],
            ['name' => 'store_name', 'value' => 'IKY Restoran', 'description' => 'İşletme adı.'],
            ['name' => 'title', 'value' => 'Enfes lezzetlerin buluşma noktası!', 'description' => 'Tarayıcı başlığında yazacak metin.'],
            ['name' => 'home_header_title', 'value' => 'IKY Restoran\'a Hoşgeldiniz!', 'description' => 'Anasayfadaki büyük başlık.'],
            ['name' => 'home_header_text', 'value' => 'Harika manzara eşliğinde enfes lezzetlerin tadını çıkarın!', 'description' => 'Anasayfadaki büyük başlığın altındaki metin.'],
            ['name' =>'about_title', 'value' => 'IKY Restoran\'a hoş geldiniz. 2018\'den beri en yüksek kalitede Geleneksel Yemekleri Sunuyoruz.', 'description' => 'Hakkımızda yazısı başlığı.'],
            ['name' => 'about_text', 'value' => 'Samimi sabah kahvaltılarından en keyifli hafta sonu yemeklerine, lezzetli akşam yemeklerine kadar, günün her saatinde IKY Restoran’da sizleri bekliyoruz. Modern ve minimal iç tasarımıyla sahip olduğu eşsiz konumun keyfini yaşamak isteyen tüm misafirlerimiz için farklı deneyimler sunuyoruz.', 'description' => 'Hakkımızda yazı.'],
            ['name' => 'contact_text', 'value' => 'Aklınıza takılan her soru veya rezervasyon talebi için dilediğiniz zaman bizlerle iletişime geçebilirsiniz!', 'description' => 'İletişime geçin kısmında yazacak yazı.'],
            ['name' => 'tel_no', 'value' => '0242 742 00 00', 'description' => 'İşletme iletişim numarası.'],
            ['name' => 'address', 'value' => '1234. Sokak, Güvercin Caddesi, No: 123, Manavgat/ANTALYA', 'description' => 'İşletme adresi.'],
            ['name' => 'e_mail', 'value' => 'iletisim@mail.com', 'description' => 'İşletme E-Mail adresi.'],
            ['name' => 'facebook', 'value' => 'https://facebook.com', 'description' => 'İşletme Facebook adresi.'],
            ['name' => 'twitter', 'value' => 'https://twitter.com', 'description' => 'İşletme Twitter adresi.'],
            ['name' => 'instagram', 'value' => 'https://instagram.com', 'description' => 'İşletme Instagram adresi.'],
            ['name' => 'youtube', 'value' => 'https://youtube.com', 'description' => 'İşletme YouTube adresi.'],
            ['name' => 'coordinates', 'value' => '36.787210, 31.447888', 'description' => 'İşletme koordinatları.'],
            ['name' => 'show_menu', 'value' => 1, 'description' => 'Anasayfada menü gösterilsin mi?'],
            ['name' => 'show_reservation', 'value' => 1, 'description' => 'Rezervasyon formu aktif olsun mu?'],
            ['name' => 'show_blog', 'value' => 1, 'description' => 'Blog aktif olsun mu?']
        ]);
    }
}
