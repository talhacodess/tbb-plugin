<?php

// Register Meta Box
function add_project_meta_info_meta_box() {
    add_meta_box(
        'project_meta_info',
        'Project Meta Info ',
        'project_meta_info_meta_box_callback',
        ["project"],
        'normal',
        'core',
    );
}
add_action('add_meta_boxes', 'add_project_meta_info_meta_box');

// Meta Box Callback
function project_meta_info_meta_box_callback($post) {
    wp_nonce_field('project_meta_info_meta_box', 'project_meta_info_meta_box_nonce');
    $values = get_post_meta($post->ID);
    ?>
    <div class="meta-box-container" style="display: flex; flex-direction: row; gap: 15px; background: #f9f9f9; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        
        <div class="meta-box-field">
            <label for="project_url">Project URL</label>
            <input
                type="url"
                id="project_url"
                name="project_url"
                value="<?php echo esc_attr(isset($values['project_url'][0]) ? $values['project_url'][0] : ''); ?>"
            />
        </div>
        
        <div class="meta-box-field">
            <label for="project_completion-duration">Completed In</label>
            <input
                type="text"
                id="project_completion-duration"
                name="project_completion-duration"
                value="<?php echo esc_attr(isset($values['project_completion-duration'][0]) ? $values['project_completion-duration'][0] : ''); ?>"
            />
        </div>
        
        <div class="meta-box-field">
            <label for="project_estimated_cost">Development Cost</label>
            <input
                type="text"
                id="project_estimated_cost"
                name="project_estimated_cost"
                value="<?php echo esc_attr(isset($values['project_estimated_cost'][0]) ? $values['project_estimated_cost'][0] : ''); ?>"
            />
        </div>
    </div>
    <?php
}

// Save Meta Box Data
function save_project_meta_info_meta_box_data($post_id) {
    if (!isset($_POST['project_meta_info_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['project_meta_info_meta_box_nonce'], 'project_meta_info_meta_box')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    
    if (isset($_POST['project_url'])) {
        update_post_meta($post_id, 'project_url', sanitize_text_field($_POST['project_url']));
    }
    
    if (isset($_POST['project_completion-duration'])) {
        update_post_meta($post_id, 'project_completion-duration', sanitize_text_field($_POST['project_completion-duration']));
    }
    
    if (isset($_POST['project_estimated_cost'])) {
        update_post_meta($post_id, 'project_estimated_cost', sanitize_text_field($_POST['project_estimated_cost']));
    }
}
add_action('save_post', 'save_project_meta_info_meta_box_data');