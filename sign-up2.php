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

                      <div class="m-form__item m-form__item--select l-grid__item m-form__item--large">
                          <label class="a-field">
                            <select name="age" class="a-field__input" data-behavior="PopulatedInput">
                              <option value=""></option>
                              <option>Less than 11 years</option>
                              <option>11 to 17 years</option>
                              <option>More than 17</option>
                            </select>
                            <div class="a-field__placeholder">
                              Age
                            </div>

                            <svg class="icon--down-arrow a-field__arrow" role="presentation">
                              <use xlink:href="#icon--down-arrow"></use>
                              <title>
                                down-arrow icon
                              </title>
                            </svg>

                          </label>
                        </div>
                        
                        <div class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                          <label class="a-field">
                            <input type="text" name="address" value="" class="a-field__input"
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
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="non-binary">Non-binary</option>
                              <option value="gender neutral">Gender neutral</option>
                              <option value="other">Other</option>
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
                            <select name="profile_type" class="a-field__input" data-behavior="PopulatedInput">
                              <option value=""></option>
                              <option value="">I'm a victim</option>
                              <option value="">I am reporting for a child</option>
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

  </div>
  <?php require 'includes/scripts.php'; ?>
</body>

</html>