@extends('frontend._layouts.master')
@section('title','首頁')
@section('slider')
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="7000" data-speed="650" data-loop="true">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('images/slider/swiper/a1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-right">
                                <h2 data-animate="fadeInUp">充分保濕</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">天然成分、不含皂基</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('images/slider/swiper/a2.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-right">
                                <h2 data-animate="fadeInUp">深層潔淨</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">天然成分、不含皂基</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('images/slider/swiper/a3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-right">
                                <h2 data-animate="fadeInUp">溫和抗敏</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">適合各種肌膚，男女肌膚皆可</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
@endsection

@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark center">

			<div class="container clearfix">
				<h1>我們的產品</h1>
				<span>Our Products</span>
			</div>

        </section><!-- #page-title end -->
        

				<!-- Section 1
				============================================= -->
				<div class="section section-product nomargin" style="padding-top: 70px;">
					<div class="container clearfix">
						<div class="section-product-image">
							<img src="images/products/soap2.jpg" alt="">
						</div>
						<div class="section-product-content edge-underline" data-bottom-top="bottom: 0px;" data-top-bottom="bottom: 100px;">
                            <h3>天然手工香皂</h3>

                            <li>產地：台灣 </li>
                            <li>全成份：橄欖油，椰子油，水，氫氧化鈉，艾草、抹草(萃取液)，茶樹、馬鞭草(精油) </li>
                            <li>容量：100g±10g</li>
                            <br>
                            <div class="row justify-content-center clearfix">
								<div class="col-6 align-items-center">
									<div class="section-product-price">NTD $200</div>
								</div>
								<div class="col-6 align-items-center">
									<a href="#" class="button button-border button-circle button-fill fill-from-bottom button-dark button-black nott t400 nomargin"><span>立刻購買</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>        
@endsection