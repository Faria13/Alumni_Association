@extends('layouts.master')

@section('content')

@include('includes.menubar')
<div class="home-section">
    <div class="dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Join your Alumni Community Now...</h1>
                </div>
                <div class="col-lg-5">
                    <h3>Registration For Alumni</h3>
                <form class="registration" action="{{ url('/UserRegistration') }}" method="post">
                        {{ csrf_field() }}
                        
                        @if(count($errors) > 0)

                            @foreach ($errors->all() as $error)
                                <p style="color: red;text-align: center;font-size: 17px;">{{$error}}</p>
                            @endforeach

                        @endif
                        <p class="line">Please complete the form</p>

                        <div class="form-group">
                            <input type="text" class="form-control" required="" value="{{old('name')}}" name="full_name" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" required="" value="{{old('email')}}" name="email" placeholder="Email-Address">
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="department_id" required="" >
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{  $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>

                    <div class="form-group">
                        <select class="form-control" name="batch_id" required="" >
                            @foreach($batches as $batch)
                                <option value="{{ $batch->id }}">{{  $batch->batch_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" required=""  name="session" placeholder="Session">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" required=""  name="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" required=""
                               placeholder="Repeat your password">
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" value="Create an account" class="form-control">
                    </div>

                    <!--
                    <div class="d-flex justify-content-center mb-4">
                        <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                        <a href="#" class="linkedin-login btn btn-linkedin">Linkedin</a>
                    </div>
                -->

                    <p class="login">Have already an account?<a href="{{ url('/user_login') }}" style="color: #fff;text-decoration: underline;"> Login here</a></p>
            </form>
    @include('includes.footer')

@endsection