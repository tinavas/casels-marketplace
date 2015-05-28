@if ($message = Session::get('alert'))
	{{ $message }}
@endif

@include('header')
		<!--START internal page-->
			<div id="shop-now">
				<div id="page-main-title">
					<div class="wrapper">
						<h1 id="page-h1"><?php echo $pageTitle; ?></h1>
					</div>
				</div>

				<div id="content">
					<div class="wrapper">
						<div id="internal-content-main">
							<?php echo $pageContent; ?>
						</div>
						<div id="side-bar" class="shop-now-side">
							<img src="./images/sidebar.jpg" id="sidebar-img">
							<h1 id="sidebar-title">Apply to Become a Casel's Preferred Customer</h1>
							{{ HTML::link('get-card', 'Apply Now', array('id' => 'sidebar-cta')) }}
						</div>
					</div>
				</div>
			</div>
		<!--END internal page-->
@include('footer')
