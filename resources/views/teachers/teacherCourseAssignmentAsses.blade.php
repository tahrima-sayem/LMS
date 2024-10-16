@extends('layouts.master')

@section('content')

<div class="container mx-auto p-4">
    <a href="#" class="flex flex-col md:flex-row items-center bg-white border border-green-200 rounded-lg shadow w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-6 leading-normal w-full">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-black-600 dark:text-white">CSE 404</h5>
            <h6 class="mb-3 font-bold text-gray-700 dark:text-black-400">Assignment No. - 1</h6>
            <h6 class="mb-3 font-bold text-gray-700 dark:text-black-400">Assignment Title - Draw ER Diagram</h6>
        </div>
    </a>
    </br>
    </br>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Student ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            File
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Obtained Marks
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Insert Marks
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2002001
                        </th>
                        <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Tahrima Sayem Sowa
                        </th>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="text-blue-500 hover:text-blue-700">
                                <p>Download</p>
                                <i class="fas fa-download"></i>
                            </a>
                        </td>
                        <td scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </td>
                        <td class="px-6 py-4 text-center">
                            <form action="#" method="POST">
                                <input type="number" step="1" min="0" max="100" onkeydown="return event.key !== 'e'" placeholder="0 - 100" />
                                <button type="button" onclick="#" class="p-2 rounded-lg border bg-blue-500 text-white">
                                    <p>UpLoad<i class="fas fa-upload"></i></p> 
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2002002
                        </th>
                        <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Kanij Fatema
                        </th>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="text-blue-500 hover:text-blue-700">
                                <p>Download</p>  
                                <i class="fas fa-download"></i>
                            </a>
                        </td>
                        <td scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5
                        </td>
                        <td class="px-6 py-4 text-center">
                            <form action="#" method="POST">
                                <input type="number" step="1" min="0" max="100" onkeydown="return event.key !== 'e'" placeholder="0 - 100" />
                                <button type="button" class="p-2 rounded-lg border bg-blue-500 text-white">
                                    <p>UpLoad<i class="fas fa-upload"></i></p>  
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

</div>

@endsection