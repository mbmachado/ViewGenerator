<div class="block_1473435558335">
	<div class="column_container">
		<div class="column-inner">
			<div class="wrapper">
				<div id="sc_services_1443866382_wrap" class="sc_services_wrap">
					<div id="sc_services_1443866382" class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_huge margin_bottom_huge">
						<h2 class="sc_services_title sc_item_title sc_item_title_without_descr"><?= $attributes['title'] ?></h2>
						<div class="sc_services_descr sc_item_descr"><?= $attributes['subtitle'] ?></div>
						<div class="sc_columns columns_wrap">
							<?php foreach ($attributes['cards'] as $card): ?>
								<div class="column-1_3 column_padding_bottom">
									<div class="sc_services_item sc_services_item_1 odd first">
										<div class="sc_services_item_featured post_featured">
											<div class="post_thumb" data-image="" data-title="Promoting the right and wellbeing of every child, in everything we do.">
												<a class="hover_icon hover_icon_link" href="#"><img width="136" height="136" alt="mission_1.png" src="<?= $card['image'] ?>"></a>
											</div>
										</div>
										<div class="sc_services_item_content">
											<h4 class="sc_services_item_title"><a href="#"><?= $card['text'] ?></a></h4>
											<div class="sc_services_item_description">
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="sc_services_button sc_item_button"><a href="<?= $attributes['button']['link'] ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large  sc_button_iconed icon-arrow"><?= $attributes['button']['text'] ?></a></div>
					</div>
				</div>
				
				<div class="h10"></div>
			</div>
		</div>
	</div>
</div>