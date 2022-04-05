@extends('layouts.app')

@section('title', 'Agregar cita')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('shared.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('shared.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @include('calendar.components.navbar')
                    <div class="mt-20">
                        @include('calendar.components.add')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
