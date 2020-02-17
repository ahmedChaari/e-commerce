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
                    <h4 class="card-title">{{ isset($post) ? 'Edite post' : 'Add a new Produit' }}</h4>
                    <a href="{{ route('posts.index') }}" title="Liste Des Produit" class="btn btn-outline-warning btn-sm float-right">List</a>
                    </div>
                    <div class="card-body">
                <div class="card-body">

                @include('erreurs.erreur')

                    <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($post))
                             @method('PUT')
                        @endif
                      <div class="row">
                        <div class="form-group col-md-4">
                            <label for="">Name Produit</label>
                                <input type="text" name="name" class="form-control" value="{{ isset($post) ? $post->name: '' }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Date Publication</label>
                            <input type="text" name="published_at" id="published_at" value="{{ isset($post) ? $post->published_at: '' }}" class="form-control" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Category</label>
                            <select style="" name="category" id="category" class="browser-default custom-select custom-select-lg mb-3">
                                    <option value="" selected disabled>--------</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                    @if(isset($post))
                                        @if ($category->id == $post->category_id) selected
                                        @endif
                                    @endif >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-6">
                                <label for="">Prix Vente</label>
                                    <input type="number" name="price" class="form-control" value="{{ isset($post) ? $post->price: '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Prix <span style="color:red;text-decoration: line-through;">Promotion</span></label>
                                    <input type="number" name="price_promo" class="form-control" value="{{ isset($post) ? $post->price_promo: '' }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">                     
                            <label for="">description</label>
                                <textarea name="description" id="description" cols="5" class="form-control" rows="5">
                                {{ isset($post) ? $post->description: '' }}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">content</label>
                            <input id="content" type="hidden" value="{{ isset($post) ? $post->content: '' }}" name="content">
                            <trix-editor input="content" ></trix-editor>
                        </div>                       
                        <div style="margin-top: 0px;" class="col-md-12">
                            <h4 class="title">choisise Image</h4>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                @if(isset($post))
                                    <img src="/storage/{{ $post->image }}" alt="...">
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
                            {{ isset($post) ? 'Modiffier Produit' : 'Ajouter Produit' }} 
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


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script>
    flatpickr('#published_at', {
        enableTime: true
    });
</script>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection