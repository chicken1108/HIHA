<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Model\category;
use App\Model\document;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	$categories = category::all();
    	$documents = document::where('doc_docateid','=',1)->get();
        $documents_advanced = document::where('doc_docateid','=',2)->get();
    	view()->share('categories', $categories);
    	view()->share('documents', $documents);
    	view()->share('documents_advanced', $documents_advanced);
    }
}

