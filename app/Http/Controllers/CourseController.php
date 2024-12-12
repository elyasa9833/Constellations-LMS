<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Enums\CourseStatusEnum;
use App\Models\CourseChapter;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::select('id','creator_id', 'category_id', 'name', 'description', 'banner', 'cover', 'total_experience', 'status')
            ->with(['creator:id,nickname', 'category:id,name'])
            ->where('status', CourseStatusEnum::Live->value)
            ->get();

        $courses->map(function ($course) {
            $course->total_chapter = $course->chapters->count();
            $course->banner = $course->banner ? Storage::disk('public')->url(config('filesystems.directory.course.banner') . '/' . $course->banner) : null;
            $course->cover = $course->cover ? Storage::disk('public')->url(config('filesystems.directory.course.cover') . '/' . $course->cover) : null;
            return $course;
        });
        return view('pages.course.view', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'creator_id' => 'required|ulid',
            'category_id' => 'required|ulid',
            'name' => 'required',
            'description' => 'required',
            'banner' => 'nullable',
            'cover' => 'nullable',
            'total_experience' => 'required',
            'status' => 'required|in:' . implode(',', CourseStatusEnum::values()),
        ]);

        $course = Course::create($validate);
        return response()->json([
            'data' => $course,
            'message' => 'Course created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $chapters = CourseChapter::select('id', 'course_id', 'title', 'data')
            ->where('course_id', $course->id)
            ->get();

        $course = Course::select('id', 'name', 'description', 'banner')
            ->where('id', $course->id)
            ->first();

        $course->banner = $course->banner ? Storage::disk('public')->url(config('filesystems.directory.course.banner') . '/' . $course->banner) : null;

        return view('pages.course_chapter.view', compact('chapters'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validate = $request->validate([
            'creator_id' => 'required|ulid',
            'category_id' => 'required|ulid',
            'name' => 'required',
            'description' => 'required',
            'banner' => 'nullable',
            'cover' => 'nullable',
            'total_experience' => 'required',
            'status' => 'required', 'in:' . implode(',', CourseStatusEnum::values()),
        ]);

        $course = Course::find($course->id);
        $course->update($validate);
        return response()->json([
            'data' => $course,
            'message' => 'Course updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course = Course::find($course->id);
        $course->delete();
        return response()->json([
            'message' => 'Course deleted successfully'
        ]);
    }
}
