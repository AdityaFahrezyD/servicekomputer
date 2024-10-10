<x-layout>
    <div class="md:flex md:items-center md:justify-between h-[30rem] lg:px-32 lg:mt-16">
        <div class="text-left lg:relative md:text-left w-80 md:w-96 lg:w-[35rem]">
            <h1 class="pt-16 md:pt-0 font-bold text-xl md:text-2xl lg:text-4xl mb-4 text-center md:text-left">Solusi Cepat Dan Terpercaya Untuk Masalah <span class="text-cyan-500">Laptop Anda</span></h1>
            <div class="flex justify-center md:justify-normal">
                <p class="text-center md:text-left w-80 md:w-96 lg:w-[30rem]">Kami menyediakan layanan perbaikan laptop profesional dengan kualitas terbaik. Apapun masalahnya, tim teknisi kami siap membantu</p>
            </div>
            
            <div class="flex justify-center md:flex-none md:justify-normal mt-4 md:mt-8">
                <a href="#" class="btn btn-ghost px-6 py-2 text-cyan-500 text-xl rounded-md hover:bg-cyan-600  hover:text-white mt-4 z-20 border-2 border-cyan-500 hover:border-cyan-600">Whatsapp</a>
                <a href="#" class="btn btn-ghost px-6 py-2 bg-cyan-500 text-white text-xl rounded-md hover:bg-cyan-600 mt-4 z-20 ml-2">Booking</a>
            </div>
        </div>
        <div class="flex justify-center mt-10 md:mt-0 ">
            <div class="overflow-hidden">
                <div class=" flex justify-end mb-2 md:mb-4">
                    <img src="{{ asset('gambar/g2.png') }}" alt="Image 2" class="rounded-3xl z-0 h-32 md:h-36 lg:h-52 object-cover">
                </div>
                <img src="{{ asset('gambar/g3.png') }}" alt="Image 3" class="rounded-3xl z-10 h-32 md:h-36 lg:h-52 object-cover">
            </div>
            <img src="{{ asset('gambar/g1.png') }}" alt="Image 1" class="rounded-3xl z-10 relative top-20 ml-2 md:ml-4 h-32 md:h-36 lg:h-52">
        </div>
    </div>

    <div class="mt-48 md:mt-10 lg:mt-32">
        <h1 class="font-bold text-cyan-600 text-center text-4xl">About</h1>
        <div class="md:mt-20 mt-12 md:grid md:grid-cols-2 md:items-center lg:mx-20 md:gap-7">
            <div class="flex justify-center">
                <img src="{{ asset('gambar/g4.png') }}" alt="Image 4" class="h-52 md:h-52 lg:h-80">
            </div>
            <div class="mt-10 md:mt-0">
                <p class="text-center md:w-80 md:text-justify lg:w-[35rem]">
                    Fath Comp merupakan sebuah layanan servis komputer profesional yang menyediakan solusi cepat, handal, dan terjangkau untuk berbagai kebutuhan anda. Kami melayani berbagai servis laptop, seperti instalasi perangkat lunak, upgrade ssd dan ram, dan lain-lain.
                </p>
                <div class="flex justify-center md:flex-none md:justify-normal">
                    <a href="#" class="btn btn-ghost px-6 py-2 bg-cyan-500 text-white text-xl rounded-md hover:bg-cyan-600 mt-4 z-20 ml-2 lg:mt-10 relative right-1 md:right-2">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-20 lg:mt-32 md:flex md:justify-between md:items-start md:mx-10 lg:mx-20">
        <div>
            <h1 class="font-bold text-cyan-600 text-center text-4xl md:hidden mb-10">Services</h1>
            <div class="lg:grid lg:grid-cols-3 lg:gap-7">
                <div class="border-4 border-cyan-500 rounded-3xl h-96 w-60 shadow-md shadow-slate-300 mx-auto p-2">
                    <div class=" flex justify-center mb-4 h-56 overflow-hidden">
                        <img src="{{ asset('gambar/g3.png') }}" alt="Image 2" class="rounded-2xl z-0 h-full w-full object-cover">
                    </div>
                    <p class="mt-5 text-lg font-normal">Ganti SSD</p>
                    <p class="mt-2 text-2xl font-semibold">Rp 500.000</p>
                    <p class="mt-1 text-base font-medium"><span>2</span> hari</p>
                </div>
                <div class="border-4 border-cyan-500 rounded-3xl h-96 w-60 shadow-md shadow-slate-300 hidden lg:block p-2">
                    <div class=" flex justify-center mb-4 h-56 overflow-hidden">
                        <img src="{{ asset('gambar/g3.png') }}" alt="Image 2" class="rounded-2xl z-0 h-full w-full object-cover">
                    </div>
                    <p class="mt-5 text-lg font-normal">Ganti SSD</p>
                    <p class="mt-2 text-2xl font-semibold">Rp 500.000</p>
                    <p class="mt-1 text-base font-medium"><span>2</span> hari</p>
                </div>
                <div class="border-4 border-cyan-500 rounded-3xl h-96 w-60 shadow-md shadow-slate-300 hidden lg:block p-2">
                    <div class=" flex justify-center mb-4 h-56 overflow-hidden">
                        <img src="{{ asset('gambar/g3.png') }}" alt="Image 2" class="rounded-2xl z-0 h-full w-full object-cover">
                    </div>
                    <p class="mt-5 text-lg font-normal">Ganti SSD</p>
                    <p class="mt-2 text-2xl font-semibold">Rp 500.000</p>
                    <p class="mt-1 text-base font-medium"><span>2</span> hari</p>
                </div>
            </div>
            <div class="flex justify-center mt-5 lg:mt-0">
                <a href="/service" class="btn btn-ghost px-6 py-2 bg-cyan-500 text-white text-xl rounded-md hover:bg-cyan-600 mt-4 z-20 ml-2 lg:mt-10 relative right-1 md:right-2">Selengkapnya</a>
            </div>
        </div>
        <div class="lg:relative md:ml-8 lg:left-3">
            <h1 class="font-bold text-cyan-600 text-4xl text-center md:text-left mb-6 mt-10 md:mt-0 hidden md:block">Services</h1>
            <p class="text-center mt-10 md:mt-0 md:text-justify md:w-96">Kami menyediakan layanan perbaikan laptop <br class="hidden lg:block"> profesional dengan kualitas terbaik. Apapun masalahnya, tim teknisi kami siap membantu, dan kepuasan pelanggan dan pelayanan yancepat menjadi prioritas utama kami dalam setiap layanan.</p>
        </div>
    </div>

    <div class="mt-20 md:mt-20 lg:mt-32">
        <h1 class="font-bold text-cyan-600 text-center text-4xl">Review</h1>
        <div class="flex justify-center mt-20">
            <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-5">
                <div class="border-4 border-cyan-500 rounded-2xl h-60 w-80 shadow-md mx-auto p-4">
                    <div class="flex justify-between">
                        <p class="font-semibold text-base mb-2">2024-10-08</p>
                        <p class="font-semibold text-3xl text-cyan-500"><span>4</span>/5</p>
                    </div>
                    <p class="font-semibold text-lg mb-2 text-cyan-500">Budi</p>
                    <p class="text-base text-container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores fugit veniam hic nisi labore excepturi saepe obcaecati delectus aliquid explicabo iure fuga velit voluptatum, animi architecto harum atque distinctio nostrum.</p>
                </div>
                <div class="border-4 border-cyan-500 rounded-2xl h-60 w-80 shadow-md hidden md:block p-4">
                    <div class="flex justify-between">
                        <p class="font-semibold text-base mb-2">2024-10-08</p>
                        <p class="font-semibold text-3xl text-cyan-500"><span>4</span>/5</p>
                    </div>
                    <p class="font-semibold text-lg mb-2 text-cyan-500">Budi</p>
                    <p class="text-base text-container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores fugit veniam hic nisi labore excepturi saepe obcaecati delectus aliquid explicabo iure fuga velit voluptatum, animi architecto harum atque distinctio nostrum.</p>
                </div>
                <div class="border-4 border-cyan-500 rounded-2xl h-60 w-80 shadow-md hidden lg:block p-4">
                    <div class="flex justify-between">
                        <p class="font-semibold text-base mb-2">2024-10-08</p>
                        <p class="font-semibold text-3xl text-cyan-500"><span>4</span>/5</p>
                    </div>
                    <p class="font-semibold text-lg mb-2 text-cyan-500">Budi</p>
                    <p class="text-base text-container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores fugit veniam hic nisi labore excepturi saepe obcaecati delectus aliquid explicabo iure fuga velit voluptatum, animi architecto harum atque distinctio nostrum.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-20 md:mt-20 lg:mt-32 mb-10">
        <h1 class="font-bold text-cyan-600 text-center text-4xl">Kontak Kami</h1>
        <div class="flex justify-center mt-16 mb-20">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="border-4 shadow-gray-500 border-cyan-500 rounded-3xl h-52 w-80 md:h-72 md:w-[30rem] shadow-md mx-auto flex justify-center items-center">
                    <div>
                        <p class="text-center text-cyan-500 text-2xl md:text-4xl font-bold">Mau tanya dulu?<br>Hubungi kami disini</p>
                        <div class="flex justify-center md:mt-7 lg:mt-0">
                            <a href="#" class="btn btn-ghost px-6 py-2 bg-cyan-500 text-white text-xl md:text-2xl rounded-lg hover:bg-cyan-600 mt-4 z-20 ml-2 lg:mt-10 relative right-2 h-12 w-52 md:h-16 md:w-64 font-medium">Whatsapp</a>
                        </div>
                    </div>
                    
                </div>
                <div class="border-4 shadow-gray-500 border-cyan-500 bg-cyan-500 rounded-3xl h-52 w-80 md:h-72 md:w-[30rem] shadow-md mt-10 lg:mt-0 flex justify-center items-center">
                    <div>
                        <p class="text-center text-white text-2xl md:text-4xl font-bold">Lokasi Kami</p>
                        <p class="text-center text-white text-lg md:text-2xl font-medium mt-4 md:mt-7">Jl. Raya Gringging Ruko<br>Sarwoaji Blok 1 & 2 Kecamatan<br>Grogol, Kediri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>