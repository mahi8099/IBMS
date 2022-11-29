<?php

namespace App\Repository;

use App\Models\TblUser;
use App\Object\RandomUserObject;

class TblUserRepository
{
    public function read($userId)
    {
        return TblUser::find($userId);
    }

    /**
     * Function::save
     * @param::$tblUserObject
     * Description:: insert the user details
     */
    public function save(array $tblUserObject):void
    {
        $tblUser = new TblUser($tblUserObject);
        $tblUser->save();
    }

}