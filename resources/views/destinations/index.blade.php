@extends('pages\base')

@section('content')


@if($info = Session::get('info'))  

<div class="card">
  <div class="card-body bg-success text-light">
    {{$info}}
  </div>
</div>
    
@endif
<div class="add">
<div class="float-right">
  <a href="{{url('/destinations/create')}}"  class = "btn btn-primary">
    Create New Destination
  </a>
</div>
</div>
     <h1>Destinations</h1>       
        <table class="table table-striped" >
            <thead class ="table table-bordered table-striped table-dark">
                <tr class="bg-secondary" >
                    <th>Destination Name</th>
                    <th>Address</th>
                    <th>Type</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody class = "table table-striped">
                    <?php foreach ($destinations as $d): ?> 
                     <tr>
                         
                             <td><?= $d->name ?> </td>
                             <td><?= $d->address ?> </td>
                             <td><?= $d->type ?> </td>
                             <td><?= $d->rating ?> </td>                        
                     </tr>               
                    <?php endforeach; ?>                   
            </tbody>
        </table>

    </div>
</body>
@endsection