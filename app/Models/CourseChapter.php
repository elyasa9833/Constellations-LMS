<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseChapter extends Model
{
    /** @use HasFactory<\Database\Factories\CourseChapterFactory> */
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'course_id',
        'title',
        'data',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
