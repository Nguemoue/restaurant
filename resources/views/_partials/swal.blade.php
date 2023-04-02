
@if(session()->has('success'))
    <script defer>
        Swal.fire({
            position:"top-end",
            toast:false,
            timer: 3000,
            showCancelButton:false,
            showConfirmButton:false,
            showCloseButton:false,
            icon:"success",
            titleText:`{{session()->get('success')}}`
        })
    </script>
@endif


@if(session()->has('danger'))
    <script defer>
        Swal.fire({
            position:"top-end",
            toast:false,
            showCancelButton:false,
            showConfirmButton:false,
            showCloseButton:true,
            icon:"error",
            titleText:`{{session()->get('danger')}}`
        })
    </script>
@endif


@if(session()->has('warning'))
    <script defer>
        Swal.fire({
            position:"top-end",
            toast:false,
            timer: 3000,
            timerProgressBar: true,
            showCancelButton:false,
            showConfirmButton:false,
            showCloseButton:true,
            icon:"warning",
            titleText:`{{session()->get('warning')}}`
        })
    </script>
@endif


@if(session()->has('info'))
    <script defer>
        Swal.fire({
            position:"top-end",
            toast:false,
            timer: 3000,
            showCancelButton:false,
            showConfirmButton:false,
            showCloseButton:true,
            icon:"info",
            titleText:`{{session()->get('info')}}`
        })
    </script>
@endif
