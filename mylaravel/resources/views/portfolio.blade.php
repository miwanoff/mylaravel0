@extends('layout')
@extends('layouts.app')
@section('title')
Portfolio
@endsection

@section('main_content')
<div class="jumbotron bg-warning">
    <div class="container">
        <h1 class="display-3">Portfolio</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
        <p><a class="btn btn-danger btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
</div>
<h1>Load Portfolio Item</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form method="post" action="/portfolio/check">
    @csrf
    <input type="text" name="cover_item" id="cover_item" placeholder="Input Cover URL" class="form-control"><br>
    <input type="text" name="link_item" id="link_item" placeholder="Input Portfolio Item URL" class="form-control"><br>
    <textarea name="description_item" id="description_item" class="form-control"
        placeholder="Input Description"></textarea><br>
    <button type="submit" class="btn btn-success">Load</button>
</form>
<br>

<div class="album py-5 bg-dark">
    <div class="container">

        <div class="row">
            @foreach($portfolio as $el)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                        alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                        src="{{ $el->cover_item }}" data-holder-rendered="true">
                    <div class="card-body bg-warning">
                        <p class="card-text">{{ $el->description_item }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                                <a href="{{ $el->link_item }}" class="btn btn-danger" target="_blank">View</a>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection