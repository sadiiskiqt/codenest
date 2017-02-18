<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\User\UserService as UserService;


class HomeController extends Controller
{
    protected $oUserService;

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct(UserService $oUserService)
    {
        $this->oUserService = $oUserService;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aDataResults = $this->oUserService->getList();
        return \View::make('home')->with('aDataResults', $aDataResults);
    }
}
