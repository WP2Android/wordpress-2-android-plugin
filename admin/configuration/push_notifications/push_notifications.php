<?php
include_once dirname( __FILE__ ) . '/../../../notification_categories.php';
add_action('wp_ajax_ml_configuration_push_notifications', 'ml_configuration_push_notifications_callback');

function ml_configuration_push_notifications_callback()
{
	global $ml_push_notification_enabled;

	//push notifications enabled
	if(isset($_POST['ml_push_notification_enabled']))
	{
		$ml_push_notification_enabled = $_POST['ml_push_notification_enabled'] == "true";
		ml_set_generic_option("ml_push_notification_enabled",
							   $ml_push_notification_enabled);
	}
    if(isset($_POST['ml_push_notification_categories'])) {
        ml_push_notification_categories_clear();
        if(is_array($_POST['ml_push_notification_categories'])) {
            foreach($_POST['ml_push_notification_categories'] as $categoryID) {
                ml_push_notification_categories_add($categoryID);
            }
        }
    }

	ml_configuration_push_notifications();
	die();
}

function ml_configuration_push_notifications_ajax_load()
{
s
}

function ml_configuration_push_notifications()
{

	ml_configuration_push_notifications_div();



function ml_configuration_push_notifications_div() {
    global $ml_push_notification_enabled;
    $ml_push_notification_enabled = get_option('ml_push_notification_enabled');

    ?>
    <h3 style="font-family:arial;font-size:20px;font-weight:normal;padding:10px;">Automatic Push Notification Settings</h3>
    <h2 style="font-size:20px;font-weight:normal;padding:10px;">
	<input id="ml_push_notification_enabled" type="checkbox"
		<?php
			if($ml_push_notification_enabled)
			{
				echo " checked ";
			}
		?>
		/> Send push notifications when a new post is published
	</h2>
    
    <p><span style="font-size:20px;font-weight:normal;padding:10px;">Select which categories will generate a push notification (leave empty for all)</span></p>
    <div>
        <select id="ml_push_notification_categories" data-placeholder="Select Categories..." style="width:350px;" multiple class="chosen-select">
            <option></option>
            <?php $categories = get_categories();?>
            <?php $pushCategories = ml_get_push_notification_categories(); ?>
            <?php 
                foreach($categories as $c) {
                    $selected = '';
                    if(is_array($pushCategories) && count($pushCategories) > 0) {
                        foreach($pushCategories as $pushCategory) {
                            if($pushCategory->cat_ID == $c->cat_ID) {
                                $selected = 'selected';
                            }
                        }
                    }
                    echo "<option value='$c->cat_ID' $selected>$c->cat_name</option>";
                }
            ?>
        </select>
    </div>
    <div style="margin-right:20px;">
		<p class="submit" align="right">
			<input type="submit" id="ml_configuration_push_notifications_submit" 
											   value="<?php _e('Apply'); ?>" class="button button-primary button-large"/>
		</p>
	</div>
    <?php
}
?>
