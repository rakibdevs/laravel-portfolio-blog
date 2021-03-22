@extends('admin.layouts.main')
@push('css')
<style type="text/css">
	.popover {
  position: absolute;
  display: none;
  background: #fff;
  border: 1px solid #999;
  padding: 10px;
  width: auto;
  box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}

.popover:after,
.popover:before {
  right: 100%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.popover:after {
  border-color: rgba(255, 255, 255, 0);
  border-right-color: #ffffff;
  border-width: 10px;
  top: 50%;
  margin-top: -10px;
}

.popover:before {
  border-color: rgba(201, 201, 201, 0);
  border-right-color: #c9c9c9;
  border-width: 11px;
  top: 50%;
  margin-top: -11px;
}

</style>
@endpush
@section('content')
<div class="container-fluid">
	<div class="post-editor " style="height: 320px;">
		<div class="editable">hi</div>
		<textarea class="editable "></textarea>
	</div>
	<div class="popover">
	    <input type='text' class='span1' />
	    <input type='button' class='btn' value='Save' />
	</div>
</div>
@endsection 
@push('script')
	<script type="text/javascript">
		var editor = new MediumEditor('.editable', {
			paste: {
			    /* 
			    	This example includes the default options for paste,
			       	if nothing is passed this is what it used 
			    */
			    forcePlainText: true,
			    cleanPastedHTML: false,
			    cleanReplacements: [],
			    //cleanAttrs: ['class', 'style', 'dir'],
			    cleanTags: ['meta'],
			    unwrapTags: []
			}
    	});

    	$('.post-editor').click(function(e) {
			  var offset = $(this).offset();
			  var left = e.pageX;
			  var top = e.pageY;
			  var theHeight = $('.popover').height();
			  $('.popover').show();
			  $('.popover').css('left', (left + 10) + 'px');
			  $('.popover').css('top', (top - (theHeight / 2) - 70) + 'px');
			});
	</script>
@endpush

0504 0515