@extends('layouts.master')

@section('title')
	Basket
@endsection

@section('content')

<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-header">
            <div class="card-title"> Recent Tickets
                <a href="{{ route('basketcat.create') }}" class="btn btn-primary btn-round float-end"><i class="fa fa-plus"></i>
                </a>
                </div>
       </div>
        <div class="card-body">
          <div class="table-responsive">
            <span id="result"></span>
            <table id="add-row" class=" table table-bordered table-hover "  >
                <thead>
                <tr>
                  <th><b> Basket Name</b></th>
                  <th><b> Description</b></th>
                  <th><b>From Date</b></th>
                  <th><b>Todate</b></th>
                  <th><b> Action</b> </th>
                </thead>
                <tbody >
                     @foreach ($basketcat as  $result)
                    <tr>
                    <td>{{$result ->basket_name}}</td>
                    <td>{{$result ->description}}</td>
                    <td>{{$result ->fromdate}}</td>
                    <td>{{$result ->todate}}</td>
				          	<td><a href="{{ route('baskets.edit', [$result->id]) }}"  class="btn-sm btn-info"><i class="fa fa-plus" ></i></a>
                     <a href="{{route('basketcat.delete', $result->id)}}"  class="btn-sm btn-danger"><i class="fa fa-trash"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>&nbsp;
      {{-- <div class="d-flex align-items-center">
        <h4 class="card-title"></h4>
            <a href="{{ route('basket.create') }}" class="btn btn-primary btn-round ml-auto " >
            <i class="fa fa-plus"></i>
            Add Basket
        </a>
    </div> --}}
    </div>
  </div>

@endsection
@section('scripts')

@endsection

