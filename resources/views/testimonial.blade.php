@extends('layouts.main')

@section('content')
    <!-- HERO START -->
    <section class="flex justify-center items-center min-h-[32vh] md:min-h-[72vh] relative md:mb-1 mb-[20px]"
        data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in">
        <div class="text-center">
            <p
                class="italic text-[10px] text-[#C3E93A] absolute md:top-[80px] top-[72px] left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                Testimonial</p>
            <h3 class="text-2xl md:text-[64px] text-[24px] font-bold text-white leading-normal md:mt-0 mt-[80px]">
                <span class="text-[#C3E93A] italic">"</span> The Best Way To Predict The <br />Future is To Create It.<span
                    class="text-[#C3E93A] italic">"</span>
            </h3>
            <p class="text-[12px] md:text-lg text-white opacity-80">We're neve done with a project until our partners are
                happy with it. Check out what theu have to say about us!</p>
        </div>
    </section>
    <!-- HERO END -->
    <!-- Testimonila start -->
    <section class="testim flex items-center flex-wrap flex-col" data-aos="fade-up" data-aos-offset="200"
        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in">
        <!-- card 1 -->
        <div class="md:w-[1200px] w-full p-2 text-center mb-4 border-b border-white border-solid">
            <div class="mx-auto w-[72px] h-[72px] rounded-full overflow-hidden">
                <img class="object-cover w-full h-full" src="/image/fajri.png" alt="Fajry Ardiansyah" />
            </div>
            <h2 class="mt-4 font-bold text-xl text-white">Fajry Ardiansyah</h2>
            <h3 class="mt-2 text-lg text-gray-500">President of Solveblem</h3>
            <p class="mt-3 text-white mb-4 text-[24px]">Memang bereh Sigma nyoe. Dua uroe tok ka jadeuh website lon. Desain
                bereh, tampilan kekinian, Bagah leuh lom.</p>
        </div>

        <!-- card 2 -->
        <div class="md:w-[1200px] w-full p-2 text-center mb-4 border-b border-white border-solid">
            <div class="mx-auto w-[72px] h-[72px] rounded-full overflow-hidden">
                <img class="object-cover w-full h-full" src="/image/fajri.png" alt="Furqan Al-Ghifari" />
            </div>
            <h2 class="mt-4 font-bold text-xl text-white">Furqan Al-Ghifari</h2>
            <h3 class="mt-2 text-lg text-gray-500">Developer of Sofware</h3>
            <p class="mt-3 text-white mb-4 text-[24px]">Fantastic, Gue tu literally terpukau dengan hasilnya which is sangat
                membantu start-up yang lagi gue bangun</p>
        </div>

        <!-- card 3 -->
        <div class="md:w-[1200px] w-full p-2 text-center mb-4 border-b border-white border-solid">
            <div class="mx-auto w-[72px] h-[72px] rounded-full overflow-hidden">
                <img class="object-cover w-full h-full" src="/image/fajri.png" alt="Ardiansyah" />
            </div>
            <h2 class="mt-4 font-bold text-xl text-white">Ardiansyah</h2>
            <h3 class="mt-2 text-lg text-gray-500">COD Professional Player</h3>
            <p class="mt-3 text-white mb-4 text-[24px]">Làm tốt lắm, bạn đã cứu doanh nghiệp của chúng tôi</p>
        </div>
    </section>


    <!-- bagian card -->
    <section data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in">
        <div class="container mt-5">

            <!-- Create a new Post button -->
            <div class="flex justify-center ">
                <!-- ini tulisan yang jika di tekan ngrah ke create.php -->
                <a href="/create"
                    class="inline-block text-black bg-[#C3E93A] font-semibold py-2 px-4 border border-black hover:rounded-full">
                    Got something to say? Don't hesitate, just say it
                </a>
            </div>

            <!-- Display posts from database : ini gambar kartu setelah ita create database -->
            <div class="m-6 flex justify-center items-center">

                @foreach ($data as $d)
                    <div class="bg-white rounded shadow border p-6 ml-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="text-3xl font-bold mb-4 mt-0">{{ $d->title }}</h5>
                            <p class="text-gray-700 text-sm"> {{ $d->content }} </p>
                            <a href="{{ route('view.data', [$d->id]) }}" class="text-gray-700 text-[16px]">Read More
                                <span class="text-gray-700">&rarr;</span></a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
@endsection
