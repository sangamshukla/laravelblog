@extends('layouts.stapp')
@section('content')
<div class="float-left mx-40" ><a class="bg-gray-50 border-2 border-red-600 px-6 py-2 rounded-lg" href="/students">Back</a></div>
    <div class="my-10 mx-1/4">
        <div>
            <h1 class="text-5xl text-center pb-5">{{$studentinfo->stu_name}}'s Information</h1>
        </div>
        <div class="">
            <table class="w-full">
                <tr class="border-2 border-red-600 rounded-sm">
                    <td class="bg-red-600 text-white font-bold uppercase text-center px-4 py-1 w-1/2">Student ID </td>
                    <td class=" text-red-600 font-bold uppercase border text-center px-4 py-1 w-1/2">{{$studentinfo->id}}</td>
                </tr>
                <tr class="border-2 border-red-600 rounded-sm">
                    <td class="bg-red-600 text-white font-bold uppercase text-center px-4 py-1 w-1/2">Student Name </td>
                    <td class=" text-red-600 font-bold uppercase border text-center px-4 py-1 w-1/2">{{$studentinfo->stu_name}}</td>
                </tr>
                <tr class="border-2 border-red-600 rounded-sm">
                    <td class="bg-red-600 text-white font-bold uppercase text-center px-4 py-1 w-1/2">Student Class </td>
                    <td class=" text-red-600 font-bold uppercase border text-center px-4 py-1 w-1/2">{{$studentinfo->stu_class}}</td>
                </tr>
                <tr class="border-2 border-red-600 rounded-sm">
                    <td class="bg-red-600 text-white font-bold uppercase text-center px-4 py-1 w-1/2">Student Admission Date </td>
                    <td class=" text-red-600 font-bold uppercase border text-center px-4 py-1 w-1/2">{{$studentinfo->created_at}}</td>
                </tr>

            </table>

        </div>

        </div>
    </div>

@endsection
