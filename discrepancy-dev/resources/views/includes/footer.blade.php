
		<!-- BEGIN JAVASCRIPT -->
		{!! Html::script('assets/js/libs/jquery/jquery-1.11.2.js') !!}
		{!! Html::script('assets/js/libs/jquery/jquery-1.11.2.min.js') !!}
		{!! Html::script('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js') !!}
		{!! Html::script('assets/js/libs/bootstrap/bootstrap.min.js') !!}
		{!! Html::script('assets/js/libs/spin.js/spin.min.js') !!}
		{!! Html::script('assets/js/libs/autosize/jquery.autosize.min.js') !!}
		{!! Html::script('assets/js/libs/moment/moment.min.js') !!}
		{!! Html::script('assets/js/libs/flot/jquery.flot.min.js') !!}
		{!! Html::script('assets/js/libs/flot/jquery.flot.time.min.js') !!}
		{!! Html::script('assets/js/libs/flot/jquery.flot.resize.min.js') !!}
		{!! Html::script('assets/js/libs/flot/jquery.flot.orderBars.js') !!}
		{!! Html::script('assets/js/libs/flot/jquery.flot.pie.js') !!}
		{!! Html::script('assets/js/libs/flot/curvedLines.js') !!}
		{!! Html::script('assets/js/libs/jquery-knob/jquery.knob.min.js') !!}
		{!! Html::script('assets/js/libs/sparkline/jquery.sparkline.min.js') !!}
		{!! Html::script('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js') !!}
		{!! Html::script('assets/js/libs/d3/d3.min.js') !!}
		{!! Html::script('assets/js/libs/d3/d3.v3.js') !!}
		{!! Html::script('assets/js/libs/rickshaw/rickshaw.min.js') !!}
		{!! Html::script('assets/js/core/source/App.js') !!}
		{!! Html::script('assets/js/core/source/AppNavigation.js') !!}
		{!! Html::script('assets/js/core/source/AppOffcanvas.js') !!}
		{!! Html::script('assets/js/core/source/AppCard.js') !!}
		{!! Html::script('assets/js/core/source/AppForm.js') !!}
		{!! Html::script('assets/js/core/source/AppNavSearch.js') !!}
		{!! Html::script('assets/js/core/source/AppVendor.js') !!}
		{!! Html::script('assets/js/core/demo/Demo.js') !!}
		{!! Html::script('assets/js/core/demo/DemoDashboard.js') !!}
		{!! Html::script('assets/js/libs/DataTables/jquery.dataTables.min.js') !!}
		{!! Html::script('assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js') !!}
		{!! Html::script('assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js') !!}
		{!! Html::script('assets/js/libs/jquery-validation/dist/jquery.validate.min.js') !!}
		{!! Html::script('assets/js/libs/jquery-validation/dist/additional-methods.min.js') !!}
		{!! Html::script('assets/js/libs/wizard/jquery.bootstrap.wizard.min.js') !!}		
		{!! Html::script('assets/js/core/demo/DemoFormWizard.js') !!}		
		{!! Html::script('assets/js/libs/jquery-ui/jquery-ui.min.js') !!}		
		{!! Html::script('assets/js/libs/select2/select2.min.js') !!}		
		{!! Html::script('assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') !!}
		{!! Html::script('assets/js/libs/multi-select/jquery.multi-select.js') !!}
		{!! Html::script('assets/js/libs/inputmask/jquery.inputmask.bundle.min.js') !!}
		{!! Html::script('assets/js/libs/moment/moment.min.js') !!}
		{!! Html::script('assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.jss') !!}
		{!! Html::script('assets/js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') !!}
		{!! Html::script('assets/js/core/demo/DemoFormComponents.js') !!}
		{!! Html::script('assets/js/core/demo/DemoTableDynamic.js') !!}
		
		<script type="text/javascript">	
		    //Include the jquery table functionality for the table like search, page numbers, no of rows to be displayed
			//and previous and next button to toggle between pages.
			$(document).ready(function() {
			    $('#datatable1').DataTable();
			    "aoColumnDefs": [
			          { 'bSortable': false, 'aTargets': [ -1, -2 ] }
			       ]
			} );

			//Remove the sort column icon from the last two columns on the table
		//	$('#datatable1').dataTable( {
			      
		//	});
		</script>

		<!-- END JAVASCRIPT -->
