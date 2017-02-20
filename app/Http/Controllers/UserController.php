<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\User\UserService as UserService;

class UserController extends Controller
{
    protected $oUserService;

    /**
     * UserController constructor.
     * @param UserService $oUserService
     */
    public function __construct(UserService $oUserService)
    {
        $this->oUserService = $oUserService;
    }

    /**
     * @param Request $oRequest
     */
    public function create(Request $oRequest)
    {
        return $this->oUserService->createTodoList($oRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = $this->oUserService->getList();
        return \View::make('home')->with('data', $data);
    }

    /**
     * @param $iUserId
     * @param $iTodoId
     * @param $sTodoList
     * @return mixed
     */
    public function todoList($iUserId, $iTodoId, $sTodoList)
    {
        $aDataList = $this->oUserService->getMyListP($iTodoId);
        return \View::make('list')
            ->with('aDataList', $aDataList)
            ->with('iTodoId', $iTodoId)
            ->with('sTodoList', $sTodoList);
    }

    /**
     * @param $iUserId
     * @param $iTodoId
     */
    public function deleteTodo($iUserId, $iTodoId)
    {
        if ($this->oUserService->deleteTodoList($iUserId, $iTodoId) == true) {
            return redirect('home');
        }
    }

    /**
     * @param Request $oRequest
     */
    public function addToList(Request $oRequest)
    {
        return $this->oUserService->createList($oRequest);
    }

    /**
     * @param $iTodoId
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteList($iTodoId, $iId)
    {
        if ($this->oUserService->deleteMyList($iTodoId, $iId) == true) {
            return redirect('home');
        }
    }

    /**
     * @param Request $oRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $oRequest)
    {
        return $this->oUserService->updateList($oRequest);
    }

    /**
     * @return mixed
     */
    public function myList()
    {
        $aDataList = $this->oUserService->getMyTodo();
        return \View::make('MyList')->with('aDataList', $aDataList);
    }

    public function excel()
    {
        $user = new \App\User;

        $users = $user::select('id', 'name', 'email', 'created_at')->get();
        \Excel::create('users', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');

        return \View::make('excel');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        \Auth::logout();
        return redirect('home');
    }


}
