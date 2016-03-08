
    <div class="form-group">
        {!! Form::label('slug') !!}
        {!! Form::text('slug', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price') !!}
        {!! Form::text('price', null, ['class'=>'form-control']) !!}
    </div>

     <div class="form-group">
            {!! Form::label('brand') !!}
            {!! Form::text('brand', null, ['class'=>'form-control']) !!}
      </div>

    <div class="form-group">
            {!! Form::label('articul') !!}
            {!! Form::text('articul', null, ['class'=>'form-control']) !!}
      </div>

        <div class="form-group">
            {!! Form::submit('create',  ['class'=>'btn btn-primary']) !!}
        </div>