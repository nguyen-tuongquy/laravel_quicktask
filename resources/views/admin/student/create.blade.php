@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('language.add_new_student') }}</div>

                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                                
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- New Class Form -->
                                <form action=" {{ route('student.store') }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <!-- Student Name -->
                                        <label for="fullname" class="col-sm-12 control-label">{{ trans('language.fullname') }}:</label>
                        
                                        <div class="col-sm-12">
                                            <input type="text" name="fullname" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- DOB -->
                                        <label for="dob" class="col-sm-12 control-label">{{ trans('language.dob') }}:</label>
                        
                                        <div class="col-sm-12">
                                            <input type="date" name="dob" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Student no -->
                                        <label for="student_no" class="col-sm-12 control-label">{{ trans('language.student_no') }}:</label>
                        
                                        <div class="col-sm-12">
                                            <input type="text" name="student_no" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Gender -->
                                        <label for="gender" class="col-sm-12 control-label">{{ trans('language.gender') }}:</label>

                                        <div class="col-sm-12">
                                            <select class="form-control" name="gender" id="">
                                                <option value="1">{{ trans('language.male') }}</option>
                                                <option value="2">{{ trans('language.female') }}</option>
                                                <option value="3">{{ trans('language.other') }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Address -->
                                        <label for="address" class="col-sm-12 control-label">{{ trans('language.address') }}:</label>
                        
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="address" id="" cols="20" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Add Student Button -->
                                    
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> {{ trans('language.add_student') }}
                                        </button>
                                        <a href="{{ route('student.index') }}" class="btn btn-secondary">{{ trans('language.back') }}</a>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection