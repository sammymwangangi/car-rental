<!-- Footer -->
<footer class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold text-warning mb-4">Car</h6>
          <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="{{url('cars')}}" class="text-muted">Cars</a></li>
              <li class="mb-2"><a href="#" class="text-muted">Most Rented</a></li>
              <li class="mb-2"><a href="#" class="text-muted">Our Blog</a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4 text-warning">Company</h6>
            <ul class="list-unstyled mb-0">
              @guest
                <li class="mb-2"><a href="{{route('login')}}" class="text-muted">Login</a></li>
                <li class="mb-2"><a href="{{route('register')}}" class="text-muted">Register</a></li>
                @else  
                <li class="mb-2"><a href="{{route('bookings.index')}}" class="text-muted">My Bookings</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Favourite Car</a></li>
              @endguest
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
          <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
          <div class="p-1 rounded border">
            <div class="input-group">
              <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2020 Carental All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- End -->