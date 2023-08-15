<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emailrecord extends Model
{
    protected $table = 'emailrecords';
    protected $fillable = ['recipient_email', 'email_template', 'time_sent'];
    use HasFactory;
}

