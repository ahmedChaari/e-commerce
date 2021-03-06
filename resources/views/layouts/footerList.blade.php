<style>

</style>
<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    @if($footers->count() > 0 )
    @foreach($footers as $footer) 
            <div class="col-md-4">
                 <img style="width: 46%;" src="/storage/{{ $footer->image }}" alt="Logo-footer"><br>
                <div class="images-services">
                    <img src="{{ asset('/backend/assets/img/cmi.png') }}"       alt="Paypal">
                    <img src="{{ asset('/backend/assets/img/visa.png') }}"      alt="Paypal">
                    <img src="{{ asset('/backend/assets/img/paypal.png') }}"    alt="Paypal">
                    <img src="{{ asset('/backend/assets/img/livraison.png') }}" alt="Paypal">
                </div>
    
                <div class="adress-services">
  
                   <div class="adress-icon"><i class="fa fa-phone-square" style="font-size: 17px;" aria-hidden="true"></i>&nbsp;&nbsp;   : {{ $footer->tel }} <br></div>
                   <div class="adress-icon"><i class="fa fa-envelope-o" style="font-size: 17px;" aria-hidden="true"></i>&nbsp;&nbsp;   : {{ $footer->email }}  <br></div>
                   <div class="adress-icon"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;   : {{ $footer->adress }}</div> 
                </div>
                <div class="social-service">
                @if( $footer->url_face  == '')
                    <a href="{{ $footer->url_face }}" style="display: none;" target="_blank"><img  src="{{ asset('/backend/assets/img/facebook.png') }}" alt="social"></a>
                @else<a href="{{ $footer->url_face }}" target="_blank"><img  src="{{ asset('/backend/assets/img/facebook.png') }}" alt="social"></a>
                @endif

                @if( $footer->url_inst  == '')
                    <a href="{{ $footer->url_inst }}" style="display: none;" target="_blank"><img  src="{{ asset('/backend/assets/img/instagram.png') }}" alt="social"></a>
                @else<a href="{{ $footer->url_inst }}"  target="_blank"><img  src="{{ asset('/backend/assets/img/instagram.png') }}" alt="social"></a>
                @endif

                @if( $footer->url_google  == '')
                    <a href="{{ $footer->url_google }}" style="display: none;" target="_blank"><img  src="{{ asset('/backend/assets/img/google-plus.png') }}" alt="social"></a>
                @else<a href="{{ $footer->url_google }}"  target="_blank"><img  src="{{ asset('/backend/assets/img/google-plus.png') }}" alt="social"></a>
                @endif

                @if( $footer->url_twiter  == '')
                <a href="{{ $footer->url_twiter }}" style="display: none;" target="_blank"><img  src="{{ asset('/backend/assets/img/twitter.png') }}" alt="social"></a>
                @else<a href="{{ $footer->url_twiter }}"  target="_blank"><img  src="{{ asset('/backend/assets/img/twitter.png') }}" alt="social"></a>
                @endif

                @if( $footer->url_pinter  == '')
                    <a href="{{ $footer->url_pinter }}" style="display: none;" target="_blank"><img  src="{{ asset('/backend/assets/img/pinterest.png') }}" alt="social"></a>   
                @else<a href="{{ $footer->url_pinter }}"  target="_blank"><img  src="{{ asset('/backend/assets/img/pinterest.png') }}" alt="social"></a>   
                @endif
                </div>
                @endforeach
    @else
        <h3 class="text-center mt-5 mb-5">data not found</h3>
    @endif 
            </div>
                    <div class="col-md-4">
                        <h3>Produit</h3>
                        <ul class="list-group">
                            @if($categories->count() > 0 )
                            @foreach($categories->slice(0, 8) as $category) 
                            <a href=""><li class="list-group-item footer-category">{{ $category->name }}</li></a>
                            @endforeach
                            @else
                            <li class="list-group-item footer-category">data not found</li>
                            @endif 
                            
                        </ul>
                    </div>
                    <div class="col-md-4">
                    <h3>About us</h3>
                    <p class="footer-about">
                          I work in a small company, so we don't arrange meetings.
                         All the questions are discussed immediately, as they came.
                    At my previous work we had a schedule of meetings. 
                    So we early knew about time and place of meeting.
                    In case if something was changed we received an email about all the changes.
                    </p></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer" style="padding-top: 4px !important;text-align: center;"><h5>Copyright ?? 2020 mindcom.ma Tous les droits sont r??serv??s.</h5></div>