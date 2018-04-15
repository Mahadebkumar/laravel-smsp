<?php

namespace App\Http\Controllers;

use App\markModel;
use Validator;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = markModel::paginate(5);
        return view('mark.mark_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mark.mark_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator=Validator::make($request->all(), [
           'subid'=>'required',
           'mark'=>'required',
           'sid'=>'required',
           'examid'=>'required',
           'year'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = markModel::create($input);
        return redirect('mark')->with('success', 'Data has been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = markModel::findOrFail($id);
        return view('mark.mark_edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info = markModel::findOrFail($id);
        $input = $request->all();
        $info->update($input);
        return redirect('mark')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = markModel::findOrFail($id);
        $info->delete($info);
        return redirect('mark')->with('success', 'Data has been deleted');

    }
}
