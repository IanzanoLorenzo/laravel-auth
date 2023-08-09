@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            #
                        </th>
                        <th scope="col">
                            Project name
                        </th>
                        <th scope="col">
                            Author
                        </th>
                        <th scope="col">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->project_name_slug}}</td>
                        <td>{{$project->creator_name}}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
