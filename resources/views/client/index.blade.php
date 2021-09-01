@extends('layouts.master')
@section('content')
    <h3 class="title-comm"><span class="title-holder">NEW HOUSE</span></h3>
    <div class="row room-hot">
        @foreach($list as $item)
            <div class="col-md-4 col-sm-6">
                <div class="room-item">
                    <div class="wrap-img" style="background: url({{$item->image}}) center;background-size: cover;">
                        <img src="" class="lazyload img-responsive">
                    </div>
                    <div class="room-detail">
                        <h4><a href="/"> {{ $item->name }}</a></h4>
                        <div class="room-meta">
                                <span>
                                    <i class="fas fa-user-circle"></i> Upload by:
                                    <a href="/"> Admin </a>
                                </span>
                            <span class="pull-right">
                                <i class="far fa-clock"></i>
                            </span>
                        </div>
                        <div class="room-description"><i class="fas fa-audio-description"></i>
                            {{ ($item->information) }}</div>
                        <div class="room-info">
                            <span><i
                                    class="far fa-stop-circle"></i> S : <b> 5000 m<sup>2</sup></b></span>
                            <div><i class="fas fa-map-marker"></i> Address : {{ $item->address }}</div>
                            <div style="color: #e74c3c">
                                <i class="far fa-money-bill-alt"></i> Price / m<sup>2</sup> :
                                <b>{{ ($item->price) }} VNĐ</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    @include('pagination.default', ['paginator' => $list])
@endsection
