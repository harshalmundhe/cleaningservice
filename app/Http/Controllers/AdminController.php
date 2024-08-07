<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function estimate() {
        $estimates = DB::table('estimate')->get();
        return view('admin.estimate.index', ['estimates' => $estimates]);
    }

    public function viewEstimate($id) {
        $estimate = DB::table('estimate')->where('id', $id)->first();
        return view('admin.estimate.view', ['estimate' => $estimate]);
    }
}
