<nav class="flex-between w-full mb-16 pt-3">
    <a href="/" class="flex gap-2 flex-center">
        <img src="{{ asset('assets/images/logo.svg') }}" width="30" height="30" alt="">
        <p class="logo_text">Gip Sewa Mobil</p>
    </a>

    <div class="relative">
        {{-- <a href="" class="black_btn">Cari Mobil</a> --}}
        <input type="text" placeholder="Cari Mobil..." class="w-full p-2 rounded  focus:outline-black outline-5"
            id="searchmobil">
    </div>

    @php
        $isUserLoggedIn = false;
    @endphp
    @if ($isUserLoggedIn)
        <div class="flex gap-3 md:gap-5">
            <a href="" class="black_btn">Dashboard</a>
            <a href="" class="outline_btn">Keluar</a>
        </div>
    @else
        <div class="sm:flex hidden">
            <a href="" class="black_btn">Masuk</a>
        </div>
    @endif
</nav>
