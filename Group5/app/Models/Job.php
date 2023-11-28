<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'description',
        'salary',
        'is_fulltime',
        'employer_id'
    ];

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }
}
