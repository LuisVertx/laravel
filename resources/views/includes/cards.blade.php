

@foreach ($message as $m)
    

        <a class="a-card" href="#">
            <div class="product-card-market">
                <div class="market-media">{{ $m->photo }}</div>
                <div class="market-info">
                    <div class="skeleton-title">{{ $m->title }}</div>
                    <div class="seller-row">
                        <div class="seller-name-skel">{{ $m->seller }}</div>
                    </div>
                    <div class="price-skel-block">
                        <div class="price-skel">{{ $m->price }}</div>

                    </div>
                </div>
            </div>
            </a>

@endforeach
            