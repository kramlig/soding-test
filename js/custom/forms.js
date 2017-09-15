/*
 * 	Additional function for forms.html
 *	Written by ThemePixels	
 *	http://themepixels.com/
 *
 *	Copyright (c) 2012 ThemePixels (http://themepixels.com)
 *	
 *	Built for Amanda Premium Responsive Admin Template
 *  http://themeforest.net/category/site-templates/admin-templates
 */

jQuery(document).ready(function(){
	
	///// FORM TRANSFORMATION /////
	jQuery('input:checkbox, input:radio, select.uniformselect, input:file').uniform();


	///// DUAL BOX /////
	var db = jQuery('#dualselect').find('.ds_arrow .arrow');	//get arrows of dual select
	var sel1 = jQuery('#dualselect select:first-child');		//get first select element
	var sel2 = jQuery('#dualselect select:last-child');			//get second select element
	
	sel2.empty(); //empty it first from dom.
	
	db.click(function(){
		var t = (jQuery(this).hasClass('ds_prev'))? 0 : 1;	// 0 if arrow prev otherwise arrow next
		if(t) {
			sel1.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					var op = sel2.find('option:first-child');
					sel2.append(jQuery(this));
				}
			});	
		} else {
			sel2.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					sel1.append(jQuery(this));
				}
			});		
		}
	});
	
	
	
	///// FORM VALIDATION /////
	jQuery("#form1").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			email: {
				required: true,
				email: true,
			},
			location: "required",
			selection: "required"
		},
		messages: {
			firstname: "Please enter your first name",
			lastname: "Please enter your last name",
			email: "Please enter a valid email address",
			location: "Please enter your location"
		}
	});

	///// FORM VALIDATION /////
	// jQuery.validator.addMethod("valueNotEquals", function(value, element, arg){
	//   return arg != value;
	//  }, "Value must not equal arg.");

	// Store Complaint Submit form
	jQuery("#storePqf").validate({
		submitHandler: function(form){
			jConfirm('Are you sure to submit this?', 'Confirmation Dialog', function(r) {
				if(r){
					var urlPath = jQuery("#urlPath").val();
					jAlert("<img src='"+ urlPath + "images/loaders/loader2.gif' loop=true/> Submitting your complaint... Please wait...", 'Confirmation Results');
					jQuery("#popup_ok").hide();
					form.submit();
				}
			});
		},
		rules: {
			qty: "required",
			dateDelivered: "required",
			expirationCode: "required",
			dateComplaint: "required",
			preparedBy: "required",
			dateReported: "required",
			complaintType: "required",
			product: "required",
			otherDetails: "required", 
			userfile: "required",
			consumeDate: "required",
			batchCode: "required"

		},
		messages: {
			qty: "Please enter quantitysss",
			dateDelivered: "Please enter date deliveredss",
			expirationCode: "Please enter expiration code",
			dateComplaint: "Please enter date of complaint",
			preparedBy: "Please enter your name",
			dateReported: "Please enter date",
			otherDetails: "Please enter other details",
			userfile: "Please attach complaint image",
			batchCode: "Please enter batch code",
			consumeDate: "Please enter Consume Before Date"
		}
	});

	// Commissary Response Form

	jQuery("#commiResponse").validate({
		submitHandler: function(form){
			jConfirm('Are you sure to submit this response?', 'Confirmation Dialog', function(r) {
				if(r){
					var urlPath = jQuery("#urlPath").val();
					jAlert("<img src='"+ urlPath + "images/loaders/loader2.gif' loop=true/> Submitting your complaint response... Please wait...", 'Confirmation Results');
					jQuery("#popup_ok").hide();
					form.submit();
				}
			});
		},
		rules: {
			received_qty: "required",
			date_returned: "required",
			date_validated: "required",
			ammount_adjustment: "required",
			corrective_actions: "required",
			pcr_prepared_by: "required",
			date_prepared: "required"
		},
		
		messages: {
			received_qty: "Please enter quantity",
			date_returned: "Please enter date returned",
			date_validated: "Please enter date validated",
			ammount_adjustment: "Please enter ammount adjustment",
			corrective_actions: "Please enter corrective actions",
			date_prepared: "Please enter date prepared"
		}
	});

	// jQuery("#update_commi_form_view").validate({
	// 	submitHandler: function(form){
	// 		jConfirm('Are you sure to update this response?', 'Confirmation Dialog', function(r) {
	// 			if(r){
	// 				var urlPath = jQuery("#urlPath").val();
	// 				jAlert("<img src='"+ urlPath + "images/loaders/loader2.gif' loop=true/> Submitting your complaint response... Please wait...", 'Confirmation Results');
	// 				jQuery("#popup_ok").hide();
	// 				form.submit();
	// 			}
	// 		});
	// 	},
	// 	rules: {
	// 		received_qty: "required",
	// 		date_returned: "required",
	// 		date_validated: "required",
	// 		ammount_adjustment: "required",
	// 		corrective_actions: "required",
	// 		other_remarks: "required",
	// 		pcr_prepared_by: "required",
	// 		date_prepared: "required"
	// 	},
		
	// 	messages: {
	// 		received_qty: "Please enter quantity",
	// 		date_returned: "Please enter date returned",
	// 		date_validated: "Please enter date validated",
	// 		ammount_adjustment: "Please enter ammount adjustment",
	// 		corrective_actions: "Please enter corrective actions",
	// 		other_remarks: "Please enter remarks",
	// 		date_prepared: "Please enter date prepared"
	// 	}
	// });
	
	
	///// TAG INPUT /////
	
	jQuery('#tags').tagsInput();

	
	///// SPINNER /////
	
	jQuery("#spinner").spinner({min: 0, max: 100, increment: 2});
	
	
	///// CHARACTER COUNTER /////
	
	jQuery("#textarea2").charCount({
		allowed: 120,		
		warning: 20,
		counterText: 'Characters left: '	
	});
	
	
	///// SELECT WITH SEARCH /////
	jQuery(".chzn-select").chosen();
	
});