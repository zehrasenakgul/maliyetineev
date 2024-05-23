@extends('client.layouts.master')

@section('content')


<section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark position-relative"
    data-parallax-background-ratio="0.8" style="background-image: url('{{ url('uploads/' . $project->image) }}')">
    <div class=" h-100 position-relative">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [30, 0], &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeInOutSine&quot; }">
                    <!-- <div class="fs-80 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px">Crafto expand
                        business values.</div>
                    <div>
                        <span class="opacity-5 fs-20 w-70 md-w-85 mb-25px fw-300 d-inline-block">We are dedicated to
                            providing amazing business accounting services and client service.</span>
                    </div> -->
                    <!-- <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-yellow me-15px rounded-box">
                                    <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium"></i>
                                </div>
                                <div class="feature-box-content">
                                    <a href="#services"
                                        class="d-inline-block fs-19 text-white text-shadow-double-large">Explore
                                        services</a>
                                </div>
                            </div> -->
                </div>

            </div>
        </div>
    </div>


    </div>
</section>
<section id="form" class="about-area about-area-mid pt-120 pb-90" style="padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12"
                style="display: flex; align-items: center; justify-content: center;">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="feature-box mb-40">
                            <div class="feature-small-icon mb-35">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="feature-small-content">
                                <h3>On time Services</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="feature-box mt-40">
                            <div class="feature-small-icon mb-35">
                                <img src="img/icon/s-fea-icon-2.png" alt="">
                            </div>
                            <div class="feature-small-content">
                                <h3>Creative Solutions</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="feature-box mb-30">
                            <div class="feature-small-icon mb-35">
                                <img src="img/icon/s-fea-icon-3.png" alt="">
                            </div>
                            <div class="feature-small-content">
                                <h3>Strong Contacts</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="feature-box mt-40 mb-30">
                            <div class="feature-small-icon mb-35">
                                <img src="img/icon/s-fea-icon-4.png" alt="">
                            </div>
                            <div class="feature-small-content">
                                <h3>Expert Members</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-11">
                <div class="row row-cols-md-1 justify-content-center">
                    <div class="col-xl-10">
                        <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                            <div class="row">
                                <div class="col-9">
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">Size
                                        nasıl
                                        yardımcı olabiliriz?</h3>
                                </div>
                                <div class="col-3 text-end"
                                    data-anime="{ &quot;translateY&quot;: [30, 0], &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>
                                </div>
                            </div>

                            <form action="https://craftohtml.themezaa.com/email-templates/contact-form.php"
                                method="post" class="row contact-form-style-02">
                                <div class="col-md-6 mb-30px">
                                    <input class="input-name form-control required" type="text" name="name"
                                        placeholder="Ad soyad" />
                                </div>
                                <div class="col-md-6 mb-30px">
                                    <input class="form-control required" type="email" name="email"
                                        placeholder="E-mail adresiniz" />
                                </div>
                                <div class="col-md-6 mb-30px">
                                    <input class="form-control" type="tel" name="phone" placeholder="Telefon" />
                                </div>
                                <div class="col-md-6 mb-30px">
                                    <input class="form-control" type="text" name="subject" placeholder="Mesleğiniz" />
                                </div>
                                <div class="col-md-12 mb-30px">
                                    <textarea class="form-control" cols="40" rows="4" name="message"
                                        placeholder="Mesajınız"></textarea>
                                </div>
                                <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                    <p class="text-center text-md-start fs-15 lh-26">24 saat içerisinde dönüş
                                        sağlayacağız.
                                    </p>
                                </div>
                                <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                    <input type="hidden" name="redirect" value>
                                    <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow submit"
                                        type="submit" style="background: #0f75bc;">Gönder</button>
                                </div>
                                <div class="col-12">
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center mt-8">
                        <div class="col-md-auto text-center text-md-end sm-mb-20px">
                            <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Sosyal medya hesaplarımız </h6>
                        </div>
                        <div class="col-2 d-none d-lg-inline-block">
                            <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                        </div>

                        <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                            <ul class="large-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i><span></span></a>
                                </li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin"></i><span></span></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter"></i><span></span></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com/"
                                        target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section style="padding: 0 !important; ">
    <div class="container">
        <div class="row">
         <div class="col-md-12">
            {!! $project->description !!}
         </div>

        </div>
    </div>
</section>
<div class="section">
    <div class="container">
        <h3 style="text-align: center; font-weight: 700; color: #333;">Kat Planları</h3>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')">1+1</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">2+2</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">3+1</button>
        </div>

        <div id="London" class="tabcontent">
            <img src="images/duvarcerceve.png" alt="" style="width: 1220px; height: 350px;">
        </div>

        <div id="Paris" class="tabcontent">
            <img src="images/duvarcerceve.png" alt="" style="width: 1220px; height: 350px;">
        </div>

        <div id="Tokyo" class="tabcontent">
            <img src="images/duvarcerceve.png" alt="" style="width: 1220px; height: 350px;">
        </div>
    </div>
</div>

<section style=" padding-bottom: 80px; ">
    <div class="container">
        <h3 style="text-align: center; font-weight: 700; color: #333;">Konum</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3015.295945164073!2d29.17712307603554!3d40.909256521364604!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac554b56486c5%3A0x19df79713477599e!2sMaliyetine%20Ev!5e0!3m2!1str!2str!4v1715759633630!5m2!1str!2str"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<section style="padding: 0 !important; position: sticky; bottom: 0; z-index: 999;">
    <div style="background-color: #0f75bc; position: sticky; bottom: 0; padding: 20px 0px;">
        <div class="container">
            <a href="#form"
                style="color: white; font-weight: 900; font-size: 30px; align-items: center; margin: 0; justify-content: center; display: flex; padding: 0;">
                DETAYLI BİLGİ İÇİN TIKLAYINIZ
            </a>


        </div>
    </div>
</section>

@endsection


@section("css")


<style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: red;
            color: white;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: red;
            /* Arka plan rengini kırmızı yap */
            color: white;
            /* Yazı rengini beyaz yap */
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

@endsection