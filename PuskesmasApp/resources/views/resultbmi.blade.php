@extends('layouts.main')

@section('content')
<div class="result">
    <h2>Hasil BMI</h2>
    <p>BMI anda adalah: {{ $bmi }}</p>
    <p>Kategori: {{ $category }}</p>
</div>
@endsection
