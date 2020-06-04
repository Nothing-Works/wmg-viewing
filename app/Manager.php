<?php

namespace App;

class Manager extends User
{
    public $table = 'users';

    public function newQuery($excludeDeleted = true)
    {
        return parent::newQuery($excludeDeleted)->whereAdmin(false);
    }
}
