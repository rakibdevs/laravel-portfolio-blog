@extends('layouts.page')

@section('title', 'Home')
@section('class', 'home')

@section('banner')
@push('css')
    <meta property="og:image" content="{{ asset('images/rakib-cartoonized.jpg') }}">
    <link rel="stylesheet" href="{{asset('css/github-calendar-responsive.css')}}"/>
@endpush
    <section class="banner">
        <div class="row m-0">
            <div class="col-sm-6 author-photo">
                <img src="{{ asset('images/rakib-cartoonized.jpg')}}">
            </div>
            <div class="col-sm-6 author-info">
                <span class="greetings">Hello I'm</span>
                <h2 class="name"><b>MD. RAKIBUL ISLAM</b></h2>
                <div class="author-tags">
                    
                    <div id="text-1">Expert in </div> 
                    <div id="text-2"> 
                      <span id="text-2-span"><span style="color:#f55247;">Laravel</span></span>
                    </div>
                </div>
                <div class="space-10"></div>
                <h1 class="author-slogan">
                    I want to 
                    <span class="slogan-highlight theme-background">make things</span><br>
                    that <u class="slogan-underline">make a difference</u>.
                </h1>

                <a href="" class="mt-20 btn-theme hvr-hang">LET'S TALK</a>

        
                
            </div>
        </div>
    </section>
    
@endsection

@section('content')
    

    <section>
        <div class="row justify-content-center mb-5">
            
            <div class="col-sm-6 mt-5 mb-3">
                <div class="section-content text-align-left">
                    
                    <h4 class=" project-header"><span class="shade-bar">RADMIN - LARAVEL ADMIN STARTER</span></h4>
                    
                    <p class=""> <strong>Are you stuck with setting up an admin panel in laravel?</strong> <span class="shade-bar">Radmin</span> Laravel starter will be the best solution for you.<br><br>
                    Laravel admin panel with <span class="shade-bar">REST API</span>, Advanced user, roles & permission management , Serverside Datatable, Datatable Edit and Export,Cache Clear, XSS protection and many more features.

                    <br> Get latest version of Laravel 7 & <span class="shade-bar">Laravel 8</span></p>
                    <div class="section-buttons">
                        <a href="http://radmin.tecvaly.com/" class="btn-theme hvr-hang">VIEW DEMO</a>
                        <a href="https://codecanyon.net/item/laravel-admin-template-roles-permission-editable-datatables/26005211" class="btn-theme hvr-hang" style="background-color: rgb(230, 59, 25);">BUY NOW</a>
                    </div>
                </div>
                
                
            </div>
            <div class="col-sm-6">
                <div class="section-image ">
                    <a href="https://codecanyon.net/item/laravel-admin-template-roles-permission-editable-datatables/26005211">
                        <img src="{{ asset('images/projects/banner.jpg')}}">
                    </a>
                    
                </div>
            </div>
            
        </div>

    
        <div class="row mt-5">
            <div class="col-sm-7">
                <div class="row">
                @foreach($git_repos as $key => $repo)
                    <div class="git-repo col-sm-6 mt-1">
                        <i class="fa fa-file-code-o repo-book-icon" aria-hidden="true"></i> <a class="repo-title shade-bar" href="{{$repo->svn_url}}">{{substr($repo->name,0,35)}}</a>
                        <p class="mb-1 min-h-70">
                            {{substr($repo->description,0,100)}}...
                        </p>
                        <div class="repo-analytics text-muted">
                            <i class="fa fa-star-o"></i>&nbsp; {{$repo->stargazers_count}} &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-code-fork"></i>&nbsp; {{$repo->forks_count}}
                        </div>
                    </div>

                @endforeach
                </div>
            </div>
            <div class="col-sm-5">
                <div class="calendar"></div>
                <br>
                See more open source projects here, <a href="https://github.com/RakibDevs" class="shade-bar">@rakibdevs</a>
            </div>
        </div>
    </section>


    @push('script')
        <script src="{{asset('js/github-calendar.min.js')}}"></script>
        <script>
            // initiate github calender
            GitHubCalendar(".calendar", "rakibdevs", { responsive: true });

            var text2 = [
                            "<span style='color:#42b883;'>Vue.js</span>",
                            "<span style='color:#21759b;'>Wordpress</span>",
                            "<span style='color:#00758f;'>My</span><span style='color:#f29111;'>Sql</span>", 
                            "<span style='color:#f55247;'>Laravel</span>"
                        ];
            var count = 0;
            setInterval(() => {
                document.getElementById('text-2-span').innerHTML= text2[count];
                count++;
                if(count == 4){
                    count = 0;
                }
            }, 7000);

        </script>
    @endpush
@endsection

