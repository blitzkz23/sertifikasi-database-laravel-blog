@extends('portal.app')
@section('sc-css')
    <link href="{{ url('assets/03-About-me/css/styles.css') }}" rel="stylesheet">
    <link href="{{ url('assets/03-About-me/css/responsive.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="recomend-area">
        <h4 class="title"><b class="light-color">Info</b></h4>
        <div class="row">

            @foreach ($data['infos'] as $infos)
                <div class="row ml-3">
                    <div class="d-flex flex-column bd-highlight mb-3" style="font-size: 1vw;">
                        <a href="{{ url('info-detail/' . $infos->id) }}">
                            <h4>{{ substr($infos->info_title, 0, 50) . (strlen($infos->info_title) > 50 ? '...' : '') }}
                            </h4>
                        </a>
                        <h6 class=" card-subtitle mb-4 text-muted">{{ date('D, M Y', strtotime($infos->created_at)) }}
                        </h6>

                    </div>
                </div>
            @endforeach

        </div><!-- row -->
    </div><!-- recomend-area -->
@endsection
