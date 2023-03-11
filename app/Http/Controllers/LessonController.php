<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::with('user', 'student')->get();
        return view('admin.lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $students = Student::all();
        $lesson = new Lesson();
        
        return view('admin.lessons.create', compact('users', 'lesson', 'students'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $allLessons = Lesson::all();
        $startRequest = new DateTime($request->start_time);
        $endRequest = new DateTime($request->end_time);
        
        foreach ($allLessons as $lesson)
        {
            $startLesson = new DateTime($lesson->start_time);
            $endLesson = new DateTime($lesson->end_time);
            $lessonPeriod = CarbonPeriod::create($startLesson, $endLesson);
            $requestPeriod = CarbonPeriod::create($startRequest, $endRequest);
        
            if ($lessonPeriod->overlaps($requestPeriod))
            {
                return redirect()->route('lessons.create');    
            }
        }
        
        Lesson::create([
            'user_id' => $request->user,
            'student_id' => $request->student,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'price' => $request->price,
        ]);
        return redirect()->route('lessons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
        return view('admin.lessons.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
        $users = User::all();
        $students = Student::all();
        
        return view('admin.lessons.edit', compact('users', 'lesson', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
        $allLessons = Lesson::all();
        $startRequest = new DateTime($request->start_time);
        $endRequest = new DateTime($request->end_time);
        
        foreach ($allLessons as $less)
        {
            $startLesson = new DateTime($less->start_time);
            $endLesson = new DateTime($less->end_time);
            $lessonPeriod = CarbonPeriod::create($startLesson, $endLesson);
            $requestPeriod = CarbonPeriod::create($startRequest, $endRequest);
        
            if ($lessonPeriod->overlaps($requestPeriod))
            {
                return redirect()->route('lessons.edit', $lesson);    
            }
        }
        $lesson->update($request->all());
        return redirect()->route('lessons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
        Lesson::destroy($lesson->id);
        return redirect()->route('lessons.index');
        
    }
}