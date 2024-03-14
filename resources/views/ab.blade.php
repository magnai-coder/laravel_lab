    <html>
    <body>
    <h1>Таслалаар харуулах</h1>
    <p>A тоо: {{ $value1 }}</p>
    <p>B тоо: {{ $value2 }}</p> 
    <p id="result"></p>
    <script>
        var value1=parseInt("{{$value1}}");
        var value2=parseInt("{{$value2}}");
        if(value1 <value2){
            var count = 0;
            var numbers = [];
            for(var i = value1; i <= value2; i++){
                if(i % 2 !== 0 && i % 3 !== 0){
                numbers[count] = i;
                count++;
            }
            }
            var result ="";
            for( var i = 0; i<count; i++){
                result +=numbers[i] + " ";    
            }
            document.getElementById('result').innerHTML = result;
        }else{
            document.getElementById('result').innerHTML = "A too B toogoos baga baina";
        }
    </script>
    </body>
    </html>
