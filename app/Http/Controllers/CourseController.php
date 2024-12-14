<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Enums\CourseStatusEnum;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // creator_id ganti menjadi creator->name, category_id ganti menjadi category->name
        // hide creator_id, category_id
        $courses = Course::select('id', 'creator_id', 'category_id', 'name', 'description', 'banner', 'cover', 'total_experience', 'status')
            ->with(['creator:id,nickname', 'category:id,name', 'chapters'])
            ->get();

        // hitung jumlah chapter
        $courses->map(function ($course) {
            $course->total_chapter = $course->chapters->count();
            unset($course->chapters);
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
            'status' => 'required', 'in:' . implode(',', CourseStatusEnum::values()),
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
        $course = Course::find($course->id);
        return response()->json([
            'data' => $course
        ]);
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
