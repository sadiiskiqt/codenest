<?php

namespace App\Classes\User;


class UserRepository
{

    private $sTodoListTable = 'todo_list';
    private $sListTable = 'list';

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

    /**
     * @param $iUserId
     * @param $iTodoId
     */
    protected function setToDeleteTodoList($iUserId, $iTodoId)
    {
        \DB::table($this->sTodoListTable)
            ->where('id', $iTodoId)
            ->where('iUserId', $iUserId)
            ->limit(1)
            ->update(['delete' => 1, 'updated_at' => date("Y-m-d H:i:s")]);
        return true;
    }

    /**
     * @param $iTodoId
     * @param $sListText
     */
    protected function saveList($iTodoId, $sListText)
    {
        \DB::table($this->sListTable)->insert(
            array(
                'iTodoId' => $iTodoId,
                'sList' => $sListText,
                'delete' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            )
        );
    }

    /**
     * @param $iTodoId
     * @return mixed
     */
    protected function getMyList($iTodoId)
    {
        $oResult = \DB::table($this->sListTable)
            ->orderBy('id', 'desc')
            ->where('delete', '==', 0)
            ->where('iTodoId', '=', $iTodoId)
            ->get();

        return $oResult->toArray();
    }

    /**
     * @param $iTodoId
     * @param $id
     * @return bool
     */
    protected function setToDeleteList($iTodoId, $id)
    {
        \DB::table($this->sListTable)
            ->where('id', $id)
            ->where('iTodoId', $iTodoId)
            ->limit(1)
            ->update(['delete' => 1, 'updated_at' => date("Y-m-d H:i:s")]);
        return true;
    }

    protected function updateMyList($iTodoId, $id, $sUpdateList)
    {
        \DB::table($this->sListTable)
            ->where('id', $id)
            ->where('iTodoId', $iTodoId)
            ->limit(1)
            ->update(['sList' => $sUpdateList, 'updated_at' => date("Y-m-d H:i:s")]);
        return true;
    }

    protected function getMyTodoList($iUserId)
    {

        $oResult = \DB::table($this->sTodoListTable)
            ->orderBy('id', 'desc')
            ->where('delete', '==', 0)
            ->where('iUserId', '=', $iUserId)
            ->get();

        return $oResult->toArray();
    }

}