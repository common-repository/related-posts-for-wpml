<div id = "wpbody-content" aria-label = "Основное содержимое" tabindex = "0">
    <div id = "screen-meta" class = "metabox-prefs">

        <div id = "contextual-help-wrap" class = "hidden no-sidebar" tabindex = "-1"
             aria-label = "Вкладка контекстной помощи">
            <div id = "contextual-help-back"></div>
            <div id = "contextual-help-columns">
                <div class = "contextual-help-tabs">
                    <ul>
                    </ul>
                </div>
                <div class = "contextual-help-tabs-wrap">
                </div>
            </div>
        </div>
    </div>
    <div class = "wrap">
        <h2><?php _e($this->plugin_name, 'tutor'); ?></h2>
        <div id = "poststuff">
            <div id = "post-body" class = "metabox-holder columns-2">
                <div id = "post-body-content">
                    <div id = "normal-sortables" class = "meta-box-sortables ui-sortable">
                        <div class = "postbox">
                            <h3 class = "hndle">Settings</h3>
                            <div class = "inside">
                                <form method = "post" class = "tutor-form">
                                    <table class = "form-table">
                                        
                                        <tr valign="top">
                                            <td>
                                                <span>For using please call the function <strong>rpf_related()</strong> on your single page template</span>
                                            </td>
                                        </tr>
                                        
                                        <tr valign = "top">
                                            <td>
                                                <label>How many posts to show</label><br>
                                                <input type="text" name="rel_posts_wpml[posts_related_quantity]" size="10" value="<?php echo $this->options['posts_related_quantity']; ?>" />
                                            </td>
                                        </tr>
                                        
                                        <tr valign = "top">
                                            <td>
                                                <label>img class</label><br>
                                                <input type="text" name="rel_posts_wpml[img_class]" size="90" value="<?php echo $this->options['img_class']; ?>" />
                                            </td>
                                        </tr>

                                        <tr valign = "top">
                                            <td>
                                                <label>img wrapper class</label><br>
                                                <input type="text" name="rel_posts_wpml[img_wrapperclass]" size="90" value="<?php echo $this->options['img_wrapperclass']; ?>" />
                                            </td>
                                        </tr>
                                        
                                        <tr valign = "top">
                                            <td>
                                                <label>ul class &nbsp;&nbsp;</label><br>
                                                <input type="text" name="rel_posts_wpml[ul_class]" size="90" value="<?php echo $this->options['ul_class']; ?>" />
                                            </td>
                                        </tr>
                                        
                                        <tr valign = "top">
                                            <td>
                                                <label>li class &nbsp;&nbsp;&nbsp;</label><br>
                                                <input type="text" name="rel_posts_wpml[li_class]" size="90" value="<?php echo $this->options['li_class']; ?>" />
                                            </td>
                                        </tr>

                                        <tr valign = "top">
                                            <td>
                                                <label>a class &nbsp;&nbsp;&nbsp;</label><br>
                                                <input type="text" name="rel_posts_wpml[a_class]" size="90" value="<?php echo $this->options['a_class']; ?>" />
                                            </td>
                                        </tr>

                                        <!--tr valign = "top">
                                            <td>
                                                <label><strong>Custom CSS styles</strong><br>
                                                   
                                                </label><br>
                                                <textarea name = "rel_posts_wpml[custom_css]" cols = "100"
                                                          rows = "15"><?php echo $this->options['custom_css']; ?></textarea>
                                            </td>
                                        </tr-->
                                        
                                        
                                    </table>
                                    <p class = "submit" style="margin-top:-25px;">
                                        <button type = "submit" name = "rel_posts_wpml[submit_related]" id = "submit"
                                                class = "button button-primary"><?php _e('Save Changes', 'tutor'); ?></button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "postbox-container-1" class = "postbox-container">
                    <div class = "postbox">
                        <h3 class = "hndle">
                            <span>Vizit plugin page</span>
                        </h3>
                        <div class = "inside">
                            <a href="https://web-tutor.net/extensions/related-posts-for-wpml/" target="_blank">Related Posts for WPML</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class = "clear"></div>
</div>