<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<script>
    $(document).ready(function(){
      $(".my-filter").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".my-filter-target").filter(function() {
          $(this).closest('.my-filter-object').toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>