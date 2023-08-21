@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="fs-4 text-secondary text-capitalize my-4">
                Nuovo Progetto
            </h2>
            <div class="card">
                <form action="{{route('admin.project.store')}}" method="POST">
                    @csrf
                    <div class="form-group p-3">
                        <label class="control-label">Nome progetto</label>
                        <input type="text" name="project_name" id="project_name" class="form-control" placeholder="Inserisci il nome del progetto" value="{{ old('project_name') }}">
                    </div>
                    <div class="form-group p-3">
                        <label class="control-label">Descrizione</label>
                        <textarea type="text" name="description" id="description" class="form-control" placeholder="Inserisci la descrizione del progetto" value="{{ old('description') }}"></textarea>
                    </div>
                    <div class="form-group p-3">
                        <label class="contol-label">Autore</label>
                        <input type="text" name="creator_name" id="creator_name" class="form-control" placeholder="Inserisci il nome dell'autore" value="{{ old('creator_name') }}">  
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Crea progetto</button>  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection