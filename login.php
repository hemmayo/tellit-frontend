<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">

<head>
  <?php require 'includes/head.php'; ?>
</head>

<body>
  <div id="a17">
    <div class="g-under_home_cover">

      <?php require 'includes/nav.php'; ?>

      <div data-pjax-wrapper="pjax">
        <div data-pjax-container="pjax" data-namespace="main">
          <div class="g-base_content">


            <main class="g-main">

              <div class="l-container">
                <div class="l-grid l-grid--center">
                  <div class="l-grid__item">
                    <h1 class="f-h3 o-contact_form__title">Sign in</h1>
                  </div>
                </div>
              </div>
              <div class="l-container">
                <div class="l-grid">
                  <div class="l-grid__item o-contact_form o-contact_form--sign-in">
                    <h2 class="f-h5 o-contact_form__subtitle">Sign in </h2>
                    <form class="m-form o-contact_form__form" id="login-form">
                      <div class="m-form__section">
                        <div class="m-form__item">
                          <label class="a-field">
                            <input type="text" name="username" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Username (email)
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item">
                          <label class="a-field">
                            <input type="password" name="password" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Password
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                      </div>
                      <div class="l-grid l-grid--between">
                        <p class="m-form__btn l-grid__item">
                          <a href="" class="f-label o-contact_form__link">Forgot password? </a>
                        </p>
                        <p class="m-form__btn l-grid__item">
                          <button class="a-btn a-btn--type=primary" type="submit">
                            <div class="a-btn__label f-label_caps">
                              Sign In
                            </div>
                          </button>
                        </p>
                      </div>
                    </form>
                  </div>
                  <div class="l-grid__item o-contact_form o-contact_form--sign-in">
                    <h2 class="f-h5 o-contact_form__subtitle">Not registered yet?</h2>
                    <p class="m-form__btn">
                      <a href="sign-up.php" class="a-btn a-btn--type=primary">
                        <span class="a-btn__label f-label_caps">Create a Profile</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </main>

            <?php require 'includes/footer.php'; ?>

          </div>
        </div>
      </div>
      <?php require 'includes/modals.php'; ?>
    </div>

    <div class="g-cookie" data-behavior="CookieConsent">
      <span class="g-cookie__label">
        This website uses cookies. <a href="/content/terms">Learn more</a>
      </span>

      <button class="g-cookie__close" data-CookieConsent-closebtn>

        <svg class="icon--close-small" role="img" title="Close" aria-labelledby="icon--close-small-1">
          <use xlink:href="#icon--close-small"></use>
          <title id="icon--close-small-1">
            Close
          </title>
        </svg>

      </button>
    </div>

  </div>
  <?php require 'includes/scripts.php'; ?>
</body>

</html>