
@extends('homepage.layouts.main')
@section('content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-6">
                        <h3 style="color:#000000">Chào mừng đến với<br /><b><i>NMM Techstore</i></b> !</h3>
                        <a class="white_bg_btn btn-lg" href="{{asset('shop/category/1')}}">Khám phá</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="halemet_img">
                            <img src="/nmm/public/uploads/product_images/homepage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Feature Product Area =================-->
    <section class="feature_product_area">
        <div class="main_box">
            <div class="container">
                <div class="row hot_product_inner">
                     <div class="col-lg-6">
                        <div class="hot_p_item">
                            <a href="{{asset('shop/brand/2')}}"><img class="img-fluid" src="{{asset('homepage/img/product/hot-product/hot-p-1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hot_p_item">
                            <a href="{{asset('shop/brand/1')}}"><img class="img-fluid" src="{{asset('homepage/img/product/hot-product/hot-p-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div style="margin: 25px 0 0 0;">
                            <img alt="CÔ VY LÀM KHÓ CÓ NMM LO" src="{{asset('homepage/img/product/hot-product/hot-p-3.png')}}" title="CÔ VY LÀM KHÓ CÓ NMM LO" width="100%">
                </div>
                
            </div>
        </div>
    </section>
    <!--================Clients Logo Area =================-->
    <section class="clients_logo_area">
        <div style="background-image: url('/nmm/public/homepage/img/background2.png');">
            <div class="container">
                <div class="main_title">
                    <h2>Thương hiệu nổi bật</h2>
                </div>
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <a href="{{asset('shop/brand/1')}}">
                            <img src="{{asset('homepage/img/clients-logo/c-logo-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('shop/brand/5')}}">
                            <img src="{{asset('homepage/img/clients-logo/c-logo-2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('shop/brand/2')}}">
                            <img src="{{asset('homepage/img/clients-logo/c-logo-3.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('shop/brand/3')}}">
                            <img src="{{asset('homepage/img/clients-logo/c-logo-4.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('shop/brand/7')}}">
                            <img src="{{asset('homepage/img/clients-logo/c-logo-5.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Clients Logo Area =================-->
    <section class="feature_product_area">
        <div class="main_box">
            <div class="container">
                <div class="feature_product_inner">
                    <div class="section-header flashsale_samsung">
				        <div class="main_title">
							    			<img src="{{asset('homepage/img/product/hot-product/flashsale.gif')}}" style="width: 250px;height:auto;vertical-align:middle;" alt="flashsale">
		    						</div>
				    <div class="clear"></div>
			            </div>
                    <div class="feature_p_slider owl-carousel">
                        @foreach($featureProduct as $featureItem)
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">   
                                    <a href="/nmm/public/shop/product/{{$featureItem->id}}" id=hotproduct>
                                    <img height="262" src="/nmm/public/{{$featureItem->images[0]->image_path}}" alt="">
                                    <div class="p_icon">
                                        <a style="cursor: pointer" class="wish-list" productid="{{$featureItem->id}}"><i class="lnr lnr-heart"></i></a>
                                        <a style="cursor: pointer" class="add-to-cart" productid="{{$featureItem->id}}"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    </a>
                                </div>
                                <a href="/nmm/public/shop/product/{{$featureItem->id}}"><h4>{{$featureItem->name}}</h4></a>
                                @if($featureItem->promotion_price!=0)
                                    <h5 ><strike class="mr-1">{{$featureItem->unit_price}}đ</strike><span style="color: red">{{$featureItem->promotion_price}}đ</h5></span>
                                @else
                                    <h5 style="color: red">{{$featureItem->unit_price}}đ</h5>
                                @endif

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Product Area =================-->

    <!--================Latest Product Area =================-->
    <section class="feature_product_area latest_product_area">
        <div class="main_box">
            <div class="container">
                <div class="feature_product_inner">
                    <div class="main_title">
                        <h2>Sản phẩm mới nhất</h2>
                        <p>Những mặt hàng mới được cập nhật liên tục</p>
                    </div>
                    <div class="latest_product_inner row">
                    @foreach($latestProduct as $latestItem)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <a href="/nmm/public/shop/product/{{$latestItem->id}}" id=newproduct>
                                    <img height="262" src="/nmm/public/{{$latestItem->images[0]->image_path}}" alt="">
                                    <div class="p_icon">
                                        <a style="cursor: pointer" class="wish-list" productid="{{$latestItem->id}}"><i class="lnr lnr-heart"></i></a>
                                        <a style="cursor: pointer" class="add-to-cart" productid="{{$latestItem->id}}"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    </a>
                                </div>
                                <a href="/nmm/public/shop/product/{{$latestItem->id}}"><h4>{{$latestItem->name}}</h4></a>
                                @if($latestItem->promotion_price!=0)
                                    <h5 ><strike class="mr-1">{{$latestItem->unit_price}}đ</strike><span style="color: red">{{$latestItem->promotion_price}}đ</h5></span>
                                @else
                                    <h5 style="color: red">{{$latestItem->unit_price}}đ</h5>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product Area =================-->
    <!--================Most Product Area =================-->
    <section class="most_product_area">
        <div class="main_box">
            <div class="container">
                <div class="main_title">
                    <h2 class="phukien_title" style="color:red"><a href="/nmm/public/shop/category/5">Phụ kiện điện thoại</a></h2>
                    <p>Những phụ kiện không thể thiếu cho dế yêu của bạn</p>
                </div>
                <div class="row most_product_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            @foreach($accessories1 as $ac1)
                            <div class="media">
                                <div class="d-flex">
                                    <a href="/nmm/public/shop/product/{{$ac1->id}}">
                                        <img src="/nmm/public/{{$ac1->images[0]->image_path}}" height="70" width="70" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="/nmm/public/shop/product/{{$ac1->id}}"><h4>{{$ac1->name}}</h4></a>
                                    @if($ac1->promotion_price!=0)
                                    <h3><strike class="mr-1">{{$ac1->unit_price}}đ</strike><span style="color: red">{{$ac1->promotion_price}}đ</h3></span>
                                @else
                                    <h3 style="color: red">{{$ac1->unit_price}}đ</h3>
                                @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            @foreach($accessories2 as $ac2)
                            <div class="media">
                                <div class="d-flex">
                                    <a href="/nmm/public/shop/product/{{$ac2->id}}">    
                                    <img src="/nmm/public/{{$ac2->images[0]->image_path}}" height="70" width="70" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="/nmm/public/shop/product/{{$ac2->id}}"><h4>{{$ac2->name}}</h4></a>
                                    @if($ac2->promotion_price!=0)
                                    <h3><strike class="mr-1">{{$ac2->unit_price}}đ</strike><span style="color: red">{{$ac2->promotion_price}}đ</h3></span>
                                @else
                                    <h3 style="color:red">{{$ac2->unit_price}}đ</h3>
                                @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            @foreach($accessories3 as $ac3)
                            <div class="media">
                                <div class="d-flex">
                                <a href="/nmm/public/shop/product/{{$ac3->id}}">
                                    <img src="/nmm/public/{{$ac3->images[0]->image_path}}" height="70" width="70" alt="">
                                </a>
                                </div>
                                <div class="media-body">
                                    <a href="/nmm/public/shop/product/{{$ac3->id}}"><h4>{{$ac3->name}}</h4></a>
                                    @if($ac3->promotion_price!=0)
                                    <h3><strike class="mr-1">{{$ac3->unit_price}}đ</strike><span style="color: red">{{$ac3->promotion_price}}đ</h3></span>
                                @else
                                    <h3 style="color: red">{{$ac3->unit_price}}đ</h3>
                                @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="wishlist1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Most Product Area =================-->

@endsection
@section('script')

@endsection
