<?php

use Illuminate\Database\Seeder;

class TrUsermetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_usermeta')->delete();
        
        \DB::table('tr_usermeta')->insert(array (
            0 => 
            array (
                'umeta_id' => 1,
                'user_id' => 1,
                'meta_key' => 'first_name',
                'meta_value' => '',
            ),
            1 => 
            array (
                'umeta_id' => 2,
                'user_id' => 1,
                'meta_key' => 'last_name',
                'meta_value' => '',
            ),
            2 => 
            array (
                'umeta_id' => 3,
                'user_id' => 1,
                'meta_key' => 'nickname',
                'meta_value' => 'True Agency',
            ),
            3 => 
            array (
                'umeta_id' => 4,
                'user_id' => 1,
                'meta_key' => 'description',
                'meta_value' => '',
            ),
            4 => 
            array (
                'umeta_id' => 5,
                'user_id' => 1,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),
            5 => 
            array (
                'umeta_id' => 6,
                'user_id' => 1,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),
            6 => 
            array (
                'umeta_id' => 7,
                'user_id' => 1,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),
            7 => 
            array (
                'umeta_id' => 8,
                'user_id' => 1,
                'meta_key' => 'use_ssl',
                'meta_value' => '0',
            ),
            8 => 
            array (
                'umeta_id' => 9,
                'user_id' => 1,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),
            9 => 
            array (
                'umeta_id' => 10,
                'user_id' => 1,
                'meta_key' => 'tr_capabilities',
                'meta_value' => 'a:1:{s:13:"administrator";b:1;}',
            ),
            10 => 
            array (
                'umeta_id' => 11,
                'user_id' => 1,
                'meta_key' => 'tr_user_level',
                'meta_value' => '10',
            ),
            11 => 
            array (
                'umeta_id' => 12,
                'user_id' => 1,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => 'wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media,wp360_revisions,wp360_locks',
            ),
            12 => 
            array (
                'umeta_id' => 13,
                'user_id' => 1,
                'meta_key' => 'show_welcome_panel',
                'meta_value' => '0',
            ),
            13 => 
            array (
                'umeta_id' => 14,
                'user_id' => 1,
                'meta_key' => 'tr_dashboard_quick_press_last_post_id',
                'meta_value' => '19',
            ),
            14 => 
            array (
                'umeta_id' => 15,
                'user_id' => 1,
                'meta_key' => 'closedpostboxes_page',
                'meta_value' => 'a:1:{i:0;s:10:"wpseo_meta";}',
            ),
            15 => 
            array (
                'umeta_id' => 16,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_page',
                'meta_value' => 'a:30:{i:0;s:12:"postimagediv";i:1;s:23:"acf-group_5403de5cdd5f4";i:2;s:23:"acf-group_5456f850c8fef";i:3;s:23:"acf-group_54040af62d753";i:4;s:23:"acf-group_541a3cc82beeb";i:5;s:23:"acf-group_5403f05057688";i:6;s:23:"acf-group_57551651e7902";i:7;s:23:"acf-group_53fab282b49d2";i:8;s:23:"acf-group_547be44758b83";i:9;s:23:"acf-group_552db08f517c6";i:10;s:23:"acf-group_57ce482294695";i:11;s:23:"acf-group_53ed91788d70e";i:12;s:23:"acf-group_57997c03a9490";i:13;s:23:"acf-group_57999aa2e68f0";i:14;s:23:"acf-group_53fd6c780a8c4";i:15;s:23:"acf-group_575522e3b6783";i:16;s:23:"acf-group_575a31c94135c";i:17;s:23:"acf-group_53fac08362088";i:18;s:23:"acf-group_5555531263166";i:19;s:23:"acf-group_541693159897d";i:20;s:23:"acf-group_54cb028f22163";i:21;s:23:"acf-group_55c00331e6ed5";i:22;s:23:"acf-group_54cf1c64a4604";i:23;s:23:"acf-group_54068349cba7a";i:24;s:12:"revisionsdiv";i:25;s:10:"postcustom";i:26;s:16:"commentstatusdiv";i:27;s:11:"commentsdiv";i:28;s:7:"slugdiv";i:29;s:9:"authordiv";}',
            ),
            16 => 
            array (
                'umeta_id' => 17,
                'user_id' => 1,
                'meta_key' => 'manageedit-pagecolumnshidden',
                'meta_value' => 'a:8:{i:0;s:11:"wpseo-score";i:1;s:11:"wpseo-title";i:2;s:14:"wpseo-metadesc";i:3;s:13:"wpseo-focuskw";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";}',
            ),
            17 => 
            array (
                'umeta_id' => 18,
                'user_id' => 1,
                'meta_key' => 'edit_page_per_page',
                'meta_value' => '20',
            ),
            18 => 
            array (
                'umeta_id' => 19,
                'user_id' => 1,
                'meta_key' => 'manageedit-postcolumnshidden',
                'meta_value' => 'a:8:{i:0;s:11:"wpseo-score";i:1;s:11:"wpseo-title";i:2;s:14:"wpseo-metadesc";i:3;s:13:"wpseo-focuskw";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";}',
            ),
            19 => 
            array (
                'umeta_id' => 20,
                'user_id' => 1,
                'meta_key' => 'edit_post_per_page',
                'meta_value' => '20',
            ),
            20 => 
            array (
                'umeta_id' => 21,
                'user_id' => 1,
                'meta_key' => 'wpseo_title',
                'meta_value' => '',
            ),
            21 => 
            array (
                'umeta_id' => 22,
                'user_id' => 1,
                'meta_key' => 'wpseo_metadesc',
                'meta_value' => '',
            ),
            22 => 
            array (
                'umeta_id' => 23,
                'user_id' => 1,
                'meta_key' => 'wpseo_metakey',
                'meta_value' => '',
            ),
            23 => 
            array (
                'umeta_id' => 24,
                'user_id' => 1,
                'meta_key' => '_yoast_wpseo_profile_updated',
                'meta_value' => '1408078874',
            ),
            24 => 
            array (
                'umeta_id' => 25,
                'user_id' => 1,
                'meta_key' => 'googleplus',
                'meta_value' => '',
            ),
            25 => 
            array (
                'umeta_id' => 26,
                'user_id' => 1,
                'meta_key' => 'twitter',
                'meta_value' => '',
            ),
            26 => 
            array (
                'umeta_id' => 27,
                'user_id' => 1,
                'meta_key' => 'facebook',
                'meta_value' => '',
            ),
            27 => 
            array (
                'umeta_id' => 28,
                'user_id' => 1,
                'meta_key' => 'closedpostboxes_acf',
                'meta_value' => 'a:0:{}',
            ),
            28 => 
            array (
                'umeta_id' => 29,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_acf',
                'meta_value' => 'a:1:{i:0;s:7:"slugdiv";}',
            ),
            29 => 
            array (
                'umeta_id' => 30,
                'user_id' => 1,
                'meta_key' => 'closedpostboxes_dashboard',
                'meta_value' => 'a:0:{}',
            ),
            30 => 
            array (
                'umeta_id' => 31,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_dashboard',
                'meta_value' => 'a:0:{}',
            ),
            31 => 
            array (
                'umeta_id' => 32,
                'user_id' => 1,
                'meta_key' => 'closedpostboxes_acf-field-group',
                'meta_value' => 'a:0:{}',
            ),
            32 => 
            array (
                'umeta_id' => 33,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_acf-field-group',
                'meta_value' => 'a:1:{i:0;s:7:"slugdiv";}',
            ),
            33 => 
            array (
                'umeta_id' => 34,
                'user_id' => 1,
                'meta_key' => 'tr_user-settings',
                'meta_value' => 'libraryContent=browse&hidetb=0&editor=tinymce',
            ),
            34 => 
            array (
                'umeta_id' => 35,
                'user_id' => 1,
                'meta_key' => 'tr_user-settings-time',
                'meta_value' => '1478072253',
            ),
            35 => 
            array (
                'umeta_id' => 36,
                'user_id' => 1,
                'meta_key' => 'managenav-menuscolumnshidden',
                'meta_value' => 'a:4:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";}',
            ),
            36 => 
            array (
                'umeta_id' => 37,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_nav-menus',
                'meta_value' => 'a:3:{i:0;s:8:"add-post";i:1;s:12:"add-post_tag";i:2;s:17:"add-true_faqs_tax";}',
            ),
            37 => 
            array (
                'umeta_id' => 38,
                'user_id' => 1,
                'meta_key' => 'nav_menu_recently_edited',
                'meta_value' => '4',
            ),
            38 => 
            array (
                'umeta_id' => 39,
                'user_id' => 1,
                'meta_key' => 'session_tokens',
            'meta_value' => 'a:3:{s:64:"96f3c645ec480b2972a158e21c104d0224cac55419d4b48409117c3b0612b94a";a:4:{s:10:"expiration";i:1493082753;s:2:"ip";s:14:"118.127.116.74";s:2:"ua";s:109:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36";s:5:"login";i:1492909953;}s:64:"00a67c0420c4061a1b86c2a00100cf6435272f1559f69ff7e12374ece8ab8f00";a:4:{s:10:"expiration";i:1493171943;s:2:"ip";s:14:"118.127.116.74";s:2:"ua";s:72:"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";s:5:"login";i:1492999143;}s:64:"6b0db64c6ec26471546e5cb051a6acb4a84f9b4bb7b084cfa6f44fca34130480";a:4:{s:10:"expiration";i:1494209924;s:2:"ip";s:14:"118.127.116.74";s:2:"ua";s:82:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:52.0) Gecko/20100101 Firefox/52.0";s:5:"login";i:1493000324;}}',
            ),
            39 => 
            array (
                'umeta_id' => 40,
                'user_id' => 2,
                'meta_key' => 'nickname',
                'meta_value' => 'playz',
            ),
            40 => 
            array (
                'umeta_id' => 41,
                'user_id' => 2,
                'meta_key' => 'first_name',
                'meta_value' => 'Jeff',
            ),
            41 => 
            array (
                'umeta_id' => 42,
                'user_id' => 2,
                'meta_key' => 'last_name',
                'meta_value' => '',
            ),
            42 => 
            array (
                'umeta_id' => 43,
                'user_id' => 2,
                'meta_key' => 'description',
                'meta_value' => '',
            ),
            43 => 
            array (
                'umeta_id' => 44,
                'user_id' => 2,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),
            44 => 
            array (
                'umeta_id' => 45,
                'user_id' => 2,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),
            45 => 
            array (
                'umeta_id' => 46,
                'user_id' => 2,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),
            46 => 
            array (
                'umeta_id' => 47,
                'user_id' => 2,
                'meta_key' => 'use_ssl',
                'meta_value' => '0',
            ),
            47 => 
            array (
                'umeta_id' => 48,
                'user_id' => 2,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),
            48 => 
            array (
                'umeta_id' => 49,
                'user_id' => 2,
                'meta_key' => 'tr_capabilities',
                'meta_value' => 'a:1:{s:6:"editor";b:1;}',
            ),
            49 => 
            array (
                'umeta_id' => 50,
                'user_id' => 2,
                'meta_key' => 'tr_user_level',
                'meta_value' => '7',
            ),
            50 => 
            array (
                'umeta_id' => 51,
                'user_id' => 2,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => 'wp350_media,wp360_revisions,wp360_locks,wp390_widgets',
            ),
            51 => 
            array (
                'umeta_id' => 52,
                'user_id' => 2,
                'meta_key' => 'wpseo_title',
                'meta_value' => '',
            ),
            52 => 
            array (
                'umeta_id' => 53,
                'user_id' => 2,
                'meta_key' => 'wpseo_metadesc',
                'meta_value' => '',
            ),
            53 => 
            array (
                'umeta_id' => 54,
                'user_id' => 2,
                'meta_key' => 'wpseo_metakey',
                'meta_value' => '',
            ),
            54 => 
            array (
                'umeta_id' => 55,
                'user_id' => 2,
                'meta_key' => 'wpseo_excludeauthorsitemap',
                'meta_value' => '',
            ),
            55 => 
            array (
                'umeta_id' => 56,
                'user_id' => 2,
                'meta_key' => '_yoast_wpseo_profile_updated',
                'meta_value' => '1478220195',
            ),
            56 => 
            array (
                'umeta_id' => 57,
                'user_id' => 2,
                'meta_key' => 'googleplus',
                'meta_value' => '',
            ),
            57 => 
            array (
                'umeta_id' => 58,
                'user_id' => 2,
                'meta_key' => 'twitter',
                'meta_value' => '',
            ),
            58 => 
            array (
                'umeta_id' => 59,
                'user_id' => 2,
                'meta_key' => 'facebook',
                'meta_value' => '',
            ),
            59 => 
            array (
                'umeta_id' => 61,
                'user_id' => 2,
                'meta_key' => 'tr_user-settings',
                'meta_value' => 'editor=tinymce&libraryContent=browse&mfold=o&hidetb=1&wplink=1',
            ),
            60 => 
            array (
                'umeta_id' => 62,
                'user_id' => 2,
                'meta_key' => 'tr_user-settings-time',
                'meta_value' => '1423520031',
            ),
            61 => 
            array (
                'umeta_id' => 63,
                'user_id' => 2,
                'meta_key' => 'edit_true_faqs_per_page',
                'meta_value' => '20',
            ),
            62 => 
            array (
                'umeta_id' => 64,
                'user_id' => 2,
                'meta_key' => 'closedpostboxes_page',
                'meta_value' => 'a:0:{}',
            ),
            63 => 
            array (
                'umeta_id' => 65,
                'user_id' => 2,
                'meta_key' => 'metaboxhidden_page',
                'meta_value' => 'a:18:{i:0;s:23:"acf-group_5403de5cdd5f4";i:1;s:23:"acf-group_5456f850c8fef";i:2;s:23:"acf-group_54040af62d753";i:3;s:23:"acf-group_541a3cc82beeb";i:4;s:23:"acf-group_5403f05057688";i:5;s:23:"acf-group_53fab282b49d2";i:6;s:23:"acf-group_547be44758b83";i:7;s:23:"acf-group_53ed91788d70e";i:8;s:23:"acf-group_53fd6c780a8c4";i:9;s:23:"acf-group_53fac08362088";i:10;s:23:"acf-group_541693159897d";i:11;s:23:"acf-group_54cb028f22163";i:12;s:23:"acf-group_54cf1c64a4604";i:13;s:12:"revisionsdiv";i:14;s:10:"postcustom";i:15;s:16:"commentstatusdiv";i:16;s:7:"slugdiv";i:17;s:9:"authordiv";}',
            ),
            64 => 
            array (
                'umeta_id' => 66,
                'user_id' => 1,
                'meta_key' => 'wp_statistics',
                'meta_value' => 'a:2:{s:16:"overview_display";a:2:{s:1:"A";a:5:{i:1;s:7:"summary";i:2;s:8:"browsers";i:3;s:9:"referring";i:4;s:9:"countries";i:5;s:5:"about";}s:1:"B";a:7:{i:1;s:3:"map";i:2;s:4:"hits";i:3;s:6:"search";i:4;s:5:"words";i:5;s:5:"pages";i:6;s:6:"recent";i:7;s:4:"none";}}s:10:"editor_set";s:5:"9.3.1";}',
            ),
            65 => 
            array (
                'umeta_id' => 67,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_post',
                'meta_value' => 'a:1:{i:0;s:29:"wp_statistics_editor_meta_box";}',
            ),
            66 => 
            array (
                'umeta_id' => 68,
                'user_id' => 1,
                'meta_key' => 'wpseo_ignore_tour',
                'meta_value' => '1',
            ),
            67 => 
            array (
                'umeta_id' => 69,
                'user_id' => 1,
                'meta_key' => 'closedpostboxes_true_pagecopy',
                'meta_value' => 'a:0:{}',
            ),
            68 => 
            array (
                'umeta_id' => 70,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_true_pagecopy',
                'meta_value' => 'a:23:{i:0;s:23:"acf-group_5403de5cdd5f4";i:1;s:23:"acf-group_5456f850c8fef";i:2;s:23:"acf-group_54040af62d753";i:3;s:23:"acf-group_541a3cc82beeb";i:4;s:23:"acf-group_5403f05057688";i:5;s:23:"acf-group_57551651e7902";i:6;s:23:"acf-group_53fab282b49d2";i:7;s:23:"acf-group_547be44758b83";i:8;s:23:"acf-group_552db08f517c6";i:9;s:23:"acf-group_53ed91788d70e";i:10;s:23:"acf-group_57997c03a9490";i:11;s:23:"acf-group_53fd6c780a8c4";i:12;s:23:"acf-group_575a61f41c592";i:13;s:23:"acf-group_575522e3b6783";i:14;s:23:"acf-group_575a31c94135c";i:15;s:23:"acf-group_53fac08362088";i:16;s:23:"acf-group_5555531263166";i:17;s:23:"acf-group_541693159897d";i:18;s:23:"acf-group_54cb028f22163";i:19;s:23:"acf-group_55c00331e6ed5";i:20;s:23:"acf-group_54cf1c64a4604";i:21;s:23:"acf-group_54068349cba7a";i:22;s:7:"slugdiv";}',
            ),
            69 => 
            array (
                'umeta_id' => 71,
                'user_id' => 1,
                'meta_key' => 'tr_yoast_notifications',
                'meta_value' => 'a:2:{i:0;a:2:{s:7:"message";s:165:"Yoast SEO has been updated to version 3.4.2. <a href="http://playz-v2.trueserver.com.au/cms/wp-admin/admin.php?page=wpseo_dashboard&intro=1">Find out what\'s new!</a>";s:7:"options";a:8:{s:4:"type";s:7:"updated";s:2:"id";s:19:"wpseo-dismiss-about";s:5:"nonce";N;s:8:"priority";d:0.5;s:9:"data_json";a:0:{}s:13:"dismissal_key";N;s:12:"capabilities";s:14:"manage_options";s:16:"capability_check";s:3:"all";}}i:1;a:2:{s:7:"message";s:180:"Don\'t miss your crawl errors: <a href="http://playz-v2.trueserver.com.au/cms/wp-admin/admin.php?page=wpseo_search_console&tab=settings">connect with Google Search Console here</a>.";s:7:"options";a:8:{s:4:"type";s:7:"warning";s:2:"id";s:17:"wpseo-dismiss-gsc";s:5:"nonce";N;s:8:"priority";d:0.5;s:9:"data_json";a:0:{}s:13:"dismissal_key";N;s:12:"capabilities";s:14:"manage_options";s:16:"capability_check";s:3:"all";}}}',
            ),
            70 => 
            array (
                'umeta_id' => 72,
                'user_id' => 1,
                'meta_key' => 'cpac-hide-install-addons-notice',
                'meta_value' => '1',
            ),
            71 => 
            array (
                'umeta_id' => 73,
                'user_id' => 1,
                'meta_key' => 'acf_user_settings',
                'meta_value' => 'a:0:{}',
            ),
            72 => 
            array (
                'umeta_id' => 74,
                'user_id' => 1,
                'meta_key' => 'wpseo-dismiss-gsc',
                'meta_value' => 'seen',
            ),
            73 => 
            array (
                'umeta_id' => 75,
                'user_id' => 1,
                'meta_key' => 'wpseo-dismiss-about',
                'meta_value' => 'seen',
            ),
            74 => 
            array (
                'umeta_id' => 76,
                'user_id' => 1,
                'meta_key' => 'cpac-hide-review-notice',
                'meta_value' => '1',
            ),
            75 => 
            array (
                'umeta_id' => 77,
                'user_id' => 1,
                'meta_key' => 'meta-box-order_dashboard',
                'meta_value' => 'a:4:{s:6:"normal";s:18:"custom_help_widget";s:4:"side";s:24:"wpseo-dashboard-overview";s:7:"column3";s:0:"";s:7:"column4";s:0:"";}',
            ),
            76 => 
            array (
                'umeta_id' => 78,
                'user_id' => 2,
                'meta_key' => 'wpseo_content_analysis_disable',
                'meta_value' => '',
            ),
            77 => 
            array (
                'umeta_id' => 79,
                'user_id' => 2,
                'meta_key' => 'wpseo_keyword_analysis_disable',
                'meta_value' => '',
            ),
            78 => 
            array (
                'umeta_id' => 80,
                'user_id' => 2,
                'meta_key' => 'acf_user_settings',
                'meta_value' => 'a:0:{}',
            ),
            79 => 
            array (
                'umeta_id' => 81,
                'user_id' => 1,
                'meta_key' => 'meta-box-order_true_pagecopy',
                'meta_value' => 'a:4:{s:15:"acf_after_title";s:0:"";s:4:"side";s:9:"submitdiv";s:6:"normal";s:583:"acf-group_5403de5cdd5f4,acf-group_5456f850c8fef,acf-group_54040af62d753,acf-group_541a3cc82beeb,acf-group_5403f05057688,acf-group_57551651e7902,acf-group_53fab282b49d2,acf-group_547be44758b83,acf-group_552db08f517c6,acf-group_57ce482294695,acf-group_53ed91788d70e,acf-group_57997c03a9490,acf-group_57999aa2e68f0,acf-group_53fd6c780a8c4,acf-group_575a61f41c592,acf-group_575522e3b6783,acf-group_575a31c94135c,acf-group_53fac08362088,acf-group_5555531263166,acf-group_541693159897d,acf-group_54cb028f22163,acf-group_55c00331e6ed5,acf-group_54cf1c64a4604,acf-group_54068349cba7a,slugdiv";s:8:"advanced";s:0:"";}',
            ),
            80 => 
            array (
                'umeta_id' => 82,
                'user_id' => 1,
                'meta_key' => 'screen_layout_true_pagecopy',
                'meta_value' => '2',
            ),
            81 => 
            array (
                'umeta_id' => 83,
                'user_id' => 1,
                'meta_key' => 'itsec_user_activity_last_seen',
                'meta_value' => '1493119019',
            ),
            82 => 
            array (
                'umeta_id' => 84,
                'user_id' => 1,
                'meta_key' => 'wpcf7_hide_welcome_panel_on',
                'meta_value' => 'a:1:{i:0;s:3:"4.5";}',
            ),
            83 => 
            array (
                'umeta_id' => 85,
                'user_id' => 2,
                'meta_key' => 'itsec_user_activity_last_seen',
                'meta_value' => '1511303489',
            ),
            84 => 
            array (
                'umeta_id' => 86,
                'user_id' => 2,
                'meta_key' => 'session_tokens',
            'meta_value' => 'a:2:{s:64:"6ee1ab61c0ec5459174fe11cd72a90341bb9057c0f819e9f7423ccabedbde111";a:4:{s:10:"expiration";i:1511405516;s:2:"ip";s:14:"144.132.70.191";s:2:"ua";s:115:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";s:5:"login";i:1511232716;}s:64:"549e36abaf1b5e4a5ac874cd34da5d3899a5b96f0ac0face32c4e664e21e37f3";a:4:{s:10:"expiration";i:1511409760;s:2:"ip";s:13:"115.146.75.10";s:2:"ua";s:120:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";s:5:"login";i:1511236960;}}',
            ),
            85 => 
            array (
                'umeta_id' => 87,
                'user_id' => 2,
                'meta_key' => 'default_password_nag',
                'meta_value' => '',
            ),
            86 => 
            array (
                'umeta_id' => 88,
                'user_id' => 2,
                'meta_key' => 'tr_media_library_mode',
                'meta_value' => 'list',
            ),
            87 => 
            array (
                'umeta_id' => 89,
                'user_id' => 2,
                'meta_key' => 'closedpostboxes_dashboard',
                'meta_value' => 'a:2:{i:0;s:18:"custom_help_widget";i:1;s:24:"wpseo-dashboard-overview";}',
            ),
            88 => 
            array (
                'umeta_id' => 90,
                'user_id' => 2,
                'meta_key' => 'metaboxhidden_dashboard',
                'meta_value' => 'a:0:{}',
            ),
        ));
        
        
    }
}