@extends('layouts.layouts')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Pizzas List
                </div>

                
                
                @foreach ($pizzas as $pizza)
                    
                    <div>

                        {{ $pizza['type']}} - {{ $pizza['base']}}

                    </div>

                @endforeach

            </div>
        </div>
@endsection