@extends('layouts.admin')

@section('content')
<div class="containerli">
    <div class="ui equal width left aligned padded grid stackable">

        <div class="row">
            <div class="column">
                <div class="ui segments">
                    <div class="ui segment">
                        <h5 class="ui header">
                            Header
                        </h5>
                    </div>
                    <div class="ui segment">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
