@extends('layouts.app')

@section('title', 'تعديل المشروع')

@section('content')
    <div class="row justify-content-center  text-right">
        <div class="col-10">
            <h3 class="text-center pb-5 font-weight-bold">تعديل المشروع</h3>
            <form action="/projects/{{$project->id}}" method="POST" dir="rtl">
                @method('PATCH')
                @include('projects.form')

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                    <a href="/projects" class="btn btn-light">إلغاء</a>
                </div>

            </form>
        </div>
    </div>
@endsection
