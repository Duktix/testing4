@if(!empty(getSetting('transparent_header','header')))
	.navbar-custom{
		background-color: transparent;
	}
@else
	.navbar-custom{
		{{ !empty(getSetting('header_bg_color','header')) ? 'background-color:'.getSetting('header_bg_color','header').';' : '' }}
	}
@endif
.navbar-toggle{
	{{ !empty(getSetting('toggle_button_bg_color','header')) ? 'background-color:'.getSetting('toggle_button_bg_color','header').';' : '' }}
}
.navbar-custom .navbar-nav li a{
	{{ !empty(getSetting('header_menu_items_bg_color','header')) ? 'background-color:'.getSetting('header_menu_items_bg_color','header').';' : '' }}
	{{ !empty(getSetting('header_menu_items_color','header')) ? 'color:'.getSetting('header_menu_items_color','header').';' : '' }}
}
.navbar-custom .navbar-nav li:hover > a{
	{{ !empty(getSetting('header_menu_items_bg_color_hover','header')) ? 'background-color:'.getSetting('header_menu_items_bg_color_hover','header').';' : '' }}
	{{ !empty(getSetting('header_menu_items_color_hover','header')) ? 'color:'.getSetting('header_menu_items_color_hover','header').';' : '' }}
}
.navbar-custom .navbar-nav li.active > a{
	{{ !empty(getSetting('header_menu_items_bg_color_hover','header')) ? 'background-color:'.getSetting('header_menu_items_bg_color_hover','header').';' : '' }}
	{{ !empty(getSetting('header_menu_items_color_hover','header')) ? 'color:'.getSetting('header_menu_items_color_hover','header').';' : '' }}
}
.sticky-wrapper.is-sticky .navbar-custom{
	{{ !empty(getSetting('static_background_color','header')) ? 'background-color:'.getSetting('static_background_color','header').';' : '' }}
}
.sticky-wrapper.is-sticky .navbar-custom .navbar-nav li a{
	{{ !empty(getSetting('static_menu_item_color','header')) ? 'color:'.getSetting('static_menu_item_color','header').';' : '' }}
}
.sticky-wrapper.is-sticky .navbar-custom .navbar-nav li:hover > a{
	{{ !empty(getSetting('static_menu_item_color_hover','header')) ? 'color:'.getSetting('static_menu_item_color_hover','header').';' : '' }}
}

