@extends('layouts.guest')

@section('content')
    <div class="tab-content" id="app">
        <section class="space-ptb">
            <div class="container">
                <note csrf="{{ csrf_token() }}"  passphrase="{{ $note->passphrase }}" sign="{{ $note->sign }}"></note>
            </div>
        </section>
    </div>
@endsection

