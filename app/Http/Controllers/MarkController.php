<?php

namespace App\Http\Controllers;

use App\markModel;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlert;
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
//        $input = $request->all();
//        $validator=Validator::make($request->all(), [
//           'subid'=>'required',
//           'mark'=>'required',
//           'sid'=>'required',
//           'examid'=>'required',
//           'year'=>'required'
//        ]);
//      if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput();
//        } else {
//            $data = markModel::create($input);
//            SweetAlert::success('Hello World!')->autoclose(3000);
//            return redirect('mark');
//        }
//
//
//        return redirect('mark')->with('success', 'Data has been Inserted');

        $marks=$request->mark;
        $count=count($marks);
        $sub_codes=$request->sub_code;
         $count=count($sub_codes);
        $sid=$request->sid;
        $year=$request->year;
        $examid=$request->examid;
        for ($i=0; $i < $count; $i++) { 
                $mark=$marks[$i];
                $sub_code=$sub_codes[$i];
                DB::table('mark')->insert(
                    ['sid'=>$sid, 'mark'=>$mark, 'sub_code'=>$sub_code, 'examid'=>$examid, 'year'=>$year]
                );

        }

        return view('mark.mark_list')->with('success', 'Mark insert successfully');
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

    public function marks($id)
    {
        $info=DB::table('registration')->where('id','=',$id)->get();
        $class=DB::table('registration')->where('id','=',$id)->pluck('class');
        $subjects=DB::table('subject')->where('class','=',$class)->get();
        return view('mark.mark_entry', compact('subjects', 'info'));
    }

    public function marksheet($sid,$examid,$year)
    {
        $info=DB::table('registration')->where('sid','=',$sid)->get();
        $marks=DB::table('mark')->where('examid','=',$examid)->where('year','=',$year)->where('sid','=',$sid)->get();
        return view('mark.mark_sheet', compact('info', 'marks'));
    }
}
