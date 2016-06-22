<div class="form-group">
    {{ Form::label('title','Title') }}
    {{ Form::text('title',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('body','Content') }}
    {{ Form::textarea('body',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('slug','Slug') }}
    {{ Form::text('slug',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('tags','Tags') }}
    {{ Form::select('tags[]',$tags,null,['class'=>'form-control','multiple'=>'multiple']) }}
</div>

<div class="form-group" style="position:relative;">
    {{ Form::label('published_at','Published') }}
    {{ Form::text('published_at',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit($my_submit_button,['class'=>'btn btn-primary']) }}
</div>




