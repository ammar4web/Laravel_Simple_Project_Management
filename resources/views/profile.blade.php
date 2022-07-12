@extends('layouts.app')

@section('title', 'الملف الشخصي')

@section('content')
<div class="row justify-content-center text-right">
    <div class="col-md-6">
        <div class="card p-3 p-md-3 p-lg-5 mt-5" dir="rtl">
            <div class="text-center">
                <h3 class="mt-4 font-weight-bold">{{ auth()->user()->name }}</h3>
            </div>

            <div class="card-body text-right">
                <form method="POST" action="/profile" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input name="name" type="text"
                            class="form-control text-right @error('name') is-invalid @enderror" autocomplete="name"
                            autofocus value="{{ auth()->user()->name }}">
                        @error('name')
                        <div class="text-danger mt-2" dir="rtl"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                            autocomplete="email" value="{{ auth()->user()->email }}">
                        @error('email')
                        <div class="text-danger mt-2" dir="rtl"><small>{{ $message }}</small></div>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="password">{{ __('كلمة المرور') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="new-password">

                        @error('password')
                        <div class="text-danger mt-2" dir="rtl"><small>{{ $message }}</small></div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('تأكيد كلمة المرور') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new-password">
                    </div>

                    <div class="form-group d-flex mt-5">
                        <button type="submit" class="btn btn-primary mr-2">
                            {{ __('حفظ التعديلات') }}
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection