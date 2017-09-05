@extends('layouts.website.page_layout')
@section('title')
Culture Tour
@endsection
@section('content')
	<div class="container">
		<div class="panel panel-info">
	        <div class="panel-heading" style="text-align: center"><h1>@yield('heading')</h1></div>
	            <div class="panel-body">
					<div class="row">
							@yield('page_content')
					</div>
				</div>
		</div>
	</div>
@endsection