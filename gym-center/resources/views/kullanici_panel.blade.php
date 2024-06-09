<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>BassSpor</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css'>
</head>
<body>
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
      <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
          <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white" href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation">BassSpor Spor Salonları</a>
          <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <!-- Icon 1 -->
            <li class="flex items-center">
            <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#pablo">
                <i class="text-orange-500 fab fa-facebook text-lg leading-lg"></i>
                <span class="lg:hidden inline-block ml-2">Share</span>
            </a>
            </li>
            <!-- Icon 2 -->
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="text-orange-500 fab fa-twitter text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            <!-- Icon 3 -->
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="text-orange-500 fab fa-linkedin text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Profile</span></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Main Area -->
    <main>
      <!-- Hero -->
      <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 95vh">
        <div class="absolute top-0 w-full h-full bg-top bg-cover" style="background-image: url('{{asset('image.jpg')}}');
          "
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto" data-aos="fade-in">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div>
                <h1 class="text-white font-semibold text-5xl">
                  <span class="text-orange-500">Gücü</span> İliklerinde Hisset
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  BassSpor spor salonları zincirine hoş geldiniz. Limitleri
                  hedefliyorsan doğru yerdesin.<br>
                  Tıkla ve 12bin kişilik topluluğumuza sen de katıl!
                </p>
                <a href="#" class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-5 cursor-pointer">Detayları Öğren</a>
              </div>
            </div>
          </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px)">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>

      <!-- About Section -->
      <section id="about" class="relative py-20 bg-black text-white">
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4" data-aos="fade-right">
              <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1550345332-09e3ac987658?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"/>
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="fade-left">
              <div class="md:pr-12">
                <small class="text-orange-500">Salonlarımız Hakkında</small>
                <h3 class="text-4xl uppercase font-bold">Güvenli Vücut Geliştirme</h3>
                <p class="mt-4 text-lg leading-relaxed">
                  Sakatlanmaktan ve spor sonrası yoğun ağrılardan korkma!
                  Doğru ısınma hareketleri ve beslenme planları ile kısa
                  sürede sonuç elde et!
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-dumbbell fa-2x"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">
                          Güncel Spor Salonu Ekipmanları
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-hard-hat fa-2x"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">
                          Kauçuk ve Kaymaz Zemin
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-users fa-2x"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">Profesyonel Eğitmenler</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Trainers Section -->
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold uppercase">
                Bazı Eğitmenlerimiz
              </h2>
              <p class="text-lg leading-relaxed m-4">
                Eğitmenlerimiz hem tanınır yüzler hem de içten ve sıcak insanlardır.
                Onlarla tanışabilir, doğrudan hizmet alabilirsiniz!
              </p>
            </div>
          </div>
          <!-- Trainer Card Wrapper -->
          <div class="flex flex-wrap">
            <!-- Card 1 -->
            <div
              class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
              data-aos="flip-right"
            >
              <div class="px-6">
                <img alt="..." src="{{asset('ege.jpg')}}" class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px"/>
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Ege K</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    WAT Fitness Koçu
                  </p>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="w-full md:w-4/12 lg:mb-0 mb-12 px-4" data-aos="flip-right">
              <div class="px-6">
                <img alt="..." src="{{asset('cenk.jpg')}}" class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px"/>
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Cenk Hoca</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Amerika'da Fitness Koç
                  </p>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div
              class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
              data-aos="flip-right"
            >
              <div class="px-6">
                <img alt="..." src="{{asset('kadir.jpg')}}" class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Kadir Hoca</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    İzmit'ten Biri
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact Header Section -->
      <section class="pb-20 relative block bg-black text-white">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px)" >
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0" >
            <polygon points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 pb-20 pt-20">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white uppercase">
                Bizimle İletişime Geç
              </h2>
              <p class="text-lg leading-relaxed mt-4 mb-4">
                Detaylı bilgi almak, bayilik başvurusu, koçluk, size en yakın bayiye üyelik vb için iletişime geçin!
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form -->
      <section class="relative block py-24 lg:pt-0 bg-black">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300" data-aos="fade-up-right" >
                <div class="flex-auto p-5 lg:p-10 bg-orange-500 text-white">
                  <h4 class="text-2xl font-semibold">Üsttekilerle ilgileniyor musun?</h4>
                  <p class="leading-relaxed mt-1 mb-4">
                    Yalnızca mesajını gönder ve 24 saat içinde sana dönelim!
                  </p>
                <form action="{{route('messageChatHome.post')}}" method="post">
                @csrf
                    <input type="text" name="receiver_id" value="1" hidden>
                    <input type="text" name="sender_id" value="{{Auth::user()->id}}" hidden>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-xs font-bold mb-2" for="message" >Mesaj İçeriği (Yalnızca admin görebilir)</label>
                    <input type="text" name="message" style="color:black" rows="4" cols="80" class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Mesaj yazın..." >
                    </div>
                    <div class="text-center mt-6">
                        <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit" style="transition: all 0.15s ease 0s" >
                            Mesajı İlet
                        </button>
            </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px)"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Sosyal Medyalardan Bizi Takip Edin!</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Ayrıca bu platformlardan size 1-2 iş günü içerisinde dönüş yapıyoruz!
            </h5>
            <div class="mt-6">
              <button
                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-twitter text-orange-500"></i></button
              ><button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i
                  class="flex fab fa-facebook-square text-orange-500"
                ></i></button
              ><button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-linkedin text-orange-500"></i>
              </button>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div class="flex flex-wrap items-center md:justify-between justify-center" >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © Bass Spor - Mert Taban
            </div>
          </div>
        </div>
      </div>
    </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js'></script>
  <script  src="{{asset('home.js')}}"></script>
</body>
</html>
