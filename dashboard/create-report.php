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

                        <div class="l-container uk-margin-top">
                            <h1 class="f-h3">Create Report</h1>
                            <p class="f-h5">Please fill the form below to report your case and an NGO will get in touch
                                with you</p>
                        </div>
                        <div class="l-container uk-padding">
                            <form class="uk-form-stacked" style="font-size: 1.4rem">

                                <div class="uk-margin">
                                    <form class="m-form o-contact_form__create-form" id="signup-form"
                                        enctype="multipart/form-data">

                                        <div class="m-form__section  l-grid">
                                            <div
                                                class="m-form__item m-form__item--text l-grid__item m-form__item--small">
                                                <label class="a-field">
                                                    <input type="text" name="title" value="" class="a-field__input"
                                                        data-behavior="PopulatedInput" required="">
                                                    <div class="a-field__placeholder">
                                                        Title
                                                    </div>
                                                </label>
                                                <span class="desc"></span> </div>
                                                <div
                                                class="m-form__item m-form__item--text l-grid__item m-form__item--small">
                                                <label class="a-field">
                                                    <select name="category" class="a-field__input"
                                                        data-behavior="PopulatedInput">
                                                        <option value=""></option>
                                                        <option>Early Marriage</option>
                                                        <option>Sexual Abuse</option>
                                                        <option>Physical Abuse</option>
                                                        <option>Bullying</option>
                                                    </select>
                                                    <div class="a-field__placeholder">
                                                        Category
                                                    </div>
                                                </label>
                                                <span class="desc"></span> </div>
                                       
                                            <div
                                                class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                                                <label class="a-field">
                                                    <textarea name="message" value=""
                                                        class="a-field__input" rows="10" data-behavior="PopulatedInput"
                                                        required=""></textarea>
                                                    <div class="a-field__placeholder">
                                                        Tell us your story
                                                    </div>
                                                </label>
                                                <span class="desc"></span> </div>
                            
                                            <div
                                                class="m-form__item m-form__item--note l-grid__item m-form__item--large">
                                                <div class="a-field a-field--note">
                                                    <p class="f-p">Tellit will never share your information outside of
                                                        this platform. As a
                                                        member, you can always edit your profile information at any
                                                        time. Your name, profile
                                                        photo, biography, submitted content and saved playlists will be
                                                        available to all visitors
                                                        — however your personal contact information will not be visible
                                                        without your consent.</p>
                                                </div>
                                            </div>
                                            <div class="m-form__item m-form__item--checkbox l-grid__item m-form__item--large">
                                                <label class="a-checkbox">
                                                    <input name="isPublic" type="checkbox" class="a-checkbox__input"
                                                        required="">
                                                    <div class="a-checkbox__input">

                                                        <svg class="icon--tick" role="presentation">
                                                            <use xlink:href="#icon--tick"></use>
                                                            <title>
                                                                tick icon
                                                            </title>
                                                        </svg>

                                                    </div>
                                                    <div class="f-p untuck a-checkbox__label">
                                                        Go Private (only NGOs can see your story)
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="m-form__item m-form__item--checkbox l-grid__item m-form__item--large">
                                                <label class="a-checkbox">
                                                    <input name="isAnonymous" type="checkbox" class="a-checkbox__input"
                                                        required="">
                                                    <div class="a-checkbox__input">

                                                        <svg class="icon--tick" role="presentation">
                                                            <use xlink:href="#icon--tick"></use>
                                                            <title>
                                                                tick icon
                                                            </title>
                                                        </svg>

                                                    </div>
                                                    <div class="f-p untuck a-checkbox__label">
                                                        Go Anonymous (only NGOs can see your name)
                                                    </div>
                                                </label>
                                            </div>
                                            <div
                                                class="m-form__item m-form__item--text l-grid__item m-form__item--large">
                                                <label class="a-field">
                                                    <input type="contactMeans" name="password" value=""
                                                        class="a-field__input" rows="10" data-behavior="PopulatedInput"
                                                        required="">
                                                    <div class="a-field__placeholder">
                                                        How can we reach you?
                                                    </div>
                                                </label>
                                                <span class="desc"></span> </div>
                                        </div>
                                        <div class="m-form__btn">
                                            <button class="a-btn a-btn--type=primary" type="submit">
                                                <div class="a-btn__label f-label_caps" id="button">
                                                    Create Report
                                                </div>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
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