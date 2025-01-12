@extends('layouts/layout')
{{-- navbar --}}
<x-navbar />
{{-- end navbar --}}
@section('title', 'Warnet Digital Hub')
<style>

</style>
{{-- Body --}}

@section('content')
    <main>
        <div class="layout_dark ">
            <div class="layout_position">
                <table class=" mt-4">
                    <tr>
                        <td>
                            <H1 class="light_text">Games</H1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected disabled>Genre game</option>
                                <option value="action">Action</option>
                                <option value="adventure">Adventure</option>
                                <option value="rpg">RPG</option>
                                <option value="fps">First-Person Shooter (FPS)</option>
                                <option value="strategy">Strategy</option>
                                <option value="simulation">Simulation</option>
                                <option value="sports">Sports</option>
                                <option value="puzzle">Puzzle</option>
                                <option value="horror">Horror</option>
                                <option value="racing">Racing</option>
                            </select>

                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb-5 mt-4 d-flex justify-content-center flex-column">
            {{-- Jika tidak ada game, tampilkan pesan --}}
            @if ($games->isEmpty())
                <p class="text-white text-center fs-5">No game yet...</p>
            @else
                {{-- Carousel untuk menampilkan game --}}
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        @foreach ($games->chunk(5) as $index => $gameChunk)
                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>

                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        @foreach ($games->chunk(5) as $index => $gameChunk)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
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
    {{-- footer --}}
    <x-footer />
    {{-- end footer --}}
@endsection
