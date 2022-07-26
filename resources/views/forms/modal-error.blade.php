<p><b>Rezervasyon işleminiz sırasında bir veya birden fazla hata oluştu:</b></p>

<ul>
    @foreach($errors as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

