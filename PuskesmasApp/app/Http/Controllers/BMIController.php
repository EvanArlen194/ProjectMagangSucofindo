<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function showForm()
    {
        return view('bmiform');
    }

    public function calculate(Request $request)
{
    $weight = $request->input('weight');
    $height = $request->input('height');

    $bmi = $weight / (($height / 100) * ($height / 100));
    if ($bmi < 18.5) {
        $category = 'Underweight';
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        $category = 'Normal Weight';
    } elseif ($bmi >= 24.9 && $bmi < 29.9) {
        $category = 'Overweight';
    } else {
        $category = 'Obese';
    }

    return view('resultbmi', ['bmi' => $bmi, 'category' => $category]);
}

}
