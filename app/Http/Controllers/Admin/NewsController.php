<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\news;
use App\Model\category;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_news'] = news::all();
        return view('admin.pages.list_news', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['list_cate'] = category::all();
        return view('admin.pages.add_news', $data);
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
                'title'=>'required|unique:tbl_news,news_title',
                'desc'=>'required',
                'content_txt'=>'required'
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.unique'=>'Tiêu đề đã tồn tại',
                'desc.required'=>'Bạn chưa nhập mô tả',
                'content_txt.required'=>'Bạn chưa nhập nội dung',
            ]);

        $news = new news;
        $news->news_title = $request->title;
        $news->news_slug = Str::slug($request->title);
        $news->news_desc = $request->desc;
        $news->news_detail = $request->content_txt;
        $news->news_cateid = $request->cate_id;

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $fileExtension = $file->extension();
        $fileExtension = strtolower($fileExtension);
        if($fileExtension=='jpg'| $fileExtension=='png'| $fileExtension=='jpeg'|$fileExtension=='gif'){
            $news->news_image = $filename;
            $news->save();
            $file->move('public/backend/news/', $filename);
            return redirect()->route('news.index')->with('themtintucthanhcong', 'Thêm tin tức thành công');  
        }else{
            return back()->with('dinhdanghinhanhkhongdung', 'Định dạng hình ảnh không đúng!');
        }
       
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
        $data['edit_news'] = news::find($id);
        $data['list_cate'] = category::all();
        return view('admin.pages.edit_news', $data);
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
                'desc'=>'required',
                'content_txt'=>'required'
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'desc.required'=>'Bạn chưa nhập mô tả',
                'content_txt.required'=>'Bạn chưa nhập nội dung',
            ]);

        $news = news::find($id);
        $news->news_title = $request->title;
        $news->news_slug = Str::slug($request->title);
        $news->news_desc = $request->desc;
        $news->news_cateid = $request->category;
        $news->news_detail = $request->content_txt;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $fileExtension = $file->extension();
            $fileExtension = strtolower($fileExtension);
            if($fileExtension=='jpg'| $fileExtension=='png'| $fileExtension=='jpeg'|$fileExtension=='gif'){
                $news->news_image = $filename;
                $file->move('public/backend/news/', $filename);  
            }else{
                return back()->with('dinhdanghinhanhkhongdung', 'Định dạng hình ảnh không đúng!');
            }
        }
        $news->save();
        return redirect()->route('news.index')->with('suatinthanhcong', 'Sửa tin thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        news::destroy($id);
        return back()->with('xoatintucthanhcong', 'Xoá tin tức thành công!');
    }
}
