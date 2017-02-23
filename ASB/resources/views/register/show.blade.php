<!doctype html>
<head>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/filter.css">
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/filter.js"></script>
</head>
<style media="screen">
@charset "UTF-8";
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
font-family: 'Open Sans', sans-serif;
font-weight: 300;
line-height: 1.42em;
color:#A7A1AE;
background-color:grey;
}

h1 {
font-size:3em;
font-weight: 300;
line-height:1em;
text-align: center;
color: #4DC3FA;
}

h2 {
font-size:1em;
font-weight: 300;
text-align: center;
display: block;
line-height:1em;
padding-bottom: 2em;
color: #FB667A;
}

h2 a {
font-weight: 700;
text-transform: uppercase;
color: #FB667A;
text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
  font-weight: bold;
  font-size: 1em;
text-align: left;
color: #185875;
}

.container td {
  font-weight: normal;
  font-size: 1em;
-webkit-box-shadow: 0 2px 2px -2px #0E1119;
   -moz-box-shadow: 0 2px 2px -2px #0E1119;
        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
  text-align: left;
  overflow: hidden;
  width: 80%;
  margin: 0 auto;
display: table;
padding: 0 0 3em 0;
}

.container td, .container th {
  padding-bottom: 2%;
  padding-top: 2%;
padding-left:2%;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
  background-color: #2C3446;
}

.container th {
  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
   -moz-box-shadow: 0 6px 6px -6px #0E1119;
        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
background-color: #FFF842;
color: #403E10;
font-weight: bold;

box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
transform: translate3d(6px, -6px, 0);

transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
transition-timing-function: line;
}

</style>
<body style="color:#fff;">
    <div >
        <p> <center><span style="color:#fff; font-size:30px">Registration list</span> </center</p>
    </div>
    <div style="padding-left:50px; padding-right:50px">
<table class="table container" style="color:#fff;">
    <thead>
        <div class="container">
        <tr>
            <th><h1>Name</th></h1>
            <th><h1>Batch</th></h1>
            <th><h1>Gender</th></h1>
            <th><h1>Roll no:</th></h1>
            <th><h1>Chest no:</th></h1>
            <th><h1>First Event</th></h1>
            <th><h1>Second Event</th></h1>
            <th><h1>Third Event</th></h1>
        </tr>
    </div>
    </thead>
    <tbody>
        @foreach ($registers as $register)
            <div class="container">
            <tr>
                <td>{{ $register->name }}</td>
                <td>{{ $register->batch }}</td>
                <td>{{ $register->gender }}</td>
                <td>{{ $register->roll_no }}</td>
                <td>{{ $register->chest_no }}</td>
                <td>{{ $register->event_one }}</td>
                <td>{{ $register->event_two }}</td>
                <td>{{ $register->event_three }}</td>
            </tr>
        </div>
        @endforeach
    </tbody>
</table>
</div>
</body>
<script type="text/javascript">
    $('table').dataTable();
</script>
