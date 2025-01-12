<script src="{{ asset('js/script.js') }}"></script>
@extends('layouts/layout')
{{-- navbar --}}
<x-navbar />
{{-- end navbar --}}
@section('title', 'Warnet Digital Hub')
{{-- Body --}}
@section('content')
    <style>
        .bg-pict {
            background-image: url("{{ asset('img/dekstop1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 500px;
            /* Atur tinggi sesuai kebutuhan */
            width: 100%;
            /* Lebar 100% */
            display: flex;
            /* Jika ingin konten di tengah */
            justify-content: center;
            align-items: center;
            color: white;
            /* Agar teks terlihat */
        }

        .hero_section {
            height: 80vh;
        }
    </style>
    <main>
        {{-- layout 1 --}}

        <div class="layout_dark hero_section bg-pict ">
            <div class="layout_position ">

                {{-- <div class="row ">
                    <div class="col-6 align-self-center ">
                        <h1 class="light_text">Warnet Digital Hub</h1>

                        <div class="w-80-costume light_text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum natus eos eligendi
                            vitae nam iste
                            repellendus delectus necessitatibus Omnis quibusdam minus iure nulla. Placeat corrupti
                            saepe ducimus
                            debitis
                            eum ab!
                        </div>
                    </div>

                    <div class="col-6 d-flex justify-content-end">
                        <img src="{{ asset('img/logo_digital_hub.png') }}" class="img_default " alt="logo warnet">
                    </div>
                </div> --}}

                <div class="text-center ">
                    <span class="light_text  big_font ">WARNET DIGITAL HUB</span>

                    <div class="w-80-costume light_text">
                        Stasiun bermain 24 jam yang menyediakan fasilitas internet, print dokumen, dan berbagai macam game
                        online dan offline.
                    </div>
                    <!-- Form Login -->
                    <form action="" class="d-none my-4" id="form_login">
                        <div class="form-group d-flex justify-content-center align-items-center flex-column">
                            <input type="text" class="form-control w-50 input_cost_light" id="exampleInputEmail1"
                                placeholder="Enter username">
                            <input type="password" class="form-control my-3 w-50 input_cost_light"
                                id="exampleInputPassword1" placeholder="Password">
                            <div class="w-50 d-flex justify-content-center gap-4">

                                <button type="button" class=" btn_dark w-50" onclick="showFormSignIn()">Sign
                                    In</button>
                                <button type="submit" class="btn-cost-submit   w-50">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- Form Sign In -->
                    <form action="" class="d-none my-4" id="form_signin">
                        <div class="form-group d-flex justify-content-center align-items-center flex-column">
                            <input type="text" class="form-control w-50 input_cost_light" id="usernameSign"
                                placeholder="Enter username">
                            <input type="number" class="form-control my-3 w-50 input_cost_light" id="phone_num"
                                placeholder="Phone Number">
                            <input type="password" class="form-control w-50 input_cost_light" id="paswordSign"
                                placeholder="Password">

                            <div class="w-50 d-flex justify-content-center mt-3 gap-4">
                                <button type="button" class=" btn_dark w-50" onclick="showForm()">Login</button>
                                <button type="submit" class=" btn-cost-submit w-50">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- Buttons to Show Forms -->
                    <div class="text-center mt-4 d-flex justify-content-center gap-3">
                        <button type="button" class="px-5 btn_dark" onclick="showForm()" id="btn_showForm">Login</button>
                        <button type="button" class="px-5 btn_dark" onclick="showFormSignIn()" id="btn_showFormSignIn">Sign
                            In</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end layout 1 --}}

        {{-- layout 2 --}}
        <div class="layout_light lay_50  d-flex align-items-center">
            <div class="layout_position  row">

                <div class="col-6 d-flex justify-content-center ">
                    <img src="{{ asset('img\game_logo.svg') }}" class="img_default " alt="logo_game">
                </div>

                <div class="col-6 align-self-center dark_text ">
                    <h1>Play Your Favorite Game!</h1>

                    <div class="w-80-costume dark_text ">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum natus eos eligendi
                        vitae nam iste
                        repellendus delectus necessitatibus! Omnis quibusdam minus iure nulla. Placeat corrupti
                        saepe ducimus
                        debitis
                        eum ab!
                    </div>
                    <button class="btn btn-cost-2  mt-3">Check the game!</button>
                </div>
            </div>
        </div>
        {{-- end layout 2 --}}
        {{-- <div class="my-5">
            <h1 class="text-center mb-5 light_text ">Our Games</h1> --}}
        {{-- card game --}}

        {{-- @if ($games->isEmpty()) --}}
        {{-- <p class="text-white text-center fs-5">No game yet...</p> --}}
        {{-- @else --}}
        {{-- <div class="row d-flex justify-content-center  gap-4"> --}}

        {{-- @foreach ($games as $game) --}}
        {{-- <div class="card col-6 p-0" style="width: 14rem;">
                            <!-- Menampilkan gambar dari asset atau nama gambar yang disimpan di kolom 'image' -->
                            <img src="{{ asset('img/' . $game->image) }}" class="card-img-top" alt="{{ $game->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $game->name }}</h5> <!-- Menampilkan nama game -->
                                <p class="card-text">{{ $game->caption }}</p> <!-- Menampilkan deskripsi game -->
                            </div>
                        </div> --}}
        {{-- @endforeach --}}
        {{-- </div> --}}

        {{-- @endif/ --}}
        {{-- </div> --}}
        {{-- end card game --}}

        <div class="my-5 lay_50 d-flex justify-content-center flex-column">
            <h1 class="text-center mb-5 light_text">Our Games</h1>
            {{-- Jika tidak ada game, tampilkan pesan --}}
            @if ($games->isEmpty())
                <p class="text-white text-center fs-5">No game yet...</p>
            @else
                {{-- Carousel untuk menampilkan game --}}
                <div id="gameCarousel" class="carousel slide">
                    <div class="carousel-inner">

                        @foreach ($games->chunk(5) as $index => $gameChunk)
                            <div class="carousel-item @if ($index === 0) active @endif">
                                <div class="row d-flex justify-content-center mx-5">
                                    @foreach ($gameChunk as $game)
                                        <div class="col-md-6 col-lg-2 border_test">
                                            <div class="card mx-auto mb-3" style="width: 14rem;">
                                                <!-- Menampilkan gambar dari asset atau nama gambar yang disimpan di kolom 'image' -->
                                                <img src="{{ asset('img/' . $game->image) }}" class="card-img-top"
                                                    alt="{{ $game->name }}">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $game->name }}</h5>
                                                    <p class="card-text">{{ $game->caption }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Tombol navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#gameCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#gameCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
        </div>


    </main>
@endsection
{{-- end Body --}}
@section('footer')
    <x-footer />
@endsection
