<?php

namespace App\Http\Controllers;

use App\subjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = subjectModel::paginate(5);
        return view('subject.sub_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers=DB::table('teacher')->get();
        return view('subject.sub_create', compact('teachers'));
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
        $validator=Validator::make($request->all(),[
            'subid'=>'required',
            'subname'=>'required',
            'fmark'=>'required',
            'class'=>'required',
            'tid'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data=subjectModel::create($input);
        return redirect('/subject');
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
        $info=subjectModel::findOrFail($id);
        $teachers=DB::table('teacher')->get();
        return view('subject.sub_edit', compact('info', 'teachers'));
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
        $info=subjectModel::findOrFail($id);
        $input=$request->all();
        $info->update($input);
        return redirect('/subject');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info=subjectModel::findOrFail($id);
        $info->delete($info);
        return redirect('/subject');
    }
}
