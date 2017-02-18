<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/18/2017
 * Time: 1:46 PM
 */

namespace App\Classes\User;

use Illuminate\Http\Request;


class UserService extends UserRepository
{

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

    public function getList()
    {
        return $this->getTodoList();
    }

}