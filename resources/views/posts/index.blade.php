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
                  <h4 class="card-title">Liste Du Produits</h4>
                  <a href="{{ route('posts.create') }}" title="Ajouter Un Produit" class="btn btn-outline-success btn-sm float-right">+</a>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar   -->
                  </div>
                  <div class="material-datatables">
                  @if($posts->count() > 0 )
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Name</th>
                          <th>Category</th>
                           <th>Price</th>
                           <th>Price 1</th>
                           <th>%</th>
                           
                           <th class="disabled-sorting text-right">Actions</th>
                           <th class="disabled-sorting text-right"></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>image</th>
                          <th>Name</th>
                          <th>Category</th>
                           <th>Price</th>
                           <th>Price 1</th>
                           <th>%</th>
                           
                           <th class="disabled-sorting text-right">Actions</th>
                           <th class="disabled-sorting text-right"></th>
                        </tr>
                      </tfoot>
                      <tbody>
                      @foreach($posts as $post)
                      <tr>
                      <td><img style="border-radius: 50%;" withe="60px" height="60px" src="/storage/{{ $post->image }}" alt=""></td>
                      <td>{{ $post->name }}</td>
                      <!-- affiche product for category-->
                        @if($post->category->name  == '')
                          <td><a href=""></a></td>
                          @else
                          <td><a href="{{ route('categories.edit', $post->category->id) }}">{{ $post->category->name }}</a></td>
                          @endif
                        
                        <td>{{ $post->price }}</td>
                           @if($post->price_promo > 0)
                        <td style="color:red;text-decoration: line-through;">{{ $post->price_promo }}</td>
                           @else
                        <td>{{ $post->price_promo }}</td>
                           @endif
                     <!-- promotion affiche ou bien non-->
                           @if($post->price_promo > 0)
                        <td>- {{ number_format(((($post->price_promo - $post->price) * 100) / $post->price_promo) , 0) }}%</td>
                             @else
                        <td></td>
                             @endif
                 
                     
                     @if($post->trashed())
                     <td>
                        <form action="{{ route('posts.restore', $post->post) }}" method="post">
                           @csrf
                           @method('PUT')
                           <button type="submit" title="Restorer le produit" class="btn btn-outline-primary btn-sm"><i class="fa fa-window-restore" aria-hidden="true"></i>
                           </button>
                        </form>
                     </td>
                             @else
                     <td><a href="{{ route('posts.edit', $post->name) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                     </td>
                             @endif
                     <td><form action="{{ route('posts.destroy',  $post->id) }}" method="POST" >
                                             @csrf
                                             @method('DELETE')
                              <button type="submit" title="Supprimer le produit" class="btn btn-outline-danger btn-sm">
                              <i title="Restorer le produit" class="fa fa-trash" aria-hidden="true"></i>{{$post->trashed() ?  '' : '' }}</button>
                        </form>
                     </td>
                  </tr>
                      @endforeach
                @else
                    <h3 class="text-center mt-5 mb-5">Pas encore de product</h3>
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