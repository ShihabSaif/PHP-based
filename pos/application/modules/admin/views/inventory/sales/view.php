<div class="row">
	<div class="col-md-12">
		<div class="portlet light">
			<div class="portlet-title">
				<div class="tools">
					<button class="btn btn-warning btn-action" data-url="<?php echo site_url("admin/inventory/sales") ?>">
						<i class="fa fa-mail-reply"></i>
						Back
					</button>
					<button class="btn btn-danger btn-action" data-url="<?php echo site_url("admin/inventory/sales/delete/".$order["id"]); ?>" data-confirm="true">
						<i class="fa fa-remove"></i>
						Delete
					</button>
				</div>
			</div>
			<div class="portlet-body">
				<div class="tabbable">
					<ul class="nav nav-tabs nav-tabs-lg">
						<li class="active">
							<a href="#detail" data-toggle="tab">Detail</a>
						</li>
					</ul>
					<div class="content">
						<div id="detail" class="tab-pane active">

							<div class="row">
								<div class="col-md-6">
									<div class="portlet red-sunglo box">
										<div class="portlet-title">
											<div class="caption">Order Details</div>
										</div>
										<div class="portlet-body">
											<div class="row static-info">
												<div class="col-md-4 name">Order #</div>
												<div class="col-md-8 value">
													<?php echo str_pad($order["id"],7, "0", STR_PAD_LEFT) ?>
												</div>
											</div>
											<?php if($order["reservation_id"]): ?>
												<div class="row static-info">
													<div class="col-md-4 name">Reservation #</div>
													<div class="col-md-8 value">
														<?php echo str_pad($order["reservation_id"],7, "0", STR_PAD_LEFT) ?>
													</div>
												</div>
											<?php endif; ?>
											<div class="row static-info">
												<div class="col-md-4 name">Date</div>
												<div class="col-md-8 value">
													<?php echo $order["created_at"] ?>
												</div>
											</div>
											<div class="row static-info">
												<div class="col-md-4 name">Customer</div>
												<div class="col-md-8 value">
													<?php echo $order["customer_name"] ?>
												</div>
											</div>
											<div class="row static-info">
												<div class="col-md-4 name">Total</div>
												<div class="col-md-8 value">
													<?php echo number_format($order["total"],2) ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="portlet red-sunglo box">
										<div class="portlet-title">
											<div class="caption">Payment Details</div>
										</div>
										<div class="portlet-body">
											<div class="row static-info">
												<div class="col-md-4 name">Payment Method</div>
												<div class="col-md-8 value">
													<?php echo ucwords(str_replace("_"," ",$order["payment_method"])); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="portlet red-sunglo box">
										<div class="portlet-title">
											<div class="caption">Order Items</div>
										</div>
										<div class="portlet-body">
											<div class="table-container">
												<table class="table table-striped table-bordered table-hover item-table">
													<thead>
														<tr>
															<th>Product</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Total</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($item as $_item): ?>
															<tr>
																<td><?php echo $_item["product_name"] ?></td>
																<td><?php echo number_format($_item["price"],2) ?></td>
																<td><?php echo number_format($_item["qty"],2) ?></td>
																<td>
																	<?php echo number_format(($_item["qty"] * $_item["price"]),2); ?>
																</td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-md-offset-6">
									<div class="well">
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">Sub Total</div>
											<div class="col-md-3 value"><?php echo number_format($order["total"],2) ?></div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">Grand Total</div>
											<div class="col-md-3 value"><?php echo number_format($order["total"],2) ?></div>
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
</div>