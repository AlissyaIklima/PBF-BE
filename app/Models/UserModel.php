<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    // protected $allowedFields = ['email', 'password', 'name']; // Add other fields as needed

    protected $useTimestamps = true;
    protected $allowedFields = ['username','email', 'password'];
}