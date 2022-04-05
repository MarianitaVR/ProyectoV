@extends('layouts.app')

@section('title', 'Visualizar cliente')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('shared.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid">
                @include('shared.header')
                <div class="content d-flex flex-column flex-column-fluid mt-20">
                    @include('clients.components.navbar')
                    <div class="mt-20">
                        @include('clients.components.view')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
