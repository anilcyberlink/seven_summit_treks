<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportImage extends Model
{
    use HasFactory;
    protected $table = 'passport_images';
    protected $fillable = [
        'insurance_application_id',
        'file_name',
    ];

}
