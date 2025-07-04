<x-wrapper>
  <object data="{{ asset('storage/magazines/' . $magazine->pdf_url) }}" class="w-full h-screen flex flex-col items-center justify-center -my-6" type="application/pdf">
    <p class="text-center text-gray-500">
      The PDF file could not be loaded.
    </p>
    <p>Try reloading the page or report it to us at 
      <a href="mailto:support@mnivesh.com" class="text-blue-500 hover:underline">support@mnivesh.com</a>
    </p>
  </object>
</x-wrapper>
