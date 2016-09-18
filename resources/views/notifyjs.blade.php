@if (session()->has('flash_message'))
<script type="text/javascript">
$.Notification.notify("{{ session('flash_message.level') }}", "top right", "{{ session('flash_message.title') }}", "{!! session('flash_message.message') !!}");
</script>
@endif