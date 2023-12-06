<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable =[
        'status',
        'applicant_id',
        'job_id',
        'resume',
    ];

    public function applicant(){
        return $this->belongsTo(User::class, 'applicant_id');
    }

    public function job(){
        return $this->belongsTo(Job::class, 'job_id');
    }
}
