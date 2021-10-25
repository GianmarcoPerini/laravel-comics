@section('carte')
    <div class="wrapper">
        @foreach ($images as $img )
        <div class="card">
            <img src=" {{ $img['thumb']}} " alt="">
        </div>
        @endforeach
    </div>
@endsection