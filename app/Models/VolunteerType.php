<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VolunteerType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['volunteer_type', 'created_by', 'updated_by'];
}
