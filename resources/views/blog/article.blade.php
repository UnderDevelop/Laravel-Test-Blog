@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="content-">
        <div class="row-">
            <div class="col-sm-12">
                <h1>{{$article->title}}</h1>
                <p>{!! $article->description !!}</p>
            </div>
        </div>
    </div>
    <div>
        @include('admin.components.comment')
    </div>
@endsection
