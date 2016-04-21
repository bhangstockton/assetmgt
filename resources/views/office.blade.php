@extends('template.bones')

@section('sysmod-title')
    AMS
@stop

@section('page-icon')
    
@stop

@section('page-title')
    Offices
@endsection

@section('page-ident')
    {{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
    {{ Form::hidden('page_group_lev2','none',['id' => 'page_group_lev2',]) }}
    {{ Form::hidden('page_id','pageid',['id' => 'page_id',]) }}
@endsection

@section('breadcrumbs')
    <li><a href="#">AMS</a></li>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- TABBOX: Information -->
            <div class="nav-tabs-custom">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs">
                    <li id='tn_list' class="active"><a href="#tc_list" data-toggle="tab">List</a></li>
                    <li id='tn_add_offices'><a href="#tc_add_offices" data-toggle="tab">Add Offices</a></li>
                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content">
                    <div id='tc_list' class="tab-pane active">
                        <!-- TABTABLE: List of Suppliers -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <!-- headers -->
                                <tr>
                                    <td style="border-top: 0px !important;"><b>ID</b></td>
                                    <td style="border-top: 0px !important;"><b>Office Name</b></td>
                                    <td style="border-top: 0px !important;"><b>address</b></td>
                                    <td style="border-top: 0px !important;"><b>building</b></td>
                                    <td style="border-top: 0px !important;"><b>floor</b></td>
                                    <td style="border-top: 0px !important;"><b>station</b></td>
                                    <td class='text-center' style="width: 7%; border-top: 0px !important;"><b><i class="fa fa-bolt"></i> </b></td>
                                </tr>
                                <!-- rows -->
                                @foreach ($offices as $office)
                                    <tr>
                                        <td>{{ $office->id }}</td>
                                        <td>{{ $office->office_name }}</td>
                                        <td>{{ $office->address }}</td>
                                        <td>{{ $office->building }}</td>
                                        <td>{{ $office->floor }}</td>
                                        <td>{{ $office->station }}</td>                                        
                                        <td>
                                            <!-- BTN: /delete -->
                                            {{ Form::button('<i class="fa fa-trash"></i> &nbsp; Delete', [
                                                'onclick' => "location.href='". url('/')."'",
                                                "class" => "btn btn-danger btn-xs",
                                            ]) }}
                                            <!-- BTN: /delete -->
                                        </td>
                                     </tr> 
                                @endforeach      
                            </table>
                        </div>
                        <!-- /TABTABLE: List of Offices -->
                    </div>
                    <!-- /.tab-pane -->
                    <div id='tc_add_offices' class="tab-pane">
                        <!-- TEXT: Office's Name -->
                        <div class='form-group'>
                            {{ Form::label('Office') }}
                            {{ Form::text('name', '',[
                                'class' => 'form-control',
                                'placeholder' => 'Office Name',
                            ]) }}
                            {{ $errors->first('name', '<code>:message</code>') }}
                        </div>
                        <!-- --------------- -->
                        <!-- TEXT: Address 1 -->
                       

                        <!-- ------------------- -->
                        <!-- ------------------- -->
                        <div class='form-group'>
                            <div class="row">

                                <!-- TEXT: Contact No. 1 -->
                                <div class="col-xs-4">
                                    {{ Form::label('Contact No. 1') }}
                                    {{ Form::text('contact_1', '',[
                                        'class' => 'form-control',
                                        'placeholder' => 'Contact No. 1',
                                    ]) }}
                                    {{ $errors->first('contact_1', '<code>:message</code>') }}
                                </div>
                                
                                <!-- TEXT: Contact No. 2 -->
                                <div class="col-xs-4">
                                    {{ Form::label('Contact No. 2') }}
                                    {{ Form::text('contact_2', '',[
                                        'class' => 'form-control',
                                        'placeholder' => 'Contact No. 2',
                                    ]) }}
                                    {{ $errors->first('contact_2', '<code>:message</code>') }}
                                </div>
                                
                                <!-- TEXT: Fax No. -->
                                <div class="col-xs-4">
                                    {{ Form::label('Fax No.') }}
                                    {{ Form::text('fax', '',[
                                        'class' => 'form-control',
                                        'placeholder' => 'Fax No.',
                                    ]) }}
                                    {{ $errors->first('fax', '<code>:message</code>') }}
                                </div>

                            </div>
                        </div>

                        <!-- ----------------------- -->
                        <!-- TEXTA: Remarks -->
                        <div class='form-group'>
                            {{ Form::label('Remarks') }}
                            {{ Form::textarea('remarks', '',[
                                'class' => 'form-control',
                                'placeholder' => 'Remarks',
                                'rows' => '3',
                            ]) }}
                            {{ $errors->first('remarks', '<code>:message</code>') }}
                        </div>
                        <!-- Add Supplier -->
                        {{ Form::button('<i class="fa fa-check"></i> &nbsp; Add ', [
                            "class" => "btn btn-primary",
                            "id"    => "submit",
                            "type"  => "submit",
                        ]) }}
                        <!-- /Add Office -->
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </div>
            <!-- /TABBOX -->
        </div>
    </div>
@stop