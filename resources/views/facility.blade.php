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
            direction: rtl;
            /* Mengatur arah elemen ke kanan */
            list-style-position: inside;
            /* Bullet di dalam area elemen */
            text-align: right;
            /* Menyelaraskan teks ke kanan */
        }

        .li_cost_right::before {
            content: "✅";
            /* Emoji pengganti */
            margin-left: 10px;
            /* Jarak antara teks dan emoji */
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
            <div class="d-flex justify-content-center gap-5">
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
            <h1 class="text-center my-5">PS 5, 4, 3 & Console</h1>
            <div class="d-flex justify-content-center gap-5">
                <div>
                    <img src="{{ asset('img/ps5.png') }}" alt="">
                </div>

                <div>
                    <span class="fs-5">
                        <strong>Variety of console and game</strong>
                    </span>
                    <br>
                    <span class="fs-7">
                        {{-- ul>li.licost*3 --}}
                        <ul class="ul_right">
                            <li class="li_cost_right">Available Consoles: We provide PS3, PS4, and PS5 for an amazing gaming
                                experience.
                            </li>
                            <li class="li_cost_right">Choose Your Game: Enjoy a wide selection of games across all console
                                generations.
                            </li>
                            <li class="li_cost_right">Order your console 15 minutes before you arrives!</li>

                        </ul>
                    </span>
                </div>
            </div>
        </div>
        {{-- 3 --}}
        <div>
            <h1 class="text-center my-5">PS 5, 4, 3 & Console</h1>
            <div class="d-flex justify-content-center gap-5">
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
        {{-- 4 --}}
        <div class="mb-5">
            <h1 class="text-center my-5">PS 5, 4, 3 & Console</h1>
            <div class="d-flex justify-content-center gap-5">
                <div>
                    <img src="{{ asset('img/ps5.png') }}" alt="">
                </div>

                <div>
                    <span class="fs-5">
                        <strong>Variety of console and game</strong>
                    </span>
                    <br>
                    <span class="fs-7">
                        {{-- ul>li.licost*3 --}}
                        <ul class="ul_right">
                            <li class="li_cost_right">Available Consoles: We provide PS3, PS4, and PS5 for an amazing gaming
                                experience.
                            </li>
                            <li class="li_cost_right">Choose Your Game: Enjoy a wide selection of games across all console
                                generations.
                            </li>
                            <li class="li_cost_right">Order your console 15 minutes before you arrives!</li>

                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    {{-- footer --}}
    <x-footer />
    {{-- end footer --}}
@endsection
