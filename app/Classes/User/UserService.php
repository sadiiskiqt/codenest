<?php

namespace App\Classes\User;

use Illuminate\Http\Request;


class UserService extends UserRepository
{

    /**
     * @param Request $oRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createTodoList(Request $oRequest)
    {
        $aRules = array(
            'sTodoList' => 'required|min:2|max:255'
        );

        $oValidate = \Validator::make($oRequest->all(), $aRules);
        if (!$oValidate->passes()) {
            \Session::flash('todo_errors', 'Error');
            return redirect('home');
        } else {
            //Save
            $iUserId = \Auth::user()->id;
            $this->saveTodoList($iUserId, $oRequest->input('sTodoList'));
            return redirect('home');
        }
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->getTodoList();
    }

    /**
     * @param $iUserId
     * @param $iTodoId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteTodoList($iUserId, $iTodoId)
    {
        if (\Auth::user()->id != intval($iUserId)) {
            //Do nothing just redirect
        } else {
            //Prosed delete process
            return $this->setToDeleteTodoList($iUserId, $iTodoId);
        }
    }

    /**
     * @param Request $oRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createList(Request $oRequest)
    {
        $aRules = array(
            'sList' => 'required|min:2|max:255',
            'todo' => 'required'
        );

//        dd($oRequest->all());

        $oValidate = \Validator::make($oRequest->all(), $aRules);
        if (!$oValidate->passes()) {
            \Session::flash('todo_errors', 'Error List');
            exit('error');
            return redirect('home');
        } else {
            //Save
            $this->saveList($oRequest->input('todo'), $oRequest->input('sList'));
            return redirect('home');
        }
    }

    /**
     * @param $iTodoId
     * @return mixed
     */
    public function getMyListP($iTodoId)
    {
        return $this->getMyList($iTodoId);
    }

    /**
     * @param $iTodoId
     * @param $id
     * @return bool
     */
    public function deleteMyList($iTodoId, $id)
    {
        return $this->setToDeleteList($iTodoId, $id);
    }


    public function updateList(Request $oRequest)
    {

       // dd($oRequest->all());

        $aRules = array(
            'sUpdateList' => 'required|min:2|max:255',
            'iTodoId' => 'required',
            'iListId' => 'required'
        );

        $oValidate = \Validator::make($oRequest->all(), $aRules);
        if (!$oValidate->passes()) {
            \Session::flash('todo_errors', 'Error List Update');
            return redirect('home');
        } else {
            //Save
            $this->updateMyList(
                $oRequest->input('iTodoId'),
                $oRequest->input('iListId'),
                $oRequest->input('sUpdateList')
            );
            return redirect('home');
        }
    }

}