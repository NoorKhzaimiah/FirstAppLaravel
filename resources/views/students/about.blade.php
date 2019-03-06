<html>

<head>

</head>

<body style="background-color: #1f648b; font-size: 40px">
 {{$message}}
<ul>
    @foreach($students as $students)
        <li> ID : {{$students->ID}}, Name: {{$students->Name}} </li>
    @endforeach
</ul>
</body>
</html>