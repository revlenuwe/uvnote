@extends('layouts.guest')

@section('content')
    <div class="tab-content" id="app">
        <section class="space-ptb">
            <div class="container">
                <note csrf="{{ csrf_token() }}"></note>
            </div>
        </section>
    </div>
@endsection

