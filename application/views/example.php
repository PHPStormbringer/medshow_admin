<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
<!--
	    <a href='<?php echo site_url('main/staticpages')?>'>SSstaticpages</a> | 
        <a href='<?php echo site_url('main/aboutus')?>'>About Us</a> |
		<a href='<?php echo site_url('main/angels')?>'>Angels</a> |
		<a href='<?php echo site_url('main/people')?>'>People</a> |
		<a href='<?php echo site_url('main/contact')?>'>Contact Us</a> |
		<a href='<?php echo site_url('main/productions')?>'>Productions</a> | 
-->
        <a href='/medshow_admin_CI_3.0.4/index.php/main/staticpages'>SSstaticpages</a> | 
        <a href='/medshow_admin_CI_3.0.4/index.php/main/aboutus'>About Us</a> |
        <a href='/medshow_admin_CI_3.0.4/index.php/main/people'>People</a> |
        <a href='/medshow_admin_CI_3.0.4/index.php/main/contact'>Contact</a> |
        <a href='/medshow_admin_CI_3.0.4/index.php/main/productions'>Productions</a> 
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
