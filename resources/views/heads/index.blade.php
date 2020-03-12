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
                  <h4 class="card-title">Liste Des Posts</h4>
                  <a href="" title="Ajouter Un Header" class="btn btn-outline-success btn-sm float-right">+</a>
             </div>
                @if($heads->count() > 0 )
                <div class="card-body">
                   <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Tel</th>
                                <th>Adress</th>
                                <th class="disabled-sorting text-right">Actions</th> 
                             </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Tel</th>
                                <th>Adress</th>
                                <th class="disabled-sorting text-right">Actions</th> 
                             </tr>
                        </tfoot>
                        <tbody>                    
                        @foreach($heads as $head)
                             <tr>
                                <td><img  withe="60px" height="60px" src="/storage/{{ $head->image }}" alt=""></td>
                                <td>{{ $head->email }}</td>
                                <td>{{ $head->tel }}</td>
                                <td>{{ $head->adress }}</td>
                                <td>
                                   <a href="{{ route('heads.edit', $head->id) }}" class="btn btn-outline-primary btn-sm">
                                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                   </a> 
                                </td>    
                             </tr>
                        @endforeach
                        </tbody>
                   </table> 
                </div>
                @else
                <h3 class="text-center mt-5 mb-5">Pas encore des Slider Bar</h3>
                @endif
          </div>
        </div>        
    </div> 
  </div>  
</div>


        
@endsection

@section('scripts')

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src=" {{ asset('/backend/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
   <!--  JS for all viewjs  -->
  <script src=" {{ asset('/backend/assets/js/admin.js')}}"></script>
@endsection


