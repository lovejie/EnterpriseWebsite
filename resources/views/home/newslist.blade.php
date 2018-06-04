@extends("home.news")
@section("news_content")
    <div class="borpadd">
        <ul class="listN">
            @foreach($newslist as $news)
                <li><span>{{$news->created_at}}</span><a href="{{url("news/$news->id")}}" title="{{$news->title}}"><label>></label>{{$news->title}}</a></li>
            @endforeach

        </ul>
        {!! $newslist->render() !!}
        <div class="blank20"></div>
        <div class="page_navi"> </div>
    </div>
@endsection