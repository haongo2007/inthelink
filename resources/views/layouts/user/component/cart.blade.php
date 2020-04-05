@foreach($data as $val)
<li>
    <div class="media">
        <a href="#">
            <img class="mr-3" src="{{ asset('images') }}/fashion/product/1.jpg" 
            alt="Generic placeholder image">
        </a>
        <div class="media-body">
            <a href="#">
                <h4>item name</h4>
            </a>
            <h4><span>1 x $ 299.00</span></h4>
        </div>
    </div>
    <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
</li>
@endforeach
<li>
    <div class="total">
        <h5>subtotal : <span>$299.00</span></h5>
    </div>
</li>
<li>
    <div class="buttons">
        <a href="" class="view-cart">view cart</a>
        <a href="#" class="checkout">checkout</a>
    </div>
</li>