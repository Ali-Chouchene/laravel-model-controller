@extends('/layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
        @foreach($movies as $movie)
        <div class="col">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{$movie->thumb}}" class="card-img-top img-fluid" alt="{{$movie->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <i>Uscito il : {{$movie->date}}</i>
                    <p class="card-text mt-2">Voto: {{$movie->vote}}/10</p>
                    <a href="#" class="btn btn-primary">more info</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection