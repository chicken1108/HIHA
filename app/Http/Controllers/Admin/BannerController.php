<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_banner'] = banner::all();
        return view('admin.pages.list_banner', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_banner');
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
                'title'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề!',
            ]);
        $banner = new banner;
        $banner->ban_title = $request->title;
        $banner->ban_active = $request->active;
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $fileExtension = $file->extension();
        $fileExtension = strtolower($fileExtension);
        if($fileExtension=='jpg'| $fileExtension=='png'| $fileExtension=='jpeg'| $fileExtension=='gif'){

            $banner->ban_image = $fileName;
            $file->move('public/backend/banner/', $fileName);
        }
        else{
            return back()->with('dinhdanghinhanhkhongdung', 'Định dạng hình ảnh không đúng!');
        }
        $banner->save();
        return redirect()->route('banner.index')->with('thembannerthanhcong', 'Thêm banner thành công!');

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
        $data['edit_banner'] = banner::find($id);
        return view('admin.pages.edit_banner', $data);
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
                'title'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
            ]);

        $banner = banner::find($id);
        $banner->ban_title = $request->title;
        $banner->ban_active = $request->active;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $fileExtension = $file->extension();
            $fileExtension = strtolower($fileExtension);
            if($fileExtension=='jpg'| $fileExtension=='png'| $fileExtension=='jpeg'|$fileExtension=='gif'){
                $banner->ban_image = $filename;
                $file->move('public/backend/banner/', $filename);  
            }else{
                return back()->with('dinhdanghinhanhkhongdung', 'Định dạng hình ảnh không đúng!');
            }
        }
        $banner->save();
        return redirect()->route('banner.index')->with('suabannerthanhcong', 'Sửa banner thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        banner::destroy($id);
        return back()->with('xoabannerthanhcong', 'Xoá banner thành công!');
    }
}
