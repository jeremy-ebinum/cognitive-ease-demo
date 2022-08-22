<footer class="footer mt-auto">
    <div class="container col-md-10 d-flex flex-wrap justify-content-around align-items-center py-3">
        <p class="mb-0 text-light">&copy; {{ date('Y') }} </p>

        {{-- About Button --}}
        @if ($enableAbout)
            <button type="button" class="btn btn-light text-uppercase"
                    data-bs-toggle="modal"
                    data-bs-target="#aboutModal">
                About
            </button>

            <!-- About Modal -->
            @include('includes.about-modal')
        @else
            <button type="button" class="btn btn-light text-uppercase"
                    data-bs-toggle="popover"
                    data-bs-trigger="focus"
                    data-bs-placement="top"
                    data-bs-content="Please complete the trivia to view.">
                About
            </button>

            <script>
                // Initialize Popover
                document.addEventListener("DOMContentLoaded", function() {
                    const popoverTrigger = document.querySelector('[data-bs-toggle="popover"]');
                    const popover = new window.bootstrapPopover(popoverTrigger);
                });
            </script>
        @endif

    </div>
</footer>
