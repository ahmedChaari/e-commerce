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
                    <h4 class="card-title">mon profile</h4>
                    
                    </div>
                    <div class="card-body">
                <div class="card-body">

                @include('erreurs.erreur')

                    <form action="{{ route('users.update-profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       
                      <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Name </label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">About My Profil</label>
                            <input id="about" type="hidden" value="{{ $user->about }}" name="about">
                            <trix-editor input="about" ></trix-editor>
                        </div>                                    
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success float-right">Enregistre</button>
                        </div>
                      </div> 
                    </form>
                </div>
           </div> 
        </div>  
      </div> 
    </div>  
</div> 
@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>

@endsection


@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection
