@extends('layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
@auth
<section id="hero">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
      <div data-aos="zoom-out">
        <h1>Bersih, wangi dan memikat <span> hati</span></h1>
        <h2>Welcome To Zepatoe Shoes!</h2>
        <div class="text-center text-lg-start">
          <a href="/Service" class="btn-get-started scrollto">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 order-1 order-lg-2 zepatoe-card" data-aos="zoom-out" data-aos-delay="300">
      <img src="assets/img/zepatoe-card.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->


@else
<section id="hero">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
      <div data-aos="zoom-out">
        <h1>Bersih, wangi dan memikat <span> hati</span></h1>
        <h2>Welcome To Zepatoe Shoes!</h2>
        <div class="text-center text-lg-start">
          <a href="#pricing" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 order-1 order-lg-2 zepatoe-card" data-aos="zoom-out" data-aos-delay="300">
      <img src="assets/img/zepatoe-card.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->
@endauth

<main id="main">
        <!-- ======= Pricing Section ======= -->
    
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 class="text-center pt-2 pb-2">Services</h2> 
          <p  class="text-center pt-2 pb-2">Layanan Kami</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3 class="pt-2 pb-2 " >Standart Clean</h3>
              <img id="img-layanan" src="images/standart.png" alt="" style="height: 200px;width: 200px;">
              <br></br>
              <h4 ><sup>Rp.</sup>30.000<span> /Shoes</span></h4>
              <ul>
                <br>Canvas</br>
                <br>Polyester</br>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3 class="pt-2 pb-2">Deep Clean</h3>
              <img id="img-layanan" src="images/deep.png" alt="" style="height: 200px;width: 200px;">
              <br></br>
              <h4><sup>Rp.</sup>40.000<span> /Shoes</span></h4>
              <ul>
                <li>Leather</li>
                <li>Suede</li>
                <li>Nubac</li>

              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="300">
              <h3 class="pt-2 pb-2" >Premium Clean</h3>
              <img id="img-layanan" src="images/premium.png" alt="" style="height: 200px;width: 200px;">
              <br></br>
              <h4><sup>Rp.</sup>45.000<span> /Shoes</span></h4>
              <ul>
                <li></li>
                <li>All Material</li>
                <br></br>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced" class="bi bi-info-circle text-primary">Promo</span>
              <h3 class="pt-2 pb-2">Treatment</h3>
              <img id="img-layanan" src="images/weekend.png" alt="" style="height: 200px;width: 200px;">
              <br></br>
              <h4><sup>Rp.</sup>50.000<span> /Shoes</span></h4>
              <ul>
                <li>Unyellowing</li>
                <li>Special Treatment</li>
                <br><br>
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->
    
    
    <section section id="about" class="about">
    <div class="container pb-5">
        
 
        <div class="section-title" data-aos="fade-up" >
          <h2 class="text-center pt-2 pb-2">About </h2>
          <p class="text-center pt-2 pb-2">Zepatoe Shoes</p>
        </div>

        <p class="text-center pt-2 pb-2" id="desc-carakerja">Zepatoe didirakan oleh 6 mahasiswa lulusan Sistem Informasi yang mempunyai motivasi tinggi untuk membuat perubahan disekitarnya, berharap inovasi yang dibuat dapat membantu orang banyak.
        </p>


        <div class="section-title" data-aos="fade-up" >
          <p class="text-center pt-2 pb-2">Bagaimana Cara kami bekerja</p>
        </div>

        <p class="text-center pt-2 pb-2" id="desc-carakerja">Simpan uang dan waktu, dengan gratis jemput di rumah atau
            kantor anda
        </p>
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/orderbaru.png" alt="" style="height: 200px;width: 200px;">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja"><b>Order</b> - </span>Choose
                    our<br>service then order</p>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/pickupbaru.png" alt="" style="height: 200px;width: 200px;">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja"><b>We Pickup</b> - </span>The
                    driver<br>picks up your shoes</p>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/deliverbaru.png" alt="" style="height: 200px;width: 200px;">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja"><b>We Deliver</b> - </span>Your
                    shoes are<br>finished, ready to wear
                </p>
            </div>
        </div>
    </div>
</section>    
    @auth
    @else
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Rizqan Aditama</h3>
                <h4>Ketua Himpunan Mahasiswa Private Village Cikoneng</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Alhamdulillah sejak adanya laundry sepatu dengan pelayanan secara online dan bisa antar jemput sekarang saya tidak perlu jauh-jauh jalan kaki dari Cikoneng ke Telkom hanya untuk mencuci sepatu. Sekali telfon, urusan sepatu kelar.Mantap, kasih bintang 5 bro!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Geldisen Afrananta Sitohang </h3>
                <h4>Ketua Playboy Indonesia</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Puji tuhan sepatu saya kinclong sejak memakai jasa cuci sepatu di Zeopato!Saya semakin terlihat mempesona dari kepala hingga kaki di mata semua wanita Indonesia. Thank you all!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Amira Jauhara Diffa </h3>
                <h4>Pengusaha Cabe Rawit Tangerang</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Syukron kasiron Zepatoe. Telah mencuci sepatu-sepatu mahal saya dengan pelayanan yang sangat detail, bersih, dan mengkilap. Dengan adanya pelayanan bintang 5 dari Zepatoe ini, pencucian sepatu saya gampang, aman dan melebihi ekspektasi. Sekali lagi terimakasih Zepatoe!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Daffi Daulay</h3>
                <h4>Pendaki Gunung Medan </h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Bintang 5 untuk pelayanan Zepatoe. Sepatu saya yang dicuci disini selalu bersih dan hasil cuciannya memuaskan sekali. Sudah pasti langganan terus sih!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Mubeth Praditya</h3>
                <h4>Kolektor Album Kpop</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Padahal saya punya jenis sepatu yang banyak sekali dan susah di treatment, tapi ternyata di Zepatoe jenis sepatu apapun bisa ditreatment dengan sangat baik dan bersih. Keren banget, jadi ga takut lagi mau beli sepatu dari Korea karena bisa dicuci di Zepatoe. Aman, bersih wangi berseri seperti indahnya paras Ryujin!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" >

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>YADI NUGRAHA</h4>
                <span>Web Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>TIARA HATI GIWANGKARA</h4>
                <span>UI/UX Designer</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>SHAZKIA SEPTIAWENI</h4>
                <span>System Analyst</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>YUNUS ARDIANSYAH</h4>
                <span>Data Engineer</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-5.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>GELDISEN ALFRANANTA</h4>
                <span>UX Researcher</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-6.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>M LUKMAN BAHRUL HIKAM</h4>
                <span>Project Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->
`   @endauth




  </main><!-- End #main -->