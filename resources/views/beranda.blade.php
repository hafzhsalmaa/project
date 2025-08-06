@extends('layout')

@section('title', 'beranda')

@section('content')

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content">
            <div class="max-w-md">
                <h1 class="text-5xl text-primary font-bold">Online Library</h1>
                <h4 class="text-primary font-bold">Open Your Eyes To See The Big World</h4>
                <p class="py-10">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button onclick="document.getElementById('katalog').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-primary">
                    Get Started
                </button>
            </div>
            <div class="max-w-md">
                <figure>
                    <img src="https://www.gramedia.com/blog/content/images/2023/07/Screenshot-2023-07-31-015441.png"
                        alt="perpus" />
                </figure>
            </div>
        </div>
    </div>
    <div id="katalog" class="hero bg-primary min-h-screen flex flex-col items-center">
        <div class="bg-white px-3 py-2 mt-5 rounded-xl">
            <h1 class="text-xl text-primary font-bold text-center">
                Katalog Buku Baru
            </h1>
        </div>
        <div class="py-5 px-5">
            <p class="text-center mb-6 text-sm text-white">
                Jelajahi koleksi Buku kami yang paling laris dan menarik.
            </p>

            <div id="carouselContainer" class="w-full bg-primary py-5">
                <!-- ITEM 1 -->
                <div id="item1" class="carousel-item w-full flex flex-col items-center">
                    <div id="item1" class="carousel-item w-60 flex flex-col items-center">
                        <div class="flex gap-4 overflow-x-auto px-4 pb-4">
                            <!-- Buku 1 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAGL8xM7Flc/1/0/1003w/canva-ilustrasi-hewan-lucu-berwarna-hutan-cover-buku-anak-Imj1LDHrFUQ.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Aku Mengenal Hewan</h3>
                                    <p class="text-sm text-gray-600">Marisa Agustina</p>
                                    <p class="text-primary font-semibold">Rp.33.000</p>
                                </div>
                            </div>

                            <!-- Buku 2 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://i.pinimg.com/736x/37/de/14/37de14292d1a6bb87609a0c5822280d1.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Kancil dan Jerapah</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp.450.000</p>
                                </div>
                            </div>

                            <!-- Buku 3 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFZBDm_L0g/2/0/1003w/canva-colorful-illustrasi-buku-dongeng-bergambar-book-cover-7bTJixMqc-U.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Peri Bunga dan Rumah Kecilnya</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp.450.000</p>
                                </div>
                            </div>

                            <!-- Buku 4 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFFodQoOM4/1/0/1003w/canva-inspirasi-contoh-sampul-buku-sang-raja-hutan-yPJGHyQCNeU.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Sang Raja Hutan</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp.450.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div id="item2" class="carousel-item w-full flex flex-col items-center hidden">
                    <div id="item2" class="carousel-item w-full flex flex-col items-center">
                        <div class="flex gap-4 overflow-x-auto px-4 pb-4">
                            <!-- Buku 1 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFD0yfms84/1/0/1003w/canva-pria-tangguh-inspirasi-simpel-sampul-buku-d4Pa-W4mnU0.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Dahsyatnya Lari Cepat</h3>
                                    <p class="text-sm text-gray-600">Marisa Agustina</p>
                                    <p class="text-primary font-semibold">Rp.33.000</p>
                                </div>
                            </div>

                            <!-- Buku 2 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://marketplace.canva.com/EAFMRaej2rA/1/0/1003w/canva-sampul-buku-cerita-sebuah-keindahan-M4baIptopYc.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Ensiklopedia Nabi Muhammad</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp.450.000</p>
                                </div>
                            </div>

                            <!-- Buku 3 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://i.pinimg.com/736x/37/de/14/37de14292d1a6bb87609a0c5822280d1.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Ensiklopedia Nabi Muhammad</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp.450.000</p>
                                </div>
                            </div>

                            <!-- Buku 4 -->
                            <div class="card w-60 bg-base-100 shadow-md flex-shrink-0">
                                <figure>
                                    <img src="https://i.pinimg.com/736x/37/de/14/37de14292d1a6bb87609a0c5822280d1.jpg"
                                        alt="Buku" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="font-bold text-md">Ensiklopedia Nabi Muhammad</h3>
                                    <p class="text-sm text-gray-600">Ichwan Fauzi</p>
                                    <p class="text-primary font-semibold">Rp.450.000</p>
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