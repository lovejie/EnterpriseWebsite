@extends("home.news")
@section("news_content")
    <div class="borpadd conBox">
        <div class="conBox-tit">
            <h1>{{$news->title}}</h1>
        </div>
        <div class="conBox-content">
            {!! $news->contents !!}
        </div>
    </div>
@endsection