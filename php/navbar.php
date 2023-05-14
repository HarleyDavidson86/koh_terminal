<div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h3 id="logo">
					<a href="<?php echo Theme::siteUrl() ?>">
						<?php echo $site->title() ?>
					</a>
				</h3>
            </div>
		</div>
		<div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row flex-wrap mb-3 float-right">
					<?php foreach ($staticContent as $staticPage): ?>
						<div class="p-2">
							<a href="<?php echo $staticPage->permalink() ?>">
								<?php echo $staticPage->title() ?>
							</a>
					</div>
					<?php endforeach ?>
                </div>
            </div>
        </div>
	<hr>
</div>
