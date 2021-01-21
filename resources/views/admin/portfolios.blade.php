@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            Total Portfolio: {{$portfolios->total()}}
        </div>
        <div class="col-sm-12">
            @foreach($portfolios as $key => $portfolio )
            <div class="portfolio-item">
                <div class="p-image">
                    <img height="60" src="{{url($portfolio->feature_image)}}">
                </div>
                <div class="p-title p-5">{{$portfolio->title}}</div>
                <div class="p-category p-5">{{$portfolio->category['name']}}</div>
                <div class="p-tech p-5">php wordpress jquery laravel</div>
                <div class="p-excerpt p-5"> {{ Str::limit($portfolio->description, $limit = 100, $end = '...') }}</div>
                <div class="p-button p-5">
                    <a href="/portfolio/edit/{{$portfolio->id}}">
                        <i class="fa fa-pencil text-green p-5 mlr-5"></i>
                    </a>
                    <a href="/portfolio/delete/{{$portfolio->id}}">
                        <i class="fa fa-trash text-red p-5 mlr-5"></i>
                    </a>                  
                </div>
            </div>
            @endforeach

            {!! $portfolios->render() !!}
        </div> 
    </div>
</div>
@push('script')
@endpush
@endsection