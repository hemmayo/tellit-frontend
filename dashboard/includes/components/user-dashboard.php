<div class="l-container g-search m-search_field" data-behavior="SearchField">
    <div class="m-search_field__inner" data-SearchField-inner>

        <form class="m-search_field__form" data-SearchField-form autocomplete="off" novalidate>
            <label for="search_field">

                <svg class="icon--search-large" role="img" title="Search"
                    aria-labelledby="icon--search-large-1">
                    <use xlink:href="#icon--search-large"></use>
                    <title id="icon--search-large-1">
                        Search
                    </title>
                </svg>

            </label>
            <input id="search_field" data-SearchField-input data-behavior="AnalyticsClickTracking"
                data-AnalyticsClickTracking-label="query" type="text" class="m-search_field__input f-p_sans"
                autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false">
            <div class="m-search_field__populated_container">
                <div class="m-search_field__input_text f-p_sans">
                    Stories about <strong data-SearchField-populatedvalue></strong>
                </div>
            </div>
            <div class="m-search_field__placeholder_container">
                <div class="m-search_field__input_text f-p_sans">
                    Search <span class="a-hide@small-">for&nbsp;</span>
                </div>


                <div class="m-search_field__suggest_container m-vertical_toggle m-vertical_toggle--slower a-hide@small-"
                    data-behavior="SearchSuggestCycle"
                    data-SearchSuggestCycle-suggestions='[&quot;Early Marriage&quot;,&quot;Bullying&quot;,&quot;Sexual Abuse&quot;,&quot;Emotional Abuse&quot;,&quot;Physical Abuse&quot;,&quot;Neglect&quot;]'>
                    <div class="m-vertical_toggle__inner">
                        <div class="m-vertical_toggle__item">
                            <div class="m-search_field__input_text f-p_sans" data-SearchSuggestCycle-second>
                                Early Marriage
                            </div>
                        </div>
                        <div class="m-vertical_toggle__item">
                            <div class="m-search_field__input_text f-p_sans" data-SearchSuggestCycle-first>
                                Sexual Abuse
                            </div>
                        </div>
                        <div class="m-vertical_toggle__item">
                            <div class="m-search_field__input_text f-p_sans" data-SearchSuggestCycle-second>
                                Emotional Abuse
                            </div>
                        </div>
                        <div class="m-vertical_toggle__item">
                            <div class="m-search_field__input_text f-p_sans" data-SearchSuggestCycle-second>
                                Neglect
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="m-search_field__close btn" data-SearchField-closebtn>

                <svg class="icon--close-large" role="img" title="Close" aria-labelledby="icon--close-large-1">
                    <use xlink:href="#icon--close-large"></use>
                    <title id="icon--close-large-1">
                        Close
                    </title>
                </svg>

            </button>
        </form>
        <div class="m-search_field__tags">
            <div class="m-horz_list m-horz_list--nowrap">
                <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="bully">
                    <span class="f-p">Bullying</span>
                </a>
                <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="early marriage">
                    <span class="f-p">Early Marriage</span>
                </a>
                <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="body">
                    <span class="f-p">Sexual Abuse</span>
                </a>
                <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="friendships">
                    <span class="f-p">Physical</span>
                </a>
                <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="lifestyle">
                    <span class="f-p">Emotional</span>
                </a>
                <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="mindfulness">
                    <span class="f-p">Neglect</span>
                </a>
            </div>
        </div>
        <div class="m-search_field__zero">
            We didn’t find any results, please try again
        </div>
        <div class="m-search_field__actions">
            <div class="m-horz_list">
                <div class="m-horz_list__item">
                    <button class="a-btn a-btn--with_icon a-btn--type=primary"
                        data-behavior="PlayAllBtnSearch AnalyticsClickTracking"
                        data-AnalyticsClickTracking-label="search - share">

                        <svg class="icon--play-mini a-btn__icon" role="presentation">
                            <use xlink:href="#icon--play-mini"></use>
                            <title>
                                play-mini icon
                            </title>
                        </svg>

                        <div class="a-btn__label f-label_caps">Play All</div>
                    </button>
                </div>
                <div class="m-horz_list__item">
                    <a href="#global-share" class="a-btn a-btn--with_icon a-btn--type=secondary"
                        data-behavior="ModalLink AnalyticsClickTracking"
                        data-AnalyticsClickTracking-label="search - playlist"
                        data-ModalLink-payload='{"title": "Share this playlist with  family and friends"}'>

                        <svg class="icon--send-mini a-btn__icon" role="presentation">
                            <use xlink:href="#icon--send-mini"></use>
                            <title>
                                send-mini icon
                            </title>
                        </svg>

                        <div class="a-btn__label f-label_caps">Send</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="l-container uk-margin-top">
    <ul class="m-horz_list">
        <li class="m-horz_list__item">
            <a href="create-report.php" class="a-btn a-btn--with_icon a-btn--type=primary">

                <svg class="icon--pencil a-btn__icon" role="presentation">
                    <use xlink:href="#icon--pencil"></use>
                    <title>
                        pencil icon
                    </title>
                </svg>

                <span class="a-btn__label f-label_caps">Write your story</span>
            </a>
        </li>
        <li class="m-horz_list__item">
            <a href="#share-story-overlay" class="a-btn a-btn--with_icon a-btn--type=primary">

                <svg class="icon--microphone a-btn__icon" role="presentation">
                    <use xlink:href="#icon--microphone"></use>
                    <title>
                        microphone icon
                    </title>
                </svg>

                <span class="a-btn__label f-label_caps">Record your story</span>
            </a>
        </li>
    </ul>
</div>

<div class="l-container container-sm">

    <div class="o-resources_grid__main bricklayer">
        <div class="bricklayer-column-sizer"></div>

        <div class="bricklayer-column">
            <div class="o-resources_grid__item">
                <!-- <article class="m-resource bg-yellow"> -->
                <article class="m-resource bg-yellow" data-feed-itemid="56">
                    <p class="m-resource__body f-resource_serif">
                        Guided meditations made simple with this app called Headspace that can
                        fit
                        in your pocket.
                    </p>
                    <footer class="m-resource__footer">
                        <a href="resources?category=18" class="f-label_caps btn" data-behavior="PjaxLink"
                            data-pjaxlink-type="resources_filter">
                            everyday-ideas
                        </a>
                    </footer>

                    <a href="#" target="_blank" class="btn m-resource__hit_url">
                        Visit resource
                    </a>
                </article>
            </div>
        </div>
        <div class="bricklayer-column">
            <div class="o-resources_grid__item">
                <!-- <article class="m-resource bg-yellow"> -->
                <article class="m-resource bg-yellow" data-feed-itemid="56">
                    <p class="m-resource__body f-resource_serif">
                        Guided meditations made simple with this app called Headspace that can
                        fit
                        in your pocket.

                    </p>
                    <footer class="m-resource__footer">
                        <a href="resources?category=18" class="f-label_caps btn" data-behavior="PjaxLink"
                            data-pjaxlink-type="resources_filter">
                            everyday-ideas
                        </a>
                    </footer>

                    <a href="#" target="_blank" class="btn m-resource__hit_url">
                        Visit resource
                    </a>
                </article>
            </div>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>