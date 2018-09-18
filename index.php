<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="QuicQR the quick way to pay for your coffee" />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="QuicQR">
<meta itemprop="description" content="QuicQR the quick way to pay for your coffee">
<meta itemprop="image" content="https://quicqr.herokuapp.com/demos/_assets/img/jquery-logo.png">

<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="QuicQR the quick way to pay for your coffee">
<meta name="twitter:description" content="QuicQR the quick way to pay for your coffee">
<meta name="twitter:creator" content="@ju3ting">
<meta name="twitter:image" content="https://quicqr.herokuapp.com/demos/_assets/img/jquery-logo.png">
<meta name="twitter:data1" content="But this will be ready soon">
<meta name="twitter:label1" content="This is the Beta">
<meta name="twitter:data2" content="Justin Grierson">
<meta name="twitter:label2" content="Demo Developed by">

<!-- Open Graph data -->
<meta property="og:title" content="QuicQR" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="https://quicqr.herokuapp.com/" />
<meta property="og:image" content="https://quicqr.herokuapp.com/demos/_assets/img/jquery-logo.png" />
<meta property="og:description" content="QuicQR the quick way to pay for your coffee" />
<meta property="og:site_name" content="QuicQR" />
<meta property="og:price:amount" content="15.00" />
<meta property="og:price:currency" content="GBP" />
    
	<title>QuicQR</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="demos/css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="demos/_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="demos/js/jquery.js"></script>
	<script src="demos/_assets/js/index.js"></script>
	<script src="demos/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="demos/_assets/img/jquery-logo.png" alt="QuicQR"></h2>
		<p>Version <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>Introduction</h1>

		<p><strong>So this is a demo for the QR payments using Allied Wallet as a Payment Gateway.</strong></p>

		<img src="demos/_assets/img/devices.png">

		<p>In this introduction I will be able to show you how QuicQR will be able to sell coffee from diffeant restrents and put money on the accounts for users.</p>

        <div class="ui-grid-a ui-responsive">
        	<?php echo "<div class=\"ui-block-a\">\n";
echo "        		<div class=\"jqm-block-content\">\n";
echo "        			<h3>User Login</h3>\n";
echo "\n";
echo "        			<p><a href=\"pages/\" data-ajax=\"false\">Login Page</a></p>\n";
echo "        			<p><a href=\"navigation/\" data-ajax=\"false\">User Profile</a></p>\n";
echo "        			<p><a href=\"loader/\" data-ajax=\"false\">Loader</a></p>\n";
echo "        			<p><a href=\"transitions/\" data-ajax=\"false\">Transitions</a></p>\n";
echo "        		</div>\n";
echo "        	</div>";
?>
<?php
echo "<div class=\"ui-block-b\">\n";
echo "        		<div class=\"jqm-block-content\">\n";
echo "        			<h3>Coffee Shops</h3>\n";
echo "\n";
echo "        			<p><a href=\"theme-default/\" data-ajax=\"false\">Theming</a></p>\n";
echo "        			<p><a href=\"button-markup/\" data-ajax=\"false\">Buttons</a></p>\n";
echo "        			<p><a href=\"icons/\" data-ajax=\"false\">Icons</a></p>\n";
echo "        			<p><a href=\"grids/\" data-ajax=\"false\">Grids</a></p>\n";
echo "        			<p><a href=\"demos/body-bar-classes/\" data-ajax=\"false\">Body and bar classes</a></p>\n";
echo "        		</div>\n";
echo "        	</div>        	";
?>
            
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>What is Next</h3>

        			<p><a href="toolbar/" data-ajax="false">Toolbar</a>, <a href="navbar/" data-ajax="false">Navbar</a></p>
        			<p><a href="tabs/" data-ajax="false">Tabs</a>, <a href="panel/" data-ajax="false">Panel</a>, <a href="popup/" data-ajax="false">Popup</a></p>
        			<p><a href="listview/" data-ajax="false">Listview</a></p>
        			<p><a href="collapsible/" data-ajax="false">Collapsible</a>, <a href="collapsibleset/" data-ajax="false">Collapsible set</a></p>
        			<p><a href="table-reflow/" data-ajax="false">Table Reflow</a>, <a href="table-column-toggle/" data-ajax="false">Table Column Toggle</a></p>
        			<p><a href="filterable/" data-ajax="false">Filterable</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>Technology Used For Demo</h3>

        			<p><a href="checkboxradio-checkbox/" data-ajax="false">Checkboxes</a>, <a href="checkboxradio-radio/" data-ajax="false">Radio buttons</a></p>
        			<p><a href="selectmenu/" data-ajax="false">Selectmenu</a>, <a href="selectmenu-custom/" data-ajax="false">Custom menu</a></p>
        			<p><a href="flipswitch/" data-ajax="false">Flipswitch</a></p>
        			<p><a href="slider/" data-ajax="false">Slider</a>, <a href="rangeslider/" data-ajax="false">Rangeslider</a></p>
        			<p><a href="button/" data-ajax="false">Input button</a></p>
        			<p><a href="controlgroup/" data-ajax="false">Controlgroup</a></p>
        		</div>
        	</div>
        </div>

	</div><!-- /content -->
	  <?php echo "<div data-role=\"panel\" class=\"jqm-navmenu-panel\" data-position=\"left\" data-display=\"overlay\" data-theme=\"a\">\n";
echo "	    	<ul class=\"jqm-list ui-alt-icon ui-nodisc-icon\">\n";
echo "<li data-filtertext=\"demos homepage\" data-icon=\"home\"><a href=\"index.php\">Home</a></li>\n";
echo "<li data-filtertext=\"introduction overview getting started\"><a href=\"/sign-up.html\" data-ajax=\"false\">Login</a></li>\n";
echo "<li data-filtertext=\"buttons button markup buttonmarkup method anchor link button element\"><a href=\"demos/button-markup/\" data-ajax=\"false\">Buttons</a></li>\n";
echo "<li data-filtertext=\"form button widget input button submit reset\"><a href=\"/barcodereader/index.html\" data-ajax=\"false\">Barcode Reader</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "		    Checkboxradio widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form checkboxradio widget checkbox input checkboxes controlgroups\"><a href=\"demos/checkboxradio-checkbox/\" data-ajax=\"false\">Checkboxes</a></li>\n";
echo "			<li data-filtertext=\"form checkboxradio widget radio input radio buttons controlgroups\"><a href=\"demos/checkboxradio-radio/\" data-ajax=\"false\">Radio buttons</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Collapsible (set) widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"collapsibles content formatting\"><a href=\"demos/collapsible/\" data-ajax=\"false\">Collapsible</a></li>\n";
echo "			<li data-filtertext=\"dynamic collapsible set accordion append expand\"><a href=\"demos/collapsible-dynamic/\" data-ajax=\"false\">Dynamic collapsibles</a></li>\n";
echo "			<li data-filtertext=\"accordions collapsible set widget content formatting grouped collapsibles\"><a href=\"demos/collapsibleset/\" data-ajax=\"false\">Collapsible set</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Controlgroup widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical\"><a href=\"demos/controlgroup/\" data-ajax=\"false\">Controlgroup</a></li>\n";
echo "			<li data-filtertext=\"dynamic controlgroup dynamically add buttons\"><a href=\"demos/controlgroup-dynamic/\" data-ajax=\"false\">Dynamic controlgroups</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"form datepicker widget date input\"><a href=\"demos/datepicker/\" data-ajax=\"false\">Datepicker</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Events<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"swipe to delete list items listviews swipe events\"><a href=\"demos/swipe-list/\" data-ajax=\"false\">Swipe list items</a></li>\n";
echo "			<li data-filtertext=\"swipe to navigate swipe page navigation swipe events\"><a href=\"demos/swipe-page/\" data-ajax=\"false\">Swipe page navigation</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"filterable filter elements sorting searching listview table\"><a href=\"demos/filterable/\" data-ajax=\"false\">Filterable widget</a></li>\n";
echo "<li data-filtertext=\"form flipswitch widget flip toggle switch binary select checkbox input\"><a href=\"demos/flipswitch/\" data-ajax=\"false\">Flipswitch widget</a></li>\n";
echo "\n";
echo "\n";
echo "<li data-filtertext=\"blocks content formatting sections heading\"><a href=\"demos/body-bar-classes/\" data-ajax=\"false\">Grouping and dividing content</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Icons<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"button icons svg disc alt custom icon position\"><a href=\"demos/icons/\" data-ajax=\"false\">Icons</a></li>\n";
echo "			<li data-filtertext=\"\"><a href=\"demos/icons-grunticon/\" data-ajax=\"false\">Grunticon loader</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Listview widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"listview widget thumbnails icons nested split button collapsible ul ol\"><a href=\"demos/listview/\" data-ajax=\"false\">Listview</a></li>\n";
echo "			<li data-filtertext=\"autocomplete filterable reveal listview filtertextbeforefilter placeholder\"><a href=\"demos/listview-autocomplete/\" data-ajax=\"false\">Listview autocomplete</a></li>\n";
echo "			<li data-filtertext=\"autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder\"><a href=\"demos/listview-autocomplete-remote/\" data-ajax=\"false\">Listview autocomplete remote data</a></li>\n";
echo "			<li data-filtertext=\"autodividers anchor jump scroll linkbars listview lists ul ol\"><a href=\"demos/listview-autodividers-linkbar/\" data-ajax=\"false\">Listview autodividers linkbar</a></li>\n";
echo "			<li data-filtertext=\"listview autodividers selector autodividersselector lists ul ol\"><a href=\"demos/listview-autodividers-selector/\" data-ajax=\"false\">Listview autodividers selector</a></li>\n";
echo "			<li data-filtertext=\"listview nested list items\"><a href=\"demos/listview-nested-lists/\" data-ajax=\"false\">Nested Listviews</a></li>\n";
echo "			<li data-filtertext=\"listview collapsible list items flat\"><a href=\"demos/listview-collapsible-item-flat/\" data-ajax=\"false\">Listview collapsible list items (flat)</a></li>\n";
echo "			<li data-filtertext=\"listview collapsible list indented\"><a href=\"demos/listview-collapsible-item-indented/\" data-ajax=\"false\">Listview collapsible list items (indented)</a></li>\n";
echo "			<li data-filtertext=\"grid listview responsive grids responsive listviews lists ul\"><a href=\"demos/listview-grid/\" data-ajax=\"false\">Listview responsive grid</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"loader widget page loading navigation overlay spinner\"><a href=\"demos/loader/\" data-ajax=\"false\">Loader widget</a></li>\n";
echo "<li data-filtertext=\"navbar widget navmenu toolbars header footer\"><a href=\"demos/navbar/\" data-ajax=\"false\">Navbar widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Navigation<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"ajax navigation navigate widget history event method\"><a href=\"demos/navigation/\" data-ajax=\"false\">Navigation</a></li>\n";
echo "			<li data-filtertext=\"linking pages page links navigation ajax prefetch cache\"><a href=\"demos/navigation-linking-pages/\" data-ajax=\"false\">Linking pages</a></li>\n";
echo "			<!-- <li data-filtertext=\"php redirect server redirection server-side navigation\"><a href=\"demos/navigation-php-redirect/\" data-ajax=\"false\">PHP redirect demo</a></li>-->\n";
echo "			<li data-filtertext=\"navigation redirection hash query\"><a href=\"demos/navigation-hash-processing/\" data-ajax=\"false\">Hash processing demo</a></li>\n";
echo "			<li data-filtertext=\"navigation redirection hash query\"><a href=\"demos/page-events/\" data-ajax=\"false\">Page Navigation Events</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "\n";
echo "\n";
echo "\n";
echo "		     </ul>\n";
echo "		</div>";
 ?>  
    <!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>QuicQR</p>
		<p>Copyright 2018 Justin Grierson</p>
	</div><!-- /footer -->
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    
    <?php echo "<div data-role=\"panel\" class=\"jqm-search-panel\" data-position=\"right\" data-display=\"overlay\" data-theme=\"a\">\n";
echo "		<div class=\"jqm-search\">\n";
echo "			<ul class=\"jqm-list\" data-filter-placeholder=\"Search demos...\" data-filter-reveal=\"true\">\n";
echo "<li data-filtertext=\"demos homepage\" data-icon=\"home\"><a href=\"demos/./\">Home</a></li>\n";
echo "<li data-filtertext=\"introduction overview getting started\"><a href=\"demos/intro/\" data-ajax=\"false\">Introduction</a></li>\n";
echo "<li data-filtertext=\"buttons button markup buttonmarkup method anchor link button element\"><a href=\"demos/button-markup/\" data-ajax=\"false\">Buttons</a></li>\n";
echo "<li data-filtertext=\"form button widget input button submit reset\"><a href=\"demos/button/\" data-ajax=\"false\">Button widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "		    Checkboxradio widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form checkboxradio widget checkbox input checkboxes controlgroups\"><a href=\"demos/checkboxradio-checkbox/\" data-ajax=\"false\">Checkboxes</a></li>\n";
echo "			<li data-filtertext=\"form checkboxradio widget radio input radio buttons controlgroups\"><a href=\"demos/checkboxradio-radio/\" data-ajax=\"false\">Radio buttons</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Collapsible (set) widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"collapsibles content formatting\"><a href=\"demos/collapsible/\" data-ajax=\"false\">Collapsible</a></li>\n";
echo "			<li data-filtertext=\"dynamic collapsible set accordion append expand\"><a href=\"demos/collapsible-dynamic/\" data-ajax=\"false\">Dynamic collapsibles</a></li>\n";
echo "			<li data-filtertext=\"accordions collapsible set widget content formatting grouped collapsibles\"><a href=\"demos/collapsibleset/\" data-ajax=\"false\">Collapsible set</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Controlgroup widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical\"><a href=\"demos/controlgroup/\" data-ajax=\"false\">Controlgroup</a></li>\n";
echo "			<li data-filtertext=\"dynamic controlgroup dynamically add buttons\"><a href=\"demos/controlgroup-dynamic/\" data-ajax=\"false\">Dynamic controlgroups</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"form datepicker widget date input\"><a href=\"demos/datepicker/\" data-ajax=\"false\">Datepicker</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Events<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"swipe to delete list items listviews swipe events\"><a href=\"demos/swipe-list/\" data-ajax=\"false\">Swipe list items</a></li>\n";
echo "			<li data-filtertext=\"swipe to navigate swipe page navigation swipe events\"><a href=\"demos/swipe-page/\" data-ajax=\"false\">Swipe page navigation</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"filterable filter elements sorting searching listview table\"><a href=\"demos/filterable/\" data-ajax=\"false\">Filterable widget</a></li>\n";
echo "<li data-filtertext=\"form flipswitch widget flip toggle switch binary select checkbox input\"><a href=\"demos/flipswitch/\" data-ajax=\"false\">Flipswitch widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Forms<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements\"><a href=\"demos/forms/\" data-ajax=\"false\">Forms</a></li>\n";
echo "			<li data-filtertext=\"form hide labels hidden accessible ui-hidden-accessible forms\"><a href=\"demos/forms-label-hidden-accessible/\" data-ajax=\"false\">Hide labels</a></li>\n";
echo "			<li data-filtertext=\"form field containers fieldcontain ui-field-contain forms\"><a href=\"demos/forms-field-contain/\" data-ajax=\"false\">Field containers</a></li>\n";
echo "			<li data-filtertext=\"forms disabled form elements\"><a href=\"demos/forms-disabled/\" data-ajax=\"false\">Forms disabled</a></li>\n";
echo "			<li data-filtertext=\"forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements\"><a href=\"demos/forms-gallery/\" data-ajax=\"false\">Forms gallery</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Grids<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"grids columns blocks content formatting rwd responsive css framework\"><a href=\"demos/grids/\" data-ajax=\"false\">Grids</a></li>\n";
echo "			<li data-filtertext=\"buttons in grids css framework\"><a href=\"demos/grids-buttons/\" data-ajax=\"false\">Buttons in grids</a></li>\n";
echo "			<li data-filtertext=\"custom responsive grids rwd css framework\"><a href=\"demos/grids-custom-responsive/\" data-ajax=\"false\">Custom responsive grids</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"blocks content formatting sections heading\"><a href=\"demos/body-bar-classes/\" data-ajax=\"false\">Grouping and dividing content</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Icons<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"button icons svg disc alt custom icon position\"><a href=\"demos/icons/\" data-ajax=\"false\">Icons</a></li>\n";
echo "			<li data-filtertext=\"\"><a href=\"demos/icons-grunticon/\" data-ajax=\"false\">Grunticon loader</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Listview widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"listview widget thumbnails icons nested split button collapsible ul ol\"><a href=\"demos/listview/\" data-ajax=\"false\">Listview</a></li>\n";
echo "			<li data-filtertext=\"autocomplete filterable reveal listview filtertextbeforefilter placeholder\"><a href=\"demos/listview-autocomplete/\" data-ajax=\"false\">Listview autocomplete</a></li>\n";
echo "			<li data-filtertext=\"autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder\"><a href=\"demos/listview-autocomplete-remote/\" data-ajax=\"false\">Listview autocomplete remote data</a></li>\n";
echo "			<li data-filtertext=\"autodividers anchor jump scroll linkbars listview lists ul ol\"><a href=\"demos/listview-autodividers-linkbar/\" data-ajax=\"false\">Listview autodividers linkbar</a></li>\n";
echo "			<li data-filtertext=\"listview autodividers selector autodividersselector lists ul ol\"><a href=\"demos/listview-autodividers-selector/\" data-ajax=\"false\">Listview autodividers selector</a></li>\n";
echo "			<li data-filtertext=\"listview nested list items\"><a href=\"demos/listview-nested-lists/\" data-ajax=\"false\">Nested Listviews</a></li>\n";
echo "			<li data-filtertext=\"listview collapsible list items flat\"><a href=\"demos/listview-collapsible-item-flat/\" data-ajax=\"false\">Listview collapsible list items (flat)</a></li>\n";
echo "			<li data-filtertext=\"listview collapsible list indented\"><a href=\"demos/listview-collapsible-item-indented/\" data-ajax=\"false\">Listview collapsible list items (indented)</a></li>\n";
echo "			<li data-filtertext=\"grid listview responsive grids responsive listviews lists ul\"><a href=\"demos/listview-grid/\" data-ajax=\"false\">Listview responsive grid</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"loader widget page loading navigation overlay spinner\"><a href=\"demos/loader/\" data-ajax=\"false\">Loader widget</a></li>\n";
echo "<li data-filtertext=\"navbar widget navmenu toolbars header footer\"><a href=\"demos/navbar/\" data-ajax=\"false\">Navbar widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Navigation<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"ajax navigation navigate widget history event method\"><a href=\"demos/navigation/\" data-ajax=\"false\">Navigation</a></li>\n";
echo "			<li data-filtertext=\"linking pages page links navigation ajax prefetch cache\"><a href=\"demos/navigation-linking-pages/\" data-ajax=\"false\">Linking pages</a></li>\n";
echo "			<!-- <li data-filtertext=\"php redirect server redirection server-side navigation\"><a href=\"demos/navigation-php-redirect/\" data-ajax=\"false\">PHP redirect demo</a></li>-->\n";
echo "			<li data-filtertext=\"navigation redirection hash query\"><a href=\"demos/navigation-hash-processing/\" data-ajax=\"false\">Hash processing demo</a></li>\n";
echo "			<li data-filtertext=\"navigation redirection hash query\"><a href=\"demos/page-events/\" data-ajax=\"false\">Page Navigation Events</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Pages<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"pages page widget ajax navigation\"><a href=\"demos/pages/\" data-ajax=\"false\">Pages</a></li>\n";
echo "			<li data-filtertext=\"single page\"><a href=\"demos/pages-single-page/\" data-ajax=\"false\">Single page</a></li>\n";
echo "			<li data-filtertext=\"multipage multi-page page\"><a href=\"demos/pages-multi-page/\" data-ajax=\"false\">Multi-page template</a></li>\n";
echo "			<li data-filtertext=\"dialog page widget modal popup\"><a href=\"demos/pages-dialog/\" data-ajax=\"false\">Dialog page</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Panel widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"panel widget sliding panels reveal push overlay responsive\"><a href=\"demos/panel/\" data-ajax=\"false\">Panel</a></li>\n";
echo "			<li data-filtertext=\"\"><a href=\"demos/panel-external/\" data-ajax=\"false\">External panels</a></li>\n";
echo "			<li data-filtertext=\"panel \"><a href=\"demos/panel-fixed/\" data-ajax=\"false\">Fixed panels</a></li>\n";
echo "			<li data-filtertext=\"panel slide panels sliding panels shadow rwd responsive breakpoint\"><a href=\"demos/panel-responsive/\" data-ajax=\"false\">Panels responsive</a></li>\n";
echo "			<li data-filtertext=\"panel custom style custom panel width reveal shadow listview panel styling page background wrapper\"><a href=\"demos/panel-styling/\" data-ajax=\"false\">Custom panel style</a></li>\n";
echo "			<li data-filtertext=\"panel open on swipe\"><a href=\"demos/panel-swipe-open/\" data-ajax=\"false\">Panel open on swipe</a></li>\n";
echo "			<li data-filtertext=\"panels outside page internal external toolbars\"><a href=\"demos/panel-external-internal/\" data-ajax=\"false\">Panel external and internal</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Popup widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"popup widget popups dialog modal transition tooltip lightbox form overlay screen flip pop fade transition\"><a href=\"demos/popup/\" data-ajax=\"false\">Popup</a></li>\n";
echo "			<li data-filtertext=\"popup alignment position\"><a href=\"demos/popup-alignment/\" data-ajax=\"false\">Popup alignment</a></li>\n";
echo "			<li data-filtertext=\"popup arrow size popups popover\"><a href=\"demos/popup-arrow-size/\" data-ajax=\"false\">Popup arrow size</a></li>\n";
echo "			<li data-filtertext=\"dynamic popups popup images lightbox\"><a href=\"demos/popup-dynamic/\" data-ajax=\"false\">Dynamic popups</a></li>\n";
echo "			<li data-filtertext=\"popups with iframes scaling\"><a href=\"demos/popup-iframe/\" data-ajax=\"false\">Popups with iframes</a></li>\n";
echo "			<li data-filtertext=\"popup image scaling\"><a href=\"demos/popup-image-scaling/\" data-ajax=\"false\">Popup image scaling</a></li>\n";
echo "			<li data-filtertext=\"external popup outside multi-page\"><a href=\"demos/popup-outside-multipage/\" data-ajax=\"false\">Popup outside multi-page</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"form rangeslider widget dual sliders dual handle sliders range input\"><a href=\"demos/rangeslider/\" data-ajax=\"false\">Rangeslider widget</a></li>\n";
echo "<li data-filtertext=\"responsive web design rwd adaptive progressive enhancement PE accessible mobile breakpoints media query media queries\"><a href=\"demos/rwd/\" data-ajax=\"false\">Responsive Web Design</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Selectmenu widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form selectmenu widget select input custom select menu selects\"><a href=\"demos/selectmenu/\" data-ajax=\"false\">Selectmenu</a></li>\n";
echo "			<li data-filtertext=\"form custom select menu selectmenu widget custom menu option optgroup multiple selects\"><a href=\"demos/selectmenu-custom/\" data-ajax=\"false\">Custom select menu</a></li>\n";
echo "			<li data-filtertext=\"filterable select filter popup dialog\"><a href=\"demos/selectmenu-custom-filter/\" data-ajax=\"false\">Custom select menu with filter</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Slider widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form slider widget range input single sliders\"><a href=\"demos/slider/\" data-ajax=\"false\">Slider</a></li>\n";
echo "			<li data-filtertext=\"form slider widget flipswitch slider binary select flip toggle switch\"><a href=\"demos/slider-flipswitch/\" data-ajax=\"false\">Slider flip toggle switch</a></li>\n";
echo "			<li data-filtertext=\"form slider tooltip handle value input range sliders\"><a href=\"demos/slider-tooltip/\" data-ajax=\"false\">Slider tooltip</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Table widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"table widget reflow column toggle th td responsive tables rwd hide show tabular\"><a href=\"demos/table-column-toggle/\" data-ajax=\"false\">Table Column Toggle</a></li>\n";
echo "			<li data-filtertext=\"table column toggle phone comparison demo\"><a href=\"demos/table-column-toggle-example/\" data-ajax=\"false\">Table Column Toggle demo</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table column toggle heading groups rwd breakpoint\"><a href=\"demos/table-column-toggle-heading-groups/\" data-ajax=\"false\">Table Column Toggle heading groups</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table column toggle hide rwd breakpoint customization options\"><a href=\"demos/table-column-toggle-options/\" data-ajax=\"false\">Table Column Toggle options</a></li>\n";
echo "			<li data-filtertext=\"table reflow th td responsive rwd columns tabular\"><a href=\"demos/table-reflow/\" data-ajax=\"false\">Table Reflow</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table reflow heading groups rwd breakpoint\"><a href=\"demos/table-reflow-heading-groups/\" data-ajax=\"false\">Table Reflow heading groups</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table reflow stripes strokes table style\"><a href=\"demos/table-reflow-stripes-strokes/\" data-ajax=\"false\">Table Reflow stripes and strokes</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table reflow stack custom styles\"><a href=\"demos/table-reflow-styling/\" data-ajax=\"false\">Table Reflow custom styles</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"ui tabs widget\"><a href=\"demos/tabs/\" data-ajax=\"false\">Tabs widget</a></li>\n";
echo "<li data-filtertext=\"form textinput widget text input textarea number date time tel email file color password\"><a href=\"demos/textinput/\" data-ajax=\"false\">Textinput widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Theming<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"default theme swatches theming style css\"><a href=\"demos/theme-default/\" data-ajax=\"false\">Default theme</a></li>\n";
echo "			<li data-filtertext=\"classic theme old theme swatches theming style css\"><a href=\"demos/theme-classic/\" data-ajax=\"false\">Classic theme</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Toolbar widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"toolbar widget header footer toolbars fixed fullscreen external sections\"><a href=\"demos/toolbar/\" data-ajax=\"false\">Toolbar</a></li>\n";
echo "			<li data-filtertext=\"dynamic toolbars dynamically add toolbar header footer\"><a href=\"demos/toolbar-dynamic/\" data-ajax=\"false\">Dynamic toolbars</a></li>\n";
echo "			<li data-filtertext=\"external toolbars header footer\"><a href=\"demos/toolbar-external/\" data-ajax=\"false\">External toolbars</a></li>\n";
echo "			<li data-filtertext=\"fixed toolbars header footer\"><a href=\"demos/toolbar-fixed/\" data-ajax=\"false\">Fixed toolbars</a></li>\n";
echo "			<li data-filtertext=\"fixed fullscreen toolbars header footer\"><a href=\"demos/toolbar-fixed-fullscreen/\" data-ajax=\"false\">Fullscreen toolbars</a></li>\n";
echo "			<li data-filtertext=\"external fixed toolbars header footer\"><a href=\"demos/toolbar-fixed-external/\" data-ajax=\"false\">Fixed external toolbars</a></li>\n";
echo "			<li data-filtertext=\"external persistent toolbars header footer navbar navmenu\"><a href=\"demos/toolbar-fixed-persistent/\" data-ajax=\"false\">Persistent toolbars</a></li>\n";
echo "			<li data-filtertext=\"external ajax optimized toolbars persistent toolbars header footer navbar\"><a href=\"demos/toolbar-fixed-persistent-optimized/\" data-ajax=\"false\">Ajax optimized toolbars</a></li>\n";
echo "			<li data-filtertext=\"form in toolbars header footer\"><a href=\"demos/toolbar-fixed-forms/\" data-ajax=\"false\">Form in toolbar</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"page transitions animated pages popup navigation flip slide fade pop\"><a href=\"demos/transitions/\" data-ajax=\"false\">Transitions</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			3rd party API demos<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"backbone requirejs navigation router\"><a href=\"demos/backbone-requirejs/\" data-ajax=\"false\">Backbone RequireJS</a></li>\n";
echo "			<li data-filtertext=\"google maps geolocation demo\"><a href=\"demos/map-geolocation/\" data-ajax=\"false\">Google Maps geolocation</a></li>\n";
echo "			<li data-filtertext=\"google maps hybrid\"><a href=\"demos/map-list-toggle/\" data-ajax=\"false\">Google Maps list toggle</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "\n";
echo "\n";
echo "\n";
echo "			</ul>\n";
echo "		</div>\n";
echo "	</div>"; ?>
    
    <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
		
    <?php echo "<div class=\"jqm-search\">\n";
echo "			<ul class=\"jqm-list\" data-filter-placeholder=\"Search demos...\" data-filter-reveal=\"true\">\n";
echo "<li data-filtertext=\"demos homepage\" data-icon=\"home\"><a href=\"demos/./\">Home</a></li>\n";
echo "<li data-filtertext=\"introduction overview getting started\"><a href=\"demos/intro/\" data-ajax=\"false\">Introduction</a></li>\n";
echo "<li data-filtertext=\"buttons button markup buttonmarkup method anchor link button element\"><a href=\"demos/button-markup/\" data-ajax=\"false\">Buttons</a></li>\n";
echo "<li data-filtertext=\"form button widget input button submit reset\"><a href=\"demos/button/\" data-ajax=\"false\">Button widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "		    Checkboxradio widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form checkboxradio widget checkbox input checkboxes controlgroups\"><a href=\"demos/checkboxradio-checkbox/\" data-ajax=\"false\">Checkboxes</a></li>\n";
echo "			<li data-filtertext=\"form checkboxradio widget radio input radio buttons controlgroups\"><a href=\"demos/checkboxradio-radio/\" data-ajax=\"false\">Radio buttons</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Collapsible (set) widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"collapsibles content formatting\"><a href=\"demos/collapsible/\" data-ajax=\"false\">Collapsible</a></li>\n";
echo "			<li data-filtertext=\"dynamic collapsible set accordion append expand\"><a href=\"demos/collapsible-dynamic/\" data-ajax=\"false\">Dynamic collapsibles</a></li>\n";
echo "			<li data-filtertext=\"accordions collapsible set widget content formatting grouped collapsibles\"><a href=\"demos/collapsibleset/\" data-ajax=\"false\">Collapsible set</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Controlgroup widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical\"><a href=\"demos/controlgroup/\" data-ajax=\"false\">Controlgroup</a></li>\n";
echo "			<li data-filtertext=\"dynamic controlgroup dynamically add buttons\"><a href=\"demos/controlgroup-dynamic/\" data-ajax=\"false\">Dynamic controlgroups</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"form datepicker widget date input\"><a href=\"demos/datepicker/\" data-ajax=\"false\">Datepicker</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Events<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"swipe to delete list items listviews swipe events\"><a href=\"demos/swipe-list/\" data-ajax=\"false\">Swipe list items</a></li>\n";
echo "			<li data-filtertext=\"swipe to navigate swipe page navigation swipe events\"><a href=\"demos/swipe-page/\" data-ajax=\"false\">Swipe page navigation</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"filterable filter elements sorting searching listview table\"><a href=\"demos/filterable/\" data-ajax=\"false\">Filterable widget</a></li>\n";
echo "<li data-filtertext=\"form flipswitch widget flip toggle switch binary select checkbox input\"><a href=\"demos/flipswitch/\" data-ajax=\"false\">Flipswitch widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Forms<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements\"><a href=\"demos/forms/\" data-ajax=\"false\">Forms</a></li>\n";
echo "			<li data-filtertext=\"form hide labels hidden accessible ui-hidden-accessible forms\"><a href=\"demos/forms-label-hidden-accessible/\" data-ajax=\"false\">Hide labels</a></li>\n";
echo "			<li data-filtertext=\"form field containers fieldcontain ui-field-contain forms\"><a href=\"demos/forms-field-contain/\" data-ajax=\"false\">Field containers</a></li>\n";
echo "			<li data-filtertext=\"forms disabled form elements\"><a href=\"demos/forms-disabled/\" data-ajax=\"false\">Forms disabled</a></li>\n";
echo "			<li data-filtertext=\"forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements\"><a href=\"demos/forms-gallery/\" data-ajax=\"false\">Forms gallery</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Grids<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"grids columns blocks content formatting rwd responsive css framework\"><a href=\"demos/grids/\" data-ajax=\"false\">Grids</a></li>\n";
echo "			<li data-filtertext=\"buttons in grids css framework\"><a href=\"demos/grids-buttons/\" data-ajax=\"false\">Buttons in grids</a></li>\n";
echo "			<li data-filtertext=\"custom responsive grids rwd css framework\"><a href=\"demos/grids-custom-responsive/\" data-ajax=\"false\">Custom responsive grids</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"blocks content formatting sections heading\"><a href=\"demos/body-bar-classes/\" data-ajax=\"false\">Grouping and dividing content</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Icons<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"button icons svg disc alt custom icon position\"><a href=\"demos/icons/\" data-ajax=\"false\">Icons</a></li>\n";
echo "			<li data-filtertext=\"\"><a href=\"demos/icons-grunticon/\" data-ajax=\"false\">Grunticon loader</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Listview widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"listview widget thumbnails icons nested split button collapsible ul ol\"><a href=\"demos/listview/\" data-ajax=\"false\">Listview</a></li>\n";
echo "			<li data-filtertext=\"autocomplete filterable reveal listview filtertextbeforefilter placeholder\"><a href=\"demos/listview-autocomplete/\" data-ajax=\"false\">Listview autocomplete</a></li>\n";
echo "			<li data-filtertext=\"autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder\"><a href=\"demos/listview-autocomplete-remote/\" data-ajax=\"false\">Listview autocomplete remote data</a></li>\n";
echo "			<li data-filtertext=\"autodividers anchor jump scroll linkbars listview lists ul ol\"><a href=\"demos/listview-autodividers-linkbar/\" data-ajax=\"false\">Listview autodividers linkbar</a></li>\n";
echo "			<li data-filtertext=\"listview autodividers selector autodividersselector lists ul ol\"><a href=\"demos/listview-autodividers-selector/\" data-ajax=\"false\">Listview autodividers selector</a></li>\n";
echo "			<li data-filtertext=\"listview nested list items\"><a href=\"demos/listview-nested-lists/\" data-ajax=\"false\">Nested Listviews</a></li>\n";
echo "			<li data-filtertext=\"listview collapsible list items flat\"><a href=\"demos/listview-collapsible-item-flat/\" data-ajax=\"false\">Listview collapsible list items (flat)</a></li>\n";
echo "			<li data-filtertext=\"listview collapsible list indented\"><a href=\"demos/listview-collapsible-item-indented/\" data-ajax=\"false\">Listview collapsible list items (indented)</a></li>\n";
echo "			<li data-filtertext=\"grid listview responsive grids responsive listviews lists ul\"><a href=\"demos/listview-grid/\" data-ajax=\"false\">Listview responsive grid</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"loader widget page loading navigation overlay spinner\"><a href=\"demos/loader/\" data-ajax=\"false\">Loader widget</a></li>\n";
echo "<li data-filtertext=\"navbar widget navmenu toolbars header footer\"><a href=\"demos/navbar/\" data-ajax=\"false\">Navbar widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Navigation<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"ajax navigation navigate widget history event method\"><a href=\"demos/navigation/\" data-ajax=\"false\">Navigation</a></li>\n";
echo "			<li data-filtertext=\"linking pages page links navigation ajax prefetch cache\"><a href=\"demos/navigation-linking-pages/\" data-ajax=\"false\">Linking pages</a></li>\n";
echo "			<!-- <li data-filtertext=\"php redirect server redirection server-side navigation\"><a href=\"demos/navigation-php-redirect/\" data-ajax=\"false\">PHP redirect demo</a></li>-->\n";
echo "			<li data-filtertext=\"navigation redirection hash query\"><a href=\"demos/navigation-hash-processing/\" data-ajax=\"false\">Hash processing demo</a></li>\n";
echo "			<li data-filtertext=\"navigation redirection hash query\"><a href=\"demos/page-events/\" data-ajax=\"false\">Page Navigation Events</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Pages<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"pages page widget ajax navigation\"><a href=\"demos/pages/\" data-ajax=\"false\">Pages</a></li>\n";
echo "			<li data-filtertext=\"single page\"><a href=\"demos/pages-single-page/\" data-ajax=\"false\">Single page</a></li>\n";
echo "			<li data-filtertext=\"multipage multi-page page\"><a href=\"demos/pages-multi-page/\" data-ajax=\"false\">Multi-page template</a></li>\n";
echo "			<li data-filtertext=\"dialog page widget modal popup\"><a href=\"demos/pages-dialog/\" data-ajax=\"false\">Dialog page</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Panel widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"panel widget sliding panels reveal push overlay responsive\"><a href=\"demos/panel/\" data-ajax=\"false\">Panel</a></li>\n";
echo "			<li data-filtertext=\"\"><a href=\"demos/panel-external/\" data-ajax=\"false\">External panels</a></li>\n";
echo "			<li data-filtertext=\"panel \"><a href=\"demos/panel-fixed/\" data-ajax=\"false\">Fixed panels</a></li>\n";
echo "			<li data-filtertext=\"panel slide panels sliding panels shadow rwd responsive breakpoint\"><a href=\"demos/panel-responsive/\" data-ajax=\"false\">Panels responsive</a></li>\n";
echo "			<li data-filtertext=\"panel custom style custom panel width reveal shadow listview panel styling page background wrapper\"><a href=\"demos/panel-styling/\" data-ajax=\"false\">Custom panel style</a></li>\n";
echo "			<li data-filtertext=\"panel open on swipe\"><a href=\"demos/panel-swipe-open/\" data-ajax=\"false\">Panel open on swipe</a></li>\n";
echo "			<li data-filtertext=\"panels outside page internal external toolbars\"><a href=\"demos/panel-external-internal/\" data-ajax=\"false\">Panel external and internal</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Popup widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"popup widget popups dialog modal transition tooltip lightbox form overlay screen flip pop fade transition\"><a href=\"demos/popup/\" data-ajax=\"false\">Popup</a></li>\n";
echo "			<li data-filtertext=\"popup alignment position\"><a href=\"demos/popup-alignment/\" data-ajax=\"false\">Popup alignment</a></li>\n";
echo "			<li data-filtertext=\"popup arrow size popups popover\"><a href=\"demos/popup-arrow-size/\" data-ajax=\"false\">Popup arrow size</a></li>\n";
echo "			<li data-filtertext=\"dynamic popups popup images lightbox\"><a href=\"demos/popup-dynamic/\" data-ajax=\"false\">Dynamic popups</a></li>\n";
echo "			<li data-filtertext=\"popups with iframes scaling\"><a href=\"demos/popup-iframe/\" data-ajax=\"false\">Popups with iframes</a></li>\n";
echo "			<li data-filtertext=\"popup image scaling\"><a href=\"demos/popup-image-scaling/\" data-ajax=\"false\">Popup image scaling</a></li>\n";
echo "			<li data-filtertext=\"external popup outside multi-page\"><a href=\"demos/popup-outside-multipage/\" data-ajax=\"false\">Popup outside multi-page</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"form rangeslider widget dual sliders dual handle sliders range input\"><a href=\"demos/rangeslider/\" data-ajax=\"false\">Rangeslider widget</a></li>\n";
echo "<li data-filtertext=\"responsive web design rwd adaptive progressive enhancement PE accessible mobile breakpoints media query media queries\"><a href=\"demos/rwd/\" data-ajax=\"false\">Responsive Web Design</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Selectmenu widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form selectmenu widget select input custom select menu selects\"><a href=\"demos/selectmenu/\" data-ajax=\"false\">Selectmenu</a></li>\n";
echo "			<li data-filtertext=\"form custom select menu selectmenu widget custom menu option optgroup multiple selects\"><a href=\"demos/selectmenu-custom/\" data-ajax=\"false\">Custom select menu</a></li>\n";
echo "			<li data-filtertext=\"filterable select filter popup dialog\"><a href=\"demos/selectmenu-custom-filter/\" data-ajax=\"false\">Custom select menu with filter</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Slider widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"form slider widget range input single sliders\"><a href=\"demos/slider/\" data-ajax=\"false\">Slider</a></li>\n";
echo "			<li data-filtertext=\"form slider widget flipswitch slider binary select flip toggle switch\"><a href=\"demos/slider-flipswitch/\" data-ajax=\"false\">Slider flip toggle switch</a></li>\n";
echo "			<li data-filtertext=\"form slider tooltip handle value input range sliders\"><a href=\"demos/slider-tooltip/\" data-ajax=\"false\">Slider tooltip</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Table widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"table widget reflow column toggle th td responsive tables rwd hide show tabular\"><a href=\"demos/table-column-toggle/\" data-ajax=\"false\">Table Column Toggle</a></li>\n";
echo "			<li data-filtertext=\"table column toggle phone comparison demo\"><a href=\"demos/table-column-toggle-example/\" data-ajax=\"false\">Table Column Toggle demo</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table column toggle heading groups rwd breakpoint\"><a href=\"demos/table-column-toggle-heading-groups/\" data-ajax=\"false\">Table Column Toggle heading groups</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table column toggle hide rwd breakpoint customization options\"><a href=\"demos/table-column-toggle-options/\" data-ajax=\"false\">Table Column Toggle options</a></li>\n";
echo "			<li data-filtertext=\"table reflow th td responsive rwd columns tabular\"><a href=\"demos/table-reflow/\" data-ajax=\"false\">Table Reflow</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table reflow heading groups rwd breakpoint\"><a href=\"demos/table-reflow-heading-groups/\" data-ajax=\"false\">Table Reflow heading groups</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table reflow stripes strokes table style\"><a href=\"demos/table-reflow-stripes-strokes/\" data-ajax=\"false\">Table Reflow stripes and strokes</a></li>\n";
echo "			<li data-filtertext=\"responsive tables table reflow stack custom styles\"><a href=\"demos/table-reflow-styling/\" data-ajax=\"false\">Table Reflow custom styles</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"ui tabs widget\"><a href=\"demos/tabs/\" data-ajax=\"false\">Tabs widget</a></li>\n";
echo "<li data-filtertext=\"form textinput widget text input textarea number date time tel email file color password\"><a href=\"demos/textinput/\" data-ajax=\"false\">Textinput widget</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Theming<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"default theme swatches theming style css\"><a href=\"demos/theme-default/\" data-ajax=\"false\">Default theme</a></li>\n";
echo "			<li data-filtertext=\"classic theme old theme swatches theming style css\"><a href=\"demos/theme-classic/\" data-ajax=\"false\">Classic theme</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			Toolbar widget<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"toolbar widget header footer toolbars fixed fullscreen external sections\"><a href=\"demos/toolbar/\" data-ajax=\"false\">Toolbar</a></li>\n";
echo "			<li data-filtertext=\"dynamic toolbars dynamically add toolbar header footer\"><a href=\"demos/toolbar-dynamic/\" data-ajax=\"false\">Dynamic toolbars</a></li>\n";
echo "			<li data-filtertext=\"external toolbars header footer\"><a href=\"demos/toolbar-external/\" data-ajax=\"false\">External toolbars</a></li>\n";
echo "			<li data-filtertext=\"fixed toolbars header footer\"><a href=\"demos/toolbar-fixed/\" data-ajax=\"false\">Fixed toolbars</a></li>\n";
echo "			<li data-filtertext=\"fixed fullscreen toolbars header footer\"><a href=\"demos/toolbar-fixed-fullscreen/\" data-ajax=\"false\">Fullscreen toolbars</a></li>\n";
echo "			<li data-filtertext=\"external fixed toolbars header footer\"><a href=\"demos/toolbar-fixed-external/\" data-ajax=\"false\">Fixed external toolbars</a></li>\n";
echo "			<li data-filtertext=\"external persistent toolbars header footer navbar navmenu\"><a href=\"demos/toolbar-fixed-persistent/\" data-ajax=\"false\">Persistent toolbars</a></li>\n";
echo "			<li data-filtertext=\"external ajax optimized toolbars persistent toolbars header footer navbar\"><a href=\"demos/toolbar-fixed-persistent-optimized/\" data-ajax=\"false\">Ajax optimized toolbars</a></li>\n";
echo "			<li data-filtertext=\"form in toolbars header footer\"><a href=\"demos/toolbar-fixed-forms/\" data-ajax=\"false\">Form in toolbar</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "<li data-filtertext=\"page transitions animated pages popup navigation flip slide fade pop\"><a href=\"demos/transitions/\" data-ajax=\"false\">Transitions</a></li>\n";
echo "<li data-role=\"collapsible\" data-enhanced=\"true\" data-collapsed-icon=\"carat-d\" data-expanded-icon=\"carat-u\" data-iconpos=\"right\" data-inset=\"false\" class=\"ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed\">\n";
echo "	<h3 class=\"ui-collapsible-heading ui-collapsible-heading-collapsed\">\n";
echo "		<a href=\"#\" class=\"ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d\">\n";
echo "			3rd party API demos<span class=\"ui-collapsible-heading-status\"> click to expand contents</span>\n";
echo "		</a>\n";
echo "	</h3>\n";
echo "	<div class=\"ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed\" aria-hidden=\"true\">\n";
echo "		<ul>\n";
echo "			<li data-filtertext=\"backbone requirejs navigation router\"><a href=\"demos/backbone-requirejs/\" data-ajax=\"false\">Backbone RequireJS</a></li>\n";
echo "			<li data-filtertext=\"google maps geolocation demo\"><a href=\"demos/map-geolocation/\" data-ajax=\"false\">Google Maps geolocation</a></li>\n";
echo "			<li data-filtertext=\"google maps hybrid\"><a href=\"demos/map-list-toggle/\" data-ajax=\"false\">Google Maps list toggle</a></li>\n";
echo "		</ul>\n";
echo "	</div>\n";
echo "</li>\n";
echo "\n";
echo "\n";
echo "\n";
echo "			</ul>\n";
echo "		</div>";
 ?>
    
    </div><!-- /panel -->


</div><!-- /page -->

</body>
</html>

