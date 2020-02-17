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
                    <h4 class="card-title">Les informations pour le site</h4>
             </div>
                @if($footers->count() > 0 )
                     <div class="card-body">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                          <thead>
                           <tr>
                                <th>Adresse Email</th>
                                <th>telephone</th>
                                <th>adress</th>
                                <th>facebook</th>
                                <th>twitter</th>
                                <th  withe="8%" height="8%">Action</th> 
                           </tr>   
                          </thead>
                          <tfoot>
                           <tr>
                                <th>Adresse Email</th>
                                <th>telephone</th>
                                <th>adress</th>
                                <th>facebook</th>
                                <th>twitter</th>
                                <th  withe="8%" height="8%">Action</th> 
                           </tr>   
                          </tfoot>
                        <tbody>
                        @foreach($footers as $footer)
                              <tr>
                                <td>{{ $footer->email }}</td>
                                <td>{{ $footer->tel }}</td>
                                <td>{{ $footer->adress }}</td>
                                <td>{{ $footer->url_face }}</td>
                                <td>{{ $footer->url_twiter }}</td>
                                <td>
                                  <a href="{{ route('footers.edit', $footer->id) }}" class="btn btn-outline-primary btn-sm">
                                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                   </a>
                                </td>   
                              </tr>
                        @endforeach
                           </tbody>
                          </table> 
                        </div>
                @else
                <h3 class="text-center mt-5 mb-5">Pas encore des inforamations ici</h3>
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
