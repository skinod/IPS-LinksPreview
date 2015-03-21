<?php

require_once str_replace( 'applications/core/interface/sod/linkpreview.php', '', str_replace( '\\', '/', __FILE__ ) ) . 'init.php';

\IPS\Session\Front::i();

$output = array(
		'active'		=> \IPS\Settings::i()->sod_link_preview_active && (\IPS\Settings::i()->sod_link_preview_groups == '*' || \IPS\Member::loggedIn()->inGroup( \IPS\Settings::i()->sod_link_preview_groups, TRUE )),
		'width'			=> \IPS\Settings::i()->sod_link_preview_width,
		'internal'		=> (bool) \IPS\Settings::i()->sod_link_preview_internal,
		'external'		=> (bool) \IPS\Settings::i()->sod_link_preview_external,
	);

\IPS\Output::i()->json( $output );