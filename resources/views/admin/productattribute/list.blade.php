@extends('admin.layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <!-- Table Start -->
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Danh sách Product Attribute</h5>
                                <form class="d-inline-flex">
                                    <a href="{{route('admin.productattribute.add')}}"
                                       class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus"></i>Add Product Attribute
                                    </a>
                                </form>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table id="table_id" class="table role-table all-package theme-table">
                                        <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Tên attribute</th>
                                            <th>Giá trị attribute</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($getAll as $value)
                                            @foreach($value->attribute as $index)
                                                <tr>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$index->name}}</td>
                                                    <td>{{$index->value}}</td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('admin.productattribute.update',['product_id'=> $value->id,'attribute_id' => $index->id])}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{route('admin.productattribute.delete',['product_id'=> $value->id,'attribute_id' => $index->id])}}">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Table End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
