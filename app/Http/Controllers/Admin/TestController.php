<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_test'] = test::all();
        return view('admin.pages.list_test', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|unique:tbl_tests,test_name'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên bài thi!',
                'name.unique' => 'Tên bài thi đã tồn tại!'
            ]);
        $test = new test;
        $test->test_name = $request->name;
        $test->test_description = $request->desc;
        $test->test_note = $request->note;
        $test->test_total_questions = $request->total_question;
        $test->test_times = $request->time;
        $test->save();
        return redirect()->route('test.index')->with('thembaothithanhcong', 'Thêm bài thi thành công!');
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
        $data['edit_test'] = test::find($id);
        return view('admin.pages.edit_test', $data);
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
          $request->validate(
            [
                'name'=>'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên bài thi!',
            ]);
        $test = test::find($id);
        $test->test_name = $request->name;
        $test->test_description = $request->desc;
        $test->test_note = $request->note;
        $test->test_total_questions = $request->total_question;
        $test->test_times = $request->time;
        $test->save();
        return back()->with('suabaithithanhcong', 'Sửa bài thi thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        test::destroy($id);
        return back()->with('xoabaithithanhcong', 'Xoá bài thi thành công!');
    }
}
