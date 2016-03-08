@extends ('app')

@section ('content')
<h1>Create</h1>

{!!Form::open(['route' => 'shop.store']) !!}
    @include('shop._form')
{!! Form::close() !!}

@endsection

