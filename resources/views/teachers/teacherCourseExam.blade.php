@extends('layouts.master')

@section('content')
<div class="container mx-auto p-4">
    <a href="#" class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full dark:border-gray-700 dark:bg-gray-800 ">
        <div class="flex flex-col justify-between p-6 leading-normal w-full">
            <h6 class="mb-3 font-bold text-gray-700 dark:text-black-400">CSE 404</h6>
            <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white">Exams</h5>
        </div>
    </a>
    </br>
    </br>
    <div class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full dark:border-gray-700 dark:bg-gray-800">
        <div class="flex flex-col justify-between p-6 leading-normal w-full">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white"><u>Add Exam</u></h5><br>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="course_id" value="9"> <!-- Assuming $courseId is passed from the previous page -->
                <div class="mb-5 flex items-center">
                    <label for="base-input" class="text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0">Syllabus :</label>
                    <input type="text" name="syllabus" id="base-input" placeholder="Enter title here" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-5 flex items-center">
                    <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam Type</label>
                    <select id="course" name="course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select type</option>
                        <option value="quiz">Quiz</option>
                        <option value="mid">Mid</option>
                    </select>
                </div>

                <div class="flex items-center max-w-sm">
                    <label class="text-sm font-medium text-gray-900 dark:text-white mr-2 flex-shrink-0" for="datepicker-orientation">Date :</label>
                    <div class="relative flex-1">
                        <input name="deadline" id="datepicker-orientation" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="YYYY-MM-DD" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full">ADD</button> 
                <!-- Error and Success Messages -->
                @if(\Illuminate\Support\Facades\Session::has('error'))
                    <div id="error-message" class="w-full px-4 py-2 text-center bg-white text-green-600 rounded-md shadow-sm text-sm mb-5">
                        {{ \Illuminate\Support\Facades\Session::get('error') }}
                    </div>
                @endif

                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div id="success-message" class="w-full px-4 py-2 text-center bg-white text-green-600 rounded-md shadow-sm text-sm mb-5">
                        {{ \Illuminate\Support\Facades\Session::get('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

        <br>
        <br>

    <div class="flex flex-col bg-white border border-green-200 rounded-lg shadow w-full p-4 dark:border-gray-700 dark:bg-gray-800">
        <h1 class="mb-4 font-bold text-gray-700 dark:text-white">Quiz</h1> 
        </br>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        SL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Topic
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Submit Mark
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        ER Diagram
                    </td>
                    <td class="px-6 py-4">
                        10.09.2024
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('gototeacherCourseExamQuizMarks') }}" class="flex justify-center items-center text-gray-900 hover:text-blue-700">
                            <p>Insert </p>
                            <i class="fas fa-upload"></i>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2
                    </th>
                    <td class="px-6 py-4">
                        Normalization
                    </td>
                    <td class="px-6 py-4">
                        15.09.2024
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('gototeacherCourseExamQuizMarks') }}" class="flex justify-center items-center text-gray-900 hover:text-blue-700">
                            <p>Insert </p>
                            <i class="fas fa-upload"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
        </table>
        </br>
    </div>
    </br>
    </br>
    <div class="flex flex-col bg-white border border-green-200 rounded-lg shadow w-full p-4 dark:border-gray-700 dark:bg-gray-800">
        <h1 class="mb-4 font-bold text-gray-700 dark:text-white">Mid-Term</h1> 
        </br>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        SL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Topic
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Submit Mark
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        ER Diagram
                    </td>
                    <td class="px-6 py-4">
                        10.09.2024
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('gototeacherCourseExamMidMarks') }}" class="flex justify-center items-center text-gray-900 hover:text-blue-700">
                            <i class="fas fa-upload"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        </br>
    </div>
</div>
@endsection
