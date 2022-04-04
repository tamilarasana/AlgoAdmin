@extends('layouts.master')

@section('title')
	Basket
@endsection
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create New Basket</h4>
        <form action="{{ route('basketcat.store') }}" method = "post"  enctype="multipart/form-data" >
            {{csrf_field()}}
            <p class="card-description">
            Basket info
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-md-3 col-form-label"><b>Basket Name :</b></label>
                <div class="col-sm-9">
                  <input type="text"  name="basket_name" class="form-control"  required/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-md-3 col-form-label :"><b>Description</b></label>
                <div class="col-sm-9">
                  <input type="text" name="description" class="form-control" required />
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"><b>From Date</b></label>
                  <div class="col-sm-9">
                    <input type="date" name ="fromdate" class="form-control" placeholder="dd/mm/yyyy" required/>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"><b>To Date</b></label>
                  <div class="col-sm-9">
                    <input type="date" name="todate" class="form-control" placeholder="dd/mm/yyyy" required/>
                  </div>
                </div>
            </div>

          </div>
          <div class="float-end">
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href ="{{route('basketcat.index')}}" class="btn btn-light">Cancel</a>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection

