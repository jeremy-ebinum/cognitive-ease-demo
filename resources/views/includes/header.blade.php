<nav class="header navbar navbar-dark shadow-sm text-light mb-4 mb-md-5">
    <div class="container col-md-8 d-flex {{ isset($hasTimer) ? 'justify-content-between' : 'justify-content-center' }}">
        <div class="navbar-brand text-wrap">
            <span class="text-uppercase">{{ $headerTitle }}</span>
            <span class="text-break">{{ isset($category) ? '(' . $category . ')' : '' }}</span>
        </div>

        @if (isset($hasTimer))
            @include('includes.timer')
        @endif
    </div>
</nav>
