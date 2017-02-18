<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/18/2017
 * Time: 1:46 PM
 */

namespace App\Classes\User;


class UserRepository
{

    private $sTodoListTable = 'todo_list';

    /**
     * @param $iUserId
     * @param $sTodoList
     */
    protected function saveTodoList($iUserId, $sTodoList)
    {
        \DB::table($this->sTodoListTable)->insert(
            array(
                'iUserId' => $iUserId,
                'sTodoList' => $sTodoList,
                'delete' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            )
        );
    }

    /**
     * @return mixed
     */
    protected function getTodoList()
    {
        $oResult = \DB::table($this->sTodoListTable)
            ->orderBy('id', 'desc')
            ->where('delete', '==', 0)
            ->get();
        return $aResult = $oResult->toArray();
    }


}