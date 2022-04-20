@extends('pages.layout')
  
@section('content')

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="/" class="scrollto"><img src="{{ asset('assets/img/imgMans/logo.png') }}" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#footer">تواصل معانا</a></li>
          <li><a class="nav-link scrollto" href="#services"> الخدمات</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن </a></li>
          <li><a class="nav-link scrollto active" href="#hero"> الرئيسية</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  <div id="social-sidebar" class="d-flex flex-column justify-content-center">
    <nav class="nav-menu">
      <ul>
        <li><a href="https://instagram.com/manasaty.ae?utm_medium=copy_link" target="_blank"><i
              class="bi bi-instagram"></i></a></li>
        <li><a href="#"><i class="bi bi-twitter"></i> </a></li>
        <li><a href="https://m.facebook.com/manasaty2021/" target="_blank"><i class="bi bi-facebook"></i> </a></li>
        <li><a href="https://www.linkedin.com/in/manasaty-ae-b7bb22207/" target="_blank"><i class="bi bi-linkedin"></i>
          </a></li>
      </ul>
    </nav>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
  </div>
  <!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <canvas id="canvas1"></canvas>

    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">منصتي<br><span>للخدمات </span>الرقمية </h1>
      <a href="{{ asset('assets/Video/1.mp4') }}" class="glightbox play-btn mb-4"></a>
      <a href="#about" class="about-btn scrollto"> نحو الرقمية </a>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row text-center">
          <div class="col-lg-12 text-center">
            <h2>من نحن</h2>
            <audio autoplay loop>
              <source src="{{ asset('assets/Audio/Manasty.mp3') }}" type="audio/wav" />
            </audio>
            <!-- <embed name="lostmojo" src="assets/Audio/Manasty.mp3"  width="150" height="90" loop="false" autostart="false"> -->
            <p>
              مواكبة للتوجه الحكومي الرقمي الذي يهدف الى تعزيز مفهوم إسعاد المتعاملين وتطوير الخدمات الرقمية، تأسست شركة
              منصتي لخدمات الأعمال على يد فريق عمل يحظى بالخبرة التي امتدت لسنوات عديدة في مجال إسعاد المتعاملين لتصبح
              الأولى في تبني مفهوم التحول الرقمي من شركات القطاع الخاص في إمارة أبو ظبي.
              تهدف شركة منصتي لخدمات الأعمال الى توفير تجربة فريدة من نوعها لإنجاز المعاملات الحكومية عن بعد لكافة فئات
              المجتمع وتأتي فئة أصحاب الهمم وكبار المواطنين أحد أهم الأولويات بمبادرة من القطاع الخاص للوقوف على
              احتياجاتهم
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

        <!-- =======  Services Section ======= -->
     <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>الخدمات</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 d-flex justify-content-end">
            <img class="img-services-logo" src="{{ asset('assets/img/imgMans/manstyAlrg-removebg-preview.png') }}" alt="" srcset="">
          </div>
          <div class="col-lg-6">
            <h4 class="section-h4"> منصاتكم الرقمية</h4>
            <p class="section-p">
              خدماتنا متوفرة على مدار الساعة و طيلة أيام الأسبوع لتلبية كافة طلباتكم بكل سرعة و يسر عبر جميع قنواتنا
            </p>
          </div>
        </div>
        <!-- ======= Gallery Section ======= -->
        <div id="gallery">
          <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات تم </span>
                </div>
                  <img src="{{ asset('assets/img/services/control-center.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات الهوية و الجنسية
                  </span>
                </div>
                  <img src="{{ asset('assets/img/services/passport.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات تدبير </span>
                </div>
                  <img src="{{ asset('assets/img/services/planning.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات تسهيل </span>
                </div>
                  <img
                    src="{{ asset('assets/img/services/click.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span> منصة خدمات الشرطة
                  </span>
                </div>
                <img
                    src="{{ asset('assets/img/services/police.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات الصحة
                  </span>
                </div>
                  <img
                    src="{{ asset('assets/img/services/healthcare.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات المحاكم و كاتب العدل
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/balance.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات البلديات
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/car-service.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span> منصة خدمات الشركات
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/company.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span> منصة خدمات الضرايب و الحسابات
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/budget.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات الاستشارات الإدارية
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/planning.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات الاستشارات القانونية
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/document.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات التدريب المهني
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/learn.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span> خدمات تنمية المجتمع و أصحاب الهمم
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/social-care.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات التأشيرات السياحية
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/passport.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات التعليم
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/presentation.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات التصميم الجرافيكي
                  </span>
                </div><img
                    src="{{ asset('assets/img/services/web.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات تصميم مواقع الويب</span>
                </div><img
                    src="{{ asset('assets/img/services/coding.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات اّمر </span>
                </div><img
                    src="{{ asset('assets/img/services/labor.png') }}" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <div class="swiper-slide-head">
                  <span>منصة خدمات التأمين </span>
                </div><img
                    src="{{ asset('assets/img/services/user.png') }}" class="img-fluid" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
        <!-- End Gallery Section -->
        <div class="social d-flex justify-content-center">
          <button type="button" class="btn btn-outline-services mr-3" data-toggle="modal"
            data-target="#exampleModalCenter">
            <i class="bi bi-play"></i>
            تسجيل</button>
          <a href="http://wa.me/971564004009" target="_blank">
            <button type="button" class="btn btn-outline-services">
              <i class="bi bi-whatsapp"></i>
              للإستفسار</button>
          </a>
        </div>
      </div>
    </section>
    <!-- End  Services Section -->
  </main>

 <!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
    <div class="container">
        <div class="section-header">
        <h2 style="color: white;">إتصال بنا</h2>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6 footer-links">
            <h4 class="text-end"><span>الإشتراك في النشرة الإخبارية</span> </h4>
   
            <form action="{{ route('news.store') }}" method="POST">
                      @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                    <button type="submit" class="btn btn-light">
                    <i class="bi bi-arrow-left-short"></i>
                    </button>
                    
                        </span>
                    <input type="text" class="form-control" placeholder="البريد الإلكتروني" aria-label="email" name="email" 
                        aria-describedby="basic-addon1">
                </div>
            </form>
            <div class="social-links text-end">
            <a class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://m.facebook.com/manasaty2021/posts" target="_blank" class="facebook"><i
                class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/manasaty.ae?utm_medium=copy_link" target="_blank" class="instagram"><i
                class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/manasaty-ae-b7bb22207/" target="_blank" class="linkedin"><i
                class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 footer-links">
            <h4 class="text-center"><span>روابط سريعة</span> </h4>
            <ul style="text-align: right;">
            <li><a href="#">الرئيسية</a>
            </li>
            <li><a href="#about"> حول منصتي</a>
            </li>
            <li> <a href="#services">الخدمات</a>
            </li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
            <div class="header-foot">
            <h4>
                <span>مركز الاتصال </span>
                <p><i class="bi bi-telephone-forward-fill"></i> 600-5667-72</p>
                <p><i class="bi bi-whatsapp"></i> 0564004009</p>
            </h4>
            <i class="head-icon bi bi-telephone-outbound-fill"></i>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="copyright">
        &copy; 2022 جميع الحقوق محفوظة <strong>لمنصتى</strong>
    </div>
    <div class="credits">
        Designed by <a href="https://omeralis.github.io/portfolio/">OmEr Ali</a>
    </div>
    </div>
</footer>
<!-- End  Footer -->
  
  <!-- ======= Modal ======= -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title " id="exampleModalCenterTitle"> سجل بياناتك في منصتي ليصلك كل جديد</h5>
        </div>
        <form action="{{ route('registering.store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="text" class="form-control" id="inputPhone" name="name" placeholder=" الاسم" style="text-align: end;"><br>
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="رقم الهاتف" style="text-align: end;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-modal" data-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-modal">حفظ</button>
        </div>
        </form>

        @if(session('success_message'))
          <div class="alert alert-success">
            {{session('success_message')}}
         </div>
        @endif
      </div>
    </div>
  </div>
  <!-- ======= End Modal ======= -->
  @include('sweetalert::alert')

@endsection


