<?php $this->load->view('header') ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>&nbsp;</h2>
	</header>
	<div class="panel panel-default">
		 <div class="panel-heading ">
		    <h1><?php echo "List Of All Task"; ?></h1>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped mb-none" id="datatable-default">
				<thead>
					<tr>
						<th>Task Name</th>
						<th>Task Description</th>
						<th>Date Created</th>
						<th>Date Updated</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
						foreach($result as $a)
						{
					?>
						<tr>
							<td>
								<label class="lblfield lblfield_name <?= $a->id ?>" id="<?= $a->id ?>"><?= $a->name ?></label>
								<input type='text' style="display: none;" class="inputfield form-control" name="inputfield_name" id="inputfield_name_<?= $a->id ?>" value="<?= $a->name ?>"></input>
							</td>
							<td>
								<label class="lblfield lblfield_desc <?= $a->id ?>" id="<?= $a->id ?>"><?= $a->description ?></label>
								<input type='text' style="display: none;" class="inputfield form-control" name="inputfield_desc" id="inputfield_desc_<?= $a->id ?>" value="<?= $a->description ?>"></input>
							</td>
							<td>
								<label id="<?= $a->id ?>"><?= $a->dateCreated ?></label>
							</td>
							<td>
								<label id="<?= $a->id ?>"><?= $a->dateUpdated ?></label>
							</td>
							<td class="text-center">
								<?php
									echo '<button type="button" id="'.$a->id.'" class="mb-xs mt-xs mr-xs btn btn-sm btn-success activatebtn" >Edit Task</button>';
								?>
								<?php
									echo '<button type="button" id="'.$a->id.'" class="mb-xs mt-xs mr-xs btn btn-sm deletebtn btn-danger" >Delete Task</button>';
								?>
							</td>
						</tr>
					<?php		
						}
					?>
				</tbody>
			</table>
			<input type="hidden" value="<?= base_url() ?>" id="urlPath" name="urlPath"></input>
		</div>
	</div>
</section>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-danger">Alert</h4>
      </div>
      <div class="modal-body text-muted">
      	<div class="form-group">
			<label class="col-md-5 control-label" for="inputDefault">Name:</label>
			<div class="col-md-7">
				<input type="text" class="form-control" id="name" name="name">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label" for="inputDefault">Description:</label>
			<div class="col-md-7">
				<input type="text" required class="form-control" id="desc" name="desc">
			</div>
		</div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success success" id="btnok">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  	jQuery(document).ready(function(){
  		jQuery(".deletebtn").click(function(){
  			
	        var id = jQuery(this).attr("id");

  			jConfirm('Are you sure you want to delete this task?', 'Confirmation Dialog', function(r) {
	            if(r){
	                var url = jQuery("#urlPath").val();

					jQuery.post(url+'index.php/task/delete', {id:id}, function(r){
						setTimeout(location.reload(true), 3000);
					}, 'json');         

					return false;
	            }
	        });

  		});

        jQuery(".activatebtn").click(function(){
        	var id = jQuery(this).attr("id");

        	jQuery("#inputfield_name_"+id).css("display","block");
        	jQuery("#inputfield_desc_"+id).css("display","block");
        	jQuery(".lblfield."+id).css("display","none");
        	jQuery(this).removeClass("activatebtn");
        	jQuery(this).addClass("updatebtn");
        	jQuery(this).text("Update");

        	jQuery(".updatebtn").click(function(){
	        	var id = jQuery(this).attr("id");
	        	var name = jQuery('#inputfield_name_'+id).val();
	        	var desc = jQuery('#inputfield_desc_'+id).val();

	        	jConfirm('Are you sure you want to update this task?', 'Confirmation Dialog', function(r) {
		            if(r){
		                var url = jQuery("#urlPath").val();

						jQuery.post(url+'index.php/task/update', {id:id, name:name, desc:desc}, function(r){
							setTimeout(location.reload(true), 3000);
				        	
						}, 'json');         

						return false;
		            }
		        });
	        });
        });
  	});
</script>
<?php $this->load->view('footer') ?>