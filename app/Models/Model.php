<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\SoftDeletes;

class Model extends EloquentModel
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
