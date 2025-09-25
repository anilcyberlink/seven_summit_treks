<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentWaiver extends Model
{
    use HasFactory;
    protected $table = 'accident_waivers';
    protected $fillable = [
        'name',
        'full_name',
        'package',
        'duration',
        'email',
        'ec_name',
        'ec_relation',
        'ec_number',
        'ec_email',
        'signature',
        'sign_date',
        'witness_name',
        'witness_date',
        'witness_signature',
    ];
}
