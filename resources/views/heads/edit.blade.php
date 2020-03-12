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
                    <div style="margin-top: 0px;" class="col-md-12">
                        <h4 class="title">choisiser Image</h4>
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
                        </div> 
                </div>       
                <div class="form-group col-md-12">
                    <button type="submit"  class="btn btn-success float-right">
                    Modiffier Head
                    </button>
                </div>
                </form>
            </div>
        </div>  
      </div>
    </div>  
  </div>
</div>  
@endsection


