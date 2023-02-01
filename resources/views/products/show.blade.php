@extends('details_layout')

@section('content')

@include('partials._hero')

<a href="/coffeebucks/public/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back</a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div class="flex flex-col items-center justify-center text-center">
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{$product->photo ? asset('coffeebucks/public/storage/' . $product->photo) : asset('coffeebucks/public/images/no-image.png')}}"
                            alt="" />
                        <h3 class="text-2xl mb-2">{{ $product->name }}</h3><br>
                        <div class="text-xl font-normal mb-4"><b>Origin: </b>{{ $product->origin }}</div>
                            <div class="text-lg space-y-6">
                                <p>
                                    <b>Price: </b>{{ $product->price}} $
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center" style="margin-top: 10px">
                        <a href="/coffeebucks/public/products/{{$product->id}}/edit"><i class="fa-solid fa-pencil"></i> Edit</a>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center" style="margin-top: 10px">
                       <form method="POST" action="/coffeebucks/public/products/{{$product->id}}">
                        @csrf
                        @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                       </form>
                    </div>
                </div>
@endsection
