@extends('pages\base')

@section('content')


    <h1>Create New Destination</h1>
  <div class="row">
     <div class="col-md-5">
        {!! Form::open(['url'=>'/destinations', 'method' =>'post'])  !!}

        <div class="form-group">
           
            {{Form::label('name', 'Destination Name')}}
            {{Form::text('name', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('address', 'Address')}}
            {{Form::text('address', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('type')}}
            {{Form::text('type', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('rating')}}
            {{Form::number('rating', null, ['class'=>'form-control'])}}     
        </div> 
            <button class="btn btn-primary float-right">
                   Create Destination

            </button>
        </div>
    
        {!! Form::close()  !!}
     </div>
<div class="col-md-6">
    @if (count($errors)>0)

    <div class="card">
<div class = "card-body bg-danger text-warning">
    All Fields Required!
<ul>
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>      
    @endforeach
</ul>
</div>

    </div>
        
    @endif
</div>
  </div>

@endsection