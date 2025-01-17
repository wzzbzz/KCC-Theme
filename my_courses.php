<?php 
/* Template Name: My Courses */
get_header('header');
?>
<style type="text/css">
	.bor{
		border:1px solid red;
	}
	.ast-container{
		width: 100%;
	}
	.section-title h2{
		font-family: 'poppins-semibold';
		font-weight: 600;
		font-size: 35px;
		display: inline-block;
		position: relative;
	}
	.section-title h2:after{
		content: "";
		width: 30px;
		height: 2px;
		background: #F9671D;
		border: 2px solid #F9671D;
		position: absolute;
		top: 20px;
		right: 10px;
	}
	.section-title h2:before{
		left: 10px;
		position: absolute;
		top: 20px;
		content: "";
		width: 30px;
		height: 2px;
		background: #F9671D;
		border: 2px solid #F9671D;
	}
	.section-title p{
		font-family: 'Poppins-Regular';
		font-size: 16px;
		margin-bottom: 0px;
	}
	.course-section{
		width: 100%;
	}

</style>

<div id="primary" <?php astra_primary_class(); ?>>
	<?php
		the_content();
	?>
</div>
<?php get_footer(); ?>
