@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>All Enrollments</h3>
                    <a href="/student/" class="float-right btn btn-info">All Students</a><br><br>     
                    <a href="/course" class="float-right btn btn-info">All Courses</a>

                </div>
                
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                   
                    <table class="table">
                        <tr>
                            <th>Student Name</th>
                            <th>Course Name</th>
                            <th>Authorized</th>
                            <th>Option</th>
                        </tr>
                            @foreach($users as $user)
                                <tr>                                
                                @foreach($user->courses as $course)
                                <tr>
                                    <td>{{ $user->student_name }}</td>     
                                    <td>{{ $course->course_name }}</td>                                                                                                                   
                                    <td>{{ $course->pivot->authorized }}</td>
                                    @if ($course->pivot->authorized == 0)
                                        <td><a href="/enrollAuthorized/{{ $course->pivot->user_id }}/{{ $course->pivot->course_id }}" class="btn btn-success">Authorize</a></td>                                
                        
                                    @else
                                        <td></td>
                                    @endif
                                    <td><a href="/enrollDel/{{ $course->pivot->user_id }}/{{ $course->pivot->course_id }}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                                </tr>
                            @endforeach                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
