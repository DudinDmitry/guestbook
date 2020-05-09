<?php


namespace App\Http;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guestbook extends Model
{
    use SoftDeletes;
protected $dates=['deleted_at'];
}
