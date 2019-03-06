<html>
<head>

</head>
<body style="background-color: #8c8c8c">
<h1>

    <p style="font-size: 50px ; color: #954120">
        Welcome from City Page :
    </p>



    {{$message}}
    <ul style="font-size: 20px ; ">
        @foreach($cities as $city)
            <li> ID : {{$city->ID}}   ,   Name: {{$city->Name}} </li>
        @endforeach
    </ul>


</h1>
</body>
</html>


