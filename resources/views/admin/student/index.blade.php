@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">{{ trans('language.all_student') }}
                    <a href="{{ route('student.create') }}" class="btn btn-success ml-5">{{ trans('language.add_new_student') }}</a>
                </div>
                <div class="card-body">
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr class="headings text-center">
                                    <th class="column-title">{{ trans('language.#') }}</th>
                                    <th class="column-title">{{ trans('language.student_no') }}</th>
                                    <th class="column-title">{{ trans('language.fullname') }}</th>
                                    <th class="column-title">{{ trans('language.dob') }}</th>
                                    <th class="column-title">{{ trans('language.gender') }}</th>
                                    <th class="column-title">{{ trans('language.create_at') }}</th>
                                    <th class="column-title">{{ trans('language.update_at') }}</th>
                                    <th class="column-title">{{ trans('language.action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($students as $student)

                                <tr class="even pointer text-center">
                                    <td>{{ $no }}</td>
                                    <td>{{ $student->student_no }}</td>
                                    <td width="10%">{{ $student->fullname }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->created_at }}</td>
                                    <td>{{ $student->updated_at }}</td>
                                    <td class="last">
                                        <button type="submit" id="" class="btn btn-primary">
                                            {{ trans('language.edit') }}
                                        </button>
                                        <button type="submit" id="" class="btn btn-danger">
                                            {{ trans('language.delete') }}
                                        </button>
                                        </div>
                                    </td>
                                @php
                                    $no++;
                                @endphp
                                
                                @empty
                                    <h4>{{ trans('language.no_records') }}</h4>
                                </tr>

                                @endforelse                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
