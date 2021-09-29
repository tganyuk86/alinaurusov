

<x-app-layout>
    <x-slot name="header">
        
    </x-slot>


    <!-- Gallery -->

<div class="row">
    <h1>Hide Images by Category</h1>
 </div>
    @foreach($categories as $category)               
            <input type="checkbox" onclick="$('.cat{{$category->id}}').toggle()" class="btn-check" id="btncheck{{$category->id}}" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck{{$category->id}}">{{$category->name}}</label>
    @endforeach


<div class="row">
  @foreach($myImages as $img)
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 cat{{$img->category_id}}">
    {{$img->image_title}}
    <img
      src="/storage/uploads/{{$img->id}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
/>
  </div>
@endforeach
</div>

<div class="row">
    <h1>Hide Images by Category</h1>
</div>
    @foreach($categories as $category)               
            <input type="checkbox" onclick="$('.cat{{$category->id}}').toggle()" class="btn-check" id="btncheck{{$category->id}}" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck{{$category->id}}">{{$category->name}}</label>
    @endforeach

<!-- Gallery -->

<!-- External Galleries -->

<div>
    <h4 style="text-align:center;white-space:pre-wrap;">
        <a href="https://www.deviantart.com/ayanimeya"class="header-ext-gallery">Deviantart</a>                                 <a href="https://www.redbubble.com/people/babybeebones/explore?page=1&amp;sortOrder=recent" class="header-ext-gallery">Redbubble</a>                                <a href="https://www.facebook.com/Watt-the-Doodle-323859078184784"class="header-ext-gallery">Doodles</a>
    </h4>
</div>





</x-app-layout>

