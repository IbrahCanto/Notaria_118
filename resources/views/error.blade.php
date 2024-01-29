@if (session()->has('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Falló el envio',
        text: "{{ Session::get('error') }}",
    })
</script>
@endif