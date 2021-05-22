<div class="dropdn-content account-drop" id="dropdnAccount">
      <div class="dropdn-content-block">
        <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
        <ul>
          <li><a href="{{route('login')}}"><span>Log In</span><i class="icon-login"></i></a></li>
          <li><a href="{{route('create')}}"><span>Register</span><i class="icon-user2"></i></a></li>
          <li><a href="{{route('varient1')}}"><span>Checkout</span><i class="icon-card"></i></a></li>
        </ul>
        <div class="dropdn-form-wrapper">
          <h5>Quick Login</h5>
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
              <div class="invalid-feedback">Can't be blank</div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control--sm" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn">Enter</button>
          </form>
        </div>
      </div>
      <div class="drop-overlay js-dropdn-close"></div>
    </div>