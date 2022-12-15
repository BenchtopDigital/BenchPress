<?php

namespace Benchpress\Models\Wordpress;

class FilterHooks {

    /**
     * Filters whether to display additional capabilities for the user.
     *
     * Source: wp-admin/user-edit.php:864
     */
    public static string $ADDITIONAL_CAPABILITIES_DISPLAY = "additional_capabilities_display";

    /**
     * Filters administration menu array with classes added for top-level items.
     *
     * Source: wp-admin/includes/menu.php:259
     */
    public static string $ADD_MENU_CLASSES = "add_menu_classes";

    /**
     * Filters the new ping URL to add for the given post.
     *
     * Source: wp-includes/post.php:5484
     */
    public static string $ADD_PING = "add_ping";

    /**
     * Filters the new default site meta variables.
     *
     * Source: wp-signup.php:497
     */
    public static string $ADD_SIGNUP_META = "add_signup_meta";

    /**
     * Filters whether or not to add a `__trashed` suffix to trashed posts that match the name of the updated post.
     *
     * Source: wp-includes/post.php:4335
     */
    public static string $ADD_TRASHED_SUFFIX_TO_TRASHED_POSTS = "add_trashed_suffix_to_trashed_posts";

    /**
     * Short-circuits adding metadata of a specific type.
     *
     * Source: wp-includes/meta.php:78
     */
    public static function ADD_META_TYPE_METADATA(string $meta_type): string
    {
        return "add_" . $meta_type;
    }


    /**
     * Filters the CSS classes for the body tag in the admin.
     *
     * Source: wp-admin/admin-header.php:242
     */
    public static string $ADMIN_BODY_CLASS = "admin_body_class";

    /**
     * Filters the comment types shown in the drop-down menu on the Comments list table.
     *
     * Source: wp-admin/includes/class-wp-comments-list-table.php:500
     */
    public static string $ADMIN_COMMENT_TYPES_DROPDOWN = "admin_comment_types_dropdown";

    /**
     * Filters the interval for redirecting the user to the admin email confirmation screen.
     *
     * Source: wp-login.php:601
     */
    public static string $ADMIN_EMAIL_CHECK_INTERVAL = "admin_email_check_interval";

    /**
     * Filters the interval for dismissing the admin email confirmation screen.
     *
     * Source: wp-login.php:569
     */
    public static string $ADMIN_EMAIL_REMIND_INTERVAL = "admin_email_remind_interval";

    /**
     * Filters the “Thank you” text displayed in the admin footer.
     *
     * Source: wp-admin/admin-footer.php:48
     */
    public static string $ADMIN_FOOTER_TEXT = "admin_footer_text";

    /**
     * Filters the maximum memory limit available for administration screens.
     *
     * Source: wp-includes/functions.php:7467
     */
    public static string $ADMIN_MEMORY_LIMIT = "admin_memory_limit";

    /**
     * Filters the admin post thumbnail HTML markup to return.
     *
     * Source: wp-admin/includes/post.php:1626
     */
    public static string $ADMIN_POST_THUMBNAIL_HTML = "admin_post_thumbnail_html";

    /**
     * Filters the size used to display the post thumbnail image in the ‘Featured image’ meta box.
     *
     * Source: wp-admin/includes/post.php:1597
     */
    public static string $ADMIN_POST_THUMBNAIL_SIZE = "admin_post_thumbnail_size";

    /**
     * Filters the admin referrer policy header value.
     *
     * Source: wp-admin/includes/misc.php:1414
     */
    public static string $ADMIN_REFERRER_POLICY = "admin_referrer_policy";

    /**
     * Filters the title tag content for an admin page.
     *
     * Source: wp-admin/admin-header.php:84
     */
    public static string $ADMIN_TITLE = "admin_title";

    /**
     * Filters the admin area URL.
     *
     * Source: wp-includes/link-template.php:3486
     */
    public static string $ADMIN_URL = "admin_url";

    /**
     * Filters the viewport meta in the admin.
     *
     * Source: wp-admin/includes/misc.php:1089
     */
    public static string $ADMIN_VIEWPORT_META = "admin_viewport_meta";

    /**
     * Filters the arguments passed to WP_Query during an Ajax call for querying attachments.
     *
     * Source: wp-admin/includes/ajax-actions.php:3039
     */
    public static string $AJAX_QUERY_ATTACHMENTS_ARGS = "ajax_query_attachments_args";

    /**
     * Filters the Ajax term search results.
     *
     * Source: wp-admin/includes/ajax-actions.php:174
     */
    public static string $AJAX_TERM_SEARCH_RESULTS = "ajax_term_search_results";

    /**
     * Filters all options after retrieving them.
     *
     * Source: wp-includes/option.php:344
     */
    public static string $ALLOPTIONS = "alloptions";

    /**
     * Filters the allowed block types for the editor.
     *
     * Source: wp-includes/block-editor.php:141
     */
    public static string $ALLOWED_BLOCK_TYPES = "allowed_block_types";

    /**
     * Filters the allowed block types for all editor types.
     *
     * Source: wp-includes/block-editor.php:126
     */
    public static string $ALLOWED_BLOCK_TYPES_ALL = "allowed_block_types_all";

    /**
     * Change the allowed HTTP origin result.
     *
     * Source: wp-includes/http.php:477
     */
    public static string $ALLOWED_HTTP_ORIGIN = "allowed_http_origin";

    /**
     * Change the origin types allowed for HTTP requests.
     *
     * Source: wp-includes/http.php:447
     */
    public static string $ALLOWED_HTTP_ORIGINS = "allowed_http_origins";

    /**
     * Filters the allowed options list.
     *
     * Source: wp-admin/options.php:233
     */
    public static string $ALLOWED_OPTIONS = "allowed_options";

    /**
     * Filters the list of allowed hosts to redirect to.
     *
     * Source: wp-includes/pluggable.php:1600
     */
    public static string $ALLOWED_REDIRECT_HOSTS = "allowed_redirect_hosts";

    /**
     * Filters the array of themes allowed on the network.
     *
     * Source: wp-includes/class-wp-theme.php:1600
     */
    public static string $ALLOWED_THEMES = "allowed_themes";

    /**
     * Filters whether to enable automatic core updates for development versions.
     *
     * Source: wp-admin/includes/class-core-upgrader.php:351
     */
    public static string $ALLOW_DEV_AUTO_CORE_UPDATES = "allow_dev_auto_core_updates";

    /**
     * Filters whether an empty comment should be allowed.
     *
     * Source: wp-includes/comment.php:3632
     */
    public static string $ALLOW_EMPTY_COMMENT = "allow_empty_comment";

    /**
     * Filters whether to enable major automatic core updates.
     *
     * Source: wp-admin/includes/class-core-upgrader.php:380
     */
    public static string $ALLOW_MAJOR_AUTO_CORE_UPDATES = "allow_major_auto_core_updates";

    /**
     * Filters whether to enable minor automatic core updates.
     *
     * Source: wp-admin/includes/class-core-upgrader.php:367
     */
    public static string $ALLOW_MINOR_AUTO_CORE_UPDATES = "allow_minor_auto_core_updates";

    /**
     * Filters whether to allow a password to be reset.
     *
     * Source: wp-includes/user.php:2884
     */
    public static string $ALLOW_PASSWORD_RESET = "allow_password_reset";

    /**
     * Filters whether to enable the subdirectory installation feature in Multisite.
     *
     * Source: wp-admin/includes/network.php:64
     */
    public static string $ALLOW_SUBDIRECTORY_INSTALL = "allow_subdirectory_install";

    /**
     * Filters the full array of plugins to list in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:105
     */
    public static string $ALL_PLUGINS = "all_plugins";

    /**
     * Filters the full array of WP_Theme objects to list in the Multisite themes list table.
     *
     * Source: wp-admin/includes/class-wp-ms-themes-list-table.php:113
     */
    public static string $ALL_THEMES = "all_themes";

    /**
     * Filters whether this is an API request that Application Passwords can be used on.
     *
     * Source: wp-includes/user.php:336
     */
    public static string $APPLICATION_PASSWORD_IS_API_REQUEST = "application_password_is_api_request";

    /**
     * Filters whether to asynchronously update translation for core, a plugin, or a theme.
     *
     * Source: wp-admin/includes/class-language-pack-upgrader.php:81
     */
    public static string $ASYNC_UPDATE_TRANSLATION = "async_update_translation";

    /**
     * Filters the returned ID of an uploaded attachment.
     *
     * Source: wp-admin/async-upload.php:155
     */
    public static function ASYNC_UPLOAD_TYPE(string $type): string
    {
        return "async_upload_" . $type;
    }


    /**
     * Filters the atom enclosure HTML link tag for the current post.
     *
     * Source: wp-includes/feed.php:559
     */
    public static string $ATOM_ENCLOSURE = "atom_enclosure";

    /**
     * Filters the attachment fields to edit.
     *
     * Source: wp-admin/includes/media.php:1497
     */
    public static string $ATTACHMENT_FIELDS_TO_EDIT = "attachment_fields_to_edit";

    /**
     * Filters the attachment fields to be saved.
     *
     * Source: wp-admin/includes/media.php:783
     */
    public static string $ATTACHMENT_FIELDS_TO_SAVE = "attachment_fields_to_save";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2006
     */
    public static string $ATTACHMENT_ICON = "attachment_icon";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2033
     */
    public static string $ATTACHMENT_INNERHTML = "attachment_innerHTML";

    /**
     * Filters the permalink for an attachment.
     *
     * Source: wp-includes/link-template.php:530
     */
    public static string $ATTACHMENT_LINK = "attachment_link";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:1977
     */
    public static string $ATTACHMENT_MAX_DIMS = "attachment_max_dims";

    /**
     * Filters the parameters for the attachment thumbnail creation.
     *
     * Source: wp-admin/includes/image.php:568
     */
    public static string $ATTACHMENT_THUMBNAIL_ARGS = "attachment_thumbnail_args";

    /**
     * Filters an attachment ID found by URL.
     *
     * Source: wp-includes/media.php:5139
     */
    public static string $ATTACHMENT_URL_TO_POSTID = "attachment_url_to_postid";

    /**
     * Filters the information attached to the newly created session.
     *
     * Source: wp-includes/class-wp-session-tokens.php:134
     */
    public static string $ATTACH_SESSION_INFORMATION = "attach_session_information";

    /**
     * Filters a string cleaned and escaped for output in an HTML attribute.
     *
     * Source: wp-includes/formatting.php:4600
     */
    public static string $ATTRIBUTE_ESCAPE = "attribute_escape";

    /**
     * Filters the audio attachment metadata fields to be shown in the publish meta box.
     *
     * Source: wp-admin/includes/media.php:3444
     */
    public static string $AUDIO_SUBMITBOX_MISC_SECTIONS = "audio_submitbox_misc_sections";

    /**
     * Filters whether a set of user login credentials are valid.
     *
     * Source: wp-includes/pluggable.php:614
     */
    public static string $AUTHENTICATE = "authenticate";

    /**
     * Filters the comment author’s email for display.
     *
     * Source: wp-includes/comment-template.php:131
     */
    public static string $AUTHOR_EMAIL = "author_email";

    /**
     * Filters the feed link for a given author.
     *
     * Source: wp-includes/link-template.php:895
     */
    public static string $AUTHOR_FEED_LINK = "author_feed_link";

    /**
     * Filters the URL to the author’s page.
     *
     * Source: wp-includes/author-template.php:391
     */
    public static string $AUTHOR_LINK = "author_link";

    /**
     * Filters rewrite rules used for author archives.
     *
     * Source: wp-includes/class-wp-rewrite.php:1385
     */
    public static string $AUTHOR_REWRITE_RULES = "author_rewrite_rules";

    /**
     * Filters the authentication cookie.
     *
     * Source: wp-includes/pluggable.php:884
     */
    public static string $AUTH_COOKIE = "auth_cookie";

    /**
     * Filters the duration of the authentication cookie expiration period.
     *
     * Source: wp-includes/pluggable.php:976
     */
    public static string $AUTH_COOKIE_EXPIRATION = "auth_cookie_expiration";

    /**
     * Filters whether the user is allowed to add post meta to a post.
     *
     * Source: wp-includes/capabilities.php:268
     */
    public static function AUTH_POST_META_META_KEY(string $meta_key): string
    {
        return "auth_post_meta_" . $meta_key;
    }


    /**
     * Filters whether the user is allowed to add post meta to a post of a given type.
     *
     * Source: wp-includes/capabilities.php:285
     */
    public static function AUTH_POST_POST_TYPE_META_META_KEY(string $post_type, string $meta_key): string
    {
        return "auth_post_" . $post_type . $meta_key;
    }


    /**
     * Filters the authentication redirect scheme.
     *
     * Source: wp-includes/pluggable.php:1195
     */
    public static string $AUTH_REDIRECT_SCHEME = "auth_redirect_scheme";

    /**
     * Filters whether the user is allowed to edit a specific meta key of a specific object type.
     *
     * Source: wp-includes/capabilities.php:507
     */
    public static function AUTH_OBJECT_TYPE_META_META_KEY(string $object_type, string $meta_key): string
    {
        return "auth_" . $object_type . $meta_key;
    }


    /**
     * Filters whether the user is allowed to edit a specific meta key of a specific object type and subtype.
     *
     * Source: wp-includes/capabilities.php:486
     */
    public static function AUTH_OBJECT_TYPE_META_META_KEY_FOR_OBJECT_SUBTYPE(string $object_type, string $meta_key, string $object_subtype): string
    {
        return "auth_" . $object_type . $meta_key . $object_subtype;
    }


    /**
     * Filters whether the user is allowed to edit meta for specific object types/subtypes.
     *
     * Source: wp-includes/capabilities.php:533
     */
    public static function AUTH_OBJECT_TYPE_OBJECT_SUBTYPE_META_META_KEY(string $object_type, string $object_subtype, string $meta_key): string
    {
        return "auth_" . $object_type . $object_subtype . $meta_key;
    }


    /**
     * Filters whether the user is allowed to add post meta to a post of a given type.
     *
     * Source: wp-includes/capabilities.php:353
     */
    public static function AUTH_OBJECT_TYPE_SUB_TYPE_META_META_KEY(string $object_type, string $sub_type, string $meta_key): string
    {
        return "auth_" . $object_type . $sub_type . $meta_key;
    }


    /**
     * Filters whether to enable user auto-complete for non-super admins in Multisite.
     *
     * Source: wp-admin/user-new.php:316
     */
    public static string $AUTOCOMPLETE_USERS_FOR_SITE_ADMINS = "autocomplete_users_for_site_admins";

    /**
     * Filters whether to entirely disable background updates.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:56
     */
    public static string $AUTOMATIC_UPDATER_DISABLED = "automatic_updater_disabled";

    /**
     * Filters the debug email that can be sent following an automatic background core update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:1485
     */
    public static string $AUTOMATIC_UPDATES_DEBUG_EMAIL = "automatic_updates_debug_email";

    /**
     * Filters whether the automatic updater should consider a filesystem location to be potentially managed by a version control system.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:123
     */
    public static string $AUTOMATIC_UPDATES_IS_VCS_CHECKOUT = "automatic_updates_is_vcs_checkout";

    /**
     * Filters whether to send a debugging email for each automatic background update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:542
     */
    public static string $AUTOMATIC_UPDATES_SEND_DEBUG_EMAIL = "automatic_updates_send_debug_email";

    /**
     * Filters the email sent following an automatic background core update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:909
     */
    public static string $AUTO_CORE_UPDATE_EMAIL = "auto_core_update_email";

    /**
     * Filters whether to send an email following an automatic background core update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:709
     */
    public static string $AUTO_CORE_UPDATE_SEND_EMAIL = "auto_core_update_send_email";

    /**
     * Filters the email sent following an automatic background update for plugins and themes.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:1292
     */
    public static string $AUTO_PLUGIN_THEME_UPDATE_EMAIL = "auto_plugin_theme_update_email";

    /**
     * Filters whether to send an email following an automatic background plugin update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:936
     */
    public static string $AUTO_PLUGIN_UPDATE_SEND_EMAIL = "auto_plugin_update_send_email";

    /**
     * Filters whether to send an email following an automatic background theme update.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:959
     */
    public static string $AUTO_THEME_UPDATE_SEND_EMAIL = "auto_theme_update_send_email";

    /**
     * Filters whether to automatically update core, a plugin, a theme, or a language.
     *
     * Source: wp-admin/includes/class-wp-automatic-updater.php:213
     */
    public static function AUTO_UPDATE_TYPE(string $type): string
    {
        return "auto_update_" . $type;
    }


    /**
     * Filters the list of available permalink structure tags on the Permalinks settings page.
     *
     * Source: wp-admin/options-permalink.php:308
     */
    public static string $AVAILABLE_PERMALINK_STRUCTURE_TAGS = "available_permalink_structure_tags";

    /**
     * Filters the default avatars.
     *
     * Source: wp-admin/options-discussion.php:294
     */
    public static string $AVATAR_DEFAULTS = "avatar_defaults";

    /**
     * Filters the “BIG image” threshold value.
     *
     * Source: wp-admin/includes/image.php:284
     */
    public static string $BIG_IMAGE_SIZE_THRESHOLD = "big_image_size_threshold";

    /**
     * Filters the default array of categories for block types.
     *
     * Source: wp-includes/block-editor.php:99
     */
    public static string $BLOCK_CATEGORIES = "block_categories";

    /**
     * Filters the default array of categories for block types.
     *
     * Source: wp-includes/block-editor.php:85
     */
    public static string $BLOCK_CATEGORIES_ALL = "block_categories_all";

    /**
     * Filters the message displayed in the block editor interface when JavaScript is not enabled in the browser.
     *
     * Source: wp-admin/edit-form-blocks.php:340
     */
    public static string $BLOCK_EDITOR_NO_JAVASCRIPT_MESSAGE = "block_editor_no_javascript_message";

    /**
     * Filters the array of paths that will be preloaded.
     *
     * Source: wp-includes/block-editor.php:599
     */
    public static string $BLOCK_EDITOR_PRELOAD_PATHS = "block_editor_preload_paths";

    /**
     * Filters the array of REST API paths that will be used to preloaded common data for the block editor.
     *
     * Source: wp-includes/block-editor.php:583
     */
    public static string $BLOCK_EDITOR_REST_API_PRELOAD_PATHS = "block_editor_rest_api_preload_paths";

    /**
     * Filters the settings to pass to the block editor.
     *
     * Source: wp-includes/block-editor.php:553
     */
    public static string $BLOCK_EDITOR_SETTINGS = "block_editor_settings";

    /**
     * Filters the settings to pass to the block editor for all editor type.
     *
     * Source: wp-includes/block-editor.php:539
     */
    public static string $BLOCK_EDITOR_SETTINGS_ALL = "block_editor_settings_all";

    /**
     * Filters whether to block local HTTP API requests.
     *
     * Source: wp-includes/class-wp-http.php:895
     */
    public static string $BLOCK_LOCAL_REQUESTS = "block_local_requests";

    /**
     * Filter to allow plugins to replace the server-side block parser.
     *
     * Source: wp-includes/blocks.php:1070
     */
    public static string $BLOCK_PARSER_CLASS = "block_parser_class";

    /**
     * Filters the metadata provided for registering a block type.
     *
     * Source: wp-includes/blocks.php:354
     */
    public static string $BLOCK_TYPE_METADATA = "block_type_metadata";

    /**
     * Filters the settings determined from the block type metadata.
     *
     * Source: wp-includes/blocks.php:498
     */
    public static string $BLOCK_TYPE_METADATA_SETTINGS = "block_type_metadata_settings";

    /**
     * Filters the site information returned by get_bloginfo() .
     *
     * Source: wp-includes/general-template.php:928
     */
    public static string $BLOGINFO = "bloginfo";

    /**
     * Filters the bloginfo for display in RSS feeds.
     *
     * Source: wp-includes/feed.php:67
     */
    public static string $BLOGINFO_RSS = "bloginfo_rss";

    /**
     * Filters the URL returned by get_bloginfo() .
     *
     * Source: wp-includes/general-template.php:918
     */
    public static string $BLOGINFO_URL = "bloginfo_url";

    /**
     * Filters a blog’s details.
     *
     * Source: wp-includes/ms-blogs.php:265
     */
    public static string $BLOG_DETAILS = "blog_details";

    /**
     * Filters a blog option value.
     *
     * Source: wp-includes/ms-blogs.php:381
     */
    public static function BLOG_OPTION_OPTION(string $option): string
    {
        return "blog_option_" . $option;
    }


    /**
     * Filters the redirect URL for 404s on the main site.
     *
     * Source: wp-includes/ms-functions.php:2139
     */
    public static string $BLOG_REDIRECT_404 = "blog_redirect_404";

    /**
     * Filters the list of CSS body class names for the current post or page.
     *
     * Source: wp-includes/post-template.php:853
     */
    public static string $BODY_CLASS = "body_class";

    /**
     * Filters the notice output for the ‘Browse Happy’ nag meta box.
     *
     * Source: wp-admin/includes/dashboard.php:1740
     */
    public static string $BROWSE_HAPPY_NOTICE = "browse-happy-notice";

    /**
     * Filters the items in the bulk actions menu of the list table.
     *
     * Source: wp-admin/includes/class-wp-list-table.php:552
     */
    public static function BULK_ACTIONS(string $screenId): string
    {
        return "bulk_actions-" . $screenId;
    }


    /**
     * Filters the bulk action updated messages.
     *
     * Source: wp-admin/edit.php:404
     */
    public static string $BULK_POST_UPDATED_MESSAGES = "bulk_post_updated_messages";

    /**
     * Filters the cancel comment reply link HTML.
     *
     * Source: wp-includes/comment-template.php:1911
     */
    public static string $CANCEL_COMMENT_REPLY_LINK = "cancel_comment_reply_link";

    /**
     * Filters whether a user should be added to a site.
     *
     * Source: wp-includes/ms-functions.php:173
     */
    public static string $CAN_ADD_USER_TO_BLOG = "can_add_user_to_blog";

    /**
     * Filters whether this network can be edited from this page.
     *
     * Source: wp-admin/includes/ms.php:821
     */
    public static string $CAN_EDIT_NETWORK = "can_edit_network";

    /**
     * Filters the list of CSS classes to include with each category in the list.
     *
     * Source: wp-includes/class-walker-category.php:241
     */
    public static string $CATEGORY_CSS_CLASS = "category_css_class";

    /**
     * Filters the category description for display.
     *
     * Source: wp-includes/class-walker-category.php:125
     */
    public static string $CATEGORY_DESCRIPTION = "category_description";

    /**
     * Filters the category feed link.
     *
     * Source: wp-includes/link-template.php:979
     */
    public static string $CATEGORY_FEED_LINK = "category_feed_link";

    /**
     * Filters the category link.
     *
     * Source: wp-includes/taxonomy.php:4640
     */
    public static string $CATEGORY_LINK = "category_link";

    /**
     * Filters the HTML attributes applied to a category list item’s anchor element.
     *
     * Source: wp-includes/class-walker-category.php:144
     */
    public static string $CATEGORY_LIST_LINK_ATTRIBUTES = "category_list_link_attributes";

    /**
     * Filters whether the user has been marked as a spammer.
     *
     * Source: wp-includes/user.php:503
     */
    public static string $CHECK_IS_USER_SPAMMED = "check_is_user_spammed";

    /**
     * Filters whether the plaintext password matches the encrypted password.
     *
     * Source: wp-includes/pluggable.php:2557
     */
    public static string $CHECK_PASSWORD = "check_password";

    /**
     * Filters a string cleaned and escaped for output as a URL.
     *
     * Source: wp-includes/formatting.php:4465
     */
    public static string $CLEAN_URL = "clean_url";

    /**
     * Filters the list of post types to automatically close comments for.
     *
     * Source: wp-includes/comment.php:3367
     */
    public static string $CLOSE_COMMENTS_FOR_POST_TYPES = "close_comments_for_post_types";

    /**
     * Filters the comments array.
     *
     * Source: wp-includes/comment-template.php:1514
     */
    public static string $COMMENTS_ARRAY = "comments_array";

    /**
     * Filters the comment query clauses.
     *
     * Source: wp-includes/class-wp-comment-query.php:931
     */
    public static string $COMMENTS_CLAUSES = "comments_clauses";

    /**
     * Filters the comments permalink for the current post.
     *
     * Source: wp-includes/feed.php:267
     */
    public static string $COMMENTS_LINK_FEED = "comments_link_feed";

    /**
     * Filters the arguments for the comment query in the comments list table.
     *
     * Source: wp-admin/includes/class-wp-comments-list-table.php:162
     */
    public static string $COMMENTS_LIST_TABLE_QUERY_ARGS = "comments_list_table_query_args";

    /**
     * Filters the comments count for display.
     *
     * Source: wp-includes/comment-template.php:949
     */
    public static string $COMMENTS_NUMBER = "comments_number";

    /**
     * Filters whether the current post is open for comments.
     *
     * Source: wp-includes/comment-template.php:1251
     */
    public static string $COMMENTS_OPEN = "comments_open";

    /**
     * Filters the number of comments listed per page in the comments list table.
     *
     * Source: wp-admin/includes/class-wp-comments-list-table.php:211
     */
    public static string $COMMENTS_PER_PAGE = "comments_per_page";

    /**
     * Filters the comments link attributes for display.
     *
     * Source: wp-includes/comment-template.php:1634
     */
    public static string $COMMENTS_POPUP_LINK_ATTRIBUTES = "comments_popup_link_attributes";

    /**
     * Filters the comments data before the query takes place.
     *
     * Source: wp-includes/class-wp-comment-query.php:434
     */
    public static string $COMMENTS_PRE_QUERY = "comments_pre_query";

    /**
     * Filters rewrite rules used for comment feed archives.
     *
     * Source: wp-includes/class-wp-rewrite.php:1354
     */
    public static string $COMMENTS_REWRITE_RULES = "comments_rewrite_rules";

    /**
     * Filters the path to the theme template file used for the comments template.
     *
     * Source: wp-includes/comment-template.php:1547
     */
    public static string $COMMENTS_TEMPLATE = "comments_template";

    /**
     * Filters the arguments used to query comments in comments_template() .
     *
     * Source: wp-includes/comment-template.php:1480
     */
    public static string $COMMENTS_TEMPLATE_QUERY_ARGS = "comments_template_query_args";

    /**
     * Filters the arguments used in the top level comments query.
     *
     * Source: wp-includes/comment-template.php:1449
     */
    public static string $COMMENTS_TEMPLATE_TOP_LEVEL_QUERY_ARGS = "comments_template_top_level_query_args";

    /**
     * Filters the comment author’s name for display.
     *
     * Source: wp-includes/comment-template.php:74
     */
    public static string $COMMENT_AUTHOR = "comment_author";

    /**
     * Filters the current comment author for use in a feed.
     *
     * Source: wp-includes/feed.php:337
     */
    public static string $COMMENT_AUTHOR_RSS = "comment_author_rss";

    /**
     * Filters the returned CSS classes for the current comment.
     *
     * Source: wp-includes/comment-template.php:539
     */
    public static string $COMMENT_CLASS = "comment_class";

    /**
     * Filters the lifetime of the comment cookie in seconds.
     *
     * Source: wp-includes/comment.php:565
     */
    public static string $COMMENT_COOKIE_LIFETIME = "comment_cookie_lifetime";

    /**
     * Filters duplicate comment error message.
     *
     * Source: wp-includes/comment.php:707
     */
    public static string $COMMENT_DUPLICATE_MESSAGE = "comment_duplicate_message";

    /**
     * Filters the comment content before editing.
     *
     * Source: wp-admin/includes/comment.php:127
     */
    public static string $COMMENT_EDIT_PRE = "comment_edit_pre";

    /**
     * Filters the URI the user is redirected to after editing a comment in the admin.
     *
     * Source: wp-admin/comment.php:364
     */
    public static string $COMMENT_EDIT_REDIRECT = "comment_edit_redirect";

    /**
     * Filters the comment author’s email for display.
     *
     * Source: wp-includes/comment-template.php:194
     */
    public static string $COMMENT_EMAIL = "comment_email";

    /**
     * Filters the comment excerpt for display.
     *
     * Source: wp-includes/comment-template.php:656
     */
    public static string $COMMENT_EXCERPT = "comment_excerpt";

    /**
     * Filters the maximum number of words used in the comment excerpt.
     *
     * Source: wp-includes/comment-template.php:617
     */
    public static string $COMMENT_EXCERPT_LENGTH = "comment_excerpt_length";

    /**
     * Filters the GROUP BY clause of the comments feed query before sending.
     *
     * Source: wp-includes/class-wp-query.php:2739
     */
    public static string $COMMENT_FEED_GROUPBY = "comment_feed_groupby";

    /**
     * Filters the JOIN clause of the comments feed query before sending.
     *
     * Source: wp-includes/class-wp-query.php:2719
     */
    public static string $COMMENT_FEED_JOIN = "comment_feed_join";

    /**
     * Filters the LIMIT clause of the comments feed query before sending.
     *
     * Source: wp-includes/class-wp-query.php:2759
     */
    public static string $COMMENT_FEED_LIMITS = "comment_feed_limits";

    /**
     * Filters the ORDER BY clause of the comments feed query before sending.
     *
     * Source: wp-includes/class-wp-query.php:2749
     */
    public static string $COMMENT_FEED_ORDERBY = "comment_feed_orderby";

    /**
     * Filters the WHERE clause of the comments feed query before sending.
     *
     * Source: wp-includes/class-wp-query.php:2729
     */
    public static string $COMMENT_FEED_WHERE = "comment_feed_where";

    /**
     * Filters the comment flood status.
     *
     * Source: wp-includes/comment.php:906
     */
    public static string $COMMENT_FLOOD_FILTER = "comment_flood_filter";

    /**
     * Filters the comment flood error message.
     *
     * Source: wp-includes/comment.php:929
     */
    public static string $COMMENT_FLOOD_MESSAGE = "comment_flood_message";

    /**
     * Filters the comment form default arguments.
     *
     * Source: wp-includes/comment-template.php:2506
     */
    public static string $COMMENT_FORM_DEFAULTS = "comment_form_defaults";

    /**
     * Filters the default comment form fields.
     *
     * Source: wp-includes/comment-template.php:2433
     */
    public static string $COMMENT_FORM_DEFAULT_FIELDS = "comment_form_default_fields";

    /**
     * Filters the comment form fields, including the textarea.
     *
     * Source: wp-includes/comment-template.php:2614
     */
    public static string $COMMENT_FORM_FIELDS = "comment_form_fields";

    /**
     * Filters the content of the comment textarea field for display.
     *
     * Source: wp-includes/comment-template.php:2634
     */
    public static string $COMMENT_FORM_FIELD_COMMENT = "comment_form_field_comment";

    /**
     * Filters a comment form field for display.
     *
     * Source: wp-includes/comment-template.php:2667
     */
    public static function COMMENT_FORM_FIELD_NAME(string $name): string
    {
        return "comment_form_field_" . $name;
    }


    /**
     * Filters the ‘logged in’ message for the comment form for display.
     *
     * Source: wp-includes/comment-template.php:2584
     */
    public static string $COMMENT_FORM_LOGGED_IN = "comment_form_logged_in";

    /**
     * Filters the submit button for the comment form to display.
     *
     * Source: wp-includes/comment-template.php:2696
     */
    public static string $COMMENT_FORM_SUBMIT_BUTTON = "comment_form_submit_button";

    /**
     * Filters the submit field for the comment form to display.
     *
     * Source: wp-includes/comment-template.php:2715
     */
    public static string $COMMENT_FORM_SUBMIT_FIELD = "comment_form_submit_field";

    /**
     * Filters the returned comment ID fields.
     *
     * Source: wp-includes/comment-template.php:1952
     */
    public static string $COMMENT_ID_FIELDS = "comment_id_fields";

    /**
     * Filters the current comment’s permalink.
     *
     * Source: wp-includes/feed.php:317
     */
    public static string $COMMENT_LINK = "comment_link";

    /**
     * Filters the number of links found in a comment.
     *
     * Source: wp-includes/comment.php:65
     */
    public static string $COMMENT_MAX_LINKS_URL = "comment_max_links_url";

    /**
     * Filters the comment moderation email headers.
     *
     * Source: wp-includes/pluggable.php:2009
     */
    public static string $COMMENT_MODERATION_HEADERS = "comment_moderation_headers";

    /**
     * Filters the list of recipients for comment moderation emails.
     *
     * Source: wp-includes/pluggable.php:1979
     */
    public static string $COMMENT_MODERATION_RECIPIENTS = "comment_moderation_recipients";

    /**
     * Filters the comment moderation email subject.
     *
     * Source: wp-includes/pluggable.php:1999
     */
    public static string $COMMENT_MODERATION_SUBJECT = "comment_moderation_subject";

    /**
     * Filters the comment moderation email text.
     *
     * Source: wp-includes/pluggable.php:1989
     */
    public static string $COMMENT_MODERATION_TEXT = "comment_moderation_text";

    /**
     * Filters the comment notification email headers.
     *
     * Source: wp-includes/pluggable.php:1826
     */
    public static string $COMMENT_NOTIFICATION_HEADERS = "comment_notification_headers";

    /**
     * Filters whether to notify comment authors of their comments on their own posts.
     *
     * Source: wp-includes/pluggable.php:1673
     */
    public static string $COMMENT_NOTIFICATION_NOTIFY_AUTHOR = "comment_notification_notify_author";

    /**
     * Filters the list of email addresses to receive a comment notification.
     *
     * Source: wp-includes/pluggable.php:1650
     */
    public static string $COMMENT_NOTIFICATION_RECIPIENTS = "comment_notification_recipients";

    /**
     * Filters the comment notification email subject.
     *
     * Source: wp-includes/pluggable.php:1816
     */
    public static string $COMMENT_NOTIFICATION_SUBJECT = "comment_notification_subject";

    /**
     * Filters the comment notification email text.
     *
     * Source: wp-includes/pluggable.php:1806
     */
    public static string $COMMENT_NOTIFICATION_TEXT = "comment_notification_text";

    /**
     * Filters the location URI to send the commenter after posting.
     *
     * Source: wp-comments-post.php:78
     */
    public static string $COMMENT_POST_REDIRECT = "comment_post_redirect";

    /**
     * Filters the comment reply link.
     *
     * Source: wp-includes/comment-template.php:1774
     */
    public static string $COMMENT_REPLY_LINK = "comment_reply_link";

    /**
     * Filters the comment reply link arguments.
     *
     * Source: wp-includes/comment-template.php:1721
     */
    public static string $COMMENT_REPLY_LINK_ARGS = "comment_reply_link_args";

    /**
     * Filters the action links displayed for each comment in the ‘Recent Comments’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:798
     */
    public static string $COMMENT_ROW_ACTIONS = "comment_row_actions";

    /**
     * Filters the comment content before it is updated in the database.
     *
     * Source: wp-includes/comment.php:2535
     */
    public static string $COMMENT_SAVE_PRE = "comment_save_pre";

    /**
     * Filters the comment status links.
     *
     * Source: wp-admin/includes/class-wp-comments-list-table.php:348
     */
    public static string $COMMENT_STATUS_LINKS = "comment_status_links";

    /**
     * Filters the text of a comment to be displayed.
     *
     * Source: wp-includes/comment-template.php:1026
     */
    public static string $COMMENT_TEXT = "comment_text";

    /**
     * Filters the current comment content for use in a feed.
     *
     * Source: wp-includes/feed.php:363
     */
    public static string $COMMENT_TEXT_RSS = "comment_text_rss";

    /**
     * Filters the comment author’s URL for display.
     *
     * Source: wp-includes/comment-template.php:353
     */
    public static string $COMMENT_URL = "comment_url";

    /**
     * Filters the “pages” derived from splitting the post content.
     *
     * Source: wp-includes/class-wp-query.php:4708
     */
    public static string $CONTENT_PAGINATION = "content_pagination";

    /**
     * Filters the URL to the content directory.
     *
     * Source: wp-includes/link-template.php:3545
     */
    public static string $CONTENT_URL = "content_url";

    /**
     * Filters the legacy contextual help text.
     *
     * Source: wp-admin/includes/class-wp-screen.php:822
     */
    public static string $CONTEXTUAL_HELP = "contextual_help";

    /**
     * Filters the legacy contextual help list.
     *
     * Source: wp-admin/includes/class-wp-screen.php:802
     */
    public static string $CONTEXTUAL_HELP_LIST = "contextual_help_list";

    /**
     * Filters the locale requested for WordPress core translations.
     *
     * Source: wp-includes/update.php:71
     */
    public static string $CORE_VERSION_CHECK_LOCALE = "core_version_check_locale";

    /**
     * Filters the query arguments sent as part of the core version check.
     *
     * Source: wp-includes/update.php:163
     */
    public static string $CORE_VERSION_CHECK_QUERY_ARGS = "core_version_check_query_args";

    /**
     * Filters the cron request arguments.
     *
     * Source: wp-includes/cron.php:907
     */
    public static string $CRON_REQUEST = "cron_request";

    /**
     * Filters the non-default cron schedules.
     *
     * Source: wp-includes/cron.php:1062
     */
    public static string $CRON_SCHEDULES = "cron_schedules";

    /**
     * Filters whether the active theme supports a specific feature.
     *
     * Source: wp-includes/theme.php:3118
     */
    public static function CURRENT_THEME_SUPPORTS_FEATURE(string $feature): string
    {
        return "current_theme_supports-" . $feature;
    }


    /**
     * Filters Customizer widget section arguments for a given sidebar.
     *
     * Source: wp-includes/class-wp-customize-widgets.php:475
     */
    public static string $CUSTOMIZER_WIDGETS_SECTION_ARGS = "customizer_widgets_section_args";

    /**
     * Filters the list of URLs allowed to be clicked and followed in the Customizer preview.
     *
     * Source: wp-includes/class-wp-customize-manager.php:4640
     */
    public static string $CUSTOMIZE_ALLOWED_URLS = "customize_allowed_urls";

    /**
     * Filters whether or not changeset branching is allowed.
     *
     * Source: wp-includes/class-wp-customize-manager.php:800
     */
    public static string $CUSTOMIZE_CHANGESET_BRANCHING = "customize_changeset_branching";

    /**
     * Filters the settings’ data that will be persisted into the changeset.
     *
     * Source: wp-includes/class-wp-customize-manager.php:2895
     */
    public static string $CUSTOMIZE_CHANGESET_SAVE_DATA = "customize_changeset_save_data";

    /**
     * Filters response of WP_Customize_Control::active().
     *
     * Source: wp-includes/class-wp-customize-control.php:270
     */
    public static string $CUSTOMIZE_CONTROL_ACTIVE = "customize_control_active";

    /**
     * Filters a dynamic partial’s constructor arguments.
     *
     * Source: wp-includes/customize/class-wp-customize-selective-refresh.php:235
     */
    public static string $CUSTOMIZE_DYNAMIC_PARTIAL_ARGS = "customize_dynamic_partial_args";

    /**
     * Filters the class used to construct partials.
     *
     * Source: wp-includes/customize/class-wp-customize-selective-refresh.php:251
     */
    public static string $CUSTOMIZE_DYNAMIC_PARTIAL_CLASS = "customize_dynamic_partial_class";

    /**
     * Filters a dynamic setting’s constructor args.
     *
     * Source: wp-includes/class-wp-customize-manager.php:3822
     */
    public static string $CUSTOMIZE_DYNAMIC_SETTING_ARGS = "customize_dynamic_setting_args";

    /**
     * Allow non-statically created settings to be constructed with custom WP_Customize_Setting subclass.
     *
     * Source: wp-includes/class-wp-customize-manager.php:3836
     */
    public static string $CUSTOMIZE_DYNAMIC_SETTING_CLASS = "customize_dynamic_setting_class";

    /**
     * Filters the core Customizer components to load.
     *
     * Source: wp-includes/class-wp-customize-manager.php:352
     */
    public static string $CUSTOMIZE_LOADED_COMPONENTS = "customize_loaded_components";

    /**
     * Filters the theme data loaded in the customizer.
     *
     * Source: wp-includes/class-wp-customize-manager.php:5945
     */
    public static string $CUSTOMIZE_LOAD_THEMES = "customize_load_themes";

    /**
     * Filters the available menu items.
     *
     * Source: wp-includes/class-wp-customize-nav-menus.php:301
     */
    public static string $CUSTOMIZE_NAV_MENU_AVAILABLE_ITEMS = "customize_nav_menu_available_items";

    /**
     * Filters the available menu item types.
     *
     * Source: wp-includes/class-wp-customize-nav-menus.php:927
     */
    public static string $CUSTOMIZE_NAV_MENU_AVAILABLE_ITEM_TYPES = "customize_nav_menu_available_item_types";

    /**
     * Filters the available menu items during a search request.
     *
     * Source: wp-includes/class-wp-customize-nav-menus.php:474
     */
    public static string $CUSTOMIZE_NAV_MENU_SEARCHED_ITEMS = "customize_nav_menu_searched_items";

    /**
     * Filters response of WP_Customize_Panel::active().
     *
     * Source: wp-includes/class-wp-customize-panel.php:195
     */
    public static string $CUSTOMIZE_PANEL_ACTIVE = "customize_panel_active";

    /**
     * Filters partial rendering.
     *
     * Source: wp-includes/customize/class-wp-customize-partial.php:246
     */
    public static string $CUSTOMIZE_PARTIAL_RENDER = "customize_partial_render";

    /**
     * Filters partial rendering for a specific partial.
     *
     * Source: wp-includes/customize/class-wp-customize-partial.php:260
     */
    public static function CUSTOMIZE_PARTIAL_RENDER(string $partialId): string
    {
        return "customize_partial_render_" . $partialId;
    }


    /**
     * Filters the available devices to allow previewing in the Customizer.
     *
     * Source: wp-includes/class-wp-customize-manager.php:5025
     */
    public static string $CUSTOMIZE_PREVIEWABLE_DEVICES = "customize_previewable_devices";

    /**
     * Filters nonces for Customizer.
     *
     * Source: wp-includes/class-wp-customize-manager.php:4775
     */
    public static string $CUSTOMIZE_REFRESH_NONCES = "customize_refresh_nonces";

    /**
     * Filters the response from rendering the partials.
     *
     * Source: wp-includes/customize/class-wp-customize-selective-refresh.php:437
     */
    public static string $CUSTOMIZE_RENDER_PARTIALS_RESPONSE = "customize_render_partials_response";

    /**
     * Filters a Customize setting value for use in JavaScript.
     *
     * Source: wp-includes/class-wp-customize-setting.php:802
     */
    public static function CUSTOMIZE_SANITIZE_JS(string $id): string
    {
        return "customize_sanitize_js_" . $id;
    }


    /**
     * Filters a Customize setting value in un-slashed form.
     *
     * Source: wp-includes/class-wp-customize-setting.php:576
     */
    public static function CUSTOMIZE_SANITIZE(string $id): string
    {
        return "customize_sanitize_" . $id;
    }


    /**
     * Filters response data for a successful customize_save Ajax request.
     *
     * Source: wp-includes/class-wp-customize-manager.php:2602
     */
    public static string $CUSTOMIZE_SAVE_RESPONSE = "customize_save_response";

    /**
     * Filters response of WP_Customize_Section::active().
     *
     * Source: wp-includes/class-wp-customize-section.php:211
     */
    public static string $CUSTOMIZE_SECTION_ACTIVE = "customize_section_active";

    /**
     * Validates a Customize setting value.
     *
     * Source: wp-includes/class-wp-customize-setting.php:612
     */
    public static function CUSTOMIZE_VALIDATE(string $id): string
    {
        return "customize_validate_" . $id;
    }


    /**
     * Filters a Customize setting value not handled as a theme_mod or option.
     *
     * Source: wp-includes/class-wp-customize-setting.php:768
     */
    public static function CUSTOMIZE_VALUE_ID_BASE(string $id_base): string
    {
        return "customize_value_" . $id_base;
    }

    /**
     * Filters whether to enable custom ordering of the administration menu.
     *
     * Source: wp-admin/includes/menu.php:273
     */
    public static string $CUSTOM_MENU_ORDER = "custom_menu_order";

    /**
     * Filters the array of extra elements to list in the ‘At a Glance’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:362
     */
    public static string $DASHBOARD_GLANCE_ITEMS = "dashboard_glance_items";

    /**
     * Filters the primary feed URL for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1517
     */
    public static string $DASHBOARD_PRIMARY_FEED = "dashboard_primary_feed";

    /**
     * Filters the primary link URL for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1508
     */
    public static string $DASHBOARD_PRIMARY_LINK = "dashboard_primary_link";

    /**
     * Filters the primary link title for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1526
     */
    public static string $DASHBOARD_PRIMARY_TITLE = "dashboard_primary_title";

    /**
     * Filters the post query arguments for the ‘Recent Drafts’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:625
     */
    public static string $DASHBOARD_RECENT_DRAFTS_QUERY_ARGS = "dashboard_recent_drafts_query_args";

    /**
     * Filters the query arguments used for the Recent Posts widget.
     *
     * Source: wp-admin/includes/dashboard.php:986
     */
    public static string $DASHBOARD_RECENT_POSTS_QUERY_ARGS = "dashboard_recent_posts_query_args";

    /**
     * Filters the secondary feed URL for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1550
     */
    public static string $DASHBOARD_SECONDARY_FEED = "dashboard_secondary_feed";

    /**
     * Filters the number of secondary link items for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1568
     */
    public static string $DASHBOARD_SECONDARY_ITEMS = "dashboard_secondary_items";

    /**
     * Filters the secondary link URL for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1541
     */
    public static string $DASHBOARD_SECONDARY_LINK = "dashboard_secondary_link";

    /**
     * Filters the secondary link title for the ‘WordPress Events and News’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:1559
     */
    public static string $DASHBOARD_SECONDARY_TITLE = "dashboard_secondary_title";

    /**
     * Filters the default date formats.
     *
     * Source: wp-admin/options-general.php:327
     */
    public static string $DATE_FORMATS = "date_formats";

    /**
     * Filters the date formatted based on the locale.
     *
     * Source: wp-includes/functions.php:217
     */
    public static string $DATE_I18N = "date_i18n";

    /**
     * Filters the list of valid date query columns.
     *
     * Source: wp-includes/class-wp-date-query.php:508
     */
    public static string $DATE_QUERY_VALID_COLUMNS = "date_query_valid_columns";

    /**
     * Filters rewrite rules used for date archives.
     *
     * Source: wp-includes/class-wp-rewrite.php:1325
     */
    public static string $DATE_REWRITE_RULES = "date_rewrite_rules";

    /**
     * Filters the day archive permalink.
     *
     * Source: wp-includes/link-template.php:651
     */
    public static string $DAY_LINK = "day_link";

    /**
     * Filters the dbDelta SQL queries for creating tables and/or databases.
     *
     * Source: wp-admin/includes/upgrade.php:2762
     */
    public static string $DBDELTA_CREATE_QUERIES = "dbdelta_create_queries";

    /**
     * Filters the dbDelta SQL queries for inserting or updating.
     *
     * Source: wp-admin/includes/upgrade.php:2773
     */
    public static string $DBDELTA_INSERT_QUERIES = "dbdelta_insert_queries";

    /**
     * Filters the dbDelta SQL queries.
     *
     * Source: wp-admin/includes/upgrade.php:2731
     */
    public static string $DBDELTA_QUERIES = "dbdelta_queries";

    /**
     * Filters the debug information shown on the Tools -> Site Health -> Info screen.
     *
     * Source: wp-admin/includes/class-wp-debug-data.php:1457
     */
    public static string $DEBUG_INFORMATION = "debug_information";

    /**
     * Filters the HTML output of the default avatar list.
     *
     * Source: wp-admin/options-discussion.php:318
     */
    public static string $DEFAULT_AVATAR_SELECT = "default_avatar_select";

    /**
     * Filters post types (in addition to ‘post’) that require a default category.
     *
     * Source: wp-includes/post.php:5295
     */
    public static string $DEFAULT_CATEGORY_POST_TYPES = "default_category_post_types";

    /**
     * Filters the default post content initially used in the “Write Post” form.
     *
     * Source: wp-admin/includes/post.php:748
     */
    public static string $DEFAULT_CONTENT = "default_content";

    /**
     * Filters the default legacy contextual help text.
     *
     * Source: wp-admin/includes/class-wp-screen.php:841
     */
    public static string $DEFAULT_CONTEXTUAL_HELP = "default_contextual_help";

    /**
     * Filters the default post excerpt initially used in the “Write Post” form.
     *
     * Source: wp-admin/includes/post.php:768
     */
    public static string $DEFAULT_EXCERPT = "default_excerpt";

    /**
     * Filters the default feed type.
     *
     * Source: wp-includes/feed.php:89
     */
    public static string $DEFAULT_FEED = "default_feed";

    /**
     * Filters the default list of hidden columns.
     *
     * Source: wp-admin/includes/screen.php:71
     */
    public static string $DEFAULT_HIDDEN_COLUMNS = "default_hidden_columns";

    /**
     * Filters the default list of hidden meta boxes.
     *
     * Source: wp-admin/includes/screen.php:181
     */
    public static string $DEFAULT_HIDDEN_META_BOXES = "default_hidden_meta_boxes";

    /**
     * Filters the default value for an option.
     *
     * Source: wp-includes/option.php:188
     */
    public static function DEFAULT_OPTION_OPTION(string $option): string
    {
        return "default_option_" . $option;
    }


    /**
     * Filters the title of the default page template displayed in the drop-down.
     *
     * Source: wp-admin/includes/meta-boxes.php:1004
     */
    public static string $DEFAULT_PAGE_TEMPLATE_TITLE = "default_page_template_title";

    /**
     * Filters the value of a specific default network option.
     *
     * Source: wp-includes/option.php:1462
     */
    public static function DEFAULT_SITE_OPTION_OPTION(string $option): string
    {
        return "default_site_option_" . $option;
    }


    /**
     * Filters the list of template types.
     *
     * Source: wp-includes/block-template-utils.php:189
     */
    public static string $DEFAULT_TEMPLATE_TYPES = "default_template_types";

    /**
     * Filters the default post title initially used in the “Write Post” form.
     *
     * Source: wp-admin/includes/post.php:758
     */
    public static string $DEFAULT_TITLE = "default_title";

    /**
     * Filters the list of allowed template part area values.
     *
     * Source: wp-includes/block-template-utils.php:102
     */
    public static string $DEFAULT_WP_TEMPLATE_PART_AREAS = "default_wp_template_part_areas";

    /**
     * Filters the default metadata value for a specified meta key and object.
     *
     * Source: wp-includes/meta.php:714
     */
    public static function DEFAULT_META_TYPE_METADATA(string $meta_type): string
    {
        return "default_" . $meta_type;
    }


    /**
     * Filters the text for the email sent to the site admin when a request to delete a site in a Multisite network is submitted.
     *
     * Source: wp-admin/ms-delete-site.php:83
     */
    public static string $DELETE_SITE_EMAIL_CONTENT = "delete_site_email_content";

    /**
     * Short-circuits deleting metadata of a specific type.
     *
     * Source: wp-includes/meta.php:425
     */
    public static function DELETE_META_TYPE_METADATA(string $meta_type): string
    {
        return "delete_" . $meta_type;
    }


    /**
     * Short-circuits deleting metadata of a specific type by meta ID.
     *
     * Source: wp-includes/meta.php:1020
     */
    public static function DELETE_META_TYPE_METADATA_BY_MID(string $meta_type): string
    {
        return "delete_" . $meta_type;
    }


    /**
     * Filters whether to trigger an error for deprecated arguments.
     *
     * Source: wp-includes/functions.php:5656
     */
    public static string $DEPRECATED_ARGUMENT_TRIGGER_ERROR = "deprecated_argument_trigger_error";

    /**
     * Filters whether to trigger an error for deprecated functions.
     *
     * Source: wp-includes/functions.php:5464
     */
    public static string $DEPRECATED_CONSTRUCTOR_TRIGGER_ERROR = "deprecated_constructor_trigger_error";

    /**
     * Filters whether to trigger an error for deprecated files.
     *
     * Source: wp-includes/functions.php:5560
     */
    public static string $DEPRECATED_FILE_TRIGGER_ERROR = "deprecated_file_trigger_error";

    /**
     * Filters whether to trigger an error for deprecated functions.
     *
     * Source: wp-includes/functions.php:5372
     */
    public static string $DEPRECATED_FUNCTION_TRIGGER_ERROR = "deprecated_function_trigger_error";

    /**
     * Filters whether to trigger deprecated hook errors.
     *
     * Source: wp-includes/functions.php:5746
     */
    public static string $DEPRECATED_HOOK_TRIGGER_ERROR = "deprecated_hook_trigger_error";

    /**
     * Filters the current user.
     *
     * Source: wp-includes/user.php:3604
     */
    public static string $DETERMINE_CURRENT_USER = "determine_current_user";

    /**
     * Filters the locale for the current request.
     *
     * Source: wp-includes/l10n.php:168
     */
    public static string $DETERMINE_LOCALE = "determine_locale";

    /**
     * Filters whether to disable captions.
     *
     * Source: wp-admin/includes/media.php:216
     */
    public static string $DISABLE_CAPTIONS = "disable_captions";

    /**
     * Filters whether to remove the ‘Categories’ drop-down from the post list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:475
     */
    public static string $DISABLE_CATEGORIES_DROPDOWN = "disable_categories_dropdown";

    /**
     * Filters whether to remove the ‘Formats’ drop-down from the post list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:513
     */
    public static string $DISABLE_FORMATS_DROPDOWN = "disable_formats_dropdown";

    /**
     * Filters whether to remove the ‘Months’ drop-down from the post list table.
     *
     * Source: wp-admin/includes/class-wp-list-table.php:671
     */
    public static string $DISABLE_MONTHS_DROPDOWN = "disable_months_dropdown";

    /**
     * Filters the default media display states for items in the Media list table.
     *
     * Source: wp-admin/includes/template.php:2404
     */
    public static string $DISPLAY_MEDIA_STATES = "display_media_states";

    /**
     * Filters the default post display states used in the posts list table.
     *
     * Source: wp-admin/includes/template.php:2285
     */
    public static string $DISPLAY_POST_STATES = "display_post_states";

    /**
     * Filters the default site display states for items in the Sites list table.
     *
     * Source: wp-admin/includes/class-wp-ms-sites-list-table.php:637
     */
    public static string $DISPLAY_SITE_STATES = "display_site_states";

    /**
     * Filters the list of functions and classes to be ignored from the documentation lookup.
     *
     * Source: wp-admin/includes/misc.php:662
     */
    public static string $DOCUMENTATION_IGNORE_FUNCTIONS = "documentation_ignore_functions";

    /**
     * Filters the document title.
     *
     * Source: wp-includes/general-template.php:1274
     */
    public static string $DOCUMENT_TITLE = "document_title";

    /**
     * Filters the parts of the document title.
     *
     * Source: wp-includes/general-template.php:1263
     */
    public static string $DOCUMENT_TITLE_PARTS = "document_title_parts";

    /**
     * Filters the separator for the document title.
     *
     * Source: wp-includes/general-template.php:1247
     */
    public static string $DOCUMENT_TITLE_SEPARATOR = "document_title_separator";

    /**
     * Filters whether to trigger an error for _doing_it_wrong()  calls.
     *
     * Source: wp-includes/functions.php:5814
     */
    public static string $DOING_IT_WRONG_TRIGGER_ERROR = "doing_it_wrong_trigger_error";

    /**
     * Filters whether a site name is taken.
     *
     * Source: wp-includes/ms-functions.php:1569
     */
    public static string $DOMAIN_EXISTS = "domain_exists";

    /**
     * Filters the maximum error response body size in `download_url() `.
     *
     * Source: wp-admin/includes/file.php:1176
     */
    public static string $DOWNLOAD_URL_ERROR_MAX_BODY_SIZE = "download_url_error_max_body_size";

    /**
     * Filters whether to attempt to perform the multisite DB upgrade routine.
     *
     * Source: wp-admin/admin.php:73
     */
    public static string $DO_MU_UPGRADE = "do_mu_upgrade";

    /**
     * Filters whether to parse the request.
     *
     * Source: wp-includes/class-wp.php:148
     */
    public static string $DO_PARSE_REQUEST = "do_parse_request";

    /**
     * Filters whether to attempt to guess a redirect URL for a 404 request.
     *
     * Source: wp-includes/canonical.php:900
     */
    public static string $DO_REDIRECT_GUESS_404_PERMALINK = "do_redirect_guess_404_permalink";

    /**
     * Filters the output created by a shortcode callback.
     *
     * Source: wp-includes/shortcodes.php:367
     */
    public static string $DO_SHORTCODE_TAG = "do_shortcode_tag";

    /**
     * Filters the ID, if any, of the duplicate comment found when creating a new comment.
     *
     * Source: wp-includes/comment.php:688
     */
    public static string $DUPLICATE_COMMENT_ID = "duplicate_comment_id";

    /**
     * Filters whether a sidebar has widgets.
     *
     * Source: wp-includes/widgets.php:870
     */
    public static string $DYNAMIC_SIDEBAR_HAS_WIDGETS = "dynamic_sidebar_has_widgets";

    /**
     * Filters the parameters passed to a widget’s display callback.
     *
     * Source: wp-includes/widgets.php:803
     */
    public static string $DYNAMIC_SIDEBAR_PARAMS = "dynamic_sidebar_params";

    /**
     * Filters the list of file types allowed for editing in the plugin file editor.
     *
     * Source: wp-admin/includes/file.php:235
     */
    public static string $EDITABLE_EXTENSIONS = "editable_extensions";

    /**
     * Filters the list of editable roles.
     *
     * Source: wp-admin/includes/user.php:272
     */
    public static string $EDITABLE_ROLES = "editable_roles";

    /**
     * Filters the editable slug for a post or term.
     *
     * Source: wp-admin/edit-tag-form.php:167
     */
    public static string $EDITABLE_SLUG = "editable_slug";

    /**
     * Filters the maximum image size dimensions for the editor.
     *
     * Source: wp-includes/media.php:133
     */
    public static string $EDITOR_MAX_IMAGE_SIZE = "editor_max_image_size";

    /**
     * Filters the array of URLs of stylesheets applied to the editor.
     *
     * Source: wp-includes/theme.php:2195
     */
    public static string $EDITOR_STYLESHEETS = "editor_stylesheets";

    /**
     * Filters the bookmark edit link anchor tag.
     *
     * Source: wp-includes/link-template.php:1703
     */
    public static string $EDIT_BOOKMARK_LINK = "edit_bookmark_link";

    /**
     * Filters the number of terms displayed per page for the Categories list table.
     *
     * Source: wp-admin/includes/class-wp-terms-list-table.php:110
     */
    public static string $EDIT_CATEGORIES_PER_PAGE = "edit_categories_per_page";

    /**
     * Filters the comment edit link anchor tag.
     *
     * Source: wp-includes/link-template.php:1641
     */
    public static string $EDIT_COMMENT_LINK = "edit_comment_link";

    /**
     * Filters miscellaneous actions for the edit comment form sidebar.
     *
     * Source: wp-admin/edit-form-comment.php:208
     */
    public static string $EDIT_COMMENT_MISC_ACTIONS = "edit_comment_misc_actions";

    /**
     * Filters whether custom sizes are available options for image editing.
     *
     * Source: wp-admin/includes/image-edit.php:54
     */
    public static string $EDIT_CUSTOM_THUMBNAIL_SIZES = "edit_custom_thumbnail_sizes";

    /**
     * Filters the number of posts displayed per page when specifically listing “posts”.
     *
     * Source: wp-admin/includes/post.php:1228
     */
    public static string $EDIT_POSTS_PER_PAGE = "edit_posts_per_page";

    /**
     * Filters the post edit link anchor tag.
     *
     * Source: wp-includes/link-template.php:1531
     */
    public static string $EDIT_POST_LINK = "edit_post_link";

    /**
     *
     *
     * Source: wp-includes/post.php:2171
     */
    public static function EDIT_POST_FIELD(string $field): string
    {
        return "edit_post_" . $field;
    }


    /**
     * Filters the URL for a user’s profile editor.
     *
     * Source: wp-includes/link-template.php:3931
     */
    public static string $EDIT_PROFILE_URL = "edit_profile_url";

    /**
     * Filters the number of terms displayed per page for the Tags list table.
     *
     * Source: wp-admin/includes/class-wp-terms-list-table.php:91
     */
    public static string $EDIT_TAGS_PER_PAGE = "edit_tags_per_page";

    /**
     * Filters the anchor tag for the edit link for a tag (or term in another taxonomy).
     *
     * Source: wp-includes/link-template.php:1061
     */
    public static string $EDIT_TAG_LINK = "edit_tag_link";

    /**
     * Filters the anchor tag for the edit link of a term.
     *
     * Source: wp-includes/link-template.php:1162
     */
    public static string $EDIT_TERM_LINK = "edit_term_link";

    /**
     * Filters a term field to edit before it is sanitized.
     *
     * Source: wp-includes/taxonomy.php:1719
     */
    public static function EDIT_TERM_FIELD(string $field): string
    {
        return "edit_term_" . $field;
    }


    /**
     * Filters a user field value in the ‘edit’ context.
     *
     * Source: wp-includes/user.php:1777
     */
    public static function EDIT_USER_FIELD(string $field): string
    {
        return "edit_user_" . $field;
    }


    /**
     * Filters the value of a specific post field to edit.
     *
     * Source: wp-includes/post.php:2782
     */
    public static function EDIT_FIELD(string $field): string
    {
        return "edit_" . $field;
    }


    /**
     * Filters the number of items per page to show for a specific ‘per_page’ type.
     *
     * Source: wp-admin/includes/post.php:1218
     */
    public static function EDIT_POST_TYPE_PER_PAGE(string $post_type): string
    {
        return "edit_" . $post_type;
    }


    /**
     * Filters the taxonomy field to edit before it is sanitized.
     *
     * Source: wp-includes/taxonomy.php:1732
     */
    public static function EDIT_TAXONOMY_FIELD(string $taxonomy, string $field): string
    {
        return "edit_" . $taxonomy . $field;
    }


    /**
     * Filters the contents of the email sent when the user’s email is changed.
     *
     * Source: wp-includes/user.php:2686
     */
    public static string $EMAIL_CHANGE_EMAIL = "email_change_email";

    /**
     * Filters whether the given email exists.
     *
     * Source: wp-includes/user.php:1968
     */
    public static string $EMAIL_EXISTS = "email_exists";

    /**
     * Filters the array of post types to cache oEmbed results for.
     *
     * Source: wp-includes/class-wp-embed.php:414
     */
    public static string $EMBED_CACHE_OEMBED_TYPES = "embed_cache_oembed_types";

    /**
     * Filters the default array of embed dimensions.
     *
     * Source: wp-includes/embed.php:91
     */
    public static string $EMBED_DEFAULTS = "embed_defaults";

    /**
     * Filter the Google Video embed output.
     *
     * Source: wp-includes/embed.php:233
     */
    public static string $EMBED_GOOGLEVIDEO = "embed_googlevideo";

    /**
     * Filters the returned embed HTML.
     *
     * Source: wp-includes/class-wp-embed.php:170
     */
    public static string $EMBED_HANDLER_HTML = "embed_handler_html";

    /**
     * Filters the embed HTML output for a given post.
     *
     * Source: wp-includes/embed.php:532
     */
    public static string $EMBED_HTML = "embed_html";

    /**
     * Filters the returned, maybe-linked embed URL.
     *
     * Source: wp-includes/class-wp-embed.php:491
     */
    public static string $EMBED_MAYBE_MAKE_LINK = "embed_maybe_make_link";

    /**
     * Filters whether to inspect the given URL for discoverable link tags.
     *
     * Source: wp-includes/class-wp-embed.php:303
     */
    public static string $EMBED_OEMBED_DISCOVER = "embed_oembed_discover";

    /**
     * Filters the cached oEmbed HTML.
     *
     * Source: wp-includes/class-wp-embed.php:289
     */
    public static string $EMBED_OEMBED_HTML = "embed_oembed_html";

    /**
     * Filters the site title HTML in the embed footer.
     *
     * Source: wp-includes/embed.php:1219
     */
    public static string $EMBED_SITE_TITLE_HTML = "embed_site_title_html";

    /**
     * Filter the template used for embedded posts.
     *
     * Source: wp-includes/template-loader.php:52
     */
    public static string $EMBED_TEMPLATE = "embed_template";

    /**
     * Filters the thumbnail image ID for use in the embed template.
     *
     * Source: wp-includes/theme-compat/embed-content.php:32
     */
    public static string $EMBED_THUMBNAIL_ID = "embed_thumbnail_id";

    /**
     * Filters the thumbnail shape for use in the embed template.
     *
     * Source: wp-includes/theme-compat/embed-content.php:75
     */
    public static string $EMBED_THUMBNAIL_IMAGE_SHAPE = "embed_thumbnail_image_shape";

    /**
     * Filters the thumbnail image size for use in the embed template.
     *
     * Source: wp-includes/theme-compat/embed-content.php:59
     */
    public static string $EMBED_THUMBNAIL_IMAGE_SIZE = "embed_thumbnail_image_size";

    /**
     * Filters the extension of the emoji png files.
     *
     * Source: wp-includes/formatting.php:5775
     */
    public static string $EMOJI_EXT = "emoji_ext";

    /**
     * Filters the extension of the emoji SVG files.
     *
     * Source: wp-includes/formatting.php:5793
     */
    public static string $EMOJI_SVG_EXT = "emoji_svg_ext";

    /**
     * Filters the URL where emoji SVG images are hosted.
     *
     * Source: wp-includes/formatting.php:5784
     */
    public static string $EMOJI_SVG_URL = "emoji_svg_url";

    /**
     * Filters the URL where emoji png images are hosted.
     *
     * Source: wp-includes/formatting.php:5766
     */
    public static string $EMOJI_URL = "emoji_url";

    /**
     * Filters whether to allow administrators on Multisite to edit every user.
     *
     * Source: wp-admin/user-edit.php:98
     */
    public static string $ENABLE_EDIT_ANY_USER_CONFIGURATION = "enable_edit_any_user_configuration";

    /**
     * Filters whether to update network site or user counts when a new site is created.
     *
     * Source: wp-includes/ms-functions.php:2446
     */
    public static string $ENABLE_LIVE_NETWORK_COUNTS = "enable_live_network_counts";

    /**
     * Filters whether to enable loading of the advanced-cache.php drop-in.
     *
     * Source: wp-settings.php:93
     */
    public static string $ENABLE_LOADING_ADVANCED_CACHE_DROPIN = "enable_loading_advanced_cache_dropin";

    /**
     * Filters whether to enable loading of the object-cache.php drop-in.
     *
     * Source: wp-includes/load.php:684
     */
    public static string $ENABLE_LOADING_OBJECT_CACHE_DROPIN = "enable_loading_object_cache_dropin";

    /**
     * Filters whether to print the call to `wp_attempt_focus()` on the login screen.
     *
     * Source: wp-login.php:1524
     */
    public static string $ENABLE_LOGIN_AUTOFOCUS = "enable_login_autofocus";

    /**
     * Filters whether to enable maintenance mode.
     *
     * Source: wp-includes/load.php:329
     */
    public static string $ENABLE_MAINTENANCE_MODE = "enable_maintenance_mode";

    /**
     * Filters whether the post-by-email functionality is enabled.
     *
     * Source: wp-admin/options.php:205
     */
    public static string $ENABLE_POST_BY_EMAIL_CONFIGURATION = "enable_post_by_email_configuration";

    /**
     * Filters whether to enable the Update Services section in the Writing settings screen.
     *
     * Source: wp-admin/options-writing.php:200
     */
    public static string $ENABLE_UPDATE_SERVICES_CONFIGURATION = "enable_update_services_configuration";

    /**
     * Filters whether to allow the debug mode check to occur.
     *
     * Source: wp-includes/load.php:455
     */
    public static string $ENABLE_WP_DEBUG_MODE_CHECKS = "enable_wp_debug_mode_checks";

    /**
     * Filters the list of enclosure links before querying the database.
     *
     * Source: wp-includes/functions.php:939
     */
    public static string $ENCLOSURE_LINKS = "enclosure_links";

    /**
     * Filters the title field placeholder text.
     *
     * Source: wp-admin/edit-form-advanced.php:519
     */
    public static string $ENTER_TITLE_HERE = "enter_title_here";

    /**
     * Filters a string cleaned and escaped for output in HTML.
     *
     * Source: wp-includes/formatting.php:4575
     */
    public static string $ESC_HTML = "esc_html";

    /**
     * Filters a string cleaned and escaped for output in a textarea element.
     *
     * Source: wp-includes/formatting.php:4621
     */
    public static string $ESC_TEXTAREA = "esc_textarea";

    /**
     * Filters a string cleaned and escaped for output in XML.
     *
     * Source: wp-includes/formatting.php:4678
     */
    public static string $ESC_XML = "esc_xml";

    /**
     * Filters the list of blocks that can contribute to the excerpt.
     *
     * Source: wp-includes/blocks.php:921
     */
    public static string $EXCERPT_ALLOWED_BLOCKS = "excerpt_allowed_blocks";

    /**
     * Filters the list of blocks that can be used as wrapper blocks, allowing excerpts to be generated from the `innerBlocks` of these wrappers.
     *
     * Source: wp-includes/blocks.php:907
     */
    public static string $EXCERPT_ALLOWED_WRAPPER_BLOCKS = "excerpt_allowed_wrapper_blocks";

    /**
     * Filters the maximum number of words in a post excerpt.
     *
     * Source: wp-includes/formatting.php:3898
     */
    public static string $EXCERPT_LENGTH = "excerpt_length";

    /**
     * Filters the string in the “more” link displayed after a trimmed excerpt.
     *
     * Source: wp-includes/formatting.php:3907
     */
    public static string $EXCERPT_MORE = "excerpt_more";

    /**
     * Filters whether to allow ‘HEAD’ requests to generate content.
     *
     * Source: wp-includes/template-loader.php:26
     */
    public static string $EXIT_ON_HTTP_HEAD = "exit_on_http_head";

    /**
     * Filters the expiration for a site transient before its value is set.
     *
     * Source: wp-includes/option.php:2033
     */
    public static function EXPIRATION_OF_SITE_TRANSIENT_TRANSIENT(string $transient): string
    {
        return "expiration_of_site_transient_" . $transient;
    }


    /**
     * Filters the expiration for a transient before its value is set.
     *
     * Source: wp-includes/option.php:958
     */
    public static function EXPIRATION_OF_TRANSIENT_TRANSIENT(string $transient): string
    {
        return "expiration_of_transient_" . $transient;
    }


    /**
     * Filters the export args.
     *
     * Source: wp-admin/export.php:121
     */
    public static string $EXPORT_ARGS = "export_args";

    /**
     * Filters the export filename.
     *
     * Source: wp-admin/includes/export.php:94
     */
    public static string $EXPORT_WP_FILENAME = "export_wp_filename";

    /**
     * Filters file type based on the extension name.
     *
     * Source: wp-includes/functions.php:3463
     */
    public static string $EXT2TYPE = "ext2type";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:3117
     */
    public static string $EXTRA_THEME_HEADERS = "extra_theme_headers";

    /**
     * Filters extra file headers by context.
     *
     * Source: wp-includes/functions.php:6639
     */
    public static function EXTRA_CONTEXT_HEADERS(string $context): string
    {
        return "extra_" . $context;
    }


    /**
     * Filters the image sizes generated for non-image mime types.
     *
     * Source: wp-admin/includes/image.php:594
     */
    public static string $FALLBACK_INTERMEDIATE_IMAGE_SIZES = "fallback_intermediate_image_sizes";

    /**
     * Filters the content type for a specific feed type.
     *
     * Source: wp-includes/feed.php:774
     */
    public static string $FEED_CONTENT_TYPE = "feed_content_type";

    /**
     * Filters the feed type permalink.
     *
     * Source: wp-includes/link-template.php:728
     */
    public static string $FEED_LINK = "feed_link";

    /**
     * Filters whether to display the author feed link.
     *
     * Source: wp-includes/general-template.php:3310
     */
    public static string $FEED_LINKS_EXTRA_SHOW_AUTHOR_FEED = "feed_links_extra_show_author_feed";

    /**
     * Filters whether to display the category feed link.
     *
     * Source: wp-includes/general-template.php:3235
     */
    public static string $FEED_LINKS_EXTRA_SHOW_CATEGORY_FEED = "feed_links_extra_show_category_feed";

    /**
     * Filters whether to display the post comments feed link.
     *
     * Source: wp-includes/general-template.php:3183
     */
    public static string $FEED_LINKS_EXTRA_SHOW_POST_COMMENTS_FEED = "feed_links_extra_show_post_comments_feed";

    /**
     * Filters whether to display the post type archive feed link.
     *
     * Source: wp-includes/general-template.php:3207
     */
    public static string $FEED_LINKS_EXTRA_SHOW_POST_TYPE_ARCHIVE_FEED = "feed_links_extra_show_post_type_archive_feed";

    /**
     * Filters whether to display the search results feed link.
     *
     * Source: wp-includes/general-template.php:3332
     */
    public static string $FEED_LINKS_EXTRA_SHOW_SEARCH_FEED = "feed_links_extra_show_search_feed";

    /**
     * Filters whether to display the tag feed link.
     *
     * Source: wp-includes/general-template.php:3259
     */
    public static string $FEED_LINKS_EXTRA_SHOW_TAG_FEED = "feed_links_extra_show_tag_feed";

    /**
     * Filters whether to display the custom taxonomy feed link.
     *
     * Source: wp-includes/general-template.php:3283
     */
    public static string $FEED_LINKS_EXTRA_SHOW_TAX_FEED = "feed_links_extra_show_tax_feed";

    /**
     * Filters whether to display the comments feed link.
     *
     * Source: wp-includes/general-template.php:3124
     */
    public static string $FEED_LINKS_SHOW_COMMENTS_FEED = "feed_links_show_comments_feed";

    /**
     * Filters whether to display the posts feed link.
     *
     * Source: wp-includes/general-template.php:3108
     */
    public static string $FEED_LINKS_SHOW_POSTS_FEED = "feed_links_show_posts_feed";

    /**
     * Filters the filesystem method to use.
     *
     * Source: wp-admin/includes/file.php:2133
     */
    public static string $FILESYSTEM_METHOD = "filesystem_method";

    /**
     * Filters the path for a specific filesystem method class file.
     *
     * Source: wp-admin/includes/file.php:1994
     */
    public static string $FILESYSTEM_METHOD_FILE = "filesystem_method_file";

    /**
     * Filters whether the current image is displayable in the browser.
     *
     * Source: wp-admin/includes/image.php:992
     */
    public static string $FILE_IS_DISPLAYABLE_IMAGE = "file_is_displayable_image";

    /**
     * Filters whether file modifications are allowed.
     *
     * Source: wp-includes/load.php:1622
     */
    public static string $FILE_MOD_ALLOWED = "file_mod_allowed";

    /**
     * Fires right before the meta boxes are rendered.
     *
     * Source: wp-admin/includes/post.php:2230
     */
    public static string $FILTER_BLOCK_EDITOR_META_BOXES = "filter_block_editor_meta_boxes";

    /**
     * Filters whether a “hard” rewrite rule flush should be performed when requested.
     *
     * Source: wp-includes/class-wp-rewrite.php:1871
     */
    public static string $FLUSH_REWRITE_RULES_HARD = "flush_rewrite_rules_hard";

    /**
     * Whether to filter imported data through kses on import.
     *
     * Source: wp-admin/admin.php:360
     */
    public static string $FORCE_FILTERED_HTML_ON_IMPORT = "force_filtered_html_on_import";

    /**
     * Filters the text after it is formatted for the editor.
     *
     * Source: wp-includes/formatting.php:4300
     */
    public static string $FORMAT_FOR_EDITOR = "format_for_editor";

    /**
     * Filters the text to be formatted for editing.
     *
     * Source: wp-includes/formatting.php:2710
     */
    public static string $FORMAT_TO_EDIT = "format_to_edit";

    /**
     * Filters the query used to retrieve found comment count.
     *
     * Source: wp-includes/class-wp-comment-query.php:1002
     */
    public static string $FOUND_COMMENTS_QUERY = "found_comments_query";

    /**
     * Filters the query used to retrieve found network count.
     *
     * Source: wp-includes/class-wp-network-query.php:522
     */
    public static string $FOUND_NETWORKS_QUERY = "found_networks_query";

    /**
     * Filters the number of found posts for the query.
     *
     * Source: wp-includes/class-wp-query.php:3537
     */
    public static string $FOUND_POSTS = "found_posts";

    /**
     * Filters the query to run for retrieving the found posts.
     *
     * Source: wp-includes/class-wp-query.php:3514
     */
    public static string $FOUND_POSTS_QUERY = "found_posts_query";

    /**
     * Filters the query used to retrieve found site count.
     *
     * Source: wp-includes/class-wp-site-query.php:732
     */
    public static string $FOUND_SITES_QUERY = "found_sites_query";

    /**
     * Filters SELECT FOUND_ROWS() query for the current WP_User_Query instance.
     *
     * Source: wp-includes/class-wp-user-query.php:826
     */
    public static string $FOUND_USERS_QUERY = "found_users_query";

    /**
     * Filters the connection types to output to the filesystem credentials form.
     *
     * Source: wp-admin/includes/file.php:2337
     */
    public static string $FS_FTP_CONNECTION_TYPES = "fs_ftp_connection_types";

    /**
     * Filters the default gallery shortcode CSS styles.
     *
     * Source: wp-includes/media.php:2561
     */
    public static string $GALLERY_STYLE = "gallery_style";

    /**
     * Filters the SQL JOIN clause for retrieving archives.
     *
     * Source: wp-includes/general-template.php:2039
     */
    public static string $GETARCHIVES_JOIN = "getarchives_join";

    /**
     * Filters the SQL WHERE clause for retrieving archives.
     *
     * Source: wp-includes/general-template.php:2029
     */
    public static string $GETARCHIVES_WHERE = "getarchives_where";

    /**
     * Filters the list mapping image mime types to their respective extensions.
     *
     * Source: wp-includes/functions.php:3084
     */
    public static string $GETIMAGESIZE_MIMES_TO_EXTS = "getimagesize_mimes_to_exts";

    /**
     * Filters text with its translation.
     *
     * Source: wp-includes/l10n.php:199
     */
    public static string $GETTEXT = "gettext";

    /**
     * Filters text with its translation based on context information.
     *
     * Source: wp-includes/l10n.php:267
     */
    public static string $GETTEXT_WITH_CONTEXT = "gettext_with_context";

    /**
     * Filters text with its translation based on context information for a domain.
     *
     * Source: wp-includes/l10n.php:281
     */
    public static function GETTEXT_WITH_CONTEXT_DOMAIN(string $domain): string
    {
        return "gettext_with_context_" . $domain;
    }


    /**
     * Filters text with its translation for a domain.
     *
     * Source: wp-includes/l10n.php:212
     */
    public static function GETTEXT_DOMAIN(string $domain): string
    {
        return "gettext_" . $domain;
    }


    /**
     * Filters a given object’s ancestors.
     *
     * Source: wp-includes/taxonomy.php:4914
     */
    public static string $GET_ANCESTORS = "get_ancestors";

    /**
     * Filters the archive link content.
     *
     * Source: wp-includes/general-template.php:1931
     */
    public static string $GET_ARCHIVES_LINK = "get_archives_link";

    /**
     * Filters the attached file based on the given ID.
     *
     * Source: wp-includes/post.php:746
     */
    public static string $GET_ATTACHED_FILE = "get_attached_file";

    /**
     * Filters the list of media attached to the given post.
     *
     * Source: wp-includes/media.php:4791
     */
    public static string $GET_ATTACHED_MEDIA = "get_attached_media";

    /**
     * Filters arguments used to retrieve media attached to the given post.
     *
     * Source: wp-includes/media.php:4778
     */
    public static string $GET_ATTACHED_MEDIA_ARGS = "get_attached_media_args";

    /**
     * Filters the list of available language codes.
     *
     * Source: wp-includes/l10n.php:1388
     */
    public static string $GET_AVAILABLE_LANGUAGES = "get_available_languages";

    /**
     * Filters the HTML for a user’s avatar.
     *
     * Source: wp-includes/pluggable.php:2915
     */
    public static string $GET_AVATAR = "get_avatar";

    /**
     * Filters the list of allowed comment types for retrieving avatars.
     *
     * Source: wp-includes/link-template.php:4221
     */
    public static string $GET_AVATAR_COMMENT_TYPES = "get_avatar_comment_types";

    /**
     * Filters the avatar data.
     *
     * Source: wp-includes/link-template.php:4443
     */
    public static string $GET_AVATAR_DATA = "get_avatar_data";

    /**
     * Filters the avatar URL.
     *
     * Source: wp-includes/link-template.php:4432
     */
    public static string $GET_AVATAR_URL = "get_avatar_url";

    /**
     * Filters the block template object after it has been (potentially) fetched from the theme file.
     *
     * Source: wp-includes/block-template-utils.php:1135
     */
    public static string $GET_BLOCK_FILE_TEMPLATE = "get_block_file_template";

    /**
     * Filters the queried block template object after it’s been fetched.
     *
     * Source: wp-includes/block-template-utils.php:1073
     */
    public static string $GET_BLOCK_TEMPLATE = "get_block_template";

    /**
     * Filters the array of queried block templates array after they’ve been fetched.
     *
     * Source: wp-includes/block-template-utils.php:1001
     */
    public static string $GET_BLOCK_TEMPLATES = "get_block_templates";

    /**
     * Filters the bloginfo for use in RSS feeds.
     *
     * Source: wp-includes/feed.php:40
     */
    public static string $GET_BLOGINFO_RSS = "get_bloginfo_rss";

    /**
     * Filters the list of sites a user belongs to.
     *
     * Source: wp-includes/user.php:1033
     */
    public static string $GET_BLOGS_OF_USER = "get_blogs_of_user";

    /**
     * Filters the returned list of bookmarks.
     *
     * Source: wp-includes/bookmark.php:174
     */
    public static string $GET_BOOKMARKS = "get_bookmarks";

    /**
     * Filters the HTML calendar output.
     *
     * Source: wp-includes/general-template.php:2441
     */
    public static string $GET_CALENDAR = "get_calendar";

    /**
     * Filters the canonical URL for a post.
     *
     * Source: wp-includes/link-template.php:3984
     */
    public static string $GET_CANONICAL_URL = "get_canonical_url";

    /**
     * Filters the taxonomy used to retrieve terms when calling get_categories() .
     *
     * Source: wp-includes/category.php:38
     */
    public static string $GET_CATEGORIES_TAXONOMY = "get_categories_taxonomy";

    /**
     * Fires after a comment is retrieved.
     *
     * Source: wp-includes/comment.php:219
     */
    public static string $GET_COMMENT = "get_comment";

    /**
     * Filters the returned post comments permalink.
     *
     * Source: wp-includes/comment-template.php:826
     */
    public static string $GET_COMMENTS_LINK = "get_comments_link";

    /**
     * Filters the returned comment count for a post.
     *
     * Source: wp-includes/comment-template.php:870
     */
    public static string $GET_COMMENTS_NUMBER = "get_comments_number";

    /**
     * Filters the comments page number link for the current request.
     *
     * Source: wp-includes/link-template.php:3013
     */
    public static string $GET_COMMENTS_PAGENUM_LINK = "get_comments_pagenum_link";

    /**
     * Filters the returned comment author name.
     *
     * Source: wp-includes/comment-template.php:49
     */
    public static string $GET_COMMENT_AUTHOR = "get_comment_author";

    /**
     * Filters the comment author’s returned email address.
     *
     * Source: wp-includes/comment-template.php:100
     */
    public static string $GET_COMMENT_AUTHOR_EMAIL = "get_comment_author_email";

    /**
     * Filters the comment author’s returned IP address.
     *
     * Source: wp-includes/comment-template.php:281
     */
    public static string $GET_COMMENT_AUTHOR_IP = "get_comment_author_IP";

    /**
     * Filters the comment author’s link for display.
     *
     * Source: wp-includes/comment-template.php:242
     */
    public static string $GET_COMMENT_AUTHOR_LINK = "get_comment_author_link";

    /**
     * Filters the comment author’s URL.
     *
     * Source: wp-includes/comment-template.php:328
     */
    public static string $GET_COMMENT_AUTHOR_URL = "get_comment_author_url";

    /**
     * Filters the comment author’s returned URL link.
     *
     * Source: wp-includes/comment-template.php:398
     */
    public static string $GET_COMMENT_AUTHOR_URL_LINK = "get_comment_author_url_link";

    /**
     * Filters the returned comment date.
     *
     * Source: wp-includes/comment-template.php:569
     */
    public static string $GET_COMMENT_DATE = "get_comment_date";

    /**
     * Filters the retrieved comment excerpt.
     *
     * Source: wp-includes/comment-template.php:631
     */
    public static string $GET_COMMENT_EXCERPT = "get_comment_excerpt";

    /**
     * Filters the returned comment ID.
     *
     * Source: wp-includes/comment-template.php:679
     */
    public static string $GET_COMMENT_ID = "get_comment_ID";

    /**
     * Filters the returned single comment permalink.
     *
     * Source: wp-includes/comment-template.php:803
     */
    public static string $GET_COMMENT_LINK = "get_comment_link";

    /**
     * Filters the text of a comment.
     *
     * Source: wp-includes/comment-template.php:996
     */
    public static string $GET_COMMENT_TEXT = "get_comment_text";

    /**
     * Filters the returned comment time.
     *
     * Source: wp-includes/comment-template.php:1060
     */
    public static string $GET_COMMENT_TIME = "get_comment_time";

    /**
     * Filters the returned comment type.
     *
     * Source: wp-includes/comment-template.php:1101
     */
    public static string $GET_COMMENT_TYPE = "get_comment_type";

    /**
     * Filters the custom logo output.
     *
     * Source: wp-includes/general-template.php:1132
     */
    public static string $GET_CUSTOM_LOGO = "get_custom_logo";

    /**
     * Filters the list of custom logo image attributes.
     *
     * Source: wp-includes/general-template.php:1087
     */
    public static string $GET_CUSTOM_LOGO_IMAGE_ATTRIBUTES = "get_custom_logo_image_attributes";

    /**
     * Filters the date query WHERE clause.
     *
     * Source: wp-includes/class-wp-date-query.php:565
     */
    public static string $GET_DATE_SQL = "get_date_sql";

    /**
     * Filters the default comment status for the given post type.
     *
     * Source: wp-includes/comment.php:309
     */
    public static string $GET_DEFAULT_COMMENT_STATUS = "get_default_comment_status";

    /**
     * Filters the post delete link.
     *
     * Source: wp-includes/link-template.php:1580
     */
    public static string $GET_DELETE_POST_LINK = "get_delete_post_link";

    /**
     *
     *
     * Source: wp-admin/includes/deprecated.php:269
     */
    public static string $GET_EDITABLE_AUTHORS = "get_editable_authors";

    /**
     * Filters the bookmark edit link.
     *
     * Source: wp-includes/link-template.php:1669
     */
    public static string $GET_EDIT_BOOKMARK_LINK = "get_edit_bookmark_link";

    /**
     * Filters the comment edit link.
     *
     * Source: wp-includes/link-template.php:1607
     */
    public static string $GET_EDIT_COMMENT_LINK = "get_edit_comment_link";

    /**
     * Filters the post edit link.
     *
     * Source: wp-includes/link-template.php:1488
     */
    public static string $GET_EDIT_POST_LINK = "get_edit_post_link";

    /**
     * Filters the edit link for a tag (or term in another taxonomy).
     *
     * Source: wp-includes/link-template.php:1037
     */
    public static string $GET_EDIT_TAG_LINK = "get_edit_tag_link";

    /**
     * Filters the edit link for a term.
     *
     * Source: wp-includes/link-template.php:1117
     */
    public static string $GET_EDIT_TERM_LINK = "get_edit_term_link";

    /**
     * Filters the user edit link.
     *
     * Source: wp-includes/link-template.php:1743
     */
    public static string $GET_EDIT_USER_LINK = "get_edit_user_link";

    /**
     * Filters the list of enclosures already enclosed for the given post.
     *
     * Source: wp-includes/post.php:5524
     */
    public static string $GET_ENCLOSED = "get_enclosed";

    /**
     * Filters the date the last post or comment in the query was modified.
     *
     * Source: wp-includes/feed.php:741
     */
    public static string $GET_FEED_BUILD_DATE = "get_feed_build_date";

    /**
     * Filters the header image URL.
     *
     * Source: wp-includes/theme.php:1189
     */
    public static string $GET_HEADER_IMAGE = "get_header_image";

    /**
     * Filters the markup of header images.
     *
     * Source: wp-includes/theme.php:1288
     */
    public static string $GET_HEADER_IMAGE_TAG = "get_header_image_tag";

    /**
     * Filters the list of header image attributes.
     *
     * Source: wp-includes/theme.php:1268
     */
    public static string $GET_HEADER_IMAGE_TAG_ATTRIBUTES = "get_header_image_tag_attributes";

    /**
     * Filters the header video URL.
     *
     * Source: wp-includes/theme.php:1600
     */
    public static string $GET_HEADER_VIDEO_URL = "get_header_video_url";

    /**
     * Filters the HTML content for the image tag.
     *
     * Source: wp-includes/media.php:411
     */
    public static string $GET_IMAGE_TAG = "get_image_tag";

    /**
     * Filters the value of the attachment’s image tag class attribute.
     *
     * Source: wp-includes/media.php:394
     */
    public static string $GET_IMAGE_TAG_CLASS = "get_image_tag_class";

    /**
     * Filters the most recent time that a post on the site was published.
     *
     * Source: wp-includes/post.php:7198
     */
    public static string $GET_LASTPOSTDATE = "get_lastpostdate";

    /**
     * Filters the most recent time that a post on the site was modified.
     *
     * Source: wp-includes/post.php:7255
     */
    public static string $GET_LASTPOSTMODIFIED = "get_lastpostmodified";

    /**
     * Filters the main network ID.
     *
     * Source: wp-includes/functions.php:6224
     */
    public static string $GET_MAIN_NETWORK_ID = "get_main_network_id";

    /**
     * Filters the arguments used to retrieve an image for the edit image form.
     *
     * Source: wp-admin/includes/media.php:1606
     */
    public static string $GET_MEDIA_ITEM_ARGS = "get_media_item_args";

    /**
     * Filters the meta query’s generated SQL.
     *
     * Source: wp-includes/class-wp-meta-query.php:394
     */
    public static string $GET_META_SQL = "get_meta_sql";

    /**
     * Fires after a network is retrieved.
     *
     * Source: wp-includes/ms-network.php:48
     */
    public static string $GET_NETWORK = "get_network";

    /**
     * Filters the object subtype identifier for a non-standard object type.
     *
     * Source: wp-includes/meta.php:1799
     */
    public static function GET_OBJECT_SUBTYPE_OBJECT_TYPE(string $object_type): string
    {
        return "get_object_subtype_" . $object_type;
    }


    /**
     * Filters the terms for a given object or objects.
     *
     * Source: wp-includes/taxonomy.php:2267
     */
    public static string $GET_OBJECT_TERMS = "get_object_terms";

    /**
     *
     *
     * Source: wp-admin/includes/deprecated.php:690
     */
    public static string $GET_OTHERS_DRAFTS = "get_others_drafts";

    /**
     * Filters the page number link for the current request.
     *
     * Source: wp-includes/link-template.php:2419
     */
    public static string $GET_PAGENUM_LINK = "get_pagenum_link";

    /**
     * Filters the retrieved list of pages.
     *
     * Source: wp-includes/post.php:6251
     */
    public static string $GET_PAGES = "get_pages";

    /**
     * Filters the calculated page on which a comment appears.
     *
     * Source: wp-includes/comment.php:1201
     */
    public static string $GET_PAGE_OF_COMMENT = "get_page_of_comment";

    /**
     * Filters the arguments used to query comments in get_page_of_comment() .
     *
     * Source: wp-includes/comment.php:1159
     */
    public static string $GET_PAGE_OF_COMMENT_QUERY_ARGS = "get_page_of_comment_query_args";

    /**
     * Filters the URI for a page.
     *
     * Source: wp-includes/post.php:5927
     */
    public static string $GET_PAGE_URI = "get_page_uri";

    /**
     * Filters the list of all found galleries in the given post.
     *
     * Source: wp-includes/media.php:4994
     */
    public static string $GET_POST_GALLERIES = "get_post_galleries";

    /**
     * Filters the first-found post gallery.
     *
     * Source: wp-includes/media.php:5019
     */
    public static string $GET_POST_GALLERY = "get_post_gallery";

    /**
     * Filters the localized time a post was last modified.
     *
     * Source: wp-includes/general-template.php:2954
     */
    public static string $GET_POST_MODIFIED_TIME = "get_post_modified_time";

    /**
     * Filters the post status.
     *
     * Source: wp-includes/post.php:1178
     */
    public static string $GET_POST_STATUS = "get_post_status";

    /**
     * Filters the localized time a post was written.
     *
     * Source: wp-includes/general-template.php:2765
     */
    public static string $GET_POST_TIME = "get_post_time";

    /**
     * Filters the list of already-pinged URLs for the given post.
     *
     * Source: wp-includes/post.php:5554
     */
    public static string $GET_PUNG = "get_pung";

    /**
     * Filters the returned array of translated role names for a user.
     *
     * Source: wp-admin/includes/class-wp-users-list-table.php:674
     */
    public static string $GET_ROLE_LIST = "get_role_list";

    /**
     * Filters the sample permalink.
     *
     * Source: wp-admin/includes/post.php:1465
     */
    public static string $GET_SAMPLE_PERMALINK = "get_sample_permalink";

    /**
     * Filters the sample permalink HTML markup.
     *
     * Source: wp-admin/includes/post.php:1550
     */
    public static string $GET_SAMPLE_PERMALINK_HTML = "get_sample_permalink_html";

    /**
     * Filters the schedule for a hook.
     *
     * Source: wp-includes/cron.php:1095
     */
    public static string $GET_SCHEDULE = "get_schedule";

    /**
     * Filters the HTML output of the search form.
     *
     * Source: wp-includes/general-template.php:351
     */
    public static string $GET_SEARCH_FORM = "get_search_form";

    /**
     * Filters the contents of the search query variable.
     *
     * Source: wp-includes/general-template.php:4305
     */
    public static string $GET_SEARCH_QUERY = "get_search_query";

    /**
     * Filters the shortlink for a post.
     *
     * Source: wp-includes/link-template.php:4085
     */
    public static string $GET_SHORTLINK = "get_shortlink";

    /**
     * Fires after a site is retrieved.
     *
     * Source: wp-includes/ms-site.php:332
     */
    public static string $GET_SITE = "get_site";

    /**
     * Filters the site icon URL.
     *
     * Source: wp-includes/general-template.php:977
     */
    public static string $GET_SITE_ICON_URL = "get_site_icon_url";

    /**
     * Filters the upload quota for the current site.
     *
     * Source: wp-includes/ms-functions.php:2566
     */
    public static string $GET_SPACE_ALLOWED = "get_space_allowed";

    /**
     * Filters the array of term objects returned for the ‘post_tag’ taxonomy.
     *
     * Source: wp-includes/category.php:311
     */
    public static string $GET_TAGS = "get_tags";

    /**
     * Filters a taxonomy term object.
     *
     * Source: wp-includes/taxonomy.php:971
     */
    public static string $GET_TERM = "get_term";

    /**
     * Filters the found terms.
     *
     * Source: wp-includes/taxonomy.php:1330
     */
    public static string $GET_TERMS = "get_terms";

    /**
     * Filters the terms query arguments.
     *
     * Source: wp-includes/class-wp-term-query.php:408
     */
    public static string $GET_TERMS_ARGS = "get_terms_args";

    /**
     * Filters the terms query default arguments.
     *
     * Source: wp-includes/class-wp-term-query.php:260
     */
    public static string $GET_TERMS_DEFAULTS = "get_terms_defaults";

    /**
     * Filters the fields to select in the terms query.
     *
     * Source: wp-includes/class-wp-term-query.php:699
     */
    public static string $GET_TERMS_FIELDS = "get_terms_fields";

    /**
     * Filters the ORDERBY clause of the terms query.
     *
     * Source: wp-includes/class-wp-term-query.php:954
     */
    public static string $GET_TERMS_ORDERBY = "get_terms_orderby";

    /**
     * Filters the expanded array of starter content.
     *
     * Source: wp-includes/theme.php:2520
     */
    public static string $GET_THEME_STARTER_CONTENT = "get_theme_starter_content";

    /**
     * Filters the archive description.
     *
     * Source: wp-includes/general-template.php:1828
     */
    public static string $GET_THE_ARCHIVE_DESCRIPTION = "get_the_archive_description";

    /**
     * Filters the archive title.
     *
     * Source: wp-includes/general-template.php:1781
     */
    public static string $GET_THE_ARCHIVE_TITLE = "get_the_archive_title";

    /**
     * Filters the archive title prefix.
     *
     * Source: wp-includes/general-template.php:1761
     */
    public static string $GET_THE_ARCHIVE_TITLE_PREFIX = "get_the_archive_title_prefix";

    /**
     * Filters the value of the requested user metadata.
     *
     * Source: wp-includes/author-template.php:189
     */
    public static function GET_THE_AUTHOR_FIELD(string $field): string
    {
        return "get_the_author_" . $field;
    }


    /**
     * Filters the array of categories to return for a post.
     *
     * Source: wp-includes/category-template.php:98
     */
    public static string $GET_THE_CATEGORIES = "get_the_categories";

    /**
     * Filters the date a post was published.
     *
     * Source: wp-includes/general-template.php:2581
     */
    public static string $GET_THE_DATE = "get_the_date";

    /**
     * Filters the retrieved post excerpt.
     *
     * Source: wp-includes/post-template.php:431
     */
    public static string $GET_THE_EXCERPT = "get_the_excerpt";

    /**
     * Filters the HTML for the retrieved generator type.
     *
     * Source: wp-includes/general-template.php:5053
     */
    public static function GET_THE_GENERATOR_TYPE(string $type): string
    {
        return "get_the_generator_" . $type;
    }


    /**
     * Filters the Global Unique Identifier (guid) of the post.
     *
     * Source: wp-includes/post-template.php:234
     */
    public static string $GET_THE_GUID = "get_the_guid";

    /**
     * Filters the date a post was last modified.
     *
     * Source: wp-includes/general-template.php:2650
     */
    public static string $GET_THE_MODIFIED_DATE = "get_the_modified_date";

    /**
     * Filters the localized time a post was last modified.
     *
     * Source: wp-includes/general-template.php:2897
     */
    public static string $GET_THE_MODIFIED_TIME = "get_the_modified_time";

    /**
     * Filters the description for a post type archive.
     *
     * Source: wp-includes/general-template.php:1862
     */
    public static string $GET_THE_POST_TYPE_DESCRIPTION = "get_the_post_type_description";

    /**
     * Filters the array of tags for the given post.
     *
     * Source: wp-includes/category-template.php:1189
     */
    public static string $GET_THE_TAGS = "get_the_tags";

    /**
     * Filters the list of terms attached to the given post.
     *
     * Source: wp-includes/category-template.php:1313
     */
    public static string $GET_THE_TERMS = "get_the_terms";

    /**
     * Filters the time a post was written.
     *
     * Source: wp-includes/general-template.php:2708
     */
    public static string $GET_THE_TIME = "get_the_time";

    /**
     * Filters the list of URLs yet to ping for the given post.
     *
     * Source: wp-includes/post.php:5583
     */
    public static string $GET_TO_PING = "get_to_ping";

    /**
     * Filters the number of posts a user has written.
     *
     * Source: wp-includes/user.php:573
     */
    public static string $GET_USERNUMPOSTS = "get_usernumposts";

    /**
     * Filters the user’s drafts query string.
     *
     * Source: wp-admin/includes/user.php:316
     */
    public static string $GET_USERS_DRAFTS = "get_users_drafts";

    /**
     * Filters a specific user option value.
     *
     * Source: wp-includes/user.php:687
     */
    public static function GET_USER_OPTION_OPTION(string $option): string
    {
        return "get_user_option_" . $option;
    }


    /**
     * Filters the blog title for use as the feed title.
     *
     * Source: wp-includes/feed.php:118
     */
    public static string $GET_WP_TITLE_RSS = "get_wp_title_rss";

    /**
     * Filters the IDs of terms excluded from adjacent post queries.
     *
     * Source: wp-includes/link-template.php:1846
     */
    public static function GET_ADJACENT_POST_EXCLUDED_TERMS(string $adjacent): string
    {
        return "get_" . $adjacent;
    }


    /**
     * Filters the JOIN clause in the SQL for an adjacent post query.
     *
     * Source: wp-includes/link-template.php:1927
     */
    public static function GET_ADJACENT_POST_JOIN(string $adjacent): string
    {
        return "get_" . $adjacent;
    }


    /**
     * Filters the ORDER BY clause in the SQL for an adjacent post query.
     *
     * Source: wp-includes/link-template.php:1970
     */
    public static function GET_ADJACENT_POST_SORT(string $adjacent): string
    {
        return "get_" . $adjacent;
    }


    /**
     * Filters the WHERE clause in the SQL for an adjacent post query.
     *
     * Source: wp-includes/link-template.php:1949
     */
    public static function GET_ADJACENT_POST_WHERE(string $adjacent): string
    {
        return "get_" . $adjacent;
    }


    /**
     * Short-circuits the return value of a meta field.
     *
     * Source: wp-includes/meta.php:632
     */
    public static function GET_META_TYPE_METADATA(string $meta_type): string
    {
        return "get_" . $meta_type;
    }


    /**
     * Short-circuits the return value when fetching a meta field by meta ID.
     *
     * Source: wp-includes/meta.php:823
     */
    public static function GET_META_TYPE_METADATA_BY_MID(string $meta_type): string
    {
        return "get_" . $meta_type;
    }


    /**
     * Filters a taxonomy term object.
     *
     * Source: wp-includes/taxonomy.php:990
     */
    public static function GET_TAXONOMY(string $taxonomy): string
    {
        return "get_" . $taxonomy;
    }


    /**
     * Filters whether global terms are enabled.
     *
     * Source: wp-includes/functions.php:6239
     */
    public static string $GLOBAL_TERMS_ENABLED = "global_terms_enabled";

    /**
     * Filters whether Apache and mod_rewrite are present.
     *
     * Source: wp-admin/includes/misc.php:31
     */
    public static string $GOT_REWRITE = "got_rewrite";

    /**
     * Filters whether URL rewriting is available.
     *
     * Source: wp-admin/includes/misc.php:55
     */
    public static string $GOT_URL_REWRITE = "got_url_rewrite";

    /**
     *
     *
     * Source: wp-includes/ms-deprecated.php:86
     */
    public static string $GRACEFUL_FAIL = "graceful_fail";

    /**
     *
     *
     * Source: wp-includes/ms-deprecated.php:87
     */
    public static string $GRACEFUL_FAIL_TEMPLATE = "graceful_fail_template";

    /**
     * Fires when a custom bulk action should be handled.
     *
     * Source: wp-admin/edit.php:222
     */
    public static function HANDLE_BULK_ACTIONS_SCREEN(string $screen): string
    {
        return "handle_bulk_actions-" . $screen;
    }


    /**
     * Fires when a custom bulk action should be handled.
     *
     * Source: wp-admin/network/site-themes.php:139
     */
    public static function HANDLE_NETWORK_BULK_ACTIONS_SCREEN(string $screen): string
    {
        return "handle_network_bulk_actions-" . $screen;
    }


    /**
     * Filters whether a nav menu is assigned to the specified location.
     *
     * Source: wp-includes/nav-menu.php:195
     */
    public static string $HAS_NAV_MENU = "has_nav_menu";

    /**
     * Filters whether a post has a post thumbnail.
     *
     * Source: wp-includes/post-thumbnail-template.php:38
     */
    public static string $HAS_POST_THUMBNAIL = "has_post_thumbnail";

    /**
     * Filters header video settings.
     *
     * Source: wp-includes/theme.php:1663
     */
    public static string $HEADER_VIDEO_SETTINGS = "header_video_settings";

    /**
     * Filters Heartbeat Ajax response in no-privilege environments.
     *
     * Source: wp-admin/includes/ajax-actions.php:43
     */
    public static string $HEARTBEAT_NOPRIV_RECEIVED = "heartbeat_nopriv_received";

    /**
     * Filters Heartbeat Ajax response in no-privilege environments when no data is passed.
     *
     * Source: wp-admin/includes/ajax-actions.php:54
     */
    public static string $HEARTBEAT_NOPRIV_SEND = "heartbeat_nopriv_send";

    /**
     * Filters the Heartbeat response received.
     *
     * Source: wp-admin/includes/ajax-actions.php:3465
     */
    public static string $HEARTBEAT_RECEIVED = "heartbeat_received";

    /**
     * Filters the Heartbeat response sent.
     *
     * Source: wp-admin/includes/ajax-actions.php:3476
     */
    public static string $HEARTBEAT_SEND = "heartbeat_send";

    /**
     * Filters the Heartbeat settings.
     *
     * Source: wp-includes/script-loader.php:799
     */
    public static string $HEARTBEAT_SETTINGS = "heartbeat_settings";

    /**
     * Filters the list of hidden columns.
     *
     * Source: wp-admin/includes/screen.php:84
     */
    public static string $HIDDEN_COLUMNS = "hidden_columns";

    /**
     * Filters the list of hidden meta boxes.
     *
     * Source: wp-admin/includes/screen.php:194
     */
    public static string $HIDDEN_META_BOXES = "hidden_meta_boxes";

    /**
     * Filters the home URL.
     *
     * Source: wp-includes/link-template.php:3374
     */
    public static string $HOME_URL = "home_url";

    /**
     * Filters the text before it is formatted for the HTML editor.
     *
     * Source: wp-includes/deprecated.php:3624
     */
    public static string $HTMLEDIT_PRE = "htmledit_pre";

    /**
     * Filters whether SSL should be verified for local HTTP API requests.
     *
     * Source: wp-includes/class-wp-http-streams.php:107
     */
    public static string $HTTPS_LOCAL_SSL_VERIFY = "https_local_ssl_verify";

    /**
     * Filters whether SSL should be verified for non-local requests.
     *
     * Source: wp-includes/class-wp-http.php:377
     */
    public static string $HTTPS_SSL_VERIFY = "https_ssl_verify";

    /**
     * Controls the list of ports considered safe in HTTP API.
     *
     * Source: wp-includes/http.php:600
     */
    public static string $HTTP_ALLOWED_SAFE_PORTS = "http_allowed_safe_ports";

    /**
     * Filters which HTTP transports are available and in what order.
     *
     * Source: wp-includes/class-wp-http.php:537
     */
    public static string $HTTP_API_TRANSPORTS = "http_api_transports";

    /**
     * Filters the user agent value sent with an HTTP request.
     *
     * Source: wp-includes/class-wp-http.php:192
     */
    public static string $HTTP_HEADERS_USERAGENT = "http_headers_useragent";

    /**
     * Change the origin of an HTTP request.
     *
     * Source: wp-includes/http.php:409
     */
    public static string $HTTP_ORIGIN = "http_origin";

    /**
     * Filters the arguments used in an HTTP request.
     *
     * Source: wp-includes/class-wp-http.php:233
     */
    public static string $HTTP_REQUEST_ARGS = "http_request_args";

    /**
     * Check if HTTP request is external or not.
     *
     * Source: wp-includes/http.php:576
     */
    public static string $HTTP_REQUEST_HOST_IS_EXTERNAL = "http_request_host_is_external";

    /**
     * Filters the number of redirects allowed during an HTTP request.
     *
     * Source: wp-includes/class-wp-http.php:172
     */
    public static string $HTTP_REQUEST_REDIRECTION_COUNT = "http_request_redirection_count";

    /**
     * Filters whether to pass URLs through wp_http_validate_url()  in an HTTP request.
     *
     * Source: wp-includes/class-wp-http.php:202
     */
    public static string $HTTP_REQUEST_REJECT_UNSAFE_URLS = "http_request_reject_unsafe_urls";

    /**
     * Filters the timeout value for an HTTP request.
     *
     * Source: wp-includes/class-wp-http.php:162
     */
    public static string $HTTP_REQUEST_TIMEOUT = "http_request_timeout";

    /**
     * Filters the version of the HTTP protocol used in a request.
     *
     * Source: wp-includes/class-wp-http.php:182
     */
    public static string $HTTP_REQUEST_VERSION = "http_request_version";

    /**
     * Filters a successful HTTP API response immediately before the response is returned.
     *
     * Source: wp-includes/class-wp-http.php:447
     */
    public static string $HTTP_RESPONSE = "http_response";

    /**
     * Filters the human readable difference between two timestamps.
     *
     * Source: wp-includes/formatting.php:3856
     */
    public static string $HUMAN_TIME_DIFF = "human_time_diff";

    /**
     * Filters the icon directory path.
     *
     * Source: wp-includes/post.php:6881
     */
    public static string $ICON_DIR = "icon_dir";

    /**
     * Filters the array of icon directory URIs.
     *
     * Source: wp-includes/post.php:6899
     */
    public static string $ICON_DIRS = "icon_dirs";

    /**
     * Filters the icon directory URI.
     *
     * Source: wp-includes/post.php:6890
     */
    public static string $ICON_DIR_URI = "icon_dir_uri";

    /**
     * Filters whether IIS 7+ supports pretty permalinks.
     *
     * Source: wp-includes/functions.php:5951
     */
    public static string $IIS7_SUPPORTS_PERMALINKS = "iis7_supports_permalinks";

    /**
     * Filters the list of rewrite rules formatted for output to a web.config.
     *
     * Source: wp-includes/class-wp-rewrite.php:1641
     */
    public static string $IIS7_URL_REWRITE_RULES = "iis7_url_rewrite_rules";

    /**
     * Filters the list of disallowed usernames.
     *
     * Source: wp-includes/user.php:2122
     */
    public static string $ILLEGAL_USER_LOGINS = "illegal_user_logins";

    /**
     * Filters the image HTML markup including the caption shortcode.
     *
     * Source: wp-admin/includes/media.php:249
     */
    public static string $IMAGE_ADD_CAPTION_SHORTCODE = "image_add_caption_shortcode";

    /**
     * Filters the caption text.
     *
     * Source: wp-admin/includes/media.php:204
     */
    public static string $IMAGE_ADD_CAPTION_TEXT = "image_add_caption_text";

    /**
     * Filters whether to preempt the output of image_downsize() .
     *
     * Source: wp-includes/media.php:207
     */
    public static string $IMAGE_DOWNSIZE = "image_downsize";

    /**
     * Filters default mime type prior to getting the file extension.
     *
     * Source: wp-includes/class-wp-image-editor.php:399
     */
    public static string $IMAGE_EDITOR_DEFAULT_MIME_TYPE = "image_editor_default_mime_type";

    /**
     * Filters the image editor output format mapping.
     *
     * Source: wp-includes/class-wp-image-editor.php:378
     */
    public static string $IMAGE_EDITOR_OUTPUT_FORMAT = "image_editor_output_format";

    /**
     * Filters the WP_Image_Editor instance for the image to be streamed to the browser.
     *
     * Source: wp-admin/includes/image-edit.php:306
     */
    public static string $IMAGE_EDITOR_SAVE_PRE = "image_editor_save_pre";

    /**
     * Filters the GD image resource before applying changes to the image.
     *
     * Source: wp-admin/includes/image-edit.php:642
     */
    public static string $IMAGE_EDIT_BEFORE_CHANGE = "image_edit_before_change";

    /**
     * Filters the output of image_get_intermediate_size()
     *
     * Source: wp-includes/media.php:849
     */
    public static string $IMAGE_GET_INTERMEDIATE_SIZE = "image_get_intermediate_size";

    /**
     * Filters the name of the saved image file.
     *
     * Source: wp-includes/class-wp-image-editor-gd.php:518
     */
    public static string $IMAGE_MAKE_INTERMEDIATE_SIZE = "image_make_intermediate_size";

    /**
     * Filters the memory limit allocated for image manipulation.
     *
     * Source: wp-includes/functions.php:7483
     */
    public static string $IMAGE_MEMORY_LIMIT = "image_memory_limit";

    /**
     * Filters whether to preempt calculating the image resize dimensions.
     *
     * Source: wp-includes/media.php:556
     */
    public static string $IMAGE_RESIZE_DIMENSIONS = "image_resize_dimensions";

    /**
     * Filters the GD image resource to be streamed to the browser.
     *
     * Source: wp-admin/includes/image-edit.php:326
     */
    public static string $IMAGE_SAVE_PRE = "image_save_pre";

    /**
     * Filters the image HTML markup to send to the editor when inserting an image.
     *
     * Source: wp-admin/includes/media.php:168
     */
    public static string $IMAGE_SEND_TO_EDITOR = "image_send_to_editor";

    /**
     * Filters the image URL sent to the editor.
     *
     * Source: wp-admin/includes/media.php:950
     */
    public static string $IMAGE_SEND_TO_EDITOR_URL = "image_send_to_editor_url";

    /**
     * Filters the list of allowed file extensions when sideloading an image from a URL.
     *
     * Source: wp-admin/includes/media.php:1026
     */
    public static string $IMAGE_SIDELOAD_EXTENSIONS = "image_sideload_extensions";

    /**
     * Filters the names and labels of the default image sizes.
     *
     * Source: wp-admin/includes/media.php:1188
     */
    public static string $IMAGE_SIZE_NAMES_CHOOSE = "image_size_names_choose";

    /**
     * Filters whether to strip metadata from images when they’re resized.
     *
     * Source: wp-includes/class-wp-image-editor-imagick.php:348
     */
    public static string $IMAGE_STRIP_META = "image_strip_meta";

    /**
     * Filters the default caption shortcode output.
     *
     * Source: wp-includes/media.php:2218
     */
    public static string $IMG_CAPTION_SHORTCODE = "img_caption_shortcode";

    /**
     * Filters the width of an image’s caption.
     *
     * Source: wp-includes/media.php:2284
     */
    public static string $IMG_CAPTION_SHORTCODE_WIDTH = "img_caption_shortcode_width";

    /**
     * Filters the maximum allowed upload size for import files.
     *
     * Source: wp-admin/includes/template.php:982
     */
    public static string $IMPORT_UPLOAD_SIZE_LIMIT = "import_upload_size_limit";

    /**
     * Filters the URL to the includes directory.
     *
     * Source: wp-includes/link-template.php:3518
     */
    public static string $INCLUDES_URL = "includes_url";

    /**
     * Filters the list of incompatible SQL modes to exclude.
     *
     * Source: wp-includes/class-wpdb.php:966
     */
    public static string $INCOMPATIBLE_SQL_MODES = "incompatible_sql_modes";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2776
     */
    public static string $INDEX_REL_LINK = "index_rel_link";

    /**
     * Filters a user’s custom meta values and keys immediately after the user is created or updated and before any user meta is inserted or updated.
     *
     * Source: wp-includes/user.php:2412
     */
    public static string $INSERT_CUSTOM_USER_META = "insert_custom_user_meta";

    /**
     * Filters a user’s meta values and keys immediately after the user is created or updated and before any user meta is inserted or updated.
     *
     * Source: wp-includes/user.php:2392
     */
    public static string $INSERT_USER_META = "insert_user_meta";

    /**
     * Filters the inline instructions inserted before the dynamically generated content.
     *
     * Source: wp-admin/includes/misc.php:163
     */
    public static string $INSERT_WITH_MARKERS_INLINE_INSTRUCTIONS = "insert_with_markers_inline_instructions";

    /**
     * Filters tabs not associated with a menu item on the Add Plugins screen.
     *
     * Source: wp-admin/includes/class-wp-plugin-install-list-table.php:142
     */
    public static string $INSTALL_PLUGINS_NONMENU_TABS = "install_plugins_nonmenu_tabs";

    /**
     * Filters API request arguments for each Add Plugins screen tab.
     *
     * Source: wp-admin/includes/class-wp-plugin-install-list-table.php:234
     */
    public static function INSTALL_PLUGINS_TABLE_API_ARGS_TAB(string $tab): string
    {
        return "install_plugins_table_api_args_" . $tab;
    }


    /**
     * Filters the tabs shown on the Add Plugins screen.
     *
     * Source: wp-admin/includes/class-wp-plugin-install-list-table.php:133
     */
    public static string $INSTALL_PLUGINS_TABS = "install_plugins_tabs";

    /**
     * Filters the list of action links available following a single plugin installation.
     *
     * Source: wp-admin/includes/class-plugin-installer-skin.php:172
     */
    public static string $INSTALL_PLUGIN_COMPLETE_ACTIONS = "install_plugin_complete_actions";

    /**
     * Filters the list of action links available following a single plugin installation failure when overwriting is allowed.
     *
     * Source: wp-admin/includes/class-plugin-installer-skin.php:337
     */
    public static string $INSTALL_PLUGIN_OVERWRITE_ACTIONS = "install_plugin_overwrite_actions";

    /**
     * Filters the compare table output for overwriting a plugin package on upload.
     *
     * Source: wp-admin/includes/class-plugin-installer-skin.php:254
     */
    public static string $INSTALL_PLUGIN_OVERWRITE_COMPARISON = "install_plugin_overwrite_comparison";

    /**
     * Filters tabs not associated with a menu item on the Install Themes screen.
     *
     * Source: wp-admin/includes/class-wp-theme-install-list-table.php:81
     */
    public static string $INSTALL_THEMES_NONMENU_TABS = "install_themes_nonmenu_tabs";

    /**
     * Filters API request arguments for each Install Themes screen tab.
     *
     * Source: wp-admin/includes/class-wp-theme-install-list-table.php:149
     */
    public static function INSTALL_THEMES_TABLE_API_ARGS_TAB(string $tab): string
    {
        return "install_themes_table_api_args_" . $tab;
    }


    /**
     * Filters the tabs shown on the Add Themes screen.
     *
     * Source: wp-admin/theme-install.php:178
     */
    public static string $INSTALL_THEMES_TABS = "install_themes_tabs";

    /**
     * Filters the list of action links available following a single theme installation.
     *
     * Source: wp-admin/includes/class-theme-installer-skin.php:184
     */
    public static string $INSTALL_THEME_COMPLETE_ACTIONS = "install_theme_complete_actions";

    /**
     * Filters the list of action links available following a single theme installation failure when overwriting is allowed.
     *
     * Source: wp-admin/includes/class-theme-installer-skin.php:372
     */
    public static string $INSTALL_THEME_OVERWRITE_ACTIONS = "install_theme_overwrite_actions";

    /**
     * Filters the compare table output for overwriting a theme package on upload.
     *
     * Source: wp-admin/includes/class-theme-installer-skin.php:289
     */
    public static string $INSTALL_THEME_OVERWRITE_COMPARISON = "install_theme_overwrite_comparison";

    /**
     * Filters the list of intermediate image sizes.
     *
     * Source: wp-includes/media.php:875
     */
    public static string $INTERMEDIATE_IMAGE_SIZES = "intermediate_image_sizes";

    /**
     * Filters the image sizes automatically generated when uploading an image.
     *
     * Source: wp-admin/includes/image.php:375
     */
    public static string $INTERMEDIATE_IMAGE_SIZES_ADVANCED = "intermediate_image_sizes_advanced";

    /**
     * Filters the contents of the email sent when an existing user is invited to join the site.
     *
     * Source: wp-admin/user-new.php:165
     */
    public static string $INVITED_USER_EMAIL = "invited_user_email";

    /**
     * Filters whether a dynamic sidebar is considered “active”.
     *
     * Source: wp-includes/widgets.php:987
     */
    public static string $IS_ACTIVE_SIDEBAR = "is_active_sidebar";

    /**
     * Filters whether an email address is valid.
     *
     * Source: wp-includes/formatting.php:3487
     */
    public static string $IS_EMAIL = "is_email";

    /**
     * Filters whether an email address is unsafe.
     *
     * Source: wp-includes/ms-functions.php:424
     */
    public static string $IS_EMAIL_ADDRESS_UNSAFE = "is_email_address_unsafe";

    /**
     * Filters whether the custom header video is eligible to show on the current page.
     *
     * Source: wp-includes/theme.php:1710
     */
    public static string $IS_HEADER_VIDEO_ACTIVE = "is_header_video_active";

    /**
     * Filters whether the site has more than one author with published posts.
     *
     * Source: wp-includes/author-template.php:616
     */
    public static string $IS_MULTI_AUTHOR = "is_multi_author";

    /**
     * Filters whether a post status is considered “viewable”.
     *
     * Source: wp-includes/post.php:2321
     */
    public static string $IS_POST_STATUS_VIEWABLE = "is_post_status_viewable";

    /**
     * Filters whether a post type is considered “viewable”.
     *
     * Source: wp-includes/post.php:2273
     */
    public static string $IS_POST_TYPE_VIEWABLE = "is_post_type_viewable";

    /**
     * Filters whether the current request is against a protected endpoint.
     *
     * Source: wp-includes/load.php:1025
     */
    public static string $IS_PROTECTED_ENDPOINT = "is_protected_endpoint";

    /**
     * Filters whether a meta key is considered protected.
     *
     * Source: wp-includes/meta.php:1294
     */
    public static string $IS_PROTECTED_META = "is_protected_meta";

    /**
     * Filters whether a post is sticky.
     *
     * Source: wp-includes/post.php:2677
     */
    public static string $IS_STICKY = "is_sticky";

    /**
     * Filters whether the given widget is considered “wide”.
     *
     * Source: wp-includes/class-wp-customize-widgets.php:615
     */
    public static string $IS_WIDE_WIDGET_IN_CUSTOMIZER = "is_wide_widget_in_customizer";

    /**
     * Filters the JPEG compression quality for backward-compatibility.
     *
     * Source: wp-includes/class-wp-image-editor.php:279
     */
    public static string $JPEG_QUALITY = "jpeg_quality";

    /**
     * Filters a string cleaned and escaped for output in JavaScript.
     *
     * Source: wp-includes/formatting.php:4550
     */
    public static string $JS_ESCAPE = "js_escape";

    /**
     * Filters the list of protocols allowed in HTML attributes.
     *
     * Source: wp-includes/functions.php:6901
     */
    public static string $KSES_ALLOWED_PROTOCOLS = "kses_allowed_protocols";

    /**
     * Filters the language attributes for display in the ‘html’ tag.
     *
     * Source: wp-includes/general-template.php:4372
     */
    public static string $LANGUAGE_ATTRIBUTES = "language_attributes";

    /**
     * Filters the language codes.
     *
     * Source: wp-admin/includes/ms.php:542
     */
    public static string $LANG_CODES = "lang_codes";

    /**
     * Filters the category name.
     *
     * Source: wp-includes/bookmark-template.php:288
     */
    public static string $LINK_CATEGORY = "link_category";

    /**
     * Filters the OPML outline link title text.
     *
     * Source: wp-links-opml.php:81
     */
    public static string $LINK_TITLE = "link_title";

    /**
     * Filters a taxonomy drop-down display element.
     *
     * Source: wp-includes/category-template.php:437
     */
    public static string $LIST_CATS = "list_cats";

    /**
     * Filters the page title when creating an HTML drop-down list of pages.
     *
     * Source: wp-includes/class-walker-page-dropdown.php:91
     */
    public static string $LIST_PAGES = "list_pages";

    /**
     * Filters the name of the primary column for the current list table.
     *
     * Source: wp-admin/includes/class-wp-list-table.php:1166
     */
    public static string $LIST_TABLE_PRIMARY_COLUMN = "list_table_primary_column";

    /**
     * Filters the terms to exclude from the terms query.
     *
     * Source: wp-includes/class-wp-term-query.php:534
     */
    public static string $LIST_TERMS_EXCLUSIONS = "list_terms_exclusions";

    /**
     * Filters whether to load the default embed handlers.
     *
     * Source: wp-includes/embed.php:201
     */
    public static string $LOAD_DEFAULT_EMBEDS = "load_default_embeds";

    /**
     * Filters whether to load the Widgets library.
     *
     * Source: wp-includes/functions.php:5235
     */
    public static string $LOAD_DEFAULT_WIDGETS = "load_default_widgets";

    /**
     * Filters the current image being loaded for editing.
     *
     * Source: wp-admin/includes/image.php:1045
     */
    public static string $LOAD_IMAGE_TO_EDIT = "load_image_to_edit";

    /**
     * Filters the path to an attachment’s URL when editing the image.
     *
     * Source: wp-admin/includes/image.php:1108
     */
    public static string $LOAD_IMAGE_TO_EDIT_ATTACHMENTURL = "load_image_to_edit_attachmenturl";

    /**
     * Filters the path to an attachment’s file when editing the image.
     *
     * Source: wp-admin/includes/image.php:1092
     */
    public static string $LOAD_IMAGE_TO_EDIT_FILESYSTEMPATH = "load_image_to_edit_filesystempath";

    /**
     * Filters the returned path or URL of the current image.
     *
     * Source: wp-admin/includes/image.php:1121
     */
    public static string $LOAD_IMAGE_TO_EDIT_PATH = "load_image_to_edit_path";

    /**
     * Filters the relative path of scripts used for finding translation files.
     *
     * Source: wp-includes/l10n.php:1150
     */
    public static string $LOAD_SCRIPT_TEXTDOMAIN_RELATIVE_PATH = "load_script_textdomain_relative_path";

    /**
     * Filters script translations for the given file, script handle and text domain.
     *
     * Source: wp-includes/l10n.php:1238
     */
    public static string $LOAD_SCRIPT_TRANSLATIONS = "load_script_translations";

    /**
     * Filters the file path for loading script translations for the given script handle and text domain.
     *
     * Source: wp-includes/l10n.php:1220
     */
    public static string $LOAD_SCRIPT_TRANSLATION_FILE = "load_script_translation_file";

    /**
     * Filters MO file path for loading translations for a specific text domain.
     *
     * Source: wp-includes/l10n.php:759
     */
    public static string $LOAD_TEXTDOMAIN_MOFILE = "load_textdomain_mofile";

    /**
     * Filters the locale ID of the WordPress installation.
     *
     * Source: wp-includes/l10n.php:80
     */
    public static string $LOCALE = "locale";

    /**
     * Filters the localized stylesheet URI.
     *
     * Source: wp-includes/theme.php:297
     */
    public static string $LOCALE_STYLESHEET_URI = "locale_stylesheet_uri";

    /**
     * Filters the HTML output for the Log In/Log Out link.
     *
     * Source: wp-includes/general-template.php:391
     */
    public static string $LOGINOUT = "loginout";

    /**
     * Filters the login page body classes.
     *
     * Source: wp-login.php:191
     */
    public static string $LOGIN_BODY_CLASS = "login_body_class";

    /**
     * Filters the Languages select input activation on the login screen.
     *
     * Source: wp-login.php:324
     */
    public static string $LOGIN_DISPLAY_LANGUAGE_DROPDOWN = "login_display_language_dropdown";

    /**
     * Filters the error messages displayed above the login form.
     *
     * Source: wp-login.php:253
     */
    public static string $LOGIN_ERRORS = "login_errors";

    /**
     * Filters content to display at the bottom of the login form.
     *
     * Source: wp-includes/general-template.php:577
     */
    public static string $LOGIN_FORM_BOTTOM = "login_form_bottom";

    /**
     * Filters the default login form output arguments.
     *
     * Source: wp-includes/general-template.php:540
     */
    public static string $LOGIN_FORM_DEFAULTS = "login_form_defaults";

    /**
     * Filters content to display in the middle of the login form.
     *
     * Source: wp-includes/general-template.php:565
     */
    public static string $LOGIN_FORM_MIDDLE = "login_form_middle";

    /**
     * Filters content to display at the top of the login form.
     *
     * Source: wp-includes/general-template.php:552
     */
    public static string $LOGIN_FORM_TOP = "login_form_top";

    /**
     * Filters the link text of the header logo above the login form.
     *
     * Source: wp-login.php:161
     */
    public static string $LOGIN_HEADERTEXT = "login_headertext";

    /**
     * Filters the title attribute of the header logo above login form.
     *
     * Source: wp-login.php:144
     */
    public static string $LOGIN_HEADERTITLE = "login_headertitle";

    /**
     * Filters link URL of the header logo above login form.
     *
     * Source: wp-login.php:132
     */
    public static string $LOGIN_HEADERURL = "login_headerurl";

    /**
     * Filters default arguments for the Languages select input on the login screen.
     *
     * Source: wp-login.php:357
     */
    public static string $LOGIN_LANGUAGE_DROPDOWN_ARGS = "login_language_dropdown_args";

    /**
     * Filters the separator used between login form navigation links.
     *
     * Source: wp-login.php:532
     */
    public static string $LOGIN_LINK_SEPARATOR = "login_link_separator";

    /**
     * Filters the message to display above the login form.
     *
     * Source: wp-login.php:218
     */
    public static string $LOGIN_MESSAGE = "login_message";

    /**
     * Filters instructional messages displayed above the login form.
     *
     * Source: wp-login.php:264
     */
    public static string $LOGIN_MESSAGES = "login_messages";

    /**
     * Filters the login redirect URL.
     *
     * Source: wp-login.php:1267
     */
    public static string $LOGIN_REDIRECT = "login_redirect";

    /**
     * Filter the “Go to site” link displayed in the login page footer.
     *
     * Source: wp-login.php:303
     */
    public static string $LOGIN_SITE_HTML_LINK = "login_site_html_link";

    /**
     * Filters the title tag content for login page.
     *
     * Source: wp-login.php:87
     */
    public static string $LOGIN_TITLE = "login_title";

    /**
     * Filters the login URL.
     *
     * Source: wp-includes/general-template.php:459
     */
    public static string $LOGIN_URL = "login_url";

    /**
     * Filters the log out redirect URL.
     *
     * Source: wp-login.php:776
     */
    public static string $LOGOUT_REDIRECT = "logout_redirect";

    /**
     * Filters the logout URL.
     *
     * Source: wp-includes/general-template.php:425
     */
    public static string $LOGOUT_URL = "logout_url";

    /**
     * Filters the custom data to log alongside a query.
     *
     * Source: wp-includes/class-wpdb.php:2230
     */
    public static string $LOG_QUERY_CUSTOM_DATA = "log_query_custom_data";

    /**
     * Filters the errors encountered on a password reset request.
     *
     * Source: wp-includes/user.php:3100
     */
    public static string $LOSTPASSWORD_ERRORS = "lostpassword_errors";

    /**
     * Filters the URL redirected to after submitting the lostpassword/retrievepassword form.
     *
     * Source: wp-login.php:809
     */
    public static string $LOSTPASSWORD_REDIRECT = "lostpassword_redirect";

    /**
     * Filters the Lost Password URL.
     *
     * Source: wp-includes/general-template.php:665
     */
    public static string $LOSTPASSWORD_URL = "lostpassword_url";

    /**
     * Filters the user data during a password reset request.
     *
     * Source: wp-includes/user.php:3070
     */
    public static string $LOSTPASSWORD_USER_DATA = "lostpassword_user_data";

    /**
     * Filters the link that allows the user to reset the lost password.
     *
     * Source: wp-login.php:1491
     */
    public static string $LOST_PASSWORD_HTML_LINK = "lost_password_html_link";

    /**
     * Filters the rel value that is added to URL matches converted to links.
     *
     * Source: wp-includes/formatting.php:2931
     */
    public static string $MAKE_CLICKABLE_REL = "make_clickable_rel";

    /**
     * Filters the Media list table columns.
     *
     * Source: wp-admin/includes/class-wp-media-list-table.php:376
     */
    public static string $MANAGE_MEDIA_COLUMNS = "manage_media_columns";

    /**
     * Filters the columns displayed in the Pages list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:722
     */
    public static string $MANAGE_PAGES_COLUMNS = "manage_pages_columns";

    /**
     * Filters the columns displayed in the Posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:733
     */
    public static string $MANAGE_POSTS_COLUMNS = "manage_posts_columns";

    /**
     * Filters the action links displayed for each site in the Sites list table.
     *
     * Source: wp-admin/includes/class-wp-ms-sites-list-table.php:745
     */
    public static string $MANAGE_SITES_ACTION_LINKS = "manage_sites_action_links";

    /**
     * Filters the taxonomy columns for attachments in the Media list table.
     *
     * Source: wp-admin/includes/class-wp-media-list-table.php:336
     */
    public static string $MANAGE_TAXONOMIES_FOR_ATTACHMENT_COLUMNS = "manage_taxonomies_for_attachment_columns";

    /**
     * Filters the taxonomy columns in the Posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:684
     */
    public static function MANAGE_TAXONOMIES_FOR_POST_TYPE_COLUMNS(string $post_type): string
    {
        return "manage_taxonomies_for_" . $post_type;
    }


    /**
     * Filters the display output of custom columns in the Users list table.
     *
     * Source: wp-admin/includes/class-wp-users-list-table.php:618
     */
    public static string $MANAGE_USERS_CUSTOM_COLUMN = "manage_users_custom_column";

    /**
     * Filters the columns displayed in the Posts list table for a specific post type.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:750
     */
    public static function MANAGE_POST_TYPE_POSTS_COLUMNS(string $post_type): string
    {
        return "manage_" . $post_type;
    }


    /**
     * Filters the column headers for a list table on a specific screen.
     *
     * Source: wp-admin/includes/screen.php:37
     */
    public static function MANAGE_SCREEN_ID_COLUMNS(string $screenId): string
    {
        return "manage_" . $screenId . '_id_columns';
    }


    /**
     * Filters the list table sortable columns for a specific screen.
     *
     * Source: wp-admin/includes/class-wp-list-table.php:1223
     */
    public static function MANAGE_THIS_SCREEN_ID_SORTABLE_COLUMNS(string $screenId): string
    {
        return "manage_" . $screenId . "soratable_columns";
    }


    /**
     * Filters the displayed columns in the terms list table.
     *
     * Source: wp-admin/includes/class-wp-terms-list-table.php:636
     */
    public static function MANAGE_THIS_SCREEN_TAXONOMY_CUSTOM_COLUMN(string $taxonomy): string
    {
        return "manage_" . $taxonomy;
    }


    /**
     * Filters the primitive capabilities required of the given user to satisfy the capability being checked.
     *
     * Source: wp-includes/capabilities.php:838
     */
    public static string $MAP_META_CAP = "map_meta_cap";

    /**
     * Filters the maximum image width to be included in a ‘srcset’ attribute.
     *
     * Source: wp-includes/media.php:1336
     */
    public static string $MAX_SRCSET_IMAGE_WIDTH = "max_srcset_image_width";

    /**
     * Filters the first-row list of TinyMCE buttons (Visual tab).
     *
     * Source: wp-includes/class-wp-editor.php:670
     */
    public static string $MCE_BUTTONS = "mce_buttons";

    /**
     * Filters the second-row list of TinyMCE buttons (Visual tab).
     *
     * Source: wp-includes/class-wp-editor.php:699
     */
    public static string $MCE_BUTTONS_2 = "mce_buttons_2";

    /**
     * Filters the third-row list of TinyMCE buttons (Visual tab).
     *
     * Source: wp-includes/class-wp-editor.php:711
     */
    public static string $MCE_BUTTONS_3 = "mce_buttons_3";

    /**
     * Filters the fourth-row list of TinyMCE buttons (Visual tab).
     *
     * Source: wp-includes/class-wp-editor.php:723
     */
    public static string $MCE_BUTTONS_4 = "mce_buttons_4";

    /**
     * Filters the comma-delimited list of stylesheets to load in TinyMCE.
     *
     * Source: wp-includes/class-wp-editor.php:590
     */
    public static string $MCE_CSS = "mce_css";

    /**
     * Filters the translations loaded for external TinyMCE 3.x plugins.
     *
     * Source: wp-includes/class-wp-editor.php:483
     */
    public static string $MCE_EXTERNAL_LANGUAGES = "mce_external_languages";

    /**
     * Filters the list of TinyMCE external plugins.
     *
     * Source: wp-includes/class-wp-editor.php:417
     */
    public static string $MCE_EXTERNAL_PLUGINS = "mce_external_plugins";

    /**
     * Filters the legacy (pre-3.5.0) media buttons.
     *
     * Source: wp-admin/includes/media.php:665
     */
    public static string $MEDIA_BUTTONS_CONTEXT = "media_buttons_context";

    /**
     * Filters the published time of an attachment displayed in the Media list table.
     *
     * Source: wp-admin/includes/class-wp-media-list-table.php:526
     */
    public static string $MEDIA_DATE_COLUMN_TIME = "media_date_column_time";

    /**
     * Filters the embedded media types that are allowed to be returned from the content blob.
     *
     * Source: wp-includes/media.php:4814
     */
    public static string $MEDIA_EMBEDDED_IN_CONTENT_ALLOWED_TYPES = "media_embedded_in_content_allowed_types";

    /**
     * Filters whether the Media Library grid has infinite scrolling. Default `false`.
     *
     * Source: wp-includes/media.php:4504
     */
    public static string $MEDIA_LIBRARY_INFINITE_SCROLLING = "media_library_infinite_scrolling";

    /**
     * Allows overriding the list of months displayed in the media library.
     *
     * Source: wp-includes/media.php:4474
     */
    public static string $MEDIA_LIBRARY_MONTHS_WITH_FILES = "media_library_months_with_files";

    /**
     * Allows showing or hiding the “Create Audio Playlist” button in the media library.
     *
     * Source: wp-includes/media.php:4416
     */
    public static string $MEDIA_LIBRARY_SHOW_AUDIO_PLAYLIST = "media_library_show_audio_playlist";

    /**
     * Allows showing or hiding the “Create Video Playlist” button in the media library.
     *
     * Source: wp-includes/media.php:4446
     */
    public static string $MEDIA_LIBRARY_SHOW_VIDEO_PLAYLIST = "media_library_show_video_playlist";

    /**
     * Filters the media metadata.
     *
     * Source: wp-admin/includes/media.php:1666
     */
    public static string $MEDIA_META = "media_meta";

    /**
     * Filters the action links for each attachment in the Media list table.
     *
     * Source: wp-admin/includes/class-wp-media-list-table.php:848
     */
    public static string $MEDIA_ROW_ACTIONS = "media_row_actions";

    /**
     * Filters the HTML markup for a media item sent to the editor.
     *
     * Source: wp-admin/includes/media.php:849
     */
    public static string $MEDIA_SEND_TO_EDITOR = "media_send_to_editor";

    /**
     * Filters the audio and video metadata fields to be shown in the publish meta box.
     *
     * Source: wp-admin/includes/media.php:3396
     */
    public static string $MEDIA_SUBMITBOX_MISC_SECTIONS = "media_submitbox_misc_sections";

    /**
     * Filters the default tab in the legacy (pre-3.5.0) media popup.
     *
     * Source: wp-admin/media-upload.php:78
     */
    public static string $MEDIA_UPLOAD_DEFAULT_TAB = "media_upload_default_tab";

    /**
     * Filters the default media upload type in the legacy (pre-3.5.0) media popup.
     *
     * Source: wp-admin/media-upload.php:64
     */
    public static string $MEDIA_UPLOAD_DEFAULT_TYPE = "media_upload_default_type";

    /**
     * Filters the media upload form action URL.
     *
     * Source: wp-admin/includes/media.php:2321
     */
    public static string $MEDIA_UPLOAD_FORM_URL = "media_upload_form_url";

    /**
     * Filters the media upload mime type list items.
     *
     * Source: wp-admin/includes/media.php:2796
     */
    public static string $MEDIA_UPLOAD_MIME_TYPE_LINKS = "media_upload_mime_type_links";

    /**
     * Filters the available tabs in the legacy (pre-3.5.0) media popup.
     *
     * Source: wp-admin/includes/media.php:31
     */
    public static string $MEDIA_UPLOAD_TABS = "media_upload_tabs";

    /**
     * Filters the media view settings.
     *
     * Source: wp-includes/media.php:4703
     */
    public static string $MEDIA_VIEW_SETTINGS = "media_view_settings";

    /**
     * Filters the media view strings.
     *
     * Source: wp-includes/media.php:4713
     */
    public static string $MEDIA_VIEW_STRINGS = "media_view_strings";

    /**
     * Filters the MediaElement configuration settings.
     *
     * Source: wp-includes/script-loader.php:1123
     */
    public static string $MEJS_SETTINGS = "mejs_settings";

    /**
     * Filters the order of administration menu items.
     *
     * Source: wp-admin/includes/menu.php:293
     */
    public static string $MENU_ORDER = "menu_order";

    /**
     * Filters the table alias identified as compatible with the current clause.
     *
     * Source: wp-includes/class-wp-meta-query.php:871
     */
    public static string $META_QUERY_FIND_COMPATIBLE_TABLE_ALIAS = "meta_query_find_compatible_table_alias";

    /**
     * Filters the list of mime types and file extensions.
     *
     * Source: wp-includes/functions.php:3335
     */
    public static string $MIME_TYPES = "mime_types";

    /**
     * Filters the minimum site name length required when validating a site signup.
     *
     * Source: wp-includes/ms-functions.php:662
     */
    public static string $MINIMUM_SITE_NAME_LENGTH = "minimum_site_name_length";

    /**
     * Filters the list of rewrite rules formatted for output to an .htaccess file.
     *
     * Source: wp-includes/class-wp-rewrite.php:1579
     */
    public static string $MOD_REWRITE_RULES = "mod_rewrite_rules";

    /**
     * Filters the ‘Months’ drop-down results.
     *
     * Source: wp-admin/includes/class-wp-list-table.php:715
     */
    public static string $MONTHS_DROPDOWN_RESULTS = "months_dropdown_results";

    /**
     * Filters the month archive permalink.
     *
     * Source: wp-includes/link-template.php:604
     */
    public static string $MONTH_LINK = "month_link";

    /**
     * Filters the arguments for the site query in the sites list table.
     *
     * Source: wp-admin/includes/class-wp-ms-sites-list-table.php:175
     */
    public static string $MS_SITES_LIST_TABLE_QUERY_ARGS = "ms_sites_list_table_query_args";

    /**
     * Filters checking the status of the current blog.
     *
     * Source: wp-includes/ms-load.php:83
     */
    public static string $MS_SITE_CHECK = "ms_site_check";

    /**
     * Filters the action links displayed next the sites a user belongs to in the Network Admin Users list table.
     *
     * Source: wp-admin/includes/class-wp-ms-users-list-table.php:428
     */
    public static string $MS_USER_LIST_SITE_ACTIONS = "ms_user_list_site_actions";

    /**
     * Filters the span class for a site listing on the mulisite user list table.
     *
     * Source: wp-admin/includes/class-wp-ms-users-list-table.php:391
     */
    public static string $MS_USER_LIST_SITE_CLASS = "ms_user_list_site_class";

    /**
     * Filters the action links displayed under each user in the Network Admin Users list table.
     *
     * Source: wp-admin/includes/class-wp-ms-users-list-table.php:539
     */
    public static string $MS_USER_ROW_ACTIONS = "ms_user_row_actions";

    /**
     * Filters the languages available in the dropdown.
     *
     * Source: wp-admin/includes/ms.php:662
     */
    public static string $MU_DROPDOWN_LANGUAGES = "mu_dropdown_languages";

    /**
     * Filters available network-wide administration menu options.
     *
     * Source: wp-admin/network/settings.php:486
     */
    public static string $MU_MENU_ITEMS = "mu_menu_items";

    /**
     * Filters the row links displayed for each site on the My Sites screen.
     *
     * Source: wp-admin/my-sites.php:139
     */
    public static string $MYBLOGS_BLOG_ACTIONS = "myblogs_blog_actions";

    /**
     * Enable the Global Settings section on the My Sites screen.
     *
     * Source: wp-admin/my-sites.php:110
     */
    public static string $MYBLOGS_OPTIONS = "myblogs_options";

    /**
     * Filters the navigation markup template.
     *
     * Source: wp-includes/link-template.php:2965
     */
    public static string $NAVIGATION_MARKUP_TEMPLATE = "navigation_markup_template";

    /**
     * Filters the HTML format of widgets with navigation links.
     *
     * Source: wp-includes/widgets/class-wp-nav-menu-widget.php:72
     */
    public static string $NAVIGATION_WIDGETS_FORMAT = "navigation_widgets_format";

    /**
     * Filters a navigation menu item’s title attribute.
     *
     * Source: wp-includes/nav-menu.php:923
     */
    public static string $NAV_MENU_ATTR_TITLE = "nav_menu_attr_title";

    /**
     * Filters the CSS classes applied to a menu item’s list item element.
     *
     * Source: wp-includes/class-walker-nav-menu.php:158
     */
    public static string $NAV_MENU_CSS_CLASS = "nav_menu_css_class";

    /**
     * Filters a navigation menu item’s description.
     *
     * Source: wp-includes/nav-menu.php:933
     */
    public static string $NAV_MENU_DESCRIPTION = "nav_menu_description";

    /**
     * Filters the posts displayed in the ‘View All’ tab of the current post type’s menu items meta box.
     *
     * Source: wp-admin/includes/nav-menu.php:655
     */
    public static function NAV_MENU_ITEMS_POST_TYPE_NAME(string $post_type_name): string
    {
        return "nav_menu_items_" . $post_type_name;
    }


    /**
     * Filters the posts displayed in the ‘Most Recent’ tab of the current post type’s menu items meta box.
     *
     * Source: wp-admin/includes/nav-menu.php:560
     */
    public static function NAV_MENU_ITEMS_POST_TYPE_NAME_RECENT(string $post_type_name): string
    {
        return "nav_menu_items_" . $post_type_name;
    }


    /**
     * Filters the arguments for a single nav menu item.
     *
     * Source: wp-includes/class-walker-nav-menu.php:145
     */
    public static string $NAV_MENU_ITEM_ARGS = "nav_menu_item_args";

    /**
     * Filters the ID attribute applied to a menu item’s list item element.
     *
     * Source: wp-includes/class-walker-nav-menu.php:172
     */
    public static string $NAV_MENU_ITEM_ID = "nav_menu_item_id";

    /**
     * Filters a menu item’s title.
     *
     * Source: wp-includes/class-walker-nav-menu.php:230
     */
    public static string $NAV_MENU_ITEM_TITLE = "nav_menu_item_title";

    /**
     * Filters the HTML attributes applied to a menu item’s anchor element.
     *
     * Source: wp-includes/class-walker-nav-menu.php:207
     */
    public static string $NAV_MENU_LINK_ATTRIBUTES = "nav_menu_link_attributes";

    /**
     * Filters whether a menu items meta box will be added for the current object type.
     *
     * Source: wp-admin/includes/nav-menu.php:229
     */
    public static string $NAV_MENU_META_BOX_OBJECT = "nav_menu_meta_box_object";

    /**
     * Filters the CSS class(es) applied to a menu list element.
     *
     * Source: wp-includes/class-walker-nav-menu.php:75
     */
    public static string $NAV_MENU_SUBMENU_CSS_CLASS = "nav_menu_submenu_css_class";

    /**
     * Filters the network query clauses.
     *
     * Source: wp-includes/class-wp-network-query.php:452
     */
    public static string $NETWORKS_CLAUSES = "networks_clauses";

    /**
     * Filters the network data before the query takes place.
     *
     * Source: wp-includes/class-wp-network-query.php:233
     */
    public static string $NETWORKS_PRE_QUERY = "networks_pre_query";

    /**
     * Filters the contents of the email notification sent when the network admin email address is changed.
     *
     * Source: wp-includes/ms-functions.php:2874
     */
    public static string $NETWORK_ADMIN_EMAIL_CHANGE_EMAIL = "network_admin_email_change_email";

    /**
     * Filters the action links displayed for each plugin in the Network Admin Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:910
     */
    public static string $NETWORK_ADMIN_PLUGIN_ACTION_LINKS = "network_admin_plugin_action_links";

    /**
     * Filters the list of action links displayed for a specific plugin in the Network Admin Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:930
     */
    public static function NETWORK_ADMIN_PLUGIN_ACTION_LINKS_PLUGIN_FILE(string $plugin_file): string
    {
        return "network_admin_plugin_action_links_" . $plugin_file;
    }


    /**
     * Filters the network admin URL.
     *
     * Source: wp-includes/link-template.php:3731
     */
    public static string $NETWORK_ADMIN_URL = "network_admin_url";

    /**
     * Filters the array of themes allowed on the network.
     *
     * Source: wp-includes/class-wp-theme.php:1576
     */
    public static string $NETWORK_ALLOWED_THEMES = "network_allowed_themes";

    /**
     * Filters the number of path segments to consider when searching for a site.
     *
     * Source: wp-includes/class-wp-network.php:380
     */
    public static string $NETWORK_BY_PATH_SEGMENTS_COUNT = "network_by_path_segments_count";

    /**
     * Filters the links that appear on site-editing network pages.
     *
     * Source: wp-admin/includes/ms.php:1041
     */
    public static string $NETWORK_EDIT_SITE_NAV_LINKS = "network_edit_site_nav_links";

    /**
     * Filters the network home URL.
     *
     * Source: wp-includes/link-template.php:3695
     */
    public static string $NETWORK_HOME_URL = "network_home_url";

    /**
     * Filters a specific, non-default, site-updated message in the Network admin.
     *
     * Source: wp-admin/network/sites.php:352
     */
    public static function NETWORK_SITES_UPDATED_MESSAGE_ACTION(string $action): string
    {
        return "network_sites_updated_message_" . $action;
    }

    /**
     * Filters the network site URL.
     *
     * Source: wp-includes/link-template.php:3645
     */
    public static string $NETWORK_SITE_URL = "network_site_url";

    /**
     * Filters the new site name during registration.
     *
     * Source: wp-includes/ms-functions.php:689
     */
    public static string $NEWBLOGNAME = "newblogname";

    /**
     * Filters the message body of the new site activation email sent to the network administrator.
     *
     * Source: wp-includes/ms-functions.php:1463
     */
    public static string $NEWBLOG_NOTIFY_SITEADMIN = "newblog_notify_siteadmin";

    /**
     * Filters the message body of the new user activation email sent to the network administrator.
     *
     * Source: wp-includes/ms-functions.php:1519
     */
    public static string $NEWUSER_NOTIFY_SITEADMIN = "newuser_notify_siteadmin";

    /**
     * Filters the text of the email sent when a change of site admin email address is attempted.
     *
     * Source: wp-admin/includes/misc.php:1504
     */
    public static string $NEW_ADMIN_EMAIL_CONTENT = "new_admin_email_content";

    /**
     * Filters the text of the email sent when a change of network admin email address is attempted.
     *
     * Source: wp-includes/ms-functions.php:2769
     */
    public static string $NEW_NETWORK_ADMIN_EMAIL_CONTENT = "new_network_admin_email_content";

    /**
     * Filters the content of the email sent to the Multisite network administrator when a new site is created.
     *
     * Source: wp-includes/ms-functions.php:1791
     */
    public static string $NEW_SITE_EMAIL = "new_site_email";

    /**
     * Filters the text of the email sent when a change of user email address is attempted.
     *
     * Source: wp-includes/user.php:3710
     */
    public static string $NEW_USER_EMAIL_CONTENT = "new_user_email_content";

    /**
     * Filters the anchor tag attributes for the next comments page link.
     *
     * Source: wp-includes/link-template.php:3065
     */
    public static string $NEXT_COMMENTS_LINK_ATTRIBUTES = "next_comments_link_attributes";

    /**
     * Filters the anchor tag attributes for the next posts page link.
     *
     * Source: wp-includes/link-template.php:2510
     */
    public static string $NEXT_POSTS_LINK_ATTRIBUTES = "next_posts_link_attributes";

    /**
     * Filters the singular or plural form of a string.
     *
     * Source: wp-includes/l10n.php:490
     */
    public static string $NGETTEXT = "ngettext";

    /**
     * Filters the singular or plural form of a string with gettext context.
     *
     * Source: wp-includes/l10n.php:550
     */
    public static string $NGETTEXT_WITH_CONTEXT = "ngettext_with_context";

    /**
     * Filters the singular or plural form of a string with gettext context for a domain.
     *
     * Source: wp-includes/l10n.php:566
     */
    public static function NGETTEXT_WITH_CONTEXT_DOMAIN(string $domain): string
    {
        return "ngettext_with_context_" . $domain;
    }


    /**
     * Filters the singular or plural form of a string for a domain.
     *
     * Source: wp-includes/l10n.php:505
     */
    public static function NGETTEXT_DOMAIN(string $domain): string
    {
        return "ngettext_" . $domain;
    }


    /**
     * Filters the cache-controlling headers.
     *
     * Source: wp-includes/functions.php:1501
     */
    public static string $NOCACHE_HEADERS = "nocache_headers";

    /**
     * Filters the lifespan of nonces in seconds.
     *
     * Source: wp-includes/pluggable.php:2258
     */
    public static string $NONCE_LIFE = "nonce_life";

    /**
     * Filters whether the user who generated the nonce is logged out.
     *
     * Source: wp-includes/pluggable.php:2291
     */
    public static string $NONCE_USER_LOGGED_OUT = "nonce_user_logged_out";

    /**
     * Filters whether to send the site moderator email notifications, overriding the site setting.
     *
     * Source: wp-includes/pluggable.php:1867
     */
    public static string $NOTIFY_MODERATOR = "notify_moderator";

    /**
     * Filters whether to send the post author new comment notification emails, overriding the site setting.
     *
     * Source: wp-includes/comment.php:2372
     */
    public static string $NOTIFY_POST_AUTHOR = "notify_post_author";

    /**
     * Filters the list of shortcodes not to texturize.
     *
     * Source: wp-includes/formatting.php:226
     */
    public static string $NO_TEXTURIZE_SHORTCODES = "no_texturize_shortcodes";

    /**
     * Filters the list of HTML elements not to texturize.
     *
     * Source: wp-includes/formatting.php:218
     */
    public static string $NO_TEXTURIZE_TAGS = "no_texturize_tags";

    /**
     * Filters the number formatted based on the locale.
     *
     * Source: wp-includes/functions.php:440
     */
    public static string $NUMBER_FORMAT_I18N = "number_format_i18n";

    /**
     * Filters the returned oEmbed HTML.
     *
     * Source: wp-includes/class-wp-oembed.php:728
     */
    public static string $OEMBED_DATAPARSE = "oembed_dataparse";

    /**
     * Filters the maxwidth oEmbed parameter.
     *
     * Source: wp-includes/class-wp-oembed-controller.php:33
     */
    public static string $OEMBED_DEFAULT_WIDTH = "oembed_default_width";

    /**
     * Filters the oEmbed discovery links HTML.
     *
     * Source: wp-includes/embed.php:353
     */
    public static string $OEMBED_DISCOVERY_LINKS = "oembed_discovery_links";

    /**
     * Filters the oEmbed endpoint URL.
     *
     * Source: wp-includes/embed.php:465
     */
    public static string $OEMBED_ENDPOINT_URL = "oembed_endpoint_url";

    /**
     * Filters the oEmbed URL to be fetched.
     *
     * Source: wp-includes/class-wp-oembed.php:543
     */
    public static string $OEMBED_FETCH_URL = "oembed_fetch_url";

    /**
     * Filters the title attribute of the given oEmbed HTML iframe.
     *
     * Source: wp-includes/embed.php:879
     */
    public static string $OEMBED_IFRAME_TITLE_ATTRIBUTE = "oembed_iframe_title_attribute";

    /**
     * Filters the link types that contain oEmbed provider URLs.
     *
     * Source: wp-includes/class-wp-oembed.php:463
     */
    public static string $OEMBED_LINKTYPES = "oembed_linktypes";

    /**
     * Filters the allowed minimum and maximum widths for the oEmbed response.
     *
     * Source: wp-includes/embed.php:569
     */
    public static string $OEMBED_MIN_MAX_WIDTH = "oembed_min_max_width";

    /**
     * Filters the list of sanctioned oEmbed providers.
     *
     * Source: wp-includes/class-wp-oembed.php:217
     */
    public static string $OEMBED_PROVIDERS = "oembed_providers";

    /**
     * Filters oEmbed remote get arguments.
     *
     * Source: wp-includes/class-wp-oembed.php:447
     */
    public static string $OEMBED_REMOTE_GET_ARGS = "oembed_remote_get_args";

    /**
     * Filters the determined post ID.
     *
     * Source: wp-includes/class-wp-oembed-controller.php:130
     */
    public static string $OEMBED_REQUEST_POST_ID = "oembed_request_post_id";

    /**
     * Filters the oEmbed response data.
     *
     * Source: wp-includes/embed.php:607
     */
    public static string $OEMBED_RESPONSE_DATA = "oembed_response_data";

    /**
     * Filters the HTML returned by the oEmbed provider.
     *
     * Source: wp-includes/class-wp-oembed.php:420
     */
    public static string $OEMBED_RESULT = "oembed_result";

    /**
     * Filters the oEmbed TTL value (time to live).
     *
     * Source: wp-includes/class-wp-embed.php:247
     */
    public static string $OEMBED_TTL = "oembed_ttl";

    /**
     * Filters the old slug redirect post ID.
     *
     * Source: wp-includes/query.php:1092
     */
    public static string $OLD_SLUG_REDIRECT_POST_ID = "old_slug_redirect_post_id";

    /**
     * Filters the old slug redirect URL.
     *
     * Source: wp-includes/query.php:1113
     */
    public static string $OLD_SLUG_REDIRECT_URL = "old_slug_redirect_url";

    /**
     * Filters the capability required when using the Settings API.
     *
     * Source: wp-admin/options.php:45
     */
    public static function OPTION_PAGE_CAPABILITY_OPTION_PAGE(string $option_page): string
    {
        return "option_page_capability_" . $option_page;
    }


    /**
     * Filters the value of an existing option.
     *
     * Source: wp-includes/option.php:253
     */
    public static function OPTION_OPTION(string $option): string
    {
        return "option_" . $option;
    }


    /**
     * Filters whether to override the .mo file loading.
     *
     * Source: wp-includes/l10n.php:733
     */
    public static string $OVERRIDE_LOAD_TEXTDOMAIN = "override_load_textdomain";

    /**
     * Filters whether to allow the post lock to be overridden.
     *
     * Source: wp-admin/includes/post.php:1791
     */
    public static string $OVERRIDE_POST_LOCK = "override_post_lock";

    /**
     * Filters whether to override the text domain unloading.
     *
     * Source: wp-includes/l10n.php:817
     */
    public static string $OVERRIDE_UNLOAD_TEXTDOMAIN = "override_unload_textdomain";

    /**
     * Filters the arguments used to generate a Pages drop-down element.
     *
     * Source: wp-admin/includes/meta-boxes.php:966
     */
    public static string $PAGE_ATTRIBUTES_DROPDOWN_PAGES_ARGS = "page_attributes_dropdown_pages_args";

    /**
     * Filters the list of CSS classes to include with each page item in the list.
     *
     * Source: wp-includes/class-walker-page.php:158
     */
    public static string $PAGE_CSS_CLASS = "page_css_class";

    /**
     * Filters the permalink for a page.
     *
     * Source: wp-includes/link-template.php:405
     */
    public static string $PAGE_LINK = "page_link";

    /**
     * Filters the HTML attributes applied to a page menu item’s anchor element.
     *
     * Source: wp-includes/class-walker-page.php:189
     */
    public static string $PAGE_MENU_LINK_ATTRIBUTES = "page_menu_link_attributes";

    /**
     * Filters rewrite rules used for “page” post type archives.
     *
     * Source: wp-includes/class-wp-rewrite.php:1397
     */
    public static string $PAGE_REWRITE_RULES = "page_rewrite_rules";

    /**
     * Filters the array of row action links on the Pages list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1534
     */
    public static string $PAGE_ROW_ACTIONS = "page_row_actions";

    /**
     * Filters the paginated links for the given archive pages.
     *
     * Source: wp-includes/general-template.php:4567
     */
    public static string $PAGINATE_LINKS = "paginate_links";

    /**
     * Filters the HTML output of paginated links for archives.
     *
     * Source: wp-includes/general-template.php:4646
     */
    public static string $PAGINATE_LINKS_OUTPUT = "paginate_links_output";

    /**
     * Filters the parent file of an admin menu sub-menu item.
     *
     * Source: wp-admin/menu-header.php:38
     */
    public static string $PARENT_FILE = "parent_file";

    /**
     *
     *
     * Source: wp-includes/deprecated.php:2819
     */
    public static string $PARENT_POST_REL_LINK = "parent_post_rel_link";

    /**
     * Filters the path to a file in the parent theme.
     *
     * Source: wp-includes/link-template.php:4565
     */
    public static string $PARENT_THEME_FILE_PATH = "parent_theme_file_path";

    /**
     * Filters the URL to a file in the parent theme.
     *
     * Source: wp-includes/link-template.php:4504
     */
    public static string $PARENT_THEME_FILE_URI = "parent_theme_file_uri";

    /**
     * Filters the contents of the email sent when the user’s password is changed.
     *
     * Source: wp-includes/user.php:2627
     */
    public static string $PASSWORD_CHANGE_EMAIL = "password_change_email";

    /**
     * Filters the text describing the site’s password complexity policy.
     *
     * Source: wp-includes/user.php:2830
     */
    public static string $PASSWORD_HINT = "password_hint";

    /**
     * Filters the expiration time of password reset keys.
     *
     * Source: wp-includes/user.php:2975
     */
    public static string $PASSWORD_RESET_EXPIRATION = "password_reset_expiration";

    /**
     * Filters the return value of check_password_reset_key()  when an old-style key is used.
     *
     * Source: wp-includes/user.php:3013
     */
    public static string $PASSWORD_RESET_KEY_EXPIRED = "password_reset_key_expired";

    /**
     * Filters the content of the post submitted by email before saving.
     *
     * Source: wp-mail.php:216
     */
    public static string $PHONE_CONTENT = "phone_content";

    /**
     * Filters the pingback source URI.
     *
     * Source: wp-includes/class-wp-xmlrpc-server.php:6850
     */
    public static string $PINGBACK_PING_SOURCE_URI = "pingback_ping_source_uri";

    /**
     * Filters the user agent sent when pinging-back a URL.
     *
     * Source: wp-includes/comment.php:3133
     */
    public static string $PINGBACK_USERAGENT = "pingback_useragent";

    /**
     * Filters whether the current post is open for pings.
     *
     * Source: wp-includes/comment-template.php:1280
     */
    public static string $PINGS_OPEN = "pings_open";

    /**
     * Filters the response for the current WordPress.org Plugin Installation API request.
     *
     * Source: wp-admin/includes/plugin-install.php:150
     */
    public static string $PLUGINS_API = "plugins_api";

    /**
     * Filters the WordPress.org Plugin Installation API arguments.
     *
     * Source: wp-admin/includes/plugin-install.php:134
     */
    public static string $PLUGINS_API_ARGS = "plugins_api_args";

    /**
     * Filters the Plugin Installation API response results.
     *
     * Source: wp-admin/includes/plugin-install.php:234
     */
    public static string $PLUGINS_API_RESULT = "plugins_api_result";

    /**
     * Filters whether plugins auto-update is enabled.
     *
     * Source: wp-admin/includes/update.php:1060
     */
    public static string $PLUGINS_AUTO_UPDATE_ENABLED = "plugins_auto_update_enabled";

    /**
     * Filters the locales requested for plugin translations.
     *
     * Source: wp-includes/update.php:405
     */
    public static string $PLUGINS_UPDATE_CHECK_LOCALES = "plugins_update_check_locales";

    /**
     * Filters the URL to the plugins directory.
     *
     * Source: wp-includes/link-template.php:3598
     */
    public static string $PLUGINS_URL = "plugins_url";

    /**
     * Filters the action links displayed for each plugin in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:952
     */
    public static string $PLUGIN_ACTION_LINKS = "plugin_action_links";

    /**
     * Filters the list of action links displayed for a specific plugin in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:974
     */
    public static function PLUGIN_ACTION_LINKS_PLUGIN_FILE(string $plugin_file): string
    {
        return "plugin_action_links_" . $plugin_file;
    }


    /**
     * Filters the text string of the auto-updates setting for each plugin in the Site Health debug data.
     *
     * Source: wp-admin/includes/class-wp-debug-data.php:1053
     */
    public static string $PLUGIN_AUTO_UPDATE_DEBUG_STRING = "plugin_auto_update_debug_string";

    /**
     * Filters the HTML of the auto-updates setting for each plugin in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:1234
     */
    public static string $PLUGIN_AUTO_UPDATE_SETTING_HTML = "plugin_auto_update_setting_html";

    /**
     * Filters the array of excluded directories and files while scanning the folder.
     *
     * Source: wp-admin/includes/plugin.php:242
     */
    public static string $PLUGIN_FILES_EXCLUSIONS = "plugin_files_exclusions";

    /**
     * Filters the install action links for a plugin.
     *
     * Source: wp-admin/includes/class-wp-plugin-install-list-table.php:680
     */
    public static string $PLUGIN_INSTALL_ACTION_LINKS = "plugin_install_action_links";

    /**
     * Filters the plugin card description on the Add Plugins screen.
     *
     * Source: wp-admin/includes/class-wp-plugin-install-list-table.php:528
     */
    public static string $PLUGIN_INSTALL_DESCRIPTION = "plugin_install_description";

    /**
     * Filters a plugin’s locale.
     *
     * Source: wp-includes/l10n.php:919
     */
    public static string $PLUGIN_LOCALE = "plugin_locale";

    /**
     * Filters the array of row meta for each plugin in the Plugins list table.
     *
     * Source: wp-admin/includes/class-wp-plugins-list-table.php:1136
     */
    public static string $PLUGIN_ROW_META = "plugin_row_meta";

    /**
     * Filters the Plupload default parameters.
     *
     * Source: wp-includes/media.php:4025
     */
    public static string $PLUPLOAD_DEFAULT_PARAMS = "plupload_default_params";

    /**
     * Filters the Plupload default settings.
     *
     * Source: wp-includes/media.php:4012
     */
    public static string $PLUPLOAD_DEFAULT_SETTINGS = "plupload_default_settings";

    /**
     * Filters the default Plupload settings.
     *
     * Source: wp-admin/includes/media.php:2198
     */
    public static string $PLUPLOAD_INIT = "plupload_init";

    /**
     * Filters meta for a network on creation.
     *
     * Source: wp-admin/includes/schema.php:1303
     */
    public static string $POPULATE_NETWORK_META = "populate_network_meta";

    /**
     * Filters meta for a site on creation.
     *
     * Source: wp-admin/includes/schema.php:1349
     */
    public static string $POPULATE_SITE_META = "populate_site_meta";

    /**
     * Filters the postbox classes for a specific screen and screen ID combo.
     *
     * Source: wp-admin/includes/post.php:1313
     */
    public static function POSTBOX_CLASSES_PAGE_ID(string $page, string $id): string
    {
        return "postbox_classes_" . $page . $id;
    }


    /**
     * Filters the postbox classes for a specific screen and box ID combo.
     *
     * Source: wp-admin/includes/post.php:1369
     */
    public static function POSTBOX_CLASSES_SCREEN_ID_BOX_ID(string $screen_id, string $box_id): string
    {
        return "postbox_classes_" . $screen_id . $box_id;
    }


    /**
     * Filters values for the meta key dropdown in the Custom Fields meta box.
     *
     * Source: wp-admin/includes/template.php:686
     */
    public static string $POSTMETA_FORM_KEYS = "postmeta_form_keys";

    /**
     * Filters the number of custom fields to retrieve for the drop-down in the Custom Fields meta box.
     *
     * Source: wp-admin/includes/template.php:697
     */
    public static string $POSTMETA_FORM_LIMIT = "postmeta_form_limit";

    /**
     * Filters all query clauses at once, for convenience.
     *
     * Source: wp-includes/class-wp-query.php:2901
     */
    public static string $POSTS_CLAUSES = "posts_clauses";

    /**
     * Filters all query clauses at once, for convenience.
     *
     * Source: wp-includes/class-wp-query.php:3035
     */
    public static string $POSTS_CLAUSES_REQUEST = "posts_clauses_request";

    /**
     * Filters the DISTINCT clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2858
     */
    public static string $POSTS_DISTINCT = "posts_distinct";

    /**
     * Filters the DISTINCT clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2986
     */
    public static string $POSTS_DISTINCT_REQUEST = "posts_distinct_request";

    /**
     * Filters the SELECT clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2878
     */
    public static string $POSTS_FIELDS = "posts_fields";

    /**
     * Filters the SELECT clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2998
     */
    public static string $POSTS_FIELDS_REQUEST = "posts_fields_request";

    /**
     * Filters the GROUP BY clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2826
     */
    public static string $POSTS_GROUPBY = "posts_groupby";

    /**
     * Filters the GROUP BY clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2950
     */
    public static string $POSTS_GROUPBY_REQUEST = "posts_groupby_request";

    /**
     * Filters the JOIN clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2678
     */
    public static string $POSTS_JOIN = "posts_join";

    /**
     * Filters the JOIN clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2838
     */
    public static string $POSTS_JOIN_PAGED = "posts_join_paged";

    /**
     * Filters the JOIN clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2962
     */
    public static string $POSTS_JOIN_REQUEST = "posts_join_request";

    /**
     * Filters the ORDER BY clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2848
     */
    public static string $POSTS_ORDERBY = "posts_orderby";

    /**
     * Filters the ORDER BY clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2974
     */
    public static string $POSTS_ORDERBY_REQUEST = "posts_orderby_request";

    /**
     * Filters the posts array before the query takes place.
     *
     * Source: wp-includes/class-wp-query.php:3097
     */
    public static string $POSTS_PRE_QUERY = "posts_pre_query";

    /**
     * Filters the completed SQL query before sending.
     *
     * Source: wp-includes/class-wp-query.php:3078
     */
    public static string $POSTS_REQUEST = "posts_request";

    /**
     * Filters the Post IDs SQL request before sending.
     *
     * Source: wp-includes/class-wp-query.php:3245
     */
    public static string $POSTS_REQUEST_IDS = "posts_request_ids";

    /**
     * Filters the raw post results array, prior to status checks.
     *
     * Source: wp-includes/class-wp-query.php:3289
     */
    public static string $POSTS_RESULTS = "posts_results";

    /**
     * Filters the search SQL that is used in the WHERE clause of WP_Query.
     *
     * Source: wp-includes/class-wp-query.php:2190
     */
    public static string $POSTS_SEARCH = "posts_search";

    /**
     * Filters the ORDER BY used when ordering search results.
     *
     * Source: wp-includes/class-wp-query.php:2449
     */
    public static string $POSTS_SEARCH_ORDERBY = "posts_search_orderby";

    /**
     * Filters the WHERE clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2668
     */
    public static string $POSTS_WHERE = "posts_where";

    /**
     * Filters the WHERE clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2816
     */
    public static string $POSTS_WHERE_PAGED = "posts_where_paged";

    /**
     * Filters the WHERE clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2938
     */
    public static string $POSTS_WHERE_REQUEST = "posts_where_request";

    /**
     * Filters the list of CSS class names for the current post.
     *
     * Source: wp-includes/post-template.php:598
     */
    public static string $POST_CLASS = "post_class";

    /**
     * Filters the taxonomies to generate classes for each individual term.
     *
     * Source: wp-includes/post-template.php:563
     */
    public static string $POST_CLASS_TAXONOMIES = "post_class_taxonomies";

    /**
     * Filters the links in `$taxonomy` column of edit.php.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1309
     */
    public static string $POST_COLUMN_TAXONOMY_LINKS = "post_column_taxonomy_links";

    /**
     * Filters the post comments feed permalink.
     *
     * Source: wp-includes/link-template.php:816
     */
    public static string $POST_COMMENTS_FEED_LINK = "post_comments_feed_link";

    /**
     * Filters the post comment feed link anchor tag.
     *
     * Source: wp-includes/link-template.php:850
     */
    public static string $POST_COMMENTS_FEED_LINK_HTML = "post_comments_feed_link_html";

    /**
     * Filters the formatted post comments link HTML.
     *
     * Source: wp-includes/comment-template.php:1865
     */
    public static string $POST_COMMENTS_LINK = "post_comments_link";

    /**
     * Filters the status text of the post.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1195
     */
    public static string $POST_DATE_COLUMN_STATUS = "post_date_column_status";

    /**
     * Filters the published time of the post.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1214
     */
    public static string $POST_DATE_COLUMN_TIME = "post_date_column_time";

    /**
     * Filters the arguments for the taxonomy parent dropdown on the Post Edit page.
     *
     * Source: wp-admin/includes/meta-boxes.php:680
     */
    public static string $POST_EDIT_CATEGORY_PARENT_DROPDOWN_ARGS = "post_edit_category_parent_dropdown_args";

    /**
     * Filters the URL to embed a specific post.
     *
     * Source: wp-includes/embed.php:429
     */
    public static string $POST_EMBED_URL = "post_embed_url";

    /**
     * Filters the post formats rewrite base.
     *
     * Source: wp-includes/taxonomy.php:45
     */
    public static string $POST_FORMAT_REWRITE_BASE = "post_format_rewrite_base";

    /**
     * Filters the default gallery shortcode output.
     *
     * Source: wp-includes/media.php:2406
     */
    public static string $POST_GALLERY = "post_gallery";

    /**
     * Filters the LIMIT clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:2868
     */
    public static string $POST_LIMITS = "post_limits";

    /**
     * Filters the LIMIT clause of the query.
     *
     * Source: wp-includes/class-wp-query.php:3010
     */
    public static string $POST_LIMITS_REQUEST = "post_limits_request";

    /**
     * Filters the permalink for a post.
     *
     * Source: wp-includes/link-template.php:304
     */
    public static string $POST_LINK = "post_link";

    /**
     * Filters the category that gets used in the %category% permalink token.
     *
     * Source: wp-includes/link-template.php:244
     */
    public static string $POST_LINK_CATEGORY = "post_link_category";

    /**
     * Filters the default list of post mime types.
     *
     * Source: wp-includes/post.php:3224
     */
    public static string $POST_MIME_TYPES = "post_mime_types";

    /**
     * Filters the life span of the post password cookie.
     *
     * Source: wp-login.php:731
     */
    public static string $POST_PASSWORD_EXPIRES = "post_password_expires";

    /**
     * Filters whether a post requires the user to supply a password.
     *
     * Source: wp-includes/post-template.php:898
     */
    public static string $POST_PASSWORD_REQUIRED = "post_password_required";

    /**
     * Filters the playlist output.
     *
     * Source: wp-includes/media.php:2745
     */
    public static string $POST_PLAYLIST = "post_playlist";

    /**
     * Filters rewrite rules used for “post” archives.
     *
     * Source: wp-includes/class-wp-rewrite.php:1311
     */
    public static string $POST_REWRITE_RULES = "post_rewrite_rules";

    /**
     * Filters the array of row action links on the Posts list table.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1549
     */
    public static string $POST_ROW_ACTIONS = "post_row_actions";

    /**
     * Filters the post thumbnail HTML.
     *
     * Source: wp-includes/post-thumbnail-template.php:232
     */
    public static string $POST_THUMBNAIL_HTML = "post_thumbnail_html";

    /**
     * Filters the post thumbnail ID.
     *
     * Source: wp-includes/post-thumbnail-template.php:70
     */
    public static string $POST_THUMBNAIL_ID = "post_thumbnail_id";

    /**
     * Filters the post thumbnail size.
     *
     * Source: wp-includes/post-thumbnail-template.php:167
     */
    public static string $POST_THUMBNAIL_SIZE = "post_thumbnail_size";

    /**
     * Filters the post thumbnail URL.
     *
     * Source: wp-includes/post-thumbnail-template.php:265
     */
    public static string $POST_THUMBNAIL_URL = "post_thumbnail_url";

    /**
     * Filters the list of post types to delete with a user.
     *
     * Source: wp-admin/includes/user.php:388
     */
    public static string $POST_TYPES_TO_DELETE_WITH_USER = "post_types_to_delete_with_user";

    /**
     * Filters the post type archive feed link.
     *
     * Source: wp-includes/link-template.php:1388
     */
    public static string $POST_TYPE_ARCHIVE_FEED_LINK = "post_type_archive_feed_link";

    /**
     * Filters the post type archive permalink.
     *
     * Source: wp-includes/link-template.php:1344
     */
    public static string $POST_TYPE_ARCHIVE_LINK = "post_type_archive_link";

    /**
     * Filters the post type archive title.
     *
     * Source: wp-includes/general-template.php:1520
     */
    public static string $POST_TYPE_ARCHIVE_TITLE = "post_type_archive_title";

    /**
     * Filters the labels of a specific post type.
     *
     * Source: wp-includes/post.php:2008
     */
    public static function POST_TYPE_LABELS_POST_TYPE(string $post_type): string
    {
        return "post_type_labels_" . $post_type;
    }


    /**
     * Filters the permalink for a post of a custom post type.
     *
     * Source: wp-includes/link-template.php:371
     */
    public static string $POST_TYPE_LINK = "post_type_link";

    /**
     * Filters the post updated messages.
     *
     * Source: wp-admin/edit-form-advanced.php:219
     */
    public static string $POST_UPDATED_MESSAGES = "post_updated_messages";

    /**
     *
     *
     * Source: wp-includes/post.php:2244
     */
    public static function POST_FIELD(string $field): string
    {
        return "post_" . $field;
    }


    /**
     * Filters the attachment markup to be prepended to the post content.
     *
     * Source: wp-includes/post-template.php:1727
     */
    public static string $PREPEND_ATTACHMENT = "prepend_attachment";

    /**
     * Filters a comment’s data before it is sanitized and inserted into the database.
     *
     * Source: wp-includes/comment.php:2241
     */
    public static string $PREPROCESS_COMMENT = "preprocess_comment";

    /**
     * Filters the URL used for a post preview.
     *
     * Source: wp-includes/link-template.php:1431
     */
    public static string $PREVIEW_POST_LINK = "preview_post_link";

    /**
     * Filters the anchor tag attributes for the previous comments page link.
     *
     * Source: wp-includes/link-template.php:3112
     */
    public static string $PREVIOUS_COMMENTS_LINK_ATTRIBUTES = "previous_comments_link_attributes";

    /**
     * Filters the anchor tag attributes for the previous posts page link.
     *
     * Source: wp-includes/link-template.php:2596
     */
    public static string $PREVIOUS_POSTS_LINK_ATTRIBUTES = "previous_posts_link_attributes";

    /**
     * Filters the value of a specific network option before it is added.
     *
     * Source: wp-includes/option.php:1563
     */
    public static function PRE_ADD_SITE_OPTION_OPTION(string $option): string
    {
        return "pre_add_site_option_" . $option;
    }


    /**
     * Filters all options before caching them.
     *
     * Source: wp-includes/option.php:331
     */
    public static string $PRE_CACHE_ALLOPTIONS = "pre_cache_alloptions";

    /**
     * Filters the category nicename before it is sanitized.
     *
     * Source: wp-includes/taxonomy.php:1776
     */
    public static string $PRE_CATEGORY_NICENAME = "pre_category_nicename";

    /**
     * Filter to preflight or hijack clearing a scheduled hook.
     *
     * Source: wp-includes/cron.php:570
     */
    public static string $PRE_CLEAR_SCHEDULED_HOOK = "pre_clear_scheduled_hook";

    /**
     * Filters a comment’s approval status before it is set.
     *
     * Source: wp-includes/comment.php:826
     */
    public static string $PRE_COMMENT_APPROVED = "pre_comment_approved";

    /**
     * Filters the comment author’s email cookie before it is set.
     *
     * Source: wp-includes/comment.php:612
     */
    public static string $PRE_COMMENT_AUTHOR_EMAIL = "pre_comment_author_email";

    /**
     * Filters the comment author’s name cookie before it is set.
     *
     * Source: wp-includes/comment.php:594
     */
    public static string $PRE_COMMENT_AUTHOR_NAME = "pre_comment_author_name";

    /**
     * Filters the comment author’s URL cookie before it is set.
     *
     * Source: wp-includes/comment.php:630
     */
    public static string $PRE_COMMENT_AUTHOR_URL = "pre_comment_author_url";

    /**
     * Filters the comment content before it is set.
     *
     * Source: wp-includes/comment.php:2122
     */
    public static string $PRE_COMMENT_CONTENT = "pre_comment_content";

    /**
     * Filters the comment author’s browser user agent before it is set.
     *
     * Source: wp-includes/comment.php:2112
     */
    public static string $PRE_COMMENT_USER_AGENT = "pre_comment_user_agent";

    /**
     * Filters the comment author’s IP address before it is set.
     *
     * Source: wp-includes/comment.php:2130
     */
    public static string $PRE_COMMENT_USER_IP = "pre_comment_user_ip";

    /**
     * Filters the user count before queries are run.
     *
     * Source: wp-includes/user.php:1232
     */
    public static string $PRE_COUNT_USERS = "pre_count_users";

    /**
     * Filters whether an attachment deletion should take place.
     *
     * Source: wp-includes/post.php:6379
     */
    public static string $PRE_DELETE_ATTACHMENT = "pre_delete_attachment";

    /**
     * Filters whether a post deletion should take place.
     *
     * Source: wp-includes/post.php:3391
     */
    public static string $PRE_DELETE_POST = "pre_delete_post";

    /**
     * Filters the locale for the current request prior to the default determination process.
     *
     * Source: wp-includes/l10n.php:133
     */
    public static string $PRE_DETERMINE_LOCALE = "pre_determine_locale";

    /**
     * Filters whether to call a shortcode callback.
     *
     * Source: wp-includes/shortcodes.php:348
     */
    public static string $PRE_DO_SHORTCODE_TAG = "pre_do_shortcode_tag";

    /**
     * Filters text before named entities are converted into numbered entities.
     *
     * Source: wp-includes/formatting.php:4001
     */
    public static string $PRE_ENT2NCR = "pre_ent2ncr";

    /**
     * Allows the HTML for a user’s avatar to be returned early.
     *
     * Source: wp-includes/pluggable.php:2835
     */
    public static string $PRE_GET_AVATAR = "pre_get_avatar";

    /**
     * Filters whether to retrieve the avatar URL early.
     *
     * Source: wp-includes/link-template.php:4340
     */
    public static string $PRE_GET_AVATAR_DATA = "pre_get_avatar_data";

    /**
     * Filters the block template object before the theme file discovery takes place.
     *
     * Source: wp-includes/block-template-utils.php:1101
     */
    public static string $PRE_GET_BLOCK_FILE_TEMPLATE = "pre_get_block_file_template";

    /**
     * Filters the block template object before the query takes place.
     *
     * Source: wp-includes/block-template-utils.php:1027
     */
    public static string $PRE_GET_BLOCK_TEMPLATE = "pre_get_block_template";

    /**
     * Filters the block templates array before the query takes place.
     *
     * Source: wp-includes/block-template-utils.php:891
     */
    public static string $PRE_GET_BLOCK_TEMPLATES = "pre_get_block_templates";

    /**
     * Filters the list of a user’s sites before it is populated.
     *
     * Source: wp-includes/user.php:941
     */
    public static string $PRE_GET_BLOGS_OF_USER = "pre_get_blogs_of_user";

    /**
     * Filters the column charset value before the DB is checked.
     *
     * Source: wp-includes/class-wpdb.php:3025
     */
    public static string $PRE_GET_COL_CHARSET = "pre_get_col_charset";

    /**
     * Filters the document title before it is generated.
     *
     * Source: wp-includes/general-template.php:1168
     */
    public static string $PRE_GET_DOCUMENT_TITLE = "pre_get_document_title";

    /**
     * Pre-filter the return value of get_lastpostmodified()  before the query is run.
     *
     * Source: wp-includes/post.php:7230
     */
    public static string $PRE_GET_LASTPOSTMODIFIED = "pre_get_lastpostmodified";

    /**
     * Filters the main site ID.
     *
     * Source: wp-includes/class-wp-network.php:230
     */
    public static string $PRE_GET_MAIN_SITE_ID = "pre_get_main_site_id";

    /**
     * Determines a network by its domain and path.
     *
     * Source: wp-includes/class-wp-network.php:414
     */
    public static string $PRE_GET_NETWORK_BY_PATH = "pre_get_network_by_path";

    /**
     * Filter to preflight or hijack retrieving ready cron jobs.
     *
     * Source: wp-includes/cron.php:1120
     */
    public static string $PRE_GET_READY_CRON_JOBS = "pre_get_ready_cron_jobs";

    /**
     * Filter to preflight or hijack retrieving a scheduled event.
     *
     * Source: wp-includes/cron.php:746
     */
    public static string $PRE_GET_SCHEDULED_EVENT = "pre_get_scheduled_event";

    /**
     * Filters whether to preempt generating a shortlink for the given post.
     *
     * Source: wp-includes/link-template.php:4045
     */
    public static string $PRE_GET_SHORTLINK = "pre_get_shortlink";

    /**
     * Determines a site by its domain and path.
     *
     * Source: wp-includes/ms-load.php:212
     */
    public static string $PRE_GET_SITE_BY_PATH = "pre_get_site_by_path";

    /**
     * Filters the amount of storage space used by the current site, in megabytes.
     *
     * Source: wp-includes/ms-functions.php:2531
     */
    public static string $PRE_GET_SPACE_USED = "pre_get_space_used";

    /**
     * Filters the table charset value before the DB is checked.
     *
     * Source: wp-includes/class-wpdb.php:2920
     */
    public static string $PRE_GET_TABLE_CHARSET = "pre_get_table_charset";

    /**
     * Filters whether to short-circuit default header status handling.
     *
     * Source: wp-includes/class-wp.php:697
     */
    public static string $PRE_HANDLE_404 = "pre_handle_404";

    /**
     * Filters the preemptive return value of an HTTP request.
     *
     * Source: wp-includes/class-wp-http.php:258
     */
    public static string $PRE_HTTP_REQUEST = "pre_http_request";

    /**
     * Filters whether to preempt sending the request through the proxy.
     *
     * Source: wp-includes/class-wp-http-proxy.php:194
     */
    public static string $PRE_HTTP_SEND_THROUGH_PROXY = "pre_http_send_through_proxy";

    /**
     * Filters a term before it is sanitized and inserted into the database.
     *
     * Source: wp-includes/taxonomy.php:2353
     */
    public static string $PRE_INSERT_TERM = "pre_insert_term";

    /**
     * Filters content to be run through KSES.
     *
     * Source: wp-includes/kses.php:910
     */
    public static string $PRE_KSES = "pre_kses";

    /**
     * Pre-filters script translations for the given file, script handle and text domain.
     *
     * Source: wp-includes/l10n.php:1205
     */
    public static string $PRE_LOAD_SCRIPT_TRANSLATIONS = "pre_load_script_translations";

    /**
     * Filters whether to short-circuit performing the months dropdown query.
     *
     * Source: wp-admin/includes/class-wp-list-table.php:683
     */
    public static string $PRE_MONTHS_DROPDOWN_QUERY = "pre_months_dropdown_query";

    /**
     * Filters whether to short-circuit moving the uploaded file after passing all checks.
     *
     * Source: wp-admin/includes/file.php:980
     */
    public static string $PRE_MOVE_UPLOADED_FILE = "pre_move_uploaded_file";

    /**
     * Filters the oEmbed result before any HTTP requests are made.
     *
     * Source: wp-includes/class-wp-oembed.php:398
     */
    public static string $PRE_OEMBED_RESULT = "pre_oembed_result";

    /**
     * Filters the value of all existing options before it is retrieved.
     *
     * Source: wp-includes/option.php:150
     */
    public static string $PRE_OPTION = "pre_option";

    /**
     * Filters the value of an existing option before it is retrieved.
     *
     * Source: wp-includes/option.php:132
     */
    public static function PRE_OPTION_OPTION(string $option): string
    {
        return "pre_option_" . $option;
    }


    /**
     * Filters the permalink structure for a post before token replacement occurs.
     *
     * Source: wp-includes/link-template.php:217
     */
    public static string $PRE_POST_LINK = "pre_post_link";

    /**
     *
     *
     * Source: wp-includes/post.php:2209
     */
    public static function PRE_POST_FIELD(string $field): string
    {
        return "pre_post_" . $field;
    }

    /**
     * Filters theme data before it is prepared for JavaScript.
     *
     * Source: wp-admin/includes/theme.php:658
     */
    public static string $PRE_PREPARE_THEMES_FOR_JS = "pre_prepare_themes_for_js";

    /**
     * Filters the amount of storage space used by one directory and all its children, in megabytes.
     *
     * Source: wp-includes/functions.php:8281
     */
    public static string $PRE_RECURSE_DIRSIZE = "pre_recurse_dirsize";

    /**
     * Short-circuits the redirect URL guessing for 404 requests.
     *
     * Source: wp-includes/canonical.php:915
     */
    public static string $PRE_REDIRECT_GUESS_404_PERMALINK = "pre_redirect_guess_404_permalink";

    /**
     * Filters the pingback remote source.
     *
     * Source: wp-includes/class-wp-xmlrpc-server.php:6958
     */
    public static string $PRE_REMOTE_SOURCE = "pre_remote_source";

    /**
     * Allows render_block()  to be short-circuited, by returning a non-null value.
     *
     * Source: wp-includes/blocks.php:1004
     */
    public static string $PRE_RENDER_BLOCK = "pre_render_block";

    /**
     * Filter to preflight or hijack rescheduling of a recurring event.
     *
     * Source: wp-includes/cron.php:399
     */
    public static string $PRE_RESCHEDULE_EVENT = "pre_reschedule_event";

    /**
     * Filter to preflight or hijack scheduling an event.
     *
     * Source: wp-includes/cron.php:91
     */
    public static string $PRE_SCHEDULE_EVENT = "pre_schedule_event";

    /**
     * Filters the value of a specific site transient before it is set.
     *
     * Source: wp-includes/option.php:2018
     */
    public static function PRE_SET_SITE_TRANSIENT_TRANSIENT(string $transient): string
    {
        return "pre_set_site_transient_" . $transient;
    }


    /**
     * Filters the theme modification, or ‘theme_mod’, value on save.
     *
     * Source: wp-includes/theme.php:1062
     */
    public static function PRE_SET_THEME_MOD_NAME(string $name): string
    {
        return "pre_set_theme_mod_" . $name;
    }


    /**
     * Filters a specific transient before its value is set.
     *
     * Source: wp-includes/option.php:945
     */
    public static function PRE_SET_TRANSIENT_TRANSIENT(string $transient): string
    {
        return "pre_set_transient_" . $transient;
    }


    /**
     * Filters the value of an existing network option before it is retrieved.
     *
     * Source: wp-includes/option.php:1436
     */
    public static function PRE_SITE_OPTION_OPTION(string $option): string
    {
        return "pre_site_option_" . $option;
    }


    /**
     * Filters the value of an existing site transient before it is retrieved.
     *
     * Source: wp-includes/option.php:1948
     */
    public static function PRE_SITE_TRANSIENT_TRANSIENT(string $transient): string
    {
        return "pre_site_transient_" . $transient;
    }


    /**
     * Filters the permalink structure for a term before token replacement occurs.
     *
     * Source: wp-includes/taxonomy.php:4583
     */
    public static string $PRE_TERM_LINK = "pre_term_link";

    /**
     * Filters a term field value before it is sanitized.
     *
     * Source: wp-includes/taxonomy.php:1751
     */
    public static function PRE_TERM_FIELD(string $field): string
    {
        return "pre_term_" . $field;
    }


    /**
     * Filters the value of an existing transient before it is retrieved.
     *
     * Source: wp-includes/option.php:870
     */
    public static function PRE_TRANSIENT_TRANSIENT(string $transient): string
    {
        return "pre_transient_" . $transient;
    }


    /**
     * Filters whether a post trashing should take place.
     *
     * Source: wp-includes/post.php:3570
     */
    public static string $PRE_TRASH_POST = "pre_trash_post";

    /**
     * Filter to preflight or hijack unscheduling of events.
     *
     * Source: wp-includes/cron.php:490
     */
    public static string $PRE_UNSCHEDULE_EVENT = "pre_unschedule_event";

    /**
     * Filter to preflight or hijack clearing all events attached to the hook.
     *
     * Source: wp-includes/cron.php:659
     */
    public static string $PRE_UNSCHEDULE_HOOK = "pre_unschedule_hook";

    /**
     * Filters whether a post untrashing should take place.
     *
     * Source: wp-includes/post.php:3648
     */
    public static string $PRE_UNTRASH_POST = "pre_untrash_post";

    /**
     * Filters an option before its value is (maybe) serialized and updated.
     *
     * Source: wp-includes/option.php:474
     */
    public static string $PRE_UPDATE_OPTION = "pre_update_option";

    /**
     * Filters a specific option before its value is (maybe) serialized and updated.
     *
     * Source: wp-includes/option.php:463
     */
    public static function PRE_UPDATE_OPTION_OPTION(string $option): string
    {
        return "pre_update_option_" . $option;
    }


    /**
     * Filters a specific network option before its value is updated.
     *
     * Source: wp-includes/option.php:1784
     */
    public static function PRE_UPDATE_SITE_OPTION_OPTION(string $option): string
    {
        return "pre_update_site_option_" . $option;
    }


    /**
     * Filters whether to preempt the XML-RPC media upload.
     *
     * Source: wp-includes/class-wp-xmlrpc-server.php:6411
     */
    public static string $PRE_UPLOAD_ERROR = "pre_upload_error";

    /**
     * Filters a user’s description before the user is created or updated.
     *
     * Source: wp-includes/user.php:2290
     */
    public static string $PRE_USER_DESCRIPTION = "pre_user_description";

    /**
     * Filters a user’s display name before the user is created or updated.
     *
     * Source: wp-includes/user.php:2279
     */
    public static string $PRE_USER_DISPLAY_NAME = "pre_user_display_name";

    /**
     * Filters a user’s email before the user is created or updated.
     *
     * Source: wp-includes/user.php:2176
     */
    public static string $PRE_USER_EMAIL = "pre_user_email";

    /**
     * Filters a user’s first name before the user is created or updated.
     *
     * Source: wp-includes/user.php:2238
     */
    public static string $PRE_USER_FIRST_NAME = "pre_user_first_name";

    /**
     * Filters the comment author’s user ID before it is set.
     *
     * Source: wp-includes/comment.php:2099
     */
    public static string $PRE_USER_ID = "pre_user_id";

    /**
     * Filters a user’s last name before the user is created or updated.
     *
     * Source: wp-includes/user.php:2249
     */
    public static string $PRE_USER_LAST_NAME = "pre_user_last_name";

    /**
     * Filters a username after it has been sanitized.
     *
     * Source: wp-includes/user.php:2099
     */
    public static string $PRE_USER_LOGIN = "pre_user_login";

    /**
     * Filters a user’s nicename before the user is created or updated.
     *
     * Source: wp-includes/user.php:2147
     */
    public static string $PRE_USER_NICENAME = "pre_user_nicename";

    /**
     * Filters a user’s nickname before the user is created or updated.
     *
     * Source: wp-includes/user.php:2227
     */
    public static string $PRE_USER_NICKNAME = "pre_user_nickname";

    /**
     * Filters a user’s URL before the user is created or updated.
     *
     * Source: wp-includes/user.php:2199
     */
    public static string $PRE_USER_URL = "pre_user_url";

    /**
     * Filters the value of a user field in the ‘db’ context.
     *
     * Source: wp-includes/user.php:1801
     */
    public static function PRE_USER_FIELD(string $field): string
    {
        return "pre_user_" . $field;
    }


    /**
     * Filters the result of wp_filesize before the PHP function is run.
     *
     * Source: wp-includes/functions.php:3498
     */
    public static string $PRE_WP_FILESIZE = "pre_wp_filesize";

    /**
     * Filters the check for whether a site is initialized before the database is accessed.
     *
     * Source: wp-includes/ms-site.php:908
     */
    public static string $PRE_WP_IS_SITE_INITIALIZED = "pre_wp_is_site_initialized";

    /**
     * Filters whether to short-circuit performing the query for author post counts.
     *
     * Source: wp-includes/author-template.php:481
     */
    public static string $PRE_WP_LIST_AUTHORS_POST_COUNTS_QUERY = "pre_wp_list_authors_post_counts_query";

    /**
     * Filters whether to preempt sending an email.
     *
     * Source: wp-includes/pluggable.php:214
     */
    public static string $PRE_WP_MAIL = "pre_wp_mail";

    /**
     * Filters whether to short-circuit the wp_nav_menu()  output.
     *
     * Source: wp-includes/nav-menu-template.php:113
     */
    public static string $PRE_WP_NAV_MENU = "pre_wp_nav_menu";

    /**
     * Filters the file list used for calculating a unique filename for a newly added file.
     *
     * Source: wp-includes/functions.php:2640
     */
    public static string $PRE_WP_UNIQUE_FILENAME_FILE_LIST = "pre_wp_unique_filename_file_list";

    /**
     * Filters the post slug before it is generated to be unique.
     *
     * Source: wp-includes/post.php:5007
     */
    public static string $PRE_WP_UNIQUE_POST_SLUG = "pre_wp_unique_post_slug";

    /**
     * Filters a post’s comment count before it is updated in the database.
     *
     * Source: wp-includes/comment.php:2745
     */
    public static string $PRE_WP_UPDATE_COMMENT_COUNT_NOW = "pre_wp_update_comment_count_now";

    /**
     * Short-circuits the process of detecting errors related to HTTPS support.
     *
     * Source: wp-includes/https-detection.php:102
     */
    public static string $PRE_WP_UPDATE_HTTPS_DETECTION_ERRORS = "pre_wp_update_https_detection_errors";

    /**
     * Filters the value of a specific post field before saving.
     *
     * Source: wp-includes/post.php:2822
     */
    public static function PRE_FIELD(string $field): string
    {
        return "pre_" . $field;
    }


    /**
     * Filters a taxonomy field before it is sanitized.
     *
     * Source: wp-includes/taxonomy.php:1763
     */
    public static function PRE_TAXONOMY_FIELD(string $taxonomy, string $field): string
    {
        return "pre_" . $taxonomy . $field;
    }


    /**
     * Filters whether to print the admin styles.
     *
     * Source: wp-includes/script-loader.php:2208
     */
    public static string $PRINT_ADMIN_STYLES = "print_admin_styles";

    /**
     * Filters whether to print the footer scripts.
     *
     * Source: wp-includes/script-loader.php:2063
     */
    public static string $PRINT_FOOTER_SCRIPTS = "print_footer_scripts";

    /**
     * Filters whether to print the head scripts.
     *
     * Source: wp-includes/script-loader.php:2028
     */
    public static string $PRINT_HEAD_SCRIPTS = "print_head_scripts";

    /**
     * Filters whether to print the styles queued too late for the HTML head.
     *
     * Source: wp-includes/script-loader.php:2244
     */
    public static string $PRINT_LATE_STYLES = "print_late_styles";

    /**
     * Filters the list of script dependencies left to print.
     *
     * Source: wp-includes/class-wp-scripts.php:659
     */
    public static string $PRINT_SCRIPTS_ARRAY = "print_scripts_array";

    /**
     * Filters the array of enqueued styles before processing for output.
     *
     * Source: wp-includes/class-wp-styles.php:380
     */
    public static string $PRINT_STYLES_ARRAY = "print_styles_array";

    /**
     * Filters the link label for the ‘Search engines discouraged’ message displayed in the ‘At a Glance’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:401
     */
    public static string $PRIVACY_ON_LINK_TEXT = "privacy_on_link_text";

    /**
     * Filters the link title attribute for the ‘Search engines discouraged’ message displayed in the ‘At a Glance’ dashboard widget.
     *
     * Source: wp-admin/includes/dashboard.php:389
     */
    public static string $PRIVACY_ON_LINK_TITLE = "privacy_on_link_title";

    /**
     * Filters the URL of the privacy policy page.
     *
     * Source: wp-includes/link-template.php:4592
     */
    public static string $PRIVACY_POLICY_URL = "privacy_policy_url";

    /**
     * Filters the text prepended to the post title of private posts.
     *
     * Source: wp-includes/post-template.php:159
     */
    public static string $PRIVATE_TITLE_FORMAT = "private_title_format";

    /**
     * Filters the text prepended to the post title for protected posts.
     *
     * Source: wp-includes/post-template.php:140
     */
    public static string $PROTECTED_TITLE_FORMAT = "protected_title_format";

    /**
     * Filters the capability to read private posts for a custom post type when generating SQL for getting posts by author.
     *
     * Source: wp-includes/post.php:7121
     */
    public static string $PUB_PRIV_SQL_CAPABILITY = "pub_priv_sql_capability";

    /**
     * Filters the database query.
     *
     * Source: wp-includes/class-wpdb.php:2041
     */
    public static string $QUERY = "query";

    /**
     * Filters the arguments which will be passed to `WP_Query` for the Query Loop Block.
     *
     * Source: wp-includes/blocks.php:1369
     */
    public static string $QUERY_LOOP_BLOCK_QUERY_VARS = "query_loop_block_query_vars";

    /**
     * Filters the query string before parsing.
     *
     * Source: wp-includes/class-wp.php:593
     */
    public static string $QUERY_STRING = "query_string";

    /**
     * Filters the query variables allowed before processing.
     *
     * Source: wp-includes/class-wp.php:299
     */
    public static string $QUERY_VARS = "query_vars";

    /**
     * Filters the Quicktags settings.
     *
     * Source: wp-includes/class-wp-editor.php:357
     */
    public static string $QUICKTAGS_SETTINGS = "quicktags_settings";

    /**
     * Filters the arguments used to generate the Quick Edit authors drop-down.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1703
     */
    public static string $QUICK_EDIT_DROPDOWN_AUTHORS_ARGS = "quick_edit_dropdown_authors_args";

    /**
     * Filters the arguments used to generate the Quick Edit page-parent drop-down.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1807
     */
    public static string $QUICK_EDIT_DROPDOWN_PAGES_ARGS = "quick_edit_dropdown_pages_args";

    /**
     * Filters whether the current taxonomy should be shown in the Quick Edit panel.
     *
     * Source: wp-admin/includes/class-wp-posts-list-table.php:1588
     */
    public static string $QUICK_EDIT_SHOW_TAXONOMY = "quick_edit_show_taxonomy";

    /**
     * Filters the randomly-generated password.
     *
     * Source: wp-includes/pluggable.php:2616
     */
    public static string $RANDOM_PASSWORD = "random_password";

    /**
     * Filters the debug information included in the fatal error protection email.
     *
     * Source: wp-includes/class-wp-recovery-mode-email-service.php:155
     */
    public static string $RECOVERY_EMAIL_DEBUG_INFO = "recovery_email_debug_info";

    /**
     * Filters the support message sent with the the fatal error protection email.
     *
     * Source: wp-includes/class-wp-recovery-mode-email-service.php:146
     */
    public static string $RECOVERY_EMAIL_SUPPORT_INFO = "recovery_email_support_info";

    /**
     * Filters the URL to begin recovery mode.
     *
     * Source: wp-includes/class-wp-recovery-mode-link-service.php:128
     */
    public static string $RECOVERY_MODE_BEGIN_URL = "recovery_mode_begin_url";

    /**
     * Filters the length of time a Recovery Mode cookie is valid for.
     *
     * Source: wp-includes/class-wp-recovery-mode-cookie-service.php:46
     */
    public static string $RECOVERY_MODE_COOKIE_LENGTH = "recovery_mode_cookie_length";

    /**
     * Filters the contents of the Recovery Mode email.
     *
     * Source: wp-includes/class-wp-recovery-mode-email-service.php:228
     */
    public static string $RECOVERY_MODE_EMAIL = "recovery_mode_email";

    /**
     * Filters the amount of time the recovery mode email link is valid for.
     *
     * Source: wp-includes/class-wp-recovery-mode.php:331
     */
    public static string $RECOVERY_MODE_EMAIL_LINK_TTL = "recovery_mode_email_link_ttl";

    /**
     * Filters the rate limit between sending new recovery mode email links.
     *
     * Source: wp-includes/class-wp-recovery-mode.php:307
     */
    public static string $RECOVERY_MODE_EMAIL_RATE_LIMIT = "recovery_mode_email_rate_limit";

    /**
     * Filters the canonical redirect URL.
     *
     * Source: wp-includes/canonical.php:789
     */
    public static string $REDIRECT_CANONICAL = "redirect_canonical";

    /**
     * Filters whether to redirect the request to the Network Admin.
     *
     * Source: wp-admin/network/admin.php:29
     */
    public static string $REDIRECT_NETWORK_ADMIN_REQUEST = "redirect_network_admin_request";

    /**
     * Filters the post redirect destination URL.
     *
     * Source: wp-admin/includes/post.php:2093
     */
    public static string $REDIRECT_POST_LOCATION = "redirect_post_location";

    /**
     * Filters the taxonomy redirect destination URL.
     *
     * Source: wp-admin/edit-tags.php:228
     */
    public static string $REDIRECT_TERM_LOCATION = "redirect_term_location";

    /**
     * Filters whether to redirect the request to the User Admin in Multisite.
     *
     * Source: wp-admin/user/admin.php:28
     */
    public static string $REDIRECT_USER_ADMIN_REQUEST = "redirect_user_admin_request";

    /**
     * Filters the HTML link to the Registration or Admin page.
     *
     * Source: wp-includes/general-template.php:705
     */
    public static string $REGISTER = "register";

    /**
     * Filters the arguments for registering a block type.
     *
     * Source: wp-includes/class-wp-block-type.php:498
     */
    public static string $REGISTER_BLOCK_TYPE_ARGS = "register_block_type_args";

    /**
     * Filters the registration arguments when registering meta.
     *
     * Source: wp-includes/meta.php:1444
     */
    public static string $REGISTER_META_ARGS = "register_meta_args";

    /**
     * Filters the arguments for registering a post type.
     *
     * Source: wp-includes/class-wp-post-type.php:442
     */
    public static string $REGISTER_POST_TYPE_ARGS = "register_post_type_args";

    /**
     * Filters the registration arguments when registering a setting.
     *
     * Source: wp-includes/option.php:2373
     */
    public static string $REGISTER_SETTING_ARGS = "register_setting_args";

    /**
     * Filters the sidebar default arguments.
     *
     * Source: wp-includes/widgets.php:290
     */
    public static string $REGISTER_SIDEBAR_DEFAULTS = "register_sidebar_defaults";

    /**
     * Filters the arguments for registering a taxonomy.
     *
     * Source: wp-includes/class-wp-taxonomy.php:317
     */
    public static string $REGISTER_TAXONOMY_ARGS = "register_taxonomy_args";

    /**
     * Filters the user registration URL.
     *
     * Source: wp-includes/general-template.php:477
     */
    public static string $REGISTER_URL = "register_url";

    /**
     * Filters the arguments for registering a specific post type.
     *
     * Source: wp-includes/class-wp-post-type.php:462
     */
    public static function REGISTER_POST_TYPE_POST_TYPE_ARGS(string $post_type): string
    {
        return "register_" . $post_type;
    }


    /**
     * Filters the arguments for registering a specific taxonomy.
     *
     * Source: wp-includes/class-wp-taxonomy.php:338
     */
    public static function REGISTER_TAXONOMY_TAXONOMY_ARGS(string $taxonomy): string
    {
        return "register_" . $taxonomy;
    }


    /**
     * Filters the errors encountered when a new user is being registered.
     *
     * Source: wp-includes/user.php:3383
     */
    public static string $REGISTRATION_ERRORS = "registration_errors";

    /**
     * Filters the registration redirect URL.
     *
     * Source: wp-login.php:1070
     */
    public static string $REGISTRATION_REDIRECT = "registration_redirect";

    /**
     * Filters the list of query variable names to remove.
     *
     * Source: wp-includes/functions.php:1263
     */
    public static string $REMOVABLE_QUERY_ARGS = "removable_query_args";
}