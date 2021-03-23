  <script src="{{ asset('js/jquery.js') }}"></script>

 <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.css') }}"></script>

 <script src="{{ asset('admin/dist/js/adminlte.min.css') }}"></script>

 <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- DataTables -->
 <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>

 <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

 <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

 <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


 <!-- AdminLTE App -->

 <script>
 	
 	$('div-alert').not('.alert-important').delay(3000).fadeOut(350);

 	$('.datatable').DataTable({

 		"responsive" :true,

 		"autowidth" :false


 	});


 	$('.sa-delete').on('click', function(){

 		//alert('⚠');

 		//console.log('Attention'); 
 		let form_id = $(this).data('form-id');

 		alert("id du formulaire" +form_id);






 	});


 </script>


 @stack('scripts')