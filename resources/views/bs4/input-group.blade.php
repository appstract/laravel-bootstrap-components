<div class="input-group input-group-{{ $size or 'md' }} {{ $class or '' }}">
	@if($side == 'right')
		<input type="text" class="form-control" placeholder="{{ $placeholder }}" aria-describedby="basic-addon1">
		<span class="input-group-addon" id="basic-addon1">{{ $addon }}</span>
	@else
		<span class="input-group-addon" id="basic-addon1">{{ $addon }}</span>
		<input type="text" class="form-control" placeholder="{{ $placeholder }}" aria-describedby="basic-addon1">
	@endif
</div>