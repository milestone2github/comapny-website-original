<x-wrapper>
  <div class="container mx-auto px-4">
    <!-- Magazine Header -->
    <div class="text-center pb-8 mb-4">
      <h1 class="text-5xl font-extrabold text-gray-900 gradient-text mb-4">
        Latest Issues of Our Magazines
      </h1>
      <p class="text-lg text-gray-600">
        Dive into curated stories and expert insights designed for you.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach ($magazines as $magazine)
      <a href="{{'https://mfdatafeed.blob.core.windows.net/magazine/' .$magazine->pdf_url}}" target="_blank" title="{{'Open ' . $magazine->issue_name}}" class="flex flex-col bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <img src="{{ asset('images/magazine_covers/' . $magazine->image_url) }}" alt="{{$magazine->issue_name}}" class="w-full aspect-video object-cover">
        <div class="px-4 py-2 flex flex-col">
          <h4 class="text-2xl font-bold mb-2">{{$magazine->issue_name}}</h4>
          <p class="text-gray-500 text-xs mt-1">{{ $magazine->release_date->toDateTime()->format('F Y') }}</p>
        </div>
      </a>
      @endforeach
    </div>

  </div>
</x-wrapper>