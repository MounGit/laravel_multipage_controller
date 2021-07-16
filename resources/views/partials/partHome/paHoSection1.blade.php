<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/'.$sect1->imgSrc)}}" alt="">
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