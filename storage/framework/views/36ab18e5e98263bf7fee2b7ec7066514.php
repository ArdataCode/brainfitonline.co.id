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
                'md:min-h-[900px] min-h-[540px] sm:min-h-[520px]'"
            class="  pb-5 md:pb-auto  px-5 md:px-14 container max-w-screen-xl mx-auto relative z-10 bg-white overflow-visible md:overflow-visible"
            data-aos="fade-right">
            <div class="w-12/12 z-10">
                <div
                    class="titleSection text-2xl relative md:text-6xl text-center font-medium mt-10 md:mt-32 leading-none">
                    <div class="flex justify-center">
                        <div class="w-24 h-1 bg-[#cd188a] mb-4  -top-4"></div>
                    </div>

                    Maksimalkan potensi
                    otak anak <br class="hidden md:block"> dengan
                    Asesmen CognitiveMAP:
                </div>
                <h2 class="text-[#000000]  font-semibold text-xl md:text-4xl mt-5 text-center">
                    Cek kemampuan otak anak sekarang!

                </h2>
                <div>
                    <div class="flex justify-center">
                        <button x-on:click="open = ! open"
                            class="bg-[#6d6e71] text-[#ffffff] px-5 py-1 rounded-full mt-5 text-sm">
                            Selengkapnya
                        </button>
                    </div>
                    <div x-show="open">
                        <p class="text-sm md:text-base mt-4 text-center font-medium">
                            Dengan CognitiveMAP Asesmen yang dilakukan melalui
                            sebuah tes khusus, Parents dapat mengetahui informasi
                            tentang kelebihan dan kelemahan kemampuan otak anak
                            serta mendapatkan rekomendasi program pelatihan
                            sesuai kebutuhan anak. Dengan begitu, anak akan
                            berkembang dengan bahagia dan percaya diri. <br> <br>
                            Parents, cek kemampuan otak Anak dengan
                            CognitiveMAP Asesmen dan mulai kembangkan
                            potensinya SEKARANG!
                        </p>

                    </div>
                </div>
            </div>
            <img class=" h-[400px] md:h-[750px] absolute md:left-[25%] object-contain mozilla-left w-fit"
                src="<?php echo e(Asset('assets/images/section1.webp')); ?>" alt="">
        </section>
    </div>
    <section class="bg-[#f2f2f2]  pb-20 md:pb-40 pt-20 md:pt-40 overflow-hidden">
        <div class="container max-w-screen-xl px-5 md:px-0 mx-auto mx-10 relative">
            <h3 class="text-center text-2xl md:text-5xl  font-semibold">
                <div class="flex justify-center pb-3">
                    <div class="h-1 w-20 bg-black"></div>
                </div>
                Video CognitiveMAP
            </h3>
            <div class="flex justify-center pb-3 mt-10  relative z-0" data-aos="zoom-out">

                <iframe src="https://www.youtube.com/embed/SCtqJbEb_N8?si=Z4aUKE2FIAB8k0pr" class="shadow_video" frameborder="0"
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
                Apa penyebab <br>
                kesulitan dan kurangnya <br>
                motivasi belajar <br>
                pada anak? <br>
            </h3>

            <div class="flex justify-center">
                <button class="text-center mt-1 mb-8 text-base font-semibold text-[#0bbce7]" x-data="{ id: 'modal-example3' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    Selengkapnya >
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
                Mengapa anak <br>
                butuh asesmen <br>
                CognitiveMAP?
            </h3>
            <div class="flex justify-center">
                <button class="text-center mt-1 mb-8 text-base font-semibold text-[#0bbce7]" x-data="{ id: 'modal-example4' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    Selengkapnya >
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
                Apa saja yang <br>
                didapatkan dari <br>
                Asesmen CognitiveMAP?<br>
            </h3>
            <div class="flex justify-center z-10 " style="position: inherit">
                <button class="text-center mt-1 mb-8 text-base" x-data="{ id: 'modal-example2' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    Selengkapnya >
                </button>
            </div>

            <div class="flex justify-center mt-4">
                <img src="<?php echo e(Asset('assets/images/section5_1.webp')); ?>" alt=""
                    class="h-80 md:h-[30rem] absolute -bottom-36 md:-bottom-36  "
                    style="box-shadow: 7px 24px 13px -3px black">
            </div>

        </div>
        <div class="w-full md:w-6/12 relative overflow-hidden bg-[#0bbce7] pt-14 mt-10 md:mt-0 md:h-auto h-[400px]">
            <h3 class="text-center text-2xl md:text-3xl font-medium">
                <div class="flex justify-center pb-3">
                    <div class="h-0.5 w-20 bg-white"></div>
                </div>
                Bagaimana pelaksanaan <br>
                CognitiveMAP? <br>
            </h3>
            <div class="flex justify-center z-10" style="position: inherit">
                <button class="text-center mt-1 mb-8 text-base" x-data="{ id: 'modal-example' }"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    Selengkapnya >
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
                    Apa kata mereka setelah <br>
                    Asesmen CognitiveMAP?
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
                                        Saya selalu bingung dan bertanya-tanya mengenai
                                        penyebab perilaku anak saya yang susah fokus.
                                        Menurut saya dia terkadang bisa, terkadang memang
                                        susah fokus. Asesmen CognitiveMAP ini membantu
                                        saya memahami anak saya dengan sangat jelas.
                                    </p>
                                </template>

                                <template x-if="testimonialActive === 2">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 2">
                                        Tadinya mengira anak kami punya masalah fokus.
                                        Sangat lega ketika tahu ternyata ia memiliki kemampuan
                                        yang bagus-bagus, termasuk stamina fokus yang baik.
                                        Saya setuju dengan hasil assesmen yang mengatakan
                                        bahwa kendala yang dialami adalah di fixed mindsetnya
                                        yang membuatnya seperti mudah menyerah. Kami sekarang lebih tahu bagaimana
                                        membantunya.
                                    </p>
                                </template>

                                <template x-if="testimonialActive === 3">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 3">
                                        Saya sudah mencoba berbagai tes dan
                                        asesmen buat anak, belum pernah ada
                                        yang memberikan gambaran dan
                                        konsultasi se-detail ini. Memang benar
                                        perlu diakui bahwa BrainFit team expert
                                        di bidang otak.
                                    </p>
                                </template>
                                <template x-if="testimonialActive === 4">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 4">
                                        Selama ini saya hanya tahu tes IQ. Setelah konsultasi
                                        asesmen CognitiveMAP, saya jadi paham mengenai
                                        banyak kemampuan anak saya yang lain.
                                        Konsultan BrainFit benar-benar generous dalam
                                        memberikan penjelasan dan strategi kepada kami.
                                    </p>
                                </template>
                                <template x-if="testimonialActive === 5">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 5">
                                        Setelah asesmen dan konsultasi hasilnya,
                                        saya menyesal tidak lebih awal mengenal BrainFit.
                                        Ternyata selama ini saya banyak salah paham dan
                                        marah kepada anak saya, setelah tahu apa yang
                                        menjadi kendalanya dalam otaknya, saya menyesal
                                        dan sekarang bertekad untuk membantunya.
                                        Thank you, BrainFit.
                                    </p>
                                </template>
                                <template x-if="testimonialActive === 6">
                                    <p class=""
                                        x-show.transition.opacity.duration.500ms="testimonialActive === 6">
                                        Awalnya kami direkomendasikan oleh guru di sekolah.
                                        Setelah melihat hasil dan berkonsultasi, kami seperti
                                        menemukan harapan baru bagi anak kami. Hal dan
                                        informasi yang disampaikan berdasarkan riset otak
                                        yang dijelaskan dengan begitu sederhana dan
                                        mudah dipahami.
                                    </p>
                                </template>
                            </div>

                            <div class="flex my-4 justify-center items-center z-10">
                                <div class="">
                                    <div class="absolute -bottom-0 md:-bottom-8 right-0">
                                        <template x-if="testimonialActive === 1">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 1">
                                                Ibu AR, usia anak 9 thn.
                                            </p>
                                        </template>

                                        <template x-if="testimonialActive === 2">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 2">
                                                Ibu ZE, usia anak 12 thn.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 3">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 3">
                                                Ibu HT, usia anak 8 thn.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 4">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 4">
                                                Ibu BR, usia anak 10 thn.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 5">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 5">
                                                Ibu AS, usia anak 7 thn.
                                            </p>
                                        </template>
                                        <template x-if="testimonialActive === 6">
                                            <p class="text-base md:text-xl"
                                                x-show.transition.opacity.duration.500ms="testimonialActive === 6">
                                                Ibu EL, usia anak 14 thn.
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
                Jadwalkan BrainFit Information Session <br>
                Sekarang!
                <div class="bg-[#f15b39] px-4 py-12 w-fit rounded-full text-white font-medium text-3xl absolute top-[-140px] right-[0]"
                    style="transform: rotateZ(10deg)">
                    GRATIS
                </div>
            </h3>
            <div class="md:flex justify-end pb-3 mt-10  relative z-0">

                <div class="md:w-1/2 text-lg">
                    Ingin tahu lebih lengkap? <br>
                    Jadwalkan sesi informasi dengan mengisi <br>
                    data berikut dan dapatkan keuntungan: <br>

                    <div class="bg-[#f2f2f2] w-fit py-2 px-4 mb-2.5 mt-4">
                        Konsultasi
                    </div>
                    <div class="bg-[#f2f2f2] w-fit py-2 px-4 mb-2.5">
                        Informasi lengkap mengenai Asesmen CognitiveMap
                    </div>
                    <div class="bg-[#f2f2f2] w-fit py-2 px-4 mb-2.5">
                        Informasi Program Brain Training
                    </div>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0">
                    <form action="<?php echo e(Route('email-send')); ?>" method="POST"
                        onsubmit="myButton.disabled = true; return true;">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="nama"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Nama Orang Tua" />
                        <input type="text" name="telephone"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Nomor WhatsApp" onkeypress='validate(event)' minlength="10"
                            maxlength="13" />
                        <input type="email" name="email"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Email" />
                        <input type="text" name="nama_anak"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Nama Anak" />
                        <input type="number" min="1" max="100" name="umur"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Usia Anak" />
                        <input type="text" min="1" max="100" name="kelas"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-4 px-3 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Kelas Anak" />
                        <select id="region" required name="provinsi"
                            onchange="this.className=this.options[this.selectedIndex].className" class="inputInValid">
                            <option class="inputInValid" value="" selected disabled hidden>Provinsi
                            </option>
                        </select>
                        <select id="city" required class="inputInValid" name="kota"
                            onchange="this.className=this.options[this.selectedIndex].className">
                            <option value="" class="inputInValid" selected disabled hidden>Pilih Provinsi
                                Terlebih
                                Dahulu</option>
                        </select>
                        <div class=" flex justify-end">
                            <button type="submit" id="myButton"
                                class="bg-gray-500 w-16 py-1 px-1 rounded-full text-white font-medium text-sm mt-4">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="px-2 md:px-10">
                <button
                    class="bg-[#f15b39] cursor-auto w-full py-3 px-1 rounded-full text-white font-medium md:text-2xl mt-4">
                    Dapatkan <span class="text-xl font-black">DISKON</span> untuk asesmen CognitiveMap
                    setelah sesi
                    informasi!
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
                Setiap anak memiliki cerita mengenai tantangan yang <br>
                sedang mereka hadapi. Simak cerita mereka:
            </p>


            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10 " id="section__itemContainer">

                <button
                    class="h-[210px] w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 0"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Lolita, 9 Tahun
                        <br>Sulit
                        fokus
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
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Alden, 9 Tahun
                        <br> Impulsif
                    </h6>
                    <img src="<?php echo e(Asset('assets/images/section2_2.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[150px] md:max-h-full md:h-[150px] left-[5%] xs:left-[25%] md:left-[20%] css_cutom_style"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 2"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Greta, 7 Tahun
                        <br>Sering lupa
                    </h6>
                    <img src="<?php echo e(Asset('assets/images/section2_3.webp')); ?>"
                        class="absolute -bottom-4 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px] css_cutom_style left-[5%] xs:left-[20%] md:left-[10%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 3"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Kiran, 8 Tahun
                        <br>Sulit
                        mengontrol emosi
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_4.webp')); ?>"
                        class="absolute -bottom-0 md:-bottom-5  object-contain w-fit max-h-[140px] md:max-h-full md:h-[160px] left-[5%] xs:left-[25%] md:left-[15%] kiran__mozilla"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 4"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Lamark, 5 Tahun
                        <br>Lambat
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_5.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px] css_cutom_style xs:left-[25%] md:left-[20%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 5"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Lupita, 14 Tahun
                        <br>Malas
                        berpikir
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
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Enzo, 10 Tahun
                        <br>Mudah
                        menyerah
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_7.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 xs:-bottom-10 object-contain w-fit max-h-[160px] xs:max-h-[181px] md:max-h-[160px] xs:object-cover  md:object-contain xs:w-full"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 7"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Benn, 11 Tahun
                        <br>Tidak suka
                        membaca
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_8.webp')); ?>"
                        class="absolute md:-bottom-4 bottom-0 object-contain w-fit max-h-[160px] md:max-h-full md:h-[160px] md:ml-10 css_cutom_style left-[5%] xs:left-[25%] md:left-[10%]"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gray relative  section__item overflow-hidden rounded-xl "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 8"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Ryan, 10 Tahun
                        <br>Tidak suka
                        matematika
                    </h6>

                    <img src="<?php echo e(Asset('assets/images/section2_9.webp')); ?>"
                        class="absolute bottom-0 md:-bottom-10 object-contain w-fit  md:h-[200px] xs:h-[150px] xs:w-full xs:object-cover"
                        alt="">
                </button>
                <button
                    class="w-full md:max-h-[14rem] md:max-w-[14rem] mx-auto mt-4 h-[210px] section2__gold relative  section__item overflow-hidden rounded-xl  "
                    x-data="{ id: 'modal-example5' }" @click="$store.show_testi = 9"
                    x-on:click="$dispatch('modal-overlay',{id})">
                    <h6 class="text-center mt-4 font-bold text-base md:text-lg absolute top-0 w-full">Maddy, 12 Tahun
                        <br>Sulit
                        berkomunikasi
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
                    Brain Training Program setelah asesmen
                </h3>
                <p class="text-center mt-10 text-2xl z-20 block" style="position: inherit">Bangun kemampuan kognitif
                    anak
                    melalui brain workout</p>

                <div x-data="{ open: false }" id="modal5" class="hidden z-10" style="position: inherit">

                    <div class=" flex justify-center z-20" style="position: inherit">
                        <button x-on:click="open = ! open"
                            class="bg-gray-500 py-1 px-6  rounded-full text-white font-medium text-base mt-10">
                            Selengkapnya
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
                                        <p class="self-center text-xl">Langkah <br> Proses</p>
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
                                            Setiap anak punya otak yang berbeda
                                            dan unik. Untuk itu BrainFit melakukan
                                            asesmen CognitiveMAP agar bisa
                                            mengetahui berbagai kemampuan
                                            kognitif anak, kelebihan dan
                                            kelemahannya dalam proses berpikir
                                            dan belajar.
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
                                            Dari hasil CognitiveMAP, BrainFit merancang
                                            program brain training yang dipersonalisasi
                                            secara khusus sesuai kebutuhan anak.
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
                                            Anak menjalankan program brain trainingnya
                                            dengan 3 aktivitas unggulan yaitu <span class="italic">Cognitive Training,
                                                Physical Training,</span> dan <span class="italic">Emotional
                                                Coaching.</span>
                                            Selama mengikuti program, BrainFit memantau,
                                            membimbing dan mendampingi parents dan anak
                                            dalam proses transformasi ini.
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
                                            BrainFit melakukan pemantauan rutin
                                            melalui laporan latihan mingguan terhadap
                                            8 aspek penting yaitu <span class="italic">Speed, Memory,
                                                Attention, Reasoning, Timing & Coordination,
                                                Exam Results, Social-Emotional Skills & Tenacity.</span>
                                            Pemantauan juga dilakukan dengan sesi feedback
                                            berkala dengan orang tua dan dengan
                                            CognitiveMAP pasca pelatihan.
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

            <div class=" mt-20   p-4 md:p-0 overflow-x-hidden" data-aos="zoom-out">
                <div class="px-0  md:mx-auto  relative container max-w-screen-lg md:p-10">

                    <div class="md:flex text-center gap-2">
                        <div class="w-full md:w-1/2 bg-[white] h-[400px] p-2 md:p-0">
                            <h3 class="text-[170px] font-black mt-5" style="line-height:1">3</h3>
                            <p class="font-black text-3xl md:text-5xl mt-2">Powerful <br>
                                Brain Training <br>
                                Activities</p>
                            <p class="text-base font-semibold mt-2 pb-5">(3-18 Tahun)</p>
                        </div>
                        <div class="w-full md:w-1/2 mt-5 md:mt-0 bg-[#51b748] no-repeat-x md:bg-repeat-x h-[400px] w-full bg-cover bg-repeat-x-[no-repeat] relative p-2 md:p-0"
                            style="background-image: url(<?php echo e(Asset('assets/images/section9_2.webp')); ?>)">
                            <h3 class="text-3xl md:text-7xl font-semibold text-white mt-5 md:mt-10">EQ <br> Coaching
                            </h3>
                            <div class="p-5 absolute bottom-0 w-full">
                                <div class="bg-[#0048137d] text-white font-light w-full p-2">
                                    <p>Meningkatkan <span class="italic">growth mindset</span>, regulasi emosi,
                                        <br class="hidden md:block">
                                        <span class="italic">self-control</span> , dan kepercayaan diri.
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
                                    <p>Meningkatkan kecepatan belajar, fokus, kemampuan untuk merencanakan, dan
                                        kepercayaan diri. </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 mt-5 md:mt-0 bg-[#51b748] no-repeat-x h-[400px] bg-cover bg-repeat-round relative p-2 md:p-0"
                            style="background-image: url(<?php echo e(Asset('assets/images/section9_1.webp')); ?>)">
                            <h3 class="text-3xl md:text-7xl font-semibold text-white mt-5 md:mt-10">Cognitive <br>
                                Training</h3>
                            <div class="p-5 absolute bottom-0">
                                <div class="bg-[#0048137d] text-white font-light w-fit p-2">
                                    <p>Meningkatkan ketajaman mendengarkan, ketelitian visual, memperkuat <span
                                            class="italic">working memory</span>
                                        untuk proses berpikir, dan berkomunikasi.
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
                            Kemampuan apa saja <br>
                            yang meningkat <br>
                            setelah Brain Training? <br>
                        </p>
                        <img src="<?php echo e(Asset('assets/images/section10_1.webp')); ?>"
                            class="absolute w-36 md:w-40 top-0 md:bottom-14 left-[6rem] md:left-40  z-0"
                            alt="">
                    </div>
                    <div class="md:w-2/4 mt-5 md:mt-0 md:ml-20">
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_S.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Speed (Kecepatan)</p>
                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_M.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Memory (Memori)</p>

                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_A.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Attention (Perhatian)</p>

                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_R.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Reasoning (Logika)</p>

                        </div>
                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_T.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Timing & Coordination <br>
                                (Waktu & Koordinasi)</p>

                        </div>

                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_E.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Emotions Management <br>
                                (Manajemen Emosi)</p>

                        </div>

                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_S.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Social Skills (Skil sosialisasi)</p>

                        </div>

                        <div class="flex mb-3">
                            <img src="<?php echo e(Asset('assets/images/section10_T.webp')); ?>" class="h-12" alt="">
                            <p class="self-center ml-2.5 text-black">Tenacity (Kegigihan)</p>

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

                    Yuk, hadiri sesi informasi

                </h3>
                <h3 class="text-center text-3xl md:text-5xl md:ml-40 font-semibold relative z-10 mb-5">

                    BrainFit sekarang!

                </h3>
                <div class=" flex justify-center md:ml-40">
                    <a href="#section6"
                        class="bg-gray-500 py-1 px-6  rounded-full text-white font-medium text-2xl mt-4">
                        Klik di sini
                    </a>
                </div>
                <img src="<?php echo e(Asset('assets/images/section11_2.webp')); ?>"
                    class="h-[300px] md:h-[460px] absolute bottom-0 -left-10 md:left-32 z-10" alt="">
                <img src="<?php echo e(Asset('assets/images/section11_1.webp')); ?>"
                    class="h-[250px] absolute -bottom-20 md:-bottom-28 left-20 md:left-80" alt="">

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
                    Mengapa anak butuh
                    <br>
                    asesmen CognitiveMAP?
                </div>
                <p class="text-base md:text-xl font-semibold mb-2">Untuk mengetahui:</p>
                <div class="max-h-[50vh] md:min-h-fit overflow-auto overflow-x-hidden">
                    <div class="flex justify-center gap-3">
                        <button class="bg-[#F9A61A] text-black font-semibold text-xs md:text-xl p-1.5 md:p-3">
                            Kemampuan Belajar
                        </button>
                        <button class="bg-[#F9A61A] text-black font-semibold text-xs md:text-xl p-1.5 md:p-3">
                            Tingkat Motivasi Anak
                        </button>
                        <button class="bg-[#F9A61A] text-black font-semibold text-xs md:text-xl p-1.5 md:p-3">
                            Penyebab dalam perilaku/kebiasaan
                        </button>
                    </div>
                    <div class="flex justify-center p-3">
                        <div class="w-3/4">
                            <p>
                                CognitiveMAP membantu mengukur dan memetakan tingkat brain skills anak, termasuk
                                fokus,
                                memori, visual,

                                ketelitian, dan auditori.
                            </p>

                        </div>
                    </div>
                    <div class="flex justify-center mb-10">
                        <img src="<?php echo e(Asset('assets/images/section3_7.png')); ?>" alt="" class=" mt-10">

                    </div>
                    <p class="font-medium">
                        Asesmen CognitiveMAP juga memberikan analisis yang terperinci tentang profil kognitif anak,
                        sehingga memungkinkan

                        strategi belajar yang sesuai dengan kebutuhan individu.
                    </p>
                    <p class="font-medium mt-4 mb-5">
                        Dengan mengetahui kekuatan dan kelemahan kemampuan kognitif anak, BrainFit dapat merancang
                        program pelatihan otak

                        yang terpersonalisasi dan efektif.
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

                    Apa penyebab kesulitan dan kurangnya
                    <br>
                    motivasi belajar pada anak?
                </div>
                <div class="flex justify-center overflow-auto overflow-x-hidden">
                    <div class="md:w-3/4 max-h-[50vh] md:min-h-fit ">
                        <p>
                            Setiap anak punya kemampuan otak yang berbeda dan unik. Adanya faktor keturunan, kurangnya
                            stimulasi,
                            pengaruh lingkungan, dan aktivitas yang kurang seimbang selama masa pertumbuhan dapat
                            menyebabkan

                            terhambatnya perkembangan kemampuan kognitifnya.
                        </p>
                        <p class="mt-5">
                            Ini menyebabkan anak memiliki <span class="text-xl font-semibold">learning
                                gap</span>.
                            Akibatnya proses belajarnya menjadi sulit.
                            Jika tidak diintervensi, learning gap akan semakin besar sehingga anak merasa
                            semakin
                            sulit

                            dan putus asa dalam belajar.
                        </p>
                        <div class="flex justify-center mb-10">
                            <img src="<?php echo e(Asset('assets/images/section3_6.png')); ?>" alt=""
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
                    Bagaimana pelaksanaan CognitiveMAP?
                </div>
                <div class="ml-10 md:ml-0 md:flex justify-center mt-10 gap-10">
                    <div class="flex gap-2">
                        <img src="<?php echo e(Asset('assets/images/section5_3_1.png')); ?>" class="w-16 h-16 object-contain"
                            alt="">
                        <p class="self-center text-base md:text-xl font-semibold">Online / Offline</p>
                    </div>
                    <div class="flex gap-2 mt-4  md:mt-0">
                        <img src="<?php echo e(Asset('assets/images/section5_3_2.png')); ?>" class="w-16 h-16 object-contain"
                            alt="">
                        <p class="self-center text-base md:text-xl font-semibold">1,5 jam asesmen</p>
                    </div>
                </div>
                <div class="ml-10 md:ml-0 md:flex justify-center mt-4 md:mt-10 gap-10 mb-5">
                    <div class="flex gap-2">
                        <img src="<?php echo e(Asset('assets/images/section5_3_3.png')); ?>" class="w-16 h-16 object-contain"
                            alt="">
                        <p class="self-center text-base md:text-xl font-semibold">
                            1 jam pembacaan hasil <br>
                            dan konsultasi
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
                    Apa saja yang didapatkan dari
                    <br>
                    Asesmen CognitiveMAP?
                </div>
                <div class="flex justify-center">
                    <div class="w-full ml-10 md:ml-0 md:w-3/4">
                        <div class="block md:flex justify-center mt-10 gap-10">
                            <div class="flex gap-2 w-full md:w-1/2 mt-4 md:mt-0">
                                <img src="<?php echo e(Asset('assets/images/section5_4_2.webp')); ?>"
                                    class="w-[100px] h-[180px] object-contain" alt="">
                                <div class="self-center font-semibold">
                                    <p class="text-base">Gambaran umum</p>
                                    <p class="text-sm font-normal">kemampuan kognitif <br>
                                        dalam kelima bagian otak.</p>
                                </div>
                            </div>
                            <div class="flex gap-2 w-full md:w-1/2 mt-4 md:mt-0">
                                <img src="<?php echo e(Asset('assets/images/section5_4_1.webp')); ?>"
                                    class="w-[100px] h-[180px] object-contain" alt="">
                                <p class="text-sm self-center md:self-auto"> <span
                                        class="text-base font-semibold">Analisis</span>
                                    yang terperinci mengenai <br>
                                    kelebihan dan kelemahan kemampuan <br>
                                    otak yang spesifik di setiap <br>
                                    bagian otak.</p>
                            </div>
                        </div>
                        <div class="block md:flex justify-left mt-4 md:mt-10 gap-10 mb-5">
                            <div class="flex gap-2 w-full md:w-1/2">
                                <img src="<?php echo e(Asset('assets/images/section5_4_3.webp')); ?>"
                                    class="w-[100px] h-[180px] object-contain" alt="">
                                <p class="text-sm self-center">Rekomendasi <span
                                        class="text-base font-semibold">strategi</span>
                                    sesuai <br>
                                    profil kemampuan kognitif.</p>
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
                                    Lolita, 9 Tahun
                                    <br>
                                    Sulit <span class="jajargenjangTextGold z-10 mt-3">Fokus</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-40 pb-10 md:pb-40 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Lolita, anak hiperaktif yang sejak kelas 4 SD sudah jadi perhatian guru.
                                            Suka ngobrol dengan teman saat guru sedang mengajar, sering tidak
                                            peduli terhadap teguran guru, dan jarang menyelesaikan tugas tepat
                                            waktu. Lolita juga sering teriak dan menangis karena sulit paham
                                            materi tugasnya. Akibatnya nilai rapor selalu dibawah rata-rata dan
                                            membuat mama sering ngomel ke Lolita. Menurut mama, Lolita belum
                                            menyadari tanggung jawab dalam belajar. Padahal, Lolita sungguh sudah
                                            berusaha sebaik-baiknya tapi terkadang tugas dan PR terlalu banyak
                                            baginya.

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
                                    Alden, 9 Tahun
                                    <br>
                                    <span class="jajargenjangTextGold z-10 mt-3">Impulsif</span>
                                </div>

                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-20 md:mt-20 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Alden, anak kelas 4 SD yang sering kena masalah karena sifatnya
                                            yang suka bertindak sesuka hati tanpa memikirkan akibatnya.
                                            Alden pernah mendorong temannya dengan kasar,
                                            mencontek jawaban teman saat ujian matematika, dan sering
                                            mengacak-acak kamar. Akibat sifatnya ini, Alden sering membuat
                                            Ibunya kesal dan bahkan sulit mendapatkan teman. Tidak ada yang
                                            tahu bahwa ternyata Alden memiliki kelemahan di area kemampuan
                                            otak impulse control.
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
                                    Gretta, 7 Tahun
                                    <br>
                                    Sering <span class="jajargenjangTextWhite z-10 mt-3">Lupa</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-40 md:pb-40 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Kebiasaan buruk Greta di sekolah maupun di rumah bikin Ibu sering kesal.
                                            Greta pernah tidak jadi mengerjakan tugas di rumah hanya karena mencari
                                            buku atau alat tulisnya. Greta juga sering lupa sama tugas yang sudah
                                            dikerjakan dengan baik di Sekolah. Juga sebaliknya, hafalan yang ia hafalkan
                                            dirumah sering lupa ketika ada di sekolah. Karena sifat sering lupanya,
                                            Ibu sampai hampir menyerah sama Greta. Ibunya mengira Greta kurang
                                            fokus waktu belajar, padahal sebenarnya Greta memiliki kendala dalam
                                            fungsi Memory dan Working Memory.

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
                                    Kiran, 8 Tahun
                                    <br>
                                    Sulit mengontrol <span class="jajargenjangTextWhite z-10 mt-3">emosi</span>
                                </div>


                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-20 md:pb-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Kiran, anak 8 tahun yang sulit dipahami perasaannya. Kiran pernah marah
                                            karena kesepian saat dijauhi sahabatnya yang bermain dengan teman lain.
                                            Kiran sulit menceritakan perasaannya ketika dia marah akibat diganggu
                                            oleh kakaknya di rumah. Kiran sering dijauhi temannya karena apapun
                                            yang ia inginkan harus dituruti, kalau tidak dia akan ngambek.
                                            Padahal jika sahabatnya ada masalah, Kiran maju paling depan.
                                            Ayah dan bundanya mengira Kiran memang termasuk anak yang
                                            perasaannya sensitif dan sifatnya dominan tidak mau kalah.
                                            Hampir setiap hari terjadi drama di sekolah dan di rumah. Tiada hari
                                            tanpa teriak atau nangis.
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
                                    Lamark, 5 Tahun
                                    <br>
                                    <span class="jajargenjangTextGold z-10 mt-3">Lambat</span>
                                </div>

                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-60 md:pb-20 md:pt-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Lamark mendapat julukan “Si kura-kura” dari teman TKnya karena lambat.
                                            Lamark terlalu lambat dalam hal apapun. Saat di kelas Lamark selalu
                                            menyelesaikan tugas paling akhir. Saat dirumah, ia juga lambat dalam
                                            beraktivitas, seperti mandi dan makan. Lamark tidak cocok kalau ikut
                                            perlombaan karena sering mual jika melakukan hal dengan cepat. Hal ini
                                            membuat Ibu dan Ayah kesal dan khawatir apakah Lamark ini termasuk
                                            anak yang pasif dan pemalas? Siapa yang menyangka bahwa ternyata
                                            Lamark memiliki keterlambatan dalam koordinasi motorik dan kecepatan
                                            proses dalam otak ( <span class="italic">speed processing</span> ).


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
                                    Lupita, 14 Tahun
                                    <br>
                                    Malas <span class="jajargenjangTextWhite z-10 mt-3">berpikir</span>
                                </div>


                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div class="w-full md:w-2/4 md:ml-20 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Lupita, remaja 14 tahun yang punya passion bermain game dan hobi makan.
                                            Karena nilai yang pas-pasan di sekolah, ia jadi tidak percaya diri. Ia juga
                                            tidak punya teman karena dianggap tidak berkontribusi saat kerja kelompok.
                                            Karena Lupita merasa temannya jauh lebih pintar, ia lebih memilih mengikuti
                                            apa yang temannya inginkan agar diterima oleh kelompoknya. Lupita juga
                                            jarang berbicara dengan Ayah, Ibu, dan adiknya karena ia malas berbicara
                                            jika bukan membahas topik yang disukai. Ia sering menjawab “tidak tahu”
                                            atau “lupa!”. Ibu gemas dan tidak tahu bagaimana memotivasi Lupita agar
                                            tidak terlalu pasif tanpa menyadari bahwa sikap Lupita sebenarnya untuk
                                            menutupi kesulitannya dalam kemampuan berpikir kritis dan kreatif.


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
                                    Enzo, 10 Tahun
                                    <br>
                                    Mudah <span class="jajargenjangTextWhite z-10 mt-3">menyerah</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div class="w-full md:w-2/4 md:ml-80 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p class="md:ml-10">
                                            Enzo anak laki-laki kelas 4 SD yang tidak suka dengan hal-hal
                                            yang sulit. Enzo tidak bisa naik sepeda roda dua hanya karena
                                            ia kesulitan. Kini Enzo menolak berangkat kelas futsal karena
                                            merasa futsal itu sulit. Saat mengerjakan tugas matematika,
                                            Enzo lebih memilih mengerjakan soal yang mudah dan meninggalkan
                                            soal yang sulit, lalu mengumpulkan ke guru. Padahal Enzo suka dengan
                                            hal-hal baru, tapi ketika sudah menemukan kesulitan, ia frustasi dan
                                            menyerah. Mama sangat yakin Enzo sebenarnya memiliki kemampuan
                                            yang bagus dalam belajar. Di beberapa pelajaran ia sangat berprestasi.
                                            Sungguh membingungkan apa yang menyebabkan Enzo seperti ini.
                                            Mungkinkah kendala Enzo terletak pada <span class="italic">mindset</span>
                                            nya? Ataukah memang
                                            ada kendala belajar tertentu?
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
                                    Benn, 11 Tahun
                                    <br>
                                    Tidak suka
                                    <span class="jajargenjangTextGold z-10 mt-3">membaca</span>
                                </div>

                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-60 md:mt-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Benn, anak kelas 5 SD yang cerdas dan punya semangat belajar yang tinggi.
                                            Tapi, kekurangan dari Benn adalah sulit memahami bacaan yang panjang.
                                            Saat ada tugas membaca cerita pendek dan tugas cerita matematika,
                                            ia perlu membaca berulang kali untuk memahami soalnya. Ia tidak suka
                                            pelajaran Geografi, Sejarah, Biologi, Bahasa Indonesia, dan Bahasa Inggris.
                                            Ketika ada PR, Mama selalu bantu Benn buat baca teks dan menjelaskan
                                            isinya kepada Benn. Jadi, ketika Mama tidak ada, Benn kewalahan sendiri.


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
                        <div class="bg-white rounded-xl relative shadow-sm text-center mb-[10vh] md:mb-0">
                            <div class=" p-5">

                                <div class="flex justify-end">
                                    <button class=" " x-on:click="modal=false">
                                        x
                                    </button>
                                </div>

                                <div class="text-center font-semibold text-xl md:text-3xl mb-10 ">
                                    Ryan, 10 Tahun
                                    <br>
                                    Tidak suka
                                    <span class="jajargenjangTextGold z-10 mt-3">matematika</span>
                                </div>

                                <div class="flex justify-left overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-20 md:pb-20 md:pt-10 text-left max-h-[50vh] md:min-h-fit ">
                                        <p>
                                            Sejak TK Ryan selalu dapat nilai jelek di pelajaran matematika.
                                            Kini Ryan sudah kelas 4 SD dan masih berat menghadapi
                                            soal matematika. Meskipun Ryan punya nilai yang sangat bagus
                                            di pelajaran kesenian dan olahraga, itu belum membuat Ryan
                                            puas dan bangga. Ryan selalu ingin seperti teman-temannya
                                            yang bisa berhitung dengan cepat dan punya nilai matematika
                                            yang bagus agar mendapatkan pujian dari guru dan juga dari
                                            orang tuanya. Sudah ikutan les matematika, tetap saja tidak bisa
                                            sebagus dan secepat temannya dalam matematika. Ryan mulai
                                            percaya bahwa ia memang tidak berbakat dalam matematika.
                                            Ia mulai menghindari dan cuek dengan Matematika di kelas 4 ini.
                                            Padahal sebenarnya kemampuan otak yang berkaitan dengan
                                            proses matematika saja yang perlu diperkuatnya.
                                        </p>
                                        <img src="<?php echo e(Asset('assets/images/section2_klik_9.webp')); ?>"
                                            class="md:hidden object-contain " alt="">
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo e(Asset('assets/images/section2_klik_9.webp')); ?>"
                                class="hidden md:block object-contain absolute -bottom-[5.6rem] -right-0 w-[600px] h-[600px]"
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
                                    Maddy, 12 Tahun
                                    <br>
                                    Sulit <span class="jajargenjangTextWhite z-10 mt-3">berkomunikasi</span>
                                </div>


                                <div class="flex justify-center overflow-auto overflow-x-hidden">
                                    <div
                                        class="w-full md:w-2/4 md:ml-80 md:pb-20 text-justify max-h-[50vh] md:min-h-fit ">
                                        <p class="md:ml-10">
                                            Maddy, anak perempuan kelas 6 SD yang sering dianggap sombong
                                            dan arogan oleh temannya sendiri. Padahal Maddy bukan sombong
                                            dan arogan, tapi ia hanya sulit menyampaikan pemikiran dan
                                            perasaannya secara spontan. Ketika berinteraksi dengan orang lain,
                                            Maddy sulit memahami isi percakapan dan sulit memberikan tanggapan.
                                            Bercakap-cakap dengan orang lain membuatnya lelah, sehingga Maddy
                                            lebih memilih untuk diam dan tidak terlihat dalam kelompok.

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
            alert("Berhasil menjadwalkan, silahkan tunggu konfirmasi dari kami.")
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


        $(document).ready(function() {
            //-------------------------------SELECT CASCADING-------------------------//
            var selectedCountry = (selectedRegion = selectedCity = "");
            // This is a demo API key for testing purposes. You should rather request your API key (free) from http://battuta.medunes.net/
            var BATTUTA_KEY = "00000000000000000000000000000000";
            // Populate country select box from battuta API
            url =
                "https://battuta.medunes.net/api/region/" +
                'id' +
                "/all/?key=" +
                BATTUTA_KEY +
                "&callback=?";
            $.getJSON(url, function(data) {
                $("#region option").remove();
                $('#region').append(
                    '<option value="" selected disabled hidden class="inputInValid">Provinsi</option>');
                $.each(data, function(index, value) {
                    // APPEND OR INSERT DATA TO SELECT ELEMENT.
                    $("#region").append(
                        '<option value="' + value.region + '" class="inputValid">' + value
                        .region +
                        "</option>"
                    );
                });
            });
            // });
            // Region selected --> updated city list
            $("#region").on("change", function() {
                selectedRegion = this.options[this.selectedIndex].text;
                // Populate country select box from battuta API
                countryCode = 'id'
                region = $("#region").val();
                url =
                    "https://battuta.medunes.net/api/city/" +
                    countryCode +
                    "/search/?region=" +
                    region +
                    "&key=" +
                    BATTUTA_KEY +
                    "&callback=?";
                $.getJSON(url, function(data) {
                    console.log(data);
                    $("#city option").remove();
                    $('#city').append(
                        '<option value="" selected disabled hidden class="inputInValid">Kota</option>'
                    );
                    $.each(data, function(index, value) {
                        // APPEND OR INSERT DATA TO SELECT ELEMENT.
                        $("#city").append(
                            '<option value="' + value.city + '" class="inputValid">' +
                            value.city +
                            "</option>"
                        );
                    });
                });
            });
            // city selected --> update location string
            $("#city").on("change", function() {
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
<?php /**PATH /home/1124801.cloudwaysapps.com/pgykwcyrmc/public_html/resources/views/index.blade.php ENDPATH**/ ?>