<!-- Success Center -->
{{-- @if(session('success'))
    @push('scripts')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Operação concluída com sucesso!',
                showConfirmButton: true,
                timer: 1500
            })
        </script>
    @endpush
@endif --}}
<!-- Fim Success -->

<!-- Success Top Right -->
@if(session('success'))
    @push('scripts')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Operação concluída com sucesso!'
            })
        </script>
    @endpush
@endif
<!-- Fim Success -->

<!-- Error Top Right -->
@if(session('error'))
    @push('scripts')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'Erro ao concluir operação!'
            })
        </script>
    @endpush
@endif
<!-- Fim Success -->
