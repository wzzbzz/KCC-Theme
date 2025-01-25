<?php
 include(get_template_directory() . '/header-new.php');
if (is_user_logged_in()) {
	global $wpdb;
	$cur_user_id = get_current_user_id();  // Get the current user ID
	$post_id = get_the_ID();
	$event_group_type = get_post_meta($post_id, 'rf_radio_value', true);
	$event_group_id = get_post_meta($post_id, 'rf_check', true);
	$event_data = $wpdb->get_row(
		$wpdb->prepare(
			"SELECT * FROM events_calendar WHERE post_id = %s",
			$post_id
		)
	);
}

/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if (!defined('ABSPATH')) {
	die('-1');
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();
$event_id = Tribe__Events__Main::postIdHelper(get_the_ID());
/**
 * Allows filtering of the event ID.
 *
 * @since 6.0.1
 *
 * @param int $event_id
 */
$event_id = apply_filters('tec_events_single_event_id', $event_id);

/**
 * Allows filtering of the single event template title classes.
 *
 * @since 5.8.0
 *
 * @param array  $title_classes List of classes to create the class string from.
 * @param string $event_id The ID of the displayed event.
 */
$title_classes = apply_filters('tribe_events_single_event_title_classes', ['tribe-events-single-event-title'], $event_id);
$title_classes = implode(' ', tribe_get_classes($title_classes));

/**
 * Allows filtering of the single event template title before HTML.
 *
 * @since 5.8.0
 *
 * @param string $before HTML string to display before the title text.
 * @param string $event_id The ID of the displayed event.
 */
$before = apply_filters('tribe_events_single_event_title_html_before', '<h1 class="' . $title_classes . '">', $event_id);

/**
 * Allows filtering of the single event template title after HTML.
 *
 * @since 5.8.0
 *
 * @param string $after HTML string to display after the title text.
 * @param string $event_id The ID of the displayed event.
 */
$after = apply_filters('tribe_events_single_event_title_html_after', '</h1>', $event_id);

/**
 * Allows filtering of the single event template title HTML.
 *
 * @since 5.8.0
 *
 * @param string $after HTML string to display. Return an empty string to not display the title.
 * @param string $event_id The ID of the displayed event.
 */
$title = apply_filters('tribe_events_single_event_title_html', the_title($before, $after, false), $event_id);
$cost = tribe_get_formatted_cost($event_id);

?>
<style>
	.tribe-events-single {
		margin-top: 35px;
	}

	.single-event {
		border: 2px solid black;
		padding: 20px;
		width: 100%;
		margin: 20px auto;
		font-family: Arial, sans-serif;
	}

	.event-header {
		text-align: left;
	}

	.event-title {
		font-size: 24px;
		font-weight: bold;
	}

	.event-details {
		margin-top: 20px;
	}

	.event-info {
		display: flex;
		flex-wrap: wrap;
		gap: 10px 0px;
	}

	.event-date-time {
		font-size: 16px;
		display: flex;
		align-items: center;
	}

	.event-date-time i {
		width: 35px;
	}

	.event-date-time {
		width: 100%;
	}

	.event-description {
		margin-top: 20px;
		font-size: 14px;
		border-top: 2px solid black;
		padding-top: 10px;
		display: flex;
	}

	.event-description i.fa {
		width: 35px;
		margin-top: 5px;
	}

	.event-date-time p,
	.event-description p {
		width: calc(100% - 35px);
	}

	.add-to-calendar {
		margin-top: 10px;
		display: flex;
		justify-content: right;
		border-top: 2px solid black;
	}

	.single-tribe_events .canledar-btn-wrapper .tribe-events-c-subscribe-dropdown {
		margin: 1.5rem 0 0 0 !important;
	}

	.event-date-time i,
	.event-description i {
		font-size: 20px;
	}

	.event-date-time i.fa-users {
		font-size: 16px;
	}
	.navbar {
		display: none !important;
	}
</style>

<div class="row justify-content-end">
	<?php include(get_template_directory() . '/user_topbar.php'); ?>
</div>
<div id="tribe-events-content" class="tribe-events-single">

	<p class="tribe-events-back">
		<?php if ($event_group_type == 'all') { ?>
			<a href="<?php echo esc_url(tribe_get_events_link()); ?>">
				<?php printf('&laquo; ' . esc_html_x('All %s', '%s Events plural label', 'the-events-calendar'), $events_label_plural); ?></a> <?php
		} else { ?>
			<a href="<?php echo esc_url(get_permalink($event_group_id)); ?>">
				<?php echo '&laquo; All Group Events' ?></a>
		<?php }
		?>
	</p>

	<!-- Notices -->
	<?php //tribe_the_notices() ?>

	<?php //echo $title; ?>

	<!-- <div class="tribe-events-schedule tribe-clearfix">
		<?php //echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
		<?php //if ( ! empty( $cost ) ) : ?>
			<span class="tribe-events-cost"><?php //echo esc_html( $cost ) ?></span>
		<?php //endif; ?>
	</div> -->

	<!-- Event header -->
	<div id="tribe-events-header" <?php //tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<!-- <nav class="tribe-events-nav-pagination" aria-label="<?php //printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php //tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php //tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul> -->
		<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-header -->

	<?php while (have_posts()):
		the_post(); ?>
		<div class="single-event">
			<div class="event-header">
				<!-- Event Title (A) -->
				<h2 class="event-title">
					<span class="mr-2">
						<i class="fa fa-calendar-o" aria-hidden="true"></i>
					</span>
					<?php the_title(); ?>
				</h2>
			</div>

			<div class="event-details">
				<div class="event-info">
					<!-- Event Time -->
					<div class="event-date-time">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<p> <?php echo tribe_get_start_date(null, false, 'j F Y'); ?>, <span class="ml-3">
								<?php echo tribe_get_start_time(); ?> </span> </p>
					</div>
					<!-- Event Address (C) -->
					<div class="event-date-time">
						<i class="fa fa-map-marker"></i>
						<p> <?php echo $event_data->location; ?> </p>
					</div>

					<!-- Event Organizer (E) -->
					<div class="event-date-time">
						<i class="fa fa-users"></i>
						<p> <?php echo $event_data->organization ?> </p>
					</div>
				</div>

				<!-- Event Description (F) -->
				<div class="event-description">
					<i class="fa fa-file-text-o" aria-hidden="true"></i>
					<?php the_content(); ?>
				</div>

				<!-- Add to Calendar Button -->
				<div class="add-to-calendar canledar-btn-wrapper">
					<?php do_action('tribe_events_single_event_after_the_content') ?>
				</div>
			</div>
		</div>
		<div id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>>
			<!-- Event featured image, but exclude link -->
			<?php //echo tribe_event_featured_image( $event_id, 'full', false ); ?>

			<!-- Event content -->
			<?php //do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<!-- <div class="tribe-events-single-event-description tribe-events-content">
				<?php //the_content(); ?>
			</div> -->
			<!-- .tribe-events-single-event-description -->
			<?php //do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php //do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php //tribe_get_template_part( 'modules/meta' ); ?>
			<?php //do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
		<?php //if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<!-- <nav class="tribe-events-nav-pagination" aria-label="<?php //printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php //tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php //tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul> -->
		<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->
<script src="<?= get_template_directory_uri();?>/assets/js/popper.min.js"></script>
 <script src="<?= get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>