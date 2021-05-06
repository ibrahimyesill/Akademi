@extends('Frontend.Layouts.master')
@section('title','Konferans İsmi')
@section('content')
<div class="blog-details-hero set-bg" data-setbg="/img/main.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__hero__text mb-4 ">
                    <ul class="">
                        <li><i class="fa fa-clock-o"></i> <span>03.05.2021</span> / <span>04.05.2021</span></li>
                        <li><i class="fa fa-user"></i> World Research Society</li>
                        <li><i class="fa fa-location-arrow"></i>London,United Kingdom</li>
                    </ul>
                    <h2>International Conference on Economics, Finance and Security</h2>


                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-12">
                    <div class="card mb-2">
                        <div class="card-header text-center">

                            <h4 class="">
                                <i class="fa fa-info text-info"></i>
                                Konferans Bilgileri
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <th scope="row">Organizasyonu Yapan Firma/Kişi</th>
                                    <td>World Research Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Konferans Sitesi</th>
                                    <td>http://theiier.org/Conference2021/UK/4/ICLPS/</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">İlgili Yetkili</th>
                                    <td>Conference coordinator</td>
                                  </tr>
                                  <tr>
                                      <th scope="row">İletişim Maili</th>
                                      <td>info@theiier.org</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">Konferans Kimliği</th>
                                     <td>ACA472737</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header text-center">
                            <h4><i class="fa fa-calendar-o text-danger"></i>
                                Konferans Tarih Bilgileri</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                  <tr >
                                    <th scope="row">Makale Teslimi İçin Son Tarih</th>
                                    <td>01.05.2021</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Başlangıç Tarihi</th>
                                    <td>03.05.2021</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Bitiş Tarihi</th>
                                    <td>04.05.2021</td>
                                  </tr>
                                  <tr>
                                      <th scope="row">Etkinlik Durumu</th>
                                      <td><div class="badge badge-success">Aktif</div></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="blog__details__text">
                    <h5>Konferans Açıklaması</h5>
                    <p>Free promotions such as search engines and directories would give your web site the deserved
                        traffic you always wanted. Make sure to check your web site’s ranking to know whether or not
                        this type of free promotion is right for you. – Make a deal with other web sites on trading
                        links which could help both web sites. Make sure to use words that could easily interest the
                        audience.</p>
                    <div class="blog__details__video set-bg" data-setbg="/img/blog/details/blog-video-bg.jpg">
                        <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>


                {{-- sosyal medya paylaşım --}}

                {{-- <div class="blog__details__share">
                    <a href="#" class="blog__details__share__item">
                        <i class="fa fa-facebook"></i>
                        <span>Share</span>
                    </a>
                    <a href="#" class="blog__details__share__item twitter">
                        <i class="fa fa-twitter"></i>
                        <span>Share</span>
                    </a>
                    <a href="#" class="blog__details__share__item google">
                        <i class="fa fa-google"></i>
                        <span>Share</span>
                    </a>
                    <a href="#" class="blog__details__share__item linkedin">
                        <i class="fa fa-linkedin"></i>
                        <span>Share</span>
                    </a>
                </div> --}}


            </div>
            <div class="col-lg-4">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Searching...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__recent">
                        <h5>İlgili Konferanslar</h5>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/recent-1.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Shopping</span>
                                <h6>Tortoise grilled on salt</h6>
                                <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/recent-2.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Hotels</span>
                                <h6>Shrimp floured and fried</h6>
                                <p><i class="fa fa-clock-o"></i> 22th March, 2019</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/recent-3.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Restaurant</span>
                                <h6>Sweet and sour pork ribs</h6>
                                <p><i class="fa fa-clock-o"></i> 25th March, 2019</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/recent-4.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Videos</span>
                                <h6>Crab fried with tamarind</h6>
                                <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/recent-5.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Travel</span>
                                <h6>Tortoise grilled on salt</h6>
                                <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                            </div>
                        </a>
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
