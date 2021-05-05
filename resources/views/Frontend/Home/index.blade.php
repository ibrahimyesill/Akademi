@extends('Frontend.Layouts.master')
@section("title")
    Anasayfa
@endsection
@section("content")
<section class="hero set-bg " data-setbg="img/main.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <div class="section-title">
                        <h2>International Conference Alerts</h2>
                        <p>1.118.940.376 The best service package is waiting for you</p>
                    </div>
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <div class="select__option">
                                <select>
                                    <option value="">Ülke Seçiniz</option>
                                </select>
                            </div>
                            <div class="select__option">
                                <select>
                                    <option value="">Kategori Seçiniz</option>
                                </select>
                            </div>
                            <button type="submit" class="orange">Etkinlik Bul</button>
                        </form>
                    </div>
                    <ul class="hero__categories__tags">
                        <li><a href="#" class="">Restaurent</a></li>
                        <li><a href="#" class=" "> Food & Drink</a></li>
                        <li><a href="#" class=""> Shopping</a></li>
                        <li><a href="#" class=""> Beauty</a></li>
                        <li><a href="#" class=""> Hotels</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                        <li><a href="#" class=""> All Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>CONFERENCE ALERTS</h2>
                    <p>All Conference Alert is one of the best conference alerts websites to get notifications for
                        upcoming conferences, academic conferences, conferences 2021, conferences 2022, national &
                        international conferences of your choice. AllConferenceAlert help professionals and
                        enthusiasts to attend international conferences in various capacities - speaker and
                        attendees. Professionals will get a chance to communicate and collaborate with scientists,
                        research scholars, and industry leaders from various regions. AllConferenceAlert also helps
                        organizers to reach out to a wider audience by listing upcoming international conferences,
                        seminars, workshops, and webinars. It's free to add your conference & reach a million
                        attendees at no cost.</p>

                        <p>Conference alerts sent by AllConferenceAlert; makes it easier for professional and attendees
                        to attend international conferences, seminars, and webinars taking place in over 135
                        countries and covering over 150 academic subjects. The enthusiasts can receive conference
                        alerts regularly by becoming subscribers. Join us today!</p>
                </div>
                <!-- <div class="categories__item__list">
                    <div class="categories__item">
                        <img src="img/categories/cat-1.png" alt="">
                        <h5>Food & Drink</h5>
                        <span>78 Listings</span>
                    </div>
                    <div class="categories__item">
                        <img src="img/categories/cat-2.png" alt="">
                        <h5>Restaurent</h5>
                        <span>32 Listings</span>
                    </div>
                    <div class="categories__item">
                        <img src="img/categories/cat-3.png" alt="">
                        <h5>Hotels</h5>
                        <span>16 Listings</span>
                    </div>
                    <div class="categories__item">
                        <img src="img/categories/cat-4.png" alt="">
                        <h5>Beauty & Spa</h5>
                        <span>55 Listings</span>
                    </div>
                    <div class="categories__item">
                        <img src="img/categories/cat-5.png" alt="">
                        <h5>Shopping</h5>
                        <span>23 Listings</span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="news-post spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Yaklaşan Etkinlikler</h2>
                    <p>Konferans ve Seminerler</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg">
                        <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="blog__item__text">
                        <ul class="blog__item__tags">
                            <li><i class="fa fa-tags"></i> Travel</li>
                            <li>Videos</li>
                        </ul>
                        <h5><a href="#">Internet Banner Advertising Most Reliable</a></h5>
                        <ul class="blog__item__widget">
                            <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                            <li><i class="fa fa-user"></i> John Smith</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <ul class="blog__item__tags">
                            <li><i class="fa fa-tags"></i> Travel</li>
                            <li>Restaurant</li>
                        </ul>
                        <h5><a href="#">Internet Banner Advertising Most Reliable</a></h5>
                        <ul class="blog__item__widget">
                            <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                            <li><i class="fa fa-user"></i> John Smith</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <ul class="blog__item__tags">
                            <li><i class="fa fa-tags"></i> Travel</li>
                            <li>Restaurant</li>
                        </ul>
                        <h5><a href="#">Internet Banner Advertising Most Reliable</a></h5>
                        <ul class="blog__item__widget">
                            <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                            <li><i class="fa fa-user"></i> John Smith</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footer')
    @include('Frontend.Layouts.footer')
@endsection
