@extends('layout')

@section('title', 'beranda')

@section('content')

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col-reverse md:flex-row gap-10">
            <div class="max-w-md md:text-left">
                <h1 class="text-5xl  md:text-5xl text-blue-900 font-bold">Online Library</h1>
                <h4 class="text-primary font-bold">Open Your Eyes To See The Big World</h4>
                <p class="py-10 text-sm md:text-base">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button onclick="document.getElementById('katalog').scrollIntoView({ behavior: 'smooth' })"
                    class="px-4 py-2 bg-blue-900 text-white rounded hover:bg-blue-500">
                    Get Started
                </button>
            </div>
            <div class="max-w-xs md:max-w-md w-full hidden md:block">
                <figure>
                    <img src="https://png.pngtree.com/png-clipart/20230825/original/pngtree-social-media-marketing-advertising-background-picture-image_8716797.png"
                        alt="perpus" />
                </figure>
            </div>
        </div>
    </div>
    <div id="katalog" class="hero bg-primary min-h-screen flex flex-col items-center">
        <div class="bg-white px-3 py-2 mt-5 rounded-xl">
            <h1 class="text-xl text-primary font-bold text-center">
                Katalog Buku Terbaru
            </h1>
        </div>
        <div class="py-5 px-5">
            <p class="text-center mb-6 text-sm text-white">
                Jelajahi koleksi Buku kami yang paling laris dan menarik.
            </p>

            <div id="carouselContainer" class="bg-primary py-5">
                <!-- ITEM 1 -->
                <div id="item1" class="carousel-item flex flex-col items-center">
                    <div class="carousel-item w-60 flex flex-col items-center">

                        <!-- Default: grid 2 kolom untuk layar kecil, mulai md: ubah jadi flex horizontal -->
                        <div class="grid grid-cols-2 gap-4 overflow-x-hidden px-4 pb-4 w-100 h-120
                                md:flex-gap-4 md:overflow-x-auto md:h-auto md:w-300 md:grid-cols-6">

                            <!-- Buku 1 -->
                            <div class="card w-full m bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAGL8xM7Flc/1/0/1003w/canva-ilustrasi-hewan-lucu-berwarna-hutan-cover-buku-anak-Imj1LDHrFUQ.jpg"
                                        alt="Buku" class="w-full h-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Aku Mengenal Hewan</h3>
                                    <p class="text-sm text-gray-600">Marisa Agustina</p>
                                    <p class="text-primary font-semibold">Rp 33.000</p>
                                </div>
                            </div>

                            <!-- Buku 2 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://i.pinimg.com/736x/37/de/14/37de14292d1a6bb87609a0c5822280d1.jpg"
                                        alt="Buku" class="w-full h-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Kancil dan Jerapah</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 450.000</p>
                                </div>
                            </div>

                            <!-- Buku 3 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFZBDm_L0g/2/0/1003w/canva-colorful-illustrasi-buku-dongeng-bergambar-book-cover-7bTJixMqc-U.jpg"
                                        alt="Buku" class="w-full h-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Peri Bunga dan Rumah Kecilnya</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 450.000</p>
                                </div>
                            </div>

                            <!-- Buku 4 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFFodQoOM4/1/0/1003w/canva-inspirasi-contoh-sampul-buku-sang-raja-hutan-yPJGHyQCNeU.jpg"
                                        alt="Buku" class="w-full h-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Sang Raja Hutan</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 450.000</p>
                                </div>
                            </div>

                            <!-- Buku 5 -->
                            <div class="card w-full m bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/magical-world-kid%27s-story-book-illustrations-design-template-3a5eac4346d3f57eb6241f03641419f1.jpg?ts=1734004843"
                                        alt="Buku" class="w-full h-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">In Your Own Backyard</h3>
                                    <p class="text-sm text-gray-600">Marisa Agustina</p>
                                    <p class="text-primary font-semibold">Rp 33.000</p>
                                </div>
                            </div>

                            <!-- Buku 2 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fairy-world-kids-story-book-illustrations-cov-design-template-177aa84ba5e1ee52e0cb347e060d2815.jpg?ts=1734004849"
                                        alt="Buku" class="w-full h-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Unseen World</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 450.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ITEM 2 -->
                <div id="item2" class="carousel-item w-full flex flex-col items-center hidden">
                    <div id="item2" class="carousel-item w-full flex flex-col items-center">
                        <div class="grid grid-cols-2 gap-4 overflow-x-hidden px-4 pb-4 w-100 h-120
                                md:flex-gap-4 md:overflow-x-auto md:h-auto md:w-300 md:grid-cols-6">
                            <!-- Buku 1 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFD0yfms84/1/0/1003w/canva-pria-tangguh-inspirasi-simpel-sampul-buku-d4Pa-W4mnU0.jpg"
                                        alt="Buku">
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Dahsyatnya Lari Cepat</h3>
                                    <p class="text-sm text-gray-600">Marisa Agustina</p>
                                    <p class="text-primary font-semibold">Rp 33.000</p>
                                </div>
                            </div>

                            <!-- Buku 2 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFMRaej2rA/1/0/1003w/canva-sampul-buku-cerita-sebuah-keindahan-M4baIptopYc.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Sebuah Keindahan</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 20.000</p>
                                </div>
                            </div>

                            <!-- Buku 3 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fantasy-and-magic-kid%27s-story-book-illustrati-design-template-a0e29ce4644105c81515b3c302a274bf.webp?ts=1734004835"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Unwise Magic</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 80.000</p>
                                </div>
                            </div>

                            <!-- Buku 4 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cookbook-cover-template-design-82fdedf24c9b27ca53208406f1f03b4e.webp?ts=1704222085"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Buku Memasak</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 100.000</p>
                                </div>
                            </div>
                            <!-- Buku 3 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/winner%27s-brain-design-template-daa2e8b2e0506863fadc3ce494b4fc60.webp?ts=1698251277"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">The Brain's Winner</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 50.000</p>
                                </div>
                            </div>

                            <!-- Buku 4 -->
                            <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/blue-christanity-book-cover-design-template-af493f89bc8ef8b683e3487a86be6d2a.webp?ts=1698565243"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Tuhan Mengetahui</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGINATION -->
            <div class="flex justify-center mt-4 gap-2">
                <button onclick="showItem('item1')" class="btn btn-sm">1</button>
                <button onclick="showItem('item2')" class="btn btn-sm">2</button>
                <button onclick="showItem('item1')" class="btn btn-sm">3</button>
                <button onclick="showItem('item2')" class="btn btn-sm">4</button>
                <button onclick="showItem('item1')" class="btn btn-sm">5</button>
            </div>
        </div>

    </div>

    <script>
        function showItem(id) {
            const items = document.querySelectorAll('#carouselContainer > .carousel-item');
            items.forEach(item => item.classList.add('hidden'));
            document.getElementById(id).classList.remove('hidden');
        }
    </script>

@endsection