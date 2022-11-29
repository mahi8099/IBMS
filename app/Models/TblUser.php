<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblUser extends Model
{
    use HasFactory;
    protected $table = 'tbl_user';

    protected $fillable = [
        'gender',
        'title',
        'first_name',
        'last_name',
        'street',
        'city',
        'state',
        'country',
        'postcode',
        'email',
        'phone',
        'picture'
    ];
}
