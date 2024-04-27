<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    public $table = 'contactus';
    protected $fillable = ['contact_name','contact_email','contact_subject','contact_message'];
    public $primaryKey = 'id';
    public $timestamps = false;
}
