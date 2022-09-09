 <!-- Footer -->
 <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4 ">
                <i class="bi bi-code-slash me-1 fs-5"></i>ITM COMPANY
            </h6>
            <p class="text-uppercase">
              THIS IS OUR COMPANY, providing information about technology, solving IT problems, and also web development
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            @foreach ($categories as $category )

            <p>
              <a href="{{ route('category.show', $category->id) }}" class="link-secondary text-decoration-none ">{{ $category->name }}</a>
            </p>
            @endforeach

          </div>
          <!-- Grid column -->



          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="bi bi-house-fill me-3"></i>Jakarta Timur, SMKN 46 JAKARTA</p>
            <p>
              <i class="bi bi-envelope me-3 "></i>
              azmiromzihoesaini@gmail.com
            </p>
            <p><i class="bi bi-telephone me-3"></i>08990113750</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2022 Copyright:
      <a class="text-decoration-none text-secondary fw-bold" target="_blank" href="https://www.instagram.com/romzi_azmi/">The ITM Company</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
