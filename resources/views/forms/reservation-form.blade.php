<div style="text-align: center;">
    <img src="{{ \App\Repository\Functions::getConfig('site_logo') }}" alt="" style="max-height: 75px;">
</div>

<h3 class="text-center">Rezervasyonunuz oluşturuldu!</h3>
<br>
<div class="text-center">
    {!! QrCode::size(150)->generate('https://www.google.com'); !!}
    <p>(Bu QR kodunu girişte görevliye gösterebilirsiniz)</p>
</div>
<br>
<br>
<b>Rezervasyon bilgileriniz aşağıdaki gibidir:</b>
<br>
<br>
<p>İsim: <b style="color: black;">{{ $data['name'] }}</b></p>
<p>Telefon: <b style="color: black;">{{ $data['phone'] }}</b></p>
<p>Kişi Sayısı: <b style="color: black;">{{ $data['person'] }}</b></p>
<p>Tarih-Saat: <b style="color: black;">{{ \Illuminate\Support\Carbon::createFromFormat('d/m/Y', $data['date'])->translatedFormat('d F Y, l') }},
    {{ $data['time'] }}</b></p>
<br>
<br>
<p>Rezervasyon bilgileriniz e-mail adresinize ({{ $data['email'] }}) gönderilmiştir. Dilerseniz PDF formatında da indirebilirsiniz.</p>
<button type="button" class="btn btn-success">PDF İndir</button>
