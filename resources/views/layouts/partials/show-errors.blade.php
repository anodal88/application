<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "0",
        "extendedTimeOut": "0",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    var msg = "";
    @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                @if($loop->last)
                    msg += "{{ $error }}";
                @else
                    msg += "{{ $error }}"+"\r\n";
                @endif
            @endforeach
            @endif
    if (msg !== "") {
        toastr.error(msg);
    }
</script>
