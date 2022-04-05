@extends('shared/head')

@section('title', 'Editar cita')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('dashboard/shared.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('dashboard/shared.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @include('dashboard/calendar/components/navbar')
                    <div class="mt-20">
                        @include('dashboard/calendar/components/edit')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
