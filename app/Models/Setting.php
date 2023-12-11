<?php

namespace App\Models;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use Cacheable;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'key',
        'value',
    ];
}
