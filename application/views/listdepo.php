<div class="row">

    <?php 
        $newCategories;
        $dep = "";
    	foreach ($list as $row) {
      	if($row->namadepo != $dep){
       		//New category
       		$dep = $row->namadepo;
       		$newCategories[$dep][] = $row;
      	}else{
       		$newCategories[$dep][] = $row;
      	}
    }
    foreach($newCategories as $name => $dep){/*
    foreach($list as $row => $ndepo){*/?>
    <div class="col-md-12">
    	<div class="card">
  			<div class="card-body">
    			<h3 class="card-title"><b><?php echo $name?></b></h3>
			    <div class="row">
			    	<div class="col-md-12 text-center">
			    		<table class="table table table-striped my-0">
				    		<thead>
				    			<tr>
									<th>Jenis</th>
									<th>Merk</th>
									<th>IP Address</th>
									<th>Wifi Ch</th>
									<th>Lokasi</th>
									<th>Keterangan</th>	
									<th>Action</th>
				    			</tr>
				    		</thead>
				    		<tbody>
				    		<?php foreach($dep as $sub){?>
				    			<tr>
				    				<td><?php echo $sub->jenisp?></td>
				    				<td><?php echo $sub->merk?></td>
				    				<td><?php echo $sub->ipaddr?></td>
				    				<td><?php echo $sub->wifich?></td>
				    				<td><?php echo $sub->lokasi?></td>
								    <td><?php echo $sub->keterangan?></td>
				    				<td><a href="javascript:void(0)" title="Remove" id="remove" data="<?php echo $sub->id?>"><i class="fas fa-times" style="font-size: 20px; color: red"></i></a></td>
				    			</tr>
				    		<?php } ?>
				    		</tbody>
			    		</table>
			    	</div>
			    </div>	   
			</div>
		</div>
    </div>
    <?php } ?>
</div>
 