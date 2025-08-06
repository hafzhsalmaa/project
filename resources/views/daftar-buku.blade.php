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

    <div class="flex gap-20 py-10 px-10">

        <label class="select">
            <select>
                <option>Pilih Judul Buku</option>
                <option>Business</option>
                <option>Dongeng</option>
                <option>Novel</option>
                <option>Komik</option>
            </select>
        </label>

        <label class="select">
            <select>
                <option>Pilih Nama Penulis</option>
                <option>A.Fuadi</option>
                <option>Andrea Hirata</option>
                <option>Asma Nadia</option>
                <option>Habiburrahman El-Shirazy</option>
            </select>
        </label>

        <label class="select">
            <select>
                <option>Pilih Tahun Terbit</option>
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
            </select>
        </label>

        <button class="btn btn-info w-64">Cari Sekarang</button>

    </div>

    <div class="flex gap-4 py-5 px-10">
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-96 h-80 bg-base-100 card-md shadow-lg">
            <div class="card-body">
                <h2 class="card-title">Kategori Buku</h2>
                <ul class="list-disc ml-5 w-56">
                    <li><a>Non-Fiksi</a></li>
                    <li><a>Fiksi</a></li>
                    <li><a>Majalah</a></li>
                    <li><a>Biografi/Autobiografi</a></li>
                    <li><a>Dongeng</a></li>
                    <li><a>Fabel</a></li>
                    <li><a>Novel</a></li>
                    <li><a>Komik</a></li>
                    <li><a>Novel Grafis</a></li>
                </ul>
                <div class="justify-end card-actions">
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex gap-4 py-5 px-10">
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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
        <div class="card w-50 bg-base-100 shadow-md flex-shrink-0">
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