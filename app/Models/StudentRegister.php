<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentRegister extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'image' => 'json',
        'nid_image' => 'json',
        'std_id_card_image' => 'json',
        'guardian_image' => 'json',
    ];

    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }
    public function volunteerType(){
        return $this->belongsTo(VolunteerType::class, 'volunteer_type_id');
    }

}
