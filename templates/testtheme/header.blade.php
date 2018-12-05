
<div class="navbar  
@if(!empty(getSetting('transparent_header','header')))
	@if(!empty(getSetting('transparent_home_only','header')) && is_home($page->slug))
		transparent navbar-fixed-top
	@elseif(empty(getSetting('transparent_home_only','header')))
		transparent navbar-fixed-top
	@endif
@endif
@if(!empty(getSetting('static_header','header')))
	@if(!empty(getSetting('static_home_only','header')) && is_home($page->slug))
		sticky navbar-fixed-top
	@elseif(empty(getSetting('static_home_only','header')))
		sticky navbar-fixed-top
	@endif
@endif
navbar-custom" 
@if(!empty(getSetting('static_header','header')))
	@if(!empty(getSetting('static_home_only','header')) && is_home($page->slug))
		id="sticky-nav"
	@elseif(empty(getSetting('static_home_only','header')))
		id="sticky-nav"
	@endif
@endif
role="navigation" >
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand logo" href="index.html">
				@if(!empty(getSetting('logo','header')))
				<img src="{{ getSetting('logo','header') }}" class="img-responsive">
				@endif
			</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				{!! getMenubyID(getSetting('menu_location_top','header')) !!}
			</ul>

		</div>
	</div>
</div>
