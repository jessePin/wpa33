@extends("layouts.main")

@section("content")
    <div id="app" class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    @verbatim
                        <li v-for="d in data">{{ d.name }}</li>
                    @endverbatim
                </ul>
            </div>
            <div class="col-12">
                <ul>
                    @foreach($data as $d)
                        <li>{{ $d['name'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12">
                @if($age > 30)
                    <h1>Under 30</h1>
                @elseif($age > 60)
                    <h1>Under 60</h1>
                @else
                    <h1>Other</h1>
                @endif
            </div>
            <div class="col-12">
                @isset($color)
                    <h1>color - {{ $color }}</h1>
                @endisset
                @empty($count)
                    <h1>count empty</h1>
                @endempty
                @unless(Auth::check())
                    <h1>You are not authenticated</h1>
                @endunless
                @auth
                    <h1>You are authenticated</h1>
                @endauth
                
                @guest
                    <h1>Your are not authenticated</h1>
                @endguest
            </div>
            <div class="col-12">
                @switch($age)
                    @case(30)
                    @break
                @endswitch
            </div>
        </div>
    </div>

    <script>
        var app = new Vue({
            el: "#app",
            data: {
                data: @json($data)
            }
        })
    </script>
@endsection