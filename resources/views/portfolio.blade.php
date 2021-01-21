@extends('layouts.page')

@section('title', 'Portfolios')
@push('css')
@section('content')
<div class="space-10"></div>
<portfolio-component :categories = "{{ $categories }}"></portfolio-component >
@endsection