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
                  <a href="{{ route('headers.create') }}" title="Ajouter Un Header" class="btn btn-outline-success btn-sm float-right">+</a>
             </div>
                @if($headers->count() > 0 )
                <div class="card-body">
                   <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>title</th>
                                <th>Description</th>
                                <th class="disabled-sorting text-right">Actions</th> 
                             </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>image</th>
                                <th>title</th>
                                <th>Description</th>
                                <th class="disabled-sorting text-right">Actions</th> 
                             </tr>
                        </tfoot>
                        <tbody>                    
                        @foreach($headers as $header)
                             <tr>
                                <td><img  withe="60px" height="60px" src="/storage/{{ $header->image }}" alt=""></td>
                                <td>{{ $header->title }}</td>
                                <td>{{ $header->description }}</td>
                                <td>
                                   <a href="{{ route('headers.edit', $header->id) }}" class="btn btn-outline-primary btn-sm">
                                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                   </a>
                                   <button title="Supprimer Un Category" 
                                   type="button" class="btn btn-link btn-danger btn-just-icon remove" onclick="handleDelete({{ $header->id  }})">
                                   <i class="material-icons">delete</i></button>  
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


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="" method="POST" id="deletSlideForm">
        @csrf
        @method('DELETE')
   
   <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Slide Bar !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you need to delete this Slide Bar ?
      </div>
      <div class="modal-footer">
        <button style="color: #fff" type="button" class="btn btn-info" data-dismiss="modal">No Go Back</button>
        <button type="submit" class="btn btn-danger">Yes delete</button>
      </div>
    </div>
   </form>
  </div>
</div>
  </div>
</div>




        
@endsection

@section('scripts')

<script>
    function handleDelete(id)
    {
        var form = document.getElementById('deletSlideForm')
        form.action = '/headers/' + id
        $('#deleteModal').modal('show')
    }
</script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src=" {{ asset('/backend/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
   <!--  JS for all viewjs  -->
  <script src=" {{ asset('/backend/assets/js/admin.js')}}"></script>
@endsection


