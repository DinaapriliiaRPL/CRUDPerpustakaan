<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeluser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'UserID';

    protected $allowedFields = ['Username', 'Password', 'Email', 'NamaLengkap', 'Alamat'];
}
