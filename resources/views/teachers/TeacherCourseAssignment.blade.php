@extends('layouts.master')

@section('content')
<div class="container mx-auto p-4">
        <a href="#" class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col justify-between p-6 leading-normal w-full">
                <h6 class="mb-3 font-bold text-gray-700 dark:text-black-400">CSE 404</h6>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white">Assignments</h5>
            </div>
        </a>
        </br>
        </br>
        <div class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full dark:border-gray-700 dark:bg-gray-800">
    <div class="flex flex-col justify-between p-6 leading-normal w-full">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white"><u>Create new Assignment</u></h5>

        <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="course_id" value="9"> <!-- Assuming $courseId is passed from the previous page -->

            <div class="mb-5 flex items-center">
                <label for="base-input" class="text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0">Title :</label>
                <input type="text" name="title" id="base-input" placeholder="Enter title here" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-5 flex items-center">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0">Description :</label>
                <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="About The Assignment" required></textarea>
            </div>

            <div class="mb-5 flex items-center">
                <label class="text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0" for="user_avatar">Upload file :</label>
                <input name="file" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            </div>
            <div class="w-full mb-6 flex items-center">
                <label for="date" class="mr-4 text-sm font-medium text-gray-900 dark:text-white">Deadline </label>
                    <input id="date" name="deadline" type="date" class="w-full text-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select deadline">
            </div>
            <br>
            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full">ADD</button>
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
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            SL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Watch Submission
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Draw ER Diagram
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('gototeacherCourseAssignmentAssesment')}}" class="text-blue-500 hover:text-blue-700">
                                <p>View</p> 
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Solve 100 Query
                        </td>
                        <td class="px-6 py-4"> 
                            <a href="{{ route('gototeacherCourseAssignmentAssesment')}}" class="text-black-500 hover:text-blue-700">
                            <p>View</p>   
                            <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>

@endsection