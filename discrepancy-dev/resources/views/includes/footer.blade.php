
		<!-- BEGIN JAVASCRIPT -->
		{!! HTML::script('assets/js/libs/jquery/jquery-1.11.2.js') !!}
		{!! HTML::script('assets/js/libs/jquery/jquery-1.11.2.min.js') !!}
		{!! HTML::script('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js') !!}
		{!! HTML::script('assets/js/libs/bootstrap/bootstrap.min.js') !!}
		{!! HTML::script('assets/js/libs/spin.js/spin.min.js') !!}
		{!! HTML::script('assets/js/libs/autosize/jquery.autosize.min.js') !!}
		{!! HTML::script('assets/js/libs/moment/moment.min.js') !!}
		{!! HTML::script('assets/js/libs/flot/jquery.flot.min.js') !!}
		{!! HTML::script('assets/js/libs/flot/jquery.flot.time.min.js') !!}
		{!! HTML::script('assets/js/libs/flot/jquery.flot.resize.min.js') !!}
		{!! HTML::script('assets/js/libs/flot/jquery.flot.orderBars.js') !!}
		{!! HTML::script('assets/js/libs/flot/jquery.flot.pie.js') !!}
		{!! HTML::script('assets/js/libs/flot/curvedLines.js') !!}
		{!! HTML::script('assets/js/libs/jquery-knob/jquery.knob.min.js') !!}
		{!! HTML::script('assets/js/libs/sparkline/jquery.sparkline.min.js') !!}
		{!! HTML::script('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js') !!}
		{!! HTML::script('assets/js/libs/d3/d3.min.js') !!}
		{!! HTML::script('assets/js/libs/d3/d3.v3.js') !!}
		{!! HTML::script('assets/js/libs/rickshaw/rickshaw.min.js') !!}
		{!! HTML::script('assets/js/core/source/App.js') !!}
		{!! HTML::script('assets/js/core/source/AppNavigation.js') !!}
		{!! HTML::script('assets/js/core/source/AppOffcanvas.js') !!}
		{!! HTML::script('assets/js/core/source/AppCard.js') !!}
		{!! HTML::script('assets/js/core/source/AppForm.js') !!}
		{!! HTML::script('assets/js/core/source/AppNavSearch.js') !!}
		{!! HTML::script('assets/js/core/source/AppVendor.js') !!}
		{!! HTML::script('assets/js/core/demo/Demo.js') !!}
		{!! HTML::script('assets/js/core/demo/DemoDashboard.js') !!}
		{!! HTML::script('assets/js/libs/DataTables/jquery.dataTables.min.js') !!}
		{!! HTML::script('assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js') !!}
		{!! HTML::script('assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js') !!}
		{!! HTML::script('assets/js/libs/jquery-validation/dist/jquery.validate.min.js') !!}
		{!! HTML::script('assets/js/libs/jquery-validation/dist/additional-methods.min.js') !!}
		{!! HTML::script('assets/js/libs/wizard/jquery.bootstrap.wizard.min.js') !!}		
		{!! HTML::script('assets/js/core/demo/DemoFormWizard.js') !!}		
		{!! HTML::script('assets/js/libs/jquery-ui/jquery-ui.min.js') !!}		
		{!! HTML::script('assets/js/libs/select2/select2.min.js') !!}		
		{!! HTML::script('assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') !!}
		{!! HTML::script('assets/js/libs/multi-select/jquery.multi-select.js') !!}
		{!! HTML::script('assets/js/libs/inputmask/jquery.inputmask.bundle.min.js') !!}
		{!! HTML::script('assets/js/libs/moment/moment.min.js') !!}
		{!! HTML::script('assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.jss') !!}
		{!! HTML::script('assets/js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') !!}
		{!! HTML::script('assets/js/core/demo/DemoFormComponents.js') !!}
		{!! HTML::script('assets/js/core/demo/DemoTableDynamic.js') !!}
		
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
