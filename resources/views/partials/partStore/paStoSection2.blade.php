<section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/'.$section2->imgSrc)}}" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">{{($section2->span1)}}</span>
                  <span class="section-heading-lower">{{($section2->span2)}}</span>
                </h2>
                <p>{{($section2->p1)}}</p>
                <p class="mb-0">{{($section2->p2part1)}}
                  <em>{{($section2->p2Em)}}</em>{{($section2->p2part2)}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
