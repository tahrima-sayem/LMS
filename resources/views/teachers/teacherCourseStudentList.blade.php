@extends('layouts.master')

@section('content')
<div class="container mx-auto p-4">
    @foreach($distributions as $distribution)
            <div class="flex flex-col justify-between p-6 leading-normal w-full bg-white border border-green-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800">
                <h6 class="mb-3 font-bold text-gray-700 dark:text-black-400">{{ $distribution->course->code }}</h6>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white">Students</h5>
            </div>
    @endforeach
    </br></br>
    
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Student ID</th>
                    <th scope="col" class="px-6 py-3">Student Name</th>
                    <th scope="col" class="px-6 py-3">Present</th>
                    <th scope="col" class="px-6 py-3">Total Class</th>
                    <th scope="col" class="px-6 py-3">Attendance %</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentsData as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data['student_id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['fullname'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['status'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['status'] }}
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
