<script src="{{ asset('js/script.js') }}"></script>
@extends('layouts/layout')
{{-- navbar --}}
<x-navbar />
{{-- end navbar --}}
@section('title', 'Warnet Digital Hub')
{{-- Body --}}
@section('content')
    <main>
        {{-- layout 1 --}}
        <div class="layout-2 ">
            <div class="layout-position ">

                {{-- <div class="row ">
                    <div class="col-6 align-self-center ">
                        <h1 class="light-text">Warnet Digital Hub</h1>

                        <div class="w-80-costume light-text">
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

                <div class="  text-center ">
                    <span class="light-text  big_font ">WARNET DIGITAL HUB</span>

                    <div class="w-80-costume light-text">
                        Stasiun bermain 24 jam yang menyediakan fasilitas internet, print dokumen, dan berbagai macam game
                        online dan offline.
                    </div>

                    <button type="button" class=" btn-cost-1 btn  my-4" onclick="showForm()" id="btn_showForm">
                        Login
                    </button>

                    <form action="" class="d-none my-4" id="form_login">
                        <div class="form-group" id="form_login">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter username">
                            <input type="password" class="form-control my-3" id="exampleInputPassword1"
                                placeholder="Password">
                            <button type="submit" class="btn  btn-cost-1">Submit</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        {{-- end layout 1 --}}

        {{-- layout 2 --}}
        <div class="layout-1 ">
            <div class="layout-position ">

                <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                        <img src="{{ asset('img\game_logo.svg') }}" class="img_default " alt="logo_game">
                    </div>

                    <div class="col-6 align-self-center dark-text">
                        <h1>Play Your Favorite Game!</h1>

                        <div class="w-80-costume dark-text ">
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

                <div class="">
                    <div></div>
                </div>

            </div>
        </div>
        {{-- end layout 2 --}}
        {{-- <div class="my-5">
            <h1 class="text-center mb-5 light-text ">Our Games</h1> --}}
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

        <div class="my-5">
            <h1 class="text-center mb-5 light-text">Our Games</h1>
            {{-- Jika tidak ada game, tampilkan pesan --}}
            @if ($games->isEmpty())
                <p class="text-white text-center fs-5">No game yet...</p>
            @else
                {{-- Carousel untuk menampilkan game --}}
                <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ($games->chunk(5) as $index => $gameChunk)
                            <div class="carousel-item @if ($index === 0) active @endif">
                                <div class="row d-flex justify-content-center mx-5">
                                    @foreach ($gameChunk as $game)
                                        <div class="col-md-2 col-4">
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
    <footer>
        <div class="footer layout-1  p-0  py-5">
            <div class="  d-flex justify-content-center ">
                <div class="dark-text mx-4">
                    <h3>Warnet Digital Hub</h3>
                    <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit. <br>Quisquam, quod.</p>
                </div>
                <div class="dark-text mx-4">
                    <h3>Services</h3>
                    <ul>
                        <li>Play Game</li>
                        <li>Print Document</li>
                        <li>Internet</li>
                    </ul>
                </div>
                <div class="dark-text mx-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
