<div class="row">
    @if ($products->count() > 0)
        @foreach ($products as $product)
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="productItem01">
                    <div class="pi01Thumb">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" />
                        @if ($product->images && count($product->images) > 0)
                            <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->title }}" />
                        @endif
                        <div class="pi01Actions">
                            <a href="javascript:void(0);" class="pi01Cart"><i class="fa-solid fa-shopping-cart"></i></a>
                            <a href="{{ route('shop_details', $product) }}" class="pi01QuickView"><i
                                    class="fa-solid fa-arrows-up-down-left-right"></i></a>
                            <a href="javascript:void(0);" class="pi01Wishlist"><i class="fa-solid fa-heart"></i></a>
                        </div>
                        @if ($product->discounted_price)
                            <div class="productLabels clearfix">
                                <span class="plDis">-${{ $product->discounted_price - $product->price }}</span>
                                <span class="plSale">Sale</span>
                            </div>
                        @endif
                    </div>
                    <div class="pi01Details">
                        <h3><a href="{{ route('shop_details', $product) }}">{{ $product->title }}</a></h3>
                        <div class="pi01Price">
                            <ins>${{ $product->price }}</ins>
                            @if ($product->discounted_price)
                                <del>${{ $product->discounted_price }}</del>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No products found.</p>
    @endif
</div>
