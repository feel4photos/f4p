jQuery(function(jQuery){
				
				jQuery.supersized({
				
					// Functionality
					slide_interval          :   7000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	2500,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'images/main_bg1.jpg'},
														{image : 'images/main_bg2.jpg'},
														{image : 'images/main_bg3.jpg'},
														{image : 'images/main_bg4.jpg'},
														{image : 'images/main_bg5.jpg'},
														{image : 'images/main_bg6.jpg'}
														//{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-2.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'}
														
												],
												// Theme Options			   
					progress_bar			:	1,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
		    });