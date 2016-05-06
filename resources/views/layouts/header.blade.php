<!DOCTYPE html> 
<html class=no-js>
	<!-- Mirrored from theme-shop.biz/pixels/html/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 15 Jul 2015 14:44:32 GMT -->
	<head>
		<meta charset=utf-8>
		<title>@yield('title')</title>
		<meta name="description" content=" HTML5, CSS3">
		<meta name="viewport" content="width=device-width">
		<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic" rel=stylesheet type=text/css>
		 <meta name="_token" content="{!! csrf_token() !!}"/>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory --> 
		<link rel="stylesheet"  href="{{ URL::asset('admin/styles/ad91f554.vendor.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('admin/styles/f7a443d9.main.css') }}">
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<style type="text/css">
	.error { color:red;  font-size: 12px;   content:"*"; }</style>
	<body>
		<!--[if lt IE 10]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]--> <!-- BEGIN - content-wrapper --> 
		<div class="content-wrapper fixed-header fixed-sidebar quickchat-visible show-avatar">
			<!-- BEGIN - nav-container --> 
			<div class="nav-container">
				<!-- BEGIN - scrollbar-padder --> 
				<div class="scrollbar-padder">
					<!-- BEGIN - sidebar-header --> 
					<div class="sidebar-header">
						<a href="javascript:void(0)" class="pull-left visible-xs" data-toggle-class=phone-menu-visible data-target=.content-wrapper><i class="fa fa-bars fa-fw"></i></a> 
						<a data-ui-sref=app.dashboard.dashboard-1 class=ls-sm>
							<!-- <i class="fa fa-th"></i>  --> <span>A</span><span>nzapp</span> 
						</a>
					</div>
					<!-- END - sidebar-header --> <!-- BEGIN - sidebar-avatar --> 
					<div class="sidebar-avatar text-center">
						<img src="{{ URL::asset('admin/images/avatar2.png') }}" alt="" class="img-circle m-b-md" width=100 height=100> 
						<h5 class="text-uppercase ls-xs m-b-md">Welcome Admin</h5>
						<div class=sidebar-income-chart>
							<!-- <div class="income-sparkline"> --> <span class=sidebar-income-sparkline></span> <!-- </div> --> 
							<h4 id="timer" class="fw-thkr text-center">00:00:00 PM</h4>
							<p class="fw-lgh"t>Your total income for last year in all the sales</p>
						</div>
						<div class=container-fluid>
							<div class=row>
								<div class=col-xs-6>
									<p class=text-left> <a href="javascript:void(0)" data-tooltip=Lock class=sba-lock> <i class="fa fa-lock"></i> </a> </p>
								</div>
								<div class=col-xs-6>
									<p class=text-right> <a href="javascript:void(0)" data-tooltip=Settings class=sba-settings> <i class="fa fa-cog"></i> </a> </p>
								</div>
							</div>
						</div>
					</div>
					<!-- END - sidebar-avatar --> <!-- BEGIN - navigation-items --> 
					<ul id="navigation-items" class="nav">
						<li class="menu-header"><span>Apps</span></li>
						<li> <a href="#" class="waves-effect"> <i class="icon-home"></i><span>Dashboard</span> </a> </li>
						<li>
							<a href="javascript:void(0)" class="waves-effect"> <i class="fa fa-users"></i><span>Members</span> </a> <!-- ul --> 
							<ul class=sub-menu>
								<li> <a href="{!!  URL::to('admin/members') !!}"> <i class="fa fa-angle-right"></i><span>All Members</span> </a> </li>
								<li> <a href="{!!  URL::to('admin/list/members', 'active') !!}"> <i class="fa fa-angle-right"></i><span>Active Members</span> </a> </li>
								<li> <a href="{!!  URL::to('admin/list/members', 'inactive') !!}"> <i class="fa fa-angle-right"></i><span>InActive Members</span> </a> </li>
								<li> <a href="{!!  URL::to('admin/list/members', 'ban') !!}"> <i class="fa fa-angle-right"></i><span>Banned Members</span> </a> </li>
 							</ul>
							<!-- ul --> 
						</li>
						 <li>
							<a href="javascript:void(0)" class="waves-effect"> <i class="fa fa-sitemap"></i><span>Employee Directory</span> </a> <!-- ul --> 
							<ul class=sub-menu>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>All Employees</span> </a> </li>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>Add an Employee</span> </a> </li>
 							</ul> 
						</li>
						<li class="menu-header"><span>News Events</span></li>
						 <li>
							<a href="javascript:void(0)" class="waves-effect"> <i class="fa fa-road"></i><span>Activities</span> </a> <!-- ul --> 
							<ul class=sub-menu>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>All Activities</span> </a> </li>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>Add an Activity</span> </a> </li>
 							</ul> 
						</li>
						 <li>
							<a href="javascript:void(0)" class="waves-effect"> <i class="icon-calendar"></i><span>Calender Event</span> </a> <!-- ul --> 
							<ul class=sub-menu>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>All Events</span> </a> </li>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>Add an Event</span> </a> </li>
 							</ul> 
						</li>
						 <li>
							<a href="javascript:void(0)" class="waves-effect"> <i class="icon-list"></i><span>News Feeds</span> </a> <!-- ul --> 
							<ul class=sub-menu>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>All Feeds</span> </a> </li>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>Add a Feed</span> </a> </li>
 							</ul> 
						</li>
						<li class="menu-header"><span>Settings / Tools</span></li>
						<li> <a href="#" class="waves-effect"> <i class="fa fa-photo"></i><span>Gallery</span> </a> </li>
						<li> <a href="#" class="waves-effect"> <i class="icon-envelope"></i><span>Contact Info.</span> </a> </li>
						<li>
							<a href="javascript:void(0)" class="waves-effect"> <i class="fa fa-file-text-o"></i><span>Site Pages</span> </a> <!-- ul --> 
							<ul class=sub-menu>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>All Pages</span> </a> </li>
								<li> <a href="#"> <i class="fa fa-angle-right"></i><span>Add a Page</span> </a> </li>
 							</ul>
							<!-- ul --> 
						</li>
					</ul>
					<!-- END - navigation-items --> <!-- BEGIN - sidebar-stats --> 
					 
				</div>
				<!-- BEGIN - scrollbar-padder --> 
			</div>
			<!-- END - nav-container --> <!-- BEGIN - view-wrapper --> 
			<div class="view-wrapper clearfix">
				<!-- BEGIN - header-container --> 
				<header class=header-container>
					<!-- logo-container --> 
					<div class=logo-container>
						<a href="javascript:void(0)" class="pull-left visible-xs" data-toggle-class=phone-menu-visible data-target=.content-wrapper><i class="fa fa-bars fa-fw"></i></a> <a data-ui-sref=app.dashboard.dashboard-1 class=ls-sm> <span>P</span><span>ixels</span> </a> <!-- <a data-ui-sref="app.dashboard.dashboard-1" class="short-name fw-lght ls-sm">P</a>		 --> 
					</div>
					<!-- logo-container --> <!-- ul --> 
					<ul class=header-menu-left>
						<!-- li --> 
						<li>
							<!-- a --> <a href="javascript:void(0)" class=toggle-collapsed-sidebar> <i class="fa fa-bars fa-fw"></i> </a> <!-- a --> 
						</li>
						<!-- li --> <!-- li --> 
						 
					 
					</ul>
					<!-- ul --> <!-- header-menu --> 
					<ul class=header-menu-right>
						<li>
							<form class=header-form>
								<div class=input-container> <input type=search placeholder="Search here..."> <i class="fa fa-search fa-fw"></i> </div>
							</form>
						</li>
					<li class="">  
							<a href="../logout.php" style="color: white" class="btn-danger"> <i class="fa fa-lock"></i>&nbsp;&nbsp;<span> Logout </span></a> </li></ul>
					<!-- header-menu --> 
				</header>
				<!-- END - header-container --> <!-- BEGIN - main-content --> 
				<div class="main-content">
					<div class="breadcrumb-container"> <ol class="breadcrumb"> <li>Home</li> <li>@yield('mainTitle')</li> <li><a href="javascript:void(0)">@yield('subTitle')</a></li> </ol> </div>
					<!-- page-title --> 
					<div class="page-title"> 
						<h2 class="fw-thk">@yield('title')</h2>
					 <p> @yield('pageDescp')</p>
					 </div>
					<!-- page-title --> <!-- row --> 
					 <div class="row">
	<!-- col-md-12 --> 
	<div class="col-md-12">
		<!-- panel --> 
		<div class="panel panel-default">
			<!-- panel heading --> 
			<div class="panel-heading text-uppercase fw-thk"> @yield('panelHeading')</div>
			<!-- panel heading --> <!-- panel body --> 
			<div class="panel-body">

					@yield('content')

				</div>
			<!-- panel body --> 
		</div>
		<!-- panel --> 
	</div>
	<!-- col-md-12 --> 
</div>
					<!-- row --> 
				</div>
				<!-- END - main-content --> 
			</div>
			<!-- END - view-wrapper --> <!-- BEGIN - quickchat --> 
			 
			<!-- END - quickchat --> <button class=controls-toggle data-toggle-class=controls-visible data-target=.controls-container> <i class="fa fa-cog"></i> </button> <!-- BEGIN - controls-container --> 
			<div class=controls-container>
				<!-- controls --> 
				<div class=controls>
					<!-- tab-container --> 
					<div class=tab-container>
						<ul class="nav nav-tabs" role=tablist>
							<li role=presentation class=active> <a href=#profile-container aria-controls=profile-container role=tab data-toggle=tab><i class="fa fa-user"></i></a> </li>
							<li role=presentation> <a href=#settings-container aria-controls=settings-container data-toggle=tab><i class="fa fa-wrench"></i></a> </li>
							<li role=presentation> <a href=#themes-container aria-controls=themes-container data-toggle=tab><i class="fa fa-paint-brush"></i></a> </li>
						</ul>
						<div class=tab-content>
							<!-- profile-container --> 
							<div role=tabpanel class="tab-pane profile-container active" id=profile-container>
								<!-- media --> 
								<div class="media">
									<!-- profile-image --> 
									<div class="profile-image pull-left"> <img src=images/9f2498a8.avatar1.png alt="" height=100 width=100 class=pull-left> </div>
									<!-- profile-image --> <!-- media-body --> 
									<div class=media-body>
										<h5 class="text-uppercase fw-thkr ls-xs">Andrew Curtis</h5>
										<small class=text-uppercase>Director</small> 
									</div>
									<!-- media-body --> 
								</div>
								<!-- media --> <!-- profile-options --> 
								<div class=profile-options>
									<!-- ul --> 
									<ul>
										<!-- li --> 
										<li>
											<a href="javascript:void(0)">
												<p class=text-left>Profile <span class=pull-right><i class="fa fa-fw fa-user"></i></span></p>
											</a>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<a href="javascript:void(0)">
												<p class=text-left>Settings <span class=pull-right><i class="fa fa-fw fa-cog"></i></span></p>
											</a>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<a href="javascript:void(0)">
												<p class=text-left>Lock <span class=pull-right><i class="fa fa-fw fa-lock"></i></span></p>
											</a>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<a href="javascript:void(0)">
												<p class=text-left>Help <span class=pull-right><i class="fa fa-fw fa-question-circle"></i></span></p>
											</a>
										</li>
										<!-- li --> 
									</ul>
									<!-- ul --> 
								</div>
								<!-- profile-options --> 
							</div>
							<!-- profile-container --> <!-- settings-container --> 
							<div role=tabpanel class="tab-pane settings-container" id="settings-container">
								<h4 class=fw-thkr>Layout Options</h4>
								<form>
									<div class="form-group">
										<div class=checkbox>
											<div class="switch info"> Fixed Header <label class=pull-right> <input type=checkbox value=fixed-header id=fixed-header-cb checked> <span class=lever></span> </label> </div>
										</div>
									</div>
									<div class=form-group>
										<div class=checkbox>
											<div class="switch info"> Collapsed Sidebar <label class=pull-right> <input type=checkbox value=collapsed-sidebar id=collapsed-sidebar-cb> <span class=lever></span> </label> </div>
										</div>
									</div>
									<div class=form-group>
										<div class=checkbox>
											<div class="switch info"> Fixed Sidebar <label class=pull-right> <input type=checkbox value=fixed-sidebar id=fixed-sidebar-cb checked> <span class=lever></span> </label> </div>
										</div>
									</div>
									<div class=form-group>
										<div class=checkbox>
											<div class="switch info"> Fixed Footer <label class=pull-right> <input type=checkbox value=fixed-footer id=fixed-footer-cb> <span class=lever></span> </label> </div>
										</div>
									</div>
									<div class=form-group>
										<div class=checkbox>
											<div class="switch info"> Show Avatar <label class=pull-right> <input type=checkbox value=show-avatar id=show-avatar-cb> <span class=lever></span> </label> </div>
										</div>
									</div>
								</form>
							</div>
							<!-- settings-container --> <!-- themes-container --> 
							<div role=tabpanel class="tab-pane themes-container" id=themes-container>
								<h4 class=fw-thkr>Themes</h4>
								<div class=themes-list>
									<ul class=list-inline>
										<!-- li --> 
										<li>
											<div id=theme-default class="app-theme theme-default" data-theme=theme-default></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-under-water class="app-theme theme-under-water" data-theme=theme-under-water></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-fairy-cash class="app-theme theme-fairy-cash" data-theme=theme-fairy-cash></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-autumn class="app-theme theme-autumn" data-theme=theme-autumn></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-wisteria class="app-theme theme-wisteria" data-theme=theme-wisteria></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-magenta class="app-theme theme-magenta" data-theme=theme-magenta></div>
										</li>
										<!-- li --> 
									</ul>
									<ul class=list-inline>
										<!-- li --> 
										<li>
											<div id=theme-default-header class="app-theme theme-default-header" data-theme=theme-default-white></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-under-water-header class="app-theme theme-under-water-header" data-theme=theme-under-water-white></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-fairy-cash-header class="app-theme theme-fairy-cash-header" data-theme=theme-fairy-cash-white></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-autumn-header class="app-theme theme-autumn-header" data-theme=theme-autumn-white></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-wisteria-header class="app-theme theme-wisteria-header" data-theme=theme-wisteria-white></div>
										</li>
										<!-- li --> <!-- li --> 
										<li>
											<div id=theme-magenta-header class="app-theme theme-magenta-header" data-theme=theme-magenta-white></div>
										</li>
										<!-- li --> 
									</ul>
									<div class=page-transition-container>
										<select name=page-transition id=page-transition disabled>
											<option value=transition-move-from-left selected>Move From Left 
											<option value=transition-move-from-right>Move From Right 
											<option value=transition-scale-down>Scale Down 
											<option value=transition-scale-up>Scale Up 
											<option value=transition-scale-down-center>Scale Down Center 
											<option value=transition-flip>Flip 
											<option value=transition-fade-in-up>Fade In Up 
										</select>
									</div>
									<button class="btn btn-block btn-danger reset-button" ng-click=resetStorage()>Reset</button> 
								</div>
							</div>
							<!-- themes-container --> 
						</div>
					</div>
					<!-- tab-container --> 
				</div>
				<!-- controls --> 
			</div>
			<!-- END - controls-container --> <!-- BEGIN - footer-container --> 
			<footer class=footer-container>
				<p class=text-left> Copyright &copy; 2015 - 1.0.1 </p>
			</footer>
			<!-- END - footer-container --> 
		</div>

		<!-- END - content-wrapper --> 
		<script src="{{ URL::asset('admin/scripts/33359daf.vendor.js') }}"></script> 
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --> 
		<script>//(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		// 	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		// 	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		// 	e.src='../../../www.google-analytics.com/analytics.js';
		// 	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		// 	ga('create','UA-XXXXX-X');ga('send','pageview');
		</script> 
		<script src="{{ URL::asset('admin/scripts/811eaa08.main.js') }}"></script>
		<script src="{{ URL::asset('admin/scripts/index.js') }}"></script>
