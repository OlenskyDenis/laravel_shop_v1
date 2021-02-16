<div class="row">
    @foreach($products as $product)
        @php
            if (Request::is('shop')):
                $sizeProductBlock = "col-sm-12 col-md-6 col-lg-4";
            else:
                $sizeProductBlock = "col-sm-6 col-md-4 col-lg-3";
            endif;
        @endphp

        <div class="{{$sizeProductBlock}} p-b-50">
            <div class="block2">
                @php
                    if ($product->mark == 'New'):
                        $lableProduct = "block2-labelnew";
                    elseif ($product->mark == 'Sale'):
                        $lableProduct = "block2-labelsale";
                    else:
                        $lableProduct = "block2";
                    endif;
                @endphp

                <div class="block2-img wrap-pic-w of-hidden pos-relative {{$lableProduct}}">
                    <img src="images/{{$product->image}}" alt="{{$product->title}}">
                    <div class="block2-overlay trans-0-4">
                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                        </a>
                        <div class="block2-btn-addcart w-size1 trans-0-4">
                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block2-txt p-t-20">
                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">{{$product->title}}</a>
                    <span class="block2-price m-text6 p-r-5">${{number_format($product->price, 2, '.', ' ')}}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>


