@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Projects
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">
                            #
                        </th>
                        <th scope="col">
                            Project name
                        </th>
                        <th scope="col">
                            Author
                        </th>
                        <th class="text-center" scope="col">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <th class="text-center" scope="row">{{$project->id}}</th>
                        <td>{{$project->project_name_slug}}</td>
                        <td>{{$project->creator_name}}</td>
                        <td class="text-center">
                            <button class="btn btn-primary"><i class="fa-solid fa-arrow-right"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>
</div>
@endsection