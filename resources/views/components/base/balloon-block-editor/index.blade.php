<div class="editor">
    {{ $slot }}
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/ckeditor.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/ckeditor/balloon-block.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/balloon-block-editor.js')
@endPushOnce
