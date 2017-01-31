<div class="row">
	{{ Form::label('title', 'Title:') }}
	@if($errors->has('title'))
		<small>{{ $errors->first('title') }}</small>
	@endif
	{{ Form::text('title', null, ['class' => 'u-full-width']) }}
</div>
<div class="row">
	{{ Form::label('body', 'Post:') }}
	@if($errors->has('body'))
		<small>{{ $errors->first('body') }}</small>
	@endif
	{{ Form::textarea('body', null, ['class' => 'u-full-width'])}}
</div>
{{ Form::submit($button) }}