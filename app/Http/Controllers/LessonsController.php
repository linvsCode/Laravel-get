<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Transformer\LessonTransformer;
use Illuminate\Database\Eloquent\Collection;

class LessonsController extends Controller
{
    protected $lessonTransformer;

    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
    }

    public function index()
    {
        $lessons = Lesson::all();
        return \Response::json([
            'status' => 'success',
            'status_code' => '200',
            'data' => $this->lessonTransformer->transformCollection($lessons->toArray()),
        ]);
    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return \Response::json([
            'status' => 'success',
            'status_code' => 200,
            'data' => $this->lessonTransformer->transform($lesson),
        ]);
    }

}
