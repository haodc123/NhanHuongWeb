@component('components.header')
@endcomponent

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1"></div>
                <div class="col-lg-8 col-md-10 col-sm-10 col-xs-12">
                    <br /><br />
                    <div class="news-cover">
                        <img src="../images/news_img/mkt.jpg" alt="" />
                    </div>
                    
                    <h2 class="detail-title">
					Giảm giá Mừng Khai trương
				    </h2>
                    <br />
                    <div class="blog-box clearfix">
                        <div class="detail-content">

                        <p>Nhân dịp Khai trương, {{ Config::get('constants.general.branch_full_name') }} xin trân trọng gửi đến quý khách hàng chương trình Khuyến mãi giảm giá 20% giá trị đơn hàng.</p>
                        <p>Đồng thời, bạn chỉ cần Like và Share Facebook Fanpage của {{ Config::get('constants.general.branch_name') }} để có cơ hội nhận Mã Giảm giá cho 5 lần mua hàng tiếp theo lên đến 20%.</p>
                        <p>Còn chần chừ gì nữa hãy tham gia ngay bạn nhé.</p>
                        <p>{{ Config::get('constants.general.branch_name') }} xin trân trọng cảm ơn quý khách hàng đã quan tâm và tạo cơ hội cho chúng tôi được phục vụ.</p>

                        </div>
                        <!-- end detail-content -->
                        <div class="detail-bottom">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="fb-like" data-href="https://www.facebook.com/batstyle.aothun.aophongcach" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6"></div>
                            </div>
                        </div>
                        <!-- end detail-bottom -->

                    </div>
                    <!-- end blog-box -->

                </div>
                <!-- end col -->
                <div class="col-lg-2 col-md-1 col-sm-1"></div>
            </div>
            <!-- end row -->
            
            
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->

@component('components.footer')
@endcomponent