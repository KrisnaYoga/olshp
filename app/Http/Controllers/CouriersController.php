<?php

namespace App\Http\Controllers;

use DB;
use App\Couriers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
        $dataCourier = DB::table('couriers')
        ->select ('id', 'courier')
        ->get();
        */
        $dataCourier = Couriers::get();
        return view ('Admin.Couriers.index')->with('dataCour', $dataCourier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
        $nama_courier = $request->courier_nm;
        $cr_at = Carbon::now();
        $up_at = null;

        DB::table('couriers')->insert(
            [
            'courier' => $nama_courier, 
            'created_at' => $cr_at,
            'updated_at' => $up_at,
            ]
        );
        */

        $cour = new Couriers;
        $cour->courier = $request->courier_nm;
        $cour->created_at = Carbon::now();
        $cour->save();
        return redirect('admin/courier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        $getCour = Couriers::find($id);
        //return $getCour;
        //return view('admin.CouriersEdit')->with('getc', $getCour);
        return view('Admin.Couriers.edit', compact('getCour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =[
            'courier' => $request->courier_nm,
            'updated_at' => Carbon::now(),
        ];

        DB::table('couriers')->where('id', $id)->update($data);
        return redirect('admin/courier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $getCour = Couriers::findOrFail($id);
        $getCour->delete();

        return redirect('admin/courier');
    }
}
