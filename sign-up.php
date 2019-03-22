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

                  <div class="l-grid__item o-contact_form">
                    <h1 class="f-h3 o-contact_form__title">Create my profile</h1>

                    <ol class="m-progress_display">
                      <li class="m-progress_display__item f-h5 is-active">Settings</li>
                      <li class="m-progress_display__item f-h5">About me</li>
                    </ol>

                    <form class="m-form o-contact_form__create-form" data-behavior="AjaxForm AjaxFormResponses"
                      data-ajaxform-url="registration_process" data-ajaxform-formtype="createprofile1"
                      action="/create_profile2" method="post" enctype="multipart/form-data">

                      <div class="m-form__section  l-grid">
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--small">
                          <label class="a-field">
                            <input type="text" name="name" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Your name
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--small">
                          <label class="a-field">
                            <input type="text" name="username" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Username
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                          <label class="a-field">
                            <input type="email" name="email" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Email
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                          <label class="a-field">
                            <input type="password" name="password" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Password
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                          <label class="a-field">
                            <input type="password" name="password_confirmation" value="" class="a-field__input"
                              data-behavior="PopulatedInput" required="">
                            <div class="a-field__placeholder">
                              Confirm password
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--note l-grid__item m-form__item--large">
                          <div class="a-field a-field--note">
                            <p class="f-p">Tellit will never share your information outside of this platform. As a
                              member, you can always edit your profile information at any time. Your name, profile
                              photo, biography, submitted content and saved playlists will be available to all visitors
                              — however your personal contact information will not be visible without your consent.</p>
                          </div>
                        </div>
                        <div class="m-form__item m-form__item--checkbox l-grid__item m-form__item--large">
                          <label class="a-checkbox">
                            <input name="privacy" type="checkbox" class="a-checkbox__input" required="">
                            <div class="a-checkbox__input">

                              <svg class="icon--tick" role="presentation">
                                <use xlink:href="#icon--tick"></use>
                                <title>
                                  tick icon
                                </title>
                              </svg>

                            </div>
                            <div class="f-p untuck a-checkbox__label">
                              You agree to our <a href="terms.php"
                                target="_blank">terms of use</a>
                            </div>
                          </label>
                        </div>
                      </div>
                      <div class="m-form__btn">
                        <button class="a-btn a-btn--type=primary" type="submit">

                          <div class="a-btn__label f-label_caps">
                            Next
                          </div>
                        </button>
                      </div>
                    </form>

                    <p class="m-form__btn"><a href="login.php"
                        class="f-p o-contact_form__link">I'm already registered</a></p>
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
  </div>
  <?php require 'includes/scripts.php'; ?>

</body>

</html>