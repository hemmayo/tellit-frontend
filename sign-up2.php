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
                      <li class="m-progress_display__item f-h5">Settings</li>
                      <li class="m-progress_display__item f-h5 is-active">About me</li>
                    </ol>

                    <form class="m-form o-contact_form__create-form" data-behavior="AjaxForm AjaxFormResponses"
                      data-ajaxform-url="next_registration_process" data-ajaxform-formtype="createprofile2"
                      action="/createProfile2" method="post" enctype="multipart/form-data">

                      <div class="m-form__section  l-grid">
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                          <label class="a-field">
                            <input type="text" name="age" value="" class="a-field__input"
                              data-behavior="PopulatedInput">
                            <div class="a-field__placeholder">
                              Age
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                          <label class="a-field">
                            <input type="text" name="location" value="" class="a-field__input"
                              data-behavior="PopulatedInput">
                            <div class="a-field__placeholder">
                              Location
                            </div>
                          </label>
                          <span class="desc"></span> </div>
                        <div class="m-form__item m-form__item--select l-grid__item m-form__item--large">
                          <label class="a-field">
                            <select name="gender" class="a-field__input" data-behavior="PopulatedInput">
                              <option value=""></option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Non-binary">Non-binary</option>
                              <option value="Gender neutral">Gender neutral</option>
                              <option value="Other">Other</option>
                            </select>
                            <div class="a-field__placeholder">
                              Gender
                            </div>

                            <svg class="icon--down-arrow a-field__arrow" role="presentation">
                              <use xlink:href="#icon--down-arrow"></use>
                              <title>
                                down-arrow icon
                              </title>
                            </svg>

                          </label>
                        </div>
                        <div class="m-form__item m-form__item--select l-grid__item m-form__item--large">
                          <label class="a-field">
                            <select name="indication" class="a-field__input" data-behavior="PopulatedInput">
                              <option value=""></option>
                              <option value="Breast cancer">Breast cancer</option>
                              <option value="Prostate cancer">Prostate cancer</option>
                              <option value="Lung cancer">Lung cancer</option>
                              <option value="Bladder cancer">Bladder cancer</option>
                              <option value="Melanoma">Melanoma</option>
                              <option value="Lymphoma">Lymphoma</option>
                              <option value="Kidney cancer">Kidney cancer</option>
                              <option value="Leukemia">Leukemia</option>
                              <option value="Other">Other</option>
                            </select>
                            <div class="a-field__placeholder">
                              Indication
                            </div>

                            <svg class="icon--down-arrow a-field__arrow" role="presentation">
                              <use xlink:href="#icon--down-arrow"></use>
                              <title>
                                down-arrow icon
                              </title>
                            </svg>

                          </label>
                        </div>
                        <div class="m-form__item m-form__item--select l-grid__item m-form__item--large">
                          <label class="a-field">
                            <select name="stage" class="a-field__input" data-behavior="PopulatedInput">
                              <option value=""></option>
                              <option value="Stage-0">Stage-0</option>
                              <option value="Stage-I">Stage-I</option>
                              <option value="Stage-II">Stage-II</option>
                              <option value="Stage-III">Stage-III</option>
                              <option value="Stage-IV">Stage-IV</option>
                            </select>
                            <div class="a-field__placeholder">
                              Stage
                            </div>

                            <svg class="icon--down-arrow a-field__arrow" role="presentation">
                              <use xlink:href="#icon--down-arrow"></use>
                              <title>
                                down-arrow icon
                              </title>
                            </svg>

                          </label>
                        </div>
                        <div class="m-form__item m-form__item--select l-grid__item m-form__item--large">
                          <label class="a-field">
                            <select name="profile_type" class="a-field__input" data-behavior="PopulatedInput">
                              <option value=""></option>
                              <option value="Patient">Patient</option>
                              <option value="Survivor">Survivor</option>
                              <option value="Friend">Friend</option>
                              <option value="Family member">Family member</option>
                              <option value="Caregiver">Caregiver</option>
                              <option value="Physician">Physician</option>
                              <option value="Nurse">Nurse</option>
                              <option value="Medical staff">Medical staff</option>
                              <option value="Advocate">Advocate</option>
                            </select>
                            <div class="a-field__placeholder">
                              Profile Type
                            </div>

                            <svg class="icon--down-arrow a-field__arrow" role="presentation">
                              <use xlink:href="#icon--down-arrow"></use>
                              <title>
                                down-arrow icon
                              </title>
                            </svg>

                          </label>
                        </div>
                      </div>
                      <div class="m-form__btn">
                        <button class="a-btn a-btn--type=primary" type="submit">

                          <div class="a-btn__label f-label_caps">
                            Create my account
                          </div>
                        </button>
                      </div>
                    </form>

                    <p class="m-form__btn"><a href="" class="f-p o-contact_form__link">I'm already registered</a></p>
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
  <script src="js/polyfill.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>