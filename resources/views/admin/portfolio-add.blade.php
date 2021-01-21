@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <portfolio-form :categories = "{{ $categories }}" :technologies = "{{ $technologies }}"></portfolio-form>                   
</div>
@endsection