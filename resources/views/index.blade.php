<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posiciones</title>
</head>
<body>
    <script>
        guardarInformacion();
        function guardarInformacion() {
            const formData = new FormData();
            formData.append('posicion', '999');
            formData.append('round', '5');
            formData.append('cantidad', '2');
            formData.append('duracion', '60 segundos');
            fetch('http://localhost/apis/public/api/dar', {
                method: 'post',
                body: formData
            })
                .then(response => {
                    if (!response.ok) throw new Error('Hubo un error');
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                }
                ).catch(error => { console.error(error, 'hubo un error'); });
        }
    </script>
</body>
</html>