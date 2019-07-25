 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="content-language" content="en">

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
<!-- Beginning header -->
    <div>
<!--    <a href='<?php echo base_url('main/staticpages')?>'>staticpages</a> | 
        <a href='<?php echo base_url('main/aboutus')?>'>About Us</a> |
        <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
        <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
        <a href='<?php echo site_url('examples/products_management')?>'>Products</a> | 
        <a href='<?php echo site_url('examples/film_management')?>'>Films</a>
-->
        <a href='/medshow_admin_CI_3.0.4/index.php/main/staticpages'>SSstaticpages</a> | 
        <a href='/medshow_admin_CI_3.0.4/index.php/main/aboutus'>About Us</a> |
        <a href='/medshow_admin_CI_3.0.4/index.php/examples/customers_management'>Customers</a> |
        <a href='/medshow_admin_CI_3.0.4/index.php/examples/orders_management'>Orders</a> |
        <a href='/medshow_admin_CI_3.0.4/index.php/examples/products_management'>Products</a> | 
        <a href='/medshow_admin_CI_3.0.4/index.php/examples/film_management''>Films</a>
		
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div>Footer</div>
<?php echo site_url(); ?><br />
<?php echo base_url(); ?> 

<!-- End of Footer -->
</body>
</html>