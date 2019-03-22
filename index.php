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
                                    <input id="search_field" data-SearchField-input
                                        data-behavior="AnalyticsClickTracking" data-AnalyticsClickTracking-label="query"
                                        type="text" class="m-search_field__input f-p_sans" autocomplete="off"
                                        autocorrect="off" autocapitalize="none" spellcheck="false">
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
                                                    <div class="m-search_field__input_text f-p_sans"
                                                        data-SearchSuggestCycle-second>
                                                        Early Marriage
                                                    </div>
                                                </div>
                                                <div class="m-vertical_toggle__item">
                                                    <div class="m-search_field__input_text f-p_sans"
                                                        data-SearchSuggestCycle-first>
                                                        Sexual Abuse
                                                    </div>
                                                </div>
                                                <div class="m-vertical_toggle__item">
                                                    <div class="m-search_field__input_text f-p_sans"
                                                        data-SearchSuggestCycle-second>
                                                        Emotional Abuse
                                                    </div>
                                                </div>
                                                <div class="m-vertical_toggle__item">
                                                    <div class="m-search_field__input_text f-p_sans"
                                                        data-SearchSuggestCycle-second>
                                                        Neglect
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="m-search_field__close btn" data-SearchField-closebtn>

                                        <svg class="icon--close-large" role="img" title="Close"
                                            aria-labelledby="icon--close-large-1">
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
                                        <a href="#" class="a-tag_btn m-horz_list__item"
                                            data-SearchField-tag="early marriage">
                                            <span class="f-p">Early Marriage</span>
                                        </a>
                                        <a href="#" class="a-tag_btn m-horz_list__item" data-SearchField-tag="body">
                                            <span class="f-p">Sexual Abuse</span>
                                        </a>
                                        <a href="#" class="a-tag_btn m-horz_list__item"
                                            data-SearchField-tag="friendships">
                                            <span class="f-p">Physical</span>
                                        </a>
                                        <a href="#" class="a-tag_btn m-horz_list__item"
                                            data-SearchField-tag="lifestyle">
                                            <span class="f-p">Emotional</span>
                                        </a>
                                        <a href="#" class="a-tag_btn m-horz_list__item"
                                            data-SearchField-tag="mindfulness">
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

                        <main class="g-maihn">


                            <div class="l-container@medium+" data-behavior=>

                                <div data-Feed-inner>
                                    <div class="o-feed__item" data-behavior="FeedItem" data-Feed-item>

                                        <article class="m-story m-story--audio l-container@small-  bg-green is-visible"
                                            data-behavior="StoryPlayerItem" data-Feed-itemid="584"
                                            data-StoryPlayerItem-data='{&quot;story&quot;:{&quot;id&quot;:&quot;584&quot;,&quot;permalink&quot;:&quot;\/story\/584&quot;,&quot;author&quot;:&quot;Janet&quot;,&quot;tag&quot;:{&quot;id&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Self-care&quot;,&quot;slug&quot;:null},&quot;audio&quot;:{&quot;url&quot;:&quot;https:\/\/ourstoryadmin.livehumanly.com\/sites\/default\/files\/2019-03\/7927fd8b-f7d3-4ed7-a0dd-772e4351696a.mp3&quot;,&quot;duration&quot;:165},&quot;transcript&quot;:&quot;&lt;p&gt;Our son Jake was diagnosed with a rare brain tumor at the age of 2 in 2012. He underwent a 6 hour brain surgery, 14 rounds of chemotherapy &amp;amp; 28 rounds of radiation. When Jake was 7 years old in 2017, he relapsed which required him to have another extensive brain surgery, 8 rounds of chemotherapy and 33 rounds of radiation.&amp;nbsp;We learned a lot about life from Jake\u2019s experience. Our family fed off his positive attitude, optimistic outlook, and how he always lived in the \u2018present\u2019. Jake taught us that no matter what the circumstance is, we have to live in the now. Even when the now seems ordinary and quiet, because the present is very special. Jake taught us that it\u2019s senseless to think about the past, because there\u2019s nothing we can do to change it. Jake\u2019s young mind also taught us that thinking about the future is pointless, because the future is never guaranteed. The now is the only thing worth focusing on and is the only thing we can control. As&amp;nbsp;adults&amp;nbsp;our minds start to wander more than a child\u2019s. We spend time thinking of moments long ago, or dream of, or&amp;nbsp;fear, a distant future. We are distracted and end up missing what\u2019s happening right in front of us. It\u2019s the quiet evenings at home with family that we should be present for, physically and mentally. It\u2019s the ordinary present that we should cherish. Whether we are going through a treatment, or feeling crummy, tired, beat up, or&amp;nbsp;whatever one is feeling or going through, make those moments as tolerable as possible. Because one day for us all, those moments will become memories, and we\u2019ll wish we cherished them as they were happening. We continue to live the way Jake did by focusing on what we can control now. What we can control is continuing the fight that Jake has started. We are continuing that fight under a 501(c)(3) Movement, fittingly called \u2018be like Jake\u2019. It\u2019s our mission to Raise Awareness and Funds for Childhood Cancer. We don\u2019t know what the future holds, but thankfully we\u2019ve learned, not to care. What we do know, is that we are making an impact for current children, and their families, because that\u2019s what we can control, and that\u2019s how we will \u2018be like Jake\u2019.&lt;\/p&gt;\r\n&quot;,&quot;resource&quot;:&quot;&quot;,&quot;saved&quot;:false},&quot;bgColor&quot;:&quot;green&quot;}'>
                                            <h2 class="m-story__title f-p_sans">
                                                <a href="?q=Janet ">Janet</a>, on <a href="?tag=Self-care">Bully</a>

                                            </h2>
                                            <div class="l-grid">
                                                <p class="m-story__body l-grid__item f-p_serif"> Our son Jake was
                                                    diagnosed with a rare brain tumor at the age of 2. Jake taught us
                                                    that no matter what the circumstance is, we have to live in the now.
                                                    Even when the now seems ordinary, and quiet …</p>
                                            </div>
                                            <div class="m-story__cta">
                                                <button class="a-btn a-btn--type=primary a-btn--with_icon"
                                                    data-behavior="PlayToggleBtn Tooltip" data-Tooltip-mouseover="true"
                                                    data-Tooltip-title="Listen to the full story"
                                                    data-PlayToggleBtn-storyid="584"
                                                    onclick="dataLayer.push({'event': 'audio_play'});">

                                                    <svg class="icon--play-mini a-btn__icon" role="img" title="Play"
                                                        aria-labelledby="icon--play-mini-3" data-PlayToggleBtn-playicon>
                                                        <use xlink:href="#icon--play-mini"></use>
                                                        <title id="icon--play-mini-3">
                                                            Play
                                                        </title>
                                                    </svg>


                                                    <svg class="icon--pause-mini a-btn__icon" role="img" title="Pause"
                                                        aria-labelledby="icon--pause-mini-2"
                                                        data-PlayToggleBtn-pauseicon>
                                                        <use xlink:href="#icon--pause-mini"></use>
                                                        <title id="icon--pause-mini-2">
                                                            Pause
                                                        </title>
                                                    </svg>

                                                    <div class="a-btn__label f-label_caps">
                                                        2:45
                                                    </div>
                                                </button>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="o-feed__item" data-behavior="FeedItem" data-Feed-item>
                                        <article class="m-story m-story--text l-container@small-  bg-blue"
                                            data-Feed-itemid="442">
                                            <h2 class="m-story__title f-p_sans">
                                                <a href="?q=Nita ">Nita</a>, on <a href="?tag=Lifestyle">Neglect</a>
                                            </h2>
                                            <div class="l-grid">
                                                <p class="m-story__body l-grid__item f-p_serif">Just for today, laugh
                                                    out loud, sing a song, be assertive, be silly, be happy, be strong.
                                                    Just for today do it all once and then if you liked it tomorrow do
                                                    it all once again.</p>
                                            </div>
                                            <div class="m-story__cta m-story__cta--inline_actions"
                                                data-behavior="InlineActionsToggle">
                                                <button class="a-btn a-btn--type=secondary a-btn--only_icon"
                                                    data-behavior="Tooltip" data-Tooltip-mouseover="true"
                                                    data-Tooltip-title="See story tools"
                                                    data-InlineActionsToggle-toggle>

                                                    <svg class="icon--kebab-horiz a-btn__icon" role="img" title="Tools"
                                                        aria-labelledby="icon--kebab-horiz-1">
                                                        <use xlink:href="#icon--kebab-horiz"></use>
                                                        <title id="icon--kebab-horiz-1">
                                                            Tools
                                                        </title>
                                                    </svg>

                                                </button>
                                                <div class="m-action_bar is-hidden" data-InlineActionsToggle-actions>
                                                    <div class="m-action_bar__item m-action_bar__item--respond">
                                                        <a href="#respond-modal" class="btn a-action_btn"
                                                            data-behavior="ModalLink AnalyticsClickTracking"
                                                            data-AnalyticsClickTracking-label="player - respond"
                                                            data-ModalLink-payload="{&quot;id&quot;:&quot;442&quot;,&quot;story_owner&quot;:&quot;7&quot;,&quot;permalink&quot;:&quot;\/story\/442&quot;,&quot;status&quot;:&quot;Published&quot;,&quot;author&quot;:&quot;Nita&quot;,&quot;tag&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;title&quot;:&quot;Lifestyle&quot;,&quot;slug&quot;:null},&quot;bg_color&quot;:&quot;blue&quot;,&quot;summary&quot;:&quot;Just for today, laugh out loud, sing a song, be assertive, be silly, be happy, be strong. Just for today do it all once and then if you liked it tomorrow do it all once again.&quot;,&quot;saved&quot;:false,&quot;resource&quot;:&quot;&quot;,&quot;transcript&quot;:&quot;&lt;p&gt;Just for today, laugh out loud, sing a song, be assertive, be silly, be happy, be strong. Just for today do it all once and then if you liked it tomorrow do it all once again.&lt;\/p&gt;\r\n&quot;,&quot;audio&quot;:{&quot;url&quot;:&quot;&quot;,&quot;duration&quot;:0}}">
                                                            <div class="a-action_btn__icon">

                                                                <svg class="icon--say-inactive" role="presentation">
                                                                    <use xlink:href="#icon--say-inactive"></use>
                                                                    <title>
                                                                        say-inactive icon
                                                                    </title>
                                                                </svg>

                                                            </div>
                                                            <div class="f-label a-action_btn__label">Respond</div>
                                                        </a>
                                                    </div>
                                                    <div class="m-action_bar__item m-action_bar__item--send">
                                                        <a href="#send-modal" class="btn a-action_btn"
                                                            data-behavior="ModalLink AnalyticsClickTracking"
                                                            data-AnalyticsClickTracking-label="player - send"
                                                            data-ModalLink-payload="{&quot;id&quot;:&quot;442&quot;,&quot;story_owner&quot;:&quot;7&quot;,&quot;permalink&quot;:&quot;\/story\/442&quot;,&quot;status&quot;:&quot;Published&quot;,&quot;author&quot;:&quot;Nita&quot;,&quot;tag&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;title&quot;:&quot;Lifestyle&quot;,&quot;slug&quot;:null},&quot;bg_color&quot;:&quot;blue&quot;,&quot;summary&quot;:&quot;Just for today, laugh out loud, sing a song, be assertive, be silly, be happy, be strong. Just for today do it all once and then if you liked it tomorrow do it all once again.&quot;,&quot;saved&quot;:false,&quot;resource&quot;:&quot;&quot;,&quot;transcript&quot;:&quot;&lt;p&gt;Just for today, laugh out loud, sing a song, be assertive, be silly, be happy, be strong. Just for today do it all once and then if you liked it tomorrow do it all once again.&lt;\/p&gt;\r\n&quot;,&quot;audio&quot;:{&quot;url&quot;:&quot;&quot;,&quot;duration&quot;:0}}">
                                                            <div class="a-action_btn__icon">

                                                                <svg class="icon--send-inactive" role="presentation">
                                                                    <use xlink:href="#icon--send-inactive"></use>
                                                                    <title>
                                                                        send-inactive icon
                                                                    </title>
                                                                </svg>

                                                            </div>
                                                            <div class="f-label a-action_btn__label">Send</div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>

                        </main>

                        <div class="g-footer_tout">
                            <div class="l-container">
                                <div class="l-grid">
                                    <div class="l-grid__item g-footer_tout__inner">
                                        <h3 class="f-h3">Join the Tellit community and stay up to date</h3>

                                        <a href="Joinus" class="a-btn a-btn--type=secondary g-footer_tout__btn"
                                            data-behavior="AnalyticsClickTracking"
                                            data-AnalyticsClickTracking-label="join the community - join us">
                                            <span class="a-btn__label f-label_caps">Join the community</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
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