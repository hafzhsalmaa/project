@extends('layout')

@section('title', 'daftar-buku')

@section('content')

    <div class="hero min-h-96"
        style="background-image: url(https://png.pngtree.com/background/20210711/original/pngtree-library-cartoon-banner-illustration-picture-image_1065759.jpg);">
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap gap-2 sm:gap-4 sm:py-10 py-5 px-10 bg-base-200 shadow-lg">

        <h5 class="text-primary font-bold mb-2 md:hidden"> Cari Buku: </h5>

        <label class="select buku mb-2">
            <select>
                <option>Pilih Judul Buku</option>
                <option>Business</option>
                <option>Dongeng</option>
                <option>Novel</option>
                <option>Komik</option>
            </select>
        </label>

        <label class="select penulis mb-2">
            <select>
                <option>Pilih Nama Penulis</option>
                <option>A.Fuadi</option>
                <option>Andrea Hirata</option>
                <option>Asma Nadia</option>
                <option>Habiburrahman El-Shirazy</option>
            </select>
        </label>

        <label class="select tahun mb-2">
            <select>
                <option>Pilih Tahun Terbit</option>
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
            </select>
        </label>

        <button class="btn btn-primary w-auto">Cari Sekarang</button>

    </div>

    <div class="grid grid-cols-2 gap-4 py-5 px-10 md:flex-gap-4 md:overflow-x-auto md:h-auto md:w-auto md:grid-cols-8 ">
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://simpus.mkri.id/uploaded_files/sampul_koleksi/original/Monograf//uploadedfiles/perpustakaan/11616-11617.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Edensor</h3>
                <p class="text-sm text-gray-600">Andrea Hirata</p>
                <p class="text-primary font-semibold">Rp 190.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1489732961i/1362193.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Laskar Pelangi</h3>
                <p class="text-sm text-gray-600">Andrea Hirata</p>
                <p class="text-primary font-semibold">Rp 99.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1553670979i/43684582.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Dia Adalah Kakakku</h3>
                <p class="text-sm text-gray-600">Tere Liye</p>
                <p class="text-primary font-semibold">Rp 130.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1496315625i/35278713.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Bintang</h3>
                <p class="text-sm text-gray-600">Tere Liye</p>
                <p class="text-primary font-semibold">Rp 193.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://simpus.mkri.id/uploaded_files/sampul_koleksi/original/Monograf//uploadedfiles/perpustakaan/11616-11617.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Edensor</h3>
                <p class="text-sm text-gray-600">Andrea Hirata</p>
                <p class="text-primary font-semibold">Rp 190.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1489732961i/1362193.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Laskar Pelangi</h3>
                <p class="text-sm text-gray-600">Andrea Hirata</p>
                <p class="text-primary font-semibold">Rp 99.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1553670979i/43684582.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Dia Adalah Kakakku</h3>
                <p class="text-sm text-gray-600">Tere Liye</p>
                <p class="text-primary font-semibold">Rp 130.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1496315625i/35278713.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Bintang</h3>
                <p class="text-sm text-gray-600">Tere Liye</p>
                <p class="text-primary font-semibold">Rp 193.000</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 py-5 px-10 md:flex-gap-4 md:overflow-x-auto md:h-auto md:w-auto md:grid-cols-8">
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1416482160i/23592410.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Surga yang Tak Dirindukan</h3>
                <p class="text-sm text-gray-600">Asma Nadia</p>
                <p class="text-primary font-semibold">Rp 98.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1484281533i/33848032.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Semua Ikan Di Langit</h3>
                <p class="text-sm text-gray-600">Ziggy Zezsyazeoviennazabrizkie</p>
                <p class="text-primary font-semibold">Rp 99.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/covRK-1306.jpg" alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Princess Family</h3>
                <p class="text-sm text-gray-600">Riza Dwita Auldina</p>
                <p class="text-primary font-semibold">Rp 75.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1416482160i/23592410.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Surga yang Tak Dirindukan</h3>
                <p class="text-sm text-gray-600">Asma Nadia</p>
                <p class="text-primary font-semibold">Rp 98.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1484281533i/33848032.jpg"
                    alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Semua Ikan Di Langit</h3>
                <p class="text-sm text-gray-600">Ziggy Zezsyazeoviennazabrizkie</p>
                <p class="text-primary font-semibold">Rp 99.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
            <figure>
                <img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/covRK-1306.jpg" alt="Buku" />
            </figure>
            <div class="card-body">
                <h3 class="font-bold text-md">Princess Family</h3>
                <p class="text-sm text-gray-600">Riza Dwita Auldina</p>
                <p class="text-primary font-semibold">Rp 75.000</p>
            </div>
        </div>
        <div class="card w-full bg-base-100 shadow-md flex-shrink-0">
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
    </div>
@endsection