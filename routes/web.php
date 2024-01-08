<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/numbers', function () {
    $numbers = range(100, 1); // Membuat array dari 100 sampai 1
    return view('numbers', ['numbers' => $numbers]);
});

Route::get('/odd-numbers', function () {
    $oddNumbers = range(1, 100, 2); // Membuat array dari 1 sampai 10 dengan langkah 2 (bilangan ganjil)
    return view('odd_numbers', ['oddNumbers' => $oddNumbers]);
});

Route::get('/even-numbers', function () {
    $evenNumbers = range(2, 100, 2); // Membuat array dari 2 sampai 100 dengan langkah 2 (bilangan genap)
    $countEvenNumbers = count($evenNumbers); // Menghitung jumlah bilangan genap

    return view('even_numbers', [
        'evenNumbers' => $evenNumbers,
        'countEvenNumbers' => $countEvenNumbers,
    ]);
});

Route::get('/calculate-volume', function () {
    $panjang = 10;
    $lebar = 5;
    $tinggi = 3;

    $volume = $panjang * $lebar * $tinggi;

    return view('volume', [
        'panjang' => $panjang,
        'lebar' => $lebar,
        'tinggi' => $tinggi,
        'volume' => $volume,
    ]);
});

Route::get('/prime-numbers', function () {
    $primeNumbers = [];

    for ($i = 2; $i <= 100; $i++) {
        if (isPrime($i)) {
            $primeNumbers[] = $i;
        }
    }

    return view('prime_numbers', ['primeNumbers' => $primeNumbers]);
});

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}