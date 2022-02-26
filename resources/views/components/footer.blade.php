
    <div id="footer" class="footer-main">
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="../images/logo.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>Về {{ Config::get('constants.general.branch_name') }}</h3>
                                <p>Mong muốn cho mọi người địa chỉ uy tín thưởng thức ẩm thực dân dã của Việt Nam, chúng tôi khai sinh và phát triển một thương hiệu, hy vọng dành được niềm tin yêu của cộng đồng...</p>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>Thực đơn</h3>
                                <ul>
                                    <li><a href="#">Bột lọc Nhân tôm</a></li>
                                    <li><a href="#">Bột lọc nhân thịt</a></li>
                                    <li><a href="#">Bánh gói</a></li>
                                    <li><a href="#">Bánh nậm</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Liên hệ</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>408 Nguyễn Phước Nguyên, Đà Nẵng</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+84 38 2040 081
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">support@foodfunday.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="fb-page" data-href="https://www.facebook.com/dstyle.aothunphongcach/" data-tabs="timeline" data-width="330" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dstyle.aothunphongcach/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dstyle.aothunphongcach/">The D.Style - Áo thun Chủ đề</a></blockquote></div>
                                
                                <ul style="margin-top:12px;" class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2020 by <a style="color:#ccc;" href="{{ route('home') }}#banner">{{ Config::get('constants.general.branch_name') }}</a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>

    @if ($errors->any())
        @component('components.alert')
            @if ($errors->any())
                @slot('alert_title')
                    Có lỗi xảy ra...
                @endslot
                @slot('alert_body')
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br />
                    @endforeach
                @endslot
            @endif
        @endcomponent
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#alertModal').modal({show: true});
            });
        </script>
        
    @endif
    
        <div class="cover-modal"><!-- Place at bottom of page --></div>
    </body>
</html>
