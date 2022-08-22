<script>
    // Run cb function when DOM is loaded
    let onDomReady = (cb) => {
        document.readyState === 'interactive' || document.readyState === 'complete' ?
            cb() :
            document.addEventListener('DOMContentLoaded', cb);
    };
</script>
