</div>





<!-- /.content-wrapper -->
<footer class="main-footer">

  {{-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> --}}
  {{-- All rights reserved. --}}
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 20.11.01
  </div>

</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>

<script>
// $('[data-widget="pushmenu"]').PushMenu('collapse');

</script>

{{--
@stack('modals') --}}

@livewireScripts
 
 
<script>
 
  $(document).ready(function(){
  
  // add_upc_status_onpage();
  
   function add_upc_status_onpage(query)
   {
    $.ajax({
     url:"{{ route('add_upc_status') }}",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
      $('#status').html(data.table_data);

if(data.disabled == 'no'){

   $('.disabled').removeAttr("disabled"); 
   $('.dis_button').removeClass("cursor-not-allowed opacity-50");   
 
}

     
         console.log(data.disabled);

     }
    })
   }
 

   $(document).on('click', '#status_btn', function(){
   
    var query = $('#upc1').val();

    $('#hidden_upc').attr("value",  query);
    add_upc_status_onpage(query);

    console.log(query);
 

    
   });

  });
  </script>

<script>
  $(document).ready(function () {
  $('#category1').on('change', function () {
  let id = $(this).val();
  $('#sub_category').empty();
  $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
  $.ajax({
  type: 'GET',
  url: '/add_upc/sub/' + id,
  success: function (response) {
  var response = JSON.parse(response);
  console.log(response);   
  $('#sub_category').empty();
  $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
  response.forEach(element => {
      $('#sub_category').append(`<option value="${element['subcate']}">${element['subcate']}-${element['sub_desc']}</option>`);
      });
  }
});
});
});
</script>
<script language="JavaScript" type="text/javascript">



  $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
          numFiles = input.get(0).files ? input.get(0).files.length : 1,
          label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
  });

  $(document).ready( function() {
      $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });


</script>



</body>
</html>
