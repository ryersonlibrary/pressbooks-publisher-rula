<nav class="top-nav">
	<div class="container">
		<div class="logo"><?php the_custom_logo(); ?></div>
    <div class="link-wrap">
		<?php if ( is_user_logged_in() ) {
			if ( is_super_admin() || is_user_member_of_blog() ) { ?>
				<a href="<?php echo get_option( 'home' ); ?>/wp-admin" class="btn btn-primary btn-sm"><?php _e( 'Admin', 'pressbooks' ); ?></a>
			<?php }
			$user_info = get_userdata( get_current_user_id() );
			if ( $user_info->primary_blog ) { ?>
				<a href="<?php echo get_blogaddress_by_id( $user_info->primary_blog ); ?>wp-admin/index.php?page=pb_catalog" class="btn btn-primary btn-sm"><?php _e( 'My Books', 'pressbooks' ); ?></a>
			<?php } ?>
			<a href="<?php echo wp_logout_url(); ?>" class="btn btn-primary btn-sm"><?php _e( 'Sign Out', 'pressbooks' ); ?></a>
		<?php } ?>
		<?php if ( ! is_user_logged_in() ) { ?>
			<?php if ( class_exists( '\PressbooksOAuth\OAuth' ) ) {
				do_action( 'pressbooks_oauth_connect' );
				}	else { ?>
				<a href="<?php echo wp_login_url( get_option( 'home' ) ); ?>" class="btn btn-primary btn-sm"><?php _e( 'Sign In', 'pressbooks' ); ?></a>
				<?php if ( get_option( 'users_can_register' ) ) { ?>
					<a class="button" href="<?php echo esc_url( wp_registration_url() ); ?>"><?php _e( 'Register' ); ?></a>
				<?php }
			} ?>
		<?php } ?>
		</div>
	</div>
</nav>

<header class="banner">
	<div class="container branding">
		<h1 class="brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
	</div>
  <div class="container intro">
		<?php if ( get_theme_mod( 'pressbooks_publisher_intro_textbox' ) !== '' ) { ?>
			<?php if ( 'one-column' == get_theme_mod( 'pressbooks_publisher_intro_text_col' ) ) { ?>
			<div class="intro-text one-column">
			<?php } elseif ( 'two-column' == get_theme_mod( 'pressbooks_publisher_intro_text_col' ) ) { ?>
			<div class="intro-text two-column">
			<?php } ?>
				<?php echo get_theme_mod( 'pressbooks_publisher_intro_textbox' ); ?>
			</div>
		<?php } ?>
	</div>
</header>
