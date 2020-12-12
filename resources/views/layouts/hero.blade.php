<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Kategoriler</span>
                    </div>
                    <ul>
                        @foreach($categories as $category)
                            <li data-filter=".{{$category->category_name}}"><a href="#">{{$category->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do you want to look for?">
                            <button type="submit" class="site-btn">Search</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0850 000 00 00</h5>
                            <span>7/24 Support</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>Technology</span>
                        <h2>Technology<br />For You</h2>
                        <p>Free Delivery</p>
                        <a href="#" class="primary-btn">START SHOPPİNG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
