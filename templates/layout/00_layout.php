<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>          <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>          <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title><?= $page['title']; ?> <?php if ($page['title'] != $params['title']) { echo "- " . $params['title']; } ?></title>
    <meta name="description" content="<?= $params['tagline']; ?>" />
    <meta name="author" content="<?= $params['author']; ?>">
    <meta charset="UTF-8">
    <link rel="icon" href="<?= $params['theme']['favicon']; ?>" type="image/x-icon">
    <!-- Mobile -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <?php foreach ($params['theme']['fonts'] as $font) {
        echo "<link href='$font' rel='stylesheet' type='text/css'>";
    } ?>

    <!-- CSS -->
    <?php foreach ($params['theme']['css'] as $css) {
        echo "<link href='$css' rel='stylesheet' type='text/css'>";
    } ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="google-site-verification" content="GlKlGkbxuWQ3LNWx0akLYkqoWLrtF5b0ug9UpGadSuc" />
    <meta name="google-site-verification" content="vL1Qo6JWKZBq6fzVJLJhbyqHya1TBhZd78OJDA-Qe1s" />
</head>
<body class="<?= $params['html']['float'] ? 'with-float' : ''; ?>">
    <?= $this->section('content'); ?>

    <?php
    if ($params['html']['google_analytics']) {
        $this->insert('theme::partials/google_analytics', ['analytics' => $params['html']['google_analytics'], 'host' => array_key_exists('host', $params) ? $params['host'] : '']);
    }
    if ($params['html']['piwik_analytics']) {
        $this->insert('theme::partials/piwik_analytics', ['url' => $params['html']['piwik_analytics'], 'id' => $params['html']['piwik_analytics_id']]);
    }
    ?>


    <!-- jQuery -->
    <?= '<script src="' . $base_url . 'themes/daux/js/jquery-1.11.3.min.js' . '"></script>' ?>

    <!-- hightlight.js -->
    <script src="<?= $base_url; ?>themes/daux/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- JS -->
    <?php foreach ($params['theme']['js'] as $js) {
        echo '<script src="' . $js . '"></script>';
    } ?>

    <script src="<?= $base_url; ?>themes/daux/js/daux.js"></script>
	<script type="text/javascript">
	 var _gaq = _gaq || [];
	 _gaq.push(['_setAccount', 'UA-40057783-1']);
	 _gaq.push(['_setDomainName', 'udoo.org']);
	 _gaq.push(['_setAllowLinker', true]);
	 _gaq.push(['_trackPageview']);
	 (function() {
	   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	   ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	 })();
	</script>
</body>
</html>
