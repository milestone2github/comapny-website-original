<x-wrapper>
  <div class="container mx-auto px-4">
    <!-- Blog Header -->
    <div class="text-center pb-8 mb-4">
      <h1 class="text-5xl font-extrabold text-gray-900 gradient-text mb-4">
        Latest Insights & Blogs
      </h1>
      <p class="text-lg text-gray-600">
        Explore insights on financial strategies, market trends, and investment tips.
      </p>
    </div>

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($blogs as $blog)
      <div class="flex flex-col bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <!-- Blog Image -->
        <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover rounded-t-xl">
        
        <!-- post date and post by  -->
        <div class="text-gray-600 text-xs flex justify-between items-center px-6 mt-2">
          <span>By <span class="font-medium">{{ $blog->author }}</span></span>
          <span class="flex items-center">
            <!-- Clock Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ $blog->post_date->toDateTime()->format('d-M-Y') }}
          </span>
        </div>

        <!-- Blog Content -->
        <div class="p-6">
          <h2 class="text-2xl font-semibold text-gray-900 mb-3">
            {{ $blog->title }}
          </h2>
          <p class="blog-content-summary text-gray-700 text-sm mb-4">
            {!! Str::limit($blog->content, 180, '...') !!}
          </p>

        </div>

        <!-- Read More Button -->
        <div class="p-6 bg-gray-50 border-t mt-auto">
          <a href="{{ route('blog.read', $blog->slug) }}" class="block text-center bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">
            Read More
          </a>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="blog-pagination mt-12 flex justify-center">
      {{ $blogs->links() }}
    </div>
  </div>
</x-wrapper>