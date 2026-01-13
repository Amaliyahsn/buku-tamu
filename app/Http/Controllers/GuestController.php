<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('guest');
    }

    public function store(Request $request) {
        Guest::create($request->all());
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

        public function admin()
        {
            $guests = Guest::latest()->get();
            return view('admin', compact('guests'));
        }
}

