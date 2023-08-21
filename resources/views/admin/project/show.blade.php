@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary text-capitalize my-5">
        {{$project->project_name}} 
    </h2>
    <div class="card">
        <div class="card-header h5">Author: {{$project->creator_name}}</div>
        <div class="card-body">
            <p class="fs-5">
                {{$project->description}}
            </p>
            <p class="fs-6">
                {{$project->creation_date}}
            </p>
        </div>

    </div>
</div>
@endsection