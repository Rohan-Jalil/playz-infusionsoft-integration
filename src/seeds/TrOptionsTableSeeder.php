<?php

use Illuminate\Database\Seeder;

class TrOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_options')->delete();
        
        \DB::table('tr_options')->insert(array (
            0 => 
            array (
                'option_id' => 1,
                'option_name' => 'siteurl',
                'option_value' => 'http://playz-v2.trueserver.com.au/cms',
                'autoload' => 'yes',
            ),
            1 => 
            array (
                'option_id' => 2,
                'option_name' => 'blogname',
                'option_value' => 'Playz',
                'autoload' => 'yes',
            ),
            2 => 
            array (
                'option_id' => 3,
                'option_name' => 'blogdescription',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            3 => 
            array (
                'option_id' => 4,
                'option_name' => 'users_can_register',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            4 => 
            array (
                'option_id' => 5,
                'option_name' => 'admin_email',
                'option_value' => 'webmaster@trueagency.com.au',
                'autoload' => 'yes',
            ),
            5 => 
            array (
                'option_id' => 6,
                'option_name' => 'start_of_week',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            6 => 
            array (
                'option_id' => 7,
                'option_name' => 'use_balanceTags',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            7 => 
            array (
                'option_id' => 8,
                'option_name' => 'use_smilies',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            8 => 
            array (
                'option_id' => 9,
                'option_name' => 'require_name_email',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            9 => 
            array (
                'option_id' => 10,
                'option_name' => 'comments_notify',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            10 => 
            array (
                'option_id' => 11,
                'option_name' => 'posts_per_rss',
                'option_value' => '10',
                'autoload' => 'yes',
            ),
            11 => 
            array (
                'option_id' => 12,
                'option_name' => 'rss_use_excerpt',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            12 => 
            array (
                'option_id' => 13,
                'option_name' => 'mailserver_url',
                'option_value' => 'mail.example.com',
                'autoload' => 'yes',
            ),
            13 => 
            array (
                'option_id' => 14,
                'option_name' => 'mailserver_login',
                'option_value' => 'login@example.com',
                'autoload' => 'yes',
            ),
            14 => 
            array (
                'option_id' => 15,
                'option_name' => 'mailserver_pass',
                'option_value' => 'password',
                'autoload' => 'yes',
            ),
            15 => 
            array (
                'option_id' => 16,
                'option_name' => 'mailserver_port',
                'option_value' => '110',
                'autoload' => 'yes',
            ),
            16 => 
            array (
                'option_id' => 17,
                'option_name' => 'default_category',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            17 => 
            array (
                'option_id' => 18,
                'option_name' => 'default_comment_status',
                'option_value' => 'closed',
                'autoload' => 'yes',
            ),
            18 => 
            array (
                'option_id' => 19,
                'option_name' => 'default_ping_status',
                'option_value' => 'closed',
                'autoload' => 'yes',
            ),
            19 => 
            array (
                'option_id' => 20,
                'option_name' => 'default_pingback_flag',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            20 => 
            array (
                'option_id' => 21,
                'option_name' => 'posts_per_page',
                'option_value' => '10',
                'autoload' => 'yes',
            ),
            21 => 
            array (
                'option_id' => 22,
                'option_name' => 'date_format',
                'option_value' => 'F j, Y',
                'autoload' => 'yes',
            ),
            22 => 
            array (
                'option_id' => 23,
                'option_name' => 'time_format',
                'option_value' => 'g:i a',
                'autoload' => 'yes',
            ),
            23 => 
            array (
                'option_id' => 24,
                'option_name' => 'links_updated_date_format',
                'option_value' => 'F j, Y g:i a',
                'autoload' => 'yes',
            ),
            24 => 
            array (
                'option_id' => 28,
                'option_name' => 'comment_moderation',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            25 => 
            array (
                'option_id' => 29,
                'option_name' => 'moderation_notify',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            26 => 
            array (
                'option_id' => 30,
                'option_name' => 'permalink_structure',
                'option_value' => '/%year%/%monthnum%/%postname%/',
                'autoload' => 'yes',
            ),
            27 => 
            array (
                'option_id' => 32,
                'option_name' => 'hack_file',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            28 => 
            array (
                'option_id' => 33,
                'option_name' => 'blog_charset',
                'option_value' => 'UTF-8',
                'autoload' => 'yes',
            ),
            29 => 
            array (
                'option_id' => 34,
                'option_name' => 'moderation_keys',
                'option_value' => '',
                'autoload' => 'no',
            ),
            30 => 
            array (
                'option_id' => 35,
                'option_name' => 'active_plugins',
                'option_value' => 'a:10:{i:0;s:34:"advanced-custom-fields-pro/acf.php";i:1;s:27:"backupbuddy/backupbuddy.php";i:2;s:41:"better-wp-security/better-wp-security.php";i:3;s:51:"codepress-admin-columns/codepress-admin-columns.php";i:4;s:36:"contact-form-7-honeypot/honeypot.php";i:5;s:36:"contact-form-7/wp-contact-form-7.php";i:6;s:33:"duplicate-post/duplicate-post.php";i:7;s:41:"trueagency-options/trueagency-options.php";i:8;s:41:"wordpress-importer/wordpress-importer.php";i:9;s:24:"wordpress-seo/wp-seo.php";}',
                'autoload' => 'yes',
            ),
            31 => 
            array (
                'option_id' => 36,
                'option_name' => 'home',
                'option_value' => 'http://playz-v2.trueserver.com.au/cms',
                'autoload' => 'yes',
            ),
            32 => 
            array (
                'option_id' => 37,
                'option_name' => 'category_base',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            33 => 
            array (
                'option_id' => 38,
                'option_name' => 'ping_sites',
                'option_value' => 'http://rpc.pingomatic.com/',
                'autoload' => 'yes',
            ),
            34 => 
            array (
                'option_id' => 40,
                'option_name' => 'comment_max_links',
                'option_value' => '2',
                'autoload' => 'yes',
            ),
            35 => 
            array (
                'option_id' => 41,
                'option_name' => 'gmt_offset',
                'option_value' => '10',
                'autoload' => 'yes',
            ),
            36 => 
            array (
                'option_id' => 42,
                'option_name' => 'default_email_category',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            37 => 
            array (
                'option_id' => 43,
                'option_name' => 'recently_edited',
                'option_value' => '',
                'autoload' => 'no',
            ),
            38 => 
            array (
                'option_id' => 44,
                'option_name' => 'template',
                'option_value' => 'true-base',
                'autoload' => 'yes',
            ),
            39 => 
            array (
                'option_id' => 45,
                'option_name' => 'stylesheet',
                'option_value' => 'true-base',
                'autoload' => 'yes',
            ),
            40 => 
            array (
                'option_id' => 46,
                'option_name' => 'comment_whitelist',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            41 => 
            array (
                'option_id' => 47,
                'option_name' => 'blacklist_keys',
                'option_value' => '',
                'autoload' => 'no',
            ),
            42 => 
            array (
                'option_id' => 48,
                'option_name' => 'comment_registration',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            43 => 
            array (
                'option_id' => 49,
                'option_name' => 'html_type',
                'option_value' => 'text/html',
                'autoload' => 'yes',
            ),
            44 => 
            array (
                'option_id' => 50,
                'option_name' => 'use_trackback',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            45 => 
            array (
                'option_id' => 51,
                'option_name' => 'default_role',
                'option_value' => 'subscriber',
                'autoload' => 'yes',
            ),
            46 => 
            array (
                'option_id' => 52,
                'option_name' => 'db_version',
                'option_value' => '37965',
                'autoload' => 'yes',
            ),
            47 => 
            array (
                'option_id' => 53,
                'option_name' => 'uploads_use_yearmonth_folders',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            48 => 
            array (
                'option_id' => 54,
                'option_name' => 'upload_path',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            49 => 
            array (
                'option_id' => 55,
                'option_name' => 'blog_public',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            50 => 
            array (
                'option_id' => 56,
                'option_name' => 'default_link_category',
                'option_value' => '2',
                'autoload' => 'yes',
            ),
            51 => 
            array (
                'option_id' => 57,
                'option_name' => 'show_on_front',
                'option_value' => 'page',
                'autoload' => 'yes',
            ),
            52 => 
            array (
                'option_id' => 58,
                'option_name' => 'tag_base',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            53 => 
            array (
                'option_id' => 59,
                'option_name' => 'show_avatars',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            54 => 
            array (
                'option_id' => 60,
                'option_name' => 'avatar_rating',
                'option_value' => 'G',
                'autoload' => 'yes',
            ),
            55 => 
            array (
                'option_id' => 61,
                'option_name' => 'upload_url_path',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            56 => 
            array (
                'option_id' => 62,
                'option_name' => 'thumbnail_size_w',
                'option_value' => '150',
                'autoload' => 'yes',
            ),
            57 => 
            array (
                'option_id' => 63,
                'option_name' => 'thumbnail_size_h',
                'option_value' => '150',
                'autoload' => 'yes',
            ),
            58 => 
            array (
                'option_id' => 64,
                'option_name' => 'thumbnail_crop',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            59 => 
            array (
                'option_id' => 65,
                'option_name' => 'medium_size_w',
                'option_value' => '300',
                'autoload' => 'yes',
            ),
            60 => 
            array (
                'option_id' => 66,
                'option_name' => 'medium_size_h',
                'option_value' => '300',
                'autoload' => 'yes',
            ),
            61 => 
            array (
                'option_id' => 67,
                'option_name' => 'avatar_default',
                'option_value' => 'mystery',
                'autoload' => 'yes',
            ),
            62 => 
            array (
                'option_id' => 68,
                'option_name' => 'large_size_w',
                'option_value' => '1024',
                'autoload' => 'yes',
            ),
            63 => 
            array (
                'option_id' => 69,
                'option_name' => 'large_size_h',
                'option_value' => '1024',
                'autoload' => 'yes',
            ),
            64 => 
            array (
                'option_id' => 70,
                'option_name' => 'image_default_link_type',
                'option_value' => 'file',
                'autoload' => 'yes',
            ),
            65 => 
            array (
                'option_id' => 71,
                'option_name' => 'image_default_size',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            66 => 
            array (
                'option_id' => 72,
                'option_name' => 'image_default_align',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            67 => 
            array (
                'option_id' => 73,
                'option_name' => 'close_comments_for_old_posts',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            68 => 
            array (
                'option_id' => 74,
                'option_name' => 'close_comments_days_old',
                'option_value' => '14',
                'autoload' => 'yes',
            ),
            69 => 
            array (
                'option_id' => 75,
                'option_name' => 'thread_comments',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            70 => 
            array (
                'option_id' => 76,
                'option_name' => 'thread_comments_depth',
                'option_value' => '5',
                'autoload' => 'yes',
            ),
            71 => 
            array (
                'option_id' => 77,
                'option_name' => 'page_comments',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            72 => 
            array (
                'option_id' => 78,
                'option_name' => 'comments_per_page',
                'option_value' => '50',
                'autoload' => 'yes',
            ),
            73 => 
            array (
                'option_id' => 79,
                'option_name' => 'default_comments_page',
                'option_value' => 'newest',
                'autoload' => 'yes',
            ),
            74 => 
            array (
                'option_id' => 80,
                'option_name' => 'comment_order',
                'option_value' => 'asc',
                'autoload' => 'yes',
            ),
            75 => 
            array (
                'option_id' => 81,
                'option_name' => 'sticky_posts',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            76 => 
            array (
                'option_id' => 82,
                'option_name' => 'widget_categories',
                'option_value' => 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            77 => 
            array (
                'option_id' => 83,
                'option_name' => 'widget_text',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            78 => 
            array (
                'option_id' => 84,
                'option_name' => 'widget_rss',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            79 => 
            array (
                'option_id' => 85,
                'option_name' => 'uninstall_plugins',
                'option_value' => 'a:1:{s:41:"better-wp-security/better-wp-security.php";a:2:{i:0;s:10:"ITSEC_Core";i:1;s:12:"on_uninstall";}}',
                'autoload' => 'no',
            ),
            80 => 
            array (
                'option_id' => 86,
                'option_name' => 'timezone_string',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            81 => 
            array (
                'option_id' => 87,
                'option_name' => 'page_for_posts',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            82 => 
            array (
                'option_id' => 88,
                'option_name' => 'page_on_front',
                'option_value' => '7',
                'autoload' => 'yes',
            ),
            83 => 
            array (
                'option_id' => 89,
                'option_name' => 'default_post_format',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            84 => 
            array (
                'option_id' => 90,
                'option_name' => 'link_manager_enabled',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            85 => 
            array (
                'option_id' => 91,
                'option_name' => 'initial_db_version',
                'option_value' => '26691',
                'autoload' => 'yes',
            ),
            86 => 
            array (
                'option_id' => 92,
                'option_name' => 'tr_user_roles',
                'option_value' => 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:64:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:15:"wpseo_bulk_edit";b:1;s:20:"manage_admin_columns";b:1;s:10:"copy_posts";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:36:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:15:"wpseo_bulk_edit";b:1;s:10:"copy_posts";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:11:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;s:15:"wpseo_bulk_edit";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:6:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:15:"wpseo_bulk_edit";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}',
                'autoload' => 'yes',
            ),
            87 => 
            array (
                'option_id' => 93,
                'option_name' => 'widget_search',
                'option_value' => 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            88 => 
            array (
                'option_id' => 94,
                'option_name' => 'widget_recent-posts',
                'option_value' => 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            89 => 
            array (
                'option_id' => 95,
                'option_name' => 'widget_recent-comments',
                'option_value' => 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            90 => 
            array (
                'option_id' => 96,
                'option_name' => 'widget_archives',
                'option_value' => 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            91 => 
            array (
                'option_id' => 97,
                'option_name' => 'widget_meta',
                'option_value' => 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            92 => 
            array (
                'option_id' => 98,
                'option_name' => 'sidebars_widgets',
                'option_value' => 'a:4:{s:19:"wp_inactive_widgets";a:0:{}s:15:"sidebar-primary";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:14:"sidebar-footer";a:0:{}s:13:"array_version";i:3;}',
                'autoload' => 'yes',
            ),
            93 => 
            array (
                'option_id' => 99,
                'option_name' => 'cron',
                'option_value' => 'a:10:{i:1511847765;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511848722;a:1:{s:28:"wp_statistics_add_visit_hook";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511848800;a:1:{s:36:"pb_backupbuddy-cron_scheduled_backup";a:1:{s:32:"3c1ac9cb56bb16aa647950520b9c356f";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:1:{i:0;i:100;}s:8:"interval";i:43200;}}}i:1511885324;a:3:{s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1511914480;a:1:{s:20:"itsec_purge_lockouts";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511922361;a:1:{s:27:"pb_backupbuddy_housekeeping";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511925332;a:1:{s:16:"itsec_purge_logs";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511928574;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511982000;a:1:{s:36:"pb_backupbuddy-cron_scheduled_backup";a:1:{s:32:"902ba852e556cd4d8b73193dcb545ff4";a:3:{s:8:"schedule";s:6:"weekly";s:4:"args";a:1:{i:0;i:101;}s:8:"interval";i:604800;}}}s:7:"version";i:2;}',
                'autoload' => 'yes',
            ),
            94 => 
            array (
                'option_id' => 129,
                'option_name' => 'recently_activated',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            95 => 
            array (
                'option_id' => 134,
                'option_name' => 'acf_version',
                'option_value' => '5.4.2',
                'autoload' => 'yes',
            ),
            96 => 
            array (
                'option_id' => 139,
                'option_name' => 'wpseo_titles',
                'option_value' => 'a:65:{s:10:"title_test";i:0;s:17:"forcerewritetitle";b:1;s:9:"separator";s:7:"sc-dash";s:5:"noodp";b:0;s:6:"noydir";b:0;s:15:"usemetakeywords";b:0;s:16:"title-home-wpseo";s:42:"%%sitename%% %%page%% %%sep%% %%sitedesc%%";s:18:"title-author-wpseo";s:0:"";s:19:"title-archive-wpseo";s:38:"%%date%% %%page%% %%sep%% %%sitename%%";s:18:"title-search-wpseo";s:0:"";s:15:"title-404-wpseo";s:0:"";s:19:"metadesc-home-wpseo";s:0:"";s:21:"metadesc-author-wpseo";s:0:"";s:22:"metadesc-archive-wpseo";s:0:"";s:18:"metakey-home-wpseo";s:0:"";s:20:"metakey-author-wpseo";s:0:"";s:22:"noindex-subpages-wpseo";b:0;s:20:"noindex-author-wpseo";b:0;s:21:"noindex-archive-wpseo";b:1;s:14:"disable-author";b:0;s:12:"disable-date";b:0;s:10:"title-post";s:39:"%%title%% %%page%% %%sep%% %%sitename%%";s:13:"metadesc-post";s:0:"";s:12:"metakey-post";s:0:"";s:12:"noindex-post";b:0;s:13:"showdate-post";b:0;s:16:"hideeditbox-post";b:0;s:10:"title-page";s:18:"%%title%% %%page%%";s:13:"metadesc-page";s:0:"";s:12:"metakey-page";s:0:"";s:12:"noindex-page";b:0;s:13:"showdate-page";b:0;s:16:"hideeditbox-page";b:0;s:16:"title-attachment";s:39:"%%title%% %%page%% %%sep%% %%sitename%%";s:19:"metadesc-attachment";s:0:"";s:18:"metakey-attachment";s:0:"";s:18:"noindex-attachment";b:1;s:19:"showdate-attachment";b:0;s:22:"hideeditbox-attachment";b:1;s:18:"title-tax-category";s:53:"%%term_title%% Archives %%page%% %%sep%% %%sitename%%";s:21:"metadesc-tax-category";s:0:"";s:20:"metakey-tax-category";s:0:"";s:24:"hideeditbox-tax-category";b:0;s:20:"noindex-tax-category";b:0;s:18:"title-tax-post_tag";s:53:"%%term_title%% Archives %%page%% %%sep%% %%sitename%%";s:21:"metadesc-tax-post_tag";s:0:"";s:20:"metakey-tax-post_tag";s:0:"";s:24:"hideeditbox-tax-post_tag";b:0;s:20:"noindex-tax-post_tag";b:0;s:21:"title-tax-post_format";s:53:"%%term_title%% Archives %%page%% %%sep%% %%sitename%%";s:24:"metadesc-tax-post_format";s:0:"";s:23:"metakey-tax-post_format";s:0:"";s:27:"hideeditbox-tax-post_format";b:0;s:23:"noindex-tax-post_format";b:1;s:23:"title-true_landing_page";s:39:"%%title%% %%page%% %%sep%% %%sitename%%";s:26:"metadesc-true_landing_page";s:0:"";s:25:"metakey-true_landing_page";s:0:"";s:25:"noindex-true_landing_page";b:0;s:26:"showdate-true_landing_page";b:0;s:29:"hideeditbox-true_landing_page";b:0;s:23:"title-tax-true_faqs_tax";s:53:"%%term_title%% Archives %%page%% %%sep%% %%sitename%%";s:26:"metadesc-tax-true_faqs_tax";s:0:"";s:25:"metakey-tax-true_faqs_tax";s:0:"";s:29:"hideeditbox-tax-true_faqs_tax";b:0;s:25:"noindex-tax-true_faqs_tax";b:0;}',
                'autoload' => 'yes',
            ),
            97 => 
            array (
                'option_id' => 142,
                'option_name' => 'wpseo',
                'option_value' => 'a:14:{s:14:"blocking_files";a:0:{}s:15:"ms_defaults_set";b:0;s:7:"version";s:3:"3.5";s:12:"company_logo";s:0:"";s:12:"company_name";s:0:"";s:17:"company_or_person";s:0:"";s:20:"disableadvanced_meta";b:0;s:19:"onpage_indexability";b:1;s:12:"googleverify";s:0:"";s:8:"msverify";s:0:"";s:11:"person_name";s:0:"";s:12:"website_name";s:0:"";s:22:"alternate_website_name";s:0:"";s:12:"yandexverify";s:0:"";}',
                'autoload' => 'yes',
            ),
            98 => 
            array (
                'option_id' => 152,
                'option_name' => 'cpac_version',
                'option_value' => '2.5.6.3',
                'autoload' => 'yes',
            ),
            99 => 
            array (
                'option_id' => 156,
                'option_name' => 'true-enabled-modules',
                'option_value' => 'a:3:{i:0;s:11:"maintenance";i:1;s:11:"socialicons";i:2;s:12:"menudisabler";}',
                'autoload' => 'yes',
            ),
            100 => 
            array (
                'option_id' => 157,
                'option_name' => 'true-menu-editor-removed',
                'option_value' => 'a:6:{i:0;s:22:"edit.php?post_type=acf";i:1;s:45:"admin.php?page=pb_backupbuddy_getting_started";i:2;s:10:"themes.php";i:3;s:11:"plugins.php";i:4;s:30:"admin.php?page=wpseo_dashboard";i:5;s:17:"edit-comments.php";}',
                'autoload' => 'yes',
            ),
            101 => 
            array (
                'option_id' => 164,
                'option_name' => 'pb_backupbuddy',
                'option_value' => 'a:76:{s:12:"data_version";s:1:"8";s:21:"importbuddy_pass_hash";s:52:"/cms/wp-admin/admin.php?page=pb_backupbuddy_settings";s:23:"importbuddy_pass_length";i:4;s:16:"backup_reminders";s:1:"0";s:16:"edits_since_last";i:0;s:17:"last_backup_start";i:1471562898;s:18:"last_backup_finish";i:1471500294;s:18:"last_backup_serial";s:10:"e6ive89hp5";s:17:"last_backup_stats";a:10:{s:11:"archiveFile";s:64:"backup-playz_true_local_cms-2016_08_18-04_02pm-db-q3ax3t7f8i.zip";s:10:"archiveURL";s:138:"http://playz-v2.trueserver.com.au/cms/content/uploads/backupbuddy_backups/backup-playz_true_local_cms-2016_08_18-04_02pm-db-q3ax3t7f8i.zip";s:11:"archiveSize";i:986946;s:5:"start";i:1471500120;s:6:"finish";i:1471500294;s:4:"type";s:2:"db";s:12:"profileTitle";s:13:"Database Only";s:13:"scheduleTitle";s:17:"True Agency S3 DB";s:15:"integrityStatus";b:1;s:12:"destinations";a:1:{i:0;a:3:{s:2:"id";s:1:"1";s:5:"title";s:17:"True Agency S3 DB";s:4:"type";s:2:"s3";}}}s:19:"force_compatibility";i:0;s:29:"force_mysqldump_compatibility";s:1:"0";s:9:"schedules";a:2:{i:100;a:8:{s:5:"title";s:17:"True Agency S3 DB";s:7:"profile";s:1:"1";s:8:"interval";s:10:"twicedaily";s:9:"first_run";i:1471586400;s:12:"delete_after";s:1:"1";s:19:"remote_destinations";s:2:"1|";s:8:"last_run";i:1471561040;s:6:"on_off";s:1:"0";}i:101;a:8:{s:5:"title";s:19:"True Agency S3 Full";s:7:"profile";s:1:"2";s:8:"interval";s:6:"weekly";s:9:"first_run";i:1472065200;s:12:"delete_after";s:1:"1";s:19:"remote_destinations";s:2:"0|";s:8:"last_run";i:1471475831;s:6:"on_off";s:1:"0";}}s:9:"log_level";s:1:"1";s:13:"high_security";i:0;s:19:"next_schedule_index";i:102;s:13:"archive_limit";s:1:"0";s:18:"archive_limit_size";s:1:"0";s:17:"archive_limit_age";s:1:"7";s:26:"delete_archives_pre_backup";s:1:"0";s:23:"lock_archives_directory";s:1:"0";s:28:"email_notify_scheduled_start";s:0:"";s:36:"email_notify_scheduled_start_subject";s:49:"BackupBuddy Scheduled Backup Started - {site_url}";s:33:"email_notify_scheduled_start_body";s:142:"A scheduled backup has started with BackupBuddy v{backupbuddy_version} on {current_datetime} for the site {site_url}.

Details:

{message}";s:31:"email_notify_scheduled_complete";s:0:"";s:39:"email_notify_scheduled_complete_subject";s:50:"BackupBuddy Scheduled Backup Complete - {site_url}";s:36:"email_notify_scheduled_complete_body";s:144:"A scheduled backup has completed with BackupBuddy v{backupbuddy_version} on {current_datetime} for the site {site_url}.

Details:

{message}";s:24:"email_notify_send_finish";s:0:"";s:32:"email_notify_send_finish_subject";s:43:"BackupBuddy File Send Finished - {site_url}";s:29:"email_notify_send_finish_body";s:146:"A destination file send has finished with BackupBuddy v{backupbuddy_version} on {current_datetime} for the site {site_url}.

Details:

{message}";s:18:"email_notify_error";s:25:"trueagency.logs@gmail.com";s:26:"email_notify_error_subject";s:30:"BackupBuddy Error - {site_url}";s:23:"email_notify_error_body";s:132:"An error occurred with BackupBuddy v{backupbuddy_version} on {current_datetime} for the site {site_url}. Error details:

{message}";s:12:"email_return";s:0:"";s:19:"remote_destinations";a:2:{i:0;a:13:{s:4:"type";s:2:"s3";s:5:"title";s:19:"True Agency S3 Full";s:9:"accesskey";s:20:"AKIAJYREHDK5Y5HX4LJQ";s:9:"secretkey";s:40:"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";s:6:"bucket";s:22:"trueagency-backupbuddy";s:6:"region";s:31:"s3-ap-southeast-2.amazonaws.com";s:7:"storage";s:8:"standard";s:9:"directory";s:10:"playz/full";s:13:"archive_limit";s:1:"0";s:14:"max_chunk_size";s:3:"100";s:3:"ssl";s:1:"1";s:5:"token";s:0:"";s:17:"use_packaged_cert";s:1:"0";}i:1;a:13:{s:4:"type";s:2:"s3";s:5:"title";s:17:"True Agency S3 DB";s:9:"accesskey";s:20:"AKIAJYREHDK5Y5HX4LJQ";s:9:"secretkey";s:40:"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";s:6:"bucket";s:22:"trueagency-backupbuddy";s:6:"region";s:31:"s3-ap-southeast-2.amazonaws.com";s:7:"storage";s:8:"standard";s:9:"directory";s:8:"playz/db";s:13:"archive_limit";s:1:"0";s:14:"max_chunk_size";s:3:"100";s:3:"ssl";s:1:"1";s:5:"token";s:0:"";s:17:"use_packaged_cert";s:1:"0";}}s:11:"role_access";s:13:"administrator";s:16:"dropboxtemptoken";s:0:"";s:11:"backup_mode";s:1:"2";s:16:"multisite_export";s:1:"0";s:16:"backup_directory";s:0:"";s:14:"temp_directory";s:0:"";s:13:"log_directory";s:0:"";s:10:"log_serial";s:15:"tbm84q1n1ma3fw3";s:13:"notifications";a:0:{}s:19:"zip_method_strategy";s:1:"2";s:24:"database_method_strategy";s:3:"php";s:17:"alternative_zip_2";s:1:"0";s:19:"ignore_zip_warnings";s:1:"0";s:19:"ignore_zip_symlinks";s:1:"1";s:25:"disable_zipmethod_caching";s:1:"0";s:19:"archive_name_format";s:8:"datetime";s:30:"disable_https_local_ssl_verify";s:1:"0";s:17:"save_comment_meta";s:1:"1";s:27:"ignore_command_length_check";s:1:"0";s:18:"default_backup_tab";s:1:"0";s:18:"deployment_allowed";s:1:"0";s:10:"remote_api";a:2:{s:4:"keys";a:0:{}s:3:"ips";a:0:{}}s:20:"skip_spawn_cron_call";s:1:"0";s:5:"stats";a:6:{s:9:"site_size";i:0;s:18:"site_size_excluded";i:0;s:17:"site_size_updated";i:0;s:7:"db_size";i:0;s:16:"db_size_excluded";i:0;s:15:"db_size_updated";i:0;}s:9:"disalerts";a:4:{s:15:"profile_suggest";i:1395294688;s:13:"windows_boost";i:1395294690;s:19:"backup_stash_advert";i:1395294783;s:23:"schedule_limit_reminder";i:1395294814;}s:15:"breakout_tables";s:1:"0";s:19:"include_importbuddy";s:1:"1";s:17:"max_site_log_size";s:1:"5";s:11:"compression";s:1:"1";s:25:"no_new_backups_error_days";s:2:"45";s:15:"skip_quicksetup";s:1:"0";s:13:"prevent_flush";s:1:"0";s:17:"rollback_cleanups";a:0:{}s:20:"phpmysqldump_maxrows";s:0:"";s:20:"disable_localization";s:1:"0";s:18:"max_execution_time";s:0:"";s:24:"backup_cron_rescheduling";s:1:"0";s:20:"force_single_db_file";s:1:"0";s:11:"deployments";a:0:{}s:8:"profiles";a:5:{i:0;a:11:{s:4:"type";s:8:"defaults";s:5:"title";s:15:"Global Defaults";s:18:"skip_database_dump";s:1:"0";s:29:"mysqldump_additional_includes";s:0:"";s:29:"mysqldump_additional_excludes";s:0:"";s:19:"backup_nonwp_tables";s:1:"1";s:8:"excludes";s:0:"";s:15:"integrity_check";s:1:"1";s:20:"profile_globaltables";s:1:"1";s:22:"profile_globalexcludes";s:1:"1";s:11:"backup_mode";s:2:"-1";}i:1;a:3:{s:4:"type";s:2:"db";s:5:"title";s:13:"Database Only";s:3:"tip";s:49:"Just your database. I like your minimalist style.";}i:2;a:2:{s:4:"type";s:4:"full";s:5:"title";s:15:"Complete Backup";}i:3;a:11:{s:4:"type";s:4:"full";s:5:"title";s:14:"Wordpress Full";s:18:"skip_database_dump";s:2:"-1";s:29:"mysqldump_additional_includes";s:2:"-1";s:29:"mysqldump_additional_excludes";s:2:"-1";s:19:"backup_nonwp_tables";s:2:"-1";s:8:"excludes";s:2:"-1";s:15:"integrity_check";s:2:"-1";s:20:"profile_globaltables";s:1:"1";s:22:"profile_globalexcludes";s:1:"1";s:11:"backup_mode";s:2:"-1";}i:4;a:11:{s:4:"type";s:2:"db";s:5:"title";s:12:"Wordpress DB";s:18:"skip_database_dump";s:2:"-1";s:29:"mysqldump_additional_includes";s:2:"-1";s:29:"mysqldump_additional_excludes";s:2:"-1";s:19:"backup_nonwp_tables";s:1:"0";s:8:"excludes";s:2:"-1";s:15:"integrity_check";s:2:"-1";s:20:"profile_globaltables";s:1:"1";s:22:"profile_globalexcludes";s:1:"1";s:11:"backup_mode";s:2:"-1";}}i:0;b:0;s:29:"importbuddy_pass_hash_confirm";s:4:"))))";}',
            'autoload' => 'yes',
        ),
        102 => 
        array (
            'option_id' => 166,
            'option_name' => 'ithemes-updater-cache',
            'option_value' => 'a:9:{s:12:"server-cache";i:30;s:10:"expiration";i:0;s:9:"timestamp";i:0;s:8:"packages";a:1:{i:0;s:11:"backupbuddy";}s:14:"update_plugins";a:0:{}s:13:"update_themes";a:0:{}s:12:"use_ca_patch";b:0;s:7:"use_ssl";b:1;s:14:"quick_releases";b:0;}',
            'autoload' => 'yes',
        ),
        103 => 
        array (
            'option_id' => 182,
            'option_name' => 'wpseo_internallinks',
            'option_value' => 'a:10:{s:20:"breadcrumbs-404crumb";s:0:"";s:23:"breadcrumbs-blog-remove";b:0;s:20:"breadcrumbs-boldlast";b:0;s:25:"breadcrumbs-archiveprefix";s:0:"";s:18:"breadcrumbs-enable";b:0;s:16:"breadcrumbs-home";s:0:"";s:18:"breadcrumbs-prefix";s:0:"";s:24:"breadcrumbs-searchprefix";s:0:"";s:15:"breadcrumbs-sep";s:7:"&raquo;";s:23:"post_types-post-maintax";i:0;}',
            'autoload' => 'yes',
        ),
        104 => 
        array (
            'option_id' => 234,
            'option_name' => 'auto_core_update_notified',
            'option_value' => 'a:4:{s:4:"type";s:7:"success";s:5:"email";s:27:"webmaster@trueagency.com.au";s:7:"version";s:5:"4.6.5";s:9:"timestamp";i:1492727808;}',
            'autoload' => 'no',
        ),
        105 => 
        array (
            'option_id' => 238,
            'option_name' => 'dismissed_update_core',
            'option_value' => 'a:1:{s:11:"3.8.2|en_AU";b:1;}',
            'autoload' => 'yes',
        ),
        106 => 
        array (
            'option_id' => 254,
            'option_name' => 'db_upgraded',
            'option_value' => '',
            'autoload' => 'yes',
        ),
        107 => 
        array (
            'option_id' => 341,
            'option_name' => 'wpseo_social',
            'option_value' => 'a:14:{s:9:"fb_admins";a:0:{}s:6:"fbapps";a:0:{}s:12:"fbconnectkey";s:32:"b48c6e43e323f45e591446d0f0833614";s:13:"facebook_site";s:0:"";s:16:"og_default_image";s:56:"/wp-content/themes/true-theme/assets/img/social-logo.png";s:17:"og_frontpage_desc";s:0:"";s:18:"og_frontpage_image";s:0:"";s:9:"opengraph";b:1;s:10:"googleplus";b:0;s:14:"plus-publisher";s:0:"";s:7:"twitter";b:0;s:12:"twitter_site";s:0:"";s:17:"twitter_card_type";s:7:"summary";s:10:"fbadminapp";i:0;}',
            'autoload' => 'yes',
        ),
        108 => 
        array (
            'option_id' => 387,
            'option_name' => 'itsec_data',
            'option_value' => 'a:5:{s:5:"build";i:4041;s:20:"activation_timestamp";i:1403836697;s:17:"already_supported";b:1;s:15:"setup_completed";b:1;s:18:"tooltips_dismissed";b:1;}',
            'autoload' => 'no',
        ),
        109 => 
        array (
            'option_id' => 388,
            'option_name' => 'itsec_global',
            'option_value' => 'a:22:{s:11:"write_files";b:1;s:18:"notification_email";a:1:{i:0;s:27:"webmaster@trueagency.com.au";}s:12:"digest_email";b:1;s:12:"backup_email";a:1:{i:0;s:27:"webmaster@trueagency.com.au";}s:15:"lockout_message";s:5:"error";s:20:"user_lockout_message";s:56:"You have been locked out due to too many login attempts.";s:25:"community_lockout_message";s:77:"Your IP address has been flagged as a threat by the iThemes Security network.";s:9:"blacklist";b:1;s:15:"blacklist_count";i:3;s:16:"blacklist_period";i:7;s:14:"lockout_period";i:15;s:18:"lockout_white_list";a:2:{i:0;s:14:"124.188.84.144";i:1;s:15:"203.206.162.113";}s:19:"email_notifications";b:1;s:8:"log_type";i:0;s:12:"log_rotation";i:30;s:12:"log_location";s:86:"/home/trueserver/public_html/playz-v2/public/cms/content/uploads/ithemes-security/logs";s:11:"did_upgrade";b:0;s:14:"allow_tracking";b:0;s:10:"nginx_file";s:59:"/home/trueserver/public_html/playz-v2/public/cms/nginx.conf";s:24:"infinitewp_compatibility";b:0;s:8:"log_info";s:20:"true-base-Wsfun3Y9MH";s:9:"lock_file";b:0;}',
            'autoload' => 'yes',
        ),
        110 => 
        array (
            'option_id' => 389,
            'option_name' => 'itsec_initials',
            'option_value' => 'a:3:{s:5:"login";b:0;s:5:"admin";b:0;s:11:"file_editor";b:1;}',
            'autoload' => 'yes',
        ),
        111 => 
        array (
            'option_id' => 390,
            'option_name' => 'itsec_four_oh_four',
            'option_value' => 'a:5:{s:12:"check_period";i:5;s:15:"error_threshold";i:20;s:10:"white_list";a:9:{i:0;s:12:"/favicon.ico";i:1;s:11:"/robots.txt";i:2;s:21:"/apple-touch-icon.png";i:3;s:33:"/apple-touch-icon-precomposed.png";i:4;s:17:"/wp-content/cache";i:5;s:18:"/browserconfig.xml";i:6;s:16:"/crossdomain.xml";i:7;s:11:"/labels.rdf";i:8;s:27:"/trafficbasedsspsitemap.xml";}s:5:"types";a:5:{i:0;s:4:".jpg";i:1;s:5:".jpeg";i:2;s:4:".png";i:3;s:4:".gif";i:4;s:4:".css";}s:7:"enabled";b:0;}',
            'autoload' => 'yes',
        ),
        112 => 
        array (
            'option_id' => 391,
            'option_name' => 'itsec_away_mode',
            'option_value' => 'a:4:{s:4:"type";i:1;s:7:"enabled";b:0;s:5:"start";i:1478304000;s:3:"end";i:1478412000;}',
            'autoload' => 'yes',
        ),
        113 => 
        array (
            'option_id' => 392,
            'option_name' => 'itsec_ban_users',
            'option_value' => 'a:4:{s:9:"host_list";a:0:{}s:10:"agent_list";a:1:{i:0;s:0:"";}s:7:"enabled";b:0;s:7:"default";b:0;}',
            'autoload' => 'yes',
        ),
        114 => 
        array (
            'option_id' => 394,
            'option_name' => 'itsec_brute_force',
            'option_value' => 'a:5:{s:7:"enabled";b:1;s:17:"max_attempts_host";i:5;s:17:"max_attempts_user";i:10;s:12:"check_period";i:5;s:14:"auto_ban_admin";b:0;}',
            'autoload' => 'yes',
        ),
        115 => 
        array (
            'option_id' => 395,
            'option_name' => 'itsec_backup',
            'option_value' => 'a:9:{s:7:"enabled";b:0;s:9:"all_sites";b:0;s:8:"interval";i:3;s:6:"method";i:0;s:8:"location";s:89:"/home/trueserver/public_html/playz-v2/public/cms/content/uploads/ithemes-security/backups";s:8:"last_run";i:0;s:6:"retain";i:0;s:7:"exclude";a:0:{}s:3:"zip";b:0;}',
            'autoload' => 'yes',
        ),
        116 => 
        array (
            'option_id' => 396,
            'option_name' => 'itsec_file_change',
            'option_value' => 'a:9:{s:6:"method";b:1;s:9:"file_list";a:1:{i:0;s:0:"";}s:5:"types";a:6:{i:0;s:4:".jpg";i:1;s:5:".jpeg";i:2;s:4:".png";i:3;s:4:".log";i:4;s:3:".mo";i:5;s:3:".po";}s:5:"email";b:1;s:12:"notify_admin";b:1;s:7:"enabled";b:0;s:5:"split";b:0;s:10:"last_chunk";b:0;s:8:"last_run";i:1478170270;}',
            'autoload' => 'yes',
        ),
        117 => 
        array (
            'option_id' => 397,
            'option_name' => 'itsec_hide_backend',
            'option_value' => 'a:7:{s:4:"slug";s:0:"";s:12:"theme_compat";b:1;s:17:"theme_compat_slug";s:9:"not_found";s:16:"post_logout_slug";s:0:"";s:7:"enabled";b:0;s:12:"show-tooltip";b:0;s:8:"register";s:15:"wp-register.php";}',
            'autoload' => 'yes',
        ),
        118 => 
        array (
            'option_id' => 398,
            'option_name' => 'itsec_ssl',
            'option_value' => 'a:3:{s:8:"frontend";i:0;s:5:"login";b:0;s:5:"admin";b:0;}',
            'autoload' => 'yes',
        ),
        119 => 
        array (
            'option_id' => 400,
            'option_name' => 'itsec_strong_passwords',
            'option_value' => 'a:2:{s:4:"roll";s:13:"administrator";s:7:"enabled";b:0;}',
            'autoload' => 'yes',
        ),
        120 => 
        array (
            'option_id' => 401,
            'option_name' => 'itsec_tweaks',
            'option_value' => 'a:22:{s:13:"protect_files";b:1;s:18:"directory_browsing";b:1;s:13:"generator_tag";b:1;s:18:"wlwmanifest_header";b:1;s:14:"edituri_header";b:1;s:14:"random_version";b:1;s:11:"file_editor";b:1;s:14:"disable_xmlrpc";i:0;s:15:"request_methods";b:0;s:24:"suspicious_query_strings";b:0;s:22:"non_english_characters";b:0;s:16:"long_url_strings";b:0;s:17:"write_permissions";b:0;s:13:"theme_updates";b:0;s:14:"plugin_updates";b:0;s:12:"core_updates";b:0;s:12:"comment_spam";b:0;s:11:"uploads_php";b:0;s:11:"safe_jquery";b:0;s:12:"login_errors";b:0;s:21:"force_unique_nicename";b:0;s:27:"disable_unused_author_pages";b:0;}',
            'autoload' => 'yes',
        ),
        121 => 
        array (
            'option_id' => 422,
            'option_name' => 'itsec_jquery_version',
            'option_value' => '',
            'autoload' => 'no',
        ),
        122 => 
        array (
            'option_id' => 494,
            'option_name' => 'wpcf7',
            'option_value' => 'a:1:{s:7:"version";s:3:"4.5";}',
            'autoload' => 'yes',
        ),
        123 => 
        array (
            'option_id' => 496,
            'option_name' => 'wpseo_permalinks',
            'option_value' => 'a:13:{s:15:"cleanpermalinks";b:0;s:24:"cleanpermalink-extravars";s:0:"";s:29:"cleanpermalink-googlecampaign";b:0;s:31:"cleanpermalink-googlesitesearch";b:0;s:15:"cleanreplytocom";b:0;s:10:"cleanslugs";b:1;s:14:"hide-feedlinks";b:0;s:12:"hide-rsdlink";b:0;s:14:"hide-shortlink";b:0;s:16:"hide-wlwmanifest";b:0;s:18:"redirectattachment";b:0;s:17:"stripcategorybase";b:0;s:13:"trailingslash";b:0;}',
            'autoload' => 'yes',
        ),
        124 => 
        array (
            'option_id' => 497,
            'option_name' => 'wpseo_rss',
            'option_value' => 'a:2:{s:9:"rssbefore";s:0:"";s:8:"rssafter";s:53:"The post %%POSTLINK%% appeared first on %%BLOGLINK%%.";}',
            'autoload' => 'yes',
        ),
        125 => 
        array (
            'option_id' => 498,
            'option_name' => 'wpseo_xml',
            'option_value' => 'a:19:{s:22:"disable_author_sitemap";b:1;s:22:"disable_author_noposts";b:1;s:16:"enablexmlsitemap";b:1;s:16:"entries-per-page";i:1000;s:14:"xml_ping_yahoo";b:0;s:12:"xml_ping_ask";b:0;s:38:"user_role-administrator-not_in_sitemap";b:0;s:31:"user_role-editor-not_in_sitemap";b:0;s:31:"user_role-author-not_in_sitemap";b:0;s:36:"user_role-contributor-not_in_sitemap";b:0;s:35:"user_role-subscriber-not_in_sitemap";b:0;s:30:"post_types-post-not_in_sitemap";b:0;s:30:"post_types-page-not_in_sitemap";b:0;s:36:"post_types-attachment-not_in_sitemap";b:1;s:34:"taxonomies-category-not_in_sitemap";b:0;s:34:"taxonomies-post_tag-not_in_sitemap";b:0;s:37:"taxonomies-post_format-not_in_sitemap";b:0;s:43:"post_types-true_landing_page-not_in_sitemap";b:0;s:39:"taxonomies-true_faqs_tax-not_in_sitemap";b:0;}',
            'autoload' => 'yes',
        ),
        126 => 
        array (
            'option_id' => 545,
            'option_name' => 'acf_pro_license',
            'option_value' => 'YToyOntzOjM6ImtleSI7czo3MjoiYjNKa1pYSmZhV1E5TXpNME1qZDhkSGx3WlQxa1pYWmxiRzl3WlhKOFpHRjBaVDB5TURFMExUQTNMVEE0SURBeE9qVTRPakEwIjtzOjM6InVybCI7czoyMzoiaHR0cDovL3BsYXl6LnRydWUubG9jYWwiO30=',
            'autoload' => 'yes',
        ),
        127 => 
        array (
            'option_id' => 550,
            'option_name' => 'theme_mods_twentyfourteen',
            'option_value' => 'a:1:{s:16:"sidebars_widgets";a:2:{s:4:"time";i:1408078869;s:4:"data";a:4:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:9:"sidebar-2";a:0:{}s:9:"sidebar-3";a:0:{}}}}',
            'autoload' => 'yes',
        ),
        128 => 
        array (
            'option_id' => 551,
            'option_name' => 'current_theme',
            'option_value' => 'True Base Theme',
            'autoload' => 'yes',
        ),
        129 => 
        array (
            'option_id' => 552,
            'option_name' => 'theme_mods_true-base',
            'option_value' => 'a:2:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}}',
            'autoload' => 'yes',
        ),
        130 => 
        array (
            'option_id' => 553,
            'option_name' => 'theme_switched',
            'option_value' => '',
            'autoload' => 'yes',
        ),
        131 => 
        array (
            'option_id' => 573,
            'option_name' => 'itsec_malware',
            'option_value' => 'a:2:{s:7:"api_key";s:0:"";s:7:"enabled";b:0;}',
            'autoload' => 'yes',
        ),
        132 => 
        array (
            'option_id' => 839,
            'option_name' => 'options_footer_copyright',
            'option_value' => '© Playz.com.au {year}. All rights reserved.',
            'autoload' => 'no',
        ),
        133 => 
        array (
            'option_id' => 840,
            'option_name' => '_options_footer_copyright',
            'option_value' => 'field_53acdb0384ebf',
            'autoload' => 'no',
        ),
        134 => 
        array (
            'option_id' => 841,
            'option_name' => 'options_social_accounts',
            'option_value' => '3',
            'autoload' => 'no',
        ),
        135 => 
        array (
            'option_id' => 842,
            'option_name' => '_options_social_accounts',
            'option_value' => 'field_53acddbfacc06',
            'autoload' => 'no',
        ),
        136 => 
        array (
            'option_id' => 843,
            'option_name' => 'options_contact_phone_number',
            'option_value' => '',
            'autoload' => 'no',
        ),
        137 => 
        array (
            'option_id' => 844,
            'option_name' => '_options_contact_phone_number',
            'option_value' => 'field_53acdff6359c2',
            'autoload' => 'no',
        ),
        138 => 
        array (
            'option_id' => 845,
            'option_name' => 'options_contact_fax_number',
            'option_value' => '',
            'autoload' => 'no',
        ),
        139 => 
        array (
            'option_id' => 846,
            'option_name' => '_options_contact_fax_number',
            'option_value' => 'field_53ace006359c3',
            'autoload' => 'no',
        ),
        140 => 
        array (
            'option_id' => 847,
            'option_name' => 'options_contact_email_address',
            'option_value' => 'info@playz.com.au',
            'autoload' => 'no',
        ),
        141 => 
        array (
            'option_id' => 848,
            'option_name' => '_options_contact_email_address',
            'option_value' => 'field_53ace012359c4',
            'autoload' => 'no',
        ),
        142 => 
        array (
            'option_id' => 865,
            'option_name' => 'category_children',
            'option_value' => 'a:0:{}',
            'autoload' => 'yes',
        ),
        143 => 
        array (
            'option_id' => 877,
            'option_name' => 'duplicate_post_copyexcerpt',
            'option_value' => '1',
            'autoload' => 'yes',
        ),
        144 => 
        array (
            'option_id' => 878,
            'option_name' => 'duplicate_post_copyattachments',
            'option_value' => '0',
            'autoload' => 'yes',
        ),
        145 => 
        array (
            'option_id' => 879,
            'option_name' => 'duplicate_post_copychildren',
            'option_value' => '0',
            'autoload' => 'yes',
        ),
        146 => 
        array (
            'option_id' => 880,
            'option_name' => 'duplicate_post_copystatus',
            'option_value' => '0',
            'autoload' => 'yes',
        ),
        147 => 
        array (
            'option_id' => 881,
            'option_name' => 'duplicate_post_taxonomies_blacklist',
            'option_value' => 'a:0:{}',
            'autoload' => 'yes',
        ),
        148 => 
        array (
            'option_id' => 882,
            'option_name' => 'duplicate_post_show_row',
            'option_value' => '1',
            'autoload' => 'yes',
        ),
        149 => 
        array (
            'option_id' => 883,
            'option_name' => 'duplicate_post_show_adminbar',
            'option_value' => '1',
            'autoload' => 'yes',
        ),
        150 => 
        array (
            'option_id' => 884,
            'option_name' => 'duplicate_post_show_submitbox',
            'option_value' => '1',
            'autoload' => 'yes',
        ),
        151 => 
        array (
            'option_id' => 885,
            'option_name' => 'duplicate_post_version',
            'option_value' => '2.6',
            'autoload' => 'yes',
        ),
        152 => 
        array (
            'option_id' => 893,
            'option_name' => 'options_social_accounts_0_account_type',
            'option_value' => 'facebook',
            'autoload' => 'no',
        ),
        153 => 
        array (
            'option_id' => 894,
            'option_name' => '_options_social_accounts_0_account_type',
            'option_value' => 'field_53acddd6acc07',
            'autoload' => 'no',
        ),
        154 => 
        array (
            'option_id' => 895,
            'option_name' => 'options_social_accounts_0_account_url',
            'option_value' => 'https://www.facebook.com/playz.com.au',
            'autoload' => 'no',
        ),
        155 => 
        array (
            'option_id' => 896,
            'option_name' => '_options_social_accounts_0_account_url',
            'option_value' => 'field_53acdfadacc08',
            'autoload' => 'no',
        ),
        156 => 
        array (
            'option_id' => 897,
            'option_name' => 'options_social_accounts_1_account_type',
            'option_value' => 'google',
            'autoload' => 'no',
        ),
        157 => 
        array (
            'option_id' => 898,
            'option_name' => '_options_social_accounts_1_account_type',
            'option_value' => 'field_53acddd6acc07',
            'autoload' => 'no',
        ),
        158 => 
        array (
            'option_id' => 899,
            'option_name' => 'options_social_accounts_1_account_url',
            'option_value' => 'https://plus.google.com/u/0/106884994029899825587/posts',
            'autoload' => 'no',
        ),
        159 => 
        array (
            'option_id' => 900,
            'option_name' => '_options_social_accounts_1_account_url',
            'option_value' => 'field_53acdfadacc08',
            'autoload' => 'no',
        ),
        160 => 
        array (
            'option_id' => 914,
            'option_name' => 'nav_menu_options',
            'option_value' => 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}',
            'autoload' => 'yes',
        ),
        161 => 
        array (
            'option_id' => 1016,
            'option_name' => 'options_contact_twitter_username',
            'option_value' => 'playzAustralia',
            'autoload' => 'no',
        ),
        162 => 
        array (
            'option_id' => 1017,
            'option_name' => '_options_contact_twitter_username',
            'option_value' => 'field_5406687c6c0af',
            'autoload' => 'no',
        ),
        163 => 
        array (
            'option_id' => 1041,
            'option_name' => 'options_field_definitions_0_field_id',
            'option_value' => 'summary',
            'autoload' => 'no',
        ),
        164 => 
        array (
            'option_id' => 1042,
            'option_name' => '_options_field_definitions_0_field_id',
            'option_value' => 'field_5406838610440',
            'autoload' => 'no',
        ),
        165 => 
        array (
            'option_id' => 1043,
            'option_name' => 'options_field_definitions_0_field_title',
            'option_value' => 'asdasd',
            'autoload' => 'no',
        ),
        166 => 
        array (
            'option_id' => 1044,
            'option_name' => '_options_field_definitions_0_field_title',
            'option_value' => 'field_5406839510441',
            'autoload' => 'no',
        ),
        167 => 
        array (
            'option_id' => 1045,
            'option_name' => 'options_field_definitions_0_field_description',
            'option_value' => 'asdasd',
            'autoload' => 'no',
        ),
        168 => 
        array (
            'option_id' => 1046,
            'option_name' => '_options_field_definitions_0_field_description',
            'option_value' => 'field_5406839d10442',
            'autoload' => 'no',
        ),
        169 => 
        array (
            'option_id' => 1047,
            'option_name' => 'options_field_definitions',
            'option_value' => '1',
            'autoload' => 'no',
        ),
        170 => 
        array (
            'option_id' => 1048,
            'option_name' => '_options_field_definitions',
            'option_value' => 'field_540683561043f',
            'autoload' => 'no',
        ),
        171 => 
        array (
            'option_id' => 1329,
            'option_name' => 'itsec_message_queue',
            'option_value' => 'a:2:{s:9:"last_sent";i:1511825088;s:8:"messages";a:0:{}}',
            'autoload' => 'no',
        ),
        172 => 
        array (
            'option_id' => 1331,
            'option_name' => 'WPLANG',
            'option_value' => 'en_AU',
            'autoload' => 'yes',
        ),
        173 => 
        array (
            'option_id' => 1336,
            'option_name' => '_transient_random_seed',
            'option_value' => '5e366f6da7ffd7b359cb65049a4997ac',
            'autoload' => 'yes',
        ),
        174 => 
        array (
            'option_id' => 1552,
            'option_name' => 'cpac_general_options',
            'option_value' => 'a:1:{s:16:"show_edit_button";s:1:"0";}',
            'autoload' => 'yes',
        ),
        175 => 
        array (
            'option_id' => 2088,
            'option_name' => 'itsec_ipcheck',
            'option_value' => 'a:1:{s:7:"api_ban";b:0;}',
            'autoload' => 'yes',
        ),
        176 => 
        array (
            'option_id' => 3130,
            'option_name' => 'options_facebook_username',
            'option_value' => 'https://www.facebook.com/playz.com.au',
            'autoload' => 'no',
        ),
        177 => 
        array (
            'option_id' => 3131,
            'option_name' => '_options_facebook_username',
            'option_value' => 'field_5493a468cd5ac',
            'autoload' => 'no',
        ),
        178 => 
        array (
            'option_id' => 3137,
            'option_name' => 'options_facebook_account',
            'option_value' => 'https://www.facebook.com/playz.com.au',
            'autoload' => 'no',
        ),
        179 => 
        array (
            'option_id' => 3138,
            'option_name' => '_options_facebook_account',
            'option_value' => 'field_5493a468cd5ac',
            'autoload' => 'no',
        ),
        180 => 
        array (
            'option_id' => 3238,
            'option_name' => 'wpseo_taxonomy_meta',
            'option_value' => 'a:1:{s:13:"true_faqs_tax";a:2:{i:3;a:2:{s:13:"wpseo_linkdex";s:1:"8";s:19:"wpseo_content_score";s:2:"30";}i:6;a:2:{s:13:"wpseo_linkdex";s:2:"13";s:19:"wpseo_content_score";s:2:"30";}}}',
            'autoload' => 'yes',
        ),
        181 => 
        array (
            'option_id' => 4121,
            'option_name' => 'options_invite_user_heading',
            'option_value' => 'You\'ve been Invited to become "friends" with someone on Playz',
            'autoload' => 'no',
        ),
        182 => 
        array (
            'option_id' => 4122,
            'option_name' => '_options_invite_user_heading',
            'option_value' => 'field_54cf1cb03ae77',
            'autoload' => 'no',
        ),
        183 => 
        array (
            'option_id' => 4123,
            'option_name' => 'options_invite_user_message',
        'option_value' => 'You\'ve been invited to become "friends" on <strong><em>P<strong>lay</strong>z</em></strong>  by %person_name% (%person_email%). Being "friends" on <strong><em>Playz</em></strong> means that you can see each other\'s bookings, helping you coordinate your kids\' activities.  You can accept this invite by clicking the button below to create an account.',
            'autoload' => 'no',
        ),
        184 => 
        array (
            'option_id' => 4124,
            'option_name' => '_options_invite_user_message',
            'option_value' => 'field_54cf1cbc3ae78',
            'autoload' => 'no',
        ),
        185 => 
        array (
            'option_id' => 6088,
            'option_name' => 'options_meta_description',
            'option_value' => 'Playz - Find and book all your kids activities in one place',
            'autoload' => 'no',
        ),
        186 => 
        array (
            'option_id' => 6089,
            'option_name' => '_options_meta_description',
            'option_value' => 'field_555c25e297331',
            'autoload' => 'no',
        ),
        187 => 
        array (
            'option_id' => 6090,
            'option_name' => 'options_meta_keywords',
            'option_value' => 'playz,bookings,Kids Activities,Party,Lesson,Parties,School,Holiday Program,Camp,Class,Things to Do,Child',
            'autoload' => 'no',
        ),
        188 => 
        array (
            'option_id' => 6091,
            'option_name' => '_options_meta_keywords',
            'option_value' => 'field_555c260597332',
            'autoload' => 'no',
        ),
        189 => 
        array (
            'option_id' => 6129,
            'option_name' => 'wp_statistics_plugin_version',
            'option_value' => '9.3.1',
            'autoload' => 'yes',
        ),
        190 => 
        array (
            'option_id' => 6130,
            'option_name' => 'wp_statistics_db_version',
            'option_value' => '9.3.1',
            'autoload' => 'yes',
        ),
        191 => 
        array (
            'option_id' => 6131,
            'option_name' => 'wp_statistics',
            'option_value' => 'a:76:{s:5:"geoip";s:2:"on";s:8:"browscap";s:0:"";s:10:"useronline";s:1:"1";s:6:"visits";s:1:"1";s:8:"visitors";s:1:"1";s:5:"pages";s:1:"1";s:12:"check_online";s:2:"30";s:8:"menu_bar";s:1:"0";s:11:"coefficient";s:1:"1";s:12:"stats_report";s:0:"";s:11:"time_report";s:5:"daily";s:11:"send_report";s:4:"mail";s:14:"content_report";s:0:"";s:12:"update_geoip";b:0;s:8:"store_ua";s:0:"";s:9:"robotlist";s:1503:"A6-Indexer
AbachoBOT
accoona
AcoiRobot
AddThis.com
ADmantX
AhrefsBot
aiHitBot
alexa
AltaVista
AntivirusPro
appie
Applebot
archive.org_bot
Ask Jeeves
ASPSeek
Baiduspider
Benjojo
BeetleBot
bingbot
Blekkobot
BOT for JCE
Butterfly
cbot
clamantivirus
clumboot
coccoc
crawler
CrocCrawler
crowsnest.tv
dbot
dotbot
downloadbot
Dumbot
EasouSpider
eStyle
Exabot
ezooms
facebook.com
facebookexternalhit
FAST
Feedfetcher-Google
feedzirra
Firfly
FriendFeedBot
froogle
GeonaBot
Gigabot
girafabot
gimme60bot
Googlebot
GroupHigh
ia_archiver
IDBot
InfoSeek
inktomi
IstellaBot
jetmon
Kraken
Leikibot
linkdexbot
LinkpadBot
LoadTimeBot
looksmart
Lycos
Mail.RU_Bot
Me.dium
meanpathbot
Mediapartners-Google
MJ12bot
msnbot
MojeekBot
moreover
MRBOT
NationalDirectory
NerdyBot
NetcraftSurveyAgent
niki-bot
nutch
Openbot
p4Bot
PaperLiBot
PagesInventory
Pimonster
proximic
rabaz
Rambler
Rankivabot
Scooter
Scrubby
scrapy.org
SearchmetricsBot
sees.co
SemanticBot
SemrushBot
SeznamBot
sfFeedReader
shareaholic-bot
SiteExplorer
Slurp
Socialradarbot
SocialSearch
Sogou web spider
Spade
spbot
SpiderLing
Superfeedr
SurveyBot
TechnoratiSnoop
TECNOSEEK
Teoma
trendictionbot
TweetmemeBot
Twiceler
Twitterbot
Twitturls
uMBot-LN
URL_Spider_SQL
Vagabondo
vBSEO
WASALive-Bot
WebAlta Crawler
WebBug
WebFindBot
WebMasterAid
WeSEE
Wotbox
www.galaxy.com
XoviBot
yandex
Yahoo
Yammybot
YoudaoBot
ZyBorg
ZemlyaCrawl";s:21:"exclude_administrator";s:1:"1";s:18:"disable_se_clearch";s:1:"1";s:8:"map_type";s:6:"jqvmap";s:18:"force_robot_update";s:1:"1";s:15:"update_browscap";b:1;s:20:"last_overview_memory";i:26738688;s:20:"disable_donation_nag";b:1;s:16:"disable_se_baidu";s:0:"";s:15:"disable_se_bing";s:0:"";s:21:"disable_se_duckduckgo";s:0:"";s:17:"disable_se_google";s:0:"";s:16:"disable_se_yahoo";s:0:"";s:17:"disable_se_yandex";s:0:"";s:15:"track_all_pages";s:0:"";s:14:"disable_column";s:0:"";s:12:"chart_totals";s:0:"";s:12:"hide_notices";s:0:"";s:13:"delete_manual";s:0:"";s:8:"hash_ips";s:0:"";s:10:"all_online";s:0:"";s:20:"strip_uri_parameters";s:0:"";s:17:"override_language";s:0:"";s:14:"addsearchwords";s:0:"";s:10:"email_list";s:27:"webmaster@trueagency.com.au";s:15:"browscap_report";s:0:"";s:12:"geoip_report";s:0:"";s:12:"prune_report";s:0:"";s:14:"upgrade_report";s:0:"";s:11:"disable_map";s:0:"";s:18:"google_coordinates";s:0:"";s:17:"disable_dashboard";s:0:"";s:14:"disable_editor";s:0:"";s:14:"exclude_editor";s:0:"";s:14:"exclude_author";s:0:"";s:19:"exclude_contributor";s:0:"";s:18:"exclude_subscriber";s:0:"";s:15:"read_capability";s:14:"manage_options";s:17:"manage_capability";s:14:"manage_options";s:17:"record_exclusions";s:0:"";s:10:"exclude_ip";s:0:"";s:17:"exclude_loginpage";s:0:"";s:17:"exclude_adminpage";s:0:"";s:18:"excluded_countries";s:0:"";s:18:"included_countries";s:0:"";s:14:"excluded_hosts";s:0:"";s:15:"robot_threshold";s:0:"";s:12:"use_honeypot";s:0:"";s:15:"honeypot_postid";s:0:"";s:13:"exclude_feeds";s:0:"";s:13:"excluded_urls";s:0:"";s:14:"schedule_geoip";s:0:"";s:8:"auto_pop";s:0:"";s:20:"private_country_code";s:3:"000";s:17:"schedule_browscap";s:0:"";s:16:"last_browscap_dl";i:0;s:16:"schedule_dbmaint";s:0:"";s:21:"schedule_dbmaint_days";s:3:"365";s:24:"schedule_dbmaint_visitor";s:0:"";s:29:"schedule_dbmaint_visitor_hits";s:2:"50";s:13:"last_geoip_dl";i:1432274420;}',
            'autoload' => 'yes',
        ),
        192 => 
        array (
            'option_id' => 6713,
            'option_name' => 'options_social_accounts_2_account_type',
            'option_value' => 'twitter',
            'autoload' => 'no',
        ),
        193 => 
        array (
            'option_id' => 6714,
            'option_name' => '_options_social_accounts_2_account_type',
            'option_value' => 'field_53acddd6acc07',
            'autoload' => 'no',
        ),
        194 => 
        array (
            'option_id' => 6715,
            'option_name' => 'options_social_accounts_2_account_url',
            'option_value' => 'https://www.facebook.com/playz.com.au',
            'autoload' => 'no',
        ),
        195 => 
        array (
            'option_id' => 6716,
            'option_name' => '_options_social_accounts_2_account_url',
            'option_value' => 'field_53acdfadacc08',
            'autoload' => 'no',
        ),
        196 => 
        array (
            'option_id' => 9356,
            'option_name' => 'rewrite_rules',
        'option_value' => 'a:129:{s:19:"sitemap_index\\.xml$";s:19:"index.php?sitemap=1";s:31:"([^/]+?)-sitemap([0-9]+)?\\.xml$";s:51:"index.php?sitemap=$matches[1]&sitemap_n=$matches[2]";s:24:"([a-z]+)?-?sitemap\\.xsl$";s:25:"index.php?xsl=$matches[1]";s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:54:"true_faqs_tax/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?true_faqs_tax=$matches[1]&feed=$matches[2]";s:49:"true_faqs_tax/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?true_faqs_tax=$matches[1]&feed=$matches[2]";s:30:"true_faqs_tax/([^/]+)/embed/?$";s:46:"index.php?true_faqs_tax=$matches[1]&embed=true";s:42:"true_faqs_tax/([^/]+)/page/?([0-9]{1,})/?$";s:53:"index.php?true_faqs_tax=$matches[1]&paged=$matches[2]";s:24:"true_faqs_tax/([^/]+)/?$";s:35:"index.php?true_faqs_tax=$matches[1]";s:29:"l/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:39:"l/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:59:"l/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:54:"l/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:54:"l/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:35:"l/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:18:"l/([^/]+)/embed/?$";s:50:"index.php?true_landing_page=$matches[1]&embed=true";s:22:"l/([^/]+)/trackback/?$";s:44:"index.php?true_landing_page=$matches[1]&tb=1";s:30:"l/([^/]+)/page/?([0-9]{1,})/?$";s:57:"index.php?true_landing_page=$matches[1]&paged=$matches[2]";s:37:"l/([^/]+)/comment-page-([0-9]{1,})/?$";s:57:"index.php?true_landing_page=$matches[1]&cpage=$matches[2]";s:26:"l/([^/]+)(?:/([0-9]+))?/?$";s:56:"index.php?true_landing_page=$matches[1]&page=$matches[2]";s:18:"l/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:28:"l/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:48:"l/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:43:"l/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:43:"l/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:24:"l/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:36:"helptext/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:46:"helptext/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:66:"helptext/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"helptext/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"helptext/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:42:"helptext/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:25:"helptext/([^/]+)/embed/?$";s:46:"index.php?true_pagecopy=$matches[1]&embed=true";s:29:"helptext/([^/]+)/trackback/?$";s:40:"index.php?true_pagecopy=$matches[1]&tb=1";s:37:"helptext/([^/]+)/page/?([0-9]{1,})/?$";s:53:"index.php?true_pagecopy=$matches[1]&paged=$matches[2]";s:44:"helptext/([^/]+)/comment-page-([0-9]{1,})/?$";s:53:"index.php?true_pagecopy=$matches[1]&cpage=$matches[2]";s:33:"helptext/([^/]+)(?:/([0-9]+))?/?$";s:52:"index.php?true_pagecopy=$matches[1]&page=$matches[2]";s:25:"helptext/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:35:"helptext/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:55:"helptext/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"helptext/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"helptext/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:31:"helptext/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:38:"index.php?&page_id=7&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:47:"[0-9]{4}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:40:"([0-9]{4})/([0-9]{1,2})/([^/]+)/embed/?$";s:75:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/([^/]+)/trackback/?$";s:69:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&tb=1";s:64:"([0-9]{4})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&feed=$matches[4]";s:59:"([0-9]{4})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&feed=$matches[4]";s:52:"([0-9]{4})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:82:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&paged=$matches[4]";s:59:"([0-9]{4})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:82:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&cpage=$matches[4]";s:48:"([0-9]{4})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&name=$matches[3]&page=$matches[4]";s:36:"[0-9]{4}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:46:"[0-9]{4}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:66:"[0-9]{4}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"[0-9]{4}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"[0-9]{4}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:42:"[0-9]{4}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}',
            'autoload' => 'yes',
        ),
        197 => 
        array (
            'option_id' => 10021,
            'option_name' => 'options_register_popup_provider_text',
            'option_value' => 'I provide<br>kids’ activities',
            'autoload' => 'no',
        ),
        198 => 
        array (
            'option_id' => 10022,
            'option_name' => '_options_register_popup_provider_text',
            'option_value' => 'field_5761e6cb1a511',
            'autoload' => 'no',
        ),
        199 => 
        array (
            'option_id' => 10023,
            'option_name' => 'options_register_popup_parent_text',
            'option_value' => 'I’m looking for<br>kids’ activities',
            'autoload' => 'no',
        ),
        200 => 
        array (
            'option_id' => 10024,
            'option_name' => '_options_register_popup_parent_text',
            'option_value' => 'field_5761e6df1a512',
            'autoload' => 'no',
        ),
        201 => 
        array (
            'option_id' => 11089,
            'option_name' => 'widget_pages',
            'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
            'autoload' => 'yes',
        ),
        202 => 
        array (
            'option_id' => 11090,
            'option_name' => 'widget_calendar',
            'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
            'autoload' => 'yes',
        ),
        203 => 
        array (
            'option_id' => 11091,
            'option_name' => 'widget_tag_cloud',
            'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
            'autoload' => 'yes',
        ),
        204 => 
        array (
            'option_id' => 11092,
            'option_name' => 'widget_nav_menu',
            'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
            'autoload' => 'yes',
        ),
        205 => 
        array (
            'option_id' => 11094,
            'option_name' => 'finished_splitting_shared_terms',
            'option_value' => '1',
            'autoload' => 'yes',
        ),
        206 => 
        array (
            'option_id' => 11095,
            'option_name' => 'site_icon',
            'option_value' => '0',
            'autoload' => 'yes',
        ),
        207 => 
        array (
            'option_id' => 11096,
            'option_name' => 'medium_large_size_w',
            'option_value' => '768',
            'autoload' => 'yes',
        ),
        208 => 
        array (
            'option_id' => 11097,
            'option_name' => 'medium_large_size_h',
            'option_value' => '0',
            'autoload' => 'yes',
        ),
        209 => 
        array (
            'option_id' => 11100,
            'option_name' => 'can_compress_scripts',
            'option_value' => '1',
            'autoload' => 'no',
        ),
        210 => 
        array (
            'option_id' => 11101,
            'option_name' => '_transient_timeout_plugin_slugs',
            'option_value' => '1477956463',
            'autoload' => 'no',
        ),
        211 => 
        array (
            'option_id' => 11102,
            'option_name' => '_transient_plugin_slugs',
            'option_value' => 'a:12:{i:0;s:51:"codepress-admin-columns/codepress-admin-columns.php";i:1;s:34:"advanced-custom-fields-pro/acf.php";i:2;s:27:"backupbuddy/backupbuddy.php";i:3;s:36:"contact-form-7/wp-contact-form-7.php";i:4;s:36:"contact-form-7-honeypot/honeypot.php";i:5;s:59:"contact-form-7-leads-tracking/wpshore_cf7_lead_tracking.php";i:6;s:33:"duplicate-post/duplicate-post.php";i:7;s:45:"enable-media-replace/enable-media-replace.php";i:8;s:41:"better-wp-security/better-wp-security.php";i:9;s:41:"trueagency-options/trueagency-options.php";i:10;s:41:"wordpress-importer/wordpress-importer.php";i:11;s:24:"wordpress-seo/wp-seo.php";}',
            'autoload' => 'no',
        ),
        212 => 
        array (
            'option_id' => 11104,
            'option_name' => 'cpac-install-timestamp',
            'option_value' => '1471502217',
            'autoload' => 'no',
        ),
        213 => 
        array (
            'option_id' => 11110,
            'option_name' => '_site_transient_timeout_poptags_40cd750bba9870f18aada2478b24840a',
            'option_value' => '1471513041',
            'autoload' => 'no',
        ),
        214 => 
        array (
            'option_id' => 11111,
            'option_name' => '_site_transient_poptags_40cd750bba9870f18aada2478b24840a',
            'option_value' => 'a:100:{s:6:"widget";a:3:{s:4:"name";s:6:"widget";s:4:"slug";s:6:"widget";s:5:"count";s:4:"5981";}s:4:"post";a:3:{s:4:"name";s:4:"Post";s:4:"slug";s:4:"post";s:5:"count";s:4:"3695";}s:6:"plugin";a:3:{s:4:"name";s:6:"plugin";s:4:"slug";s:6:"plugin";s:5:"count";s:4:"3648";}s:5:"admin";a:3:{s:4:"name";s:5:"admin";s:4:"slug";s:5:"admin";s:5:"count";s:4:"3163";}s:5:"posts";a:3:{s:4:"name";s:5:"posts";s:4:"slug";s:5:"posts";s:5:"count";s:4:"2824";}s:9:"shortcode";a:3:{s:4:"name";s:9:"shortcode";s:4:"slug";s:9:"shortcode";s:5:"count";s:4:"2439";}s:7:"sidebar";a:3:{s:4:"name";s:7:"sidebar";s:4:"slug";s:7:"sidebar";s:5:"count";s:4:"2240";}s:6:"google";a:3:{s:4:"name";s:6:"google";s:4:"slug";s:6:"google";s:5:"count";s:4:"2110";}s:7:"twitter";a:3:{s:4:"name";s:7:"twitter";s:4:"slug";s:7:"twitter";s:5:"count";s:4:"2070";}s:4:"page";a:3:{s:4:"name";s:4:"page";s:4:"slug";s:4:"page";s:5:"count";s:4:"2060";}s:6:"images";a:3:{s:4:"name";s:6:"images";s:4:"slug";s:6:"images";s:5:"count";s:4:"2009";}s:8:"comments";a:3:{s:4:"name";s:8:"comments";s:4:"slug";s:8:"comments";s:5:"count";s:4:"1949";}s:5:"image";a:3:{s:4:"name";s:5:"image";s:4:"slug";s:5:"image";s:5:"count";s:4:"1883";}s:11:"woocommerce";a:3:{s:4:"name";s:11:"woocommerce";s:4:"slug";s:11:"woocommerce";s:5:"count";s:4:"1814";}s:8:"facebook";a:3:{s:4:"name";s:8:"Facebook";s:4:"slug";s:8:"facebook";s:5:"count";s:4:"1717";}s:3:"seo";a:3:{s:4:"name";s:3:"seo";s:4:"slug";s:3:"seo";s:5:"count";s:4:"1600";}s:9:"wordpress";a:3:{s:4:"name";s:9:"wordpress";s:4:"slug";s:9:"wordpress";s:5:"count";s:4:"1559";}s:6:"social";a:3:{s:4:"name";s:6:"social";s:4:"slug";s:6:"social";s:5:"count";s:4:"1428";}s:7:"gallery";a:3:{s:4:"name";s:7:"gallery";s:4:"slug";s:7:"gallery";s:5:"count";s:4:"1337";}s:5:"links";a:3:{s:4:"name";s:5:"links";s:4:"slug";s:5:"links";s:5:"count";s:4:"1293";}s:5:"email";a:3:{s:4:"name";s:5:"email";s:4:"slug";s:5:"email";s:5:"count";s:4:"1252";}s:7:"widgets";a:3:{s:4:"name";s:7:"widgets";s:4:"slug";s:7:"widgets";s:5:"count";s:4:"1123";}s:5:"pages";a:3:{s:4:"name";s:5:"pages";s:4:"slug";s:5:"pages";s:5:"count";s:4:"1110";}s:6:"jquery";a:3:{s:4:"name";s:6:"jquery";s:4:"slug";s:6:"jquery";s:5:"count";s:4:"1014";}s:9:"ecommerce";a:3:{s:4:"name";s:9:"ecommerce";s:4:"slug";s:9:"ecommerce";s:5:"count";s:4:"1009";}s:5:"media";a:3:{s:4:"name";s:5:"media";s:4:"slug";s:5:"media";s:5:"count";s:4:"1008";}s:5:"video";a:3:{s:4:"name";s:5:"video";s:4:"slug";s:5:"video";s:5:"count";s:3:"942";}s:5:"login";a:3:{s:4:"name";s:5:"login";s:4:"slug";s:5:"login";s:5:"count";s:3:"932";}s:7:"content";a:3:{s:4:"name";s:7:"content";s:4:"slug";s:7:"content";s:5:"count";s:3:"926";}s:3:"rss";a:3:{s:4:"name";s:3:"rss";s:4:"slug";s:3:"rss";s:5:"count";s:3:"919";}s:4:"ajax";a:3:{s:4:"name";s:4:"AJAX";s:4:"slug";s:4:"ajax";s:5:"count";s:3:"919";}s:10:"responsive";a:3:{s:4:"name";s:10:"responsive";s:4:"slug";s:10:"responsive";s:5:"count";s:3:"862";}s:10:"javascript";a:3:{s:4:"name";s:10:"javascript";s:4:"slug";s:10:"javascript";s:5:"count";s:3:"849";}s:10:"buddypress";a:3:{s:4:"name";s:10:"buddypress";s:4:"slug";s:10:"buddypress";s:5:"count";s:3:"807";}s:8:"security";a:3:{s:4:"name";s:8:"security";s:4:"slug";s:8:"security";s:5:"count";s:3:"800";}s:10:"e-commerce";a:3:{s:4:"name";s:10:"e-commerce";s:4:"slug";s:10:"e-commerce";s:5:"count";s:3:"794";}s:7:"youtube";a:3:{s:4:"name";s:7:"youtube";s:4:"slug";s:7:"youtube";s:5:"count";s:3:"777";}s:5:"share";a:3:{s:4:"name";s:5:"Share";s:4:"slug";s:5:"share";s:5:"count";s:3:"771";}s:5:"photo";a:3:{s:4:"name";s:5:"photo";s:4:"slug";s:5:"photo";s:5:"count";s:3:"767";}s:4:"spam";a:3:{s:4:"name";s:4:"spam";s:4:"slug";s:4:"spam";s:5:"count";s:3:"766";}s:4:"feed";a:3:{s:4:"name";s:4:"feed";s:4:"slug";s:4:"feed";s:5:"count";s:3:"755";}s:4:"link";a:3:{s:4:"name";s:4:"link";s:4:"slug";s:4:"link";s:5:"count";s:3:"749";}s:8:"category";a:3:{s:4:"name";s:8:"category";s:4:"slug";s:8:"category";s:5:"count";s:3:"721";}s:9:"analytics";a:3:{s:4:"name";s:9:"analytics";s:4:"slug";s:9:"analytics";s:5:"count";s:3:"716";}s:5:"embed";a:3:{s:4:"name";s:5:"embed";s:4:"slug";s:5:"embed";s:5:"count";s:3:"702";}s:3:"css";a:3:{s:4:"name";s:3:"CSS";s:4:"slug";s:3:"css";s:5:"count";s:3:"699";}s:6:"photos";a:3:{s:4:"name";s:6:"photos";s:4:"slug";s:6:"photos";s:5:"count";s:3:"697";}s:4:"form";a:3:{s:4:"name";s:4:"form";s:4:"slug";s:4:"form";s:5:"count";s:3:"697";}s:6:"slider";a:3:{s:4:"name";s:6:"slider";s:4:"slug";s:6:"slider";s:5:"count";s:3:"693";}s:6:"search";a:3:{s:4:"name";s:6:"search";s:4:"slug";s:6:"search";s:5:"count";s:3:"679";}s:6:"custom";a:3:{s:4:"name";s:6:"custom";s:4:"slug";s:6:"custom";s:5:"count";s:3:"667";}s:9:"slideshow";a:3:{s:4:"name";s:9:"slideshow";s:4:"slug";s:9:"slideshow";s:5:"count";s:3:"648";}s:5:"stats";a:3:{s:4:"name";s:5:"stats";s:4:"slug";s:5:"stats";s:5:"count";s:3:"625";}s:6:"button";a:3:{s:4:"name";s:6:"button";s:4:"slug";s:6:"button";s:5:"count";s:3:"625";}s:4:"menu";a:3:{s:4:"name";s:4:"menu";s:4:"slug";s:4:"menu";s:5:"count";s:3:"616";}s:5:"theme";a:3:{s:4:"name";s:5:"theme";s:4:"slug";s:5:"theme";s:5:"count";s:3:"606";}s:9:"dashboard";a:3:{s:4:"name";s:9:"dashboard";s:4:"slug";s:9:"dashboard";s:5:"count";s:3:"603";}s:7:"comment";a:3:{s:4:"name";s:7:"comment";s:4:"slug";s:7:"comment";s:5:"count";s:3:"601";}s:4:"tags";a:3:{s:4:"name";s:4:"tags";s:4:"slug";s:4:"tags";s:5:"count";s:3:"598";}s:10:"categories";a:3:{s:4:"name";s:10:"categories";s:4:"slug";s:10:"categories";s:5:"count";s:3:"590";}s:6:"mobile";a:3:{s:4:"name";s:6:"mobile";s:4:"slug";s:6:"mobile";s:5:"count";s:3:"586";}s:10:"statistics";a:3:{s:4:"name";s:10:"statistics";s:4:"slug";s:10:"statistics";s:5:"count";s:3:"575";}s:3:"ads";a:3:{s:4:"name";s:3:"ads";s:4:"slug";s:3:"ads";s:5:"count";s:3:"573";}s:6:"editor";a:3:{s:4:"name";s:6:"editor";s:4:"slug";s:6:"editor";s:5:"count";s:3:"562";}s:4:"user";a:3:{s:4:"name";s:4:"user";s:4:"slug";s:4:"user";s:5:"count";s:3:"562";}s:5:"users";a:3:{s:4:"name";s:5:"users";s:4:"slug";s:5:"users";s:5:"count";s:3:"546";}s:4:"list";a:3:{s:4:"name";s:4:"list";s:4:"slug";s:4:"list";s:5:"count";s:3:"543";}s:12:"social-media";a:3:{s:4:"name";s:12:"social media";s:4:"slug";s:12:"social-media";s:5:"count";s:3:"540";}s:7:"plugins";a:3:{s:4:"name";s:7:"plugins";s:4:"slug";s:7:"plugins";s:5:"count";s:3:"526";}s:12:"contact-form";a:3:{s:4:"name";s:12:"contact form";s:4:"slug";s:12:"contact-form";s:5:"count";s:3:"525";}s:6:"simple";a:3:{s:4:"name";s:6:"simple";s:4:"slug";s:6:"simple";s:5:"count";s:3:"520";}s:9:"affiliate";a:3:{s:4:"name";s:9:"affiliate";s:4:"slug";s:9:"affiliate";s:5:"count";s:3:"518";}s:9:"multisite";a:3:{s:4:"name";s:9:"multisite";s:4:"slug";s:9:"multisite";s:5:"count";s:3:"518";}s:7:"picture";a:3:{s:4:"name";s:7:"picture";s:4:"slug";s:7:"picture";s:5:"count";s:3:"516";}s:7:"contact";a:3:{s:4:"name";s:7:"contact";s:4:"slug";s:7:"contact";s:5:"count";s:3:"489";}s:3:"api";a:3:{s:4:"name";s:3:"api";s:4:"slug";s:3:"api";s:5:"count";s:3:"479";}s:9:"marketing";a:3:{s:4:"name";s:9:"marketing";s:4:"slug";s:9:"marketing";s:5:"count";s:3:"472";}s:4:"shop";a:3:{s:4:"name";s:4:"shop";s:4:"slug";s:4:"shop";s:5:"count";s:3:"472";}s:8:"pictures";a:3:{s:4:"name";s:8:"pictures";s:4:"slug";s:8:"pictures";s:5:"count";s:3:"464";}s:3:"url";a:3:{s:4:"name";s:3:"url";s:4:"slug";s:3:"url";s:5:"count";s:3:"461";}s:10:"navigation";a:3:{s:4:"name";s:10:"navigation";s:4:"slug";s:10:"navigation";s:5:"count";s:3:"453";}s:4:"html";a:3:{s:4:"name";s:4:"html";s:4:"slug";s:4:"html";s:5:"count";s:3:"446";}s:6:"events";a:3:{s:4:"name";s:6:"events";s:4:"slug";s:6:"events";s:5:"count";s:3:"441";}s:10:"newsletter";a:3:{s:4:"name";s:10:"newsletter";s:4:"slug";s:10:"newsletter";s:5:"count";s:3:"435";}s:8:"tracking";a:3:{s:4:"name";s:8:"tracking";s:4:"slug";s:8:"tracking";s:5:"count";s:3:"428";}s:8:"calendar";a:3:{s:4:"name";s:8:"calendar";s:4:"slug";s:8:"calendar";s:5:"count";s:3:"428";}s:4:"meta";a:3:{s:4:"name";s:4:"meta";s:4:"slug";s:4:"meta";s:5:"count";s:3:"426";}s:10:"shortcodes";a:3:{s:4:"name";s:10:"shortcodes";s:4:"slug";s:10:"shortcodes";s:5:"count";s:3:"425";}s:5:"flash";a:3:{s:4:"name";s:5:"flash";s:4:"slug";s:5:"flash";s:5:"count";s:3:"422";}s:4:"news";a:3:{s:4:"name";s:4:"News";s:4:"slug";s:4:"news";s:5:"count";s:3:"415";}s:3:"tag";a:3:{s:4:"name";s:3:"tag";s:4:"slug";s:3:"tag";s:5:"count";s:3:"415";}s:11:"advertising";a:3:{s:4:"name";s:11:"advertising";s:4:"slug";s:11:"advertising";s:5:"count";s:3:"411";}s:6:"upload";a:3:{s:4:"name";s:6:"upload";s:4:"slug";s:6:"upload";s:5:"count";s:3:"408";}s:9:"thumbnail";a:3:{s:4:"name";s:9:"thumbnail";s:4:"slug";s:9:"thumbnail";s:5:"count";s:3:"407";}s:7:"sharing";a:3:{s:4:"name";s:7:"sharing";s:4:"slug";s:7:"sharing";s:5:"count";s:3:"406";}s:6:"paypal";a:3:{s:4:"name";s:6:"paypal";s:4:"slug";s:6:"paypal";s:5:"count";s:3:"406";}s:8:"lightbox";a:3:{s:4:"name";s:8:"lightbox";s:4:"slug";s:8:"lightbox";s:5:"count";s:3:"405";}s:7:"profile";a:3:{s:4:"name";s:7:"profile";s:4:"slug";s:7:"profile";s:5:"count";s:3:"404";}s:8:"linkedin";a:3:{s:4:"name";s:8:"linkedin";s:4:"slug";s:8:"linkedin";s:5:"count";s:3:"401";}s:12:"notification";a:3:{s:4:"name";s:12:"notification";s:4:"slug";s:12:"notification";s:5:"count";s:3:"401";}}',
            'autoload' => 'no',
        ),
        215 => 
        array (
            'option_id' => 11112,
            'option_name' => 'wpseo_sitemap_cache_validator_global',
            'option_value' => 'DFKb',
            'autoload' => 'no',
        ),
        216 => 
        array (
            'option_id' => 11117,
            'option_name' => 'cpac_options_page__default',
            'option_value' => 'a:10:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:5:"Title";s:6:"author";s:6:"Author";s:8:"comments";s:111:"<span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span>";s:4:"date";s:4:"Date";s:11:"wpseo-score";s:3:"SEO";s:23:"wpseo-score-readability";s:11:"Readability";s:11:"wpseo-title";s:9:"SEO Title";s:14:"wpseo-metadesc";s:10:"Meta Desc.";s:13:"wpseo-focuskw";s:8:"Focus KW";}',
            'autoload' => 'yes',
        ),
        217 => 
        array (
            'option_id' => 11136,
            'option_name' => '_transient_timeout_acf_pro_get_remote_info',
            'option_value' => '1471605523',
            'autoload' => 'no',
        ),
        218 => 
        array (
            'option_id' => 11137,
            'option_name' => '_transient_acf_pro_get_remote_info',
            'option_value' => 'a:15:{s:4:"name";s:26:"Advanced Custom Fields PRO";s:4:"slug";s:26:"advanced-custom-fields-pro";s:8:"homepage";s:37:"https://www.advancedcustomfields.com/";s:7:"version";s:5:"5.4.2";s:6:"author";s:13:"Elliot Condon";s:10:"author_url";s:28:"http://www.elliotcondon.com/";s:12:"contributors";s:12:"elliotcondon";s:8:"requires";s:5:"3.6.0";s:6:"tested";s:5:"4.6.0";s:4:"tags";a:41:{i:0;s:5:"5.4.1";i:1;s:5:"5.4.0";i:2;s:5:"5.3.8";i:3;s:5:"5.3.7";i:4;s:5:"5.3.6";i:5;s:5:"5.3.5";i:6;s:5:"5.3.4";i:7;s:5:"5.3.3";i:8;s:5:"5.3.2";i:9;s:5:"5.3.1";i:10;s:5:"5.3.0";i:11;s:5:"5.2.9";i:12;s:5:"5.2.8";i:13;s:5:"5.2.7";i:14;s:5:"5.2.6";i:15;s:5:"5.2.5";i:16;s:5:"5.2.4";i:17;s:5:"5.2.3";i:18;s:5:"5.2.2";i:19;s:5:"5.2.1";i:20;s:5:"5.2.0";i:21;s:5:"5.1.9";i:22;s:5:"5.1.8";i:23;s:5:"5.1.7";i:24;s:5:"5.1.6";i:25;s:5:"5.1.5";i:26;s:5:"5.1.4";i:27;s:5:"5.1.3";i:28;s:5:"5.1.2";i:29;s:5:"5.1.1";i:30;s:5:"5.1.0";i:31;s:5:"5.0.9";i:32;s:5:"5.0.8";i:33;s:5:"5.0.7";i:34;s:5:"5.0.6";i:35;s:5:"5.0.5";i:36;s:5:"5.0.4";i:37;s:5:"5.0.3";i:38;s:5:"5.0.2";i:39;s:5:"5.0.1";i:40;s:5:"5.0.0";}s:6:"tagged";s:123:"acf, advanced, custom, field, fields, custom field, custom fields, simple fields, magic fields, more fields, repeater, edit";s:11:"description";s:4337:"<p>Advanced Custom Fields is the perfect solution for any WordPress website which needs more flexible data like other Content Management Systems. </p>
<ul><li>Visually create your Fields</li><li>Select from multiple input types (text, textarea, wysiwyg, image, file, page link, post object, relationship, select, checkbox, radio buttons, date picker, true / false, repeater, flexible content, gallery and more to come!)</li><li>Assign your fields to multiple edit pages (via custom location rules)</li><li>Easily load data through a simple and friendly API</li><li>Uses the native WordPress custom post type for ease of use and fast processing</li><li>Uses the native WordPress metadata for ease of use and fast processing</li></ul>
<h4> Field Types </h4>
<ul><li>Text (type text, api returns text)</li><li>Text Area (type text, api returns text)</li><li>Number (type number, api returns integer)</li><li>Email (type email, api returns text)</li><li>Password (type password, api returns text)</li><li>WYSIWYG (a WordPress wysiwyg editor, api returns html)</li><li>Image (upload an image, api returns the url)</li><li>File (upload a file, api returns the url)</li><li>Select (drop down list of choices, api returns chosen item)</li><li>Checkbox (tickbox list of choices, api returns array of choices)</li><li>Radio Buttons ( radio button list of choices, api returns chosen item)</li><li>True / False (tick box with message, api returns true or false)</li><li>Page Link (select 1 or more page, post or custom post types, api returns the selected url)</li><li>Post Object (select 1 or more page, post or custom post types, api returns the selected post objects)</li><li>Relationship (search, select and order post objects with a tidy interface, api returns the selected post objects)</li><li>Taxonomy (select taxonomy terms with options to load, display and save, api returns the selected term objects)</li><li>User (select 1 or more WP users, api returns the selected user objects)</li><li>Google Maps (interactive map, api returns lat,lng,address data)</li><li>Date Picker (jquery date picker, options for format, api returns string)</li><li>Color Picker (WP color swatch picker)</li><li>Tab (Group fields into tabs)</li><li>Message (Render custom messages into the fields)</li><li>Repeater (ability to create repeatable blocks of fields!)</li><li>Flexible Content (ability to create flexible blocks of fields!)</li><li>Gallery (Add, edit and order multiple images in 1 simple field)</li><li>[Custom](<a href="https://www.advancedcustomfields.com/resources/tutorials/creating-a-new-field-type/)">www.advancedcustomfields.com/resources/tutorials/creating-a-new-field-type/)</a> (Create your own field type!)</li></ul>
<h4> Tested on </h4>
<ul><li>Mac Firefox 	:)</li><li>Mac Safari 	:)</li><li>Mac Chrome	:)</li><li>PC Safari 	:)</li><li>PC Chrome		:)</li><li>PC Firefox	:)</li><li>iPhone Safari :)</li><li>iPad Safari 	:)</li><li>PC ie7		:S</li></ul>
<h4> Website </h4>
<p><a href="https://www.advancedcustomfields.com/">www.advancedcustomfields.com/</a></p>
<h4> Documentation </h4>
<ul><li>[Getting Started](<a href="https://www.advancedcustomfields.com/resources/#getting-started)">www.advancedcustomfields.com/resources/#getting-started)</a></li><li>[Field Types](<a href="https://www.advancedcustomfields.com/resources/#field-types)">www.advancedcustomfields.com/resources/#field-types)</a></li><li>[Functions](<a href="https://www.advancedcustomfields.com/resources/#functions)">www.advancedcustomfields.com/resources/#functions)</a></li><li>[Actions](<a href="https://www.advancedcustomfields.com/resources/#actions)">www.advancedcustomfields.com/resources/#actions)</a></li><li>[Filters](<a href="https://www.advancedcustomfields.com/resources/#filters)">www.advancedcustomfields.com/resources/#filters)</a></li><li>[How to guides](<a href="https://www.advancedcustomfields.com/resources/#how-to)">www.advancedcustomfields.com/resources/#how-to)</a></li><li>[Tutorials](<a href="https://www.advancedcustomfields.com/resources/#tutorials)">www.advancedcustomfields.com/resources/#tutorials)</a></li></ul>
<h4> Bug Submission and Forum Support </h4>
<p><a href="http://support.advancedcustomfields.com/">support.advancedcustomfields.com/</a></p>
<h4> Please Vote and Enjoy </h4>
<p>Your votes really make a difference! Thanks.</p>
";s:12:"installation";s:467:"<ol><li>Upload <code>advanced-custom-fields</code> to the <code>/wp-content/plugins/</code> directory</li><li>Activate the plugin through the <code>Plugins</code> menu in WordPress</li><li>Click on the new menu item "Custom Fields" and create your first Custom Field Group!</li><li>Your custom field group will now appear on the page / post / template you specified in the field group\'s location rules!</li><li>Read the documentation to display your data: </li></ol>
";s:9:"changelog";s:5843:"<h4> 5.4.2 </h4>
<ul><li>API: Fixed bug preventing post_title and post_content values saving in `acf_form()`</li></ul>
<h4> 5.4.1 </h4>
<ul><li>API: Fixed bug causing `get_fields(<code>options</code>)` to return false</li><li>Core: Fixed bug causing `get_current_screen()` to throw PHP error</li><li>Core: Fixed bug causing <code>Preview Post</code> to load empty field values</li></ul>
<h4> 5.4.0 </h4>
<ul><li>Clone field: Added new field type (<a href="https://www.advancedcustomfields.com/resources/clone/)">www.advancedcustomfields.com/resources/clone/)</a></li><li>Gallery field: Removed <code>Preview Size</code> setting and improved UI</li><li>Taxonomy field: Added compatibility to save/load terms to user object</li><li>Select field: Added new <code>Return Format</code> setting</li><li>Radio field: Added new <code>Return Format</code> setting</li><li>Checkbox field: Added new <code>Return Format</code> setting</li><li>Page link field: Added new <code>Allow Archives URLs</code> setting</li><li>Core: Fixed plugin update bug delaying updates</li><li>Core: Fixed bug when editing field settings in Chrome causing required setting to self toggle</li><li>Core: Improved speed and fixed bugs when creating and restoring revisions</li><li>Core: Minor fixes and improvements</li><li>Language: Updated Portuguese translation - thanks to Pedro Mendonca</li><li>Language: Updated Brazilian Portuguese translation - thanks to Augusto Simão</li><li>Language: Updated Dutch translation - thanks to Derk Oosterveld</li><li>Language: Updated Persian translation - thanks to Kamel</li><li>Language: Updated German translation - thanks to Ralf Koller</li><li>Language: Updated Swiss German translation - thanks to Raphael Hüni</li></ul>
<h4> 5.3.10 </h4>
<ul><li>Core: Added new <code>google_api_key</code> and <code>google_api_client</code> global settings</li><li>Google Map: Added new <code>acf/fields/google_map/api</code> filter</li></ul>
<h4> 5.3.9.2 </h4>
<ul><li>Time Picker field: Added compatibility with previous 3rd party field settings</li><li>Core: Fixed JS error setting l10n for Select2 with 3rd party libraries</li></ul>
<h4> 5.3.9.1 </h4>
<ul><li>Time Picker field: Fixed bug causing value to appear as current time</li><li>API: Fixed bug causing `have_rows()` to fail when using an object as $post_id parameter</li></ul>
<h4> 5.3.9 </h4>
<ul><li>Date Time Picker field: Added new field</li><li>Time Picker field: Added new field</li><li>Taxonomy field: Fixed bug preventing saved terms from being loaded during save/update actions</li><li>API: Added new function `the_row_index()` to output the current row number (1,2,3)</li><li>Core: Improved import tool to update existing field groups</li><li>Core: Added upgrade_notice message to plugins page for future announcements</li><li>Core: Fixed bug where updating value did not clear persistent cache</li><li>Core: Added Select2 JS strings to .pot for translation</li><li>Core: Added Date and Time picker JS strings to .pot for translation</li><li>Core: Improved compatibility with WPML during AJAX calls</li><li>Core: Fixed bug preventing access to network database upgrade page</li><li>Core: Minor fixes and improvements</li><li>Language: Updated Swedish translation - thanks to Jonathan de Jong</li><li>Language: Updated Russian translation - thanks to Andy Toniyevych </li><li>Language: Updated Portuguese translation - thanks to Pedro Mendonca</li><li>Language: Updated Polish translation - thanks to Michal Lepiarz</li><li>Language: Updated Italian translation - thanks to Davide Pantè</li><li>Language: Updated German translation - thanks to Ralf Koller</li><li>Language: Added Arabic translation - thanks to Adil el hallaoui</li></ul>
<h4> 5.3.8.1 </h4>
<ul><li>Image field: Fixed JS bug causing errors when <code>Uploaded to post</code> library setting is checked</li><li>File field: Same as above</li><li>Gallery field: Same as above</li><li>Flexible Content field: Fixed bug preventing `get_sub_field()` from working within <code>layout_title</code> filter</li><li>Radio field: Fixed bug causing field name to change when adding <code>other</code> choice to a sub field</li></ul>
<h4> 5.3.8 </h4>
<ul><li>Gallery field: Added new <code>Insert</code> setting to control where new attachments are added</li><li>Radio field: Added new <code>Allow Null</code> setting</li><li>Relationship field: Added attachment mime type icons when no thumbnail is available</li><li>Core: Fixed bug causing customizer preview values from loading on newly added widgets</li><li>Core: Improved attachments location rule for future compatibility with specific mime types</li><li>Core: Fixed bug causing select2 to appear blank after duplicating a field setting</li><li>Core: Fixed bug causing PHP error on front-end plugin update check</li><li>Core: Updated title elements (h1, h2, h3) to match WP 4.5</li><li>Core: Minor fixes and improvements</li><li>Core: Fixed bug where comment fields appeared in different locations for logged in/out users</li><li>Language: Updated Polish translation - thanks to Michal Lepiarz</li><li>Language: Updated Italian translation - thanks to Davide Pantè</li><li>Language: Updated Portuguese translation - thanks to Pedro Mendonca</li><li>Language: Updated Swiss German translation - thanks to Raphael Hüni</li><li>Language: Updated French Translation - thanks to Maxime Bernard-Jacquet</li></ul>
<h4> 5.3.7 </h4>
<ul><li>Options page: Added new <code>update_button</code> setting to modify update button text</li><li>Options page: Added columns support (Screen Options)</li><li>Core: Added widget preview / save compatibility with the customizer</li><li>Core: Minor fixes and improvements</li><li>Language: Updated German translation - thanks to Ralf Koller</li><li>Language: Updated French Translation - thanks to Maxime Bernard-Jacquet</li></ul>
";s:14:"upgrade_notice";s:551:"<h4> 5.2.7 </h4>
<ul><li>Field class names have changed slightly in v5.2.7 from `field_type-{$type}` to `acf-field-{$type}`. This change was introduced to better optimise JS performance. The previous class names can be added back in with the following filter: <a href="https://www.advancedcustomfields.com/resources/acfcompatibility/">www.advancedcustomfields.com/resources/acfcompatibility/</a></li></ul>
<h4> 3.0.0 </h4>
<ul><li>Editor is broken in WordPress 3.3</li></ul>
<h4> 2.1.4 </h4>
<ul><li>Adds post_id column back into acf_values</li></ul>
";}',
        'autoload' => 'no',
    ),
    219 => 
    array (
        'option_id' => 11142,
        'option_name' => 'wpseo_sitemap_1_cache_validator',
        'option_value' => '9DZe',
        'autoload' => 'no',
    ),
    220 => 
    array (
        'option_id' => 11143,
        'option_name' => 'wpseo_sitemap_page_cache_validator',
        'option_value' => '9DZk',
        'autoload' => 'no',
    ),
    221 => 
    array (
        'option_id' => 11144,
        'option_name' => 'wpseo_sitemap_revision_cache_validator',
        'option_value' => '9DZq',
        'autoload' => 'no',
    ),
    222 => 
    array (
        'option_id' => 11145,
        'option_name' => '_transient_timeout_yoast_i18n_wordpress-seo_en_AU',
        'option_value' => '1471649121',
        'autoload' => 'no',
    ),
    223 => 
    array (
        'option_id' => 11146,
        'option_name' => '_transient_yoast_i18n_wordpress-seo_en_AU',
    'option_value' => 'O:8:"stdClass":12:{s:2:"id";s:3:"831";s:4:"name";s:19:"English (Australia)";s:4:"slug";s:7:"default";s:10:"project_id";s:1:"1";s:6:"locale";s:5:"en-au";s:13:"current_count";i:940;s:18:"untranslated_count";i:0;s:13:"waiting_count";i:0;s:11:"fuzzy_count";i:0;s:18:"percent_translated";i:100;s:9:"wp_locale";s:5:"en_AU";s:13:"last_modified";s:19:"2016-07-29 09:28:35";}',
        'autoload' => 'no',
    ),
    224 => 
    array (
        'option_id' => 11149,
        'option_name' => '_transient_timeout_pb_backupbuddy_latest_version',
        'option_value' => '1471606033',
        'autoload' => 'no',
    ),
    225 => 
    array (
        'option_id' => 11150,
        'option_name' => '_transient_pb_backupbuddy_latest_version',
        'option_value' => 'a:2:{i:0;s:7:"7.1.5.6";i:1;s:5:"7.1.5";}',
        'autoload' => 'no',
    ),
    226 => 
    array (
        'option_id' => 11154,
        'option_name' => 'wpseo_sitemap_true_landing_page_cache_validator',
        'option_value' => '7eRxH',
        'autoload' => 'no',
    ),
    227 => 
    array (
        'option_id' => 11162,
        'option_name' => 'cpac_options_true_pagecopy__default',
        'option_value' => 'a:3:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:5:"Title";s:4:"date";s:4:"Date";}',
        'autoload' => 'yes',
    ),
    228 => 
    array (
        'option_id' => 11163,
        'option_name' => 'wpseo_sitemap_true_pagecopy_cache_validator',
        'option_value' => '6Y2Dg',
        'autoload' => 'no',
    ),
    229 => 
    array (
        'option_id' => 11164,
        'option_name' => 'wpseo_sitemap_acf-field-group_cache_validator',
        'option_value' => '7cmsH',
        'autoload' => 'no',
    ),
    230 => 
    array (
        'option_id' => 11172,
        'option_name' => 'cpac_options_true_helptext__default',
        'option_value' => 'a:3:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:5:"Title";s:4:"date";s:4:"Date";}',
        'autoload' => 'yes',
    ),
    231 => 
    array (
        'option_id' => 11173,
        'option_name' => 'wpseo_sitemap_true_helptext_cache_validator',
        'option_value' => 'sx6m',
        'autoload' => 'no',
    ),
    232 => 
    array (
        'option_id' => 11369,
        'option_name' => '_site_transient_timeout_browser_ae38344822f149cb8d9ae72dc1008414',
        'option_value' => '1473737898',
        'autoload' => 'no',
    ),
    233 => 
    array (
        'option_id' => 11370,
        'option_name' => '_site_transient_browser_ae38344822f149cb8d9ae72dc1008414',
        'option_value' => 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"48.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    234 => 
    array (
        'option_id' => 11402,
        'option_name' => 'wpseo_sitemap_acf-field_cache_validator',
        'option_value' => '7cmsJ',
        'autoload' => 'no',
    ),
    235 => 
    array (
        'option_id' => 11531,
        'option_name' => '_site_transient_timeout_browser_f05bc86c636a5ad6576799c42af187f3',
        'option_value' => '1475453001',
        'autoload' => 'no',
    ),
    236 => 
    array (
        'option_id' => 11532,
        'option_name' => '_site_transient_browser_f05bc86c636a5ad6576799c42af187f3',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"48.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    237 => 
    array (
        'option_id' => 11545,
        'option_name' => 'cpac_options_true_landing_page__default',
        'option_value' => 'a:8:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:5:"Title";s:4:"date";s:4:"Date";s:11:"wpseo-score";s:3:"SEO";s:23:"wpseo-score-readability";s:11:"Readability";s:11:"wpseo-title";s:9:"SEO Title";s:14:"wpseo-metadesc";s:10:"Meta Desc.";s:13:"wpseo-focuskw";s:8:"Focus KW";}',
        'autoload' => 'yes',
    ),
    238 => 
    array (
        'option_id' => 11558,
        'option_name' => 'cpac_options_wp-comments__default',
        'option_value' => 'a:5:{s:2:"cb";s:25:"<input type="checkbox" />";s:6:"author";s:6:"Author";s:7:"comment";s:7:"Comment";s:8:"response";s:14:"In Response To";s:4:"date";s:12:"Submitted On";}',
        'autoload' => 'yes',
    ),
    239 => 
    array (
        'option_id' => 11604,
        'option_name' => '_site_transient_timeout_available_translations',
        'option_value' => '1475145891',
        'autoload' => 'no',
    ),
    240 => 
    array (
        'option_id' => 11605,
        'option_name' => '_site_transient_available_translations',
    'option_value' => 'a:85:{s:2:"ar";a:8:{s:8:"language";s:2:"ar";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-16 18:36:09";s:12:"english_name";s:6:"Arabic";s:11:"native_name";s:14:"العربية";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/ar.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:2;s:3:"ara";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:3:"ary";a:8:{s:8:"language";s:3:"ary";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-21 10:19:10";s:12:"english_name";s:15:"Moroccan Arabic";s:11:"native_name";s:31:"العربية المغربية";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.6.1/ary.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:3;s:3:"ary";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:2:"az";a:8:{s:8:"language";s:2:"az";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-06-18 20:18:13";s:12:"english_name";s:11:"Azerbaijani";s:11:"native_name";s:16:"Azərbaycan dili";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.5.4/az.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:2;s:3:"aze";}s:7:"strings";a:1:{s:8:"continue";s:5:"Davam";}}s:3:"azb";a:8:{s:8:"language";s:3:"azb";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-11 22:42:10";s:12:"english_name";s:17:"South Azerbaijani";s:11:"native_name";s:29:"گؤنئی آذربایجان";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.2/azb.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:3;s:3:"azb";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"bg_BG";a:8:{s:8:"language";s:5:"bg_BG";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-13 13:34:55";s:12:"english_name";s:9:"Bulgarian";s:11:"native_name";s:18:"Български";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/bg_BG.zip";s:3:"iso";a:2:{i:1;s:2:"bg";i:2;s:3:"bul";}s:7:"strings";a:1:{s:8:"continue";s:12:"Напред";}}s:5:"bn_BD";a:8:{s:8:"language";s:5:"bn_BD";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-15 17:09:07";s:12:"english_name";s:7:"Bengali";s:11:"native_name";s:15:"বাংলা";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/bn_BD.zip";s:3:"iso";a:1:{i:1;s:2:"bn";}s:7:"strings";a:1:{s:8:"continue";s:23:"এগিয়ে চল.";}}s:2:"bo";a:8:{s:8:"language";s:2:"bo";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-05 09:44:12";s:12:"english_name";s:7:"Tibetan";s:11:"native_name";s:21:"བོད་སྐད";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/bo.zip";s:3:"iso";a:2:{i:1;s:2:"bo";i:2;s:3:"tib";}s:7:"strings";a:1:{s:8:"continue";s:24:"མུ་མཐུད།";}}s:5:"bs_BA";a:8:{s:8:"language";s:5:"bs_BA";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-04-19 23:16:37";s:12:"english_name";s:7:"Bosnian";s:11:"native_name";s:8:"Bosanski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.5.4/bs_BA.zip";s:3:"iso";a:2:{i:1;s:2:"bs";i:2;s:3:"bos";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:2:"ca";a:8:{s:8:"language";s:2:"ca";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-07 21:38:31";s:12:"english_name";s:7:"Catalan";s:11:"native_name";s:7:"Català";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/ca.zip";s:3:"iso";a:2:{i:1;s:2:"ca";i:2;s:3:"cat";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:3:"ceb";a:8:{s:8:"language";s:3:"ceb";s:7:"version";s:5:"4.4.3";s:7:"updated";s:19:"2016-02-16 15:34:57";s:12:"english_name";s:7:"Cebuano";s:11:"native_name";s:7:"Cebuano";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.3/ceb.zip";s:3:"iso";a:2:{i:2;s:3:"ceb";i:3;s:3:"ceb";}s:7:"strings";a:1:{s:8:"continue";s:7:"Padayun";}}s:5:"cs_CZ";a:8:{s:8:"language";s:5:"cs_CZ";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2016-02-11 18:32:36";s:12:"english_name";s:5:"Czech";s:11:"native_name";s:12:"Čeština‎";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.4.2/cs_CZ.zip";s:3:"iso";a:2:{i:1;s:2:"cs";i:2;s:3:"ces";}s:7:"strings";a:1:{s:8:"continue";s:11:"Pokračovat";}}s:2:"cy";a:8:{s:8:"language";s:2:"cy";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-27 09:08:42";s:12:"english_name";s:5:"Welsh";s:11:"native_name";s:7:"Cymraeg";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/cy.zip";s:3:"iso";a:2:{i:1;s:2:"cy";i:2;s:3:"cym";}s:7:"strings";a:1:{s:8:"continue";s:6:"Parhau";}}s:5:"da_DK";a:8:{s:8:"language";s:5:"da_DK";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-12 09:12:43";s:12:"english_name";s:6:"Danish";s:11:"native_name";s:5:"Dansk";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/da_DK.zip";s:3:"iso";a:2:{i:1;s:2:"da";i:2;s:3:"dan";}s:7:"strings";a:1:{s:8:"continue";s:12:"Forts&#230;t";}}s:14:"de_CH_informal";a:8:{s:8:"language";s:14:"de_CH_informal";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-15 12:59:43";s:12:"english_name";s:23:"(Switzerland, Informal)";s:11:"native_name";s:21:"Deutsch (Schweiz, Du)";s:7:"package";s:73:"https://downloads.wordpress.org/translation/core/4.6.1/de_CH_informal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:12:"de_DE_formal";a:8:{s:8:"language";s:12:"de_DE_formal";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-22 18:59:12";s:12:"english_name";s:15:"German (Formal)";s:11:"native_name";s:13:"Deutsch (Sie)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.6.1/de_DE_formal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:5:"de_DE";a:8:{s:8:"language";s:5:"de_DE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-17 20:12:38";s:12:"english_name";s:6:"German";s:11:"native_name";s:7:"Deutsch";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/de_DE.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:5:"de_CH";a:8:{s:8:"language";s:5:"de_CH";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-15 12:56:13";s:12:"english_name";s:20:"German (Switzerland)";s:11:"native_name";s:17:"Deutsch (Schweiz)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/de_CH.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:2:"el";a:8:{s:8:"language";s:2:"el";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-14 18:12:11";s:12:"english_name";s:5:"Greek";s:11:"native_name";s:16:"Ελληνικά";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/el.zip";s:3:"iso";a:2:{i:1;s:2:"el";i:2;s:3:"ell";}s:7:"strings";a:1:{s:8:"continue";s:16:"Συνέχεια";}}s:5:"en_ZA";a:8:{s:8:"language";s:5:"en_ZA";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-16 11:54:12";s:12:"english_name";s:22:"English (South Africa)";s:11:"native_name";s:22:"English (South Africa)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/en_ZA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_NZ";a:8:{s:8:"language";s:5:"en_NZ";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-20 07:14:07";s:12:"english_name";s:21:"English (New Zealand)";s:11:"native_name";s:21:"English (New Zealand)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/en_NZ.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_AU";a:8:{s:8:"language";s:5:"en_AU";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-12 02:18:44";s:12:"english_name";s:19:"English (Australia)";s:11:"native_name";s:19:"English (Australia)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/en_AU.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_CA";a:8:{s:8:"language";s:5:"en_CA";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-11 23:19:29";s:12:"english_name";s:16:"English (Canada)";s:11:"native_name";s:16:"English (Canada)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/en_CA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_GB";a:8:{s:8:"language";s:5:"en_GB";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-11 22:36:25";s:12:"english_name";s:12:"English (UK)";s:11:"native_name";s:12:"English (UK)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/en_GB.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:2:"eo";a:8:{s:8:"language";s:2:"eo";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-23 13:24:01";s:12:"english_name";s:9:"Esperanto";s:11:"native_name";s:9:"Esperanto";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/eo.zip";s:3:"iso";a:2:{i:1;s:2:"eo";i:2;s:3:"epo";}s:7:"strings";a:1:{s:8:"continue";s:8:"Daŭrigi";}}s:5:"es_AR";a:8:{s:8:"language";s:5:"es_AR";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-19 13:48:04";s:12:"english_name";s:19:"Spanish (Argentina)";s:11:"native_name";s:21:"Español de Argentina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_AR.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_ES";a:8:{s:8:"language";s:5:"es_ES";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-28 18:21:58";s:12:"english_name";s:15:"Spanish (Spain)";s:11:"native_name";s:8:"Español";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_ES.zip";s:3:"iso";a:1:{i:1;s:2:"es";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_PE";a:8:{s:8:"language";s:5:"es_PE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-09 09:36:22";s:12:"english_name";s:14:"Spanish (Peru)";s:11:"native_name";s:17:"Español de Perú";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_PE.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CL";a:8:{s:8:"language";s:5:"es_CL";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-17 22:11:44";s:12:"english_name";s:15:"Spanish (Chile)";s:11:"native_name";s:17:"Español de Chile";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_CL.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CO";a:8:{s:8:"language";s:5:"es_CO";s:7:"version";s:6:"4.3-RC";s:7:"updated";s:19:"2015-08-04 06:10:33";s:12:"english_name";s:18:"Spanish (Colombia)";s:11:"native_name";s:20:"Español de Colombia";s:7:"package";s:65:"https://downloads.wordpress.org/translation/core/4.3-RC/es_CO.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_GT";a:8:{s:8:"language";s:5:"es_GT";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-17 17:56:31";s:12:"english_name";s:19:"Spanish (Guatemala)";s:11:"native_name";s:21:"Español de Guatemala";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_GT.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_MX";a:8:{s:8:"language";s:5:"es_MX";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-29 15:07:52";s:12:"english_name";s:16:"Spanish (Mexico)";s:11:"native_name";s:19:"Español de México";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_MX.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_VE";a:8:{s:8:"language";s:5:"es_VE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-17 12:34:44";s:12:"english_name";s:19:"Spanish (Venezuela)";s:11:"native_name";s:21:"Español de Venezuela";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_VE.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"et";a:8:{s:8:"language";s:2:"et";s:7:"version";s:7:"4.6-rc2";s:7:"updated";s:19:"2016-08-09 06:49:25";s:12:"english_name";s:8:"Estonian";s:11:"native_name";s:5:"Eesti";s:7:"package";s:63:"https://downloads.wordpress.org/translation/core/4.6-rc2/et.zip";s:3:"iso";a:2:{i:1;s:2:"et";i:2;s:3:"est";}s:7:"strings";a:1:{s:8:"continue";s:6:"Jätka";}}s:2:"eu";a:8:{s:8:"language";s:2:"eu";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-08 19:27:09";s:12:"english_name";s:6:"Basque";s:11:"native_name";s:7:"Euskara";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/eu.zip";s:3:"iso";a:2:{i:1;s:2:"eu";i:2;s:3:"eus";}s:7:"strings";a:1:{s:8:"continue";s:8:"Jarraitu";}}s:5:"fa_IR";a:8:{s:8:"language";s:5:"fa_IR";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-16 09:07:28";s:12:"english_name";s:7:"Persian";s:11:"native_name";s:10:"فارسی";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/fa_IR.zip";s:3:"iso";a:2:{i:1;s:2:"fa";i:2;s:3:"fas";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:2:"fi";a:8:{s:8:"language";s:2:"fi";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-15 18:30:48";s:12:"english_name";s:7:"Finnish";s:11:"native_name";s:5:"Suomi";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/fi.zip";s:3:"iso";a:2:{i:1;s:2:"fi";i:2;s:3:"fin";}s:7:"strings";a:1:{s:8:"continue";s:5:"Jatka";}}s:5:"fr_CA";a:8:{s:8:"language";s:5:"fr_CA";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-15 19:02:20";s:12:"english_name";s:15:"French (Canada)";s:11:"native_name";s:19:"Français du Canada";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/fr_CA.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_FR";a:8:{s:8:"language";s:5:"fr_FR";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-22 09:07:58";s:12:"english_name";s:15:"French (France)";s:11:"native_name";s:9:"Français";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/fr_FR.zip";s:3:"iso";a:1:{i:1;s:2:"fr";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_BE";a:8:{s:8:"language";s:5:"fr_BE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-13 16:21:14";s:12:"english_name";s:16:"French (Belgium)";s:11:"native_name";s:21:"Français de Belgique";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/fr_BE.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:2:"gd";a:8:{s:8:"language";s:2:"gd";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-23 17:41:37";s:12:"english_name";s:15:"Scottish Gaelic";s:11:"native_name";s:9:"Gàidhlig";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/gd.zip";s:3:"iso";a:3:{i:1;s:2:"gd";i:2;s:3:"gla";i:3;s:3:"gla";}s:7:"strings";a:1:{s:8:"continue";s:15:"Lean air adhart";}}s:5:"gl_ES";a:8:{s:8:"language";s:5:"gl_ES";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-21 15:44:17";s:12:"english_name";s:8:"Galician";s:11:"native_name";s:6:"Galego";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/gl_ES.zip";s:3:"iso";a:2:{i:1;s:2:"gl";i:2;s:3:"glg";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"gu";a:8:{s:8:"language";s:2:"gu";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-22 06:08:05";s:12:"english_name";s:8:"Gujarati";s:11:"native_name";s:21:"ગુજરાતી";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/gu.zip";s:3:"iso";a:2:{i:1;s:2:"gu";i:2;s:3:"guj";}s:7:"strings";a:1:{s:8:"continue";s:31:"ચાલુ રાખવું";}}s:3:"haz";a:8:{s:8:"language";s:3:"haz";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-05 00:59:09";s:12:"english_name";s:8:"Hazaragi";s:11:"native_name";s:15:"هزاره گی";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.2/haz.zip";s:3:"iso";a:1:{i:3;s:3:"haz";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:5:"he_IL";a:8:{s:8:"language";s:5:"he_IL";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-25 19:56:49";s:12:"english_name";s:6:"Hebrew";s:11:"native_name";s:16:"עִבְרִית";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/he_IL.zip";s:3:"iso";a:1:{i:1;s:2:"he";}s:7:"strings";a:1:{s:8:"continue";s:8:"המשך";}}s:5:"hi_IN";a:8:{s:8:"language";s:5:"hi_IN";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-03 13:43:01";s:12:"english_name";s:5:"Hindi";s:11:"native_name";s:18:"हिन्दी";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/hi_IN.zip";s:3:"iso";a:2:{i:1;s:2:"hi";i:2;s:3:"hin";}s:7:"strings";a:1:{s:8:"continue";s:12:"जारी";}}s:2:"hr";a:8:{s:8:"language";s:2:"hr";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-07 15:12:28";s:12:"english_name";s:8:"Croatian";s:11:"native_name";s:8:"Hrvatski";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/hr.zip";s:3:"iso";a:2:{i:1;s:2:"hr";i:2;s:3:"hrv";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:5:"hu_HU";a:8:{s:8:"language";s:5:"hu_HU";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-07 19:31:42";s:12:"english_name";s:9:"Hungarian";s:11:"native_name";s:6:"Magyar";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/hu_HU.zip";s:3:"iso";a:2:{i:1;s:2:"hu";i:2;s:3:"hun";}s:7:"strings";a:1:{s:8:"continue";s:10:"Folytatás";}}s:2:"hy";a:8:{s:8:"language";s:2:"hy";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2016-02-04 07:13:54";s:12:"english_name";s:8:"Armenian";s:11:"native_name";s:14:"Հայերեն";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.4.2/hy.zip";s:3:"iso";a:2:{i:1;s:2:"hy";i:2;s:3:"hye";}s:7:"strings";a:1:{s:8:"continue";s:20:"Շարունակել";}}s:5:"id_ID";a:8:{s:8:"language";s:5:"id_ID";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-22 05:34:53";s:12:"english_name";s:10:"Indonesian";s:11:"native_name";s:16:"Bahasa Indonesia";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/id_ID.zip";s:3:"iso";a:2:{i:1;s:2:"id";i:2;s:3:"ind";}s:7:"strings";a:1:{s:8:"continue";s:9:"Lanjutkan";}}s:5:"is_IS";a:8:{s:8:"language";s:5:"is_IS";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-24 19:04:04";s:12:"english_name";s:9:"Icelandic";s:11:"native_name";s:9:"Íslenska";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/is_IS.zip";s:3:"iso";a:2:{i:1;s:2:"is";i:2;s:3:"isl";}s:7:"strings";a:1:{s:8:"continue";s:6:"Áfram";}}s:5:"it_IT";a:8:{s:8:"language";s:5:"it_IT";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-09 15:46:50";s:12:"english_name";s:7:"Italian";s:11:"native_name";s:8:"Italiano";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/it_IT.zip";s:3:"iso";a:2:{i:1;s:2:"it";i:2;s:3:"ita";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:2:"ja";a:8:{s:8:"language";s:2:"ja";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-17 17:33:07";s:12:"english_name";s:8:"Japanese";s:11:"native_name";s:9:"日本語";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/ja.zip";s:3:"iso";a:1:{i:1;s:2:"ja";}s:7:"strings";a:1:{s:8:"continue";s:9:"続ける";}}s:5:"ka_GE";a:8:{s:8:"language";s:5:"ka_GE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-29 11:51:34";s:12:"english_name";s:8:"Georgian";s:11:"native_name";s:21:"ქართული";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/ka_GE.zip";s:3:"iso";a:2:{i:1;s:2:"ka";i:2;s:3:"kat";}s:7:"strings";a:1:{s:8:"continue";s:30:"გაგრძელება";}}s:5:"ko_KR";a:8:{s:8:"language";s:5:"ko_KR";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-24 07:18:31";s:12:"english_name";s:6:"Korean";s:11:"native_name";s:9:"한국어";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/ko_KR.zip";s:3:"iso";a:2:{i:1;s:2:"ko";i:2;s:3:"kor";}s:7:"strings";a:1:{s:8:"continue";s:6:"계속";}}s:5:"lt_LT";a:8:{s:8:"language";s:5:"lt_LT";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-11 21:29:34";s:12:"english_name";s:10:"Lithuanian";s:11:"native_name";s:15:"Lietuvių kalba";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/lt_LT.zip";s:3:"iso";a:2:{i:1;s:2:"lt";i:2;s:3:"lit";}s:7:"strings";a:1:{s:8:"continue";s:6:"Tęsti";}}s:2:"lv";a:8:{s:8:"language";s:2:"lv";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-20 15:33:17";s:12:"english_name";s:7:"Latvian";s:11:"native_name";s:16:"Latviešu valoda";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/lv.zip";s:3:"iso";a:2:{i:1;s:2:"lv";i:2;s:3:"lav";}s:7:"strings";a:1:{s:8:"continue";s:9:"Turpināt";}}s:5:"mk_MK";a:8:{s:8:"language";s:5:"mk_MK";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-05-12 13:55:28";s:12:"english_name";s:10:"Macedonian";s:11:"native_name";s:31:"Македонски јазик";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.5.4/mk_MK.zip";s:3:"iso";a:2:{i:1;s:2:"mk";i:2;s:3:"mkd";}s:7:"strings";a:1:{s:8:"continue";s:16:"Продолжи";}}s:2:"mr";a:8:{s:8:"language";s:2:"mr";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-14 07:43:21";s:12:"english_name";s:7:"Marathi";s:11:"native_name";s:15:"मराठी";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/mr.zip";s:3:"iso";a:2:{i:1;s:2:"mr";i:2;s:3:"mar";}s:7:"strings";a:1:{s:8:"continue";s:25:"सुरु ठेवा";}}s:5:"ms_MY";a:8:{s:8:"language";s:5:"ms_MY";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-14 14:18:43";s:12:"english_name";s:5:"Malay";s:11:"native_name";s:13:"Bahasa Melayu";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/ms_MY.zip";s:3:"iso";a:2:{i:1;s:2:"ms";i:2;s:3:"msa";}s:7:"strings";a:1:{s:8:"continue";s:8:"Teruskan";}}s:5:"my_MM";a:8:{s:8:"language";s:5:"my_MM";s:7:"version";s:6:"4.1.13";s:7:"updated";s:19:"2015-03-26 15:57:42";s:12:"english_name";s:17:"Myanmar (Burmese)";s:11:"native_name";s:15:"ဗမာစာ";s:7:"package";s:65:"https://downloads.wordpress.org/translation/core/4.1.13/my_MM.zip";s:3:"iso";a:2:{i:1;s:2:"my";i:2;s:3:"mya";}s:7:"strings";a:1:{s:8:"continue";s:54:"ဆက်လက်လုပ်ဆောင်ပါ။";}}s:5:"nb_NO";a:8:{s:8:"language";s:5:"nb_NO";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-16 13:09:49";s:12:"english_name";s:19:"Norwegian (Bokmål)";s:11:"native_name";s:13:"Norsk bokmål";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/nb_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nb";i:2;s:3:"nob";}s:7:"strings";a:1:{s:8:"continue";s:8:"Fortsett";}}s:5:"nl_NL";a:8:{s:8:"language";s:5:"nl_NL";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-28 10:53:14";s:12:"english_name";s:5:"Dutch";s:11:"native_name";s:10:"Nederlands";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/nl_NL.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:12:"nl_NL_formal";a:8:{s:8:"language";s:12:"nl_NL_formal";s:7:"version";s:5:"4.4.3";s:7:"updated";s:19:"2016-01-20 13:35:50";s:12:"english_name";s:14:"Dutch (Formal)";s:11:"native_name";s:20:"Nederlands (Formeel)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.4.3/nl_NL_formal.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nn_NO";a:8:{s:8:"language";s:5:"nn_NO";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-27 16:24:28";s:12:"english_name";s:19:"Norwegian (Nynorsk)";s:11:"native_name";s:13:"Norsk nynorsk";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/nn_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nn";i:2;s:3:"nno";}s:7:"strings";a:1:{s:8:"continue";s:9:"Hald fram";}}s:3:"oci";a:8:{s:8:"language";s:3:"oci";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-23 13:45:11";s:12:"english_name";s:7:"Occitan";s:11:"native_name";s:7:"Occitan";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.6.1/oci.zip";s:3:"iso";a:2:{i:1;s:2:"oc";i:2;s:3:"oci";}s:7:"strings";a:1:{s:8:"continue";s:9:"Contunhar";}}s:5:"pl_PL";a:8:{s:8:"language";s:5:"pl_PL";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-22 09:54:16";s:12:"english_name";s:6:"Polish";s:11:"native_name";s:6:"Polski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/pl_PL.zip";s:3:"iso";a:2:{i:1;s:2:"pl";i:2;s:3:"pol";}s:7:"strings";a:1:{s:8:"continue";s:9:"Kontynuuj";}}s:2:"ps";a:8:{s:8:"language";s:2:"ps";s:7:"version";s:6:"4.1.13";s:7:"updated";s:19:"2015-03-29 22:19:48";s:12:"english_name";s:6:"Pashto";s:11:"native_name";s:8:"پښتو";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.1.13/ps.zip";s:3:"iso";a:2:{i:1;s:2:"ps";i:2;s:3:"pus";}s:7:"strings";a:1:{s:8:"continue";s:19:"دوام ورکړه";}}s:5:"pt_BR";a:8:{s:8:"language";s:5:"pt_BR";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-27 23:21:41";s:12:"english_name";s:19:"Portuguese (Brazil)";s:11:"native_name";s:20:"Português do Brasil";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/pt_BR.zip";s:3:"iso";a:2:{i:1;s:2:"pt";i:2;s:3:"por";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"pt_PT";a:8:{s:8:"language";s:5:"pt_PT";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-14 09:00:10";s:12:"english_name";s:21:"Portuguese (Portugal)";s:11:"native_name";s:10:"Português";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/pt_PT.zip";s:3:"iso";a:1:{i:1;s:2:"pt";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"ro_RO";a:8:{s:8:"language";s:5:"ro_RO";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-14 19:25:04";s:12:"english_name";s:8:"Romanian";s:11:"native_name";s:8:"Română";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/ro_RO.zip";s:3:"iso";a:2:{i:1;s:2:"ro";i:2;s:3:"ron";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuă";}}s:5:"ru_RU";a:8:{s:8:"language";s:5:"ru_RU";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-30 19:40:04";s:12:"english_name";s:7:"Russian";s:11:"native_name";s:14:"Русский";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/ru_RU.zip";s:3:"iso";a:2:{i:1;s:2:"ru";i:2;s:3:"rus";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продолжить";}}s:5:"sk_SK";a:8:{s:8:"language";s:5:"sk_SK";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-17 10:49:08";s:12:"english_name";s:6:"Slovak";s:11:"native_name";s:11:"Slovenčina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/sk_SK.zip";s:3:"iso";a:2:{i:1;s:2:"sk";i:2;s:3:"slk";}s:7:"strings";a:1:{s:8:"continue";s:12:"Pokračovať";}}s:5:"sl_SI";a:8:{s:8:"language";s:5:"sl_SI";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-18 16:23:26";s:12:"english_name";s:9:"Slovenian";s:11:"native_name";s:13:"Slovenščina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/sl_SI.zip";s:3:"iso";a:2:{i:1;s:2:"sl";i:2;s:3:"slv";}s:7:"strings";a:1:{s:8:"continue";s:8:"Nadaljuj";}}s:2:"sq";a:8:{s:8:"language";s:2:"sq";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-14 07:00:01";s:12:"english_name";s:8:"Albanian";s:11:"native_name";s:5:"Shqip";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/sq.zip";s:3:"iso";a:2:{i:1;s:2:"sq";i:2;s:3:"sqi";}s:7:"strings";a:1:{s:8:"continue";s:6:"Vazhdo";}}s:5:"sr_RS";a:8:{s:8:"language";s:5:"sr_RS";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-12 16:41:17";s:12:"english_name";s:7:"Serbian";s:11:"native_name";s:23:"Српски језик";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/sr_RS.zip";s:3:"iso";a:2:{i:1;s:2:"sr";i:2;s:3:"srp";}s:7:"strings";a:1:{s:8:"continue";s:14:"Настави";}}s:5:"sv_SE";a:8:{s:8:"language";s:5:"sv_SE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-29 20:20:44";s:12:"english_name";s:7:"Swedish";s:11:"native_name";s:7:"Svenska";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/sv_SE.zip";s:3:"iso";a:2:{i:1;s:2:"sv";i:2;s:3:"swe";}s:7:"strings";a:1:{s:8:"continue";s:9:"Fortsätt";}}s:3:"szl";a:8:{s:8:"language";s:3:"szl";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-24 19:58:14";s:12:"english_name";s:8:"Silesian";s:11:"native_name";s:17:"Ślōnskŏ gŏdka";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.6.1/szl.zip";s:3:"iso";a:1:{i:3;s:3:"szl";}s:7:"strings";a:1:{s:8:"continue";s:13:"Kōntynuować";}}s:2:"th";a:8:{s:8:"language";s:2:"th";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-06-30 10:22:26";s:12:"english_name";s:4:"Thai";s:11:"native_name";s:9:"ไทย";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.5.4/th.zip";s:3:"iso";a:2:{i:1;s:2:"th";i:2;s:3:"tha";}s:7:"strings";a:1:{s:8:"continue";s:15:"ต่อไป";}}s:2:"tl";a:8:{s:8:"language";s:2:"tl";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-11-27 15:51:36";s:12:"english_name";s:7:"Tagalog";s:11:"native_name";s:7:"Tagalog";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.4.2/tl.zip";s:3:"iso";a:2:{i:1;s:2:"tl";i:2;s:3:"tgl";}s:7:"strings";a:1:{s:8:"continue";s:10:"Magpatuloy";}}s:5:"tr_TR";a:8:{s:8:"language";s:5:"tr_TR";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-16 10:50:15";s:12:"english_name";s:7:"Turkish";s:11:"native_name";s:8:"Türkçe";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/tr_TR.zip";s:3:"iso";a:2:{i:1;s:2:"tr";i:2;s:3:"tur";}s:7:"strings";a:1:{s:8:"continue";s:5:"Devam";}}s:5:"ug_CN";a:8:{s:8:"language";s:5:"ug_CN";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-06-22 12:27:05";s:12:"english_name";s:6:"Uighur";s:11:"native_name";s:9:"Uyƣurqə";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.5.4/ug_CN.zip";s:3:"iso";a:2:{i:1;s:2:"ug";i:2;s:3:"uig";}s:7:"strings";a:1:{s:8:"continue";s:26:"داۋاملاشتۇرۇش";}}s:2:"uk";a:8:{s:8:"language";s:2:"uk";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-26 14:31:53";s:12:"english_name";s:9:"Ukrainian";s:11:"native_name";s:20:"Українська";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/uk.zip";s:3:"iso";a:2:{i:1;s:2:"uk";i:2;s:3:"ukr";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продовжити";}}s:2:"vi";a:8:{s:8:"language";s:2:"vi";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-09 01:01:25";s:12:"english_name";s:10:"Vietnamese";s:11:"native_name";s:14:"Tiếng Việt";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.4.2/vi.zip";s:3:"iso";a:2:{i:1;s:2:"vi";i:2;s:3:"vie";}s:7:"strings";a:1:{s:8:"continue";s:12:"Tiếp tục";}}s:5:"zh_TW";a:8:{s:8:"language";s:5:"zh_TW";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-18 13:53:15";s:12:"english_name";s:16:"Chinese (Taiwan)";s:11:"native_name";s:12:"繁體中文";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/zh_TW.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}s:5:"zh_CN";a:8:{s:8:"language";s:5:"zh_CN";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-04-17 03:29:01";s:12:"english_name";s:15:"Chinese (China)";s:11:"native_name";s:12:"简体中文";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.5.4/zh_CN.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"继续";}}}',
        'autoload' => 'no',
    ),
    241 => 
    array (
        'option_id' => 12089,
        'option_name' => '_site_transient_timeout_browser_d7ebeddeee1c10c06a3c4cf170141814',
        'option_value' => '1478474857',
        'autoload' => 'no',
    ),
    242 => 
    array (
        'option_id' => 12090,
        'option_name' => '_site_transient_browser_d7ebeddeee1c10c06a3c4cf170141814',
        'option_value' => 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"49.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    243 => 
    array (
        'option_id' => 12111,
        'option_name' => '_site_transient_timeout_browser_9e6d84ca244024e6f67980306606de60',
        'option_value' => '1478487563',
        'autoload' => 'no',
    ),
    244 => 
    array (
        'option_id' => 12112,
        'option_name' => '_site_transient_browser_9e6d84ca244024e6f67980306606de60',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"49.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    245 => 
    array (
        'option_id' => 12222,
        'option_name' => 'cpac_options_post__default',
        'option_value' => 'a:12:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:5:"Title";s:6:"author";s:6:"Author";s:10:"categories";s:10:"Categories";s:4:"tags";s:4:"Tags";s:8:"comments";s:111:"<span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span>";s:4:"date";s:4:"Date";s:11:"wpseo-score";s:3:"SEO";s:23:"wpseo-score-readability";s:11:"Readability";s:11:"wpseo-title";s:9:"SEO Title";s:14:"wpseo-metadesc";s:10:"Meta Desc.";s:13:"wpseo-focuskw";s:8:"Focus KW";}',
        'autoload' => 'yes',
    ),
    246 => 
    array (
        'option_id' => 12276,
        'option_name' => 'cpac_options_wp-users__default',
        'option_value' => 'a:6:{s:2:"cb";s:25:"<input type="checkbox" />";s:8:"username";s:8:"Username";s:4:"name";s:4:"Name";s:5:"email";s:5:"Email";s:4:"role";s:4:"Role";s:5:"posts";s:5:"Posts";}',
        'autoload' => 'yes',
    ),
    247 => 
    array (
        'option_id' => 12277,
        'option_name' => 'wpseo_sitemap_attachment_cache_validator',
        'option_value' => 'Xa5n',
        'autoload' => 'no',
    ),
    248 => 
    array (
        'option_id' => 12280,
        'option_name' => 'wpseo_sitemap_author_cache_validator',
        'option_value' => 'crCb',
        'autoload' => 'no',
    ),
    249 => 
    array (
        'option_id' => 12291,
        'option_name' => '_site_transient_timeout_browser_6c892d4501d4469861f63942e905365a',
        'option_value' => '1478825345',
        'autoload' => 'no',
    ),
    250 => 
    array (
        'option_id' => 12292,
        'option_name' => '_site_transient_browser_6c892d4501d4469861f63942e905365a',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Safari";s:7:"version";s:5:"9.1.2";s:10:"update_url";s:28:"http://www.apple.com/safari/";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/safari.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/safari.png";s:15:"current_version";s:1:"5";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    251 => 
    array (
        'option_id' => 12827,
        'option_name' => '_site_transient_timeout_browser_55ae8ef8628e0f8d24166d0eb8f0f156',
        'option_value' => '1481266675',
        'autoload' => 'no',
    ),
    252 => 
    array (
        'option_id' => 12828,
        'option_name' => '_site_transient_browser_55ae8ef8628e0f8d24166d0eb8f0f156',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"54.0.2840.98";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    253 => 
    array (
        'option_id' => 12856,
        'option_name' => '_site_transient_timeout_browser_f90f9d5b5a1bb1d6e2289490ecf74ebb',
        'option_value' => '1481358057',
        'autoload' => 'no',
    ),
    254 => 
    array (
        'option_id' => 12857,
        'option_name' => '_site_transient_browser_f90f9d5b5a1bb1d6e2289490ecf74ebb',
        'option_value' => 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"50.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    255 => 
    array (
        'option_id' => 13063,
        'option_name' => '_site_transient_timeout_browser_6a8a180f63c82a2a08549847c3e32059',
        'option_value' => '1482205763',
        'autoload' => 'no',
    ),
    256 => 
    array (
        'option_id' => 13064,
        'option_name' => '_site_transient_browser_6a8a180f63c82a2a08549847c3e32059',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"55.0.2883.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    257 => 
    array (
        'option_id' => 13088,
        'option_name' => '_site_transient_timeout_itsec_upload_dir',
        'option_value' => '1481851122',
        'autoload' => 'no',
    ),
    258 => 
    array (
        'option_id' => 13089,
        'option_name' => '_site_transient_itsec_upload_dir',
        'option_value' => 'a:6:{s:4:"path";s:72:"/home/trueserver/public_html/playz-v2/public/cms/content/uploads/2016/12";s:3:"url";s:61:"http://playz-v2.trueserver.com.au/cms/content/uploads/2016/12";s:6:"subdir";s:8:"/2016/12";s:7:"basedir";s:64:"/home/trueserver/public_html/playz-v2/public/cms/content/uploads";s:7:"baseurl";s:53:"http://playz-v2.trueserver.com.au/cms/content/uploads";s:5:"error";b:0;}',
        'autoload' => 'no',
    ),
    259 => 
    array (
        'option_id' => 13090,
        'option_name' => '_site_transient_timeout_itsec_random_version',
        'option_value' => '1481851122',
        'autoload' => 'no',
    ),
    260 => 
    array (
        'option_id' => 13091,
        'option_name' => '_site_transient_itsec_random_version',
        'option_value' => '221',
        'autoload' => 'no',
    ),
    261 => 
    array (
        'option_id' => 13113,
        'option_name' => 'itsec_free_just_activated',
        'option_value' => '1',
        'autoload' => 'no',
    ),
    262 => 
    array (
        'option_id' => 13115,
        'option_name' => 'itsec_active_modules',
        'option_value' => 'a:11:{s:9:"ban-users";b:1;s:11:"brute-force";b:1;s:6:"backup";b:0;s:19:"network-brute-force";b:0;s:16:"strong-passwords";b:0;s:16:"wordpress-tweaks";b:1;s:13:"404-detection";b:0;s:9:"away-mode";b:0;s:11:"file-change";b:0;s:3:"ssl";b:0;s:13:"system-tweaks";b:1;}',
        'autoload' => 'no',
    ),
    263 => 
    array (
        'option_id' => 13119,
        'option_name' => 'itsec-storage',
        'option_value' => 'a:12:{s:6:"global";a:27:{s:18:"notification_email";a:1:{i:0;s:27:"webmaster@trueagency.com.au";}s:12:"backup_email";a:1:{i:0;s:27:"webmaster@trueagency.com.au";}s:15:"lockout_message";s:5:"error";s:20:"user_lockout_message";s:56:"You have been locked out due to too many login attempts.";s:25:"community_lockout_message";s:77:"Your IP address has been flagged as a threat by the iThemes Security network.";s:9:"blacklist";b:1;s:15:"blacklist_count";i:3;s:16:"blacklist_period";i:7;s:19:"email_notifications";b:1;s:14:"lockout_period";i:15;s:18:"lockout_white_list";a:2:{i:0;s:14:"124.188.84.144";i:1;s:15:"203.206.162.113";}s:12:"log_rotation";i:30;s:8:"log_type";s:8:"database";s:12:"log_location";s:86:"/home/trueserver/public_html/playz-v2/public/cms/content/uploads/ithemes-security/logs";s:8:"log_info";s:20:"true-base-Wsfun3Y9MH";s:14:"allow_tracking";b:0;s:11:"write_files";b:1;s:10:"nginx_file";s:61:"/home/trueserver/public_html/playz-repo/public/cms/nginx.conf";s:24:"infinitewp_compatibility";b:0;s:11:"did_upgrade";b:0;s:9:"lock_file";b:0;s:12:"digest_email";b:1;s:14:"proxy_override";b:0;s:14:"hide_admin_bar";b:0;s:16:"show_error_codes";b:0;s:25:"show_new_dashboard_notice";b:1;s:19:"show_security_check";b:1;}s:13:"404-detection";a:4:{s:12:"check_period";i:5;s:15:"error_threshold";i:20;s:10:"white_list";a:9:{i:0;s:12:"/favicon.ico";i:1;s:11:"/robots.txt";i:2;s:21:"/apple-touch-icon.png";i:3;s:33:"/apple-touch-icon-precomposed.png";i:4;s:17:"/wp-content/cache";i:5;s:18:"/browserconfig.xml";i:6;s:16:"/crossdomain.xml";i:7;s:11:"/labels.rdf";i:8;s:27:"/trafficbasedsspsitemap.xml";}s:5:"types";a:5:{i:0;s:4:".jpg";i:1;s:5:".jpeg";i:2;s:4:".png";i:3;s:4:".gif";i:4;s:4:".css";}}s:9:"away-mode";a:7:{s:4:"type";s:5:"daily";s:5:"start";i:1478268000;s:10:"start_time";i:0;s:3:"end";i:1478376000;s:8:"end_time";i:21600;s:13:"override_type";s:0:"";s:12:"override_end";i:0;}s:9:"ban-users";a:4:{s:9:"host_list";a:0:{}s:10:"agent_list";a:0:{}s:7:"default";b:0;s:16:"enable_ban_lists";b:0;}s:11:"brute-force";a:4:{s:17:"max_attempts_host";i:5;s:17:"max_attempts_user";i:10;s:12:"check_period";i:5;s:14:"auto_ban_admin";b:0;}s:6:"backup";a:9:{s:9:"all_sites";b:0;s:6:"method";i:0;s:8:"location";s:89:"/home/trueserver/public_html/playz-v2/public/cms/content/uploads/ithemes-security/backups";s:6:"retain";i:0;s:3:"zip";b:0;s:7:"exclude";a:0:{}s:7:"enabled";b:0;s:8:"interval";i:3;s:8:"last_run";i:0;}s:11:"file-change";a:9:{s:6:"method";s:7:"exclude";s:9:"file_list";a:0:{}s:5:"types";a:6:{i:0;s:4:".jpg";i:1;s:5:".jpeg";i:2;s:4:".png";i:3;s:4:".log";i:4;s:3:".mo";i:5;s:3:".po";}s:5:"email";b:1;s:12:"notify_admin";b:1;s:5:"split";b:0;s:10:"last_chunk";b:0;s:8:"last_run";i:1481728478;s:12:"show_warning";b:0;}s:12:"hide-backend";a:6:{s:4:"slug";s:7:"wplogin";s:12:"theme_compat";b:1;s:17:"theme_compat_slug";s:9:"not_found";s:16:"post_logout_slug";s:0:"";s:7:"enabled";b:0;s:8:"register";s:15:"wp-register.php";}s:19:"network-brute-force";a:5:{s:7:"api_key";s:0:"";s:10:"api_secret";s:0:"";s:10:"enable_ban";b:0;s:13:"updates_optin";b:1;s:7:"api_nag";b:1;}s:16:"strong-passwords";a:1:{s:4:"role";s:13:"administrator";}s:13:"system-tweaks";a:8:{s:13:"protect_files";b:1;s:18:"directory_browsing";b:1;s:15:"request_methods";b:0;s:24:"suspicious_query_strings";b:0;s:22:"non_english_characters";b:0;s:16:"long_url_strings";b:0;s:17:"write_permissions";b:0;s:11:"uploads_php";b:0;}s:16:"wordpress-tweaks";a:11:{s:18:"wlwmanifest_header";b:1;s:14:"edituri_header";b:1;s:12:"comment_spam";b:0;s:11:"file_editor";b:1;s:14:"disable_xmlrpc";i:0;s:22:"allow_xmlrpc_multiauth";b:0;s:11:"safe_jquery";b:0;s:12:"login_errors";b:0;s:21:"force_unique_nicename";b:0;s:27:"disable_unused_author_pages";b:0;s:14:"jquery_version";s:0:"";}}',
        'autoload' => 'no',
    ),
    264 => 
    array (
        'option_id' => 13134,
        'option_name' => 'itsec_temp_whitelist_ip',
        'option_value' => 'a:1:{s:12:"123.2.47.240";i:1493205419;}',
        'autoload' => 'no',
    ),
    265 => 
    array (
        'option_id' => 13257,
        'option_name' => '_site_transient_timeout_browser_cb20ebbdf8ad5a426d5ed721d0677dad',
        'option_value' => '1482795493',
        'autoload' => 'no',
    ),
    266 => 
    array (
        'option_id' => 13258,
        'option_name' => '_site_transient_browser_cb20ebbdf8ad5a426d5ed721d0677dad',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"55.0.2883.95";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    267 => 
    array (
        'option_id' => 13891,
        'option_name' => '_site_transient_timeout_browser_b4cf6f5ffad32e9bafcbb208cc7c4b83',
        'option_value' => '1485748744',
        'autoload' => 'no',
    ),
    268 => 
    array (
        'option_id' => 13892,
        'option_name' => '_site_transient_browser_b4cf6f5ffad32e9bafcbb208cc7c4b83',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"50.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    269 => 
    array (
        'option_id' => 13905,
        'option_name' => '_site_transient_timeout_browser_dff177876e22ddc43470e135e8edbe87',
        'option_value' => '1485753800',
        'autoload' => 'no',
    ),
    270 => 
    array (
        'option_id' => 13906,
        'option_name' => '_site_transient_browser_dff177876e22ddc43470e135e8edbe87',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"55.0.2883.95";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    271 => 
    array (
        'option_id' => 14477,
        'option_name' => '_site_transient_timeout_browser_cc5d8203ce9b96784a0bea9c5a67de54',
        'option_value' => '1488248924',
        'autoload' => 'no',
    ),
    272 => 
    array (
        'option_id' => 14478,
        'option_name' => '_site_transient_browser_cc5d8203ce9b96784a0bea9c5a67de54',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"56.0.2924.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    273 => 
    array (
        'option_id' => 14804,
        'option_name' => '_site_transient_timeout_browser_97c50ee2ff16f6decff4e500533cc7a0',
        'option_value' => '1489364796',
        'autoload' => 'no',
    ),
    274 => 
    array (
        'option_id' => 14805,
        'option_name' => '_site_transient_browser_97c50ee2ff16f6decff4e500533cc7a0',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"51.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    275 => 
    array (
        'option_id' => 15344,
        'option_name' => '_site_transient_update_themes',
        'option_value' => 'O:8:"stdClass":4:{s:12:"last_checked";i:1511842332;s:7:"checked";a:1:{s:9:"true-base";s:3:"1.0";}s:8:"response";a:0:{}s:12:"translations";a:0:{}}',
        'autoload' => 'no',
    ),
    276 => 
    array (
        'option_id' => 15819,
        'option_name' => '_site_transient_update_core',
        'option_value' => 'O:8:"stdClass":4:{s:7:"updates";a:6:{i:0;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:63:"https://downloads.wordpress.org/release/en_AU/wordpress-4.9.zip";s:6:"locale";s:5:"en_AU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:63:"https://downloads.wordpress.org/release/en_AU/wordpress-4.9.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.9";s:7:"version";s:3:"4.9";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}i:1;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:57:"https://downloads.wordpress.org/release/wordpress-4.9.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:57:"https://downloads.wordpress.org/release/wordpress-4.9.zip";s:10:"no_content";s:68:"https://downloads.wordpress.org/release/wordpress-4.9-no-content.zip";s:11:"new_bundled";s:69:"https://downloads.wordpress.org/release/wordpress-4.9-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.9";s:7:"version";s:3:"4.9";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}i:2;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:63:"https://downloads.wordpress.org/release/en_AU/wordpress-4.9.zip";s:6:"locale";s:5:"en_AU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:63:"https://downloads.wordpress.org/release/en_AU/wordpress-4.9.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.9";s:7:"version";s:3:"4.9";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}i:3;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:65:"https://downloads.wordpress.org/release/en_AU/wordpress-4.8.3.zip";s:6:"locale";s:5:"en_AU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/en_AU/wordpress-4.8.3.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.8.3";s:7:"version";s:5:"4.8.3";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}i:4;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:65:"https://downloads.wordpress.org/release/en_AU/wordpress-4.7.7.zip";s:6:"locale";s:5:"en_AU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/en_AU/wordpress-4.7.7.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.7";s:7:"version";s:5:"4.7.7";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}i:5;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:65:"https://downloads.wordpress.org/release/en_AU/wordpress-4.6.8.zip";s:6:"locale";s:5:"en_AU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/en_AU/wordpress-4.6.8.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.6.8";s:7:"version";s:5:"4.6.8";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}}s:12:"last_checked";i:1511842324;s:15:"version_checked";s:5:"4.6.5";s:12:"translations";a:0:{}}',
        'autoload' => 'no',
    ),
    277 => 
    array (
        'option_id' => 15876,
        'option_name' => '_site_transient_timeout_browser_d4f514b1e3040b31a8de27f45ba9b6b2',
        'option_value' => '1493514754',
        'autoload' => 'no',
    ),
    278 => 
    array (
        'option_id' => 15877,
        'option_name' => '_site_transient_browser_d4f514b1e3040b31a8de27f45ba9b6b2',
        'option_value' => 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:13:"57.0.2987.133";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    279 => 
    array (
        'option_id' => 15908,
        'option_name' => '_site_transient_timeout_browser_43e3959d25637efe9b68fae476c6453e',
        'option_value' => '1493603944',
        'autoload' => 'no',
    ),
    280 => 
    array (
        'option_id' => 15909,
        'option_name' => '_site_transient_browser_43e3959d25637efe9b68fae476c6453e',
        'option_value' => 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"52.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    281 => 
    array (
        'option_id' => 15912,
        'option_name' => '_site_transient_timeout_browser_a5c86859634ee4cee5241306dae84749',
        'option_value' => '1493605125',
        'autoload' => 'no',
    ),
    282 => 
    array (
        'option_id' => 15913,
        'option_name' => '_site_transient_browser_a5c86859634ee4cee5241306dae84749',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"52.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    283 => 
    array (
        'option_id' => 15936,
        'option_name' => 'wpseo_sitemap_wpcf7_contact_form_cache_validator',
        'option_value' => '34LGm',
        'autoload' => 'no',
    ),
    284 => 
    array (
        'option_id' => 16284,
        'option_name' => '_site_transient_timeout_browser_99f372b446f72ab7e2ef37cc24163d53',
        'option_value' => '1501219295',
        'autoload' => 'no',
    ),
    285 => 
    array (
        'option_id' => 16285,
        'option_name' => '_site_transient_browser_99f372b446f72ab7e2ef37cc24163d53',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"54.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    286 => 
    array (
        'option_id' => 16415,
        'option_name' => '_site_transient_timeout_browser_cdf57348dffaa17c6bc7f1847b040f34',
        'option_value' => '1502071292',
        'autoload' => 'no',
    ),
    287 => 
    array (
        'option_id' => 16416,
        'option_name' => '_site_transient_browser_cdf57348dffaa17c6bc7f1847b040f34',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Chrome";s:7:"version";s:13:"59.0.3071.115";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    288 => 
    array (
        'option_id' => 16539,
        'option_name' => '_site_transient_timeout_browser_a315670f019232f4f59d3f49fcaa265e',
        'option_value' => '1502702580',
        'autoload' => 'no',
    ),
    289 => 
    array (
        'option_id' => 16540,
        'option_name' => '_site_transient_browser_a315670f019232f4f59d3f49fcaa265e',
        'option_value' => 'a:9:{s:8:"platform";s:9:"Macintosh";s:4:"name";s:6:"Safari";s:7:"version";s:6:"10.1.2";s:10:"update_url";s:28:"http://www.apple.com/safari/";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/safari.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/safari.png";s:15:"current_version";s:1:"5";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
        'autoload' => 'no',
    ),
    290 => 
    array (
        'option_id' => 16545,
        'option_name' => 'cpac_options_true_faqs__default',
        'option_value' => 'a:4:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:5:"Title";s:22:"taxonomy-true_faqs_tax";s:14:"FAQ Categories";s:4:"date";s:4:"Date";}',
        'autoload' => 'yes',
    ),
    291 => 
    array (
        'option_id' => 17854,
        'option_name' => '_site_transient_timeout_browser_772eca5f4a37d9286a2ed82ce127ad9b',
        'option_value' => '1508897958',
        'autoload' => 'no',
    ),
    292 => 
    array (
        'option_id' => 17855,
        'option_name' => '_site_transient_browser_772eca5f4a37d9286a2ed82ce127ad9b',
        'option_value' => 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"61.0.3163.100";s:8:"platform";s:9:"Macintosh";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}',
        'autoload' => 'no',
    ),
    293 => 
    array (
        'option_id' => 17865,
        'option_name' => 'cpac_options_wp-media__default',
        'option_value' => 'a:6:{s:2:"cb";s:25:"<input type="checkbox" />";s:5:"title";s:4:"File";s:6:"author";s:6:"Author";s:6:"parent";s:11:"Uploaded to";s:8:"comments";s:111:"<span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span>";s:4:"date";s:4:"Date";}',
        'autoload' => 'yes',
    ),
    294 => 
    array (
        'option_id' => 18043,
        'option_name' => 'wpseo_sitemap_true_faqs_cache_validator',
        'option_value' => '2oSXo',
        'autoload' => 'no',
    ),
    295 => 
    array (
        'option_id' => 18047,
        'option_name' => 'wpseo_sitemap_true_faqs_tax_cache_validator',
        'option_value' => '2oSXq',
        'autoload' => 'no',
    ),
    296 => 
    array (
        'option_id' => 18137,
        'option_name' => 'wpseo_sitemap_883_cache_validator',
        'option_value' => '79kyD',
        'autoload' => 'no',
    ),
    297 => 
    array (
        'option_id' => 18174,
        'option_name' => '_site_transient_timeout_browser_0f568b11a74d5c4fce6dae540063a05a',
        'option_value' => '1509677521',
        'autoload' => 'no',
    ),
    298 => 
    array (
        'option_id' => 18175,
        'option_name' => '_site_transient_browser_0f568b11a74d5c4fce6dae540063a05a',
        'option_value' => 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"61.0.3163.100";s:8:"platform";s:9:"Macintosh";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}',
        'autoload' => 'no',
    ),
    299 => 
    array (
        'option_id' => 18407,
        'option_name' => 'true_faqs_tax_children',
        'option_value' => 'a:0:{}',
        'autoload' => 'yes',
    ),
    300 => 
    array (
        'option_id' => 18958,
        'option_name' => '_site_transient_timeout_browser_cfc10b334006f9e0c98ecc9f59cd0ebb',
        'option_value' => '1511837517',
        'autoload' => 'no',
    ),
    301 => 
    array (
        'option_id' => 18959,
        'option_name' => '_site_transient_browser_cfc10b334006f9e0c98ecc9f59cd0ebb',
        'option_value' => 'a:10:{s:4:"name";s:6:"Safari";s:7:"version";s:4:"11.0";s:8:"platform";s:9:"Macintosh";s:10:"update_url";s:29:"https://www.apple.com/safari/";s:7:"img_src";s:43:"http://s.w.org/images/browsers/safari.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/safari.png?1";s:15:"current_version";s:2:"11";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}',
        'autoload' => 'no',
    ),
    302 => 
    array (
        'option_id' => 18967,
        'option_name' => '_site_transient_timeout_browser_6cd77015ec4a62e4fdace07d0b0a8f84',
        'option_value' => '1511841762',
        'autoload' => 'no',
    ),
    303 => 
    array (
        'option_id' => 18968,
        'option_name' => '_site_transient_browser_6cd77015ec4a62e4fdace07d0b0a8f84',
        'option_value' => 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:12:"62.0.3202.94";s:8:"platform";s:9:"Macintosh";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}',
        'autoload' => 'no',
    ),
    304 => 
    array (
        'option_id' => 19111,
        'option_name' => '_transient_timeout_yst_sm_1_1:DFKb_9DZe',
        'option_value' => '1511745062',
        'autoload' => 'no',
    ),
    305 => 
    array (
        'option_id' => 19112,
        'option_name' => '_transient_yst_sm_1_1:DFKb_9DZe',
        'option_value' => 'C:24:"WPSEO_Sitemap_Cache_Data":680:{a:2:{s:6:"status";s:2:"ok";s:3:"xml";s:633:"<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<sitemap>
<loc>http://staging.playz.com.au/cms/page-sitemap.xml</loc>
<lastmod>2017-11-21T16:26:47+11:00</lastmod>
</sitemap>
<sitemap>
<loc>http://staging.playz.com.au/cms/true_landing_page-sitemap.xml</loc>
<lastmod>2015-05-12T13:46:49+10:00</lastmod>
</sitemap>
<sitemap>
<loc>http://staging.playz.com.au/cms/true_faqs_tax-sitemap.xml</loc>
</sitemap>
<sitemap>
<loc>http://staging.playz.com.au/cms/activities-sitemap1.xml</loc>
<lastmod>2017-11-03 14:28:19</lastmod>
</sitemap></sitemapindex>";}}',
        'autoload' => 'no',
    ),
    306 => 
    array (
        'option_id' => 19130,
        'option_name' => '_transient_timeout_yst_sm_true_landing_page_1:DFKb_7eRxH',
        'option_value' => '1511824475',
        'autoload' => 'no',
    ),
    307 => 
    array (
        'option_id' => 19131,
        'option_name' => '_transient_yst_sm_true_landing_page_1:DFKb_7eRxH',
        'option_value' => 'C:24:"WPSEO_Sitemap_Cache_Data":468:{a:2:{s:6:"status";s:2:"ok";s:3:"xml";s:421:"<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>http://staging.playz.com.au/cms/l/300/</loc>
<lastmod>2015-05-12T13:46:49+10:00</lastmod>
</url>
</urlset>";}}',
        'autoload' => 'no',
    ),
    308 => 
    array (
        'option_id' => 19149,
        'option_name' => '_transient_timeout_pb_backupbuddy_avail_zip_methods',
        'option_value' => '1511857288',
        'autoload' => 'no',
    ),
    309 => 
    array (
        'option_id' => 19150,
        'option_name' => '_transient_pb_backupbuddy_avail_zip_methods',
        'option_value' => 'a:3:{s:7:"methods";a:2:{i:0;s:10:"ziparchive";i:1;s:6:"pclzip";}s:7:"details";a:2:{s:10:"ziparchive";a:2:{s:4:"attr";a:10:{s:4:"name";s:17:"ZipArchive Method";s:13:"compatibility";b:0;s:10:"is_checker";b:1;s:9:"is_lister";b:1;s:11:"is_archiver";b:0;s:13:"is_unarchiver";b:1;s:12:"is_commenter";b:1;s:9:"is_zipper";b:1;s:11:"is_unzipper";b:1;s:12:"is_extractor";b:1;}s:5:"param";a:0:{}}s:6:"pclzip";a:2:{s:4:"attr";a:10:{s:4:"name";s:13:"PclZip Method";s:13:"compatibility";b:1;s:10:"is_checker";b:1;s:9:"is_lister";b:1;s:11:"is_archiver";b:1;s:13:"is_unarchiver";b:1;s:12:"is_commenter";b:1;s:9:"is_zipper";b:1;s:11:"is_unzipper";b:1;s:12:"is_extractor";b:1;}s:5:"param";a:0:{}}}s:7:"control";a:1:{s:9:"signature";s:32:"6926003a900138653fa7601323bf5cb2";}}',
        'autoload' => 'no',
    ),
    310 => 
    array (
        'option_id' => 19151,
        'option_name' => '_site_transient_timeout_itsec_wp_upload_dir',
        'option_value' => '1511911488',
        'autoload' => 'no',
    ),
    311 => 
    array (
        'option_id' => 19152,
        'option_name' => '_site_transient_itsec_wp_upload_dir',
        'option_value' => 'a:6:{s:4:"path";s:59:"/home/playz/staging_html/public/cms/content/uploads/2017/11";s:3:"url";s:56:"https://staging.playz.com.au/cms/content/uploads/2017/11";s:6:"subdir";s:8:"/2017/11";s:7:"basedir";s:51:"/home/playz/staging_html/public/cms/content/uploads";s:7:"baseurl";s:48:"https://staging.playz.com.au/cms/content/uploads";s:5:"error";b:0;}',
        'autoload' => 'no',
    ),
    312 => 
    array (
        'option_id' => 19157,
        'option_name' => '_transient_timeout_pb_backupbuddy_no_new_backup_error',
        'option_value' => '1511927697',
        'autoload' => 'no',
    ),
    313 => 
    array (
        'option_id' => 19158,
        'option_name' => '_transient_pb_backupbuddy_no_new_backup_error',
        'option_value' => '1511841297',
        'autoload' => 'no',
    ),
    314 => 
    array (
        'option_id' => 19160,
        'option_name' => '_site_transient_timeout_theme_roots',
        'option_value' => '1511844120',
        'autoload' => 'no',
    ),
    315 => 
    array (
        'option_id' => 19161,
        'option_name' => '_site_transient_theme_roots',
        'option_value' => 'a:1:{s:9:"true-base";s:7:"/themes";}',
        'autoload' => 'no',
    ),
    316 => 
    array (
        'option_id' => 19162,
        'option_name' => '_transient_timeout_acf_get_remote_plugin_info',
        'option_value' => '1511928721',
        'autoload' => 'no',
    ),
    317 => 
    array (
        'option_id' => 19163,
        'option_name' => '_transient_acf_get_remote_plugin_info',
    'option_value' => 'a:12:{s:4:"name";s:26:"Advanced Custom Fields PRO";s:4:"slug";s:26:"advanced-custom-fields-pro";s:8:"homepage";s:37:"https://www.advancedcustomfields.com/";s:7:"version";s:5:"5.6.6";s:6:"author";s:13:"Elliot Condon";s:10:"author_url";s:28:"http://www.elliotcondon.com/";s:12:"contributors";s:12:"elliotcondon";s:8:"requires";s:5:"3.6.0";s:6:"tested";s:5:"4.9.0";s:6:"tagged";s:61:"acf, advanced, custom, field, fields, form, repeater, content";s:9:"changelog";s:838:"<h4>5.6.6</h4><ul><li>Accordion field: Added new field type</li><li>Tab field: Added logic to remember active tabs</li><li>WYSIWYG field: Fixed JS error in quicktags initialization</li><li>Core: Fixed issue preventing conditional logic for menu item fields</li><li>Core: Fixed issue preventing JS initialization for newly added menu items.</li><li>Core: Allow whitespace in input value (previously trimmed)</li><li>Core: Minor fixes and improvements</li><li>Language: Updated Italian translation - thanks to Davide Pantè</li><li>Language: Updated Brazilian Portuguese translation - thanks to Rafael Ribeiro</li><li>Language: Updated Dutch translation - thanks to Derk Oosterveld</li><li>Language: Updated Portuguese translation - thanks to Pedro Mendonça</li><li>Language: Updated Persian translation - thanks to Kamel Kimiaei</li></ul>";s:14:"upgrade_notice";s:0:"";}',
        'autoload' => 'no',
    ),
    318 => 
    array (
        'option_id' => 19165,
        'option_name' => '_site_transient_update_plugins',
        'option_value' => 'O:8:"stdClass":4:{s:12:"last_checked";i:1511842329;s:8:"response";a:7:{s:51:"codepress-admin-columns/codepress-admin-columns.php";O:8:"stdClass":11:{s:2:"id";s:37:"w.org/plugins/codepress-admin-columns";s:4:"slug";s:23:"codepress-admin-columns";s:6:"plugin";s:51:"codepress-admin-columns/codepress-admin-columns.php";s:11:"new_version";s:5:"3.0.5";s:3:"url";s:54:"https://wordpress.org/plugins/codepress-admin-columns/";s:7:"package";s:72:"https://downloads.wordpress.org/plugin/codepress-admin-columns.3.0.5.zip";s:5:"icons";a:4:{s:2:"1x";s:76:"https://ps.w.org/codepress-admin-columns/assets/icon-128x128.png?rev=1521754";s:2:"2x";s:76:"https://ps.w.org/codepress-admin-columns/assets/icon-256x256.png?rev=1521754";s:3:"svg";s:68:"https://ps.w.org/codepress-admin-columns/assets/icon.svg?rev=1521754";s:7:"default";s:68:"https://ps.w.org/codepress-admin-columns/assets/icon.svg?rev=1521754";}s:7:"banners";a:3:{s:2:"2x";s:79:"https://ps.w.org/codepress-admin-columns/assets/banner-1544x500.png?rev=1220017";s:2:"1x";s:78:"https://ps.w.org/codepress-admin-columns/assets/banner-772x250.png?rev=1220017";s:7:"default";s:79:"https://ps.w.org/codepress-admin-columns/assets/banner-1544x500.png?rev=1220017";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:5:"4.8.3";s:13:"compatibility";O:8:"stdClass":0:{}}s:36:"contact-form-7-honeypot/honeypot.php";O:8:"stdClass":11:{s:2:"id";s:37:"w.org/plugins/contact-form-7-honeypot";s:4:"slug";s:23:"contact-form-7-honeypot";s:6:"plugin";s:36:"contact-form-7-honeypot/honeypot.php";s:11:"new_version";s:4:"1.12";s:3:"url";s:54:"https://wordpress.org/plugins/contact-form-7-honeypot/";s:7:"package";s:71:"https://downloads.wordpress.org/plugin/contact-form-7-honeypot.1.12.zip";s:5:"icons";a:3:{s:2:"1x";s:76:"https://ps.w.org/contact-form-7-honeypot/assets/icon-128x128.jpg?rev=1017552";s:2:"2x";s:76:"https://ps.w.org/contact-form-7-honeypot/assets/icon-256x256.jpg?rev=1017552";s:7:"default";s:76:"https://ps.w.org/contact-form-7-honeypot/assets/icon-256x256.jpg?rev=1017552";}s:7:"banners";a:2:{s:2:"1x";s:77:"https://ps.w.org/contact-form-7-honeypot/assets/banner-772x250.jpg?rev=870964";s:7:"default";s:77:"https://ps.w.org/contact-form-7-honeypot/assets/banner-772x250.jpg?rev=870964";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:5:"4.8.3";s:13:"compatibility";O:8:"stdClass":0:{}}s:33:"duplicate-post/duplicate-post.php";O:8:"stdClass":12:{s:2:"id";s:28:"w.org/plugins/duplicate-post";s:4:"slug";s:14:"duplicate-post";s:6:"plugin";s:33:"duplicate-post/duplicate-post.php";s:11:"new_version";s:5:"3.2.1";s:3:"url";s:45:"https://wordpress.org/plugins/duplicate-post/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/duplicate-post.3.2.1.zip";s:5:"icons";a:3:{s:2:"1x";s:67:"https://ps.w.org/duplicate-post/assets/icon-128x128.png?rev=1612753";s:2:"2x";s:67:"https://ps.w.org/duplicate-post/assets/icon-256x256.png?rev=1612753";s:7:"default";s:67:"https://ps.w.org/duplicate-post/assets/icon-256x256.png?rev=1612753";}s:7:"banners";a:2:{s:2:"1x";s:69:"https://ps.w.org/duplicate-post/assets/banner-772x250.png?rev=1612986";s:7:"default";s:69:"https://ps.w.org/duplicate-post/assets/banner-772x250.png?rev=1612986";}s:11:"banners_rtl";a:0:{}s:14:"upgrade_notice";s:58:"<p>Fixes some problems with Multisite, WPML, revisions</p>";s:6:"tested";s:3:"4.9";s:13:"compatibility";O:8:"stdClass":0:{}}s:45:"enable-media-replace/enable-media-replace.php";O:8:"stdClass":11:{s:2:"id";s:34:"w.org/plugins/enable-media-replace";s:4:"slug";s:20:"enable-media-replace";s:6:"plugin";s:45:"enable-media-replace/enable-media-replace.php";s:11:"new_version";s:5:"3.1.1";s:3:"url";s:51:"https://wordpress.org/plugins/enable-media-replace/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/enable-media-replace.zip";s:5:"icons";a:3:{s:2:"1x";s:73:"https://ps.w.org/enable-media-replace/assets/icon-128x128.png?rev=1702418";s:2:"2x";s:73:"https://ps.w.org/enable-media-replace/assets/icon-256x256.png?rev=1702418";s:7:"default";s:73:"https://ps.w.org/enable-media-replace/assets/icon-256x256.png?rev=1702418";}s:7:"banners";a:3:{s:2:"2x";s:76:"https://ps.w.org/enable-media-replace/assets/banner-1544x500.jpg?rev=1702418";s:2:"1x";s:75:"https://ps.w.org/enable-media-replace/assets/banner-772x250.jpg?rev=1702418";s:7:"default";s:76:"https://ps.w.org/enable-media-replace/assets/banner-1544x500.jpg?rev=1702418";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:5:"4.8.3";s:13:"compatibility";O:8:"stdClass":0:{}}s:41:"better-wp-security/better-wp-security.php";O:8:"stdClass":12:{s:2:"id";s:32:"w.org/plugins/better-wp-security";s:4:"slug";s:18:"better-wp-security";s:6:"plugin";s:41:"better-wp-security/better-wp-security.php";s:11:"new_version";s:5:"6.7.0";s:3:"url";s:49:"https://wordpress.org/plugins/better-wp-security/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/better-wp-security.6.7.0.zip";s:5:"icons";a:4:{s:2:"1x";s:70:"https://ps.w.org/better-wp-security/assets/icon-128x128.jpg?rev=969999";s:2:"2x";s:70:"https://ps.w.org/better-wp-security/assets/icon-256x256.jpg?rev=969999";s:3:"svg";s:62:"https://ps.w.org/better-wp-security/assets/icon.svg?rev=970042";s:7:"default";s:62:"https://ps.w.org/better-wp-security/assets/icon.svg?rev=970042";}s:7:"banners";a:2:{s:2:"1x";s:72:"https://ps.w.org/better-wp-security/assets/banner-772x250.png?rev=881897";s:7:"default";s:72:"https://ps.w.org/better-wp-security/assets/banner-772x250.png?rev=881897";}s:11:"banners_rtl";a:0:{}s:14:"upgrade_notice";s:83:"<p>Version 6.7.0 contains important bug fixes. It is recommended for all users.</p>";s:6:"tested";s:3:"4.9";s:13:"compatibility";O:8:"stdClass":0:{}}s:24:"wordpress-seo/wp-seo.php";O:8:"stdClass":11:{s:2:"id";s:27:"w.org/plugins/wordpress-seo";s:4:"slug";s:13:"wordpress-seo";s:6:"plugin";s:24:"wordpress-seo/wp-seo.php";s:11:"new_version";s:3:"5.8";s:3:"url";s:44:"https://wordpress.org/plugins/wordpress-seo/";s:7:"package";s:60:"https://downloads.wordpress.org/plugin/wordpress-seo.5.8.zip";s:5:"icons";a:4:{s:2:"1x";s:66:"https://ps.w.org/wordpress-seo/assets/icon-128x128.png?rev=1550389";s:2:"2x";s:66:"https://ps.w.org/wordpress-seo/assets/icon-256x256.png?rev=1550389";s:3:"svg";s:58:"https://ps.w.org/wordpress-seo/assets/icon.svg?rev=1203032";s:7:"default";s:58:"https://ps.w.org/wordpress-seo/assets/icon.svg?rev=1203032";}s:7:"banners";a:3:{s:2:"2x";s:69:"https://ps.w.org/wordpress-seo/assets/banner-1544x500.png?rev=1695112";s:2:"1x";s:68:"https://ps.w.org/wordpress-seo/assets/banner-772x250.png?rev=1695112";s:7:"default";s:69:"https://ps.w.org/wordpress-seo/assets/banner-1544x500.png?rev=1695112";}s:11:"banners_rtl";a:3:{s:2:"2x";s:73:"https://ps.w.org/wordpress-seo/assets/banner-1544x500-rtl.png?rev=1695112";s:2:"1x";s:72:"https://ps.w.org/wordpress-seo/assets/banner-772x250-rtl.png?rev=1695112";s:7:"default";s:73:"https://ps.w.org/wordpress-seo/assets/banner-1544x500-rtl.png?rev=1695112";}s:6:"tested";s:3:"4.9";s:13:"compatibility";O:8:"stdClass":0:{}}s:34:"advanced-custom-fields-pro/acf.php";O:8:"stdClass":5:{s:4:"slug";s:26:"advanced-custom-fields-pro";s:6:"plugin";s:34:"advanced-custom-fields-pro/acf.php";s:11:"new_version";s:5:"5.6.6";s:3:"url";s:37:"https://www.advancedcustomfields.com/";s:7:"package";s:0:"";}}s:12:"translations";a:0:{}s:9:"no_update";a:3:{s:36:"contact-form-7/wp-contact-form-7.php";O:8:"stdClass":11:{s:2:"id";s:28:"w.org/plugins/contact-form-7";s:4:"slug";s:14:"contact-form-7";s:6:"plugin";s:36:"contact-form-7/wp-contact-form-7.php";s:11:"new_version";s:5:"4.9.1";s:3:"url";s:45:"https://wordpress.org/plugins/contact-form-7/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/contact-form-7.4.9.1.zip";s:5:"icons";a:3:{s:2:"1x";s:66:"https://ps.w.org/contact-form-7/assets/icon-128x128.png?rev=984007";s:2:"2x";s:66:"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007";s:7:"default";s:66:"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007";}s:7:"banners";a:3:{s:2:"2x";s:69:"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901";s:2:"1x";s:68:"https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427";s:7:"default";s:69:"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:3:"4.9";s:13:"compatibility";a:0:{}}s:59:"contact-form-7-leads-tracking/wpshore_cf7_lead_tracking.php";O:8:"stdClass":9:{s:2:"id";s:43:"w.org/plugins/contact-form-7-leads-tracking";s:4:"slug";s:29:"contact-form-7-leads-tracking";s:6:"plugin";s:59:"contact-form-7-leads-tracking/wpshore_cf7_lead_tracking.php";s:11:"new_version";s:3:"1.0";s:3:"url";s:60:"https://wordpress.org/plugins/contact-form-7-leads-tracking/";s:7:"package";s:76:"https://downloads.wordpress.org/plugin/contact-form-7-leads-tracking.1.0.zip";s:5:"icons";a:0:{}s:7:"banners";a:0:{}s:11:"banners_rtl";a:0:{}}s:41:"wordpress-importer/wordpress-importer.php";O:8:"stdClass":9:{s:2:"id";s:32:"w.org/plugins/wordpress-importer";s:4:"slug";s:18:"wordpress-importer";s:6:"plugin";s:41:"wordpress-importer/wordpress-importer.php";s:11:"new_version";s:5:"0.6.3";s:3:"url";s:49:"https://wordpress.org/plugins/wordpress-importer/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/wordpress-importer.0.6.3.zip";s:5:"icons";a:0:{}s:7:"banners";a:2:{s:2:"1x";s:72:"https://ps.w.org/wordpress-importer/assets/banner-772x250.png?rev=547654";s:7:"default";s:72:"https://ps.w.org/wordpress-importer/assets/banner-772x250.png?rev=547654";}s:11:"banners_rtl";a:0:{}}}}',
        'autoload' => 'no',
    ),
));
        
        
    }
}