$('#history').on('click', e => {
    e.preventDefault();
    window.location.href += 'history';
});

$('#rates').on('click', e => {
    const currentHref = window.location.href;

    e.preventDefault();
    window.location.href = currentHref.substring(0, currentHref.indexOf('/history'));
});