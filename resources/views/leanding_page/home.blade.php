<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rescom | Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="">
    <nav class="fixed bg-[#ffffff] flex justify-between items-center w-full h-[80px] px-[80px]">
        <img src="{{ asset("image/Logo.png") }}" alt="" class="h-[60px]">
        <div class="flex gap-[25px] items-center text-[17px]">
            <a href="">Tentang</a>
            <a href="">Struktur Organisasi</a>
            <a href="">Paket Kursus</a>
            <a href="">Gallery</a>
            <a href="/login"><button class="bg-[#0B3237] px-[40px] py-[9px] rounded-[13px] text-[#ffffff] border-[1px]" >Login</button></a>
            <button class="bg-[#ffffff] px-[40px] py-[9px] rounded-[13px] text-[#0B3237] border-[1px] border-[#0B3237]" >Register</button>

        </div>
        
    </nav>

    <div class="flex items-center pt-[80px] h-screen px-[80px]">
        <div class="w-1/2 flex flex-col gap-[10px]">

            <h2 class="text-[50px] text-[#0B3237] font-bold">Bukan Lulusan IT, Tapi pengen kerja IT?</h2>
            <h2 class="text-[35px] text-[#ffffff] font-bold bg-[#0B3237] w-[350px] h-[70px] flex justify-center items-center ">Rescom Solusinya</h2>
            <p class="text-[16px]">Merupakan lembaga Kursus dan Pelatihan Komputer yang telah berdiri di Jember
                sejak Maret 1996. Sempat vakum dan SAAT INI AKTIF memberikan pelayanan Kursus
                Komputer pada Masyarakat</p>
            <div>
                <button class="bg-[#0B3237] px-[40px] py-[11px] rounded-[13px] text-[#ffffff] border-[1px]">Beli Paket</button>
                <button class="bg-[#ffffff] px-[40px] py-[11px] rounded-[13px] text-[#0B3237] border-[1px] border-[#0B3237]">Kontak</button>
            </div>
        </div>
        <img src="{{ asset('image/tampilan1.png') }}" alt="" class="h-[500px]">
    </div>
    <div class="h-screen px-[80px] flex flex-col gap-[20px] items-center">
        <h1 class="text-center text-[30px] font-bold text-[#0B3237]">Program yang kami sediakan</h1>
        <p class="text-center w-[700px] mb-[60px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. lusto ab dicta, repudiandae voluptate ea, expedita eveniet eius velit tempora dolorum necessitatibus deserunt nihil in asperiores id</p>
        <div class="flex flex-wrap justify-center gap-6 ">
            <!-- Card 1 -->
            <div class="h-[450px] w-[300px] bg-white rounded-[30px] overflow-hidden transition-shadow duration-[700ms] hover:shadow-xl">
                <img src="{{ asset('image/tampilan1.png') }}" alt="Course Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-teal-700 text-center">ADMIN KANTOR/ MS Office</h2>
                    <span class="block mx-auto my-2 bg-red-500 text-white rounded-full text-xs px-3 py-1 text-center w-16">offline</span>
                    <p class="text-sm text-gray-600 text-center mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-xl font-bold text-gray-800 text-center mb-4">Rp. 375.000</p>
                    <button class="block mx-auto w-10/12 border-2 border-teal-600 text-teal-600 rounded-full py-2 hover:bg-teal-600 hover:text-white transition">
                        Info Selengkapnya
                    </button>
                </div>
            </div>
        
            <!-- Card 2 -->
            <div class="h-[450px] w-[300px] bg-white rounded-[30px] overflow-hidden transition-shadow duration-[700ms] hover:shadow-xl">
                <img src="{{ asset('image/tampilan1.png') }}" alt="Course Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-teal-700 text-center">DESIGN GRAFIS</h2>
                    <span class="block mx-auto my-2 bg-red-500 text-white rounded-full text-xs px-3 py-1 text-center w-16">offline</span>
                    <p class="text-sm text-gray-600 text-center mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-xl font-bold text-gray-800 text-center mb-4">Rp. 375.000</p>
                    <button class="block mx-auto w-10/12 border-2 border-teal-600 text-teal-600 rounded-full py-2 hover:bg-teal-600 hover:text-white transition">
                        Info Selengkapnya
                    </button>
                </div>
            </div>
        
            <!-- Card 3 -->
            <div class="h-[450px] w-[300px] bg-white rounded-[30px] overflow-hidden transition-shadow duration-[700ms] hover:shadow-xl">
                <img src="{{ asset('image/tampilan1.png') }}" alt="Course Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-teal-700 text-center">AUTOCAD</h2>
                    <span class="block mx-auto my-2 bg-red-500 text-white rounded-full text-xs px-3 py-1 text-center w-16">offline</span>
                    <p class="text-sm text-gray-600 text-center mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-xl font-bold text-gray-800 text-center mb-4">Rp. 375.000</p>
                    <button class="block mx-auto w-10/12 border-2 border-teal-600 text-teal-600 rounded-full py-2 hover:bg-teal-600 hover:text-white transition">
                        Info Selengkapnya
                    </button>
                </div>
            </div>
        
            <!-- Card 4 -->
            <div class="h-[450px] w-[300px] bg-white rounded-[30px] overflow-hidden transition-shadow duration-[700ms] hover:shadow-xl">
                <img src="{{ asset('image/tampilan1.png') }}" alt="Course Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-teal-700 text-center">PROGRAMING</h2>
                    <span class="block mx-auto my-2 bg-red-500 text-white rounded-full text-xs px-3 py-1 text-center w-16">offline</span>
                    <p class="text-sm text-gray-600 text-center mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-xl font-bold text-gray-800 text-center mb-4">Rp. 375.000</p>
                    <button class="block mx-auto w-10/12 border-2 border-teal-600 text-teal-600 rounded-full py-2 hover:bg-teal-600 hover:text-white transition">
                        Info Selengkapnya
                    </button>
                </div>
            </div>
        </div>
        
    </div>

    <div class=" px-[80px] flex flex-col gap-[20px]">
        <h1 class="text-center text-[30px] font-bold text-[#0B3237]">Kenapa Harus Rescom?</h1>
        <div class="flex justify-center">
        <p class="text-center w-[700px] mb-[60px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. lusto ab dicta, repudiandae voluptate ea, expedita eveniet eius velit tempora dolorum necessitatibus deserunt nihil in asperiores id</p>
    </div>
    
        <div class="flex flex-row items-center w-full ">
          <!-- Card 1 -->
          <div class=" flex flex-wrap w-[70%] gap-[40px]">
            <div class="flex items-start w-[450px]  ">
                <img src="{{ asset('image/tampilan3.png') }}" alt="Icon" class="w-[250px]" />
                <div>
                  <h2 class="text-2xl font-semibold text-gray-800">Kelas Semi-Privat</h2>
                  <p class="text-gray-600">Kami berupaya agar MAXIMAL 5 Peserta perkelas</p>
                </div>
              </div>
        
              <!-- Card 2 -->
              <div class="flex items-start w-[450px] ">
                <img src="{{ asset('image/tampilan3.png') }}" alt="Icon" class="w-[250px]" />
                <div>
                  <h2 class="text-2xl font-semibold text-gray-800">1 Komputer Tiap Peserta</h2>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
        
              <!-- Card 3 -->
              <div class="flex items-start w-[450px] ">
                <img src="{{ asset('image/tampilan3.png') }}" alt="Icon" class="w-[250px]" />
                <div>
                  <h2 class="text-2xl font-semibold text-gray-800">JUDUL KEUNGGULAN</h2>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </div>
        
              <!-- Card 4 -->
              <div class="flex items-start w-[450px] ">
                <img src="{{ asset('image/tampilan3.png') }}" alt="Icon" class="w-[250px]" />
                <div>
                  <h2 class="text-2xl font-semibold text-gray-800">JUDUL KEUNGGULAN</h2>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </div>
        </div>
        <div class="flex justify-center ">
          <img src="{{ asset('image/tampilan4.png') }}" alt="People" class="w-[400px]" />
        </div>
    </div>
    
        </div>

        <div class="bg-white p-10 rounded-lg shadow-md ">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">
              Lembaga kursus komputer resmi & legal di Jember
            </h2>
            <p class="text-gray-500 mb-8">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ab dicta, repudiandae voluptate ea, expedita eveniet eius velit tempora dolorum necessitatibus deserunt nihil in asperiores id.
            </p>
          
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-4">No Izin RESCOM</h3>
              <ul class="space-y-2">
                <li class="flex justify-between">
                  <span>1. Nomor Pokok Sekolah Nasional (NPSN)</span>
                  <span>: K9998870</span>
                </li>
                <li class="flex justify-between">
                  <span>2. Izin Dinas Pendidikan</span>
                  <span>: No. 503/5844/436.316/2018</span>
                </li>
                <li class="flex justify-between">
                  <span>3. Izin Operasional</span>
                  <span>: 503/A.1/LKP-P/009/35.09.325/2023</span>
                </li>
                <li class="flex justify-between">
                  <span>4. VIN Kementerian Ketenagakerjaan (Kemnaker)</span>
                  <span>: 2310350901</span>
                </li>
                <li class="flex justify-between">
                  <span>5. Surat Keterangan Pendirian</span>
                  <span>: 503/1207/436.316/2001</span>
                </li>
                <li class="flex justify-between">
                  <span>6. Nomor Induk Berusaha (NIB)</span>
                  <span>: 2408230147912</span>
                </li>
              </ul>
            </div>
          
            <div class="text-right">
              <button
                class="bg-gray-800 text-white px-6 py-2 rounded-md hover:bg-gray-900 transition">
                Selengkapnya
              </button>
            </div>
          </div>
          
    
        <!-- Image Section -->
        
      <!--Footer container-->
<footer
  class="flex flex-col items-center bg-zinc-50 text-center text-surface dark:bg-neutral-700 dark:text-white">
  

  <!-- Main container div: holds the entire content of the footer, including four sections (Rescom Jember, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-16 md:grid-cols-2 lg:grid-cols-4 px-[80px]">
      <!-- Rescom Jember section -->
      <div class="">
        <h6
          class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <span class="me-3 [&>svg]:h-4 [&>svg]:w-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
            </svg>
          </span>
          Rescom Jember
        </h6>
        <p>
          Here you can use rows and columns to organize your footer
          content. Lorem ipsum dolor sit amet, consectetur adipisicing
          elit.
        </p>
      </div>
      <!-- Products section -->
      
      <!-- Useful links section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Useful links
        </h6>
        <p class="mb-4">
          <a href="#!">Pricing</a>
        </p>
        <p class="mb-4">
          <a href="#!">Settings</a>
        </p>
        <p class="mb-4">
          <a href="#!">Orders</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>
      <!-- Contact section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
              <path
                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
          </span>
          New York, NY 10012, US
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
          </span>
          info@example.com
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                clip-rule="evenodd" />
            </svg>
          </span>
          + 01 234 567 88
        </p>
        <p class="flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                clip-rule="evenodd" />
            </svg>
          </span>
          + 01 234 567 89
        </p>
      </div>
    </div>
  </div>
  <div class="container px-6 pt-6">
    <!-- Social media icons container -->
    <div class="mb-6 flex justify-center space-x-2">
      <a
        href="#!"
        type="button"
        class="rounded-full bg-[#3b5998] p-3 uppercase leading-normal text-white shadow-dark-3 shadow-black/30 transition duration-150 ease-in-out hover:shadow-dark-1 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white"
        data-twe-ripple-init
        data-twe-ripple-color="light">
        <span class="[&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 320 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
          </svg>
        </span>
      </a>

      <a
        href="#!"
        type="button"
        class="rounded-full bg-[#55acee] p-3 uppercase leading-normal text-white shadow-dark-3 shadow-black/30 transition duration-150 ease-in-out hover:shadow-dark-1 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white"
        data-twe-ripple-init
        data-twe-ripple-color="light">
        <span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
          </svg>
        </span>
      </a>

      <a
        href="#!"
        type="button"
        class="rounded-full bg-[#dd4b39] p-3 uppercase leading-normal text-white shadow-dark-3 shadow-black/30 transition duration-150 ease-in-out hover:shadow-dark-1 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white"
        data-twe-ripple-init
        data-twe-ripple-color="light">
        <span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 488 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
          </svg>
        </span>
      </a>

      <a
        href="#!"
        type="button"
        class="rounded-full bg-[#ac2bac] p-3 uppercase leading-normal text-white shadow-dark-3 shadow-black/30 transition duration-150 ease-in-out hover:shadow-dark-1 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white"
        data-twe-ripple-init
        data-twe-ripple-color="light">
        <span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
          </svg>
        </span>
      </a>

      <a
        href="#!"
        type="button"
        class="rounded-full bg-[#0082ca] p-3 uppercase leading-normal text-white shadow-dark-3 shadow-black/30 transition duration-150 ease-in-out hover:shadow-dark-1 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white"
        data-twe-ripple-init
        data-twe-ripple-color="light">
        <span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
          </svg>
        </span>
      </a>

      <a
        href="#!"
        type="button"
        class="rounded-full bg-[#333333] p-3 uppercase leading-normal text-white shadow-dark-3 shadow-black/30 transition duration-150 ease-in-out hover:shadow-dark-1 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white"
        data-twe-ripple-init
        data-twe-ripple-color="light">
        <span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 496 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
          </svg>
        </span>
      </a>
    </div>
  </div>

  <!--Copyright section-->
  <div class="w-full bg-black/5 p-4 text-center">
    © 2023 Copyright:
    <a href="https://tw-elements.com/">Rescom Jember</a>
  </div>
</footer>
</body>
</html>