@extends('client.layouts.masterProjectDetail')

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
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-xl-6 col-lg-12 col-md-12"
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
            </div> --}}
            <div class="container col-xl-7 col-lg-6 col-md-6 mb-4">
                <div class="row card-container">
                    @foreach(json_decode($project->details) as $detail)
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                            <div class="feature-box">
                                <div class="feature-small-icon">
                                    <i class="fas fa-star"></i> <!-- İkonu buraya yerleştirebilirsiniz -->
                                </div>
                                <div class="feature-small-content">
                                    <h3>{{ $detail->title }}</h3>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($detail->description), 250, '...') }}</p>
                                    {{-- <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{!! $detail->description !!}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-xl-5 col-lg-12 col-md-11">
                <div class="row row-cols-md-1 justify-content-center">
                    <div class="col-xl-10">
                        <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                            <div class="row">
                                <div class="col-9">
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">Size nasıl yardımcı olabiliriz?</h3>
                                </div>
                                <div class="col-3 text-end"
                                    data-anime="{ &quot;translateY&quot;: [30, 0], &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>
                                </div>
                            </div>

                            <form action="{{ route('contact.form.show') }}" method="POST"
                            class="row contact-form-style-02">
                            @csrf
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
                                <input class="form-control" type="text" name="job" placeholder="Mesleğiniz" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <textarea class="form-control" cols="40" rows="4" name="message"
                                    placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                <p class="text-center text-md-start fs-15 lh-26">24 saat içerisinde dönüş sağlayacağız.
                                </p>
                            </div>
                            <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                <input type="hidden" name="redirect" value>
                                <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow"style="background: #0f75bc !important"
                                    type="submit">Gönder</button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>

                        </div>
                    </div>
                    {{-- <div class="row align-items-center justify-content-center mt-8">
                        <div class="col-md-auto text-center text-md-end sm-mb-20px">
                            <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Sosyal medya hesaplarımız </h6>
                        </div>
                        <div class="col-2 d-none d-lg-inline-block">
                            <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                        </div>

                        <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                            <ul class="large-icon dark">
                                @foreach ($socialMediaIcons as $socialMediaIcon)
                                
                               
                                <li class="m-0"><a class="facebook" href="{{$socialMediaIcon->url}}" target="_blank"><i
                                            class="fa-brands {{$socialMediaIcon->icon_class}}"></i><span></span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</section>

    {{-- <section style="padding: 0 !important; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">       
                    <h4 style="margin:0;color:#333;" >{{$project->project_title}}</h3>
                    <p style="font-size:12px;">{!! $project->description !!}</p>          
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="baslikh4">Maliyetine ev sahibi olma sistemi</h4>
                    <h5 class="baslikh5">Bu gün arsa tapunuzu alın yarın maliyetine eviniz olsun</h5>
                    <p class="ptag">Maliyetine ev,Türkiye’de ilk hemen tapu teslim %100 güvenli ve garantili maliyetine ev sahibi olmanızı sağlayan tek şirkettir.</p>
                </div>
            </div>   
        </div>
    {{-- </section> --}}
    
            @if(count($project->galleries) > 0)
                <div class="section">
                    <div class="container-fluid">
                        <h3 style="text-align: center; font-weight: 700; color: #333; margin-top: 100px; ">Proje Görselleri</h3>
                        <swiper-container class="mySwiper" navigation="true">
                            @foreach ($project->galleries as $galery)   
                                <swiper-slide> <img src="{{ url('uploads/' . $galery->image) }}" alt="" style="width: 100%; height: 350px;"></swiper-slide>
                            @endforeach
                        </swiper-container>
                    </div>
                </div>
                @endif

                @if (!empty($floorPlans) && count($floorPlans) > 0)
                    <div class="section p-5">
                        <div class="container mt-5">
                            <h3 style="text-align: center; font-weight: 700; color: #333;">{{ $project->name }} Kat Planları</h3>
                            <div class="tab">
                                @foreach ($floorPlans as $index => $floorPlan)
                                    <button class="tablinks" data-tab="tab{{ $index }}">{{ $floorPlan->floor_plan }}</button>
                                @endforeach
                            </div>
                    
                            @foreach ($floorPlans as $index => $floorPlan)
                                <div id="tab{{ $index }}" class="tabcontent">
                                    <img src="{{ asset('kat_plani/' . $floorPlan->image_path) }}" alt="{{ $floorPlan->floor_plan }}" style="width: 1220px; height: 350px;">
                                </div>
                            @endforeach
                        </div>
                    </div>
            @endif
<section style=" padding-bottom: 80px; ">
      <!-- Konum -->
      <div class="container">
        <h3 style="text-align: center; font-weight: 700; color: #333;">Konum</h3>
        <iframe src="{{$project->konum}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="baslikh4">Sıkça Sorulan Sorular</h4>
        </div>  
    </div>
</div>
<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">MALİYETİNE EV İLE NASIL EV SAHİBİ OLUNUR ?</span>
        <p class="answerP">Maliyetine Ev ile plan ve projesi belirlenmiş konut , daire veya villalardan dilediğinize önce toprak sonra daire tapunuzu anında alırsınız.</p>
    </div>
</div>

<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">Maliyeti Ev Sahibi Olma Sistemi Avantajları Nelerdir ?</span>
        <p class="answerP">Maliyetine Ev şirketi sizleri %100 güvenli ve garantili bir sistem sunarak sizleri maliyetine ev sahibi yapar. Maliyetine Ev sahibi olmak herkesin hakkı.</p>
    </div>
</div>


<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">İNŞAATLAR NE ZAMAN BAŞLAR ?</span>
        <p class="answerP">İnşaat, imzalar atıldıktan 3 ay sonra başlanıp 12 ay bitirme garantilidir.</p>
    </div>
</div>


<div class="sorularDiv" style="margin-bottom: 30px;">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">MALİYETİNE EV İLE NASIL EV SAHİBİ OLUNUR ?</span>
        <p class="answerP">Maliyetine Ev ile plan ve projesi belirlenmiş konut , daire veya villalardan dilediğinize önce toprak sonra daire tapunuzu anında alırsınız.</p>
    </div>
</div>




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
    .answerP{
        color: #000;
        font-size: 18px;
        font-weight: bold;
        font-family: cerebri-sans-semibold;
        /* letter-spacing: 1.3px; */
        line-height: 1.5;
        margin: 5px 34px;
    }
    .questionHeader{
        color: #043a74;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        font-size: 24px;
    }

    .icon{
        font-size: 24px;
        margin-right: 15px;
    }

    .sorularDiv{
        margin: 5px 90px;
        padding: 26px 40px;
    }

    .baslikh4{
        color: #043a74;
        text-align: center;
        font-size: 50px;
        font-family: 'Roboto', sans-serif;
        /* letter-spacing: 1px; */
        font-weight: bold;
    }
    .baslikh5{
        color: #56adcf;
        text-align: center;
        font-size: 65px;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 1px;
        font-weight: bold;
        line-height: 4.7rem !important;
    }
    .ptag{
        text-align: center;
        color: #000;
        font-size: 18px;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
        /* letter-spacing: 1.3px; */
        max-width: 700px; /* Metnin iki satıra sığmasını sağlamak için genişlik ayarlaması */
        line-height: 1.5;
        margin: 0 auto;
    
    }
</style>

<style>
    .card-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }
    .feature-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 14px 28px rgba(0, 0, 0.3, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            padding: 30px;
            margin-right: 50px;
            height: 315px;
            width: 95%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden; /* Taşmayı gizlemek için eklendi */
        }
    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    }
    .feature-small-icon {
        font-size: 40px;
        color: #007bff;
    }
    .feature-small-content h3 {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        /* margin-bottom: 10px; */
    }
    .feature-small-content p {
        font-size: 16px;
        color: #666;
    }
</style>    

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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

@endsection
