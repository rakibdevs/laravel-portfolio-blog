@extends('layouts.page')

@section('title', 'Home')
@section('class', 'home')

@section('banner')
@push('css')
    <meta property="og:image" content="{{ asset('images/rakib-cartoonized.jpg') }}">

@endpush
    <div class="main-container position-relative">
    </div>
    <section class="banner">
        
        <div class="row m-0">
            <div class="col-sm-5 relative">
                <img src="{{asset('images/skills.png')}}" class="rotate skill-image-banner">
                <div class="author-photo">
                    <img src="{{ asset('images/rakib-cartoonized.jpg')}}">
                </div>

            </div>
            <div class="col-sm-7 author-info">
                <div class="row">
                    <div class="col-sm-9">
                        <h5 class="font-weight-bold text-justify">Hi there, I'm <span class="color-theme">Md. Rakibul Islam</span> — a full-stack web developer and Laravel expert from Dhaka, Bangladesh, with over 5 years professional experience.</h5>

                        <p class="mt-4 mb-4">I'm a Software Engineer at <a href="https://mbm.group" class="font-weight-bold">MBM Group</a> where I work on <span class="shade-bar">ERP</span> with Laravel & Vue.js.</p>

                        <p class="text-justify">I've worked on some pretty interesting projects, including a <a href="http://tourgeeks.rakibul.dev/">tourist social network</a>, <a href="https://codecanyon.net/item/laravel-admin-template-roles-permission-editable-datatables/26005211">Laravel kickstarter</a>, a QA community and some laravel packages.</p>

                        <p class="text-justify">I'm a big believer in open-source software — I've contributed to many open-source projects and even have <a   href="https://github.com/rakibdevs">a few of my own on GitHub.</a></p>
                        <div class="social-icons mt-3 mb-3">
                
                            <a href="https://github.com/rakibdevs" title="Find me on Github">
                                <i class="fa fa-github" aria-hidden="true"></i>
                            </a>
                            <a href="https://bd.linkedin.com/in/rakibhstu" title="Find me on Linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="https://stackoverflow.com/users/6678641/rakibul-islam" title="Find me on Stackoverflow">
                                <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                            </a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <a id="scroll-down" class="ml-3" href="#projects-preview"><span></span></a>
    </section>
    
@endsection

@section('content')
    

    <section class="projects-preview" id="projects-preview">
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
        <github-repositories></github-repositories>
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-12">
                <p class="text-center">
                    See more open source projects here, <a href="https://github.com/RakibDevs" class="shade-bar">@rakibdevs</a>
                </p>
            </div>
            {{-- <div class="col-sm-8">
                <div class="calendar"></div>
                
            </div> --}}
        </div>
    </section>


@endsection
@push('script')
    <script>

        Prism.highlightAll();

        $(function() {
          $('#scroll-down').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
          });
        });


    </script>
@endpush

