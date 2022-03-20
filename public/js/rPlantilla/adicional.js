function abrirmodal(url)
{
    $('#modalG').load(url, function()
    {
        $(this).modal({
            backdrop: 'static',
            keyboard: false
        })


        $(this).modal('show');
    });
}

