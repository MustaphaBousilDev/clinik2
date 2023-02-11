<style>
    
</style>
<div class="dash-content" style="height:100vh">
    @foreach($products as $product)
    <div class="products">
        <div class="content__product">
            <div>
                <img src="{{asset('imgs/admin/db_cl-03.png')}}">
                <p>{{$product->name}}</p>
            </div>
            <div>
                <p>real time stock {{$product->unity}}</p>
            </div>
        </div>
        <div class="actions">
            <a style="text-decoration:none;" href="{{route('admin.products.edit',['id'=>$product->id])}}"><i class="bi bi-gear-fill"></i></a>
            <a href="{{ url('/admin/Products/delete/'.$product->id) }}"><i  class="bi bi-trash3-fill"></i></a>
            <a style="text-decoration:none;"><i class="bi bi-eye"></i></a>
        </div>
    </div>
    @endforeach
    <a style="text-decoration:none;" class="btn__add" href="{{route('admin.products.add')}}">Add New</a>
    <div style="">
    </div>
</div>
