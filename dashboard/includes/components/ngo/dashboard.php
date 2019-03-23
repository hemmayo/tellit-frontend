<div class="l-container uk-margin-top">
    <h1 class="f-h4">Available Reports</h1>
</div>

<div class="l-container uk-margin-top">
    <main class="g-maihn">


        <div class="" data-behavior=>

            <div class="row" data-Feed-inner>
                <?php $reports = getReports();
                    foreach ($reports as $report) {
                        echo '<div class="o-feed__item col-md-6" data-behavior="FeedItem">

                        <article class="uk-height-large m-story m-story--audio l-container@small-  bg-green is-visible">
                            <h4 class="f-p m-story__title f-p_sans">
                                <a href="?q=Janet ">'.$report->user->name.'</a>, on <a href="?tag=Self-care">'.$report->category->title.'</a>
    
                            </h4>
                            <div class="l-grid">
                                <p class="m-story__body l-grid__item f-p_serif f-p"> '.$report->message.' …</p>
                            </div>
                            <div class="m-story__cta m-story__cta--inline_actions" data-behavior="InlineActionsToggle">
                            <button class="a-btn a-btn--type=secondary a-btn--only_icon" data-behavior="Tooltip"
                                data-Tooltip-mouseover="true" data-Tooltip-title="See story tools"
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
    
                    </div>';
                    }
                ?>
                <div class="o-feed__item col-md-6" data-behavior="FeedItem">

                    <article class="uk-height-large m-story m-story--audio l-container@small-  bg-green is-visible">
                        <h4 class="f-p m-story__title f-p_sans">
                            <a href="?q=Janet ">Janet</a>, on <a href="?tag=Self-care">Bully</a>

                        </h4>
                        <div class="l-grid">
                            <p class="m-story__body l-grid__item f-p_serif f-p"> Our son Jake was
                                diagnosed with a rare brain tumor at the age of 2. Jake taught us
                                that no matter what the circumstance is, we have to live in the now.
                                Even when the now seems ordinary, and quiet …</p>
                        </div>
                        <div class="m-story__cta">
                            <button class="a-btn a-btn--type=primary a-btn--with_icon"
                                data-behavior="PlayToggleBtn Tooltip" data-Tooltip-mouseover="true"
                                data-Tooltip-title="Listen to the full story" data-PlayToggleBtn-storyid="584"
                                onclick="dataLayer.push({'event': 'audio_play'});">

                                <svg class="icon--play-mini a-btn__icon" role="img" title="Play"
                                    aria-labelledby="icon--play-mini-3" data-PlayToggleBtn-playicon>
                                    <use xlink:href="#icon--play-mini"></use>
                                    <title id="icon--play-mini-3">
                                        Play
                                    </title>
                                </svg>


                                <svg class="icon--pause-mini a-btn__icon" role="img" title="Pause"
                                    aria-labelledby="icon--pause-mini-2" data-PlayToggleBtn-pauseicon>
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
                <div class="o-feed__item col-md-6" data-behavior="FeedItem">
                    <article class="uk-height-large m-story m-story--text l-container@small-  bg-blue"
                        data-Feed-itemid="442">
                        <h2 class="m-story__title f-p_sans f-p">
                            <a href="?q=Nita ">Nita</a>, on <a href="?tag=Lifestyle">Neglect</a>
                        </h2>
                        <div class="l-grid">
                            <p class="m-story__body l-grid__item f-p_serif f-p">Just for today, laugh
                                out loud, sing a song, be assertive, be silly, be happy, be strong.
                                Just for today do it all once and then if you liked it tomorrow do
                                it all once again.</p>
                        </div>
                        <div class="m-story__cta m-story__cta--inline_actions" data-behavior="InlineActionsToggle">
                            <button class="a-btn a-btn--type=secondary a-btn--only_icon" data-behavior="Tooltip"
                                data-Tooltip-mouseover="true" data-Tooltip-title="See story tools"
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
</div>