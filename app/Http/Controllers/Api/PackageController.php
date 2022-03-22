<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package AS Pack;

class PackageController extends Controller
{
    public function populars(){
        $output = [
            'code' => 0,
            'data' => null,
            'msg' => ''
        ];

        $output['data'] = Pack::limit(4)->get();
        $output['code'] = 1;
        
        return $output;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = [
            'code' => 0,
            'data' => null,
            'msg' => ''
        ];

        $output['data'] = Pack::all();
        $output['code'] = 1;

        return $output;
    }

    public function getByCategory(Request $request, $id)
    {
        $output = [
            'code' => 0,
            'data' => null,
            'msg' => ''
        ];

        $output['data'] = Pack::where('category_id',$id)->get();
        $output['code'] = 1;

        return $output;        
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
