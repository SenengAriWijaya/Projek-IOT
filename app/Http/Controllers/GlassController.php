<?php

namespace App\Http\Controllers;

use App\Models\Damage_reports;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;


class GlassController extends Controller
{
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tgl = Date('Y-m-d');

        $data = DB::table('damage_reports')
            ->whereDate('date_time', $tgl)
            ->pluck('class_name')
            ->countBy();

        return view('glass', ['data' => $data, 'tgl' => $tgl]);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
