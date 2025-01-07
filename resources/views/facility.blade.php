@extends('layouts/layout')
{{-- navbar --}}
<x-navbar />
{{-- end navbar --}}
@section('title', 'Warnet Digital Hub')
{{-- Body --}}
@section('content')
    <main>
        {{-- layout 1 --}}
        <div class="layout-1 ">
            <div class="layout-position ">

                <div class="row ">
                    <div class="col-6 align-self-center ">
                        <h1>Warnet Digital Hub</h1>

                        <div class="w-80-costume ">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum natus eos eligendi
                            vitae nam iste
                            repellendus delectus necessitatibus! Omnis quibusdam minus iure nulla. Placeat corrupti
                            saepe ducimus
                            debitis
                            eum ab!
                        </div>
                    </div>

                    <div class="col-6  d-flex justify-content-end">
                        <img src="{{ asset('img/logo_digital_hub.png') }}" class="img_default " alt="logo warnet">
                    </div>
                </div>
            </div>
        </div>
        {{-- end layout 1 --}}

        {{-- layout 2 --}}
        <div class="layout-2 ">
            <div class="layout-position ">

                <div class="row ">
                    <div class="col-6 d-flex justify-content-start">
                        <img src="{{ asset('img\game_logo.svg') }}" class="img_default " alt="logo_game">
                    </div>

                    <div class="col-6 align-self-center ">
                        <h1>Play Your Favorite Game!</h1>

                        <div class="w-80-costume ">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum natus eos eligendi
                            vitae nam iste
                            repellendus delectus necessitatibus! Omnis quibusdam minus iure nulla. Placeat corrupti
                            saepe ducimus
                            debitis
                            eum ab!
                        </div>
                    </div>
                </div>

                <div class="">
                    <div></div>
                </div>

            </div>
        </div>
        {{-- end layout 2 --}}
    </main>
@endsection
{{-- end Body --}}
@section('footer')
    <footer>
        <div class="footer ">
            <div class="footer-position ">
                <div class="row ">
                    <div class="col-4 ">
                        <h3>Warnet Digital Hub</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                    <div class="col-4 ">
                        <h3>Services</h3>
                        <ul>
                            <li>Play Game</li>
                            <li>Print Document</li>
                            <li>Internet</li>
                        </ul>
                    </div>
                    <div class="col-4 ">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
