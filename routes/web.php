<?php


use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use App\Http\Middleware\StudentMiddleware;

use App\Http\Controllers\LoginController; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DistributionController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/teacher/dashboard',[DashboardController::class,'gotoTeacherDashboard'])->name('gotoTeacherDashboard')->middleware(TeacherMiddleware::class);
Route::get('/student/dashboard',[DashboardController::class,'gotoStudentDashboard'])->name('gotoStudentDashboard')->middleware(StudentMiddleware::class);
Route::get('/admin/dashboard',[DashboardController::class,'gotoAdminDashboard'])->name('gotoAdminDashboard')->middleware(AdminMiddleware::class);

Route::get('/degree',[DegreeController::class,'gotoAddDegreePage'])->name('gotoAddDegreePage')->middleware(AdminMiddleware::class);
Route::post('/degree',[DegreeController::class,'createDegree'])->name('createDegree')->middleware(AdminMiddleware::class);

Route::get('/faculty',[FacultyController::class,'gotoAddFacultyPage'])->name('gotoAddFacultyPage')->middleware(AdminMiddleware::class);
Route::post('/faculty',[FacultyController::class,'createFaculty'])->name('createFaculty')->middleware(AdminMiddleware::class);

Route::get('/department',[DepartmentController::class,'gotoAddDepartmentPage'])->name('gotoAddDepartmentPage')->middleware(AdminMiddleware::class);
Route::post('/department',[DepartmentController::class,'createDepartment'])->name('createDepartment')->middleware(AdminMiddleware::class);

Route::get('/course',[CourseController::class,'gotoAddCoursePage'])->name('gotoAddCoursePage')->middleware(AdminMiddleware::class);
Route::post('/course',[CourseController::class,'createCourse'])->name('createCourse')->middleware(AdminMiddleware::class);

Route::get('/signup/teacher',[TeacherController::class,'gototeacherSignupPage'])->name('gototeacherSignupPage')->middleware(AdminMiddleware::class);
Route::post('/signup/teacher',[TeacherController::class,'createTeacher'])->name('createTeacher')->middleware(AdminMiddleware::class);

Route::get('/signup/student',[StudentController::class,'gotostudentSignupPage'])->name('gotostudentSignupPage')->middleware(AdminMiddleware::class);
Route::post('/signup/student',[StudentController::class,'createStudent'])->name('createStudent')->middleware(AdminMiddleware::class);

//distribution
Route::get('/course/distribution',[DistributionController::class,'gotoDistributeCoursePage'])->name('gotoDistributeCoursePage')->middleware(TeacherMiddleware::class);
Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Display Teacher's Course
Route::get('/courses', [TeacherController::class, 'teacherAssignedCourses'])->name('teacherAssignedCourses')->middleware(TeacherMiddleware::class);

//Display Course Details

Route::get('/course-details/{course_id}/{course_code}', [TeacherController::class, 'gototeacherCourseDetails'])->name('gototeacherCourseDetails')->middleware(TeacherMiddleware::class);

//Display Course Student List
Route::get('/course-details/student-list/{id}', [TeacherController::class, 'gototeacherCourseStudentList'])->name('gototeacherCourseStudentList');

//Display Course Assignments
Route::get('/course-details/assignments', [TeacherController::class, 'gototeacherCourseAssignment'])->name('gototeacherCourseAssignment')->middleware(TeacherMiddleware::class);
Route::post('/assignments/store', [TeacherController::class, 'store'])->name('assignments.store');


//Assignment assesment
Route::get('/course-detail/assignment/assesments',[TeacherController::class,'gototeacherCourseAssignmentAssesment'])->name('gototeacherCourseAssignmentAssesment')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Display Course Labwork
Route::get('/course-details/labwork', [TeacherController::class, 'gototeacherCourseLabwork'])->name('gototeacherCourseLabwork')->middleware(TeacherMiddleware::class);

//Labwork assesment
Route::get('/course-detail/labwork/assesments',[TeacherController::class,'gototeacherCourseLabworkAssesment'])->name('gototeacherCourseLabworkAssesment')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Display Course Exams
Route::get('/course-details/exam', [TeacherController::class, 'gototeacherCourseExam'])->name('gototeacherCourseExam')->middleware(TeacherMiddleware::class);

//Quiz Marks Submit
Route::get('/course-detail/exam/quiz',[TeacherController::class,'gototeacherCourseExamQuizMarks'])->name('gototeacherCourseExamQuizMarks')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Mid Marks Submit
Route::get('/course-detail/exam/mid',[TeacherController::class,'gototeacherCourseExamMidMarks'])->name('gototeacherCourseExamMidMarks')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Course Materials
Route::get('/course-detail/materials',[TeacherController::class,'gototeacherCourseMaterials'])->name('gototeacherCourseMaterials')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Enrollment
Route::get('/start-enrollment',[TeacherController::class,'gotoEnrollPage'])->name('gotoEnrollPage')->middleware(TeacherMiddleware::class);
Route::post('/enrollment/start', [TeacherController::class, 'startEnrollment'])->name('enrollment.start');

//External Assign
Route::get('/external-assign',[TeacherController::class,'gototeacherExternalAssignPage'])->name('gototeacherExternalAssignPage')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Exam Committee Proposal
Route::get('/exam-commitee-proposal',[TeacherController::class,'gototeacherExamCommitteeProposalPage'])->name('gototeacherExamCommitteeProposalPage')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);

//Teacher Class Routine
Route::get('/class-routine',[TeacherController::class,'gototeacherClassRoutinePage'])->name('gototeacherClassRoutinePage')->middleware(TeacherMiddleware::class);
//Route::post('/course/distribution',[DistributionController::class,'distributeCourse'])->name('distributeCourse')->middleware(TeacherMiddleware::class);
