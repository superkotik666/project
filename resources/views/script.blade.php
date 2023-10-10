<script>
    const sidebarTriggerElems = document.querySelectorAll('.sidebar-trigger');
    const sidebarElem = document.getElementById('sidebar');
    const sidebarTextareaElem = document.getElementById('sidebar-textarea');
    const closeBtn = document.querySelector('.exit');

    sidebarTriggerElems.forEach(function(triggerElem) {
        triggerElem.addEventListener('click', function() {
            const content = this.dataset.content;

            if (sidebarElem.style.display === 'block') {
                sidebarElem.style.display = 'none';
                sidebarTextareaElem.value = '';
            } else {
                sidebarElem.style.display = 'block';
                sidebarTextareaElem.value = content;
            }
        });
    });


    closeBtn.addEventListener('click', function() {
        sidebarElem.style.display = 'none';
        sidebarTextareaElem.value = '';
    });
</script>
