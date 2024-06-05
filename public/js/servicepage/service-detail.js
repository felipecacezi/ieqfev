document.addEventListener('DOMContentLoaded', function() {

    document.querySelectorAll('.btn-expand-accordion').forEach(btn => {
        btn.addEventListener('click', event => {
            expandAccordion(btn);
        });
    });

});

const expandAccordion = (element) => {
    let target = element.getAttribute('data-accordion-target');
    let elementTarget = document.querySelector(target);

    if (elementTarget.classList.contains('hidden')) {
        elementTarget.classList.remove('hidden');
        elementTarget.classList.add('flex');
        
    } else if (elementTarget.classList.contains('flex')) {
        elementTarget.classList.remove('flex');
        elementTarget.classList.add('hidden');
    }
}