<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'result' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('result')->store('results', 'public');

        Result::create([
            'user_id' => Auth::id(),
            'filename' => basename($path),
        ]);

        return redirect()->route('dashboard')->with('success', 'Result uploaded.');
    }
}
