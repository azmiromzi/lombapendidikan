<section class="subscribe-us-area border mx-auto">
    <div class="subscribe border mx-auto ">
        <div class="row">
            <div class="col-lg-12 text-center subscribe-title">
                <h4 class="text-uppercase">Get Update From anywhere</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    consequuntur.</p>
            </div>
        </div>
        <div class="d-sm-flex justify-content-center">
            <form class="w-50" action="{{ route('review.store') }}" method="POST">
                @csrf
                <div class="row d-flex flex-row flex-wrap">
                    <div class="col input-textbox mb-2">
                        <input type="text" name="review" id="txtemail" class="form-control" placeholder="Your Message For My Website">
                    </div>
                    <div class="col">
                        <div class="btn-submit ">
                            <button type="submit" class="btn btn-success float-right">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
