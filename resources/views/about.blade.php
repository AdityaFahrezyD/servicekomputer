<x-layout>
    <div class="mt-10 px-2 md:px-5 lg:px-20 mb-28">
        <h1 class="font-bold text-cyan-600 text-center text-4xl">About</h1>
        <div class="md:flex md:justify-between md:items-center mt-10">
            <div class="md:w-1/2 text-justify">
                <p class="md:w-80 lg:w-[40rem] text-lg font-medium">Fath Comp merupakan sebuah layanan servis komputer profesional yang menyediakan solusi cepat, handal, dan terjangkau untuk berbagai kebutuhan perangkat anda. Kami menangani laptop berupa instalasi perangkat lunak dengan standar tinggi, upgrade SSD dan RAM, pembersihan, perbaikan kompleks, dan lain-lain yang didukung oleh teknisi berpengalaman. Kepuasan pelanggan dan pelayanan yang cepat menjadi prioritas utama kami dalam setiap layanan.</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end mt-10 md:mt-0">
                <img src="{{ asset('gambar/g1.png') }}" alt="Image 1" class="rounded-3xl z-10 h-72 md:h-72 lg:h-96">
            </div>
        </div>
    </div>
    <div class="mt-10 md:px-5 lg:px-20 mb-28">
        <h1 class="font-bold text-cyan-600 text-center text-4xl">Visi & Misi</h1>
        <div class="flex justify-center mt-16 mb-20">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="border-4 shadow-gray-500 border-cyan-500 rounded-3xl h-60 w-80 md:h-72 md:w-[30rem] shadow-md mx-auto flex justify-center items-center px-5">
                    <div>
                        <p class="text-center text-cyan-500 text-2xl md:text-4xl font-bold">Visi</p>
                        <p class="text-justify text-base mt-5">Menjadi perusahaan layanan service terkemuka yang dikenal akan kualitas, kecepatan, dan kepercayaan dalam menyelesaikan setiap permasalahan laptop konsumen.</p>
                    </div>
                    
                </div>
                <div class="border-4 shadow-gray-500 border-cyan-500 rounded-3xl h-[35rem] w-80 md:h-[27rem] md:w-[30rem] shadow-md mt-10 lg:mt-0 flex justify-center items-center px-5">
                    <div>
                        <p class="text-center text-cyan-500 text-2xl md:text-4xl font-bold">Misi</p>
                        <ul class="mt-5 list-disc pl-5 space-y-2">
                            <li>
                                Memberikan layanan servis komputer yang berkualitas dengan waktu pengerjaan yang efisien.
                            </li>
                            <li>
                                Mengutamakan kepuasan pelanggan melalui pendekatan profesional dan ramah.
                            </li>
                            <li>
                                Selalu mengikuti perkembangan teknologi terbaru untuk memastikan solusi yang ditawarkan tepat dan relevan.
                            </li>
                            <li>
                                Membangun kepercayaan pelanggan dengan transparansi harga dan layanan.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>