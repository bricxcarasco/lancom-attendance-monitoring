</body>

<script>
    $(function() {
        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
        });
    });

    document.querySelector('.logout-user-link').addEventListener('click', (event) => {
        document.getElementById('logout-user-form').submit();
    });
</script>

</html>