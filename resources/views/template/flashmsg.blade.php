<div class="row">
    <div class="col-lg-12">
        @if ( Session::get('sys_msg') )
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-check"></i> {{ Session::get('sys_msg_title') }}
                </h4>
                {{ Session::get('sys_msg') }}
            </div>
        @endif
        @if ( Session::get('sys_msg_warn') )
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-warning"></i> {{ Session::get('sys_msg_title') }}
                </h4>
                {{ Session::get('sys_msg_warn') }}
            </div>
        @endif
        @if ( Session::get('sys_msg_err') )
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-times"></i> {{ Session::get('sys_msg_title') }}
                </h4>
                {{ Session::get('sys_msg_err') }}
            </div>
        @endif
        @if ( $errors->count() > 0 )
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    <i class="fa fa-ban"></i> {{ Lang::get('messages.invalid_entries_title') }}
                </h4>
                {{ Lang::get('messages.invalid_entries') }}
            </div>
        @endif
    </div>
</div>