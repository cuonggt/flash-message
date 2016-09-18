@if (session()->has('flash_message'))
<div class="alert alert-{{ session('flash_message.level') }} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{ session('flash_message.title') }}</strong> {!! session('flash_message.message') !!}
</div>
@endif
@if (session()->has('flash_message_overlay'))
<div id="flash-overlay-modal" class="modal fade flash-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title">{{ session('flash_message.title') }}</h4>
            </div>

            <div class="modal-body">
                <p>{!! session('flash_message.message') !!}</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif