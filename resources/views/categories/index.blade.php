@extends('layouts.admin')

@section('content')
<!-- Modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="" method="POST" id="deletCategoryForm">
        @csrf
        @method('DELETE')
   <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Category !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you need to delete this category ?
      </div>
      <div class="modal-footer">
        <button style="color: #fff" type="button" class="btn btn-info" data-dismiss="modal">No Go Back</button>
        <button type="submit" class="btn btn-danger">Yes delete</button>
      </div>
    </div>
   </form>
  </div>
</div>
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
                  <h4 class="card-title">Liste Des Categories</h4>
                  <a href="{{ route('categories.create') }}" title="Ajouter Un Category" class="btn btn-outline-success btn-sm float-right">+</a>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar   -->
                  </div>
                  <div class="material-datatables">
                  @if($categories->count() > 0 )
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>name</th>
                          <th>count post of category</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>id</th>
                          <th>name</th>
                          <th>count post of category</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      @foreach($categories as $category)
                        <tr>
                          <td>{{ $category->id }}</td>
                          <td>{{ $category->name }}</td>
                          <td>{{ $category->posts->count() }}</td>
                          <td class="text-right">
                            <a title="Modiffier Un Category" href="{{ route('categories.edit', $category->id) }}" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <button title="Supprimer Un Category" type="button" class="btn btn-link btn-danger btn-just-icon remove" onclick="handleDelete({{ $category->id  }})"><i class="material-icons">delete</i></button> 
                          </td>
                        </tr>
                      @endforeach
                @else
                    <h3 class="text-center mt-5 mb-5">Pas encore de Category</h3>
                @endif    
                    </tbody>
                   </table>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
<script>
 function handleDelete(id)
  {
      var form = document.getElementById('deletCategoryForm')
      form.action = '/categories/' + id
      $('#deleteModal').modal('show')
  }
</script>

   <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src=" {{ asset('/backend/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
   <!--  JS for all viewjs  -->
  <script src=" {{ asset('/backend/assets/js/admin.js')}}"></script>
@endsection
