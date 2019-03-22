<!-- <div class="o-player" data-behavior="Overlay StoryPlayer" data-StoryPlayer-playlisturl="/api/getPlaylist.php?id=:id" data-StoryPlayer-interduration="10" data-StoryPlayer-intercount="3" data-StoryPlayer-interfirst id="player" data-Modal-outer> -->
<div class="o-player" data-behavior="Overlay StoryPlayer"
    data-StoryPlayer-playlisturl="https://ourstory.livehumanly.com/playlists/get_playlist/:id"
    data-StoryPlayer-interduration="10" data-StoryPlayer-intercount="3" data-StoryPlayer-interfirst id="player"
    data-Modal-outer>
    <div class="o-player__mid" data-StoryPlayer-mid data-StoryPlayer-bgcolor="pink">
        <audio controls data-StoryPlayer-audio class="hidden"></audio>
        <div class="o-player__title" data-StoryPlayer-title></div>
        <div class="o-player__progress a-progress_bar" data-StoryPlayer-progress>
            <div class="a-progress_bar__value" data-StoryPlayer-progressvalue></div>
        </div>
        <div class="o-player__play_toggle m-vertical_toggle" data-StoryPlayer-playverticaltoggle>
            <div class="m-vertical_toggle__inner">
                <div class="m-vertical_toggle__item">
                    <button class="btn" data-StoryPlayer-playbtn>

                        <svg class="icon--play-small" role="img" title="Play" aria-labelledby="icon--play-small-1">
                            <use xlink:href="#icon--play-small"></use>
                            <title id="icon--play-small-1">
                                Play
                            </title>
                        </svg>

                    </button>
                </div>
                <div class="m-vertical_toggle__item">
                    <button class="btn" data-StoryPlayer-pausebtn>

                        <svg class="icon--pause-small" role="img" title="Pause" aria-labelledby="icon--pause-small-1">
                            <use xlink:href="#icon--pause-small"></use>
                            <title id="icon--pause-small-1">
                                Pause
                            </title>
                        </svg>

                    </button>
                </div>
            </div>
        </div>
        <div class="o-player__close_btn">
            <button class="btn" data-Overlay-closebtn>

                <svg class="icon--down-arrow" role="img" title="Toggle player" aria-labelledby="icon--down-arrow-2">
                    <use xlink:href="#icon--down-arrow"></use>
                    <title id="icon--down-arrow-2">
                        Toggle player
                    </title>
                </svg>

            </button>
        </div>

        <div class="o-player__animation"
            data-StoryPlayer-animation='{"path": "https://ourstory.livehumanly.com//lottie_animations", "count": 6}'>
        </div>

        <div class="o-player__inner" data-Overlay-inner>
            <div class="o-player__playlist_title f-p_sans" data-StoryPlayer-playlisttitle></div>
            <div class="o-player__controls">
                <div>
                    <button class="btn" data-StoryPlayer-prevbtn>

                        <svg class="icon--play-previous" role="img" title="Previous"
                            aria-labelledby="icon--play-previous-1">
                            <use xlink:href="#icon--play-previous"></use>
                            <title id="icon--play-previous-1">
                                Previous
                            </title>
                        </svg>

                    </button>
                </div>
                <div class="a-play_control a-play_control--type=primary m-vertical_toggle"
                    data-StoryPlayer-playverticaltoggle>
                    <div class="m-vertical_toggle__inner">
                        <button class="m-vertical_toggle__item l-centered btn" data-StoryPlayer-playbtn>

                            <svg class="icon--play-large" role="img" title="Play" aria-labelledby="icon--play-large-1">
                                <use xlink:href="#icon--play-large"></use>
                                <title id="icon--play-large-1">
                                    Play
                                </title>
                            </svg>

                        </button>
                        <button class="m-vertical_toggle__item l-centered btn" data-StoryPlayer-pausebtn>

                            <svg class="icon--pause-large" role="img" title="Pause"
                                aria-labelledby="icon--pause-large-1">
                                <use xlink:href="#icon--pause-large"></use>
                                <title id="icon--pause-large-1">
                                    Pause
                                </title>
                            </svg>

                        </button>
                    </div>
                </div>
                <div>
                    <button class="btn" data-StoryPlayer-nextbtn>

                        <svg class="icon--play-next" role="img" title="Next" aria-labelledby="icon--play-next-1">
                            <use xlink:href="#icon--play-next"></use>
                            <title id="icon--play-next-1">
                                Next
                            </title>
                        </svg>

                    </button>
                </div>
            </div>
        </div>

        <div class="o-player__action_bar m-action_bar">
            <div class="m-action_bar__item">
                <a href="#respond-modal" class="btn a-action_btn" data-behavior="ModalLink AnalyticsClickTracking"
                    data-AnalyticsClickTracking-label="player - respond">
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
            <div class="m-action_bar__item">
                <a href="#send-modal" class="btn a-action_btn" data-behavior="ModalLink AnalyticsClickTracking"
                    data-AnalyticsClickTracking-label="player - send">
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
            <div class="m-action_bar__item">
                <a href="#read-modal" class="btn a-action_btn" data-behavior="ModalLink AnalyticsClickTracking"
                    data-AnalyticsClickTracking-label="player - read">
                    <div class="a-action_btn__icon">

                        <svg class="icon--read-inactive" role="presentation">
                            <use xlink:href="#icon--read-inactive"></use>
                            <title>
                                read-inactive icon
                            </title>
                        </svg>

                    </div>
                    <div class="f-label a-action_btn__label">Read</div>
                </a>
            </div>
            <div class="m-action_bar__item" data-behavior="StoryResourceBtn">
                <a href="#resource-modal" class="btn a-action_btn" data-behavior="ModalLink AnalyticsClickTracking"
                    data-AnalyticsClickTracking-label="player - resource">
                    <div class="a-action_btn__icon">

                        <svg class="icon--resource-inactive" role="presentation">
                            <use xlink:href="#icon--resource-inactive"></use>
                            <title>
                                resource-inactive icon
                            </title>
                        </svg>

                    </div>
                    <div class="f-label a-action_btn__label">Resource</div>
                </a>
            </div>
        </div>

        <div class="o-player__inter">
            <audio title="Share Your Story" src="sample_files/sample.mp3" controls data-StoryPlayer-interaudio
                class="hidden"></audio>
            <svg class="o-player__inter__bg" width="1269" height="613" viewBox="0 0 1269 613" fill="none"
                xmlns="http://www.w3.org/2000/svg" role="presentation">
                <title>Interstitial animation</title>
                <path
                    d="M115.487 575.239C113.064 510.459 136.127 451.055 179.903 407.999C203.281 385.005 226.096 361.57 246.465 336.224C295.745 274.899 359.802 173.3 405.852 109.45C425.375 82.3801 461.51 70.9612 498.825 80.0003C523.667 86.0176 548.384 92.517 572.484 101.413C653.255 131.228 733.615 163.488 812.626 198.988C863.979 222.062 914.716 249.489 961.713 281.129C988.96 299.473 1017.34 327.643 1029.55 355.493C1083.13 477.651 1131.53 601.189 1179.98 724.623C1184.28 735.593 1176.5 749.93 1172.29 761.784C1169.81 768.741 1166.77 775.443 1163.57 782.074C1157.23 795.201 1148.53 806.928 1137.97 816.974C1078.54 873.502 1019.11 930.03 959.677 986.558C949.232 996.492 937.061 1004.71 923.431 1010.71C919.995 1012.23 916.543 1013.72 913.06 1015.15C857.728 1037.92 803.34 1062.49 746.556 1082.52C713.701 1094.1 679.604 1084.64 646.425 1059.58C538.33 977.957 410.534 935.048 301.565 854.568C289.216 845.448 275.619 838.008 262.601 829.789C255.347 822.444 248.093 815.099 240.838 807.753C237.956 804.968 235.075 802.184 232.192 799.399L218.461 786.737C156.009 729.149 118.537 652.548 115.528 576.321L115.487 575.239Z"
                    fill="#F2A149" />
            </svg>
            <div class="o-player__inter__top">
                <ul class="m-horz_list">
                    <li class="m-horz_list__item">
                        <button class="a-play_control a-play_control--type=primary" data-StoryPlayer-interreplaybtn>

                            <svg class="icon--replay" role="img" title="Replay" aria-labelledby="icon--replay-1">
                                <use xlink:href="#icon--replay"></use>
                                <title id="icon--replay-1">
                                    Replay
                                </title>
                            </svg>

                        </button>
                    </li>
                    <li class="m-horz_list__item">
                        <button class="a-play_control a-play_control--type=primary" data-StoryPlayer-internextbtn>
                            <span class="a-play_control__sub_label f-label">Next</span>
                            <span class="a-play_control__main_label f-play_control_main_label"
                                data-StoryPlayer-interdurationlabel>10</span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="o-player__inter__bottom">
                <div class="f-h4">Inspired to share your story from your own life?</div>
                <a href="/share" class="a-btn a-btn--type=secondary" data-behavior="OverlayCloseBtn">
                    <span class="a-btn__label f-label_caps">Share Your Story</span>
                </a>
            </div>
        </div>

    </div>

</div>

<a href="#" class="g-back_to_top f-label_caps untuck" data-behavior="BackToTop">
    Back To Top
</a>

<nav class="g-mobile_nav" data-behavior="MobileNav" id="mobile_nav">
    <button class="g-mobile_nav__close btn" data-MobileNav-closebtn>

        <svg class="icon--close-large" role="img" title="Close" aria-labelledby="icon--close-large-2">
            <use xlink:href="#icon--close-large"></use>
            <title id="icon--close-large-2">
                Close
            </title>
        </svg>

    </button>
    <div class="g-mobile_nav__main">
        <ul class="g-mobile_nav__main__inner">
            <li class="f-h2">
                <a href="playlists">
                    Playlists
                </a>
            </li>
            <li class="f-h2">
                <a href="resources">
                    Resources
                </a>
            </li>
            <li class="f-h2">
                <a href="about">
                    About
                </a>
            </li>
            <li class="f-h2">
                <a href="share">
                    Share
                </a>
            </li>
        </ul>
    </div>
    <div class="g-mobile_nav__aux">
        <ul class="g-mobile_nav__aux__inner">
            <li class="f-p">
                <a href="https://www.facebook.com/livehumanly.behumanly">
                    Facebook
                </a>
            </li>
            <li class="f-p">
                <a href="https://twitter.com/live__humanly">
                    Twitter
                </a>
            </li>
            <li class="f-p">
                <a href="https://www.instagram.com/live.humanly">
                    Instagram
                </a>
            </li>
            <li class="f-p">
                <a href="contact">
                    Contact
                </a>
            </li>
            <li class="f-p">
                <a href="content/terms">
                    Terms of use
                </a>
            </li>
        </ul>
    </div>
</nav>


<div class="m-modal m-modal--fixed m-modal--send g-modal" data-behavior="Modal" id="global-share">
    <div class="m-modal__stretch">
        <div class="m-modal__inner" data-Modal-inner>

            <div class="m-modal__mid" data-Modal-scrollable>

                <div class="m-modal__title f-p" data-Modal-title>
                    Share this story with family and friends
                </div>
                <div class="m-modal__main">

                    <ul class="m-vert_list" data-behavior="SocialSharingButtons"
                        data-SocialSharingButtons-baseurl="https://ourstory.livehumanly.com/">
                        <li class="m-vert_list__item">
                            <a href="#" class="a-choice btn" data-SocialSharingButtons-btn="facebook">
                                <div class="a-choice__inner">
                                    <span class="a-choice__icon">

                                        <svg class="icon--facebook" role="presentation">
                                            <use xlink:href="#icon--facebook"></use>
                                            <title>
                                                facebook icon
                                            </title>
                                        </svg>

                                    </span>
                                    <div class="f-p untuck">Facebook</div>
                                </div>
                            </a>
                        </li>
                        <li class="m-vert_list__item">
                            <a href="#" class="a-choice btn" data-SocialSharingButtons-btn="twitter"
                                data-SocialSharingButtons-via="live__humanly">
                                <div class="a-choice__inner">
                                    <span class="a-choice__icon">

                                        <svg class="icon--twitter" role="presentation">
                                            <use xlink:href="#icon--twitter"></use>
                                            <title>
                                                twitter icon
                                            </title>
                                        </svg>

                                    </span>
                                    <div class="f-p untuck">Twitter</div>
                                </div>
                            </a>
                        </li>
                        <li class="m-vert_list__item">
                            <a href="mailto:?body=:sharetitle%20:shareurl&subject=Shared%20link%20from%20Humanly"
                                class="a-choice btn" data-SocialSharingButtons-btn="email">
                                <div class="a-choice__inner">
                                    <span class="a-choice__icon">

                                        <svg class="icon--email" role="presentation">
                                            <use xlink:href="#icon--email"></use>
                                            <title>
                                                email icon
                                            </title>
                                        </svg>

                                    </span>
                                    <div class="f-p untuck">Email</div>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <button data-Modal-closebtn class="btn f-p untuck m-modal__close_btn">
                Close
            </button>

        </div>
    </div>
</div>

<div class="m-modal m-modal--fixed m-modal--bg=transparent m-modal--response o-player__modal g-modal"
    data-behavior="Modal RespondFlow" id="respond-modal">
    <div class="m-modal__stretch">
        <div class="m-modal__inner" data-Modal-inner>

            <div class="m-modal__mid" data-Modal-scrollable>

                <div class="m-modal__title f-p">
                    Choose a private response  to send to <span data-RespondFlow-authorname></span>
                </div>
                <div class="m-modal__main">

                    <form data-behavior="AjaxForm"
                        data-AjaxForm-url="https://ourstory.livehumanly.com/playlists/sendResponse"
                        data-RespondFlow-form>

                        <input type="hidden" name="story_id" value="" data-RespondFlow-storyid>

                        <ul class="m-vert_list">
                            <li class="m-vert_list__item">
                                <label class="a-choice">
                                    <input type="radio" class="a-choice__input" name="response_choice"
                                        value="went-through" data-AjaxForm-radiosubmit
                                        data-RespondFlow-choice="&amp;#128524;">
                                    <div class="a-choice__inner">
                                        <!--<span class="a-choice__icon">&amp;#128524;</span>-->
                                        <span class="a-choice__icon">&#128524;</span>
                                        <!--<span class="a-choice__icon"><img src="https://ourstory.livehumanly.com/common/images/sad.png"></span>-->
                                        <div class="f-p untuck">I went through that too</div>
                                    </div>
                                </label>
                            </li>
                            <li class="m-vert_list__item">
                                <label class="a-choice">
                                    <input type="radio" class="a-choice__input" name="response_choice" value="helped"
                                        data-AjaxForm-radiosubmit data-RespondFlow-choice="&amp;#128522;">
                                    <div class="a-choice__inner">
                                        <!--<span class="a-choice__icon">&amp;#128522;</span>-->
                                        <span class="a-choice__icon">&#128522;</span>
                                        <!--<span class="a-choice__icon"><img src="https://ourstory.livehumanly.com/common/images/happy.png"></span>-->
                                        <div class="f-p untuck">This really helped me</div>
                                    </div>
                                </label>
                            </li>
                            <li class="m-vert_list__item">
                                <label class="a-choice">
                                    <input type="radio" class="a-choice__input" name="response_choice" value="thanks"
                                        data-AjaxForm-radiosubmit data-RespondFlow-choice="&amp;#128155;">
                                    <div class="a-choice__inner">
                                        <!--<span class="a-choice__icon">&amp;#128155;</span>-->
                                        <span class="a-choice__icon">&#128155;</span>
                                        <!--<span class="a-choice__icon"><img src="https://ourstory.livehumanly.com/common/images/heart.png"></span>-->
                                        <div class="f-p untuck">Thanks for sharing</div>
                                    </div>
                                </label>
                            </li>
                        </ul>

                    </form>

                </div>

                <div class="m-modal--response__thanks" data-RespondFlow-thanks>
                    <p class="f-p">Thank you for contributing to  the Humanly community, sign up  to stay
                        updated</p>
                    <a href="/Joinus" class="a-btn a-btn--type=secondary">
                        <span class="f-label_caps a-btn__label">Join the Community</span>
                    </a>
                </div>

            </div>

            <button data-Modal-closebtn class="btn f-p untuck m-modal__close_btn">
                Close
            </button>

            <div class="m-modal--response__sent" data-RespondFlow-sent>
                <!--<span class="m-modal--response__sent__emoji" data-RespondFlow-emoji></span>-->
                <p class="f-p">Your response has been sent to <span data-RespondFlow-authorname></span></p>
            </div>
        </div>
    </div>
</div>


<div class="m-modal m-modal--fixed m-modal--bg=transparent m-modal--send o-player__modal g-modal" data-behavior="Modal"
    id="send-modal">
    <div class="m-modal__stretch">
        <div class="m-modal__inner" data-Modal-inner>

            <div class="m-modal__mid" data-Modal-scrollable>

                <div class="m-modal__title f-p" data-Modal-title>
                    Share this story with family and friends
                </div>
                <div class="m-modal__main">

                    <ul class="m-vert_list" data-behavior="SocialSharingButtons"
                        data-SocialSharingButtons-baseurl="https://ourstory.livehumanly.com/"
                        data-SocialSharingButtons-sendstory="1">
                        <li class="m-vert_list__item">
                            <a href="#" class="a-choice btn" data-SocialSharingButtons-btn="facebook">
                                <div class="a-choice__inner">
                                    <span class="a-choice__icon">

                                        <svg class="icon--facebook" role="presentation">
                                            <use xlink:href="#icon--facebook"></use>
                                            <title>
                                                facebook icon
                                            </title>
                                        </svg>

                                    </span>
                                    <div class="f-p untuck">Facebook</div>
                                </div>
                            </a>
                        </li>
                        <li class="m-vert_list__item">
                            <a href="#" class="a-choice btn" data-SocialSharingButtons-btn="twitter"
                                data-SocialSharingButtons-via="live__humanly">
                                <div class="a-choice__inner">
                                    <span class="a-choice__icon">

                                        <svg class="icon--twitter" role="presentation">
                                            <use xlink:href="#icon--twitter"></use>
                                            <title>
                                                twitter icon
                                            </title>
                                        </svg>

                                    </span>
                                    <div class="f-p untuck">Twitter</div>
                                </div>
                            </a>
                        </li>
                        <li class="m-vert_list__item">
                            <a href="mailto:?body=:sharetitle%20:shareurl&subject=Shared%20link%20from%20Humanly"
                                class="a-choice btn" data-SocialSharingButtons-btn="email">
                                <div class="a-choice__inner">
                                    <span class="a-choice__icon">

                                        <svg class="icon--email" role="presentation">
                                            <use xlink:href="#icon--email"></use>
                                            <title>
                                                email icon
                                            </title>
                                        </svg>

                                    </span>
                                    <div class="f-p untuck">Email</div>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <button data-Modal-closebtn class="btn f-p untuck m-modal__close_btn">
                Close
            </button>

        </div>
    </div>
</div>

<div class="m-modal m-modal--fixed m-modal--bg=transparent m-modal--read o-player__modal g-modal" data-behavior="Modal"
    id="read-modal">
    <div class="m-modal__stretch">
        <div class="m-modal__inner" data-Modal-inner>

            <div class="m-modal__mid" data-Modal-scrollable>

                <div class="m-modal__body" data-behavior="StoryTranscript">

                </div>

            </div>

            <button data-Modal-closebtn class="btn f-p untuck m-modal__close_btn">
                Close
            </button>

        </div>
    </div>
</div>

<div class="m-modal m-modal--fixed m-modal--bg=transparent m-modal--resource o-player__modal g-modal"
    data-behavior="Modal" id="resource-modal">
    <div class="m-modal__stretch">
        <div class="m-modal__inner" data-Modal-inner>

            <div class="m-modal__mid" data-Modal-scrollable>

                <div class="m-modal__body" data-behavior="StoryResource">
                    <p data-StoryResource-body class="f-p"></p>
                    <p>
                        <a href="#" data-StoryResource-link class="a-btn a-btn--type=secondary" target="_blank">
                            <span class="f-label_caps a-btn__label">Visit Resource</span>
                        </a>
                    </p>
                </div>

            </div>

            <button data-Modal-closebtn class="btn f-p untuck m-modal__close_btn">
                Close
            </button>

        </div>
    </div>
</div>

<div class="m-modal m-modal--fixed m-modal--signin g-modal" data-behavior="Modal" id="signin"
    data-AjaxFormResponses-modal="sign-in-modal">
    <div class="m-modal__stretch">
        <div class="m-modal__inner" data-Modal-inner>

            <div class="m-modal__mid" data-Modal-scrollable>

                <div class="m-modal__body" data-behavior="">

                    <div class="o-contact_form o-contact_form--sign-in">
                        <h2 class="f-h5 o-contact_form__subtitle">Sign in</h2>
                        <form class="m-form o-contact_form__form" data-behavior="AjaxForm AjaxFormResponses"
                            data-AjaxForm-url="https://ourstory.livehumanly.com/signin/signin_process"
                            data-AjaxForm-formType="signin" data-AjaxFormResponses-modalName="sign-in-modal"
                            action="/signin" method="post">
                            <div class="m-form__section">
                                <div class="m-form__item">
                                    <label class="a-field">
                                        <input type="text" name="username" value="" class="a-field__input"
                                            data-behavior="PopulatedInput" required>
                                        <div class="a-field__placeholder">
                                            Username (email)
                                        </div>
                                    </label>
                                    <span class="desc"></span> </div>
                                <div class="m-form__item">
                                    <label class="a-field">
                                        <input type="password" name="password" value="" class="a-field__input"
                                            data-behavior="PopulatedInput" required>
                                        <div class="a-field__placeholder">
                                            Password
                                        </div>
                                    </label>
                                    <span class="desc"></span> </div>
                            </div>
                            <div class="l-grid l-grid--between">
                                <p class="m-form__btn l-grid__item">
                                    <a href="Signin/forgot_password" class="f-label o-contact_form__link">Forgot
                                        password? </a>
                                </p>
                                <p class="m-form__btn l-grid__item">
                                    <button class="a-btn a-btn--type=secondary" type="submit">
                                        <div class="a-btn__label f-label_caps">
                                            Sign In
                                        </div>
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="o-contact_form o-contact_form--sign-in">
                        <h2 class="f-h5 o-contact_form__subtitle">Not registered yet?</h2>
                        <p class="m-form__btn">
                            <a href="signin/create_profile" class="a-btn a-btn--type=secondary">
                                <span class="a-btn__label f-label_caps">Create a Profile</span>
                            </a>
                        </p>
                    </div>

                </div>

            </div>

            <button data-Modal-closebtn class="btn f-p untuck m-modal__close_btn">
                Close
            </button>

        </div>
    </div>
</div>