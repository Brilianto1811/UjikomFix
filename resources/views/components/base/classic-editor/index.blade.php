<div class="editor">
    {{ $slot }}
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/ckeditor.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/ckeditor/classic.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/classic-editor.js')
@endPushOnce
