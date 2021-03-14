@extends('layouts.stapp')
@section('content')
    <div class="my-10 mx-1/4 border-2 border-red-800 p-2">
        <div>
            <h1 class="text-5xl text-center pb-5">Student Information</h1>
        </div>
        <div class="m-auto">

            <table class="w-full">
                <tr class="">
                    <th class="bg-red-600 text-white font-bold uppercase border border-gray-50 border-solid px-4 py-1 w-1/2" >Name</th>
                    <th class="bg-red-600 text-white font-bold uppercase border border-gray-50 border-solid px-4 py-1 w-1/2" >Class</th>
                </tr>
                @forelse ($students as $student)

                <tr>
                    <td class="m-1 font-bold border border-red-500 border-solid px-4 py-1 w-1/2 text-center text-red-600"> <a href="/students/{{$student->id}}">{{$student->stu_name}}</a> </td>
                    <td class="m-1 font-bold border border-red-500 border-solid px-4 py-1 w-1/2 text-center text-red-600">{{$student->stu_class}}</td>
                    <td class="m-1 font-bold border bg-green-500 border-solid px-4 py-1 w-1/2 text-center text-gray-100"> <a href="/students/{{$student->id}}/edit">Edit</a> </td>
                    <td class="m-1 font-bold border border-red-500 border-solid px-4 py-1 w-1/2 text-center text-white bg-red-600">
                        <form action="/students/{{$student->id}}" method="post">
                            @csrf
                            @method('DELETE')
                             <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td class="font-bold border border-red-500 border-solid px-4 py-1 w-1/2 text-center text-red-600" colspan="2">No data Found</td>
                    </tr>
                @endforelse

            </table>
            <div class="mt-4">
                <p><a href="/students/create" class="font-bold border border-red-500 border-solid px-4 py-1 w-1/2 text-center text-red-600">Create New Student</a></p>
            </div>

        </div>

        </div>
    </div>

@endsection
