@extends('base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-white bg-dark p-2">Vehicle Entry</h6>
                        <div class="card-body">
                            <form action="{{route('updateData')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="vehicle_no">vehicle_no</label>
                                    <input type="text" class="form-control" name="vehicle_no">
                                    <small class="text-danger">{{$errors->first('vehicle_no')}}</small>
                                </div>
                                <div class="form-group">
                                    <label for="brand">brand</label>
                                    <input type="text" class="form-control" name="brand">
                                    <small class="text-danger">{{$errors->first('brand')}}</small>
                                </div>
                                <div class="form-group">
                                    <label for="color">color</label>
                                    <input type="color" class="form-control" name="color">
                                    <small class="text-danger">{{$errors->first('color')}}</small>
                                </div>
                                <div class="form-group">
                                    <label for="amount">amount</label>
                                    <input type="text" class="form-control" name="amount">
                                    <small class="text-danger">{{$errors->first('amount')}}</small>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                    <small class="text-danger">{{$errors->first('status')}}</small>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-primary btn-block" name="post">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
