<section class="about-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="about-title">
                    <h1 class="text-uppercase title-h1">Client Say about me</h1>
                    <p class="para">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                        recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                    </p>
                </div>
            </div>
        </div>
        <div class="row text-center d-flex align-items-stretch">
            @foreach ($reviews as $review )

            <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
              <div class="card testimonial-card w-100" >
                <div class="card-up" style="background-color: #9d789b;"></div>
                <div class="avatar mx-auto bg-white">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                    class="rounded-circle img-fluid" />
                </div>
                <div class="card-body">
                  <h4 class="mb-4">{{ $review->user->name }}</h4>
                  <hr />
                  <p class="dark-grey-text mt-4">
                    <i class="fas fa-quote-left pe-2"></i>{{ $review->review }}
                  </p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
    </div>



</section>
