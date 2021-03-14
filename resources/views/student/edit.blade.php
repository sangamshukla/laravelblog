@extends('layouts.stapp')
@section('content')
    <div class="my-10 mx-1/4 border-4 border-red-800 p-2">
        <div>
            <h1 class="text-5xl text-center pb-5">Edit Student</h1>
        </div>
        <div class="m-auto">
            <form action="/students/{{$studentinfo->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="m-2 text-center">

                    <input type="text" name="stu_name" id="" class="w-3/4 py-3 rounded-xl text-center  border border-red-400  focus:border-red-500" value="{{$studentinfo->stu_name}}">
                </div>
                <div class="m-2 text-center">

                    <input type="text" name="stu_class" id="" class="w-3/4 py-3 rounded-xl text-center  border border-red-400  focus:border-red-500" value="{{$studentinfo->stu_class}}">
                </div>
                <div class="m-2 text-center">

                <button type="submit" class="w-3/4 py-3 rounded-xl text-center  border border-red-400"><p class="font-bold text-red-600 text-xl">Submit</p></button>
                </div>

            </form>

        </div>

        </div>
    </div>
@endsection
