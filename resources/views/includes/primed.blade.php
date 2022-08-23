<div id="primedIdea"
     class="jumbotron__overlay d-flex justify-content-center align-items-center">
    <h1 class="display-1 fw-bold">Zeus</h1>
</div>

<script>
    onDomReady(() => {
        const primedIdeaElem = document.querySelector('#primedIdea');
        primedIdeaElem.style.opacity = 0;

        setTimeout(() => {
            primedIdeaElem.remove();
        }, 1000);
    });
</script>
