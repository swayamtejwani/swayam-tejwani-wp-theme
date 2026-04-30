<?php
/**
 * Theme functions.
 *
 * @package Swayam_Tejwani
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ST_THEME_VERSION', '1.0.0' );
define( 'ST_THEME_SUBMISSIONS_TABLE', 'st_theme_submissions' );

/**
 * Enqueue copied static assets and CDN libraries used by the original static site.
 */
function st_theme_enqueue_assets() {
	$theme_uri = get_template_directory_uri();

	wp_enqueue_style(
		'st-google-inter',
		'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'st-material-symbols',
		'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'st-shared',
		$theme_uri . '/css/shared.css',
		array(),
		ST_THEME_VERSION
	);

	wp_add_inline_style(
		'st-shared',
		"body{font-family:'Inter',sans-serif}.text-display-lg{font-size:3.5rem;line-height:1.05;letter-spacing:-.02em;font-weight:900}.text-body-lg{font-size:1rem;line-height:1.7}.text-label-md{font-size:.875rem;letter-spacing:.1em;font-weight:500;text-transform:uppercase}"
	);

	wp_register_script(
		'st-tailwind',
		'https://cdn.tailwindcss.com?plugins=forms,container-queries',
		array(),
		null,
		false
	);

	wp_add_inline_script( 'st-tailwind', st_theme_tailwind_config(), 'before' );
	wp_enqueue_script( 'st-tailwind' );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
		'st-quote-popup',
		$theme_uri . '/js/quote-popup.js',
		array( 'jquery' ),
		ST_THEME_VERSION,
		true
	);

	wp_localize_script(
		'st-quote-popup',
		'stThemeForms',
		array(
			'ajaxUrl'     => esc_url_raw( admin_url( 'admin-post.php' ) ),
			'action'      => 'st_theme_submit_form',
			'nonce'       => wp_create_nonce( 'st_theme_form_submit' ),
			'thankYouUrl' => esc_url_raw( st_theme_get_thank_you_url() ),
			'sourceUrl'   => esc_url_raw( st_theme_current_url() ),
		)
	);

	wp_enqueue_script(
		'st-site-effects',
		$theme_uri . '/js/site-effects.js',
		array(),
		ST_THEME_VERSION,
		true
	);

	wp_enqueue_script(
		'st-testimonial-slider',
		$theme_uri . '/js/testimonial-slider.js',
		array(),
		ST_THEME_VERSION,
		true
	);

	wp_enqueue_script(
		'st-stats-counter',
		$theme_uri . '/js/stats-counter.js',
		array(),
		ST_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'st_theme_enqueue_assets' );

/**
 * Tailwind runtime config copied from the static pages.
 *
 * @return string
 */
function st_theme_tailwind_config() {
	return 'tailwind.config={darkMode:"class",theme:{extend:{colors:{"outline-variant":"#c3c5d9","primary-fixed":"#dde1ff","surface-variant":"#e2e2e5","secondary-fixed":"#dde1ff","background":"#f9f9fc","surface":"#f9f9fc","inverse-on-surface":"#f0f0f3","on-secondary-container":"#253b89","on-secondary-fixed-variant":"#2b418f","on-surface-variant":"#434656","on-surface":"#1a1c1e","on-error":"#ffffff","on-tertiary-fixed-variant":"#891e00","tertiary-fixed":"#ffdbd2","inverse-surface":"#2f3133","surface-container":"#eeeef0","surface-container-highest":"#e2e2e5","on-secondary":"#ffffff","on-background":"#1a1c1e","on-tertiary-fixed":"#3c0800","inverse-primary":"#b7c4ff","error-container":"#ffdad6","on-error-container":"#93000a","surface-tint":"#004ced","on-primary-fixed":"#001452","surface-bright":"#f9f9fc","error":"#ba1a1a","secondary-container":"#95aafe","surface-dim":"#dadadc","tertiary":"#952200","outline":"#737688","tertiary-fixed-dim":"#ffb4a1","on-primary":"#ffffff","on-primary-fixed-variant":"#0038b6","primary-container":"#0052ff","primary":"#003ec7","primary-fixed-dim":"#b7c4ff","on-tertiary":"#ffffff","surface-container-high":"#e8e8ea","surface-container-low":"#f3f3f6","secondary-fixed-dim":"#b7c4ff","on-secondary-fixed":"#001452","surface-container-lowest":"#ffffff","tertiary-container":"#bf3003","secondary":"#4459a8","on-primary-container":"#dfe3ff","on-tertiary-container":"#ffddd5"},borderRadius:{DEFAULT:"0.125rem",lg:"0.25rem",xl:"0.5rem",full:"0.75rem"},fontFamily:{headline:["Inter"],body:["Inter"],label:["Inter"]}}}};';
}

/**
 * Get current URL.
 *
 * @return string
 */
function st_theme_current_url() {
	$scheme = is_ssl() ? 'https://' : 'http://';
	$host   = isset( $_SERVER['HTTP_HOST'] ) ? sanitize_text_field( wp_unslash( $_SERVER['HTTP_HOST'] ) ) : '';
	$uri    = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';

	return $scheme . $host . $uri;
}

/**
 * Get thank you URL.
 *
 * @return string
 */
function st_theme_get_thank_you_url() {
	$page = get_page_by_path( 'thank-you' );

	if ( $page ) {
		return get_permalink( $page );
	}

	return home_url( '/thank-you/' );
}

/**
 * Create submissions table on theme activation.
 */
function st_theme_create_submissions_table() {
	global $wpdb;

	$table_name      = $wpdb->prefix . ST_THEME_SUBMISSIONS_TABLE;
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE {$table_name} (
		id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		form_name varchar(191) NOT NULL,
		submitted_data longtext NOT NULL,
		source_url text NOT NULL,
		submitted_at datetime NOT NULL,
		PRIMARY KEY  (id),
		KEY form_name (form_name)
	) {$charset_collate};";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}
add_action( 'after_switch_theme', 'st_theme_create_submissions_table' );

/**
 * Handle front-end form submissions.
 */
function st_theme_handle_form_submission() {
	if (
		! isset( $_POST['st_theme_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['st_theme_nonce'] ) ), 'st_theme_form_submit' )
	) {
		wp_die(
			esc_html__( 'Security check failed.', 'swayam-tejwani' ),
			esc_html__( 'Form Error', 'swayam-tejwani' ),
			array( 'response' => 403 )
		);
	}

	$form_name  = isset( $_POST['form_name'] ) ? sanitize_text_field( wp_unslash( $_POST['form_name'] ) ) : 'Website Form';
	$source_url = isset( $_POST['source_url'] ) ? esc_url_raw( wp_unslash( $_POST['source_url'] ) ) : st_theme_current_url();
	$fields     = st_theme_sanitize_submission_fields( $_POST );

	if ( isset( $fields['email'] ) && '' !== $fields['email'] && ! is_email( $fields['email'] ) ) {
		wp_die(
			esc_html__( 'Please enter a valid email address.', 'swayam-tejwani' ),
			esc_html__( 'Form Error', 'swayam-tejwani' ),
			array( 'response' => 400 )
		);
	}

	st_theme_store_submission( $form_name, $fields, $source_url );
	st_theme_email_submission( $form_name, $fields, $source_url );

	wp_safe_redirect( st_theme_get_thank_you_url() );
	exit;
}
add_action( 'admin_post_st_theme_submit_form', 'st_theme_handle_form_submission' );
add_action( 'admin_post_nopriv_st_theme_submit_form', 'st_theme_handle_form_submission' );

/**
 * Sanitize posted fields.
 *
 * @param array $posted Posted data.
 * @return array
 */
function st_theme_sanitize_submission_fields( $posted ) {
	$skip   = array( 'action', 'st_theme_nonce', 'form_name', 'source_url' );
	$fields = array();

	foreach ( $posted as $key => $value ) {
		$key = sanitize_key( $key );

		if ( in_array( $key, $skip, true ) ) {
			continue;
		}

		if ( is_array( $value ) ) {
			$fields[ $key ] = array_map( 'sanitize_text_field', wp_unslash( $value ) );
			continue;
		}

		$value = wp_unslash( $value );

		if ( 'email' === $key ) {
			$fields[ $key ] = sanitize_email( $value );
		} elseif ( false !== strpos( $key, 'message' ) ) {
			$fields[ $key ] = sanitize_textarea_field( $value );
		} else {
			$fields[ $key ] = sanitize_text_field( $value );
		}
	}

	return $fields;
}

/**
 * Store submission in custom table.
 *
 * @param string $form_name Form name.
 * @param array  $fields Submitted fields.
 * @param string $source_url Source URL.
 */
function st_theme_store_submission( $form_name, $fields, $source_url ) {
	global $wpdb;

	$table_name = $wpdb->prefix . ST_THEME_SUBMISSIONS_TABLE;

	$wpdb->insert(
		$table_name,
		array(
			'form_name'      => $form_name,
			'submitted_data' => wp_json_encode( $fields ),
			'source_url'     => $source_url,
			'submitted_at'   => current_time( 'mysql' ),
		),
		array( '%s', '%s', '%s', '%s' )
	);
}

/**
 * Email submission.
 *
 * @param string $form_name Form name.
 * @param array  $fields Submitted fields.
 * @param string $source_url Source URL.
 */
function st_theme_email_submission( $form_name, $fields, $source_url ) {
	$lines = array(
		'Form: ' . $form_name,
		'Source URL: ' . $source_url,
		'Submitted At: ' . current_time( 'mysql' ),
		'',
	);

	foreach ( $fields as $key => $value ) {
		$label   = ucwords( str_replace( '_', ' ', $key ) );
		$lines[] = $label . ': ' . ( is_array( $value ) ? implode( ', ', $value ) : $value );
	}

	wp_mail(
		'hello@swayamtejwani.com',
		sprintf( 'New %s Submission', $form_name ),
		implode( "\n", $lines )
	);
}

/**
 * Register admin submissions page.
 */
function st_theme_register_submissions_admin_page() {
	add_menu_page(
		esc_html__( 'Form Submissions', 'swayam-tejwani' ),
		esc_html__( 'Form Submissions', 'swayam-tejwani' ),
		'manage_options',
		'st-theme-submissions',
		'st_theme_render_submissions_admin_page',
		'dashicons-email-alt2',
		26
	);
}
add_action( 'admin_menu', 'st_theme_register_submissions_admin_page' );

/**
 * Handle submissions admin bulk actions before the admin page outputs HTML.
 */
function st_theme_handle_submissions_admin_actions() {
	if (
		! is_admin() ||
		! current_user_can( 'manage_options' ) ||
		! isset( $_POST['st_submissions_nonce'], $_POST['st_bulk_action'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['st_submissions_nonce'] ) ), 'st_submissions_bulk_action' )
	) {
		return;
	}

	$action = sanitize_key( wp_unslash( $_POST['st_bulk_action'] ) );
	$ids    = isset( $_POST['submission_ids'] ) ? array_map( 'absint', (array) wp_unslash( $_POST['submission_ids'] ) ) : array();
	$ids    = array_values( array_filter( $ids ) );

	if ( 'export_all' === $action ) {
		st_theme_export_submissions_csv();
	}

	if ( empty( $ids ) ) {
		wp_safe_redirect(
			add_query_arg(
				array(
					'page'       => 'st-theme-submissions',
					'st_message' => 'none_selected',
				),
				admin_url( 'admin.php' )
			)
		);
		exit;
	}

	if ( 'export_selected' === $action ) {
		st_theme_export_submissions_csv( $ids );
	}

	if ( 'delete_selected' === $action ) {
		$deleted = st_theme_delete_submissions( $ids );

		wp_safe_redirect(
			add_query_arg(
				array(
					'page'       => 'st-theme-submissions',
					'st_message' => 'deleted',
					'deleted'    => absint( $deleted ),
				),
				admin_url( 'admin.php' )
			)
		);
		exit;
	}
}
add_action( 'admin_init', 'st_theme_handle_submissions_admin_actions' );

/**
 * Render admin submissions page.
 */
function st_theme_render_submissions_admin_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	st_theme_maybe_delete_submission();

	global $wpdb;

	$table_name  = $wpdb->prefix . ST_THEME_SUBMISSIONS_TABLE;
	$form_filter = isset( $_GET['form_name'] ) ? sanitize_text_field( wp_unslash( $_GET['form_name'] ) ) : '';
	$form_names  = $wpdb->get_col( "SELECT DISTINCT form_name FROM {$table_name} ORDER BY form_name ASC" ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared

	if ( $form_filter ) {
		$submissions = $wpdb->get_results(
			$wpdb->prepare( "SELECT * FROM {$table_name} WHERE form_name = %s ORDER BY submitted_at DESC", $form_filter )
		);
	} else {
		$submissions = $wpdb->get_results( "SELECT * FROM {$table_name} ORDER BY submitted_at DESC" ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
	}

	?>
	<div class="wrap">
		<h1><?php echo esc_html__( 'Form Submissions', 'swayam-tejwani' ); ?></h1>

		<?php st_theme_render_submissions_admin_notice(); ?>

		<form method="get" style="margin: 1rem 0;">
			<input type="hidden" name="page" value="st-theme-submissions"/>
			<label for="form_name"><?php echo esc_html__( 'Filter by form name', 'swayam-tejwani' ); ?></label>
			<select id="form_name" name="form_name">
				<option value=""><?php echo esc_html__( 'All forms', 'swayam-tejwani' ); ?></option>
				<?php foreach ( $form_names as $name ) : ?>
					<option value="<?php echo esc_attr( $name ); ?>" <?php selected( $form_filter, $name ); ?>><?php echo esc_html( $name ); ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button" type="submit"><?php echo esc_html__( 'Filter', 'swayam-tejwani' ); ?></button>
		</form>

		<form method="post" action="<?php echo esc_url( add_query_arg( array( 'page' => 'st-theme-submissions' ), admin_url( 'admin.php' ) ) ); ?>" id="st-submissions-form">
			<?php wp_nonce_field( 'st_submissions_bulk_action', 'st_submissions_nonce' ); ?>

			<div class="tablenav top">
				<div class="alignleft actions bulkactions">
					<label for="st_bulk_action" class="screen-reader-text"><?php echo esc_html__( 'Select bulk action', 'swayam-tejwani' ); ?></label>
					<select id="st_bulk_action" name="st_bulk_action">
						<option value=""><?php echo esc_html__( 'Bulk actions', 'swayam-tejwani' ); ?></option>
						<option value="export_selected"><?php echo esc_html__( 'Export selected', 'swayam-tejwani' ); ?></option>
						<option value="export_all"><?php echo esc_html__( 'Export all', 'swayam-tejwani' ); ?></option>
						<option value="delete_selected"><?php echo esc_html__( 'Delete selected', 'swayam-tejwani' ); ?></option>
					</select>
					<button class="button action" type="submit"><?php echo esc_html__( 'Apply', 'swayam-tejwani' ); ?></button>
				</div>
			</div>

			<table class="widefat striped">
				<thead>
					<tr>
						<td class="manage-column column-cb check-column">
							<input id="st-select-all-submissions" type="checkbox"/>
						</td>
						<th><?php echo esc_html__( 'Form Name', 'swayam-tejwani' ); ?></th>
						<th><?php echo esc_html__( 'Submitted Data', 'swayam-tejwani' ); ?></th>
						<th><?php echo esc_html__( 'Date/Time', 'swayam-tejwani' ); ?></th>
						<th><?php echo esc_html__( 'Source URL', 'swayam-tejwani' ); ?></th>
						<th><?php echo esc_html__( 'Actions', 'swayam-tejwani' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if ( empty( $submissions ) ) : ?>
						<tr><td colspan="6"><?php echo esc_html__( 'No submissions found.', 'swayam-tejwani' ); ?></td></tr>
					<?php else : ?>
						<?php foreach ( $submissions as $submission ) : ?>
							<tr>
								<th scope="row" class="check-column">
									<input type="checkbox" name="submission_ids[]" value="<?php echo esc_attr( absint( $submission->id ) ); ?>"/>
								</th>
								<td><?php echo esc_html( $submission->form_name ); ?></td>
								<td><?php echo esc_html( st_theme_summarize_submission_data( $submission->submitted_data ) ); ?></td>
								<td><?php echo esc_html( $submission->submitted_at ); ?></td>
								<td><a href="<?php echo esc_url( $submission->source_url ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $submission->source_url ); ?></a></td>
								<td>
									<button class="button button-small st-view-submission" type="button" data-target="st-submission-modal-<?php echo esc_attr( absint( $submission->id ) ); ?>"><?php echo esc_html__( 'View', 'swayam-tejwani' ); ?></button>
									<a class="button button-small" href="<?php echo esc_url( wp_nonce_url( add_query_arg( array( 'page' => 'st-theme-submissions', 'delete' => absint( $submission->id ) ), admin_url( 'admin.php' ) ), 'st_delete_submission_' . absint( $submission->id ) ) ); ?>" onclick="return confirm('<?php echo esc_js( __( 'Delete this submission?', 'swayam-tejwani' ) ); ?>');"><?php echo esc_html__( 'Delete', 'swayam-tejwani' ); ?></a>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
		</form>

		<?php foreach ( $submissions as $submission ) : ?>
			<?php st_theme_render_submission_modal( $submission ); ?>
		<?php endforeach; ?>
	</div>
	<style>
		.st-submission-modal {
			align-items: center;
			background: rgba(0, 0, 0, 0.35);
			display: none;
			inset: 0;
			justify-content: center;
			position: fixed;
			z-index: 100000;
		}

		.st-submission-modal.is-open {
			display: flex;
		}

		.st-submission-modal__panel {
			background: #fff;
			border-radius: 4px;
			box-shadow: 0 18px 60px rgba(0, 0, 0, 0.25);
			max-height: 82vh;
			max-width: 860px;
			overflow: auto;
			padding: 24px;
			width: calc(100% - 48px);
		}

		.st-submission-modal__header {
			align-items: center;
			display: flex;
			gap: 16px;
			justify-content: space-between;
			margin-bottom: 16px;
		}

		.st-submission-modal__header h2 {
			margin: 0;
		}

		.st-submission-modal table {
			margin-top: 16px;
		}
	</style>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const form = document.getElementById('st-submissions-form');
			const selectAll = document.getElementById('st-select-all-submissions');
			const rowChecks = Array.from(document.querySelectorAll('input[name="submission_ids[]"]'));

			if (selectAll) {
				selectAll.addEventListener('change', function() {
					rowChecks.forEach(function(checkbox) {
						checkbox.checked = selectAll.checked;
					});
				});
			}

			if (form) {
				form.addEventListener('submit', function(event) {
					const action = document.getElementById('st_bulk_action').value;

					if (!action) {
						event.preventDefault();
						return;
					}

					if ('delete_selected' === action && !window.confirm('<?php echo esc_js( __( 'Delete selected submissions?', 'swayam-tejwani' ) ); ?>')) {
						event.preventDefault();
					}
				});
			}

			document.querySelectorAll('.st-view-submission').forEach(function(button) {
				button.addEventListener('click', function() {
					const modal = document.getElementById(button.dataset.target);

					if (modal) {
						modal.classList.add('is-open');
						modal.querySelector('.st-submission-modal__close').focus();
					}
				});
			});

			document.querySelectorAll('.st-submission-modal').forEach(function(modal) {
				modal.addEventListener('click', function(event) {
					if (event.target === modal || event.target.classList.contains('st-submission-modal__close')) {
						modal.classList.remove('is-open');
					}
				});
			});

			document.addEventListener('keydown', function(event) {
				if ('Escape' === event.key) {
					document.querySelectorAll('.st-submission-modal.is-open').forEach(function(modal) {
						modal.classList.remove('is-open');
					});
				}
			});
		});
	</script>
	<?php
}

/**
 * Render admin notices for submissions page actions.
 */
function st_theme_render_submissions_admin_notice() {
	if ( ! isset( $_GET['st_message'] ) ) {
		return;
	}

	$message = sanitize_key( wp_unslash( $_GET['st_message'] ) );

	if ( 'none_selected' === $message ) {
		?>
		<div class="notice notice-warning is-dismissible">
			<p><?php echo esc_html__( 'Please select at least one submission first.', 'swayam-tejwani' ); ?></p>
		</div>
		<?php
		return;
	}

	if ( 'deleted' === $message ) {
		$deleted = isset( $_GET['deleted'] ) ? absint( $_GET['deleted'] ) : 0;
		?>
		<div class="notice notice-success is-dismissible">
			<p><?php echo esc_html( sprintf( _n( '%d submission deleted.', '%d submissions deleted.', $deleted, 'swayam-tejwani' ), $deleted ) ); ?></p>
		</div>
		<?php
	}
}

/**
 * Render a submission detail modal.
 *
 * @param object $submission Submission row.
 */
function st_theme_render_submission_modal( $submission ) {
	$data = json_decode( $submission->submitted_data, true );

	if ( ! is_array( $data ) ) {
		$data = array();
	}
	?>
	<div class="st-submission-modal" id="st-submission-modal-<?php echo esc_attr( absint( $submission->id ) ); ?>" role="dialog" aria-modal="true" aria-labelledby="st-submission-title-<?php echo esc_attr( absint( $submission->id ) ); ?>">
		<div class="st-submission-modal__panel">
			<div class="st-submission-modal__header">
				<h2 id="st-submission-title-<?php echo esc_attr( absint( $submission->id ) ); ?>"><?php echo esc_html__( 'Submission Details', 'swayam-tejwani' ); ?></h2>
				<button class="button st-submission-modal__close" type="button"><?php echo esc_html__( 'Close', 'swayam-tejwani' ); ?></button>
			</div>

			<p><strong><?php echo esc_html__( 'Form:', 'swayam-tejwani' ); ?></strong> <?php echo esc_html( $submission->form_name ); ?></p>
			<p><strong><?php echo esc_html__( 'Date:', 'swayam-tejwani' ); ?></strong> <?php echo esc_html( $submission->submitted_at ); ?></p>
			<p><strong><?php echo esc_html__( 'Source URL:', 'swayam-tejwani' ); ?></strong> <a href="<?php echo esc_url( $submission->source_url ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $submission->source_url ); ?></a></p>

			<table class="widefat striped">
				<tbody>
					<?php foreach ( $data as $key => $value ) : ?>
						<tr>
							<th scope="row"><?php echo esc_html( st_theme_submission_field_label( $key ) ); ?></th>
							<td><?php echo esc_html( is_array( $value ) ? implode( ', ', $value ) : $value ); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php
}

/**
 * Delete a submission from admin page.
 */
function st_theme_maybe_delete_submission() {
	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	$id = absint( $_GET['delete'] );

	if ( ! $id || ! check_admin_referer( 'st_delete_submission_' . $id ) ) {
		return;
	}

	global $wpdb;
	$table_name = $wpdb->prefix . ST_THEME_SUBMISSIONS_TABLE;

	$wpdb->delete( $table_name, array( 'id' => $id ), array( '%d' ) );
}

/**
 * Delete multiple submissions.
 *
 * @param array $ids Submission IDs.
 * @return int
 */
function st_theme_delete_submissions( $ids ) {
	global $wpdb;

	$ids = array_values( array_filter( array_map( 'absint', $ids ) ) );

	if ( empty( $ids ) ) {
		return 0;
	}

	$table_name   = $wpdb->prefix . ST_THEME_SUBMISSIONS_TABLE;
	$placeholders = implode( ', ', array_fill( 0, count( $ids ), '%d' ) );

	return (int) $wpdb->query( $wpdb->prepare( "DELETE FROM {$table_name} WHERE id IN ({$placeholders})", $ids ) ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
}

/**
 * Export submissions to CSV.
 *
 * @param array $ids Optional selected submission IDs.
 */
function st_theme_export_submissions_csv( $ids = array() ) {
	global $wpdb;

	$table_name = $wpdb->prefix . ST_THEME_SUBMISSIONS_TABLE;
	$ids        = array_values( array_filter( array_map( 'absint', $ids ) ) );

	if ( empty( $ids ) ) {
		$submissions = $wpdb->get_results( "SELECT * FROM {$table_name} ORDER BY submitted_at DESC" ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
	} else {
		$placeholders = implode( ', ', array_fill( 0, count( $ids ), '%d' ) );
		$submissions  = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$table_name} WHERE id IN ({$placeholders}) ORDER BY submitted_at DESC", $ids ) ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
	}

	$field_keys = array();
	$rows       = array();

	foreach ( $submissions as $submission ) {
		$data = json_decode( $submission->submitted_data, true );

		if ( ! is_array( $data ) ) {
			$data = array();
		}

		$rows[] = array(
			'submission' => $submission,
			'data'       => $data,
		);

		foreach ( array_keys( $data ) as $key ) {
			if ( ! in_array( $key, $field_keys, true ) ) {
				$field_keys[] = $key;
			}
		}
	}

	$filename = 'form-submissions-' . gmdate( 'Y-m-d-His' ) . '.csv';

	nocache_headers();
	header( 'Content-Type: text/csv; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename="' . $filename . '"' );

	$output = fopen( 'php://output', 'w' );

	fputcsv(
		$output,
		array_merge(
			array( 'ID', 'Form Name', 'Submitted At', 'Source URL' ),
			array_map( 'st_theme_submission_field_label', $field_keys )
		)
	);

	foreach ( $rows as $row ) {
		$submission = $row['submission'];
		$data       = $row['data'];
		$csv_row    = array(
			$submission->id,
			$submission->form_name,
			$submission->submitted_at,
			$submission->source_url,
		);

		foreach ( $field_keys as $key ) {
			$value     = isset( $data[ $key ] ) ? $data[ $key ] : '';
			$csv_row[] = is_array( $value ) ? implode( ', ', $value ) : $value;
		}

		fputcsv( $output, $csv_row );
	}

	fclose( $output );
	exit;
}

/**
 * Summarize JSON data.
 *
 * @param string $json Stored JSON.
 * @return string
 */
function st_theme_summarize_submission_data( $json ) {
	$data = json_decode( $json, true );

	if ( ! is_array( $data ) ) {
		return '';
	}

	$summary = array();

	foreach ( $data as $key => $value ) {
		$summary[] = st_theme_submission_field_label( $key ) . ': ' . ( is_array( $value ) ? implode( ', ', $value ) : $value );
	}

	return implode( ' | ', $summary );
}

/**
 * Format a submitted field key as a human-readable label.
 *
 * @param string $key Field key.
 * @return string
 */
function st_theme_submission_field_label( $key ) {
	return ucwords( str_replace( '_', ' ', (string) $key ) );
}
