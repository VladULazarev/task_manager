<div class="welcom-post text-center mt-5 mb-5"><h1>Welcom to Simple Task Handler</h1></div>
<h4 class="text-center">Please, register or sign in</h4>

<div class="row login-signin mt-5 mb-5">
  <div class="col-xl-3 col-lg-2 col-sm-1"></div>
  <div class="col-xl-3 col-lg-4 col-sm-5 text-center"><button type="button" class="btn btn-light log-in">Register</button></div>
  <div class="col-xl-3 col-lg-4 col-sm-5 text-center"><button type="button" class="btn btn-light sign-in">Sign In</button></div>
  <div class="col-xl-3 col-lg-2 col-sm-1"></div>
</div>

<div class="row">
  <div class="col-xl-4 col-lg-3 col-md-2 col-sm-1"></div>

  <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">

    <form class="add-user">

      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="user-login">Login</label>
            <input type="text" class="form-control" id="user-login" maxlength="50" placeholder="Your login" autocomplete="off">
            <span class="user-login-alert">Wrong symbol or empty!</span>
            <span class="user-login-asterisk">*</span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="user-name">Name</label>
            <input type="text" class="form-control" id="user-name" maxlength="50" placeholder="Name" autocomplete="off">
            <span class="user-name-alert">Wrong symbol or empty!</span>
            <span class="user-name-asterisk">*</span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="user-last-name">Last name</label>
            <input type="text" class="form-control" id="user-last-name" maxlength="50" placeholder="Last name" autocomplete="off">
            <span class="user-last-name-alert">Wrong symbol or empty!</span>
            <span class="user-last-name-asterisk">*</span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="user-email">Email</label>
            <input type="email" class="form-control" id="user-email" maxlength="50" placeholder="Email" autocomplete="off">
            <span class="user-email-alert">Wrong symbol or empty!</span>
            <span class="user-email-asterisk">*</span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="user-pw">Password</label>
            <input type="password" class="form-control" id="user-pw" maxlength="16" placeholder="Password" autocomplete="off">
            <span class="user-pw-alert">Wrong symbol or empty!</span>
            <span class="user-pw-asterisk">*</span>
          </div>
        </div>
      </div>

      <div class="btn-container mt-3">
          <button class="btn btn-add-user">Register</button>
      </div>

      <div class="add-user-form-messages form-messages"></div>
      <div class="add-user-form-pop-up"></div>

    </form>

          <form class="signin-user">

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-email-signin">Email</label>
                  <input type="text" class="form-control" id="user-email-signin" maxlength="50" placeholder="Email" autocomplete="off">
                  <span class="user-email-signin-alert">Wrong symbol or empty!</span>
                  <span class="user-email-signin-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-pw-signin">Password</label>
                  <input type="password" class="form-control" id="user-pw-signin" maxlength="16" placeholder="Password" autocomplete="off">
                  <span class="user-pw-signin-alert">Wrong symbol or empty!</span>
                  <span class="user-pw-signin-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="btn-container mt-3">
                <button class="btn btn-signin-user">Sign In</button>
            </div>

            <div class="user-signin-form-messages form-messages"></div>
            <div class="user-signin-form-pop-up"></div>
          </form>
    </div>

  <div class="col-xl-4 col-lg-3 col-md-2 col-sm-1"></div>
</div>
