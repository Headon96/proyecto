@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        
                    @endif
        
                </div>
                                
            </div>            
        </div>
    </div>
</div>
@endsection