@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="title">
            <h1>プロフィール一覧</h1>
        </div>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="title">
                        <h2>最新のプロフィール</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name">
                                    {{ str_limit($headline->name, 150) }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($headline->gender, 1500) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($headline->hobby, 1500) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($headline->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr color="#c0c0c0">
        @endif
        
      　
      　<div class="row">
            <div class="headline col-md-10 mx-auto">
                <div class="title">
                    <h2>既存のプロフィール</h2>
                </div>
                <hr color="#c0c0c0">
                @foreach($posts as $post)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($post->gender, 1500) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 1500) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 1500) }}
                                </div>
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    
@endsection