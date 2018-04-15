<?php

namespace App\Http\Controllers;

use App\attendencModel;
use Validator;
use Illuminate\Http\Request;

class AttendencController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=attendencModel::paginate(5);
        return view('attendenc.attendenc_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendenc.add_attendenc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($request->all(), [
            'sid'=>'required|unique:attendenc',
            'roll'=>'required',
            'class'=>'required',
            'section'=>'required',
            'date'=>'required',
            'in_time'=>'required',
            'out_time'=>'required',
            'status'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=attendencModel::create($input);
        return redirect('attendenc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $info=attendencModel::findOrFail($id);
        $info->delete($info);
        return redirect('attendenc')->with('error', 'Data has been deleted');
    }
}
