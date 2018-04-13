
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php get_stylesheet_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono:400,700" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="title">This is a blank WordPress site that spits out JSON for Headless CMS goodness.</h1>

        <h3 class="subtitle">Here are some endPoints you might like:</h3>

		<?php
			$url = site_url() . '/wp-json/wp/v2/';
			$urlACF = site_url() . '/wp-json/acf/v3/'
		?>
        <ul class="list">
            <li>
                <a href="<?= $url . 'settings';  ?>" class="link">Site settings</a> – get site settings (site title, description, etc.) <em>NOTE: Need Authentication to View.</em>
            </li>
            <li>
                <a href="<?= $url . 'pages';  ?>" class="link">Pages</a> – get pages
            </li>
            <li>
                <a href="<?= $url . 'posts';  ?>" class="link">Posts</a> – get all the posts
            </li>
            <li>
                <a href="<?= $url . 'types';  ?>" class="link">Post Types</a> – get all the post types
            </li>
			<li>
                <a href="<?= $urlACF . 'posts';  ?>" class="link">Advanced Custom Fields: Posts</a> – get custom field types for pages
            </li>
			<li>
                <a href="<?= $urlACF . 'pages';  ?>" class="link">Advanced Custom Fields: Pages</a> – get custom field types for pages
            </li>
        </ul>
        <div class="credit">
        Theme by <a href="https://twitter.com/ARasheedPhoto" rel="noopener" target="_blank">Adam Rasheed</a>
        </div>
    </div>
	<?php // include('wp-logic.php'); ?>
</body>
