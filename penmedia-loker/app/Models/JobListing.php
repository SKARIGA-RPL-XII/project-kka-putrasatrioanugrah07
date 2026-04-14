<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'title',
        'department',
        'job_type',
        'work_location',
        'location',
        'education_level',
        'salary_min',
        'salary_max',
        'description',
        'requirements',
        'status'
    ];

    public function company()
    {
        return $this->belongsTo(User::class, 'company_id');
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function getJobTypeDisplayAttribute()
    {
        $types = [
            'full_time' => 'Full Time',
            'part_time' => 'Part Time',
            'freelance' => 'Freelance',
            'internship' => 'Magang'
        ];
        return $types[$this->job_type] ?? $this->job_type;
    }

    public function getWorkLocationDisplayAttribute()
    {
        $locations = [
            'remote' => 'Remote',
            'onsite' => 'On-site',
            'hybrid' => 'Hybrid'
        ];
        return $locations[$this->work_location] ?? $this->work_location;
    }

    public function getEducationLevelDisplayAttribute()
    { 
        $levels = [
            'sma' => 'SMA/SMK',
            'd3' => 'Diploma (D3)',
            's1' => 'Sarjana (S1)',
            's2' => 'Magister (S2)'
        ];
        return $levels[$this->education_level] ?? $this->education_level;
    }
}