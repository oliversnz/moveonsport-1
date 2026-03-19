@if(!isset($without_container) || !$without_container)
<div class="container back-nav-container">
@endif
    <a href="javascript:history.back()" class="btn-back-professional {{ $class ?? '' }}">
        <i class="bi bi-arrow-left"></i> {{ $text ?? 'Volver' }}
    </a>
@if(!isset($without_container) || !$without_container)
</div>
@endif
