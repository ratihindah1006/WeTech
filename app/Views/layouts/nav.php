<body>
	<!-- header-section-starts -->
	<div class="full">
		<div class="menu">
			<ul>
				<li><a href="Home"><i class="home"></i></a></li>
				<li><a href="Homepage">
						<div class="homepage"><i class="videos"></i><i class="videos1"></i></div>
					</a></li>
				<li><a href="Cetak">
						<div class="#"><i class="watching"></i><i class="watching1"></i></div>
					</a></li>
				<li><a href="<?= base_url('Login'); ?>"><i class="fas fa-fw fa-sign-in-alt fa-4x" style="color: gray;"></i></a></li>
			</ul>
		</div>
		<div class="main">

			<div class="top-header">
				<div class="logo">
					<a href="Home"><img src="images/logo.png" alt=""></a>
					<p>Movie Theater</p>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}" />
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>