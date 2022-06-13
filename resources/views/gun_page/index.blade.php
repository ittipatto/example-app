@extends('template')

@section('title', 'Gun')

@section('content')
    <h1>Gun</h1>
    <div class="mb-2">
        <a href="{{ url('content/create') }}" role="button" class="btn btn-sm btn-success">Create</a>

    </div>
    <table id="tbContent" class="table table-border">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>detail</th>
                <th>manufacturer</th>
                <th style="width: 150px"></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


@endsection
