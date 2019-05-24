<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataCategory = ProductCategory::get();
        return view('Admin.ProductCategory.index')->with('dataCat', $dataCategory);
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
        $cate = new ProductCategory;
        $cate->category_name =  $request->category_nm;
        $cate->created_at = Carbon::now();
        $cate->save();
        
		return redirect('admin/category');
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
        $getProd = ProductCategory::find($id);
        //return $getCour;
        //return view('admin.CouriersEdit')->with('getc', $getCour);
        return view('Admin.ProductCategory.edit', compact('getProd'));
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
            'category_name' => $request->category_nm,
            'updated_at' => Carbon::now(),
        ];

        DB::table('product_categories')->where('id', $id)->update($data);
        return redirect('admin/category');
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
        $getProd = ProductCategory::findOrFail($id);
        $getProd->delete();

        return redirect('admin/category');
    }
}
