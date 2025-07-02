<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Result;

class DashboardController extends Controller
{
    public function index()
    {
        $results = Result::where('user_id', Auth::id())->latest()->get();
        return view('dashboard', compact('results'));
    }
}
