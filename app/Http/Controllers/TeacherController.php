<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Distribution;
use App\Models\Course;
use App\Models\Student;
use App\Models\ClassModel;
use App\Models\Assignment;
use App\Models\Enrollment;


class TeacherController extends Controller
{
    public function gotoEnrollPage()
    {
        
        return view('teachers.teacherEnrollPage');
    }
    public function startEnrollment(Request $request)
    {
        // Validate form input
        $request->validate([
            'department' => 'required|string',
            'level' => 'required|integer',
            'semester' => 'required|string',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start'
        ]);

        // Create a new enrollment record
        Enrollment::create([
            'department' => $request->input('department'),
            'level' => $request->input('level'),
            'semester' => $request->input('semester'),
            'start_date' => $request->input('start'),
            'end_date' => $request->input('end')
        ]);

        // Redirect or return a success response
        return redirect()->back()->with('success', 'Enrollment started successfully!');
    }
    public function gototeacherSignupPage()
    {
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('teachers.teacherSignupPage' , [
            'faculties' => $faculties,
            'departments' => $departments,
            'designations' => ['Lecturer', 'Assistant Professor', 'Associate Professor', 'Professor'],
        ]);
    }

    public function createTeacher(Request $request)
    {
        //dd($request);
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'department' => 'required',
            'faculty' => 'required',
            'designation' => 'required',
            'password' => 'required',
        ]);
        try {

            $user = User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'password' => $request->password,
                'role_id' => "2",
            ]);

            $teacher = Teacher::create([
                'department_id' => $request->department,
                'faculty_id' => $request->faculty,
                'designation' => $request->designation,
                'user_id' => $user->id,
            ]);

            return redirect()->back()->with('success', "Teacher added successfully!");
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function teacherAssignedCourses(Request $request)
    {
        // Get the teacher ID from the session
        $teacherId = session('teacher_id');

        // Fetch the distributions assigned to the teacher with course data
        $distributions = Distribution::where('teacher_id', $teacherId)->with('course')->get();

        // Return the view with the fetched distributions
        return view('teachers.teacherAssignedCourses', compact('distributions'));
    }
    public function gototeacherClassRoutinePage()
    {
        
        return view('teachers.teacherClassRoutine');
    }
    public function gototeacherCourseAssignmentAssesment()
    {
        
        return view('teachers.teacherCourseAssignmentAsses');
    }
    public function gototeacherCourseAssignment()
    {
        // Fetch the distributions with the matching course ID and course code

        // Return the view with the fetched distributions
        return view('teachers.teacherCourseAssignment');
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'course_id' => 'required|integer',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
            'deadline' => 'required|date',
        ]);

        // Store the file if it exists
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('assignments', 'public');
        }
        

        // Create a new assignment
        Assignment::create([
            'title' => $request->title,
            'course_id' => $request->course_id,
            'description' => $request->description,
            'file' => $filePath,
            'deadline' => $request->deadline,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Assignment created successfully!');
    }
    public function gototeacherCourse()
    {
        $distributions = Distribution::all();
        $teachers = Teacher::all();
        return view('teachers.teacherCourse' , [
            'distributions' => $distributions,
            'teachers' => $teachers
        ]);
    }
    public function gototeacherCourseDetails($course_id, $course_code)
    {
        // Fetch the distributions with the matching course ID and course code
        $distributions = Distribution::where('course_id', $course_id)
            ->whereHas('course', function ($query) use ($course_code) {
                $query->where('code', $course_code);
            })
            ->with('course')
            ->get();

        // Return the view with the fetched distributions
        return view('teachers.teacherCourseDetailsPage', compact('distributions'));
    }
    public function gototeacherCourseStudentList($id)  
    {
        //$course_id = 9;
        // dd($course_id);
        die("here");
        // Fetch the distributions with the matching course ID and course code
        $distributions = Distribution::where('course_id', $course_id)
            ->with('course')
            ->get();

        // Fetch students and attendance details
        $studentsData = Student::whereHas('attendances.class', function($query) use ($course_id) {
                $query->where('course_id', $course_id);
            })
            ->with(['user', 'attendances' => function($query) use ($course_id) {
                $query->whereHas('class', function($query) use ($course_id) {
                    $query->where('course_id', $course_id);
                });
            }])
            ->get()
            ->map(function($student) {
                $attendanceStatuses = $student->attendances->groupBy('attendance_status');

                $classCount = $student->attendances->count();
                $statusCount = $attendanceStatuses->map->count();

                return [
                    'student_id' => $student->s_id,
                    'fullname' => $student->user->fullname,
                    'status' => $attendanceStatuses->keys()->first() ?? 'Absent',
                    'class_count' => $classCount,
                    'status_count' => $statusCount
                ];
            })->sortBy('student_id');

            return view('teachers.teacherCourseStudentList', compact('studentsData', 'distributions'));
    }


    public function gototeacherCourseExam()
    {
        // Fetch the distributions with the matching course ID and course code

        // Return the view with the fetched distributions
        return view('teachers.teacherCourseExam');
    }
    public function gototeacherCourseExamMidMarks()
    {
        
        return view('teachers.teacherCourseExamMidMarks');
    }
    public function gototeacherCourseExamQuizMarks()
    {
        
        return view('teachers.teacherCourseExamQuizMarks');
    }
    public function gototeacherCourseLabworkAssesment()
    {
        
        return view('teachers.teacherCourseLabworkAsses');
    }
    public function gototeacherCourseLabwork()
    {
        
        return view('teachers.teacherCourseLabwork');
    }
    public function gototeacherCourseMaterials()
    {
        
        return view('teachers.teacherCourseMaterial');
    }
    
    public function gototeacherExternalAssignPage()
    {
        
        return view('teachers.teacherExternalAssign');
    }
    public function gototeacherExamCommitteeProposalPage()
    {
        
        return view('teachers.teacherExamCommitteeProposal');
    }
}
