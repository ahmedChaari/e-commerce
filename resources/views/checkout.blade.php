@extends('layouts.front')

@section('content')


<style>
.order .cart-main .product-quantity .quantity{font-size: 20px ;}
h5{font-size: 22px;}
</style>

<div class="container-fluid">
	<div class="row medium-padding120 bg-border-color">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
			<div class="order">
				<h2 class="h1 order-title text-center">Your Order</h2>
				<form action="#" method="post" class="cart-main">
					<table class="shop_table cart">
						<thead class="cart-product-wrap-title-main">
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
						</tr>
						</thead>
						<tbody>
                        @foreach(Cart::content() as $item)
						<tr class="cart_item">
							<td class="product-thumbnail">
								<div class="cart-product__item">
									<div class="cart-product-content">
										<h5 class="cart-product-title">{{ $item->name }}</h5>
									</div>
								</div>
							</td>
							<td class="product-quantity">
								<div class="quantity">
									x {{ $item->qty }}
								</div>
							</td>
							<td class="product-subtotal">
								<h5 class="total amount">{{ $item->total() }}DH</h5>
							</td>
						</tr>
                        @endforeach
						<tr class="cart_item subtotal">
							<td class="product-thumbnail">
								<div class="cart-product-content">
									<h5 class="cart-product-title">	TRANSPORT COSTS:</h5>
								</div>
							</td>
							<td class="product-quantity">
							</td>
						</tr>
						<tr class="cart_item total">
							<td class="product-thumbnail">
								<div class="cart-product-content">
									<h5 class="cart-product-title">Total :</h5>
								</div>
							</td>
							<td class="product-quantity">
							</td>
							<td class="product-subtotal">
								<h5 class="total amount">{{ Cart::total() }}DH</h5>
							</td>
						</tr>
						</tbody>
					</table>
					<div class="cheque">
						<div class="logos">
							<a href="#" class="logos-item">
								<img src="{{ asset('app/img/visa.png') }}" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="{{ asset('app/img/mastercard.png') }}" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="{{ asset('app/img/discover.png') }}" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="{{ asset('app/img/amex.png') }}" alt="Amex">
							</a>
							<!-- Button trigger modal -->
							<button type="button" style="padding: 6px 10px;"class="btn btn-success btn-sm " data-toggle="modal" data-target=".bd-example-modal-sm">
								à La Livraison	
							</button>
							<span style="float: right;">
								<form action="{{ route('cart.checkout')}}" method="POST">
                                @csrf
									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="pk_test_IMvgCsjcz8N3YBsPsdv5tg2800RKlfMaKJ"
									    data-amount="{{ Cart::total() }} * 100"
									    data-name="E-commerce tutorial"
									    data-description="Buy Fruits"
									    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
									    data-locale="auto"
									    data-zip-code="true">
									  </script>
								</form>
							</span>
						</div>
					</div>

				</form>
			</div>
		</div>

			</div>
		</div>
	</div>
</div>



<!-- Small modal -->
<form action="{{ route('orders.store') }}"  method="POST" >
						@csrf
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<center><img src="{{ asset('/backend/assets/img/PayLev.png') }}" alt=""></center>
				@include('erreurs.erreur')
					<input id="name" style="margin-bottom:4px;margin-top: 27px;" class="form-control" type="text" name="name" placeholder="votre nom complais">			
					<input  id="tel" style="margin-bottom:4px" class="form-control" type="tel" name="tel" placeholder="votre Numero tel">
					<textarea id="adress" style="margin-bottom:4px" class="form-control" name="adress"  cols="2" rows="2"
						placeholder="votre Adress complais"></textarea>
					
					@foreach(Cart::content() as $item)     
						<input type="hidden" name="qty" value="{{ $item->qty }},{{ $item->name }}">	
					@endforeach
					<input type="hidden" name="total_payment" value="{{ Cart::total() }}">
					<button name="contact" type="submit" class="btn btn-success btn-sm" id="contact" disabled>P. COMMANDE <span class="badge">{{ Cart::total() }} DH</span></button>
			</div>
		</div>
	</div>
</form>


@endsection

@section('scripts')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src=" {{ asset('/backend/assets/js/admin.js')}}"></script>
@endsection
