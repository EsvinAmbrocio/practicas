const modal = document.getElementById('modal');
    const button = document.getElementById('button');
    const close = document.getElementById('close');


        button.addEventListener('click',() => {
            modal.setAttribute('open', true)
        })
        close.addEventListener('click',() => {
            modal.removeAttribute('open')
        })