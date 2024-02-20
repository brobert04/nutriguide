@extends('nutriguide.users.dashboard.base')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Contribute</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{$product_info["product"]["product_name"]}}">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Barcode (EAN / EAN-13)</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quantity</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$product_info["product"]["quantity"]}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Brand</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$product_info["product"]["brands"]}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Categories</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$product_info["product"]["categories"]}}">
                            </div>
                        </div>
                    </div>
                    @if($product_info["product"]["nutriments"])
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nutrition Facts</th>
                                        <th>As sold for 100 g / 100 ml</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <td>Energy</td>
                                    <td>
                                        <input type="text" value="{{$product_info["product"]["nutriments"]["energy"]}}" style="background: none; border: none;" disabled name="energy" id="energy">
                                    </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <img src="{{$product_info["product"]["image_front_small_url"]}}">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
