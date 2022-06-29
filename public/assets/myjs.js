


    $('.hapus').on('click', function(e) {
        e.preventDefault();
        const url = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "Akan menghapus data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = url;
            } 
        })

    })

    $('.ok-update').on('click', function(e) {
        e.preventDefault();
        const url = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "ini akan mengizinkan update pada data tersebut!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Update it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = url;
            } 
        })

    })

    $('.remove-mata').on('click', function(e) {
        e.preventDefault();
        const url = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "Akan menghapus semua data yang telah di tampilkan di layar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = url;
            } 
        })

    })

    

$('#logout').on('click', function(e) {
        e.preventDefault();
        const url = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "anda yakin ingin keluar dari aplikasi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, come out now!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = url;
            } 
        })

    })


