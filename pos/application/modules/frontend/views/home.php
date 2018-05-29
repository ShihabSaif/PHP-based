<div class="row">
	<div class="col-md-12">
		<div class="carousel" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?php foreach($slider as $key => $value): ?>
					<div class="item <?php echo $key == 0 ? "active" : "" ?>">
						<img class="fill" src="<?php echo base_url("assets/images/slider/".$value["file"]) ?>">
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>