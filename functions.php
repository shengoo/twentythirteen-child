<?php


//remove devicepx from jetpack
function remove_devicepx() {
    wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'remove_devicepx' );


function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon48.ico" />' . "\n";
    echo '<link rel="icon" href="/favicon48.ico" type="image/x-icon">' . "\n";
    echo '<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png" />' . "\n";
}
// add_action( 'wp_head', 'favicon_link' );



//add pre button

//add_action('admin_print_footer_scripts','eg_quicktags');

function eg_quicktags() {

?>

<script type="text/javascript" charset="utf-8">

if(typeof QTags !== "undefined"){

  QTags.addButton( 'eg_pre', 'pre','<pre>', '</pre>', 'q' );

}

</script>

<?php

}





 //add highlightjs

function add_highlightjs(){
?>
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php
}

add_action("wp_footer","add_highlightjs");





//add baidu tongji

function add_bdhm(){
?>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?54020dd3876a331575215790f15adf1a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


<?php
}

add_action("wp_footer","add_bdhm");


// add baidu zhanzhang 

function baidu_site_verification() {

    echo '<meta name="baidu-site-verification" content="ifCtQPpS2J" />' . "\n";

}
add_action( 'wp_head', 'baidu_site_verification' );



//add ga

function add_ga(){
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27228507-1', 'auto');
  ga('send', 'pageview');

</script>

<?php
}

add_action("wp_footer","add_ga");

// 腾讯统计
function add_ta(){
?>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=25092474" charset="UTF-8"></script>
<?php
}
add_action("wp_footer","add_ta");

// google adsense
function add_google_adsense(){
?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7178664821856375",
          enable_page_level_ads: true
     });
</script>
<?php
}
add_action( 'wp_head', 'add_google_adsense' );

// 激活链接管理功能
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

