<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------------------
// !TEMPLATE
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// Paths
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// SITE PATH
//------------------------------------------------------------------------------
// The path to the root folder that holds the application. This does not have to
// be the site root folder, or even the folder defined in FCPATH.
$config['template.site_path']	= FCPATH;

//------------------------------------------------------------------------------
// THEME PATHS
//------------------------------------------------------------------------------
// An array of folders to look in for themes. There must be at least one folder
// path at all times, to serve as the fall-back for when a theme isn't found.
// Paths are relative to the FCPATH.
$config['template.theme_paths'] = array('themes');

//------------------------------------------------------------------------------
// Layouts
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// DEFAULT LAYOUT
//------------------------------------------------------------------------------
// This is the name of the default layout used if no others are specified.
// NOTE: do not include an ending ".php" extension.
$config['template.default_layout'] = "index";

//------------------------------------------------------------------------------
// DEFAULT AJAX LAYOUT
//------------------------------------------------------------------------------
// This is the name of the default layout used when the page is displayed via an
// AJAX call.
// NOTE: do not include an ending ".php" extension.
$config['template.ajax_layout'] = 'ajax';

//------------------------------------------------------------------------------
// Themes
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// USE MOBILE THEMES?
//------------------------------------------------------------------------------
// When set to true, the Template library will check the user agent during the
// rendering process, and check the UA against the template.themes (below),
// allowing you to create mobile versions of your site, and versions targetted
// specifically at a single type of phone (ie, Blackberry or iPhone).
// NOTE: when rendering, if the file doesn't exist in the targetted theme, the
// Template library then checks the default site for the same file.
$config['template.use_mobile_themes'] = false;

//------------------------------------------------------------------------------
// DEFAULT THEME
//------------------------------------------------------------------------------
// This is the folder name that contains the default theme to use when
// 'template.use_mobile_themes' is set to true.
$config['template.default_theme']	= 'default/';

//------------------------------------------------------------------------------
// ADMIN THEME
//------------------------------------------------------------------------------
// This is the folder name that contains the default admin theme to use
$config['template.admin_theme'] = 'admin';

//------------------------------------------------------------------------------
// Templates
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// MESSAGE TEMPLATE
//------------------------------------------------------------------------------
// This is the template that the Template library will use when displaying
// messages through the message() function.
// To set the class for the type of message (error, success, etc), the {type}
// placeholder will be replaced. The message will replace the {message}
// placeholder.
$config['template.message_template'] =<<<EOD
 <div class="alert alert-{type}  alert-dismissible fade show">
		<div>{message}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
	</div>
EOD;

//------------------------------------------------------------------------------
// BREADCRUMB Separator - The symbol displayed between the breadcrumb elements.
//------------------------------------------------------------------------------
$config['template.breadcrumb_symbol']	= ' : ';
