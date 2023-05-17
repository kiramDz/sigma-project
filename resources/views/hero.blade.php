@extends('layouts.main')

@section('content')
    <!-- HERO START -->
    <section class="text-white md:px-[40px] px-1" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in">
        <div
            class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row md:gap-[100px] gap-1 md:border-solid border-l border-r border-b border-white border-none">
            <div
                class="flex items-center justify-center p-6 mt-8 lg:mt-0 order-first lg:order-last h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="image/img1.png" alt="" class="object-contain h-80 sm:h-80 lg:h-96 xl:h-112 2xl:h-128" />
            </div>
            <div
                class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left md:order-first order-last">
                <h1 class="text-5xl font-bold leading-none sm:text-6xl">It's Time <br /><span class="text-[#C3E93A]">To
                        Make</span> Your Website</h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">
                    If you don't have a website for your business or project yet,<br class="hidden md:inline lg:hidden" />
                    it's time to take the first step!
                </p>
                <div
                    class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#"
                        class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-100 hover:bg-[#C3E93A] hover:text-black">Hire
                        Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO END -->
    <!-- SECTION 1 START -->
    <section class="sec1" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in">
        <div class="row">
            <div class="content-left">
                <h3 class="md:text-[68px] text-[32px]">
                    WE ARE <span><br />FRONT-END <br />PLAYER</span>
                </h3>
            </div>
            <div class="line"></div>
            <div class="content-right">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellendus incidunt dolorum voluptas
                    saepe, animi perspiciatis praesentium ipsa numquam et possimus dolorem enim similique, quod dicta
                    necessitatibus ducimus
                    officiis nemo!
                </p>
                <li>
                    <a href="contact.html"
                        class="bg-transparent -ml-5 my-4 inline-flex items-center justify-center rounded-lg py-4 px-6 text-center text-base font-normal text-white border-solid border-2 border-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                        HIre Us
                    </a>
                </li>
            </div>
        </div>
    </section>
    <!-- SECTION 1 END -->
    <!-- SECTION 2 START -->
    <div class="container relative bg-black" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in">
        <h1 class="text-white text-center p-[16px] text-[24px] md:text-[40px]">Our Expert Process <br />For Your Business
            Needs</h1>

        <div class="video-container flex flex-wrap gap-5 justify-center md:py-[54px] py-[24px] border-b border-white">
            <div
                class="video block h-[250px] w-[350px] border-2 border-[#C3E93A] rounded-md shadow-md cursor-pointer overflow-hidden relative">
                <video class="h-full w-full object-cover transition duration-200 ease-linear transform hover:scale-110"
                    src="/image/branding.mp4" muted></video>

                <p class="absolute top-1/2 text-white left-1/2 transform -translate-x-1/2 -translate-y-1/2">Planning</p>
            </div>
            <div
                class="video block h-[250px] w-[350px] border-2 border-[#C3E93A] rounded-md shadow-md cursor-pointer overflow-hidden relative">
                <video class="h-full w-full object-cover transition duration-200 ease-linear transform hover:scale-110"
                    src="/image/design.mp4" muted></video>

                <p class="absolute top-1/2 text-white left-1/2 transform -translate-x-1/2 -translate-y-1/2">Design</p>
            </div>
            <div
                class="video block h-[250px] w-[350px] border-2 border-[#C3E93A] rounded-md shadow-md cursor-pointer overflow-hidden relative">
                <video class="h-full w-full object-cover transition duration-200 ease-linear transform hover:scale-110"
                    src="/image/webDev.mp4" muted></video>
                <p class="absolute top-1/2 text-white left-1/2 transform -translate-x-1/2 -translate-y-1/2">Development</p>
            </div>
        </div>

        <!-- Ini masih bermaslah, nengok lg video-nya -->
        <div class="popup-video fixed top-0 left-0 hidden h-full w-full z-50 bg-black bg-opacity-80">
            <span class="absolute top-[5x] right-[20px] text-[50px] text-white z-50 cursor-pointer">&times;</span>
            <video class="absolute top-1/2 left-1/2 w-[750px] object-cover transform -translate-x-1/2 -translate-y-1/2"
                src="/image/branding.mp4" muted autoplay controls></video>
            <video class="absolute top-1/2 left-1/2 w-[750px] object-cover transform -translate-x-1/2 -translate-y-1/2"
                src="/image/design.mp4" muted autoplay controls></video>
            <video class="absolute top-1/2 left-1/2 w-[750px] object-cover transform -translate-x-1/2 -translate-y-1/2"
                src="/image/webDev.mp4" muted autoplay controls></video>
        </div>
    </div>
    <!-- SECTION 2 END -->
    <!-- About -->
    <div class="contact block flex flex-col" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in">
        <div class="container w-4/5 block mx-auto pt-[50px]">
            <div class="content-section float-none w-full block m-auto md:float-left md:w-2/5">
                <div class="title uppercase text-[16px] md:text-[24px] text-[#c3e93a]">
                    <p>About Us</p>
                </div>
                <div class="content">
                    <h3 class="mt-[8px] text-white text-[48px] leading-[1.2] font-playfair">Lorem ipsum <br />dolor amet
                    </h3>
                    <p class="mt-[20px] w-full text-white opacity-70 text-base leading-[1.2]">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Error quisquam commodi nihil nulla unde corporis quibusdam aperiam
                        rerum.</p>
                </div>
                <div class="social-section flex items-ceter mt-[30px]">
                    <div class="email flex px-[10px] border border-white mr-[16px] flex-row items-center gap-[8px]">
                        <i class="far fa-envelope text-[24px] text-white"></i>
                        <div class="email_content">
                            <p class="text-[12px] opacity-70 text-white">Email Addres</p>
                            <a href="" class="text-[16px] text-[#c3e93a] decoration-inherit">Email@gmail.com</a>
                        </div>
                    </div>
                    <div class="social block ml-[16px] align-center">
                        <p class="text-[12px] opacity-70 mb-[4px] text-white">Follow Us On :</p>
                        <div class="icon_container flex items-center">
                            <div
                                class="flex items-center justify-center border border-solid border-white w-[32px] h-[32px] mr-[8px]">
                                <a href=""><i
                                        class="fab fa-facebook-f text-[16px] text-white hover:text-[#c3e93a]"></i></a>
                            </div>
                            <div
                                class="flex items-center justify-center border border-solid border-white w-[32px] h-[32px] mr-[8px]">
                                <a href=""><i
                                        class="fab fa-twitter text-[16px] text-white hover:text-[#c3e93a]"></i></a>
                            </div>
                            <div
                                class="flex items-center justify-center border border-solid border-white w-[32px] h-[32px] mr-[8px]">
                                <a href=""><i
                                        class="fab fa-instagram text-[16px] text-white hover:text-[#c3e93a]"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ini yang kita ubah -->
            <div class="image-section relative md:top-[16px] float-none md:float-right w-full md:w-2/5">
                <div class="bar absolute w-[500px] top-[56px] md:top-[80px]">
                    <h3 class="pr-[500px] pb-[8px] text-white">Design</h3>
                    <div
                        class="progress-bar__container w-4/5 h-[16px] rounded-2xl relative overflow-hidden transition-all duration-500 transform will-change-transform shadow-box border-[#146C94] px-0 py-0 mb-4">
                        <div
                            class="progress-bar relative h-full w-11/12 bg-[#19A7CE] top-0 bottom-0 -left-full rounded-2xl flex justify-center items-center text-white">
                        </div>
                    </div>
                    <h3 class="pr-[500px] pb-[8px] text-white">Branding</h3>
                    <div
                        class="progress-bar__container w-4/5 h-[16px] rounded-2xl relative overflow-hidden transition-all duration-500 transform will-change-transform shadow-box border-[#146C94] px-0 py-0 mb-4">
                        <div
                            class="progress-bar relative h-full w-11/12 bg-[#19A7CE] top-0 bottom-0 -left-full rounded-2xl flex justify-center items-center text-white">
                        </div>
                    </div>
                    <h3 class="pr-full pb-[8px] text-white">Web Dev</h3>
                    <div
                        class="progress-bar__container w-4/5 h-[16px] rounded-2xl relative overflow-hidden transition-all duration-500 transform will-change-transform shadow-box border-[#146C94] px-0 py-0 mb-4">
                        <div
                            class="progress-bar relative h-full w-full bg-[#19A7CE] top-0 bottom-0 -left-full rounded-2xl flex justify-center items-center text-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== About Section End -->
    <!-- ====== Contact Section Start -->
    <section x-data="{
        showCards: 'all',
        activeClasses: 'bg-primary text-white',
        inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
    }" class="md:mt-[40px] mt-[280px] pt-[10px] pb-12 lg:pt-[24px] lg:pb-[90px]"
        id="projek" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[32px] max-w-[510px] text-center">
                        <h2 class="text-white mb-1 text-3xl font-bold sm:text-4xl md:text-[40px]">Our Recent Projects</h2>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <ul class="mb-12 flex flex-wrap justify-center space-x-1">
                        <li class="mb-1">
                            <button @click="showCards = 'all' "
                                :class="showCards == 'all' ? activeClasses : inactiveClasses"
                                class="inline-block text-white rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8 focus:text-black focus:bg-green-300 hover:bg-green-300">
                                All Projects
                            </button>
                        </li>
                        <li class="mb-1">
                            <button @click="showCards = 'branding' "
                                :class="showCards == 'branding' ? activeClasses : inactiveClasses"
                                class="inline-block text-white rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8 focus:text-black focus:bg-green-300 hover:bg-green-300">
                                Branding
                            </button>
                        </li>
                        <li class="mb-1">
                            <button @click="showCards = 'design' "
                                :class="showCards == 'design' ? activeClasses : inactiveClasses"
                                class="inline-block text-white rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8 focus:text-black focus:bg-green-300 hover:bg-green-300">
                                Design
                            </button>
                        </li>
                        <li class="mb-1">
                            <!-- <button
                @click="showCards = 'marketing' "
                :class="showCards == 'marketing' ? activeClasses : inactiveClasses"
                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
              >
                Marketing
              </button> -->
                        </li>
                        <li class="mb-1">
                            <button @click="showCards = 'development' "
                                :class="showCards == 'development' ? activeClasses : inactiveClasses"
                                class="inline-block text-white rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8 focus:text-black focus:bg-green-300 hover:bg-green-300">
                                Development
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" -mx-4 flex flex-wrap">
                <div :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden'"
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12">
                        <div class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1416339134316-0e91dc9ded92?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                alt="portfolio" class="w-full" />
                        </div>
                        <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                            <span class="text-primary mb-2 block text-sm font-semibold"> Branding </span>
                            <h3 class="text-dark mb-4 text-xl font-bold">Branding Design</h3>
                            <a href="https://www.osbornebranding.academy/mini-course"
                                class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-black" target="_blank">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden'"
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12">
                        <div class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1508599589920-14cfa1c1fe4d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=803&q=80"
                                alt="portfolio" class="w-full" />
                        </div>
                        <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                            <span class="text-primary mb-2 block text-sm font-semibold"> Branding </span>
                            <h3 class="text-dark mb-4 text-xl font-bold">Nike Strategy Branding</h3>
                            <a href="https://www.nike.com/id/"
                                class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-black">
                                View Details </a>
                        </div>
                    </div>
                </div>
                <div :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden'"
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12">
                        <div class="overflow-hidden rounded-lg">
                            <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-03.jpg"
                                alt="portfolio" class="w-full" />
                        </div>
                        <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                            <span class="text-primary mb-2 block text-sm font-semibold"> Development </span>
                            <h3 class="text-dark mb-4 text-xl font-bold">Web Design Trend</h3>
                            <a href="javascript:void(0)"
                                class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white">
                                View Details </a>
                        </div>
                    </div>
                </div>
                <div :class="showCards == 'all' || showCards == 'design' ? 'block' : 'hidden'"
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12">
                        <div class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1430276084627-789fe55a6da0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=873&q=80"
                                alt="portfolio" class="w-full" />
                        </div>
                        <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                            <span class="text-primary mb-2 block text-sm font-semibold"> Design </span>
                            <h3 class="text-dark mb-4 text-xl font-bold">Finance Card</h3>
                            <a href="https://www.beginnerbank.com/"
                                class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white">
                                View Details </a>
                        </div>
                    </div>
                </div>
                <div :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden'"
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12">
                        <div class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=815&q=80"
                                alt="portfolio" class="w-full" />
                        </div>
                        <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                            <span class="text-primary mb-2 block text-sm font-semibold"> Marketing </span>
                            <h3 class="text-dark mb-4 text-xl font-bold">Goate marketing</h3>
                            <a href="https://handmade.company/goat/index.html"
                                class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white">
                                View Details </a>
                        </div>
                    </div>
                </div>
                <div :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden'"
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12">
                        <div class="overflow-hidden rounded-lg">
                            <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-06.jpg"
                                alt="portfolio" class="w-full" />
                        </div>
                        <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                            <span class="text-primary mb-2 block text-sm font-semibold"> Branding </span>
                            <h3 class="text-dark mb-4 text-xl font-bold">Creative Agency</h3>
                            <a href="javascript:void(0)"
                                class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white">
                                View Details </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Portfolio Section End -->
    <!-- ====== Contact Section Start -->
    <section
        class="relative z-10 overflow-hidden bg-[#C3E93A] py-[24px] min-h-[280px] flex flex-col justify-center items-center">
        <h1 class="text-black text-center text-[24px] md:text-[56px] mx-auto">You Have A <span
                class="text-green-400">Story</span></h1>

        <p class="mx-auto mb-[12px] text-[24px]">And we can help you share it to the world</p>
        <button
            class="bg-green-500 px-[20px] py-[8px] text-white rounded-full mx-auto hover:bg-transparent transition-all duration-300 shadow-md"
            onclick="window.location.href='#'">Button</button>
    </section>
    <!-- ====== Contact Section End -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"
        integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
