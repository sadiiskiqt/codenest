<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\User\UserService as UserService;

class FileController extends Controller
{

    protected $oUserService;

    /**
     * FileController constructor.
     * @param UserService $oUserService
     */
    public function __construct(UserService $oUserService)
    {
        $this->oUserService = $oUserService;
    }

    public function excel($iTodoId)
    {
        $this->oUserService->getMyListP($iTodoId);
        \Excel::create('TodoList', function ($excel) {
            $excel->sheet('Sheet 1', function ($sheet) {
                $products = $this->oUserService->getListP();
                foreach ($products as $product) {
                    $data[] = array(
                        $product->iTodoId,
                        $product->sList,
                    );
                }
                $sheet->fromArray($data);
            });
        })->export('xls');
    }
}
