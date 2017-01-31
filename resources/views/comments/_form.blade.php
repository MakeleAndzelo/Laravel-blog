{{ Form::label('body', 'Comment: ') }}
@if($errors->has('body'))
	{{ $errors->first('body') }}
@endif
{{ Form::textarea('body', null, ['class' => 'u-full-width']) }}
{{ Form::submit($button)}}