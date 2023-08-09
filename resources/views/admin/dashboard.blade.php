@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header h5">Dashboard</div>
            </div>
        </div>
        <div class="col-12">
            <a href="{{ route('admin.project.index') }}" class="btn btn-primary">Vai ai progetti</a>
        </div>
    </div>
</div>
@endsection
