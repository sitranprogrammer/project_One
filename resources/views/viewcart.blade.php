@extends('layouts.layout')

@section('title', 'Page view cart')

@section('content')
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($items as $item)
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="./img/{{$item->options->image}}" alt="..."
                                    class="img-responsive" /></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$item->name}}</h4>
                                <p>{{$item->content}}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$item->price}}</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Subtotal" class="text-center">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <a href="{{route('deleteItem',$item->rowId)}}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
        <tfoot>
           
            <tr>
            <td><a href="{{route('index')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total {{Cart::total()}}</strong></td>
                <td><a href="{{route('checkout'),}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection()