<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
//    public function __construct()
//    {
//        $this->middleware(function ($request, $next) {
//            $this->projects = Auth::user()->projects;
//
//            return $next($request);
//        });
//    }

}
