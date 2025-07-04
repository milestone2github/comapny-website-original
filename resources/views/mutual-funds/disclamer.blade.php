<x-wrapper>
  <section class="container mf-pages mx-auto py-6 px-3">
    <h1 class="text-4xl text-gray-900 font-bold mb-6">{{$data['title']}}</h1>
    <div class="relative">
      <div class="text-lg leading-relaxed">
        {!! $data->description !!}
      </div>
    </div>
  </section>
</x-wrapper>