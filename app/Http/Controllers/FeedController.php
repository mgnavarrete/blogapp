<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Pago;
use App\Models\EstadoSesion;
use App\Models\Tutor;
use Carbon\Carbon;
use App\Models\Reunion;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function index()
    {
        // Pasar los datos a la vista
        return view('pages.feed');
    }
}
