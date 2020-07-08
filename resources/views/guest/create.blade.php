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
            <form class="form-row">
              <div class="form-group col-md-12">
                <label>Message</label>
                <textarea class="form-control" rows="4" name="text" required placeholder="Secret message..."></textarea>
              </div>
                <div class="form-group col-md-12">
                    <label>Passware</label>
                    <input type="text" class="form-control"  placeholder="Passware" required>
                </div>

              <div class="form-group col-md-5 select-border">
                <label>Auto-destroy after:</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">1 minute</option>
                  <option value="value 02">5 minutes</option>
                  <option value="value 03">30 minutes</option>
                  <option value="value 03">1 hour</option>
                  <option value="value 03">6 hours</option>
                  <option value="value 03">12 hours</option>
                  <option value="value 03">1 day</option>
                  <option value="value 03">7 days</option>
                </select>
              </div>
                <div class="col-md-2 p-5 text-center">
                    <b>OR</b>
                </div>

              <div class="form-group col-md-5 select-border">
                  <div class="form-group col-md-12">
                      <label>After <b>N</b> views:</label>
                      <input type="text" class="form-control"  placeholder="Count" value="1" required>
                  </div>
              </div>

            </form>
          </div>
        </div>
        <form class="form-row align-items-end">


          <div class="col-md-12">
            <a class="btn btn-primary" href="#">Post Job</a>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
@endsection
