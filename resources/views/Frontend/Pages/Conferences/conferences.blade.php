@extends('Frontend.Layouts.master')
@section('title')
    Konferanslar
@endsection
@section('content')
<div class="filter nice-scroll">
    <div class="filter__title">
        <h5><i class="fa fa-filter"></i> Filtreleme</h5>
    </div>
    <div class="filter__search">
        <input type="text">
    </div>
    <div class="filter__select">
        <select id="city">
            <option value="">Şehir Seçiniz</option>
        </select>
    </div>
    <div class="filter__select">
        <select id="city">
            <option value="">Konferans Konusu Seçiniz</option>
        </select>
    </div>
    {{-- <div class="filter__radius">
        <p>Radius:</p>
        <div class="price-range-wrap">
            <div
                class="price-range-radius ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="radius">
                </div>
            </div>
        </div>
    </div>
    <div class="filter__price">
        <p>Price:</p>
        <div class="price-range-wrap">
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount" value="$80">
                </div>
            </div>
        </div>
    </div>
    <div class="filter__tags">
        <h6>Tag</h6>
        <label for="coupon">
            Coupons
            <input type="checkbox" id="coupon">
            <span class="checkmark"></span>
        </label>
        <label for="sa">
            Smoking Allowed
            <input type="checkbox" id="sa">
            <span class="checkmark"></span>
        </label>
        <label for="camping">
            Camping
            <input type="checkbox" id="camping">
            <span class="checkmark"></span>
        </label>
        <label for="hot-spots">
            Hot Spots
            <input type="checkbox" id="hot-spots">
            <span class="checkmark"></span>
        </label>
        <label for="internet">
            Internet
            <input type="checkbox" id="internet">
            <span class="checkmark"></span>
        </label>
        <label for="tr">
            Top Rated
            <input type="checkbox" id="tr">
            <span class="checkmark"></span>
        </label>
        <label for="hd">
            Hot Deal
            <input type="checkbox" id="hd">
            <span class="checkmark"></span>
        </label>
    </div> --}}
    <div class="form-group">
        <div class="input-group">
            <input class="form-control datepicker pb-1 mr-3" type="text" id="datepicker_start" placeholder="Başlangıç Tarihi">
            <input class="form-control datepicker" type="text" id="datepicker_finish" placeholder="Bitiş Tarihi">
        </div>
    </div>
    <div class="filter__btns">
        <button type="submit">Sonuçları Göster</button>
        <button type="submit" class="filter__reset">Filtreyi Temizle</button>
    </div>

</div>
<!-- Filter End -->

<!-- Listing Section Begin -->
<section class="listing nice-scroll">
    <div class="listing__text__top">
        <div class="listing__text__top__left">
            <h5>Konferanslar</h5>
            <span>18 Sonuç Bulundu</span>
        </div>
        {{-- <div class="listing__text__top__right">Nearby <i class="fa fa-sort-amount-asc"></i></div> --}}
    </div>
    <div class="listing__list">

        <div class="listing__item">

            {{-- <div class="listing__item__pic" > --}}
                {{-- <img src="img/listing/list_icon-1.png" alt=""> --}}
                {{-- <div class="listing__item__pic__tag">İncele</div> --}}
                {{-- <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div> --}}
            {{-- </div> --}}

            <div class="listing__item__text rounded border border-danger position-relative">
                <a href="#" class="badge badge-danger position-absolute"><span>İncele</span></a>
                <div class="listing__item__text__rating ">
                    {{-- <div class="listing__item__rating__star">
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star-half_alt"></span>
                    </div> --}}
                    <h6 ><span class="text-success">03.05.2021</span> - <span class="text-danger">06.05.2021</span></h6>
                </div>
                <hr>
                <div class="listing__item__text__inside">
                    <h5 class="text-center">International Conference on Economics, Finance and Security</h5>
                    <div class="text-center">
                        <small class="text-center text-black text-font-weight-bold">London,United Kingdom</small>
                    </div>
                    <hr>

                    <ul >
                        <li><i class="fa fa-user mr-1 "></i>
                            World Research Society
                        </li>
                        <li><i class="fa fa-envelope mr-1"></i><small>info@worldresearchsociety.com</small></li>

                    </ul>

                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-4.png" alt="">
                        <span>Banka Ve Finans</span>
                    </div>
                    <div class="listing__item__text__info__right">Aktif</div>
                </div>
            </div>
        </div>
        {{-- <div class="listing__item">
            <div class="listing__item__pic set-bg" data-setbg="img/listing/list-2.jpg">
                <img src="img/listing/list_icon-2.png" alt="">
                <div class="listing__item__pic__tag top_rate">Top Rate</div>
                <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div>
            </div>
            <div class="listing__item__text">
                <div class="listing__item__text__inside">
                    <h5>Shrimp floured and fried</h5>
                    <div class="listing__item__text__rating">
                        <div class="listing__item__rating__star">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <h6>$40 - $70</h6>
                    </div>
                    <ul>
                        <li><span class="icon_pin_alt"></span> 1012 Vesper Dr. Columbus, Georgia(GA), United States
                        </li>
                        <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                    </ul>
                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-2.png" alt="">
                        <span>Food & Drink</span>
                    </div>
                    <div class="listing__item__text__info__right closed">Closed</div>
                </div>
            </div>
        </div> --}}
        <div class="listing__item">

            {{-- <div class="listing__item__pic" > --}}
                {{-- <img src="img/listing/list_icon-1.png" alt=""> --}}
                {{-- <div class="listing__item__pic__tag">İncele</div> --}}
                {{-- <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div> --}}
            {{-- </div> --}}

            <div class="listing__item__text rounded border border-danger position-relative">
                <a href="#" class="badge badge-danger position-absolute"><span>İncele</span></a>
                <div class="listing__item__text__rating ">
                    {{-- <div class="listing__item__rating__star">
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star-half_alt"></span>
                    </div> --}}
                    <h6 ><span class="text-success">15.05.2021</span> - <span class="text-danger">16.05.2021</span></h6>
                </div>
                <hr>
                <div class="listing__item__text__inside">
                    <h5 class="text-center">World Congress on Medical and Health Informatics</h5>
                    <div class="text-center">
                        <small class="text-center text-black text-font-weight-bold">Frankfurt,Germany</small>
                    </div>
                    <hr>

                    <ul >
                        <li><i class="fa fa-user mr-1 "></i>
                            Conference Fora
                        </li>
                        <li><i class="fa fa-envelope mr-1"></i><small>info@conferencefora.org</small></li>

                    </ul>

                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-2.png" alt="">
                        <span>Sağlık</span>
                    </div>
                    <div class="listing__item__text__info__right">Aktif</div>
                </div>
            </div>
        </div>
        <div class="listing__item">

            {{-- <div class="listing__item__pic" > --}}
                {{-- <img src="img/listing/list_icon-1.png" alt=""> --}}
                {{-- <div class="listing__item__pic__tag">İncele</div> --}}
                {{-- <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div> --}}
            {{-- </div> --}}

            <div class="listing__item__text rounded border border-danger position-relative">
                <a href="#" class="badge badge-danger position-absolute"><span>İncele</span></a>
                <div class="listing__item__text__rating ">
                    {{-- <div class="listing__item__rating__star">
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star-half_alt"></span>
                    </div> --}}
                    <h6 ><span class="text-success">15.06.2021</span> - <span class="text-danger">16.06.2021</span></h6>
                </div>
                <hr>
                <div class="listing__item__text__inside">
                    <h5 class="text-center">1047th International Conference on Power Control and Embedded System</h5>
                    <div class="text-center">
                        <small class="text-center text-black text-font-weight-bold">Hamburg,Germany</small>
                    </div>
                    <hr>

                    <ul >
                        <li><i class="fa fa-user mr-1 "></i>
                            Researchworld
                        </li>
                        <li><i class="fa fa-envelope mr-1"></i><small>info@researchworld.org</small></li>

                    </ul>

                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-3.png" alt="">
                        <span>Mühendislik</span>
                    </div>
                    <div class="listing__item__text__info__right">Aktif</div>
                </div>
            </div>
        </div>
        <div class="listing__item">

            {{-- <div class="listing__item__pic" > --}}
                {{-- <img src="img/listing/list_icon-1.png" alt=""> --}}
                {{-- <div class="listing__item__pic__tag">İncele</div> --}}
                {{-- <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div> --}}
            {{-- </div> --}}

            <div class="listing__item__text rounded border border-danger position-relative">
                <a href="#" class="badge badge-danger position-absolute"><span>İncele</span></a>
                <div class="listing__item__text__rating ">
                    {{-- <div class="listing__item__rating__star">
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star-half_alt"></span>
                    </div> --}}
                    <h6 ><span class="text-success">15.05.2021</span> - <span class="text-danger">16.05.2021</span></h6>
                </div>
                <hr>
                <div class="listing__item__text__inside">
                    <h5 class="text-center">World Congress on Medical and Health Informatics</h5>
                    <div class="text-center">
                        <small class="text-center text-black text-font-weight-bold">Frankfurt,Germany</small>
                    </div>
                    <hr>

                    <ul >
                        <li><i class="fa fa-user mr-1 "></i>
                            Conference Fora
                        </li>
                        <li><i class="fa fa-envelope mr-1"></i><small>info@conferencefora.org</small></li>

                    </ul>

                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-2.png" alt="">
                        <span>Sağlık</span>
                    </div>
                    <div class="listing__item__text__info__right">Aktif</div>
                </div>
            </div>
        </div>
        <div class="listing__item">

            {{-- <div class="listing__item__pic" > --}}
                {{-- <img src="img/listing/list_icon-1.png" alt=""> --}}
                {{-- <div class="listing__item__pic__tag">İncele</div> --}}
                {{-- <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div> --}}
            {{-- </div> --}}

            <div class="listing__item__text rounded border border-danger position-relative">
                <a href="#" class="badge badge-danger position-absolute"><span>İncele</span></a>
                <div class="listing__item__text__rating ">
                    {{-- <div class="listing__item__rating__star">
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star-half_alt"></span>
                    </div> --}}
                    <h6 ><span class="text-success">15.06.2021</span> - <span class="text-danger">16.06.2021</span></h6>
                </div>
                <hr>
                <div class="listing__item__text__inside">
                    <h5 class="text-center">1047th International Conference on Power Control and Embedded System</h5>
                    <div class="text-center">
                        <small class="text-center text-black text-font-weight-bold">Hamburg,Germany</small>
                    </div>
                    <hr>

                    <ul >
                        <li><i class="fa fa-user mr-1 "></i>
                            Researchworld
                        </li>
                        <li><i class="fa fa-envelope mr-1"></i><small>info@researchworld.org</small></li>

                    </ul>

                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-3.png" alt="">
                        <span>Mühendislik</span>
                    </div>
                    <div class="listing__item__text__info__right">Aktif</div>
                </div>
            </div>
        </div>
        <div class="listing__item">

            {{-- <div class="listing__item__pic" > --}}
                {{-- <img src="img/listing/list_icon-1.png" alt=""> --}}
                {{-- <div class="listing__item__pic__tag">İncele</div> --}}
                {{-- <div class="listing__item__pic__btns">
                    <a href="#"><span class="icon_zoom-in_alt"></span></a>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                </div> --}}
            {{-- </div> --}}

            <div class="listing__item__text rounded border border-danger position-relative">
                <a href="#" class="badge badge-danger position-absolute"><span>İncele</span></a>
                <div class="listing__item__text__rating ">
                    {{-- <div class="listing__item__rating__star">
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star"></span>
                        <span class="icon_star-half_alt"></span>
                    </div> --}}
                    <h6 ><span class="text-success">03.05.2021</span> - <span class="text-danger">06.05.2021</span></h6>
                </div>
                <hr>
                <div class="listing__item__text__inside">
                    <h5 class="text-center">International Conference on Economics, Finance and Security</h5>
                    <div class="text-center">
                        <small class="text-center text-black text-font-weight-bold">London,United Kingdom</small>
                    </div>
                    <hr>

                    <ul >
                        <li><i class="fa fa-user mr-1 "></i>
                            World Research Society
                        </li>
                        <li><i class="fa fa-envelope mr-1"></i><small>info@worldresearchsociety.com</small></li>

                    </ul>

                </div>
                <div class="listing__item__text__info">
                    <div class="listing__item__text__info__left">
                        <img src="img/listing/list_small_icon-4.png" alt="">
                        <span>Banka Ve Finans</span>
                    </div>
                    <div class="listing__item__text__info__right">Aktif</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('body').addClass('ov-hid')
         $('.datepicker').datepicker({
            beforeShow: function() {
                setTimeout(function(){
                    $('.ui-datepicker').css('z-index', 99999999999999);
                }, 0);
            }
         });
        });
    </script>
@endsection
