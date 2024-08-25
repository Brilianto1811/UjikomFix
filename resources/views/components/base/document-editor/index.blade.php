<div class="editor document-editor">
    <div class="document-editor__toolbar"></div>
    <div class="document-editor__editable-container">
        <div class="document-editor__editable">
            {{ $slot }}
        </div>
    </div>
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/ckeditor.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/ckeditor/document.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/document-editor.js')
@endPushOnce
