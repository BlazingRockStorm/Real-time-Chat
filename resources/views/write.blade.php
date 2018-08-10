<!doctype html>
<html>
    <body>
        <div class="containter">
            <div class="row">
                <form action="send" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="message" id="message">
                    <input type="submit" value="send">
                </form>
            </div>
        </div>
    </body>
</html>

<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
<script>
    $( document ).ready(function() {
        $('#message').focus();
    });
</script>




