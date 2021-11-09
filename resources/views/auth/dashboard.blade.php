@extends('layouts.app')
@section('content')

<h1 class="text-5xl leading-none tracking-tighter text-neutral-600 font-bold" > Welcome To The CXC Student Platform </h1>
<div class="flex flex-row justify-center items-center gap-5 mt-10">
    <div class="border border-solid border-black rounded w-20 bg-yellow-600 ">
        <a href="/teacher"> Teacher </a>
    </div>
    <div class="border border-solid border-black rounded w-20 bg-yellow-600 ">
        <a href="/subject"> Student </a>
    </div>
</div>
@endsection