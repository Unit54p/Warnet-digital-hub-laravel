@extends('layouts/layout')
{{-- navbar --}}
<x-navbar />
{{-- end navbar --}}
@section('title', 'Warnet Digital Hub')
{{-- Body --}}
@section('content')
    <style>
        ul {
            list-style: none;
            /* Menghilangkan default bullet */
            padding: 0;
            /* Mengatur arah elemen ke kanan */
        }

        .ul_right {
            text-align: right;
            list-style-position: inside;
        }

        .li_cost_right::after {
            content: "✅";
            margin-left: 10px;
        }


        .li_cost::before {
            content: "✅";
            /* Emoji pengganti */
            margin-right: 10px;

            /* Jarak antara emoji dan teks */
        }
    </style>
    <main class="light_text">
        {{-- 1 --}}
        <div>
            <h1 class="text-center my-5">PS 5, 4, 3 & Console</h1>
            <div class="d-flex justify-content-center align-items-center  gap-5">
                <div>
                    <span class="fs-5">
                        <strong>Variety of console and game</strong>
                    </span>
                    <br>
                    <span class="fs-7">
                        {{-- ul>li.licost*3 --}}
                        <ul class="">
                            <li class="li_cost">Available Consoles: We provide PS3, PS4, and PS5 for an amazing gaming
                                experience.
                            </li>
                            <li class="li_cost">Choose Your Game: Enjoy a wide selection of games across all console
                                generations.
                            </li>
                            <li class="li_cost">Order your console 15 minutes before you arrives!</li>

                        </ul>
                    </span>
                </div>

                <div>
                    <img src="{{ asset('img/ps5.png') }}" alt="">
                </div>
            </div>
        </div>

        {{-- 2 --}}
        <div class="">
            <h1 class="text-center my-5">PC</h1>
            <div class="d-flex justify-content-center align-items-center gap-5">
                <div>
                    <img src="{{ asset('img/ps5.png') }}" alt="">
                </div>

                <div class="text-end">
                    <span class="fs-5 ">
                        <strong class="">Enjoy playing casual or AAA games!</strong>
                    </span>
                    <br>
                    <span class="fs-7">
                        {{-- ul>li.licost*3 --}}
                        <ul class="ul_right text-end">
                            <li class="li_cost_right">Available Consoles: We provide PS3, PS4, and PS5 for an amazing gaming
                                experience.
                            </li>
                            <li class="li_cost_right">Choose Your Game: Enjoy a wide selection of games across all console
                                generations.
                            </li>
                            <li class="li_cost_right">Order your console <strong>15 minutes</strong> before you arrives!
                            </li>

                        </ul>
                    </span>
                </div>
            </div>
        </div>
        {{-- 3 --}}
        <div class="">
            <h1 class="text-center my-5">Canteen</h1>
            <div class="d-flex justify-content-center align-items-center gap-5">
                <div>
                    <span class="fs-5">
                        <strong>Order Your Favorite Food and Drinks with Ease</strong>
                    </span>
                    <br>
                    <span class="fs-7">
                        {{-- ul>li.licost*3 --}}
                        <ul class="">
                            <li class="li_cost">Browse our delicious menu right from store app at your pc.
                            </li>
                            <li class="li_cost">Buy with m-banking, qris, or cash.
                            </li>
                            <li class="li_cost">Relax and enjoy gaming while your food delivered to your place.</li>
                        </ul>
                    </span>

                </div>
                <div>
                    <img src="{{ asset('img/ps5.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- 4 --}}
        <div class=" mb-5">
            <h1 class="text-center my-5">Open 24/7</h1>
            <div class="d-flex justify-content-center align-items-center gap-5">
                <div>
                    <img src="{{ asset('img/ps5.png') }}" alt="">
                </div>
                <div class="text-end">
                    <span class="fs-5 ">
                        <strong>Enjoy playing whenever you want!</strong>
                    </span>
                    <br>
                    <span class="fs-7">
                        {{-- ul>li.licost*3 --}}
                        <ul class="ul_right">
                            <li class="li_cost_right">Come anytime, no need to worry about holidays—we're always open!
                            </li>
                            <li class="li_cost_right">Our security guards are on duty to ensure a safe and secure experience
                            </li>
                            <li class="li_cost_right">Enjoy the convenience of ordering and relaxing in a secure environment,
                                anytime you like!</li>

                        </ul>
                    </span>
                </div>


            </div>
        </div>
        {{-- 4 --}}

    </main>
@endsection
@section('footer')
    {{-- footer --}}
    <x-footer />
    {{-- end footer --}}
@endsection
