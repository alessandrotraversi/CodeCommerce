<div class="form-group">
     {!! Form::label('name','Name:') !!}
     {!! Form::text('name', null , ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('description','Description:') !!}
     {!! Form::textarea('description', null , ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('price','Price:') !!}
     {!! Form::text('price', null , ['class'=>'form-control']) !!}
 </div>

<div class="checkbox">
     {!! Form::label('featured','Featured:') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     {!! Form::checkbox('featured', '1', false) !!}
 </div>

<div class="checkbox">
     {!! Form::label('recommend','Recommend:') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     {!! Form::checkbox('recommend', '1', false) !!}
</div>