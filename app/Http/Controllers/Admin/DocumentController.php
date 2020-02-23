<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Model\document;
use App\Model\docate;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['list_document'] = document::all();
        return view('admin.pages.list_document', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['list_docate'] = docate::all();
         return view('admin.pages.add_document', $data);
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
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.unique'=>'Tiêu đề đã tồn tại',
            ]);

        $document = new document;
        $document->doc_slug = Str::slug($request->title);
        $document->doc_title = $request->title;
        $document->doc_docateid = $request->docate_id;
        if($request->has('desc')){
            $document->doc_desc = $request->desc;
        }
        if($request->has('content')){
            $document->doc_content = $request->content;
        }
        $file = $request->file('fileToUpLoad');
        $filename = $file->getClientOriginalName();
        $fileExtension = $file->extension();
        $fileExtension = strtolower($fileExtension);
        if($fileExtension=='pdf'| $fileExtension=='doc'| $fileExtension=='ppt'|$fileExtension=='xls' |$fileExtension=='docx') {
            $document->doc_file = $filename;
            $document->save();
            $file->move('public/backend/document/', $filename);
            return redirect()->route('document.index')->with('themtailieuthanhcong', 'Thêm tài liệu thành công!');  
        }else{
            return back()->with('dinhdangfilekhongdung', 'Định dạng file không đúng!');
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
        $data['edit_document'] = document::find($id);
        $data['list_docate'] = docate::all();
        return view('admin.pages.edit_document', $data);
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

        $document = document::find($id);
        $document->doc_slug = Str::slug($request->title);
        $document->doc_title = $request->title;
        $document->doc_docateid = $request->docate_id;
        $document->doc_desc = $request->desc;
        $document->doc_content = $request->content;

        if($request->hasFile('fileToUpLoad')){
           $file = $request->file('fileToUpLoad');
           $filename = $file->getClientOriginalName();
           $fileExtension = $file->extension();
           $fileExtension = strtolower($fileExtension);
           if($fileExtension=='pdf'| $fileExtension=='doc'| $fileExtension=='ppt'|$fileExtension=='xls' |$fileExtension=='docx') {
            $document->doc_file = $filename;
            $file->move('public/backend/document/', $filename);  
        }else{
            return back()->with('dinhdangfilekhongdung', 'Định dạng file không đúng!');
            }
        }
        $document->save();
        return redirect()->route('document.index')->with('suatailieuthanhcong', 'Sửa tài liệu thành công!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        document::destroy($id);
        return back()->with('xoatailieuthanhcong', 'Xoá tài liệu thành công!');
    }
}
