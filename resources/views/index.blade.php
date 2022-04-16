@extends('layouts.admin')
@section('content')

<section id="hero-2" class="hero-2">
	<div id="hero-slider" class="hero-slider">
		
		<!-- Slide Item #1 -->
		<div class="item">
			<div class="item-bg bg-overlay">
				<div class="bg-section">
					<img src="assets/images/sliders/9.jpg" alt="Background"/>
				</div>
			</div>
			
			<!-- .container end -->
		</div>
		<!-- .item end -->
		
		<!-- Slide Item #2 -->
		<div class="item">
			<div class="item-bg bg-overlay">
				<div class="bg-section">
					<img src="assets/images/sliders/1.jpg" alt="Background"/>
				</div>
			</div>
		
			<!-- .container end -->
		</div>
		<!-- .item end -->
		
		<!-- Slide Item #3 -->
		<div class="item">
			<div class="item-bg bg-overlay">
				<div class="bg-section">
					<img src="assets/images/sliders/5.jpg" alt="Background"/>
				</div>
			</div>
		
			<!-- .container end -->
		</div>
		<!-- .item end -->
	</div>
	<!-- #hero-slider end -->
</section>

<!-- Shortcode #2 
============================================= -->
<section id="shortcode-2" class="shortcode-2 about-home text-center-xs text-center-sm">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-8">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 text-right">
						<div class="heading heading-1 mb-0">
							<p>عن جود فود</p>
							<h2>من نحن </h2>
						</div>
						<!-- .heading end -->
					</div>
					<!-- .col-md-12 end -->
					<div class="col-xs-12 col-xs-12 col-md-12 mb-50">
						<p>

              الأكل الجيد شركة سعودية مقرها مدينة جدة 
                تأسست عام 2012 م  شركة متخصصة في تجهيز البوفيهات للمناسبات الخاصة والعامة وتموين الشركات والمستشفيات والفنادق والوحدات السكنية  وتقديم خدمات الإعاشة  لشركات الحج والعمرة  .
                بالإضافة إلى خدمات التدريب وتجهيز  المطابخ وإعادة الهيكلة الداخلية مع فريق من الطهاء المتخصصين والمحترفين في هذا المجال وتقديم الشهادات الدولية لهم
</p>
					
					</div>
					<!-- .col-md-12 end -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="feature feature-2 mb-30-xs mb-30-sm">
							<div class="feature-icon">
								<i class="lnr lnr-license font-40 color-theme"></i>
							</div>
							<h4 class="text-uppercase font-16">جودة الخدمة

</h4>
						</div>
					</div>
					<!-- .col-md-3 end -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="feature feature-2 mb-30-xs mb-30-sm">
							<div class="feature-icon">
								<i class="lnr lnr-users font-40 color-theme"></i>
							</div>
							<h4 class="text-uppercase font-16">الاحترافية

</h4>
						</div>
					</div>
					<!-- .col-md-3 end -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="feature feature-2 mb-30-xs mb-30-sm">
							<div class="feature-icon">
								<i class="lnr lnr-cloud-sync font-40 color-theme"></i>
							</div>
							<h4 class="text-uppercase font-16">النظافة والأمان

</h4>
						</div>
					</div>
					<!-- .col-md-3 end -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="feature feature-2 mb-30-xs mb-30-sm">
							<div class="feature-icon">
								<i class="lnr lnr-construction font-40 color-theme"></i>
							</div>
							<h4 class="text-uppercase font-16">جودة مميزة

</h4>
						</div>
					</div>
					<!-- .col-md-3 end -->
				</div>
				<!-- .row end -->
			</div>
			<!-- .col-md-8 end -->
			
			<div class="col-xs-12 col-sm-5 col-md-4">
				<div class="cta-form">
					<div class="cta cta-2 bg-theme">
						<div class="cta-icon">
							<i class="lnr lnr-apartment"></i>
						</div>
						<div class="cta-devider">
						</div>
						<div class="cta-desc">
							<p>جود فود</p>
							<h5> اطلب خدماتنا</h5>
						</div>
					</div>
					<!-- .cta-2 end -->
					<div class="form">
						
						<form  action="" method="post">
							@csrf
							<input type="text" class="form-control" name="name" id="name" placeholder="ادخل الاسم" required/>
							<input type="email" class="form-control" name="email" id="email" placeholder="ادخل الايميل" required/>
							<input type="text" class="form-control" name="phone" id="telephone" placeholder="ادخل رقم الهاتف" required/>
							<textarea class="form-control" name="note"  id="quote" placeholder=" ملاحظه" rows="2" required></textarea>
							<button type="submit" class="btn btn-primary btn-black btn-block"> الاسال</button>
							<!--Alert Message-->
							<div id="quote-result" class="mt-xs">
							</div>
						</form>
					</div>
				</div>
				<!-- .cta-form -->
			</div>
			<!-- .col-md-4 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Service Block #8
============================================= -->
<section id="service-8" class="service service-2 service-8 bg-gray pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-2 text-center">
					<div class="heading-bg">
						<p class="mb-0"></p>
						<h2>خدماتنا </h2>
					</div>
					<p class="mb-0 mt-md">تقدم جود فود خدمات مميزة في تحضير وجبات غذائية 
            مطهية وطازجة على مدار الساعة
            تلك الوجبات تكون معدة في مطبخنا المعتمد على أيدي فريق مختص ومؤهل

</p>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
                        
                        	<li class="col-md-2" role="presentation">
                        </li>
                       	<li class="col-md-2" role="presentation">
                        </li>
                        
                        
						<!-- Nav Tab #1 --
						<li class="col-md-2" role="presentation">
							<a href="#tiling2" aria-controls="tiling2" role="tab" data-toggle="tab">
								<div class="service-icon">
									<img src="assets/images/services/icons/i48/1y.png" alt="icon"/>
									<img src="assets/images/services/icons/i48/1w.png" alt="icon"/>
								</div>
								عن جود فود
 &amp; عن جود فود
 </a>
						</li>
						<!-- Nav Tab #2 --
						<li class="col-md-2" role="presentation">
							<a href="#renovations2" aria-controls="renovations2" role="tab" data-toggle="tab">
								<div class="service-icon">
									<img src="assets/images/services/icons/i48/2y.png" alt="icon"/>
									<img src="assets/images/services/icons/i48/2w.png" alt="icon"/>
								</div>
								عن جود فود
 </a>
						</li>
						<!-- Nav Tab #3 -->
						<li class="col-md-2 " role="presentation">
							<a href="#design2" aria-controls="design2" role="tab" data-toggle="tab">
								<div class="service-icon">
									<img src="assets/images/services/icons/i48/3y.png" alt="icon"/>
									<img src="assets/images/services/icons/i48/3w.png" alt="icon"/>
								</div>
خدمات الموتمرات
                            
                            </a>
						</li>
						<!-- Nav Tab #4 -->
						<li class="col-md-2" role="presentation">
							<a href="#consulting2" aria-controls="consulting2" role="tab" data-toggle="tab">
								<div class="service-icon">
									<img src="assets/images/services/icons/i48/4y.png" alt="icon"/>
									<img src="assets/images/services/icons/i48/4w.png" alt="icon"/>
								</div>
								خدمات المناسبات
 </a>
						</li>
						<!-- Nav Tab #5 -->
						<li class="col-md-2" role="presentation">
							<a href="#management2" aria-controls="management2" role="tab" data-toggle="tab">
								<div class="service-icon">
									<img src="assets/images/services/icons/i48/5y.png" alt="icon"/>
									<img src="assets/images/services/icons/i48/5w.png" alt="icon"/>
								</div>
								البوفيهات المفتوحه
 </a>
						</li>
						<!-- Nav Tab #6 -->
						<li class="col-md-2 active" role="presentation">
							<a href="#wood2" aria-controls="wood2" role="tab" data-toggle="tab">
								<div class="service-icon">
									<img src="assets/images/services/icons/i48/6y.png" alt="icon"/>
									<img src="assets/images/services/icons/i48/6w.png" alt="icon"/>
								</div>
								خدمات الاعاشة
 </a>
						</li>
					</ul>
				</div>
			</div>
			<!-- .col-md-12 end-->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
	<div class="container-fluid bg-theme">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- Panel #1 -->
						<div role="tabpanel" class="tab-pane fade bg-overlay bg-overlay-dark" id="tiling2">
							<div class="bg-section" >
								<img src="assets/images/services/full/1.jpg" alt="Background"/>
							</div>
							<div class="col-md-6 col-md-offset-6 col-content">
								<h3>Tiling &amp; Painting</h3>
								<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات</p>
							</div>
							<!-- .col-md-6 end -->
							
						</div>
						<!-- .tab-pane end -->
						
						<!-- Panel #2 -->
						<div role="tabpanel" class="tab-pane fade" id="renovations2">
							<div class="bg-section" >
								<img src="assets/images/services/full/6.jpg" alt="Background"/>
							</div>
							<div class="col-md-6 col-md-offset-6 col-content">
								<h3>Renovations</h3>
								<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات</p>
								<a class="btn btn-secondary mt-50" href="#">read more<i class="fa fa-plus ml-xs"></i></a>
							</div>
							<!-- .col-md-6 end -->
							
						</div>
						<!-- .tab-pane end -->
						
						<!-- Panel #3 -->
						<div role="tabpanel" class="tab-pane fade in active" id="design2">
							<div class="bg-section" >
								<img src="assets/images/services/full/2.jpg" alt="Background"/>
							</div>
							<div class="col-md-6 col-md-offset-6 col-content">
								<h3>خدمات الاعاشة</h3>
								<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات</p>
							</div>
							<!-- .col-md-6 end -->
							
						</div>
						<!-- .tab-pane end -->
						
						<!-- Panel #4 -->
						<div role="tabpanel" class="tab-pane fade" id="consulting2">
							<div class="bg-section" >
								<img src="assets/images/services/full/10.jpg" alt="Background"/>
							</div>
							<div class="col-md-6 col-md-offset-6 col-content">
								<h3>خدمات المناسبات</h3>
								<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات</p>
							</div>
							<!-- .col-md-6 end -->
							
						</div>
						<!-- .tab-pane end -->
						
						<!-- Panel #5 -->
						<div role="tabpanel" class="tab-pane fade" id="management2">
							<div class="bg-section" >
								<img src="assets/images/services/full/5.jpg" alt="Background"/>
							</div>
							<div class="col-md-6 col-md-offset-6 col-content">
								<h3>البوفيهات المفتوحه</h3>
								<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات</p>
							</div>
							<!-- .col-md-6 end -->
							
						</div>
						<!-- .tab-pane end -->
						
						<!-- Panel #6 -->
						<div role="tabpanel" class="tab-pane fade" id="wood2">
							<div class="bg-section" >
								<img src="assets/images/services/full/4.jpg" alt="Background"/>
							</div>
							<div class="col-md-6 col-md-offset-6 col-content">
								<h3>خدمات الاعاشة</h3>
								<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات
</p>
							</div>
							<!-- .col-md-6 end -->
							
						</div>
						<!-- .tab-pane end -->
					</div>
					<!-- .tab-content end -->
				</div>
				<!-- .row end -->
			</div>
			<!-- .col-md-12 -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container-fluid end -->
</section>

<!-- Projects Section
============================================= -->
<section id="projects" class="projects-fullwidth projects-4col pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-3 text-center mb-0">
					<div class="heading-bg">
						<p class="mb-0"></p>
						<h2>مشاريعنا</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
	<div class="container-fluid">
		<div class="row">
			<!-- Projects Filter
			============================================= -->
			<div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
				<ul class="list-inline">
					<li>
						<a class="active-filter" href="#" data-filter="*">جميع المشاريع</a>
					</li>
					<li>
						<a href="#" data-filter=".interior">الطبخ</a>
					</li>
					<li>
						<a href="#" data-filter=".renovation">المطاعم</a>
					</li>
					<li>
						<a href="#" data-filter=".architecture">الدورات التدريبية</a>
					</li>
					<li>
						<a href="#" data-filter=".landscaping">جود فوت</a>
					</li>
					<li>
						<a href="#" data-filter=".gardening">فوت</a>
					</li>
				</ul>
			</div>
			<!-- .projects-filter end -->
		</div>
		<!-- .row end -->
		
		<!-- Projects Item
		============================================= -->
		<div id="projects-all" class="row">
			
			<!-- Project Item #1 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item interior gardening">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/4.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/4.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/4.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #2 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item renovation landscaping">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/1.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/3.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/1.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #3 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item interior landscaping">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/2.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/2.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/2.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #4 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item architecture">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/3.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta ">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/3.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/3.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #5 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/5.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/5.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/5.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #6 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/6.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/6.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/6.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #7 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/7.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/7.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/7.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			
			<!-- Project Item #8 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item architecture">
				<div class="project-img">
					<img class="" src="assets/images/projects/small/8.jpg" alt="interior"/>
					<div class="project-hover">
						<div class="project-meta">
							<h4>
								<a class="img-popup" href="assets/images/projects/full/8.jpg">  جود فود</a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="assets/images/projects/full/8.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Team
============================================= -->
<section id="team" class="team bg-gray pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-3 text-center">
					<div class="heading-bg">
						<p class="mb-0"></p>
						<h2>فريق العمل </h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			
			<!-- Member #1 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/6.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
					<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
			
			<!-- Member #2 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/6.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
						<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
			
			<!-- Member #3 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/6.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
					<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
			
			<!-- Member #4 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/7.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
					<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
            
            
			<!-- Member #1 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/7.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
					<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
			
			<!-- Member #2 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/6.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
						<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
			
			<!-- Member #3 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/6.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
					<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
			
			<!-- Member #4 -->
			<div class="col-xs-12 col-sm-6 col-md-3 member">
				<div class="member-img">
					<img src="assets/images/projects/full/6.jpg" alt="member"/>
					<div class="member-bg">
					</div>
					<div class="member-overlay">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- .member-img end -->
				<div class="member-bio">
					<h3>عزو محمد </h3>
					<p>مدير المشروع</p>
				</div>
				<!-- .member-bio end -->
			</div>
			<!-- .member end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Shortcode #4 
============================================= -->
<section id="shortcode-4" class="shortcode-4 bg-gray pt-0">
	<div class="container text-center">
		<div class="row">
			
			<!-- Section Body
			============================================= -->
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="facts-box">
					<div class="counter">
						5000
					</div>
					<h4 class="text-uppercase"> البوفيهات</h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="facts-box">
					<div class="counter">
						1325
					</div>
					<h4 class="text-uppercase"> المناسبات</h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="facts-box">
					<div class="counter">
						321
					</div>
					<h4 class="text-uppercase">المؤتمرات</h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="facts-box last">
					<div class="counter">
						2314
					</div>
					<h4 class="text-uppercase">الاعاشة</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Call To Action #3
============================================= -->
<section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
	<div class="bg-section" >
		<img src="assets/images/call/2.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<h1> Good Food</h1>
				<p>خبرا في تجهيز البوفيهات</p>
                
           
                				<p>للمناسبات - والحفلات-  والشركات - والفنادق</p>

                <!--
				<div class="signiture">
					<img src="" alt="signiture"/>
				</div>
-->
			</div>
			<!-- .col-md-8 end -->
		</div>
		<!-- .row end -->

		
	</div>
	<!-- .container end -->
</section>
<!-- #cta-3 end -->

<!-- Testimonials #1
============================================= -->
<section id="testimonials" class="testimonial testimonial-1 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-3 text-center">
					<div class="heading-bg">
						<p class="mb-0"></p>
						<h2>قــــالو عنـــأ</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="testimonial-oc" class="testimonial-carousel">
					
					<!-- testimonial item #1 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="assets/images/testimonial/3.png" alt="author"/>
							</div>
							
                            
							<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ،  .أبجد هوز حطى كلمن هوى،   الاحتياجات .أبجد هوز حطى كلمن هوى ، </p>
                            
						</div>
						<div class="testimonial-divider">
						</div>
							<div class="testimonial-meta">
							<strong> شركة طالب</strong>, عزو محمد
						</div>
					</div>
					<!-- .testimonial-item end -->
					
					<!-- testimonial item #2 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="assets/images/testimonial/2.png" alt="author"/>
							</div>
						
                            
							<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ،  .أبجد هوز حطى كلمن هوى،   الاحتياجات .أبجد هوز حطى كلمن هوى ، </p>
                            
						</div>
						<div class="testimonial-divider">
						</div>
							<div class="testimonial-meta">
							<strong> شركة طالب</strong>, عزو محمد
						</div>
					</div>
					<!-- .testimonial-item end -->
					
					<!-- testimonial item #3 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="assets/images/testimonial/1.png" alt="author"/>
							</div>
                            
							<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ،  .أبجد هوز حطى كلمن هوى،   الاحتياجات .أبجد هوز حطى كلمن هوى ، </p>
                            
                            
						</div>
						<div class="testimonial-divider">
						</div>
						<div class="testimonial-meta">
							<strong> شركة طالب</strong>, عزو محمد
						</div>
					</div>
					<!-- .testimonial-item end -->
					
					<!-- testimonial item #4 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="assets/images/testimonial/3.png" alt="author"/>
							</div>
						
                            
							<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ،  .أبجد هوز حطى كلمن هوى،   الاحتياجات .أبجد هوز حطى كلمن هوى ، </p>
                            
						</div>
						<div class="testimonial-divider">
						</div>
						<div class="testimonial-meta">
						<div class="testimonial-meta">
							<strong> شركة طالب</strong>, عزو محمد
						</div>
						</div>
					</div>
					<!-- .testimonial-item end -->
					
					<!-- testimonial item #5 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="assets/images/testimonial/1.png" alt="author"/>
							</div>
							
                            
							<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ،  .أبجد هوز حطى كلمن هوى،   الاحتياجات .أبجد هوز حطى كلمن هوى ، </p>
                            
						</div>
						<div class="testimonial-divider">
						</div>
						<div class="testimonial-meta">
							<strong> شركة طالب</strong>, عزو محمد
						</div>
					</div>
					<!-- .testimonial-item end -->
					
					<!-- testimonial item #6 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="assets/images/testimonial/2.png" alt="author"/>
							</div>
						
                            
							<p>.أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ، الاحتياجات .أبجد هوز حطى كلمن هوى ، إجراءات المراقبة المعززة. التوازن ،  .أبجد هوز حطى كلمن هوى،   الاحتياجات .أبجد هوز حطى كلمن هوى ، </p>
                            
						</div>
						<div class="testimonial-divider">
						</div>
						<div class="testimonial-meta">
							<strong> شركة طالب</strong>, عزو محمد
						</div>
					</div>
					<!-- .testimonial-item end -->
					
				</div>
			</div>
			<!-- .col-md-12 end -->
			
		</div>
		<!-- .row end -->
		
	</div>
	<!-- .container end -->
	
</section>
<!-- #testimonials end -->

<!-- Shortcode #9 
============================================= -->
<section id="clients" class="shortcode-9">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-2 text-center">
					<div class="heading-bg">
						<h2>عملائنا </h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/1.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/2.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/3.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/4.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/5.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/6.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
		</div>
		<!-- .row End -->
	</div>
	<!-- .container end -->
</section>
<!-- #clients end-->
<footer id="footer" class="footer-1">
	<!-- Contact Bar
	============================================= -->
	<div class="container footer-widgtes">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="widgets-contact">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 widget">
							<div class="widget-contact-icon pull-right">
								<i class="lnr lnr-map"></i>
							</div>
							<div class="widget-contact-info text-right">
								<p class="text-capitalize text-white "> موقعنا</p>
								<p class="text-capitalize font-heading">السعودية - جده - شارع التوبة</p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="col-xs-12 col-sm-12 col-md-4 widget">
							<div class="widget-contact-icon pull-right">
								<i class="lnr lnr-envelope"></i>
							</div>
							<div class="widget-contact-info text-right pr-4">
								<p class="text-capitalize text-white "> الايميل</p>
								<p class="text-capitalize font-heading">info@gmail.com</p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="col-xs-12 col-sm-12 col-md-4 widget">
							<div class="widget-contact-icon pull-right">
								<i class="lnr lnr-phone"></i>
							</div>
							<div class="widget-contact-info text-right">
								<p class="text-capitalize text-white ">اتصل بنا</p>
								<p class="text-capitalize font-heading">0541452324-2541542545</p>
							</div>
						</div>
						<!-- .widget end -->
					</div>
					<!-- .row end -->
				</div>
				<!-- .widget-contact end -->
			</div>
			<!-- .col-md-12 end -->
		</div>


		
		<!-- .row end -->
	</div>
	<!-- .container end -->
	
	<!-- Widget Section
	============================================= -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
			
				<div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
					<h5 class="text-capitalize text-white">روابط سريعه</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<ul class="list-unstyled text-capitalize">
								<li>
									<a href="#team">  فريق العمل</a>
								</li>
								<li>
									<a href="#"> تواصل معنا</a>
								</li>
								<li>
									<a href="#projects">  مشاريعنا</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<ul class="list-unstyled text-capitalize">
								<li>
									<a href="{{url('index')}}"> الرئسية</a>
								</li>
								<li>
									<a href="#shortcode-2"> من نحن</a>
								</li>
								<li>
									<a href="#service-8"> خدماتنا</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
                
				<div class="col-xs-12 col-sm-6 col-md-5 widget-services text-center-xs">
                    
					
				</div>
                
                
                	<div class="col-xs-12 col-sm-12 col-md-4 widget-about text-center-xs mb-30-xs">
					
					<div class="widget-about-info">
						<h5 class="text-capitalize text-white">معلومات عنا</h5>
						<p class="mb-0">
							الأكل الجيد شركة سعودية مقرها مدينة جدة 
                تأسست عام 2012 م  شركة متخصصة في تجهيز البوفيهات للمناسبات الخاصة والعامة وتموين الشركات والمستشفيات والفنادق والوحدات السكنية  وتقديم خدمات الإعاشة  لشركات الحج والعمرة  .
                بالإضافة إلى خدمات التدريب وتجهيز  المطابخ وإعادة الهيكلة الداخلية مع فريق من الطهاء المتخصصين والمحترفين في هذا المجال وتقديم الشهادات الدولية لهم
.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Social bar
	============================================= -->
	<div class="widget-social">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mb-30-xs mb-30-sm">
					<div class="widget-social-info pull-right text-capitalize pull-none-xs mb-15-xs">
						<p class="mb-0">تايعنا <  br>
							علي السوشيل ميديا</p>
					</div>
					<div class="widget-social-icon pull-right text-right pull-none-xs">
						<a href="#">
							<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
						</a>
						<a href="#">
							<i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i>
						</a>
						<a href="#" >
							<i class="fa fa-twitter"></i><i class="fa fa-twitter"></i>
						</a>
					
					</div>
				</div>
				
			</div>
		</div>
	</div>

@endsection
