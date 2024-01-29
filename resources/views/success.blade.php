@if (Session::has('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Su mensaje ha sido enviado',
        text: "{{ Session::get('success') }}",
    })
</script>
@endif