<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>{{TITLE}}</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css"/>
	<script type="text/javascript" src="../public/js/jquery-1.4.3.min.js"></script>
	{*<script type="text/javascript" src="../public/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>*}
	{*<script type="text/javascript" src="../public/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>*}
	{*<link rel="stylesheet" type="text/css" href="../public/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />*}
	{*<script type="text/javascript">*}
        {*$(document).ready(function(){*}
            {*$("a.photo").fancybox({*}
                {*transitionIn: 'elastic',*}
                {*transitionOut: 'elastic',*}
                {*speedIn: 500,*}
                {*speedOut: 500,*}
                {*hideOnOverlayClick: false,*}
                {*titlePosition: 'over'*}
            {*});	}); *}
	{*</script>*}

</head>

<body>
<div id="main">
	<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">
		{{GALLERY}}
	</div>
</div>
<footer>{{YEAR}}</footer>
</body>
</html>
