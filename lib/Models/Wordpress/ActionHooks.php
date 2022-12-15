<?php

namespace Benchpress\Models\Wordpress;

class ActionHooks {

    /**
     * Fires after a plugin has been activated.
     *
     * Source: wp-admin/includes/plugin.php:718
     */
    public static string $ACTIVATED_PLUGIN = "activated_plugin";

    /**
     * Fires after a network site is activated.
     *
     * Source: wp-admin/network/sites.php:266
     */
    public static string $ACTIVATE_BLOG = "activate_blog";

    /**
     * Fires before the Site Activation page is loaded.
     *
     * Source: wp-activate.php:79
     */
    public static string $ACTIVATE_HEADER = "activate_header";

    /**
     * Fires before the Site Activation page is loaded.
     *
     * Source: wp-activate.php:96
     */
    public static string $ACTIVATE_WP_HEAD = "activate_wp_head";

    /**
     * Fires as a specific plugin is being activated.
     *
     * Source: wp-admin/includes/plugin.php:691
     */
    public static function ACTIVATE_PLUGIN(string $plugin): string {
        return "activate_" . $plugin;
    }


    /**
     * Fires at the end of the 'At a Glance' dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:432
     */
    public static string $ACTIVITY_BOX_END = "activity_box_end";

    /**
     * Fires immediately after an existing user is added to a site.
     *
     * Source: wp-includes/ms-functions.php:2228
     */
    public static string $ADDED_EXISTING_USER = "added_existing_user";

    /**
     * Fires after an option has been added.
     *
     * Source: wp-includes/option.php:708
     */
    public static string $ADDED_OPTION = "added_option";

    /**
     * Fires immediately after an object-term relationship is added.
     *
     * Source: wp-includes/taxonomy.php:2812
     */
    public static string $ADDED_TERM_RELATIONSHIP = "added_term_relationship";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2408
     */
    public static string $ADDED_USERMETA = "added_usermeta";

    /**
     * Fires immediately after meta of a specific type is added.
     *
     * Source: wp-includes/meta.php:154
     */
    public static function ADDED_META_TYPE_META(string $meta_type): string {
        return "added_" . $meta_type;
    }


    /**
     * Fires after menus are added to the menu bar.
     *
     * Source: wp-includes/class-wp-admin-bar.php:664
     */
    public static string $ADD_ADMIN_BAR_MENUS = "add_admin_bar_menus";

    /**
     * Fires once an attachment has been added.
     *
     * Source: wp-includes/post.php:4640
     */
    public static string $ADD_ATTACHMENT = "add_attachment";

    /**
     * Fires before the Add Category form.
     *
     * Source: wp-admin/edit-tags.php:387
     */
    public static string $ADD_CATEGORY_FORM_PRE = "add_category_form_pre";

    /**
     * Fires after outputting the fields for the inline editor for posts and pages.
     *
     * Source: wp-admin/includes/template.php:393
     */
    public static string $ADD_INLINE_DATA = "add_inline_data";

    /**
     * Fires after a link was added to the database.
     *
     * Source: wp-admin/includes/bookmark.php:263
     */
    public static string $ADD_LINK = "add_link";

    /**
     * Fires before the link category form.
     *
     * Source: wp-admin/edit-tags.php:397
     */
    public static string $ADD_LINK_CATEGORY_FORM_PRE = "add_link_category_form_pre";

    /**
     * Fires after all built-in meta boxes have been added.
     *
     * Source: wp-admin/includes/meta-boxes.php:1599
     */
    public static string $ADD_META_BOXES = "add_meta_boxes";

    /**
     * Fires when comment-specific meta boxes are added.
     *
     * Source: wp-admin/edit-form-comment.php:241
     */
    public static string $ADD_META_BOXES_COMMENT = "add_meta_boxes_comment";

    /**
     * Fires when link-specific meta boxes are added.
     *
     * Source: wp-admin/edit-link-form.php:46
     */
    public static string $ADD_META_BOXES_LINK = "add_meta_boxes_link";

    /**
     * Fires after all built-in meta boxes have been added, contextually for the given post type.
     *
     * Source: wp-admin/includes/meta-boxes.php:1616
     */
    public static function ADD_META_BOXES_POST_TYPE(string $post_type): string {
        return "add_meta_boxes_" . $post_type;
    }

    /**
     * Fires before an option is added.
     *
     * Source: wp-includes/option.php:662
     */
    public static string $ADD_OPTION = "add_option";

    /**
     * Fires after a specific option has been added.
     *
     * Source: wp-includes/option.php:698
     */
    public static function ADD_OPTION_OPTION(string $option): string {
        return "add_option_" . $option;
    }


    /**
     * Fires after a network option has been successfully added.
     *
     * Source: wp-includes/option.php:1636
     */
    public static string $ADD_SITE_OPTION = "add_site_option";

    /**
     * Fires after a specific network option has been successfully added.
     *
     * Source: wp-includes/option.php:1624
     */
    public static function ADD_SITE_OPTION_OPTION(string $option): string {
        return "add_site_option_" . $option;
    }

    /**
     * Fires at the end of the Add Tag form.
     *
     * Source: wp-admin/edit-tags.php:578
     */
    public static string $ADD_TAG_FORM = "add_tag_form";

    /**
     * Fires after the Add Tag form fields for non-hierarchical taxonomies.
     *
     * Source: wp-admin/edit-tags.php:525
     */
    public static string $ADD_TAG_FORM_FIELDS = "add_tag_form_fields";

    /**
     * Fires before the Add Tag form.
     *
     * Source: wp-admin/edit-tags.php:407
     */
    public static string $ADD_TAG_FORM_PRE = "add_tag_form_pre";

    /**
     * Fires immediately before an object-term relationship is added.
     *
     * Source: wp-includes/taxonomy.php:2792
     */
    public static string $ADD_TERM_RELATIONSHIP = "add_term_relationship";

    /**
     * Fires immediately after the user has been given a new role.
     *
     * Source: wp-includes/class-wp-user.php:563
     */
    public static string $ADD_USER_ROLE = "add_user_role";

    /**
     * Fires immediately after a user is added to a site.
     *
     * Source: wp-includes/ms-functions.php:202
     */
    public static string $ADD_USER_TO_BLOG = "add_user_to_blog";

    /**
     * Fires immediately before meta of a specific type is added.
     *
     * Source: wp-includes/meta.php:115
     */
    public static function ADD_META_TYPE_META(string $meta_type): string {
        return "add_" . $meta_type;
    }


    /**
     * Fires after the admin menu has been output.
     *
     * Source: wp-admin/menu-header.php:302
     */
    public static string $ADMINMENU = "adminmenu";

    /**
     * Fires when an 'action' request variable is sent.
     *
     * Source: wp-admin/admin.php:419
     */
    public static function ADMIN_ACTION(string $action): string {
        return "admin_action_" . $action;
    }

    /**
     * Fires after WP_Admin_Bar is initialized.
     *
     * Source: wp-includes/class-wp-admin-bar.php:87
     */
    public static string $ADMIN_BAR_INIT = "admin_bar_init";

    /**
     * Loads all necessary admin bar items.
     *
     * Source: wp-includes/admin-bar.php:95
     */
    public static string $ADMIN_BAR_MENU = "admin_bar_menu";

    /**
     * Fires in the 'Admin Color Scheme' section of the user editing screen.
     *
     * Source: wp-admin/user-edit.php:319
     */
    public static string $ADMIN_COLOR_SCHEME_PICKER = "admin_color_scheme_picker";

    /**
     * Fires before the admin email confirm form.
     *
     * Source: wp-login.php:621
     */
    public static string $ADMIN_EMAIL_CONFIRM = "admin_email_confirm";

    /**
     * Fires inside the admin-email-confirm-form form tags, before the hidden fields.
     *
     * Source: wp-login.php:632
     */
    public static string $ADMIN_EMAIL_CONFIRM_FORM = "admin_email_confirm_form";

    /**
     * Enqueue scripts for all admin pages.
     *
     * Source: wp-admin/admin-header.php:118
     */
    public static string $ADMIN_ENQUEUE_SCRIPTS = "admin_enqueue_scripts";

    /**
     * Prints scripts or data before the default footer scripts.
     *
     * Source: wp-admin/admin-footer.php:78
     */
    public static string $ADMIN_FOOTER = "admin_footer";

    /**
     * Print scripts or data after the default footer scripts.
     *
     * Source: wp-admin/admin-footer.php:87
     */
    public static function ADMIN_FOOTER_GLOBALS(): string {
        return "admin_footer-" . $GLOBALS['hook_suffix'];
    }


    /**
     * Prints scripts or data after the default footer scripts.
     *
     * Source: wp-admin/admin-footer.php:105
     */
    public static function ADMIN_FOOTER_HOOK_SUFFIX(string $hook_suffix): string {
        return "admin_footer-" . $hook_suffix;
    }


    /**
     * Fires in head section for all admin pages.
     *
     * Source: wp-admin/admin-header.php:163
     */
    public static string $ADMIN_HEAD = "admin_head";

    /**
     * Fires when scripts enqueued for the admin header for the legacy (pre-3.5.0) media upload popup are printed.
     *
     * Source: wp-admin/includes/media.php:579
     */
    public static string $ADMIN_HEAD_MEDIA_UPLOAD_POPUP = "admin_head-media-upload-popup";

    /**
     * Fires in head section for a specific admin page.
     *
     * Source: wp-admin/admin-header.php:156
     */
    public static function ADMIN_HEAD_HOOK_SUFFIX(string $hook_suffix): string {
        return "admin_head-" . $hook_suffix;
    }


    /**
     * Fires in the admin header for each specific form tab in the legacy (pre-3.5.0) media upload popup.
     *
     * Source: wp-admin/includes/media.php:594
     */
    public static function ADMIN_HEAD_CONTENT_FUNC(string $content_func): string {
        return "admin_head_" . $content_func;
    }


    /**
     * Fires as an admin screen or script is being initialized.
     *
     * Source: wp-admin/admin.php:175
     */
    public static string $ADMIN_INIT = "admin_init";

    /**
     * Fires before the administration menu loads in the admin.
     *
     * Source: wp-admin/includes/menu.php:155
     */
    public static string $ADMIN_MENU = "admin_menu";

    /**
     * Prints admin screen notices.
     *
     * Source: wp-admin/admin-header.php:303
     */
    public static string $ADMIN_NOTICES = "admin_notices";

    /**
     * Fires when access to an admin page is denied.
     *
     * Source: wp-admin/includes/menu.php:362
     */
    public static string $ADMIN_PAGE_ACCESS_DENIED = "admin_page_access_denied";

    /**
     * Fires on an authenticated admin post request where no action is supplied.
     *
     * Source: wp-admin/admin-post.php:70
     */
    public static string $ADMIN_POST = "admin_post";

    /**
     * Fires on a non-authenticated admin post request where no action is supplied.
     *
     * Source: wp-admin/admin-post.php:46
     */
    public static string $ADMIN_POST_NOPRIV = "admin_post_nopriv";

    /**
     * Fires on a non-authenticated admin post request for the given action.
     *
     * Source: wp-admin/admin-post.php:61
     */
    public static function ADMIN_POST_NOPRIV_ACTION(string $action): string {
        return "admin_post_nopriv_" . $action;
    }


    /**
     * Fires on an authenticated admin post request for the given action.
     *
     * Source: wp-admin/admin-post.php:85
     */
    public static function ADMIN_POST_ACTION(string $action): string {
        return "admin_post_" . $action;
    }


    /**
     * Prints any scripts and data queued for the footer.
     *
     * Source: wp-admin/admin-footer.php:95
     */
    public static string $ADMIN_PRINT_FOOTER_SCRIPTS = "admin_print_footer_scripts";

    /**
     * Prints scripts and data queued for the footer.
     *
     * Source: wp-admin/admin-footer.php:88
     */
    public static function ADMIN_PRINT_FOOTER_SCRIPTS_HOOK_SUFFIX(string $hook_suffix): string {
        return "admin_print_footer_scripts-" . $hook_suffix;
    }


    /**
     * Fires when scripts are printed for all admin pages.
     *
     * Source: wp-admin/admin-header.php:146
     */
    public static string $ADMIN_PRINT_SCRIPTS = "admin_print_scripts";

    /**
     * Fires when admin scripts enqueued for the legacy (pre-3.5.0) media upload popup are printed.
     *
     * Source: wp-admin/includes/media.php:568
     */
    public static string $ADMIN_PRINT_SCRIPTS_MEDIA_UPLOAD_POPUP = "admin_print_scripts-media-upload-popup";

    /**
     * Fires when scripts are printed for a specific admin page based on $hook_suffix.
     *
     * Source: wp-admin/admin-header.php:139
     */
    public static function ADMIN_PRINT_SCRIPTS_HOOK_SUFFIX(string $hook_suffix): string {
        return "admin_print_scripts-" . $hook_suffix;
    }


    /**
     * Fires when styles are printed for all admin pages.
     *
     * Source: wp-admin/admin-header.php:132
     */
    public static string $ADMIN_PRINT_STYLES = "admin_print_styles";

    /**
     * Fires when admin styles enqueued for the legacy (pre-3.5.0) media upload popup are printed.
     *
     * Source: wp-admin/includes/media.php:558
     */
    public static string $ADMIN_PRINT_STYLES_MEDIA_UPLOAD_POPUP = "admin_print_styles-media-upload-popup";

    /**
     * Fires when styles are printed for a specific admin page based on $hook_suffix.
     *
     * Source: wp-admin/admin-header.php:125
     */
    public static function ADMIN_PRINT_STYLES_HOOK_SUFFIX(string $hook_suffix): string {
        return "admin_print_styles-" . $hook_suffix;
    }


    /**
     * Fires inside the HTML tag in the admin header.
     *
     * Source: wp-admin/includes/template.php:2592
     */
    public static string $ADMIN_XML_NS = "admin_xml_ns";

    /**
     * Fires after the taxonomy list table.
     *
     * Source: wp-admin/edit-tags.php:668
     */
    public static function AFTER_TAXONOMY_TABLE(string $taxonomy): string {
        return "after-" . $taxonomy;
    }


    /**
     * Fires after the major core auto-update settings.
     *
     * Source: wp-admin/update-core.php:443
     */
    public static string $AFTER_CORE_AUTO_UPDATES_SETTINGS = "after_core_auto_updates_settings";

    /**
     * Fires on the next page load after a successful DB upgrade.
     *
     * Source: wp-admin/admin.php:48
     */
    public static string $AFTER_DB_UPGRADE = "after_db_upgrade";

    /**
     * Fires after a post is deleted, at the conclusion of wp_delete_post() .
     *
     * Source: wp-includes/post.php:3498
     */
    public static string $AFTER_DELETE_POST = "after_delete_post";

    /**
     * Fires after the menu locations table is displayed.
     *
     * Source: wp-admin/nav-menus.php:831
     */
    public static string $AFTER_MENU_LOCATIONS_TABLE = "after_menu_locations_table";

    /**
     * Fires after the Multisite DB upgrade for each site is complete.
     *
     * Source: wp-admin/network/upgrade.php:113
     */
    public static string $AFTER_MU_UPGRADE = "after_mu_upgrade";

    /**
     * Fires after the user's password is reset.
     *
     * Source: wp-includes/user.php:3295
     */
    public static string $AFTER_PASSWORD_RESET = "after_password_reset";

    /**
     * Fires after each row in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:1336
     */
    public static string $AFTER_PLUGIN_ROW = "after_plugin_row";

    /**
     * Fires after each specific row in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:1357
     */
    public static function AFTER_PLUGIN_ROW_PLUGIN_FILE(string $plugin_file): string {
        return "after_plugin_row_" . $plugin_file;
    }


    /**
     * Fires after the theme is loaded.
     *
     * Source: wp-settings.php:595
     */
    public static string $AFTER_SETUP_THEME = "after_setup_theme";

    /**
     * Fires after the sign-up forms, before wp_footer.
     *
     * Source: wp-signup.php:1042
     */
    public static string $AFTER_SIGNUP_FORM = "after_signup_form";

    /**
     * Fires after site signup information has been written to the database.
     *
     * Source: wp-includes/ms-functions.php:829
     */
    public static string $AFTER_SIGNUP_SITE = "after_signup_site";

    /**
     * Fires after a user's signup information has been written to the database.
     *
     * Source: wp-includes/ms-functions.php:892
     */
    public static string $AFTER_SIGNUP_USER = "after_signup_user";

    /**
     * Fires on the first WP load after a theme switch if the old theme still exists.
     *
     * Source: wp-includes/theme.php:3395
     */
    public static string $AFTER_SWITCH_THEME = "after_switch_theme";

    /**
     * Fires after each row in the Multisite themes list table.
     *
     * Source: wp-admin/includes/class-wp-ms-themes-list-table.php:1004
     */
    public static string $AFTER_THEME_ROW = "after_theme_row";

    /**
     * Fires after each specific row in the Multisite themes list table.
     *
     * Source: wp-admin/includes/class-wp-ms-themes-list-table.php:1019
     */
    public static function AFTER_THEME_ROW_STYLESHEET(string $stylesheet): string {
        return "after_theme_row_" . $stylesheet;
    }


    /**
     * Fires after any core TinyMCE editor instances are created.
     *
     * Source: wp-includes/class-wp-editor.php:1736
     */
    public static string $AFTER_WP_TINY_MCE = "after_wp_tiny_mce";

    /**
     * Prints generic admin screen notices.
     *
     * Source: wp-admin/admin-header.php:311
     */
    public static string $ALL_ADMIN_NOTICES = "all_admin_notices";

    /**
     * Fires after an application password was used for authentication.
     *
     * Source: wp-includes/user.php:435
     */
    public static string $APPLICATION_PASSWORD_DID_AUTHENTICATE = "application_password_did_authenticate";

    /**
     * Fires when an application password failed to authenticate the user.
     *
     * Source: wp-includes/user.php:382
     */
    public static string $APPLICATION_PASSWORD_FAILED_AUTHENTICATION = "application_password_failed_authentication";

    /**
     * Fires when the 'archived' status is added to a site.
     *
     * Source: wp-includes/ms-site.php:1192
     */
    public static string $ARCHIVE_BLOG = "archive_blog";

    /**
     * Fires at the end of each Atom feed author entry.
     *
     * Source: wp-includes/feed-atom.php:65
     */
    public static string $ATOM_AUTHOR = "atom_author";

    /**
     * Fires inside the feed tag in the Atom comment feed.
     *
     * Source: wp-includes/feed-atom-comments.php:27
     */
    public static string $ATOM_COMMENTS_NS = "atom_comments_ns";

    /**
     * Fires at the end of each Atom feed item.
     *
     * Source: wp-includes/feed-atom.php:91
     */
    public static string $ATOM_ENTRY = "atom_entry";

    /**
     * Fires just before the first Atom feed entry.
     *
     * Source: wp-includes/feed-atom.php:44
     */
    public static string $ATOM_HEAD = "atom_head";

    /**
     * Fires at end of the Atom feed root to add namespaces.
     *
     * Source: wp-includes/feed-atom.php:26
     */
    public static string $ATOM_NS = "atom_ns";

    /**
     * Fires after the 'Uploaded on' section of the Save meta box in the attachment editing screen.
     *
     * Source: wp-admin/includes/meta-boxes.php:431
     */
    public static string $ATTACHMENT_SUBMITBOX_MISC_ACTIONS = "attachment_submitbox_misc_actions";

    /**
     * Fires once an existing attachment has been updated.
     *
     * Source: wp-includes/post.php:4630
     */
    public static string $ATTACHMENT_UPDATED = "attachment_updated";

    /**
     * Fires if a bad authentication cookie hash is encountered.
     *
     * Source: wp-includes/pluggable.php:784
     */
    public static string $AUTH_COOKIE_BAD_HASH = "auth_cookie_bad_hash";

    /**
     * Fires if a bad session token is encountered.
     *
     * Source: wp-includes/pluggable.php:806
     */
    public static string $AUTH_COOKIE_BAD_SESSION_TOKEN = "auth_cookie_bad_session_token";

    /**
     * Fires if a bad username is entered in the user authentication process.
     *
     * Source: wp-includes/pluggable.php:755
     */
    public static string $AUTH_COOKIE_BAD_USERNAME = "auth_cookie_bad_username";

    /**
     * Fires once an authentication cookie has expired.
     *
     * Source: wp-includes/pluggable.php:733
     */
    public static string $AUTH_COOKIE_EXPIRED = "auth_cookie_expired";

    /**
     * Fires if an authentication cookie is malformed.
     *
     * Source: wp-includes/pluggable.php:699
     */
    public static string $AUTH_COOKIE_MALFORMED = "auth_cookie_malformed";

    /**
     * Fires once an authentication cookie has been validated.
     *
     * Source: wp-includes/pluggable.php:831
     */
    public static string $AUTH_COOKIE_VALID = "auth_cookie_valid";

    /**
     * Fires before the authentication redirect.
     *
     * Source: wp-includes/pluggable.php:1206
     */
    public static string $AUTH_REDIRECT = "auth_redirect";

    /**
     * Fires after all automatic updates have run.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:559
     */
    public static string $AUTOMATIC_UPDATES_COMPLETE = "automatic_updates_complete";

    /**
     * Fires before a post is deleted, at the start of wp_delete_post() .
     *
     * Source: wp-includes/post.php:3407
     */
    public static string $BEFORE_DELETE_POST = "before_delete_post";

    /**
     * Fires before the site Sign-up form.
     *
     * Source: wp-signup.php:96
     */
    public static string $BEFORE_SIGNUP_FORM = "before_signup_form";

    /**
     * Fires before the Site Sign-up page is loaded.
     *
     * Source: wp-signup.php:50
     */
    public static string $BEFORE_SIGNUP_HEADER = "before_signup_header";

    /**
     * Fires immediately before the TinyMCE settings are printed.
     *
     * Source: wp-includes/class-wp-editor.php:1611
     */
    public static string $BEFORE_WP_TINY_MCE = "before_wp_tiny_mce";

    /**
     * Fires before fetching the post thumbnail HTML.
     *
     * Source: wp-includes/post-thumbnail-template.php:183
     */
    public static string $BEGIN_FETCH_POST_THUMBNAIL_HTML = "begin_fetch_post_thumbnail_html";

    /**
     * Adds hidden input fields to the meta box save form.
     *
     * Source: wp-admin/includes/post.php:2457
     */
    public static string $BLOCK_EDITOR_META_BOX_HIDDEN_FIELDS = "block_editor_meta_box_hidden_fields";

    /**
     * Enables the legacy 'Site visibility' privacy options.
     *
     * Source: wp-admin/options-reading.php:203
     */
    public static string $BLOG_PRIVACY_SELECTOR = "blog_privacy_selector";

    /**
     * Fires once for each column in Bulk Edit mode.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:2013
     */
    public static string $BULK_EDIT_CUSTOM_BOX = "bulk_edit_custom_box";

    /**
     * Fires when the locale is switched to or restored.
     *
     * Source: wp-includes/class-wp-locale-switcher.php:238
     */
    public static string $CHANGE_LOCALE = "change_locale";

    /**
     * Fires once the admin request has been validated or not.
     *
     * Source: wp-includes/pluggable.php:1271
     */
    public static string $CHECK_ADMIN_REFERER = "check_admin_referer";

    /**
     * Fires once the Ajax request has been validated or not.
     *
     * Source: wp-includes/pluggable.php:1324
     */
    public static string $CHECK_AJAX_REFERER = "check_ajax_referer";

    /**
     * Fires immediately before a comment is marked approved.
     *
     * Source: wp-includes/comment.php:735
     */
    public static string $CHECK_COMMENT_FLOOD = "check_comment_flood";

    /**
     * Fires before the password and confirm password fields are checked for congruity.
     *
     * Source: wp-admin/includes/user.php:163
     */
    public static string $CHECK_PASSWORDS = "check_passwords";

    /**
     * Fires after the given attachment's cache is cleaned.
     *
     * Source: wp-includes/post.php:7542
     */
    public static string $CLEAN_ATTACHMENT_CACHE = "clean_attachment_cache";

    /**
     * Fires immediately after a comment has been removed from the object cache.
     *
     * Source: wp-includes/comment.php:3282
     */
    public static string $CLEAN_COMMENT_CACHE = "clean_comment_cache";

    /**
     * Fires immediately after a network has been removed from the object cache.
     *
     * Source: wp-includes/ms-network.php:96
     */
    public static string $CLEAN_NETWORK_CACHE = "clean_network_cache";

    /**
     * Fires after the object term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3559
     */
    public static string $CLEAN_OBJECT_TERM_CACHE = "clean_object_term_cache";

    /**
     * Fires immediately after the given page's cache is cleaned.
     *
     * Source: wp-includes/post.php:7399
     */
    public static string $CLEAN_PAGE_CACHE = "clean_page_cache";

    /**
     * Fires immediately after the given post's cache is cleaned.
     *
     * Source: wp-includes/post.php:7387
     */
    public static string $CLEAN_POST_CACHE = "clean_post_cache";

    /**
     * Fires immediately after a site has been removed from the object cache.
     *
     * Source: wp-includes/ms-site.php:989
     */
    public static string $CLEAN_SITE_CACHE = "clean_site_cache";

    /**
     * Fires after a taxonomy's caches have been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3650
     */
    public static string $CLEAN_TAXONOMY_CACHE = "clean_taxonomy_cache";

    /**
     * Fires once after each taxonomy's term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3621
     */
    public static string $CLEAN_TERM_CACHE = "clean_term_cache";

    /**
     * Fires immediately after the given user's cache is cleaned.
     *
     * Source: wp-includes/user.php:1904
     */
    public static string $CLEAN_USER_CACHE = "clean_user_cache";

    /**
     * Fires just before the authentication cookies are cleared.
     *
     * Source: wp-includes/pluggable.php:1099
     */
    public static string $CLEAR_AUTH_COOKIE = "clear_auth_cookie";

    /**
     * Fires at the end of each RSS2 comment feed item.
     *
     * Source: wp-includes/feed-rss2-comments.php:116
     */
    public static string $COMMENTRSS2_ITEM = "commentrss2_item";

    /**
     * Fires at the end of the RSS2 comment feed header.
     *
     * Source: wp-includes/feed-rss2-comments.php:71
     */
    public static string $COMMENTSRSS2_HEAD = "commentsrss2_head";

    /**
     * Fires at the end of the Atom comment feed header.
     *
     * Source: wp-includes/feed-atom-comments.php:67
     */
    public static string $COMMENTS_ATOM_HEAD = "comments_atom_head";

    /**
     * Fires at the end of each Atom comment feed item.
     *
     * Source: wp-includes/feed-atom-comments.php:137
     */
    public static string $COMMENT_ATOM_ENTRY = "comment_atom_entry";

    /**
     * Fires when a comment is attempted on a post that has comments closed.
     *
     * Source: wp-includes/comment.php:3513
     */
    public static string $COMMENT_CLOSED = "comment_closed";

    /**
     * Fires immediately after a duplicate comment is detected.
     *
     * Source: wp-includes/comment.php:698
     */
    public static string $COMMENT_DUPLICATE_TRIGGER = "comment_duplicate_trigger";

    /**
     * Fires before the comment flood message is triggered.
     *
     * Source: wp-includes/comment.php:917
     */
    public static string $COMMENT_FLOOD_TRIGGER = "comment_flood_trigger";

    /**
     * Fires at the bottom of the comment form, inside the closing form tag.
     *
     * Source: wp-includes/comment-template.php:2724
     */
    public static string $COMMENT_FORM = "comment_form";

    /**
     * Fires after the comment form.
     *
     * Source: wp-includes/comment-template.php:2738
     */
    public static string $COMMENT_FORM_AFTER = "comment_form_after";

    /**
     * Fires after the comment fields in the comment form, excluding the textarea.
     *
     * Source: wp-includes/comment-template.php:2675
     */
    public static string $COMMENT_FORM_AFTER_FIELDS = "comment_form_after_fields";

    /**
     * Fires before the comment form.
     *
     * Source: wp-includes/comment-template.php:2525
     */
    public static string $COMMENT_FORM_BEFORE = "comment_form_before";

    /**
     * Fires before the comment fields in the comment form, excluding the textarea.
     *
     * Source: wp-includes/comment-template.php:2646
     */
    public static string $COMMENT_FORM_BEFORE_FIELDS = "comment_form_before_fields";

    /**
     * Fires after the comment form if comments are closed.
     *
     * Source: wp-includes/comment-template.php:2337
     */
    public static string $COMMENT_FORM_COMMENTS_CLOSED = "comment_form_comments_closed";

    /**
     * Fires after the is_user_logged_in()  check in the comment form.
     *
     * Source: wp-includes/comment-template.php:2596
     */
    public static string $COMMENT_FORM_LOGGED_IN_AFTER = "comment_form_logged_in_after";

    /**
     * Fires after the HTML-formatted 'must log in after' message in the comment form.
     *
     * Source: wp-includes/comment-template.php:2551
     */
    public static string $COMMENT_FORM_MUST_LOG_IN_AFTER = "comment_form_must_log_in_after";

    /**
     * Fires at the top of the comment form, inside the form tag.
     *
     * Source: wp-includes/comment-template.php:2568
     */
    public static string $COMMENT_FORM_TOP = "comment_form_top";

    /**
     * Fires when a comment is attempted on a post that does not exist.
     *
     * Source: wp-includes/comment.php:3489
     */
    public static string $COMMENT_ID_NOT_FOUND = "comment_id_not_found";

    /**
     * Fires once the comment loop is started.
     *
     * Source: wp-includes/class-wp-query.php:3677
     */
    public static string $COMMENT_LOOP_START = "comment_loop_start";

    /**
     * Fires when a comment is attempted on a post in draft mode.
     *
     * Source: wp-includes/comment.php:3539
     */
    public static string $COMMENT_ON_DRAFT = "comment_on_draft";

    /**
     * Fires when a comment is attempted on a password-protected post.
     *
     * Source: wp-includes/comment.php:3555
     */
    public static string $COMMENT_ON_PASSWORD_PROTECTED = "comment_on_password_protected";

    /**
     * Fires when a comment is attempted on a trashed post.
     *
     * Source: wp-includes/comment.php:3526
     */
    public static string $COMMENT_ON_TRASH = "comment_on_trash";

    /**
     * Fires immediately after a comment is inserted into the database.
     *
     * Source: wp-includes/comment.php:2318
     */
    public static string $COMMENT_POST = "comment_post";

    /**
     * Fires when the status of a specific comment type is in transition.
     *
     * Source: wp-includes/comment.php:1843
     */
    public static function COMMENT_NEW_STATUS_COMMENT_COMMENT_TYPE(string $new_status, string $comment_type): string {
        return "comment_" . $new_status . '_' . $comment_type;
    }


    /**
     * Fires when the comment status is in transition from one specific status to another.
     *
     * Source: wp-includes/comment.php:1816
     */
    public static function COMMENT_OLD_STATUS_TO_NEW_STATUS(string $old_status, string $new_status): string {
        return "comment_" . $old_status . '_' . $new_status;
    }


    /**
     * Fires after the core, plugin, and theme update tables.
     *
     * Source: wp-admin/update-core.php:1080
     */
    public static string $CORE_UPGRADE_PREAMBLE = "core_upgrade_preamble";

    /**
     * Fires after a new term is created, and after the term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:2634
     */
    public static string $CREATED_TERM = "created_term";

    /**
     * Fires after a new term in a specific taxonomy is created, and after the term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:2654
     */
    public static function CREATED_TAXONOMY(string $taxonomy): string {
        return "created_" . $taxonomy;
    }


    /**
     * Fires immediately after a new term is created, before the term cache is cleaned.
     *
     * Source: wp-includes/taxonomy.php:2584
     */
    public static string $CREATE_TERM = "create_term";

    /**
     * Fires after a new term is created for a specific taxonomy.
     *
     * Source: wp-includes/taxonomy.php:2604
     */
    public static function CREATE_TAXONOMY(string $taxonomy): string {
        return "create_" . $taxonomy;
    }


    /**
     * Fires when an error happens rescheduling a cron event.
     *
     * Source: wp-cron.php:149
     */
    public static string $CRON_RESCHEDULE_EVENT_ERROR = "cron_reschedule_event_error";

    /**
     * Fires when an error happens unscheduling a cron event.
     *
     * Source: wp-cron.php:176
     */
    public static string $CRON_UNSCHEDULE_EVENT_ERROR = "cron_unschedule_event_error";

    /**
     * Fires after the current screen has been set.
     *
     * Source: wp-admin/includes/class-wp-screen.php:424
     */
    public static string $CURRENT_SCREEN = "current_screen";

    /**
     * Enqueue Customizer control scripts.
     *
     * Source: wp-admin/customize.php:123
     */
    public static string $CUSTOMIZE_CONTROLS_ENQUEUE_SCRIPTS = "customize_controls_enqueue_scripts";

    /**
     * Fires in head section of Customizer controls.
     *
     * Source: wp-admin/customize.php:181
     */
    public static string $CUSTOMIZE_CONTROLS_HEAD = "customize_controls_head";

    /**
     * Fires when Customizer controls are initialized, before scripts are enqueued.
     *
     * Source: wp-admin/customize.php:112
     */
    public static string $CUSTOMIZE_CONTROLS_INIT = "customize_controls_init";

    /**
     * Prints templates, control scripts, and settings in the footer.
     *
     * Source: wp-admin/customize.php:292
     */
    public static string $CUSTOMIZE_CONTROLS_PRINT_FOOTER_SCRIPTS = "customize_controls_print_footer_scripts";

    /**
     * Fires when Customizer control scripts are printed.
     *
     * Source: wp-admin/customize.php:174
     */
    public static string $CUSTOMIZE_CONTROLS_PRINT_SCRIPTS = "customize_controls_print_scripts";

    /**
     * Fires when Customizer control styles are printed.
     *
     * Source: wp-admin/customize.php:167
     */
    public static string $CUSTOMIZE_CONTROLS_PRINT_STYLES = "customize_controls_print_styles";

    /**
     * Announces when any setting's unsanitized post value has been set.
     *
     * Source: wp-includes/class-wp-customize-manager.php:1885
     */
    public static string $CUSTOMIZE_POST_VALUE_SET = "customize_post_value_set";

    /**
     * Announces when a specific setting's unsanitized post value has been set.
     *
     * Source: wp-includes/class-wp-customize-manager.php:1869
     */
    public static function CUSTOMIZE_POST_VALUE_SET_SETTING_ID(string $setting_id): string {
        return "customize_post_value_set_" . $setting_id;
    }


    /**
     * Fires once the Customizer preview has initialized and JavaScript settings have been printed.
     *
     * Source: wp-includes/class-wp-customize-manager.php:1946
     */
    public static string $CUSTOMIZE_PREVIEW_INIT = "customize_preview_init";

    /**
     * Fires when the WP_Customize_Setting::preview() method is called for settings not handled as theme_mods or options.
     *
     * Source: wp-includes/class-wp-customize-setting.php:400
     */
    public static function CUSTOMIZE_PREVIEW(string $thisId): string {
        return "customize_preview_" . $thisId;
    }


    /**
     * Fires when the WP_Customize_Setting::preview() method is called for settings not handled as theme_mods or options.
     *
     * Source: wp-includes/class-wp-customize-setting.php:412
     */
    public static function CUSTOMIZE_PREVIEW_THIS_TYPE(string $thisType): string {
        return "customize_preview_" . $thisType;
    }


    /**
     * Fires once WordPress has loaded, allowing scripts and styles to be initialized.
     *
     * Source: wp-includes/class-wp-customize-manager.php:934
     */
    public static string $CUSTOMIZE_REGISTER = "customize_register";

    /**
     * Fires just before the current Customizer control is rendered.
     *
     * Source: wp-includes/class-wp-customize-control.php:403
     */
    public static string $CUSTOMIZE_RENDER_CONTROL = "customize_render_control";

    /**
     * Fires just before a specific Customizer control is rendered.
     *
     * Source: wp-includes/class-wp-customize-control.php:415
     */
    public static function CUSTOMIZE_RENDER_CONTROL(string $thisId): string {
        return "customize_render_control_" . $thisId;
    }


    /**
     * Fires before rendering a Customizer panel.
     *
     * Source: wp-includes/class-wp-customize-panel.php:282
     */
    public static string $CUSTOMIZE_RENDER_PANEL = "customize_render_panel";

    /**
     * Fires before rendering a specific Customizer panel.
     *
     * Source: wp-includes/class-wp-customize-panel.php:292
     */
    public static function CUSTOMIZE_RENDER_PANEL(string $thisId): string {
        return "customize_render_panel_" . $thisId;
    }


    /**
     * Fires immediately after partials are rendered.
     *
     * Source: wp-includes/customize/class-wp-customize-selective-refresh.php:393
     */
    public static string $CUSTOMIZE_RENDER_PARTIALS_AFTER = "customize_render_partials_after";

    /**
     * Fires immediately before partials are rendered.
     *
     * Source: wp-includes/customize/class-wp-customize-selective-refresh.php:344
     */
    public static string $CUSTOMIZE_RENDER_PARTIALS_BEFORE = "customize_render_partials_before";

    /**
     * Fires before rendering a Customizer section.
     *
     * Source: wp-includes/class-wp-customize-section.php:304
     */
    public static string $CUSTOMIZE_RENDER_SECTION = "customize_render_section";

    /**
     * Fires before rendering a specific Customizer section.
     *
     * Source: wp-includes/class-wp-customize-section.php:313
     */
    public static function CUSTOMIZE_RENDER_SECTION(string $thisId): string {
        return "customize_render_section_" . $thisId;
    }


    /**
     * Fires once the theme has switched in the Customizer, but before settings have been saved.
     *
     * Source: wp-includes/class-wp-customize-manager.php:3538
     */
    public static string $CUSTOMIZE_SAVE = "customize_save";

    /**
     * Fires after Customize settings have been saved.
     *
     * Source: wp-includes/class-wp-customize-manager.php:3591
     */
    public static string $CUSTOMIZE_SAVE_AFTER = "customize_save_after";

    /**
     * Fires before save validation happens.
     *
     * Source: wp-includes/class-wp-customize-manager.php:2770
     */
    public static string $CUSTOMIZE_SAVE_VALIDATION_BEFORE = "customize_save_validation_before";

    /**
     * Fires when the WP_Customize_Setting::save() method is called.
     *
     * Source: wp-includes/class-wp-customize-setting.php:539
     */
    public static function CUSTOMIZE_SAVE_ID_BASE(string $id_base): string {
        return "customize_save_" . $id_base;
    }


    /**
     * Fires when the WP_Customize_Setting::update() method is called for settings not handled as theme_mods or options.
     *
     * Source: wp-includes/class-wp-customize-setting.php:704
     */
    public static function CUSTOMIZE_UPDATE_THIS_TYPE(string $thisType): string {
        return "customize_update_" . $thisType;
    }


    /**
     * Fires just before the submit button in the custom header options form.
     *
     * Source: wp-admin/includes/class-custom-image-header.php:796
     */
    public static string $CUSTOM_HEADER_OPTIONS = "custom_header_options";

    /**
     * Fires in the middle of built-in meta box registration.
     *
     * Source: wp-admin/includes/meta-boxes.php:1561
     */
    public static string $DBX_POST_ADVANCED = "dbx_post_advanced";

    /**
     * Fires after all meta box sections have been output, before the closing #post-body div.
     *
     * Source: wp-admin/edit-form-advanced.php:723
     */
    public static string $DBX_POST_SIDEBAR = "dbx_post_sidebar";

    /**
     * Fires after a plugin is deactivated.
     *
     * Source: wp-admin/includes/plugin.php:828
     */
    public static string $DEACTIVATED_PLUGIN = "deactivated_plugin";

    /**
     * Fires before a network site is deactivated.
     *
     * Source: wp-admin/network/sites.php:277
     */
    public static string $DEACTIVATE_BLOG = "deactivate_blog";

    /**
     * Fires as a specific plugin is being deactivated.
     *
     * Source: wp-admin/includes/plugin.php:814
     */
    public static function DEACTIVATE_PLUGIN(string $plugin): string {
        return "deactivate_" . $plugin;
    }


    /**
     * Fires after the site is deleted from the network.
     *
     * Source: wp-includes/ms-site.php:292
     */
    public static string $DELETED_BLOG = "deleted_blog";

    /**
     * Fires immediately after a comment is deleted from the database.
     *
     * Source: wp-includes/comment.php:1496
     */
    public static string $DELETED_COMMENT = "deleted_comment";

    /**
     * Fires after a link has been deleted.
     *
     * Source: wp-admin/includes/bookmark.php:112
     */
    public static string $DELETED_LINK = "deleted_link";

    /**
     * Fires after an option has been deleted.
     *
     * Source: wp-includes/option.php:785
     */
    public static string $DELETED_OPTION = "deleted_option";

    /**
     * Fires immediately after a plugin deletion attempt.
     *
     * Source: wp-admin/includes/plugin.php:988
     */
    public static string $DELETED_PLUGIN = "deleted_plugin";

    /**
     * Fires immediately after a post is deleted from the database.
     *
     * Source: wp-includes/post.php:3475
     */
    public static string $DELETED_POST = "deleted_post";

    /**
     * Fires immediately after deleting metadata for a post.
     *
     * Source: wp-includes/meta.php:536
     */
    public static string $DELETED_POSTMETA = "deleted_postmeta";

    /**
     * Fires after a transient is deleted.
     *
     * Source: wp-includes/option.php:1911
     */
    public static string $DELETED_SITE_TRANSIENT = "deleted_site_transient";

    /**
     * Fires immediately after an object-term relationship is deleted.
     *
     * Source: wp-includes/taxonomy.php:2975
     */
    public static string $DELETED_TERM_RELATIONSHIPS = "deleted_term_relationships";

    /**
     * Fires immediately after a term taxonomy ID is deleted.
     *
     * Source: wp-includes/taxonomy.php:2106
     */
    public static string $DELETED_TERM_TAXONOMY = "deleted_term_taxonomy";

    /**
     * Fires immediately after a theme deletion attempt.
     *
     * Source: wp-admin/includes/theme.php:96
     */
    public static string $DELETED_THEME = "deleted_theme";

    /**
     * Fires after a transient is deleted.
     *
     * Source: wp-includes/option.php:835
     */
    public static string $DELETED_TRANSIENT = "deleted_transient";

    /**
     * Fires immediately after a user is deleted from the database.
     *
     * Source: wp-admin/includes/user.php:447
     */
    public static string $DELETED_USER = "deleted_user";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2300
     */
    public static string $DELETED_USERMETA = "deleted_usermeta";

    /**
     * Fires immediately after deleting post or comment metadata of a specific type.
     *
     * Source: wp-includes/meta.php:1083
     */
    public static function DELETED_META_TYPEMETA(string $meta_type): string {
        return "deleted_" . $meta_type;
    }


    /**
     * Fires immediately after deleting metadata of a specific type.
     *
     * Source: wp-includes/meta.php:525
     */
    public static function DELETED_META_TYPE_META(string $meta_type): string {
        return "deleted_" . $meta_type;
    }


    /**
     * Fires before an attachment is deleted, at the start of wp_delete_attachment() .
     *
     * Source: wp-includes/post.php:6404
     */
    public static string $DELETE_ATTACHMENT = "delete_attachment";

    /**
     * Fires before a site is deleted.
     *
     * Source: wp-includes/ms-site.php:250
     */
    public static string $DELETE_BLOG = "delete_blog";

    /**
     * Fires immediately before a comment is deleted from the database.
     *
     * Source: wp-includes/comment.php:1468
     */
    public static string $DELETE_COMMENT = "delete_comment";

    /**
     * Fires before a link is deleted.
     *
     * Source: wp-admin/includes/bookmark.php:99
     */
    public static string $DELETE_LINK = "delete_link";

    /**
     * Fires immediately before an option is deleted.
     *
     * Source: wp-includes/option.php:749
     */
    public static string $DELETE_OPTION = "delete_option";

    /**
     * Fires after a specific option has been deleted.
     *
     * Source: wp-includes/option.php:776
     */
    public static function DELETE_OPTION_OPTION(string $option): string {
        return "delete_option_" . $option;
    }


    /**
     * Fires immediately before a plugin deletion attempt.
     *
     * Source: wp-admin/includes/plugin.php:968
     */
    public static string $DELETE_PLUGIN = "delete_plugin";

    /**
     * Fires immediately before a post is deleted from the database.
     *
     * Source: wp-includes/post.php:3459
     */
    public static string $DELETE_POST = "delete_post";

    /**
     * Fires immediately before deleting metadata for a post.
     *
     * Source: wp-includes/meta.php:487
     */
    public static string $DELETE_POSTMETA = "delete_postmeta";

    /**
     * Fires after a network option has been deleted.
     *
     * Source: wp-includes/option.php:1729
     */
    public static string $DELETE_SITE_OPTION = "delete_site_option";

    /**
     * Fires after a specific network option has been deleted.
     *
     * Source: wp-includes/option.php:1718
     */
    public static function DELETE_SITE_OPTION_OPTION(string $option): string {
        return "delete_site_option_" . $option;
    }


    /**
     * Fires immediately before a specific site transient is deleted.
     *
     * Source: wp-includes/option.php:1888
     */
    public static function DELETE_SITE_TRANSIENT_TRANSIENT(string $transient): string {
        return "delete_site_transient_" . $transient;
    }


    /**
     * Fires after a term is deleted from the database and the cache is cleaned.
     *
     * Source: wp-includes/taxonomy.php:2130
     */
    public static string $DELETE_TERM = "delete_term";

    /**
     * Fires immediately before an object-term relationship is deleted.
     *
     * Source: wp-includes/taxonomy.php:2958
     */
    public static string $DELETE_TERM_RELATIONSHIPS = "delete_term_relationships";

    /**
     * Fires immediately before a term taxonomy ID is deleted.
     *
     * Source: wp-includes/taxonomy.php:2095
     */
    public static string $DELETE_TERM_TAXONOMY = "delete_term_taxonomy";

    /**
     * Fires immediately before a theme deletion attempt.
     *
     * Source: wp-admin/includes/theme.php:82
     */
    public static string $DELETE_THEME = "delete_theme";

    /**
     * Fires immediately before a specific transient is deleted.
     *
     * Source: wp-includes/option.php:812
     */
    public static function DELETE_TRANSIENT_TRANSIENT(string $transient): string {
        return "delete_transient_" . $transient;
    }


    /**
     * Fires immediately before a user is deleted from the database.
     *
     * Source: wp-admin/includes/user.php:368
     */
    public static string $DELETE_USER = "delete_user";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2289
     */
    public static string $DELETE_USERMETA = "delete_usermeta";

    /**
     * Fires at the end of the delete users form prior to the confirm button.
     *
     * Source: wp-admin/users.php:392
     */
    public static string $DELETE_USER_FORM = "delete_user_form";

    /**
     * Fires immediately after a widget has been marked for deletion.
     *
     * Source: wp-admin/widgets-form.php:169
     */
    public static string $DELETE_WIDGET = "delete_widget";

    /**
     * Fires immediately before deleting post or comment metadata of a specific type.
     *
     * Source: wp-includes/meta.php:1052
     */
    public static function DELETE_META_TYPEMETA(string $meta_type): string {
        return "delete_" . $meta_type;
    }


    /**
     * Fires immediately before deleting metadata of a specific type.
     *
     * Source: wp-includes/meta.php:476
     */
    public static function DELETE_META_TYPE_META(string $meta_type): string {
        return "delete_" . $meta_type;
    }


    /**
     * Fires after a term in a specific taxonomy is deleted.
     *
     * Source: wp-includes/taxonomy.php:2151
     */
    public static function DELETE_TAXONOMY(string $taxonomy): string {
        return "delete_" . $taxonomy;
    }


    /**
     * Fires when a deprecated argument is called.
     *
     * Source: wp-includes/functions.php:5647
     */
    public static string $DEPRECATED_ARGUMENT_RUN = "deprecated_argument_run";

    /**
     * Fires when a deprecated constructor is called.
     *
     * Source: wp-includes/functions.php:5453
     */
    public static string $DEPRECATED_CONSTRUCTOR_RUN = "deprecated_constructor_run";

    /**
     * Fires when a deprecated file is called.
     *
     * Source: wp-includes/functions.php:5551
     */
    public static string $DEPRECATED_FILE_INCLUDED = "deprecated_file_included";

    /**
     * Fires when a deprecated function is called.
     *
     * Source: wp-includes/functions.php:5363
     */
    public static string $DEPRECATED_FUNCTION_RUN = "deprecated_function_run";

    /**
     * Fires when a deprecated hook is called.
     *
     * Source: wp-includes/functions.php:5736
     */
    public static string $DEPRECATED_HOOK_RUN = "deprecated_hook_run";

    /**
     * Fires when the given function is being used incorrectly.
     *
     * Source: wp-includes/functions.php:5801
     */
    public static string $DOING_IT_WRONG_RUN = "doing_it_wrong_run";

    /**
     * Fires immediately after the `do_pings` event to hook services individually.
     *
     * Source: wp-includes/comment.php:2883
     */
    public static string $DO_ALL_PINGS = "do_all_pings";

    /**
     * Fired when the template loader determines a favicon.ico request.
     *
     * Source: wp-includes/template-loader.php:45
     */
    public static string $DO_FAVICON = "do_favicon";

    /**
     * Fires when serving the favicon.ico file.
     *
     * Source: wp-includes/functions.php:1728
     */
    public static string $DO_FAVICONICO = "do_faviconico";

    /**
     * Fires once the given feed is loaded.
     *
     * Source: wp-includes/functions.php:1621
     */
    public static function DO_FEED_FEED(string $feed): string {
        return "do_feed_" . $feed;
    }


    /**
     * Fires after meta boxes have been added.
     *
     * Source: wp-admin/includes/meta-boxes.php:1631
     */
    public static string $DO_META_BOXES = "do_meta_boxes";

    /**
     * Fired when the template loader determines a robots.txt request.
     *
     * Source: wp-includes/template-loader.php:37
     */
    public static string $DO_ROBOTS = "do_robots";

    /**
     * Fires when displaying the robots.txt file.
     *
     * Source: wp-includes/functions.php:1696
     */
    public static string $DO_ROBOTSTXT = "do_robotstxt";

    /**
     * Fires before a widget's display callback is called.
     *
     * Source: wp-includes/widgets.php:832
     */
    public static string $DYNAMIC_SIDEBAR = "dynamic_sidebar";

    /**
     * Fires after widgets are rendered in a dynamic sidebar.
     *
     * Source: wp-includes/widgets.php:856
     */
    public static string $DYNAMIC_SIDEBAR_AFTER = "dynamic_sidebar_after";

    /**
     * Fires before widgets are rendered in a dynamic sidebar.
     *
     * Source: wp-includes/widgets.php:728
     */
    public static string $DYNAMIC_SIDEBAR_BEFORE = "dynamic_sidebar_before";

    /**
     * Fires after a term has been updated, and the term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3374
     */
    public static string $EDITED_TERM = "edited_term";

    /**
     * Fires immediately after a term is updated in the database, but before its term-taxonomy relationship is updated.
     *
     * Source: wp-includes/taxonomy.php:3291
     */
    public static string $EDITED_TERMS = "edited_terms";

    /**
     * Fires immediately after a term to delete's children are reassigned a parent.
     *
     * Source: wp-includes/taxonomy.php:2041
     */
    public static string $EDITED_TERM_TAXONOMIES = "edited_term_taxonomies";

    /**
     * Fires immediately after a term-taxonomy relationship is updated.
     *
     * Source: wp-includes/taxonomy.php:3317
     */
    public static string $EDITED_TERM_TAXONOMY = "edited_term_taxonomy";

    /**
     * Fires after a term for a specific taxonomy has been updated, and the term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3394
     */
    public static function EDITED_TAXONOMY(string $taxonomy): string {
        return "edited_" . $taxonomy;
    }


    /**
     * Fires once an existing attachment has been updated.
     *
     * Source: wp-includes/post.php:4617
     */
    public static string $EDIT_ATTACHMENT = "edit_attachment";

    /**
     * Fires at the end of the Edit Category form.
     *
     * Source: wp-admin/edit-tags.php:558
     */
    public static string $EDIT_CATEGORY_FORM = "edit_category_form";

    /**
     * Fires after the Edit Category form fields are displayed.
     *
     * Source: wp-admin/edit-tag-form.php:218
     */
    public static string $EDIT_CATEGORY_FORM_FIELDS = "edit_category_form_fields";

    /**
     * Fires before the Edit Category form.
     *
     * Source: wp-admin/edit-tag-form.php:24
     */
    public static string $EDIT_CATEGORY_FORM_PRE = "edit_category_form_pre";

    /**
     * Fires immediately after a comment is updated in the database.
     *
     * Source: wp-includes/comment.php:2624
     */
    public static string $EDIT_COMMENT = "edit_comment";

    /**
     * Fires after 'normal' context meta boxes have been output for all post types other than 'page'.
     *
     * Source: wp-admin/edit-form-advanced.php:707
     */
    public static string $EDIT_FORM_ADVANCED = "edit_form_advanced";

    /**
     * Fires after the content editor.
     *
     * Source: wp-admin/edit-form-advanced.php:649
     */
    public static string $EDIT_FORM_AFTER_EDITOR = "edit_form_after_editor";

    /**
     * Fires after the title field.
     *
     * Source: wp-admin/edit-form-advanced.php:581
     */
    public static string $EDIT_FORM_AFTER_TITLE = "edit_form_after_title";

    /**
     * Fires before the permalink field in the edit form.
     *
     * Source: wp-admin/edit-form-advanced.php:532
     */
    public static string $EDIT_FORM_BEFORE_PERMALINK = "edit_form_before_permalink";

    /**
     * Fires at the beginning of the edit form.
     *
     * Source: wp-admin/edit-form-advanced.php:500
     */
    public static string $EDIT_FORM_TOP = "edit_form_top";

    /**
     * Fires after a link was updated in the database.
     *
     * Source: wp-admin/includes/bookmark.php:254
     */
    public static string $EDIT_LINK = "edit_link";

    /**
     * Fires at the end of the Edit Link form.
     *
     * Source: wp-admin/edit-tags.php:568
     */
    public static string $EDIT_LINK_CATEGORY_FORM = "edit_link_category_form";

    /**
     * Fires after the Edit Link Category form fields are displayed.
     *
     * Source: wp-admin/edit-tag-form.php:228
     */
    public static string $EDIT_LINK_CATEGORY_FORM_FIELDS = "edit_link_category_form_fields";

    /**
     * Fires before the Edit Link Category form.
     *
     * Source: wp-admin/edit-tag-form.php:34
     */
    public static string $EDIT_LINK_CATEGORY_FORM_PRE = "edit_link_category_form_pre";

    /**
     * Fires after 'normal' context meta boxes have been output for the 'page' post type.
     *
     * Source: wp-admin/edit-form-advanced.php:698
     */
    public static string $EDIT_PAGE_FORM = "edit_page_form";

    /**
     * Fires once an existing post has been updated.
     *
     * Source: wp-includes/post.php:4673
     */
    public static string $EDIT_POST = "edit_post";

    /**
     * Fires once an existing post has been updated.
     *
     * Source: wp-includes/post.php:4663
     */
    public static function EDIT_POST_POST_POST_TYPE(string $post_type): string {
        return "edit_post_" . $post_type;
    }


    /**
     * Fires at the end of the Edit Term form.
     *
     * Source: wp-admin/edit-tag-form.php:276
     */
    public static string $EDIT_TAG_FORM = "edit_tag_form";

    /**
     * Fires after the Edit Tag form fields are displayed.
     *
     * Source: wp-admin/edit-tag-form.php:238
     */
    public static string $EDIT_TAG_FORM_FIELDS = "edit_tag_form_fields";

    /**
     * Fires before the Edit Tag form.
     *
     * Source: wp-admin/edit-tag-form.php:44
     */
    public static string $EDIT_TAG_FORM_PRE = "edit_tag_form_pre";

    /**
     * Fires after a term has been updated, but before the term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3333
     */
    public static string $EDIT_TERM = "edit_term";

    /**
     * Fires immediately before the given terms are edited.
     *
     * Source: wp-includes/taxonomy.php:3257
     */
    public static string $EDIT_TERMS = "edit_terms";

    /**
     * Fires immediately before a term to delete's children are reassigned a parent.
     *
     * Source: wp-includes/taxonomy.php:2026
     */
    public static string $EDIT_TERM_TAXONOMIES = "edit_term_taxonomies";

    /**
     * Fires immediate before a term-taxonomy relationship is updated.
     *
     * Source: wp-includes/taxonomy.php:3303
     */
    public static string $EDIT_TERM_TAXONOMY = "edit_term_taxonomy";

    /**
     * Fires after a new user has been created.
     *
     * Source: wp-admin/includes/user.php:241
     */
    public static string $EDIT_USER_CREATED_USER = "edit_user_created_user";

    /**
     * Fires after the 'About the User' settings table on the 'Edit User' screen.
     *
     * Source: wp-admin/user-edit.php:847
     */
    public static string $EDIT_USER_PROFILE = "edit_user_profile";

    /**
     * Fires before the page loads on the 'Edit User' screen.
     *
     * Source: wp-admin/user-edit.php:154
     */
    public static string $EDIT_USER_PROFILE_UPDATE = "edit_user_profile_update";

    /**
     * Fires after a term in a specific taxonomy has been updated, but before the term cache has been cleaned.
     *
     * Source: wp-includes/taxonomy.php:3353
     */
    public static function EDIT_TAXONOMY(string $taxonomy): string {
        return "edit_" . $taxonomy;
    }


    /**
     * Prints additional content after the embed excerpt.
     *
     * Source: wp-includes/theme-compat/embed-content.php:109
     */
    public static string $EMBED_CONTENT = "embed_content";

    /**
     * Prints additional meta content in the embed template.
     *
     * Source: wp-includes/theme-compat/embed-content.php:122
     */
    public static string $EMBED_CONTENT_META = "embed_content_meta";

    /**
     * Prints scripts or data before the closing body tag in the embed template.
     *
     * Source: wp-includes/theme-compat/footer-embed.php:18
     */
    public static string $EMBED_FOOTER = "embed_footer";

    /**
     * Prints scripts or data in the embed template head tag.
     *
     * Source: wp-includes/theme-compat/header-embed.php:29
     */
    public static string $EMBED_HEAD = "embed_head";

    /**
     * Fires after fetching the post thumbnail HTML.
     *
     * Source: wp-includes/post-thumbnail-template.php:214
     */
    public static string $END_FETCH_POST_THUMBNAIL_HTML = "end_fetch_post_thumbnail_html";

    /**
     * Fires after enqueuing block assets for both editor and front-end.
     *
     * Source: wp-includes/script-loader.php:2376
     */
    public static string $ENQUEUE_BLOCK_ASSETS = "enqueue_block_assets";

    /**
     * Fires after block assets have been enqueued for the editing interface.
     *
     * Source: wp-admin/edit-form-blocks.php:272
     */
    public static string $ENQUEUE_BLOCK_EDITOR_ASSETS = "enqueue_block_editor_assets";

    /**
     * Fires when scripts and styles are enqueued for the embed iframe.
     *
     * Source: wp-includes/embed.php:1056
     */
    public static string $ENQUEUE_EMBED_SCRIPTS = "enqueue_embed_scripts";

    /**
     * Fires at the end of the export filters form.
     *
     * Source: wp-admin/export.php:319
     */
    public static string $EXPORT_FILTERS = "export_filters";

    /**
     * Fires at the beginning of an export, before any headers are sent.
     *
     * Source: wp-admin/includes/export.php:77
     */
    public static string $EXPORT_WP = "export_wp";

    /**
     * Fires when a recovery mode key is generated.
     *
     * Source: wp-includes/class-wp-recovery-mode-key-service.php:76
     */
    public static string $GENERATE_RECOVERY_MODE_KEY = "generate_recovery_mode_key";

    /**
     * Fires after the rewrite rules are generated.
     *
     * Source: wp-includes/class-wp-rewrite.php:1459
     */
    public static string $GENERATE_REWRITE_RULES = "generate_rewrite_rules";

    /**
     * Fires before the footer template file is loaded.
     *
     * Source: wp-includes/general-template.php:82
     */
    public static string $GET_FOOTER = "get_footer";

    /**
     * Fires before the header template file is loaded.
     *
     * Source: wp-includes/general-template.php:38
     */
    public static string $GET_HEADER = "get_header";

    /**
     * Fires before the sidebar template file is loaded.
     *
     * Source: wp-includes/general-template.php:126
     */
    public static string $GET_SIDEBAR = "get_sidebar";

    /**
     * Fires before an attempt is made to locate and load a template part.
     *
     * Source: wp-includes/general-template.php:202
     */
    public static string $GET_TEMPLATE_PART = "get_template_part";

    /**
     * Fires before the specified template part file is loaded.
     *
     * Source: wp-includes/general-template.php:181
     */
    public static function GET_TEMPLATE_PART_SLUG(string $slug): string {
        return "get_template_part_" . $slug;
    }


    /**
     * Fires after the user is granted Super Admin privileges.
     *
     * Source: wp-includes/capabilities.php:1137
     */
    public static string $GRANTED_SUPER_ADMIN = "granted_super_admin";

    /**
     * Fires before the user is granted Super Admin privileges.
     *
     * Source: wp-includes/capabilities.php:1120
     */
    public static string $GRANT_SUPER_ADMIN = "grant_super_admin";

    /**
     * Fires when Heartbeat ticks in no-privilege environments.
     *
     * Source: wp-admin/includes/ajax-actions.php:66
     */
    public static string $HEARTBEAT_NOPRIV_TICK = "heartbeat_nopriv_tick";

    /**
     * Fires when Heartbeat ticks in logged-in environments.
     *
     * Source: wp-admin/includes/ajax-actions.php:3488
     */
    public static string $HEARTBEAT_TICK = "heartbeat_tick";

    /**
     * Fires before the cURL request is executed.
     *
     * Source: wp-includes/class-wp-http-curl.php:231
     */
    public static string $HTTP_API_CURL = "http_api_curl";

    /**
     * Fires after an HTTP API response is received and before the response is returned.
     *
     * Source: wp-includes/class-wp-http.php:420
     */
    public static string $HTTP_API_DEBUG = "http_api_debug";

    /**
     * Fires after WordPress has finished loading but before any headers are sent.
     *
     * Source: wp-settings.php:617
     */
    public static string $INIT = "init";

    /**
     * Fires before each tab on the Install Plugins screen is loaded.
     *
     * Source: wp-admin/plugin-install.php:82
     */
    public static function INSTALL_PLUGINS_PRE_TAB(string $tab): string {
        return "install_plugins_pre_" . $tab;
    }


    /**
     * Fires before the Plugin Install table header pagination is displayed.
     *
     * Source: wp-admin/includes/class-wp-plugin-install-list-table.php:404
     */
    public static string $INSTALL_PLUGINS_TABLE_HEADER = "install_plugins_table_header";

    /**
     * Fires after the plugins list table in each tab of the Install Plugins screen.
     *
     * Source: wp-admin/plugin-install.php:196
     */
    public static function INSTALL_PLUGINS_TAB(string $tab): string {
        return "install_plugins_" . $tab;
    }


    /**
     * Fires before each of the tabs are rendered on the Install Themes page.
     *
     * Source: wp-admin/theme-install.php:104
     */
    public static function INSTALL_THEMES_PRE_TAB(string $tab): string {
        return "install_themes_pre_" . $tab;
    }


    /**
     * Fires in the Install Themes list table header.
     *
     * Source: wp-admin/includes/class-wp-theme-install-list-table.php:216
     */
    public static string $INSTALL_THEMES_TABLE_HEADER = "install_themes_table_header";

    /**
     * Fires at the top of each of the tabs on the Install Themes page.
     *
     * Source: wp-admin/theme-install.php:296
     */
    public static function INSTALL_THEMES_TAB(string $tab): string {
        return "install_themes_" . $tab;
    }


    /**
     * Fires immediately after an existing user is invited to join the site, but before the notification is sent.
     *
     * Source: wp-admin/user-new.php:111
     */
    public static string $INVITE_USER = "invite_user";

    /**
     * Fires after the opening tag for the admin footer.
     *
     * Source: wp-admin/admin-footer.php:31
     */
    public static string $IN_ADMIN_FOOTER = "in_admin_footer";

    /**
     * Fires at the beginning of the content section in an admin page.
     *
     * Source: wp-admin/admin-header.php:267
     */
    public static string $IN_ADMIN_HEADER = "in_admin_header";

    /**
     * Fires at the end of the update message container in each row of the plugins list table.
     *
     * Source: wp-admin/includes/update.php:589
     */
    public static function IN_PLUGIN_UPDATE_MESSAGE_FILE(string $file): string {
        return "in_plugin_update_message-" . $file;
    }


    /**
     * Fires at the end of the update message container in each row of the themes list table.
     *
     * Source: wp-admin/includes/update.php:810
     */
    public static function IN_THEME_UPDATE_MESSAGE_THEME_KEY(string $theme_key): string {
        return "in_theme_update_message-" . $theme_key;
    }


    /**
     * Fires at the end of the widget control form.
     *
     * Source: wp-includes/class-wp-widget.php:553
     */
    public static string $IN_WIDGET_FORM = "in_widget_form";

    /**
     * Fires when `is_wp_error() ` is called and its parameter is an instance of `WP_Error`.
     *
     * Source: wp-includes/load.php:1599
     */
    public static string $IS_WP_ERROR_INSTANCE = "is_wp_error_instance";

    /**
     *
     *
     * Source: wp-admin/admin.php:331
     */
    public static string $LOAD_CATEGORIES_PHP = "load-categories.php";

    /**
     *
     *
     * Source: wp-admin/admin.php:333
     */
    public static string $LOAD_EDIT_LINK_CATEGORIES_PHP = "load-edit-link-categories.php";

    /**
     * Fires before an importer screen is loaded.
     *
     * Source: wp-admin/admin.php:335
     */
    public static function LOAD_IMPORTER_IMPORTER(string $importer): string {
        return "load-importer-" . $importer;
    }


    /**
     *
     *
     * Source: wp-admin/admin.php:326
     */
    public static string $LOAD_PAGE_NEW_PHP = "load-page-new.php";

    /**
     *
     *
     * Source: wp-admin/admin.php:328
     */
    public static string $LOAD_PAGE_PHP = "load-page.php";

    /**
     * Fires early when editing the widgets displayed in sidebars.
     *
     * Source: wp-admin/includes/ajax-actions.php:2336
     */
    public static string $LOAD_WIDGETS_PHP = "load-widgets.php";

    /**
     * Fires before a particular screen is loaded.
     *
     * Source: wp-admin/admin.php:385
     */
    public static function LOAD_PAGENOW(string $pagenow): string {
        return "load-" . $pagenow;
    }


    /**
     * Fires before a particular screen is loaded.
     *
     * Source: wp-admin/admin.php:237
     */
    public static function LOAD_PAGE_HOOK(string $page_hook): string {
        return "load-" . $page_hook;
    }


    /**
     * Fires before a particular screen is loaded.
     *
     * Source: wp-admin/admin.php:284
     */
    public static function LOAD_PLUGIN_PAGE(string $plugin_page): string {
        return "load-" . $plugin_page;
    }


    /**
     * Fires before MagpieRSS is loaded, to optionally replace it.
     *
     * Source: wp-includes/rss.php:27
     */
    public static string $LOAD_FEED_ENGINE = "load_feed_engine";

    /**
     * Fires before the MO translation file is loaded.
     *
     * Source: wp-includes/l10n.php:749
     */
    public static string $LOAD_TEXTDOMAIN = "load_textdomain";

    /**
     * Enqueue scripts and styles for the login page.
     *
     * Source: wp-login.php:114
     */
    public static string $LOGIN_ENQUEUE_SCRIPTS = "login_enqueue_scripts";

    /**
     * Fires in the login page footer.
     *
     * Source: wp-login.php:394
     */
    public static string $LOGIN_FOOTER = "login_footer";

    /**
     * Fires following the 'Password' field in the login form.
     *
     * Source: wp-login.php:1437
     */
    public static string $LOGIN_FORM = "login_form";

    /**
     * Fires before a specified login form action.
     *
     * Source: wp-login.php:520
     */
    public static function LOGIN_FORM_ACTION(string $action): string {
        return "login_form_" . $action;
    }


    /**
     * Fires in the login page header after scripts are enqueued.
     *
     * Source: wp-login.php:121
     */
    public static string $LOGIN_HEAD = "login_head";

    /**
     * Fires in the login page header after the body tag is opened.
     *
     * Source: wp-login.php:205
     */
    public static string $LOGIN_HEADER = "login_header";

    /**
     * Fires when the login form is initialized.
     *
     * Source: wp-login.php:495
     */
    public static string $LOGIN_INIT = "login_init";

    /**
     * Fires once the loop has ended.
     *
     * Source: wp-includes/class-wp-query.php:3614
     */
    public static string $LOOP_END = "loop_end";

    /**
     * Fires if no results are found in a post query.
     *
     * Source: wp-includes/class-wp-query.php:3625
     */
    public static string $LOOP_NO_RESULTS = "loop_no_results";

    /**
     * Fires once the loop is started.
     *
     * Source: wp-includes/class-wp-query.php:3587
     */
    public static string $LOOP_START = "loop_start";

    /**
     * Fires inside the lostpassword form tags, before the hidden fields.
     *
     * Source: wp-login.php:844
     */
    public static string $LOSTPASSWORD_FORM = "lostpassword_form";

    /**
     * Fires before errors are returned from a password reset request.
     *
     * Source: wp-includes/user.php:3083
     */
    public static string $LOSTPASSWORD_POST = "lostpassword_post";

    /**
     * Fires before the lost password form.
     *
     * Source: wp-login.php:820
     */
    public static string $LOST_PASSWORD = "lost_password";

    /**
     * Fires when the 'deleted' status is added to a site.
     *
     * Source: wp-includes/ms-site.php:1216
     */
    public static string $MAKE_DELETE_BLOG = "make_delete_blog";

    /**
     * Fires when the 'spam' status is removed from a site.
     *
     * Source: wp-includes/ms-site.php:1154
     */
    public static string $MAKE_HAM_BLOG = "make_ham_blog";

    /**
     * Fires after the user is marked as a HAM user. Opposite of SPAM.
     *
     * Source: wp-includes/user.php:2466
     */
    public static string $MAKE_HAM_USER = "make_ham_user";

    /**
     * Fires when the 'spam' status is added to a site.
     *
     * Source: wp-includes/ms-site.php:1144
     */
    public static string $MAKE_SPAM_BLOG = "make_spam_blog";

    /**
     * Fires after the user is marked as a SPAM user.
     *
     * Source: wp-includes/user.php:2457
     */
    public static string $MAKE_SPAM_USER = "make_spam_user";

    /**
     * Fires when the 'deleted' status is removed from a site.
     *
     * Source: wp-includes/ms-site.php:1226
     */
    public static string $MAKE_UNDELETE_BLOG = "make_undelete_blog";

    /**
     * Fires when the default column output is displayed for a single row.
     *
     * Source: wp-admin/includes/class-wp-comments-list-table.php:1074
     */
    public static string $MANAGE_COMMENTS_CUSTOM_COLUMN = "manage_comments_custom_column";

    /**
     * Fires after the Filter submit button for comment types.
     *
     * Source: wp-admin/includes/class-wp-comments-list-table.php:441
     */
    public static string $MANAGE_COMMENTS_NAV = "manage_comments_nav";

    /**
     * Fires for each registered custom link column.
     *
     * Source: wp-admin/includes/class-wp-links-list-table.php:299
     */
    public static string $MANAGE_LINK_CUSTOM_COLUMN = "manage_link_custom_column";

    /**
     * Fires for each custom column in the Media list table.
     *
     * Source: wp-admin/includes/class-wp-media-list-table.php:671
     */
    public static string $MANAGE_MEDIA_CUSTOM_COLUMN = "manage_media_custom_column";

    /**
     * Fires in each custom column on the Posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1331
     */
    public static string $MANAGE_PAGES_CUSTOM_COLUMN = "manage_pages_custom_column";

    /**
     * Fires inside each custom column of the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:1256
     */
    public static string $MANAGE_PLUGINS_CUSTOM_COLUMN = "manage_plugins_custom_column";

    /**
     * Fires in each custom column in the Posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1345
     */
    public static string $MANAGE_POSTS_CUSTOM_COLUMN = "manage_posts_custom_column";

    /**
     * Fires immediately following the closing “actions” div in the tablenav for the posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:615
     */
    public static string $MANAGE_POSTS_EXTRA_TABLENAV = "manage_posts_extra_tablenav";

    /**
     * Fires for each registered custom column in the Sites list table.
     *
     * Source: wp-admin/includes/class-wp-ms-sites-list-table.php:576
     */
    public static string $MANAGE_SITES_CUSTOM_COLUMN = "manage_sites_custom_column";

    /**
     * Fires immediately following the closing “actions” div in the tablenav for the MS sites list table.
     *
     * Source: wp-admin/includes/class-wp-ms-sites-list-table.php:349
     */
    public static string $MANAGE_SITES_EXTRA_TABLENAV = "manage_sites_extra_tablenav";

    /**
     * Fires inside each custom column of the Multisite themes list table.
     *
     * Source: wp-admin/includes/class-wp-ms-themes-list-table.php:874
     */
    public static string $MANAGE_THEMES_CUSTOM_COLUMN = "manage_themes_custom_column";

    /**
     * Fires immediately following the closing “actions” div in the tablenav for the users list table.
     *
     * Source: wp-admin/includes/class-wp-users-list-table.php:337
     */
    public static string $MANAGE_USERS_EXTRA_TABLENAV = "manage_users_extra_tablenav";

    /**
     * Fires for each custom column of a specific post type in the Posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1363
     */
    public static function MANAGE_POST_POST_TYPE_POSTS_CUSTOM_COLUMN(string $post_type): string {
        return "manage_" . $post_type;
    }


    /**
     * Fires for each custom column in the Application Passwords list table.
     *
     * Source: wp-admin/includes/class-wp-application-passwords-list-table.php:141
     */
    public static function MANAGE_THIS_SCREEN_ID_CUSTOM_COLUMN(string $screenId): string {
        return "manage_" . $screenId;
    }


    /**
     * Fires in the JavaScript row template for each custom column in the Application Passwords list table.
     *
     * Source: wp-admin/includes/class-wp-application-passwords-list-table.php:251
     */
    public static function MANAGE_THIS_SCREEN_ID_CUSTOM_COLUMN_JS_TEMPLATE(string $screenId): string {
        return "manage_" . $screenId;
    }


    /**
     * Fires when the 'mature' status is added to a site.
     *
     * Source: wp-includes/ms-site.php:1168
     */
    public static string $MATURE_BLOG = "mature_blog";

    /**
     * Fires after the default media button(s) are displayed.
     *
     * Source: wp-includes/class-wp-editor.php:236
     */
    public static string $MEDIA_BUTTONS = "media_buttons";

    /**
     * Fires inside limited and specific upload-tab views in the legacy (pre-3.5.0) media popup.
     *
     * Source: wp-admin/media-upload.php:117
     */
    public static function MEDIA_UPLOAD_TAB(string $tab): string {
        return "media_upload_" . $tab;
    }


    /**
     * Fires inside specific upload-type views in the legacy (pre-3.5.0) media popup based on the current tab.
     *
     * Source: wp-admin/media-upload.php:105
     */
    public static function MEDIA_UPLOAD_TYPE(string $type): string {
        return "media_upload_" . $type;
    }


    /**
     * Fires after objects are added to the metadata lazy-load queue.
     *
     * Source: wp-includes/class-wp-metadata-lazyloader.php:105
     */
    public static string $METADATA_LAZYLOADER_QUEUED_OBJECTS = "metadata_lazyloader_queued_objects";

    /**
     * Fires after the current site and network have been detected and loaded in multisite's bootstrap.
     *
     * Source: wp-includes/ms-settings.php:123
     */
    public static string $MS_LOADED = "ms_loaded";

    /**
     * Fires when a network cannot be found based on the requested domain and path.
     *
     * Source: wp-includes/ms-load.php:355
     */
    public static string $MS_NETWORK_NOT_FOUND = "ms_network_not_found";

    /**
     * Fires when a network can be determined but a site cannot.
     *
     * Source: wp-includes/ms-load.php:414
     */
    public static string $MS_SITE_NOT_FOUND = "ms_site_not_found";

    /**
     * Fires once all must-use and network-activated plugins have loaded.
     *
     * Source: wp-settings.php:412
     */
    public static string $MUPLUGINS_LOADED = "muplugins_loaded";

    /**
     * Fires at the end of the 'Right Now' widget in the Network Admin dashboard.
     *
     * Source: wp-admin/includes/dashboard.php:521
     */
    public static string $MU_ACTIVITY_BOX_END = "mu_activity_box_end";

    /**
     * Fires once a single must-use plugin has loaded.
     *
     * Source: wp-settings.php:382
     */
    public static string $MU_PLUGIN_LOADED = "mu_plugin_loaded";

    /**
     * Fires at the end of the 'Right Now' widget in the Network Admin dashboard.
     *
     * Source: wp-admin/includes/dashboard.php:514
     */
    public static string $MU_RIGHTNOW_END = "mu_rightnow_end";

    /**
     * Fires before the sites list on the My Sites screen.
     *
     * Source: wp-admin/my-sites.php:93
     */
    public static string $MYBLOGS_ALLBLOGS_OPTIONS = "myblogs_allblogs_options";

    /**
     * Fires the requested handler action.
     *
     * Source: wp-admin/network/edit.php:38
     */
    public static function NETWORK_ADMIN_EDIT_ACTION(string $action): string {
        return "network_admin_edit_" . $action;
    }

    /**
     * Fires before the administration menu loads in the Network Admin.
     *
     * Source: wp-admin/includes/menu.php:135
     */
    public static string $NETWORK_ADMIN_MENU = "network_admin_menu";

    /**
     * Prints network admin screen notices.
     *
     * Source: wp-admin/admin-header.php:289
     */
    public static string $NETWORK_ADMIN_NOTICES = "network_admin_notices";

    /**
     * Fires once a single network-activated plugin has loaded.
     *
     * Source: wp-settings.php:402
     */
    public static string $NETWORK_PLUGIN_LOADED = "network_plugin_loaded";

    /**
     * Fires at the end of the site info form in network admin.
     *
     * Source: wp-admin/network/site-info.php:215
     */
    public static string $NETWORK_SITE_INFO_FORM = "network_site_info_form";

    /**
     * Fires after a new user has been created via the network site-new.php page.
     *
     * Source: wp-admin/network/site-new.php:136
     */
    public static string $NETWORK_SITE_NEW_CREATED_USER = "network_site_new_created_user";

    /**
     * Fires at the end of the new site form in network admin.
     *
     * Source: wp-admin/network/site-new.php:287
     */
    public static string $NETWORK_SITE_NEW_FORM = "network_site_new_form";

    /**
     * Fires after the list table on the Users screen in the Multisite Network Admin.
     *
     * Source: wp-admin/network/site-users.php:294
     */
    public static string $NETWORK_SITE_USERS_AFTER_LIST_TABLE = "network_site_users_after_list_table";

    /**
     * Fires after a user has been created via the network site-users.php page.
     *
     * Source: wp-admin/network/site-users.php:88
     */
    public static string $NETWORK_SITE_USERS_CREATED_USER = "network_site_users_created_user";

    /**
     * Fires after a new user has been created via the network user-new.php page.
     *
     * Source: wp-admin/network/user-new.php:64
     */
    public static string $NETWORK_USER_NEW_CREATED_USER = "network_user_new_created_user";

    /**
     * Fires at the end of the new user form in network admin.
     *
     * Source: wp-admin/network/user-new.php:146
     */
    public static string $NETWORK_USER_NEW_FORM = "network_user_new_form";

    /**
     * Fires in the OPML header.
     *
     * Source: wp-links-opml.php:43
     */
    public static string $OPML_HEAD = "opml_head";

    /**
     * Fires immediately after the label inside the 'Template' section of the 'Page Attributes' meta box.
     *
     * Source: wp-admin/includes/meta-boxes.php:990
     */
    public static string $PAGE_ATTRIBUTES_META_BOX_TEMPLATE = "page_attributes_meta_box_template";

    /**
     * Fires before the help hint text in the 'Page Attributes' meta box.
     *
     * Source: wp-admin/includes/meta-boxes.php:1021
     */
    public static string $PAGE_ATTRIBUTES_MISC_ATTRIBUTES = "page_attributes_misc_attributes";

    /**
     * Fires after the comment query vars have been parsed.
     *
     * Source: wp-includes/class-wp-comment-query.php:348
     */
    public static string $PARSE_COMMENT_QUERY = "parse_comment_query";

    /**
     * Fires after the network query vars have been parsed.
     *
     * Source: wp-includes/class-wp-network-query.php:164
     */
    public static string $PARSE_NETWORK_QUERY = "parse_network_query";

    /**
     * Fires after the main query vars have been parsed.
     *
     * Source: wp-includes/class-wp-query.php:1127
     */
    public static string $PARSE_QUERY = "parse_query";

    /**
     * Fires once all query variables for the current request have been parsed.
     *
     * Source: wp-includes/class-wp.php:399
     */
    public static string $PARSE_REQUEST = "parse_request";

    /**
     * Fires after the site query vars have been parsed.
     *
     * Source: wp-includes/class-wp-site-query.php:257
     */
    public static string $PARSE_SITE_QUERY = "parse_site_query";

    /**
     * Fires after taxonomy-related query vars have been parsed.
     *
     * Source: wp-includes/class-wp-query.php:1368
     */
    public static string $PARSE_TAX_QUERY = "parse_tax_query";

    /**
     * Fires after term query vars have been parsed.
     *
     * Source: wp-includes/class-wp-term-query.php:291
     */
    public static string $PARSE_TERM_QUERY = "parse_term_query";

    /**
     * Fires before the user's password is reset.
     *
     * Source: wp-includes/user.php:3282
     */
    public static string $PASSWORD_RESET = "password_reset";

    /**
     * Fires after the permalink structure is updated.
     *
     * Source: wp-includes/class-wp-rewrite.php:1949
     */
    public static string $PERMALINK_STRUCTURE_CHANGED = "permalink_structure_changed";

    /**
     * Fires at the end of the 'Personal Options' settings table on the user editing screen.
     *
     * Source: wp-admin/user-edit.php:388
     */
    public static string $PERSONAL_OPTIONS = "personal_options";

    /**
     * Fires before the page loads on the 'Profile' editing screen.
     *
     * Source: wp-admin/user-edit.php:145
     */
    public static string $PERSONAL_OPTIONS_UPDATE = "personal_options_update";

    /**
     * Fires after PHPMailer is initialized.
     *
     * Source: wp-includes/pluggable.php:536
     */
    public static string $PHPMAILER_INIT = "phpmailer_init";

    /**
     * Fires after a post pingback has been sent.
     *
     * Source: wp-includes/class-wp-xmlrpc-server.php:7054
     */
    public static string $PINGBACK_POST = "pingback_post";

    /**
     * Fires once activated plugins have loaded.
     *
     * Source: wp-settings.php:480
     */
    public static string $PLUGINS_LOADED = "plugins_loaded";

    /**
     * Fires once a single activated plugin has loaded.
     *
     * Source: wp-settings.php:457
     */
    public static string $PLUGIN_LOADED = "plugin_loaded";

    /**
     * Fires before creating WordPress options and populating their default values.
     *
     * Source: wp-admin/includes/schema.php:370
     */
    public static string $POPULATE_OPTIONS = "populate_options";

    /**
     * Fires after the upload button in the media upload interface.
     *
     * Source: wp-admin/includes/media.php:2273
     */
    public static string $POST_HTML_UPLOAD_UI = "post-html-upload-ui";

    /**
     * Fires after the upload interface loads.
     *
     * Source: wp-admin/includes/media.php:2246
     */
    public static string $POST_PLUPLOAD_UPLOAD_UI = "post-plupload-upload-ui";

    /**
     * Fires on the post upload UI screen.
     *
     * Source: wp-admin/includes/media.php:2293
     */
    public static string $POST_UPLOAD_UI = "post-upload-ui";

    /**
     * Fires to announce the query's current selection parameters.
     *
     * Source: wp-includes/class-wp-query.php:2921
     */
    public static string $POSTS_SELECTION = "posts_selection";

    /**
     * Fires for a given custom post action request.
     *
     * Source: wp-admin/post.php:363
     */
    public static function POST_ACTION_ACTION(string $action): string {
        return "post_action_" . $action;
    }


    /**
     * Fires at the end of the Discussion meta box on the post editing screen.
     *
     * Source: wp-admin/includes/meta-boxes.php:820
     */
    public static string $POST_COMMENT_STATUS_META_BOX_OPTIONS = "post_comment_status_meta_box-options";

    /**
     * Fires inside the post editor form tag.
     *
     * Source: wp-admin/edit-form-advanced.php:463
     */
    public static string $POST_EDIT_FORM_TAG = "post_edit_form_tag";

    /**
     * Fires inside the post locked dialog before the buttons are displayed.
     *
     * Source: wp-admin/includes/post.php:1818
     */
    public static string $POST_LOCKED_DIALOG = "post_locked_dialog";

    /**
     * Fires inside the dialog displayed when a user has lost the post lock.
     *
     * Source: wp-admin/includes/post.php:1855
     */
    public static string $POST_LOCK_LOST_DIALOG = "post_lock_lost_dialog";

    /**
     * Fires once a post has been added to the sticky list.
     *
     * Source: wp-includes/post.php:2922
     */
    public static string $POST_STUCK = "post_stuck";

    /**
     * Fires after the Save Draft (or Save as Pending) and Preview (or Preview Changes) buttons in the Publish meta box.
     *
     * Source: wp-admin/includes/meta-boxes.php:97
     */
    public static string $POST_SUBMITBOX_MINOR_ACTIONS = "post_submitbox_minor_actions";

    /**
     * Fires after the post time/date setting in the Publish meta box.
     *
     * Source: wp-admin/includes/meta-boxes.php:313
     */
    public static string $POST_SUBMITBOX_MISC_ACTIONS = "post_submitbox_misc_actions";

    /**
     * Fires at the beginning of the publishing actions section of the Publish meta box.
     *
     * Source: wp-admin/includes/meta-boxes.php:330
     */
    public static string $POST_SUBMITBOX_START = "post_submitbox_start";

    /**
     * Fires once a post has been removed from the sticky list.
     *
     * Source: wp-includes/post.php:2966
     */
    public static string $POST_UNSTUCK = "post_unstuck";

    /**
     * Fires once an existing post has been updated.
     *
     * Source: wp-includes/post.php:4686
     */
    public static string $POST_UPDATED = "post_updated";

    /**
     * Fires before the upload button in the media upload interface.
     *
     * Source: wp-admin/includes/media.php:2257
     */
    public static string $PRE_HTML_UPLOAD_UI = "pre-html-upload-ui";

    /**
     * Fires before the upload interface loads.
     *
     * Source: wp-admin/includes/media.php:2229
     */
    public static string $PRE_PLUPLOAD_UPLOAD_UI = "pre-plupload-upload-ui";

    /**
     * Fires just before the legacy (pre-3.5.0) upload interface is loaded.
     *
     * Source: wp-admin/includes/media.php:2139
     */
    public static string $PRE_UPLOAD_UI = "pre-upload-ui";

    /**
     * Fires when the site sign-up form is sent.
     *
     * Source: wp-signup.php:1002
     */
    public static string $PREPROCESS_SIGNUP_FORM = "preprocess_signup_form";

    /**
     * Fires immediately prior to an auto-update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:346
     */
    public static string $PRE_AUTO_UPDATE = "pre_auto_update";

    /**
     * Fires before a comment is posted.
     *
     * Source: wp-includes/comment.php:3568
     */
    public static string $PRE_COMMENT_ON_POST = "pre_comment_on_post";

    /**
     * Fires before the plugins list table is rendered.
     *
     * Source: wp-admin/plugins.php:759
     */
    public static string $PRE_CURRENT_ACTIVE_PLUGINS = "pre_current_active_plugins";

    /**
     * Fires immediately before a specific network option is deleted.
     *
     * Source: wp-includes/option.php:1683
     */
    public static function PRE_DELETE_SITE_OPTION_OPTION(string $option): string {
        return "pre_delete_site_option_" . $option;
    }


    /**
     * Fires when deleting a term, before any modifications are made to posts or terms.
     *
     * Source: wp-includes/taxonomy.php:2006
     */
    public static string $PRE_DELETE_TERM = "pre_delete_term";

    /**
     * Fires before comments are retrieved.
     *
     * Source: wp-includes/class-wp-comment-query.php:394
     */
    public static string $PRE_GET_COMMENTS = "pre_get_comments";

    /**
     * Fires before networks are retrieved.
     *
     * Source: wp-includes/class-wp-network-query.php:199
     */
    public static string $PRE_GET_NETWORKS = "pre_get_networks";

    /**
     * Fires after the query variable object is created, but before the actual query is run.
     *
     * Source: wp-includes/class-wp-query.php:1833
     */
    public static string $PRE_GET_POSTS = "pre_get_posts";

    /**
     * Fires before the search form is retrieved, at the start of get_search_form() .
     *
     * Source: wp-includes/general-template.php:252
     */
    public static string $PRE_GET_SEARCH_FORM = "pre_get_search_form";

    /**
     * Fires before sites are retrieved.
     *
     * Source: wp-includes/class-wp-site-query.php:301
     */
    public static string $PRE_GET_SITES = "pre_get_sites";

    /**
     * Fires before terms are retrieved.
     *
     * Source: wp-includes/class-wp-term-query.php:365
     */
    public static string $PRE_GET_TERMS = "pre_get_terms";

    /**
     * Fires before the WP_User_Query has been parsed.
     *
     * Source: wp-includes/class-wp-user-query.php:277
     */
    public static string $PRE_GET_USERS = "pre_get_users";

    /**
     * Fires immediately before a new user is created via the network site-new.php page.
     *
     * Source: wp-admin/network/site-new.php:117
     */
    public static string $PRE_NETWORK_SITE_NEW_CREATED_USER = "pre_network_site_new_created_user";

    /**
     * Fires just before pinging back links found in a post.
     *
     * Source: wp-includes/comment.php:3108
     */
    public static string $PRE_PING = "pre_ping";

    /**
     * Fires immediately before an existing post is updated in the database.
     *
     * Source: wp-includes/post.php:4433
     */
    public static string $PRE_POST_UPDATE = "pre_post_update";

    /**
     * Fires before the trackback is added to a post.
     *
     * Source: wp-trackback.php:111
     */
    public static string $PRE_TRACKBACK_POST = "pre_trackback_post";

    /**
     * Fires in uninstall_plugin()  immediately before the plugin is uninstalled.
     *
     * Source: wp-admin/includes/plugin.php:1229
     */
    public static string $PRE_UNINSTALL_PLUGIN = "pre_uninstall_plugin";

    /**
     * Fires after the WP_User_Query has been parsed, and before the query is executed.
     *
     * Source: wp-includes/class-wp-user-query.php:766
     */
    public static string $PRE_USER_QUERY = "pre_user_query";

    /**
     *
     *
     * Source: wp-admin/includes/deprecated.php:536
     */
    public static string $PRE_USER_SEARCH = "pre_user_search";

    /**
     * Fires when the editor scripts are loaded for later initialization, after all scripts and settings are printed.
     *
     * Source: wp-includes/class-wp-editor.php:1013
     */
    public static string $PRINT_DEFAULT_EDITOR_SCRIPTS = "print_default_editor_scripts";

    /**
     * Fires when the custom Backbone media templates are printed.
     *
     * Source: wp-includes/media-template.php:1516
     */
    public static string $PRINT_MEDIA_TEMPLATES = "print_media_templates";

    /**
     * Fires when a post's status is transitioned from private to published.
     *
     * Source: wp-includes/post.php:7579
     */
    public static string $PRIVATE_TO_PUBLISHED = "private_to_published";

    /**
     * Fires after the 'Personal Options' settings table on the 'Profile' editing screen.
     *
     * Source: wp-admin/user-edit.php:403
     */
    public static string $PROFILE_PERSONAL_OPTIONS = "profile_personal_options";

    /**
     * Fires immediately after an existing user is updated.
     *
     * Source: wp-includes/user.php:2446
     */
    public static string $PROFILE_UPDATE = "profile_update";

    /**
     * Fires after a post submitted by email is published.
     *
     * Source: wp-mail.php:246
     */
    public static string $PUBLISH_PHONE = "publish_phone";

    /**
     * Fires once for each column in Quick Edit mode.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:2025
     */
    public static string $QUICK_EDIT_CUSTOM_BOX = "quick_edit_custom_box";

    /**
     * Fires at the end of the RDF feed header.
     *
     * Source: wp-includes/feed-rdf.php:56
     */
    public static string $RDF_HEADER = "rdf_header";

    /**
     * Fires at the end of each RDF feed item.
     *
     * Source: wp-includes/feed-rdf.php:95
     */
    public static string $RDF_ITEM = "rdf_item";

    /**
     * Fires at the end of the feed root to add namespaces.
     *
     * Source: wp-includes/feed-rdf.php:29
     */
    public static string $RDF_NS = "rdf_ns";

    /**
     * Fires after the blog details cache is cleared.
     *
     * Source: wp-includes/ms-site.php:1001
     */
    public static string $REFRESH_BLOG_DETAILS = "refresh_blog_details";

    /**
     * Fires after a post type is registered.
     *
     * Source: wp-includes/post.php:1713
     */
    public static string $REGISTERED_POST_TYPE = "registered_post_type";

    /**
     * Fires after a specific post type is registered.
     *
     * Source: wp-includes/post.php:1730
     */
    public static function REGISTERED_POST_TYPE_POST_TYPE(string $post_type): string {
        return "registered_post_type_" . $post_type;
    }


    /**
     * Fires after a taxonomy is registered.
     *
     * Source: wp-includes/taxonomy.php:531
     */
    public static string $REGISTERED_TAXONOMY = "registered_taxonomy";

    /**
     * Fires after a taxonomy is registered for an object type.
     *
     * Source: wp-includes/taxonomy.php:749
     */
    public static string $REGISTERED_TAXONOMY_FOR_OBJECT_TYPE = "registered_taxonomy_for_object_type";

    /**
     * Fires after a specific taxonomy is registered.
     *
     * Source: wp-includes/taxonomy.php:549
     */
    public static function REGISTERED_TAXONOMY_TAXONOMY(string $taxonomy): string {
        return "registered_taxonomy_" . $taxonomy;
    }


    /**
     * Fires following the 'Email' field in the user registration form.
     *
     * Source: wp-login.php:1091
     */
    public static string $REGISTER_FORM = "register_form";

    /**
     * Fires after a new user registration has been recorded.
     *
     * Source: wp-includes/user.php:3419
     */
    public static string $REGISTER_NEW_USER = "register_new_user";

    /**
     * Fires when submitting registration form data, before the user is created.
     *
     * Source: wp-includes/user.php:3365
     */
    public static string $REGISTER_POST = "register_post";

    /**
     * Fires immediately before the setting is registered but after its filters are in place.
     *
     * Source: wp-includes/option.php:2430
     */
    public static string $REGISTER_SETTING = "register_setting";

    /**
     * Fires once a sidebar has been registered.
     *
     * Source: wp-includes/widgets.php:317
     */
    public static string $REGISTER_SIDEBAR = "register_sidebar";

    /**
     * Fires before a user is removed from a site.
     *
     * Source: wp-includes/ms-functions.php:246
     */
    public static string $REMOVE_USER_FROM_BLOG = "remove_user_from_blog";

    /**
     * Fires immediately after a role as been removed from a user.
     *
     * Source: wp-includes/class-wp-user.php:591
     */
    public static string $REMOVE_USER_ROLE = "remove_user_role";
}