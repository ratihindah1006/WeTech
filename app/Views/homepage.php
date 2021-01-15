<div class="reviews-section">
	<h3 class="head">NOW PLAYING</h3>
	<div class="col-md-9 reviews-grids">
		<?php foreach ($m_now as $m) : ?>
			<div class="review">
				<div class="movie-pic">
					<a href="Detail "><img src="images/<?= $m['img']; ?>" alt="" /></a>
				</div>
				<div class="review-info">
					<a class="span" href="Detail"><?= $m['title']; ?></a>
					<div class="yrw">

						<div class="clearfix"></div>
					</div>
					<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $m['cast']; ?></p>
					<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;<?= $m['producer']; ?></p>
					<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $m['genre']; ?></p>
					<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; <?= $m['duration']; ?></p>
					<a class="book" href="Checkout/<?= $m['movie_id']; ?>"><i class="book1"></i>BOOK TICKET</a>
				</div>
				<div class="clearfix"></div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="clearfix"></div>
</div>


<div class="reviews-section">
	<h3 class="head">COMING SOON</h3>
	<div class="col-md-9 reviews-grids">
		<?php foreach ($m_cooming as $m) : ?>
			<div class="review">
				<div class="movie-pic">
					<a href="Detail "><img src="images/<?= $m['img']; ?>" alt="" /></a>
				</div>
				<div class="review-info">
					<a class="span" href="Detail"><?= $m['title']; ?></a>
					<div class="yrw">

						<div class="clearfix"></div>
					</div>
					<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $m['cast']; ?></p>
					<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;<?= $m['producer']; ?></p>
					<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $m['genre']; ?></p>
					<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; <?= $m['duration']; ?></p>
					<a class="book" href="Checkout/<?= $m['movie_id']; ?>"><i class="book1"></i>BOOK TICKET</a>
				</div>
				<div class="clearfix"></div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="clearfix"></div>
</div>