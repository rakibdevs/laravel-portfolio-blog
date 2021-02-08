@extends('layouts.page')

@section('title', 'Home')
@section('class', 'home')

@section('banner')
@push('css')
    <meta property="og:image" content="{{ asset('images/rakib-cartoonized.jpg') }}">

@endpush
    <div class="main-container position-relative">
        <div class="code-block">
            
            <span class="code-red">namespace</span> <span class="code-green">App\Models;</span><br>

            <span class="code-red">use</span> Illuminate\Database\Eloquent\<span class="code-blue">Model</span>;<br><br>

            <span class="code-blue">class</span> <span class="code-green">Flight</span><span class="code-red"> extends</span> <span class="code-green">Model</span><br>
            { <br>
                <span class="text-muted ml-4">//</span> <br>
            }
        </div>
    </div>
    <section class="banner">
        
        <div class="row m-0">
            <img src="{{asset('images/skills.png')}}" class="rotate skill-image-banner">
            <div class="col-sm-6 author-photo">
                <img src="{{ asset('images/rakib-cartoonized.jpg')}}">

            </div>
            <div class="col-sm-6 author-info">
                <span class="greetings">Hello I'm</span>
                <h2 class="name"><b>MD. RAKIBUL ISLAM</b></h2>
                <div class="author-tags">
                    
                    <div id="text-1">Skilled in </div> 
                    <div id="text-2"> 
                      <span id="text-2-span">Laravel</span>
                    </div>
                </div>
                <div class="space-10"></div>
                <h1 class="author-slogan">
                    I want to 
                    <span class="slogan-highlight theme-background">make things</span><br>
                    that <u class="slogan-underline">make a difference</u>.
                </h1>

                <a href="#footer" class="mt-20 btn-theme hvr-hang">LET'S TALK</a>    
            </div>
        </div>
    </section>
    
@endsection

@section('content')
    

    <section class="projects-preview">
        <div class="row justify-content-center mb-5" style="min-height: 400px;">
            
            <div class="col-sm-6 mt-5 mb-3">
                <div class="section-content text-align-left" style="padding: 10px 40px;">
                    
                    <h4 class=" project-header"><span class="shade-bar">RADMIN - LARAVEL ADMIN STARTER</span></h4>
                    
                    <p class="text-justify"> <strong>Are you stuck with setting up an admin panel in laravel?</strong> <span class="shade-bar">Radmin</span> Laravel starter will be the best solution for you.<br><br>
                    Laravel admin panel with <span class="shade-bar">REST API</span>, Advanced user, roles & permission management , Serverside Datatable, Datatable Edit and Export,Cache Clear, XSS protection and many more features.

                    <br> Get latest version of Laravel 7 & <span class="shade-bar">Laravel 8</span></p>
                    <div class="section-buttons text-center">
                        <a href="http://radmin.tecvaly.com/" class="btn-theme hvr-hang">VIEW DEMO</a>
                        <a href="https://codecanyon.net/item/laravel-admin-template-roles-permission-editable-datatables/26005211" class="btn-theme hvr-hang" style="background-color: rgb(230, 59, 25);">BUY NOW</a>
                    </div>
                </div>
                
                
            </div>
            <div class="col-sm-6">
                <div class="section-image radmin-img">
                    {{-- <a href="https://codecanyon.net/item/laravel-admin-template-roles-permission-editable-datatables/26005211">
                        <img src="{{ asset('images/radmin.jpg')}}">
                    </a> --}}
                    
                </div>
            </div>
            
        </div>

        <div class="m-5"></div>
        <div class="row git-repo-parent ">
            @foreach($git_repos as $key => $repo)
                <div class="col-sm-4">
                    <div class="git-repo">
                        
                       <a class="repo-title shade-bar" href="{{$repo->svn_url}}">{{substr($repo->name,0,35)}}</a>
                        <p class="mb-1 min-h-70">
                            {{substr($repo->description,0,100)}}...
                        </p>
                        <div class="repo-analytics text-muted">
                            <i class="fa fa-star-o"></i>&nbsp; {{$repo->stargazers_count}} &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-code-fork"></i>&nbsp; {{$repo->forks_count}}
                        </div>
                    </div>
                </div>

            @endforeach
            
            
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-12">
                <p class="text-center">
                    See more open source projects here, <a href="https://github.com/RakibDevs" class="shade-bar">@rakibdevs</a>
                </p>
            </div>
            <div class="col-sm-8">
                <div class="calendar"></div>
                
            </div>
        </div>
    </section>
    <pre><code class="language-css">p { color: red }</code></pre>
    <pre><code class="language-js">var zinnah;</code></pre>


@endsection
@push('script')
    <script>
        // initiate github calender
        GitHubCalendar(".calendar", "rakibdevs", { responsive: true });
        
        
        var text2 = ["Vue.js","Javascript","MySql", "Laravel"];
        var count = 0;
        setInterval(() => {
            document.getElementById('text-2-span').innerHTML= text2[count];
            count++;
            if(count == 4){
                count = 0;
            }
        }, 7000);

        Prism.highlightAll();




        var typed6 = new Typed('.code-block', {
            strings: ['npm install^1000\n `installing components...` ^1000\n `Fetching from source...`'],
            typeSpeed: 40,
            backSpeed: 0,
            loop: true
          });

    </script>
@endpush

