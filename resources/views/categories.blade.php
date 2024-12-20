@extends('layouts.default')
@section('title', 'Ecom - Categories')
@section('content')
<main class="container">
    <section>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-6 col-lg-4">
                    <img src="{{$category->image}}" alt="" style=height: 200px; width="200px">
                    <p>{{ $category->title }}</p>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection