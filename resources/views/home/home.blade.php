@component('components.header')
@endcomponent


    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h2>{{ trans('messages.welcome') }}</h2>
                            <!-- <h2>Bánh Bột lọc Huế {{ Config::get('constants.general.branch_name') }} </h2> -->
                            <p>Vị ngon đậm đà, ăn mãi không ngán...</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Đặt món ngay</a>
                            </div>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->



    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> Câu chuyện Bánh bột lọc... </h2>

                        <p> Bánh bột lọc là một trong nhiều loại bánh đặc sản ngon thuộc hàng bậc nhất Việt Nam, là loại bánh truyền thống nhưng cũng là món ăn vặt được ưa thích rộng rãi. Món ăn này từng được giới thiệu là <span class="hl">một trong 30 món bánh ngon nhất thế giới</span>, có khả năng “chinh phục” những thực khách khó tính nhất.</p>

                        <p> Bánh bột lọc có xuất xứ từ Huế, được làm từ bột sắn được lọc tinh bột, sau đó được luộc một phần nhỏ bột, hoặc dùng nước sôi nhồi kỹ và làm bánh. Nhân bánh thường bằng tôm trộn với gia vị, có thể làm nhân bằng thịt heo nạc hay hỗn hợp tôm-thịt. Sau khi vắt thành bánh, bánh được gói bằng lá chuối (hoặc có thể không gói) và hấp cách thủy hay luộc chín rồi nhúng nhanh vào nước lạnh đều được.Thường kèm thêm nước chấm.</p>

						<p> Đây là món ăn phổ biến ở khắp nơi và đặc biệt là miền Trung như Huế, Đà Nẵng,... Ở mỗi nơi bánh lại có những biến thể khác nhau.</p>

						<p> Bánh bột lọc có hai loại, bánh bột lọc gói bằng lá chuối và bánh bột lọc trần. Nhân thì cũng có nhiều loại như tôm, thịt, mộc nhĩ... Bánh bột lọc bình dị cả về mặt nguyên liệu lẫn cách chế biến. Tuy nhiên, để làm nên được những chiếc bánh vừa trong và dẻo, vừa béo ngậy và thơm thì đòi hỏi người làm phải biết cách.</p>

						<p> Tại {{ Config::get('constants.general.branch_name') }}, chúng tôi lưu giữ phương pháp làm bánh gia truyền ngon được ưa thích rộng rãi, và với quyết tâm nâng tầm những giá trị Ẩm thực truyền thống của Việt Nam, chúng tôi rất mong mỏi đưa Nhân hương đến với rộng rãi mọi người.</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="../images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="../images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div id="special-menu" class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Thực đơn </h2>
                        <h5 class="title-caption text-center"> Bánh bột lọc có nhiều biến thể, từ nhân trần đến bánh gói lá chuối, từ nhân tôm đến nhân thịt... <br />
                        Ngoài ra, tại {{ Config::get('constants.general.branch_name') }}, chúng tôi cũng có phục vụ các loại bánh khác nữa đấy.</h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            BỘT LỌC NHÂN TÔM
                                            <div class="line"></div>
                                            <div class="dit-line">Tôm là nhân truyền thống không thể bỏ qua khi nhắc tới bánh bột lọc, tôm rim đậm đà của Nhân Hương đảm bảo sẽ làm bạn không chê...</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="../images/special-menu-1.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            BỘT LỌC NHÂN THỊT
                                            <div class="line"></div>
                                            <div class="dit-line">Thịt là loại nhân ít phổ biến hơn tuy nhiên thật ra lại rất ngon và hấp dẫn, chắc chắn thực khách sẽ muốn thử và không tiếc nuối...</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="../images/special-menu-2.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            BÁNH GÓI
                                            <div class="line"></div>
                                            <div class="dit-line">Bánh gói được làm từ bột gạo trắng, chính giữa nhân đậu xanh hay nhân thịt, bên ngoài lá chuối xanh...</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="../images/special-menu-3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            BÁNH NẬM
                                            <div class="line"></div>
                                            <div class="dit-line">Bánh nậm được làm từ bột gạo, nhân đậu xanh hoặc nhân thịt, vừa ngon vừa có tính chất lành tính, nhẹ nhàng (người già, trẻ em, người ốm đều có thể ăn được)...</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="../images/special-menu-4.jpg" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->


    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Cảm nhận của Thực khách
					</h2>
                        <p class="title-caption text-center">Nhân Hương nhận được sự đón nhận rộng rãi của nhiều người. Hãy lắng nghe câu chuyện cảm nhận của những thực khách đã có ấn tượng tốt khi tin tưởng chúng tôi nhé...</p>
                    </div>
                    <div class="team-box">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="../images/testimonial-01.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Thu Hằng</h3>
                                        <p>Bánh bột lọc Nhân Hương ngon, sạch, ăn vừa miệng, bánh bột lọc bán ở khắp nơi nhưng tìm một chỗ uy tín để tin tưởng về chất lượng không phải dễ, Nhân Hương là lựa chọn thường xuyên của mình.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="../images/testimonial-02.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Jeffrey Spender</h3>
                                        <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="../images/testimonial-03.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Monica Reyes</h3>
                                        <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->


	<div id="saleoff" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Khuyến mãi Đặc biệt
					    </h2>
                        <p class="title-caption text-center">
                            Nhiều chương trình Khuyến mãi hấp dẫn như Mừng Khai trương hay Chương trình Khách hàng thân thiết...
                        </p>
                    </div>

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" target="_blank" href="/sale/list">Xem thêm</a>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->


    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Hình ảnh
					</h2>
                        <p class="title-caption text-center">Một số Hình ảnh tại {{ Config::get('constants.general.site_name') }}</p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="../images/gallery_01.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_01.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="../images/gallery_02.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_02.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 2 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="../images/gallery_03.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_03.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 3 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="../images/gallery_04.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_04.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 4 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="../images/gallery_05.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_05.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 5 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="../images/gallery_06.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_06.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 6 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="../images/gallery_07.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_07.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 7 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="../images/gallery_08.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_08.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 8 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="../images/gallery_09.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_09.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 9 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="../images/gallery_10.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="../images/gallery_10.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 10 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
					Câu chuyện muôn nơi
                    <br /><br />
				</h2>
                    <div class="blog-box clearfix">
                    @foreach ($someblogs as $blog)
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                <a target="_blank" href="{{ route('blogs.show', ['title'=>$blog->blog_title_slug]) }}">
                                    <div class="blog-img-box">
                                        <img src="../images/blogs_img/@php echo $blog->blog_thumb @endphp" alt="" />
                                    </div>
                                    <div class="blog-dit">
                                        <h2>@php echo $blog->blog_title @endphp</h2>
                                        <h5>@php echo $blog->updated_at @endphp</h5>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        
                    </div>
                    <!-- end blog-box -->

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" target="_blank" href="{{ route('blogs.list') }}">Xem thêm</a>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->


    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Đặt món	Trực tuyến
					</h2>
                        </div>
                        <h4 class="form-title">CHÚNG TÔI SẼ GỌI LẠI BẠN...</h4>
                        <p>VUI LÒNG CHỌN MÓN VÀ GHI RÕ ĐỊA CHỈ, SỐ ĐIÊN THOẠI ĐỂ CHÚNG TÔI PHỤC VỤ!</p>
                        <br />
                        
                        <form method="POST" action="/order">
                            @csrf
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                @if (Auth::check())
                                    <input type="text" name="f_name" id="f_name" placeholder="Tên" value="{{ auth()->user()->user_name }}">
                                @else
                                    <input type="text" name="f_name" id="f_name" placeholder="Tên">
                                @endif
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                @if (Auth::check())
                                    <input type="text" name="f_addr" id="f_addr" placeholder="Địa chỉ (*)" value="{{ auth()->user()->user_addr }}" required="required" data-error="Địa chỉ là bắt buộc.">
                                @else
                                    <input type="text" name="f_addr" id="f_addr" placeholder="Địa chỉ (*)" required="required" data-error="Địa chỉ là bắt buộc.">
                                @endif
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                @if (Auth::check())
                                    <input type="number" name="f_tel" id="f_tel" placeholder="Số Điện thoại (*)" value="{{ auth()->user()->user_tel }}" required="required" data-error="Số Điện thoại là bắt buộc.">
                                    <input type="hidden" name="f_email" value="{{ auth()->user()->user_email }}">
                                @else
                                    <input type="number" name="f_tel" id="f_tel" placeholder="Số Điện thoại (*)" required="required" data-error="Số Điện thoại là bắt buộc.">
                                @endif
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="f_food" id="f_food" placeholder="Tên món (*)" required="required" data-error="Tên món là bắt buộc." />
                                </div>
                            </div>
                            <!-- end col -->
                        
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">ĐẶT MÓN</button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>

                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->


@component('components.footer')

@endcomponent