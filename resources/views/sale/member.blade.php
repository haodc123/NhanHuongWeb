@component('components.header')
@endcomponent

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1"></div>
                <div class="col-lg-8 col-md-10 col-sm-10 col-xs-12">
                    <br /><br />
                    <div class="news-cover">
                        <img src="../images/news_img/khtt.jpg" alt="" />
                    </div>
                    
                    <h2 class="detail-title">
					Chương trình Khách hàng thân thiết
				    </h2>
                    <br />
                    <div class="blog-box clearfix">
                        <div class="detail-content">

                        <p>{{ Config::get('constants.general.branch_name') }} hân hạnh gửi đến quý khách hàng chương trình Khách hàng thân thiết, khách hàng sẽ tích lũy điểm mỗi khi mua hàng, với mỗi 1000 đồng = 1 điểm.</p>
                        <p>Điểm tích lũy sẽ được quy đổi thành quà tặng và các chương trình khuyến mãi khác của {{ Config::get('constants.general.branch_name') }}</p>
                        <p>Chỉ cần cung cấp số điện thoại, chúng tôi sẽ cập nhật cho bạn sau mỗi lần mua hàng, và thông báo trực tiếp qua tin nhắn khi có thông tin để khách hàng nắm bắt.</p>

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