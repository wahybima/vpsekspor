<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<title>403 Forbidden</title>";
echo "<h1>Forbidden</h1>";
echo "<p>URL saat ini tidak didefinisikan</p>";
}

if (isset($_GET['undangan'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['undangan']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $Nama_tamu = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*
<?php echo $BRANDS ?>
<?php echo $urlPath ?>
*/

?>

<!DOCTYPE html>
<html lang="id" prefix="og: https://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
		        <style type="text/css">
            .wdk-comment-text img {
                max-width: 100% !important;
            }
        </style>
        	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	
<title>Art 04 - Halalin Aja</title>
<meta name="description" content=""/>
<meta name="robots" content="follow, noindex"/>
<meta property="og:locale" content="id_ID" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Art 04 - Halalin Aja" />
<meta property="og:description" content="" />
<meta property="og:url" content="https://cahayagrafika.my.id/tema/art-04/" />
<meta property="og:site_name" content="Halalin Aja" />
<meta property="og:updated_time" content="2025-03-06T14:36:57+00:00" />
<meta property="article:published_time" content="2025-02-19T09:58:49+00:00" />
<meta property="article:modified_time" content="2025-03-06T14:36:57+00:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Art 04 - Halalin Aja" />
<meta name="twitter:description" content="" />
<meta name="twitter:label1" content="Waktunya membaca" />
<meta name="twitter:data1" content="2 menit" />
<script type="application/ld+json" class="rank-math-schema">{"@context":"https://schema.org","@graph":[{"@type":["Person","Organization"],"@id":"https://cahayagrafika.my.id/#person","name":"Halalin Aja"},{"@type":"WebSite","@id":"https://cahayagrafika.my.id/#website","url":"https://cahayagrafika.my.id","name":"Halalin Aja","publisher":{"@id":"https://cahayagrafika.my.id/#person"},"inLanguage":"id"},{"@type":"ImageObject","@id":"https://halalinaja.com/wp-content/uploads/2025/02/LX2-31-e1652210062968-1.webp","url":"https://halalinaja.com/wp-content/uploads/2025/02/LX2-31-e1652210062968-1.webp","width":"200","height":"200","inLanguage":"id"},{"@type":"WebPage","@id":"https://cahayagrafika.my.id/tema/art-04/#webpage","url":"https://cahayagrafika.my.id/tema/art-04/","name":"Art 04 - Halalin Aja","datePublished":"2025-02-19T09:58:49+00:00","dateModified":"2025-03-06T14:36:57+00:00","isPartOf":{"@id":"https://cahayagrafika.my.id/#website"},"primaryImageOfPage":{"@id":"https://halalinaja.com/wp-content/uploads/2025/02/LX2-31-e1652210062968-1.webp"},"inLanguage":"id"},{"@type":"Person","@id":"https://cahayagrafika.my.id/author/halalinaja/","name":"Halalin Aja","url":"https://cahayagrafika.my.id/author/halalinaja/","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/499b816627532fa658041a62ebbb480e770647a59032db43f90d9cd23d96c0ce?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/499b816627532fa658041a62ebbb480e770647a59032db43f90d9cd23d96c0ce?s=96&amp;d=mm&amp;r=g","caption":"Halalin Aja","inLanguage":"id"},"sameAs":["https://www.halalinaja.com/"]},{"@type":"Article","headline":"Art 04 - Halalin Aja","datePublished":"2025-02-19T09:58:49+00:00","dateModified":"2025-03-06T14:36:57+00:00","author":{"@id":"https://cahayagrafika.my.id/author/halalinaja/","name":"Halalin Aja"},"publisher":{"@id":"https://cahayagrafika.my.id/#person"},"description":"","name":"Art 04 - Halalin Aja","@id":"https://cahayagrafika.my.id/tema/art-04/#richSnippet","isPartOf":{"@id":"https://cahayagrafika.my.id/tema/art-04/#webpage"},"image":{"@id":"https://halalinaja.com/wp-content/uploads/2025/02/LX2-31-e1652210062968-1.webp"},"inLanguage":"id","mainEntityOfPage":{"@id":"https://cahayagrafika.my.id/tema/art-04/#webpage"}}]}</script>
<!-- /Plugin WordPress Rank Math SEO -->

<script type='application/javascript'  id='pys-version-script'>console.log('PixelYourSite Free version 11.0.1.1');</script>
<link rel='dns-prefetch' href='//halalinaja.com' />
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cahayagrafika.my.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"}};
/*! This file is auto-generated */
!function(s,n){var o,i,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),a=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===a[t]})}function u(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);for(var n=e.getImageData(16,16,1,1),a=0;a<n.data.length;a++)if(0!==n.data[a])return!1;return!0}function f(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\udedf")}return!1}function g(e,t,n,a){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):s.createElement("canvas"),o=r.getContext("2d",{willReadFrequently:!0}),i=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(function(e){i[e]=t(o,e,n,a)}),i}function t(e){var t=s.createElement("script");t.src=e,t.defer=!0,s.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",i=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){s.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+g.toString()+"("+[JSON.stringify(i),f.toString(),p.toString(),u.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"}),r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=function(e){c(n=e.data),r.terminate(),t(n)})}catch(e){}c(n=g(i,f,p,u))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<link rel='stylesheet' id='bdt-uikit-css' href='https://halalinaja.com/wp-content/plugins/weddingkit-pro/public/css/modules/bdt-uikit.css?ver=3.15.1' media='all' />
<link rel='stylesheet' id='ep-helper-css' href='https://halalinaja.com/wp-content/plugins/weddingkit-pro/public/css/modules/ep-helper.css?ver=1.0.1' media='all' />
<style id='wp-emoji-styles-inline-css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<link rel='stylesheet' id='jet-engine-frontend-css' href='https://halalinaja.com/wp-content/plugins/jet-engine/assets/css/frontend.css?ver=3.2.6' media='all' />
<style id='global-styles-inline-css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='uaf_client_css-css' href='https://halalinaja.com/wp-content/uploads/useanyfont/uaf.css?ver=1753115688' media='all' />
<link rel='stylesheet' id='wdk_style-css' href='https://halalinaja.com/wp-content/plugins/weddingkit-pro/includes/wishes//css/style.css?ver=1.0.0' media='screen' />
<style id='wdk_style-inline-css'>

		.wdk-wrapper {
		  font-size: 14px
		}
	        .wdk-post-author {
          color: white !important;
          background: #777 !important;
        }
	.wdk-wrapper ul.wdk-container-comments li.wdk-item-comment .wdk-comment-avatar img {
		max-width: 28px;
		max-height: 28px;
	}
	.wdk-wrapper ul.wdk-container-comments li.wdk-item-comment .wdk-comment-content {
		margin-left: 38px;
	}
	.wdk-wrapper ul.wdk-container-comments li.wdk-item-comment ul .wdk-comment-avatar img {
		max-width: 24px;
		max-height: 24px;
	}
	.wdk-wrapper ul.wdk-container-comments li.wdk-item-comment ul ul .wdk-comment-avatar img {
		max-width: 21px;
		max-height: 21px;
	}
	
</style>
<link rel='stylesheet' id='wds-elementor-css' href='https://halalinaja.com/wp-content/plugins/weddingsaas-pro/assets/css/wds-elementor.css?ver=2.4.0' media='all' />
<link rel='stylesheet' id='eae-css-css' href='https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/css/eae.min.css?ver=1.14.1' media='all' />
<link rel='stylesheet' id='eae-peel-css-css' href='https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/lib/peel/peel.css?ver=1.14.1' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=1.0' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=1.0' media='all' />
<link rel='stylesheet' id='vegas-css-css' href='https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/lib/vegas/vegas.min.css?ver=2.4.0' media='all' />
<link rel='stylesheet' id='wds-reset-css' href='https://halalinaja.com/wp-content/themes/weddingsaas-wp/assets/css/reset.css?ver=2.0.7' media='all' />
<link rel='stylesheet' id='jet-fb-option-field-select-css' href='https://halalinaja.com/wp-content/plugins/jetformbuilder/modules/option-field/assets/build/select.css?ver=0edd78a6f12e2b918b82' media='all' />
<link rel='stylesheet' id='jet-fb-option-field-checkbox-css' href='https://halalinaja.com/wp-content/plugins/jetformbuilder/modules/option-field/assets/build/checkbox.css?ver=f54eb583054648e8615b' media='all' />
<link rel='stylesheet' id='jet-fb-option-field-radio-css' href='https://halalinaja.com/wp-content/plugins/jetformbuilder/modules/option-field/assets/build/radio.css?ver=7c6d0d4d7df91e6bd6a4' media='all' />
<link rel='stylesheet' id='jet-fb-advanced-choices-css' href='https://halalinaja.com/wp-content/plugins/jetformbuilder/modules/advanced-choices/assets/build/main.css?ver=ca05550a7cac3b9b55a3' media='all' />
<link rel='stylesheet' id='jet-fb-wysiwyg-css' href='https://halalinaja.com/wp-content/plugins/jetformbuilder/modules/wysiwyg/assets/build/wysiwyg.css?ver=5a4d16fb6d7a94700261' media='all' />
<link rel='stylesheet' id='jet-fb-switcher-css' href='https://halalinaja.com/wp-content/plugins/jetformbuilder/modules/switcher/assets/build/switcher.css?ver=06c887a8b9195e5a119d' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.43.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='elementor-post-26442-css' href='https://halalinaja.com/wp-content/uploads/elementor/css/post-26442.css?ver=1752678791' media='all' />
<link rel='stylesheet' id='weddingkit-css' href='https://halalinaja.com/wp-content/plugins/weddingkit-pro/public/css/widgets.css?ver=1.0.1' media='all' />
<link rel='stylesheet' id='widget-spacer-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='e-animation-fadeInDown-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='widget-heading-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='e-animation-fadeInUp-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='e-animation-fadeIn-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='e-animation-zoomIn-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='e-sticky-css' href='https://halalinaja.com/wp-content/plugins/elementor-pro/assets/css/modules/sticky.min.css?ver=3.29.1' media='all' />
<link rel='stylesheet' id='widget-image-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='e-animation-grow-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-grow.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='widget-divider-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='widget-video-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/widget-video.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='widget-gallery-css' href='https://halalinaja.com/wp-content/plugins/elementor-pro/assets/css/widget-gallery.min.css?ver=3.29.1' media='all' />
<link rel='stylesheet' id='elementor-gallery-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' media='all' />
<link rel='stylesheet' id='e-transitions-css' href='https://halalinaja.com/wp-content/plugins/elementor-pro/assets/css/conditionals/transitions.min.css?ver=3.29.1' media='all' />
<link rel='stylesheet' id='e-animation-fadeInLeft-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min.css?ver=3.30.2' media='all' />
<link rel='stylesheet' id='elementor-post-27746-css' href='https://halalinaja.com/wp-content/uploads/elementor/css/post-27746.css?ver=1752689237' media='all' />
<link rel='stylesheet' id='sender-css' href='https://halalinaja.com/wp-content/plugins/weddingkit-pro/public/css/wishes.css?ver=1.0.1' media='all' />
<link rel='stylesheet' id='elementor-gf-local-roboto-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1742276113' media='all' />
<link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/robotoslab.css?ver=1742276123' media='all' />
<link rel='stylesheet' id='elementor-gf-local-halant-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/halant.css?ver=1742277218' media='all' />
<link rel='stylesheet' id='elementor-gf-local-jost-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/jost.css?ver=1742277225' media='all' />
<link rel='stylesheet' id='elementor-gf-local-greatvibes-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/greatvibes.css?ver=1742277225' media='all' />
<link rel='stylesheet' id='elementor-gf-local-poppins-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/poppins.css?ver=1742276130' media='all' />
<link rel='stylesheet' id='elementor-gf-local-pinyonscript-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/pinyonscript.css?ver=1742277226' media='all' />
<link rel='stylesheet' id='elementor-gf-local-montserrat-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/montserrat.css?ver=1742276182' media='all' />
<link rel='stylesheet' id='elementor-gf-local-playfairdisplay-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/playfairdisplay.css?ver=1742276190' media='all' />
<link rel='stylesheet' id='elementor-gf-local-playfairdisplaysc-css' href='https://halalinaja.com/wp-content/uploads/elementor/google-fonts/css/playfairdisplaysc.css?ver=1742277229' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='https://halalinaja.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3' media='all' />
<script src="https://cahayagrafika.my.id/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://cahayagrafika.my.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/js/iconHelper.js?ver=1.0" id="eae-iconHelper-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/pixelyoursite/dist/scripts/jquery.bind-first-0.2.3.min.js?ver=6.8.2" id="jquery-bind-first-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/pixelyoursite/dist/scripts/js.cookie-2.1.3.min.js?ver=2.1.3" id="js-cookie-pys-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/pixelyoursite/dist/scripts/tld.min.js?ver=2.3.1" id="js-tld-js"></script>
<script id="pys-js-extra">
var pysOptions = {"staticEvents":[],"dynamicEvents":[],"triggerEvents":[],"triggerEventTypes":[],"debug":"","siteUrl":"https:\/\/cahayagrafika.my.id","ajaxUrl":"https:\/\/cahayagrafika.my.id\/wp-admin\/admin-ajax.php","ajax_event":"685dec90ac","enable_remove_download_url_param":"1","cookie_duration":"7","last_visit_duration":"60","enable_success_send_form":"","ajaxForServerEvent":"1","ajaxForServerStaticEvent":"1","send_external_id":"1","external_id_expire":"180","track_cookie_for_subdomains":"1","google_consent_mode":"1","gdpr":{"ajax_enabled":false,"all_disabled_by_api":false,"facebook_disabled_by_api":false,"analytics_disabled_by_api":false,"google_ads_disabled_by_api":false,"pinterest_disabled_by_api":false,"bing_disabled_by_api":false,"externalID_disabled_by_api":false,"facebook_prior_consent_enabled":true,"analytics_prior_consent_enabled":true,"google_ads_prior_consent_enabled":null,"pinterest_prior_consent_enabled":true,"bing_prior_consent_enabled":true,"cookiebot_integration_enabled":false,"cookiebot_facebook_consent_category":"marketing","cookiebot_analytics_consent_category":"statistics","cookiebot_tiktok_consent_category":"marketing","cookiebot_google_ads_consent_category":"marketing","cookiebot_pinterest_consent_category":"marketing","cookiebot_bing_consent_category":"marketing","consent_magic_integration_enabled":false,"real_cookie_banner_integration_enabled":false,"cookie_notice_integration_enabled":false,"cookie_law_info_integration_enabled":false,"analytics_storage":{"enabled":true,"value":"granted","filter":false},"ad_storage":{"enabled":true,"value":"granted","filter":false},"ad_user_data":{"enabled":true,"value":"granted","filter":false},"ad_personalization":{"enabled":true,"value":"granted","filter":false}},"cookie":{"disabled_all_cookie":false,"disabled_start_session_cookie":false,"disabled_advanced_form_data_cookie":false,"disabled_landing_page_cookie":false,"disabled_first_visit_cookie":false,"disabled_trafficsource_cookie":false,"disabled_utmTerms_cookie":false,"disabled_utmId_cookie":false},"tracking_analytics":{"TrafficSource":"direct","TrafficLanding":"undefined","TrafficUtms":[],"TrafficUtmsId":[]},"GATags":{"ga_datalayer_type":"default","ga_datalayer_name":"dataLayerPYS"},"woo":{"enabled":false},"edd":{"enabled":false},"cache_bypass":"1753116480"};
</script>
<script src="https://halalinaja.com/wp-content/plugins/pixelyoursite/dist/scripts/public.js?ver=11.0.1.1" id="pys-js"></script>
<link rel="https://api.w.org/" href="https://cahayagrafika.my.id/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://cahayagrafika.my.id/wp-json/wp/v2/pages/27746" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cahayagrafika.my.id/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.2" />
<link rel='shortlink' href='https://cahayagrafika.my.id/?p=27746' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://cahayagrafika.my.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcahayagrafika.my.id%2Ftema%2Fart-04%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://cahayagrafika.my.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcahayagrafika.my.id%2Ftema%2Fart-04%2F&#038;format=xml" />
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4851706209123516"
     crossorigin="anonymous"></script><!-- Meta Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,'script',   'https://connect.facebook.net/en_US/fbevents.js');   fbq('init', '7817838528286649');   fbq('track', 'PageView'); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=7817838528286649&ev=PageView&noscript=1" /></noscript> <!-- End Meta Pixel Code --><meta name="facebook-domain-verification" content="i6hkkmvjvl06p27d9hhqq4y2385xb2" /><meta name="generator" content="Elementor 3.30.2; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			<script type='application/javascript' id='pys-config-warning-script'>console.warn('PixelYourSite: no pixel configured.');</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" /></head>
<body class="wp-singular page-template page-template-elementor_canvas page page-id-27746 page-child parent-pageid-26518 wp-embed-responsive wp-theme-weddingsaas-wp elementor-default elementor-template-canvas elementor-kit-26442 elementor-page elementor-page-27746">
			<div data-elementor-type="wp-page" data-elementor-id="27746" class="elementor elementor-27746" data-elementor-post-type="page">
				
	<script type="text/javascript">
		
		jQuery(document).ready(function ($) {
			var elementSelector = ".elementor-element-3597cd32[data-eae-slider=58738]";
			var $element = jQuery(elementSelector);

			// Adding the HTML structure
			$element.prepend('<div class="eae-section-bs"><div class="eae-section-bs-inner"></div></div>');

			// Initialize vegas background slider
			$element.children('.eae-section-bs').children('.eae-section-bs-inner').vegas({
				slides: [{"src":""}],
				transition: 'zoomOut',
				animation: 'kenburns',
				overlay: 'https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder//assets/lib/vegas/overlays/01.png',
				cover: true,
				delay: 5000,
				timer: true			});
			

			// Clear the overlay if custom overlay switcher is set to 'yes'
			if ('' === 'yes') {
				$element.find('.vegas-overlay').css('background-image', '');
			}
		});
	</script>
				<section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-3597cd32 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-eae-slider="58738" data-id="3597cd32" data-element_type="section" id="header" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-467dd97c animated-slow elementor-invisible" data-eae-slider="98134" data-id="467dd97c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-74ba97ed elementor-widget elementor-widget-spacer" data-id="74ba97ed" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-48563b55 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="48563b55" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Dear :</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-39a5d501 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="39a5d501" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:100,&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"><?php echo $BRANDS ?></h2>				</div>
				</div>
				<div class="elementor-element elementor-element-397abefc animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="397abefc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"></p>				</div>
				</div>
				<div class="elementor-element elementor-element-2287cb86 elementor-widget elementor-widget-spacer" data-id="2287cb86" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-60a8380 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="60a8380" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:100,&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">The Wedding of </h1>				</div>
				</div>
				<div class="elementor-element elementor-element-4e0250b7 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="4e0250b7" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:100,&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">R</p>				</div>
				</div>
				<div class="elementor-element elementor-element-41a00b81 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="41a00b81" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:100,&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">F</p>				</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-636c7fe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="67117" data-id="636c7fe5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3bffcc89" data-eae-slider="25208" data-id="3bffcc89" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4cc7d92a elementor-align-center elementor-mobile-align-center animated-slow elementor-invisible elementor-widget elementor-widget-button" data-id="4cc7d92a" data-element_type="widget" id="tombol-buka" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-xs" href="#cover">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-envelope-square"></i>			</span>
									<span class="elementor-button-text">Open Invitation</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-2938958b elementor-widget elementor-widget-spacer" data-id="2938958b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-24989368 elementor-widget elementor-widget-spacer" data-id="24989368" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-5a432898 elementor-section-full_width elementor-section-height-min-height elementor-section-items-stretch elementor-section-height-default" data-eae-slider="15118" data-id="5a432898" data-element_type="section" id="cover">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26edb834 elementor-hidden-mobile" data-eae-slider="22966" data-id="26edb834" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-63b065e0 elementor-section-full_width elementor-section-height-min-height wdk-sticky-section-positon--top elementor-section-height-default" data-eae-slider="52813" data-id="63b065e0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-64ae1a45" data-eae-slider="268" data-id="64ae1a45" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-3d122421 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-eae-slider="89235" data-id="3d122421" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-11110b14" data-eae-slider="52484" data-id="11110b14" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1a52fe58 elementor-widget elementor-widget-spacer" data-id="1a52fe58" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-18f82e98 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="18f82e98" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;zoomIn&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Undangan Pernikahan Kami</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-38e8c729 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="38e8c729" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;zoomIn&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Ricky &amp; Fenica</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-538ca839 elementor-widget elementor-widget-heading" data-id="538ca839" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">“"Yang terpenting dalam menciptakan pernikahan yang bahagia bukanlah seberapa cocoknya kalian, melainkan bagaimana kalian menghadapi ketidakcocokan. Pernikahan yang hebat bukanlah ketika pasangan yang sempurna bersatu. Melainkan ketika pasangan yang tidak sempurna belajar menikmati perbedaan mereka."”</p>				</div>
				</div>
				<div class="elementor-element elementor-element-e3d5f2c elementor-widget elementor-widget-heading" data-id="e3d5f2c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Kepada Yth. Bapak / Ibu /Saudara/i</p>				</div>
				</div>
				<div class="elementor-element elementor-element-2910ad93 elementor-widget elementor-widget-heading" data-id="2910ad93" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"><?php echo $BRANDS ?></p>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-266661ac" data-eae-slider="11397" data-id="266661ac" data-element_type="column" id="header">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-7008e291 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-eae-slider="76432" data-id="7008e291" data-element_type="section" id="cover" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5b058d62" data-eae-slider="92331" data-id="5b058d62" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6708b6f6 elementor-widget elementor-widget-spacer" data-id="6708b6f6" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-3002efc1 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="93392" data-id="3002efc1" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-47906cb8" data-eae-slider="24067" data-id="47906cb8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-1c30c1d9 elementor-widget elementor-widget-spacer" data-id="1c30c1d9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-766cba0f elementor-widget elementor-widget-spacer" data-id="766cba0f" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2071ce08 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="2071ce08" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img fetchpriority="high" decoding="async" width="533" height="800" src="https://halalinaja.com/wp-content/uploads/2025/02/LX2-31-e1652210062968-1.webp" class="attachment-full size-full wp-image-27277" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-4c075fac animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="4c075fac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">The Wedding of</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-3a1f5206 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="3a1f5206" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Ricky &amp; Fenica</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-517b3a35 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="517b3a35" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Sabtu, 02 Agustus  2025</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-6d07ff0c elementor-widget elementor-widget-spacer" data-id="6d07ff0c" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-2f4e78ab elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="16478" data-id="2f4e78ab" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-76fdcea9" data-eae-slider="51980" data-id="76fdcea9" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-239a142d elementor-widget elementor-widget-spacer" data-id="239a142d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-668aa04f animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="27745" data-id="668aa04f" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-16b6c471" data-eae-slider="46535" data-id="16b6c471" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5fab49c0 elementor-widget elementor-widget-image" data-id="5fab49c0" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="800" height="533" src="https://halalinaja.com/wp-content/uploads/2025/02/30cac2fbd8243-e1652210109466-1.webp" class="attachment-large size-large wp-image-27279" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-17fe9d7c elementor-widget elementor-widget-spacer" data-id="17fe9d7c" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4e175196 elementor-widget elementor-widget-heading" data-id="4e175196" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">“ Dan di antara tanda-tanda (kebesaran) -Nya adalah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya "<br><br><i> </i><b><i>Ar-Ruum ayat 21</i> <b></b></b></p>				</div>
				</div>
				<div class="elementor-element elementor-element-2764dfe3 elementor-widget elementor-widget-spacer" data-id="2764dfe3" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-63f0449f elementor-widget elementor-widget-spacer" data-id="63f0449f" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-647c68a1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="80187" data-id="647c68a1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a3217e4" data-eae-slider="70394" data-id="3a3217e4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-47f226e elementor-widget elementor-widget-spacer" data-id="47f226e" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-626a21b4 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="75370" data-id="626a21b4" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4017b81d" data-eae-slider="37943" data-id="4017b81d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-44ab1f88 elementor-widget elementor-widget-spacer" data-id="44ab1f88" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-101c8d9c animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="101c8d9c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Assalamualaikum Wr. Wb.</p>				</div>
				</div>
				<div class="elementor-element elementor-element-73fda426 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="73fda426" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, Kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri Resepsi Pernikahan kami.</p>				</div>
				</div>
				<div class="elementor-element elementor-element-2e70cc2e animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="2e70cc2e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">The Bride </p>				</div>
				</div>
				<div class="elementor-element elementor-element-2291fe72 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="2291fe72" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="1040" height="1500" src="https://halalinaja.com/wp-content/uploads/2025/02/2-e1727241976936.webp" class="attachment-full size-full wp-image-27281" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-331199c0 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="331199c0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Fenica Thesa Andani Putri</p>				</div>
				</div>
				<div class="elementor-element elementor-element-10c807cb animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="10c807cb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Putri Pertama dari <br>Bapak Hidayat  / Indra  &amp; <br>Ibu Linda Fatmawati
</p>				</div>
				</div>
				<div class="elementor-element elementor-element-4b3ee502 elementor-align-center animated-slow elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="4b3ee502" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="https://www.instagram.com/fenicathesa__/" target="_blank" rel="noopener">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fab fa-instagram"></i>			</span>
									<span class="elementor-button-text">Instagram</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-64846886 elementor-widget-divider--view-line_icon animated-slow elementor-view-default elementor-widget-divider--element-align-center elementor-invisible elementor-widget elementor-widget-divider" data-id="64846886" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
							<div class="elementor-icon elementor-divider__element">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>38_Love</title><g id="_38_Love" data-name="38_Love"><path d="M56.5131,12.04A18.716,18.716,0,0,0,35.3468,8.3527a7.8143,7.8143,0,0,1-6.6935.0018A18.6688,18.6688,0,0,0,7.487,38.4387l15.0849,15.085a13.3489,13.3489,0,0,0,18.8562,0l15.085-15.085A18.6885,18.6885,0,0,0,56.5131,12.04ZM52.7418,34.6675,37.6569,49.7525a8.009,8.009,0,0,1-11.3138,0L11.2582,34.6675A13.3346,13.3346,0,0,1,26.3782,13.18a13.14,13.14,0,0,0,11.2437-.0036,13.3366,13.3366,0,0,1,15.12,21.4912Z"></path><path d="M37.6569,19.5826a2.6666,2.6666,0,0,0,3.7712,3.7712,2.6667,2.6667,0,0,1,3.7712,3.7713,2.6667,2.6667,0,0,0,3.7713,3.7712A8,8,0,1,0,37.6569,19.5826Z"></path></g></svg></div>
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2638707f animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="2638707f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">The Groom</p>				</div>
				</div>
				<div class="elementor-element elementor-element-6e76bb47 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="6e76bb47" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1005" height="1500" src="https://halalinaja.com/wp-content/uploads/2025/02/19-e1727242422429.webp" class="attachment-full size-full wp-image-27283" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-44f0485b animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="44f0485b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Ricky Ramadhan</p>				</div>
				</div>
				<div class="elementor-element elementor-element-42fd89f2 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="42fd89f2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Putra Kedua dari <br>Bapak Aidil (alm)  &amp;<br>Ibu  Nurlela Sari Harahap</p>				</div>
				</div>
				<div class="elementor-element elementor-element-35869823 elementor-align-center animated-slow elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="35869823" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="https://www.instagram.com/rickyrmdn__/" target="_blank" rel="noopener">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fab fa-instagram"></i>			</span>
									<span class="elementor-button-text">Instagram</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-2a8d77c1 elementor-widget elementor-widget-spacer" data-id="2a8d77c1" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-50a621c9 elementor-widget elementor-widget-spacer" data-id="50a621c9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-75bfa1eb elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-eae-slider="10460" data-id="75bfa1eb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-164682b3" data-eae-slider="21975" data-id="164682b3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6d7a858 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="6d7a858" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1267" height="844" src="https://halalinaja.com/wp-content/uploads/2025/02/64aa2798dd643-1.webp" class="attachment-full size-full wp-image-27276" alt="" />															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-6be7f57c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="50737" data-id="6be7f57c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-57c991c5" data-eae-slider="30723" data-id="57c991c5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-7e59a92 elementor-widget elementor-widget-spacer" data-id="7e59a92" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-482d1f38 elementor-widget elementor-widget-heading" data-id="482d1f38" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"></h2>				</div>
				</div>
				<div class="elementor-element elementor-element-73ba36c4 elementor-widget elementor-widget-wdk-countdown" data-id="73ba36c4" data-element_type="widget" data-widget_type="wdk-countdown.default">
				<div class="elementor-widget-container">
					
		<div class="wdk-elements-countdown-wrapper">
			<div class="wdk-elements-countdown-container wdk-elements-countdown-label-block ">		



				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-6a005c60 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="53573" data-id="6a005c60" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1bd24b20" data-eae-slider="38026" data-id="1bd24b20" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-9214ef6 elementor-widget elementor-widget-spacer" data-id="9214ef6" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-279a4123 elementor-widget elementor-widget-heading" data-id="279a4123" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Akad Nikah</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-cfd9d49 e-transform elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="cfd9d49" data-element_type="widget" data-settings="{&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-192b0b4c elementor-widget elementor-widget-heading" data-id="192b0b4c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Jumat, 01 Agustus 2025</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-26c8c744 elementor-widget elementor-widget-heading" data-id="26c8c744" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Pukul: 08:00 s/d 13.00 WIB</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-196ff802 e-transform elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="196ff802" data-element_type="widget" data-settings="{&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-5621b074 animated-slow elementor-view-default elementor-invisible elementor-widget elementor-widget-icon" data-id="5621b074" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon.default">
				<div class="elementor-widget-container">
							<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fas fa-map-marked-alt"></i>			</div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4581a179 elementor-widget elementor-widget-heading" data-id="4581a179" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"><b>Padang Patorokan</b><br> Jorong Guguak, Kec.Guguak, Lima Puluh Kota, <br><br>Sumatra Barat </h2>				</div>
				</div>
				<div class="elementor-element elementor-element-1822e534 elementor-mobile-align-center elementor-align-center elementor-widget elementor-widget-button" data-id="1822e534" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-xs" href="https://www.google.com/maps?q=-0.143392,100.565254" target="_blank" rel="noopener">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-map-marked-alt"></i>			</span>
									<span class="elementor-button-text">Google maps</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-60344e94 elementor-widget elementor-widget-spacer" data-id="60344e94" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-6de9fb5a animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="45556" data-id="6de9fb5a" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7664e90e" data-eae-slider="18562" data-id="7664e90e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-323e3ea5 elementor-widget elementor-widget-spacer" data-id="323e3ea5" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-190fbf83 elementor-widget elementor-widget-heading" data-id="190fbf83" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Resepsi</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-cec0194 e-transform elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="cec0194" data-element_type="widget" data-settings="{&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-170066eb elementor-widget elementor-widget-heading" data-id="170066eb" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Sabtu, 02 Agustus 2025</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-7f4184f1 elementor-widget elementor-widget-heading" data-id="7f4184f1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Pukul: 08:00 s/d 13.00 WIB</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-265b87ec e-transform elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="265b87ec" data-element_type="widget" data-settings="{&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-594ac745 animated-slow elementor-view-default elementor-invisible elementor-widget elementor-widget-icon" data-id="594ac745" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon.default">
				<div class="elementor-widget-container">
							<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fas fa-map-marked-alt"></i>			</div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-62337316 elementor-widget elementor-widget-heading" data-id="62337316" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"><b>Padang Patorokan</b><br> Jorong Guguak, Kec.Guguak, Lima Puluh Kota, <br><br>Sumatra Barat </h2>				</div>
				</div>
				<div class="elementor-element elementor-element-2bdeeec6 elementor-mobile-align-center elementor-align-center elementor-widget elementor-widget-button" data-id="2bdeeec6" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-xs" href="https://www.google.com/maps?q=-0.143392,100.565254" target="_blank" rel="noopener">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-map-marked-alt"></i>			</span>
									<span class="elementor-button-text">Google maps</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-186b45cb elementor-widget elementor-widget-spacer" data-id="186b45cb" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-5d21d535 elementor-widget elementor-widget-spacer" data-id="5d21d535" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-154833b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="28568" data-id="154833b7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4915497a" data-eae-slider="42016" data-id="4915497a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-6f0e22d1 elementor-widget elementor-widget-spacer" data-id="6f0e22d1" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-48b8ee23 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="49940" data-id="48b8ee23" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7463e3b7" data-eae-slider="55725" data-id="7463e3b7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-37b6685e elementor-widget elementor-widget-spacer" data-id="37b6685e" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>

				</div>
				<div class="elementor-element elementor-element-30f7a7cf animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="30f7a7cf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"> </h2>				</div>
				</div>
				<div class="elementor-element elementor-element-1490cffc animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="1490cffc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"></p>				</div>
				</div>
				<div class="elementor-element elementor-element-66cc827f animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="66cc827f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"> </h2>				</div>
				</div>
				<div class="elementor-element elementor-element-39298281 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="39298281" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"></p>				</div>
				</div>
				<div class="elementor-element elementor-element-704825dd animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="704825dd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"></h2>				</div>
				</div>
				<div class="elementor-element elementor-element-5550436 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="5550436" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"></p>				</div>
				</div>
				<div class="elementor-element elementor-element-2b5b9e70 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="2b5b9e70" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"> </h2>				</div>
				</div>
				<div class="elementor-element elementor-element-20b0ad43 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="20b0ad43" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"> </p>				</div>
				</div>
				<div class="elementor-element elementor-element-128eb7af animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="128eb7af" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-8e76d66 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="8e76d66" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"></p>				</div>
				</div>
				<div class="elementor-element elementor-element-25c37d11 elementor-widget elementor-widget-spacer" data-id="25c37d11" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-5c5ed37e elementor-widget elementor-widget-spacer" data-id="5c5ed37e" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-68dfc844 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="53939" data-id="68dfc844" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-316a43fb" data-eae-slider="73263" data-id="316a43fb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-17154322 elementor-widget elementor-widget-spacer" data-id="17154322" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4e8d80f9 elementor-widget elementor-widget-heading" data-id="4e8d80f9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Wedding Gallery</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-6139b1d2 elementor-widget elementor-widget-video" data-id="6139b1d2" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=XHOmBV4js_E&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="elementor-wrapper elementor-open-inline">
			<div class="elementor-video"></div>		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-6cee43a2 elementor-widget elementor-widget-gallery" data-id="6cee43a2" data-element_type="widget" data-settings="{&quot;gallery_layout&quot;:&quot;justified&quot;,&quot;ideal_row_height&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:161,&quot;sizes&quot;:[]},&quot;ideal_row_height_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:150,&quot;sizes&quot;:[]},&quot;ideal_row_height_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:150,&quot;sizes&quot;:[]},&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}" data-widget_type="gallery.default">
				<div class="elementor-widget-container">
							<div class="elementor-gallery__container">
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/a6973a41978e0-e1652210086434-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="a6973a41978e0-e1652210086434-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyODUsInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcL2E2OTczYTQxOTc4ZTAtZTE2NTIyMTAwODY0MzQtMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/a6973a41978e0-e1652210086434-1.webp" data-width="800" data-height="533" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/7320ce43df42e-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="7320ce43df42e-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyODYsInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcLzczMjBjZTQzZGY0MmUtMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/7320ce43df42e-1.webp" data-width="1267" data-height="844" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/64aa2798dd643-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="64aa2798dd643-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyNzYsInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcLzY0YWEyNzk4ZGQ2NDMtMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/64aa2798dd643-1.webp" data-width="1267" data-height="844" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/30cac2fbd8243-e1652210109466-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="30cac2fbd8243-e1652210109466-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyNzksInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcLzMwY2FjMmZiZDgyNDMtZTE2NTIyMTAxMDk0NjYtMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/30cac2fbd8243-e1652210109466-1.webp" data-width="800" data-height="533" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/846642222db82-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="846642222db82-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyODcsInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcLzg0NjY0MjIyMmRiODItMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/846642222db82-1.webp" data-width="1267" data-height="1900" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/c5bd1d9bbbc20-e1652210126685-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="c5bd1d9bbbc20-e1652210126685-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyODgsInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcL2M1YmQxZDliYmJjMjAtZTE2NTIyMTAxMjY2ODUtMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/c5bd1d9bbbc20-e1652210126685-1.webp" data-width="800" data-height="533" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/LX2-13-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="LX2-13-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyODksInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcL0xYMi0xMy0xLndlYnAiLCJzbGlkZXNob3ciOiI2Y2VlNDNhMiJ9" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/LX2-13-1.webp" data-width="1000" data-height="1500" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
							<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="https://halalinaja.com/wp-content/uploads/2025/02/479599c0e5487-1.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6cee43a2" data-elementor-lightbox-title="479599c0e5487-1.webp" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyOTAsInVybCI6Imh0dHBzOlwvXC9oYWxhbGluYWphLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNVwvMDJcLzQ3OTU5OWMwZTU0ODctMS53ZWJwIiwic2xpZGVzaG93IjoiNmNlZTQzYTIifQ%3D%3D" target="_blank" rel="noopener">
					<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://halalinaja.com/wp-content/uploads/2025/02/479599c0e5487-1.webp" data-width="1267" data-height="844" aria-label="" role="img" ></div>
											<div class="elementor-gallery-item__overlay"></div>
														</a>
					</div>
					</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-742a0af3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="12016" data-id="742a0af3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-710a7b3e" data-eae-slider="18028" data-id="710a7b3e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-7869ede0 elementor-widget elementor-widget-spacer" data-id="7869ede0" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-55ca6b77 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="87969" data-id="55ca6b77" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2ec32f2" data-eae-slider="37109" data-id="2ec32f2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-3850f18a elementor-widget elementor-widget-spacer" data-id="3850f18a" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2abfeaa2 elementor-widget elementor-widget-image" data-id="2abfeaa2" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1267" height="844" src="https://halalinaja.com/wp-content/uploads/2025/02/479599c0e5487-1.webp" class="attachment-full size-full wp-image-27290" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-6f263593 elementor-widget elementor-widget-heading" data-id="6f263593" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<div class="elementor-heading-title elementor-size-default">Wedding Wish</div>				</div>
				</div>
				<div class="elementor-element elementor-element-5940d897 elementor-invisible elementor-widget elementor-widget-heading" data-id="5940d897" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<span class="elementor-heading-title elementor-size-default">Ucapan selamat dan kebahagiaan bisa dari mana saja. Tanpa jabat tangan atau pelukan hangat, masih ada simpul senyum dan do'a baik yang kami harapkan.</span>				</div>
				</div>
				<div class="elementor-element elementor-element-3162fc92 elementor-widget elementor-widget-wdk-wishes" data-id="3162fc92" data-element_type="widget" data-settings="{&quot;attendence&quot;:&quot;yes&quot;}" data-widget_type="wdk-wishes.default">
				<div class="elementor-widget-container">
					<div class='wdk-wrapper wdk-facebook wdk-comments-closed wdk-border' style='overflow: hidden;'><div class='wdk-wrap-link'><div class='header-lf'><a id='wdk-link-27746' class='wdk-link wdk-icon-link wdk-icon-link-true auto-load-true' href='?post_id=27746&amp;comments=0&amp;get=30&amp;order=DESC' title='0 Wishes'><span>0</span> Wishes</a></div></div><!--.wdk-wrap-link--><div id='wdk-wrap-commnent-27746' class='wdk-wrap-comments' style='display:none;'><div id='wdk-wrap-form-27746' class='wdk-clearfix'><div class="wdk-comment-attendence"><div id="invitation-count-27746" class="wdk_comment_count_card_wrap"><div class="wdk_comment_count_card_row_2"><div class="wdk_comment_count_card wdk_card-hadir"><span>0</span><span>Hadir</span></div><div class="wdk_comment_count_card wdk_card-tidak_hadir"><span>0</span><span>Tidak hadir</span></div></div></div></div><div class="wdk-clearfix wdk-wrap-form "><div id='wdk-container-form-27746' class='wdk-container-form wdk-no-login'><p>Comments are closed</p></div><!--.wdk-container-form--></div><!--.wdk-clearfix wdk-relative--></div><!--.wdk-wrap-form--><div id='wdk-comment-status-27746'  class='wdk-comment-status'></div><div id='wdk-box' class='wdk-box'><ul id='wdk-container-comment-27746' class='wdk-container-comments wdk-order-DESC ' data-order='DESC'></ul></div><div class='wdk-holder-27746 wdk-holder'></div></div><!--.wdk-wrap-comments--></div><!--.wdk-wrapper-->            <style>
                .wdk-wrapper .wdk-holder {
                    display: block !important;
                }
            </style>

            
        
        				</div>
				</div>
				<div class="elementor-element elementor-element-4917d3c2 elementor-widget elementor-widget-spacer" data-id="4917d3c2" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-50ea795a elementor-widget elementor-widget-spacer" data-id="50ea795a" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-33816430 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="44167" data-id="33816430" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-319b0296 frosted2" data-eae-slider="9855" data-id="319b0296" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-309d559d elementor-widget elementor-widget-spacer" data-id="309d559d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-7a8a42e6 elementor-widget elementor-widget-heading" data-id="7a8a42e6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Wedding Gift</p>				</div>
				</div>
				<div class="elementor-element elementor-element-318395ba elementor-invisible elementor-widget elementor-widget-heading" data-id="318395ba" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<span class="elementor-heading-title elementor-size-default">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Namun jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</span>				</div>
				</div>
				<div class="elementor-element elementor-element-29546bc6 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="29546bc6" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-5f21fdc8 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="32693" data-id="5f21fdc8" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;zoomIn&quot;,&quot;animation_mobile&quot;:&quot;zoomIn&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-60bfc398" data-eae-slider="61299" data-id="60bfc398" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-397345fd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="1343" data-id="397345fd" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5e85fb99" data-eae-slider="80997" data-id="5e85fb99" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-67c37338 elementor-widget elementor-widget-image" data-id="67c37338" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1773" height="1182" src="https://halalinaja.com/wp-content/uploads/2025/02/BANK-BCA.webp" class="attachment-full size-full wp-image-27245" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-74b8504 elementor-widget elementor-widget-image" data-id="74b8504" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="150" height="150" src="https://halalinaja.com/wp-content/uploads/2025/02/chip-atm-undangan.webp" class="attachment-full size-full wp-image-27246" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-7c03b0c elementor-align-right elementor-widget elementor-widget-wdk-copy" data-id="7c03b0c" data-element_type="widget" data-widget_type="wdk-copy.default">
				<div class="elementor-widget-container">
							
		<div class="elementor-image img"></div>

		<div class="head-title">Fenica Thesa Andani Putri</div>
		<div class="elementor-button-wrapper">
						<div class="copy-content spancontent">12345678900</div>
				
			<a style="cursor:pointer;" onclick="copyText(this)" data-message="Berhasil disalin" class="elementor-button" role="button">
				
		<div class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="far fa-copy"></i>			</span>
						<span class="elementor-button-text">Salin</span>
		</div>
					</a>
			
		</div>

		<style type="text/css">
			.spancontent {
				padding-bottom: 20px;
			}
			.copy-content {
				color: #6EC1E4;
				text-align: center;
			}
			.head-title {
				color: #6EC1E4;
				text-align: center;
			}
		</style>

		<script>
		function copyText(el) {
		    var content = jQuery(el).siblings('div.copy-content').html()
		    var temp = jQuery("<textarea>");
		    jQuery("body").append(temp);
		    temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
		    document.execCommand("copy");
		    temp.remove();
		    var text = jQuery(el).html()
		    jQuery(el).html(jQuery(el).data('message'))
		    var counter = 0;
		    var interval = setInterval(function() {
		        counter++;
		        if (counter == 1) {
		            jQuery(el).html(text)
		        }
		    }, 500);
		}

		</script>

						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-46c6924b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="46491" data-id="46c6924b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-612bd20c" data-eae-slider="66119" data-id="612bd20c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-666242ff elementor-widget elementor-widget-image" data-id="666242ff" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1773" height="1182" src="https://halalinaja.com/wp-content/uploads/2025/02/BANK-BNI.webp" class="attachment-full size-full wp-image-27248" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-3dab4735 elementor-widget elementor-widget-image" data-id="3dab4735" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="150" height="150" src="https://halalinaja.com/wp-content/uploads/2025/02/chip-atm-undangan.webp" class="attachment-full size-full wp-image-27246" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-62167157 elementor-align-right elementor-widget elementor-widget-wdk-copy" data-id="62167157" data-element_type="widget" data-widget_type="wdk-copy.default">
				<div class="elementor-widget-container">
							
		<div class="elementor-image img"></div>

		<div class="head-title">Fenica Thesa Andani Putri</div>
		<div class="elementor-button-wrapper">
						<div class="copy-content spancontent">12345678900</div>
				
			<a style="cursor:pointer;" onclick="copyText(this)" data-message="Berhasil disalin" class="elementor-button" role="button">
				
		<div class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="far fa-copy"></i>			</span>
						<span class="elementor-button-text">Salin</span>
		</div>
					</a>
			
		</div>

		<style type="text/css">
			.spancontent {
				padding-bottom: 20px;
			}
			.copy-content {
				color: #6EC1E4;
				text-align: center;
			}
			.head-title {
				color: #6EC1E4;
				text-align: center;
			}
		</style>

		<script>
		function copyText(el) {
		    var content = jQuery(el).siblings('div.copy-content').html()
		    var temp = jQuery("<textarea>");
		    jQuery("body").append(temp);
		    temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
		    document.execCommand("copy");
		    temp.remove();
		    var text = jQuery(el).html()
		    jQuery(el).html(jQuery(el).data('message'))
		    var counter = 0;
		    var interval = setInterval(function() {
		        counter++;
		        if (counter == 1) {
		            jQuery(el).html(text)
		        }
		    }, 500);
		}

		</script>

						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-4cce190 showclick3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="48325" data-id="4cce190" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-69f240ae elementor-invisible" data-eae-slider="32020" data-id="69f240ae" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-d7a9f5 elementor-view-default elementor-widget elementor-widget-icon" data-id="d7a9f5" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
							<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fas fa-gift"></i>			</div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2d37367c elementor-invisible elementor-widget elementor-widget-heading" data-id="2d37367c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Ricky &amp; Fenica</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-7b24d3b8 elementor-align-center elementor-widget elementor-widget-wdk-copy" data-id="7b24d3b8" data-element_type="widget" data-widget_type="wdk-copy.default">
				<div class="elementor-widget-container">
							
		<div class="elementor-image img"></div>

		<div class="head-title">Jl. Lorem Ipsum Gg 2 No.02, Jakarta</div>
		<div class="elementor-button-wrapper">
						<div class="copy-content spancontent" style="display: none;">Jl.Lorem Ipsum Gg 2 No.02, Jakarta</div>
				
			<a style="cursor:pointer;" onclick="copyText(this)" data-message="Berhasil disalin" class="elementor-button" role="button">
				
		<div class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="far fa-copy"></i>			</span>
						<span class="elementor-button-text">Salin</span>
		</div>
					</a>
			
		</div>

		<style type="text/css">
			.spancontent {
				padding-bottom: 20px;
			}
			.copy-content {
				color: #6EC1E4;
				text-align: center;
			}
			.head-title {
				color: #6EC1E4;
				text-align: center;
			}
		</style>

		<script>
		function copyText(el) {
		    var content = jQuery(el).siblings('div.copy-content').html()
		    var temp = jQuery("<textarea>");
		    jQuery("body").append(temp);
		    temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
		    document.execCommand("copy");
		    temp.remove();
		    var text = jQuery(el).html()
		    jQuery(el).html(jQuery(el).data('message'))
		    var counter = 0;
		    var interval = setInterval(function() {
		        counter++;
		        if (counter == 1) {
		            jQuery(el).html(text)
		        }
		    }, 500);
		}

		</script>

						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-fa94a68 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-eae-slider="37985" data-id="fa94a68" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-33a67c5c" data-eae-slider="8578" data-id="33a67c5c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7be6869 elementor-widget elementor-widget-spacer" data-id="7be6869" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-40fb2742 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-eae-slider="2703" data-id="40fb2742" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7e0e047b" data-eae-slider="40689" data-id="7e0e047b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-5250fe4d elementor-widget elementor-widget-spacer" data-id="5250fe4d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-3679071b elementor-widget elementor-widget-spacer" data-id="3679071b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-48439d0 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="48439d0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img fetchpriority="high" decoding="async" width="533" height="800" src="https://halalinaja.com/wp-content/uploads/2025/02/LX2-31-e1652210062968-1.webp" class="attachment-full size-full wp-image-27277" alt="" />															</div>
				</div>
				<div class="elementor-element elementor-element-472bd7c8 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="472bd7c8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Merupakan kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/I dapat hadir di acara pernikahan kami. Atas Do’a dan kehadirannya kami ucapkan terimakasih.</p>				</div>
				</div>
				<div class="elementor-element elementor-element-4fdc1c35 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="4fdc1c35" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Wassalamu’alaikum Wr. Wb</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-7e0dcae9 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="7e0dcae9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Kami Yang Berbahagia,</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-1f986df9 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="1f986df9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Ricky &amp; Fenica</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-60ca3ac2 elementor-widget elementor-widget-spacer" data-id="60ca3ac2" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-36228c2a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-eae-slider="40190" data-id="36228c2a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7342e3e6" data-eae-slider="9223" data-id="7342e3e6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1f8fc942 elementor-widget elementor-widget-spacer" data-id="1f8fc942" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-37ca51c4 elementor-widget elementor-widget-spacer" data-id="37ca51c4" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				</div>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-5bbbb6d elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-eae-slider="19355" data-id="5bbbb6d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6fa77285" data-eae-slider="97096" data-id="6fa77285" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c31b1fa" data-eae-slider="4777" data-id="3c31b1fa" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e04cfaf elementor-widget elementor-widget-html" data-id="e04cfaf" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<script>
window.onbeforeunload=function(){
  window.scrollTo(0,0)
};
disableScrolling();
document.body.style.overflowY="hidden";
document.body.style.heigth="100vh";
document.getElementById("tombol-buka").onclick=function(){
  myFunction()
};
function myFunction(){
  document.body.style.overflowY="unset";
  document.getElementById("tombol-buka");
  enableScrolling();
  playAudio()
}
function disableScrolling(){
  	var x=window.scrollX;
	var y=window.scrollY;
	window.onscroll=function(){
  	window.scrollTo(x,y)
  }
}
function enableScrolling(){
  window.onscroll=function(){
  }
}
function playAudio(){
  var isYT = false;
  if(document.body.contains(document.getElementById("song"))) {
    document.getElementById("song").play();
    isYT = false;
  } else {
    isYT = true;
    player.playVideo();
  }
}
</script>				</div>
				</div>
					</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-237f5fae" data-eae-slider="7115" data-id="237f5fae" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5d5b2f2 elementor-view-stacked elementor-widget__width-auto elementor-fixed elementor-shape-circle elementor-widget elementor-widget-wdk-audio" data-id="5d5b2f2" data-element_type="widget" data-settings="{&quot;loop&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="wdk-audio.default">
				<div class="elementor-widget-container">
								<script>
				var settingAutoplay = 'yes';
				window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
			</script>

			<div id="audio-container" class="audio-box">

				

				<audio id="song" loop>
			<source src="https://assets.weddingsaas.id/audio/Rey-Mbayang-Di-Sepertiga-Malam.mp3"
			type="audio/mp3">
		</audio>  
			

					
			<div class="elementor-icon-wrapper" id="unmute-sound" style="display: none;">
				<div class="elementor-icon">
				<i aria-hidden="true" class="fa fa-play-circle"></i>				</div>
			</div> 

			<div class="elementor-icon-wrapper" id="mute-sound">
				<div class="elementor-icon">
				<i aria-hidden="true" class="fa fa-stop-circle"></i>				</div>
			</div>
			
		</div>
		
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				</div>
		<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/weddingsaas-wp\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
			<script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
			<script id="wdk_js_script-js-extra">
var WDK_WP = {"ajaxurl":"https:\/\/cahayagrafika.my.id\/wp-admin\/admin-ajax.php","lfNonce":"0d0b6aa597","jpages":"true","jPagesNum":"10","textCounter":"true","textCounterNum":"500","widthWrap":"","autoLoad":"true","thanksComment":"Thanks for your wishes!","thanksReplyComment":"Thanks for answering the comment!","duplicateComment":"You might have left one of the fields blank, or duplicate comments","accept":"Accept","cancel":"Cancel","reply":"Reply","textWriteComment":"Ucapan","classPopularComment":"wdk-popular-comment","textToDisplay":"Text to display","textCharacteresMin":"2 characters minimum","textNavNext":"Next","textNavPrev":"Previous","textMsgDeleteComment":"Do you want delete this comment?","textLoadMore":"Load more"};
</script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/includes/wishes//js/script.js?ver=1.0.0" id="wdk_js_script-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/includes/wishes//js/libs/jquery.jPages.min.js?ver=0.7" id="wdk_jPages-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/includes/wishes//js/libs/jquery.textareaCounter.js?ver=2.0" id="wdk_textCounter-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/includes/wishes//js/libs/jquery.placeholder.min.js?ver=2.0.7" id="wdk_placeholder-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/includes/wishes//js/libs/autosize.min.js?ver=1.14" id="wdk_autosize-js"></script>
<script id="eae-main-js-extra">
var eae = {"ajaxurl":"https:\/\/cahayagrafika.my.id\/wp-admin\/admin-ajax.php","current_url":"aHR0cHM6Ly9jYWhheWFncmFmaWthLm15LmlkL3RlbWEvYXJ0LTA0Lw==","nonce":"856b4f3f7c","plugin_url":"https:\/\/halalinaja.com\/wp-content\/plugins\/addon-elements-for-elementor-page-builder\/"};
var eae_editor = {"plugin_url":"https:\/\/halalinaja.com\/wp-content\/plugins\/addon-elements-for-elementor-page-builder\/"};
</script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/js/eae.min.js?ver=1.14.1" id="eae-main-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/build/index.min.js?ver=1.14.1" id="eae-index-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=1.0" id="font-awesome-4-shim-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/js/animated-main.min.js?ver=1.0" id="animated-main-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/js/particles.min.js?ver=2.0.0" id="eae-particles-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/lib/magnific.min.js?ver=1.1.0" id="wts-magnific-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/lib/vegas/vegas.min.js?ver=2.4.0" id="vegas-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.30.2" id="elementor-webpack-runtime-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.30.2" id="elementor-frontend-modules-js"></script>
<script src="https://cahayagrafika.my.id/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Bagikan di Facebook","shareOnTwitter":"Bagikan di Twitter","pinIt":"Buat Pin","download":"Unduh","downloadImage":"Unduh gambar","fullscreen":"Layar Penuh","zoom":"Perbesar","share":"Bagikan","playVideo":"Putar Video","previous":"Sebelumnya","next":"Selanjutnya","close":"Tutup","a11yCarouselPrevSlideMessage":"Slide sebelumnya","a11yCarouselNextSlideMessage":"Slide selanjutnya","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Layar lebar","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.30.2","is_static":false,"experimentalFeatures":{"additional_custom_breakpoints":true,"container":true,"theme_builder_v2":true,"nested-elements":true,"home_screen":true,"global_classes_should_enforce_capabilities":true,"cloud-library":true,"e_opt_in_v4_page":true},"urls":{"assets":"https:\/\/halalinaja.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/cahayagrafika.my.id\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/halalinaja.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"b7f4703702"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":27746,"title":"Art%2004%20-%20Halalin%20Aja","excerpt":"","featuredImage":false}};
</script>
<script src="https://halalinaja.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.30.2" id="elementor-frontend-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.29.1" id="e-sticky-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5" id="swiper-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0" id="elementor-gallery-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.29.1" id="elementor-pro-webpack-runtime-js"></script>
<script src="https://cahayagrafika.my.id/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script src="https://cahayagrafika.my.id/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/cahayagrafika.my.id\/wp-admin\/admin-ajax.php","nonce":"494ee21554","urls":{"assets":"https:\/\/halalinaja.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/cahayagrafika.my.id\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":false},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"id_ID","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/halalinaja.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src="https://halalinaja.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.29.1" id="elementor-pro-frontend-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.29.1" id="pro-elements-handlers-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/public/js/modules/bdt-uikit.js?ver=3.15.1" id="bdt-uikit-js"></script>
<script src="https://halalinaja.com/wp-content/plugins/weddingkit-pro/public/js/script.js?ver=1.0.1" id="weddingpro-script-js"></script>
	</body>
</html>
