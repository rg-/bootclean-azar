<?php

$img_1 = $args['attachments'][0]['attachment_id']; 

?>

<h2>GOLDEN RATIO TEST</h2>

<div class="azar-compound-embeds embed-responsive embed-responsive-golden">
	<div class="embed-responsive-item bg-primary">
		
		<div class="d-flex h-100">

			<div class="golden-21by34">

				<div class="embed-responsive embed-responsive-1by1">
					<div class="embed-responsive-item bg-info" data-golden="g-21by21">
						<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
					</div>
				</div>

			</div>

			<div class="golden-13by34">

				<div class="embed-responsive embed-responsive-1by1">
					<div class="embed-responsive-item bg-warning" data-golden="g-13by13">
						<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
					</div>
				</div>

				<div class="azar-compound-embeds embed-responsive embed-responsive-golden">
					<div class="embed-responsive-item">

						<div class="d-flex h-100">
							<div class="golden-5by13">

								<div class="azar-compound-embeds embed-responsive embed-responsive-golden">
									<div class="embed-responsive-item ">

										<div class="d-flex h-100">

											<div class="golden-3by5 bg-white" data-golden="g-3by3">
												<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
											</div>

											<div class="golden-2by5">
												
												<div class="embed-responsive embed-responsive-1by1">
													<div class="embed-responsive-item bg-info" data-golden="g-2by2">
														<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?> 
													</div>
												</div>

												<div class="d-flex">

													<div class="w-50">
														<div class="embed-responsive embed-responsive-1by1">
															<div class="embed-responsive-item bg-danger " data-golden="g-1by1">
																<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?> 
															</div>
														</div>
													</div>

													<div class="w-50">
														<div class="embed-responsive embed-responsive-1by1">
															<div class="embed-responsive-item bg-primary " data-golden="g-1by1">
																<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?> 
															</div>
														</div>
													</div>

												</div>

											</div>

										</div>

									</div>
								</div>

								<div class="embed-responsive embed-responsive-1by1">
									<div class="embed-responsive-item bg-success " data-golden="g-5by5">
										<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?> 
									</div>
								</div>

							</div>
							<div class="golden-8by13 ">

								<div class="embed-responsive embed-responsive-1by1">
									<div class="embed-responsive-item bg-danger " data-golden="g-8by8">
										<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div>

			</div>

		</div>

	</div>
</div>