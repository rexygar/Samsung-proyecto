<form action="{{ $url }}" method="POST" id="form">
    <input type="hidden" name="token_ws" id="token_ws" value="{{ $token }}">
</form>

<script>
    document.getElementById('form').submit();
</script>