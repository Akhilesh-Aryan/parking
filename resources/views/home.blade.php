@extends('base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-white bg-dark p-2">Vehicle Entry</h6>
                        <div class="card-body">
                        <form action="{{route('insertpage')}}" method="POST">
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
            <div class="col-lg-8">
                <table class="table">
                    <tr class="bg-dark text-white">
                        <th>Id</th>
                        <th>vehicle_no</th>
                        <th>brand</th>
                        <th>color</th>
                        <th>amount</th>
                        <th>delivered</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $d)
                    <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->vehicle_no}}</td>
                    <td>{{$d->brand}}</td>
                    <td>{{$d->color}}</td>
                    <td>{{$d->amount}}</td>
                    <td>{{$d->status}}</td>
                    <td> <a href="{{route('delete',['id'=>$d->id])}}" class="btn btn-danger btn btn-sm">Delete</a>
                         <a href="{{route('update',['id'=>$d->id])}}" class="btn btn-primary btn btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection