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
            <button class="bg-[#0B3237] px-[40px] py-[12px] rounded-[13px] text-[#ffffff] border-[1px]" >Login</button>
            <button class="bg-[#ffffff] px-[40px] py-[12px] rounded-[13px] text-[#0B3237] border-[1px] border-[#0B3237]" >Register</button>

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
    <div class="h-screen px-[80px] flex flex-col items-center">
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
</body>
</html>