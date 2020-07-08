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
                            <form class="form-row" method="POST" action="{{ route('note-create') }}">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="4" name="text" required placeholder="Secret message..."></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Passware</label>
                                    <input type="text" class="form-control" name="passware"  placeholder="Passware" required>
                                </div>

                                <div class="form-group col-md-5 select-border">
                                    <label>Auto-destroy after:</label>
                                    <select class="form-control basic-select" name="time_destroy">
                                        <option value="60" selected="selected">1 minute</option>
                                        <option value="300">5 minutes</option>
                                        <option value="1800">30 minutes</option>
                                        <option value="3600">1 hour</option>
                                        <option value="21000">6 hours</option>
                                        <option value="43200">12 hours</option>
                                        <option value="86400">1 day</option>
                                        <option value="604800">7 days</option>
                                    </select>
                                </div>
                                <div class="col-md-2 p-5 text-center">
                                    <b>OR</b>
                                </div>

                                <div class="form-group col-md-5 select-border">
                                    <div class="form-group col-md-12">
                                        <label>After <b>N</b> views:</label>
                                        <input type="number" name="views_destroy" class="form-control"  placeholder="Count" value="1" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Post Job</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection

