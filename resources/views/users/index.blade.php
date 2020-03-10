@extends('layouts.admin')

@section('content')
<!-- index list of categories-->
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Liste Du Utilisateurs</h4>
                  <a href="" title="Ajouter Un Produit" class="btn btn-outline-success btn-sm float-right">+</a>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar   -->
                  </div>
                  <div class="material-datatables">
                  @if($users->count() > 0 )
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                           <th>image</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th class="disabled-sorting text-right" style="width: 17%;">Actions</th>
                           
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                           <th></th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th class="disabled-sorting text-right">Actions</th>
                           
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><img style="width:40px; height:40px;  border-radius: 50%;" src="{{ Gravatar::src('$user->email') }}" alt=""></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>

                            @if(!$user->isAdmin())
                            <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                              @csrf
                              <td><button type="submit" title="Modiffier un utilisateur"  class="btn btn-outline-primary btn-sm">Admin</button></td>
                            
                              @else <td></td>
                              @endif
                           
                             
                            </form>
                           
                         
                        </tr>
                      @endforeach
                @else
                    <h3 class="text-center mt-5 mb-5">Pas encore de Utilisateurs</h3>
                @endif    
                    </tbody>
                   </table>
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
