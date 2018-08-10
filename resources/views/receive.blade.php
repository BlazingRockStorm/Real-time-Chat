<!doctype html>
<html>
    <body>
        <div class="containter">
            <div class="row">
                <div id="message"></div>
            </div>
        </div>
    </body>
</html>

<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/socket.io.js')}}"></script>
<script>
    $( document ).ready(function() {
        var socket = io.connect('http://127.0.0.1:8890');
        console.log('connected..');
        socket.on('message', function(data) {
            $('#message').append("<p>" + data + "</p>");
        });
    });
</script>










