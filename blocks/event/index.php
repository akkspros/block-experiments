<?php

add_action( 'init', function() {
	register_block_type( 'a8c/event', [
		'editor_script' => 'wpcom-blocks',
		'style' => 'wpcom-blocks',
		'editor_style' => 'wpcom-blocks-editor',
	] );
} );
