<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Table Nmae
    protected $table = 'posts';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;

}
