<div class="l-container uk-margin-top">
    <div class="o-resources_grid__item">
        <article class="m-block_tout bg-sand">
            <h2 class="m-block_tout__title f-h3">
                Welcome, <?php echo $user->name; ?>!
            </h2>
            <p class="uk-margin-top f-p">
                It seems you haven't setup your NGO profile yet.  
            </p>
            <form id="ngo-profile-form">
                <div class="uk-padding uk-card-body uk-container-small bg-default">
                    <?php
                        $categories = getAbuseCategories();
                        foreach ($categories as $category) {
                            echo '<div
                            class="m-form__item m-form__item--checkbox l-grid__item m-form__item--small">
                            <label class="a-checkbox">
                            <input class="selectedCategories" type="checkbox" value="'.$category->id.'">
                                <div class="a-checkbox__input">

                                    <svg class="icon--tick" role="presentation">
                                        <use xlink:href="#icon--tick"></use>
                                        <title>
                                            tick icon
                                        </title>
                                    </svg>

                                </div>
                                <div class="f-p untuck a-checkbox__label">
                                '.$category->title.'
                                </div>
                            </label>
                        </div>';
                        }
                    ?>
                </div>
                <div class="m-form__item m-form__item--text l-grid__item m-form__item--small" >
                    <label class="a-field">
                        <input type="text" name="cacNumber" value="" class="form-control a-field__input"
                            data-behavior="PopulatedInput" required="">
                        <div class="a-field__placeholder">
                            CAC Number
                        </div>
                    </label>
                    <span class="desc"></span> </div>
            
            <footer class="m-block_tout__footer">
                <button class="a-btn a-btn--type=primary" type="submit">
                    <div class="f-label_caps">
                        Complete Profile
                    </div>
                    </button>

            </footer>
        </form>
        </article>
    </div>
</div>