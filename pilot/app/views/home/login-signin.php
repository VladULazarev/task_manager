<div class="row mb-5 login-signin">
  <div class="col-md-4"></div>
  <div class="col-md-2 text-center"><button type="button" class="btn btn-light log-in">Log In</button></div>
  <div class="col-md-2 text-center"><button type="button" class="btn btn-light sign-in">Sign In</button></div>
  <div class="col-md-4"></div>
</div>

<div class="row">
  <div class="col-md-4"></div>

  <div class="col-md-4">

          <form class="add-user">

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-login">Логин</label>
                  <input type="text" class="form-control" id="user-login" maxlength="50" placeholder="Логин" autocomplete="off">
                  <span class="user-login-alert">Неверный символ!</span>
                  <span class="user-login-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-name">Имя</label>
                  <input type="text" class="form-control" id="user-name" maxlength="50" placeholder="Имя" autocomplete="off">
                  <span class="user-name-alert">Неверный символ!</span>
                  <span class="user-name-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-last-name">Фамилия</label>
                  <input type="text" class="form-control" id="user-last-name" maxlength="50" placeholder="Фамилия" autocomplete="off">
                  <span class="user-last-name-alert">Неверный символ!</span>
                  <span class="user-last-name-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-email">Email</label>
                  <input type="email" class="form-control" id="user-email" maxlength="50" placeholder="Email" autocomplete="off">
                  <span class="user-email-alert">Неверный символ!</span>
                  <span class="user-email-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-pw">Пароль</label>
                  <input type="password" class="form-control" id="user-pw" maxlength="16" placeholder="Пароль" autocomplete="off">
                  <span class="user-pw-alert">Неверный символ!</span>
                  <span class="user-pw-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="btn-container mt-3">
                <button class="btn btn-add-user">Зарегистрироваться</button>
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
                  <span class="user-email-signin-alert">Неверный символ!</span>
                  <span class="user-email-signin-asterisk">*</span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="user-pw-signin">Пароль</label>
                  <input type="password" class="form-control" id="user-pw-signin" maxlength="16" placeholder="Пароль" autocomplete="off">
                  <span class="user-pw-signin-alert">Неверный символ!</span>
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

  <div class="col-md-4"></div>
</div>
