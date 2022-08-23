<div id="mereExposure"
     class="mere-exposure d-flex justify-content-center align-items-center rounded-3">
    <h1 class="display-1 fw-bold">Zeus</h1>
</div>

<script>
    onDomReady(() => {
        const mereExposureElem = document.querySelector('#mereExposure');
        mereExposureElem.style.opacity = 0;

        setTimeout(() => {
            mereExposureElem.remove();
        }, 1000);
    });
</script>
