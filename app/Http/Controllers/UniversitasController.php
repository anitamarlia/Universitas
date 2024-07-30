<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use App\MyClass\Mahasiswa;
use App\MyClass\Dosen;
use Carbon\Carbon;

class UniversitasController extends Controller
{
    public function index()
    {
        $mahasiswa = new Mahasiswa();
        $dosen = new Dosen();

        echo $mahasiswa->greeting();
        echo "<br>";
        echo $dosen->greeting();
    }

    public function logGreetings()
    {
        $date = Carbon::now()->format('Y-m-d');
        $logFileName = Arr::last(explode("\\", get_class())) . "-{$date}.log";
        $mahasiswa = new Mahasiswa();
        $dosen = new Dosen();

        Log::build([
            'driver' => 'single',
            'path' => storage_path("logs/{$logFileName}"),
        ])->info($mahasiswa->greeting());

        Log::build([
            'driver' => 'single',
            'path' => storage_path("logs/{$logFileName}"),
        ])->info($dosen->greeting());

        return "Greetings have been logged.";
    }
}
