<div class="row">
	<div class="col-12">
    	<div class="card">
        	<div class="card-header">
            	<div class="row">
                  <div class="col-sm-6 text-left">
                    <h4 class="card-title">Dashboard</h4>
					<h6 class="card-subtitle text-muted">Data Perangkat jaringan TVIP - ASA</h6>
                  </div>
                  <div class="col-sm-6 text-right">
                    <h6 class="card-subtitle text-muted text-end">Today : <?php echo date('d M Y H:i A'); ?></h6>
                  </div>
                </div>
            </div>
            <div class="card-body">
				<div class="row">
				<?php foreach($total as $row){?>
					<div class="col-12 col-sm-6 col-xxl-3 d-flex">
						<div class="card flex-fill">
							<div class="card-body py-4">
								<div class="d-flex align-items-start">
									<div class="flex-grow-1">
										<h3 class="mb-2 "><?php echo $row->jenisp?></h3>
										<h2 class="mb-2 text-muted">Total : <?php echo $row->total?></h2>
									</div>
									<div class="d-inline-block ms-3">
										<div class="stat">
											<i class="align-middle text-success" data-feather="hard-drive"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
            </div>
        </div>
    </div>
    
</div>