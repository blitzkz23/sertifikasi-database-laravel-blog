@extends('portal.app')
@section('sc-css')
    <link href="{{ url('assets/02-Single-post/css/styles.css') }}" rel="stylesheet">
    <link href="{{ url('assets/02-Single-post/css/responsive.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="single-info">

        <p class="date"><em>{{ date('D, M Y', strtotime($info->created_at)) }}</em></p>
        <h3 class="title mb-5"><a href="#"><b class="light-color">{{ $info->info_title }}</b></a></h3>
        {!! $info->info_content !!}

    </div>
    <!-- single-info -->
@endsection
