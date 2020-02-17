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
                    <h4 class="card-title">{{ isset($header) ? 'Modiffier Slider' : 'Ajouter Slider' }}</h4>
                    <a href="{{ route('headers.index') }}" title="Liste Des Produit" class="btn btn-outline-warning btn-sm float-right">List</a>
               </div>
        <div class="card-body">
            @include('erreurs.erreur')
                <form action="{{ isset($header) ? route('headers.update', $header->id) : route('headers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($header))
                            @method('PUT')
                    @endif  
                    <div class="row">
                       
                        <div class="form-group col-md-4">
                            <label for="">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ isset($header) ? $header->title: '' }}">
                        </div>                    
                        <div class="form-group col-md-8">                     
                                <label for="">description</label>
                            <textarea name="description" id="description" cols="5" class="form-control" rows="5">
                                {{ isset($header) ? $header->description: '' }}</textarea>
                        </div>
                   
                    <div style="margin-top: 0px;" class="col-md-12">
                        <h4 class="title">choisiser Image</h4>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                            @if(isset($header))
                                <img src="/storage/{{ $header->image }}" alt="...">
                            @else
                                <img src="{{ asset('/backend/assets/img/image_placeholder.jpg') }}" alt="...">
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
                    {{ isset($header) ? 'Modiffier Produit' : 'Ajouter Produit' }} 
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


