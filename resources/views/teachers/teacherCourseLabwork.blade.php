@extends('layouts.master')

@section('content')
<div class="container mx-auto p-4">
        <a href="#" class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col justify-between p-6 leading-normal w-full">
                <h6 class="mb-3 font-bold text-gray-700 dark:text-black-400">CSE 404</h6>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white">Labwork</h5>
            </div>
        </a>
        </br>
        </br>
        <div class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full dark:border-gray-700 dark:bg-gray-800">
            <div class="flex flex-col justify-between p-6 leading-normal w-full">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white"><u>Create new Labwork</u></h5>
            
                <form>
                    <div class="mb-5 flex items-center">
                        <label for="base-input" class="text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0">Title    :</label>
                        <input type="text" id="base-input" placeholder="Enter title here" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 flex items-center">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0">Description :</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="About The Labwork"></textarea>
                    </div>
                    <div class="mb-5 flex items-center">
                        <label class="text-sm font-medium text-gray-900 dark:text-white mr-2 shrink-0" for="user_avatar">Upload file :</label>
                        <input class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                </form>
                <br>
                <br>
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">ADD</button>
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
                            <a href="{{ route('gototeacherCourseLabworkAssesment')}}" class="text-blue-500 hover:text-blue-700">
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
                            <a href="{{ route('gototeacherCourseLabworkAssesment')}}" class="text-black-500 hover:text-blue-700">
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