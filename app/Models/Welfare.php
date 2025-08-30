<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Welfare extends Model
{
    use SoftDeletes;

    protected $casts = [
        'image' => 'json',
        'nid_image' => 'json',
        'std_id_card_image' => 'json',
    ];

    // public function district(){
    //     return $this->belongsTo(District::class, 'district_id', 'id');
    // }

    // public function thana(){
    //     return $this->belongsTo(Upazila::class, 'upazila_id', 'id');
    // }
}
