<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_cate'] = category::all();
        return view('admin.pages.list_cate', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_cate');
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

        $cate =  new category;
        $cate->cate_slug = Str::slug($request->title);
        $cate->cate_title = $request->title;
        $cate->save();
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editcate'] = category::find($id);
        return view('admin.pages.edit_cate', $data);
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

        $cate = category::find($id);
        $cate->cate_slug = Str::slug($request->title);
        $cate->cate_title = $request->title;
        $cate->save();
        return redirect()->route('category.index')->with('suadanhmucthanhcong', 'Sửa danh mục thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::destroy($id);
        return back()->with('xoadanhmucthanhcong', 'Xoá danh mục thành công!');
    }
}
