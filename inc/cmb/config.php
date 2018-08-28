<?php  


	function amader_meta(){


		// for video box
		$comet_post = new_cmb2_box([
				'title'		=> 'Video Post Box',
				'id'		=> 'comet-video',
				'object_types'	=> ['post']
			]);

		$comet_post -> add_field([
			'name'			=> 'Video Link',
			'id'			=> 'video-post-link',
			'type'			=> 'oembed'
		]);

		// for audio box
		$comet_post = new_cmb2_box([
				'title'		=> 'Audio Post Box',
				'id'		=> 'comet-audio',
				'object_types'	=> ['post']
			]);

		$comet_post -> add_field([
			'name'			=> 'Audio Link',
			'id'			=> 'audio-post-link',
			'type'			=> 'oembed'
		]);


		// for Gallery box
		$comet_post = new_cmb2_box([
				'title'		=> 'Gallery Post Box',
				'id'		=> 'comet-gallery',
				'object_types'	=> ['post']
			]);

		$comet_post -> add_field([
			'name'			=> 'Gallery Images',
			'id'			=> 'comet-gallery-images',
			'type'			=> 'file_list'
		]);
		
		
		
		
	}
	add_action('cmb2_init','amader_meta');









?>