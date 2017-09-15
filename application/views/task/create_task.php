<?php $this->load->view('header') ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Create Task</h2>
	</header>

	<!-- start: page -->
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>
					<h2 class="panel-title">Create Task</h2>
				</header>
				<div class="panel-body">
					<?php echo form_open($this->uri->segment(1).'/addNewTask', array('id' => 'form1', 'class' => 'form-horizontal form-bordered', 'method' => 'post', 'enctype' => 'multipart/form-data')); ?>
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
                		<input type="hidden" value="<?= base_url() ?>" id="urlPath" name="urlPath"></input>
						<hr>
					</div>
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-9">
								<button class="btn btn-primary" >Submit</button>
								<button class="btn btn-default" onclick="window.history.go(-1); return false;">Cancel</button>
							</div>
						</div>
					</footer>
				<?php echo form_close(); ?>
			</section>
		</div>
	</div>
	<!-- end: page -->
</section>

<script type="text/javascript">
    jQuery(document).ready(function(){


        jQuery("#form1").validate({
            submitHandler: function(form){
                jConfirm('Are you sure to submit this?', 'Confirmation Dialog', function(r) {
                    if(r){
                        var urlPath = jQuery("#urlPath").val();
                        jAlert("<img src='"+ urlPath + "images/loaders/loader2.gif' loop=true/> Submitting your request... Please wait...", 'Confirmation Results');
                        jQuery("#popup_ok").hide();
                        form.submit();
                    }
                });
            },
            rules: {
                name: "required",
                desc: "required"

            },
            messages: {
                name: "Please enter the task name",
                desc: "Please enter task Description"
            }
        });
    });
</script>

<?php $this->load->view('footer') ?>