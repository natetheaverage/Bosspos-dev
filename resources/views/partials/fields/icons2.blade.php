@extends('app')

@section('title')
	@parent
	#PAGE_TITLE
@stop

@section('css')
	@parent
@stop


@section('content')
@parent
<div class="container">



    <div class="filter-parent" id="search">
        <label for="filter-by"> <i class="fa fa-search"></i></label>
        <div style="position: relative; height: 46px; display: block;">
            <input class="form-control input-lg hint" tabindex="" style="position: absolute; background-color: transparent;">
            <input placeholder="Search icons" id="filter-by" class="form-control selectpicker input-lg" tabindex="" style="position: relative; background-color: transparent;"></div>
        <a href="" id="filter-clear" class="fa fa-times hide"></a>
    </div>
    <script>
        try {
            window.filterSet = JSON.parse('["glass""martini""drink""bar""alcohol""liquor""music""note""sound""search""magnify""zoom""enlarge""bigger""envelope-o""email""support""e-mail""letter""mail""notification""heart""love""like""favorite""star""award""achievement""night""rating""score""star-o""user""person""man""head""profile""film""movie""th-large""blocks""squares""boxes""""th-list""""""checklist""finished""completed""done""todo""check""checkmark""agree""accept""confirm""times""remove""close""exit""x""search-plus""search-minus""minify""smaller""power-off""""signal""cog""gear""settings""trash-o""garbage""delete""trash""hide""home""main""house""file-o""new""page""pdf""document""clock-o""watch""timer""late""timestamp""road""street""download""import""arrow-circle-o-down""arrow-circle-o-up""inbox""play-circle-o""repeat""rotate-right""redo""forward""refresh""reload""list-alt""lock""protect""admin""flag""report""notify""headphones""listen""volume-off""mute""volume-down""lower""quieter""volume-up""higher""louder""qrcode""scan""barcode""tag""label""tags""labels""book""read""documentation""bookmark""save""print""camera""photo""picture""record""font""text""bold""italic""italics""text-height""text-width""align-left""align-center""middle""align-right""align-justify""list""outdent""dedent""indent""video-camera""picture-o""image""pencil""write""edit""update""map-marker""map""pin""location""coordinates""localize""address""travel""where""place""adjust""contrast""tint""raindrop""pencil-square-o""share-square-o""social""send""check-square-o""arrows""move""reorder""resize""step-backward""rewind""previous""beginning""start""first""fast-backward""backward""play""playing""pause""wait""stop""block""box""square""next""fast-forward""end""last""step-forward""eject""chevron-left""bracket""back""chevron-right""plus-circle""add""create""expand""minus-circle""times-circle""check-circle""question-circle""help""information""unknown""info-circle""more""details""crosshairs""picker""times-circle-o""check-circle-o""ban""abort""arrow-left""arrow-right""arrow-up""arrow-down""share""mail-forward""compress""combine""merge""plus""minus""collapse""asterisk""exclamation-circle""warning""error""problem""alert""gift""present""leaf""eco""nature""fire""flame""hot""popular""eye""show""visible""views""eye-slash""toggle""visiblity""exclamation-triangle""plane""trip""destination""airplane""fly""mode""calendar""date""time""when""random""sort""comment""speech""magnet""chevron-up""chevron-down""retweet""shopping-cart""checkout""buy""purchase""payment""folder""folder-open""arrows-v""arrows-h""bar-chart""bar-chart-o""graph""twitter-square""tweet""social network""facebook-square""camera-retro""key""unlock""password""cogs""gears""comments""conversation""notes""thumbs-o-up""approve""thumbs-o-down""dislike""disapprove""disagree""star-half""heart-o""sign-out""log out""logout""leave""arrow""linkedin-square""thumb-tack""marker""external-link""open""sign-in""enter""join""sign up""sign in""signin""signup""trophy""winner""game""github-square""octocat""upload""lemon-o""phone""call""voice""number""square-o""bookmark-o""phone-square""twitter""facebook""facebook-f""github""credit-card""money""debit""rss""feed""blog""hdd-o""harddrive""hard drive""storage""bullhorn""announcement""broadcast""bell""reminder""certificate""badge""hand-o-right""point""right""hand-o-left""left""hand-o-up""hand-o-down""arrow-circle-left""arrow-circle-right""arrow-circle-up""arrow-circle-down""globe""world""planet""earth""global""translate""all""language""country""wrench""fix""tasks""progress""loading""downloading""downloads""filter""funnel""options""briefcase""work""business""office""luggage""bag""arrows-alt""users""group""people""profiles""persons""link""chain""cloud""flask""science""beaker""experimental""labs""scissors""cut""files-o""copy""duplicate""paperclip""attachment""floppy-o""bars""navicon""menu""drag""list-ul""list-ol""numbers""strikethrough""underline""table""data""excel""spreadsheet""magic""wizard""automatic""autocomplete""truck""shipping""pinterest""pinterest-square""google-plus-square""google-plus""cash""caret-down""dropdown""caret-up""caret-left""caret-right""columns""split""panes""unsorted""order""sort-desc""sort-down""sort-asc""sort-up""envelope""linkedin""undo""rotate-left""gavel""legal""tachometer""dashboard""comment-o""comments-o""bolt""flash""lightning""weather""sitemap""directory""hierarchy""organization""umbrella""clipboard""paste""lightbulb-o""idea""inspiration""exchange""cloud-download""cloud-upload""user-md""doctor""medical""nurse""stethoscope""suitcase""baggage""bell-o""coffee""morning""mug""breakfast""tea""cafe""cutlery""food""restaurant""spoon""knife""dinner""eat""file-text-o""building-o""apartment""hospital-o""building""ambulance""medkit""first aid""firstaid""fighter-jet""quick""fast""beer""stein""h-square""hospital""hotel""plus-square""angle-double-left""laquo""quote""angle-double-right""raquo""angle-double-up""angle-double-down""angle-left""angle-right""angle-up""angle-down""desktop""monitor""screen""computer""demo""device""laptop""tablet""ipad""mobile""mobile-phone""cell phone""cellphone""iphone""circle-o""quote-left""quote-right""spinner""circle""dot""reply""mail-reply""github-alt""folder-o""folder-open-o""smile-o""emoticon""happy""satisfied""frown-o""sad""meh-o""neutral""gamepad""controller""keyboard-o""type""input""flag-o""flag-checkered""terminal""command""prompt""code""html""brackets""reply-all""mail-reply-all""star-half-o""star-half-empty""star-half-full""location-arrow""crop""code-fork""git""fork""vcs""svn""rebase""version""chain-broken""unlink""question""info""exclamation""superscript""exponential""subscript""eraser""puzzle-piece""addon""add-on""section""microphone""microphone-slash""shield""calendar-o""fire-extinguisher""rocket""app""maxcdn""chevron-circle-left""chevron-circle-right""chevron-circle-up""chevron-circle-down""html5""css3""anchor""unlock-alt""bullseye""target""ellipsis-h""dots""ellipsis-v""rss-square""play-circle""ticket""pass""minus-square""minus-square-o""level-up""level-down""check-square""pencil-square""external-link-square""share-square""compass""safari""caret-square-o-down""toggle-down""caret-square-o-up""toggle-up""caret-square-o-right""toggle-right""eur""euro""gbp""usd""dollar""inr""rupee""jpy""cny""rmb""yen""rub""ruble""rouble""krw""won""btc""bitcoin""file""file-text""sort-alpha-asc""sort-alpha-desc""sort-amount-asc""sort-amount-desc""sort-numeric-asc""sort-numeric-desc""thumbs-up""thumbs-down""youtube-square""video""youtube""xing""xing-square""youtube-play""dropbox""stack-overflow""instagram""flickr""adn""bitbucket""bitbucket-square""tumblr""tumblr-square""long-arrow-down""long-arrow-up""long-arrow-left""long-arrow-right""apple""osx""windows""android""linux""tux""dribbble""skype""foursquare""trello""female""woman""male""gratipay""gittip""sun-o""lighter""brighten""day""moon-o""darker""archive""bug""""weibo""renren""pagelines""leaves""tree""plant""stack-exchange""arrow-circle-o-right""arrow-circle-o-left""caret-square-o-left""toggle-left""dot-circle-o""wheelchair""handicap""accessibility""accessibile""vimeo-square""try""turkish-lira""plus-square-o""space-shuttle""slack""envelope-square""wordpress""openid""university""institution""bank""graduation-cap""mortar-board""yahoo""google""reddit""reddit-square""stumbleupon-circle""stumbleupon""delicious""digg""pied-piper""pied-piper-alt""drupal""joomla""fax""child""paw""cube""cubes""behance""behance-square""steam""steam-square""recycle""car""automobile""vehicle""taxi""cab""spotify""deviantart""soundcloud""database""file-pdf-o""file-word-o""file-excel-o""file-powerpoint-o""file-image-o""file-photo-o""file-picture-o""file-archive-o""file-zip-o""file-audio-o""file-sound-o""file-video-o""file-movie-o""file-code-o""vine""codepen""jsfiddle""life-ring""life-bouy""life-buoy""life-saver""circle-o-notch""rebel""""empire""""git-square""hacker-news""tencent-weibo""""weixin""wechat""paper-plane""paper-plane-o""send-o""history""circle-thin""genderless""header""paragraph""sliders""share-alt""share-alt-square""bomb""futbol-o""soccer-ball-o""tty""binoculars""plug""slideshare""twitch""yelp""newspaper-o""wifi""calculator""paypal""google-wallet""cc-visa""cc-mastercard""cc-discover""cc-amex""cc-paypal""cc-stripe""bell-slash""bell-slash-o""copyright""""eyedropper""paint-brush""birthday-cake""area-chart""pie-chart""line-chart""lastfm""lastfm-square""toggle-off""toggle-on""bicycle""bike""bus""ioxhost""angellist""""ils""shekel""sheqel""meanpath""buysellads""connectdevelop""dashcube""forumbee""leanpub""sellsy""shirtsinbulk""simplybuilt""skyatlas""cart-plus""shopping""cart-arrow-down""diamond""gem""gemstone""ship""boat""sea""user-secret""whisper""spy""incognito""motorcycle""street-view""heartbeat""ekg""venus""mars""mercury""transgender""transgender-alt""venus-double""mars-double""venus-mars""mars-stroke""mars-stroke-v""mars-stroke-h""neuter""facebook-official""pinterest-p""whatsapp""server""user-plus""user-times""bed""viacoin""train""subway""medium"]');
        } catch (e) {
            console.error('Invalid JSON data!');
            window.filterSet = [];
        }
    </script>
    <section id="filter" style="display: none;">
        <h2 class="page-header text-muted">Search for '<span class="text-color-default" id="filter-val"></span>'</h2>

        <div class="row fontawesome-icon-list">

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="glass|martini|drink|bar|alcohol|liquor">
                <a href="">    <i class="fa fa-glass
                value="fa fa-glass
                "></i> glass</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="music|note|sound" style="display: block;">
                <a href="">    <i class="fa fa-music
                value="fa fa-music
                "></i> music</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="search|magnify|zoom|enlarge|bigger" style="display: none;">
                <a href="">   <i class="fa fa-search
                value="fa fa-search
                "></i> search</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="envelope-o|email|support|e-mail|letter|mail|notification" style="display: none;">
                <a href="">   <i class="fa fa-envelope-o
                value="fa fa-envelope-o
                "></i> envelope-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="heart|love|like|favorite" style="display: none;">
                <a href="">    <i class="fa fa-heart
                value="fa fa-heart
                "></i> heart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="star|award|achievement|night|rating|score" style="display: block;">
                <a href=""> <i class="fa fa-star
                value="fa fa-star
                "></i> star</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="star-o|award|achievement|night|rating|score" style="display: block;">
                <a href="">   <i class="fa fa-star-o
                value="fa fa-star-o
                "></i> star-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="user|person|man|head|profile" style="display: block;">
                <a href=""> <i class="fa fa-user
                value="fa fa-user
                "></i> user</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="film|movie" style="display: none;">
                <a href=""> <i class="fa fa-film
                value="fa fa-film
                "></i> film</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="th-large|blocks|squares|boxes" style="display: none;">
                <a href=""> <i class="fa fa-th-large
                value="fa fa-th-large
                "></i> th-large</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="th|blocks|squares|boxes" style="display: none;">
                <a href=""><i class="fa fa-th
                value="fa fa-th
                "></i> th</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="th-list|ul|ol|checklist|finished|completed|done|todo" style="display: block;">
                <a href="">  <i class="fa fa-th-list
                value="fa fa-th-list
                "></i> th-list</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="check|checkmark|done|todo|agree|accept|confirm" style="display: block;">
                <a href="">    <i class="fa fa-check
                value="fa fa-check
                "></i> check</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="times|remove|close|close|exit|x" style="display: none;">
                <a href="">    <i class="fa fa-times
                value="fa fa-times
                "></i> times</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="search-plus|magnify|zoom|enlarge|bigger" style="display: none;">
                <a href="">  <i class="fa fa-search-plus
                value="fa fa-search-plus
                "></i> search-plus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="search-minus|magnify|minify|zoom|smaller" style="display: none;">
                <a href=""> <i class="fa fa-search-minus
                value="fa fa-search-minus
                "></i> search-minus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="power-off|on" style="display: none;">
                <a href="">    <i class="fa fa-power-off
                value="fa fa-power-off
                "></i> power-off</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="signal" style="display: none;">
                <a href="">   <i class="fa fa-signal
                value="fa fa-signal
                "></i> signal</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cog|gear|settings" style="display: none;">
                <a href=""><i class="fa fa-cog
                value="fa fa-cog
                "></i> cog</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="trash-o|garbage|delete|remove|trash|hide" style="display: block;">
                <a href="">  <i class="fa fa-trash-o
                value="fa fa-trash-o
                "></i> trash-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="home|main|house" style="display: none;">
                <a href=""> <i class="fa fa-home
                value="fa fa-home
                "></i> home</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-o|new|page|pdf|document" style="display: block;">
                <a href="">   <i class="fa fa-file-o
                value="fa fa-file-o
                "></i> file-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="clock-o|watch|timer|late|timestamp" style="display: none;">
                <a href="">  <i class="fa fa-clock-o
                value="fa fa-clock-o
                "></i> clock-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="road|street" style="display: block;">
                <a href=""> <i class="fa fa-road
                value="fa fa-road
                "></i> road</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="download|import" style="display: block;">
                <a href=""> <i class="fa fa-download
                value="fa fa-download
                "></i> download</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-o-down|download" style="display: block;">
                <a href="">  <i class="fa fa-arrow-circle-o-down
                value="fa fa-arrow-circle-o-down
                "></i> arrow-circle-o-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-o-up" style="display: none;">
                <a href="">    <i class="fa fa-arrow-circle-o-up
                value="fa fa-arrow-circle-o-up
                "></i> arrow-circle-o-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="inbox" style="display: none;">
                <a href="">    <i class="fa fa-inbox
                value="fa fa-inbox
                "></i> inbox</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="play-circle-o" style="display: none;">
                <a href="">    <i class="fa fa-play-circle-o
                value="fa fa-play-circle-o
                "></i> play-circle-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="repeat|rotate-right|redo|forward" style="display: block;">
                <a href="">   <i class="fa fa-repeat
                value="fa fa-repeat
                "></i> repeat</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="refresh|reload" style="display: block;">
                <a href="">  <i class="fa fa-refresh
                value="fa fa-refresh
                "></i> refresh</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="list-alt|ul|ol|checklist|finished|completed|done|todo" style="display: block;">
                <a href=""> <i class="fa fa-list-alt
                value="fa fa-list-alt
                "></i> list-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="lock|protect|admin" style="display: block;">
                <a href=""> <i class="fa fa-lock
                value="fa fa-lock
                "></i> lock</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="flag|report|notification|notify" style="display: none;">
                <a href=""> <i class="fa fa-flag
                value="fa fa-flag
                "></i> flag</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="headphones|sound|listen|music" style="display: block;">
                <a href="">   <i class="fa fa-headphones
                value="fa fa-headphones
                "></i> headphones</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="volume-off|mute|sound|music" style="display: block;">
                <a href="">   <i class="fa fa-volume-off
                value="fa fa-volume-off
                "></i> volume-off</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="volume-down|lower|quieter|sound|music" style="display: block;">
                <a href="">  <i class="fa fa-volume-down
                value="fa fa-volume-down
                "></i> volume-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="volume-up|higher|louder|sound|music" style="display: block;">
                <a href="">    <i class="fa fa-volume-up
                value="fa fa-volume-up
                "></i> volume-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="qrcode|scan" style="display: block;">
                <a href="">   <i class="fa fa-qrcode
                value="fa fa-qrcode
                "></i> qrcode</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="barcode|scan" style="display: block;">
                <a href="">  <i class="fa fa-barcode
                value="fa fa-barcode
                "></i> barcode</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tag|label" style="display: none;">
                <a href=""><i class="fa fa-tag
                value="fa fa-tag
                "></i> tag</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tags|labels" style="display: none;">
                <a href=""> <i class="fa fa-tags
                value="fa fa-tags
                "></i> tags</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="book|read|documentation" style="display: block;">
                <a href=""> <i class="fa fa-book
                value="fa fa-book
                "></i> book</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bookmark|save" style="display: none;">
                <a href=""> <i class="fa fa-bookmark
                value="fa fa-bookmark
                "></i> bookmark</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="print" style="display: none;">
                <a href="">    <i class="fa fa-print
                value="fa fa-print
                "></i> print</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="camera|photo|picture|record" style="display: block;">
                <a href="">   <i class="fa fa-camera
                value="fa fa-camera
                "></i> camera</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="font|text" style="display: none;">
                <a href=""> <i class="fa fa-font
                value="fa fa-font
                "></i> font</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bold" style="display: block;">
                <a href=""> <i class="fa fa-bold
                value="fa fa-bold
                "></i> bold</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="italic|italics" style="display: none;">
                <a href="">   <i class="fa fa-italic
                value="fa fa-italic
                "></i> italic</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="text-height" style="display: none;">
                <a href="">  <i class="fa fa-text-height
                value="fa fa-text-height
                "></i> text-height</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="text-width" style="display: block;">
                <a href="">   <i class="fa fa-text-width
                value="fa fa-text-width
                "></i> text-width</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="align-left|text" style="display: none;">
                <a href="">   <i class="fa fa-align-left
                value="fa fa-align-left
                "></i> align-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="align-center|middle|text" style="display: block;">
                <a href=""> <i class="fa fa-align-center
                value="fa fa-align-center
                "></i> align-center</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="align-right|text" style="display: none;">
                <a href="">  <i class="fa fa-align-right
                value="fa fa-align-right
                "></i> align-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="align-justify|text" style="display: none;">
                <a href="">    <i class="fa fa-align-justify
                value="fa fa-align-justify
                "></i> align-justify</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="list|ul|ol|checklist|finished|completed|done|todo" style="display: block;">
                <a href=""> <i class="fa fa-list
                value="fa fa-list
                "></i> list</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="outdent|dedent" style="display: block;">
                <a href="">  <i class="fa fa-outdent
                value="fa fa-outdent
                "></i> outdent</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="indent" style="display: block;">
                <a href="">   <i class="fa fa-indent
                value="fa fa-indent
                "></i> indent</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="video-camera|film|movie|record" style="display: block;">
                <a href=""> <i class="fa fa-video-camera
                value="fa fa-video-camera
                "></i> video-camera</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="picture-o|photo|image" style="display: none;">
                <a href="">    <i class="fa fa-picture-o
                value="fa fa-picture-o
                "></i> picture-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pencil|write|edit|update" style="display: block;">
                <a href="">   <i class="fa fa-pencil
                value="fa fa-pencil
                "></i> pencil</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="map-marker|map|pin|location|coordinates|localize|address|travel|where|place" style="display: block;">
                <a href="">   <i class="fa fa-map-marker
                value="fa fa-map-marker
                "></i> map-marker</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="adjust|contrast" style="display: block;">
                <a href="">   <i class="fa fa-adjust
                value="fa fa-adjust
                "></i> adjust</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tint|raindrop" style="display: block;">
                <a href=""> <i class="fa fa-tint
                value="fa fa-tint
                "></i> tint</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pencil-square-o|edit|write|edit|update" style="display: block;">
                <a href="">  <i class="fa fa-pencil-square-o
                value="fa fa-pencil-square-o
                "></i> pencil-square-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="share-square-o|social|send" style="display: block;">
                <a href="">   <i class="fa fa-share-square-o
                value="fa fa-share-square-o
                "></i> share-square-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="check-square-o|todo|done|agree|accept|confirm" style="display: block;">
                <a href="">   <i class="fa fa-check-square-o
                value="fa fa-check-square-o
                "></i> check-square-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrows|move|reorder|resize" style="display: block;">
                <a href="">   <i class="fa fa-arrows
                value="fa fa-arrows
                "></i> arrows</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="step-backward|rewind|previous|beginning|start|first" style="display: block;">
                <a href="">    <i class="fa fa-step-backward
                value="fa fa-step-backward
                "></i> step-backward</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="fast-backward|rewind|previous|beginning|start|first" style="display: block;">
                <a href="">    <i class="fa fa-fast-backward
                value="fa fa-fast-backward
                "></i> fast-backward</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="backward|rewind|previous" style="display: block;">
                <a href=""> <i class="fa fa-backward
                value="fa fa-backward
                "></i> backward</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="play|start|playing|music|sound" style="display: block;">
                <a href=""> <i class="fa fa-play
                value="fa fa-play
                "></i> play</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pause|wait" style="display: none;">
                <a href="">    <i class="fa fa-pause
                value="fa fa-pause
                "></i> pause</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="stop|block|box|square" style="display: none;">
                <a href=""> <i class="fa fa-stop
                value="fa fa-stop
                "></i> stop</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="forward|forward|next" style="display: block;">
                <a href="">  <i class="fa fa-forward
                value="fa fa-forward
                "></i> forward</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="fast-forward|next|end|last" style="display: block;">
                <a href=""> <i class="fa fa-fast-forward
                value="fa fa-fast-forward
                "></i> fast-forward</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="step-forward|next|end|last" style="display: block;">
                <a href=""> <i class="fa fa-step-forward
                value="fa fa-step-forward
                "></i> step-forward</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="eject" style="display: none;">
                <a href="">    <i class="fa fa-eject
                value="fa fa-eject
                "></i> eject</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-left|bracket|previous|back" style="display: none;">
                <a href=""> <i class="fa fa-chevron-left
                value="fa fa-chevron-left
                "></i> chevron-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-right|bracket|next|forward" style="display: block;">
                <a href="">    <i class="fa fa-chevron-right
                value="fa fa-chevron-right
                "></i> chevron-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="plus-circle|add|new|create|expand" style="display: block;">
                <a href="">  <i class="fa fa-plus-circle
                value="fa fa-plus-circle
                "></i> plus-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="minus-circle|delete|remove|trash|hide" style="display: block;">
                <a href=""> <i class="fa fa-minus-circle
                value="fa fa-minus-circle
                "></i> minus-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="times-circle|close|exit|x" style="display: none;">
                <a href=""> <i class="fa fa-times-circle
                value="fa fa-times-circle
                "></i> times-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="check-circle|todo|done|agree|accept|confirm" style="display: block;">
                <a href=""> <i class="fa fa-check-circle
                value="fa fa-check-circle
                "></i> check-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="question-circle|help|information|unknown|support" style="display: none;">
                <a href="">  <i class="fa fa-question-circle
                value="fa fa-question-circle
                "></i> question-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="info-circle|help|information|more|details" style="display: block;">
                <a href="">  <i class="fa fa-info-circle
                value="fa fa-info-circle
                "></i> info-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="crosshairs|picker" style="display: none;">
                <a href="">   <i class="fa fa-crosshairs
                value="fa fa-crosshairs
                "></i> crosshairs</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="times-circle-o|close|exit|x" style="display: none;">
                <a href="">   <i class="fa fa-times-circle-o
                value="fa fa-times-circle-o
                "></i> times-circle-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="check-circle-o|todo|done|agree|accept|confirm" style="display: block;">
                <a href="">   <i class="fa fa-check-circle-o
                value="fa fa-check-circle-o
                "></i> check-circle-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ban|block|abort" style="display: none;">
                <a href=""><i class="fa fa-ban
                value="fa fa-ban
                "></i> ban</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-left|previous|back" style="display: none;">
                <a href="">   <i class="fa fa-arrow-left
                value="fa fa-arrow-left
                "></i> arrow-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-right|next|forward" style="display: block;">
                <a href="">  <i class="fa fa-arrow-right
                value="fa fa-arrow-right
                "></i> arrow-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-up" style="display: none;">
                <a href=""> <i class="fa fa-arrow-up
                value="fa fa-arrow-up
                "></i> arrow-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-down|download" style="display: block;">
                <a href="">   <i class="fa fa-arrow-down
                value="fa fa-arrow-down
                "></i> arrow-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="share|mail-forward" style="display: block;">
                <a href="">    <i class="fa fa-share
                value="fa fa-share
                "></i> share</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="expand|enlarge|bigger|resize" style="display: block;">
                <a href="">   <i class="fa fa-expand
                value="fa fa-expand
                "></i> expand</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="compress|combine|merge|smaller" style="display: none;">
                <a href=""> <i class="fa fa-compress
                value="fa fa-compress
                "></i> compress</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="plus|add|new|create|expand" style="display: block;">
                <a href=""> <i class="fa fa-plus
                value="fa fa-plus
                "></i> plus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="minus|hide|minify|delete|remove|trash|hide|collapse" style="display: block;">
                <a href="">    <i class="fa fa-minus
                value="fa fa-minus
                "></i> minus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="asterisk|details" style="display: block;">
                <a href=""> <i class="fa fa-asterisk
                value="fa fa-asterisk
                "></i> asterisk</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="exclamation-circle|warning|error|problem|notification|alert" style="display: none;">
                <a href="">   <i class="fa fa-exclamation-circle
                value="fa fa-exclamation-circle
                "></i> exclamation-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="gift|present" style="display: none;">
                <a href=""> <i class="fa fa-gift
                value="fa fa-gift
                "></i> gift</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="leaf|eco|nature" style="display: none;">
                <a href=""> <i class="fa fa-leaf
                value="fa fa-leaf
                "></i> leaf</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="fire|flame|hot|popular" style="display: none;">
                <a href=""> <i class="fa fa-fire
                value="fa fa-fire
                "></i> fire</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="eye|show|visible|views" style="display: none;">
                <a href=""><i class="fa fa-eye
                value="fa fa-eye
                "></i> eye</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="eye-slash|toggle|show|hide|visible|visiblity|views" style="display: block;">
                <a href="">    <i class="fa fa-eye-slash
                value="fa fa-eye-slash
                "></i> eye-slash</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="exclamation-triangle|warning|warning|error|problem|notification|alert" style="display: none;">
                <a href=""> <i class="fa fa-exclamation-triangle
                value="fa fa-exclamation-triangle
                "></i> exclamation-triangle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="plane|travel|trip|location|destination|airplane|fly|mode" style="display: block;">
                <a href="">    <i class="fa fa-plane
                value="fa fa-plane
                "></i> plane</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="calendar|date|time|when" style="display: block;">
                <a href=""> <i class="fa fa-calendar
                value="fa fa-calendar
                "></i> calendar</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="random|sort" style="display: block;">
                <a href="">   <i class="fa fa-random
                value="fa fa-random
                "></i> random</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="comment|speech|notification|note" style="display: none;">
                <a href="">  <i class="fa fa-comment
                value="fa fa-comment
                "></i> comment</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="magnet" style="display: none;">
                <a href="">   <i class="fa fa-magnet
                value="fa fa-magnet
                "></i> magnet</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-up" style="display: none;">
                <a href="">   <i class="fa fa-chevron-up
                value="fa fa-chevron-up
                "></i> chevron-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-down" style="display: block;">
                <a href=""> <i class="fa fa-chevron-down
                value="fa fa-chevron-down
                "></i> chevron-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="retweet|refresh|reload|share" style="display: block;">
                <a href="">  <i class="fa fa-retweet
                value="fa fa-retweet
                "></i> retweet</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="shopping-cart|checkout|buy|purchase|payment" style="display: none;">
                <a href="">    <i class="fa fa-shopping-cart
                value="fa fa-shopping-cart
                "></i> shopping-cart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="folder" style="display: block;">
                <a href="">   <i class="fa fa-folder
                value="fa fa-folder
                "></i> folder</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="folder-open" style="display: block;">
                <a href="">  <i class="fa fa-folder-open
                value="fa fa-folder-open
                "></i> folder-open</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrows-v|resize" style="display: none;">
                <a href=""> <i class="fa fa-arrows-v
                value="fa fa-arrows-v
                "></i> arrows-v</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrows-h|resize" style="display: none;">
                <a href=""> <i class="fa fa-arrows-h
                value="fa fa-arrows-h
                "></i> arrows-h</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bar-chart|bar-chart-o|graph" style="display: none;">
                <a href="">    <i class="fa fa-bar-chart
                value="fa fa-bar-chart
                "></i> bar-chart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="twitter-square|tweet|social network" style="display: none;">
                <a href="">   <i class="fa fa-twitter-square
                value="fa fa-twitter-square
                "></i> twitter-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="facebook-square|social network" style="display: none;">
                <a href="">  <i class="fa fa-facebook-square
                value="fa fa-facebook-square
                "></i> facebook-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="camera-retro|photo|picture|record" style="display: block;">
                <a href=""> <i class="fa fa-camera-retro
                value="fa fa-camera-retro
                "></i> camera-retro</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="key|unlock|password" style="display: block;">
                <a href=""> <i class="fa fa-key
                value="fa fa-key
                "></i> key</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cogs|gears|settings" style="display: none;">
                <a href=""> <i class="fa fa-cogs
                value="fa fa-cogs
                "></i> cogs</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="comments|conversation|notification|notes" style="display: none;">
                <a href=""> <i class="fa fa-comments
                value="fa fa-comments
                "></i> comments</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="thumbs-o-up|like|approve|favorite|agree" style="display: none;">
                <a href="">  <i class="fa fa-thumbs-o-up
                value="fa fa-thumbs-o-up
                "></i> thumbs-o-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="thumbs-o-down|dislike|disapprove|disagree" style="display: block;">
                <a href="">    <i class="fa fa-thumbs-o-down
                value="fa fa-thumbs-o-down
                "></i> thumbs-o-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="star-half|award|achievement|rating|score" style="display: block;">
                <a href="">    <i class="fa fa-star-half
                value="fa fa-star-half
                "></i> star-half</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="heart-o|love|like|favorite" style="display: none;">
                <a href="">  <i class="fa fa-heart-o
                value="fa fa-heart-o
                "></i> heart-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sign-out|log out|logout|leave|exit|arrow" style="display: none;">
                <a href=""> <i class="fa fa-sign-out
                value="fa fa-sign-out
                "></i> sign-out</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="linkedin-square" style="display: block;">
                <a href="">  <i class="fa fa-linkedin-square
                value="fa fa-linkedin-square
                "></i> linkedin-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="thumb-tack|marker|pin|location|coordinates" style="display: block;">
                <a href="">   <i class="fa fa-thumb-tack
                value="fa fa-thumb-tack
                "></i> thumb-tack</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="external-link|open|new" style="display: none;">
                <a href="">    <i class="fa fa-external-link
                value="fa fa-external-link
                "></i> external-link</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sign-in|enter|join|sign up|sign in|signin|signup|arrow" style="display: none;">
                <a href="">  <i class="fa fa-sign-in
                value="fa fa-sign-in
                "></i> sign-in</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="trophy|award|achievement|winner|game" style="display: block;">
                <a href="">   <i class="fa fa-trophy
                value="fa fa-trophy
                "></i> trophy</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="github-square|octocat" style="display: none;">
                <a href="">    <i class="fa fa-github-square
                value="fa fa-github-square
                "></i> github-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="upload|import" style="display: block;">
                <a href="">   <i class="fa fa-upload
                value="fa fa-upload
                "></i> upload</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="lemon-o" style="display: none;">
                <a href="">  <i class="fa fa-lemon-o
                value="fa fa-lemon-o
                "></i> lemon-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="phone|call|voice|number|support" style="display: none;">
                <a href="">    <i class="fa fa-phone
                value="fa fa-phone
                "></i> phone</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="square-o|block|square|box" style="display: none;">
                <a href=""> <i class="fa fa-square-o
                value="fa fa-square-o
                "></i> square-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bookmark-o|save" style="display: none;">
                <a href="">   <i class="fa fa-bookmark-o
                value="fa fa-bookmark-o
                "></i> bookmark-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="phone-square|call|voice|number|support" style="display: none;">
                <a href=""> <i class="fa fa-phone-square
                value="fa fa-phone-square
                "></i> phone-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="twitter|tweet|social network" style="display: none;">
                <a href="">  <i class="fa fa-twitter
                value="fa fa-twitter
                "></i> twitter</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="facebook|facebook-f|social network" style="display: none;">
                <a href=""> <i class="fa fa-facebook
                value="fa fa-facebook
                "></i> facebook</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="github|octocat" style="display: none;">
                <a href="">   <i class="fa fa-github
                value="fa fa-github
                "></i> github</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="unlock|protect|admin|password" style="display: block;">
                <a href="">   <i class="fa fa-unlock
                value="fa fa-unlock
                "></i> unlock</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="credit-card|money|buy|debit|checkout|purchase|payment" style="display: block;">
                <a href="">  <i class="fa fa-credit-card
                value="fa fa-credit-card
                "></i> credit-card</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="rss|feed|blog" style="display: block;">
                <a href=""><i class="fa fa-rss
                value="fa fa-rss
                "></i> rss</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hdd-o|harddrive|hard drive|storage|save">
                <a href="">    <i class="fa fa-hdd-o
                value="fa fa-hdd-o
                "></i> hdd-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bullhorn|announcement|share|broadcast|louder" style="display: block;">
                <a href=""> <i class="fa fa-bullhorn
                value="fa fa-bullhorn
                "></i> bullhorn</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bell|alert|reminder|notification" style="display: block;">
                <a href=""> <i class="fa fa-bell
                value="fa fa-bell
                "></i> bell</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="certificate|badge|star" style="display: block;">
                <a href="">  <i class="fa fa-certificate
                value="fa fa-certificate
                "></i> certificate</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hand-o-right|point|right|next|forward" style="display: block;">
                <a href=""> <i class="fa fa-hand-o-right
                value="fa fa-hand-o-right
                "></i> hand-o-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hand-o-left|point|left|previous|back" style="display: block;">
                <a href="">  <i class="fa fa-hand-o-left
                value="fa fa-hand-o-left
                "></i> hand-o-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hand-o-up|point" style="display: block;">
                <a href="">    <i class="fa fa-hand-o-up
                value="fa fa-hand-o-up
                "></i> hand-o-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hand-o-down|point" style="display: block;">
                <a href="">  <i class="fa fa-hand-o-down
                value="fa fa-hand-o-down
                "></i> hand-o-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-left|previous|back" style="display: none;">
                <a href="">    <i class="fa fa-arrow-circle-left
                value="fa fa-arrow-circle-left
                "></i> arrow-circle-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-right|next|forward" style="display: block;">
                <a href="">   <i class="fa fa-arrow-circle-right
                value="fa fa-arrow-circle-right
                "></i> arrow-circle-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-up" style="display: none;">
                <a href="">  <i class="fa fa-arrow-circle-up
                value="fa fa-arrow-circle-up
                "></i> arrow-circle-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-down|download" style="display: block;">
                <a href="">    <i class="fa fa-arrow-circle-down
                value="fa fa-arrow-circle-down
                "></i> arrow-circle-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="globe|world|planet|map|place|travel|earth|global|translate|all|language|localize|location|coordinates|country" style="display: block;">
                <a href="">    <i class="fa fa-globe
                value="fa fa-globe
                "></i> globe</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="wrench|settings|fix|update" style="display: block;">
                <a href="">   <i class="fa fa-wrench
                value="fa fa-wrench
                "></i> wrench</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tasks|progress|loading|downloading|downloads|settings" style="display: block;">
                <a href="">    <i class="fa fa-tasks
                value="fa fa-tasks
                "></i> tasks</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="filter|funnel|options" style="display: none;">
                <a href="">   <i class="fa fa-filter
                value="fa fa-filter
                "></i> filter</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="briefcase|work|business|office|luggage|bag" style="display: none;">
                <a href="">    <i class="fa fa-briefcase
                value="fa fa-briefcase
                "></i> briefcase</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrows-alt|expand|enlarge|bigger|move|reorder|resize" style="display: block;">
                <a href="">   <i class="fa fa-arrows-alt
                value="fa fa-arrows-alt
                "></i> arrows-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="users|group|people|profiles|persons" style="display: none;">
                <a href="">    <i class="fa fa-users
                value="fa fa-users
                "></i> users</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="link|chain|chain" style="display: none;">
                <a href=""> <i class="fa fa-link
                value="fa fa-link
                "></i> link</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cloud|save" style="display: block;">
                <a href="">    <i class="fa fa-cloud
                value="fa fa-cloud
                "></i> cloud</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="flask|science|beaker|experimental|labs" style="display: none;">
                <a href="">    <i class="fa fa-flask
                value="fa fa-flask
                "></i> flask</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="scissors|cut" style="display: none;">
                <a href=""> <i class="fa fa-scissors
                value="fa fa-scissors
                "></i> scissors</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="files-o|copy|duplicate" style="display: block;">
                <a href="">  <i class="fa fa-files-o
                value="fa fa-files-o
                "></i> files-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paperclip|attachment" style="display: none;">
                <a href="">    <i class="fa fa-paperclip
                value="fa fa-paperclip
                "></i> paperclip</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="floppy-o|save" style="display: none;">
                <a href=""> <i class="fa fa-floppy-o
                value="fa fa-floppy-o
                "></i> floppy-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="square|block|box" style="display: none;">
                <a href="">   <i class="fa fa-square
                value="fa fa-square
                "></i> square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bars|navicon|reorder|menu|drag|reorder|settings|list|ul|ol|checklist|todo|list" style="display: block;">
                <a href=""> <i class="fa fa-bars
                value="fa fa-bars
                "></i> bars</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="list-ul|ul|ol|checklist|todo|list" style="display: block;">
                <a href="">  <i class="fa fa-list-ul
                value="fa fa-list-ul
                "></i> list-ul</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="list-ol|ul|ol|checklist|list|todo|list|numbers" style="display: block;">
                <a href="">  <i class="fa fa-list-ol
                value="fa fa-list-ol
                "></i> list-ol</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="strikethrough" style="display: none;">
                <a href="">    <i class="fa fa-strikethrough
                value="fa fa-strikethrough
                "></i> strikethrough</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="underline" style="display: block;">
                <a href="">    <i class="fa fa-underline
                value="fa fa-underline
                "></i> underline</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="table|data|excel|spreadsheet" style="display: block;">
                <a href="">    <i class="fa fa-table
                value="fa fa-table
                "></i> table</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="magic|wizard|automatic|autocomplete" style="display: block;">
                <a href="">    <i class="fa fa-magic
                value="fa fa-magic
                "></i> magic</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="truck|shipping" style="display: none;">
                <a href="">    <i class="fa fa-truck
                value="fa fa-truck
                "></i> truck</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pinterest" style="display: none;">
                <a href="">    <i class="fa fa-pinterest
                value="fa fa-pinterest
                "></i> pinterest</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pinterest-square" style="display: none;">
                <a href=""> <i class="fa fa-pinterest-square
                value="fa fa-pinterest-square
                "></i> pinterest-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="google-plus-square|social network" style="display: none;">
                <a href="">   <i class="fa fa-google-plus-square
                value="fa fa-google-plus-square
                "></i> google-plus-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="google-plus|social network" style="display: none;">
                <a href="">  <i class="fa fa-google-plus
                value="fa fa-google-plus
                "></i> google-plus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="money|cash|money|buy|checkout|purchase|payment" style="display: none;">
                <a href="">    <i class="fa fa-money
                value="fa fa-money
                "></i> money</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-down|more|dropdown|menu" style="display: block;">
                <a href="">   <i class="fa fa-caret-down
                value="fa fa-caret-down
                "></i> caret-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-up" style="display: none;">
                <a href=""> <i class="fa fa-caret-up
                value="fa fa-caret-up
                "></i> caret-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-left|previous|back" style="display: none;">
                <a href="">   <i class="fa fa-caret-left
                value="fa fa-caret-left
                "></i> caret-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-right|next|forward" style="display: block;">
                <a href="">  <i class="fa fa-caret-right
                value="fa fa-caret-right
                "></i> caret-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="columns|split|panes" style="display: none;">
                <a href="">  <i class="fa fa-columns
                value="fa fa-columns
                "></i> columns</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort|unsorted|order" style="display: block;">
                <a href=""> <i class="fa fa-sort
                value="fa fa-sort
                "></i> sort</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-desc|sort-down|dropdown|more|menu" style="display: block;">
                <a href="">    <i class="fa fa-sort-desc
                value="fa fa-sort-desc
                "></i> sort-desc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-asc|sort-up" style="display: none;">
                <a href=""> <i class="fa fa-sort-asc
                value="fa fa-sort-asc
                "></i> sort-asc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="envelope" style="display: none;">
                <a href=""> <i class="fa fa-envelope
                value="fa fa-envelope
                "></i> envelope</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="linkedin" style="display: block;">
                <a href=""> <i class="fa fa-linkedin
                value="fa fa-linkedin
                "></i> linkedin</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="undo|rotate-left|back" style="display: block;">
                <a href=""> <i class="fa fa-undo
                value="fa fa-undo
                "></i> undo</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="gavel|legal" style="display: none;">
                <a href="">    <i class="fa fa-gavel
                value="fa fa-gavel
                "></i> gavel</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tachometer|dashboard" style="display: block;">
                <a href="">   <i class="fa fa-tachometer
                value="fa fa-tachometer
                "></i> tachometer</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="comment-o|notification|note" style="display: none;">
                <a href="">    <i class="fa fa-comment-o
                value="fa fa-comment-o
                "></i> comment-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="comments-o|conversation|notification|notes" style="display: none;">
                <a href="">   <i class="fa fa-comments-o
                value="fa fa-comments-o
                "></i> comments-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bolt|flash|lightning|weather" style="display: none;">
                <a href=""> <i class="fa fa-bolt
                value="fa fa-bolt
                "></i> bolt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sitemap|directory|hierarchy|organization" style="display: block;">
                <a href="">  <i class="fa fa-sitemap
                value="fa fa-sitemap
                "></i> sitemap</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="umbrella" style="display: none;">
                <a href=""> <i class="fa fa-umbrella
                value="fa fa-umbrella
                "></i> umbrella</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="clipboard|paste|copy" style="display: block;">
                <a href="">    <i class="fa fa-clipboard
                value="fa fa-clipboard
                "></i> clipboard</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="lightbulb-o|idea|inspiration" style="display: block;">
                <a href="">  <i class="fa fa-lightbulb-o
                value="fa fa-lightbulb-o
                "></i> lightbulb-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="exchange" style="display: none;">
                <a href=""> <i class="fa fa-exchange
                value="fa fa-exchange
                "></i> exchange</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cloud-download|import" style="display: block;">
                <a href="">   <i class="fa fa-cloud-download
                value="fa fa-cloud-download
                "></i> cloud-download</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cloud-upload|import" style="display: block;">
                <a href=""> <i class="fa fa-cloud-upload
                value="fa fa-cloud-upload
                "></i> cloud-upload</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="user-md|doctor|profile|medical|nurse" style="display: block;">
                <a href="">  <i class="fa fa-user-md
                value="fa fa-user-md
                "></i> user-md</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="stethoscope" style="display: none;">
                <a href="">  <i class="fa fa-stethoscope
                value="fa fa-stethoscope
                "></i> stethoscope</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="suitcase|trip|luggage|travel|move|baggage" style="display: none;">
                <a href=""> <i class="fa fa-suitcase
                value="fa fa-suitcase
                "></i> suitcase</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bell-o|alert|reminder|notification" style="display: block;">
                <a href="">   <i class="fa fa-bell-o
                value="fa fa-bell-o
                "></i> bell-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="coffee|morning|mug|breakfast|tea|drink|cafe">
                <a href="">   <i class="fa fa-coffee
                value="fa fa-coffee
                "></i> coffee</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cutlery|food|restaurant|spoon|knife|dinner|eat" style="display: block;">
                <a href="">  <i class="fa fa-cutlery
                value="fa fa-cutlery
                "></i> cutlery</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-text-o|new|page|pdf|document" style="display: block;">
                <a href="">  <i class="fa fa-file-text-o
                value="fa fa-file-text-o
                "></i> file-text-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="building-o|work|business|apartment|office" style="display: block;">
                <a href="">   <i class="fa fa-building-o
                value="fa fa-building-o
                "></i> building-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hospital-o|building" style="display: block;">
                <a href="">   <i class="fa fa-hospital-o
                value="fa fa-hospital-o
                "></i> hospital-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ambulance|support|help" style="display: none;">
                <a href="">    <i class="fa fa-ambulance
                value="fa fa-ambulance
                "></i> ambulance</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="medkit|first aid|firstaid|help|support" style="display: block;">
                <a href="">   <i class="fa fa-medkit
                value="fa fa-medkit
                "></i> medkit</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="fighter-jet|fly|plane|airplane|quick|fast|travel" style="display: none;">
                <a href="">  <i class="fa fa-fighter-jet
                value="fa fa-fighter-jet
                "></i> fighter-jet</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="beer|alcohol|stein|drink|mug|bar|liquor">
                <a href=""> <i class="fa fa-beer
                value="fa fa-beer
                "></i> beer</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="h-square|hospital|hotel" style="display: none;">
                <a href=""> <i class="fa fa-h-square
                value="fa fa-h-square
                "></i> h-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="plus-square|add|new|create|expand" style="display: block;">
                <a href="">  <i class="fa fa-plus-square
                value="fa fa-plus-square
                "></i> plus-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-double-left|laquo|quote|previous|back" style="display: block;">
                <a href="">    <i class="fa fa-angle-double-left
                value="fa fa-angle-double-left
                "></i> angle-double-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-double-right|raquo|quote|next|forward" style="display: block;">
                <a href="">   <i class="fa fa-angle-double-right
                value="fa fa-angle-double-right
                "></i> angle-double-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-double-up" style="display: block;">
                <a href="">  <i class="fa fa-angle-double-up
                value="fa fa-angle-double-up
                "></i> angle-double-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-double-down" style="display: block;">
                <a href="">    <i class="fa fa-angle-double-down
                value="fa fa-angle-double-down
                "></i> angle-double-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-left|previous|back" style="display: none;">
                <a href="">   <i class="fa fa-angle-left
                value="fa fa-angle-left
                "></i> angle-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-right|next|forward" style="display: block;">
                <a href="">  <i class="fa fa-angle-right
                value="fa fa-angle-right
                "></i> angle-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-up" style="display: none;">
                <a href=""> <i class="fa fa-angle-up
                value="fa fa-angle-up
                "></i> angle-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angle-down" style="display: block;">
                <a href="">   <i class="fa fa-angle-down
                value="fa fa-angle-down
                "></i> angle-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="desktop|monitor|screen|desktop|computer|demo|device" style="display: block;">
                <a href="">  <i class="fa fa-desktop
                value="fa fa-desktop
                "></i> desktop</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="laptop|demo|computer|device" style="display: block;">
                <a href="">   <i class="fa fa-laptop
                value="fa fa-laptop
                "></i> laptop</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tablet|ipad|device" style="display: block;">
                <a href="">   <i class="fa fa-tablet
                value="fa fa-tablet
                "></i> tablet</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mobile|mobile-phone|cell phone|cellphone|text|call|iphone|number" style="display: none;">
                <a href="">   <i class="fa fa-mobile
                value="fa fa-mobile
                "></i> mobile</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="circle-o" style="display: none;">
                <a href=""> <i class="fa fa-circle-o
                value="fa fa-circle-o
                "></i> circle-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="quote-left" style="display: none;">
                <a href="">   <i class="fa fa-quote-left
                value="fa fa-quote-left
                "></i> quote-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="quote-right" style="display: none;">
                <a href="">  <i class="fa fa-quote-right
                value="fa fa-quote-right
                "></i> quote-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="spinner|loading|progress" style="display: block;">
                <a href="">  <i class="fa fa-spinner
                value="fa fa-spinner
                "></i> spinner</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="circle|dot|notification" style="display: block;">
                <a href="">   <i class="fa fa-circle
                value="fa fa-circle
                "></i> circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="reply|mail-reply" style="display: none;">
                <a href="">    <i class="fa fa-reply
                value="fa fa-reply
                "></i> reply</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="github-alt|octocat" style="display: none;">
                <a href="">   <i class="fa fa-github-alt
                value="fa fa-github-alt
                "></i> github-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="folder-o" style="display: block;">
                <a href=""> <i class="fa fa-folder-o
                value="fa fa-folder-o
                "></i> folder-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="folder-open-o" style="display: block;">
                <a href="">    <i class="fa fa-folder-open-o
                value="fa fa-folder-open-o
                "></i> folder-open-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="smile-o|emoticon|happy|approve|satisfied|rating" style="display: block;">
                <a href="">  <i class="fa fa-smile-o
                value="fa fa-smile-o
                "></i> smile-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="frown-o|emoticon|sad|disapprove|rating" style="display: block;">
                <a href="">  <i class="fa fa-frown-o
                value="fa fa-frown-o
                "></i> frown-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="meh-o|emoticon|rating|neutral" style="display: none;">
                <a href="">    <i class="fa fa-meh-o
                value="fa fa-meh-o
                "></i> meh-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="gamepad|controller" style="display: block;">
                <a href="">  <i class="fa fa-gamepad
                value="fa fa-gamepad
                "></i> gamepad</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="keyboard-o|type|input" style="display: block;">
                <a href="">   <i class="fa fa-keyboard-o
                value="fa fa-keyboard-o
                "></i> keyboard-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="flag-o|report|notification" style="display: none;">
                <a href="">   <i class="fa fa-flag-o
                value="fa fa-flag-o
                "></i> flag-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="flag-checkered|report|notification|notify" style="display: block;">
                <a href="">   <i class="fa fa-flag-checkered
                value="fa fa-flag-checkered
                "></i> flag-checkered</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="terminal|command|prompt|code" style="display: block;">
                <a href=""> <i class="fa fa-terminal
                value="fa fa-terminal
                "></i> terminal</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="code|html|brackets" style="display: block;">
                <a href=""> <i class="fa fa-code
                value="fa fa-code
                "></i> code</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="reply-all|mail-reply-all" style="display: none;">
                <a href="">    <i class="fa fa-reply-all
                value="fa fa-reply-all
                "></i> reply-all</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="star-half-o|star-half-empty|star-half-full|award|achievement|rating|score" style="display: block;">
                <a href="">  <i class="fa fa-star-half-o
                value="fa fa-star-half-o
                "></i> star-half-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="location-arrow|map|coordinates|location|address|place|where" style="display: block;">
                <a href="">   <i class="fa fa-location-arrow
                value="fa fa-location-arrow
                "></i> location-arrow</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="crop" style="display: none;">
                <a href=""> <i class="fa fa-crop
                value="fa fa-crop
                "></i> crop</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="code-fork|git|fork|vcs|svn|github|rebase|version|merge" style="display: block;">
                <a href="">    <i class="fa fa-code-fork
                value="fa fa-code-fork
                "></i> code-fork</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chain-broken|unlink|remove" style="display: none;">
                <a href=""> <i class="fa fa-chain-broken
                value="fa fa-chain-broken
                "></i> chain-broken</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="question|help|information|unknown|support" style="display: none;">
                <a href=""> <i class="fa fa-question
                value="fa fa-question
                "></i> question</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="info|help|information|more|details" style="display: block;">
                <a href=""> <i class="fa fa-info
                value="fa fa-info
                "></i> info</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="exclamation|warning|error|problem|notification|notify|alert" style="display: none;">
                <a href="">  <i class="fa fa-exclamation
                value="fa fa-exclamation
                "></i> exclamation</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="superscript|exponential" style="display: none;">
                <a href="">  <i class="fa fa-superscript
                value="fa fa-superscript
                "></i> superscript</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="subscript" style="display: none;">
                <a href="">    <i class="fa fa-subscript
                value="fa fa-subscript
                "></i> subscript</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="eraser" style="display: none;">
                <a href="">   <i class="fa fa-eraser
                value="fa fa-eraser
                "></i> eraser</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="puzzle-piece|addon|add-on|section" style="display: block;">
                <a href=""> <i class="fa fa-puzzle-piece
                value="fa fa-puzzle-piece
                "></i> puzzle-piece</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="microphone|record|voice|sound" style="display: block;">
                <a href="">   <i class="fa fa-microphone
                value="fa fa-microphone
                "></i> microphone</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="microphone-slash|record|voice|sound|mute" style="display: block;">
                <a href=""> <i class="fa fa-microphone-slash
                value="fa fa-microphone-slash
                "></i> microphone-slash</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="shield|award|achievement|winner" style="display: block;">
                <a href="">   <i class="fa fa-shield
                value="fa fa-shield
                "></i> shield</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="calendar-o|date|time|when" style="display: block;">
                <a href="">   <i class="fa fa-calendar-o
                value="fa fa-calendar-o
                "></i> calendar-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="fire-extinguisher" style="display: none;">
                <a href="">    <i class="fa fa-fire-extinguisher
                value="fa fa-fire-extinguisher
                "></i> fire-extinguisher</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="rocket|app" style="display: none;">
                <a href="">   <i class="fa fa-rocket
                value="fa fa-rocket
                "></i> rocket</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="maxcdn" style="display: block;">
                <a href="">   <i class="fa fa-maxcdn
                value="fa fa-maxcdn
                "></i> maxcdn</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-circle-left|previous|back" style="display: none;">
                <a href="">  <i class="fa fa-chevron-circle-left
                value="fa fa-chevron-circle-left
                "></i> chevron-circle-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-circle-right|next|forward" style="display: block;">
                <a href=""> <i class="fa fa-chevron-circle-right
                value="fa fa-chevron-circle-right
                "></i> chevron-circle-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-circle-up" style="display: none;">
                <a href="">    <i class="fa fa-chevron-circle-up
                value="fa fa-chevron-circle-up
                "></i> chevron-circle-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="chevron-circle-down|more|dropdown|menu" style="display: block;">
                <a href="">  <i class="fa fa-chevron-circle-down
                value="fa fa-chevron-circle-down
                "></i> chevron-circle-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="html5" style="display: none;">
                <a href="">    <i class="fa fa-html5
                value="fa fa-html5
                "></i> html5</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="css3|code" style="display: block;">
                <a href=""> <i class="fa fa-css3
                value="fa fa-css3
                "></i> css3</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="anchor|link" style="display: none;">
                <a href="">   <i class="fa fa-anchor
                value="fa fa-anchor
                "></i> anchor</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="unlock-alt|protect|admin|password" style="display: block;">
                <a href="">   <i class="fa fa-unlock-alt
                value="fa fa-unlock-alt
                "></i> unlock-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bullseye|target" style="display: none;">
                <a href=""> <i class="fa fa-bullseye
                value="fa fa-bullseye
                "></i> bullseye</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ellipsis-h|dots" style="display: block;">
                <a href="">   <i class="fa fa-ellipsis-h
                value="fa fa-ellipsis-h
                "></i> ellipsis-h</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ellipsis-v|dots" style="display: block;">
                <a href="">   <i class="fa fa-ellipsis-v
                value="fa fa-ellipsis-v
                "></i> ellipsis-v</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="rss-square|feed|blog" style="display: block;">
                <a href="">   <i class="fa fa-rss-square
                value="fa fa-rss-square
                "></i> rss-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="play-circle|start|playing" style="display: none;">
                <a href="">  <i class="fa fa-play-circle
                value="fa fa-play-circle
                "></i> play-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ticket|movie|pass|support" style="display: none;">
                <a href="">   <i class="fa fa-ticket
                value="fa fa-ticket
                "></i> ticket</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="minus-square|hide|minify|delete|remove|trash|hide|collapse" style="display: block;">
                <a href=""> <i class="fa fa-minus-square
                value="fa fa-minus-square
                "></i> minus-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="minus-square-o|hide|minify|delete|remove|trash|hide|collapse" style="display: block;">
                <a href="">   <i class="fa fa-minus-square-o
                value="fa fa-minus-square-o
                "></i> minus-square-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="level-up" style="display: none;">
                <a href=""> <i class="fa fa-level-up
                value="fa fa-level-up
                "></i> level-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="level-down" style="display: block;">
                <a href="">   <i class="fa fa-level-down
                value="fa fa-level-down
                "></i> level-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="check-square|checkmark|done|todo|agree|accept|confirm" style="display: block;">
                <a href=""> <i class="fa fa-check-square
                value="fa fa-check-square
                "></i> check-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pencil-square|write|edit|update" style="display: block;">
                <a href="">    <i class="fa fa-pencil-square
                value="fa fa-pencil-square
                "></i> pencil-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="external-link-square|open|new" style="display: none;">
                <a href=""> <i class="fa fa-external-link-square
                value="fa fa-external-link-square
                "></i> external-link-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="share-square|social|send" style="display: block;">
                <a href=""> <i class="fa fa-share-square
                value="fa fa-share-square
                "></i> share-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="compass|safari|directory|menu|location" style="display: block;">
                <a href="">  <i class="fa fa-compass
                value="fa fa-compass
                "></i> compass</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-square-o-down|toggle-down|more|dropdown|menu" style="display: block;">
                <a href="">  <i class="fa fa-caret-square-o-down
                value="fa fa-caret-square-o-down
                "></i> caret-square-o-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-square-o-up|toggle-up" style="display: none;">
                <a href="">    <i class="fa fa-caret-square-o-up
                value="fa fa-caret-square-o-up
                "></i> caret-square-o-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-square-o-right|toggle-right|next|forward" style="display: block;">
                <a href=""> <i class="fa fa-caret-square-o-right
                value="fa fa-caret-square-o-right
                "></i> caret-square-o-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="eur|euro" style="display: none;">
                <a href=""><i class="fa fa-eur
                value="fa fa-eur
                "></i> eur</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="gbp" style="display: none;">
                <a href=""> <i class="fa fa-gbp
                value="fa fa-gbp
                "></i> gbp</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="usd|dollar" style="display: block;">
                <a href=""><i class="fa fa-usd
                value="fa fa-usd
                "></i> usd</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="inr|rupee" style="display: none;">
                <a href=""><i class="fa fa-inr
                value="fa fa-inr
                "></i> inr</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="jpy|cny|rmb|yen" style="display: none;">
                <a href=""><i class="fa fa-jpy
                value="fa fa-jpy
                "></i> jpy</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="rub|ruble|rouble" style="display: none;">
                <a href=""><i class="fa fa-rub
                value="fa fa-rub
                "></i> rub</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="krw|won" style="display: none;">
                <a href=""><i class="fa fa-krw
                value="fa fa-krw
                "></i> krw</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="btc|bitcoin" style="display: none;">
                <a href=""><i class="fa fa-btc
                value="fa fa-btc
                "></i> btc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file|new|page|pdf|document" style="display: block;">
                <a href=""> <i class="fa fa-file
                value="fa fa-file
                "></i> file</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-text|new|page|pdf|document" style="display: block;">
                <a href="">    <i class="fa fa-file-text
                value="fa fa-file-text
                "></i> file-text</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-alpha-asc" style="display: none;">
                <a href="">   <i class="fa fa-sort-alpha-asc
                value="fa fa-sort-alpha-asc
                "></i> sort-alpha-asc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-alpha-desc" style="display: block;">
                <a href="">  <i class="fa fa-sort-alpha-desc
                value="fa fa-sort-alpha-desc
                "></i> sort-alpha-desc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-amount-asc" style="display: none;">
                <a href="">  <i class="fa fa-sort-amount-asc
                value="fa fa-sort-amount-asc
                "></i> sort-amount-asc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-amount-desc" style="display: block;">
                <a href=""> <i class="fa fa-sort-amount-desc
                value="fa fa-sort-amount-desc
                "></i> sort-amount-desc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-numeric-asc|numbers" style="display: none;">
                <a href=""> <i class="fa fa-sort-numeric-asc
                value="fa fa-sort-numeric-asc
                "></i> sort-numeric-asc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sort-numeric-desc|numbers" style="display: block;">
                <a href="">    <i class="fa fa-sort-numeric-desc
                value="fa fa-sort-numeric-desc
                "></i> sort-numeric-desc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="thumbs-up|like|favorite|approve|agree" style="display: none;">
                <a href="">    <i class="fa fa-thumbs-up
                value="fa fa-thumbs-up
                "></i> thumbs-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="thumbs-down|dislike|disapprove|disagree" style="display: block;">
                <a href="">  <i class="fa fa-thumbs-down
                value="fa fa-thumbs-down
                "></i> thumbs-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="youtube-square|video|film" style="display: block;">
                <a href="">   <i class="fa fa-youtube-square
                value="fa fa-youtube-square
                "></i> youtube-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="youtube|video|film" style="display: block;">
                <a href="">  <i class="fa fa-youtube
                value="fa fa-youtube
                "></i> youtube</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="xing" style="display: none;">
                <a href=""> <i class="fa fa-xing
                value="fa fa-xing
                "></i> xing</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="xing-square" style="display: none;">
                <a href="">  <i class="fa fa-xing-square
                value="fa fa-xing-square
                "></i> xing-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="youtube-play|start|playing" style="display: none;">
                <a href=""> <i class="fa fa-youtube-play
                value="fa fa-youtube-play
                "></i> youtube-play</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="dropbox" style="display: block;">
                <a href="">  <i class="fa fa-dropbox
                value="fa fa-dropbox
                "></i> dropbox</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="stack-overflow" style="display: none;">
                <a href="">   <i class="fa fa-stack-overflow
                value="fa fa-stack-overflow
                "></i> stack-overflow</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="instagram" style="display: none;">
                <a href="">    <i class="fa fa-instagram
                value="fa fa-instagram
                "></i> instagram</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="flickr" style="display: none;">
                <a href="">   <i class="fa fa-flickr
                value="fa fa-flickr
                "></i> flickr</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="adn" style="display: block;">
                <a href=""><i class="fa fa-adn
                value="fa fa-adn
                "></i> adn</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bitbucket|git" style="display: none;">
                <a href="">    <i class="fa fa-bitbucket
                value="fa fa-bitbucket
                "></i> bitbucket</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bitbucket-square|git" style="display: none;">
                <a href=""> <i class="fa fa-bitbucket-square
                value="fa fa-bitbucket-square
                "></i> bitbucket-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tumblr" style="display: none;">
                <a href="">   <i class="fa fa-tumblr
                value="fa fa-tumblr
                "></i> tumblr</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tumblr-square" style="display: none;">
                <a href="">    <i class="fa fa-tumblr-square
                value="fa fa-tumblr-square
                "></i> tumblr-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="long-arrow-down" style="display: block;">
                <a href="">  <i class="fa fa-long-arrow-down
                value="fa fa-long-arrow-down
                "></i> long-arrow-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="long-arrow-up" style="display: none;">
                <a href="">    <i class="fa fa-long-arrow-up
                value="fa fa-long-arrow-up
                "></i> long-arrow-up</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="long-arrow-left|previous|back" style="display: none;">
                <a href="">  <i class="fa fa-long-arrow-left
                value="fa fa-long-arrow-left
                "></i> long-arrow-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="long-arrow-right" style="display: none;">
                <a href=""> <i class="fa fa-long-arrow-right
                value="fa fa-long-arrow-right
                "></i> long-arrow-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="apple|osx" style="display: none;">
                <a href="">    <i class="fa fa-apple
                value="fa fa-apple
                "></i> apple</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="windows" style="display: block;">
                <a href="">  <i class="fa fa-windows
                value="fa fa-windows
                "></i> windows</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="android" style="display: block;">
                <a href="">  <i class="fa fa-android
                value="fa fa-android
                "></i> android</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="linux|tux" style="display: none;">
                <a href="">    <i class="fa fa-linux
                value="fa fa-linux
                "></i> linux</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="dribbble">
                <a href=""> <i class="fa fa-dribbble
                value="fa fa-dribbble
                "></i> dribbble</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="skype" style="display: none;">
                <a href="">    <i class="fa fa-skype
                value="fa fa-skype
                "></i> skype</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="foursquare" style="display: none;">
                <a href="">   <i class="fa fa-foursquare
                value="fa fa-foursquare
                "></i> foursquare</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="trello" style="display: none;">
                <a href="">   <i class="fa fa-trello
                value="fa fa-trello
                "></i> trello</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="female|woman|user|person|profile" style="display: none;">
                <a href="">   <i class="fa fa-female
                value="fa fa-female
                "></i> female</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="male|man|user|person|profile" style="display: none;">
                <a href=""> <i class="fa fa-male
                value="fa fa-male
                "></i> male</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="gratipay|gittip|heart|like|favorite|love" style="display: none;">
                <a href=""> <i class="fa fa-gratipay
                value="fa fa-gratipay
                "></i> gratipay</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sun-o|weather|contrast|lighter|brighten|day" style="display: block;">
                <a href="">    <i class="fa fa-sun-o
                value="fa fa-sun-o
                "></i> sun-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="moon-o|night|darker|contrast" style="display: block;">
                <a href="">   <i class="fa fa-moon-o
                value="fa fa-moon-o
                "></i> moon-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="archive|box|storage" style="display: none;">
                <a href="">  <i class="fa fa-archive
                value="fa fa-archive
                "></i> archive</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bug|report" style="display: none;">
                <a href=""><i class="fa fa-bug
                value="fa fa-bug
                "></i> bug</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="" style="display: none;">
                <a href=""><i class="fa fa-vk
                value="fa fa-vk
                "></i> vk</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="weibo" style="display: none;">
                <a href="">    <i class="fa fa-weibo
                value="fa fa-weibo
                "></i> weibo</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="renren" style="display: none;">
                <a href="">   <i class="fa fa-renren
                value="fa fa-renren
                "></i> renren</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pagelines|leaf|leaves|tree|plant|eco|nature" style="display: none;">
                <a href="">    <i class="fa fa-pagelines
                value="fa fa-pagelines
                "></i> pagelines</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="stack-exchange" style="display: none;">
                <a href="">   <i class="fa fa-stack-exchange
                value="fa fa-stack-exchange
                "></i> stack-exchange</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-o-right|next|forward" style="display: block;">
                <a href=""> <i class="fa fa-arrow-circle-o-right
                value="fa fa-arrow-circle-o-right
                "></i> arrow-circle-o-right</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="arrow-circle-o-left|previous|back" style="display: none;">
                <a href="">  <i class="fa fa-arrow-circle-o-left
                value="fa fa-arrow-circle-o-left
                "></i> arrow-circle-o-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="caret-square-o-left|toggle-left|previous|back" style="display: none;">
                <a href="">  <i class="fa fa-caret-square-o-left
                value="fa fa-caret-square-o-left
                "></i> caret-square-o-left</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="dot-circle-o|target|bullseye|notification" style="display: block;">
                <a href=""> <i class="fa fa-dot-circle-o
                value="fa fa-dot-circle-o
                "></i> dot-circle-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="wheelchair|handicap|person|accessibility|accessibile" style="display: block;">
                <a href="">   <i class="fa fa-wheelchair
                value="fa fa-wheelchair
                "></i> wheelchair</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="vimeo-square" style="display: none;">
                <a href=""> <i class="fa fa-vimeo-square
                value="fa fa-vimeo-square
                "></i> vimeo-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="try|turkish-lira" style="display: none;">
                <a href=""><i class="fa fa-try
                value="fa fa-try
                "></i> try</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="plus-square-o|add|new|create|expand" style="display: block;">
                <a href="">    <i class="fa fa-plus-square-o
                value="fa fa-plus-square-o
                "></i> plus-square-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="space-shuttle" style="display: none;">
                <a href="">    <i class="fa fa-space-shuttle
                value="fa fa-space-shuttle
                "></i> space-shuttle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="slack" style="display: none;">
                <a href="">    <i class="fa fa-slack
                value="fa fa-slack
                "></i> slack</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="envelope-square" style="display: none;">
                <a href="">  <i class="fa fa-envelope-square
                value="fa fa-envelope-square
                "></i> envelope-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="wordpress" style="display: block;">
                <a href="">    <i class="fa fa-wordpress
                value="fa fa-wordpress
                "></i> wordpress</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="openid" style="display: block;">
                <a href="">   <i class="fa fa-openid
                value="fa fa-openid
                "></i> openid</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="university|institution|bank" style="display: none;">
                <a href="">   <i class="fa fa-university
                value="fa fa-university
                "></i> university</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="graduation-cap|mortar-board" style="display: block;">
                <a href="">   <i class="fa fa-graduation-cap
                value="fa fa-graduation-cap
                "></i> graduation-cap</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="yahoo" style="display: none;">
                <a href="">    <i class="fa fa-yahoo
                value="fa fa-yahoo
                "></i> yahoo</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="google" style="display: none;">
                <a href="">   <i class="fa fa-google
                value="fa fa-google
                "></i> google</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="reddit" style="display: block;">
                <a href="">   <i class="fa fa-reddit
                value="fa fa-reddit
                "></i> reddit</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="reddit-square" style="display: block;">
                <a href="">    <i class="fa fa-reddit-square
                value="fa fa-reddit-square
                "></i> reddit-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="stumbleupon-circle" style="display: none;">
                <a href="">   <i class="fa fa-stumbleupon-circle
                value="fa fa-stumbleupon-circle
                "></i> stumbleupon-circle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="stumbleupon" style="display: none;">
                <a href="">  <i class="fa fa-stumbleupon
                value="fa fa-stumbleupon
                "></i> stumbleupon</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="delicious" style="display: block;">
                <a href="">    <i class="fa fa-delicious
                value="fa fa-delicious
                "></i> delicious</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="digg" style="display: block;">
                <a href=""> <i class="fa fa-digg
                value="fa fa-digg
                "></i> digg</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pied-piper" style="display: block;">
                <a href="">   <i class="fa fa-pied-piper
                value="fa fa-pied-piper
                "></i> pied-piper</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pied-piper-alt" style="display: block;">
                <a href="">   <i class="fa fa-pied-piper-alt
                value="fa fa-pied-piper-alt
                "></i> pied-piper-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="drupal" style="display: block;">
                <a href="">   <i class="fa fa-drupal
                value="fa fa-drupal
                "></i> drupal</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="joomla" style="display: none;">
                <a href="">   <i class="fa fa-joomla
                value="fa fa-joomla
                "></i> joomla</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="language" style="display: none;">
                <a href=""> <i class="fa fa-language
                value="fa fa-language
                "></i> language</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="fax" style="display: none;">
                <a href=""><i class="fa fa-fax
                value="fa fa-fax
                "></i> fax</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="building" style="display: block;">
                <a href=""> <i class="fa fa-building
                value="fa fa-building
                "></i> building</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="child" style="display: block;">
                <a href="">    <i class="fa fa-child
                value="fa fa-child
                "></i> child</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paw" style="display: none;">
                <a href=""><i class="fa fa-paw
                value="fa fa-paw
                "></i> paw</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="spoon" style="display: none;">
                <a href="">    <i class="fa fa-spoon
                value="fa fa-spoon
                "></i> spoon</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cube" style="display: none;">
                <a href=""> <i class="fa fa-cube
                value="fa fa-cube
                "></i> cube</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cubes" style="display: none;">
                <a href="">    <i class="fa fa-cubes
                value="fa fa-cubes
                "></i> cubes</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="behance" style="display: none;">
                <a href="">  <i class="fa fa-behance
                value="fa fa-behance
                "></i> behance</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="behance-square" style="display: none;">
                <a href="">   <i class="fa fa-behance-square
                value="fa fa-behance-square
                "></i> behance-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="steam" style="display: none;">
                <a href="">    <i class="fa fa-steam
                value="fa fa-steam
                "></i> steam</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="steam-square" style="display: none;">
                <a href=""> <i class="fa fa-steam-square
                value="fa fa-steam-square
                "></i> steam-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="recycle" style="display: none;">
                <a href="">  <i class="fa fa-recycle
                value="fa fa-recycle
                "></i> recycle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="car|automobile|vehicle" style="display: none;">
                <a href=""><i class="fa fa-car
                value="fa fa-car
                "></i> car</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="taxi|cab|vehicle" style="display: none;">
                <a href=""> <i class="fa fa-taxi
                value="fa fa-taxi
                "></i> taxi</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tree" style="display: none;">
                <a href=""> <i class="fa fa-tree
                value="fa fa-tree
                "></i> tree</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="spotify" style="display: none;">
                <a href="">  <i class="fa fa-spotify
                value="fa fa-spotify
                "></i> spotify</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="deviantart" style="display: block;">
                <a href="">   <i class="fa fa-deviantart
                value="fa fa-deviantart
                "></i> deviantart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="soundcloud" style="display: block;">
                <a href="">   <i class="fa fa-soundcloud
                value="fa fa-soundcloud
                "></i> soundcloud</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="database" style="display: block;">
                <a href=""> <i class="fa fa-database
                value="fa fa-database
                "></i> database</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-pdf-o" style="display: block;">
                <a href="">   <i class="fa fa-file-pdf-o
                value="fa fa-file-pdf-o
                "></i> file-pdf-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-word-o" style="display: block;">
                <a href="">  <i class="fa fa-file-word-o
                value="fa fa-file-word-o
                "></i> file-word-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-excel-o" style="display: none;">
                <a href=""> <i class="fa fa-file-excel-o
                value="fa fa-file-excel-o
                "></i> file-excel-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-powerpoint-o" style="display: none;">
                <a href="">    <i class="fa fa-file-powerpoint-o
                value="fa fa-file-powerpoint-o
                "></i> file-powerpoint-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-image-o|file-photo-o|file-picture-o" style="display: none;">
                <a href=""> <i class="fa fa-file-image-o
                value="fa fa-file-image-o
                "></i> file-image-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-archive-o|file-zip-o" style="display: none;">
                <a href="">   <i class="fa fa-file-archive-o
                value="fa fa-file-archive-o
                "></i> file-archive-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-audio-o|file-sound-o" style="display: block;">
                <a href=""> <i class="fa fa-file-audio-o
                value="fa fa-file-audio-o
                "></i> file-audio-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-video-o|file-movie-o" style="display: block;">
                <a href=""> <i class="fa fa-file-video-o
                value="fa fa-file-video-o
                "></i> file-video-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="file-code-o" style="display: block;">
                <a href="">  <i class="fa fa-file-code-o
                value="fa fa-file-code-o
                "></i> file-code-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="vine" style="display: none;">
                <a href=""> <i class="fa fa-vine
                value="fa fa-vine
                "></i> vine</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="codepen" style="display: block;">
                <a href="">  <i class="fa fa-codepen
                value="fa fa-codepen
                "></i> codepen</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="jsfiddle" style="display: block;">
                <a href=""> <i class="fa fa-jsfiddle
                value="fa fa-jsfiddle
                "></i> jsfiddle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="life-ring|life-bouy|life-buoy|life-saver|support" style="display: none;">
                <a href="">    <i class="fa fa-life-ring
                value="fa fa-life-ring
                "></i> life-ring</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="circle-o-notch" style="display: none;">
                <a href="">   <i class="fa fa-circle-o-notch
                value="fa fa-circle-o-notch
                "></i> circle-o-notch</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="rebel|ra" style="display: none;">
                <a href="">    <i class="fa fa-rebel
                value="fa fa-rebel
                "></i> rebel</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="empire|ge" style="display: none;">
                <a href="">   <i class="fa fa-empire
                value="fa fa-empire
                "></i> empire</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="git-square" style="display: none;">
                <a href="">   <i class="fa fa-git-square
                value="fa fa-git-square
                "></i> git-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="git" style="display: none;">
                <a href=""><i class="fa fa-git
                value="fa fa-git
                "></i> git</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="hacker-news" style="display: none;">
                <a href="">  <i class="fa fa-hacker-news
                value="fa fa-hacker-news
                "></i> hacker-news</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tencent-weibo" style="display: none;">
                <a href="">    <i class="fa fa-tencent-weibo
                value="fa fa-tencent-weibo
                "></i> tencent-weibo</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="" style="display: none;">
                <a href><i class="fa fa-qq
                value="fa fa-qq
                "></i> qq</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="weixin|wechat" style="display: none;">
                <a href="">   <i class="fa fa-weixin
                value="fa fa-weixin
                "></i> weixin</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paper-plane|send" style="display: block;">
                <a href="">  <i class="fa fa-paper-plane
                value="fa fa-paper-plane
                "></i> paper-plane</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paper-plane-o|send-o" style="display: block;">
                <a href="">    <i class="fa fa-paper-plane-o
                value="fa fa-paper-plane-o
                "></i> paper-plane-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="history" style="display: none;">
                <a href="">  <i class="fa fa-history
                value="fa fa-history
                "></i> history</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="circle-thin|genderless" style="display: block;">
                <a href="">  <i class="fa fa-circle-thin
                value="fa fa-circle-thin
                "></i> circle-thin</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="header" style="display: block;">
                <a href="">   <i class="fa fa-header
                value="fa fa-header
                "></i> header</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paragraph" style="display: none;">
                <a href="">    <i class="fa fa-paragraph
                value="fa fa-paragraph
                "></i> paragraph</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sliders" style="display: block;">
                <a href="">  <i class="fa fa-sliders
                value="fa fa-sliders
                "></i> sliders</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="share-alt" style="display: none;">
                <a href="">    <i class="fa fa-share-alt
                value="fa fa-share-alt
                "></i> share-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="share-alt-square" style="display: none;">
                <a href=""> <i class="fa fa-share-alt-square
                value="fa fa-share-alt-square
                "></i> share-alt-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bomb" style="display: none;">
                <a href=""> <i class="fa fa-bomb
                value="fa fa-bomb
                "></i> bomb</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="futbol-o|soccer-ball-o" style="display: none;">
                <a href=""> <i class="fa fa-futbol-o
                value="fa fa-futbol-o
                "></i> futbol-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="tty" style="display: none;">
                <a href=""><i class="fa fa-tty
                value="fa fa-tty
                "></i> tty</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="binoculars" style="display: none;">
                <a href="">   <i class="fa fa-binoculars
                value="fa fa-binoculars
                "></i> binoculars</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="plug" style="display: none;">
                <a href=""> <i class="fa fa-plug
                value="fa fa-plug
                "></i> plug</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="slideshare" style="display: block;">
                <a href="">   <i class="fa fa-slideshare
                value="fa fa-slideshare
                "></i> slideshare</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="twitch" style="display: none;">
                <a href="">   <i class="fa fa-twitch
                value="fa fa-twitch
                "></i> twitch</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="yelp" style="display: none;">
                <a href=""> <i class="fa fa-yelp
                value="fa fa-yelp
                "></i> yelp</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="newspaper-o" style="display: none;">
                <a href="">  <i class="fa fa-newspaper-o
                value="fa fa-newspaper-o
                "></i> newspaper-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="wifi" style="display: none;">
                <a href=""> <i class="fa fa-wifi
                value="fa fa-wifi
                "></i> wifi</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="calculator" style="display: none;">
                <a href="">   <i class="fa fa-calculator
                value="fa fa-calculator
                "></i> calculator</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paypal" style="display: none;">
                <a href="">   <i class="fa fa-paypal
                value="fa fa-paypal
                "></i> paypal</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="google-wallet" style="display: none;">
                <a href="">    <i class="fa fa-google-wallet
                value="fa fa-google-wallet
                "></i> google-wallet</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cc-visa" style="display: none;">
                <a href="">  <i class="fa fa-cc-visa
                value="fa fa-cc-visa
                "></i> cc-visa</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cc-mastercard" style="display: block;">
                <a href="">    <i class="fa fa-cc-mastercard
                value="fa fa-cc-mastercard
                "></i> cc-mastercard</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cc-discover" style="display: block;">
                <a href="">  <i class="fa fa-cc-discover
                value="fa fa-cc-discover
                "></i> cc-discover</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cc-amex" style="display: none;">
                <a href="">  <i class="fa fa-cc-amex
                value="fa fa-cc-amex
                "></i> cc-amex</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cc-paypal" style="display: none;">
                <a href="">    <i class="fa fa-cc-paypal
                value="fa fa-cc-paypal
                "></i> cc-paypal</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cc-stripe" style="display: none;">
                <a href="">    <i class="fa fa-cc-stripe
                value="fa fa-cc-stripe
                "></i> cc-stripe</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bell-slash" style="display: none;">
                <a href="">   <i class="fa fa-bell-slash
                value="fa fa-bell-slash
                "></i> bell-slash</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bell-slash-o" style="display: none;">
                <a href=""> <i class="fa fa-bell-slash-o
                value="fa fa-bell-slash-o
                "></i> bell-slash-o</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="trash" style="display: none;">
                <a href="">    <i class="fa fa-trash
                value="fa fa-trash
                "></i> trash</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="copyright" style="display: none;">
                <a href="">    <i class="fa fa-copyright
                value="fa fa-copyright
                "></i> copyright</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="" style="display: none;">
                <a href=""><i class="fa fa-at
                value="fa fa-at
                "></i> at</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="eyedropper" style="display: block;">
                <a href="">   <i class="fa fa-eyedropper
                value="fa fa-eyedropper
                "></i> eyedropper</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="paint-brush" style="display: none;">
                <a href="">  <i class="fa fa-paint-brush
                value="fa fa-paint-brush
                "></i> paint-brush</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="birthday-cake" style="display: block;">
                <a href="">    <i class="fa fa-birthday-cake
                value="fa fa-birthday-cake
                "></i> birthday-cake</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="area-chart" style="display: none;">
                <a href="">   <i class="fa fa-area-chart
                value="fa fa-area-chart
                "></i> area-chart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pie-chart" style="display: none;">
                <a href="">    <i class="fa fa-pie-chart
                value="fa fa-pie-chart
                "></i> pie-chart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="line-chart" style="display: none;">
                <a href="">   <i class="fa fa-line-chart
                value="fa fa-line-chart
                "></i> line-chart</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="lastfm" style="display: none;">
                <a href="">   <i class="fa fa-lastfm
                value="fa fa-lastfm
                "></i> lastfm</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="lastfm-square" style="display: none;">
                <a href="">    <i class="fa fa-lastfm-square
                value="fa fa-lastfm-square
                "></i> lastfm-square</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="toggle-off" style="display: none;">
                <a href="">   <i class="fa fa-toggle-off
                value="fa fa-toggle-off
                "></i> toggle-off</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="toggle-on" style="display: none;">
                <a href="">    <i class="fa fa-toggle-on
                value="fa fa-toggle-on
                "></i> toggle-on</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bicycle|vehicle|bike" style="display: none;">
                <a href="">  <i class="fa fa-bicycle
                value="fa fa-bicycle
                "></i> bicycle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bus|vehicle" style="display: none;">
                <a href=""><i class="fa fa-bus
                value="fa fa-bus
                "></i> bus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ioxhost" style="display: none;">
                <a href="">  <i class="fa fa-ioxhost
                value="fa fa-ioxhost
                "></i> ioxhost</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="angellist" style="display: none;">
                <a href="">    <i class="fa fa-angellist
                value="fa fa-angellist
                "></i> angellist</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="" style="display: none;">
                <a href><i class="fa fa-cc
                value="fa fa-cc
                "></i> cc</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ils|shekel|sheqel" style="display: none;">
                <a href=""><i class="fa fa-ils
                value="fa fa-ils
                "></i> ils</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="meanpath" style="display: none;">
                <a href=""> <i class="fa fa-meanpath
                value="fa fa-meanpath
                "></i> meanpath</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="buysellads" style="display: block;">
                <a href="">   <i class="fa fa-buysellads
                value="fa fa-buysellads
                "></i> buysellads</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="connectdevelop" style="display: block;">
                <a href="">   <i class="fa fa-connectdevelop
                value="fa fa-connectdevelop
                "></i> connectdevelop</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="dashcube" style="display: block;">
                <a href=""> <i class="fa fa-dashcube
                value="fa fa-dashcube
                "></i> dashcube</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="forumbee" style="display: none;">
                <a href=""> <i class="fa fa-forumbee
                value="fa fa-forumbee
                "></i> forumbee</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="leanpub" style="display: none;">
                <a href="">  <i class="fa fa-leanpub
                value="fa fa-leanpub
                "></i> leanpub</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="sellsy" style="display: none;">
                <a href="">   <i class="fa fa-sellsy
                value="fa fa-sellsy
                "></i> sellsy</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="shirtsinbulk" style="display: none;">
                <a href=""> <i class="fa fa-shirtsinbulk
                value="fa fa-shirtsinbulk
                "></i> shirtsinbulk</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="simplybuilt" style="display: none;">
                <a href="">  <i class="fa fa-simplybuilt
                value="fa fa-simplybuilt
                "></i> simplybuilt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="skyatlas" style="display: none;">
                <a href=""> <i class="fa fa-skyatlas
                value="fa fa-skyatlas
                "></i> skyatlas</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cart-plus|add|shopping" style="display: block;">
                <a href="">    <i class="fa fa-cart-plus
                value="fa fa-cart-plus
                "></i> cart-plus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="cart-arrow-down|shopping" style="display: block;">
                <a href="">  <i class="fa fa-cart-arrow-down
                value="fa fa-cart-arrow-down
                "></i> cart-arrow-down</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="diamond|gem|gemstone" style="display: block;">
                <a href="">  <i class="fa fa-diamond
                value="fa fa-diamond
                "></i> diamond</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="ship|boat|sea" style="display: none;">
                <a href=""> <i class="fa fa-ship
                value="fa fa-ship
                "></i> ship</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="user-secret|whisper|spy|incognito" style="display: none;">
                <a href="">  <i class="fa fa-user-secret
                value="fa fa-user-secret
                "></i> user-secret</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="motorcycle|vehicle|bike" style="display: none;">
                <a href="">   <i class="fa fa-motorcycle
                value="fa fa-motorcycle
                "></i> motorcycle</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="street-view|map" style="display: none;">
                <a href="">  <i class="fa fa-street-view
                value="fa fa-street-view
                "></i> street-view</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="heartbeat|ekg" style="display: none;">
                <a href="">    <i class="fa fa-heartbeat
                value="fa fa-heartbeat
                "></i> heartbeat</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="venus|female" style="display: none;">
                <a href="">    <i class="fa fa-venus
                value="fa fa-venus
                "></i> venus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mars|male" style="display: none;">
                <a href=""> <i class="fa fa-mars
                value="fa fa-mars
                "></i> mars</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mercury|transgender" style="display: block;">
                <a href="">  <i class="fa fa-mercury
                value="fa fa-mercury
                "></i> mercury</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="transgender" style="display: block;">
                <a href="">  <i class="fa fa-transgender
                value="fa fa-transgender
                "></i> transgender</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="transgender-alt" style="display: block;">
                <a href="">  <i class="fa fa-transgender-alt
                value="fa fa-transgender-alt
                "></i> transgender-alt</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="venus-double" style="display: block;">
                <a href=""> <i class="fa fa-venus-double
                value="fa fa-venus-double
                "></i> venus-double</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mars-double" style="display: block;">
                <a href="">  <i class="fa fa-mars-double
                value="fa fa-mars-double
                "></i> mars-double</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="venus-mars" style="display: none;">
                <a href="">   <i class="fa fa-venus-mars
                value="fa fa-venus-mars
                "></i> venus-mars</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mars-stroke" style="display: none;">
                <a href="">  <i class="fa fa-mars-stroke
                value="fa fa-mars-stroke
                "></i> mars-stroke</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mars-stroke-v" style="display: none;">
                <a href="">    <i class="fa fa-mars-stroke-v
                value="fa fa-mars-stroke-v
                "></i> mars-stroke-v</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="mars-stroke-h" style="display: none;">
                <a href="">    <i class="fa fa-mars-stroke-h
                value="fa fa-mars-stroke-h
                "></i> mars-stroke-h</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="neuter" style="display: none;">
                <a href="">   <i class="fa fa-neuter
                value="fa fa-neuter
                "></i> neuter</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="facebook-official" style="display: none;">
                <a href="">    <i class="fa fa-facebook-official
                value="fa fa-facebook-official
                "></i> facebook-official</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="pinterest-p" style="display: none;">
                <a href="">  <i class="fa fa-pinterest-p
                value="fa fa-pinterest-p
                "></i> pinterest-p</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="whatsapp" style="display: none;">
                <a href=""> <i class="fa fa-whatsapp
                value="fa fa-whatsapp
                "></i> whatsapp</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="server" style="display: none;">
                <a href="">   <i class="fa fa-server
                value="fa fa-server
                "></i> server</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="user-plus" style="display: none;">
                <a href="">    <i class="fa fa-user-plus
                value="fa fa-user-plus
                "></i> user-plus</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="user-times" style="display: none;">
                <a href="">   <i class="fa fa-user-times
                value="fa fa-user-times
                "></i> user-times</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="bed|hotel|travel" style="display: block;">
                <a href=""><i class="fa fa-bed
                value="fa fa-bed
                "></i> bed</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="viacoin" style="display: none;">
                <a href="">  <i class="fa fa-viacoin
                value="fa fa-viacoin
                "></i> viacoin</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="train" style="display: none;">
                <a href="">    <i class="fa fa-train
                value="fa fa-train
                "></i> train</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="subway" style="display: none;">
                <a href="">   <i class="fa fa-subway
                value="fa fa-subway
                "></i> subway</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 filter-icon" data-filter="medium" style="display: block;">
                <a href="">   <i class="fa fa-medium
                value="fa fa-medium
                "></i> medium</a>
            </div>

        </div>
        <div id="no-search-results" style="display: none;">
            <div class="alert alert-warning" role="alert">  <i  class="fa fa-warning margin-right-sm"></i>No icons matching <strong>'<span></span>'</strong> were found.</div>
           <div class="alert alert-info" role="alert"> <i  class="value="fa fa-exclamation-circle margin-right-sm"></i>Tags are added by the community. Do you think your search query should return an icon? Send a pull request on <a href="https://github.com/FortAwesome/Font-Awesome">GitHub</a>!</div>
        </div>

    </section>


</div>
@stop

@section('scripts')
    @parent
            <!--Tab Complete [ OPTIONAL ]-->
    <script src="{!! asset('plugins/tabcomplete/tabcomplete.js') !!}"></script>

    <script>
        // start the icon carousel
        $('#icon-carousel').carousel({
            interval: 5000
        });

        var $filter_by = $('#filter-by');

        // Filter icons
        if($filter_by.length) {
            var $filter_val = $('#filter-val');
            var $filter = $('#filter');
            var $other = $('#new, #web-application, #transportation, #gender, #form-control, #medical, #currency, #text-editor, #directional, #video-player, #brand, #file-type, #spinner, #payment, #chart');
            var $clear = $('#filter-clear');
            var $no_results = $('#no-search-results');

            var $icons = $('.filter-icon', $filter);

            // Add tab completion
            $filter_by.tabcomplete(filterSet, {
                arrowKeys: true
            });

            $clear.on('click', function(e) {
                e.preventDefault();
                $filter_by
                        .val('')
                        .trigger('input')
                        .trigger('keyup')
                        .focus();

                $clear.addClass('hide'); // Hide clear button
            });


            $filter_by.on('keyup', function() {
                var $this = $(this);
                var val = $this.val().toLowerCase();
                $filter.toggle(!!val);
                $other.toggle(!val);
                $clear.toggleClass('hide', !val);
                $filter_val.text(val);

                if(!val) return;

                var resultsCount = 0;
                $icons.each(function() {
                    var filter = $(this).attr('data-filter').split('|');
                    var show = inFilter(val, filter);
                    if (!show) {
                        if (val.slice(-1) === 's') {
                            // Try to be smart. Make plural terms singular.
                            show = inFilter(val.slice(0, -1), filter);
                        }
                    }
                    if (show) resultsCount++;
                    $(this).toggle(!!show);
                });

                if( resultsCount == 0 && val.length != 0 ) {
                    $no_results.find('span').text(val);
                    $no_results.show();
                } else {
                    $no_results.hide();
                }
            });
        }

        function inFilter(val, filter) {
            for (var i = 0; i < filter.length; i++) {
                if (filter[i].match(val)) return true;
            }
            return false;
        }

        $filter_by
                .val('')
                .trigger('input')
                .trigger('keyup');

        if ($clear) {
            $clear.addClass('hide'); // Hide clear button
        }

        function selectFonticonsAd() {
            random_number = Math.floor( Math.random() * ads.length );
            random_ad = ads[random_number];

            $('#banner').addClass(random_ad.class);
            $('#rotating-message').html(random_ad.quote);
            $('#rotating-url').attr("href", random_ad.url);
            $('#rotating-url').html(random_ad.btn_text);
            $('#banner').collapse('show');
        }
    </script>
	
@stop
