@extends('layouts.admin')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h2>من نحن ؟</h2>
            <h4>الأكل الجيد شركة سعودية مقرها مدينة جدة 
                تأسست عام 2012 م  شركة متخصصة في تجهيز البوفيهات للمناسبات الخاصة والعامة وتموين الشركات والمستشفيات والفنادق والوحدات السكنية  وتقديم خدمات الإعاشة  لشركات الحج والعمرة  .
                بالإضافة إلى خدمات التدريب وتجهيز  المطابخ وإعادة الهيكلة الداخلية مع فريق من الطهاء المتخصصين والمحترفين في هذا المجال وتقديم الشهادات الدولية لهم</h4>
            
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/food-about.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>ما يميزنا</h2>
         
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>معاييرنا</h4>
                  <p>تقدم جود فود خدمات مميزة في تحضير وجبات غذائية 
                    مطهية وطازجة على مدار الساعة
                    تلك الوجبات تكون معدة في مطبخنا المعتمد على أيدي فريق مختص ومؤهل</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>مهمتنا :</h4>
                  <p>تقديم حلول تمونية متميزة وخدمات إعاشة مساندة بطريقة
                    فعالة ومتكاملة مصمة بإتقان حسب إحتياج كل عميل
                    مع تطبيق أعلى معايير الجودة والسلامة</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>رؤيتنا :</h4>
                  <p>أن نكون من الشركات الرائدة في مجال التموين 
                    الصناعي وخدمات الإعاشة في الشرق الأوسط</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>قيمنا :</h4>
                  <p>رضا عملائنا هو هدفنا الأول وتلبية جميع 
                    إحتياجاتهم ومتطلباتهم .
                    الالتزام بالجدية  والصدق والنزاهة في إنجاز أعمالنا .</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>أجود المكونات </h4>
                  <p>تقديم وجبات مجهزة من أجود المكونات الغذائية</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>السرعة والدقة</h4>
                  <p>تسليم الوجبات في الأوقات المتفق عليها دون أدنى تأخير</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-id-card"></i>
                    <h4>الأكل الصحي</h4>
                    <p>ضمان حصول المستفيدين على الطاقة من خلال تناول غذاء صحي ومفيد</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-id-card"></i>
                    <h4>المعايير والمواصفات</h4>
                    <p>نستخدم أرقى المعايير وأجود المواصفات
                        لأن ضيوفكم دوماً يستحقون الأفضل
                        والأرقى والأجود</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-id-card"></i>
                    <h4>الخبرة والابتكار</h4>
                    <p>خبرة متأصلة مروراً بخدمات البوفيه المفتوح الشامل
                        حيث سيستمتع ضيوفكم بالمذاق الفريد المبتكر
                        والمقدم إليكم من خبراء الأكل الجيد</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-id-card"></i>
                    <h4>مستعدون لتلبية طلباتكم</h4>
                    <p>استعداد تام  لتلبية كافة المناسبات الراقية
                        والمؤتمرات الهامة والندوات وحفلات الزواج
                        وحفلات التخرج والتكريم والشركات والحفلات
                        الخاصة الفاخرة والفنادق وشركات الحج والعمرة</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/features.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="service" class="service">
      <div class="container">

        <div class="row content ">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>خدماتنا</h3>
            <p class="">
              القطاعات التي نخدمها 
            </p>
            <ul>
              <li><i class="bi bi-check"></i> الشركات</li>
              <li><i class="bi bi-check"></i>الفنادق</li>
              <li><i class="bi bi-check"></i> البنوك</li>
              <li><i class="bi bi-check"></i> الإستراحات</li>
              <li><i class="bi bi-check"></i> المستشفيات</li>
              
              <li><i class="bi bi-check"></i> قاعات الأفراح</li>
              <li><i class="bi bi-check"></i> الدوائر الحكومية</li>
              <li><i class="bi bi-check"></i>المناسبات الخاصة والعامة</li>
              
            </ul>
            
          </div>
        </div>
      </div>
    </section>
    <section id="details" class="details">
        <div class="container">
        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>خدمات التومين</h3>
            
            <ul>
                <li><i class="bi bi-check"></i>
                من المطبخ المركزي
                يتم إعداد وجبات مطبوخة ومعدة في مطبخنا المركزي يتم توصيلها للعميل في الوقت المتفق عليه من خلال فريق محترف ومتخصص وبإستخدام سيارات مجهزة بالمعدات  اللازمة للحفاظ على وصول الطعام بجودة وسخونة ترضي العملاء
                </li>
                <ul>
                    <li><i class="bi bi-check"></i>
                لا نمنع الزيارات المفاجئة للمطبخ المركزي في أي وقت كان بل بالعكس نحث عليها دون أخذ موعد مسبق  وذلك حتى يتأكد عملائنا بأنفسهم من جودة ونظافة المبطخ المركزي وعلى مدار الساعة .
                    </li>
                </ul>
          </div>
        </div>
        </div>
    </section>


    <section id="health" class="health">
        <div class="container">
        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>بيئة صحية</h3>
            <ul>
              <li><i class="bi bi-check"></i>يتم تقديم الوجبات والخدمات وفق معايير عالمية وبيئة صحية .</li>
              <li><i class="bi bi-check"></i> نقدم الأكل ذو الجودة العالية فقط والذي يتم تجهيزه بأيدي طباخين خبراء ومؤهلين في بيئة صحية آمنة وخالية من المشاكل الصحية والبكتيرية.</li>
              
            </ul>
            
           
          </div>
        </div>
        </div>
    </section>

    <section id="teams" class="teams">
    <div class="container">
        <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
              <img src="assets/img/details-2.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1"id="team" data-aos="fade-up">
              <h3>فريق العمل</h3>
              
              فريق جود فود هو فريق مدرب متعلم ويملك الخبرات والمهارات والإمكانيات<br> لإنتاج وتجهيز  وتوصيل الخدمات المطلوبة بكل سلاسة وسهولة وبما يرضي عملائنا الكرام  <br>

            </div>
         </div>
       

    </div>
    
    </section><!-- End Details Section -->

   

    

    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>الأسئلة الأكثر شيوعاً</h2>
          
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">السؤال الأول ؟ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  مثال نص مثال نص
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">السؤال الثاني ؟ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  مثال لنص مثال لنص 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">السؤال الثالث ؟ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                 مثال لنص مثال لنص 
                </p>
              </div>
            </li>

            

            

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
           
          <h2>إتصل بنا</h2>
          
          <p>يسعدنا التواصل معكم</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>العنوان</h4>
                <p>جدة - شارع الستين<br>المملكة العربية السعودية</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>اتصل بنا</h4>
                <p>0502050057<br>0502050057</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>البريد الالكتروني</h4>
                <p>good.food.sst@gmail.com<br>good.food.sst@gmail.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>ساعات العمل</h4>
                <p>الاحد - الخميس: 9AM to 5PM<br><p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action={{url('insert-contact')}} method="post" class="php-email-form" >
                @csrf
                <div class="form-group">
                <input placeholder="اسمك" type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="بريدك الالكتروني" type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="الموضوع" type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="الرسالة" class="form-control" name="message" rows="5" required></textarea>
              </div>
              
              <div class="text-center"><button type="submit">ارسال الرسالة</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
