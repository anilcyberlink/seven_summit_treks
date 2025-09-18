<?php

namespace App\Models\Travels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripMapModel extends Model
{
    use HasFactory;
    protected $table = 'cl_trip_map';
    protected $fillable=['trip_detail_id','title','thumbnail','ordering','status'];
}
