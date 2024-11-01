<?php

//user class

class User extends Model
{

    protected $table = 'users';

    protected $allowedColumns = [

        'name',
        'age',
    ];

    public function validate($data)
    {
        
    }
}