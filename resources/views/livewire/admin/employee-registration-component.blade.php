@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-success">
            {{ $error }}
        </div>
    @endforeach
@endif

<div class="dash-content">
            <!-- <div class="products" style="">
                <input type="checkbox">
                <div class="content__product" style="width: 70%;padding-right:20px ;">
                    <div>
                        <img src="asset('imgs/admin/db_cl-05.png')">
                        <p>Product A</p>
                    </div>
                    <div style="justify-content: flex-end;">
                        <p>real time stock (gr)</p>
                    </div>
                </div>
                <div class="actions">
                    <i class="bi bi-gear-fill"></i>
                    <i class="bi bi-trash3-fill"></i>
                    <i class="bi bi-eye"></i>
                    <i class="bi bi-printer"></i>
                </div>
            </div> -->
            @if (session('message'))

                <div class="alert alert-info" style="color:rgb(0, 140, 255);background-color:rgb(171, 214, 249);padding:15px;text-align:center;margin-bottom:10px;border-radius:10px;">
                    {{ session('message') }}
                </div>
            @endif
            @foreach($employees as $employee)
                <div class="products" style="">
                        <div class="content__product" style="width: 70%;padding-right:20px ;">
                            <div>
                                <img src="{{asset('imgs/admin/db_cl-05.png')}}">
                                <p>{{$employee->name}}</p>
                            </div>
                            <div style="justify-content: flex-end;">
                                <p>{{$employee->utype}}</p>
                            </div>
                        </div>
                        <div class="actions">
                            <a style="text-decoration:none" href="{{ route('admin.employee.edit', $employee->id) }}" class="text-light text-decoration-none"><i class="bi bi-gear-fill"></i></a>
                            <form action="{{ route('admin.employee.destroy', $employee->id) }}" method="post" >
                                @csrf
                                @method('delete')
                                <button type="submit" style="border:none"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                            <a style="text-decoration:none" href="{{ route('admin.employee.view', $employee->id) }}" class="text-light text-decoration-none"><i class="bi bi-eye"></i></a>
                        </div>
                        </div>
            @endforeach
                    <a style="text-decoration:none" href="{{route('admin.employe.add')}}" class="btn__add">Add New</a>
                </div>

