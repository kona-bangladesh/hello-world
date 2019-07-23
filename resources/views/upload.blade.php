@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!                                                   
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('GO/NOC') }}</label>
                            <div class="col-md-6">
                                
                                 <select class="form-control">
                                    @foreach($go_type as $key => $data)                                   
                                        <option value=" {{$data->notice_type_name}} " > {{ $data->notice_type_name }}</option>
                                    @endforeach
                                </select>                                                              
                            </div>
                        </div> 
                        <div class="form-group row">    
                             <div class="col-md-6">
                                <label for="pmis">PMIS:</label>
                                <input type="text" class="form-control" id="usr">   
                             </div>
                        </div>
                        <div class="go_detalis">
                            <div class="form-group row">    
                                <div class="col-md-6">
                                   <label for="name">Name:</label>
                                   <input type="text" class="form-control" id="usr">   
                                </div>
                                <div class="col-md-6">
                                   <label for="designation">Designation:</label>
                                   <input type="text" class="form-control" id="usr">   
                                </div>
                            </div>
                            
                        </div>
                        
                    </form>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection