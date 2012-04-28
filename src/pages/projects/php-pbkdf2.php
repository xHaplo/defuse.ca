<h1>PBKDF2 For PHP</h1>
<p>PBKDF2 (Password Based Key Derivation Function) for PHP. The following code is public domain, feel free to use it for any purpose. The code complies with test vectors at <a href="https://www.ietf.org/rfc/rfc6070.txt">https://www.ietf.org/rfc/rfc6070.txt</a>.</p>

<div class="code" >
    <?php
        require_once('libs/HtmlEscape.php');
        $code = file_get_contents("source/pbkdf2.php");
        echo HtmlEscape::escapeText($code, true, 4);
    ?>
</div>
