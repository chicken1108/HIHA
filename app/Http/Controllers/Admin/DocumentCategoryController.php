<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Model\docate;

class DocumentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_docate'] = docate::all();
        return view('admin.pages.list_docate', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_docate');
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
                'title'=>'required'
            ],

            [
                'title.required'=>'Bạn chưa nhập tiêu đề'
            ]);

        $docate =  new docate;
        $docate->docate_slug= Str::slug($request->title);
        $docate->docate_title = $request->title;
        $docate->save();
        return back()->with('themdanhmucthanhcong', 'Thêm danh mục thành công!');
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
        $data['edit_docate'] = docate::find($id);
        return view('admin.pages.edit_docate', $data);
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
                'title'=>'required'
            ],

            [
                'title.required'=>'Bạn chưa nhập tiêu đề'
            ]);

        $docate = docate::find($id);
        $docate->docate_slug = Str::slug($request->title);
        $docate->docate_title = $request->title;
        $docate->save();
        return redirect()->route('docate.index')->with('suadanhmucthanhcong', 'Sửa danh mục thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        docate::destroy($id);
        return back()->with('xoadanhmucthanhcong', 'Xoá danh mục thành công!');
    }
}
