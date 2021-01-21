@extends('layouts.page')

@section('title', 'Laravel Number to Bangla')

@section('content')
@push('css')
<!--     <link href="{{ asset('plugins/rainbow/rainbow.min.css') }}" rel="stylesheet">

 -->
 <link href="{{ asset('plugins/prism/prism.css') }}" rel="stylesheet">
 @endpush

<div class="space-10"></div>
<div class="row">
    <div class="col-sm-3">
        <ul class="documentation-menu">
            <li><strong>Getting Started</strong>
                <ul>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#installation">Installation</a></li>
                    <li><a href="#configuration">Configuration</a></li>
                </ul>
            </li>
            <li><a href="#basic-usage"><strong>Basic Usage</strong></a></li>
            <li><strong>Example</strong>
                <ul>
                    <li><a href="#bn-word">Number to Word</a></li>
                    <li><a href="#bn-money">Number to Money</a></li>
                    <li><a href="#bn-number">Number to Bangla Number</a></li>
                    <li><a href="#bn-month">Number to Month</a></li>
                </ul>
            </li>
        </ul>
        <div class="space-10"></div>
        <!-- Place this tag where you want the button to render. -->
        <a class="github-button" href="https://github.com/rakibhstu" data-color-scheme="no-preference: light; light: light; dark: dark;" data-size="large"  aria-label="Follow @rakibhstu on GitHub">Follow @rakibhstu</a>
    </div>
    <div class="col-sm-9">
        <h3>Laravel Package: Number to Bangla <a style="float:right;" href="https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Frakibhstu%2Fnumber-to-bangla"><img alt="Twitter" src="https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Fgithub.com%2Frakibhstu%2Fnumber-to-bangla"></a></h3>
        <div class="badge-io">
            <img alt="Packagist" src="https://img.shields.io/packagist/dt/rakibhstu/number-to-bangla">

            <a  href="https://github.com/rakibhstu/number-to-bangla/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/rakibhstu/number-to-bangla"></a> 
            <a href="https://github.com/rakibhstu/number-to-bangla/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/rakibhstu/number-to-bangla"></a>
        </div>

        <hr>
        <div id="introduction" >
            <h4><strong>Introduction</strong></h4>

            Laravel package to convert English numbers to Bangla number or Bangla text, Bangla month name and Bangla Money Format for Laravel 5.5+. Maximum possible number to covert in Bangla word is 999999999999999 Example,
            
        </div>
        <div class="space-10"></div>
        <div id="installation" >
            <h4><strong>Installation</strong></h4>

            Install the package through Composer. On the command line:
<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
    composer require rakibhstu/number-to-bangla
</code></pre>
<!-- code section end -->
        </div>
        <div class="space-10"></div>
        <div id="configuration" >
            <h4><strong>Configuration</strong></h4>
            Add the following to your <code>providers</code> array in <code>config/app.php</code>:
<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
    'providers' => [
        // ...

        Rakibhstu\Banglanumber\NumberToBanglaServiceProvider::class,
    ],
</code></pre>
<!-- code section end -->
        </div>
        <div class="space-10"></div>
        <div id="basic-usage">
            <h4><strong>Basic Usage</strong></h4>
            Here you can see a basic example of just how simple this package is to use.
<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
    use Rakibhstu\Banglanumber\NumberToBangla;

    // ...

    $numto = new NumberToBangla();

    // If you want to convert any number (Integer or Float) into Bangla Word
    $text = $numto->bnWord(13459);    // Output:  তেরো হাজার চার শত ঊনষাট
    $text = $numto->bnWord(1345.05);  // Output:  এক হাজার তিন শত পঁয়তাল্লিশ দশমিক শূন্য পাঁচ
</code></pre>
<!-- code section end -->
            
        </div>
        <div class="space-10"></div>
        <div id="bn-word">
            <h4><strong>Number to Bangla Word</strong></h4>
            Use <code>bnWord()</code> to convert any number into bangla word. maximum  allowed input length is 15. Example,
<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
// Integer
$text = $numto->bnWord(13459);    // Output:  তেরো হাজার চার শত ঊনষাট

// Float
$text = $numto->bnWord(1345.05);    // Output: এক হাজার তিন শত পঁয়তাল্লিশ দশমিক শূন্য পাঁচ
$text = $numto->bnWord(345675.105); 
// Output: তিন লক্ষ পঁয়তাল্লিশ হাজার ছয় শত পঁচাত্তর দশমিক এক শূন্য পাঁচ
</code></pre>
<!-- code section end -->
            
        </div>
        <div class="space-10"></div>
        <div id="bn-money">
            <h4><strong>Number to Bangla Money Format</strong></h4>
            Use <code>bnMoney()</code> to convert any number into bangla money format with 'টাকা' &amp; 'পয়সা'. Example,
<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
$text = $numto->bnMoney(13459);     // Output:  তেরো হাজার চার শত ঊনষাট টাকা
$text = $numto->bnMoney(13459.05);  // Output:  তেরো হাজার চার শত ঊনষাট টাকা পাঁচ পয়সা
$text = $numto->bnMoney(13459.5);   // Output:  তেরো হাজার চার শত ঊনষাট টাকা পঞ্চাশ পয়সা
</code></pre>
<!-- code section end -->
        </div>
        <div class="space-10"></div>
        <div id="bn-number">
            <h4><strong>Number to Bangla Number</strong></h4>
            Use <code>bnNum()</code> to convert any number into bangla number. Example,
<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
$text = $numto->bnNum(13459);    // Output:  ১৩৪৫৯
$text = $numto->bnNum(2334.768); // Output:  ২৩৩৪.৭৬৮
</code></pre>
<!-- code section end -->
        </div>
        <div class="space-10"></div>
        <div id="bn-month">
            <h4><strong>Number to Month Name in Bangla</strong></h4>
            Use <code>bnMonth()</code> to convert any number into bangla number. Input Limit (1-12) Example,

<!-- code section start -->
<pre class=" language-php"><code class=" language-php">
$text = $numto->bnMonth(1);    // Output:  জানুয়ারি 
$text = $numto->bnMonth(4);    // Output:  এপ্রিল
</code></pre>
<!-- code section end -->
            
        </div>
        <div class="space-10"></div>
        
        <h4><strong>License</strong></h4>
        Number to Bangla is licensed under <a href="https://github.com/rakibhstu/number-to-bangla/blob/master/LICENSE">The MIT License (MIT)</a>.
        <div class="space-10"></div>
        Submit an issue <br> <!-- Place this tag where you want the button to render. -->
        <a class="github-button" href="https://github.com/rakibhstu/number-to-bangla/issues" data-color-scheme="no-preference: light; light: light; dark: dark;" data-show-count="true" aria-label="Issue rakibhstu/number-to-bangla on GitHub">Issue</a>
    </div>
</div>
@push('script')
    <!-- <script type="text/javascript" src="{{asset('plugins/rainbow/rainbow-custom.min.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('plugins/prism/prism.js')}}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
@endpush

@endsection