<x-wrapper>
  <div class="read-blog container mx-auto px-4 py-6">
    <!-- Back Button -->
    <div class="mb-8 flex items-center">
      <a href="{{ route('blog.index') }}" class="flex items-center text-blue-500 hover:text-blue-600 font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Back to Blogs
      </a>
    </div>
    
    <div class="max-w-4xl mx-auto">
      <!-- Blog Header -->
      <div class="mb-8 text-center">
        <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">{{ $blog->title }}</h1>
        <p class="text-gray-600 text-sm mt-2">
          By <span class="font-medium text-gray-700">{{ $blog->author }}</span> | {{ $blog->post_date->toDateTime()->format('d-M-Y') }}
        </p>
      </div>

      <!-- Blog Image -->
      <div class="mb-6">
        <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-auto rounded-lg shadow-lg">
      </div>

      <!-- Blog Content -->
      <div class="blog-content prose max-w-full prose-blue prose-lg">
        {!! $blog->content !!}
      </div>
    </div>
  </div>
</x-wrapper>