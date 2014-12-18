<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/admin-page/css/custom-theme.css" />
<!--<script src="../js/jquerymin.js" type="text/javascript"></script>-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<title>Untitled Document</title>
</head>

<body>
<?php screen_icon('themes'); echo "<h2>". __( 'Feel4photos&acute;s Theme Options', 'customtheme' ) . "</h2>"; ?>

<script type="text/javascript">
	function readURL(input,id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#blah'+id).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

</script>

<form method="post" action="#" id="customTheme" enctype="multipart/form-data">
	
    <h3>feel4photos Favicon :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="20%">Favicon :</td>
            <td width="36%"><input type="file" class="file1" name="f4pfavicon" id="uploadfile1" value="" onchange="readURL(this,1);" /></td>
            <td>
            	<div class="preview"><img id="blah1" src="<?php echo get_option( 'f4p_fav_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td width="22%"></td>
        </tr>
    </table>
	
    <h3>feel4photos Logo :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="35%">Logo :</td>
            <td width="36%"><input type="file" class="file1" name="f4plogo" id="uploadfile2" value="" onchange="readURL(this,2);" /></td>
            <td>
            	<div class="preview"><img id="blah2" src="<?php echo get_option( 'f4p_logo' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td width="28%"></td>
        </tr>
    </table>
    <h3>feel4photos Logo(Front Page) :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="35%">Logo :</td>
            <td width="36%"><input type="file" class="file1" name="f4plogohome" id="uploadfile3" value="" onchange="readURL(this,3);" /></td>
            <td>
            	<div class="preview"><img id="blah3" src="<?php echo get_option( 'f4p_logo_home' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td width="28%"></td>
        </tr>
    </table>
    
    <h3>feel4photos Social Icons :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="20%">Facebook Icon :</td>
            <td width="26%"><input type="file" class="file1" name="fbicon" id="uploadfile3a" value="" onchange="readURL(this,3a);" /></td>
            <td>
            	<div class="preview"><img id="blah3a" src="<?php echo get_option( 'f4p_fb_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Facebook Link :</td>
            <td width="35%"><input type="text" name="f4pfblinktxt" value="<?php echo get_option( 'f4pfb_link' );?>" /></td>
        </tr>
        <tr>
        	<td>Twitter Icon :</td>
            <td><input type="file" class="file1" name="twicon" id="uploadfile4a" value="" onchange="readURL(this,4a);" /></td>
            <td>
            	<div class="preview"><img id="blah4a" src="<?php echo get_option( 'f4p_tw_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Twitter Link :</td>
            <td><input type="text" name="f4ptwlinktxt" value="<?php echo get_option( 'f4ptw_link' );?>" /></td>
        </tr>
        <tr>
        	<td>Linkedin Icon :</td>
            <td><input type="file" class="file1" name="linkdinicon" id="uploadfile5a" value="" onchange="readURL(this,5a);" /></td>
            <td>
            	<div class="preview"><img id="blah5a" src="<?php echo get_option( 'f4p_linkedin_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Linkedin Link :</td>
            <td><input type="text" name="f4plnlinktxt" value="<?php echo get_option( 'f4pln_link' );?>" /></td>
        </tr>
        <tr>
        	<td>Pinterest Icon :</td>
            <td><input type="file" class="file1" name="gplusicon" id="uploadfile6a" value="" onchange="readURL(this,6a);" /></td>
            <td>
            	<div class="preview"><img id="blah6a" src="<?php echo get_option( 'f4p_gplus_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Pinterest Link :</td>
            <td><input type="text" name="f4ppinlinktxt" value="<?php echo get_option( 'f4ppin_link' );?>" /></td>
        </tr>
        <?php /*?><tr>
        	<td>Vimeo Icon :</td>
            <td><input type="file" class="file1" name="gplusicon" id="uploadfile7a" value="" onchange="readURL(this,7a);" /></td>
            <td>
            	<div class="preview"><img id="blah7a" src="<?php echo get_option( 'f4p_gplus_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Vimeo Link :</td>
            <td><input type="text" name="f4ppinlinktxt" value="<?php echo get_option( 'f4ppin_link' );?>" /></td>
        </tr><?php */?>
        <tr>
        	<td>Flickr Icon :</td>
            <td><input type="file" class="file1" name="gplusicon" id="uploadfile8a" value="" onchange="readURL(this,8a);" /></td>
            <td>
            	<div class="preview"><img id="blah8a" src="<?php echo get_option( 'f4p_gplus_icon' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Flickr Link :</td>
            <td><input type="text" name="f4pflckrlinktxt" value="<?php echo get_option( 'f4pflckr_link' );?>" /></td>
        </tr>
    </table>
    
    <h3>feel4photos General Information :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="20%">Address :</td>
            <td><input type="text" name="cupittaddress" value="<?php echo get_option( 'cupitt_address' );?>" /></td>
        </tr>
        <tr>
        	<td>Phone Number 1 :</td>
            <td><input type="text" name="f4pphoneno1" value="<?php echo get_option( 'f4p_phone_1' );?>" /></td>
        </tr>
        <tr>
        	<td>Phone Number 2 :</td>
            <td><input type="text" name="f4pphoneno2" value="<?php echo get_option( 'f4p_phone_2' );?>" /></td>
        </tr>
        <tr>
        	<td>Location in Google Map :</td>
            <td>
            	<textarea name="cupittgmap">
                	<?php echo get_option("cupitt_gmap"); ?>
                </textarea>
            </td>
        </tr>
    </table>
    
    <h3>feel4photos Header Image :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="20%">Header image for Blog page :</td>
            <td width="20%"><input type="file" class="file1" name="hdrimgBlog" id="uploadfile7" value="" onchange="readURL(this,7);" /></td>
            <td>
            	<div class="previewlarg"><img id="blah7" src="<?php echo get_option( 'header_img_blog' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td width="15%">Title for Blog page :</td>
            <td width="15%"><input type="text" name="hdrtxtBlog" value="<?php echo get_option( 'header_txt_blog' );?>" /></td>
        </tr>
        <tr>
        	<td width="20%">Header image for Winery Single page :</td>
            <td width="20%"><input type="file" class="file1" name="hdrimgWineSngle" id="uploadfile9" value="" onchange="readURL(this,9);" /></td>
            <td>
            	<div class="previewlarg"><img id="blah9" src="<?php echo get_option( 'header_img_winesignle' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td width="15%">Title for Winery Single page :</td>
            <td width="15%"><input type="text" name="hdrtxtWineSingl" value="<?php echo get_option( 'header_txt_winesignle' );?>" /></td>
        </tr>
    	<tr>
        	<td>Header image for 404 page :</td>
            <td><input type="file" class="file1" name="hdrimg404" id="uploadfile6" value="" onchange="readURL(this,6);" /></td>
            <td>
            	<div class="previewlarg"><img id="blah6" src="<?php echo get_option( 'header_img_404' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Title for 404 page :</td>
            <td><input type="text" name="hdrtxt404" value="<?php echo get_option( 'header_txt_404' );?>" /></td>
        </tr>
        <tr>
        	<td>Header image for Search page :</td>
            <td><input type="file" class="file1" name="hdrimgSrch" id="uploadfile8" value="" onchange="readURL(this,8);" /></td>
            <td>
            	<div class="previewlarg"><img id="blah8" src="<?php echo get_option( 'header_img_srch' ); ?>" alt="No Image" class="" /></div>
            </td>
            <td>Title for Search page :</td>
            <td><input type="text" name="hdrtxtSrch" value="<?php echo get_option( 'header_txt_srch' );?>" /></td>
        </tr>
    </table>
    
    <h3>feel4photos Google Analytic Code :</h3>
    <table class="form-table" width="100%">
    	<tr>
        	<td width="20%">Google Analytic Code :</td>
            <td><input type="text" name="ganalyticode" value="<?php echo get_option( 'google_analytic_code' );?>" /></td>
        </tr>
    </table>
    
    <p>&nbsp;</p>
    <input type="submit" id="submit" name="submit1" value="Save Changes" class="button button-primary" />
	<input type="reset" id="reset" name="reset" value="Reset Changes" class="button button-primary resetBotton" />
</form>

<?php
	if(isset($_POST['submit1'])) {
		extract( $_POST );
		
		
		//echo $logofile['url'];
		
		
		/* Image Uploding */
		if ( ! function_exists( 'wp_handle_upload' ) )
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			
		$faviconf4p = $_FILES['f4pfavicon'];	
		$logof4p = $_FILES['f4plogo'];
		$homelogof4p = $_FILES['f4plogohome'];
		
		$upload_overrides = array( 'test_form' => false );
		
		$movefile1 = wp_handle_upload( $faviconf4p, $upload_overrides ); //file uploaded
		$movefile2 = wp_handle_upload( $logof4p, $upload_overrides ); //file uploaded
		$movefile3 = wp_handle_upload( $homelogof4p, $upload_overrides ); //file uploaded
		
		//print_r($cupitfbicon);
		
		if(!empty($faviconf4p['name']))
		{
			$fav_icon_val = get_option( 'f4p_fav_icon' );
			if((!empty($faviconf4p['name'])) && ($fav_icon_val == ''))
			{
				add_option( 'f4p_fav_icon', $movefile1['url'] );
			}
			else if(!empty($faviconf4p['name']) && ($fav_icon_val!= ''))
			{		   
			   update_option( 'f4p_fav_icon', $movefile1['url'] );
			}
		}
		
		
		if(!empty($logof4p['name']))
		{
			$logo_val = get_option( 'f4p_logo' );
			if((!empty($logof4p['name'])) && ($logo_val == ''))
			{
				add_option( 'f4p_logo', $movefile2['url'] );
			}
			else if(!empty($logof4p['name']) && ($logo_val!= ''))
			{		   
			   update_option( 'f4p_logo', $movefile2['url'] );
			}
		}
		
		
		if(!empty($homelogof4p['name']))
		{
			$home_logo_val = get_option( 'f4p_logo_home' );
			if((!empty($homelogof4p['name'])) && ($home_logo_val == ''))
			{
				add_option( 'f4p_logo_home', $movefile3['url'] );
			}
			else if(!empty($homelogof4p['name']) && ($home_logo_val!= ''))
			{		   
			   update_option( 'f4p_logo_home', $movefile3['url'] );
			}
		}
		
		
		//echo $cupitfbicon['name'];
		
		
		$f4p_fb_link = get_option( 'f4pfb_link' );
		$f4p_tw_link = get_option( 'f4ptw_link' );
		$f4p_ln_link = get_option( 'f4pln_link' );
		$f4p_pin_link = get_option( 'f4ppin_link' );
		$f4p_flickr_link = get_option( 'f4pflckr_link' );
		
		$f4p_phone_no1 = get_option( 'f4p_phone_1' );
		$f4p_phone_no2 = get_option( 'f4p_phone_2' );
		
		if(empty($f4p_fb_link)) {
			delete_option( 'f4pfb_link' );
			add_option( 'f4pfb_link', $f4pfblinktxt, '', 'yes' );
		} else {
					update_option( 'f4pfb_link', $f4pfblinktxt );
			   }
			   
		if(empty($f4p_tw_link)) {
			delete_option( 'f4ptw_link' );
			add_option( 'f4ptw_link', $f4ptwlinktxt, '', 'yes' );
		} else {
					update_option( 'f4ptw_link', $f4ptwlinktxt );
			   }
			   
		if(empty($f4p_ln_link)) {
			delete_option( 'f4pln_link' );
			add_option( 'f4pln_link', $f4plnlinktxt, '', 'yes' );
		} else {
					update_option( 'f4pln_link', $f4plnlinktxt );
			   }
			   
		if(empty($f4p_pin_link)) {
			delete_option( 'f4ppin_link' );
			add_option( 'f4ppin_link', $f4ppinlinktxt, '', 'yes' );
		} else {
					update_option( 'f4ppin_link', $f4ppinlinktxt );
			   }
			   
		if(empty($f4p_flickr_link)) {
			delete_option( 'f4pflckr_link' );
			add_option( 'f4pflckr_link', $f4pflckrlinktxt, '', 'yes' );
		} else {
					update_option( 'f4pflckr_link', $f4pflckrlinktxt );
			   }
			   
			
			   
		if(empty($f4p_phone_no1)) {
			delete_option( 'f4p_phone_1' );
			add_option( 'f4p_phone_1', $f4pphoneno1, '', 'yes' );
		} else {
					update_option( 'f4p_phone_1', $f4pphoneno1 );
			   }	
			   
		if(empty($f4p_phone_no2)) {
			delete_option( 'f4p_phone_2' );
			add_option( 'f4p_phone_2', $f4pphoneno2, '', 'yes' );
		} else {
					update_option( 'f4p_phone_2', $f4pphoneno2 );
			   }
			   
		
		 
			   
		$location = site_url()."/wp-admin/themes.php?page=custom_theme"; //meta refresh
		echo "<meta http-equiv=\"Refresh\" content=\"0;url=".$location."\">";
	}

?>

</body>
</html>