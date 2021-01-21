@extends('layouts.page')

@section('title', $portfolio->title)
@push('css')
    <meta property="og:url"                content="{{Request::url()}}" />
    <meta property="og:type"               content="Portfolio" />
    <meta property="og:title"              content="{{$portfolio->title}}" />
    <meta property="og:description"        content="{{ Str::limit($portfolio->description, $limit = 100, $end = '...') }}" />
    <meta property="og:image"              content="{{ asset($portfolio->feature_image) }}">

    <meta name="twitter:card" content="Portfolio" />
    <meta name="twitter:site" content="@rakibhstu" />
    <meta name="twitter:creator" content="@rakibhstu" />
@endpush
@section('content')
<div class="space-10"></div>
<div class="row">
    <div class="col-sm-12 center">
        <h6>
            <p><i class="fa fa-home"></i> Portfolio / {{$portfolio->category['name']}} / {{$portfolio->title}}</p>

            <h2><strong>{{$portfolio->title}}</strong></h2>
            <!-- fetch github insights from github url -->
            @if($portfolio->github_url != null)
            <div class="github-insights">
                <a class="github-button" href="{{$portfolio->github_url}}/archive/master.zip" aria-label="Download from GitHub">Download</a>
                <a class="github-button" href="{{$portfolio->github_url}}/subscription" data-icon="octicon-eye" data-show-count="true" aria-label="Watch on GitHub">Watch</a>           

                <a class="github-button" href="{{$portfolio->github_url}}" data-icon="octicon-star" data-show-count="true" aria-label="Star on GitHub">Star</a>
                <a class="github-button" href="{{$portfolio->github_url}}/fork" data-icon="octicon-repo-forked" data-show-count="true" aria-label="Fork from GitHub">Fork</a>
                <a class="github-button" href="{{$portfolio->github_url}}/issues" data-icon="octicon-issue-opened" data-show-count="true" aria-label="Issue on GitHub">Issue</a>

            </div>
            @endif

        </h6>
        
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-7">
        @if(count($portfolio->image)>0)
            <slider-component :slides = "{{$portfolio->image}}" :features ="{{$portfolio}}" ></slider-component>
        @else
        	<img class="portfolio-feature" src="{{ asset($portfolio->feature_image) }}" onError="this.onerror=null;this.src='{{ asset('images/demo.jpg') }}';">
        @endif
        <div class="space-10"></div>
        <div class="navigation-buttons">
            @php
                $next = $portfolio->next();
                $previous = $portfolio->previous()
            @endphp
            <div class="nav-prev">
                @if(isset($previous))
                <a href="{{url('portfolio/'.$previous->slug)}}" title="{{$previous->title}}">
                    <img width="100" height="60" src="{{ asset($previous->feature_image) }}" onError="this.onerror=null;this.src='{{ asset('images/demo.jpg') }}';">
                    <i class="fa fa-arrow-left"> &nbsp; &nbsp;Previous</i>
                </a>
                @endif
                
            </div>
            <div class="nav-next">
                @if(isset($next))
                <a href="{{url('portfolio/'.$next->slug)}}" title="{{$next->title}}">
                    <img width="100" height="60" src="{{ asset($next->feature_image) }}" onError="this.onerror=null;this.src='{{ asset('images/demo.jpg') }}';">
                    <i class="fa fa-arrow-right"> &nbsp; &nbsp;Next</i>
                </a>
                @endif
            </div>
        </div>
        
    </div>
    <div class="col-sm-5">
        <strong>Technologies:</strong>
        <ul class="portfolio-tech">
            @foreach($portfolio->technology as $tech)
                <li>{{$tech->technology['name']}}</li>
            @endforeach
        </ul>
        <!-- check if duration exist -->
        @if($portfolio->start_at != null)
        <p class="project-duration"><strong>Duration:</strong> {{$portfolio->start_at}}-{{$portfolio->end_at}}</p>
        @endif
        <!-- check if client info exist -->
        @if($portfolio->client != null)
        <p class="client"><strong>Client: </strong> {{$portfolio->client}}</p>
        @endif
        <!-- check if project description exist -->
        @if($portfolio->description != null)
        <strong>Description:</strong>
        <div class="portfolio-details">
            {!!$portfolio->description!!}
        </div>
        @endif
        <div class="space-10"></div>
        <!-- check if demo url exist -->
        @if($portfolio->demo != null)
        <div class="center"> 
            <a href="{{$portfolio->demo}}" class="btn btn-theme">View Demo</a>
        </div>
        @endif
        
    </div>     
</div>
</div>   
    @push('script')
        <script async defer src="https://buttons.github.io/buttons.js"></script>
       
    @endpush
@endsection