<div class="dash-content" >
            <div class="" style="margin-bottom: 90px;">
                <h1 style="font-size: 40px;color:rgb(192, 189, 189);font-weight: normal;" >{{$product->name}}</h1>
                <p style="color:rgb(211, 204, 204);font-size: 18px;">real time stock {{$product->unity}}</p>
            </div>
            <div class="products">
                <div class="content__product">
                    <div>
                        <img src="{{asset('imgs/admin/db_cl-03.png')}}">
                        <p>{{$product->name}}</p>
                    </div>
                    <div>
                        <p>real time stock ({{$product->unity}})</p>
                    </div>
                </div>
                <div class="actions">
                    <a style="text-decoration:none" href="{{route('admin.products.edit',['id'=>$product->id])}}"><i class="bi bi-gear-fill"></i></a>
                    <a style="text-decoration:none" href="{{ url('/admin/Products/delete/'.$product->id) }}" ><i class="bi bi-trash3-fill"></i></a>
                </div>
            </div>
            <button class="btn__add">Edit</button>
        </div>