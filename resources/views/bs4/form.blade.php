<form>
	@isset($fields)
		@foreach($fields as $field)
		  <div class="form-group">
		    <label for="exampleInputEmail1">{{$field['label']}}</label>
		    <input type="{{$field['type'] or 'text'}}" class="form-control" id="{{$field['name']}}" placeholder="{{$field['placeholder']}}">
		    @isset($field['small'])
		    	<small id="{{$id or $field['name']}}" class="form-text text-muted">
		    		{{ $field['small'] }}
		    	</small>
		    @endisset
		  </div>
		@endforeach
	@endisset
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
