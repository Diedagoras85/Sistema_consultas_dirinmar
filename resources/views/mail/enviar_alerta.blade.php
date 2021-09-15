<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aviso Vencimiento requerimiento Nº {{$requerimiento->CDSolicitud}}</title>
</head>
<body>
    <p>Estimado</p>
    <p>Mediante el presente se le recuerda que la solicutud Nº {{$requerimiento->CDSolicitud}}, que corresponde a su ámbito de competencia, le quedan {{$requerimiento->NRDiaatraso}} días y
       vence el {{$requerimiento->FCRespuesta}}, por lo que agradeceremos tomar las medidas necesarias, objeto contestar dentro de los plazos establecidos. 
    </p>
    <p>Atentamente</p>
    <p>Transparencia DIRINMAR</p>
</body>
</html>