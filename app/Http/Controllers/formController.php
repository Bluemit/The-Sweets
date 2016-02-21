<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class formController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function form()
    {
//        $members=new App\Namelist();
//        return $members->all();

        return view('form');
    }
}
