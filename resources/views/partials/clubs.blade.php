<section id="mobile-clubs" class="club-store position-relative padding-large no-padding-top">
    <div class="container">
      <div class="row">
        <div class="display-header d-flex justify-content-between pb-3">
          <h2 class="display-7 text-dark text-uppercase">Mobile clubs</h2>
          <div class="btn-right">
            <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
          </div>
        </div>
        <div class="swiper club-swiper">
          <div class="swiper-wrapper">
            @foreach ($clubs as $club)

            <div class="swiper-slide">
                <div class="club-card position-relative">
                  <div class="image-holder">
                    <img src="{{ $club->image }}" alt="club-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form action="{{ route('cart.addToCart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="club_id" value="{{ $club->id }}">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">{{ $club->name }}</a>
                    </h3>
                    <span class="item-price text-primary">${{ $club->price }}</span>
                  </div>
                </div>
              </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination position-absolute text-center"></div>
  </section>
