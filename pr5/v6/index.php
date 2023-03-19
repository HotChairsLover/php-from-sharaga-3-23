<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Brushwood</a></h1>
			<div id="menu">
				<ul>
                    <?php
                    $links = [
                        "link1" => [
                            "link" => "#",
                            "accesskey" => "1",
                            "title" => "",
                            "text" => "Homepage"
                        ],
                        "link2" => [
                            "link" => "#",
                            "accesskey" => "2",
                            "title" => "",
                            "text" => "Our Clients"
                        ],
                        "link3" => [
                            "link" => "#",
                            "accesskey" => "3",
                            "title" => "",
                            "text" => "About Us"
                        ],
                        "link4" => [
                            "link" => "#",
                            "accesskey" => "4",
                            "title" => "",
                            "text" => "Careers"
                        ],
                        "link5" => [
                            "link" => "#",
                            "accesskey" => "5",
                            "title" => "",
                            "text" => "Contact Us"
                        ]
                    ];
                    foreach($links as $link){
                    ?>
                    <li><a href="<?=$link["link"]?>" accesskey="<?=$link["accesskey"]?>" title="<?=$link["title"]?>"><?=$link["text"]?></a></li>
                    <?php } ?>


				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h2>Welcome to our website</h2>
		</div>
		<p>This is <strong>Brushwood</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
	</div>
</div>
<div id="wrapper">
	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<?php
        $tbox = [
            "tbox1" => [
                "id" => "tbox1",
                "title" => "Maecenas luctus",
                "text" => "Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin eu wisi suscipit nulla suscipit interdum.",
                "link" => "#"
            ],
            "tbox2" => [
                "id" => "tbox2",
                "title" => "INTEGER GRAVIDA",
                "text" => "Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis velit ac mauris.",
                "link" => "#"
            ],
            "tbox3" => [
                "id" => "tbox3",
                "title" => "PRAESENT MAURIS",
                "text" => "Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit eleifend.",
                "link" => "#"
            ]
        ];
        foreach ($tbox as $box){
        ?>
        <div id="<?=$box["id"]?>">
            <div class="title">
                <h2><?=$box["title"]?></h2>
            </div>
            <p><?=$box["text"]?></p>
            <a href="<?=$box["link"]?>" class="button">Learn More</a>
        </div>
        <?php } ?>
		
	</div>
	<div id="portfolio" class="container">
        <?php
        $portfolios = [
            "column1" => [
                "class" => "column1",
                "link" => "#",
                "img" => "images/scr01.jpg",
                "title" => "Vestibulum venenatis",
                "text" => "Fermentum nibh augue praesent a lacus at urna congue rutrum.",
                "buttonLink" => "#"
            ],
            "column2" => [
                "class" => "column2",
                "link" => "#",
                "img" => "images/scr02.jpg",
                "title" => "Praesent scelerisque",
                "text" => "Vivamus fermentum nibh in augue praesent urna congue rutrum.",
                "buttonLink" => "#"
            ],
            "column3" => [
                "class" => "column3",
                "link" => "#",
                "img" => "images/scr03.jpg",
                "title" => "Donec dictum metus",
                "text" => "ivamus fermentum nibh in augue praesent urna congue rutrum.",
                "buttonLink" => "#"
            ],
            "column4" => [
                "class" => "column4",
                "link" => "#",
                "img" => "images/scr04.jpg",
                "title" => "Mauris vulputate dolor",
                "text" => "Rutrum fermentum nibh in augue praesent urna congue rutrum.",
                "buttonLink" => "#"
            ]
        ];
        foreach($portfolios as $portfolio){
        ?>
        <div class="<?=$portfolio["class"]?>">
            <div class="box">
                <a href="<?=$portfolio["link"]?>">
                    <img src="<?=$portfolio["img"]?>" alt="" class="image image-full"/>
                </a>
                <h3><?=$portfolio["title"]?></h3>
                <p><?=$portfolio["text"]?></p>
                <a href="<?=$portfolio["buttonLink"]?>" class="button button-small">Etiam posuere</a>
            </div>
        </div>
        <?php } ?>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
</div>
</body>
</html>
