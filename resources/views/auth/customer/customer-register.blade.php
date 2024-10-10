<x-layout-auth>
    <div class="font-montserrat">
        <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
          <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full">
            <div class="border border-gray-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto">
              <form method="POST" action="{{ route('customer.register') }}" class="space-y-4">
                @csrf
                <div class="mb-8">
                  <h3 class="text-gray-800 text-3xl font-extrabold">Register</h3>
                  <p class="text-gray-500 text-sm mt-4 leading-relaxed">Gabung dengan kami dan nikmati berbagai layanan yang kami tawarkan.</p>
                </div>
    
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Email</label>
                  <div class="relative flex items-center">
                    <input name="email" type="email" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-cyan-600" placeholder="Masukkan email" value="{{ old('email') }}" />
                  </div>
                </div>
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Nama</label>
                  <div class="relative flex items-center">
                    <input name="nama" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-cyan-600" placeholder="Masukkan nama" value="{{ old('nama') }}" />
                  </div>
                </div>
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Alamat</label>
                    <div class="relative flex items-center">
                      <input name="alamat" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-cyan-600" placeholder="Masukkan alamat" value="{{ old('alamat') }}" />
                    </div>
                </div>
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">No. Hp</label>
                    <div class="relative flex items-center">
                      <input name="hp" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-cyan-600" placeholder="Masukkan no. Hp" value="{{ old('hp') }}" />
                    </div>
                </div>
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Password</label>
                  <div class="relative flex items-center">
                    <input name="password" type="password" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-cyan-600" placeholder="Masukkan password" />
                  </div>
                </div>
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Konfirmasi Password</label>
                    <div class="relative flex items-center">
                      <input name="password_confirmation" type="password" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-cyan-600" placeholder="Masukkan password" />
                    </div>
                </div>
    
                <div class="!mt-8">
                  <button type="submit" class="w-full shadow-xl py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none">
                    Register
                  </button>
                </div>
    
                <p class="text-sm !mt-8 text-center text-gray-800">Sudah punya akun? <a href="{{ route('customer.login') }}" class="text-cyan-600 font-semibold hover:underline ml-1 whitespace-nowrap">Login</a></p>
              </form>
            </div>
            <div class="lg:h-[400px] md:h-[300px] max-md:mt-8">
              <img src="https://readymadeui.com/login-image.webp" class="w-full h-full max-md:w-4/5 mx-auto block object-cover" alt="Dining Experience" />
            </div>
          </div>
        </div>
      </div>
</x-layout-auth>