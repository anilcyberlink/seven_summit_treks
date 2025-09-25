<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $table = 'insurances';
    protected $fillable = [
        'full_name',
        'country',
        'gender',
        'other_gender',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'zip_code',
        'second_passport',
    ];
    public function passports()
    {
        return $this->hasMany(PassportImage::class, 'insurance_application_id');
    }
}
