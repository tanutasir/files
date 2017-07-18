@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <input id="fileupload" type="file" name="files[]" data-url="upload" multiple>
                    <div id="progress">
                        <div class="bar" style="width: 0%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
