@extends('layouts.admin')

@section('content')

<style>
.fa-social{
    margin-right:12px;
}
.mrg-top{
    margin-top: 20px;

}

</style>

<div class="content">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
             <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                    <h4 class="card-title">Modiffier Information Footer</h4>
                    <a href="{{ route('footers.index') }}" title="Liste Des Footers" class="btn btn-outline-warning btn-sm float-right">List</a>
                </div>
               <div class="card-body">
            @include('erreurs.erreur')
                    <form action="{{ route('footers.update', $footer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="">TELEPHONE</label>
                                    <input type="text" name="tel" class="form-control" value="{{ $footer->tel }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $footer->email }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">adress</label>
                                    <input type="text" name="adress" class="form-control" value="{{ $footer->adress }}">
                            </div>
                            <div class="col-md-6 mrg-top">
                                <ul class="list-group">
                                    <li class="item d-flex">
                                        <div class="fa-social"><button class="btn btn-just-icon btn-round btn-facebook">
                                            <i class="fa fa-facebook">
                                        </i></button></div>
                                            <input type="text" name="url_face" class="form-control" value="{{ $footer->url_face }}">
                                    </li>
                                </ul>

                                <ul class="list-group">
                                    <li class="item d-flex">
                                        <div class="fa-social"><button class="btn btn-just-icon btn-round btn-youtube">
                                            <i class="fa fa-youtube"> </i>
                                            </button></div>
                                        <input type="text" name="url_inst" class="form-control" value="{{ $footer->url_inst }}">
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="item d-flex">
                                        <div class="fa-social"> <button class="btn btn-just-icon btn-round btn-google">
                                            <i class="fa fa-google-plus"> </i>
                                            </button></div>
                                        <input type="text" name="url_google" class="form-control" value="{{ $footer->url_google }}">
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="item d-flex">
                                        <div class="fa-social"><button class="btn btn-just-icon btn-round btn-twitter">
                                                <i class="fa fa-twitter"></i>
                                            </button></div>
                                        
                                        <input type="text" name="url_twiter" class="form-control" value="{{ $footer->url_twiter }}">
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="item d-flex">
                                        <div class="fa-social"><button class="btn btn-just-icon btn-round btn-pinterest">
                                            <i class="fa fa-pinterest"></i>
                                            </button></div>
                                        <input type="text" name="url_pinter" class="form-control" value="{{ $footer->url_pinter }}">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 mrg-top">
                            <h4 class="title">Logo Footer</h4>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                    @if(isset($footer))
                                        <img src="/storage/{{ $footer->image }}" alt="...">
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
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mrg-top" >
                                <div class="form-group">
                                    <label for="">copyright</label>
                                        <input id="copyright" type="hidden" name="copyright" class="form-control" value="{{ $footer->copyright }}">
                                    <trix-editor input="copyright"></trix-editor>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success float-right">Mettre Ajour</button>
                            </div>
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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection