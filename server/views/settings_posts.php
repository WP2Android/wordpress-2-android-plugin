<div id="ml_settings_posts" class="tabs-panel ml-compact">
    <form method="post" action="<?php echo admin_url(base64_decode('YWRtaW4ucGhwP3BhZ2U9bW9iaWxvdWRfc2V0dGluZ3MmdGFiPXBvc3Rz')); ?>">
        <?php wp_nonce_field(base64_decode('Zm9ybS1zZXR0aW5nc19wb3N0cw==')); ?>  
		
		<p>This page lets you configure a number of options affecting how content is displayed in your app, including whether featured images, post meta information like author and date are shown on screen.</p>
		
		<p>Any questions or need some help? <a class="ml-intercom" href="mailto:h89uu5zu@incoming.intercom.io">Send us a message</a></p>
		      
        <h3>Post and Page screen settings</h3>
		
		
        <h4>Featured image in the article screen</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>You can switch display or hide the featured image in the article screen. You can also add featured images manually using the Editor functionality, <a target="_blank" href="http://www.mobiloud.com/help/knowledge-base/featured-images/?utm_source=wp-plugin-admin&utm_medium=web&utm_campaign=content_page">read our guide</a>.</p>
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-checkbox-wrap">
                    <input type="checkbox" id="ml_show_article_featuredimage" name="ml_show_article_featuredimage" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfc2hvd19hcnRpY2xlX2ZlYXR1cmVkaW1hZ2U=')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_show_article_featuredimage">Show featured image</label>
                </div>
            </div>
        </div>
		
		
		
        <h4>Image galleries</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>Your app will ignore links attached to images to ensure that these open in the built-in image gallery. If instead you'd prefer image links to work inside the app, you can change this setting accordingly.</p>
                <p>As an exception, say to allow an image banner within the content to load an external link while ensuring other images are always opened in the gallery, you can assign the class <i>ml_followlinks</i> to the image banner.</p>
				
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-checkbox-wrap">
                    <input type="checkbox" id="ml_followimagelinks" name="ml_followimagelinks" value="1" <?php echo Mobiloud::get_option(base64_decode('bWxfZm9sbG93aW1hZ2VsaW5rcw==')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_followimagelinks">Load links instead of image gallery for images with links</label>
                </div>
            </div>
        </div>
		
		     
        <h4>Post and page meta information</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>Change which meta elements of your posts and pages should be displayed in the post and page screens.</p>
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-checkbox-wrap">
                    <input type="checkbox" id="ml_post_author_enabled" name="ml_post_author_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcG9zdF9hdXRob3JfZW5hYmxlZA==')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_post_author_enabled">Show author in posts</label>
                </div>
                <div class="ml-form-row ml-checkbox-wrap no-margin">
                    <input type="checkbox" id="ml_page_author_enabled" name="ml_page_author_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcGFnZV9hdXRob3JfZW5hYmxlZA==')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_page_author_enabled">Show author in pages</label>
                </div>
                <div class="ml-form-row ml-checkbox-wrap no-margin">
                    <input type="checkbox" id="ml_post_date_enabled" name="ml_post_date_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcG9zdF9kYXRlX2VuYWJsZWQ=')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_post_date_enabled">Show date in posts</label>
                </div>
                <div class="ml-form-row ml-checkbox-wrap no-margin">
                    <input type="checkbox" id="ml_page_date_enabled" name="ml_page_date_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcGFnZV9kYXRlX2VuYWJsZWQ=')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_page_date_enabled">Show date in pages</label>
                </div>
                <div class="ml-form-row ml-checkbox-wrap no-margin">
                    <input type="checkbox" id="ml_post_title_enabled" name="ml_post_title_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcG9zdF90aXRsZV9lbmFibGVk')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_post_title_enabled">Show title in posts</label>
                </div>
                <div class="ml-form-row ml-checkbox-wrap no-margin">
                    <input type="checkbox" id="ml_page_title_enabled" name="ml_page_title_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcGFnZV90aXRsZV9lbmFibGVk')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_page_title_enabled">Show title in pages</label>
                </div>
            </div>
        </div>
	
        <h4>Right To Left Support</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>If your content is in Arabic and Hebrew, enable support for RTL.</p>
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-checkbox-wrap">
                    <input type="checkbox" id="ml_rtl_text_enable" name="ml_rtl_text_enable" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfcnRsX3RleHRfZW5hYmxl')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_rtl_text_enable">Enable Right-To-Left text</label>
                </div>
            </div>
        </div>



        <h3>Commenting settings</h3>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>Select the commenting system you'd like to use in your app.</p>
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row">
                    <div class="ml-radio-wrap">
                        <input type="radio" id="ml_comments_system_wordpress" name="ml_comments_system" value="wordpress" <?php echo get_option(base64_decode('bWxfY29tbWVudHNfc3lzdGVt'), base64_decode('d29yZHByZXNz')) == base64_decode('d29yZHByZXNz') ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                        <label for="ml_comments_system_wordpress">Wordpress</label>
                    </div>
                    <div class="ml-radio-wrap">
                        <input type="radio" id="ml_comments_system_disqus" name="ml_comments_system" value="disqus" <?php echo get_option(base64_decode('bWxfY29tbWVudHNfc3lzdGVt'), base64_decode('d29yZHByZXNz')) == base64_decode('ZGlzcXVz') ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                        <label for="ml_comments_system_disqus">Disqus</label>
                    </div>
                    <div class="ml-radio-wrap">
                        <input type="radio" id="ml_comments_system_facebook" name="ml_comments_system" value="facebook" <?php echo get_option(base64_decode('bWxfY29tbWVudHNfc3lzdGVt'), base64_decode('d29yZHByZXNz')) == base64_decode('ZmFjZWJvb2s=') ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                        <label for="ml_comments_system_facebook">Facebook Comments</label>
                    </div>
                    <div class="ml-radio-wrap">
                        <input type="radio" id="ml_comments_system_disabled" name="ml_comments_system" value="disabled" <?php echo get_option(base64_decode('bWxfY29tbWVudHNfc3lzdGVt'), base64_decode('d29yZHByZXNz')) == base64_decode('ZGlzYWJsZWQ=') ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                        <label for="ml_comments_system_disabled">Comments should be disabled</label>
                    </div>
                </div>
                <div class="ml-disqus-row ml-form-row" <?php echo Mobiloud::get_option(base64_decode('bWxfY29tbWVudHNfc3lzdGVt'), base64_decode('d29yZHByZXNz')) == base64_decode('ZGlzcXVz') ? '' : base64_decode('c3R5bGU9ImRpc3BsYXk6IG5vbmU7Ig=='); ?>>
                    <label>Disqus shortname <span class="required">*</span></label>
                    <input name="ml_disqus_shortname" id="ml_disqus_shortname" type="text" value="<?php echo get_option(base64_decode('bWxfZGlzcXVzX3Nob3J0bmFtZQ=='), ''); ?>" />
                    <p>A shortname is the unique identifier assigned to a Disqus site. All the comments posted to a site are referenced with the shortname.
                    See <a href="#">how to find your shortname</a>.</p>
                </div>
            </div>
        </div>
	    <?php if( strlen(Mobiloud::get_option(base64_decode('bWxfcGJfYXBwX2lk'))) > 0 && Mobiloud::get_option(base64_decode('bWxfcGJfYXBwX2lk')) < base64_decode('NTQzZTdiM2YxZDBhYjE2ZDE0OGI0NTk5')): ?>
        <div class='update-nag'>
            <p>The functionality above is new. Your app might require to be updated for these settings to take effect.</p>
			<p>Should you have any questions or to request an update, get in touch at <a href='mailto:support@mobiloud.com'>support@mobiloud.com</a>.</p>
        </div>
        <?php endif; ?>


		
       <h3>Advanced Settings</h3>
	   
		
       <h4>Content loading settings</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>Preloading content ensures articles will load fast inside your app and offline access will work.</p>

            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-checkbox-wrap">
                    <input type="checkbox" id="ml_eager_loading_enable" name="ml_eager_loading_enable" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfZWFnZXJfbG9hZGluZ19lbmFibGU=')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_eager_loading_enable">Preload contents when the app starts</label>
                </div>
            </div>
        </div>
		
        <h4>Children Page Navigation</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>Did you built a site with a complex page hierarchy and you'd like to have this available in the app? The page hierarchy navigation feature allows users to see a list of children pages at the bottom of every page within your app.</p>
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-checkbox-wrap">
                    <input type="checkbox" id="ml_hierarchical_pages_enabled" name="ml_hierarchical_pages_enabled" value="true" <?php echo Mobiloud::get_option(base64_decode('bWxfaGllcmFyY2hpY2FsX3BhZ2VzX2VuYWJsZWQ=')) ? base64_decode('Y2hlY2tlZA==') : ''; ?>/>
                    <label for="ml_hierarchical_pages_enabled">Enable page hierarchy navigation</label>
                </div>
            </div>
        </div>
		
		
        <h4>Alternative Featured Image</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>You can override the featured image used in article lists and at the top of every article with a secondary image you can define for every post.</p>
                <p>Install the <a href="https://wordpress.org/plugins/multiple-post-thumbnails/">Multiple Post Thumbnails</a> plugin and enter the ID of the secondary featured image field you've setup, normally "secondary-image".</p>				
                <p>Alternatively enter the name of a custom field where you'll enter, for each post, the full URL of the alternative image.</p>
				
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-left-align clearfix">
                    <label class='ml-width-120' for="ml_custom_featured_image">Image ID</label>
                    <input type="text" placeholder="Image ID" id="ml_custom_featured_image" name="ml_custom_featured_image" value="<?php echo esc_attr(Mobiloud::get_option(base64_decode('bWxfY3VzdG9tX2ZlYXR1cmVkX2ltYWdl'))); ?>"/>
                </div>
            </div>            
        </div>

        <h4>Override Article/Page URL with a custom field</h4>
        <div class='ml-col-row'>
            <div class='ml-col-half'>
                <p>When sharing your content, users will normally share the article's URL. For curation-based publications,
                    though, you might want users to share the source for that story.</p>
                <p>Enter a custom field name to the right which you can fill for every post with the URL you want users to share.</p>
            </div>
            <div class='ml-col-half'>
                <div class="ml-form-row ml-left-align clearfix">
                    <label class='ml-width-120' for="ml_custom_field_url">URL Field Name</label>
                    <input type="text" placeholder="Custom Field Name" id="ml_custom_field_url" name="ml_custom_field_url" value="<?php echo esc_attr(Mobiloud::get_option(base64_decode('bWxfY3VzdG9tX2ZpZWxkX3VybA=='))); ?>"/>
                </div>
            </div>
        </div>
		

        
        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
    </form>
</div>