<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\banner;
use App\Model\news;
use App\Model\document;
use App\Model\test;
use App\Model\question;
use App\Model\result;

class HomeController extends Controller
{
    public function getIndex()
    {
    	$data['list_banner'] = banner::orderBy('ban_active','desc')->take(4)->get();
    	return view('index', $data);
    }

    public function getListNews($cate_id)
    {
    	$data['list_news'] = news::where('news_cateid','=',$cate_id)->paginate(5);
    	return view('pages.list_news', $data);
    }

    public function getNewsDetail($cate_slug, $news_slug, $news_id)
    {
    	$data['news_detail'] = news::find($news_id);
   		return view('pages.news_detail', $data);
    }

    public function getDocument($doc_id, $doc_slug)
    {
        $data['document_detail'] = document::find($doc_id);
        return view('pages.reader', $data);
    }

    public function getListTest()
    {  
        $data['listtest'] = test::all();
        return view('pages.list_test', $data);
    }

    public function getDetailTest($id)
    {
        $data['detailtest'] = question::where('qes_test_id','=',$id)->orderBy('created_at','asc')->get();
        $data['test'] = test::find($id);
        return view('pages.detail_test', $data);
    }

    public function getSolveTheTest()
    {
        return view('pages.solve_test');
    }

    public function postDetailTest(Request $request, $id)
    {
        $test = test::find($id);
        $arr_answer = [];
        foreach ($request->all() as $value) {
           array_push($arr_answer, $value);
        }
       array_shift($arr_answer);
       $data = question::where('qes_test_id','=', $id)->orderBy('created_at','asc')->get();
       $arr_correct_answer = [];
       foreach ($data as $value) {
           array_push($arr_correct_answer, $value->qes_correct_answer);
       }
       $arr_correct_answer = array_map('strtolower', $arr_correct_answer);
       $test_result = array_diff_assoc($arr_answer, $arr_correct_answer);
       $num_wrong_answer = count($test_result);
       $result = new result;
       $result->ter_test_id = $id;
       $result->ter_num_correct = $test->test_total_questions - $num_wrong_answer;
       $result->ter_num_wrong = $num_wrong_answer;
       $result->save();
       $rid = $result->ter_id;
       return redirect()->route('test.result', ['rid'=>$rid]);       
    }

    public function getTestResult($rid)
    {
        $data['result'] = result::find($rid);
        $data['test'] = test::find($data['result']->ter_test_id);
        return view('pages.test_result', $data);
    }

}
