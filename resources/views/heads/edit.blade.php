@extends('layouts.admin')

@section('content')


<style>

.no-border{
  border: 0px solid rgba(0, 0, 0, 0.125);
}
</style>
<div class="content">
    <div class="container-fluid">
       <div class="row">
          
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
              <h4 class="card-title">Modiffier Head</h4>
              <a href="{{ route('heads.index') }}" title="Liste Des Head" class="btn btn-outline-warning btn-sm float-right">List</a>
        </div>
        <div class="card-body">
            @include('erreurs.erreur')
                <form action="{{ route('heads.update', $head->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">  
                        <div class="form-group col-md-4">
                            <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $head->email }}">
                        </div>                    
                        <div class="form-group col-md-4">                     
                                <label for="">Adresse</label>
                                <input type="text" name="adress" class="form-control" value="{{ $head->adress }}">
                        </div>
                        <div class="form-group col-md-4">                     
                                <label for="">Telephone</label>
                                <input type="text" name="tel" class="form-control" value="{{ $head->tel }}">
                        </div>
                        <div style="margin-top: 0px;" class="form-group col-md-4">
                          <h4 class="title">modifier le style de l'entête de page</h4>
                          <ul class="list-group mb-4">
                            <li class="list-group-item active">Bar d'Adresse</li>
                            <li class="list-group-item">
                              Background-color : <input class="jscolor form-control" name="colorHead" value="{{ $head->colorHead }}">
                            </li>
                            <li class="list-group-item">
                              Color : <input class="jscolor form-control" name="colorStyle" value="{{ $head->colorStyle }}">
                            </li>
                            <li class="list-group-item">
                              Taille de police : <input type="number" name="fontSizeHead" value="{{ $head->fontSizeHead }}" class="">
                            </li>
                          </ul>
                          <ul class="list-group mb-4">
                            <li class="list-group-item active">Bar de Menu</li>
                            <li class="list-group-item">
                              Background-color : <input class="jscolor form-control" name="colorNav" value="{{ $head->colorNav }}">
                            </li>
                            <li class="list-group-item">
                              Color : <input class="jscolor form-control" name="colorStyleNav" value="{{ $head->colorStyleNav }}">
                            </li>
                            <li class="list-group-item">
                              Taille de police : <input type="number" name="fontSizeNav" value="{{ $head->fontSizeNav }}" class="">
                            </li>
                          </ul>
                          
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 mrg-top">
                         <ul class="list-group mb-4">
                          <li class="list-group-item no-border">
                            <h4 class="title">Logo Footer</h4>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                    @if(isset($head))
                                        <img src="/storage/{{ $head->image }}" alt="...">
                                    @endif    
                                    </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image"  id="image" />
                                    </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                    <i class="fa fa-times"></i> Remove</a>
                                    </li>
                        </ul> 
                        <ul class="list-group mb-4">
                          <li class="list-group-item no-border">
                              <div class="form-group">
                                <button type="submit"  class="btn btn-success float-right form-control">
                                Enregistrer
                                </button>
                          </li>
                        </ul>
                      </div>
                </form>
        </div>  

      </div>
    </div>  
  </div>
</div>  






@endsection




@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection