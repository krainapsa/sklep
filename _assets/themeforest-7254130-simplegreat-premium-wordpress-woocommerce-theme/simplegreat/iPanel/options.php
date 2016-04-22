<?php

/**
 * SETTINGS TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Main Settings',
	'id' => 'main_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "main_settings"
);

$ipanel_simplegreat_option[] = array(
	"name" => "Enable Parallax effects for pages backgrounds and parallax blocks",
	"id" => "enable_parallax",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "You can turn on/off parallax effects for scrolling here",
	"type" => "checkbox",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Show Homepage Revoltion slider fullwidth",
	"id" => "revolution_fullwidth",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "If turned on Revolution Slider on homepage will scale to full browser width",
	"type" => "checkbox",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Enable theme CSS3 animations",
	"id" => "enable_theme_animations",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "Enable colors and background colors fade effects",
	"type" => "checkbox",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Upload Favicon",
	"id" => "favicon_image",
	"field_options" => array(
		"std" => get_template_directory_uri().'/img/favicon.png'
	),
	"desc" => "Upload your site Favicon in PNG format (32x32px)",
	"type" => "qup",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Show author info and avatar after blog posts",
	"id" => "enable_author_info",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "",
	"type" => "checkbox",
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);
/**
 * Header TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Header',
	'id' => 'header_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "header_settings"
);

$ipanel_simplegreat_option[] = array(
	"name" => "Enable fixed top menu",
	"id" => "enable_fixed_menu",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "If turned on top menu with cart will always on screen top in page scrolling",
	"type" => "checkbox",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Upload header (logo) background/pattern",
	"id" => "logo_bg_image",
	"field_options" => array(
		"std" => ''
	),
	"desc" => "You can upload header background image or pattern. Delete image to disable it.",
	"type" => "qup",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Header (logo) background repeat",
	"id" => "logo_bg_image_repeat",
	"std" => "no-repeat",
	"options" => array(
		"no-repeat" => "No repeat",
		"repeat" => "Repeat",
		"repeat-x" => "Repeat X",
		"repeat-y" => "Repeat Y"
	),
	"desc" => "",
	"type" => "select",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Header (logo) background position X",
	"id" => "logo_bg_image_position_x",
	"std" => "center",
	"options" => array(
		"left" => "Left",
		"center" => "Center",
		"right" => "Right"
	),
	"desc" => "",
	"type" => "select",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Header (logo) background position Y",
	"id" => "logo_bg_image_position_y",
	"std" => "top",
	"options" => array(
		"top" => "Top",
		"center" => "Center",
		"bottom" => "Bottom"
	),
	"desc" => "",
	"type" => "select",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Header (logo) background size",
	"id" => "logo_bg_image_size",
	"std" => "auto",
	"options" => array(
		"auto" => "Auto",
		"cover" => "Cover",
		"contain" => "Contain"
	),
	"desc" => "",
	"type" => "select",
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * FOOTER TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Footer',
	'id' => 'footer_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "footer_settings"
);
$ipanel_simplegreat_option[] = array(
	
	"name" => "Social icons",   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_simplegreat_option[] = array(
	"type" => "info",
	"name" => "Leave URL fields blank to hide this social icons",
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_simplegreat_option[] = array(
	"name" => "Facebook Page url",
	"id" => "facebook",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Vkontakte page url",
	"id" => "vk",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Twitter Page url",
	"id" => "twitter",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Google+ Page url",
	"id" => "google-plus",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "LinkedIn Page url",
	"id" => "linkedin",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Dribbble Page url",
	"id" => "dribbble",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Instagram Page url",
	"id" => "instagram",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Tumblr page url",
	"id" => "tumblr",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Pinterest page url",
	"id" => "pinterest",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Vimeo page url",
	"id" => "vimeo-square",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "YouTube page url",
	"id" => "youtube",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Skype url",
	"id" => "skype",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
		"type" => "EndSection"
);
$ipanel_simplegreat_option[] = array(
	
	"name" => "Payment icons",   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_simplegreat_option[] = array(
	
	"name" => "Footer Payment Icons",   
	"id" => "footer_payment_icons",
	"options" => array(
		"visa" => "Visa",
		"visaelectron" => "Visa Electron",
		"mc" => "MasterCard",
		"discover" => "Discover",
		"cirrus" => "Cirrus",
		"ae" => "AmericanExpress",
		"paypal" => "PayPal",
		"maestro" => "Maestro"
	),
	"std" => false,
	"desc" => "You can add different accepted payments icons to your footer",
	"type" => "multicheckbox",
	"field_options" => array(
		
		"desc_in_tooltip" => false // If you wish the description be displayed in tooltip set this true.
		
	)
	
);
$ipanel_simplegreat_option[] = array(
		"type" => "EndSection"
);

$ipanel_simplegreat_option[] = array(
	"name" => "Footer copyright text",
	"id" => "footer_copyright_editor",
	"std" => "Powered by <a href='http://themeforest.net/user/dedalx/' target='_blank'>SimpleGreat - Premium Wordpress Theme</a>",
	"desc" => "",
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * MEGAMENU TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'MegaMenu',
	'id' => 'megamenu_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "megamenu_settings"
);
$ipanel_simplegreat_option[] = array(
	"type" => "info",
	"name" => "If you installed MegaMenu plugin provided with theme you can configure it <a href='admin.php?page=mega_main_menu_options'>here</a>.",
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_simplegreat_option[] = array(
	"type" => "info",
	"name" => "You can manage your theme menus <a href='nav-menus.php'>here</a>.",
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_simplegreat_option[] = array(
	"name" => "Override MegaMenu plugin styles with theme colors/skins",
	"id" => "megamenu_override",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "If you want to use MegaMenu plugin styles and skins settigns instead of theme colors and skins disable this checkbox",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);
/**
 * SIDEBAR TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Sidebar',
	'id' => 'sidebar_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "sidebar_settings"
);
$ipanel_simplegreat_option[] = array(
	"name" => "Pages sidebar position",
	"id" => "page_sidebar_position",
	"std" => "disable",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Blog page sidebar position",
	"id" => "blog_sidebar_position",
	"std" => "right",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Blog Archive page sidebar position",
	"id" => "archive_sidebar_position",
	"std" => "right",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Blog Search page sidebar position",
	"id" => "search_sidebar_position",
	"std" => "right",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Blog post sidebar position",
	"id" => "post_sidebar_position",
	"std" => "right",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "WooCommerce listing pages sidebar position",
	"id" => "shop_sidebar_position",
	"std" => "right",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "WooCommerce product page sidebar position",
	"id" => "product_sidebar_position",
	"std" => "right",
	"options" => array(
		"left" => "Left",
		"right" => "Right",
		"disable" => "Disable sidebar"
	),
	"desc" => "",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * WOOCOMMERCE TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Woocommerce',
	'id' => 'shop_settings'
);
$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "shop_settings"
);
$ipanel_simplegreat_option[] = array(
	"name" => "Show social share buttons and counters on product pages",
	"id" => "shop_social_buttons_enable",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Enable 'Show More' button for homepage product grid",
	"id" => "shop_show_more_enable",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "If you disable this option you will see products grids with all products (with limit that you set in WooCommerce shortcode)",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Disable dropdown cart on top",
	"id" => "shop_disable_cartbox",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "You will not see cart dropdown with total on site top menu",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Enable Catalog mode (disable cart features)",
	"id" => "shop_catalog_mode_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "Enable if you want to disable cart/checkout features and use your site as product catalog",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Disable WishList features",
	"id" => "shop_hide_wishlist",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "",
	"type" => "checkbox",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Enable product page custom tab display",
	"id" => "shop_product_custom_tab_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "Show additional tab on product page with your content specified below",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Product custom tab title",
	"id" => "shop_product_custom_tab_title",
	"std" => "",
	"desc" => "",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Product custom tab text",
	"id" => "shop_product_custom_tab_text",
	"std" => "",
	"desc" => "",
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);
$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * TWITTER TAB
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Twitter',
	'id' => 'twitter_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "twitter_settings"
);
$ipanel_simplegreat_option[] = array(
	"type" => "info",
	"name" => "IMPORTANT: You must put your Twitter API credentials to /wp-content/themes/simplegreat/js/twitter/index.php file by theme documentation to turn on twitter feeds display.",
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_simplegreat_option[] = array(
	"name" => "Display Twitter tweets slider in footer",
	"id" => "footer_show_twitter",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "If you don't want to see twitter slider in footer disable this option",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Twitter username",
	"id" => "footer_twitter_username",
	"std" => "",
	"desc" => "Input your twitter username without @",
	"type" => "text",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Twitter tweets count",
	"id" => "footer_twitter_tweets_count",
	"std" => 10,
	"field_options" => array(
		"min" => 1,
		"step" => 1,
		"max" => 50,
		"animation" => true,
	),
	"desc" => "Limit for tweets in Twitter feed",
	"type" => "slider",
);
$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);
/**
 * FLOATING BOX
 **/
$ipanel_simplegreat_tabs[] = array(
	'name' => 'Side blocks',
	'id' => 'sideblock_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "sideblock_settings"
);
$ipanel_simplegreat_option[] = array(
	"name" => "Display Facebook Side Block",
	"id" => "sideblock_show_facebook",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "Add floating block to the right of site with your Facebook Page Likebox",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Facebook Page name / ID",
	"id" => "facebook_gid",
	"std" => "",
	"desc" => "Input your facebook page name or page ID",
	"type" => "text",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Display Custom Side Block",
	"id" => "sideblock_show_custom",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "Add floating block with your content to the left of site",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Custom Side Block content",
	"id" => "sideblock_custom_content",
	"std" => "Custom block content",
	"desc" => "Input your content to display it in custom floating block at the left",
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);
/**
 * FONTS TAB
 **/

$ipanel_simplegreat_tabs[] = array(
	'name' => 'Fonts',
	'id' => 'font_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "font_settings"
);

$ipanel_simplegreat_option[] = array(
	"name" => "Headers font",
	"id" => "header_font",
	"desc" => "Font used in headers",
	"options" => array(
		"font-sizes" => array(
			" " => "Font Size",
			'11' => '11px',
			'12' => '12px',
			'13' => '13px',
			'14' => '14px',
			'15' => '15px',
			'16' => '16px',
			'17' => '17px',
			'18' => '18px',
			'19' => '19px',
			'20' => '20px',
			'21' => '21px',
			'22' => '22px',
			'23' => '23px',
			'24' => '24px',
			'25' => '25px',
			'26' => '26px',
			'27' => '27px',
			'28' => '28px',
			'29' => '29px',
			'30' => '30px',
			'31' => '31px',
			'32' => '32px',
			'33' => '33px',
			'34' => '34px',
			'35' => '35px',
			'36' => '36px',
			'37' => '37px',
			'38' => '38px',
			'39' => '39px',
			'40' => '40px'
		),
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-size" => '26',
		"font-family" => 'Open+Sans'
	),
	"type" => "typography"
);

$ipanel_simplegreat_option[] = array(
	"name" => "Body font",
	"id" => "body_font",
	"desc" => "Font used in other elements",
	"options" => array(
		"font-sizes" => array(
			" " => "Font Size",
			'11' => '11px',
			'12' => '12px',
			'13' => '13px',
			'14' => '14px',
			'15' => '15px',
			'16' => '16px',
			'17' => '17px',
			'18' => '18px',
			'19' => '19px',
			'20' => '20px',
			'21' => '21px',
			'22' => '22px',
			'23' => '23px',
			'24' => '24px',
			'25' => '25px',
			'26' => '26px',
			'27' => '27px'
		),
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-size" => '12',
		"font-family" => 'Open+Sans'
	),
	"type" => "typography"
);
$ipanel_simplegreat_option[] = array(
	"name" => "Enable cyrillic support for Google Fonts",
	"id" => "font_cyrillic_enable",
	"std" => true,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => "Use this if you use Russian Language on your site. Please note that not all Google Fonts support cyrilic.",
	"type" => "checkbox",
);
$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * COLORS TAB
 **/

$ipanel_simplegreat_tabs[] = array(
	'name' => 'Colors',
	'id' => 'color_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "color_settings",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Predefined color skins",
	"id" => "color_skin_name",
	"std" => "none",
	"options" => array(
		"none" => "Use colors specified below",
		"default" => "SimpleGreat (Default)",
		"green" => "Green Grass",
		"blue" => "Blue Ocean",
		"red" => "Red Sun",
		"black" => "Black and White",
		"pink" => "Pinky",
		"orange" => "Orange Juice",
		"fencer" => "Fencer",
		"perfectum" => "Perfectum",
		"metro" => "Metro"
	),
	"desc" => "Select one of predefined skins",
	"type" => "select",
);
$ipanel_simplegreat_option[] = array(
	"name" => "Body background color",
	"id" => "theme_body_color",
	"std" => "#F6F7F8",
	"desc" => "Used in many theme places, default: #F6F7F8",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Main theme color",
	"id" => "theme_main_color",
	"std" => "#C2A26F",
	"desc" => "Used in many theme places, default: #C2A26F",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Buttons hover background color",
	"id" => "theme_button_hover_color",
	"std" => "#3D4445",
	"desc" => "Used for some of theme buttons hover, default: #3D4445",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Top menu background color",
	"id" => "theme_menu_color",
	"std" => "#4A5456",
	"desc" => "Default: #4A5456",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Top menu links color",
	"id" => "theme_menu_link_color",
	"std" => "#FFFFFF",
	"desc" => "Default: #FFFFFF",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Top menu links separator color",
	"id" => "theme_menu_separator_color",
	"std" => "#556163",
	"desc" => "Default: #556163",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Logo background color",
	"id" => "theme_logo_bg_color",
	"std" => "#FFFFFF",
	"desc" => "Default: #FFFFFF",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu background color",
	"id" => "theme_cat_menu_bg_color",
	"std" => "#FFFFFF",
	"desc" => "Default: #FFFFFF",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu borders color",
	"id" => "theme_cat_menu_border_color",
	"std" => "#EAE9E9",
	"desc" => "Default: #EAE9E9",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu links color",
	"id" => "theme_cat_menu_link_color",
	"std" => "#000000",
	"desc" => "Default: #000000",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu 1lvl submenu background color",
	"id" => "theme_cat_submenu_1lvl_bg_color",
	"std" => "#4A5456",
	"desc" => "Default: #4A5456",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu 1lvl submenu link color",
	"id" => "theme_cat_submenu_1lvl_link_color",
	"std" => "#A3A8A9",
	"desc" => "Default: #A3A8A9",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu 2lvl submenu background color",
	"id" => "theme_cat_submenu_2lvl_bg_color",
	"std" => "#3D4445",
	"desc" => "Default: #3D4445",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Category menu 2lvl submenu link color",
	"id" => "theme_cat_submenu_2lvl_link_color",
	"std" => "#A3A8A9",
	"desc" => "Default: #A3A8A9",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Footer background color",
	"id" => "theme_footer_color",
	"std" => "#4A5456",
	"desc" => "Default: #4A5456",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Footer links color",
	"id" => "theme_footer_link_color",
	"std" => "#A3A8A9",
	"desc" => "Default: #A3A8A9",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Footer headers color",
	"id" => "theme_footer_header_color",
	"std" => "#F6F7F8",
	"desc" => "Default: #F6F7F8",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Pages title color",
	"id" => "theme_title_color",
	"std" => "#000000",
	"desc" => "Default: #000000",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Widgets title color",
	"id" => "theme_widget_title_color",
	"std" => "#000000",
	"desc" => "Default: #000000",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Products hover border color",
	"id" => "theme_product_hover_border_color",
	"std" => "#EAE9E9",
	"desc" => "Used for some of theme buttons hover, default: #EAE9E9",
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * CUSTOM CODE TAB
 **/

$ipanel_simplegreat_tabs[] = array(
	'name' => 'Custom code',
	'id' => 'custom_code'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "custom_code",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Custom JavaScript code",
	"id" => "custom_js_code",
	"std" => '',
	"field_options" => array(
		"language" => "javascript",
		"line_numbers" => true,
		"autoCloseBrackets" => true,
		"autoCloseTags" => true
	),
	"desc" => "This code will run in header",
	"type" => "code",
);

$ipanel_simplegreat_option[] = array(
	"name" => "Custom CSS styles",
	"id" => "custom_css_code",
	"std" => '',
	"field_options" => array(
		"language" => "json",
		"line_numbers" => true,
		"autoCloseBrackets" => true,
		"autoCloseTags" => true
	),
	"desc" => "This CSS code will be included in header",
	"type" => "code",
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * EXPORT TAB
 **/

$ipanel_simplegreat_tabs[] = array(
	'name' => 'Export',
	'id' => 'export_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "export_settings"
);
	
$ipanel_simplegreat_option[] = array(
	"name" => "Export with Download Possibility",
	"type" => "export",
	"desc" => "This is a sample of export field."
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * IMPORT TAB
 **/

$ipanel_simplegreat_tabs[] = array(
	'name' => 'Import',
	'id' => 'import_settings'
);

$ipanel_simplegreat_option[] = array(
	"type" => "StartTab",
	"id" => "import_settings"
);

$ipanel_simplegreat_option[] = array(
	"name" => "Import",
	"type" => "import",
	"desc" => "This is a sample of import field."
);

$ipanel_simplegreat_option[] = array(
	"type" => "EndTab"
);

/**
 * CONFIGURATION
 **/

$ipanel_configs = array(
	'ID'=> 'SIMPLEGREAT_PANEL', 
	'menu'=> 
		array(
			'submenu' => false,
			'page_title' => __('Theme Control Panel', 'simplegreat'),
			'menu_title' => __('SimpleGreat Control Panel', 'simplegreat'),
			'capability' => 'manage_options',
			'menu_slug' => 'manage_theme_options',
			'icon_url' => IPANEL_URI . 'assets/img/panel-icon.png',
			'position' => 58
		),
	'rtl' => ( function_exists('is_rtl') && is_rtl() ),
	'tabs' => $ipanel_simplegreat_tabs,
	'fields' => $ipanel_simplegreat_option,
	'download_capability' => 'manage_options',
	'live_preview' => site_url()
);

$ipanel_theme_usage = new IPANEL( $ipanel_configs );
	