@extends('layouts.guest')

@section('content')
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="Job-detail" role="tabpanel" aria-labelledby="Job-detail-tab">
            <section class="space-ptb">
                <div class="container">
                    <div class="row mt-1">
                        <div class="col-12">
                            <h5 class="mb-4">Create secret message</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <create-note csrf="{{ csrf_token() }}"></create-note>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
