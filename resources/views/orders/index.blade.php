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
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar   -->
                  </div>
                  <div class="material-datatables">
                  @if($orders->count() > 0 )
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                           <th>Name</th>
                           <th>Mobile</th>
                           <th>Adress</th>
                           <th>Total Payment</th>
                           
                           <th class="disabled-sorting text-right" style="width: 17%;">Actions</th>  
                        </tr>
                      </thead>
                      <tfoot>
                      <tr>
                           <th>Name</th>
                           <th>Mobile</th>
                           <th>Adress</th>
                           <th>Total Payment</th>
                           
                           <th class="disabled-sorting text-right" style="width: 17%;">Actions</th>  
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->tel }}</td>
                            <td>{{ $order->adress }}</td>
                            <td>{{ $order->total_payment }}</td>
                            @if($order->isValid())
                          <form action="{{ route('orders.make-valid', $order->id) }}" method="POST">
                              @csrf
                              <td><button type="submit" title="order non valid"  class="btn btn-outline-danger btn-sm">N-VALID</button>
                              </td>
                              @else 
                              <td><button type="submit" title="order valid"  class="btn btn-outline-success btn-sm">VALID</button>
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
