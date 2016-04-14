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
			<!-- TABBOX: Title -->
			<div class="nav-tabs-custom">
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs">
					<li id='tn_' class="active"><a href="#tc_" data-toggle="tab">Tab 1</a></li>
					<li id='tn_'><a href="#tc_" data-toggle="tab">Tab 2</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-institution"></i></a></li>
				</ul>
				<!-- Tab Content -->
				<div class="tab-content">
					<div id='tc_' class="tab-pane active">
						<b>How to use:</b>
					
						<p>Exactly like the original bootstrap tabs except you should use
						the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
						A wonderful serenity has taken possession of my entire soul,
						like these sweet mornings of spring which I enjoy with my whole heart.
						I am alone, and feel the charm of existence in this spot,
						which was created for the bliss of souls like mine. I am so happy,
						my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
						that I neglect my talents. I should be incapable of drawing a single stroke
						at the present moment; and yet I feel that I never was a greater artist than now.
					</div>
					<!-- /.tab-pane -->
					<div id='tc_' class="tab-pane">
						The European languages are members of the same family. Their separate existence is a myth.
						For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
						in their grammar, their pronunciation and their most common words. Everyone realizes why a
						new common language would be desirable: one could refuse to pay expensive translators. To
						achieve this, it would be necessary to have uniform grammar, pronunciation and more common
						words. If several languages coalesce, the grammar of the resulting language is more simple
						and regular than that of the individual languages.
					</div>
					<!-- /.tab-pane -->
				</div>
			</div>
			<!-- /TABBOX -->
		</div>
	</div>
@stop