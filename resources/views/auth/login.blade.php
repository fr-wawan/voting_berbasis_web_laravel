@extends('layouts.app')

@section('content')
<div class="bg-white w-3/12 mx-auto rounded-md shadow p-10 mt-32">
  @if(session()->has('failed'))
  <div class="bg-red-600 mb-5 text-white rounded-lg p-3">
    {{ session('failed') }}
  </div>
  @endif
  <h1 class="uppercase text-2xl text-center font-bold">Login</h1>
  <form action="/auth" class="w-10/12 mx-auto" method="post">
    @csrf
    <div class="block my-5 ">
      <label for="email">Email</label>
      <input type="email" name="email" id="email"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg"
        required>
      @error('email')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5 ">
      <label for="password">Password</label>
      <input type="password" name="password" id="password"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg"
        required>

      @error('password')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div>
      <button type="submit"
        class="bg-green-600 outline hover:outline-1 hover:outline-green-600 hover:text-green-600 transition-all duration-300 ease-in-out hover:bg-white text-white p-2 px-4 rounded-md">Submit</button>
    </div>
  </form>
</div>
@endsection