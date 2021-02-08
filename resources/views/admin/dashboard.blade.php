@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
	<div class="editable">hi</div>
</div>
@push('script')
	<script type="text/javascript">
		var editor = new MediumEditor('.editable');
	</script>
@endpush
@endsection 