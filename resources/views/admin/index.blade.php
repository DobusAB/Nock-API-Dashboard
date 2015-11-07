<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>
<meta charset="utf-8">
<title>Metronic | Page Layouts - Horizontal Mega Menu 2</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css">

<link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css">
<link id="style_color" href="/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="/assets/admin/layout/img/logo.png" alt="logo" class="logo-default">
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="classic-menu-dropdown active">
					<a href="index.html">
					Dashboard <span class="selected">
					</span>
					</a>
				</li>
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;" data-hover="megamenu-dropdown" data-close-others="true" class="hover-initialized">
					Classic <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-left">
						<li>
							<a href="javascript:;">
							<i class="fa fa-bookmark-o"></i> Section 1 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-user"></i> Section 2 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-puzzle-piece"></i> Section 3 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-gift"></i> Section 4 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-table"></i> Section 5 </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<form class="search-form" action="extra_search.html" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="../../assets/admin/layout/img/avatar3_small.jpg">
					<span class="username username-hide-on-mobile">
					Nick </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="login.html">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- BEGIN HORIZONTAL RESPONSIVE MENU -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search sidebar-search-bordered" action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn submit"><i class="icon-magnifier"></i></button>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="active">
					<a href="index.html">
					Dashboard <span class="selected">
					</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					Mega <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li class="active">
									<a href="layout_horizontal_sidebar_menu.html">
									Horizontal &amp; Sidebar Menu </a>
								</li>
								<li>
									<a href="index_horizontal_menu.html">
									Dashboard &amp; Mega Menu </a>
								</li>
								<li>
									<a href="layout_horizontal_menu1.html">
									Horizontal Mega Menu 1 </a>
								</li>
								<li>
									<a href="layout_horizontal_menu2.html">
									Horizontal Mega Menu 2 </a>
								</li>
								<li>
									<a href="layout_fontawesome_icons.html">
									<span class="badge badge-roundless badge-danger">new</span>Layout with Fontawesome Icons</a>
								</li>
								<li>
									<a href="layout_glyphicons.html">
									Layout with Glyphicon</a>
								</li>
								<li>
									<a href="layout_full_height_portlet.html">
									<span class="badge badge-roundless badge-success">new</span>Full Height Portlet</a>
								</li>
								<li>
									<a href="layout_full_height_content.html">
									<span class="badge badge-roundless badge-warning">new</span>Full Height Content</a>
								</li>
								<li>
									<a href="layout_search_on_header1.html">
									Search Box On Header 1 </a>
								</li>
								<li>
									<a href="layout_search_on_header2.html">
									Search Box On Header 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option1.html">
									Sidebar Search Option 1 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option2.html">
									Sidebar Search Option 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_reversed.html">
									<span class="badge badge-roundless badge-warning">
									new </span>
									Right Sidebar Page </a>
								</li>
								<li>
									<a href="layout_sidebar_fixed.html">
									Sidebar Fixed Page </a>
								</li>
								<li>
									<a href="layout_sidebar_closed.html">
									Sidebar Closed Page </a>
								</li>
								<li>
									<a href="layout_ajax.html">
									Content Loading via Ajax </a>
								</li>
								<li>
									<a href="layout_disabled_menu.html">
									Disabled Menu Links </a>
								</li>
								<li>
									<a href="layout_blank_page.html">
									Blank Page </a>
								</li>
								<li>
									<a href="layout_boxed_page.html">
									Boxed Page </a>
								</li>
								<li>
									<a href="layout_language_bar.html">
									Language Switch Bar </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							More Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_sidebar_search_option1.html">
									Sidebar Search Option 1 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option2.html">
									Sidebar Search Option 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_reversed.html">
									<span class="badge badge-roundless badge-success">
									new </span>
									Right Sidebar Page </a>
								</li>
								<li>
									<a href="layout_sidebar_fixed.html">
									Sidebar Fixed Page </a>
								</li>
								<li>
									<a href="layout_sidebar_closed.html">
									Sidebar Closed Page </a>
								</li>
								<li>
									<a href="layout_ajax.html">
									Content Loading via Ajax </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Even More <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_disabled_menu.html">
									Disabled Menu Links </a>
								</li>
								<li>
									<a href="layout_blank_page.html">
									Blank Page </a>
								</li>
								<li>
									<a href="layout_boxed_page.html">
									Boxed Page </a>
								</li>
								<li>
									<a href="layout_language_bar.html">
									Language Switch Bar </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					Full Mega <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="index_horizontal_menu.html">
									Dashboard &amp; Mega Menu </a>
								</li>
								<li>
									<a href="layout_horizontal_sidebar_menu.html">
									Horizontal &amp; Sidebar Menu </a>
								</li>
								<li>
									<a href="layout_horizontal_menu1.html">
									Horizontal Mega Menu 1 </a>
								</li>
								<li>
									<a href="layout_horizontal_menu2.html">
									Horizontal Mega Menu 2 </a>
								</li>
								<li>
									<a href="layout_search_on_header1.html">
									Search Box On Header 1 </a>
								</li>
								<li>
									<a href="layout_search_on_header2.html">
									Search Box On Header 2 </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							More Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_sidebar_search_option1.html">
									Sidebar Search Option 1 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option2.html">
									Sidebar Search Option 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_reversed.html">
									<span class="badge badge-roundless badge-success">
									new </span>
									Right Sidebar Page </a>
								</li>
								<li>
									<a href="layout_sidebar_fixed.html">
									Sidebar Fixed Page </a>
								</li>
								<li>
									<a href="layout_sidebar_closed.html">
									Sidebar Closed Page </a>
								</li>
								<li>
									<a href="layout_ajax.html">
									Content Loading via Ajax </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Even More <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_disabled_menu.html">
									Disabled Menu Links </a>
								</li>
								<li>
									<a href="layout_blank_page.html">
									Blank Page </a>
								</li>
								<li>
									<a href="layout_boxed_page.html">
									Boxed Page </a>
								</li>
								<li>
									<a href="layout_language_bar.html">
									Language Switch Bar </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Accordions <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<div id="accordion2" class="panel-group mega-menu-responsive-content">
										<div class="panel panel-success">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" class="collapsed">
												Mega Menu Info #1 </a>
												</h4>
											</div>
											<div id="collapseOne2" class="panel-collapse in">
												<div class="panel-body">
													 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.
												</div>
											</div>
										</div>
										<div class="panel panel-danger">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed">
												Mega Menu Info #2 </a>
												</h4>
											</div>
											<div id="collapseTwo2" class="panel-collapse collapse">
												<div class="panel-body">
													 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.
												</div>
											</div>
										</div>
										<div class="panel panel-info">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
												Mega Menu Info #3 </a>
												</h4>
											</div>
											<div id="collapseThree2" class="panel-collapse collapse">
												<div class="panel-body">
													 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a>
					Classic <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="fa fa-bookmark-o"></i> Section 1 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-user"></i> Section 2 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-puzzle-piece"></i> Section 3 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-gift"></i> Section 4 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-table"></i> Section 5 </a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-envelope-o"></i> More options <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									Second level link </a>
								</li>
								<li class="sub-menu">
									<a href="javascript:;">
									More options <span class="arrow">
									</span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="index.html">
									Second level link </a>
								</li>
								<li>
									<a href="index.html">
									Second level link </a>
								</li>
								<li>
									<a href="index.html">
									Second level link </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END HORIZONTAL RESPONSIVE MENU -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" style="min-height:250px">
			<h1 class="page-header">ADMIN FUCKING PANEL</h1>	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 © Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
});
</script>
<!-- END JAVASCRIPTS -->

<!-- END BODY -->
</body></html>