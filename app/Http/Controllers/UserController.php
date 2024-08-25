<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Str;
use Exception;
use App\Models\AppMdLevelprioritas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

class UserController extends Controller
{
    public function login(): View
    {

        $useraplikasi = User::pluck('name');

        return view('pages/login', compact('useraplikasi'));
    }

}
