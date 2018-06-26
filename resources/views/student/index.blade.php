@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>All Students</h3>
                    <a href="/course" class="float-right btn btn-success">All Courses</a>
                    <br><br><a href="/course/index" class="float-right btn btn-success">All Enrolment</a>
                    

                </div>
        

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            @foreach($student as $u)
                                <td>{{ $u->id }}</td>
                                
                            @endforeach

                        </tr>

                        <tr>
                            <th>Student Name</th>
                            @foreach($student as $u)
                                <td>{{ $u->student_name }}</td>
                            @endforeach
                        </tr>

                        <tr>
                            <th>E-mail</th>
                            @foreach($student as $u)
                                <td>{{ $u->email }}</td>
                            @endforeach
                        </tr>

                        <tr>                            
                            <th>Date of Birth</th>
                            @foreach($student as $u)
                                <td>{{ $u->date_of_birth }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>CPF</th>
                            @foreach($student as $u)
                                <td>{{ $u->cpf }}</td>
                            @endforeach
                        </tr>
                        <tr>    
                            <th>RG</th>
                            @foreach($student as $u)
                                <td>{{ $u->rg }}</td>
                            @endforeach
                        </tr>    
                        <tr>
                            <th>Cellphone</th>
                            @foreach($student as $u)
                                <td>{{ $u->cellphone }}</td>
                            @endforeach
                        </tr>
                        <tr>   
                            <th>Managerial</th>
                            @foreach($student as $u)
                                    <td><a href="/state/{{ $u->id }}/edit" class="btn btn-success">Manager</a><a href="/state/{{ $u->id }}/delete" class="btn btn-warning">User</a><a href="/state/{{ $u->id }}/delete" class="btn btn-danger">Delete</a></td>
                            @endforeach
                        </tr>                   
                    </table>

                    {!! $student->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
