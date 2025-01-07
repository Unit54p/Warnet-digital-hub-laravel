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

                <div class="row ">
                    <div class="col-6 align-self-center ">
                        <h1 class="light-text">Warnet Digital Hub</h1>

                        <div class="w-80-costume light-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum natus eos eligendi
                            vitae nam iste
                            repellendus delectus necessitatibus! Omnis quibusdam minus iure nulla. Placeat corrupti
                            saepe ducimus
                            debitis
                            eum ab!
                        </div>
                    </div>

                    <div class="col-6 d-flex justify-content-end">
                        <img src="{{ asset('img/logo_digital_hub.png') }}" class="img_default " alt="logo warnet">
                    </div>
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
                    </div>
                </div>

                <div class="">
                    <div></div>
                </div>

            </div>
        </div>
        {{-- end layout 2 --}}
        <div class="my-5">
            <h1 class="text-center mb-5 light-text ">Our Games</h1>
            {{-- card game --}}
            <div class="row d-flex justify-content-center  gap-4">

                <div class="card col-6  p-0" style="width: 14rem;">
                    <img src={{ asset('img/god_of_war.png') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                    </div>
                </div>

                <div class="card col-6 p-0" style="width: 14rem;">
                    <img src={{ asset('img/god_of_war.png') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                    </div>
                </div>

                <div class="card col-6 p-0" style="width: 14rem;">
                    <img src={{ asset('img/god_of_war.png') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>

                <div class="card col-6 p-0" style="width: 14rem;">
                    <img src={{ asset('img/god_of_war.png') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>


                <div class="card col-6 p-0" style="width: 14rem;">
                    <img src={{ asset('img/god_of_war.png') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card game --}}
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
