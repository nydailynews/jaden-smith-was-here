<?php
$share_img = 'http://interactive.nydailynews.com/project/jaden-smith-tweets/img/share.png';
$url_append = '';
if ( isset($_GET['quote']) ) {
	$url_append = '?quote=' . substr(htmlspecialchars($_GET['quote']), 0, 4);
	$quote_images = ["pic.twitter.com/v1cX31FeaT",
        "pic.twitter.com/xJ9KwppAxI",
        "pic.twitter.com/xBjyzFP0Dy",
        "pic.twitter.com/MYsate1GIh",
        "pic.twitter.com/tXSqt5G0ov",
        "pic.twitter.com/RDfI7AdM58",
        "pic.twitter.com/Z2rIsq0Wjo",
        "pic.twitter.com/m7CwUVfayq",
        "pic.twitter.com/RRuG0BUddT",
        "pic.twitter.com/3dBm0wBoj1",
        "pic.twitter.com/Lb6tPsECJi",
        "pic.twitter.com/3p4VZYIgf9",
        "pic.twitter.com/uZd2oLQ3Ol",
        "pic.twitter.com/1WZZYLxs6Z",
        "pic.twitter.com/fouLYhCmIB",
        "pic.twitter.com/wxrrzen4cx",
        "pic.twitter.com/z4Bd0fhOLE",
        "pic.twitter.com/rC2XBD9TeJ",
        "pic.twitter.com/V3B4rrwUd7",
        "pic.twitter.com/eHmOHbR4gY",
        "pic.twitter.com/89vwxuLqsw",
        "pic.twitter.com/ZomDCCBd5g",
        "pic.twitter.com/dRFLA6exWM",
        "pic.twitter.com/YDO9qjzKmu",
        "pic.twitter.com/BIaKdUE3bC",
        "pic.twitter.com/NbNVUgIrjT",
        "pic.twitter.com/i5pgoQonUK",
        "pic.twitter.com/WzMJRna5ck",
        "pic.twitter.com/ong9xOq2mC",
        "pic.twitter.com/of0SRD2Aoe",
        "pic.twitter.com/RertnOo4yJ",
        "pic.twitter.com/tGF5y7WkWF",
        "pic.twitter.com/hnzQOtUxTU",
        "pic.twitter.com/lELWPjDaBM",
        "pic.twitter.com/bAb0K4aanz",
        "pic.twitter.com/mJxz46ZzMD",
        "pic.twitter.com/Pv1KvT1pLe",
        "pic.twitter.com/Jw5rSsgwCm",
        "pic.twitter.com/P4pVd10UiR",
        "pic.twitter.com/3FqMvq7hxk",
        "pic.twitter.com/bkX7t25r1M",
        "pic.twitter.com/c43t2nIcMz",
        "pic.twitter.com/nx2il9Ajgd",
        "pic.twitter.com/T0mmP1TSlr",
        "pic.twitter.com/zynpQgBUO5",
        "pic.twitter.com/37GdEGfJ7Z"];
	$quote_index = intval($_GET['quote']) % count($quote_images);
	$share_img = 'https://' . $quote_images[intval($_GET['quote_index'])];
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <link rel="icon" type="image/png" href="http://interactive.nydailynews.com/favicons.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="">
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <!-- Titles -->
    <meta property="og:title" content='TITLE' />
    <meta name="twitter:title" content='TITLE' />

    <!-- Descriptions -->
    <meta name="description" content="DESC" />
    <meta property="og:description" content="DESC" />
    <meta name="twitter:description" content="DESC" />

    <!-- KEYWORD -->
    <meta name="keywords" content="Jaden Smith,Jaden Smith twitter,Jaden Smith twitter generator" />

    <!-- LINK -->
	<link rel="canonical" href="http://interactive.nydailynews.com/project/jaden-smith-tweets/<?php echo $url_append; ?>">
	<meta property="og:url" content="http://interactive.nydailynews.com/project/jaden-smith-tweets/<?php echo $url_append; ?>" />
	<meta name="twitter:url" content="http://interactive.nydailynews.com/project/jaden-smith-tweets/<?php echo $url_append; ?>" />

    <!-- THUMBNAIL IMAGE-->
	<meta property="og:image" content="<?php echo $share_img; ?>" />
    <meta name="twitter:image" content="http://interactive.nydailynews.com/project/jaden-smith-tweets/img/jaden-smith-twitter-share.jpg" />
    <meta name="twitter:image:alt" content="JAAAAAAADEN SMITH" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="512" />

    <!-- PARSELY -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "headline": "TITLE",
            "url": "http://interactive.nydailynews.com/project/jaden-smith-tweets/",
            "thumbnailUrl": "http://interactive.nydailynews.com/project/jaden-smith-tweets/img/jaden-smith-banner.jpg",
            "dateCreated": "2018-07-08T06:00:00Z",
            "articleSection": "Interactive",
            "creator": ["Interactive Project", "Chase Gaewski", "Joe Murphy", "Spencer Dukoff"],
            "keywords": ["interactive project","interactive","jaden smith","twitter","jaden smith tweets"]
        }
    </script>

    <!-- NO NEED TO FILL -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@nydailynews">
    <meta name="twitter:creator" content="@nydni">
    <meta name="decorator" content="responsive" />
    <meta name="nydn_section" content="NY Daily News" />
    <meta name="msvalidate.01" content="02916AAC0DA8B068EFE01D721E03ED7E" />
    <meta name="p:domain_verify" content="78efe4f5c9935744af497772f68a0ee7" />
    <meta property="fb:app_id" content="107464888913" />
    <meta property="fb:admins" content="1594068001" />
    <meta property="fb:pages" content="268914272540" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="NY Daily News" />
    <meta property="article:publisher" content="https://www.facebook.com/NYDailyNews/" />
    <meta name="localeCountry" content="US"/>
    <meta name="localeLanguage" content="en" />

    <link rel="stylesheet" href="//interactive.nydailynews.com/nydn/c/rh.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://interactive.nydailynews.com/quiz/css/style-howmany-v2.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:300,700|PT+Serif" rel="stylesheet">
    <script data-main="//interactive.nydailynews.com/nydn/js/rh.js?r=20170405001" src="//interactive.nydailynews.com/nydn/js/require.js?r=2016LIST" defer></script>
      
    <script>
        var nydn = nydn || {
            "section": "NYDailyNews",
            "subsection": "news",
            "template": "article",
            "revision": "201609014009",
            "bidder": { contains: function() {} },
            "targetPath": document.location.pathname
        };
        var nydnDO = [ { 
            'title':'xxxTITLExxx', 
            'link':'http://interactive.nydailynews.com/project/jaden-smith-tweets/', 
            'p_type':'interactive', 
            'section':'interactive' 
        }];
    </script>
    
    <!-- ADS-START -->
    <script onload="nydn_ads('one');" src="/includes/template/template.js"></script>
    <!-- ADS-END -->

    <script src="/js/jquery.min.js"></script>

    <script>var nav_params = {section: 'projects', url: 'http://interactive.nydailynews.com/project/'};</script>
    <script src="/library/vendor-nav/vendor-include.js" defer></script>
</head>

<body id="nydailynews" data-section="nydailynews" data-subsection="NY Daily News">

<!-- SITEHEADER-START -->
<header id="templateheader"></header>
<!-- SITEHEADER-END -->

<!-- CONTENT-START -->
<main>
    <article>
        <div id="dek" class="hide">Jaden Smith’s Words of Wisdom</div>
        <h1>Let this Jaden Smith Tweet Guide You</h1>

        <ul class="ra-share" id="ra-share-top">
            <li class="rt-share-f"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://interactive.nydailynews.com/project/jaden-smith-tweets/">facebook</a> </li>
            <li class="ra-share-t"> <a target="_blank" href="https://twitter.com/intent/tweet?text=In honor of @officialjaden’s 20th birthday find which Jaden tweet guides your life&url=SHORTURL&related=nydni,">Tweet</a></li>
            <li class="ra-share-e"> <a href="mailto:?subject=Find which Jaden Smith tweet guides your life&body=http://interactive.nydailynews.com/project/game-of-thrones-house/">email</a> </li>
        </ul>
    
        <p id="datestamp" class="stamp">Published July 8, 2018</p>
        <p>
			<img src="img/jaden-circle.png" alt="Photo of Jaden Smith" id="jaden-smith-profile">
			We can’t all afford to have a guru deliver daily wisdom for how to move through life. Good thing <a href="http://www.nydailynews.com/entertainment/movies/jaden-smith-history-twitter-18th-birthday-article-1.2704066">Jaden Smith’s tweets</a> are free.
        </p>
        <p>
			With just a tweet, we are always one <a href="https://twitter.com/officialjaden">jaden-lightenment</a> away from exploring <strong>the far corners of</strong> human thought.
			In honor of Jaden’s <span id="jaden-age">20</span>th birthday <span id="album-release">and the release of his album “SYRE: The Electric Album,”</span>
			we consulted the stars and developed an algorithm (lol) to transmit you to the perfect Jaden-inspired tweet to get you through today and beyond.
        </p>
        <p>
			<strong>
			Enter your birthday below to reach peak Jaden Smith Twitter enlightenment:
			</strong>
        </p>
<!--
        <img src="img/jaden-circle.png" alt="" id="j01" class="left-circle">
        <img src="img/jaden-circle.png" alt="" id="j02" class="left-circle">
        <img src="img/jaden-circle.png" alt="" id="j03" class="left-circle">
        <img src="img/jaden-circle.png" alt="" id="j04" class="left-circle">
-->
        <form id="interface" action="#" method="GET" onSubmit="return false;">
            <p>
                <label for="birth-month">Your birth month</label>
                <select id="birth-month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>,
                <label for="birth-day">birth day</label>
                <select id="birth-day">
                    <option value="01">1</option>
                    <option value="02">2</option>
                    <option value="03">3</option>
                    <option value="04">4</option>
                    <option value="05">5</option>
                    <option value="06">6</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
<!--
                <input type="number" min="1" max="31" id="birth-day">
-->
            </p>
            <div class="buttons">
                <button onClick="jdn.make();" id="make">Submit</button>
            </div>
        </form>

        <div class="ad center">
            <div id='div-gpt-ad-1423507761396-1'>
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-1'); });
                </script>
            </div>
        </div>

        <div class="buttons" id="buttons">
            <button onClick="jdn.save();" id="save" class="hide">Save</button>
            <button onClick="jdn.rando();" id="rando" class="hide">Random</button>
            <button onClick="jdn.truly_rando();" id="truly_rando" class="hide">Jumbled Jaden</button>
            <button onClick="jdn.share('email');" id="share-email" class="hide">Email This</button>
            <button onClick="jdn.share('twitter');" id="share-twitter" class="hide">Tweet This</button>
            <button onClick="jdn.share('facebook');" id="share-facebook" class="hide">Facebook This</button>
        </div>
        <section id="stage" class="hide" style="margin-bottom:25px;">
            <img id="jaden-smith" alt="A photo of Jaden Smith">
            <div>
                <blockquote id="quoted"></blockquote>
                <p id="asterisk" class="hide"><span>*</span> Jaden didn't actually write this</p>
                <p id="url" class="hide"></p>
            </div>
        </section>

        <div class="ad center">
            <div id='div-gpt-ad-1423507761396-3'>
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-3'); });
                </script>
            </div>
        </div>

    </article>
</main>
<style>
.left-circle { 
    position: absolute;
    animation: circle-animation 27s infinite;
}
#j01 {
    left: 200px;
    width: 150px;
}
#j02 {
    left: 250px;
    top: 240px;
    width: 90px;
    transform: rotate(-47deg);
}
#j03 {
    left: 210px;
    top: 450px;
    width: 50px;
    transform: rotate(-27deg);
}
#j04 {
    left: 110px;
    width: 200px;
    transform: rotate(35deg) scale(.3, .3);
}
@keyframes circle-animation {
  10% {
    -webkit-filter: sepia(0) saturate(2);
  }
  
  30% {
    transform: rotate(.05turn) scale(1.3, 1.3);
  }
  60% {
    -webkit-filter: sepia(1) saturate(8);
    transform: rotate(-.05turn);
  }
  90% {
    -webkit-filter: sepia(0) saturate(2);
  }
}
body {
	background-color: transparent;
}
body:before {
	background: white url('img/jaden-smith-initials-photos.png') no-repeat top 500px center;
	background-size: contain;
	background-size: 60%;
	content: "";
	opacity: 0.2;
	position: absolute;
	z-index: -1;
	width: 100%;
	height: 2000px;
}
main {
    background: url('img/jaden-smith-background-2018.png') repeat-x left top;
    background-size: 500px;
    padding-top: 125px;
    position: relative;
    top: -40px;
}
main:after {
    background: url('img/jaden-smith-lofi.png') repeat-x left bottom;
    background-size: auto;
    content: " ";
    width: 100%;
    height: 400px;
    position: absolute;
    animation: footer-animation 7s infinite;
}
@keyframes footer-animation {
	25% {
		-webkit-filter: hue-rotate(0deg);
		filter: hue-rotate(0deg);
		-webkit-filter: grayscale(90%);
		filter: grayscale(90%);
	}
	50% {
		-webkit-filter: grayscale(0%);
		filter: grayscale(0%);
		-webkit-filter: hue-rotate(120deg);
		filter: hue-rotate(120deg);
	}
	75% {
		-webkit-filter: hue-rotate(240deg);
		filter: hue-rotate(240deg);
	}
}
body#nydailynews article {
	background-color: transparent;
    max-width: 824px;
    margin: auto;
    padding-bottom: 500px;
    padding: 25px;
}
/*
body#nydailynews article:before {
    background: url('img/jaden-smith-2019.png') no-repeat left bottom;
    background-size: 300px auto;
    width: calc(100% - 424px);
    width: 300px;
    height: 600px;
    content: " ";
    position: absolute;
    left: 50px;
}
body#nydailynews article:after {
    background: url('img/jaden-smith-2018.png') no-repeat right bottom;
    background-size: 400px auto;
    width: 400px;
    height: 600px;
    content: " ";
    position: absolute;
    right: 0;
    top: 0;
}
*/
article p {
    font-family: "Open Sans", sans-serif;
}
article > p {
    margin-left: 25px;
    margin-right: 25px;
}
article h1 {
    margin: auto;
    border-top: none;
    border-bottom: none;
}
article h1, #stage blockquote {
    font-family: "Open Sans Condensed", sans-serif;
    font-weight: bold;
    letter-spacing: 0;
}
#ra-share-top {
    height: 40px;
    text-align: center;
    margin-bottom: 0;
}
img#jaden-smith-profile {
	width: 200px;
	float: right;
	margin: 5px;
	transform: scaleX(-1);
	filter: FlipH;
	-ms-filter: "FlipH";
}
form {
    margin: 10px auto;
}
form p {
    text-align: center;
    margin: 40px auto;
}
article select {
    font-size: 14px;
}
input, select {
    border: 2px solid #999;
}
.buttons {
    max-width: 600px;
    margin: auto;
    text-align: center;
}
button { 
    margin: 5px;
}
button:hover { 
    background-color: #81bbf7;
}
button:focus { 
    background-color: #933400;
}
button:before, button:after { 
    content: " - ";
    color: #136DF8;
}
button:hover:before, button:hover:after { 
    content: " - ";
    color: #81bbf7;
}
button:focus:before, button:focus:after { 
    content: " - ";
    color: #933400;
}
.grid {
	display: -ms-grid;
    display: grid;
    grid-template-columns: 20% 80%;
    grid-template-rows: 1fr;
    -ms-grid-columns: 20% 80%;
    -ms-grid-rows: 1fr;
    align-content: space-evenly;
}
#stage {
    border: 4px solid #81bbf7;
    background-color: white;
}
#stage img {
    width: 200px;
    position: relative;
    left: -20px;
    align-self: end;
	-ms-grid-column: 1;
	-ms-grid-row: 1;
}
#stage > div {
	-ms-grid-column: 2;
	-ms-grid-row: 1;
}
#stage blockquote:before {
    content: "“";
    color: #81bbf7;
    position: absolute;
    font-size: 192px;
    margin-top: -5px;
    margin-left: 1px;
}
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
	#stage blockquote:before {
		margin-top: -71px;
	}
}
#stage blockquote {
    color: black;
    font-size: 48px;
    line-height: 44px;
    width: calc(100% - 90px);
    margin: 80px 0 40px 60px;
    padding: 10px 0;
}
#stage blockquote span, #stage p span {
    color: red;
    font-size: 60px;
}
#stage p span { font-size: 30px; }
#stage p {
    text-align: right;
}
.hide {
    display: none;
}

/* HANDHELD-SPECIFIC */
@media only screen and ( min-width: 220px ) and ( max-width:727px ) {
	img#jaden-smith-profile {
		width: 100px;
	}
	form p {
		font-size: 26px;
	}
	.buttons button {
		font-size: 20px;
	}
	#stage blockquote {
		font-size: 23px;
		line-height: 22px;
	}
	#stage img {
	    width: 150px;
	}
	#stage p {
		float: right;
		width: 200px;
		line-height: 18px;
	}
	#stage blockquote span, #stage p span {
		font-size: 26px;
	}
}

/* TABLET-SPECIFIC */
@media only screen and ( min-width: 728px ) and (max-width:1023px) {
}
/* HANDHELD & TABLET */
@media only screen and ( min-width: 220px ) and (max-width:1023px) {
	body:before {
		background-size: contain;
	}
	body#nydailynews article:before, body#nydailynews article:after {
		background-image: unset;
	}
	article h1 {
		line-height: 40px;
	}
}
</style>
<script>
var jdn = {
    config: {
        quote_l: 0, // How many items are in the quote list
        img_l: 5,   // How many items are in the image list
    },
    update_config: function(config) {
        // Take an external config object and update this config object.
        for ( var key in config )
        {
            if ( config.hasOwnProperty(key) )
            {
                this.config[key] = config[key];
            }
        }
        return true;
    },
    quote_image: [
        "pic.twitter.com/v1cX31FeaT",
        "pic.twitter.com/xJ9KwppAxI",
        "pic.twitter.com/xBjyzFP0Dy",
        "pic.twitter.com/MYsate1GIh",
        "pic.twitter.com/tXSqt5G0ov",
        "pic.twitter.com/RDfI7AdM58",
        "pic.twitter.com/Z2rIsq0Wjo",
        "pic.twitter.com/m7CwUVfayq",
        "pic.twitter.com/RRuG0BUddT",
        "pic.twitter.com/3dBm0wBoj1",
        "pic.twitter.com/Lb6tPsECJi",
        "pic.twitter.com/3p4VZYIgf9",
        "pic.twitter.com/uZd2oLQ3Ol",
        "pic.twitter.com/1WZZYLxs6Z",
        "pic.twitter.com/fouLYhCmIB",
        "pic.twitter.com/wxrrzen4cx",
        "pic.twitter.com/z4Bd0fhOLE",
        "pic.twitter.com/rC2XBD9TeJ",
        "pic.twitter.com/V3B4rrwUd7",
        "pic.twitter.com/eHmOHbR4gY",
        "pic.twitter.com/89vwxuLqsw",
        "pic.twitter.com/ZomDCCBd5g",
        "pic.twitter.com/dRFLA6exWM",
        "pic.twitter.com/YDO9qjzKmu",
        "pic.twitter.com/BIaKdUE3bC",
        "pic.twitter.com/NbNVUgIrjT",
        "pic.twitter.com/i5pgoQonUK",
        "pic.twitter.com/WzMJRna5ck",
        "pic.twitter.com/ong9xOq2mC",
        "pic.twitter.com/of0SRD2Aoe",
        "pic.twitter.com/RertnOo4yJ",
        "pic.twitter.com/tGF5y7WkWF",
        "pic.twitter.com/hnzQOtUxTU",
        "pic.twitter.com/lELWPjDaBM",
        "pic.twitter.com/bAb0K4aanz",
        "pic.twitter.com/mJxz46ZzMD",
        "pic.twitter.com/Pv1KvT1pLe",
        "pic.twitter.com/Jw5rSsgwCm",
        "pic.twitter.com/P4pVd10UiR",
        "pic.twitter.com/3FqMvq7hxk",
        "pic.twitter.com/bkX7t25r1M",
        "pic.twitter.com/c43t2nIcMz",
        "pic.twitter.com/nx2il9Ajgd",
        "pic.twitter.com/T0mmP1TSlr",
        "pic.twitter.com/zynpQgBUO5",
        "pic.twitter.com/37GdEGfJ7Z",
    ],
    data: [
        "Ocean 8 Is Fire.",
        "The Biggest Flex Anyone will Ever Have Is Dying.",
        "The Moment That Truth Is Organized It Becomes A Lie.",
        "Just Stare In The Mirror And Cry And You'll Be Good",
        "The More Time You Spend Awake The More Time You Spend Asleep.",
        "Every 7 Years Your Body Is Completely Replaced With Entirely New Cells So Just Because You Look The Same Doesn't Mean You Are.",
        "How Can Mirrors Be Real If Our Eyes Aren't Real",
        "Ohh So I Have To Manage My Emotions And Yours... Great",
        "I Am Not A Human And I Don't Speak English",
        "Teleport To Me.",
        "I Don't Hate Anything Accept For Monsanto.",
        "Do Not Ask Me For A Picture Unless Your Camera Is Ready And On Selfie Mode.",
        "I Just Scrolled Through My Tweets And “I” Started Laughing.",
        "The Head Of The Sphinx Will Fall Off In The Near Future.",
        "I Don't Want You Guys To Think Because I Was Born In America That I Speak And Abide By English Grammar. I Speak Jaden, Indefinetly.",
        "I've Bin Drinking Distilled Water For So Long That When I Drink Normal Water It Feels Like I'm Swallowing Huge Chunks of Aluminum.",
        "No Pain No Gain Young Kurt Cobain.",
        "Hate Me Love Me Doesn't Matter I'm Still Occupying Time Inside Of Your Psyche.",
        "You Can Discover Everything You Need To Know About Everything By Looking At Your Hands",
        "You Do Not Know Who You Are Or Why Your Here So When You See Someone Who Dose The Society Comes Together As A Whole and Destroys Them.",
        "School=Depression. Learning+Creation = Happiness. Happiness=Art. Art=Intelligence. Intelligence=Rebellion. And Rebellion Is Bad For The",
        "Most Trees Are Blue",
        "Look Me In The Eyes, Then Look At My Pants, Then Look Me In The Eyes Again, And Ask Me That Question One More Time.",
        "Only Things That Keeps Me Going Is Knowing That Eventually Both Of Us Will Die.",
        "Here's The Deal, I Am Chris Pratt.",
        "One Time I Went To The, And Then I Dropped The Needle On The Record Industrial Complex For The 5th Time This Month While I Bathed In Sorbet",
        "I Don't Smell Good, But I Don't Smell Bad You Feel Me.",
        "Dying Is MainStream #MONEY",
        "That Moment When Peeing Feels So Good You Start Crying.",
        "Instagram Is Not The Answer",
        "Shia Labeouf Is Life.",
        "Don't Argue With Anybody About What Color The Sky Is.",
        "If It's Lit, It's Truly Lit",
        "There Is No Nutrients In Our Food Anymore Or In Our Soil OR IN OUR WATER.",
        "I Should Just Stop Tweeting, The Human Consciousness Must Raise Before I Speak My Juvenile Philosophy.",
        "If A Book Store Never Runs Out Of A Certain Book, Dose That Mean That Nobody Reads It, Or Everybody Reads It",
        "“It's Your Birthday” Mateo Said. I Didn't Respond. “Are You Not Excited To Be 15” He Asked. Readying My Book I Uttered “I Turned 15 Long Ago”",
        "I Saw Owen Wilson One Time From A Distance And We Just Stared At Each Other, Then His Car Drove Off.",
        "If A Cup Cake Falls From a Tree How Far Away Will It Be From Down #Jupiter",
        "Water In The Eyes And Alcohol In The Eyes Are Pretty Much The Same I Know This From First Hand Experience.",
        "The Great Gatsby Is One Of The Greatest Movies Of All Time, Coachella.",
        "Umm Who Has The Floss",
        "Lately People Call Me Scoop Life",
        "I Just Like Showing Pretty Girls A Good Time Weather I'm Physically There Or Not Doesn't Matter.",
        "I'm Glad That Our Distance Makes Us Witness Ourselves From A Different Entrance.",
        "Females Are Amazing.",
        ],
    next: 0,
    sun_signs: [],
    moon_signs: [],
    lookup_sun_sign: function(monthday) {
        var m = +monthday.substr(0,2);
        var d = +monthday.substr(-2);
        if ( monthday.length === 3 ) m = +monthday.substr(0,1);

        if ( ( m === 3 && d > 20 ) || ( m === 4 && d < 20 ) ) return 'Aries';
        else if ( ( m === 4 && d > 19 ) || ( m === 5 && d < 21 ) ) return 'Taurus';
        else if ( ( m === 5 && d > 20 ) || ( m === 6 && d < 21 ) ) return 'Gemini';
        else if ( ( m === 6 && d > 20 ) || ( m === 7 && d < 23 ) ) return 'Cancer';
        else if ( ( m === 7 && d > 22 ) || ( m === 8 && d < 23 ) ) return 'Leo';
        else if ( ( m === 8 && d > 22 ) || ( m === 9 && d < 23 ) ) return 'Virgo';
        else if ( ( m === 9 && d > 22 ) || ( m === 10 && d < 23 ) ) return 'Libra';
        else if ( ( m === 10 && d > 22 ) || ( m === 11 && d < 22 ) ) return 'Scorpio';
        else if ( ( m === 11 && d > 21 ) || ( m === 12 && d < 22 ) ) return 'Saggitarius';
        else if ( ( m === 12 && d > 21 ) || ( m === 1 && d < 20 ) ) return 'Capricorn';
        else if ( ( m === 1 && d > 19 ) || ( m === 2 && d < 19 ) ) return 'Aquarius';
        else if ( ( m === 2 && d > 18 ) || ( m === 3 && d < 21 ) ) return 'Pisces';
    },
    lookup_moon_sign: function(monthday) {
    },
    set_signs: function(monthday) {
        var sign = this.lookup_sun_sign(monthday);
        document.getElementById('sun-sign').textContent = sign;
        if ( ['A','E','I','O','U'].indexOf(sign.substr(0,1)) !== -1 ) document.getElementById('n').textContent = 'n';
        else document.getElementById('n').textContent = '';

        document.getElementById('moon-sign').innerHTML = '<abbr title="We need the time you were born and the year to calculate your moon sign">¯\\_(ツ)_/¯<abbr>';
    },
    make: function(index) {
        
        var md = +(document.getElementById('birth-month').value + document.getElementById('birth-day').value);
        if ( index !== undefined ) md = index;
        else var index = document.getElementById('birth-month').value + document.getElementById('birth-day').value;

        var quote_index = md % this.config.quote_l;
        if ( this.next > 0 ) {
            quote_index = this.next;
            this.next += 1;
            document.location.hash = '#n' + this.next;
        }
		this.quote_index = quote_index;
        var qt = document.getElementById('quoted');
        qt.textContent = this.data[quote_index];

        var img_index = ( md % this.config.img_l ) + 1;
        var img = document.getElementById('jaden-smith');
        img.setAttribute('src', 'img/jaden-smith-' + img_index + '.png');

        console.log(index, typeof index, md, quote_index, img_index, document.getElementById('birth-month').value, document.getElementById('birth-day').value);

        document.getElementById('stage').setAttribute('class', 'grid');
        document.getElementById('stage').setAttribute('role', '');
        document.getElementById('stage').setAttribute('role', 'alert');
        document.getElementById('save').setAttribute('class', '');
        document.getElementById('rando').setAttribute('class', '');
        document.getElementById('truly_rando').setAttribute('class', '');
        document.getElementById('share-email').setAttribute('class', '');
        document.getElementById('share-twitter').setAttribute('class', '');
        document.getElementById('share-facebook').setAttribute('class', '');
        document.getElementById('asterisk').setAttribute('class', 'hide');

        var t = document.getElementById('buttons').offsetTop;
        window.scrollTo({top: t, behavior: 'smooth' });
        window.history.replaceState('', '', document.location.origin + document.location.pathname + '#' + index);
    },
    save: function() {
        // Generate and save an image of the quote.
        document.getElementById('url').setAttribute('class', '');
        html2canvas(document.getElementById('stage'), {
            allowTaint: true,
            onrendered: function(canvas) {

                document.body.appendChild(canvas);
                window.oCanvas = document.getElementsByTagName("canvas");
                window.oCanvas = window.oCanvas[0];
                var strDataURI = window.oCanvas.toDataURL();

                var filename = utils.slugify($('#quoted').text());

                var a = $("<a>").attr("href", strDataURI).attr("download", "jaden-" + filename + ".png").appendTo("body");
                a[0].click();
                a.remove();

                $('#download-'+filename).attr('href', strDataURI).attr('target', '_blank');
                $('#download-'+filename).trigger('click');
                window.location.reload(true);

                document.getElementById('url').setAttribute('class', 'hide');
            }
        }).then( function(canvas) { document.body.appendChild(canvas) });
    },
    rando: function() {
        var m = Math.floor(Math.random() * 11) + 1;
        var d = Math.floor(Math.random() * 30) + 1;
        if ( d < 10 ) d = "0" + d;
        this.make("" + m + d);
    },
    truly_rando: function() {
        var img_index = ( Math.floor(Math.random() * 20) % this.config.img_l ) + 1;
        var img = document.getElementById('jaden-smith');
        img.setAttribute('src', 'img/jaden-smith-' + img_index + '.png');

        document.getElementById('asterisk').setAttribute('class', '');
        markov.load_title();
        document.getElementById('stage').setAttribute('role', '');
        document.getElementById('stage').setAttribute('role', 'alert');

        document.getElementById('share-email').setAttribute('class', 'hide');
        document.getElementById('share-twitter').setAttribute('class', 'hide');
        document.getElementById('share-facebook').setAttribute('class', 'hide');
    },
    share: function(destination) {
        // Put together the URL and deliver to the appropriate share place: email, twitter or facebook.
		var quote;
		if ( document.location.hash !== '' ) quote = document.location.hash.substr(1);
		if ( document.location.search !== '' ) quote = document.location.replace('?quote=','');
        var url_hash = document.location.origin + document.location.pathname + '#' + quote;
        var url_search = document.location.origin + document.location.pathname + '?quote=' + quote;
		console.log(url_hash, url_search);

		if ( destination === 'email' ) {
			window.document.location = 'mailto:?subject=This Jaden Smith Tweet Is Your Life&body=' + url_hash;
		}
		else if ( destination == 'twitter' ) {
			window.document.location = 'https://twitter.com/intent/tweet?text=This is the @officialjaden tweet that guides my life ' + this.quote_image[this.quote_index] + '&url=' + url_hash + '&related=nydni';
		}
		else if ( destination == 'facebook' ) {
			window.document.location = 'https://www.facebook.com/sharer/sharer.php?u=' + url_search;
		}
    },
    load_permalink: function(birthday) {
        // Load a saved image.
        if ( +birthday < 1000 ) {
            // birthday will be a string that looks something like "0321" or "1001" or maybe "506".
            // The last two characters are the date, the other character(s) is the month.
            this.make(+birthday);
            //var d = birthday.substr(-2);
            //var m = birthday.replace(d, '');
        }
    },
    init: function(config) {
        this.config.quote_l = this.data.length;
        if ( document.location.hash !== '' ) this.load_permalink(document.location.hash.substr(1));
        if ( document.location.search !== '' ) this.load_permalink(document.location.search.replace('?quote=',''));
    }
};
jdn.init();
// UTILS
var utils = {
    ap_numerals: ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'],
    get_ap_numeral: function(i) {
        if ( +i < 11 ) return this.ap_numerals[+i];
        return i;
    },
    months: ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'],
    ap_months: ['Jan.', 'Feb.', 'March', 'April', 'May', 'June', 'July', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.'],
    ap_date: function(date) {
        // Given a date such as "2018-02-03" return an AP style date.
        var this_year = new Date().getFullYear();
        var parts = date.split('-')
        var day = +parts[2];
        var month = this.ap_months[+parts[1] - 1];
        if ( this_year == +parts[0] ) return month + ' ' + day;
        return month + ' ' + day + ', ' + parts[0];
    },
    rando: function() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for ( var i=0; i < 8; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    },
    rando_by_day: function(max) {
        // Generate a semi-random integer from zero to the max argument,
        // based on what the date is.
        var d = new Date().getDate();
        return d % +max;
    },
    get_rando_by_day: function(arr) {
        // Given an array, return a random item from it based on today's date.
        var l = arr.length;
        var index = this.rando_by_day(l);
        return arr[index];
    },
    add_zero: function(i) {
        // For values less than 10, return a zero-prefixed version of that value.
        if ( +i < 10 ) return "0" + i;
        return i;
    },
    add_zeros: function(i, digits) {
        // Fill decimals with zeros to the number of digits. Returns a string.
        var str = '' + +i;
        var len = str.length - 2;   // The "2" is the "0." in the string.

        while ( len <= digits ) {
            str = str + '0';
            len = str.length - 2;
        }
        // Axe the leading zero, if there is one
        str = str.replace('0.', '.');
        return str;
    },
    parse_date_str: function(date) {
        // date is a datetime-looking string such as "2017-07-25"
        // Returns a date object.
        if ( typeof date !== 'string' ) return Date.now();

        var date_bits = date.split(' ')[0].split('-');

        // We do that "+date_bits[1] - 1" because months are zero-indexed.
        var d = new Date(date_bits[0], +date_bits[1] - 1, date_bits[2], 0, 0, 0);
        return d;
    },
    parse_date: function(date) {
        // date is a datetime-looking string such as "2017-07-25"
        // Returns a unixtime integer.
        var d = this.parse_date_str(date);
        return d.getTime();
    },
    days_between: function(from, to) {
        // Get the number of days between two dates. Returns an integer. If to is left blank, defaults to today.
        // Both from and to should be strings 'YYYY-MM-DD'.
        // Cribbed from https://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
        if ( to == null ) to = new Date();
        else to = this.parse_date_str(to);
        from = this.parse_date_str(from);
        var days_diff = Math.floor((from-to)/(1000*60*60*24));
        return days_diff;
    },
    get_json: function(path, obj, callback) {
        // Downloads local json and returns it.
        // Cribbed from http://youmightnotneedjquery.com/
        var request = new XMLHttpRequest();
        request.open('GET', path, true);

        request.onload = function() {
            if ( request.status >= 200 && request.status < 400 ) {
                obj.data = JSON.parse(request.responseText);
                callback();
            }
            else {
                console.error('DID NOT LOAD ' + path + request);
                return false;
            }
        };
        request.onerror = function() {};
        request.send();
    },
    add_class: function(el, class_name) {
        // From http://youmightnotneedjquery.com/#add_class
        if ( el.classList ) el.classList.add(class_name);
        else el.className += ' ' + class_name;
        return el;
    },
    add_js: function(src, callback) {
        var s = document.createElement('script');
        if ( typeof callback === 'function' ) s.onload = function() { callback(); }
        //else console.log("Callback function", callback, " is not a function");
        s.setAttribute('src', src);
        document.getElementsByTagName('head')[0].appendChild(s);
    },
    slugify: function(text) {
        return text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-');
    }
}
</script>
<script src="js/app.js"></script>
<!--
<script src="http://interactive.nydailynews.com/js/es6-promise.js"></script>
<script src="http://interactive.nydailynews.com/js/html2canvas/1.0.0.alpha/html2canvas.min.js"></script>
-->
<script src="http://interactive.nydailynews.com/js/html2canvas/0.4.1/html2canvas.js"></script>

<!-- CONTENT-END -->

<div style="height:300px;"></div>

<!-- FOOTER-START -->
<footer id="templatefooter"></footer>
<!-- FOOTER-END -->
<div id="ra-bp">
      </div> <section id="rao">  <div id="rao-close"></div> <div id="rao-wrap"></div> </section>
</div>
<div id="r-scripts">
    <div id="parsely-root" style="display: none">
        <span id="parsely-cfg" data-parsely-site="nydailynews.com"></span>
    </div>
    <div class="r-ad">
        <div id="div-gpt-ad-x100">
        </div>
    </div>
</div>
</body>
</html>
