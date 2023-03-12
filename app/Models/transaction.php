<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'name',
        'address',
        'contactNumber',
        'prefferedTime',
        'status',
        'container1',
        'container2',
        'container3',
        'container4',
        'price',
    ];
    protected $primaryKey = 'refID';
}
