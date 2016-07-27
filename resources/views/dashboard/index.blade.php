@extends('_layouts.auth')

@section('page_title', 'Dashboard')

@section('content')
    {!! Breadcrumbs::render('dashboard') !!}

    @if (auth()->user()->is_admin)
	    <div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="dashboard-stat dashboard-stat-light blue-soft" href="/websites">
				<div class="visual">
					<i class="fa fa-globe"></i>
				</div>
				<div class="details">
					<div class="number">
						{{ App\Website::count() }}
					</div>
					<div class="desc">
						Websites
					</div>
				</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="dashboard-stat dashboard-stat-light red-soft" href="/users">
				<div class="visual">
					<i class="fa fa-user"></i>
				</div>
				<div class="details">
					<div class="number">
						{{ App\User::count() }}
					</div>
					<div class="desc">
						Users
					</div>
				</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="dashboard-stat dashboard-stat-light green-soft" href="/chat">
				<div class="visual">
					<i class="fa fa-comments-o"></i>
				</div>
				<div class="details">
					<div class="number">
						{{ $conversations }}
					</div>
					<div class="desc">
						Chat
					</div>
				</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="dashboard-stat dashboard-stat-light purple-soft" href="/chat">
				<div class="visual">
					<i class="fa fa-usd"></i>
				</div>
				<div class="details">
					<div class="number">
						120 USD
					</div>
					<div class="desc">
						Net earnings
					</div>
				</div>
				</a>
			</div>
		</div>
		<message-graph :websites="{{ $websites }}"></message-graph>
	@endif
@stop

@section('scripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
@stop
