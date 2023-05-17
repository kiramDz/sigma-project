@extends('layouts.main')

@section('content')
    <!-- HERO START -->
    <section class="flex justify-center items-center min-h-[32vh] md:min-h-[72vh] relative" data-aos="fade-up"
        data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in">
        <div class="text-center">
            <p
                class="italic text-[10px] text-[#C3E93A] absolute md:top-[80px] top-[72px] left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                Contact</p>
            <h3 class="text-2xl md:text-[64px] text-[24px] font-bold text-white leading-normal md:mt-0 mt-[80px]">
                <span class="text-[#C3E93A] italic">"</span> Get Idea? We’he Got <br />The Skills. Lets Team Up.<span
                    class="text-[#C3E93A] italic">"</span>
            </h3>
            <p class="text-[16px] md:text-lg text-white opacity-80">Tell us more about yourself and waht ypu're got in mind.
            </p>
        </div>
    </section>
    <!-- HERO END -->

    <!-- CONTACT START -->

    <div class="max-w-screen-md mx-auto p-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in">
        <form action="https://formsubmit.co/hilmi0@mhs.unsyiah.ac.id" target="_self" method="POST" class="w-full">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white opacity-60 text-xs font-bold mb-2"
                        for="grid-first-name"> First Name </label>
                    <input
                        class="appearance-none block w-full bg-transparent text-gray-700 border border-solid border-white opacity-80 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" name="Name" placeholder="Jane" />
                    <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white opacity-60 text-xs font-bold mb-2"
                        for="grid-last-name"> Last Name </label>
                    <input
                        class="appearance-none block w-full bg-transparent text-white opacity-60 border border-solid border-white opacity-80 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" name="Name" placeholder="Doe" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white opacity-60 text-xs font-bold mb-2"
                        for="grid-password"> Email Address </label>
                    <input
                        class="appearance-none block w-full bg-transparent text-gray-700 border border-solid border-white opacity-80 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="email" name="Email" placeholder="********@*****.**" />
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white opacity-60 text-xs font-bold mb-2"
                        for="grid-password"> Your Message </label>
                    <textarea rows="10" name="Message" type="text"
                        class="appearance-none block w-full bg-transparent text-gray-700 border border-solid border-white opacity-80 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              </textarea>
                </div>
                <div class="flex mt-4 justify-center w-full px-3">
                    <button
                        class="border border-solid border-[#C3E93A] bg-transparent focus:shadow-outline focus:outline-none text-[16px] text-[#C3E93A] font-bold py-2 px-[32px] rounded-full"
                        type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- CONTACT END -->
    <!-- FAQ START  -->
    <div class="2xl:container 2xl:mx-auto md:py-12 py-9 px-5">
        <h2
            class="font-semibold dark:text-white text-center lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-gray-800">
            Frequently Asked Questions</h2>

        <div class="flex justify-center md:mt-16 mt-8">
            <div class="md:w-10/12 lg:w-7/12 w-full md:mt-0 sm:mt-14 mt-10">
                <!-- FAQ 1 -->
                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-white leading-5 text-gray-800">Website design benefits?
                        </h3>
                        <button aria-label="too"
                            class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                            onclick="openAnsSection(1)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path1" class="" d="M10 4.1665V15.8332" stroke="currentColor"
                                    stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para1"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">we
                        improved your credibility and trust, Enhanced user experience and Competitive advantage.</p>
                </div>

                <hr class="my-7 bg-gray-200" />

                <!-- FAQ 2 -->

                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-white leading-5 text-gray-800">Design time frame?</h3>
                        <button aria-label="too"
                            class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                            onclick="openAnsSection(2)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path2" class="" d="M10 4.1665V15.8332" stroke="currentColor"
                                    stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para2"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">Varies
                        based on project complexity, Weeks for simple designs and Months for complex designs.</p>
                </div>

                <hr class="my-7 bg-gray-200" />

                <!-- FAQ 3 -->

                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-white leading-5 text-gray-800">Service coverage details?
                        </h3>
                        <button aria-label="too"
                            class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                            onclick="openAnsSection(3)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path3" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para3"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">
                        We will analysis and planning, Layout design and visuals, Content creation, Basic SEO optimization,
                        Social media integration, and Testing and support.
                    </p>
                </div>

                <hr class="my-7 bg-gray-200" />

                <!-- FAQ 4 -->

                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-white leading-5 text-gray-800">What is responsive web
                            design?</h3>
                        <button aria-label="too"
                            class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                            onclick="openAnsSection(4)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path4" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para4"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">Design
                        that adapts, Optimized for all devices and Mobile-friendly layout.</p>
                </div>

                <hr class="my-7 bg-gray-200" />
            </div>
        </div>
    </div>
    <!-- FAQ END -->
@endsection
