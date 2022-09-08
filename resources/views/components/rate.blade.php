<section class="subscribe-us-area mx-auto">
    <div class="subscribe mx-auto ">
        <div class="row">
            <div class="col-lg-12 text-center subscribe-title">
                <h4 class="text-uppercase">Get Update From anywhere</h4>
                <p class="para">Give your message for our feedback</p>
            </div>
        </div>
        <div class="d-sm-flex justify-content-center">
            <form class="w-50" action="{{ route('review.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row d-flex flex-row flex-wrap">
                    <div class="col input-textbox mb-2">
                        <input type="text" name="review" id="txtemail" class="form-control @error('review')
                            is-invalid
                        @enderror" placeholder="Your Message For My Website">
                        <div class="invalid-feedback">
                           p
                        </div>
                    </div>
                    <div class="col">
                        <div class="btn-submit ms-3">
                            <button type="submit" class="btn btn-success float-right">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
