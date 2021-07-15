@extends('template.main')


@section('title')
<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">{{($title->span1)}}</span>
    <span class="site-heading-lower">{{($title->span2)}}</span>
</h1>
@endsection


@section('content')

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{($sect1 -> span1)}}</span>
                    <span class="section-heading-lower">{{($sect1 -> span2)}}</span>
                </h2>
                <p class="mb-3">{{($sect1 -> p)}}</p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="{{($sect1 -> aHref)}}">{{($sect1 -> a)}}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{($sect2 -> span1)}}</span>
                        <span class="section-heading-lower">{{($sect2 -> span2)}}</span>
                    </h2>
                    <p class="mb-0">{{($sect2 -> p)}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection