<div class="row">
	{{ Form::label('title', 'Title:') }}
	{{ Form::text('title', null, ['class' => 'u-full-width']) }}
</div>
<div class="row">
	{{ Form::label('body', 'Post:') }}
	{{ Form::textarea('body', null, ['class' => 'u-full-width'])}}
</div>
{{ Form::submit("Add post") }}