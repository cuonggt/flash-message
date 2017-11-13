@if (session()->has('flash_message'))
<script type="text/javascript">
    swal({
        title: "{{ session('flash_message.title') }}",
        text: "{!! session('flash_message.message') !!}",
        icon: "{{ session('flash_message.level') }}",
        timer: 1700,
        buttons: false
    });
</script>
@endif
@if (session()->has('flash_message_overlay'))
<script type="text/javascript">
    swal({
        title: "{{ session('flash_message_overlay.title') }}",
        text: "{!! session('flash_message_overlay.message') !!}",
        icon: "{{ session('flash_message_overlay.level') }}"
    });
</script>
@endif
