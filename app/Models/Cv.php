<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table = 'cv';

    protected $guarded = ['id'];

    protected $casts = [
        'work_experience' => 'array',
        'education' => 'array',
        'diploma_certificate' => 'array',
        'language_skills' => 'array',
        'work_skills' => 'array',
        'driving_license' => 'array',
        'portfolio' => 'array'
    ];

    public function profession()
    {
        return $this->hasOne(Job::class, 'id', 'profession_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function subCategory()
    {
        return $this->hasOne(Category::class, 'id', 'sub_category_id');
    }

    public function type()
    {
        return $this->hasOne(JobType::class, 'id', 'type_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
}
