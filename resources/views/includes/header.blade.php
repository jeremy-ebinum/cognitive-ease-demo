<nav class="header navbar navbar-dark shadow-sm text-light mb-auto">
    <div class="container col-md-8 d-flex 'justify-content-center'">
        <div class="navbar-brand text-wrap">
            <span class="text-uppercase">{{ $headerTitle }}</span>
            <span class="text-break">{{ isset($category) ? '(' . $category . ')' : '' }}</span>
        </div>
    </div>
</nav>
