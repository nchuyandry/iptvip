<div class="row">
	<div class="col-12 col-xl-4">
    	<div class="card">
        	<form class="form-horizontal" method="post" action="<?php base_url()?>submitdata">
        	<div class="card-header">
                <h4 class="card-title">Input Devices</h4>
                <h6 class="card-subtitle text-muted">Form Input Data Perangkat</h6>
			</div>
            <div class="card-body">
                <div class="row">
                	<div class="mb-3 col-md-12">
	                    <label class="form-label">Tanggal</label>
	                    <input type="datetime-local" class="form-control " id="tgl"  name="tgl" value="<?php echo date('m/d/yy H:i A')?>" required />
	               	</div>
                	<div class="mb-3 col-md-12">
                   		<label class="form-label">Nama Depo</label>
                       	<select class="form-control" name="depo" id="depo" required>
          					<option value="">--Pilih--</option>
          					<?php foreach($depo as $row){?>
          					<option value="<?php echo $row->no?>"><?php echo $row->namadepo?></option>
          					<?php } ?>
          				</select>
                   	</div>
                   	<div class="mb-3 col-md-12">
                   		<label class="form-label">Jenis Perangkat</label>
                       	<select class="form-control" name="jenis" id="jenis" required>
          					<option value="">--Pilih--</option>
          					<option value="Router">Router</option>
          					<option value="Mesin Absen">Mesin Absen</option>
          					<option value="Access Point">Access Point</option>
          					<option value="DVR/NVR CCTV">DVR/NVR CCTV</option>
          					<option value="Switch/Hub">Switch/Hub</option>
          				</select>
                   	</div>
                   	<div class="mb-3 col-md-12">
                   	  	<label class="form-label">IP Address</label>
	                    <input type="text" class="form-control" id="ipaddr"  name="ipaddr" required  />
	               	</div>
	               	<div class="mb-3 col-md-12">
                   	  	<label class="form-label">Merk / Tipe </label>
	                    <input type="text" class="form-control" id="merk"  name="merk" required  />
	               	</div>
					<div class="mb-3 col-md-12">
                   	  	<label class="form-label">Lokasi</label>
	                    <input type="text" class="form-control" id="lokasi"  name="lokasi" required  />
	               	</div>
					<div class="mb-3 col-md-12">
      					<div id="wific" style="display: none">
							<label>Wifi Channel</label>
							<select class="form-control" name="wch" id="wch" required>
								<option value="N/A">N/A</option>
								<option value="CH 1">1</option>
								<option value="CH 2">2</option>
								<option value="CH 3">3</option>
								<option value="CH 4">4</option>
								<option value="CH 5">5</option>
								<option value="CH 6">6</option>
								<option value="CH 7">7</option>
								<option value="CH 8">8</option>
								<option value="CH 9">9</option>
								<option value="CH 10">10</option>
								<option value="CH 11">11</option>
								<option value="CH 12">12</option>
								<option value="CH 13">13</option>
							</select>
						</div>
	               	</div>
	               	<div class="mb-3 col-md-12">
                       	<label>Keterangan </label>
                       	<textarea rows="4" class="form-control" placeholder="" name="keterangan" ></textarea>
						
                    </div >
                    <div class="mb-3 col-md-12 text-left">
                      	<button type="submit" id="submitdata"  class="btn btn-fill btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

	<div class="col-12 col-xl-8">
    	<div class="card">
        	<form class="form-horizontal" method="post" action="<?php base_url()?>submitdata">
        	<div class="card-header">
                    <h5 class="card-subtitle text-muted text-end">Today : <?php echo date('d M Y H:i A'); ?></h5>
        
            </div>
            <div class="card-body">
				<div class="table-responsive">
					<table id="dataTable" class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Tanggal Input</th>
								<th>Nama Depo</th>
								<th>Jenis Perangkat</th>
								<th>IP Address</th>
								<th>Merk / Tipe</th>									
							</tr>
						</thead>
						<tbody>
							<?php 
							$i=0;
							foreach($report as $row){
							$i++;	
							$tgl = date_create($row->tgl);
							?>
							<tr >
								<td><?php echo $i;?></td>
								<td><?php echo date_format($tgl, "d M Y H:i:s") ?></td>
								<td><?php echo $row->namadepo?></td>
								<td><?php echo $row->jenisp?></td>
								<td><?php echo $row->ipaddr	?></td>
								<td><?php echo $row->merk?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
            </div>
            </form>
        </div>
    </div>
</div>