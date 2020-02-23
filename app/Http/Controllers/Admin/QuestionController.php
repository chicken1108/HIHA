<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\test;
use App\Model\question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_question'] = question::all();
        return view('admin.pages.list_question', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['list_test'] = test::all();
        return view('admin.pages.add_question', $data);
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
                'content' => 'required',
                'answer_a' => 'required',
                'answer_b' => 'required',
                'answer_c' => 'required',
                'answer_d' => 'required',
            ],
            [
                'content.required' => 'Bạn chưa nhập nội dung câu hỏi!',
                'answer_a.required' => 'Bạn chưa điền đáp án a',
                'answer_b.required' => 'Bạn chưa điền đáp án b',
                'answer_c.required' => 'Bạn chưa điền đáp án c',
                'answer_d.required' => 'Bạn chưa điền đáp án d',
            ]);

        $question =  new question;
        $question->qes_content = $request->content;
        $question->qes_answer_a = $request->answer_a;
        $question->qes_answer_b = $request->answer_b;
        $question->qes_answer_c = $request->answer_c;
        $question->qes_answer_d = $request->answer_d;
        $question->qes_correct_answer = $request->correct_answer;
        $question->qes_test_id = $request->test;
        $question->save();
        return back()->with('themcauhoithanhcong', 'Thêm câu hỏi thành công!');
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
        $data['edit_question'] = question::find($id);
        $data['list_test'] = test::all();
        return view('admin.pages.edit_question', $data);
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
                'content' => 'required',
                'answer_a' => 'required',
                'answer_b' => 'required',
                'answer_c' => 'required',
                'answer_d' => 'required',
            ],
            [
                'content.required' => 'Bạn chưa nhập nội dung câu hỏi!',
                'answer_a.required' => 'Bạn chưa điền đáp án a',
                'answer_b.required' => 'Bạn chưa điền đáp án b',
                'answer_c.required' => 'Bạn chưa điền đáp án c',
                'answer_d.required' => 'Bạn chưa điền đáp án d',
            ]);

        $question =  question::find($id);
        $question->qes_content = $request->content;
        $question->qes_answer_a = $request->answer_a;
        $question->qes_answer_b = $request->answer_b;
        $question->qes_answer_c = $request->answer_c;
        $question->qes_answer_d = $request->answer_d;
        $question->qes_correct_answer = $request->correct_answer;
        $question->qes_test_id = $request->test;
        $question->save();
        return redirect()->route('question.index')->with('suacauhoithanhcong', 'Sửa câu hỏi thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        question::destroy($id);
        return back()->with('xoacauhoithanhcong', 'Xoá câu hỏi thành công!');
    }
}
