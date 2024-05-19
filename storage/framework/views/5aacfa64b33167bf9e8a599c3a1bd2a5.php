<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>BrainFit Online</title>
    <link rel="stylesheet" href="<?php echo e(Asset('style.css')); ?>">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
</head>

<body class=" ">
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '722875101837060');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
            src="https://www.facebook.com/tr?id=722875101837060&ev=PageView
    &noscript=1" />
    </noscript>
    <script>
        // CC = container max-w-screen-xl mx-auto
        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>

    <section
        class="flex justify-center px-5 md:px-14 container max-w-screen-xl mx-auto relative bg-white z-10 overflow-x-hidden"
        data-aos="fade-up">
        <div class="flex justify-between w-full">
            <img src="<?php echo e(Asset('assets/images/logo.webp')); ?>" class="logo mr-auto md:ml-auto" alt="">
            <p class="self-center md:mt-0 mt-5"><a href="/">ID</a> | <a href="/en">EN</a></p>
        </div>
    </section>
    <div class="" x-data="{ open: false }">

        <section
            :class="open ? 'md:min-h-[1000px] min-h-[830px] sm:min-h-[600px]' :
                'md:min-h-[900px] min-h-[585px] sm:min-h-[520px]'"
            class="  pb-5 md:pb-auto  px-5 md:px-14 container max-w-screen-xl mx-auto relative z-10 bg-white overflow-visible md:overflow-visible"
            data-aos="fade-right">
            <div class="w-12/12 z-10">
                <div
                    class="titleSection text-2xl relative md:text-6xl text-center font-medium mt-10 md:mt-32 leading-none">
                    <div class="flex justify-center">
                        <div class="w-24 h-1 bg-[#cd188a] mb-4  -top-4"></div>
                    </div>

                    Optimize your child's brain potential <br class="hidden md:block"> through CognitiveMAP Assessment:
                </div>
                <h2 class="text-[#000000]  font-semibold text-xl md:text-4xl mt-5 text-center">
                    Discover their cognitive abilities today!
                </h2>
                <div>
                    <div class="flex justify-center">
                        <button x-on:click="open = ! open"
                            class="bg-[#6d6e71] text-[#ffffff] px-5 py-1 rounded-full mt-5 text-sm">
                            More
                        </button>
                    </div>
                    <div x-show="open">
                        <p class="text-sm md:text-base mt-4 text-center font-medium">
                            Through the CognitiveMAP Assessment, you can gain insight into your child's cognitive
                            strengths and weaknesses. Additionally, you will receive personalised recommendations for
                            training programs that will be tailored to their unique needs. Watch as your child
                            flourishes confidently. <br> <br>
                            Sign your child up for the CognitiveMAP Assessment now to evaluate their brain abilities and
                            start their journey of potential growth!
                        </p>
                    </div>
                </div>
            </div>
            <img class=" h-[400px] md:h-[750px] absolute md:left-[25%] object-contain  w-fit mozilla-left"
                src="<?php echo e(Asset('assets/images/section1.webp')); ?>" alt="">
        </section>
    </div>
    <section class="bg-[#f2f2f2]  pb-20 md:pb-40 pt-20 md:pt-40 overflow-hidden">
        <div class="container max-w-screen-xl px-5 md:px-0 mx-auto mx-10 relative">
            <h3 class="text-center text-2xl md:text-5xl  font-semibold">
                <div class="flex justify-center pb-3">
                    <div class="h-1 w-20 bg-black"></div>
                </div>
                CognitiveMAP Video
            </h3>
            <div class="flex justify-center pb-3 mt-10  relative z-0" data-aos="zoom-out">

                <iframe src="https://www.youtube.com/embed/pdr6x7ly8KA" class="shadow_video" frameborder="0"
                    allowfullscreen style="height: 500px;width:1200px;" class="z-50">
                </iframe>
            </div>
        </div>
    </section>
    <section
        class="block md:flex pt-20 md:pt-40 min-h-[703px]  md:min-h-fit container max-w-screen-xl mx-auto mx-10 relative bg-white overflow-hidden">
        <div class="w-full md:w-6/12 relative ">
            <div class="absolute -right-[11rem] top-[40%] z-0">
                <div class="relative">
                    <img src="<?php echo e(Asset('assets/images/section3_1.webp')); ?>" alt=""
                        class=" h-[22rem] top-[60%] left-[40%] invisible md:visible">
                    <div class="h-full w-4 bg-[white] absolute top-0 left-[50%]"></div>

                </div>
            </div>
            <h3 class="text-center text-2xl md:text-3xl font-semibold z-10 inhe" style="position: inherit">
                <div class="flex justify-center pb-3">
                    <div class="h-1 w-20 bg-black"></div>
                </div>
                What causes
                difficulties <br> and the lack of
                motivation <br> in children's learning?
            </h3>

            <div class="flex justify-center">
                <button class="text-center mt-1 mb-8 text-base font-semibold text-[#0bbce7]" x-data="{ id: 'modal-example3' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    More >
                </button>
            </div>

            <img src="<?php echo e(Asset('assets/images/section3_5.webp')); ?>" alt=""
                class="absolute h-40 md:h-60 top-0 md:top-20  z-0">
            <div class="flex justify-center">
                <img src="<?php echo e(Asset('assets/images/section3_3.webp')); ?>" alt="" class="md:ml-20 z-10 h-80"
                    style="position: inherit">
            </div>

        </div>
        <div class="w-full md:w-6/12 relative overflow-hidden mt-10 md:mt-0">
            <h3 class="text-center text-2xl md:text-3xl font-semibold  z-10" style="position: inherit">
                <div class="flex justify-center pb-3">
                    <div class="h-1 w-20 bg-black"></div>
                </div>
                Why do children
                need <br /> CognitiveMAP Assessment?
            </h3>
            <div class="flex justify-center">
                <button class="text-center mt-1 mb-8 text-base font-semibold text-[#0bbce7]" x-data="{ id: 'modal-example4' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    More >
                </button>
            </div>

            <img src="<?php echo e(Asset('assets/images/section3_4.webp')); ?>" alt=""
                class="absolute h-40 md:h-60 -top-10 -right-20 md:-right-24 z-0">
            <div class="flex justify-center">
                <img src="<?php echo e(Asset('assets/images/section3_2.webp')); ?>" alt="" class=" h-[22rem]">
            </div>
        </div>
    </section>
    <section
        class="block md:flex container max-w-screen-xl mx-auto pt-20 md:pt-40 md:min-h-[750px] px-5 md:px-0  relative  gap-4 text-white overflow-x-hidden"
        data-aos="zoom-in-up">
        <div class="w-full md:w-6/12 relative overflow-hidden bg-[#0bbce7] pt-14 md:h-auto h-[420px]">
            <h3 class="text-center text-2xl md:text-3xl font-medium">
                <div class="flex justify-center pb-3">
                    <div class="h-0.5 w-20 bg-white"></div>
                </div>
                What are the benefits of <br> CognitiveMAP Assessment?
            </h3>
            <div class="flex justify-center z-10 " style="position: inherit">
                <button class="text-center mt-1 mb-8 text-base" x-data="{ id: 'modal-example2' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    More >
                </button>
            </div>

            <div class="flex justify-center mt-4">
                <img src="<?php echo e(Asset('assets/images/section5_1.webp')); ?>" alt=""
                    class="h-80 md:h-[30rem] absolute -bottom-36 md:-bottom-36  "
                    style="box-shadow: 7px 24px 13px -3px black">
            </div>

        </div>
        <div class="w-full md:w-6/12 relative overflow-hidden bg-[#0bbce7] pt-14 mt-10 md:mt-0 md:h-auto h-[400px]">
            <h3 class="text-center text-2xl md:text-3xl font-medium px-5">
                <div class="flex justify-center pb-3">
                    <div class="h-0.5 w-20 bg-white"></div>
                </div>
                How is CognitiveMAP conducted?
            </h3>
            <div class="flex justify-center z-10" style="position: inherit">
                <button class="text-center mt-1 mb-8 text-base" x-data="{ id: 'modal-example' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    More >
                </button>
            </div>

            <div class="flex justify-center">
                <img src="<?php echo e(Asset('assets/images/section5_2.webp')); ?>" alt=""
                    class="h-80 md:h-[30rem] absolute -bottom-10 md:-bottom-8">
            </div>
        </div>
    </section>
    <section class="bg-[#f2f2f2] relative">
        <div class="pb-64 md:pb-40  mt-20 md:mt-40  overflow-x-hidden " data-aos="fade-down-right">
            <div class="px-5 md:px-20 container max-w-screen-2xl mx-auto ">
                <h3 class="text-center text-3xl md:text-6xl pt-20 md:pt-40 font-semibold">
                    <div class="flex justify-center pb-3">
                        <div class="h-1 w-20 bg-black"></div>
                    </div>
                    What do they say after CognitiveMAP Assessment?
                </h3>
                <div class="flex justify-end pb-3 mt-20 md:mt-40  relative">

                    <div class="w-10/12 md:w-1/2 relative font-medium min-h-[180px]">
                        <img src="<?php echo e(Asset('assets/images/section7_1.webp')); ?>" alt=""
                            class="h-10 md:h-16 absolute -top-16 -left-14 md:-left-24">
                        <div class="flex flex-col md:flex-row relative md:w-3/4" x-data="{ testimonialActive: 1 }" x-cloak>
                            <div class="h-full relative z-10 text-lg md:text-2xl ">
                                <template x-if="testimonialActive === 1">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 1">
                                        I was constantly puzzled about why my child struggled to focus. From my
                                        observation, there were moments when he could concentrate, while other times, it
                                        proved to be difficult for him. The CognitiveMAP Assessment game me a clear
                                        understanding of my child's behaviour and capabilities.
                                    </p>
                                </template>

                                <template x-if="testimonialActive === 2">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 2">
                                        Initially, we believed that our child had focus issues. It was a great relief
                                        to discover from BrainFit’s Cognitive MAP Assessment that he actually has
                                        excellent abilities, including strong focus stamina. The assessment results
                                        indicated that his fixed mindset caused his lack of resilience. With this
                                        newfound understanding, we are better equipped to provide the necessary support
                                        and guidance.
                                    </p>
                                </template>

                                <template x-if="testimonialActive === 3">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 3">
                                        I have tried different tests and assessments for my child, but none provided
                                        such a clear insight and consultation as this one. The BrainFit team truly has a
                                        deep understanding about the brain.
                                    </p>
                                </template>
                                <template x-if="testimonialActive === 4">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 4">
                                        Before knowing about the CognitiveMAP Assessment, my knowledge was limited to
                                        IQ tests. However, after
                                        the assessment, I gained an in-depth understanding of my child's overall
                                        learning abilities. Also, the BrainFit consultant was generous in providing
                                        explanations and strategies to assist us.

                                    </p>
                                </template>
                                <template x-if="testimonialActive === 5">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 5">
                                        After the assessment and consultation session to review the result, I wish I
                                        had discovered BrainFit sooner. They helped me realise that I had many
                                        misconceptions that would get me upset with my child. Now that I have a better
                                        understanding of the difficulties he experiences in his brain, I feel remorseful
                                        for my previous reactions and am committed to providing my child with the
                                        support he needs. Thank you, BrainFit.
                                    </p>
                                </template>
                                <template x-if="testimonialActive === 6">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 6">
                                        Our child's school teacher recommended Brainfit and this assessment. A
                                        newfound hope for our child emerged after getting the results and consulting
                                        with BrainFit. The information provided was grounded in brain research. It was
                                        presented clearly and easily understandable.
                                    </p>
                                </template>
                            </div>

                            <div class="flex my-4 justify-center items-center z-10">
                                <div class="">
                                    <div class="absolute -bottom-0 md:-bottom-8 right-0">
                                        <template x-if="testimonialActive === 1">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 1">
                                                Mrs AR, with a 9 year old child.
                                            </p>
                                        </template>

                                        <template x-if="testimonialActive === 2">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 2">
                                                Mrs ZE, with a 12 year old child.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 3">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 3">
                                                Mrs HT, with a 8 years old child.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 4">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 4">
                                                Mrs BR, with a 10 years old child.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 5">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 5">
                                                Mrs AS, with a 7 years old child.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 6">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 6">
                                                Mrs EL, with a 14 years old child.
                                            </p>
                                        </template>
                                    </div>
                                    <button
                                        @click.prevent="testimonialActive = testimonialActive === 6 ? 1 : testimonialActive + 1"
                                        class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2  absolute -bottom-8 md:-bottom-14 right-0">
                                        <img src="<?php echo e(Asset('assets/images/play.png')); ?>" class="w-4 h-4"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">

                <img src="<?php echo e(Asset('assets/images/section7_2.webp')); ?>" alt=""
                    class=" h-72 md:h-[30rem] absolute bottom-0 left-0 md:left-0">
            </div>
        </div>
    </section>
    <section class="bg-white px-5 md:px-0 pt-20 md:pt-40 relative overflow-x-hidden" id="section6">
        <div class="md:px-10 container max-w-screen-xl mx-auto mx-10 relative overflow-hidden"
            data-aos="fade-down-left">
            <h3 class="text-center text-3xl md:text-5xl mt-40 font-semibold relative">
                <div class="flex justify-center pb-3">
                    <div class="h-1 w-20 bg-black"></div>
                </div>
                Schedule your BrainFit Information Session Now!
                <div class="bg-[#f15b39] px-4 py-8 w-fit rounded-full text-white font-medium text-3xl absolute top-[-140px] right-[0]"
                    style="transform: rotateZ(10deg)">
                    FREE
                </div>
            </h3>
            <div class="md:flex justify-end pb-3 mt-10  relative z-0">

                <div class="md:w-1/2 text-lg">
                    Curious to know more?
                    Schedule an information session by filling in the details on the side and enjoy the following
                    benefits:


                    <div class="bg-[#f2f2f2] w-fit py-2 px-4 mb-2.5 mt-4">
                        Consultation
                    </div>
                    <div class="bg-[#f2f2f2] w-fit py-2 px-4 mb-2.5">
                        Comprehensive information about CognitiveMAP Assessment
                    </div>
                    <div class="bg-[#f2f2f2] w-fit py-2 px-4 mb-2.5">
                        Details on Brain Training Programs
                    </div>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0">
                    <form action="<?php echo e(Route('email-send')); ?>" method="POST"
                        onsubmit="myButton.disabled = true; return true;" id="myButton">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="nama"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Parent's Name" />
                        <input type="number" name="telephone"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Whatsapp Number" onkeypress='validate(event)' minlength="10"
                            maxlength="15" />
                        <input type="email" name="email"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Email" />
                        <input type="text" name="nama_anak"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Child's Name" />
                        <input type="number" min="1" max="100" name="umur"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Child's Age" />
                        <input type="text" min="1" max="100" name="kelas"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Child's Grade" />
                        <select id="region" required name="provinsi"
                            onchange="this.className=this.options[this.selectedIndex].className" class="inputInValid">
                            <option class="inputInValid" value="" selected disabled hidden>Province
                            </option>
                        </select>
                        <select id="city" required class="inputInValid" name="kota"
                            onchange="this.className=this.options[this.selectedIndex].className">
                            <option value="" class="inputInValid" selected disabled hidden>
                                Select Province First
                            </option>
                        </select>
                        <div class=" flex justify-end">
                            <button type="submit" id="myButton"
                                class="bg-gray-500 w-16 py-1 px-1 rounded-full text-white font-medium text-sm mt-4">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="px-2 md:px-10">
                <button
                    class="bg-[#f15b39] cursor-auto w-full py-3 px-1 rounded-full text-white font-medium md:text-2xl mt-4">
                    Receive a <span class="text-xl font-black">DISCOUNT</span> for CognitiveMAP Assessment after the
                    information session!
                </button>
            </div>
        </div>
    </section>
    <section class="bg-[#f2f2f2] pb-40 md:pb-60 mt-20 md:mt-40 relative overflow-x-hidden" data-aos="zoom-in-up">
        <div class=" px-5 md:px-0 container max-w-screen-lg mx-auto relative">
            <h3 class="text-left text-[#fab01a] lh text-3xl md:text-5xl pt-20 md:pt-40 font-semibold leading-10">
                <div class="flex justify-start pb-3">
                    <div class="h-1 w-20 bg-[#fab01a]"></div>
                </div>
                Different Child <br>
                Different Brain <br>
                Different Needs
            </h3>
            <p class="mt-4 text-2xl">
                Every child has a story about the challenges they are facing.
                Let’s listen to their stories:

            </p>


            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10 " id="section__itemContainer">

                <button
                    class="h-[210px] w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 0"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Lolita, 9 years
                        old <br> Difficulty in Paying Attention
                    </h6>
                    <img src="<?php echo e(Asset('assets/images/section2_1.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full  md:h-[160px]"
                        alt="">
                </button>
                <div class="hidden md:block"></div>
                <button
                    class="h-[210px] w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 1"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Alden, 9 years
                        old <br> has Impulsive Behaviour
                    </h6>
                    <img src="<?php echo e(Asset('assets/images/section2_2.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[150px] md:max-h-full md:h-[150px] left-[5%] xs:left-[25%] md:left-[20%] css_cutom_style"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 2"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Gretta, 7 years
                        old <br> Frequently Forgets Things
                    </h6>
                    <img src="<?php echo e(Asset('assets/images/section2_3.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px] css_cutom_style left-[5%] xs:left-[20%] md:left-[10%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 3"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Kiran, 8 years
                        old <br> has Difficulty Regulating Emotions.
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_4.webp')); ?>"
                        class="absolute -bottom-0 md:-bottom-10 kiran__mozilla object-contain w-fit max-h-[140px] md:max-h-full md:h-[160px] left-[5%] xs:left-[25%] md:left-[15%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 4"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Lamark, 5 years
                        old <br> Slow Processing
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_5.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px] css_cutom_style xs:left-[25%] md:left-[20%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 5"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Lupita, 14
                        years
                        old <br> Passive in Thinking
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_6.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px]  css_cutom_style xs:left-[25%] md:left-[15%]"
                        alt="">
                </button>
                <div class="hidden md:block"></div>

                <div class="hidden md:block"></div>

                <div class="hidden md:block"></div>

                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 6"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Enzo, 10 years
                        old <br> is Prone to Giving Up Easily
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_7.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 xs:-bottom-10 object-contain w-fit max-h-[160px] xs:max-h-[181px] md:max-h-[160px] xs:object-cover  md:object-contain xs:w-full"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 7"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Benn, 11 years
                        old <br> Disliked Reading
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_8.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px] md:ml-10 css_cutom_style left-[5%] xs:left-[25%] md:left-[10%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 8"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Ryan, 10 year
                        old <br> Disliked Mathematics
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_9.webp')); ?>"
                        class="absolute bottom-0 md:-bottom-10 object-contain w-fit  md:h-[200px] xs:h-[150px] xs:w-full xs:object-cover"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl  "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 9"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-sm md:text-base absolute top-0 w-full">Maddy, 12 years
                        old <br> Difficulty in Communicating
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_10.webp')); ?>"
                        class="absolute -bottom-14 object-contain w-fit h-[190px] maddy_left left-[5%] xs:left-[20%] md:left-[12%]"
                        alt="">
                </button>
                <div class="col-span-2">
                    <p class="text-2xl mt-16 text-center md:text-left">
                        What challenges are your <br> children currently facing?
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="bg-white pb-20 pt-20 md:pt-40   relative z-0 overflow-hidden">
        <div class="bg-white px-5 md:px-0">
            <div class="px-0 container max-w-screen-xl mx-auto mx-10 relative pb-[200px] md:pb-[400px] md:pb-0 "
                data-aos="zoom-in-down">
                <h3 class="text-center text-3xl md:text-5xl  font-semibold relative z-10">
                    <div class="flex justify-center pb-3">
                        <div class="h-1 w-20 bg-black"></div>
                    </div>
                    Brain Training Program After Assessment
                </h3>
                <p class="text-center mt-10 text-2xl z-20 block" style="position: inherit">
                    Developing children’s cognitive abilities <br>
                    through brain workouts
                </p>

                <div x-data="{ open: false }" id="modal5" class="hidden z-10" style="position: inherit">

                    <div class=" flex justify-center z-20" style="position: inherit">
                        <button x-on:click="open = ! open"
                            class="bg-gray-500 py-1 px-6  rounded-full text-white font-medium text-base mt-10">
                            More
                        </button>


                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out origin-top-left duration-200"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition origin-top-left ease-in duration-100"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90">
                        <div class="">
                            <div class=" flex justify-center z-20" style="position: inherit">
                                <div class="bg-[#cd188a] py-0 px-8  rounded-sm text-white font-medium text-sm mt-10">
                                    <div class="flex gap-4">
                                        <h3 class="text-8xl font-semibold">4</h3>
                                        <p class="self-center text-xl">Step Process</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center mt-10">
                                <div class="w-full md:w-1/2">
                                    <div class="">


                                        <h3
                                            class="bg-[#fab01a] mb-2 text-lg flex gap-2 font-semibold text-white w-fit h-7 px-5 py-0 relative ml-4 rounded-r-full">
                                            <p
                                                class="bg-[#fab01a] border text-lg border-[#fab01a] px-0 pl-2 pt-1 py-0 w-10 h-10 absolute -left-6 -top-1.5 rounded-full">
                                                01
                                            </p>
                                            <span class="text-lg">TEST</span>
                                        </h3>
                                        <p class="ml-4 w-full md:w-1/2">
                                            Since each child has a unique and individual brain aptitude, BrainFit
                                            administers a CognitiveMAP Assessment to identify the diverse cognitive
                                            abilities, strengths, and weaknesses involved in their thinking and learning
                                            processes.
                                        </p>
                                    </div>
                                    <div class="mt-10">

                                        <h3
                                            class="bg-[#fab01a] mb-2 text-lg flex gap-2 font-semibold text-white w-fit h-7 px-5 py-0 relative ml-4 rounded-r-full">
                                            <p
                                                class="bg-[#fab01a] border text-lg border-[#fab01a] px-0 pl-2 pt-1 py-0 w-10 h-10 absolute -left-6 -top-1.5 rounded-full">
                                                02
                                            </p>
                                            <span class="text-lg">TAILOR</span>
                                        </h3>
                                        <p class="ml-4 w-full md:w-1/2">
                                            Based on the results of the CognitiveMAP Assessment, BrainFit formulates a
                                            personalised brain training program to meet the unique needs of each child.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class=" mb-20 md:mb-0 flex md:block justify-center mt-10 md:absolute -right-[150px] top-[500px]  w-full md:w-1/2">
                                <div class="w-full">
                                    <div class="">

                                        <h3
                                            class="bg-[#fab01a] mb-2 text-lg flex gap-2 font-semibold text-white w-fit h-7 px-5 py-0 relative ml-4 rounded-r-full">
                                            <p
                                                class="bg-[#fab01a] border text-lg border-[#fab01a] px-0 pl-2 pt-1 py-0 w-10 h-10 absolute -left-6 -top-1.5 rounded-full">
                                                03
                                            </p>
                                            <span class="text-lg">TRAIN</span>
                                        </h3>
                                        <p class="ml-4 w-full md:w-8/12">
                                            The child participates in the brain training program, which includes three
                                            primary activities: Cognitive Training, Physical Training, and Emotional
                                            Coaching. BrainFit consistently monitors, guides, and assists parents and
                                            children throughout the program to ensure a successful transformation.
                                        </p>
                                    </div>
                                    <div class="mt-10">
                                        <h3
                                            class="bg-[#fab01a] mb-2 text-lg flex gap-2 font-semibold text-white w-fit h-7 px-5 py-0 relative ml-4 rounded-r-full">
                                            <p
                                                class="bg-[#fab01a] border text-lg border-[#fab01a] px-0 pl-2 pt-1 py-0 w-10 h-10 absolute -left-6 -top-1.5 rounded-full">
                                                04
                                            </p>
                                            <span class="text-lg">TRACK</span>
                                        </h3>
                                        <p class="ml-4 w-full md:w-8/12">
                                            BrainFit regularly monitors the progress by using weekly training reports
                                            that cover eight essential areas: Speed, Memory, Attention, Reasoning,
                                            Timing & Coordination, Exam Results, Social-Emotional Skills, and Tenacity.
                                            Feedback sessions with parents and a post-training CognitiveMAP assessment
                                            are also conducted to ensure thorough monitoring.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="<?php echo e(Asset('assets/images/section8_1.webp')); ?>"
                    class="h-[300px] md:h-[550px] absolute left-0 md:-top-5 bottom-0 md:bottom-auto" alt="">
                <img src="<?php echo e(Asset('assets/images/section8_2.webp')); ?>"
                    class="h-[200px] md:h-[400px] absolute  md:visible -right-4 md:right-10 md:top-24 bottom-20 md:bottom-auto"
                    alt="">

            </div>
        </div>
        <div class="px-5 md:px-0 bg-[#51b748]">

            <div class=" mt-20 p-4 md:p-0 overflow-x-hidden" data-aos="zoom-out">
                <div class="px-0  md:mx-auto  relative container max-w-screen-lg md:p-10">

                    <div class="md:flex text-center gap-2">
                        <div class="w-full md:w-1/2 bg-[white] h-[400px] p-2 md:p-0">
                            <h3 class="text-[170px] font-black mt-5" style="line-height:1">3</h3>
                            <p class="font-black text-3xl md:text-5xl mt-2">Powerful <br>
                                Brain Training <br>
                                Activities</p>
                            <p class="text-base font-semibold mt-2 pb-5">(for 3-18 years old)</p>
                        </div>
                        <div class="w-full md:w-1/2 mt-5 md:mt-0 bg-[#51b748] no-repeat-x md:bg-repeat-x h-[400px] w-full bg-cover bg-repeat-x-[no-repeat] relative p-2 md:p-0"
                            style="background-image: url(<?php echo e(Asset('assets/images/section9_2.webp')); ?>)">
                            <h3 class="text-3xl md:text-7xl font-semibold text-white mt-5 md:mt-10">EQ <br> Coaching
                            </h3>
                            <div class="p-5 absolute bottom-0 w-full">
                                <div class="bg-[#0048137d] text-white font-light w-full p-2">
                                    <p>Enhances growth mindset, emotional regulation, self-control, and self-confidence
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex text-center gap-2 md:mt-2">
                        <div class="w-full md:w-1/2 mt-5 md:mt-0 bg-[#51b748] no-repeat-x h-[400px] bg-cover bg-repeat-round relative p-2 md:p-0"
                            style="background-image: url(<?php echo e(Asset('assets/images/section9_3.webp')); ?>)">
                            <h3 class="text-3xl md:text-7xl font-semibold text-white mt-5 md:mt-10">Physical <br>
                                Training</h3>
                            <div class="p-5 absolute bottom-0">
                                <div class="bg-[#0048137d] text-white font-light w-fit p-2">
                                    <p>Improves learning speed, focus, planning abilities, and self-confidence. </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 mt-5 md:mt-0 bg-[#51b748] no-repeat-x h-[400px] bg-cover bg-repeat-round relative p-2 md:p-0"
                            style="background-image: url(<?php echo e(Asset('assets/images/section9_1.webp')); ?>)">
                            <h3 class="text-3xl md:text-7xl font-semibold text-white mt-5 md:mt-10">Cognitive <br>
                                Training</h3>
                            <div class="p-5 absolute bottom-0">
                                <div class="bg-[#0048137d] text-white font-light w-fit p-2">
                                    <p>Enhances listening acuity, visual accuracy, and communication skills, as well as
                                        strengthens working memory for thinking processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white px-5 md:px-0">

            <div class="px-10 container max-w-screen-lg mx-auto relative overflow-x-hidden" data-aos="zoom-in-right">
                <div class="md:flex gap-2 pt-20 md:pt-40 ">
                    <div class="md:w-2/4 relative  md:ml-20">
                        <h3 class="text-[140px] font-black mt-10" style="line-height:1">8</h3>
                        <p class="font-semibold text-2xl z-10" style="position: inherit">
                            Which 8 skills show progress <br> as a result of Brain Training?
                        </p>
                        <img src="<?php echo e(Asset('assets/images/section10_1.webp')); ?>"
                            class="absolute w-36 md:w-40 top-0 md:bottom-14 left-[6rem] md:left-40  z-0"
                            alt="">
                    </div>
                    <div class="md:w-2/4 mt-5 md:mt-0 md:ml-20">
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_S.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Speed</p>
                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_M.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Memory</p>

                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_A.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Attention</p>

                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_R.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Reasoning </p>

                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_T.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Timing & Coordination <br>
                            </p>

                        </div>

                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_E.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Emotions Management <br>
                            </p>

                        </div>

                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_S.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Social Skills</p>

                        </div>

                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_T.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Tenacity</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#f2f2f2]  relative overflow-hidden z-0 overflow-x-hidden">
        <div class="container md:max-w-screen-xl mx-auto mx-10 relative pb-40 " data-aos="zoom-in-left">

            <div class="px-10 container md:max-w-screen-xl mx-auto pt-20 md:pt-40 mb-40 pb-20 md:pb-0">
                <h3 class="text-center text-3xl md:text-5xl md:ml-40 font-semibold relative z-10 mb-2">

                    Don’t miss out on the

                </h3>
                <h3 class="text-center text-3xl md:text-5xl md:ml-40 font-semibold relative z-10 mb-5">

                    BrainFit Information Session!

                </h3>

                <div class=" flex justify-center md:ml-40">
                    <a href="#section6"
                        class="bg-gray-500 py-1 px-6  rounded-full text-white font-medium text-2xl mt-4">

                        Click Here
                    </a>
                </div>
                <img src="<?php echo e(Asset('assets/images/section11_2.webp')); ?>"
                    class="h-[300px] md:h-[460px] absolute bottom-0 -left-10 md:left-20 z-10" alt="">
                <img src="<?php echo e(Asset('assets/images/section11_1.webp')); ?>"
                    class="h-[250px] absolute -bottom-20 md:-bottom-28 left-20 md:left-72" alt="">

            </div>
        </div>

    </section>

    <div class="flex justify-center">

        <div class=" bg-[#d0d2d3] text-center p-10 w-full">
            <p>Copyright® by BrainFit Indonesia <br>
                <a href="https://www.brainfit.co.id">www.brainfit.co.id</a>
            </p>

            <div class="flex justify-center">
                <ul class="mt-4 list-disc flex flex-wrap md:gap-5  text-left">
                    <li class="md:ml-5 w-1/3 md:w-fit list-none">Singapore</li>
                    <li class="md:ml-5 w-1/3 md:w-fit">Malaysia</li>
                    <li class="md:ml-5 w-1/3 md:w-fit">Indonesia</li>
                    <li class="md:ml-5 w-1/3 md:w-fit list-none md:list-disc">China</li>
                    <li class="md:ml-5 w-1/3 md:w-fit">Hongkong</li>
                    <li class="md:ml-5 w-1/3 md:w-fit">Thailand</li>
                    <li class="md:ml-5 w-1/3 md:w-fit list-none md:list-disc">Philippines</li>
                    <li class="md:ml-5 w-1/3 md:w-fit">Turkey</li>
                    <li class="md:ml-5 w-1/3 md:w-fit">Saudi Arabia</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style=""><a
            id="WhatsApp-button" href="https://wa.me/<?php echo e($whatsapp); ?>" target="_blank" class="phoneJs"
            title="WhatsApp 360imagem">
            <div class="cbh-ph-circle"></div>
            <div class="cbh-ph-circle-fill"></div>
            <div class="cbh-ph-img-circle1"></div>
        </a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    
    <div class="fixed inset-0 z-10 text-black flex md:flex-col md:items-center md:justify-center overflow-y-auto bg-gray-600 bg-opacity-50 sm:justify-start hidden"
        id="modal4" x-data="{ modal: false }" x-show="modal"
        x-on:modal-overlay.window="if ($event.detail.id == 'modal-example4') modal=true"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="w-full px-2 py-10 md:py-20 transition-all transform sm:max-w-4xl" role="dialog"
            aria-modal="true" aria-labelledby="modal-headline" x-show="modal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
            <div class="bg-white rounded-xl  shadow-sm p-5 text-center mb-[10vh] md:mb-0  ">
                <div class="flex justify-end">
                    <button class=" " x-on:click="modal=false">
                        x
                    </button>
                </div>

                <div class="text-center font-semibold text-xl md:text-3xl mb-10">
                    Why do children need
                    <br>
                    CognitiveMAP Assessment?
                </div>
                <p class="text-base md:text-xl font-semibold mb-2">To determine:</p>
                <div class="max-h-[50vh] md:min-h-fit overflow-auto overflow-x-hidden">
                    <div class="flex justify-center gap-3">
                        <button class="bg-[#F9A61A] text-black font-semibold text-xs md:text-xl p-1.5 md:p-3">
                            Learning abilities
                        </button>
                        <button class="bg-[#F9A61A] text-black font-semibold text-xs md:text-xl p-1.5 md:p-3">
                            Motivational levels in children
                        </button>
                        <button class="bg-[#F9A61A] text-black font-semibold text-xs md:text-xl p-1.5 md:p-3">
                            Underlying factors in certain behaviour/ habit
                        </button>
                    </div>
                    <div class="flex justify-center p-3">
                        <div class="w-3/4">
                            <p>
                                CognitiveMAP assists in measuring and mapping the levels of cognitive skills in
                                children, including focus, memory, visual, accuracy, and auditory abilities.
                            </p>

                        </div>
                    </div>
                    <div class="flex justify-center mb-10">
                        <img src="<?php echo e(Asset('assets/images/section3_7-en.png')); ?>" alt="" class=" mt-10">

                    </div>
                    <p class="font-medium">
                        CognitiveMAP Assessment also provides a detailed analysis of a child's cognitive profile,
                        allowing for customised learning strategies that meet individual needs. BrainFit offers
                        personalised brain training program by identifying a child's cognitive strengths and weaknesses.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-10 text-black flex flex-col md:items-center md:justify-center overflow-y-auto bg-gray-600 bg-opacity-50 sm:justify-start hidden"
        id="modal3" x-data="{ modal: false }" x-show="modal"
        x-on:modal-overlay.window="if ($event.detail.id == 'modal-example3') modal=true"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="w-full px-2 pt-10 md:py-20 transition-all transform sm:max-w-3xl" role="dialog"
            aria-modal="true" aria-labelledby="modal-headline" x-show="modal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
            <div class="bg-white rounded-xl  shadow-sm p-5 text-center mb-[10vh] md:mb-0 ">
                <div class="flex justify-end">
                    <button class=" " x-on:click="modal=false">
                        x
                    </button>
                </div>

                <div class="text-center font-semibold text-xl md:text-3xl mb-10">
                    What causes difficulties and the lack of <br> motivation in children's learning?

                </div>
                <div class="flex justify-center overflow-auto overflow-x-hidden">
                    <div class="md:w-3/4 max-h-[50vh] md:min-h-fit ">
                        <p>
                            Every child has distinct and unique brain abilities. Various factors, such as heredity,
                            insufficient stimulation, environmental influences, and imbalanced activities during their
                            growth, can hinder the development of their cognitive skills.
                        </p>
                        <p class="mt-5">
                            These factors create a <span class="text-xl font-semibold">learning
                                gap</span>, making the learning process more challenging for children. Without
                            intervention, the learning gap will continue to widen. It can increase the sense of distress
                            and frustration, making children feel hopeless in their academic pursuits.
                        </p>
                        <div class="flex justify-center mb-10">
                            <img src="<?php echo e(Asset('assets/images/section3_6-en.png')); ?>" alt=""
                                class="h-40 object-contain mt-10" style="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-10 text-black flex flex-col md:items-center md:justify-center overflow-y-auto bg-gray-600 bg-opacity-50 sm:justify-start hidden"
        id="modal2" x-data="{ modal: false }" x-show="modal"
        x-on:modal-overlay.window="if ($event.detail.id == 'modal-example') modal=true"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="w-full px-2 pt-10 md:py-20 transition-all transform sm:max-w-3xl" role="dialog"
            aria-modal="true" aria-labelledby="modal-headline" x-show="modal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
            <div class="bg-white rounded-xl  shadow-sm p-5 mb-[50vh] md:mb-0 ">
                <div class="flex justify-end">
                    <button class=" " x-on:click="modal=false">
                        x
                    </button>
                </div>

                <div class="text-center font-semibold text-2xl md:text-3xl">
                    How is CognitiveMAP conducted?
                </div>
                <div class="ml-10 md:ml-0 md:flex justify-center mt-10 gap-10">
                    <div class="flex gap-2">
                        <img src="<?php echo e(Asset('assets/images/section5_3_1.png')); ?>" class="w-16 h-16 object-contain"
                            alt="">
                        <p class="self-center text-base md:text-xl font-semibold">Online/Offline</p>
                    </div>
                    <div class="flex gap-2 mt-4  md:mt-0">
                        <img src="<?php echo e(Asset('assets/images/section5_3_2.png')); ?>" class="w-16 h-16 object-contain"
                            alt="">
                        <p class="self-center text-base md:text-xl font-semibold">1.5 hours assessment</p>
                    </div>
                </div>
                <div class="ml-10 md:ml-0 md:flex justify-center mt-4 md:mt-10 gap-10 mb-5">
                    <div class="flex gap-2">
                        <img src="<?php echo e(Asset('assets/images/section5_3_3.png')); ?>" class="w-16 h-16 object-contain"
                            alt="">
                        <p class="self-center text-base md:text-xl font-semibold">
                            1 hour for result interpretation and consultation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-10 text-black flex flex-col md:items-center  overflow-y-auto bg-gray-600 bg-opacity-50 sm:justify-start hidden"
        id="modal1" x-data="{ modal: false }" x-show="modal"
        x-on:modal-overlay.window="if ($event.detail.id == 'modal-example2') modal=true"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="w-full px-2 py-10 md:py-20 transition-all transform sm:max-w-3xl" role="dialog"
            aria-modal="true" aria-labelledby="modal-headline" x-show="modal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
            <div class="bg-white rounded-xl  shadow-sm p-5  md:mb-[25vh] md:mb-0 ">
                <div class="flex justify-end">
                    <button class=" " x-on:click="modal=false">
                        x
                    </button>
                </div>

                <div class="text-center font-semibold text-2xl md:text-3xl">
                    What are the benefits of <br> CognitiveMAP Assessment?
                </div>
                <div class="flex justify-center">
                    <div class="w-full ml-10 md:ml-0 md:w-3/4">
                        <div class="block md:flex justify-center mt-10 gap-10">
                            <div class="flex gap-2 w-full md:w-1/2 mt-4 md:mt-0">
                                <img src="<?php echo e(Asset('assets/images/section5_4_2.webp')); ?>"
                                    class="w-[100px] h-[180px] object-contain" alt="">
                                <div class="self-center font-semibold">
                                    <p class="text-base">Overview</p>
                                    <p class="text-sm font-normal">
                                        of cognitive abilities across the five brain areas.
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-2 w-full md:w-1/2 mt-4 md:mt-0">
                                <img src="<?php echo e(Asset('assets/images/section5_4_1.webp')); ?>"
                                    class="w-[100px] h-[180px] object-contain" alt="">
                                <p class="text-sm self-center">
                                    <span class="text-base font-semibold">Analysis</span>
                                    Detailed analysis of specific strengths and weaknesses in each brain area.
                                </p>
                            </div>
                        </div>
                        <div class="block md:flex justify-left mt-4 md:mt-10 gap-10 mb-5">
                            <div class="flex gap-2 w-full md:w-1/2">
                                <img src="<?php echo e(Asset('assets/images/section5_4_3.webp')); ?>"
                                    class="w-[100px] h-[180px] object-contain" alt="">
                                
                                <p class="text-sm self-center">Guidance on <span
                                        class="text-base font-semibold">strategies</span>
                                    aligned with cognitive profile.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-10 text-black flex md:flex-col md:items-center md:justify-center overflow-y-auto bg-gray-600 bg-opacity-50 sm:justify-start hidden"
        id="modal6" x-data="{ modal: false }" x-show="modal"
        x-on:modal-overlay.window="if ($event.detail.id == 'modal-example5') modal=true"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="w-full px-2 py-10 md:py-20  md:pt-20  relative   transition-all transform sm:max-w-6xl"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-show="modal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
            <div class="" x-data x-cloak>
                <div class="">
                    

                    <template x-if="$store.show_testi === 0">
                        <div class="bg-white rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Lolita, 9 years old
                                    <br>
                                    <span class="jajargenjangTextGold z-10 mt-3"> Difficulty in Paying
                                        Attention</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-40 pb-10 md:pb-40 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Lolita, a hyperactive child, had caught the attention of her teachers since
                                            fourth grade. She used to enjoy chatting with friends during lessons, often
                                            ignored the teacher's reprimands, and rarely completed her tasks on time.
                                            Lolita would often express her frustration while doing her assignments by
                                            shouting and crying. As a result, her report card grades were always below
                                            average, leading to frequent scolding from her mother. According to her
                                            mother, Lolita had not yet realised the responsibility of learning. However,
                                            Lolita genuinely tried her best. But sometimes, the workload was just too
                                            overwhelming for her.

                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_1.webp')); ?>"
                                            class=" md:invisible object-contain md:absolute -bottom-[4.2rem] left-0 md:w-[600px] md:h-[600px]"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_1.webp')); ?>"
                                class="hidden md:block object-contain md:absolute -bottom-[4.2rem] left-0 md:w-[600px] md:h-[600px]"
                                alt="">
                        </div>
                    </template>

                    <template x-if="$store.show_testi === 1">
                        <div class="bg-white rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 md:pb-20">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Alden, 9 years old
                                    <br>
                                    <span class="jajargenjangTextGold z-10 mt-3"> has Impulsive Behaviour</span>
                                </div>

                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-20 md:mt-20 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Alden, a 4th-grade student, frequently got into trouble due to his tendency
                                            to act impulsively without considering the consequences. He pushed his
                                            friends aggressively, copied answers from classmates during math exams, and
                                            often made a mess of his room. These traits often led to Alden's mother
                                            getting frustrated, and he struggled to make friends, too. Little did anyone
                                            know that Alden had an underlying weakness in his impulse control abilities.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_2.webp')); ?>"
                                            class=" md:hidden object-contain md:w-[450px] md:h-[450px]"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_2.webp')); ?>"
                                class="hidden md:block object-contain md:absolute -bottom-2 right-0 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 2">
                        <div class="bg-[#fab01a] rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Gretta, 7 years old
                                    <br>
                                    Frequently <span class="jajargenjangTextWhite z-10 mt-3">Forgets Things</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-40 md:pb-40 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Gretta's frequent bad habits at school and home were a source of frustration
                                            for her mother. She would often neglect to do her homework due to misplaced
                                            books and writing tools. Additionally, she tended to forget about
                                            assignments she had completed at school, and things she had memorized at
                                            home would slip her mind when she was at school. The constant forgetfulness
                                            led Gretta's mother to almost lose hope in her. Her mother thought Gretta
                                            had trouble focusing during study time, but the truth was that Gretta had
                                            difficulties with her memory and working memory functions.

                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_3.webp')); ?>"
                                            class="md:hidden object-contain md:absolute -bottom-5 -left-20 md:w-[450px] md:h-[450px]"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_3.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-5 -left-20 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 3">
                        <div
                            class="bg-[#fab01a] rounded-xl overflow-hidden relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Kiran, 8 years old
                                    <br>
                                    has <span class="jajargenjangTextWhite z-10 mt-3">Difficulty Regulating
                                        Emotions</span>
                                </div>


                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-20 md:pb-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Kiran is an 8-year-old boy with puzzling emotions. Kiran used to get angry
                                            when feeling lonely, especially when their friends played with others.
                                            Expressing her feelings when she was upset with her older sibling at home
                                            was also challenging for Kiran. Her friends would often distance themselves
                                            from her due to her stubbornness and tantrums when things didn’t go her way.
                                            However, when their friends had problems, Kiran would always be there to
                                            support them. His parents thought that Kiran was sensitive and had a strong
                                            personality that always wanted to be in control. Conflicts happened almost
                                            every day, both at school and at home. There wasn't a single day without
                                            loud voices and tears.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_4.webp')); ?>"
                                            class=" md:hidden object-contain  md:w-[450px] md:h-[450px]"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_4.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-8 -right-4 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 4">
                        <div class="bg-white rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Lamark, 5 years old
                                    <br>
                                    <span class="jajargenjangTextGold z-10 mt-3">Slow Processing</span>
                                </div>

                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-60 md:pb-20 md:pt-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Lamark earned the nickname "Turtle" from his kindergarten friends due to his
                                            slow pace. He seemed to take his time with everything in class or at home.
                                            For example, he finished tasks last in class and was slow in everyday
                                            activities like bathing and eating. Lamark couldn't participate in races as
                                            he got groggy if he rushed. This left his parents feeling frustrated and
                                            concerned, wondering if he was simply passive or lazy. Little did they know
                                            that Lamark was actually dealing with delays in motor coordination and the
                                            speed at which his brain processed information.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_5.webp')); ?>"
                                            class="md:hidden object-contain " alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_5.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-0 -left-10 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 5">
                        <div class="bg-[#fab01a] rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5 md:pb-28">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Lupita, 14 years old
                                    <br>
                                    Passive in <span class="jajargenjangTextWhite z-10 mt-3">Thinking</span>
                                </div>


                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div class="w-full md:w-2/4 md:ml-20 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Lupita was a game and food enthusiast. Due to her average grades in school,
                                            she lacked confidence. She also had no friends because she was perceived as
                                            not contributing during group work. Feeling inferior, Lupita chose to go
                                            along with whatever her friends wanted to be accepted by the group. Lupita
                                            rarely spoke to her parents and younger sibling because she was reluctant to
                                            engage in conversations that didn't revolve around her interests. Her usual
                                            responses were, "I don't know," or, "I forgot!". Lupita’s mother became
                                            frustrated and didn't know how to motivate her, unaware that Lupita's
                                            passive behaviour was actually a way to mask her difficulties in critical
                                            and creative thinking abilities.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_6.webp')); ?>"
                                            class=" md:hidden object-contain" alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_6.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-[4.45rem] -right-0 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 6">
                        <div class="bg-[#fab01a] rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5 md:pb-20">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Enzo, 10 years old
                                    <br>
                                    <span class="jajargenjangTextWhite z-10 mt-3">is Prone to Giving Up Easily</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div class="w-full md:w-2/4 md:ml-80 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p class="md:ml-10">
                                            Enzo avoided challenging tasks. Riding a two-wheeled bicycle was difficult
                                            for him. Similarly, he declined to join futsal class as he considered it
                                            challenging. In math assignments, Enzo chose to solve easier problems,
                                            leaving the difficult ones unanswered before turning them in to the teacher.
                                            Despite Enzo's enthusiasm for new things, he would get frustrated and give
                                            up when faced with difficulties. His mother firmly believed that Enzo
                                            actually had great learning abilities. He excelled in several subjects,
                                            which made it puzzling to understand why he behaved this way. Could it be a
                                            matter of Enzo's mindset? Or were there specific learning challenges he
                                            faced?
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_7.webp')); ?>"
                                            class=" md:hidden object-contain " alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_7.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-[6.8rem] -left-0 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 7">
                        <div class="bg-white rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 md:pb-20">
                            <div class=" p-5 md:pb-20">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Benn, 11 years old
                                    <br>
                                    Disliked
                                    <span class="jajargenjangTextGold z-10 mt-3">Reading</span>
                                </div>

                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-60 md:mt-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Ben was a smart student with a high enthusiasm for learning. However, he
                                            struggled with comprehending long texts. When given assignments involving
                                            reading short stories or math problems, he needed to read them repeatedly to
                                            understand the content. Benn didn't enjoy subjects like geography, history,
                                            biology, Indonesian, and English. Whenever there was homework, his mother
                                            always helped him by reading the texts and explaining the content to him. As
                                            a result, when his mother wasn't around, Benn felt overwhelmed and struggled
                                            to do tasks on his own.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_8.webp')); ?>"
                                            class=" md:hidden object-contain " alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_8.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-2.5 -left-0 w-[450px] h-[450px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 8">
                        <div
                            class="bg-white rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 overflow-hidden">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Ryan, 10 years old
                                    <br>
                                    Disliked
                                    <span class="jajargenjangTextGold z-10 mt-3">Mathematics </span>
                                </div>

                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-20 md:pb-20 md:pt-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Since kindergarten, Ryan consistently received poor grades in math. By
                                            fourth grade, he still struggled with math problems. Despite excelling in
                                            art and sports, Ryan wasn't satisfied or proud. He always wanted to be like
                                            his friends who could calculate quickly and had good math grades to receive
                                            praise from their teachers and parents. Despite attending math lessons, Ryan
                                            couldn't perform as well or as fast as his friends. Ryan started believing
                                            that he lacked talent in mathematics. He began avoiding and neglecting math
                                            in his fourth-grade class. However, he just needed to strengthen the parts
                                            of the brain related to mathematical processes.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_9.webp')); ?>"
                                            class="md:hidden object-contain " alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_9.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-[5.6rem] -right-0 w-[600px] h-[550px]"
                                alt="">
                        </div>
                    </template>
                    <template x-if="$store.show_testi === 9">
                        <div class="bg-[#fab01a] rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0 ">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Maddy, 12 years old
                                    <br>
                                    Difficulty in <span class="jajargenjangTextWhite z-10 mt-3">Communicating</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-80 md:pb-20 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p class="md:ml-10">
                                            Maddy was often perceived as arrogant and aloof by her own friends. However,
                                            she wasn't actually arrogant or aloof; she simply had difficulty expressing
                                            her thoughts and feelings spontaneously. Maddy struggled to understand the
                                            conversation and provide timely responses when interacting with others.
                                            Engaging in conversations exhausted her, so she preferred to remain silent
                                            and go unnoticed in social groups.

                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_10.webp')); ?>"
                                            class="  md:hidden object-contain " alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_10.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-0 -left-0 w-[450px] h-[450px] invisible md:visible"
                                alt="">
                        </div>
                    </template>
                </div>


            </div>


        </div>
    </div>
    
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('show_testi', 0)
        })
    </script>
    <script>
        <?php if(session('success')): ?>
            alert("Successfully scheduled, please wait for confirmation from us.")
        <?php endif; ?>

        var timeout;

        window.addEventListener('scroll', function() {
            clearTimeout(timeout); // Menghapus timeout sebelumnya (jika ada)
            var container = document.getElementById('section__itemContainer');
            // var divs = document.querySelectorAll('.section__item');

            // for (var i = 0; i < divs.length; i++) {
            //     var div = divs[i];
            //     div.style.opacity = 0.5;
            // }
            container.classList.add('opacity-animated');
            timeout = setTimeout(function() {
                container.classList.remove('opacity-animated');
                // for (var i = 0; i < divs.length; i++) {
                //     var div = divs[i];
                //     div.style.opacity = 1;
                // }
            }, 0); // Mengatur waktu timeout (dalam milidetik) sebelum mengembalikan opasitas ke 1
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('modal1').classList.remove('hidden');
            document.getElementById('modal2').classList.remove('hidden');
            document.getElementById('modal3').classList.remove('hidden');
            document.getElementById('modal4').classList.remove('hidden');
            document.getElementById('modal5').classList.remove('hidden');
            document.getElementById('modal6').classList.remove('hidden');

        });


          $(document).ready(function () {
    //-------------------------------SELECT CASCADING-------------------------//
    var selectedCountry = (selectedRegion = selectedCity = "");
    // This is a demo API key for testing purposes. You should rather request your API key (free) from http://battuta.medunes.net/
    // Populate country select box from battuta API
    url =
      'https://hariisv.github.io/api-wilayah-indonesia/api/provinces.json'
    $.getJSON(url, function (data) {
      // console.log(data)
      $("#region option").remove();
      $('#region').append(
        '<option value="" selected disabled hidden class="inputInValid">Provinsi</option>');
      $.each(data, function (index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
         $("#region").append(
            '<option value="' + value.name + '" class="inputValid" data-id="' + value.id + '">' + value
              .name +
            "</option>"
        );
      });
    });
    // });
    // Region selected --> updated city list
    $("#region").on("change", function () {
      region = $(this).find("option:selected").data("id");
        url =
          `https://hariisv.github.io/api-wilayah-indonesia/api/regencies/${region}.json`
      url =
        `https://hariisv.github.io/api-wilayah-indonesia/api/regencies/${region}.json`
      $.getJSON(url, function (data) {
        console.log(data);
        $("#city option").remove();
        $('#city').append(
          '<option value="" selected disabled hidden class="inputInValid">Kota</option>'
        );
        $.each(data, function (index, value) {
          // APPEND OR INSERT DATA TO SELECT ELEMENT.
          $("#city").append(
            '<option value="' + value.name + '" class="inputValid">' +
            value.name +
            "</option>"
          );
        });
      });
    });
    // city selected --> update location string
    $("#city").on("change", function () {
      selectedCity = this.options[this.selectedIndex].text;
      $("#location").html(
        "Locatation: Country: " +
        selectedCountry +
        ", Region: " +
        selectedRegion +
        ", City: " +
        selectedCity
      );
    });
  });
  AOS.init();
    </script>
</body>

</html>
<?php /**PATH /home/u726706882/domains/brainfitonline.co.id/public_html/resources/views/index-en.blade.php ENDPATH**/ ?>