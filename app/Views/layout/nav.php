<body>
	<!-- header-section-starts -->
	<div class="full">
		<div class="menu">
			<ul>
				<li><a href="Movie"><i class="home"></i></a></li>
				<li><a href="Terdaftar">
						<div class="#"><i class="watching"></i><i class="watching1"></i></div>
					</a></li>
				<li><a href="Bayar">
						<div class="bk"><i class="booking"></i><i class="booking1"></i></div>
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