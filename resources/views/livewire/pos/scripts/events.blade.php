<script>
    document.addEventListener("DOMContentLoaded", function(){
        window.livewire.on('scan-ok', Msg =>{
            noty(Msg)
        })

        window.livewire.on('scan-notfound', Msg =>{
            noty(Msg, 2)
        })

        window.livewire.on('no-stock', Msg =>{
            noty(Msg, 2)
        })

        window.livewire.on('sale-error', Msg =>{
            noty(Msg)
        })

        window.livewire.on('print-ticket', saleId =>{
            // var url = "{{ route('print.pdf', ['request' => 'temp']) }}"
            var url = "{{ route('print2.pdf', ['request' => 'temp']) }}"
            url = url.replace('temp', saleId);
            window.open(url,"popup", 'width=300,height=420');
            // window.open("print://print2/" + saleId , '_blank');
        })

    });
</script>
