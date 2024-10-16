@extends('layouts.master')

@section('content')
<div class="container mx-auto p-4">
<div class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full dark:border-gray-700 dark:bg-gray-800">
        <div class="flex flex-col justify-between p-6 leading-normal w-full">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white text-center"><u>External Assigning</u></h5>

            <form>
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="course_code" class="block text-sm font-medium text-gray-900 dark:text-white">Course Code :</label>
            <select id="course_code" name="teacher" class="choices bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select a Department</option>
                <option value="9">CSE 408</option>
            </select>
        </div>
        <div>
            <label for="external1" class="block text-sm font-medium text-gray-900 dark:text-white">External Examiner 1 :</label>
            <select id="external1" name="level" class="choices bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select External Examiner</option>
            </select>
        </div>
        <div>
            <label for="external2" class="block text-sm font-medium text-gray-900 dark:text-white">External Examiner 2 :</label>
            <select id="external2" name="semester1" class="choices bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select External Examiner</option>
            </select>
        </div>
        <div>
            <label for="scrutinizer" class="block text-sm font-medium text-gray-900 dark:text-white">Scrutinizer :</label>
            <select id="scrutinizer" name="scrutinizer" class="choices bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select Scrutinizer</option>
            </select>
        </div>
    </div>
</form>
<br>
<div class="flex justify-center">
    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 w-full dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Assign</button>
</div>

        </div>   
    </div>
</div>
@endsection