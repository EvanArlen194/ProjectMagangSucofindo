@extends('layouts.main')

@section('content')
<div class="bmi-calculator">
    <h2>Kalkulator BMI</h2>
    <form method="POST" action="{{ url('/bmi-calculator') }}">
        @csrf
        <input type="text" name="weight" placeholder="Berat (kg)" required>
        <input type="text" name="height" placeholder="Tinggi (cm)" required>
        <button type="submit">Hitung BMI</button>
    </form>
</div>
@endsection
