@props(['product'])
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" 
        src="{{$product->photo ? asset('storage/' . $product->photo) : asset('images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="products/{{$product ['id'] }}">{{$product->name}}</a>
            </h3><br>
            <div class="text-xl font-normal mb-4"><b>Origin:</b> {{$product->origin}}</div>
            <div class="text-xl mt-4">
                <i class="fa-solid"></i><b>Price:</b> {{$product->price}}
            </div>
        </div>
    </div>
</div>