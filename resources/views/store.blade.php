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
        <div class="layout_light">
            <div class="layout_position">
                <table>
                    <tr>
                        <td>
                            <H1>Games</H1>
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
    </main>
@endsection
{{-- end Body --}}
@section('footer')
    {{-- footer --}}
    <x-footer />
    {{-- end footer --}}
@endsection
