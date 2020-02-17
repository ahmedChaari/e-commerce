@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                    <h4 class="card-title">{{ isset($category) ? 'Edite category' : 'Add a new Category' }}</h4>
                    <a href="{{ route('categories.index') }}" title="Ajouter Un Category" class="btn btn-outline-warning btn-sm float-right">List</a>
                    </div>
                    <div class="card-body">
                           
                @include('erreurs.erreur')
                
                        <form action="{{ isset($category) ? route('categories.update' , $category->id) : route('categories.store') }}"  method="POST" >
                        
                            @csrf
                            @if(isset($category))
                                @method('PUT')
                            @endif

                            <div class="form-group">
                                <label for="">name</label>
                                    <input type="text" name="name" class="form-control" value="{{ isset($category) ? $category->name : '' }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success float-right">
                                {{ isset($category) ? 'Update Category' : 'Add a new Category' }}
                            </button>
                            </div>
                        </form>
                    </div>
        </div>
      </div>  
    </div>
</div>
@endsection
