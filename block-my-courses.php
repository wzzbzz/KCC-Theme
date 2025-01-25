<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap');
	.section-title{
		text-align: center;
		margin-top: 60px;
		margin-bottom: 100px;
	}
	.section-title h2{
		font-weight: 600;
		font-size: 35px;
		display: inline-block;
		position: relative;
		margin-bottom: 10px;
	}
	.section-title h2:after{
		content: "";
    	width: 50px;
    	height: 2px;
    	background: #F9671D;
    	border: 2px solid #F9671D;
    	position: absolute;
    	top: 20px;
    	right: -70px;
	}
	.section-title h2:before{
		left: -70px;
		position: absolute;
		top: 20px;
		content: "";
		width: 50px;
		height: 2px;
		background: #F9671D;
		border: 2px solid #F9671D;
	}
	.section-title p{
		
		font-size: 16px;
		margin-bottom: 0px;
	}
	.bor{
		border: 1px solid red;
	}
	.course-wrapper{
		background: #fafafa;
		border-radius: 15px;
		padding: 10px 10px 10px 10px;
	}
	.course-wrapper .course-row{
		display: flex;
	}
	.course-wrapper{
		margin-bottom: 25px;
	}
	.course-wrapper:last-child{
		margin-bottom: 0px;
	}
	.course-wrapper .course-row .course-image{
		width: 32%;
		margin-right: 20px;
	}

	.course-wrapper .course-row .course-image img{
		width: 100%;
		border-radius: 9px;
	}

	.course-wrapper .course-row .course-content{
		position: relative;
		width: 100%;
	}

	.course-wrapper .course-row .course-image .course-content h3{
		font-size: 18px;
		color: #242424;
	}
	.course-wrapper .course-row .course-image .course-content p{
		font-size: 14px;
		color: #222222;
	}

	.course-wrapper .course-row .course-content .rating{
		position: absolute;
		right: 10px;
		top: 10px;
	}
	.course-wrapper .course-row .course-content .rating i{
		color: #FDC247;
		font-size:19px;
	}

	.course-wrapper .course-row .course-content .course-meta{
		display: flex;
	}
	.course-wrapper .course-row .course-content .course-meta ul{
		padding:0px 0px 0px 0px;
		margin:0px 0px 0px 0px;
	}
	.course-wrapper .course-row .course-content .course-meta ul li{
		list-style: none;
		display: inline-block;
		padding:0px 20px 10px 0px;
		margin:0px 0px 0px 0px;
		font-size: 12px;
		color: #71706F;
	}
	.course-wrapper .course-row .course-content .course-meta ul li:last-child{
		list-style: disc;
	}
	.course-wrapper .course-row .course-content .course-meta span{
		color: #71706F;
		font-size: 12px;
	}
	.course-wrapper .course-row .custom-btn{
		display: flex;
		justify-content: end;
		margin-top: -30px;
	}
	.course-wrapper .course-row .custom-btn .btn-primary{
		background: #F96703;
		padding: 20px 60px;
		box-shadow: 0px 10px 20px #00000029;
		border-radius: 9px;
		opacity: 1;
		height: 63px;
		width: 224px;
	}
	.tab-section .tab {
		text-align: center;
		margin: 0px 20px 50px 20px;
  		overflow: hidden;

  	}

	.tab-section .tab button.active{
		background: #F96703;
		color: #fff;
		cursor: pointer;
		transition: 0.3s;
		font-size: 16px;
		box-shadow: 0px 10px 20px #00000029;
		border-radius: 9px;
		opacity: 1;
		padding: 20px 60px;
	}
	.tab-section .tab button{
		background: unset;
		color: #000;
		padding: 20px 60px;
		transition: 0.3s;
		font-size: 16px;
	}
	/* Style the tab content */
	.tab-section .tabcontent {
  		display: none;
	}
	.course-result{
		padding-bottom: 20px;
	}
</style>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<div class="container main-pages-training">
	<div class="section-title">
		<h2>Courses List</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
	</div>
	<div class="tab-section">
		<div class="tab">
			<?php
			$tag_ID = "";
			$tag_ID_C = "";
			if(isset($_GET['tag_ID']) && @$_GET['type']=="cat"){
				$tag_ID = $_GET['tag_ID'];
			}

			if(isset($_GET['tag_ID']) && @$_GET['type']=="course"){
				$tag_ID_C = $_GET['tag_ID'];
			}

			$args = array(
				'taxonomy' => 'ld_course_category',
				'orderby' => 'name',
				'order'   => 'ASC',
				'parent' => $tag_ID
			);
			$cats = get_categories($args);
			//echo "<pre>";print_r($cats);echo "</pre>";
			$j=1;

			if(isset($_GET['type']) && $tag_ID_C=="47"){

				$args11 = array(
				'taxonomy' => 'ld_course_category',
				'orderby' => 'name',
				'order'   => 'ASC',
				'parent' => $tag_ID_C
			);
			$cats2 = get_categories($args11);


				   foreach($cats2 as $cat) {
				?>
				<button class="tablinks <?php if($j===1){echo 'active';} ?>" onclick="openCity(event, 'tab-<?php echo $cat->term_id?>')"><?php echo $cat->name; ?></button>
				     
				<?php
				$j++;
				   }
				 }
?>
			
		

		</div>
		<style type="text/css">
			.grid-container {
  display: grid;
  grid-template-columns: auto auto auto; 
  padding: 10px;
}
.grid-item { 
 
  padding: 20px;
  font-size: 18px;
  text-align: center;
      box-shadow: 2px 2px 10px 0px #707070;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    color: #222222;
    margin: 10px 10px 10px 10px;
    --e-column-margin-right: 10px;
    --e-column-margin-left: 10px;
}

		</style>
	
	 <?php
	 ///echo "<pre>"; print_r($_GET); echo "</pre>"; 
	 

	 if(isset($_GET['type']) && $_GET['type']=="cat"){
	 	echo '<div class="grid-container">';
	 	foreach($cats as $cat) {
	 			$thumbnail_id = get_term_meta( $cat->term_id,'term_image', true ); 	
         $image = wp_get_attachment_url( $thumbnail_id );
				echo '<div class="grid-item"><div class="elementor-widget-container course-content"><img class="course-image" src="'.$image.'"></div>
				<div class="elementor-element elementor-element-4d75bd9 elementor-widget elementor-widget-heading" data-id="4d75bd9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span style="color: #000"><p>'.$cat->name.'<p></span>		</div>
				</div>
				<div class="elementor-button-wrapper">
			<a href="' . site_url() . 'course/?tag_ID='.$cat->term_id.'&amp;type=course" class="elementor-button-link elementor-button elementor-size-md btn btn-primary" style="background:#F96703">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">View Courses</span>
		</span>
					</a>
		</div></div>';
				$j++;
				   }
				   echo '<div>';

	 }else{

	 	$i = 1;

	 	if($tag_ID_C==47){

	 		foreach($cats2 as $cat1) { 

	  	$args=array(
									'posts_per_page' => 50,    
									'post_type' => 'sfwd-courses',
									'tax_query' => array(
									    array(
									        'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 
									        'field'    => 'id',
									        'terms'    => $tag_ID_C,
									    ),
									   ),
									 );

$ums = new WP_Query( $args );


	 ?>

		<div id="tab-<?php echo $cat1->term_id?>" class="tabcontent" style="<?php if($i===1){echo 'display:block';} ?>">
			<div class="course-result">
		  		<span><?php echo $ums->found_posts;?> Result</span>
		  	</div>
		  	<?php


				// The Loop
				if ( $ums->have_posts() ) {

				while ( $ums->have_posts() ) {
				        $ums->the_post();
				?>
						 	<div class="course-wrapper" >

								<div class="course-row">
									<div class="course-image">
									<?php the_post_thumbnail(); ?>
									</div>
									<div class="course-content">
										<h3><?php the_title(); ?></h3>
										<div class="rating">
											<i class="fas fa-star"></i> <b>0</b> <span>(0 Reviews)</span>
										</div>
										<div class="course-meta">
											<ul>
												<li><?php echo get_field('course_hour',get_the_ID()); ?> Total hour</li>
												<li>All Levels</li>
											</ul>
										</div>
									<?php echo get_field('course_description',get_the_ID()); ?>
										<div class="custom-btn">
											<a href="<?php the_permalink(); ?>" class="btn btn-primary" style="color:#fff !important;">Get Started</a>	
										</div>
									</div>
								</div>
							</div>
						<?php
					} 
				}
       wp_reset_postdata();?>
		</div>
	<?php  $i++;
	 } 

	 	}else{
	  //foreach($cats as $cat1) { 
	 		if(!empty($tag_ID_C)){
	 			$args=array(
									'posts_per_page' => 50,    
									'post_type' => 'sfwd-courses',
									'tax_query' => array(
									    array(
									        'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 
									        'field'    => 'id',
									        'terms'    => $tag_ID_C,
									    ),
									   ),
									 );

	 		}else{
	 			$args=array(
									'posts_per_page' => 50,    
									'post_type' => 'sfwd-courses'
									 );

	 		}
	  	
$ums = new WP_Query( $args );


	 ?>

		<div id="tab-<?php echo $cat1->term_id?>" class="tabcontent" style="<?php if($i===1){echo 'display:block';} ?>">
			<div class="course-result">
		  		<span><?php echo $ums->found_posts;?> Result</span>
		  	</div>
		  	<?php


				// The Loop
				if ( $ums->have_posts() ) {

				while ( $ums->have_posts() ) {
				        $ums->the_post();
				?>
						 	<div class="course-wrapper" >

								<div class="course-row">
									<div class="course-image">
									<?php the_post_thumbnail(); ?>
									</div>
									<div class="course-content">
										<h3><?php the_title(); ?></h3>
										<div class="rating">
											<i class="fas fa-star"></i> <b>0</b> <span>(0 Reviews)</span>
										</div>
										<div class="course-meta">
											<ul>
												<li><?php echo get_field('course_hour',get_the_ID()); ?> Total hour</li>
												<li>All Levels</li>
											</ul>
										</div>
									<?php echo get_field('course_description',get_the_ID()); ?>
										<div class="custom-btn">
											<a href="<?php the_permalink(); ?>" class="btn btn-primary" style="color:#fff !important;">Get Started</a>	
										</div>
									</div>
								</div>
							</div>
						<?php
					} 
				}
       wp_reset_postdata();?>
		</div>
	<?php  $i++;
	// } 
}

}

?>

	</div>


</div>