<div class="row">
    <div class="col-lg-12">
        @if ( Session::get('sys_message_success') )
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-check"></i> {{ Session::get('sys_message_success') }}
                </h4>
                {{ Session::get('sys_message_content') }}
            </div>
        @endif
        @if ( Session::get('sys_message_warning') )
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-warning"></i> {{ Session::get('sys_message_warning') }}
                </h4>
                {{ Session::get('sys_message_content') }}
            </div>
        @endif
        @if ( Session::get('sys_message_error') )
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-times"></i> {{ Session::get('sys_message_error') }}
                </h4>
                {{ Session::get('sys_message_content') }}
            </div>
        @endif
        @if ( $errors->count() > 0 )
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-ban"></i> {{ Lang::get('messages.invalid-entries-title') }}
                </h4>
                {{ trans('messages.invalid-entries-message') }}
            </div>
        @endif
    </div>
</div>